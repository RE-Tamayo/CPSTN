<?php

class AdminModel extends Database {

    //LOGIN ADMIN
    protected function adminLogin($username, $password) {
        //Check if user exists
        $stmt = $this->connect()->prepare('SELECT * FROM admin WHERE uname = ?');
        //Validate if query success
        if(!$stmt->execute(array($username))) {
            $stmt = null;
            header('Location: /admin?login=There was an error logging you in.');
            exit();
        }
        //Check if query is not empty
        if($stmt->rowCount() == 0) {
            $stmt = null;
            header('Location: /admin?login=Wrong username or password.');
            exit();
        }
        $dbPassword = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //Check if password matches
        //If correct set session variable then redirect to dashboard
        //Else redirect to login
        if($password == $dbPassword[0]['pwd']) {
            if(!isset($_SESSION))session_start();
            $_SESSION['admin_id'] = $dbPassword[0]['id'];
            $_SESSION['admin_username'] = $dbPassword[0]['uname'];
        }
        else {
            $stmt = null;
            header('Location: /admin?login=Wrong username or password.');
            exit();
        }

        $stmt = null;
    }

    //GET ALL USER REGISTRATION
    protected function getAllRegistration() {
        //SET QUERY AND PREPARE STATEMENT
        $stmt = $this->connect()->prepare('SELECT * FROM registration');
        //VALIDATE AND EXECUTE QUERY
        if(!$stmt->execute()) {
            $stmt = null;
            header('Location: /admin?status=There was an error while retrieving registrations.');
            exit();
        }
        //CHECK IF EMPTY
        if($stmt->rowCount() == 0) {
            $stmt = null;
            header('Location: /admin?status=No registration found.');
            exit();
        }
        //ASSIGN RESULT TO DATA
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt = null;

        //RETURN DATA
        return $data;
    }

    //GET SINGLE REGISTRATION
    function getRegistration($id) {
        //SET QUERY AND PREPARE STATEMENT
        $stmt = $this->connect()->prepare('SELECT * FROM registration WHERE id = ? LIMIT 1;');
        //VALIDATE AND EXECUTE QUERY
        if(!$stmt->execute(array($id))) {
            $stmt = null;
            header('Location: /admin?status=There was an error while retrieving registration.');
            exit();
        }
        //CHECK IF EMPTY
        if($stmt->rowCount() == 0) {
            $stmt = null;
            header('Location: /admin?status=No registration found.');
            exit();
        }
        //ASSIGN RESULT TO DATA
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt = null;
        
        //RETURN DATA
        return $data;

    }

}