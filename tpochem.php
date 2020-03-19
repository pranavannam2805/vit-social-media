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
            <h3>Chemical Enginerring</h3>
        </div>
        
        <div class="Place_stats"><h3>Placement Statistics</h3></div>  

              <div class="articleBody">
    <div class="table-responsive"><table class="MsoNormalTable" style="width: 100.0%; mso-cellspacing: 0in; mso-yfti-tbllook: 1184; mso-padding-alt: 5.25pt 5.25pt 5.25pt 5.25pt;" border="1" width="100%" cellspacing="0" cellpadding="0">
<tbody>
<tr style="height: 31px;">
<td style="padding: 5.25pt; height: 31px;" valign="top">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><b><span style="font-size: 9.5pt; mso-bidi-font-size: 11.0pt; font-family: 'Verdana','sans-serif'; mso-fareast-font-family: 'Times New Roman'; mso-bidi-font-family: Tahoma; color: #333333;">Year</span></b></p>
</td>
<td style="padding: 5.25pt; height: 31px;" valign="top">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><b><span style="font-size: 9.5pt; mso-bidi-font-size: 11.0pt; font-family: 'Verdana','sans-serif'; mso-fareast-font-family: 'Times New Roman'; mso-bidi-font-family: Tahoma; color: #333333;">Total Eligible students</span></b></p>
</td>
<td style="padding: 5.25pt; height: 31px;" valign="top">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><b><span style="font-size: 9.5pt; mso-bidi-font-size: 11.0pt; font-family: 'Verdana','sans-serif'; mso-fareast-font-family: 'Times New Roman'; mso-bidi-font-family: Tahoma; color: #333333;">Total students placed</span></b></p>
</td>
<td style="padding: 5.25pt; height: 31px;" valign="top">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><b><span style="font-size: 9.5pt; mso-bidi-font-size: 11.0pt; font-family: 'Verdana','sans-serif'; mso-fareast-font-family: 'Times New Roman'; mso-bidi-font-family: Tahoma; color: #333333;">Number of students got for Masters abroad</span></b></p>
</td>
</tr>
<tr style="height: 31px;">
<td style="padding: 5.25pt; height: 31px;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.5pt; font-family: 'Verdana','sans-serif'; mso-fareast-font-family: 'Times New Roman'; mso-bidi-font-family: Tahoma; color: #333333;">2012-2013</span></p>
</td>
<td style="padding: 5.25pt; height: 31px;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.5pt; font-family: 'Verdana','sans-serif'; mso-fareast-font-family: 'Times New Roman'; mso-bidi-font-family: Tahoma; color: #333333;">65</span></p>
</td>
<td style="padding: 5.25pt; height: 31px;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.5pt; font-family: 'Verdana','sans-serif'; mso-fareast-font-family: 'Times New Roman'; mso-bidi-font-family: Tahoma; color: #333333;">27</span></p>
</td>
<td style="padding: 5.25pt; height: 31px;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.5pt; font-family: 'Verdana','sans-serif'; mso-fareast-font-family: 'Times New Roman'; mso-bidi-font-family: Tahoma; color: #333333;">05</span></p>
</td>
</tr>
<tr style="height: 31px;">
<td style="padding: 5.25pt; height: 31px;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.5pt; font-family: 'Verdana','sans-serif'; mso-fareast-font-family: 'Times New Roman'; mso-bidi-font-family: Tahoma; color: #333333;">2013-2014</span></p>
</td>
<td style="padding: 5.25pt; height: 31px;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.5pt; font-family: 'Verdana','sans-serif'; mso-fareast-font-family: 'Times New Roman'; mso-bidi-font-family: Tahoma; color: #333333;">69</span></p>
</td>
<td style="padding: 5.25pt; height: 31px;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.5pt; font-family: 'Verdana','sans-serif'; mso-fareast-font-family: 'Times New Roman'; mso-bidi-font-family: Tahoma; color: #333333;">12</span></p>
</td>
<td style="padding: 5.25pt; height: 31px;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.5pt; font-family: 'Verdana','sans-serif'; mso-fareast-font-family: 'Times New Roman'; mso-bidi-font-family: Tahoma; color: #333333;">09</span></p>
</td>
</tr>
<tr style="height: 31px;">
<td style="padding: 5.25pt; height: 31px;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.5pt; font-family: 'Verdana','sans-serif'; mso-fareast-font-family: 'Times New Roman'; mso-bidi-font-family: Tahoma; color: #333333;">2014-2015</span></p>
</td>
<td style="padding: 5.25pt; height: 31px;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.5pt; font-family: 'Verdana','sans-serif'; mso-fareast-font-family: 'Times New Roman'; mso-bidi-font-family: Tahoma; color: #333333;">54</span></p>
</td>
<td style="padding: 5.25pt; height: 31px;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.5pt; font-family: 'Verdana','sans-serif'; mso-fareast-font-family: 'Times New Roman'; mso-bidi-font-family: Tahoma; color: #333333;">17</span></p>
</td>
<td style="padding: 5.25pt; height: 31px;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.5pt; font-family: 'Verdana','sans-serif'; mso-fareast-font-family: 'Times New Roman'; mso-bidi-font-family: Tahoma; color: #333333;">06</span></p>
</td>
</tr>
<tr style="height: 31px;">
<td style="padding: 5.25pt; height: 31px;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.5pt; font-family: 'Verdana','sans-serif'; mso-fareast-font-family: 'Times New Roman'; mso-bidi-font-family: Tahoma; color: #333333;">2015-2016</span></p>
</td>
<td style="padding: 5.25pt; height: 31px;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.5pt; font-family: 'Verdana','sans-serif'; mso-fareast-font-family: 'Times New Roman'; mso-bidi-font-family: Tahoma; color: #333333;">55</span></p>
</td>
<td style="padding: 5.25pt; height: 31px;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.5pt; font-family: 'Verdana','sans-serif'; mso-fareast-font-family: 'Times New Roman'; mso-bidi-font-family: Tahoma; color: #333333;">30</span></p>
</td>
<td style="padding: 5.25pt; height: 31px;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.5pt; font-family: 'Verdana','sans-serif'; mso-fareast-font-family: 'Times New Roman'; mso-bidi-font-family: Tahoma; color: #333333;">11</span></p>
</td>
</tr>
<tr style="height: 31px;">
<td style="padding: 5.25pt; height: 31px;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.5pt; font-family: 'Verdana','sans-serif'; mso-fareast-font-family: 'Times New Roman'; mso-bidi-font-family: Tahoma; color: #333333;">2016-2017</span></p>
</td>
<td style="padding: 5.25pt; height: 31px;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.5pt; font-family: 'Verdana','sans-serif'; mso-fareast-font-family: 'Times New Roman'; mso-bidi-font-family: Tahoma; color: #333333;">56</span></p>
</td>
<td style="padding: 5.25pt; height: 31px;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.5pt; font-family: 'Verdana','sans-serif'; mso-fareast-font-family: 'Times New Roman'; mso-bidi-font-family: Tahoma; color: #333333;">19</span></p>
</td>
<td style="padding: 5.25pt; height: 31px;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.5pt; font-family: 'Verdana','sans-serif'; mso-fareast-font-family: 'Times New Roman'; mso-bidi-font-family: Tahoma; color: #333333;">09</span></p>
</td>
</tr>

