<?php
    include '../config/database.php';
    $sql = mysqli_query($connect, "SELECT * FROM userinfo");
    $output = array('data' => array());
    while ($row = mysqli_fetch_assoc($sql)) {
        $button =
        '<button type="button" class="btn btn-info" name="edit" id="'.$row['id'].'"><i class="fas fa-edit" data-toggle="tooltip" data-placement="bottom" title="Update"></i></button>&nbsp;
        <button type="button" class="btn btn-danger" name="delete" id="'.$row['id'].'"><i class="fas fa-trash-alt" data-toggle="tooltip" data-placement="bottom" title="Delete"></i></button>';
        $output['data'][] = array(
            $row['sname'],
            $row['fname'],
            $button
        );
    }
    echo json_encode($output);
