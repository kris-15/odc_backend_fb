<?php include "../apps/header.php"?>
<div class="container mt-2">
    <div class="row">
        <div class="col-md-3 bg-light"></div>
        <div class="col-md-9">
            <h3 class="text-center mb-3">Ajouter une personne</h3>
            <?php if(isset($sucess)): ?>
                <div class="alert alert-success text-center"><?= $sucess ?></div>
            <?php endif ?>
            <?php if(isset($error)): ?>
                <div class="alert alert-danger text-center"><?= $error ?></div>
            <?php endif ?>
            <form action="../controllers/Amis.php" method="post" enctype="multipart/form-data" >
                <div class="row m-2">
                    <div class="col-md-4">
                        <label for="exampleInputEmail1" class="form-label">Nom</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="lastname" placeholder="Le nom du fake ami" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>   
                </div>
                <div class="row m-2">
                    <div class="col-md-4">
                        <label for="exampleInputPassword1" class="form-label">Prenom</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="firstname" placeholder="Le prenom du fake ami" id="exampleInputPassword1">
                    </div>   
                </div>
                <div class="row m-2">
                    <div class="col-md-4">
                        <label for="exampleInputPassword1" class="form-label">Photo</label>
                    </div>
                    <div class="col-md-8">
                        <input type="file" name="picture" class="form-control" placeholder="Photo de couverture" id="exampleInputPassword1">
                    </div>   
                </div>
                <div class="d-flex justify-content-end ">
                    <button type="submit" name="add" class="btn btn-primary mx-3">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
</div>
