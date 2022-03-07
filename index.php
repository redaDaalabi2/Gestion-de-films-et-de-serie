<?php
    require_once './autoload.php';
    require_once './controllers/HomeController.php';
    $home = new HomeController();
    $pages = ['Accueil', 'login', 'register', 'home', 'addpost', 'updatepost', 'deletepost', 'logout'];
    if(isset($_SESSION['logged']) && $_SESSION['logged'] === true){
        if(isset($_GET['page'])){
            if(in_array($_GET['page'],$pages)){
                $page = $_GET['page'];
                $home->index($page);
            }else{
                include('views/includes/404.php');
            }
        }else{
            $home->index('home');
        }
    }else if(isset($_GET['page']) && $_GET['page'] === 'register'){
        $home->index('register');
    }else if(isset($_GET['page']) && $_GET['page'] === 'login'){
        $home->index('login');
    }
    else{
        $home->index('Accueil');
    }
?>
