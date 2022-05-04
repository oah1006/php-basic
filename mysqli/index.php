<?php

require 'connect.php';
require 'security.php';

$sql = "
SELECT people.first_name, countries.name as country 
FROM people
LEFT JOIN countries ON people.country = countries.id
";

$results = $db->query($sql);

if ($results->num_rows) {
    while($people = $results->fetch_object()) {
        echo "{$people->first_name} ({$people->country})<br>";
    }
} else {
    echo "No results";
}