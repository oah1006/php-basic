<?php

class Users extends Dbh {
    
    protected function getUser($name) {
        $sql = "SELECT * FROM users WHERE first_name = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]);

        $results = $stmt->fetchAll();
        return $results;
    }

    protected function setUser($firstname, $lastname, $dob) {
        $sql = "INSERT INTO users(first_name,  last_name, dob) VALUES (?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname, $lastname, $dob]);
    }

    
}





?>