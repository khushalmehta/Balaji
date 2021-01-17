<?php


    require 'config.php';
    $query="select * from admin";
    $q=mysqli_query($con,$query);
   
 $count=mysqli_num_rows($q);

   if(!isset($_SESSION['admin_id'])){
      header('location:./login.php');
    }
    
    $blog_query=mysqli_query($con,"select * from blog");
    $bcount=mysqli_num_rows($blog_query);

    $contact_query=mysqli_query($con,"select * from contact order by time DESC");
    $ccount=mysqli_num_rows($contact_query);

    $product_query=mysqli_query($con,"select * from products");
    $pcount=mysqli_num_rows($product_query);


    
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.ico">

  <title>Shree Balaji Enterprises - Wholesale Trader of Submersible Wire &amp; Copper Winding Wire from Pune<</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="css/widgets.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/xcharts.min.css" rel=" stylesheet">
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">

</head>

<body>


  <?php include("sidebar.php") ?>

  <!--main content start-->
 <section id="main-content">
   <section class="wrapper">
     <!--overview start-->
     <div class="row">
       <div class="col-lg-12">
         <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
         <ol class="breadcrumb">
           <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
           <li><i class="fa fa-laptop"></i>Dashboard</li>
         </ol>
       </div>
     </div>
     <div class="row">

       <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
         <div class="info-box blue-bg">
           <i class="fa fa-cloud-download"></i>
           <div class="count"><?php echo $bcount ?></div>
           <div class="title">Blogs</div>
         </div>
         <!--/.info-box-->
       </div>
       <!--/.col-->

       <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
         <div class="info-box brown-bg">
           <i class="fa fa-user"></i>
           <div class="count"><?php echo $count ?></div>
           <div class="title">Admins</div>
         </div>
         <!--/.info-box-->
       </div>
       <!--/.col-->

       <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
         <div class="info-box dark-bg">
           <i class="fa fa-thumbs-o-up"></i>
           <div class="count"><?php echo $pcount ?></div>
           <div class="title">Products</div>
         </div>
         <!--/.info-box-->
       </div>
       <!--/.col-->

       <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
         <div class="info-box green-bg">
           <i class="fa fa-cubes"></i>
           <div class="count visitor"><?php echo $ccount ?></div>
           <div class="title">Contact Requests</div>
         </div>
         <!--/.info-box-->
       </div>
       <!--/.col-->

     </div>
     <!--/.row-->



     <div class="row">

       <div class="col-lg-9 col-md-12">
         <div class="panel panel-default">
           <div class="panel-heading">
             <h2><i class="fa fa-flag-o red"></i><strong>Admins</strong></h2>
             <div class="panel-actions">
               <a href="index.php" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
               <a href="view_admin.php" class="btn-setting"><i class="fa fa-pencil"></i></a>
             </div>
           </div>
           <div class="panel-body">
             <table class="table bootstrap-datatable countries">
               <thead>
                 <tr>
                   <th>id</th>
                   <th>Name</th>
                   <th>Email</th>
                 </tr>
               </thead>
               <tbody>
<?php
            while($row=mysqli_fetch_array($q)){
?>
                 <tr>
                  <td><?php echo $row['aid'] ?></td>
                  
                   <td><?php echo $row['admin_name'] ?></td>
                   <td><?php echo $row['email_id'] ?></td>
               
                 </tr>
                   <?php } ?>

               </tbody>
             </table>
           </div>

         </div>
       </div>
       </div>
       
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
                                    while($row= mysqli_fetch_array($contact_query)){
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


 <!--main content end-->
</section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
  <script src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="js/fullcalendar.min.js">
    </script>
    <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js"></script>
    <script src="assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
