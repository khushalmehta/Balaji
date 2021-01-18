<?php
require 'Admin/config.php';
$cat=$_GET['pcategory'];

	if($cat=="all"){
		$query="select * from products";
		$display_product=mysqli_query($con,$query);
	}
	else
	{$query="select * from products where pcategory='$cat'";
    $display_product=mysqli_query($con,$query);}
    
    $cat=mysqli_query($con,"select distinct pcategory from products");



 ?>

<!DOCTYPE html>
<html lang="zxx">


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
</head>
<body>

<?php include('includes/header.php') ?>

<br><br><br><br><br>
<div class="breacrumb-section">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="breadcrumb-text">
<a href="#"><i class="fa fa-home"></i> Home</a>
<span>Our Products</span>
</div>
</div>
</div>
</div>
</div>







<section class="product-shop spad">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
<div class="filter-widget">
<h4 class="fw-title">Categories</h4>
<ul class="filter-catagories">
	<li><a href="products.php?pcategory=all">All</a></li>
		<?php
            while($r=mysqli_fetch_array($cat)){
?>
<li><a href="products.php?pcategory=<?php echo $r['pcategory'] ?>"><?php echo $r['pcategory']; ?></a></li>

<?php } ?>
</ul>
</div>
 
</div>




<div class="col-lg-9 order-1 order-lg-2">


<div class="product-list">
<div class="row">
<?php
            while($row=mysqli_fetch_array($display_product)){
?>
<div class="col-lg-4 col-sm-6">
	
<div class="product-item">

<div class="pi-pic single-banner ">

<img style="width: 100px;height: 200px;" src="Admin/<?php echo $row['pimage'];?>"  alt="">
<!--<div class="sale">Sale</div>-->

<div class="container">
<center >
<h4 style="top: 40%;"  class="overlay"><a style="background-color: rgb(4,4,4,0.8); color: #e7ab3c;font-size: 15px;padding:8px;border-radius: 20px;font-weight: bolder;" href="product-details.php?id=<?php echo $row['id'] ?>">View Details</a></h4>
</center>
</div>
</div>
<div class="pi-text">
<div class="catagory-name"><?php echo $row['pcategory'];?></div>

<h5><?php echo $row['price'];?></h5>

<div class="product-price">
<?php echo $row['pname'];?>

</div>
</div>
</div>

</div>
<?php } ?>






</div>
</div>

</div>
</div>
</div>
</section>




<footer class="footer-section">
<div class="container">
<div class="row">
<div class="col-lg-3">
<div class="footer-left">
<div class="footer-logo">
<a href="#"><img src="img/footer-logo.png" alt=""></a>
</div>
<ul>
<li>Address: 60-49 Road 11378 New York</li>
<li>Phone: +65 11.188.888</li>
<li>Email: <a href="https://preview.colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0a626f6666652469656665786663684a6d676b636624696567">[email&#160;protected]</a></li>
</ul>
<div class="footer-social">
<a href="#"><i class="fa fa-facebook"></i></a>
<a href="#"><i class="fa fa-instagram"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-pinterest"></i></a>
</div>
</div>
</div>
<div class="col-lg-2 offset-lg-1">
<div class="footer-widget">
<h5>Information</h5>
<ul>
<li><a href="#">About Us</a></li>
<li><a href="#">Checkout</a></li>
<li><a href="#">Contact</a></li>
<li><a href="#">Serivius</a></li>
</ul>
</div>
</div>
<div class="col-lg-2">
<div class="footer-widget">
<h5>My Account</h5>
<ul>
<li><a href="#">My Account</a></li>
<li><a href="#">Contact</a></li>
<li><a href="#">Shopping Cart</a></li>
<li><a href="#">Shop</a></li>
 </ul>
</div>
</div>
<div class="col-lg-4">
<div class="newslatter-item">
<h5>Join Our Newsletter Now</h5>
<p>Get E-mail updates about our latest shop and special offers.</p>
<form action="#" class="subscribe-form">
<input type="text" placeholder="Enter Your Mail">
<button type="button">Subscribe</button>
</form>
</div>
</div>
</div>
</div>
<div class="copyright-reserved">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="copyright-text">

Copyright &copy;<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>

</div>
<div class="payment-pic">
<img src="img/payment-method.png" alt="">
</div>
</div>
</div>
</div>
</div>
</footer>


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

<!-- Mirrored from preview.colorlib.com/theme/fashi/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Jan 2021 07:39:36 GMT -->
</html>