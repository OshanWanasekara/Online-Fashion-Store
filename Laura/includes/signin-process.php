<?php
    session_start();
    include 'config.php'; // Database Connection

    if(isset($_POST['login'])) {
        $email = $_POST['email'];
        $password  = $_POST['psw'];
        
        $sql = "SELECT * FROM users AS u WHERE u.email = '$email' AND u.password = '$password'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0) {

            while ($row = $result->fetch_assoc()) {
                $_SESSION['email'] = $row['email'];
            }

            // Authentication successful
            $_SESSION['authenticated'] = true; // The session variable to indicate authentication

            
            header("Location: ../index.php");
        } else {
            header("Location: ../signin.php");
        }

    }


?>