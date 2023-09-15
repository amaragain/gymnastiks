<?php
session_start();

// if (isset($_SESSION["user"])) {

//     // echo json_encode(['{"error": false, "response": ' . json_encode($_SESSION['user']) . '}']);

// } else {
//     // echo json_encode(['{"error": true, "errorcode": 4, "response": "You are not allowd to view the contents"}']);
// }


if (isset($_SESSION["user"])) {

    require_once('../functions.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $page =  $_POST["page"];
        $id =  $_POST["id"];

        $_SESSION['redirect_page'] = $page;
        $_SESSION['redirect_id'] = $id;
    }

}
