<?php

if(isset($_SERVER['REQUEST_URI']))
{
    $uri = explode("/phpprocedural/index.php/", $_SERVER['REQUEST_URI']);
    if($uri[1] == '') {
        $page = 'accueil';
    } else {
        $page = $uri[1];
    }
}