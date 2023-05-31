<div class="container div-form">
    <div class="row">
        <div class="d-flex justify-content-center">
            <h1>Formulaire d'inscription</h1>
        </div>
        <form method="POST" enctype="multipart/form-data" autocomplete="on">
            <!-- ========== LASTNAME ========== -->
            <div class="mb-3">
                <label for="lastname" class="form-label">Nom de Famille : </label>
                <input type="text" 
                class="form-control" 
                name="lastname"
                required 
                pattern=<?php echo $regex['regexName'] ?>
                placeholder="Nom de Famille">
                <small class="form-text error text-danger"><?= $error['lastname'] ?? '' ?></small>
            </div>
            <!-- ========== FIRSTNAME ========== -->
            <div class="mb-3">
                <label for="firstname" class="form-label">Prénom : </label>
                <input type="text"
                class="form-control" 
                name ="firstname"
                required 
                pattern= "<?php echo $regex['regexName'] ?>"
                placeholder="Prénom">
                <small class="form-text error text-danger"><?= $error['firstname'] ?? '' ?></small>
            </div>
            <!-- ========== BIRTHDATE ========== -->
            <div class="mb-3">
                <label for="birthdate" class="form-label">Date de Naissance : </label>
                <input type="date" 
                class="form-control" 
                name="birthdate" 
                min="1890-01-01"
                max="<?php date('Y-m-d')?>"
                required>
                <small class="form-text error text-danger"><?= $error['birthdate'] ?? '' ?></small>

            </div>
            <!-- ========== PHONE ========== -->
            <div class="mb-3">
                <label for="phone" class="form-label">Téléphone : </label>
                <input type="tel" 
                class="form-control" 
                name="phone"
                pattern= "<?= $regex['regexPhone'] ?>"
                placeholder="Numéro de téléphone">
                <small class="form-text error text-danger"><?= $error['phone'] ?? '' ?></small>
            </div>
            <!-- ========== EMAIL ========== -->
            <div class="mb-3">
                <label for="email" class="form-label">Email : </label>
                <input type="text" 
                class="form-control" 
                name="email"
                required
                placeholder="Adresse Email">
                <small class="form-text error text-danger"><?= $error['email'] ?? '' ?></small>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary border-0 bg-success col-6">ENVOYER</button>
            </div>
        </form>
    </div>
</div>