<?php
require "../models/AmisModel.php";
use model\AmisModel;

$ami = new AmisModel();
if(isset($_POST['add'])){
    extract($_POST);
    if(!empty($firstname) && !empty($lastname)){
        $test = $ami->create_fake_friend($firstname, $lastname);
        if($test){
            $success = "Enregistrement effectué";
        }else{
            $error = "echec d'enregistrement";
        }
    }else{
        $error = "Tous les champs sont obligatoires";
    }
}
include "./views/create.php";