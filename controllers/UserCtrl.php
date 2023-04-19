<?php
namespace controllers;
class UserCtrl extends Controller{
    protected $modelName = "\\models\\UsersModel";
    public function loginPage(){
        require "views/login.php";
    }
    public function registerPage(){
        require "views/create.php";
    }
    public function index(){
        require "views/login.php";
    }
    public function register(){
        if(isset($_POST['register'])){
            extract($_POST);
            if(!empty($firstname) && !empty($lastname) && !empty($birthdate) && !empty($mail) && !empty($password) && !empty($cfpassword)){
            
                if($password == $cfpassword){
                    if(!empty($_FILES['picture']['name'])) {
                        $tmp = $_FILES['picture']['tmp_name'];
                        $extension = pathinfo($_FILES['picture']['name'], PATHINFO_EXTENSION);
                        $nom_image = date('Ymdhis').".".$extension;
                        $chemin = "photo/".$nom_image;
                        move_uploaded_file($tmp, $chemin);
                    }
                    else {
                        $nom_image = null;
                    }
                    $test = $this->model->registerUser($firstname, $lastname, $birthdate, $mail, $password, $nom_image);
                    
                    if($test){
                        $_SESSION['success'] = "Enregistrement effectué";
                        header("Location:index.php?controller=user&action=show");
                    }else{
                        $_SESSION['error'] = "echec d'enregistrement";
                        header("Location:index.php?controller=user&action=registerPage");
                    }
                }else{
                    $_SESSION['error'] = "Les mots de passe ne correspondent pas";
                    header("Location:index.php?controller=user&action=registerPage");
                }
                
            }else{
                $_SESSION['error'] = "Tous les champs sont obligatoires"; 
                header("Location:index.php?controller=user&action=registerPage");  
            }   
                
        }
    }
    public function login(){
        if(isset($_POST['login'])){
            extract($_POST);
            if(!empty($mail) && !empty($password)){
                $login = $this->model->loginUser($mail, $password);
                if($login){
                    $_SESSION['user'] = $login['id'];
                    header("Location:index.php?controller=user&action=show");
                }else{
                    $_SESSION['error'] = "Adresse e-mail ou mot de passe incorrect";
                    header("Location:index.php?controller=user&action=loginPage");
                }
            }else{
                $_SESSION['error'] = "Tous les champs sont obligatoires";
                header("Location:index.php?controller=user&action=loginPage");
            }
        }
    }
    
    public function show(){
        $friends = $this->model->all();
        require "views/show.php";
    }
    public function logout(){

    }
}

