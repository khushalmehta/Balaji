<?php
    require 'config.php';
    if(!isset($_SESSION['admin_id'])){
      header('location:./login.php');
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
            <h3 class="page-header"><i class="fa fa-files-o"></i> Add New Blog</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li><i class="icon_document_alt"></i>Blogs</li>
              <li><i class="fa fa-files-o"></i>Add Blog</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Blog Details
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post" action='add_blog_script.php' enctype="multipart/form-data">
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2"> Blog Title<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="title" minlength="5" type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2"> Blog Summary <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="cemail" type="text" name="summary" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="curl" class="control-label col-lg-2">Blog Description</label>
                      <div class="col-lg-10">
                          <textarea class="form-control ckeditor" name="blog" rows="6"></textarea>
                      </div>
                    </div>
                    <div class="form-group  ">
                      <label for="image" class="control-label col-lg-2">Blog Image</label>
                      <div class="col-lg-10">
                        <input class="form-control" id="image" type="file" name="image" accept="image/*"  required/>
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
