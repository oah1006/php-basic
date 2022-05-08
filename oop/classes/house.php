<?php

class House {
    public $houseName;
    public $houseColor;

    public function __construct($houseName, $houseColor) {
        $this->houseName = $houseName;
        $this->houseColor = $houseColor;
    }

    public function getHouse() {
        $house = "Name house is " . $this->houseName . " and color house is " . $this->houseColor;  
        return $house;
    }
}



?>