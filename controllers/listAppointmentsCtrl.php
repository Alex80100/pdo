<?php 

require_once __DIR__. '/../models/Patient.php';
require_once __DIR__. '/../models/Appointment.php';


$appointmentList = Appointment::getAll();

$patientList = Patient::patientsDisplay();


include __DIR__. '/../views/templates/header.php';
include __DIR__. '/../views/patients/listAppointment.php';
include __DIR__. '/../views/templates/footer.php';