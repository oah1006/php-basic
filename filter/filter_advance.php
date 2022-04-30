<?php

$int = 122;
$min = 1;
$max = 100;

if (filter_var($int, FILTER_VALIDATE_INT, array("option" => array('min' => $min, 'max' => $max))) === false) {
    echo "Variable value is within range " . $min . " to " . $max;
} else {
    echo "Variable value is not within range " . $min . " to " . $max;
}

?>