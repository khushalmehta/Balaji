<?php
require 'config.php';

$id= mysqli_real_escape_string($con, $_GET['id']);
$delete_query="delete from contact where cid='$id'";
$delete_query_result= mysqli_query($con, $delete_query) or die(mysqli_error($con));
header('location:contact_request.php');

?>