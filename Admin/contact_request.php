<?php
    require 'config.php';
    if(!isset($_SESSION['admin_id'])){
      header('location:./login.php');
    }
    $select_admin="select * from contact order by time DESC";
    $select_admin=mysqli_query($con,$select_admin);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../assets/img/favicon.ico" rel="icon">

  <title>Contact Requests</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
    <?php 
        include 'sidebar.php';
    ?>

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i>Contact Requests</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-table"></i>Contact</li>
            </ol>
          </div>
        </div>
        <!-- page start-->

        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Contact Requests
              </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class="icon_profile"></i> Product Category</th>
                    <th><i class="icon_profile"></i> Full Name</th>
                    <th><i class="icon_mail_alt"></i> Email</th>
                    <th><i class="icon_phone"></i> Contact</th>
                    <th><i class="icon_info"></i> City</th>
                   
                    <th><i class="icon_mail"></i> Queries</th>
                    <th><i class="icon_clock"></i> Time</th>
                    <th><i class="icon_cogs"></i> Remove</th>
                  </tr>
                  <?php 
                                    $counter=1;
                                    while($row= mysqli_fetch_array($select_admin)){
                                ?>
                    <tbody>
                    <tr>
                    <td><?php echo $row['pcategory']?></td>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['mobile']?></td>
                    <td><?php echo $row['city']?></td>
                   
                    <td><?php echo $row['message']?></td>
                    <td><?php echo $row['time']?></td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-danger" href="delete-contact.php?id=<?php echo $row['cid'];?>"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
                    </tr>
                                <?php 
                                    $counter++;
                                    }
                                ?>
                  
                </tbody>
              </table>
            </section>
          </div>
        </div>
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">

        </div>
    </div>
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nicescroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>


</body>

</html>
