<?php 
include("includes/header.php");
include("includes/classes/User.php");
if(isset($_GET['profile_username']))
{
	$username =$_GET['profile_username'];
	$user_details_query =mysqli_query($con,"SELECT * FROM users where username ='$username'");
	$user_array = mysqli_fetch_array($user_details_query);




}




 ?>

 <style type="text/css">
 	.wrapper{
 		margin-left: 0px;
 		padding-left: 0px;


 	}

 </style>

	<div class="profile_left">
		<img src="<?php echo  $user_array['profile_pic']; ?>">
			<div class="profile_info">
				<p> <?php echo "branch: " .$user_array['branch']; ?></p>
				<p> <?php echo "year : " .$user_array['year']; ?></p>
				<p> <?php echo "posts: " .$user_array['num_posts']; ?></p>
			
			</div>

			<form action="<?php echo $username; ?>" method="POST">
 			<?php 
 			$profile_user_obj = new User($con, $username); 
 			if($profile_user_obj->isClosed()) {
 				header("Location: user_closed.php");
 			}

 			$logged_in_user_obj = new User($con, $userLoggedIn); 


			?>
				
			</form>
			<input type="submit" class="deep_blue" data-toggle="modal" data-target="#post_form" value="Post Something">


	</div>

	<div class="main_column column">

		


	</div>
<!-- Modal -->
<div class="modal fade" id="post_form" tabindex="-1" role="dialog" aria-labelledby="postModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="postModalLabel">Post something!</h4>
      </div>

      <div class="modal-body">
      	<p>This will appear on the user's profile page and also their newsfeed for your friends to see!</p>

      	<form class="profile_post" action="" method="POST">
      		<div class="form-group">
      			<textarea class="form-control" name="post_body"></textarea>
      			<input type="hidden" name="user_from" value="<?php echo $userLoggedIn; ?>">
      			<input type="hidden" name="user_to" value="<?php echo $username; ?>">
      		</div>
      	</form>
      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" name="post_button" id="submit_profile_post">Post</button>
      </div>
    </div>
  </div>
</div>




	</div>
</body>
</html>