     <?php

     $get_id = $_GET['post_id'];

     $get_com = "select * from comments where post_id='$get_id' ORDER by 1 DESC";

     $run_com = mysqli_query($con,$get_com);

 	 while($row=mysqli_fetch_array($run_com)){

 	 	$com = $row['comment'];
 	 	$com_name = $row['comment_author'];
 	 	$date = $row['date'];

 	 	/*echo"
 	 	<div id='comments'>
 	 	<h3>$com_name</h3><i>Said</i>on $date
 	 	<p>$com</p>
 	 	</div>
 	 	";*/
 	 	echo "

 	 	<div class='post' style='background-color:#ECF0F5'>
                      <div class='user-block'>
                         <img class='img-circle img-bordered-sm' src='user/user_images/$user_image' alt='user image>
                        <span class='username'>
                          <a href='user_profile.php?user_id=$user_id'>$com_name</a>
                        </span>
                        <span class='description'>$date</span>
                      </div><!-- /.user-block -->
                      <p>$com</p>
                      <ul class='list-inline'>
                        <li><a href='#' class='link-black text-sm'><i class='fa fa-thumbs-o-up margin-r-5'></i><span class='badge badge-success'> <?php getLikes($post_id); ?>1000</span></a></li>
                        <li><a href='#' class='link-black text-sm'><i class='fa fa-reply margin-r-5'></i> Reply</a></li>
					 </ul></div>
 	 	";

 	 }
     ?>