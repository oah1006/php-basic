<?php

require 'connect.php';

if(isset($_GET['id'])) {
    
    $id = $_GET['id'];

    $result = $db->prepare("SELECT first_name, last_name FROM people WHERE id = ?");
    $result->bind_param("i", $id);
    $result->execute();

    $result->bind_result($first_name, $last_name);

    while($result->fetch()) {
        echo $first_name, ' ',$last_name;
    }

}
    
?>