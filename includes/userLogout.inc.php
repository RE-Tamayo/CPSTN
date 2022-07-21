<?php
if(!isset($_SESSION))session_start();
if(!isset($_SESSION['user_id'])) {
    header('Location: /');
}
else {
    unset($_SESSION['user_id']);
    header('Location: /');
    exit();
}