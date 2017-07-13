  <?php
  include("includes/connection.php");
  if(isset($_POST['sign_up'])){

       
       $name = mysqli_real_escape_string($con,$_POST['u_name']);
       
       $email = mysqli_real_escape_string($con,$_POST['u_email']);
       $pass = mysqli_real_escape_string($con,$_POST['u_pass']);
       
  
       $status = "unverified";
       $posts = "No";

       $get_email = "select * from users where user_email='$email'";
       $run_email = mysqli_query($con,$get_email);
       $check =  mysqli_num_rows($run_email);

       if($check==1){

        echo '<script>alert("This E-mail is already registered,Please try with another E-mail")</script>';
        exit();

       }

       if(strlen($pass)<=6){

       	echo '<script>alert("Password should be 6 characters")</script>';
       }

       else{

             $insert = "insert into users (user_name,user_email,user_pass,user_image,register_date,last_login,status,posts) values ('$name','$email','$pass','default.jpg',NOW(),NOW(),'$status','$posts')";
             
              $run_insert = mysqli_query($con,$insert);

              if($run_insert){

                $_SESSION['user_email']=$email;

              	echo '<div class="alert alert-success" role="alert">
  <a href="#" class="alert-link">Registration Successful</a>
</div>';
echo "<script>window.open('home.php','_self')</script>";
              }

          
        
       }

     }

     ?>
