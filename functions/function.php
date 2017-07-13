<?php
$con = mysqli_connect("localhost","root","","social_network") or die("Connection was not stablished");

					//function for Getting Topics from database	
                     function getTopics(){
                     	global $con;
                     	global $topic_title;
                     	
						$get_topics = "select  * from topics";
                        $run_topics = mysqli_query($con,$get_topics);

                        while ($row = mysqli_fetch_array($run_topics)) {
                        	
                        	$topic_id = $row['topic_id'];
                        	$topic_title = $row['topic_title'];

                        	echo "<option value='$topic_id'>$topic_title</option>";
		                    
		                    
                        	
                        }
                  }

                   //function for Getting Topics from database
                  function insertPost(){

                  	global $topic; 
                  	global $con;

                    global $user_id;

                      if(isset($_POST['sub'])){

                      	//$title = $_POST['title'];

                      	$content = addslashes($_POST['content']);
                      	$topic = $_POST['topic'];

                      	if($content==''){

                      		echo "<h3>Please enter Your question<h3>";
                      		exit();
                      	}

                      	else{

                      	$insert = "insert into posts (user_id,topic_id,post_content,post_date) values ('$user_id','$topic','$content',NOW())";

                      	$run = mysqli_query($con,$insert);

                      	if($run){

                      		echo "
                                 <div class='alert alert-success alert-dismissible fade in' role='alert' style='margin-top:70px;  text-align:center;  font-weight:strong; font-size:25px;'> <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>X</span></button> <strong>Posted to timeline,Looks great! !</strong> </div>
                      		";

                      		$update = "update users set posts = 'yes' where user_id='$user_id'";
                      		$run_update=mysqli_query($con,$update);
                      	}
                      }

                  }
              }


                  //function for displaying posts

                  function get_posts(){

                     global $con;
                     

                     $per_page= 5;
                     if(isset($_GET['page'])){

                     	$page = $_GET['page'];
                     }

                     else{
                     	$page=1;
                     }

                     $start_from = ($page-1) * $per_page;

                     $get_posts = "select * from posts ORDER by 1 DESC LIMIT $start_from, $per_page";

                     $run_posts = mysqli_query($con,$get_posts);

                     while($row_posts=mysqli_fetch_array($run_posts)){

                     	$post_id = $row_posts['post_id'];
                     	$user_id = $row_posts['user_id'];
                     	$post_title = $row_posts['post_title'];
                     	$content = $row_posts['post_content'];
                     	$post_date = $row_posts['post_date'];

                     	//getting the user who has posted the thread

                     	$user = "select * from users where user_id='$user_id' AND posts='yes'";

                     	$run_user = mysqli_query($con,$user);
                     	$row_user=mysqli_fetch_array($run_user);
                     	$user_name=$row_user['user_name'];
                     	$user_image = $row_user['user_image'];
								
									// getting the user session
                     $user_com = $_SESSION['user_email'];
                     $get_com = "select * from users where user_email='$user_com'";
                     $run_com = mysqli_query($con,$get_com);
                     $row_com = mysqli_fetch_array($run_com);
                     $user_com_id = $row_com['user_id'];
                     $user_com_name = $row_com['user_name'];

						global $comment;

						
                     	if(isset($_POST['reply'])){


                      	$comment = $_POST['comment'];

                      	$insert = "insert into comments (post_id,user_id,comment,comment_author,date) values ('$post_id','$user_id','$comment','$user_com_name',NOW())";

                      	$run = mysqli_query($con,$insert);

                      	//echo "<h2>Your Reply was added!</h2>";

                      }


                        echo "
                         <br><br>
                         <div class='post' style='background-color:#ECF0F5'>
                      <div class='user-block'>
                         <img class='img-circle img-bordered-sm' src='user/user_images/$user_image' alt='user image>
                        <span class='username'>
                          <a href='href='user_profile.php?user_id=$user_id''>$user_name</a>
                        </span>
                        <span class='description'>$post_date</span>
                      </div><!-- /.user-block -->
                      <p>$content</p>
                   
                     <ul class='list-inline'>
                        <li><a href='#' class='link-black text-sm'><i class='fa fa-thumbs-o-up margin-r-5'></i><span class='badge badge-success'> <?php getLikes($post_id); ?></span></a></li>
                        <li><a href='#' class='link-black text-sm'><i class='fa fa-share margin-r-5'></i> Share</a></li>
                        <span class='st_whatsapp' displayText='WhatsApp'></span>
<span class='st_facebook' displayText='Facebook'></span>
<span class='st_twitter' displayText='Tweet'></span>
<span class='st_linkedin' displayText='LinkedIn'></span>
<span class='st_email' displayText='Email'></span>
<span class='st_sharethis' displayText='ShareThis'></span>
                       
                        <li><a href='single.php?post_id=$post_id' class='link-black text-sm'><i class='fa fa-book margin-r-5'></i> Full Post</a></li>
                        <li><a href='#' class='link-black text-sm'><i class='fa fa-tag margin-r-5'></i>topics</a></li>
                        <li class='pull-right'><a href='#' class='link-black text-sm'><i class='fa fa-comments-o margin-r-5'></i> Comments (5)</a></li>
                      </ul> 

                    

                       
                     <div > <form method='post' ><textarea class='form-control' style='background-color:rgb(226, 226, 255); width:700px; display:inline; float:left;' required='required' type='text' placeholder='Type a comment' name='comment' style=''></textarea>
                     <button type='submit' class='btn btn-primary lg' style='height:55px' name='reply'>Comment</button>
                     </form></div>
                     <div></div>

                    
                     
                    </div><!-- /.post -->

                      ";

                      

                     	//now displaying all at once
                     	/*echo "<div id-'posts'>
                         <p><img src='user/user_images/$user_image' width='50' height='50'></p>
                         <h3><a href='user_profile.php?user_id=$user_id'>$user_name</a></h3>
                         
                         <p>$content</p>
                         <a href='single.php?post_id=$post_id' style='float:right;'><button>See Replies or Reply to this</button></a>
                     	</div>
                     	";*/


                     }

                     include("pagination.php");

                  }


                  function single_post(){

                  	if(isset($_GET['post_id'])){

                  		global $con;
                  		$get_id = $_GET['post_id'];

                  		$get_posts = "select * from posts where post_id='$get_id'";

                        $run_posts = mysqli_query($con,$get_posts);

                        $row_posts=mysqli_fetch_array($run_posts);

                     	$post_id = $row_posts['post_id'];
                     	$user_id = $row_posts['user_id'];
                     	$post_title = $row_posts['post_title'];
                     	$content = $row_posts['post_content'];
                     	$post_date = $row_posts['post_date'];

                     	//getting the user who has posted the thread

                     	$user = "select * from users where user_id='$user_id' AND posts='yes'";

                     	$run_user = mysqli_query($con,$user);
                     	$row_user=mysqli_fetch_array($run_user);
                     	$user_name=$row_user['user_name'];
                     	$user_image = $row_user['user_image'];


                     	// getting the user session
                     $user_com = $_SESSION['user_email'];
                     $get_com = "select * from users where user_email='$user_com'";
                     $run_com = mysqli_query($con,$get_com);
                     $row_com = mysqli_fetch_array($run_com);
                     $user_com_id = $row_com['user_id'];
                     $user_com_name = $row_com['user_name'];
						


						global $comment;
                     	

                     	if(isset($_POST['reply'])){


                      	$comment = $_POST['comment'];

                      	$insert = "insert into comments (post_id,user_id,comment,comment_author,date) values ('$post_id','$user_id','$comment','$user_com_name',NOW())";

                      	$run = mysqli_query($con,$insert);


                      }


                        echo "
                         <br><br>
                         <div class='post' style='background-color:#ECF0F5'>
                      <div class='user-block'>
                         <img class='img-circle img-bordered-sm' src='user/user_images/$user_image' alt='user image>
                        <span class='username'>
                          <a href='href='user_profile.php?user_id=$user_id''>$user_name</a>
                        </span>
                        <span class='description'>$post_date</span>
                      </div><!-- /.user-block -->
                      <p>$content</p>
                      <ul class='list-inline'>
                        <li><a href='#' class='link-black text-sm'><i class='fa fa-thumbs-o-up margin-r-5'></i><span class='badge badge-success'> <?php getLikes($post_id); ?></span></a></li>
                        <li><a href='#' class='link-black text-sm'><i class='fa fa-share margin-r-5'></i> Share</a></li>
                       
                        <li><a href='#' class='link-black text-sm'><i class='fa fa-book margin-r-5'></i> Full Post</a></li>
                        <li><a href='#' class='link-black text-sm'><i class='fa fa-tag margin-r-5'></i>topics</a></li>
                        <li class='pull-right'><a href='#' class='link-black text-sm'><i class='fa fa-comments-o margin-r-5'></i> Comments (5)</a></li>
                        
                      </ul>
                      <div > <form method='post' ><textarea class='form-control' style='background-color:rgb(226, 226, 255); width:700px; display:inline; float:left;' required='required' type='text' placeholder='Type a comment' name='comment' style=''></textarea>
                     <button type='submit' class='btn btn-primary lg' style='height:55px' name='reply'>Comment</button>
                     </form></div>
                     

                    
                     
                    

                      "; 
                      include("comments.php");
   
                      echo " </div><!-- /.post --> ";
                  	}
                  }
                  


             /* function getLikes($id)
              {

              	$sql = "select * from likes where post_id = $post_id";
              	$query = mysql_query($sql);
              	return mysql_num_rows($query);
              }*/


?>