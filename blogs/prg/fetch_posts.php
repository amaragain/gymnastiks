<?php
    include('db_connection.php');

    
    $current_post_id = $_POST['current_post_id'];
    $limit = $_POST['limit'];


    $sql = "SELECT title, banner, title_id, views FROM posts WHERE title_id <> '" . $current_post_id . "' ORDER BY views DESC LIMIT " . $limit . "";
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