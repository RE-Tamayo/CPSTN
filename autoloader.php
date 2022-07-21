<?php

spl_autoload_register('autoloader');

function autoloader($className) {
    $path = $_SERVER['DOCUMENT_ROOT'] . "/classes/";
    $extension = ".class.php";
    $fullPath = $path . $className . $extension;


    if(!file_exists($fullPath)){
        return false;
    }
    include_once $fullPath;
}