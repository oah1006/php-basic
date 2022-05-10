<?php

class DB {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "login";

    protected function connect() {
        try {
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db;
            $pdo = new PDO($dsn, $this->username, $this->password);
            return $pdo;
        } catch(PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}



?>