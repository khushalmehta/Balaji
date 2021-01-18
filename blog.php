<?php
require 'Admin/config.php';

  $select_blog="select * from blog";
  $display_blog=mysqli_query($con,$select_blog);
?>



<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Fashi Template">
  <meta name="keywords" content="Fashi, unica, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Shree Balaji Enterprises</title>

  <!--================== Favicon ===================-->
  <link href="img/favicon.ico" rel="icon">

  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
  <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
  <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
  <link rel="stylesheet" href="css/nice-select.css" type="text/css">
  <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
  <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
  <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>

  <?php include('includes/header.php') ?>


  <div class="breacrumb-section" style="padding-top:  50px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb-text">
            <a href="index.php"><i class="fa fa-home"></i> Home</a>
            <span>Blog</span>
          </div>
        </div>
      </div>
    </div>
  </div>


  <section class="blog-section spad">
    <div class="container">
      <div class="section-title">
        <h3 style=" font-weight: 800;"><u>Check Our <span style="color:#e7ab3c;">Blog</span></u></h3>
<hr>
        </div>

          <div class="row">
            <?php
                    while($blog=mysqli_fetch_array($display_blog)){
                  ?>
            <div class="col-lg-4 col-sm-3">
              <div class="blog-item">
                <div class="bi-pic">
                  <img src="Admin/<?php echo $blog['blog_image'];?>" alt="">
                </div>
                <div class="bi-text">
                  <a href="blog-details.php?bid=<?php echo $blog['bid']?>">
                    <h4><?php echo $blog['blog_summary'];?></h4>
                  </a>
                  <p><?php echo $blog['blog_title']; ?><span>-<?php echo $blog['blog_date'] ?></span></p>
                </div>
              </div>
            </div>
            <?php
              }
            ?>

          </div>
      </div>
  </section>





<?php include('includes/footer.php') ?>


  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <script src="js/jquery.zoom.min.js"></script>
  <script src="js/jquery.dd.min.js"></script>
  <script src="js/jquery.slicknav.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/main.js"></script>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>
  <script defer src="../../../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"612e6b76be71398f","version":"2021.1.1","si":10}'></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/fashi/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Jan 2021 07:39:40 GMT -->

</html>
