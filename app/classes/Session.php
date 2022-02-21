<?php
    class Session{
        static public function set($type, $message){
            setcookie($type,$message,time() + 2,"/");
            // /toute l'un de projet
        }
    }
?>