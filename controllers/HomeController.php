<?php
    class HomeController{
        public function index($page){
            if(isset($_SESSION['logged'])){
                include('views/'.$page.'.php');
            }
        }
    }
    
    ?>