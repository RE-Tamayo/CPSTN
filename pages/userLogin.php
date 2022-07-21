<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEUST CLINIC</title>
    <link rel="stylesheet" href="../css/user.css">
    <?php include $_SERVER['DOCUMENT_ROOT'].'/includes/cdn.inc.php'  ?>
</head>
<body>
    <div class="userLogin-container">
        <div class="form-container">
            <form action="/login" method="POST" class="login-form">
                <h4>USER LOGIN</h4>
                <span><?= $_GET['error'] ?></span>
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
                <button class="btn btn-primary">Log-In</button>
                <a href="/register">REGISTER</a>
            </form>
        </div>
    </div>
</body>
</html>