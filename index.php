<?php
require 'Admin/config.php';
    $query="select * from products";
    $display_product=mysqli_query($con,$query);


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


  <section class="hero-section">
    <div class="hero-items owl-carousel">
      <div class="single-hero-items set-bg" data-setbg="img/hero-1.jpg">
        <div class="container">
          <div class="row">
            <div class="col-lg-5">
              <span>Bag,kids</span>
              <h1>Black friday</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore</p>
              <a href="#" class="primary-btn">Shop Now</a>
            </div>
          </div>
          <div class="off-card">
            <h2>Sale <span>50%</span></h2>
          </div>
        </div>
      </div>
      <div class="single-hero-items set-bg" data-setbg="img/hero-2.jpg">
        <div class="container">
          <div class="row">
            <div class="col-lg-5">
              <span>Bag,kids</span>
              <h1>Black friday</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore</p>
              <a href="#" class="primary-btn">Shop Now</a>
            </div>
          </div>
          <div class="off-card">
            <h2>Sale <span>50%</span></h2>
          </div>
        </div>
      </div>
    </div>
  </section>


  <div class="banner-section spad">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4">
          <div class="single-banner">
            <img src="img/banner-1.jpg" alt="">
            <div class="inner-text">
              <h4>Men’s</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="single-banner">
            <img src="img/banner-2.jpg" alt="">
            <div class="inner-text">
              <h4>Women’s</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="single-banner">
            <img src="img/banner-3.jpg" alt="">
            <div class="inner-text">
              <h4>Kid’s</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <section class="women-banner spad">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3">
          <div class="product-large set-bg" data-setbg="img/products/women-large.jpg">
            <h2>Women’s</h2>
            <a href="#">Discover More</a>
          </div>
        </div>
        <div class="col-lg-8 offset-lg-1">
          <div class="filter-control">
            <ul>
              <li class="active">Our Products</li>

            </ul>
          </div>
          <div class="product-slider owl-carousel">
            <?php
            while($row=mysqli_fetch_array($display_product)){
?>
            <div class="product-item">

              <div class="pi-pic">

                <img style="width: 100px;height: 200px;" src="Admin/<?php echo $row['pimage'];?>" alt="">
                <!--<div class="sale">Sale</div>-->

              </div>
              <div class="pi-text">
                <div class="catagory-name"><?php echo $row['pcategory'];?></div>
                <a href="#">
                  <h5><?php echo $row['price'];?></h5>
                </a>
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


  <section class="deal-of-week set-bg spad" data-setbg="img/time-bg.jpg">
    <div class="container">
      <div class="col-lg-6 text-center">
        <div class="section-title">
          <h2>Deal Of The Week</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed<br /> do ipsum dolor sit amet,
            consectetur adipisicing elit </p>
          <div class="product-price">
            $35.00
            <span>/ HanBag</span>
          </div>
        </div>
        <div class="countdown-timer" id="countdown">
          <div class="cd-item">
            <span>56</span>
            <p>Days</p>
          </div>
          <div class="cd-item">
            <span>12</span>
            <p>Hrs</p>
          </div>
          <div class="cd-item">
            <span>40</span>
            <p>Mins</p>
          </div>
          <div class="cd-item">
            <span>52</span>
            <p>Secs</p>
          </div>
        </div>
        <a href="#" class="primary-btn">Shop Now</a>
      </div>
    </div>
  </section>


  <section class="man-banner spad">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8">
          <div class="filter-control">
            <ul>
              <li class="active">Clothings</li>
              <li>HandBag</li>
              <li>Shoes</li>
              <li>Accessories</li>
            </ul>
          </div>
          <div class="product-slider owl-carousel">
            <div class="product-item">
              <div class="pi-pic">
                <img src="img/products/man-1.jpg" alt="">
                <div class="sale">Sale</div>
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
                <div class="catagory-name">Coat</div>
                <a href="#">
                  <h5>Pure Pineapple</h5>
                </a>
                <div class="product-price">
                  $14.00
                  <span>$35.00</span>
                </div>
              </div>
            </div>
            <div class="product-item">
              <div class="pi-pic">
                <img src="img/products/man-2.jpg" alt="">
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
                <div class="catagory-name">Shoes</div>
                <a href="#">
                  <h5>Guangzhou sweater</h5>
                </a>
                <div class="product-price">
                  $13.00
                </div>
              </div>
            </div>
            <div class="product-item">
              <div class="pi-pic">
                <img src="img/products/man-3.jpg" alt="">
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
                  $34.00
                </div>
              </div>
            </div>
            <div class="product-item">
              <div class="pi-pic">
                <img src="img/products/man-4.jpg" alt="">
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
                  <h5>Converse Shoes</h5>
                </a>
                <div class="product-price">
                  $34.00
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 offset-lg-1">
          <div class="product-large set-bg m-large" data-setbg="img/products/man-large.jpg">
            <h2>Men’s</h2>
            <a href="#">Discover More</a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <div class="instagram-photo">
    <div class="insta-item set-bg" data-setbg="img/insta-1.jpg">
      <div class="inside-text">
        <i class="ti-instagram"></i>
        <h5><a href="#">colorlib_Collection</a></h5>
      </div>
    </div>
    <div class="insta-item set-bg" data-setbg="img/insta-2.jpg">
      <div class="inside-text">
        <i class="ti-instagram"></i>
        <h5><a href="#">colorlib_Collection</a></h5>
      </div>
    </div>
    <div class="insta-item set-bg" data-setbg="img/insta-3.jpg">
      <div class="inside-text">
        <i class="ti-instagram"></i>
        <h5><a href="#">colorlib_Collection</a></h5>
      </div>
    </div>
    <div class="insta-item set-bg" data-setbg="img/insta-4.jpg">
      <div class="inside-text">
        <i class="ti-instagram"></i>
        <h5><a href="#">colorlib_Collection</a></h5>
      </div>
    </div>
    <div class="insta-item set-bg" data-setbg="img/insta-5.jpg">
      <div class="inside-text">
        <i class="ti-instagram"></i>
        <h5><a href="#">colorlib_Collection</a></h5>
      </div>
    </div>
    <div class="insta-item set-bg" data-setbg="img/insta-6.jpg">
      <div class="inside-text">
        <i class="ti-instagram"></i>
        <h5><a href="#">colorlib_Collection</a></h5>
      </div>
    </div>
  </div>


  <section class="latest-blog spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title">
            <h2>From The Blog</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="single-latest-blog">
            <img src="img/latest-1.jpg" alt="">
            <div class="latest-text">
              <div class="tag-list">
                <div class="tag-item">
                  <i class="fa fa-calendar-o"></i>
                  May 4,2019
                </div>
                <div class="tag-item">
                  <i class="fa fa-comment-o"></i>
                  5
                </div>
              </div>
              <a href="#">
                <h4>The Best Street Style From London Fashion Week</h4>
              </a>
              <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single-latest-blog">
            <img src="img/latest-2.jpg" alt="">
            <div class="latest-text">
              <div class="tag-list">
                <div class="tag-item">
                  <i class="fa fa-calendar-o"></i>
                  May 4,2019
                </div>
                <div class="tag-item">
                  <i class="fa fa-comment-o"></i>
                  5
                </div>
              </div>
              <a href="#">
                <h4>Vogue's Ultimate Guide To Autumn/Winter 2019 Shoes</h4>
              </a>
              <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single-latest-blog">
            <img src="img/latest-3.jpg" alt="">
            <div class="latest-text">
              <div class="tag-list">
                <div class="tag-item">
                  <i class="fa fa-calendar-o"></i>
                  May 4,2019
                </div>
                <div class="tag-item">
                  <i class="fa fa-comment-o"></i>
                  5
                </div>
              </div>
              <a href="#">
                <h4>How To Brighten Your Wardrobe With A Dash Of Lime</h4>
              </a>
              <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
            </div>
          </div>
        </div>
      </div>
      <div class="benefit-items">
        <div class="row">
          <div class="col-lg-4">
            <div class="single-benefit">
              <div class="sb-icon">
                <img src="img/icon-1.png" alt="">
              </div>
              <div class="sb-text">
                <h6>Free Shipping</h6>
                <p>For all order over 99$</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="single-benefit">
              <div class="sb-icon">
                <img src="img/icon-2.png" alt="">
              </div>
              <div class="sb-text">
                <h6>Delivery On Time</h6>
                <p>If good have prolems</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="single-benefit">
              <div class="sb-icon">
                <img src="img/icon-1.png" alt="">
              </div>
              <div class="sb-text">
                <h6>Secure Payment</h6>
                <p>100% secure payment</p>
              </div>
            </div>
          </div>
        </div>
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
<li class="active"><a href="index.html">Home</a></li>
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


<section class="hero-section">
<div class="hero-items owl-carousel">
<div class="single-hero-items set-bg" data-setbg="img/hero-1.jpg">
<div class="container">
<div class="row">
<div class="col-lg-5">
<span>Bag,kids</span>
<h1>Black friday</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
incididunt ut labore et dolore</p>
<a href="#" class="primary-btn">Shop Now</a>
</div>
</div>
<div class="off-card">
<h2>Sale <span>50%</span></h2>
</div>
</div>
</div>
<div class="single-hero-items set-bg" data-setbg="img/hero-2.jpg">
<div class="container">
<div class="row">
<div class="col-lg-5">
<span>Bag,kids</span>
<h1>Black friday</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
incididunt ut labore et dolore</p>
<a href="#" class="primary-btn">Shop Now</a>
</div>
</div>
<div class="off-card">
<h2>Sale <span>50%</span></h2>
</div>
</div>
</div>
</div>
</section>


<div class="banner-section spad">
<div class="container-fluid">
<div class="row">
<div class="col-lg-4">
<div class="single-banner">
<img src="img/banner-1.jpg" alt="">
<div class="inner-text">
<h4>Men’s</h4>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="single-banner">
<img src="img/banner-2.jpg" alt="">
<div class="inner-text">
<h4>Women’s</h4>
</div>
</div>
</div>
 <div class="col-lg-4">
<div class="single-banner">
<img src="img/banner-3.jpg" alt="">
<div class="inner-text">
<h4>Kid’s</h4>
</div>
</div>
</div>
</div>
</div>
</div>


<section class="women-banner spad">
<div class="container-fluid">
<div class="row">
<div class="col-lg-3">
<div class="product-large set-bg single-banner" data-setbg="img/wires1.jpg">

<a  href="#">Explore More</a>
</div>
</div>
<div class="col-lg-8 offset-lg-1">
<div class="filter-control">
<ul>
<li class="active">Our Products</li>

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
<h4 style="top: 40%;" class=" overlay"><a style="background-color: rgb(4,4,4,0.8);font-size: 20px;padding: 8px;border-radius: 25px;font-weight: bolder;" href="#">View Details</a></h4>
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
<div class="product-item">
<div class="pi-pic">
<img src="img/products/women-2.jpg" alt="">
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
<div class="catagory-name">Shoes</div>
<a href="#">
<h5>Guangzhou sweater</h5>
</a>
<div class="product-price">
$13.00
</div>
</div>
</div>
<div class="product-item">
<div class="pi-pic">
<img src="img/products/women-3.jpg" alt="">
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
$34.00
</div>
</div>
</div>
<div class="product-item">
<div class="pi-pic">
<img src="img/products/women-4.jpg" alt="">
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
<h5>Converse Shoes</h5>
</a>
<div class="product-price">
$34.00
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="deal-of-week set-bg spad" data-setbg="img/time-bg.jpg">
<div class="container">
<div class="col-lg-6 text-center">
<div class="section-title">
<h2>Deal Of The Week</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed<br /> do ipsum dolor sit amet,
consectetur adipisicing elit </p>
<div class="product-price">
$35.00
<span>/ HanBag</span>
</div>
</div>
<div class="countdown-timer" id="countdown">
<div class="cd-item">
<span>56</span>
<p>Days</p>
</div>
<div class="cd-item">
<span>12</span>
<p>Hrs</p>
</div>
<div class="cd-item">
<span>40</span>
<p>Mins</p>
</div>
<div class="cd-item">
<span>52</span>
<p>Secs</p>
</div>
</div>
<a href="#" class="primary-btn">Shop Now</a>
</div>
</div>
</section>


<section class="man-banner spad">
<div class="container-fluid">
<div class="row">
<div class="col-lg-8">
<div class="filter-control">
<ul>
<li class="active">Clothings</li>
<li>HandBag</li>
<li>Shoes</li>
<li>Accessories</li>
</ul>
</div>
<div class="product-slider owl-carousel">
<div class="product-item">
<div class="pi-pic">
<img src="img/products/man-1.jpg" alt="">
<div class="sale">Sale</div>
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
<div class="catagory-name">Coat</div>
<a href="#">
<h5>Pure Pineapple</h5>
</a>
<div class="product-price">
$14.00
<span>$35.00</span>
</div>
</div>
</div>
<div class="product-item">
<div class="pi-pic">
<img src="img/products/man-2.jpg" alt="">
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
<div class="catagory-name">Shoes</div>
<a href="#">
<h5>Guangzhou sweater</h5>
</a>
<div class="product-price">
$13.00
</div>
 </div>
</div>
<div class="product-item">
<div class="pi-pic">
<img src="img/products/man-3.jpg" alt="">
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
$34.00
</div>
</div>
</div>
<div class="product-item">
<div class="pi-pic">
<img src="img/products/man-4.jpg" alt="">
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
<h5>Converse Shoes</h5>
</a>
<div class="product-price">
$34.00
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-3 offset-lg-1">
<div class="product-large set-bg m-large" data-setbg="img/products/man-large.jpg">
<h2>Men’s</h2>
<a href="#">Discover More</a>
 </div>
</div>
</div>
</div>
</section>


<div class="instagram-photo">
<div class="insta-item set-bg" data-setbg="img/insta-1.jpg">
<div class="inside-text">
<i class="ti-instagram"></i>
<h5><a href="#">colorlib_Collection</a></h5>
</div>
</div>
<div class="insta-item set-bg" data-setbg="img/insta-2.jpg">
<div class="inside-text">
<i class="ti-instagram"></i>
<h5><a href="#">colorlib_Collection</a></h5>
</div>
</div>
<div class="insta-item set-bg" data-setbg="img/insta-3.jpg">
<div class="inside-text">
<i class="ti-instagram"></i>
<h5><a href="#">colorlib_Collection</a></h5>
</div>
</div>
<div class="insta-item set-bg" data-setbg="img/insta-4.jpg">
<div class="inside-text">
<i class="ti-instagram"></i>
<h5><a href="#">colorlib_Collection</a></h5>
</div>
</div>
<div class="insta-item set-bg" data-setbg="img/insta-5.jpg">
<div class="inside-text">
<i class="ti-instagram"></i>
<h5><a href="#">colorlib_Collection</a></h5>
</div>
</div>
<div class="insta-item set-bg" data-setbg="img/insta-6.jpg">
<div class="inside-text">
<i class="ti-instagram"></i>
<h5><a href="#">colorlib_Collection</a></h5>
</div>
</div>
</div>


<section class="latest-blog spad">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="section-title">
<h2>From The Blog</h2>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-md-6">
<div class="single-latest-blog">
<img src="img/latest-1.jpg" alt="">
<div class="latest-text">
<div class="tag-list">
<div class="tag-item">
<i class="fa fa-calendar-o"></i>
May 4,2019
</div>
<div class="tag-item">
<i class="fa fa-comment-o"></i>
5
</div>
 </div>
<a href="#">
<h4>The Best Street Style From London Fashion Week</h4>
</a>
<p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="single-latest-blog">
<img src="img/latest-2.jpg" alt="">
<div class="latest-text">
<div class="tag-list">
<div class="tag-item">
<i class="fa fa-calendar-o"></i>
May 4,2019
</div>
<div class="tag-item">
<i class="fa fa-comment-o"></i>
5
</div>
</div>
<a href="#">
<h4>Vogue's Ultimate Guide To Autumn/Winter 2019 Shoes</h4>
</a>
<p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="single-latest-blog">
<img src="img/latest-3.jpg" alt="">
<div class="latest-text">
<div class="tag-list">
<div class="tag-item">
<i class="fa fa-calendar-o"></i>
May 4,2019
</div>
<div class="tag-item">
<i class="fa fa-comment-o"></i>
5
</div>
</div>
<a href="#">
<h4>How To Brighten Your Wardrobe With A Dash Of Lime</h4>
</a>
<p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
</div>
</div>
</div>
</div>
<div class="benefit-items">
<div class="row">
<div class="col-lg-4">
<div class="single-benefit">
<div class="sb-icon">
<img src="img/icon-1.png" alt="">
</div>
<div class="sb-text">
<h6>Free Shipping</h6>
<p>For all order over 99$</p>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="single-benefit">
<div class="sb-icon">
<img src="img/icon-2.png" alt="">
</div>
<div class="sb-text">
<h6>Delivery On Time</h6>
<p>If good have prolems</p>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="single-benefit">
<div class="sb-icon">
<img src="img/icon-1.png" alt="">
</div>
<div class="sb-text">
<h6>Secure Payment</h6>
<p>100% secure payment</p>
</div>
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
<li>Email: <a href="https://preview.colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="93fbf6fffffcbdf0fcfffce1fffaf1d3f4fef2faffbdf0fcfe">[email&#160;protected]</a></li>
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


</html>
