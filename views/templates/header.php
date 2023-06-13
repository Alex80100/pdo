<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/assets/css/style.css">
    <link rel="stylesheet" href="/public/assets/css/profilPatient.css">
    <title>PDO</title>
</head>

<body class="vh-100">

    <header>
        <div class="row">
            <nav class="navbar bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">PDO HOPITAL</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu Hopital</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="/index.php/?action=add">Ajouter un patient </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="/index.php/?action=exercice2">Liste des Patients</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link active" href="/index.php/?action=exercice3">Exercice 3 : Profil Patient</a>
                                </li> -->
                                <!-- <li class="nav-item">
                                    <a class="nav-link active" href="/index.php/?action=exercice4">Exercice 4 : Modifier </a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link active" href="/index.php/?action=exercice5">Rendez-vous </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="/index.php/?action=exercice6">Liste des Rendez-vous </a>
                                </li>
                            </ul>
                        </div>
                    </div>
            </nav>
        </div>
        </div>
    </header>
    <main>