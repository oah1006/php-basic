<?php

require_once 'includes/person.php';

$person1 = new Person();
$person1->setName('Hao Tommy');
echo $person1->name;

echo "<br/>";

$person2 = new Person();
$person2->setName('Hao Gucci');
echo $person2->name;


?>
