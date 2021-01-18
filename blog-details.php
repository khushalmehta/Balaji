<?php
    require 'Admin/config.php';
    $bid= mysqli_real_escape_string($con, $_GET['bid']);
    $query="select * from blog where bid='$bid'";
    $res= mysqli_query($con, $query) or die(mysqli_error($con));

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


  <section class="blog-details spad">
    <div class="container">
      <div class="row">
        <?php
          while($row=mysqli_fetch_array($res)) {
        ?>
        <div class="col-lg-12">
          <div class="blog-details-inner">
            <div class="blog-detail-title">
              <h2><?php echo $row['blog_title'];?></h2>
              <p><?php echo $row['blog_summary'] ?><span>- <?php echo $row['blog_date'] ?></span></p>
            </div>
            <div class="blog-large-pic">
              <img src="Admin/<?php echo $row['blog_image'];?>"  alt="">
            </div>
            <div class="blog-detail-desc">
              <p><?php echo $row['blog_content'] ?></p>
            </div>
            </div>
            
          </div>
        <?php
      }
         ?>
        </div>
      </div>
      <center> <a href="blog.php" style="border-radius: 20px" class="primary-btn">Check More Blogs</a></center>
     
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
</body>

</html>
