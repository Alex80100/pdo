<div class="container div-form">
    <div class="row">
        <div class="d-flex justify-content-center text-primary-emphasis ">
            <h1>Prise de rendez-vous</h1>
        </div>
        <form method="POST" enctype="multipart/form-data" autocomplete="on">
            <!-- ========== DATE DU RENDEZ-VOUS ========== -->
            <div class="mb-3">
                <label for="date" class="form-label">Date du rendez-vous : </label>
                <input type="date" 
                class="form-control" 
                name="date" 
                min="<?php date('Y-m-d') ?>" 
                max="2030-01-01" 
                required>
            </div>
            <small><?= $error['date'] ?? '' ?></small>
            <!-- ========== HEURE DU RENDEZ-VOUS ========== -->
            <div class="mb-3">
                <label for="time" class="form-label">Heure : </label>
                <input type="time"
                class="form-control" 
                name="time" 
                min="09:00" 
                max="18:30" 
                required>
            </div>
            <small><?= $error['time'] ?? '' ?></small>
            <div class="mb-3">
                <label for="patient">Choisir un patient</label>
                <select name="patient" id="patient">
                    <option value="patient">--Selectionner un patient--</option>
                    <?php foreach ($arrayPatient as $patient) { ?>
                        <option value=<?=$patient->id ?>><?= $patient->lastname. ' ' .$patient->firstname ?></option>
                    <?php } ?>
                    </option>
                </select>
            </div>
            <div class="divContainerBtn d-flex justify-content-center align-items-center">
                <div class="divBtn d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary border-0 bg-success col-5 me-5">ENVOYER</button>
                    <button type="button" class="btn btn-primary border-0 bg-info-emphasis col-5 me-5"><a class="text-decoration-none text-light" href="/index.php/?action=exercice6">Liste des rendez-vous</button>
                </div>
            </div>
        </form>
    </div>
    </div>
</div>