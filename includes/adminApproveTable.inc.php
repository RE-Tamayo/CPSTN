<?php
    if(!isset($_SESSION))session_start();
    if(!isset($_SESSION['admin_id'])){
        header('Location: /admin?login=Session expired.');
        exit();
    }

    require_once($_SERVER['DOCUMENT_ROOT'].'/autoloader.php');

    $registration = new AdminApproveContr();
    $data = $registration->getAllReg();
?>

    <table id="table" class="table table-striped w-100">
        <thead>
            <tr>
                <th>Username</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $item) { ?>
                
                <tr>
                    <td><?php echo $item["uname"]; ?></td>
                    <td><?php echo $item["fName"]; ?></td>
                    <td><?php echo $item["age"]; ?></td>
                    <td><?php echo $item["gender"]; ?></td>
                    <td>    
                    <?php echo '<a class="btn btn-outline-primary" href="#?id='.$item['id'].'">View</a>'; ?>
                    <?php echo '<a class="btn btn-outline-success" href="#?id='.$item['id'].'">Edit</a>'; ?>
                    <?php echo '<a class="btn btn-outline-warning" href="#?id='.$item['id'].'">Delete</a>'; ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <script>
        $(document).ready(function () {
            $('#table').DataTable();
        });
    </script>