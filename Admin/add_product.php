<?php
    require 'config.php';
    $query="select distinct pcategory from products";
    $cat=mysqli_query($con,$query);
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
            <h3 class="page-header"><i class="fa fa-files-o"></i> Add New Product</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li><i class="icon_document_alt"></i>Products</li>
              <li><i class="fa fa-files-o"></i>Add Product</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->

<script type="text/javascript">
	function show(){
		document.getElementById("p").style.visibility="";
	}
</script>


        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Add New Product
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="POST" action='add_product_script.php' enctype="multipart/form-data">
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2"> Product Name<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="pname"  type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="pcat" class="control-label col-lg-2"> Product Category<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <select id="pcat" name="pcat">
                        	<?php
            while($r=mysqli_fetch_array($cat)){
?>
                           <option><?php echo $r['pcategory'] ?></option>
                           <?php } ?>
                         </select>&nbsp;&nbsp;&nbsp;
                         <button onclick="show()" style="border: none;color: blue;background: transparent;">Add New Category</button>
                         <input id="p" style="visibility: hidden;border-width: 0.1px;border-radius: 8%" type="text" name="pcat">
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2"> Product Price</label>
                      <div class="col-lg-10">
                        <input class="form-control" id="price" name="price"  type="text"  />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="curl" class="control-label col-lg-2">ProductDescription</label>
                      <div class="col-lg-10">
                          <textarea class="form-control ckeditor" id="pdes" name="pdes" rows="6"></textarea>
                      </div>
                    </div>

                    <div class="form-group  ">
                      <label for="image" class="control-label col-lg-2">Product Image</label>
                      <div class="col-lg-10">
                        <input class="form-control" id="image"  type="file" name="image" accept="image/*"  required/>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit" name="submit" value="submit">Save</button>
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
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->

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
