<?php

if(isset($_POST['submit'])) {

    // get data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Instantiate RegisterController Class
    include "../classes/DB.php";
    include "../classes/Login.php";
    include "../classes/LoginController.php";

    $login = new LoginController($username, $password);

    // Running error handlers and user register
    $login->loginUser();


    // Go to back to front page
    header("Location: ../index.php?error=none");


}
