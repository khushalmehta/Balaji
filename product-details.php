<?php
require 'Admin/config.php';

 $id= mysqli_real_escape_string($con, $_GET['id']);
$query="select * from products where id='$id'";
$res= mysqli_query($con, $query) or die(mysqli_error($con));
$q="select * from products";
    $display_product=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">



<head>
<meta charset="UTF-8">
<meta name="description" content="Fashi Template">
<meta name="keywords" content="Fashi, unica, creative, html">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Fashi | Template</title>

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
<!-- <link rel="stylesheet" href="css/blog.css" type="text/css"> -->
</head>
<body>
  
<!--=========== Header ============-->
    <?php include("includes/header.php") ?>



        <!-- ======= Blog Section ======= -->
       <section id="pdetail" class="pdetail" style="padding-top: 150px;">
      <div class="container">
        <?php
            while($row=mysqli_fetch_array($res)){
        ?>
        <div class="section-title">

        </div>
        <div class="row content">
          <div class="col-lg-6 col-md-4 col-sm-1 pt-4 pt-lg-0 order-1 order-lg-1  aos-init aos-animate " data-aos="fade-right" data-aos-delay="100">
            <div class="tab1 bg-white text-dark">
            <div id="pdetail-img" class="pdetail-img" >
              <h3 align="left"><span style="color: #0d335d;"><?php echo $row['pname'] ?></span></h3>
              <img class="" src="admin/<?php echo $row['pimage'];?>" >
            </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-4 col-sm-1 order-2 order-lg-2 aos-init aos-animate" data-aos="fade-left" data-aos-delay="150">
            <div class="tab1  bg-white text-dark ">
            <div id="pdetail-details" class="pdetail-details" >
              <h6><span style="color: #0d335d; font-size: 25px;"><?php echo $row['price'] ?></span> <a target="_blank" href="tel:08041947127" class="btn btn-outline-primary btn-sm">  Get Latest Price</b></a></h6><br>
              <h2><?php echo $row['pdes'];?></h2><br>

          </div>
          <div  class="row">
              <a class="btn btn-outline-primary" style="border:0; width: 600px" href="#contact" role="button">I Want To Buy</a>
          </div>
          </div>
        </div>
      </div>
    <?php } ?>
      </div>

  </section><br><br>

     

     <section class="women-banner spad">
<div class="container-fluid">
<div class="row">
<div class="col-lg-3">
<div class="product-large set-bg single-banner" data-setbg="img/wires1.jpg">

<a  href="products.php?pcategory=all">Explore More</a>
</div>
</div>
<div class="col-lg-8 offset-lg-1">
<div class="filter-control">
<ul>
<li class="active" style="font-weight: 800;font-size: 29px">Our <span style="color:#e7ab3c;">Products</span></li>

</ul>
</div>
<div class="product-slider owl-carousel">
  <?php
            while($row=mysqli_fetch_array($display_product)){
?>
<div class="product-item">

 <div class="pi-pic single-banner container">

<img style="width: 100px;height: 200px;" src="Admin/<?php echo $row['pimage'];?>"  alt="">
<!--<div class="sale">Sale</div>-->


<center>
<h4 style="top: 40%;"  class="overlay"><a style="background-color: rgb(4,4,4,0.8); color: #e7ab3c;font-size: 15px;padding:8px;border-radius: 20px;font-weight: bolder;" href="product-details.php?id=<?php echo $row['id'] ?>">View Details</a></h4>
</center>

</div>
<div class="pi-text">
<div class="catagory-name"><?php echo $row['pcategory'];?></div>

<h5><?php echo $row['price'];?></h5>

<div class="product-price">
<?php echo $row['pname'];?>

</div>
</div>
</div>
<?php } ?>



</div>
</div>
</div>
</div>
</section>







      <!--============ Footer ===============-->

        <?php include("includes/footer.php") ?>

      
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
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

    </body>

    </html>
