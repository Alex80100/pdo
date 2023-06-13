<?php

class Appointment
{

    private int $id;
    private string $dateAppointment;
    private string $timeAppointment;
    private int $idPatients;

    // Constructeur de la class Appointment
    // public function construct($id,$dateHour,$idPatient)
    // {
    //     $this->setId($id);
    //     $this->setDateHour($dateHour);
    //     $this->setIdPatients($idPatient);
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

    // 'SET' ET 'GET' DE dateHour
    public function setDateAppointment(string $dateAppointment): void
    {
        $this->dateAppointment = $dateAppointment;
    }


    public function getDateHour(): string
    {
        return $this->dateAppointment;
    }

        // 'SET' ET 'GET' DE dateHour
        public function setTimeAppointment(string $timeAppointment): void
        {
            $this->timeAppointment = $timeAppointment;
        }
    
    
        public function getTime(): string
        {
            return $this->timeAppointment;
        }

    // 'SET' ET 'GET' DE idPatients
    public function setIdPatients(int $idPatients): void
    {
        $this->idPatients = $idPatients;
    }

    public function getIdPatients(): int
    {
        return $this->idPatients;
    }

    /**
     * Permet d'ajouter un rendez-vous en BDD
     * @return [type]
     */
    public function add(){
        $pdo = connect();
        $sqlQuery = 'INSERT INTO `appointments` (dateHour, idPatients)
        VALUES (:dateAppointment, :idPatients);';
        $sth = $pdo->prepare($sqlQuery);
        $sth->bindValue(':dateAppointment',$this->dateAppointment);
        $sth->bindValue(':idPatients',$this->idPatients);
        $sth->execute();
    }

    /**
     * @return array
     * Retourne tout les rendez-vous présent dans la BDD 
     */

    public static function getAll() : array
    {
        $pdo = connect();
        $sqlQuery = 'SELECT appointments.dateHour,
        appointments.id AS idAppointments, 
        patients.lastname, 
        patients.firstname
        FROM `appointments`
        INNER JOIN `patients`
        ON appointments.idPatients=patients.id;';
        $sth = $pdo->query($sqlQuery);
        $appointmentsList = $sth->fetchAll();
        return $appointmentsList;
    }

    /**
     * @param int $id
     * Retourne un rendez-vous d'un patient 
     * @return [type]
     */

    public static function get(int $id) : mixed
    {
        $pdo = connect();
        $sqlQuery = 'SELECT appointments.dateHour,
        appointments.id,
        patients.lastname, 
        patients.firstname
        FROM `appointments`
        INNER JOIN `patients`
        ON `appointments`.`idPatients`=`patients`.`id`
        WHERE `appointments`.`id` = :id ;';
        $sth = $pdo->prepare($sqlQuery);
        $sth->bindValue('id',$id, PDO::PARAM_INT);
        $sth->execute();
        $appointment = $sth->fetch();
        return $appointment;
        }

        /**
         * Permet de modifier le rendez-vous d'un patient 
         * @return [type]
         */

        public function modify() : mixed
        {
            $pdo = connect();
            $sqlQuery = 'UPDATE appointments
            SET appointments.dateHour = :dateHour,
            appointments.idPatients = :idPatients
            WHERE appointments.id = :id;';
            $sth = $pdo->prepare($sqlQuery);
            $sth->bindValue(':id',$this->id, PDO::PARAM_INT);
            $sth->bindValue(':dateHour',$this->dateAppointment);
            $sth->bindValue(':idPatients',$this->idPatients);
            $sth->execute();
            $appointment = $sth->fetch();
            return $appointment;

}
}