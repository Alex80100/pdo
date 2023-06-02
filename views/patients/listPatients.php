<div class="container">
    <div class="d-flex justify-content-center text-light">
        <h1 class="mb-10">Liste des clients</h1>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th><p class="txtTr"> Nom de Famille </p></th>
                <th><p class="txtTr"> Prénom </p></th>
                <th><p class="txtTr"> Date de Naissance </p></th>
                <th><p class="txtTr"> Phone </p></th>
                <th><p class="txtTr"> Mail </p></th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($displayPatients as $displayPatient) { ?>
                <tr>
                    <th> <?= '<p class="txtTr">'. $displayPatient->lastname .'</p>' ?> </th>
                    <th> <?= '<p class="txtTr">'. $displayPatient->firstname .'</p>' ?> </th>
                    <th> <?= '<p class="txtTr">'. $displayPatient->birthdate .'</p>' ?> </th>
                    <th> <?= '<p class="txtTr">'. $displayPatient->phone .'</p>' ?> </th>
                    <th> <?= '<p class="txtTr">'. $displayPatient->mail .'</p>' ?> </th>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary border-0 bg-success col-6"><a href="/index.php/?action=add">Créer un patient</a></button>
    </div>














    <!-- <table class="table table-bordered">
        <thead>
            <tr>
                <th></th>
                <th>Prénom</th>
                <th>Date de Naissance</th>
                <th>Phone</th>
                <th>Mail</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Giraud</td>
                <td>Pierre</td>
                <td>28</td>
                <td>0645454545</td>
                <td>mail@mail.fr</td>
            </tr>
        </tbody>
    </table> -->
</div>