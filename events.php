<?php 
include("includes/header.php");

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
		<div class="event_info">
			<div class="event_font">
              <h3>Events <br></h3>
              </div>
        <a href="https://vishwakarandak.epecvitpune.in/"><img src="https://vishwakarandak.epecvitpune.in/wp-content/uploads/2019/09/DoctorStrange.jpg"></a>
        <div class="vk"><h1>Vishwakarndak </h1>
        
        	<a>Three days with over 100 cultural, technical and sports events planned to perfection, carried out with utmost finesse and their timely execution, is something that we pride ourselves on. Right from setting the budget of the event to switching off the lights to conclude the third day, we try to make it a memorable experience for all.</a>

        	</div>		

          <a href="https://freshers.epecvitpune.in/"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRoBRX9OAErrOgoVZCZtUDWupSapTX4_xTlzgKTQchOQ_S3WYJ-"></a>
        <div class="freshers"><h1>Freshers Party </h1>
        
          <a>The joy and satisfaction on the faces of the young students who have just entered the college, makes all the hard work and sleepless nights totally worth it! Freshers' comes once in your life and our motto is to make that experience, an unforgettable one!.</a>

          </div>  

          <a href="https://melange.epecvitpune.in/"><img src="https://img.glunis.com/1/v/t1.0-9/s720x720/50104920_535039323566363_9142013506453766144_o.jpg?_nc_cat=110&_nc_ohc=HqmaqNG8GeAAX86dI0Z&_nc_ht=scontent.xx&_nc_tp=1&oh=362950254ce08d7b4976648f1971ade3&oe=5E950E7E"></a>
        <div class="melange"><h1>Melange </h1>
        
          <a>A four-day long event where students from various colleges across the city participate, compete, and showcase their talent. Right from public speaking to Robo-wars, we have it all. Mélange is not just the pride of VIT, but of the entire city!</a>

          </div>  

            <a href="https://Vishwotsav.epecvitpune.in/"><img src="https://img.glunis.com/1/v/t1.0-9/s720x720/50104920_535039323566363_9142013506453766144_o.jpg?_nc_cat=110&_nc_ohc=HqmaqNG8GeAAX86dI0Z&_nc_ht=scontent.xx&_nc_tp=1&oh=362950254ce08d7b4976648f1971ade3&oe=5E950E7E"></a>
        <div class="vishwotsav"><h1>Vishwotsav</h1>
        
          <a>Bringing something new to the table every year, EPEC does not fail to astonish all! Lot of thought and planning is put into the activities that could be conducted on these days. Comprising mainly of events such as Saree and Tie Day and Character Day and Traditional Day. Vishwotsav definitely gives everyone an opportunity to make memories that can be cherished forever.</a>

          </div> 
		
        </div>




</div>



  <div class="user_options column">
    <a href="notices.php" >Notices</a><br><br>
    <a href="scholarship.php" >Scholarship</a><br><br>
    <a href="timetable.php" >Timetable</a><br><br>
    <a href="faculty.php" >Faculty</a><br><br>
    <a href="clubs.php" >Clubs</a><br><br>
    <a href="events.php" >Events</a><br><br>
    <a href="tpo.php" >TPO</a><br><br>

  </div>


  </div>
</body>
</html>

 