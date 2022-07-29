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

<table class="table table-bordered" id="regTable">
    <thead class="text-light bg-primary">
        <tr>
            <th class="text-center">Username</th>
            <th class="text-center">Name</th>
            <th class="text-center">Age</th>
            <th class="text-center">Gender</th>
            <th class="text-center">Operation</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $item) { ?>
            <tr>
                <td class="text-center"><?php echo $item["uname"]; ?></td>
                <td class="text-center"><?php echo $item["fName"] . " " . $item["lName"]; ?></td>
                <td class="text-center"><?php echo $item["age"]; ?></td>
                <td class="text-center"><?php echo $item["gender"]; ?></td>
                <td class="text-center">    
                    <?php echo '<a class="btn btn-primary" href="/admin/review?id='.$item['id'].'"><i class="fa-solid fa-eye"></i></a>'; ?>
                    <?php echo '<a class="btn btn-success" href="edit.php?id='.$item['id'].'"><i class="fa-solid fa-thumbs-up"></i></a>'; ?>
                    <?php echo '<a class="btn btn-danger" href="delete.php?id='.$item['id'].'"><i class="fa-solid fa-trash"></i></a>'; ?>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<script>
    $(document).ready(function() {
        $('#regTable').DataTable(
      { 
        bLengthChange: false,
        responsive: true,
        scrollY: '200px',
        scrollCollapse: true,
        paging: false,
        language: {
          searchPlaceholder: "Search",
          search: "",
        }
      })
    
    });
</script>