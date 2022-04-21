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
        Name: <input type="text" name="name" value="<?php echo $name; ?>">
        <span class="error"><?php echo $nameErr; ?></span>
        <br/><br/>
        Email: <input type="email" name="email" value="<?php echo $email; ?>">
        <span class="error"><?php echo $emailErr; ?></span>
        <br/><br/>
        Password: <input type="password" name="password" value="<?php echo $password; ?>">
        <span class="error"><?php echo $passwordErr; ?></span>
        <br/><br/>
        Website: <input type="text" name="website" value="<?php echo $website; ?>">
        <span class="error"><?php echo $websiteErr; ?></span>
        <br/><br/>
        Comments: <textarea name="comments" rows="5" cols="50"><?php echo $comments; ?></textarea>
        <br/><br/>
        Gender:
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo 'checked'; ?> value="male">Male
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo 'checked'; ?> value="female">Female
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "other") echo 'checked'; ?> value="other">Other
        <span class="error"><?php echo $genderErr; ?></span>
        <br/><br/>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
        echo "<h2>Your information: </h2>";
        echo $name;
        echo '<br/>';
        echo $email;
        echo '<br/>';
        echo $password;
        echo "<br/>";
        echo $website;
        echo "<br/>";
        echo $comments;
        echo "<br/>";
        echo $gender;
    ?>
</body>
</html>