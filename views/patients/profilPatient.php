<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

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
                    Nom et prénom du patient <!-- // -->
                    </h5>
                    <h6>
                        Patient <!-- // -->
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
                <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile" />
            </div>
        </div>
        <div class="row">
            <div class=" d-flex justify-content-center">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>User Id</label> <!-- // -->
                            </div>
                            <div class="col-md-6">
                                 <p>ID</p>  <!-- // -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Nom</label>
                            </div>
                            <div class="col-md-6">
                                <p>Nom</p> <!-- // -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Prénom</label>
                            </div>
                            <div class="col-md-6">
                                <p>prénom</p> <!-- // -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Mail</label>
                            </div>
                            <div class="col-md-6">
                                <p>kshitighelani@gmail.com</p> <!-- // -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Téléphone</label>
                            </div>
                            <div class="col-md-6">
                                <p>06 00 00 00 00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>