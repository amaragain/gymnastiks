<?php

    include('db_connection.php');

    $title_id = $_POST['post_id'];

    echo $title_id;

    $sql = "UPDATE posts SET views = views + 1 WHERE title_id = '" . $title_id . "'";

    if ($mysqli->query($sql) === TRUE) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . $mysqli->error;
    }
    $mysqli->close();

?>