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

<!-- TPO details  start here -->
	<div class="main_column column">
		<div class="TPO_info">
			<div class="TPO_font">
				<h3>Training and Placement Office</h3>
			</div>
			
            <div class="dropdownLinks">
                   <ul>
                        <li><a href="tpocs.php" target="_blank" class=""> Computer Engineering  </a></li>

                        <li><a href="tpoit.php" target="_blank" class=""> Information Technology Engineering &amp; MCA </a></li>

                        <li><a href="tpomc.php" target="_blank" class=""> Mechanical Engineering  </a></li>

                        <li><a href="tpoinstru.php" target="_blank" class=""> Intrumentation Engineering  </a></li>

                        <li><a href="tpochem.php" target="_blank" class=""> Chemical Engineering  </a></li>
                                
                        <li><a href="tpoelex.php" target="_blank" class=""> Electronics Engineering  </a></li>
                                
                        <li><a href="tpoentc.php" target="_blank" class=""> Electronics &amp; Telecommunication Engineering  </a></li>
                                
                       
                                
                        <li><a href="tpoip.php" target="_blank" class=""> Industrial &amp; Production Engineering  </a></li>
                                          </ul>
                </div>


   <div class="articleBody">
        <h4>Every Year average 120 + Companies visits VIT, Pune for Campus Placement of students from Vishwakarma Institutes.</h4>
<h4>Every Year nearly 2500 Students from different background of education are appearing for the process. These are as follows :</h4>
<ul>
<li>B.E / B.Tech – 10 Different Branches of Engineering</li>
<li>M.E /M.Tech - 09 Different Branches of Engineering</li>
<li>B.Sc / BCA – 06 Different Branches of Sciences</li>
<li>M.Sc – 05 Different Branches of Sciences</li>
<li>B.Com / M.C.A – 02 Different Branches of Commerce.</li>
<li>BBA / BBM (International Business) – Bachelor Degree in Business Management.</li>
</ul>
<p><strong>Placement Details for last 09 Years</strong></p>
<div class="table-responsive"><table border="1" width="100%">
<tbody>
<tr style="height: 30px;" valign="TOP">
<td style="height: 30px; width: 2.5641%;"><strong>Sr. No.</strong></td>
<td style="height: 30px; width: 6.30342%;"><strong>Academic Year</strong></td>
<td style="height: 30px; width: 16.2393%;"><strong>No of Companies Visited </strong></td>
<td style="height: 30px; width: 22.0085%;"><strong>Highest Pay Package Offered (Rs in Lakhs Per Annum)</strong></td>
<td style="height: 30px; width: 26.8162%;"><strong>Average Pay Package of placed students (Rs in Lakhs Per Annum)</strong></td>
</tr>
<tr style="height: 37px;" valign="TOP">
<td style="height: 37px; width: 2.5641%;">
<p align="CENTER">1</p>
</td>
<td style="height: 37px; width: 6.30342%;">2009-10</td>
<td style="height: 37px; width: 16.2393%;">90</td>
<td style="height: 37px; width: 22.0085%;">09.00</td>
<td style="height: 37px; width: 26.8162%;">03.48</td>
</tr>
<tr style="height: 37px;" valign="TOP">
<td style="height: 37px; width: 2.5641%;">
<p align="CENTER">2</p>
</td>
<td style="height: 37px; width: 6.30342%;">2010-11</td>
<td style="height: 37px; width: 16.2393%;">95</td>
<td style="height: 37px; width: 22.0085%;">09.00</td>
<td style="height: 37px; width: 26.8162%;">03.37</td>
</tr>
<tr style="height: 37px;" valign="TOP">
<td style="height: 37px; width: 2.5641%;">
<p align="CENTER">3</p>
</td>
<td style="height: 37px; width: 6.30342%;">2011-12</td>
<td style="height: 37px; width: 16.2393%;">122</td>
<td style="height: 37px; width: 22.0085%;">35.00</td>
<td style="height: 37px; width: 26.8162%;">04.40</td>
</tr>
<tr style="height: 37px;" valign="TOP">
<td style="height: 37px; width: 2.5641%;">
<p align="CENTER">4</p>
</td>
<td style="height: 37px; width: 6.30342%;">2012-13</td>
<td style="height: 37px; width: 16.2393%;">103</td>
<td style="height: 37px; width: 22.0085%;">40.00</td>
<td style="height: 37px; width: 26.8162%;">03.91</td>
</tr>
<tr style="height: 37px;" valign="TOP">
<td style="height: 37px; width: 2.5641%;">
<p align="CENTER">5</p>
</td>
<td style="height: 37px; width: 6.30342%;">2013-14</td>
<td style="height: 37px; width: 16.2393%;">127</td>
<td style="height: 37px; width: 22.0085%;">37.14</td>
<td style="height: 37px; width: 26.8162%;">04.51</td>
</tr>
<tr style="height: 37px;" valign="TOP">
<td style="height: 37px; width: 2.5641%;">
<p align="CENTER">6</p>
</td>
<td style="height: 37px; width: 6.30342%;">2014-15</td>
<td style="height: 37px; width: 16.2393%;">154</td>
<td style="height: 37px; width: 22.0085%;">15.68</td>
<td style="height: 37px; width: 26.8162%;">04.28</td>
</tr>
<tr style="height: 37px;" valign="TOP">
<td style="height: 37px; width: 2.5641%;">
<p align="CENTER">7</p>
</td>
<td style="height: 37px; width: 6.30342%;">2015-16</td>
<td style="height: 37px; width: 16.2393%;">130</td>
<td style="height: 37px; width: 22.0085%;">33.00</td>
<td style="height: 37px; width: 26.8162%;">05.31</td>
</tr>
<tr style="height: 36.7813px;" valign="TOP">
<td style="height: 36.7813px; width: 2.5641%;">
<p align="CENTER">8</p>
</td>
<td style="height: 36.7813px; width: 6.30342%;">2016-17</td>
<td style="height: 36.7813px; width: 16.2393%; vertical-align: top;">60<br><br></td>
<td style="height: 36.7813px; width: 22.0085%; vertical-align: top;">27.00<br><br></td>
<td style="height: 36.7813px; width: 26.8162%;">06.12</td>
</tr>
<tr style="height: 36.7813px;" valign="TOP">
<td style="height: 36.7813px; width: 2.5641%;">
<p align="CENTER">9</p>
</td>
<td style="height: 36.7813px; width: 6.30342%;">2017-18</td>
<td style="height: 36.7813px; width: 16.2393%; vertical-align: top;">120</td>
<td style="height: 36.7813px; width: 22.0085%; vertical-align: top;">37.40</td>
<td style="height: 36.7813px; width: 26.8162%;">05.94</td>
</tr>
</tbody>
</table></div>
<p>&nbsp;</p>   
</div>
		</div>


	</div>


 <div class="user_options column">
    <a href="notices.php" target="blank"  class="">Notices</a><br><br>
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