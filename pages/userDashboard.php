<?php
    if(!isset($_SESSION))session_start();
    if(!isset($_SESSION['user_id'])){
        header('Location: /?error=Log-In first.');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEUST CLINIC</title>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/includes/dependencies.inc.php'  ?>
</head>
<body>
    <h1>USER DASHBOARD</h1>
    <a href="/logout">LOGOUT</a>
</body>
</html>