<?php 

    $url_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    // (A2) REMOVE BASE FOLDER FROM PATH
    // E.G. "/blogs/foo/bar/" > "foo/bar/"
    $base = "/blogs/";
    if (substr($url_path, 0, strlen($base)) == $base) {
    $url_path = substr($url_path, strlen($base));
    }

    // (A3) EXPLODE INTO AN ARRAY
    // E.G. "foo/bar/" > ["foo", "bar"]
    $path_array = explode("/", rtrim($url_path, "/"));

    // echo '<pre>';
    // print_r($path_array);
    // echo '</pre>';

    function updateURL($url) {
        echo("<script>history.replaceState({},'','$url');</script>");
    }


    // Routing
    // URL_PATH => FILE_NAME
    $all_pages = array(
        'home' =>  array('/' => 'home'), 
        'index.html' =>  array('index.html' => 'home'), 
        'index.php' =>  array('index.php' => 'home'), 
        'contact' =>  array('contact' => 'direction'), 
        'contact.php' =>  array('contact.php' => 'direction'), 
        'direction' =>  array('direction' => 'direction'), 
        'schedules' =>  array('schedules' => 'schedules'), 
        'register' =>  array('register' => 'landing-register'), 
        'programs' => array(
            'programs' => 'programs',
            'toddler-gymnastics' => 'toddler-gymnastics',
            'adult-gymnastics' => 'adult-gymnastics',
            'pre-competitive-gymnastics' => 'precompetitive-gymnastics',
            'recreational-gymnastics' => 'recreational-gymnastics',
            'competitive-gymnastics' => 'competitive-gymnastics',
            'adhd-kids-gymnastics' => 'adhd-kids-gymnastics'
        ),
        '404' =>  array('404' => '404')
    );


    $file_path = "views/home.php";  // Default path of file
    // echo '<pre>';
    // print_r($path_array);
    // print_r($all_pages);
    // echo '</pre>';
    $redierct_to = false;
    if(count($path_array) == 1) { 
        $file = $all_pages['home']['/']; 
    }
    else if(count($path_array) == 2) { 
        if(array_key_exists($path_array[1], $all_pages)) {
            $file = $all_pages[ $path_array[1] ][$path_array[1]]; // for all root pages except home
            if($path_array[1] == 'index.php' || $path_array[1] == 'index.html') { $redierct_to = '/'; }
            if($path_array[1] == 'contact.php' || $path_array[1] == 'contact.html') { $redierct_to = '/contact'; }
        }
        else {
            $file = "0";  // Page doesn't exists
        }
    }
    else if(count($path_array) == 3) { 
        if(array_key_exists($path_array[1], $all_pages) && array_key_exists($path_array[2], $all_pages[ $path_array[1]])) {
            $file = $all_pages[ $path_array[1]][$path_array[2]]; // For all child pages
        }
        else {
            $file = "0";  // Page doesn't exists
        }
    }
    else {
        $file = "0";  // Page doesn't exists
    }
   

    if($file == '0') { 
        header("HTTP/1.1 301 Moved Permanently"); 
        header("location:/404"); exit();
     }
     else if($redierct_to) {
        header("HTTP/1.1 301 Moved Permanently"); 
        header("location:$redierct_to"); exit();
     }
    $file_path = "views/$file.php";


    include($file_path);



?>