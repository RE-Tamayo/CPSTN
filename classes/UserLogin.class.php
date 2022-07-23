<?php

class UserLogin extends Database {
    
    protected function loginUser($username, $password) {
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