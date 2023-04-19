<?php
namespace models;

use PDO;

class Model{
    public function get_pdo(){
        $pdo = new  PDO("mysql:host=localhost;dbname=facebook", "root", "");
        return $pdo;
    }
    /**
     * @param string $sql La requete sql 
     * @param array $param Les paramètres à exécuter dans un tableau 
     * @param bool $fetch Détermine le type de requete fetch par défaut Non 
     * @param bool $one Détermine si on veut chercher un seul élément par defaut Non 
     */
    public function prepareQuery($sql, array $params, $fetch = false, $one = false ){
        $query = $this->get_pdo()->prepare($sql);
        $reponse = $query->execute($params);
        if($fetch){
            if($one){
                $data = $query->fetch(PDO::FETCH_ASSOC);
            }else{
                $data = $query->fetchAll(PDO::FETCH_ASSOC);
            }
            if($data){
                $reponse = $data;
            }
        }
        return $reponse;
    }
    
} 