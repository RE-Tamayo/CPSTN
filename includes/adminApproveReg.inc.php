<?php

if(!isset($_SESSION))session_start();
    if(!isset($_SESSION['admin_id'])){
        header('Location: /admin?login=Session expired.');
        exit();
    } else {
        if(isset($_GET['id'])) {
            require_once($_SERVER['DOCUMENT_ROOT'].'/autoloader.php');
            $id = $_GET['id'];
            $approve = new AdminApproveContr();
            $approve->approveRegistration($id);
        
            header('Location: /admin/approve');
            exit();
        } else {
            header('Location: /admin/approve?Registration not found.');
            exit();
        }
    }








