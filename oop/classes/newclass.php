<?php

class NewClass {

    // Properties and Methods goes here
    public $data = "I am a property";

    public function __contruct() {
        echo "This class has been instantiated <br>";
    }

    public function setNewProperty($newData) {
        $this->data = $newData;
    }

    public function getProperty() {
        return $this->data;
    }

    public function __destruct() {
        echo "<br>This is the ed of class!";
    }

}


?>