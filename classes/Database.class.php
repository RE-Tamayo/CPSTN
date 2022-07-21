<?php

class Database {
    
    private  $dbName = 'clinic_db' ;
    private  $dbHost = 'localhost' ;
    private  $dbUsername = 'root';
    private  $dbUserPassword = '';

    private  $connect = null;

    protected function __construct() {
        die('Init function is not allowed');
    }

    protected function connect() {
        if ( null == $this->connect ) {
            try {
                $this->connect = new PDO( "mysql:host=".$this->dbHost.";"."dbname=".$this->dbName,
                $this->dbUsername, $this->dbUserPassword);
            }
            catch(PDOException $e) {
                die($e->getMessage());
            }
        }
        return $this->connect;
    }

    protected function disconnect() {
        $this->connect = null;
    }
}