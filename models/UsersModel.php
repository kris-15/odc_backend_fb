<?php

namespace models;
require "Model.php";

class UsersModel extends Model{
    public function login($email, $password){
        $query = $this->get_pdo()->prepare("SELECT * FROM users WHERE email = ? AND mdp = ?");
        $query->execute([$email, $password]);
        $data = $query->fetch(\PDO::FETCH_ASSOC);
        return $data;
    }
}