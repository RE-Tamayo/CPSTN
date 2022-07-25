<?php
    if(!isset($_SESSION))session_start();
    if(!isset($_SESSION['admin_id'])){
        header('Location: /admin?error=Log-In first.');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>NEUST CLINIC</title>
</head>
<body>
	<h1>Admin Dashboard</h1>
	<a href="/admin/logout">Logout</a>

</body>
</html>