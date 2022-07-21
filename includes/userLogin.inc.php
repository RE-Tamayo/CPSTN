<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/autoloader.php');


$username = $_POST['username'];
$password = $_POST['password'];

$login = new UserLoginContr($username, $password);
$login->login();

header('Location: /dashboard');
exit();



