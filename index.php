<?php 

// try {
    
    $action = $_GET['action'] ?? '/';


    $ctrl = match ($action) {
        '/' => '/controllers/addPatientCtrl.php',
        'add' => '/controllers/addPatientCtrl.php',
        'exercice2' => '/controllers/listPatientsCtrl.php',
        'exercice3' => '/controllers/profilPatientCtrl.php',
        'exercice4' => '/controllers/modify.php',
        // 'exercice5' => '',
        // 'exercice6' => '',
        // 'exercice7' => '',
        default => '/controllers/404Ctrl.php'
    };

    require_once(__DIR__ . '/' . $ctrl);


// } catch (\Throwable $th) {
//         // echo $th->getMessage();
//         // die;
//         include __DIR__ . '/../views/templates/header.php';
//         include __DIR__. '/../views/templates/error.php';
//         include __DIR__ . '/../views/templates/footer.php';
//         die;
// }

