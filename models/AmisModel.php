<?php
namespace model;
class AmisModel{
    public $db = new \PDO("mysql:host=localhost;dbname=facebook", "root", "");
    public function create_fake_friend($firstname, $lastname, $picture=null){
        $query = $this->db->prepare("INSERT INTO amis value (null, ?, ?, ?)");
        $data = $query->execute([$firstname, $lastname, $picture]);
        if($data){
            return true;
        }
        return false;
    }
    public function get_fake_friends(){
        $query = $this->db->query("");
    }
}