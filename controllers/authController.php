<?php
session_start();

include 'includes/db.php';

$errors = array();
$username = "";
$email = "";

// if user clicks on the sign up button
if (isset($_POST['signup_button'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $passwordConf = mysqli_real_escape_string($conn, $_POST['passwordConf']);

    //validation
    if (empty($username)) {
        $errors['username'] = "Username required";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Email address is invalid";
    }
    if (empty($email)) {
        $errors['email'] = "Email required";
    }
    if (empty($username)) {
        $errors['password'] = "Password required";
    }
    if ($password !== $passwordConf) {
        $errors['password'] = "The two password do not match";
    }

    $data = "Admin";
    $emailQuery = "SELECT * FROM users WHERE email=? LIMIT 1";
   //Prepared statement
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $emailQuery)) {
        echo "SQL statement failed";
    } else {
        // Bind param to placeholder
        mysqli_stmt_bind_param($stmt, "s", $data);
        // Run param inside db
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        $userCount = $result->num_rows;
        $stmt->close();
    }
    //$stmt = $conn->prepare($emailQuery);
    //$stmt->bind_param('s', $email);
    // $stmt->execute();
    //$result = $stmt->get_result();
    //$userCount = $result->num_rows;
    //$stmt->close();

    if($userCount > 0) {
        $errors['email'] = "Email already exists";
    }

    if (count($errors) === 0) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $token = bin2hex(random_bytes(50)); 
        $verified = false;

        $sql = "INSERT INTO users (username, email, verified, token, password)
        VALUES (?, ?, ?, ?, ?);";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssbss',$username. $email, $verified, $token, $password);
        
       
        if ($stmt->execute()) {
            // login user with SESSION
            $user_id = $conn->insert_id;
            $_SESSION['id'] = $user_id;
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            $_SESSION['verified'] = $verified;
            // set flash message
            $_SESSION['message'] = "Succesfully Logged in!";
            $_SESSION['alert-class'] = "alert-success";
            header('Location: index.php?signup=success');
            exit();
        } else {
            $errors['db_error'] = "Database error: failed to register";
        }

    }
}