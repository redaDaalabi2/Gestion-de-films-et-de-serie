<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="layout/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/Gestion-de-films-et-de-serie/views/layout/css/main.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
    <script src="https://kit.fontawesome.com/d1aca8f508.js" crossorigin="anonymous"></script>
    <title>cine master</title> 
</head>
<body>
    <div class="navbar navbar-expand-md bg-dark navbar-dark text-white fixed-top">
        <div class="container">
            <a href="#" class="navbar-brand bold">CINE <span style="color: red;">MASTER</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="callapse navbar-collapse" id="mainmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item titre"><a href="<?php BASE_URL; ?>Accueil" class="nav-link cntr-a">Home</a></li>
                    <li class="nav-item titre"><a href="<?php BASE_URL; ?>register" class="nav-link cntr-a">Blog</a></li>
                    <li class="nav-item titre"><a href="<?php BASE_URL; ?>Accueil" class="nav-link cntr-a">About us</a></li>
                    <li class="nav-item titre"><a href="<?php BASE_URL; ?>Accueil" class="nav-link cntr-a">Contact</a></li>
                </ul> 
                <div class="navbar-nav ms-auto">
                    <a href="<?php echo BASE_URL;?>register">
                        <button class="btn btn-danger rounded-pill btn-lg register">Register</button>
                    </a>
                    <a href="<?php echo BASE_URL;?>login">
                        <button class="btn btn-danger rounded-pill btn-lg login">Login</button>
                    </a>     
                </div>
            </div>
        </div>
    </div>