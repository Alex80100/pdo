<?php 

require_once __DIR__. '/../models/Patient.php';
require_once __DIR__. '/../models/Appointment.php';

$id = intval(filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT));
$appointmentDelete = Appointment::delete($id);
if ($appointmentDelete == TRUE) {
    $messageDelete = 'La suppression du rendez-vous a été réussie !';
}
$appointmentList = Appointment::getAll();


include __DIR__. '/../views/templates/header.php';
include __DIR__. '/../views/patients/listAppointment.php';
include __DIR__. '/../views/templates/footer.php';