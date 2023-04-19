<?php
include "apps/header.php";
?>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="bg-light row p-2">
                <div class="col-md-6">
                    <img src="https://z-m-static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg" class="" alt="" width="112">
                </div>
                <div class="col-md-3">
                    <a href="?controller=user&action=index" class="btn btn-outline-primary btn-sm">Mes amis</a>
                </div>
                <div class="col-md-3">
                    <a href="?controller=user&action=index" class="btn  btn-outline-primary btn-sm">Ajouter ami</a>
                </div>
            </div>
            <table class="table">
                <tbody>
                    <?php
                        foreach($friends as $friend):
                    ?>
                        <tr>
                            <td>
                                <img src="photo/<?= $friend["photo"] ?>" class="rounded-circle bg-danger" alt="" width="50" height="50">
                            </td>
                            <td>
                                <?= $friend["prenom"] ?> <?= $friend["nom"] ?>
                            </td>
                            <td>
                                <a href="" class="btn btn-primary btn-sm">Ajouter</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            
            
        </div>
    </div>
    
</div>
