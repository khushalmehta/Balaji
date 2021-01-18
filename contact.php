


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



  <div class="breacrumb-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb-text">
            <a href="index.php"><i class="fa fa-home"></i> Home</a>
            <span>Contact</span>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="map spad">
    <div class="section-title">
      <h3 style=" font-weight: 800;">Contact<span style="color:#e7ab3c;"> Us</span></h3>
      </div>
    <div class="container">
      <div class="map-inner">
        <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.500219355077!2d73.9236586147045!3d18.506284087417296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c1338f6b8ba3%3A0xcc064fe9a3fcf92f!2sShree%20Balaji%20Enterprises!5e0!3m2!1sen!2sin!4v1609662230207!5m2!1sen!2sin" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
      </div>
    </div>
  </div>


  <section class="contact-section spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="contact-widget">
            <div class="cw-item">
              <div class="ci-icon">
                <a target="_blank" href="https://goo.gl/maps/XhgVt8AtfB1PanV48"><i class="ti-location-pin"></i>
              </div>
              <div class="ci-text">
                <span>Address:</span>
                <p>Shree Balaji Enterprises, Magarpatta,<br>
                   Hadapsar, Pune - 411028,<br>
                    Maharashtra, India</p></a>
              </div>
            </div>
            <div class="cw-item">
              <div class="ci-icon">
                <a target="_blank" href="tel:+918041947127">  <i class="ti-mobile"></i>
              </div>
            <div style="height: 70px;padding-top: 10px;" class="ci-text">
                <span>Phone:</span>
                <p>+91 8041947127</p></a>
              </div>
            </div>
            <div class="cw-item">
              <div class="ci-icon">
                <a target="_blank" href="#">
                <i class="ti-email"></i>
              </div>
              <div style="height: 75px;padding-top: 10px;" class="ci-text">
                <span>Email:</span>
                <p>contact@example.com</p></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 offset-lg-1">
          <div class="contact-form">
            <div class="leave-comment">
              <h4><span style="color:#e7ab3c;">Enquiry</span> / Complaint</h4>
              <form method="POST" action="Admin/contact_script.php" class="comment-form">
                <div class="row">
                	<div class="col-lg-12">
                    <select class="form-control" id="pcat" name="pcat" required>
                            <option>Select Product Category</option>
                           <option>Submersible Wires</option>
                           <option>Copper Wires</option>
                           <option>Cables</option>
                           <option>Varnish</option>
                           <option>Ball Bearing</option>
                           <option>SKF Grease</option>
                           <option>Submersible Papers</option>
                           <option>Omega Rubber Tube</option>
                           <option>Fibre Glass Sleeves</option>
                         </select><br>
                  </div>
                  <div class="col-lg-6">
                    <input type="text" name="name" placeholder="Your name" required>
                  </div>
                  <div class="col-lg-6">
                    <input type="text" name="email" placeholder="Your email" required>
                  </div>
                  <div class="col-lg-6">
                    <input type="text" name="mobile" placeholder="Your Contact Number" required>
                  </div>
                  <div class="col-lg-6">
                    <input type="text" name="city" placeholder="Your city" required>
                  </div>
                  <div class="col-lg-12">

                    <textarea style="height: 90px;" name="message" placeholder="Your Queries/Complaints" required></textarea>
                    <center><button style="border-radius: 20px;" name="submit" type="submit" class="site-btn">Send message</button></center>
                  </div>
                </div>
              </form>
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
</body>

<!-- Mirrored from preview.colorlib.com/theme/fashi/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Jan 2021 07:39:40 GMT -->

</html>
