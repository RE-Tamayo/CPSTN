<?php
    if(isset($_GET['login'])) { 
        $error = $_GET['login'];
        $validError = htmlspecialchars($error);
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
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <div class="container-center">
        <div class="form-container">
            <img src="../assets/img/neust-logo.png" alt="neust-logo" class="center-x gap-tb">
            <h4 class="center-x gap-tb">NEUST CLINIC</h4>
            <h4 class="center-x gap-tb">(ADMIN)</h4>
            <span class="center-x gap-tb error"><?php if(isset($_GET['login'])) { echo $validError; } ?></span>
            <form action="/admin/login" method="POST" class="login-form">
                <div class="input-group">
                    <input type="text" name="username" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Username</label>
                </div>
                <div class="input-group">
                    <input type="password" name="password" id="pwd" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Password</label>
                    <i class="toggle fa-solid fa-eye" id="toggle-pwd"></i>
                </div>
                <button class="gap-tb">Log-In</button>
                <span class="center-x">NEUST Student?<a href="/register" class="link"> Click here</a></span>
            </form>
        </div>
    </div>
    <script src="../js/login.js"></script>
</body>

</html>