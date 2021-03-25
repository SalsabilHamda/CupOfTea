
<?php

include_once 'controller/connect.php';

class User extends Connect{

        public function findOne($mail){
            $sql="SELECT `id_users`, `mail`, `psw`, `pseudo`, `adresse`, `numero`, `birthDate`, `role` 
            FROM `users` 
            WHERE `mail`=:mail";
            $query = $this->pdo->prepare($sql);
            $query->execute([':mail'=>$mail]);
            
            return $query->fetch(PDO::FETCH_ASSOC);
        }

        public function addOne($psw,$mail){
            $sql= " INSERT INTO 
                    `users`
                    (`psw`, `mail`) 
                VALUES  
                    (?,?)";
        $q = $this->pdo->prepare($sql);
        $q->execute([ password_hash($psw, PASSWORD_DEFAULT), $mail ]);
        
        
        }
        
        public function verifyAddOne(){

            if(!empty(!empty($_POST['psw'])) && !empty($_POST['mail'])){
        
                $message = [];
                           
                // adresse e-mail 
                // if(!filter_var($_POST['Mail'], FILTER_VALIDATE_EMAIL)){
                //     $message[] = ' ce n\'est pas une adresse e-mail  ';
                // }
    
    
                $user = $this->findOne($_POST['mail']); 
    
                if($user === false && count($message) === 0){
                
                    $password =  $_POST['psw'];
                
                    $mail = $_POST['mail'];
                    
                    
                    $this->addOne( $password, $mail );
    
                                
                    return ["Bravo l'enregistrement à bien été éfféctué "];
                   
                
                } 
                 
                return $message;
            }
            else{
        
            
                return ["veuillez remplir les champs"];
                    
               }
        }
        public function login(){

           $login = $this->findOne($_POST["mail"]);

           if($login == false || password_verify($_POST['psw'],$login['psw']) == false){

            return ["Mot de passe ou pseudo incorrect "];
           }        
           else{
               $_SESSION['mail']=htmlspecialchars($_POST["mail"]);
               $_SESSION['isConnected']=true;

            return ["Bienvenue !"];
           }

        }
        public function logout(){
            session_destroy();
            header('Location: index.php?action=accueil');
            exit;
        }

        public function changeProfil($id){

            if(array_key_exists('pseudo',$_POST)){

                if($_POST['pseudo']===false||strlen($_POST['pseudo'])<= 3){
                    return ['Le pseudo n\'est pas dans le bon format'];
                }else{

                
                    $sql="UPDATE `users` 
                        SET `pseudo`=?
                        WHERE `id_users`=?";

                    $q = $this->pdo->prepare($sql);
                    $q->execute([ $_POST['pseudo'],$id ]);
                    
                    return ['Les changements on été éffectué'];
                }
            }
            if(array_key_exists('adresse',$_POST)){

                if($_POST['adresse']===false||strlen($_POST['adresse'])<= 3){
                    return ['L\'adresse n\'est pas dans le bon format'];
                }else{
                    $sql="UPDATE `users` 
                        SET `adresse`=?
                        WHERE `id_users`=?";

                    $q = $this->pdo->prepare($sql);
                    $q->execute([ $_POST['adresse'],$id ]);
                    
                    return ['Les changements on été éffectué'];
                }
            }
            if(array_key_exists('numero',$_POST)){

                if($_POST['numero']===false||strlen($_POST['numero'])<= 9){
                    return ['Le numero n\'est pas dans le bon format'];
                }else{
                    $sql="UPDATE `users` 
                    SET `numero`=?
                    WHERE `id_users`=?";

                    $q = $this->pdo->prepare($sql);
                    $q->execute([ $_POST['numero'],$id ]);
                
                    return ['Les changements on été éffectué'];
                }
                
            }
            if(array_key_exists('date',$_POST)){

                if($_POST['date']===false||strlen($_POST['date'])<= 3){
                    return ['Le date n\'est pas dans le bon format'];
                }else{
                    $sql="UPDATE `users` 
                    SET `birthDate`=?
                    WHERE `id_users`=?";

                    $q = $this->pdo->prepare($sql);
                    $q->execute([ $_POST['date'],$id ]);
                
                    return ['Les changements on été éffectué'];
                }
                
            }
            
            
        }
        public function verifyChangeProfil(){

            
        }
}