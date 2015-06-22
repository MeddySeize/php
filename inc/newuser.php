<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    addUser($users, $_POST);

    // header("Location:/phpprocedural/index.php/");
}
?>
<form action="" method="POST">
    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control">
    </div>
    <div class="form-group">
        <label for="password">Re-Password</label>
        <input type="password" name="password" id="password" class="form-control">
    </div>
    <div class="form-group">
        <input type="submit" name="loginForm" class="btn btn-success">
    </div>
</form>