<?php
    include '../config/database.php';
    $sname = $_POST['surname'];
    $fname = $_POST['firstname'];
    $mname = $_POST['middlename'];
    $extname = $_POST['nameext'];
    $bday = $_POST['birthday'];
    $bdayplace = $_POST['placebirth'];
    $action = $_POST['action'];
    $id = $_POST['id'];
    if ($action == 'Add') {
        mysqli_query($connect, "INSERT INTO userinfo( sname, fname, mname, extname, age, birthdate, birthplace, gender )VALUES('$sname' , '$fname' , '$mname' , '$extname' , '$bday' , '$bdayplace' , 'test' )");
        echo 'Added Successfully';
    }
    if ($action == 'Edit') {
        mysqli_query($connect, "UPDATE userinfo SET sname = '$sname' WHERE id = $id");
        echo 'Update Successfully';
    }
    if ($action == 'Delete') {
        mysqli_query($connect, "DELETE FROM userinfo WHERE id = $id");
    }
