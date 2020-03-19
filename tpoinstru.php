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

    <div class="tpoinstru_info">
        <div class="tpoinstru_font">
            <h3>Placements</h3>
            <h3>Instrumentation Enginerring</h3>
        </div>
        
        <div class="Place_stats"><h3>Placement Statistics</h3></div>      
        <div class="articleBodyinstru1">
    <h3>Statistics of Student Placement and Higher Studies in Instrumentation Engineering Department</h3>
<div class="table-responsiveinstru1"><table border="1" width="100%">
<tbody>
<tr valign="TOP">
<td><strong>Item</strong></td>
<td><strong>2015-16</strong></td>
<td><strong>2014-15</strong></td>
<td><strong>2013-14</strong></td>
</tr>
</tbody>
<tbody>
<tr valign="TOP">
<td >No of students studying in Final year</td>
<td >75</td>
<td >75</td>
<td >75</td>
</tr>
<tr valign="TOP">
<td>No of students eligible for placement</td>
<td>40</td>
<td>54</td>
<td>60</td>
</tr>
<tr valign="TOP">
<td >No. of students placed in companies</td>
<td >28</td>
<td >34</td>
<td >50</td>
</tr>
<tr valign="TOP">
<td>No of students placed in Government sector</td>
<td>00</td>
<td>00</td>
<td>02</td>
</tr>
<tr valign="TOP">
<td ><strong>Percentage of students placed </strong></td>
<td ><strong>72.5%</strong></td>
<td><strong>63%</strong></td>
<td ><strong>86.6%</strong></td>
</tr>
<tr valign="TOP">
<td>No. of students admitted to higher studies with Valid qualifying scores (GATE or equivalent State or National Level Tests, GRE, GMAT etc.)</td>
<td><br> 04</td>
<td><br> 15</td>
<td><br> 10</td>
</tr>
<tr valign="TOP">
<td>No. of students turned entrepreneur in engineering/technology</td>
<td ><br> 00</td>
<td ><br> 01</td>
<td ><br> 01</td>
</tr>
<tr valign="TOP">
<td><strong>Total no of students placed and opted for higher studies or turned entrepreneur</strong></td>
<td><strong>32</strong></td>
<td><strong>50</strong></td>
<td><strong>63</strong></td>
</tr>
<tr valign="TOP">
<td >&nbsp;</td>
<td >&nbsp;</td>
<td >&nbsp;</td>
<td >&nbsp;</td>
</tr>
<tr valign="TOP">
<td><strong>Percentage of students successful in securing placement /higher studies/entrepreneur</strong></td>
<td><strong>45%</strong></td>
<td><strong>66.6%</strong></td>
<td><strong>84%</strong></td>
</tr>
</tbody>
</table></div>  </div>
<p >&nbsp;</p>
    <div class="Company_stats"><h3>RECRUITING COMPANIES</h3></div>   
           <p>&nbsp;</p>  
           <div class="ic_marquee0" style="overflow: hidden;"><div style="visibility: visible; width: 100%; height: 140px; position: relative; overflow: hidden;"><div style="position: absolute; left: -3762px; white-space: nowrap; width: 5664px; top: 30px;"><img src="/Instrumentation/images/Recrutiers_logo/Accenture-red-arrow-logo.png" alt="Accenture-red-arrow-logo.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/Toyo-Engineering-Corporation.jpg" alt="Toyo-Engineering-Corporation.jpg" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/cognizant.png" alt="cognizant.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/emerson.png" alt="emerson.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/forbes.png" alt="forbes.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/honeywell.png" alt="honeywell.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/johnson.png" alt="johnson.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/mapyn.png" alt="mapyn.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/sudarshan.png" alt="sudarshan.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/tata.png" alt="tata.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/uhde.jpg" alt="uhde.jpg" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/wipro.jpg" alt="wipro.jpg" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/Accenture-red-arrow-logo.png" alt="Accenture-red-arrow-logo.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/Toyo-Engineering-Corporation.jpg" alt="Toyo-Engineering-Corporation.jpg" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/cognizant.png" alt="cognizant.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/emerson.png" alt="emerson.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/forbes.png" alt="forbes.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/honeywell.png" alt="honeywell.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/johnson.png" alt="johnson.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/mapyn.png" alt="mapyn.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/sudarshan.png" alt="sudarshan.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/tata.png" alt="tata.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/uhde.jpg" alt="uhde.jpg" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/wipro.jpg" alt="wipro.jpg" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/Accenture-red-arrow-logo.png" alt="Accenture-red-arrow-logo.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/Toyo-Engineering-Corporation.jpg" alt="Toyo-Engineering-Corporation.jpg" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/cognizant.png" alt="cognizant.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/emerson.png" alt="emerson.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/forbes.png" alt="forbes.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/honeywell.png" alt="honeywell.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/johnson.png" alt="johnson.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/mapyn.png" alt="mapyn.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/sudarshan.png" alt="sudarshan.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/tata.png" alt="tata.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/uhde.jpg" alt="uhde.jpg" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/wipro.jpg" alt="wipro.jpg" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/Accenture-red-arrow-logo.png" alt="Accenture-red-arrow-logo.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/Toyo-Engineering-Corporation.jpg" alt="Toyo-Engineering-Corporation.jpg" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/cognizant.png" alt="cognizant.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/emerson.png" alt="emerson.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/forbes.png" alt="forbes.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/honeywell.png" alt="honeywell.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/johnson.png" alt="johnson.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/mapyn.png" alt="mapyn.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/sudarshan.png" alt="sudarshan.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/tata.png" alt="tata.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/uhde.jpg" alt="uhde.jpg" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/wipro.jpg" alt="wipro.jpg" style="vertical-align: top; margin-right: 3px; display: inline;"></div><div style="position: absolute; left: 1902px; white-space: nowrap; width: 5664px; top: 30px;"><img src="/Instrumentation/images/Recrutiers_logo/Accenture-red-arrow-logo.png" alt="Accenture-red-arrow-logo.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/Toyo-Engineering-Corporation.jpg" alt="Toyo-Engineering-Corporation.jpg" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/cognizant.png" alt="cognizant.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/emerson.png" alt="emerson.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/forbes.png" alt="forbes.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/honeywell.png" alt="honeywell.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/johnson.png" alt="johnson.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/mapyn.png" alt="mapyn.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/sudarshan.png" alt="sudarshan.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/tata.png" alt="tata.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/uhde.jpg" alt="uhde.jpg" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/wipro.jpg" alt="wipro.jpg" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/Accenture-red-arrow-logo.png" alt="Accenture-red-arrow-logo.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/Toyo-Engineering-Corporation.jpg" alt="Toyo-Engineering-Corporation.jpg" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/cognizant.png" alt="cognizant.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/emerson.png" alt="emerson.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/forbes.png" alt="forbes.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/honeywell.png" alt="honeywell.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/johnson.png" alt="johnson.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/mapyn.png" alt="mapyn.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/sudarshan.png" alt="sudarshan.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/tata.png" alt="tata.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/uhde.jpg" alt="uhde.jpg" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/wipro.jpg" alt="wipro.jpg" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/Accenture-red-arrow-logo.png" alt="Accenture-red-arrow-logo.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/Toyo-Engineering-Corporation.jpg" alt="Toyo-Engineering-Corporation.jpg" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/cognizant.png" alt="cognizant.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/emerson.png" alt="emerson.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/forbes.png" alt="forbes.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/honeywell.png" alt="honeywell.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/johnson.png" alt="johnson.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/mapyn.png" alt="mapyn.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/sudarshan.png" alt="sudarshan.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/tata.png" alt="tata.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/uhde.jpg" alt="uhde.jpg" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/wipro.jpg" alt="wipro.jpg" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/Accenture-red-arrow-logo.png" alt="Accenture-red-arrow-logo.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/Toyo-Engineering-Corporation.jpg" alt="Toyo-Engineering-Corporation.jpg" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/cognizant.png" alt="cognizant.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/emerson.png" alt="emerson.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/forbes.png" alt="forbes.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/honeywell.png" alt="honeywell.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/johnson.png" alt="johnson.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/mapyn.png" alt="mapyn.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/sudarshan.png" alt="sudarshan.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/tata.png" alt="tata.png" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/uhde.jpg" alt="uhde.jpg" style="vertical-align: top; margin-right: 3px; display: inline;"><img src="/Instrumentation/images/Recrutiers_logo/wipro.jpg" alt="wipro.jpg" style="vertical-align: top; margin-right: 3px; display: inline;"></div></div></div>
           <div class="articleBodyinstru2">
    <p align="CENTER"><strong>Major recruiters of the Department</strong></p>
