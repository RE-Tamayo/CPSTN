<?php

class UserLoginContr extends UserModel {

    private $username;
    private $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    public function login() {
        if($this->emptyInput() == false) {
            header("Location: /?error=Empty input");
            exit();
        }

        $this->userLogin($this->username, $this->password); 
    }

    //Check if input is empty
    private function emptyInput() {
        $result = false;
        if(empty($this->username) || empty($this->password)) {
                $result = false;
        }
        else {
            $result = true;
        }

        return $result;
    }
    

    
}