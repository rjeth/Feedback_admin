<?php
    include '../config/database.php';
    $id = $_POST['id'];
    $sql = mysqli_query($connect, "SELECT * FROM userinfo WHERE id = $id");
    $row = mysqli_fetch_assoc($sql);
    $output = array(
        "sname" => $row['sname']

    );
    echo json_encode($output);
