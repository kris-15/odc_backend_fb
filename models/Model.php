<?php
namespace model;
class Model{
    public function get_pdo(){
        $pdo = new  \PDO("mysql:host=localhost;dbname=facebook", "root", "");
        return $pdo;
    }
    
} 