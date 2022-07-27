<?php


class UserRegisterContr extends UserModel {

    private $username;
    private $password;
    private $fName;
    private $mName;
    private $lName;
    private $gender;
    private $dob;
    private $age;

    public function __construct($username, $password, $fName, $mName, $lName, $gender, $dob) {
        $this->username = $username;
        $this->password = $password;
        $this->fName = $fName;
        $this->mName = $mName;
        $this->lName = $lName;
        $this->gender = $gender;
        $this->dob = $dob;
    }

    function register() {
        //Validate empty input.
        if(!$this->emptyInput()) {
            header('Location: /register?register=Please fill in all fields.');
            exit();
        }

        //Validate Email.
        //Check if password match.
        //Check if email is taken.
        //Check if username taken.

        //Calculate Age
        $this->age = $this->calculateAge($this->dob);

        $this->userRegister($this->username, $this->password, $this->fName, $this->mName, $this->lName, $this->gender, $this->dob, $this->age);

    }
 
    //Check if input is empty
    private function emptyInput() {
        $result = false;
        if(empty($this->username) || empty($this->password) || empty($this->fName) || empty($this->mName) || empty($this->lName) || empty($this->gender) || empty($this->dob) ) {
                $result = false;
        }
        else {
            $result = true;
        }

        return $result;
    }
    
    
    /*
    //Validate email
    private function invalidEmail() {
        $result = false;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        }
        else {
            $result = true;
        }

        return $result;
    }
    
    //Check if password is correct
    private function checkPassword() {
        $result = false;
        if($this->pwd == $this->pwdRepeat){
            $this->pwd = hash('sha256', $this->pwd);
            $result = true;
        }
        
        else {
            $result = false;
        }

        return $result;
    }

    //Validate if user already exists
    private function emailTaken() {
        $result = false;
        if(!$this->checkUser($this->email)) {
            $result = false;
        }
        else {
            $result = true;
        }

        return $result;
    }

    private function usernameTaken() {
        $result = false;
        if(!$this->checkUsername($this->username)) {
            $result = false;
        }
        else {
            $result = true;
        }

        return $result;
    }
    */


    //Calculate age of user
    private function calculateAge($dob) {
        $date = new DateTime($dob);
        $now = new DateTime();
        $interval = $now->diff($date);
        return $interval->y;
    }
}