<?php session_start();

    require_once('../functions.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // print_r($_POST); 

        if(
            empty($_POST["email"]) || 
            empty($_POST["password"])
        ) {
            
            echo json_encode(['{"error": true, "errorcode": 5, "response": "Insufficient input."}']); 
            logger(0, 'Login attempt', 'failed', 'Insufficient data | Email- '. $_POST["email"] . ', Password- ' .$_POST["password"]);
        }

        else {

            include_once 'db-conn.php';

            // prepare and bind
            $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
            $stmt->bind_param("ss", $email, $password);
            
            // $stmt_role = $conn->prepare("SELECT title FROM roles WHERE id = ?");
            // $stmt_role->bind_param("i", $user_role);
            
            // $stmt_prgm = $conn->prepare("SELECT title FROM programs WHERE id = ?");
            // $stmt_prgm->bind_param("i", $user_prgm);
            
            // $stmt_attn = $conn->prepare("SELECT * FROM daily WHERE user_id = ?");
            // $stmt_attn->bind_param("i", $user_attn);




            // set parameters and execute
            $email = $_POST["email"];
            $password = md5($_POST["password"]);

            if (!$stmt->execute()) {
                echo '{"error": true, "errorcode": 2, "response": "User not found."}'; 
                logger(0, 'Login attempt', 'failed', 'SQL Error | Email- '. $_POST["email"] . ', Password- ' .$_POST["password"]);
           }
           
           if (!($result = $stmt->get_result())) {
               echo '{"error": true, "errorcode": 2, "response": "User not found."}'; 
               logger(0, 'Login attempt', 'failed', 'SQL Error | Email- '. $_POST["email"] . ', Password- ' .$_POST["password"]);
           }

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    unset($row['password']);

                    $_SESSION['user'] = $row;
                    $_SESSION['redirect_page'] = 'home';

                    echo '{"error": false, "response": ' . json_encode($row) . '}'; 
                    logger(0, 'Login attempt', 'success', 'User logged in. | Email- '. $_POST["email"] . ', Password- ' .$_POST["password"]);
                }
            } else {
                echo '{"error": true, "errorcode": 3, "response": "User not found."}'; 
                logger(0, 'Login attempt', 'failed', 'User not found. | Email- '. $_POST["email"] . ', Password- ' .$_POST["password"]);
            }

        }

    }
