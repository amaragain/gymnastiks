<?php //require_once('config.php');
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Viswajit Nikhath Gymnastiks</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="plugins/notify/bootstrap-notify.css" />
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/dash.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="#">
        <img src="dist/img/logo.png" /> <br />
        <b>Viswajit Nikhath Gymnastiks</b>
      </a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Sign in to dashboard</p>

      <form id="loginForm" method="post">
        <div class="form-group has-feedback">
          <input id="login-email" type="email" class="form-control" placeholder="Email">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input id="login-pass" type="password" class="form-control" placeholder="Password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div><br>
        <div class="row">
          <div class="col-xs-6">
            <a href="#" class="btn btn-block btn-social btn-vng-fade btn-flat"> Register </a>
            <!-- <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div> -->
          </div>
          <!-- /.col -->
          <div class="col-xs-6">
            <button id="loginButton" class="btn btn-block btn-social btn-vng btn-flat"> Sign In </button>
            <!-- <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button> -->
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- <div class="social-auth-links text-center">
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign In </a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Register </a>
    </div> -->
      <!-- /.social-auth-links -->
      <br>
      <a class="login-plain-link" href="#">I forgot my password</a><br>
      <!-- <a href="register.html" class="text-center">Register a new membership</a> -->

    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery 3 -->
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="plugins/notify/bootstrap-notify.min.js"></script>
  <!-- iCheck -->
  <script src="plugins/iCheck/icheck.min.js"></script>

  <script src="dist/js/custom.js"></script>



  <script>
    // Submit Login form
    $('#loginButton').click(function(e) {
      e.preventDefault();

      if (
        $('#login-email').val() != '' &&
        $('#login-pass').val() != ''
      ) {

        $.post(
          'api/login.php', {
            "email": $('#login-email').val(),
            "password": $('#login-pass').val()
          },
          function(resp) {

            let data = JSON.parse(resp);
            if (data.error) {
              if (data.errorcode == 3)
                notify('danger', 'Opps! Entered wrong details.');
            } else {
              notify('blank', '', 'index.php');
            }
            console.log(data);

          })
      }
    });
    
  </script>
</body>

</html>