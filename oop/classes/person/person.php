<?php
namespace person;

// class Person {
//     // Properties
//     private $name;
//     private $eyeColor;
//     private $age;

//     public static $count = 3;

//     public static function plus() {
//         return self::$count;
//     }

//     public function __construct($name, $eyeColor, $age) {
//         $this->name = $name;
//         $this->eyeColor = $eyeColor;
//         $this->age = $age;
//     }

//     // Methods
//     public function setName($name) {
//         $this->name = $name;
//     }

//     public function getDA() {
//         return self::$drinkingAge;
//     }

//     public static function setDrinkingAge($newDA) {
//         self::$drinkingAge = $newDA;
//     }
// }


// class Animal extends Person {
//     public static $count = 2;
// }



// class Person {
//     public $name;
//     public $age;

//     public function __construct($name, $age) {
//         $this->name = $name;
//         $this->age = $age;
//     }

//     public function getPerson() {
//         $person = $this->name . " is " . $this->age . " years old!";
//         return $person;
//     }
// }

class Person {
    public $name;

    public function setName(String $name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}



?>