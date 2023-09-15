<?php
    include('../blogs/prg/db_connection.php');

    $limit = $_POST['limit'];

    // $sql = "SELECT title, banner, title_id, excerpt FROM posts ORDER BY views DESC LIMIT " . $limit . "";
    $sql = "SELECT title, banner, title_id, excerpt FROM posts ORDER BY views DESC LIMIT 3";
    $result = $mysqli -> query($sql);

    if ($result->num_rows > 0) {

        $post_array = array();
        while($row = $result->fetch_assoc()) {
            $post_array[] = $row;
        }
      } else {
        // echo "0 results";
      }
    
      echo json_encode($post_array);

    // print_r($result);

    // Free result set
    $result -> free_result();

    $mysqli -> close();
?>