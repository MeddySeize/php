<?php
if($_SERVER['REQUEST_METHOD'] === "POST"){
    checkUser($users, $_POST);
}
?>