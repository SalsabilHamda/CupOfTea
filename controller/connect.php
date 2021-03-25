<?php

class Connect{
    
    public $pdo;
    
    public function __construct(){
        
        $this->pdo=$this->link();
    }
    
    public function link(){
       
        $host = "localhost";
        // ici le nom de ma base de donnée 
        $dbName     = 'cupoftea';
        // ici ce qui se trouve dans home-wecode mes identifiant 
        $user       = 'root';
        $password   = '';
        
        
        // objet qui appartient a php et qui me permet ma connexion 
        $pdo = new PDO("mysql:host=$host;dbname=$dbName", $user,$password);
        // $pdo = new PDO("mysql:host=$host;dbname=$dbName", $user,$password); <- chez vous 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Paramétrage de la liaison PHP <-> MySQL, les données sont encodées en UTF-8.
       $pdo->exec('SET NAMES UTF8');
        return $pdo;
    }
}