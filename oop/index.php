<?php

require_once 'includes/person.php';
require_once 'includes/newclass.php';


// $person1 = new Person("Hao", "Red", 20);
// echo $person1->getName();

//-----------------------------------------------
// Static Properties And Methods
$person1 = new Person("Hao", "Red", 20);
echo $person1->getDA();

// $object = new NewClass();
// unset($object);
// echo $object->getProperty();

?>
