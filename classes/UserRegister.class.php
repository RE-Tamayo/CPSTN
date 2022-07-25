<?php

class UserRegister extends Database {
    
    function userRegister($username, $password, $fName, $mName, $lName, $gender, $dob, $age) {
        $stmt =  $this->connect()->prepare("INSERT INTO registration (uname, pwd, fname, mName, lName, gender, dob, age)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?); ");

        //Validate if query success
        if(!$stmt->execute(array($username, $password, $fName, $mName, $lName, $gender, $dob, $age))) {
            $stmt = null;
            header('Location: /Register?login=There was an error during registration.');
            exit();
        }

        $stmt = null;
    }

}