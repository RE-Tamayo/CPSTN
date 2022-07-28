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
        <div class="card shadow mb-3 cs-12 rs-1 p-2" id="dash-nav">
            <div class="d-flex justify-content-between">
                <span class="d-flex justify-content-between">
                    <img src="../assets/img/neust-logo.png" alt="neust-logo" id="logo">
                    <h4 class="my-auto ml-2" id="dash-header">NEUST CLINIC</h4>
                </span>
                <div class="input-group mt-2 my-auto"  id="account-menu">
                    <div class="input-group-prepend" id="dropdown-logo">
                        <span class="input-group-text  bg-primary text-light" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                    </div>
                    <select class="form-select">
                        <option selected><?php if(isset($_SESSION['admin_username'])) { echo $_SESSION['admin_username']; } ?></option>
                        <option>Settings</option>
                        <option>Log-out</option>
                    </select>
                </div>
            </div>
        </div>
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
        </section>
    </main>
</body>

</html>