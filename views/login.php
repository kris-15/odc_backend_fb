<?php
include 'apps/header.php'
?>

<div class="container text-center">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="my-2"><img src="https://z-m-static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg" alt="" width="112"></div>
            <?php if(!empty($_SESSION['error'])):?>
                <div class="alert alert-danger text-center"><?= $_SESSION['error']; session_destroy()?></div>
            <?php endif ?>
            <form action="?controller=user&action=login" method="post">
                <div class="row my-2">
                    <div class="col-md-8 offset-md-2">
                        <input type="email" class="form-control bg-light" name="mail" placeholder="Adresse e-mail" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-md-8 offset-md-2">
                        <input type="password" class="form-control bg-light" name="password" placeholder="Mot de passe" id="exampleInputPassword1">
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-md-8 offset-md-2">
                        <input type="submit" class="form-control bg-primary text-white fw-bold" name="login" id="exampleInputPassword1" value="Se connecter">
                    </div>
                </div>
                
                <div class="row my-2">
                    
                    <div class="col-md-8 offset-md-2 ">
                        <hr class="">
                        <a href="?controller=user&action=registerPage" class="btn btn-light">Créer un nouveau compte</a>
            
                </div>
            </form>
            
        </div>
    </div>
</div>