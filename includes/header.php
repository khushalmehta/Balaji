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
      <div class="nav-depart">
      <a href="index.php" class="logo me-auto"><img src="img/shreeBalajiEnterprises.png" alt=""></a>
      </div>
      <nav class="nav-menu mobile-menu">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="about.php">About Us</a>
            <ul class="dropdown">
              <li><a href="about.php">About Us</a></li>
              <li><a href="broucher.php?file=shree-balaji-enterprises" target="_blank">Download Broucher</a></li>
            </ul>
          </li>
          <li><a href="products.php">Our Products</a>
            <ul class="dropdown">
              <li><a href="products.php">All Products</a></li>
              <?php
              while($cat=mysqli_fetch_array($select_cat)){
                $select_prod="select * from products where pcategory like '".$cat['pcategory']."'";
                $select_prod=mysqli_query($con,$select_prod);
            ?>
              <li><a href="#" ><?php echo $cat['pcategory'];?></a>
                <ul class="dropdown">
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
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </nav>
      <div id="mobile-menu-wrap"></div>
    </div>
  </div>
</header>
