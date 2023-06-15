<?php 

require_once __DIR__. '/../models/Patient.php';

$id = intval(filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT));

$deletePatient = Patient::delete($id);

if ($deletePatient) {
    $messageDelete = 'La suppression du patient a été réussie !';
} 


$displayPatients = Patient::patientsDisplay();


include __DIR__. '/../views/templates/header.php';
include __DIR__. '/../views/patients/listPatients.php';
include __DIR__. '/../views/templates/footer.php';