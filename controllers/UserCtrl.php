<?php
session_start();
$_SESSION['error']=null;
require "../models/UsersModel.php";
use model\UsersModel;

$user = new UsersModel();
if(isset($_POST['login'])){
    extract($_POST);
    if(!empty($mail) && !empty($password)){
        $login = $user->login($mail, $password);
        if($login){
            $_SESSION['user'] = $login['id'];
            header("Location: ../views/show.php");
        }else{
            $_SESSION['error'] = "Adresse e-mail ou mot de passe incorrect";
            header("Location: ../views/login.php");
        }
    }else{
        $_SESSION['error'] = "Tous les champs sont obligatoires";
        header("Location: ../views/login.php");
    }
}