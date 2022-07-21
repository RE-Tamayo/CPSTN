<?php

require_once("{$_SERVER['DOCUMENT_ROOT']}/router.php");

//ADMIN ROUTES


//USER ROUTES
get('/', 'pages/userLogin.php');

get('/register', 'pages/userRegister.php');

post('/login', 'includes/userLogin.inc.php');

// ERROR ROUTES
any('/404','pages/404.php');
