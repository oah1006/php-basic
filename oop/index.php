<?php

require_once 'includes/person.php';
require_once 'includes/newclass.php';

// $person1 = new Person("Hao", "Tommy", 20);
// echo $person1->getName();

$object = new NewClass();
unset($object);
echo $object->getProperty();

?>
