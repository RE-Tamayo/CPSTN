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
    <link rel="stylesheet" href="../css/userDashboard.css">
</head>

<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/userNav.inc.php'); ?>
    <main><!--MAIN TAG REQUIRED FOR NAV SPACING-->
        <section id="dashboard">
            <h1>1</h1>
        </section>
        <section id="user-information">
            <h1>2</h1>
        </section>
        <section id="visit-records">
            <h1>3</h1>
        </section>
        <section id="schedule-visit">
            <h1>4</h1>
        </section>
        <section id="notifications">
            <h1>5</h1>
        </section>
    </main>

</body>

</html>