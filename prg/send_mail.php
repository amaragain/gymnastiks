<?php


// define variables and set to empty values
$sender_name = "";
$sender_mail = "";
$sender_phone = "";
$sender_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $sender_name = ucfirst(test_input($_POST["name"]));
  $sender_mail = test_input($_POST["email"]);
  $sender_phone = test_input($_POST["phone"]);
  $sender_message = test_input($_POST["message"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



// $to = "amarnathradhakrishnana@gmail.com";
$to = "info@viswajitnikhathgymnastiks.in";

$subject = "Viswajit Nikhath Gymnastiks | Enquiry From ". $sender_name;


$html = '
<html>
    <body>
        <h4>Hey, You have a new email from the website</h4>

        <table border="1" borderColor="#ddd" cellspacing="0" cellpadding="10">
            <tr>
                <th>Sender Name:</th>
                <td style="min-width: 150px">'.$sender_name.'</td>
            </tr>
            <tr>
                <th>Sender Email</th>
                <td>'.$sender_mail.'</td>
            </tr>
            <tr>
                <th>Sender Phone</th>
                <td>'.$sender_phone.'</td>
            </tr>
            <tr>
                <th>Message</th>
                <td>'.$sender_message.'</td>
            </tr>
        </table>
    </body>
</html>
';

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: Viswajit Nikhath Gymnastiks <webmaster@viswajitnikhathgymnastiks.in>' . "\r\n";
// $headers .= 'Cc: admin@viswajitnikhathgymnastiks.in' . "\r\n";
// $headers .= 'Cc: info@viswajitnikhathgymnastiks.in' . "\r\n";

$res = mail($to,$subject,$html,$headers);

echo $res;


// Local Database Details
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PWD = '';
$DB_NAME = 'vngblogs';  

// Prod Database Details
if( $_SERVER['SERVER_NAME'] == 'viswajitnikhathgymnastiks.in') {
    
    $DB_HOST = 'localhost';
    $DB_USER = 'vnguser123456';
    $DB_PWD = '@ryC~_O)W?k5';
    $DB_NAME = 'vngblogs';   
}

    $mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PWD, $DB_NAME);

    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }

// $sender_name = "";
// $sender_mail = "";
// $sender_phone = "";
// $sender_message = "";
$sql = "INSERT INTO `mails` (`name`, `phone`, `email`, `message`) VALUES ('$sender_name', '$sender_phone', '$sender_mail', '$sender_message');";

if ($mysqli->query($sql) === TRUE) {
//   echo "Record updated successfully";
    // echo 1;
} else {
//   echo "Error updating record: " . $mysqli->error;
    // echo 0;
}
$mysqli->close();




?>