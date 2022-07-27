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
                <h1>APPROVE</h1>
            </span>
            <div class="card bg-white shadow overflow-auto">
                <table>
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Gender</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
</body>

</html>