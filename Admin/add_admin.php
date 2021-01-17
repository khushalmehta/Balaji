<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../assets/img/favicon.ico" rel="icon">

  <title>Add Admin</title>

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
            <h3 class="page-header"><i class="fa fa-files-o"></i> Add Admin</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li><i class="icon_document_alt"></i>Admin</li>
              <li><i class="fa fa-files-o"></i>Add Admin</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Enter Admin Details
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="POST" action="add-admin-script.php">
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Full Name <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="name" minlength="5" placeholder="Please enter Name" type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">E-Mail <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="cemail" type="email" name="email" placeholder="Please enter E-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="curl" class="control-label col-lg-2">Password <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="curl" type="password" name="password" pattern=".{6,}" placeholder="Min. 6 characters" required/>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit">Add</button>
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

  <!--custome script for all page-->
  <script src="js/scripts.js"></script>


</body>

</html>
