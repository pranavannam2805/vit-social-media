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

  <!--  details  start here -->
<div class="main_column column">
  <div class="tpomc_info">
        <div class="tpomc_font">
            <h3>Placements</h3>
            <h3>Mechanical Enginerring</h3>
        </div>
        
        <div class="Place_stats"><h3>Placement Statistics</h3></div>                
        
             
                                <div class="articleBodymc1">
        <div class="table-responsivemc1"><table border="2" style="width: 740.667px;">
<tbody>
<tr style="height: 31px;">
<td style="height: 31px; width: 47px;">Year</td>
<td style="height: 31px; width: 228px;">No. of Students Interested</td>
<td style="height: 31px; width: 197px;">Number of students Placed</td>
</tr>
<tr style="height: 15px;">
<td style="height: 15px; width: 47px;">2011-12</td>
<td style="height: 15px; width: 228px;">119</td>
<td style="height: 15px; width: 197px;"><strong>64</strong></td>
</td>
</tr>
<tr style="height: 15.2667px;">
<td style="height: 15.2667px; width: 47px;">2012-13</td>
<td style="height: 15.2667px; width: 228px;">105</td>
<td style="height: 15.2667px; width: 197px;"><strong>66</strong></td>

</tr>
<tr style="height: 15px;">
<td style="height: 15px; width: 47px;">2013-14</td>
<td style="height: 15px; width: 228px;">114</td>
<td style="height: 15px; width: 197px;"><strong>38</strong></td>

</tr>
<tr style="height: 15px;">
<td style="height: 15px; width: 47px;">2014-15</td>
<td style="height: 15px; width: 228px;">100</td>
<td style="height: 15px; width: 197px;"><strong>53</strong></td>

</tr>

</tbody>
</table></div>
<p>&nbsp;</p>

<p>&nbsp;</p>   </div>
  
     <div class="Company_stats"><h3>RECRUITING COMPANIES</h3></div>   
           <p>&nbsp;</p>  
           <div class="articleBodymc2">
    <p><strong>List of Recruiting companies for Mechanical Department:</strong></p>
<ul>
<li>EATON</li>
<li>UHDE INDIA</li>
<li>MU SIGMA (N)</li>
<li>COGNIZANT</li>
<li>TE CONNECTIVITY</li>
<li>JACOBS</li>
<li>TECH MAHINDRA</li>
<li>TATA MOTORS, PIMPRI, PUNE</li>
<li>SULZER INDIA LTD</li>
<li>POLYCAB WIRES</li>
<li>BHARAT PETROLEUM</li>
<li>CONCENTRIC PUMPS</li>
<li>FORBES MARSHALL PVT LTD</li>
<li>GENERAL MOTORS, MUSCAT</li>
<li>JCB INDIA LTD</li>
<li>KIRLOSKAR PNEUMATICS</li>
<li>MAHINDRA UGINE STEEL CO</li>
<li>PRAGYA TECHNOLOGIES</li>
<li>SACHIN PRECISION</li>
<li>STEEL AUTORITY OF INDIA</li>
<li>THERMAX</li>
<li>VOLTAS</li>
<li>SUMMIT ENGG PVT LTD</li>
<li>AURANGABAD ELECTRICALS</li>
<li>FOUNDATION BRAKES</li>
<li>VANAZ ENGINEERING</li>
</ul>   </div>
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

  </div>
</body>
</html>

 