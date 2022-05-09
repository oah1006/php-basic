<?php

class FirstClass {
    // Properties
    const Example = "You can't change this!";

    // Methods
    public static function getExample() {
        echo self::Example;
    }

}

$a = FirstClass::getExample();
echo $a;


class SecondClass extends FirstClass {
    // Properties
    public static $staticProperty = "A static property!";

    // Methods
    public static function anotherGetData() {
        echo parent::Example;
        echo "<br/>";
        echo parent::getExample();
        echo "<br/>";
        echo self::$staticProperty;
    }

}

$b = SecondClass::anotherGetData();
echo $b;


?>