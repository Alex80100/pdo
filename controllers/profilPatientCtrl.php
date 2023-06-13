<?php 

require_once __DIR__. '/../models/Patient.php';
require_once __DIR__. '/../models/Appointment.php';

$id = intval(filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT));
// $id = $_GET['id'];
$patient = Patient::get($id);
$appointments = Patient::getAppointment($id);
// $appointment = Appointment::getAll();

include __DIR__ . '/../views/templates/header.php';
include __DIR__. '/../views/patients/profilPatient.php';
include __DIR__ . '/../views/templates/footer.php';
