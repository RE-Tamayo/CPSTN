<?php

class UserModel extends Database {
    
    //REGISTER USER
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

    //LOGIN USER
    protected function userLogin($username, $password) {
        //Check if user exists
        $stmt = $this->connect()->prepare('SELECT * FROM users WHERE uname = ?');
        //Validate if query success
        if(!$stmt->execute(array($username))) {
            $stmt = null;
            header('Location: /?login=There was an error logging you in.');
            exit();
        }
        //Check if query is not empty
        if($stmt->rowCount() == 0) {
            $stmt = null;
            header('Location: /?login=Wrong username or password.');
            exit();
        }
        $dbPassword = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //Check if password matches
        //If correct set session variable then redirect to dashboard
        //Else redirect to login
        if($password == $dbPassword[0]['pwd']) {
            if(!isset($_SESSION))session_start();
            $_SESSION['user_id'] = $dbPassword[0]['id'];
        }
        else {
            $stmt = null;
            header('Location: /?login=Wrong username or password.');
            exit();
        }

        $stmt = null;
    }



}