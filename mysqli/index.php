<?php

require 'connect.php';

if ($update = $db->query("DELETE FROM people WHERE id = 1")) {
    echo $db->affected_rows;
}   


?>