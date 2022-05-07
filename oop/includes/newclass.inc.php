<?php

class Person {
    protected $firstName = 'Hao';
    protected $lastName = 'Tommy';
    protected $age = 20;

}


class Person_one extends Person {
    public function getInforPerson() {
        $result = $this->firstName . ' ' . $this->lastName . ' ' . $this->age;
        return $result;
    }
}

?>