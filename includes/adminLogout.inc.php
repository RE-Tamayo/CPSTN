<?php
if(!isset($_SESSION))session_start();
if(!isset($_SESSION['admin_id'])) {
    header('Location: /admin');
}
else {
    unset($_SESSION['admin_id']);
    header('Location: /admin');
    exit();
}