<?php

class UserLoginContr extends UserLogin {

    private $username;
    private $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    public function login() {
        $this->loginUser($this->username, $this->password);
    }


    

    
}