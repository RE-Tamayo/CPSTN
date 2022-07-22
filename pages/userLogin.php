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
            <img src="../assets/img/neust-logo.png" alt="neust-logo" class="center-x gap-sm">
            <h4 class="center-x gap-sm">NEUST CLINIC</h4>
            <span class="center-x gap-sm error"><?php if(isset($_GET['error'])) { echo $_GET['error']; } ?></span>
            <form action="/login" method="POST" class="login-form">
                <span class="gap-sm field"><i class="icon fa-solid fa-user"></i><input type="text" name="username" placeholder="Username"></span>
                <span class="gap-sm field"><i class="icon fa-solid fa-lock"></i><input type="password" name="password" placeholder="Password" id="pwd"><i class="toggle fa-solid fa-eye" id="toggle-pwd"></i></span>
                <a href="#" class="link">Forgot Password?</a>
                <button>Log-In</button>
                <span class="center-x">Not registered?<a href="/register" class="link"> Register here</a></span>
            </form>
        </div>
    </div>
    <script src="../js/login.js"></script>
</body>
</html>