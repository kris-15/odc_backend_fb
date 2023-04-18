<?php
namespace model;
class AmisModel extends Model{
    
    public function create_fake_friend($firstname, $lastname, $picture=null){
        $query = $this->get_pdo()->prepare("INSERT INTO amis value (null, ?, ?, ?)");
        $data = $query->execute([$firstname, $lastname, $picture]);
        if($data){
            return true;
        }
        return false;
    }
    public function get_fake_friends(){
        $query = $this->get_pdo()->query("SELECT * FROM amis");
        $data = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $data;
    }
}