<tr style="height: 31px;">
<td style="padding: 5.25pt; height: 31px;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.5pt; font-family: 'Verdana','sans-serif'; mso-fareast-font-family: 'Times New Roman'; mso-bidi-font-family: Tahoma; color: #333333;">2017-2018</span></p>
</td>
<td style="padding: 5.25pt; height: 31px;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.5pt; font-family: 'Verdana','sans-serif'; mso-fareast-font-family: 'Times New Roman'; mso-bidi-font-family: Tahoma; color: #333333;">66</span></p>
</td>
<td style="padding: 5.25pt; height: 31px;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.5pt; font-family: 'Verdana','sans-serif'; mso-fareast-font-family: 'Times New Roman'; mso-bidi-font-family: Tahoma; color: #333333;">24</span></p>
</td>
<td style="padding: 5.25pt; height: 31px;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.5pt; font-family: 'Verdana','sans-serif'; mso-fareast-font-family: 'Times New Roman'; mso-bidi-font-family: Tahoma; color: #333333;">14</span></p>
</td>
</tr>
<tr style="height: 31px;">
<td style="padding: 5.25pt; height: 31px;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.5pt; font-family: 'Verdana','sans-serif'; mso-fareast-font-family: 'Times New Roman'; mso-bidi-font-family: Tahoma; color: #333333;">2018-2019</span></p>
</td>
<td style="padding: 5.25pt; height: 31px;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.5pt; font-family: 'Verdana','sans-serif'; mso-fareast-font-family: 'Times New Roman'; mso-bidi-font-family: Tahoma; color: #333333;">68</span></p>
</td>
<td style="padding: 5.25pt; height: 31px;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.5pt; font-family: 'Verdana','sans-serif'; mso-fareast-font-family: 'Times New Roman'; mso-bidi-font-family: Tahoma; color: #333333;">28</span></p>
</td>
<td style="padding: 5.25pt; height: 31px;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal;"><span style="font-size: 9.5pt; font-family: 'Verdana','sans-serif'; mso-fareast-font-family: 'Times New Roman'; mso-bidi-font-family: Tahoma; color: #333333;">12</span></p>
</td>
</tr>
</tbody>
</table></div>  </div><br><br>

         <div class="Company_stats"><h3>RECRUITING COMPANIES</h3></div>   

