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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

<?php include('includes/header.php') ?>


  <section class="hero-section">
    <div class="hero-items owl-carousel">
      <div class="single-hero-items set-bg" data-setbg="img/c3.png">
        <div class="container">
          <div class="row">
            <div class="col-lg-5">
            
              <h1 style="color: #e7ab3c">Shree Balaji Enterprises</h1>
              <p style="color: white;font-size: 25px;">Wholesale Trader of Submersible Wire & Copper Winding Wire from Pune</p>
              <a href="#" class="primary-btn">Our Products</a>
              <i class="fa fa-play-circle" style="font-size:48px;color:#e7ab3c"></i>
            </div>
          </div>
          
        </div>
      </div>
      <div class="single-hero-items set-bg" data-setbg="img/cables.jpg">
        <div class="container">
          <div class="row">
            <div class="col-lg-5">
            
              <h1 style="color: #e7ab3c">Shree Balaji Enterprises</h1>
              <p style="color: white;font-size: 20px;">Wholesale Trader of Submersible Wire & Copper Winding Wire from Pune</p>
              <a href="#" style="border-radius: 20px" class="primary-btn">Our Products</a>&nbsp;
                <i class="fa fa-play-circle" style="font-size:48px;color:#e7ab3c"></i>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section><br>




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
              <h5 style="font-size: 22px;"><br /> <b><u>Shree Balaji <span style="color:#e7ab3c;">Enterprises</span></u></b> is a dependable name in the market as wholesaler and trader of Automobile Products, established in 2012. </h5>
                <hr>
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

 <section  class="deal-of-week bg-dark">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h3 style="color:#fff; font-weight: 800;">About<span style="color:#e7ab3c;"> Us</span></h3>
        <br />
        <h5 style="color:#fff;">We are reckoned as leading wholesaler and trader of Enameled & Submersible copper winding wire & insulating Products.
           Our product range is widely appreciated for its high quality, corrosion proof, smooth finish and competitive prices.</h5>
<hr>
        </div>

      <div class="row" >
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="" style="text-align: center;">
            <i class="fa fa-briefcase" aria-hidden="true" ></i>
            <div class="card-body" >
              <h5 class="card-title" style="color:#fff;">Nature Of Business</h5>
              <p class="card-text" style="color:#fff;">Wholesale Traders</p>
              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="" style="text-align: center;">
            <i class="fa fa-users" aria-hidden="true"  ></i>
            <div class="card-body">
              <h5 class="card-title" style="color:#fff;">Total Number Of Employees</h5>
                <p class="card-text" style="color:#fff;">26 To 50 People</p>
              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="" style="text-align: center;">
            <i class="fa fa-building-o" aria-hidden="true"  ></i>
            <div class="card-body">
              <h5 class="card-title" style="color:#fff;">Year Of Estabilishment</h5>
              <p class="card-text" style="color:#fff;">2012</p>
              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
          </div>
        </div>

      </div>
      <div class="row" >
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="" style="text-align: center;">
            <i class="fa fa-gavel" aria-hidden="true"  ></i>
            <div class="card-body">
              <h5 class="card-title" style="color:#fff;">Legal Status Of Firm</h5>
              <p class="card-text" style="color:#fff;">Individual Proprietor</p>
              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="" style="text-align: center;">
            <i class="fa fa-money" aria-hidden="true"  ></i>
            <div class="card-body">
              <h5 class="card-title" style="color:#fff;">Annual Turnover</h5>
                <p class="card-text" style="color:#fff;">Rs. 25 to 50 Crore</p>
              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="" style="text-align: center;">
            <i class="fa fa-file-text-o" aria-hidden="true"  ></i>
            <div class="card-body">
              <h5 class="card-title" style="color:#fff;">GST No.</h5>
              <p class="card-text" style="color:#fff;">27CIEPS5499B3ZT</p>
              <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
          </div>
        </div>

      </div>
  </section>

  <section id="testimonials" class="testimonials">

          <div class="container" style="max-width:100%;">
      <div id="testimonial_095" class="carousel slide testimonial_095_indicators testimonial_095_control_button thumb_scroll_x swipe_x ps_easeOutSine" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
        <div class="section-title carousel-inner">
          <h3 style="color:#fff; font-weight: 800;"><span style="color:#e7ab3c;">Testimonials</span></h3>
          <br />
          <h5 style="color:#fff;">What users feels about us</h5>
  <hr>
          </div>
          <ol class="carousel-indicators">
              <li data-target="#testimonial_095" data-slide-to="0" class="active"></li>
              <li data-target="#testimonial_095" data-slide-to="1"></li>
              <li data-target="#testimonial_095" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                  <div class="testimonial_095_slide">
                    <img id="timg" src="img/t1.png" alt="">
                    <h5 id="h5">Rahul Kumar</h5>
                      <p id="p"><i class="bx bxs-quote-alt-left quote-icon-left"></i>  He is our Front end developer who is an enthusiastic tech learner, curious to learn.
                        His interests lie in the field of automobiles, coding etc. His affable personality helps him build a positive bond with people.  <i class="bx bxs-quote-alt-right quote-icon-right"></i></p>
                  </div>
              </div>
              <div class="carousel-item">
                  <div class="testimonial_095_slide"> <img id="timg" src="img/t1.png" alt="">
                    <h5 id="h5">Khushal Mehta</h5>
                    <p id="p"><i class="bx bxs-quote-alt-left quote-icon-left"></i>  He is our Front end developer who is an enthusiastic tech learner, curious to learn.
                      His interests lie in the field of automobiles, coding etc. His affable personality helps him build a positive bond with people.  <i class="bx bxs-quote-alt-right quote-icon-right"></i></p>
                  </div>
              </div>
              <div class="carousel-item">
                  <!-- Text Layer -->
                  <div class="testimonial_095_slide"> <img id="timg" src="img/t1.png" alt="">
                    <h5 id="h5">Kick Batouski</h5>
                    <p id="p"><i class="bx bxs-quote-alt-left quote-icon-left"></i>  He is our Front end developer who is an enthusiastic tech learner, curious to learn.
                      His interests lie in the field of automobiles, coding etc. His affable personality helps him build a positive bond with people.  <i class="bx bxs-quote-alt-right quote-icon-right"></i></p>
                  </div>
              </div>
          </div>
          <!-- Left Control -->
           <a class="carousel-control-prev" href="#testimonial_095" data-slide="prev"> <span class="fa fa-chevron-left"></span> </a>
           <!-- Right Control -->
           <a class="carousel-control-next" href="#testimonial_095" data-slide="next"> <span class="fa fa-chevron-right"></span> </a>
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
</body>


</html>
