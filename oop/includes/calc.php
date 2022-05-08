<?php
declare(strict_types = 1);
include_once 'autoloader.php';

$oper = $_POST['oper'];
$number1 = $_POST['number1'];
$number2 = $_POST['number2'];

$calc = new Calc($oper, (int)$number1, (int)$number2);

try {
    echo $calc->calculator();
} catch (TypeError $e) {
    echo "Error!: " . $e->getMessage();
}


?>