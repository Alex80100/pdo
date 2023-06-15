<div class="container">
    <div class="d-flex justify-content-center text-light">
        <h1 class="mb-10">Liste des rendez-vous</h1>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <td><p class="txtTr"> Date & Heure </p></td>
                <td><p class="txtTr"> Patients </p></td>
                <td><p class="txtTr"> Modification </p></td>
                <td><p class="txtTr"> Suppression </p></td>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($appointmentList as $appointment) {?>
                <tr>
                    <td> <?= '<p class="txtTr">'. $appointment->dateHour .'</p>' ?> </td>
                    <td> <?= '<p class="txtTr">'. $appointment->lastname. ' ' .$appointment->firstname. '</p>' ?> </td>
                    <td> <?= '<p class="txtTr">'?><a  class="linkModify" href="/controllers/modifyAppointmentCtrl.php?id=<?=$appointment->idAppointments ?>">MODIFIER</a></p></th>
                    <td> <?= '<p class="txtTr">'?><a  class="linkDelete" href="/controllers/modifyAppointmentCtrl.php?id=<?=$appointment->idAppointments ?>">SUPPRIMER</a></p></th>
                </tr>
            <?php } ?>

        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary border-0 bg-success col-6"><a class="text-decoration-none text-light" href="/index.php/?action=exercice5">Ajouter un Rendez-vous</a></button>
    </div>
</div>