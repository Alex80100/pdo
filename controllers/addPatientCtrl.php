<?php

require_once __DIR__. '/../models/regex.php';
require_once __DIR__. '/../models/Patient.php';


// Verification des saisies dans le formulaire
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Nettoyage des données saisie dans l'input LASTNAME
    $lastname = trim(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS));
    if (empty($lastname)) {
        $error['lastname'] = "Nom de Famille obligatoire";
    } else {
        // Condition pour verifier si la regex est respectée 
        if (!preg_match('/' . $regex['regexName'] . '/', $lastname)) {
            $error['lastname'] = "Le nom n'est pas valide !";
        }
    }

    // Nettoyage des données saisie dans l'input FIRSTNAME
    $firstname = trim(filter_input(INPUT_POST, 'firstname',FILTER_SANITIZE_SPECIAL_CHARS));

    if (empty($firstname)) {
        $error['firstname'] = "Prénom obligatoire !";
    } else {
        // Condition pour verifier si la regex est respectée 
        if (!preg_match('/'. $regex['regexName'] .'/', $firstname )) {
            $error['firstname'] = "Le prénom n'est pas valide !";
        }
    }
    
    // Nettoyage des données saisie dans l'input DATE DE NAISSANCE
    $birthdate = trim(filter_input(INPUT_POST,'birthdate',FILTER_SANITIZE_SPECIAL_CHARS));

    if (empty($birthdate)) {
        $error['birthdate'] = "Date de naissance obligatoire !";
    } else {
        // Condition pour verifier si la regex est respectée 
        $isOk = filter_var($birthdate, FILTER_VALIDATE_REGEXP, ['options' => ['regexp' => '/' . $regex['regexBirthdate'] . '/']]);
        if (!$isOk) {
            $error["birthdate"] = "La date entrée n'est pas valide!";
        } else {
            $birthdateObj = new DateTime($birthdate);
            // Calcul de l'age de l'utilisateur (année courante - année de naissance)
            $age = date('Y') - $birthdateObj->format('Y');

            if ($age > 120 || $age < 0) {
                $error["birthdate"] = "Votre age n'est pas conforme!";
            }
        }
    }
    // Nettoyage des données saisie dans l'input PHONE
    $phone = trim(filter_input(INPUT_POST,'phone',FILTER_SANITIZE_NUMBER_INT));
    if (empty($phone)) {
        $error['phone'] = "Numéro de téléphone obligatoire !";
    } else {
        // Condition pour verifier si les données saisies sont respectées 
        if (!preg_match('/'. $regex['regexPhone'] .'/', $phone ))
        $error['phone'] = "Le numéro saisie n'est pas valide !";
    }
    

        // Nettoyage des données saisie dans l'input EMAIL
    $email = trim(filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL));
    if (empty($email)) {
        $error['email'] = "L\'email n'est pas valide !" ;
    } else { 
        // Condition pour verifier si les données saisies sont au bon format 
        $testEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
        if (!$testEmail) {
            $error["email"] = "L'adresse email n'est pas au bon format !";
        }

        
    }

// Si il n'y a pas d'erreur dans la saisie du formulaire 
// On envoie les informations dans la class Patient
    if (empty($error)) {
        $patient = new Patient();
        $patient->setLastname($lastname);
        $patient->setFirstname($firstname);
        $patient->setBirthdate($birthdate);
        $patient->setPhone($phone);
        $patient->setMail($email);
        $patientExist = $patient->patientExist();
        
        if ($patientExist == TRUE) {
            echo '<small class="green"> Le patient a été ajouté à la base de donnée </small>';
            $patient->add();

        } else {
            echo '<small class="red"> Le patient est déja en base de donnée </small>';
        }
    }


}

include __DIR__ . '/../views/templates/header.php';
include __DIR__ . '/../views/patients/addPatient.php';
include __DIR__ . '/../views/templates/footer.php';
