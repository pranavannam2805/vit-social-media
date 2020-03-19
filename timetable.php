<?php 
include("includes/header.php");
include("includes/classes/User.php");
include("includes/classes/Post.php");


if(isset($_POST['post'])){
	$post = new Post($con, $userLoggedIn);
	$post->submitPost($_POST['post_text'], 'none');
}


?>

  <div class="user_details column">
    <a href="<?php echo $userLoggedIn; ?>"> <img src ="<?php echo $user['profile_pic'];?>">  </a>
    <div class="user_details_left_right">
    <a href="<?php echo $userLoggedIn; ?>">
    <?php
    echo " " .$user['first_name'] . " " . $user['last_name']."<br>";
    echo "  " ."Branch:".$user['branch']."<br><br><br><br>";
    ?>
    <i class = "fa fa-birthday-cake fa-lg"></i>
    <?php  echo $user['Date'] ."<br>"; ?>
    </a>
    </div>
  </div>

<!-- scholarship details  start here -->

<div class="main_column column">

<div class="tt_dept">
                    <label for="Select Department">Department:</label>
                    <select name="Branch">
                        <option value="0" selected dislabeled >Department</option>
                            <option value="DESH">DESH</option>
                            <option value="SY">SY</option>
                            <option value="TY">TY</option>
                            <option value="BTech">BTech</option>
                            </select>
                        </div>


    <div class="tt_div">
                    <label for="Select Division">Division:</label>
                    <select name="Division">
                        <option value="0" selected dislabeled >Division</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            </select>
                
    </div>

    <div class="tt_branch">
                    <label for="Select Branch">Branch:</label>
                    <select name="Branch">
                        <option value="0" selected dislabeled >Branch</option>
                            <option value="CS">CS</option>
                            <option value="IT">IT</option>
                            <option value="MECH">MECH</option>
                            <option value="ELEX">ELEX</option>
                            <option value="ENTC">ENTC</option>
                            <option value="INSTRU">INSTRU</option>
                            <option value="PROD">PROD</option>
                            <option value="CHEM">CHEM</option>
                            </select>
                        </div>

<div class="search_tt">
        <input type="submit" name="post" id="post_button" value="Search">
    </div>
 

 </div>






<!-- ends here -->






  <div class="user_options column">
    <a href="notices.php" >Notices</a><br><br>
    <a href="scholarship.php" >Scholarship</a><br><br>
    <a href="timetable.php" >Timetable</a><br><br>
    <a href="faculty.php" >Faculty</a><br><br>
    <a href="clubs.php" >Clubs</a><br><br>
    <a href="events.php" >Events</a><br><br>
    <a href="tpo.php" >TPO</a><br><br>

  </div>

 