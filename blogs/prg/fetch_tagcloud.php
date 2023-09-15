<?php
    include('db_connection.php');

    $limit = $_POST['limit'];

    $sql = "SELECT tags FROM posts";
    $result = $mysqli -> query($sql);

    if ($result->num_rows > 0) {

        $output = '';
        while($row = $result->fetch_assoc()) {

            $output = $output . ',' . $row['tags'];
        }
      } else {
        // echo "0 results";
      }
    
      $output = explode(',', $output);

      $tag_cloud = array();
      foreach ($output as $tag) {
        if(trim($tag)) $tag_cloud[] = trim($tag);
      }

      $counted_obj= array_count_values($tag_cloud);

      // $response = usort($counted_array, function ($item1, $item2) {
      //     return $item2['price'] <=> $item1['price'];
      // });

      echo json_encode($counted_obj);
      

    // print_r($result);

    // Free result set
    $result -> free_result();

    $mysqli -> close();
?>