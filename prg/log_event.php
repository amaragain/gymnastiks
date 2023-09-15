<?php
    include('../blogs/prg/db_connection.php');

    $event = $_POST['event'];
    $date = date('Y-m-d H:i:s');

    // echo $event;

    $sql = "INSERT INTO `logs` (`event`, `date`) VALUES ('" . $event . "', '" . $date . "')";

    if ($mysqli->query($sql) === TRUE) {
    //   echo "Record updated successfully";
        echo 1;
    } else {
    //   echo "Error updating record: " . $mysqli->error;
        echo 0;
    }
    $mysqli->close();

?>