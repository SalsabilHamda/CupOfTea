<?php

include_once 'controller/connect.php';

class Product extends Connect{

    public function findAll(){
        
        $sql =" SELECT `id-product`, `name`, `price`, `link-img`, `description`, `type` 
        FROM `product` ";
        $query = $this->pdo->prepare($sql);
        $query->execute();
        
        return $query->fetchALL(PDO::FETCH_ASSOC);
    }
    public function  findOne($id){
        $sql =" SELECT `id-product`, `name`, `price`, `link-img`, `description`, `type` 
        FROM `product` 
        WHERE `id-product` = :id";
        $query = $this->pdo->prepare($sql);
        $query->execute([':id'=>$id]);
        
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public function  findType($type){
        $sql =" SELECT `id-product`, `name`, `price`, `link-img`, `description`, `type` 
        FROM `product` 
        WHERE `type` = :type";
        $query = $this->pdo->prepare($sql);
        $query->execute([':type'=>$type]);
        
        return $query->fetchALL(PDO::FETCH_ASSOC);
    }

    public function addOne(){
        
    }
}