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

    public function add (){
        $pdo = connect();
        $sqlQuery = 'INSERT INTO `patients` (lastname, firstname, birthdate, phone, mail)
        VALUES (:lastname,:firstname,:birthdate,:phone,:mail);';
        $sth = $pdo->prepare($sqlQuery);
        $sth->bindValue(':lastname',$this->lastname);
        $sth->bindValue(':firstname',$this->firstname);
        $sth->bindValue(':birthdate',$this->birthdate);
        $sth->bindValue(':phone',$this->phone);
        $sth->bindValue(':mail',$this->mail);
        $sth->execute();
    }

    // Verifier si un patient est déjà en base avec le mail 
    
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
        $exist=count($exist);
        if ($exist == 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

// Afficher les clients en BDD 

    public static function patientsDisplay(){
        $pdo = connect();
        $sqlQuery = 'SELECT * FROM `patients`;';
        $sth = $pdo->query($sqlQuery);
        $displayPatients = $sth->fetchAll();
        return $displayPatients;
    }

// Afficher un profil client 
    public static function profilDisplay($id){
        $pdo = connect();
        $sqlQuery = 'SELECT `lastname` FROM `patients`
        WHERE id = :id ;';
        $sth = $pdo->prepare($sqlQuery);
        $sth->bindValue(':id',$id);
        $sth->setFetchMode(PDO::FETCH_CLASS,"Patient");
        $sth->execute();
        $displayProfil = $sth->fetch();
        var_dump($displayProfil);
        return $displayProfil;
    }
}
