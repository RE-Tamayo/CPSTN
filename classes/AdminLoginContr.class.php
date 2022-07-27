<?php

class AdminLoginContr extends AdminModel {

    private $username;
    private $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    //Call login function of parent
    public function login() {
        if($this->emptyInput() == false) {
            header("Location: /admin?error=Empty input");
            exit();
        }
        
        $this->adminLogin($this->username, $this->password);
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