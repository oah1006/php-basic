<?php

if(isset($_POST['submit'])) {

    // get data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $passwordConfirmation = $_POST['password_confirmation'];
    $email = $_POST['email'];

    // Instantiate RegisterController Class
    include "../classes/DB.php";
    include "../classes/Register.php";
    include "../classes/RegisterController.php";

    $register = new RegisterController($username, $password, $passwordConfirmation, $email);

    // Running error handlers and user register
    $register->registerUser();


    // Go to back to front page
    header("Location: ../index.php?error=none");


}









?>