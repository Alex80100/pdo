<?php 

require_once __DIR__. '/../models/Patient.php';


$displayPatients = Patient::patientsDisplay();


include __DIR__. '/../views/templates/header.php';
include __DIR__. '/../views/patients/listPatients.php';
include __DIR__. '/../views/templates/footer.php';