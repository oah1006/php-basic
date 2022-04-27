<?php

setcookie("age", 18, time() + (86400 * 30)); // Set cookie
// setcookie("age", 18, time() - (86400 * 40)); // Delete cookie

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
        if (!isset($_COOKIE["age"])) {
            echo "Cookie name 'age' not set";
            // echo "Cookie 'age' is deleted";
        } else {
            echo "Cookie name 'age' is set!<br/>";
            echo "Value is " . $_COOKIE["age"];
        }
    ?>
</body>
</html>