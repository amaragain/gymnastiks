<?php

    date_default_timezone_set("Asia/Kolkata");
    
    // Local Database Details
    $DB_HOST = 'localhost';
    $DB_USER = 'root';
    $DB_PWD = '';
    $DB_NAME = 'vngblogs';  

    // Prod Database Details
    if( $_SERVER['SERVER_NAME'] == 'viswajitnikhathgymnastiks.in' || $_SERVER['SERVER_NAME'] == 'www.viswajitnikhathgymnastiks.in') {
        
        $DB_HOST = 'localhost';
        $DB_USER = 'vnguser123456';
        $DB_PWD = '@ryC~_O)W?k5';
        $DB_NAME = 'vngblogs';   
    }

    $mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PWD, $DB_NAME);

    if ($mysqli -> connect_errno) {
        // echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }

?>