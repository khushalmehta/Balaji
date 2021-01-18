<?php
  require 'config.php';
  $select_cat="select DISTINCT pcategory from products";
  $select_cat=mysqli_query($con,$select_cat);
 ?>


<div id="preloder">
  <div class="loader"></div>
</div>


<header class="header-section fixed-top">
  <div class="nav-item">
    <div class="container">
      <div class="nav-depart me-auto">
      <a href="index.php" class="logo me-auto"><img src="img/shreeBalajiEnterprises.png" alt=""></a>
      </div>
      <nav class="nav-menu mobile-menu">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="about.php">About Us</a>
            <ul id="dropdown" class="dropdown">
              <li><a href="about.php">About Us</a></li>
              <li><a href="broucher.php?file=shree-balaji-enterprises" target="_blank">Download Broucher</a></li>
            </ul>
          </li>
          <li><a href="products.php?pcategory=all">Our Products</a>
            <ul class="dropdown" id="dropdown">
              <li><a href="products.php?pcategory=all">All Products</a></li>
              <?php
              while($c=mysqli_fetch_array($select_cat)){
                $select_prod="select * from products where pcategory like '".$c['pcategory']."'";
                $select_prod=mysqli_query($con,$select_prod);
            ?>
              <li><a href="#" ><?php echo $c['pcategory'];?></a>
                <ul id="dropdown">
                  <?php
                while($prod=mysqli_fetch_array($select_prod)){
               ?>
               <li><a href="products-details.php?pid=<?php echo $prod['id'];?>" ><?php echo $prod['pname'];?></a></li>
                 <?php
               }
                  ?>
                </ul>
              </li>
              <?php
        }
           ?>
            </ul>
          </li>
          <li><a href="blog.php">Blog</a></li>
        <li><a href="contact.php">Contact</a>
        </ul>
      </nav>
      <div id="mobile-menu-wrap"></div>
    </div>
  </div>
</header>
