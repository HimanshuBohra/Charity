<?php
    include("connection.php");
    $email_id = $_POST['email'];
    $user_password = $_POST['password'];
    if(!isset($_POST['admin'])){
        $query = "select user_name,user_id from user where user_email = '".$email_id."' and user_password = '".$user_password."'";
        if($result = mysqli_query($con,$query)){
            $row = mysqli_fetch_assoc($result);
            session_start();
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['user_email'] = $email_id;
            header("Location: donate.php");
        }
        else{
            echo "1";
        }
    }
    else{
        $query = "select admin_name,admin_id from admin where admin_email = '".$email_id."' and admin_password = '".$user_password."'";
        if($result = mysqli_query($con,$query)){
            $row = mysqli_fetch_assoc($result);
            $_SESSION['admin_id'] = $row['admin_id'];
            $_SESSION['admin_name'] = $row['admin_name'];
            $_SESSION['user_email'] = $email_id;
            header("Location: admin_homepage.php");
        }
        else{
            mysqli_error($con);
        }
    }

?>