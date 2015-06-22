<?php

if(!isset($_SESSION)){
    session_start();
}

$protected_links = ['membre'];

if(isset($_SERVER['REQUEST_URI']))
{
    $uri = explode("/phpprocedural/index.php/", $_SERVER['REQUEST_URI']);

    if($uri[1] == '') {
        $page = 'accueil';
    } elseif(in_array($uri[1], $protected_links)) {
        if (!isset($_SESSION['is_connected']) || $_SESSION['is_connected'] != true) {
            $page = 'accueil';
            $error[] = "Vous devez être connecté pour voir cette page";
        } else {
            $page = $uri[1];
        }
    } else {
        $page = $uri[1];
    }
}

function validUser($nom, $email)
{
    $_SESSION['nom'] = $nom;
    $_SESSION['email'] = $email;
    $_SESSION['is_connected'] = true;
}