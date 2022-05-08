<?php

require_once 'includes/person.php';
require_once 'includes/newclass.php';


// $person1 = new Person("Hao", "Red", 20);
// echo $person1->getName();

// echo Person::drinkingAge;

//-----------------------------------------------
// Static Properties And Methods
$person1 = new Person("Hao", "Red", 20);
Person::plus();

$person2 = new Person("Hao", "Red", 20);
Person::plus();

$person3 = new Person("Hao", "Red", 20);
Person::plus();

echo Person::$count;


$animal1 = new Animal("cho", "blue", 20);
Animal::plus();

$animal2 = new Animal("cho", "blue", 20);
Animal::plus();








// $object = new NewClass();
// unset($object);
// echo $object->getProperty();

?>
