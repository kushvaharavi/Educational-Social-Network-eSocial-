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
                    <form class="navbar-form navbar-right" method="post" action="">
                      <div class="form-group">
                        <input type="text" name="email" placeholder="Email" required="required" class="form-control">
                      </div>
                      <div class="form-group">
                        <input type="password" name="pass" placeholder="Password" required="required" class="form-control">
                      </div>
                      <button type="submit" name="login" class="btn btn-warning btn-flat">Sign in</button>
                    </form>
                  </div><!--/.navbar-collapse -->

                      

                    </div>        
          </div>
                        

                <div id="backimage"> 
                

<div class="intro-text col-lg-12">
                <div class="intro-heading col-lg-8" style='margin-top:94px; font-family: Montserrat,"Helvetica Neue",Helvetica,Arial,sans-serif;
    text-transform: uppercase;
    font-weight: 700;
    font-size: 70px;
    line-height: 75px;
    margin-bottom: 50px;
    width:900px;
    height:100%;
    '>
  One platform is enough for your all question</div>
<div class="col-lg-4">
      <div class="register-box" style="margin-top: -340px; margin-left: 950px;">
      <div class="register-logo">
        <a href="index.php"><b style="color:#FFC513;">AnyQ | FAQ</b></a>
      </div>
      <div class="register-box-body">
        <p class="login-box-msg">Register a new membership</p>
        <script src="js/signupValidation.js"></script>
        <form method="post" name="myForm" onsubmit="return validateForm()">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="u_name" placeholder="Full name">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="email" class="form-control" name="u_email" placeholder="Email" >
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="pass" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="u_pass" placeholder="Retype password">
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> I agree to the <a href="#">terms</a>
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" name="sign_up" class="btn btn-warning btn-block btn-flat">Register</button>
            </div><!-- /.col -->
          </div>
     
        </form>

      

        

        

        <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using Google+</a>
        </div>

        <a href="loginpage.php" class="text-center">I already have a membership</a>
      </div><!-- /.form-box -->
    </div><!-- /.register-box -->
</div>

               
                 
                  <?php
                    include("user_insert.php");
                  ?>
                 


           

</div> 
</div>


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