<?php
if($_SERVER['REQUEST_METHOD'] === "POST"){
    foreach ($users as $key => $value) {

        if($value['email'] == $_POST['email']) {
            $post_password = md5($_POST["password"] . $value['salt']);

            if($post_password == $value["password"]) {

                validUser($value['nom'], $value['email']);

                header("Location:/phpprocedural/index.php/");
            }
        }
    }
}
?>