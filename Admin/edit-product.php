<?php
require 'config.php';
$id = $_GET['bid'];
    
    $record = mysqli_query($con, "SELECT * FROM products WHERE id=$id");

    if (count($record) == 1 ) {
      $row = mysqli_fetch_array($record);
      $pname = $row['pname'];
      $cat = $row['pcategory'];
      $pdes = $row['pdes'];
      $img = $row['pimage'];
      $price = $row['price'];
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../assets/img/favicon.ico" rel="icon">

  <title>Add Blog</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
    <?php
        include 'sidebar.php';
    ?>

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i>Update Product</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li><i class="icon_document_alt"></i>Products</li>
              <li><i class="fa fa-files-o"></i>Update Product</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Add New Product
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="POST"  enctype="multipart/form-data">
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2"> Product Name<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" value="<?php echo $pname ?>" name="pname"  type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="pcat" class="control-label col-lg-2"> Product Category<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <select  id="pcat" name="pcat">
                           <option><?php echo $cat ?></option>
                           <option>Wires</option>
                           <option>Copper Wires</option>
                           <option>Cables</option>
                           <option>Varnish</option>
                           <option>Ball Bearing</option>
                           <option>SKF Grease</option>
                           <option>Submersible Papers</option>
                           <option>Omega Rubber Tube</option>
                           <option>Fibre Glass Sleeves</option>
                         </select>
                       
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2"> Product Price</label>
                      <div class="col-lg-10">
                        <input class="form-control" id="price" value="<?php echo $price ?>" name="price"  type="text"  />
                      </div>
                    </div>
                     <div class="form-group ">
                      <label for="curl" class="control-label col-lg-2">Product Description</label>
                      <div class="col-lg-10">
                          <textarea class="form-control ckeditor" id="pdes"  name="pdes" rows="6"><?php echo $pdes ?></textarea>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit" name="submit" value="submit">Update</button>
                      </div>
                    </div>
                  </form>
                </div>

              </div>
            </section>
          </div>
        </div>
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">
          
         
        </div>
    </div>
  </section>
  <!-- container section end -->

  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- jquery validate js -->
  <script type="text/javascript" src="js/jquery.validate.min.js"></script>
  <!-- ck editor -->
  <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>

  <!--custome script for all page-->
  <script src="js/scripts.js"></script>


</body>

</html>

<?php 

if (isset($_POST['submit'])) {

   $pname =  $_POST['pname'];
   $price = $_POST['price'];

     $pdes = $_POST['pdes'];
     $pcat = $_POST['pcat'];
   
            $q=mysqli_query($con, "UPDATE products SET pname='$pname', price='$price', pdes='$pdes', pcategory='$pcat' WHERE id=$id");
            
            if( $q){
                echo "<script>alert('Product Updated Successfully'); window.location.href='view_products.php'</script>";
            }
           
            
    

        
    }

     
     
   
    

    

 ?>