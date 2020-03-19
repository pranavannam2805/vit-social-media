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

    <div class="tpochem_info">
        <div class="tpochem_font">
            <h3>Placements</h3>
            <h3>Electronics &amp; Telecommunication Enginerring</h3>
        </div>
        
        <div class="Place_stats"><h3>Placement Statistics</h3></div>  
      <div class="articleBodyelex1">
    <p>&nbsp;&nbsp;</p>
<div class="table-responsive"><table style="height: 86px;" border="1" width="750">
<tbody>
<tr>
<td style="width: 250.81px;" height="5"><strong>Year</strong></td>
<td style="width: 121.73px;"><strong>2015-16</strong></td>
<td style="width: 121.73px;"><strong>2016-17</strong></td>
<td style="width: 121.73px;"><strong>2017-18</strong></td>
</tr>
<tr>
<td style="width: 250.81px;" height="7">Interested Students</td>
<td style="width: 121.73px;">154</td>
<td style="width: 121.73px;">125</td>
<td style="width: 121.73px;">137</td>
</tr>
<tr>
<td style="width: 250.81px;" height="7">Students Placed</td>
<td style="width: 121.73px;">118</td>
<td style="width: 121.73px;">93</td>
<td style="width: 121.73px;">79</td>
</tr>
<tr>
<td style="width: 250.81px;" height="6">Placement %</td>
<td style="width: 121.73px;">76.62</td>
<td style="width: 121.73px;">74.40</td>
<td style="width: 121.73px;">57.66</td>
</tr>
</tbody>
</table></div>
<p>&nbsp;</p>   </div>

        <div class="Company_stats"><h3>RECRUITING COMPANIES</h3></div> 


        <div class="articleBodyentc2">
    <h3 style="text-align: left;" align="CENTER">Department of E&TC – Our Top recruiters</h3>
<ul>
<li>IBM</li>
<li>CYBAGE</li>
<li>INAUTIX TECHNOLOGIES</li>
<li>INFOSYS</li>
<li>WIPRO</li>
<li>COGNIZANT</li>
<li>ACCENTURE</li>
<li>LEVIA TECHNOLOGIES</li>
<li>L &amp; T INFOTECH</li>
<li>EINFOCHIPS LTD</li>
<li>WAVELET TECHNOLOGIES PVT LTD</li>
<li>TATA ELXSI</li>
<li>AUDIENCE SCIENCE INDIA PVT LTD</li>
<li>TATA TECHNOLOGIES</li>
<li>AMDOCS INDIA</li>
<li>TECH MAHINDRA</li>
<li>FLEXTRONICS TECHNOLOGIES INDIA PVT LTD</li>
<li>PERENNIAL SYSTEMS&nbsp;</li>
<li>SYMANTEC</li>
<li>ERICSSON</li>
<li>ORACLE OFSS</li>
<li>GOLDMAN SACHS</li>
<li>IGATE</li>
<li>CADENCE DESIGN SYSTEMS &nbsp;</li>
<li>FINIQ CONSULTING (INDIA) PVT LTD</li>
<li>ORACLE INDIA PVT LTD (OFSS)</li>
<li>DIEBOLD SYSTEMS PVT LTD</li>
<li>AVANTI (N)</li>
<li>JOHN DEERE</li>
<li>SG ANALYTICS PVT LTD</li>
<li>TEJAS NETWORK</li>
</ul>   </div><br><br>
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

 