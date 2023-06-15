<div class="container div-form">
    <div class="row">
        <div class="d-flex justify-content-center text-primary-emphasis ">
            <h1>Modification rendez-vous</h1>
        </div>
        <form method="POST" autocomplete="on">
            <div class="mb-3">
                <label for="patient">Choisir un patient</label>
                <select name="patient" id="patient">
                    <?php foreach ($patients as $patient) { 
                        // if ($patient->id == $appointment->id) {
                        //     $isSelected = 'selected';
                        // } else {
                        //     $isSelected = '';
                        // } 
                        $isSelected = ($patient->id == $appointment->idPatients) ? 'selected' : '';
                        ?>
                        <option <?= $isSelected ?> value="<?=$patient->id ?>"><?= $patient->lastname. ' ' .$patient->firstname ?></option>
                    <?php } ?>
                    </option>
                </select>
            </div>
            <!-- ========== DATE DU RENDEZ-VOUS ========== -->
            <div class="mb-3">
                <label for="date" class="form-label">Date du rendez-vous : </label>
                <input type="date" 
                class="form-control" 
                name="date" 
                min="<?php date('Y-m-d') ?>"
                value="<?=  date("Y-m-d",strtotime($appointment->dateHour)) ?>"
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
                min="08:00" 
                max="18:30" 
                value="<?=  date("H:i",strtotime($appointment->dateHour)) ?>"
                required>
            </div>
            <small><?= $error['time'] ?? '' ?></small>
            <div class="divContainerBtn d-flex justify-content-center align-items-center">
                <div class="divBtn d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary border-0 bg-success col-5 me-5">MODIFIER</button>
                    <button type="button" class="btn btn-primary border-0 bg-info-emphasis col-5 me-5"><a class="text-decoration-none text-light" href="/index.php/?action=exercice6">Liste des rendez-vous</button>
                </div>
            </div>
        </form>
    </div>
    </div>
</div>