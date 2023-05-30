<div class="container div-form">
    <div class="row">
        <div class="d-flex justify-content-center">
            <h1>Formulaire d'inscription</h1>
        </div>
        <form method="POST" enctype="multipart/form-data" autocomplete="on" novalidate>
            <div class="mb-3">
                <label for="lastname" class="form-label">Nom de Famille : </label>
                <input type="text" 
                class="form-control" 
                name="lastname"
                required 
                pattern=<?php echo $regex['regexName'] ?>
                >
            </div>
            <div class="mb-3">
                <label for="firstname" class="form-label">Prénom : </label>
                <input type="text"
                class="form-control" 
                name ="firstname"
                required 
                pattern=<?php echo $regex['regexName'] ?>
                >
            </div>
            <div class="mb-3">
                <label for="birthdate" class="form-label">Date de Naissance : </label>
                <input type="date" 
                class="form-control" 
                name="birthdate" 
                required 
                >
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Téléphone : </label>
                <input type="text" 
                class="form-control" 
                name="phone"
                required 
                >
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email : </label>
                <input type="text" 
                class="form-control" 
                name="email"
                required 
                pattern= <?= $regex['regexPhone'] ?>>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>