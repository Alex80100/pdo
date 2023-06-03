<?php 

    $action = $_GET['action'] ?? '/';

    $ctrl = match ($action) {
        '/' => '/controllers/addPatientCtrl.php',
        'add' => '/controllers/addPatientCtrl.php',
        'exercice2' => '/controllers/listPatientsCtrl.php',
        'exercice3' => '/controllers/profilPatientCtrl.php',
        // 'exercice4' => '',
        // 'exercice5' => '',
        // 'exercice6' => '',
        // 'exercice7' => '',
        default => '/controllers/404Ctrl.php'
    };

    require_once(__DIR__ . '/' . $ctrl);

