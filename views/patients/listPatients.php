<div class="container">
    <div class="d-flex justify-content-center">
        <h1>Liste des clients</h1>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nom de Famille</th>
                <th>Prénom</th>
                <th>Date de Naissance</th>
                <th>Phone</th>
                <th>Mail</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($displayPatients as $displayPatient) { ?>
                <tr>
                    <th> <?= $displayPatient->lastname ?> </th>
                    <th> <?= $displayPatient->firstname ?> </th>
                    <th> <?= $displayPatient->birthdate ?> </th>
                    <th> <?= $displayPatient->phone ?> </th>
                    <th> <?= $displayPatient->mail ?> </th>
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