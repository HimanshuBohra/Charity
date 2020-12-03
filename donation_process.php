<?php
include("connection.php");
session_start();
if(isset($_POST['submit'])){
        $ngo = $_POST['ngo'];
        $type = $_POST['type'];
        $condition = $_POST['condition'];
        $message = $_POST['message']; 
        $name       = $_FILES['file']['name'];  
        $temp_name  = $_FILES['file']['tmp_name'];  
        if(isset($name) and !empty($name)){
            $location = './charity_items/';      
            if(move_uploaded_file($temp_name, $location.$name)){
                $a = $location.$name;
                $query = "INSERT INTO donation (`ngo` , `item_type` , `timestamp`, `condition_of_item` , `message_about_item` , `photos` , `seen` , `user_id`)VALUES ('$ngo','$type' , now(),'$condition','$message', '$a' , '0' , '1')";
                if ($con->query($query) === TRUE) {
                    header("Location: index.html");
                  } else {
                    echo "Error: " . $query . "<br>" . $con->error;
                  }        
               
            }
            }
        } else {
            echo 'You should select a file to upload !!';
    }

?>