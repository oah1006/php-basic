<?php

declare(strict_types = 1);

include_once 'includes/autoloader.php';



// $person1 = new person\Person();

// try {
//     $person1->setName("Hao");
//     echo $person1->getName();
// } catch(TypeError $e) {
//     echo "Error: " . $e->getMessage();
// }

// $person1 = new person\Person("Hao", 22);
// echo $person1->getPerson();

// echo "<br/>";

// $house1 = new House("Vinhome", "red");
// echo $house1->getHouse();


// $person1 = new Person("Hao", "Red", 20);
// echo $person1->getName();

// echo Person::drinkingAge;

//-----------------------------------------------
// Static Properties And Methods
// $person1 = new Person("Hao", "Red", 20);
// Person::plus();

// $person2 = new Person("Hao", "Red", 20);
// Person::plus();

// $person3 = new Person("Hao", "Red", 20);
// Person::plus();

// echo Person::$count;


// $animal1 = new Animal("cho", "blue", 20);
// Animal::plus();

// $animal2 = new Animal("cho", "blue", 20);
// Animal::plus();








// $object = new NewClass();
// unset($object);
// echo $object->getProperty();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="includes/calc.php" method="post">
        <p>My own calculator</p>
        <input type="number" name="number1" placeholder="First number">

        <select name="oper">
            <option value="add">Addition</option>
            <option value="sub">Subtraction</option>
            <option value="div">division</option>
            <option value="mul">multiplication</option>
        </select>

        <input type="number" name="number2" placeholder="Second number">

        <button type="submit" name="submit">Calculate</button>
    </form>
</body>
</html>