<div class="articleBodychem2">
    <h3 style="text-align: left;" align="CENTER">Recruiting companies in department of Chemical Engineering</h3>
<ul>
<li>JACOBS ENGINEERING INDIA PVT LTD</li>
<li>HONEYWELL</li>
<li>ACCENTURE</li>
<li>DIAT, DRDO Pune</li>
<li>TECHNICHE ENGINEERING</li>
<li>NAVIN FLOURINE</li>
<li>FLUID ROBOTICS</li>
<li>TECHMIND SOLUTIONS</li>
<li>LOREAL INDIA  Pvt. Ltd.</li>
<li>TRAVIN INDIA</li>
<li>JAI AMBAY FERTILIXERS</li>
<li>COMPEX CHEMICAL Pvt. Ltd</li>
<li>ALKYL AMINES CHEMICALS Ltd</li>
<li>SIEMENS</li>
<li>SULZER INDIA LTD</li>
<li>ALFA LAVAL</li>
<li>TECHNOFORCE</li>
<li>THERMAX INDIA LTD</li>
<li>ACCELYA KALE SOLUTIONS LTD</li>
<li>KIRLOSKAR GROUP</li>
<li>FORBES MARSHELL</li>
<li>HALLIBURTON OFFSHORE SERVICES INC</li>
<li>SIEMENS</li>
<li>EMERSON (Refrigeration Design Group)</li>
<li>SURGENT MEDICARE PVT LTD</li>
<li>TECHNICHE ENGG PVT LTD.</li>
<li>LARSEN &amp; TOUBRO</li>
<li>UHDE INDIA LTD</li>
<li>AKER POWERGAS PVT LTD</li>
<li>AQUATECH</li>
<li>GS LAB</li>
<li>BGR ENERGY SYSTEMS</li>
<li>WIPRO</li>
<li>TATA TECHNOLOGY</li>
<li>MAHINDRA &amp; MAHINDRA</li>
<li>HARBINGER</li>
<li>MU- SIGMA</li>
<li>CAPARO</li>
<li>MORGAN STANELY</li>
<li>AKER SOLUTIONS</li>
<li>JP MORGAN CHASE</li>
<li>CUMMINS INDIA</li>
<li>VVF LIMITED</li>
<li>MERCEDES BENZ</li>
<li>INFOSYS</li>
<li>COGNIZANT</li>
<li>ACCENTURE</li>
<li>ANSYS FLUENT</li>
<li>PATNI</li>
<li>ZENSAR</li>
<li>RISHABH INSTRUMENTS</li>
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

 