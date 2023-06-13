<div class="container emp-profile">
    <form method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <img src="/public/assets/img/iconPatient.png" alt="photo patient" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                    <h5>
                        <?= $patient->getLastname() . ' ' . $patient->getFirstname() ?> <!-- // -->
                    </h5>
                    <h6>
                        <?= 'Patient n° ' . $patient->getId() ?> <!-- // -->
                    </h6>
                    <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-2">
                <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Modifier Profil" />
            </div>
        </div>
        <div class="row">
            <div class=" d-flex justify-content-center">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Nom</label>
                            </div>
                            <div class="col-md-6">
                                <p><?= $patient->getLastname() ?></p> <!-- // -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Prénom</label>
                            </div>
                            <div class="col-md-6">
                                <p><?= $patient->getFirstname() ?></p> <!-- // -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Mail</label>
                            </div>
                            <div class="col-md-6">
                                <p><?= $patient->getMail() ?></p> <!-- // -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Téléphone</label>
                            </div>
                            <div class="col-md-6">
                                <p><?= $patient->getPhone() ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <?php foreach ($appointments as $appointment) { ?>
                                    <label>Rendez-vous </label>
                                    <p><?= $appointment->dateHour ?></p>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>