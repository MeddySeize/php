<?php

if(!isset($_SESSION)){
    session_start();
}

if(isset($_SERVER['REQUEST_URI']))
{
    $uri = explode("/phpprocedural/index.php/", $_SERVER['REQUEST_URI']);
    if($uri[1] == '') {
        $page = 'accueil';
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