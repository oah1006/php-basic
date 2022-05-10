<?php

class RegisterController extends Register {
    private $username;
    private $password;
    private $passwordConfirmation;
    private $email;

    public function __construct($username, $password, $passwordConfirmation, $email) {
        $this->username = $username;
        $this->password = $password;
        $this->passwordConfirmation = $passwordConfirmation;
        $this->email = $email;
    }

    public function registerUser() {
        if($this->emptyInput() == false) {
            // echo "Empty input!";
            header("Location: ../index.php?error=emptyinput");
            exit();
        }

        if($this->invalidUsername() == false) {
            // echo "Invalid username!";
            header("Location: ../index.php?error=username");
            exit();
        }

        if($this->invalidEmail() == false) {
            // echo "Invalid email!";
            header("Location: ../index.php?error=email");
            exit();
        }

        if($this->matchPassword() == false) {
            // echo "Password don't match!";
            header("Location: ../index.php?error=passwordmatch");
            exit();
        }

        if($this->usernameTakenCheck() == false) {
            // echo "Username or email taken!";
            header("Location: ../index.php?error=useroremailtaken");
            exit();
        }

        $this->setUser($this->username, $this->password, $this->email);
    }

    private function emptyInput() {
        $result = null;
        if(empty($this->username) || empty($this->password) || empty($this->passwordConfirmation) || empty($this->email)) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

    private function invalidUsername() {
        $result = null;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->username)) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

    private function invalidEmail() {
        $result = null;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

    private function matchPassword() {
        $result = null;
        if($this->password !== $this->passwordConfirmation) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

    private function usernameTakenCheck() {
        $result = null;
        if(!$this->checkUser($this->username, $this->email)) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }
}




?>