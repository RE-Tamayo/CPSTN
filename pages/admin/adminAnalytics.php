<?php
    if(!isset($_SESSION))session_start();
    if(!isset($_SESSION['admin_id'])){
        header('Location: /admin?login=Session expired.');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEUST CLINIC</title>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/includes/dependencies.inc.php'  ?>
    <link rel="stylesheet" href="../css/adminDashboard.css">
    <script defer src="../js/adminNav.js"></script>
</head>

<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/adminNav.inc.php'); ?>
    <main>
        <!--MAIN TAG REQUIRED FOR NAV SPACING-->
        <section id="home">
            <span>
                <h1>ANALYTICS</h1>
            </span>
            <div class="card bg-white shadow overflow-auto">
                <p class="card-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, incidunt quisquam
                    voluptatum quod itaque ab animi facere placeat. Voluptate quibusdam harum tempora numquam modi qui
                    quos, repudiandae aperiam voluptatibus debitis?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab tempore, autem necessitatibus dolorem
                    esse dolores quisquam non commodi quod tenetur saepe, perspiciatis nihil magnam! Nostrum id quae
                    natus ea aspernatur.</p>
            </div>
            <a href="/admin/logout">logout</a>
        </section>
    </main>
</body>

</html>