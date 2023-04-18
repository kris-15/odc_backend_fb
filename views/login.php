<?php
session_start();

include '../apps/header.php'
?>
<div class="container mt-2">
    <div class="row">
        <div class="col-md-3 bg-light"></div>
        <div class="col-md-9">
            <h3 class="text-center">Connexion</h3>
            <?php if(!empty($_SESSION['error'])):?>
                <div class="alert alert-danger text-center"><?= $_SESSION['error']; session_destroy()?></div>
            <?php endif ?>
            <form action="../controllers/UserCtrl.php" method="post">
                <div class="row m-2">
                    <div class="col-md-4">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                    </div>
                    <div class="col-md-8">
                        <input type="email" class="form-control" name="mail" placeholder="Adresse e-mail" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>   
                </div>
                <div class="row m-2">
                    <div class="col-md-4">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                    </div>
                    <div class="col-md-8">
                        <input type="password" class="form-control" name="password" placeholder="Mot de passe" id="exampleInputPassword1">
                    </div>   
                </div>
                <div class="d-flex justify-content-end ">
                    <button type="submit" name="login" class="btn btn-primary mx-3">Se connecter</button>
                </div>
            </form>
        </div>
    </div>
</div>