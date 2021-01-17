
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="img/favicon.ico" rel="icon">

  <title>Login- Admin</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

</head>

<body class="login-img3-body">

  <div class="container mt-2">

    <form class="login-form" action="login_submit.php" method="POST">
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <h4 class="text-center"><b>Welcome admin</b></h4>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" name="email" class="form-control" placeholder="Email" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
        <!--<label class="checkbox">-->
        <!--        <input type="checkbox" value="remember-me"> Remember me-->
        <!--        <span class="pull-right"> <a href="#"> Forgot Password?</a></span>-->
        <!--    </label>-->
        <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
        <!--<button class="btn btn-info btn-lg btn-block" type="submit">Signup</button>-->
      </div>
    </form>
    <div class="text-right">
      <div class="credits">

          Designed & Developed by <a href="https://hspmsolutions.com/">HSPM Solutions LLP</a>
        </div>
    </div>
  </div>


</body>

</html>
