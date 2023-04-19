<?php 
    include "apps/header.php";
?>
<div class="container text-center">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="my-2"><img src="https://z-m-static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg" alt="" width="112" class="fs-1"></div>
            <?php if(!empty($_SESSION['error'])): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= $_SESSION['error'] ; session_destroy(); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif ?>
            <form action="?controller=user&action=register" method="post" enctype="multipart/form-data">
                <div class="row my-2">
                    <div class="col-md-6">
                        <input type="text" class="form-control bg-light" name="lastname" placeholder="Entrez votre Nom" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $_POST['lastname']??""?>">   
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control bg-light" name="firstname" placeholder="Entrez Prenom" id="exampleInputPassword1" value="<?= $_POST['firstname']??""?>">
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-md-6">
                        <input type="date" class="form-control bg-light" name="birthdate" placeholder="Entrez votre date de nais" id="birthDate">   
                    </div>
                    <div class="col-md-6">
                        <input type="email" class="form-control bg-light" name="mail" placeholder="Votre Adresse e-mail" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $_POST['mail']??""?>">
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-md-6">
                        <input type="password" class="form-control bg-light" name="password" placeholder="Créez votre Mot de passe" id="password">   
                    </div>
                    <div class="col-md-6">
                        <input type="password" class="form-control bg-light" name="cfpassword" placeholder="Confirmez votre Mot de passe" id="cfpassword">
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-md-2">
                        <label for="" class="form-label d-flex align-item-center">Photo Profil</label>
                    </div>
                    <div class="col-md-10">
                        <input type="file" name="picture" class="form-control" placeholder="Photo de couverture" id="exampleInputPassword1">
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary text-white fw-bold" name="register">Confirmer</button>
                    
                </div>
                    
                    <div class="row my-2">
                        <div class="col-md-8 offset-md-2 ">
                            <hr class="">
                            <a href="?controller=user&action=loginPage" class="btn btn-light">Se connecter</a>
                        </div>
                    </div>
                </form>
        </div>
    </div>
</div>
