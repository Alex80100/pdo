<?php

class Appointment
{

    private int $_id;
    private string $_dateHour;
    private int $_idPatients;

    // Constructeur de la class Appointment
    public function __construct($id,$dateHour,$idPatient)
    {
        $this->setId($id);
        $this->setDateHour($dateHour);
        $this->setIdPatients($idPatient);
    }
    // 'SET' ET 'GET' DE l'ID
    public function setId(int $id): void
    {
        $this->_id = $id;
    }


    public function getId(): int
    {
        return $this->_id;
    }

    // 'SET' ET 'GET' DE dateHour
    public function setDateHour(string $dateHour): void
    {
        $this->_dateHour = $dateHour;
    }


    public function getDateHour(): string
    {
        return $this->_dateHour;
    }

    // 'SET' ET 'GET' DE idPatients
    public function setIdPatients(string $idPatients): void
    {
        $this->_idPatients = $idPatients;
    }

    public function getIdPatients(): string
    {
        return $this->_idPatients;
    }
}
