<?php

require_once 'config/contents.php';
require_once 'config/users.php';

if(!isset($_SESSION)){
    session_start();
}

$error = [];

$protected_links = ['membre'];

if(isset($_SERVER['REQUEST_URI']))
{
    $uri = explode("/phpprocedural/index.php/", $_SERVER['REQUEST_URI']);

    if($uri[1] == '') {
        $page = 'accueil';
    } elseif(in_array($uri[1], $protected_links)) {
        if (!isset($_SESSION['is_connected']) || $_SESSION['is_connected'] != true) {
            $page = 'accueil';
            $error['restricted'] = "Vous devez être connecté pour voir cette page";
        } else {
            $page = $uri[1];
        }
    } else {
        $page = $uri[1];
    }
}

function connectUser($nom, $email)
{
    $_SESSION['nom'] = $nom;
    $_SESSION['email'] = $email;
    $_SESSION['is_connected'] = true;

    header("Location:/phpprocedural/index.php/");

}

function checkUser($users, array $data)
{
    foreach ($users as $key => $value) {
        if($value['email'] == $_POST['email']) {
            $post_password = md5($_POST["password"] . $value['salt']);

            if($post_password == $value["password"]) {
                connectUser($value['nom'], $value['email']);
            } else {
               $error['mdp'] = "Le mot de passe est incorrecte";
            }
        } else {
            $error['mail'] = "L'adresse mail ne correspond a aucune adresse de notre base";
        }
    }
}

function addUser(array $users, array $data)
{
    var_dump($users);
    array_push($users, $data);

    connectUser($data['nom'], $data['email']);
}
