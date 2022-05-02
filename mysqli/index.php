<?php

require 'connect.php';

$result = $db->query("SELECT * FROM people");

if($result) {
    if($result->num_rows) {
        
        var_dump($result->num_rows);
        
        $row = $result->fetch_assoc();

        while($row) {
            echo $row["first_name"], " ", $row["last_name"], "<br>";
        }
        
        echo "<pre>", var_dump($rows), "</pre>";
    }
}


?>