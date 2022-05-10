<?php

// class FirstClass {
//     // Properties
//     const Example = "You can't change this!";

//     // Methods
//     public static function getExample() {
//         echo self::Example;
//     }

// }

// $a = FirstClass::getExample();
// echo $a;


// class SecondClass extends FirstClass {
//     // Properties
//     public static $staticProperty = "A static property!";

//     // Methods
//     public static function anotherGetData() {
//         echo parent::Example;
//         echo "<br/>";
//         echo parent::getExample();
//         echo "<br/>";
//         echo self::$staticProperty;
//     }

// }

// $b = SecondClass::anotherGetData();
// echo $b;

class Test extends Dbh {
    public function getUsers() {
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->query($sql);
        while($row = $stmt->fetch()) {
            echo $row['first_name'] . '<br/>';
        }
    }   

    public function getUsersStmt($firstname, $lastname) {
        $sql = "SELECT * FROM users WHERE first_name = ? AND last_name = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname, $lastname]);
        $names = $stmt->fetchAll();

        foreach ($names as $name) {
            echo $name['dob'] . '<br/>';
        }
    }

    public function setUsersStmt($firstname, $lastname, $dob) {
        $sql = "INSERT INTO users (first_name,  last_name, dob) VALUES (?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname, $lastname, $dob]);

    }
}


?>