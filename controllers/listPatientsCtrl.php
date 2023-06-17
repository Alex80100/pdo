<?php 

require_once __DIR__. '/../models/Patient.php';

// Supression d'un patient et de ses rdv
$id = intval(filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT));
if ($id != 0) {
    
    $deletePatient = Patient::delete($id);
    
    if ($deletePatient) {
        $messageDelete = 'La suppression du patient a été réussie !';
    } 
}

// Recherche d'un patient 
    $search = filter_input(INPUT_POST,'search',FILTER_SANITIZE_SPECIAL_CHARS);

$displayPatients = Patient::getAll($search);

// Pagination 
$limit = 10; // Nombre limite d'affichage par page
$compteur = 0; 


include __DIR__. '/../views/templates/header.php';
include __DIR__. '/../views/patients/listPatients.php';
include __DIR__. '/../views/templates/footer.php';