<div class="table-responsiveinstru2"><table border="1" width="100%">
<tbody>
<tr valign="TOP">
<td style="text-align: center;"><strong>Core Companies</strong></td>
<td style="text-align: center;"><strong>Allied Companies</strong></td>
</tr>
<tr valign="TOP">
<td>
<ul>
<li>Emerson Exports&nbsp;</li>
<li>Emerson Innovation&nbsp;</li>
<li>Tata Elexi</li>
<li>Tetra pak India Ltd</li>
<li>Vanderlande Industries Ltd</li>
<li>Toyo Engineering</li>
<li>Honeywell Automation India Ltd.</li>
<li>Sudarshan Chemicals</li>
<li>Jacobs</li>
<li>Forbes Marshall</li>
<li>ThyssenKrupp</li>
<li>Walchand Group of Industries</li>
<li>Mapyn</li>
<li>Wavelet</li>
<li>Texas Instruments</li>
<li>Pridex</li>
<li>L&amp;T</li>
<li>Aker Solutions</li>
<li>John Deere</li>
</ul>
</td>
<td>
<ul>
<li>Wipro</li>
<li>Infosys</li>
<li>Accenture</li>
<li>Cognizant</li>
<li>Mu Sigma</li>
<li>Morgan Stanley</li>
<li>Indian Navy</li>
</ul>
</td>
</tr>
</tbody>
</table></div> <br><br> </div>
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

 