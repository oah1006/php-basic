<?php

class Person {
    // Properties
    private $name;
    private $eyeColor;
    private $age;

    public static $count = 3;

    public static function plus() {
        return self::$count;
    }

    public function __construct($name, $eyeColor, $age) {
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;
    }

    // Methods
    public function setName($name) {
        $this->name = $name;
    }

    public function getDA() {
        return self::$drinkingAge;
    }

    public static function setDrinkingAge($newDA) {
        self::$drinkingAge = $newDA;
    }
}


class Animal extends Person {
    public static $count = 2;
}



?>