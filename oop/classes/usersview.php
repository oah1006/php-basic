<?php

class UsersView extends Users {
    public function showUser($name) {
        $results = $this->getUser($name);
        echo "Full name: " . $results[0]['first_name'] . " " . $results[0]['last_name'] . "<br/>" . " Date of birthday: " . $results[0]['dob'];
    }
}



?>