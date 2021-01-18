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

<div id="preloder">
<div class="loader"></div>
</div>

<header class="header-section">


<div class="nav-item">
<div class="container">
<div class="nav-depart">
<div class="depart-btn">
<i class="ti-menu"></i>
<span>All departments</span>
<ul class="depart-hover">
<li class="active"><a href="#">Women’s Clothing</a></li>
<li><a href="#">Men’s Clothing</a></li>
<li><a href="#">Underwear</a></li>
<li><a href="#">Kid's Clothing</a></li>
<li><a href="#">Brand Fashion</a></li>
<li><a href="#">Accessories/Shoes</a></li>
<li><a href="#">Luxury Brands</a></li>
<li><a href="#">Brand Outdoor Apparel</a></li>
</ul>
</div>
</div>
<nav class="nav-menu mobile-menu">
<ul>
<li><a href="index-2.html">Home</a></li>
<li><a href="shop.html">Shop</a></li>
<li><a href="#">Collection</a>
<ul class="dropdown">
<li><a href="#">Men's</a></li>
<li><a href="#">Women's</a></li>
<li><a href="#">Kid's</a></li>
</ul>
</li>
<li><a href="blog.html">Blog</a></li>
<li><a href="contact.html">Contact</a></li>
<li><a href="#">Pages</a>
 <ul class="dropdown">
<li><a href="blog-details.html">Blog Details</a></li>
<li><a href="shopping-cart.html">Shopping Cart</a></li>
<li><a href="check-out.html">Checkout</a></li>
<li><a href="faq.html">Faq</a></li>
<li><a href="register.html">Register</a></li>
<li><a href="login.html">Login</a></li>
</ul>
</li>
</ul>
</nav>
<div id="mobile-menu-wrap"></div>
</div>
</div>
</header>


<div class="breacrumb-section">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="breadcrumb-text">
<a href="#"><i class="fa fa-home"></i> Home</a>
<span>Shop</span>
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
	<li><a href="shop.php?pcategory=all">All</a></li>
		<?php
            while($r=mysqli_fetch_array($cat)){
?>
<li><a href="shop.php?pcategory=<?php echo $r['pcategory'] ?>"><?php echo $r['pcategory']; ?></a></li>

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

<div class="pi-pic">
<img style="width: 100px;height: 200px;" src="Admin/<?php echo $row['pimage'];?>" alt="">

<div class="icon">
<i class="icon_heart_alt"></i>
</div>
<ul>
<li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
<li class="quick-view"><a href="#">+ Quick View</a></li>
<li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
</ul>
</div>
<div class="pi-text">
<div class="catagory-name">Towel</div>
<a href="#">
<h5>Pure Pineapple</h5>
</a>
<div class="product-price">
$14.00
<span>$35.00</span>
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


<div class="partner-logo">
<div class="container">
<div class="logo-carousel owl-carousel">
<div class="logo-item">
<div class="tablecell-inner">
<img src="img/logo-carousel/logo-1.png" alt="">
</div>
</div>
<div class="logo-item">
<div class="tablecell-inner">
<img src="img/logo-carousel/logo-2.png" alt="">
</div>
</div>
<div class="logo-item">
<div class="tablecell-inner">
<img src="img/logo-carousel/logo-3.png" alt="">
</div>
</div>
<div class="logo-item">
<div class="tablecell-inner">
<img src="img/logo-carousel/logo-4.png" alt="">
</div>
</div>
<div class="logo-item">
<div class="tablecell-inner">
<img src="img/logo-carousel/logo-5.png" alt="">
</div>
</div>
</div>
</div>
</div>


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