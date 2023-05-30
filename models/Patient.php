<?php

require_once __DIR__ . '/../config/connect.php';

class Patient
{
    private int $_id;
    private string $_lastname;
    private string $_firstname;
    private string $_birthdate;
    private string $_phone;
    private string $_mail;

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

    public function __construct(int $id,string $lastname,string $firstname,string $birthdate,string $phone,string $mail)
    {
        $this->setId($id);
        $this->setlastname($lastname);
        $this->setFirstname($firstname);
        $this->setBirthdate($birthdate);
        $this->setPhone($phone);
        $this->setMail($mail);
    }
}
