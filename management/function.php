<?php
    include '../../core/config.php';
    $sname = $_POST['surname'];
    $fname = $_POST['firstname'];
    $mname = $_POST['middlename'];
    $extname = $_POST['nameext'];
    $bday = $_POST['birthday'];
    $bdayplace = $_POST['placebirth'];
    $gender = $_POST['ugender'];
    $new_name = rand(). '.' ."jpeg";
    $destination = '../upload/' . $new_name;
    move_uploaded_file($_FILES['picuploader']['tmp_name'], $destination);

    $action = $_POST['action'];
    $id = $_POST['id'];
    if ($action == 'Add') {
        mysqli_query(
            $connect,
            "INSERT INTO userinfo (
          sname,
          fname,
          lname,
          extname,
          age,
          birthdate,
          birthplace,
          gender,
          image
        )VALUES(
          '$sname',
          '$fname',
          '$mname',
          '$extname',
          '$bday',
          '$bdayplace',
          '$gender',
          '$new_name'
        )"
      );
        echo 'Added Successfully';
    }
    if ($action == 'Edit') {
        mysqli_query($connect, "UPDATE location SET location_name = '$loc' WHERE loc_id = $id");
        echo 'Update Successfully';
    }
    if ($action == 'Delete') {
        mysqli_query($connect, "DELETE FROM location WHERE loc_id = $id");
    }
