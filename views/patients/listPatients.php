<div class="container">

    <div class="input-group d-flex justify-content-end">
        <form class="d-flex col-4" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-success" type="submit">Recherche</button>
        </form>
    </div>
    <div class="d-flex justify-content-center text-light">
        <h1 class="mb-10">Liste des patients</h1>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <td>
                    <p class="txtTr"> Nom de Famille </p>
                </td>
                <td>
                    <p class="txtTr"> Prénom </p>
                </td>
                <td>
                    <p class="txtTr"> Date de Naissance </p>
                </td>
                <td>
                    <p class="txtTr"> Phone </p>
                </td>
                <td>
                    <p class="txtTr"> Mail </p>
                </td>
                <td>
                    <p class="txtTr"> Modification </p>
                </td>
                <td>
                    <p class="txtTr"> Supression </p>
                </td>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($displayPatients as $displayPatient) { ?>
                <tr>
                    <td> <?= '<p>' ?><a class="link" href="/controllers/profilPatientCtrl.php?id=<?= $displayPatient->id ?>"><?= $displayPatient->lastname ?></a></p>
                        </th>
                    <td> <?= '<p class="txtTr">' . $displayPatient->firstname . '</p>' ?> </td>
                    <td> <?= '<p class="txtTr">' . $displayPatient->birthdate . '</p>' ?> </td>
                    <td> <?= '<p>' ?><a class="link" href="mailto:<?= $displayPatient->phone ?>"><?= $displayPatient->phone ?></a></p>
                        </th>
                    <td> <?= '<p>' ?><a class="link" href="mailto:<?= $displayPatient->mail ?>"><?= $displayPatient->mail ?></a></p>
                        </th>
                    <td> <?= '<p">' ?><a class="linkModify" href="/controllers/modifyCtrl.php?id=<?= $displayPatient->id ?>">MODIFIER</a></p>
                        </th>
                    <td> <?= '<p class="txtTr">' ?><a class="linkDelete" href="/controllers/listPatientsCtrl.php?id=<?= $displayPatient->id ?>">SUPPRIMER</a></p>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary border-0 bg-success col-6 "><a class="text-decoration-none text-light" href="/index.php/?action=add">Créer un patient</a></button>
    </div>
    <p class="text-center text-warning"><?= $messageDelete ?? '' ?></p>

</div>