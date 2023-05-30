<?php
require_once __DIR__ . '/../models/regex.php';

// Nettoyage des données saisie dans l'input lastname
$lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS);

// Verification des saisies dans le formulaire
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (empty($lastname)) {
        $error['lastname'] = 'Nom de Famille obligatoire';
    } else {
        // Condition pour verifier si la regex est respectée 
        if (!preg_match('/' . $regex['regexLastname'] . '/', $lastname)) {
            $error['lastname'] = 'Le nom n\'est pas valide';
        }
    }

    $firstname = filter_input(INPUT_POST, 'firstname',FILTER_SANITIZE_SPECIAL_CHARS);

    if (empty($firstname)) {
        $error['firstname'] = 'Prénom obligatoire !';
    } else {
        if (!preg_match('/'. $regex['regexName'] .'/', $firstname )) {
            $error['firstname'] = 'Le prénom n\'est pas valide';
        }
    }
    
    
}

include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/patients/adPatient.php';
include __DIR__ . '/../views/templates/footer.php';
