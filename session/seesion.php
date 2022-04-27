<?php

// start the session
session_start();
// cookie save server and browser, valid for a period of time
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // $_SESSION["favcolor"] = "blue";
        // $_SESSION["favanimal"] = "cat";

        // print_r($_SESSION); // check $_SESSION is array();

        // echo "Favorites color is " . $_SESSION["favcolor"] . "<br/>";
        // echo "Favorites animal is " . $_SESSION["favanimal"] . "<br/>"

        // session_unset(); // delete all session
        session_destroy(); // destroy all session
        print_r($_SESSION);
    ?>
</body>
</html>