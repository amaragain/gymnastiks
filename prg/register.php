<?php

    include('../blogs/prg/db_connection.php');

    $date = date('Y-m-d H:i:s');

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    $sql = "INSERT INTO `registers` (`name`, `email`, `phone`, `message`) VALUES ('" . $name . "','" . $email . "','" . $phone . "','" . $message . "')";

    if ($mysqli->query($sql) === TRUE) {
    //   echo "Record updated successfully";
        echo 1;
    } else {
    //   echo "Error updating record: " . $mysqli->error;
        echo 0;
    }
    $mysqli->close();


?>