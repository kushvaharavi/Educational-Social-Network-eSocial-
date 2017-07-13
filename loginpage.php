<!DOCTYPE html>
<?php
  session_start();
  include("functions/function.php");
  include("login.php");
 ?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Educational Social Network</title>

    <!-- Bootstrap -->
    <link href="styles/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles/custom.css">
     <!-- Font Awesome -->
    <link rel="stylesheet" href="styles/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="stylesionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="styles/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="styles/blue.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="navbar navbar-default">
       
      <div class="container">

             <div class="navbar-header page-scroll">
               
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              <a href="#home"  class="navbar-brand active" style="color:#FFC513">Educational Social Network</a>
            </div>

        

              <div class="collapse navbar-collapse">
                

                  <div id="navbar" class="navbar-collapse collapse">

                  <script src="js/loginValidation.js"></script>
                    <form class="navbar-form navbar-right" method="post" action="" name="loginForm" onsubmit="return loginValidateForm()">
                      <div class="form-group">
                        <input type="text" name="email" placeholder="Email" class="form-control">
                      </div>
                      <div class="form-group">
                        <input type="password" name="pass" placeholder="Password" class="form-control">
                      </div>
                      <button type="submit" name="login" class="btn btn-warning btn-flat">Sign in</button>
                    </form>
                  </div><!--/.navbar-collapse -->

                      

                    </div>        
          </div>
                        
               



 









                <div id="backimage">  

                <div class="intro-text col-sm-8">
                <div class="intro-heading" style='margin-top:94px; font-family: Montserrat,"Helvetica Neue",Helvetica,Arial,sans-serif;
    text-transform: uppercase;
    font-weight: 700;
    font-size: 70px;
    line-height: 75px;
    margin-bottom: 50px;
    width:900px;
    height:100%;
    '>One platform is enough for your all question</div>
                
 <div class="register-box" style="margin-top: -340px; margin-left: 950px;">
      <div class="register-logo">
        <a href="index.php"><b style="color:#FFC513;">AnyQ | FAQ</b></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
       
        <form action="" method="post" name="loginForm" onsubmit="return loginValidateForm()">
          <div class="form-group has-feedback">
            <input type="email" name="email" class="form-control" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="pass" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck ">
                <label>
                  <input type="checkbox"> Remember Me</input>
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" name="login" class="btn btn-warning btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>

        <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
        </div><!-- /.social-auth-links -->

        <a href="#">I forgot my password</a><br>
        <a href="index.php" class="text-center">Register a new membership</a>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>