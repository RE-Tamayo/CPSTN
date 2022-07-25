<?php

require_once("{$_SERVER['DOCUMENT_ROOT']}/router.php");

//ADMIN ROUTES
get('/admin', 'pages/adminLogin.php');

post('/admin/login', 'includes/adminLogin.inc.php');

get('/admin/dashboard', 'pages/adminDashboard.php');

get('/admin/logout', 'includes/adminLogout.inc.php');

//USER ROUTES
get('/', 'pages/userLogin.php');

get('/register', 'pages/userRegister.php');

get('/dashboard', 'pages/userDashboard.php');

get('/logout', 'includes/userLogout.inc.php');

post('/login', 'includes/userLogin.inc.php');

post('/register', 'includes/userRegister.inc.php');

// ERROR ROUTES
any('/404','pages/404.php');
