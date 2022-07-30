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
    <h1 class="text-lg">USER REGISTER</h1>
    <a href="/">ALREADY HAVE AN ACCOUNT?</a>
    <form action="/register" method="POST" enctype="multipart/form-data">
        <input type="email" name="email" placeholder="Email">    
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="text" name="fName" placeholder="First Name">
        <input type="text" name="mName" placeholder="Middle Name">
        <input type="text"name="lName" placeholder="Last Name">
        <input type="text"name="gender" placeholder="Gender">
        <input type="date" name="dob">
        <button type="submit" name="submit">Submit</button>
    </form>
</body>

</html>