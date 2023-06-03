<?php 

require_once __DIR__. '/../models/Patient.php';
$patient = Patient::profilDisplay($patient->id);

include __DIR__ . '/../views/templates/header.php';
include __DIR__. '/../views/patients/profilPatient.php';
include __DIR__ . '/../views/templates/footer.php';
