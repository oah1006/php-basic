<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <?php require 'check-data.php'; ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?> ">  
        Name: <input type="text" name="name">
        <span class="error"><?php echo $nameErr; ?></span>
        <br/><br/>
        Email: <input type="email" name="email">
        <br/><br/>
        Password: <input type="password" name="password">
        <br/><br/>
        Website: <input type="text" name="website">
        <br/><br/>
        Comments: <textarea name="comments" rows="5" cols="50"></textarea>
        <br/><br/>
        Gender:
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="other">Other
        <br/><br/>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        echo "<h2>Your information: </h2>";
        echo $name;
        echo '<br/>';
        echo $email;
    ?>
</body>
</html>