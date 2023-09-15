<?php
    include('db_connection.php');

    $title_id = '';
    $filter_key = '';  // order, tags
    $filter_val = '';  // [views, date], tag_name

    // print_r(!$path_array[0]);
    if(!$path_array[0]) { 
        $filter_key = 'order';
        $filter_val = 'views';
    }
    else if ($path_array[0] == 'tags' || $path_array[0] == 'order')  {
        $filter_key = $path_array[0];
        $filter_val = $path_array[1];
    }
    else {
        $title_id = $path_array[0];
    }

    // $title_id = count($path_array) > 0 ? $path_array[0] : '';

    // echo $title_id;
    


    if($title_id !== '') {
         $sql = "SELECT * FROM posts WHERE title_id='" . $title_id . "'";
    }
    else if($filter_key == 'tags') {
        $sql = "SELECT * FROM posts WHERE tags LIKE '%$filter_val%' ORDER BY views DESC LIMIT 50";
    } 
    else  {
        $sql = "SELECT * FROM posts ORDER BY $filter_val DESC LIMIT 50";
    } 





    // if(!$_SERVER['QUERY_STRING'] && !$title_id){
    //     $filter_key = 'order';
    //     $filter_val = 'popular';
    //     $sql = "SELECT * FROM posts ORDER BY date DESC LIMIT 50";
    // } 
    // else {

    //     parse_str($_SERVER['QUERY_STRING'], $query_params);

    //     if(!isset($query_params['order']) && !isset($query_params['tag']) && !$title_id) {
    //         $filter_key = 'order';
    //         $filter_val = 'popular';

    //         $sql = "SELECT * FROM posts ORDER BY date DESC LIMIT 50";
            
    //     }
    //     else {

    //         if(isset($query_params['order'])) {
    //             $filter_val = $query_params['order'];  // popular, recent
    //             ($query_params['order'] == 'popular') ? ($order_by = 'views') : ($order_by = 'date');

    //             $sql = "SELECT * FROM posts ORDER BY $order_by DESC LIMIT 50";
    //         } 

    //         else if(isset($query_params['tag'])) {
    //             $filter_val = $query_params['tag']; // tag_name
    //             $sql = "SELECT * FROM posts WHERE tags LIKE '%$filter_val%' ORDER BY views DESC LIMIT 50";
    //         } 

    //         else if($title_id !== '') {
    //              $sql = "SELECT * FROM posts WHERE title_id='" . $title_id . "'";
    //         }
    //     }

    // }


    // If the post title id exists in URL
    if($title_id != '') {
    

        $result = $mysqli -> query($sql);

        // Associative array
        $row = $result -> fetch_array(MYSQLI_ASSOC);

        // $post_title = preg_replace('#[ -]+#', '-', $row['title']); //$row['title']; 
        $post_title = $row['title']; 
        $title_id = $row['title_id'];
        $post_date = $row['date'];
        $post_content = $row['content'];
        $post_author = $row['author'];
        $post_image = $row['banner'];
        $meta_title = $row['title'];
        // $meta_description = $row['ffffffffff'];
        $meta_image = "http://" . $_SERVER['SERVER_NAME'] . "/blogs/" . $row['banner'];
        $meta_url =  $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF'];
        $meta_keywords = $row['tags'];
    }

    // If title_id doesn't exists in URL
    else {
        // echo $sql;
        $result = $mysqli -> query($sql);

        if ($result->num_rows > 0) {

            $post_array = array();
            while($row = $result->fetch_assoc()) {
                $post_array[] = $row;
            }
          } else {
            // echo "0 results";
          }
    
    }


    // Free result set
    $result -> free_result();

    $mysqli -> close();
?>