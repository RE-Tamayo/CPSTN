<?php

require_once("{$_SERVER['DOCUMENT_ROOT']}/router.php");

//ADMIN ROUTES


//USER ROUTES
get('/', 'pages/userLogin.php');

get('/register', 'pages/userRegister.php');

get('/dashboard', 'pages/userDashboard.php');

get('/logout', 'includes/userLogout.inc.php');

post('/login', 'includes/userLogin.inc.php');

// ERROR ROUTES
any('/404','pages/404.php');
