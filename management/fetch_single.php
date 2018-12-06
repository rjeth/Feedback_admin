<?php
    include '../../core/config.php';
    $id = $_POST['id'];
    $sql = mysqli_query($connect, "SELECT * FROM userinfo WHERE ui_id = $id");
    $row = mysqli_fetch_assoc($sql);
    $output = array(
        "surname" => $row['sname'];

    );
    echo json_encode($output);
