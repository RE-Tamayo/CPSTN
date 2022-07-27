<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'/autoloader.php');

    $registration = new AdminApproveContr();
    $data = $registration->getAllReg();
?>

    <table class="w-100" id="table">
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
            <?php
                foreach($data as $item) {
                    echo '<tr>';
                        echo '<td>'.$item['uname'].'</td>';
                        echo '<td>'.$item['fName'].' '.$item['lName'].'</td>';
                        echo '<td>'.$item['age'].'</td>';
                        echo '<td>'.$item['gender'].'</td>';
                        echo '<td>'.'<a href=?"'.$item['id'].'>View</a>'.' '.'<a href=?"'.$item['id'].'>Approve</a>'.' '.'<a href=?"'.$item['id'].'>Disapprove</a>'.'</td>';
                    echo '</tr>';
                }
            ?>
        </tbody>
    </table>

    <script>
        $(document).ready(function () {
            $('#table').DataTable();
        });
    </script>