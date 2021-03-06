<?php 
    $name = $email = $password = $website = $comments = $gender = '';
    $nameErr = $emailErr = $passwordErr = $websiteErr = $genderErr = '';
    
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
          $nameErr = "Name is required";
        } else {
          $name = check_data($_POST["name"]);
          // check if name only contains letters and whitespace
          if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
          }
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = check_data($_POST['email']);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Email is invalid";
            }
        }

        if (empty($_POST['password'])) {
            $passwordErr = "Password is required";
        } else {
            $password = check_data($password);
            if (preg_match('/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{8,}$/', $password)) {
                $passwordErr = "Invalid password";
            }
        }

        if (empty($_POST["website"])) {
            $websiteErr = "Website is required";
        } else {
            $website = check_data($_POST['website']);
            if (!filter_var($website, FILTER_VALIDATE_URL)) {
                $websiteErr = "Invalid is website";
            }
        }

        if (empty($_POST["comments"])) {
            $comments = "";
        } else {
            $comments = check_data($_POST['comments']);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = check_data($_POST['gender']);
        }
    }
    
    
    
    
    function check_data($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    } 
?>