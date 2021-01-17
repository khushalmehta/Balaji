<?php
    require 'config.php';
    $email= mysqli_real_escape_string($con, strip_tags($_POST['email']));
    $password= mysqli_real_escape_string($con, $_POST['password']);
    //$password=$_POST['password'];
    $select_query="select * from admin where email_id='$email'";
    $select_query_result= mysqli_query($con, $select_query) or die(mysqli_error($con));
    $num_rows= mysqli_num_rows($select_query_result);

    if($num_rows==1){
        $array= mysqli_fetch_array($select_query_result);
        $pass = $array['password'];
        if ($password==$pass){
            $_SESSION['admin_email']=$array['email_id'];
            $_SESSION['admin_id']=$array['aid'];
            $_SESSION['admin_name']=$array['admin_name'];
            header('location:index.php');
        }
        else{
            echo '<script>alert("Incorrect Password!"); window.location.href = `./login.php`</script>';
        }
    }
    else{
        echo '<script>alert("Invalid login!"); window.location.href = `./login.php`</script>';
    }
?>
