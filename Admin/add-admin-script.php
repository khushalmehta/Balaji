<?php
require 'config.php';
$email= mysqli_real_escape_string($con, strip_tags($_POST['email']));
$match_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if(!preg_match($match_email, $email))
{
    echo "<script>alert('incorrect email.')</script>";
}
$password= mysqli_real_escape_string($con, $_POST['password']);
if(strlen($password)<4){
    echo "<script>alert('password should have atleast 4 characters.')</script>";
}
$select_query="select * from admin where email_id='$email' ";
$select_query_result= mysqli_query($con, $select_query);
$num_row= mysqli_num_rows($select_query_result);
if($num_row>0){
    echo "<script>alert('Email id already exists.')</script>";
}
else{
    //$password = password_hash($password, PASSWORD_BCRYPT);
    $name= mysqli_real_escape_string($con, $_POST['name']);
    $insert_query= "insert into admin (email_id,password,admin_name) values ('$email','$password','$name')";
    $insert_query_result= mysqli_query($con, $insert_query) or die(mysqli_error($con));
    header('location:view_admin.php');
}
?>
