<?php
session_start();

// if (isset($_SESSION["user"])) {

//     // echo json_encode(['{"error": false, "response": ' . json_encode($_SESSION['user']) . '}']);

// } else {
//     // echo json_encode(['{"error": true, "errorcode": 4, "response": "You are not allowd to view the contents"}']);
// }


require_once('../functions.php');


function get_students()
{

  require_once('./db-conn.php');

  // prepare and bind
  $stmt = $conn->prepare("SELECT * FROM students");
  // $stmt->bind_param("i", $student_id);

  // set parameters and execute
  // $student_id = $id;

  if (!$stmt->execute()) {
    echo '{"error": true, "errorcode": 2, "response": "User not found."}';
    // logger(0, 'Login attempt', 'failed', 'SQL Error | Email- ' . $_POST["email"] . ', Password- ' . $_POST["password"]);
  }

  if (!($result = $stmt->get_result())) {
    echo '{"error": true, "errorcode": 2, "response": "User not found."}';
    // logger(0, 'Login attempt', 'failed', 'SQL Error | Email- ' . $_POST["email"] . ', Password- ' . $_POST["password"]);
  }

  if ($result->num_rows > 0) {
    // output data of each row
    $list = array();
    while ($row = $result->fetch_assoc()) {
      // unset($row['password']);

      // $_SESSION['user'] = $row;

      array_push($list, $row);

      // logger(0, 'Login attempt', 'success', 'User logged in. | Email- ' . $_POST["email"] . ', Password- ' . $_POST["password"]);
    }
    echo '{"error": false, "response": ' . json_encode($list) . '}';
  } else {
    echo '{"error": true, "errorcode": 3, "response": "User not found."}';
    // logger(0, 'Login attempt', 'failed', 'User not found. | Email- ' . $_POST["email"] . ', Password- ' . $_POST["password"]);
  }

  $conn->close();
}




function get_student($id)
{

  require_once('./db-conn.php');

  // prepare and bind
  $stmt = $conn->prepare("SELECT * FROM students WHERE id = ?");
  $stmt->bind_param("i", $student_id);

  // set parameters and execute
  $student_id = $id;

  if (!$stmt->execute()) {
    echo json_encode(['{"error": true, "errorcode": 2, "response": "User not found."}']);
    // logger(0, 'Login attempt', 'failed', 'SQL Error | Email- ' . $_POST["email"] . ', Password- ' . $_POST["password"]);
  }

  if (!($result = $stmt->get_result())) {
    echo json_encode(['{"error": true, "errorcode": 2, "response": "User not found."}']);
    // logger(0, 'Login attempt', 'failed', 'SQL Error | Email- ' . $_POST["email"] . ', Password- ' . $_POST["password"]);
  }

  if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      // unset($row['password']);

      // $_SESSION['user'] = $row;

      echo '{"error": false, "response": ' . json_encode($row) . '}';
      // logger(0, 'Login attempt', 'success', 'User logged in. | Email- ' . $_POST["email"] . ', Password- ' . $_POST["password"]);
    }
  } else {
    echo json_encode(['{"error": true, "errorcode": 3, "response": "User not found."}']);
    // logger(0, 'Login attempt', 'failed', 'User not found. | Email- ' . $_POST["email"] . ', Password- ' . $_POST["password"]);
  }


  $conn->close();
}




if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $method =  $_POST["method"];

  switch ($method) {
    case "get_students":
      get_students();
      break;
    case "get_student":
      get_student($_SESSION["redirect_id"]);
      break;
    default:
      echo "Something went wrong!!";
  }
}
