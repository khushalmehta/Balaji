<?php
require 'config.php';
    if(isset($_POST['submit'])) {
        $pc= mysqli_real_escape_string($con, $_POST['pcat']);
        $name= mysqli_real_escape_string($con, $_POST['name']);
        $email= mysqli_real_escape_string($con, $_POST['email']);
        $mobile= mysqli_real_escape_string($con, $_POST['mobile']);
        $city= mysqli_real_escape_string($con, $_POST['city']);
        $addr= mysqli_real_escape_string($con, $_POST['addr']);
        $message= mysqli_real_escape_string($con, $_POST['message']);
        
        $q = "INSERT INTO contact(pcategory,name,email,mobile,city,addr,message) VALUES ('$pc','$name','$email','$mobile','$city','$addr','$message')";
        if(mysqli_query($con, $q)){
                echo "<script>alert('Message Sent Successfully'); window.location.href='contact.php';</script>";
        }
        else{
            echo "<script>alert('Message NOT Sent, Try again!'); window.location.href='contact.php';</script>";
        }
    }
?>


