<?php
    if(!isset($_SESSION))session_start();
    if(!isset($_SESSION['user_id'])){
        header('Location: /?login=Session expired.');
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
    <script defer src="../js/nav.js"></script>
</head>

<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/userNav.inc.php'); ?>
    <main>
        <!--MAIN TAG REQUIRED FOR NAV SPACING-->
        <section id="home">
            <span>
                <h1>Home</h1>
            </span>
            <div class="card bg-white shadow overflow-auto">
                <p class="card-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, incidunt quisquam
                    voluptatum quod itaque ab animi facere placeat. Voluptate quibusdam harum tempora numquam modi qui
                    quos, repudiandae aperiam voluptatibus debitis?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab tempore, autem necessitatibus dolorem
                    esse dolores quisquam non commodi quod tenetur saepe, perspiciatis nihil magnam! Nostrum id quae
                    natus ea aspernatur.</p>
            </div>
        </section>
        <section id="user-information">
            <span>
                <h1>User Information</h1>
            </span>
        </section>
        <section id="visit-records">
            <span>
                <h1>Visit Records</h1>
            </span>
        </section>
        <section id="schedule-visit">
            <span>
                <h1>Schedule Visit</h1>
            </span>
        </section>
        <section id="notifications">
            <span>
                <h1>Notifications</h1>
            </span>
        </section>
        <section id="settings">
            <span>
                <h1>Settings</h1>
            </span>
            <a href="/logout">logout</a>
        </section>
    </main>
</body>

</html>