<?php

class UserLogin extends Database {
    
    protected function loginUser($username, $password) {
        //Check if user exists
        $stmt = $this->connect()->prepare('SELECT * FROM users WHERE uname = ?');
        //Validate if query success
        if(!$stmt->execute(array($username))) {
            $stmt = null;
            header('Location: /?error=There was an error logging you in.');
            exit();
        }
        if($stmt->rowCount() == 0) {
            $stmt = null;
            header('Location: /?error=User does not exist.');
            exit();
        }
        $dbPassword = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //Check if password matches
        if($password == $dbPassword[0]['pwd']) {
            if(!isset($_SESSION))session_start();
            $_SESSION['user_id'] = $dbPassword[0]['id'];
        }
    }

}