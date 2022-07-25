<?php

class AdminLoginContr extends AdminLogin {

    private $username;
    private $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    public function login() {
        $this->loginAdmin($this->username, $this->password);
    }


    

    
}