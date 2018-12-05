<?php
    include '../config/database.php';
    $sql = mysqli_query($connect, "SELECT * FROM userinfo");
    $output = array('data' => array());
    while ($row = mysqli_fetch_assoc($sql)) {
        $button = '<a name="edit" ui_id="'.$row['ui_id'].'"><i class="fas fa-edit" data-toggle="tooltip" data-placement="bottom" title="Update"></i></a>&nbsp;<a name="delete" ui_id="'.$row['ui_id'].'"><i class="fas fa-trash-alt" data-toggle="tooltip" data-placement="bottom" title="Delete"></i></a>&nbsp;<a name="delete" ui_id="'.$row['ui_id'].'"><i class="fas fa-info" data-toggle="tooltip" data-placement="bottom" title="view info"></i></a>';
        $output['data'][] = array(
            $row['fname'],
            $row['mname'],
            $button
        );
    }
    echo json_encode($output);
