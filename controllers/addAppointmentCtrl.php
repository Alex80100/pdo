<?php



require_once __DIR__. '/../models/regex.php';
require_once __DIR__. '/../models/Patient.php';
require_once __DIR__. '/../models/Appointment.php';

$arrayPatient = Patient::patientsDisplay();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $date = trim(filter_input(INPUT_POST,'date',FILTER_SANITIZE_SPECIAL_CHARS));

    if (empty($date)) {
        $error['date'] = "Date de rendez-vous obligatoire !";
    } else {
        // Condition pour verifier si la regex est respectée 
        $isOk = filter_var($date, FILTER_VALIDATE_REGEXP, ['options' => ['regexp' => '/' . $regex['regexBirthdate'] . '/']]);
        if (!$isOk) {
            $error["date"] = "La date entrée n'est pas valide!";
        }
    }

    $time = trim(filter_input(INPUT_POST,'time',FILTER_SANITIZE_SPECIAL_CHARS));

    if (empty($time)) {
        $error['time'] = 'L\'heure est obligatoire';
    } else {
        $isOk = filter_var($time, FILTER_VALIDATE_REGEXP, ['options' => ['regexp' => '/' . $regex['regexTime'] . '/']]);
        if(!$isOk){
            $error["time"] = 'L\'heure saisie n\'est pas valide';
        }
        //$time = $_POST['time'];
        //$minTime = '09:00';
        //$maxTime = '18:30';
    
        //if ($time < $minTime || $time > $maxTime) {
        //$error['time'] = "Heure invalide. Veuillez sélectionner une heure entre 09:00 et 18:30.";
        //}

        $patient = $_POST['patient'];
        $patient = trim(filter_input(INPUT_POST,'patient',FILTER_SANITIZE_NUMBER_INT));
        if (empty($patient)) {
            $error['patient'] = 'Vous devez selectionner un patient !';
        } else {
            $isOk = filter_var($patient, FILTER_VALIDATE_REGEXP, ['options' => ['regexp' => '/' . $regex['regexName'] . '/']]);
        }
        
        $toto = ($date .' '. $time);

    if (empty($error)) {
        $appointment = new Appointment();
        $appointment->setDateAppointment($toto);
        $appointment->setIdPatients($patient);
        $appointment->add();
    }
}}
include __DIR__ . '/../views/templates/header.php';
include __DIR__. '/../views/patients/addAppointment.php';
include __DIR__ . '/../views/templates/footer.php';