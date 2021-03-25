<?php

include_once 'controller/connect.php';

class Type extends Connect{

    public function findAll(){
        $sql ="SELECT `id-type`, `name`, `link-img` ,`description`
            FROM `tea-types`";
        $query = $this->pdo->prepare($sql);
        $query->execute();
        
        return $query->fetchALL(PDO::FETCH_ASSOC);
    }

}