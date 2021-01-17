<?php
require 'config.php';
$select_query="select * from admin";
$select_query_result= mysqli_query($con, $select_query);
$num_row= mysqli_num_rows($select_query_result);
if($num_row==1){
    echo "<script>alert('Atleast one admin is required.');  window.location.href = `./view_admin.php`</script>";
}
else if($_GET['id']==$_SESSION['admin_id']){
    echo "<script>alert('Admin cannot remove himself');  window.location.href = `./view_admin.php`</script>";
}
else{
$id= mysqli_real_escape_string($con, $_GET['id']);
$delete_query="delete from admin where aid='$id'";
$delete_query_result= mysqli_query($con, $delete_query) or die(mysqli_error($con));
header('location:view_admin.php');
}
?>
