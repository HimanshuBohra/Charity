<?php
include("connection.php");
session_start();
if(isset($_POST['submit'])){
        $ngo = $_POST['ngo'];
        $made = $_POST['made'];
        $expire = $_POST['expire'];
        $people = $_POST['people'];
        
        $ngo = str_replace("'","",$ngo);
        $type = $_POST['type'];
        $condition = $_POST['condition'];
        $message = $_POST['message']; 
        $name       = $_FILES['file']['name'];  
        $temp_name  = $_FILES['file']['tmp_name'];  
        if(isset($name) and !empty($name)){
            $location = './charity_items/';      
            if(move_uploaded_file($temp_name, $location.$name)){
                $a = $location.$name;
                $query = "INSERT INTO donation (`ngo` , `item_type` , `timestamp` , `made_on` , `expires_on` , `people_can_be_served` , `condition_of_item` , `message_about_item` , `photos` , `seen` , `user_id`)VALUES ('$ngo','$type',now(),'$made','$expire','$people','$condition','$message','$a','0','1')";
                if ($con->query($query) === TRUE) {
                  $to_email = $_SESSION['user_email'];
                  /*$subject = "Thank You for Donating to ".$_POST['ngo']."";
                  $body = "Thank you your donation is appreciated";
                  $headers = "From: sender\'s email";
                  if (mail($to_email, $subject, $body, $headers)) {
                    header("Location: index.php");
                  } else {
                      echo "Email sending failed...";
                  }    
                  } else {
                    echo "Error: " . $query . "<br>" . $con->error;
                  }    */    
                  header("Location: index.php");
              }
            }
        } else {
            echo 'You should select a file to upload !!';
    }
  }
?>