<?php

require_once __DIR__ . '/../helpers/connect.php';

class Patient
{
    private int $_id;
    private string $_lastname;
    private string $_firstname;
    private string $_birthdate;
    private string $_phone;
    private string $_mail;

    // Contructeur de la Class Patient
    // public function __construct(int $id, string $lastname, string $firstname, string $birthdate, string $phone, string $mail)
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
        $this->_id = $id;
    }


    public function getId(): int
    {
        return $this->_id;
    }

    // 'SET' ET 'GET' DE LASTNAME
    public function setLastname(string $lastname): void
    {
        $this->_lastname = $lastname;
    }


    public function getLastname(): string
    {
        return $this->_lastname;
    }

    // 'SET' ET 'GET' DE FIRSTNAME

    public function setFirstname(string $firstname): void
    {
        $this->_firstname = $firstname;
    }


    public function getFirstname(): string
    {
        return $this->_firstname;
    }

    // 'SET' ET 'GET' DE BIRTHDATE

    public function setBirthdate(string $birthdate): void
    {
        $this->_birthdate = $birthdate;
    }


    public function getBirthdate(): string
    {
        return $this->_birthdate;
    }

    // 'SET' ET 'GET' DE PHONE

    public function setPhone(string $phone): void
    {
        $this->_phone = $phone;
    }


    public function getPhone(): string
    {
        return $this->_phone;
    }

    // 'SET' ET 'GET' DE MAIL

    public function setMail(string $mail): void
    {
        $this->_mail = $mail;
    }


    public function getMail(): string
    {
        return $this->_mail;
    }
// Ajouter le patient a la base de données. 

    public function add (){
        $pdo = connect();
        $sqlQuery = 'INSERT INTO `patients` (lastname, firstname, birthdate, phone, mail)
        VALUES (:lastname,:firstname,:birthdate,:phone,:mail);';
        $sth = $pdo->prepare($sqlQuery);
        $sth->bindValue(':lastname',$this->_lastname);
        $sth->bindValue(':firstname',$this->_firstname);
        $sth->bindValue(':birthdate',$this->_birthdate);
        $sth->bindValue(':phone',$this->_phone);
        $sth->bindValue(':mail',$this->_mail);
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
        $sth->bindValue(':mail', $this->_mail);

        $sth->execute();
        $exist = $sth->fetchAll();
        $exist=count($exist);
        if ($exist == 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

// message de confirmation d'ajout de patient en BDD 

    public static function patientDisplay(){
        $pdo = connect();
        $sqlQuery = 'SELECT * FROM `patients`;';
        $sth = $pdo->query($sqlQuery);
        $displayPatients = $sth->fetchAll();
        return $displayPatients;
    }
}
