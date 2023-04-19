<?php

namespace models;
require "Model.php";

class UsersModel extends Model{
    public function loginUser($email, $password){
        $sql = "SELECT * FROM users WHERE email = ? AND mdp = ?";
        $param = [$email, $password];
        $data = $this->prepareQuery($sql, $param, true, true);
        return $data;
    }
    public function registerUser($lastname, $firstname, $birthdate, $email, $password, $picture=null){
        $sql = "INSERT INTO users value (null, ?, ?,?, ?, ?, ?)";
        $param = [$lastname, $firstname, $birthdate, $email, $password, $picture];
        $query = $this->prepareQuery($sql, $param);
        if($query){
            return true;
        }
        return false;
    }
    public function all(){
        $sql = "SELECT * FROM users";
        $param = [];
        $data = null;
        $query = $this->prepareQuery($sql, $param, true);
        $data = $query;
        return $data;
    }
}