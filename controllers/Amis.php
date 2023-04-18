<?php
session_start();
require "../models/AmisModel.php";
use model\AmisModel;

$ami = new AmisModel();
if(isset($_POST['add'])){
    extract($_POST);
    if(!empty($firstname) && !empty($lastname)){
        if(!empty($_FILES['picture']['name'])) {
            $tmp = $_FILES['picture']['tmp_name'];
            $extension = pathinfo($_FILES['picture']['name'], PATHINFO_EXTENSION);
            $nom_image = date('Ymdhis').".".$extension;
            $chemin = "C:/academy/".$nom_image;
            move_uploaded_file($tmp, $chemin);
        }
        else {
            $nom_image = null;
        }
        $test = $ami->create_fake_friend($firstname, $lastname, $nom_image);
        
        if($test){
            $_SESSION['success'] = "Enregistrement effectué";
        }else{
            $_SESSION['error'] = "echec d'enregistrement";
        }
    }else{
        $_SESSION['error'] = "Tous les champs sont obligatoires";
        
    }
    header("Location: ../views/create.php");
}