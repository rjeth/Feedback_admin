<?php
    include '../config/database.php';
    $sname = $_POST['surname'];
    $fname = $_POST['firstname'];
    $mname = $_POST['middlename'];
    $extname = $_POST['nameext'];
    $gender = $_POST['gender'];
    $action = $_POST['action'];
    $id = $_POST['id'];
    if ($action == 'Add') {
        mysqli_query($connect, "INSERT INTO userinfo( sname, fname, mname, extname, gender )VALUES('$sname' , '$fname' , '$mname' , '$extname' , '$gender' )");
        echo 'Added Successfully';
    }
    if ($action == 'Edit') {
        mysqli_query($connect, "UPDATE userinfo SET sname = '$sname' fname = '$fname'  mname = '$mname'  extname = '$extname'  WHERE id = $id");
        echo 'Update Successfully';
    }
    if ($action == 'Delete') {
        mysqli_query($connect, "DELETE FROM userinfo WHERE id = $id");
    }
