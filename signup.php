<?php
    include("connection.php");
    $user_name = $_POST['name'];
    $email_id = $_POST['email'];
    $pass = $_POST['password'];
    $stmt = $con->prepare("INSERT INTO user (user_name, user_email,user_password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $user_name , $email_id, $pass);
    if($stmt->execute()){
        session_start();
        $stmt = $con->prepare("SELECT user_name,user_id FROM user WHERE user_email=?");
        $stmt->bind_param("s", $email_id);
        if($stmt->execute()){
            $_SESSION['id'] = $row['user_id'];
            $_SESSION['name'] = $row['user_name'];
        }
        header("Location: index.html");
    }
    
?>