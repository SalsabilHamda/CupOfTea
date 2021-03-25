<?php

class Functions{

    public function isConnected(){
        
        if(array_key_exists('mail',$_SESSION)){
            return true;
        }else{
            return false;
        }
    }
}