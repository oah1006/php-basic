<?php

$name = $email = $password = $website = $comments = $gender = '';
$nameErr = $emailErr = $passwordErr = $websiteErr = $genderErr = '';


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(empty($_POST['name'])) {
        $nameErr = "Name is required";
    } else {
        $name = check_data($_POST['name']);
        if (!preg_match("/^[a-zA-Z ]*$", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }
}




function check_data($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>