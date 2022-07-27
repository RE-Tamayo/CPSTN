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
    <script defer src="../js/adminApprove.js"></script>
</head>

<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/adminNav.inc.php'); ?>
    <main>
        <!--MAIN TAG REQUIRED FOR NAV SPACING-->
        <div class="card bg-white shadow colspan-12">
            <span class="d-flex justify-content-between card-header"><h4>Registrations</h4><button id="btn">Refresh</button></span>
            <div class="card-body" id="registrationTable"></div>
        </div>
    </main>
</body>

</html>