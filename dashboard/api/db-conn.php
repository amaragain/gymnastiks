<?php
    $servername = "localhost";
    $dbname     = "vng_dash";
    $username   = "vnguser123456";
    $password   = "@ryC~_O)W?k5";
    $response;
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        echo json_encode(['{"error": true, "errorcode": 1, "response": "Database connection error."}']); 
        logger(0, 'DB Connection', 'failed', 'DB Connection Error');
        die("Connection failed: " . $conn->connect_error);
    }


