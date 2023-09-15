<?php 

    require_once('config.php');

    function logger($user_id, $title, $result, $details) {

        $file_name = $GLOBALS['log_path'] . date("Y-m") .'.log';
        $log_file = fopen($file_name, "a") or die("Unable to open file!");
        $to_write = '{ "time": "'. date("Y-m-d h:i:sa") . '",  "user": ' . $user_id .', "log": "' . $title .'", "Result": "'.$result.'", "details": "' . $details . '"},';
        fwrite($log_file, $to_write);
        fclose($log_file);
    }


// $result = success | failed 


    function root_url() {
        return (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
    }



?>