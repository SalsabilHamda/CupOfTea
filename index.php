<?php

session_start();
include 'modele/productModele.php';
include 'modele/userModele.php';
include 'modele/typesModele.php';
include 'controller/CupOfTeaController.php';

$product=new Product();
$type =new Type();
$user=new User();
$functions=new Functions();



if(array_key_exists('action',$_GET)){

    switch($_GET['action']){
        case 'accueil':
            $path="views/accueilView.php";
        break;
        case 'listing':
            $path="views/listing-productView.php";
        break;
        case 'about':
            $path="views/aboutView.php";
        break;
        case 'sign':
            $path="views/signView.php";
        break;
        case 'product':
            
            $path="views/productView.php";
        break;
        case 'addUser':
            $message = $user->verifyAddOne();
            $path="views/signView.php";
        break;
        case 'login':
            if(array_key_exists('mail',$_POST)){
                $message = $user->login();

                $path="views/connectView.php";
            }else{
                $path="views/connectView.php";
            }
        break;
        case 'logout':
            $message = $user->logout();
            $path="views/accueilView.php";
        break;
        case 'user':
            $userPath=$user->findOne($_SESSION['mail']);
            if(array_key_exists('pseudo',$_POST)||array_key_exists('adresse',$_POST)||array_key_exists('numero',$_POST)||array_key_exists('date',$_POST)){
                
                $message = $user->changeProfil($userPath['id_users']);
                header("Location: index.php?action=user");
                exit;
            }
            
            $path="views/profilView.php";
        break;
        case 'shop':
            $path="views/shopView.php";
        break;
        default:
            $path="views/accueilView.php";
        break;
    }
}




include 'templates/template.php';