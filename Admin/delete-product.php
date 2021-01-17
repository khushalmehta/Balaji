<?php
require 'config.php';

$id= mysqli_real_escape_string($con, $_GET['bid']);
$delete_query="delete from products where id='$id'";
$delete_query_result= mysqli_query($con, $delete_query) or die(mysqli_error($con));
header('location:view_products.php');

?>