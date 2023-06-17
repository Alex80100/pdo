<?php

require_once __DIR__ . '/../helpers/connect.php';

class Patient
{
    private int $id;
    private string $lastname;
    private string $firstname;
    private string $birthdate;
    private string $phone;
    private string $mail;

    // Contructeur de la Class Patient
    // public function construct(int $id, string $lastname, string $firstname, string $birthdate, string $phone, string $mail)
    // {
    //     $this->setId($id);
    //     $this->setLastname($lastname);
    //     $this->setFirstname($firstname);
    //     $this->setBirthdate($birthdate);
    //     $this->setPhone($phone);
    //     $this->setMail($mail);
    // }

    // 'SET' ET 'GET' DE l'ID
    public function setId(int $id): void
    {
        $this->id = $id;
    }


    public function getId(): int
    {
        return $this->id;
    }

    // 'SET' ET 'GET' DE LASTNAME
    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }


    public function getLastname(): string
    {
        return $this->lastname;
    }

    // 'SET' ET 'GET' DE FIRSTNAME

    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }


    public function getFirstname(): string
    {
        return $this->firstname;
    }

    // 'SET' ET 'GET' DE BIRTHDATE

    public function setBirthdate(string $birthdate): void
    {
        $this->birthdate = $birthdate;
    }


    public function getBirthdate(): string
    {
        return $this->birthdate;
    }

    // 'SET' ET 'GET' DE PHONE

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }


    public function getPhone(): string
    {
        return $this->phone;
    }

    // 'SET' ET 'GET' DE MAIL

    public function setMail(string $mail): void
    {
        $this->mail = $mail;
    }


    public function getMail(): string
    {
        return $this->mail;
    }
    // Ajouter le patient a la base de données. 

    /**
     * @return [type]
     *  Permet d'ajouter un nouveau patient en BDD
     */
    public function add()
    {
        $pdo = connect();
        $sqlQuery = 'INSERT INTO `patients` (lastname, firstname, birthdate, phone, mail)
        VALUES (:lastname,:firstname,:birthdate,:phone,:mail);';
        $sth = $pdo->prepare($sqlQuery);
        $sth->bindValue(':lastname', $this->lastname);
        $sth->bindValue(':firstname', $this->firstname);
        $sth->bindValue(':birthdate', $this->birthdate);
        $sth->bindValue(':phone', $this->phone);
        $sth->bindValue(':mail', $this->mail);
        $sth->execute();
    }


    /**
     *  Verifie si un patient est déjà en base avec le mail 
     * @return [type]
     */
    public function patientExist()
    {
        $pdo = connect();

        $sqlQuery = 'SELECT `mail`
        FROM `patients`
        WHERE mail = :mail;';

        $sth = $pdo->prepare($sqlQuery);
        $sth->bindValue(':mail', $this->mail);

        $sth->execute();
        $exist = $sth->fetchAll();
        $exist = count($exist);

        if ($exist == 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }


    /**
     *  Affiche tous les clients en BDD,
     *  Recherche dans la BDD,
     *  Affiche la pagination.
     *  @return [type]
     */
    public static function getAll($search = null, $limit = 10, $offset = 0)
    {
        $pdo = connect();
        $sqlQuery = 'SELECT * FROM `patients` ';
        /* Condition pour effectuer la recherche dans la liste de patient */
        if (empty($search)) {
            $sqlQuery .= 'LIMIT :limit OFFSET :offset ;';
        }
        if (!empty($search)) {
            $sqlQuery .= 'WHERE `patients`.`firstname` LIKE :search OR `patients`.`lastname` LIKE :search LIMIT :limit OFFSET :offset;';
        }
// var_dump($sqlQuery);
// die;

        $sth = $pdo->prepare($sqlQuery);
        if (empty($search)) {
            $sth->bindValue(':limit',$limit,PDO::PARAM_INT);
            $sth->bindValue(':offset',$offset,PDO::PARAM_INT);
        }
        if (!empty($search)) {
            $sth->bindValue(':search', '%' .$search. '%');
            $sth->bindValue(':limit',$limit,PDO::PARAM_INT);
            $sth->bindValue(':offset',$offset,PDO::PARAM_INT);
        }
        $sth->execute();
        $displayPatients = $sth->fetchAll();
        return $displayPatients;
    }


    /**
     * @param int $id
     *  Affiche un profil client 
     * @return [type]
     */
    public static function get(int $id)
    {
        $pdo = connect();
        $sqlQuery = 'SELECT `id`, `lastname`, `firstname`, `birthdate`, `phone`, `mail` 
        FROM `patients`
        WHERE id = :id ;';
        $sth = $pdo->prepare($sqlQuery);
        $sth->bindValue(':id', $id, PDO::PARAM_INT);
        $sth->setFetchMode(PDO::FETCH_CLASS, "Patient");
        $sth->execute();
        $displayProfil = $sth->fetch();
        return $displayProfil;
    }

    /**
     *  Permet de modifier le profil d'un patient 
     * @return bool
     */
    public function modify(): bool
    {
        $pdo = connect();
        $sql = 'UPDATE `patients` 
        SET `id` = :id,
        `lastname` = :lastname,
        `firstname` = :firstname, 
        `birthdate` = :birthdate, 
        `phone` = :phone, 
        `mail` = :mail 
        WHERE id = :id;';
        $sth = $pdo->prepare($sql);
        $sth->bindValue(':id', $this->id, PDO::PARAM_INT);
        $sth->bindValue(':lastname', $this->lastname);
        $sth->bindValue(':firstname', $this->firstname);
        $sth->bindValue(':birthdate', $this->birthdate);
        $sth->bindValue(':mail', $this->mail);
        $sth->bindValue(':phone', $this->phone);
        $sth->execute();
        $modifyPatient = $sth->fetch();
        return $modifyPatient;
    }

    /**
     * @param int $id
     *  Permet d'obtenir le ou les rdv d'un patient
     * @return [type]
     */
    public static function getAppointment(int $id): mixed
    {
        $pdo = connect();
        $sqlQuery = 'SELECT `lastname`,`firstname`,`appointments`.`dateHour` 
        FROM `patients` 
        INNER JOIN `appointments` 
        ON `patients`.`id` = `appointments`.`idPatients`        
        WHERE `patients`.`id` = :id;';
        $sth = $pdo->prepare($sqlQuery);
        $sth->bindValue(':id', $id, PDO::PARAM_INT);
        $sth->execute();
        $displayProfil = $sth->fetchAll();
        return $displayProfil;
    }

    /**
     * @param mixed $id
     *  Permet de supprimer un patient et ses rendez-vous. 
     * @return [type]
     */
    public static function delete($id)
    {
        $pdo = connect();
        $sqlQuery = 'DELETE FROM `patients`
        WHERE `patients`.`id` = :id;';
        $sth = $pdo->prepare($sqlQuery);
        $sth->bindValue(':id', $id, PDO::PARAM_INT);
        return $sth->execute();
    }
}
