<?php
if(isset($_POST['submit'])) {
    require_once($_SERVER['DOCUMENT_ROOT'].'/autoloader.php');

    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $fName = $_POST['fName'];
    $mName = $_POST['mName'];
    $lName = $_POST['lName'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];

    $register = new UserRegisterContr($email, $username, $password, $fName, $mName, $lName, $gender, $dob);
    $register->register();

    header('Location: /?register=Success.');
    exit();
}

