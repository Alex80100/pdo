<div class="container">
    <div class="d-flex justify-content-center text-light">
        <h1 class="mb-10">Liste des clients</h1>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <td><p class="txtTr"> Nom de Famille </p></td>
                <td><p class="txtTr"> Prénom </p></td>
                <td><p class="txtTr"> Date de Naissance </p></td>
                <td><p class="txtTr"> Phone </p></td>
                <td><p class="txtTr"> Mail </p></td>
                <td><p class="txtTr"> Modification </p></td>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($displayPatients as $displayPatient) { ?>
                <tr>
                <td> <?= '<p>'?><a class="link" href="/controllers/profilPatientCtrl.php?id=<?=$displayPatient->id ?>"><?=$displayPatient->lastname ?></a></p></th>
                    <td> <?= '<p class="txtTr">'. $displayPatient->firstname .'</p>' ?> </td>
                    <td> <?= '<p class="txtTr">'. $displayPatient->birthdate .'</p>' ?> </td>
                    <td> <?= '<p>'?><a class="link" href="mailto:<?=$displayPatient->phone ?>"><?=$displayPatient->phone ?></a></p></th>
                    <td> <?= '<p>'?><a class="link" href="mailto:<?=$displayPatient->mail ?>"><?=$displayPatient->mail ?></a></p></th>
                    <td> <?= '<p">'?><a class="linkModify" href="/controllers/modifyCtrl.php?id=<?=$displayPatient->id ?>">Modifier</a></p></th>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary border-0 bg-success col-6 "><a class="text-decoration-none text-light" href="/index.php/?action=add">Créer un patient</a></button>
    </div>
    
</div>