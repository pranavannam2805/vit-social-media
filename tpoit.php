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

     <div class="tpoit_info">
        <div class="tpoit_font">
            <h3>Placements</h3>
            <h3>Information Technology &amp; MCA</h3>
        </div>

        
        <div class="Place_stats"><h3>Placement Statistics</h3></div>   

        <div itemprop="articleBodyit1">
        <p>&nbsp;</p>

<div class="table-responsiveit1"><table class="MsoTableGrid" style=" border-collapse: collapse; border: none; height: 424px;" border="1" width="709" >
<tbody>
<tr style="mso-yfti-irow: 0; mso-yfti-firstrow: yes;">
<td style="width: 690.958px; border: 1pt solid windowtext; padding: 0in 5.4pt;" colspan="7">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><b><span style="font-size: 14.0pt; font-family: 'Verdana','sans-serif'; color: black; ">Percentage of Placement</span></b></p>
</td>
</tr>
<tr style="mso-yfti-irow: 1;">
<td style="width: 76.2917px; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0in 5.4pt;">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><b><span style="font-size: 12.0pt; font-family: 'Arial','sans-serif'; color: black; ">Branch</span></b></p>
</td>
<td style="width: 84.2917px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt;">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><b><span style="font-size: 12.0pt; font-family: 'Arial','sans-serif'; color: black;">2012-13</span></b></p>
</td>
<td style="width: 84.2917px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt;">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><b><span style="font-size: 12.0pt; font-family: 'Arial','sans-serif'; color: black; ">2013-14</span></b></p>
</td>
<td style="width: 90.9583px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt;">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><b><span style="font-size: 12.0pt; font-family: 'Arial','sans-serif'; color: black; ">2014-15</span></b></p>
</td>
<td style="width: 85.625px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt;">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><b><span style="font-size: 12.0pt; font-family: 'Arial','sans-serif'; color: black; ;">2015-16</span></b></p>
</td>
<td style="width: 86.9583px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt;">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><b><span style="font-size: 12.0pt; font-family: 'Arial','sans-serif'; color: black; ">2016-17</span></b></p>
</td>
<td style="width: 88.2917px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt;">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><b><span style="font-size: 12.0pt; font-family: 'Arial','sans-serif'; color: black; ">&nbsp;</span></b></p>
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><b><span style="font-size: 12.0pt; font-family: 'Arial','sans-serif'; color: black; ">2017-18</span></b></p>
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><b><span style="font-size: 12.0pt; font-family: 'Arial','sans-serif'; color: black; ">&nbsp;</span></b></p>
</td>
</tr>
<tr style="mso-yfti-irow: 2;">
<td style="width: 76.2917px; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0in 5.4pt;">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><b style="mso-bidi-font-weight: normal;"><span style="font-size: 12.0pt; color: black;">IT</span></b></p>
</td>
<td style="width: 100px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; box-sizing: border-box;">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal; box-sizing: border-box;" align="center"><span style="box-sizing: border-box;"><span style="font-size: 12.0pt; color: black;">60.87</span></span></p>
</td>
<td style="width: 100px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; box-sizing: border-box;">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal; box-sizing: border-box;" align="center"><span style="box-sizing: border-box;"><span style="font-size: 12.0pt; color: black;">82.61</span></span></p>
</td>
<td style="width: 106.667px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; box-sizing: border-box;">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal; box-sizing: border-box;" align="center"><span style="box-sizing: border-box;"><span style="font-size: 12.0pt; color: black;">94.12</span></span></p>
</td>
<td style="width: 101.333px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; box-sizing: border-box;">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal; box-sizing: border-box;" align="center"><span style="box-sizing: border-box;"><span style="font-size: 12.0pt; color: black;">100</span></span></p>
</td>
<td style="width: 102.667px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; box-sizing: border-box;">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal; box-sizing: border-box;" align="center"><span style="box-sizing: border-box;"><span style="font-size: 12.0pt; color: black;">73.91</span></span></p>
</td>
<td style="width: 88.2917px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt;">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt;">&nbsp;</span></p>
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt;">88</span></p>
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 3;">
<td style="width: 76.2917px; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0in 5.4pt;">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><b style="mso-bidi-font-weight: normal;"><span style="font-size: 12.0pt; color: black;">MCA</span></b></p>
</td>
<td style="width: 100px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; box-sizing: border-box;">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal; box-sizing: border-box;" align="center"><span style="box-sizing: border-box;"><span style="font-size: 12.0pt; color: black;">58.62</span></span></p>
</td>
<td style="width: 100px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; box-sizing: border-box;">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal; box-sizing: border-box;" align="center"><span style="box-sizing: border-box;"><span style="font-size: 12.0pt; color: black;">44.83</span></span></p>
</td>
<td style="width: 106.667px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; box-sizing: border-box;">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal; box-sizing: border-box;" align="center"><span style="box-sizing: border-box;"><span style="font-size: 12.0pt; color: black;">50</span></span></p>
</td>
<td style="width: 101.333px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; box-sizing: border-box;">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal; box-sizing: border-box;" align="center"><span style="box-sizing: border-box;"><span style="font-size: 12.0pt; color: black;">72.22</span></span></p>
</td>
<td style="width: 102.667px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; box-sizing: border-box;">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal; box-sizing: border-box;" align="center"><span style="box-sizing: border-box;"><span style="font-size: 12.0pt; color: black;">80</span></span></p>
</td>
<td style="width: 88.2917px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt;">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt;">&nbsp;</span></p>
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt;">72</span></p>
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt;">&nbsp;</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 4; mso-yfti-lastrow: yes;">
<td style="width: 690.958px; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0in 5.4pt;" colspan="7">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 9.0pt; font-family: 'Arial','sans-serif'; color: black; ">&nbsp;</span></p>
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 9.0pt; font-family: 'Arial','sans-serif'; color: black; ">Note: The above values are percentage of placed students out of interested &amp; eligible students.</span></p>
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt;">&nbsp;</span></p>
</td>
</tr>
</tbody>
</table></div>  </div><br><br>


 <div class="Company_stats"><h3>RECRUITING COMPANIES</h3></div>   
 <p>&nbsp;</p>   
 <div itemprop="articleBodyit1">
        <div class="table-responsiveit2"><table border="1" width="100%">
<tbody>
<tr style="height: 15px;">
<td style="height: 15px;"><strong>S.N.</strong></td>
<td style="height: 15px;"><strong>Company Name</strong></td>
</tr>
<tr style="height: 37px;">
<td style="height: 37px;">1</td>
<td style="height: 37px;">
<p>Nvidia Ltd.</p>
</td>
</tr>
<tr style="height: 37px;">
<td style="height: 37px;">2</td>
<td style="height: 37px;">
<p>Thoughtworks Ltd.</p>
</td>
</tr>
<tr style="height: 37px;">
<td style="height: 37px;">3</td>
<td style="height: 37px;">
<p>MuSigma Business Solutions Ltd.</p>
</td>
</tr>
<tr style="height: 37px;">
<td style="height: 37px;">4</td>
<td style="height: 37px;">
<p>Tata Technologies Ltd.</p>
</td>
</tr>
<tr style="height: 37px;">
<td style="height: 37px;">5</td>
<td style="height: 37px;">
<p lang="de-DE">E Q Technologic Ltd.</p>
</td>
</tr>
<tr style="height: 37px;">
<td style="height: 37px;">6</td>
<td style="height: 37px;">
<p>Deloitte Ltd.</p>
</td>
</tr>
<tr style="height: 37px;">
<td style="height: 37px;">7</td>
<td style="height: 37px;">
<p>S1 Services Ltd.</p>
</td>
</tr>
<tr style="height: 37px;">
<td style="height: 37px;">8</td>
<td style="height: 37px;">
<p>Texas Instruments Ltd.</p>
</td>
</tr>
<tr style="height: 15px;">
<td style="height: 15px;">9</td>
<td style="height: 15px;">Works Application Co. Ltd.</td>
</tr>
<tr style="height: 37px;">
<td style="height: 37px;">10</td>
<td style="height: 37px;">
<p>Persistent Systems</p>
</td>
</tr>
<tr style="height: 15px;">
<td style="height: 15px;">11</td>
<td style="height: 15px;">Cognizant Ltd.</td>
</tr>
<tr style="height: 37px;">
<td style="height: 37px;">12</td>
<td style="height: 37px;">
<p>Accenture Ltd.</p>
</td>
</tr>
<tr style="height: 15px;">
<td style="height: 15px;">13</td>
<td style="height: 15px;">Wipro Technologies Ltd.</td>
</tr>
<tr style="height: 15px;">
<td style="height: 15px;">14</td>
<td style="height: 15px;">Infosys Ltd.</td>
</tr>
<tr style="height: 15px;">
<td style="height: 15px;">15</td>
<td style="height: 15px;">Imaginations Technology</td>
</tr>
<tr style="height: 15px;">
<td style="height: 15px;">16</td>
<td style="height: 15px;">Wipro Technologies Ltd.</td>
</tr>
<tr style="height: 15px;">
<td style="height: 15px;">17</td>
<td style="height: 15px;">Tavisca Solutions Pvt. Ltd.</td>
</tr>
<tr style="height: 15px;">
<td style="height: 15px;">18</td>
<td style="height: 15px;">Zensar</td>
</tr>
<tr style="height: 15px;">
<td style="height: 15px;">19</td>
<td style="height: 15px;">Cybage</td>
</tr>
<tr style="height: 15px;">
<td style="height: 15px;">20</td>
<td style="height: 15px;">Synechron Technologies Pvt. Ltd.</td>
</tr>
<tr style="height: 15px;">
<td style="height: 15px;">21</td>
<td style="height: 15px;">Indian Army</td>
</tr>
<tr style="height: 15px;">
<td style="height: 15px;">22</td>
<td style="height: 15px;">ADP</td>
</tr>
<tr style="height: 15px;">
<td style="height: 15px;">23</td>
<td style="height: 15px;">Microsoft</td>
</tr>
<tr style="height: 15px;">
<td style="height: 15px;">24</td>
<td style="height: 15px;">iGate Patni</td>
</tr>
<tr style="height: 15px;">
<td style="height: 15px;">25</td>
<td style="height: 15px;">Godrej Infotech</td>
</tr>
<tr style="height: 15px;">
<td style="height: 15px;">26</td>
<td style="height: 15px;">SNS Tech.</td>
</tr>
<tr style="height: 15px;">
<td style="height: 15px;">27</td>
<td style="height: 15px;">Vertex Ltd.</td>
</tr>
<tr style="height: 15px;">
<td style="height: 15px;">28</td>
<td style="height: 15px;">G. S. Lab</td>
</tr>
<tr style="height: 15px;">
<td style="height: 15px;">29</td>
<td style="height: 15px;">PEP [Career Net Test]</td>
</tr>
<tr style="height: 15px;">
<td style="height: 15px;">30</td>
<td style="height: 15px;">Nilhilent Technologies</td>
</tr>
<tr style="height: 15px;">
<td style="height: 15px;">31</td>
<td style="height: 15px;">AKS Software</td>
</tr>
<tr style="height: 15px;">
<td style="height: 15px;">32</td>
<td style="height: 15px;">Cypress Semiconductors</td>
</tr>
<tr style="height: 15px;">
<td style="height: 15px;">33</td>
<td style="height: 15px;">Icerties</td>
</tr>
<tr style="height: 37px;">
<td style="height: 37px;">34</td>
<td style="height: 37px;">
<p>Deutsche Bank</p>
</td>
</tr>
<tr style="height: 37px;">
<td style="height: 37px;">35</td>
<td style="height: 37px;">
<p>Avaya</p>
</td>
</tr>
<tr style="height: 37px;">
<td style="height: 37px;">36</td>
<td style="height: 37px;">
<p>Barclays</p>
</td>
</tr>
<tr style="height: 37px;">
<td style="height: 37px;">37</td>
<td style="height: 37px;">
<p>Calsoft</p>
</td>
</tr>
<tr style="height: 37px;">
<td style="height: 37px;">38</td>
<td style="height: 37px;">
<p>TechMahindra</p>
</td>
</tr>
<tr style="height: 37px;">
<td style="height: 37px;">39</td>
<td style="height: 37px;">
<p>Capgemini</p>
</td>
</tr>
<tr style="height: 37px;">
<td style="height: 37px;">40</td>
<td style="height: 37px;" valign="TOP">
<p>Tata Technologies</p>
</td>
</tr>
<tr style="height: 37px;">
<td style="height: 37px;">41</td>
<td style="height: 37px;" valign="TOP">
<p>Technoforce&nbsp;</p>
</td>
</tr>
<tr style="height: 37px;">
<td style="height: 37px;">42</td>
<td style="height: 37px;" valign="TOP">
<p>KPIT Technologies</p>
</td>
</tr>
<tr style="height: 37px;">
<td style="height: 37px;">43</td>
<td style="height: 37px;" valign="TOP">
<p>Symentic</p>
</td>
</tr>
<tr style="height: 37px;">
<td style="height: 37px;">44</td>
<td style="height: 37px;" valign="TOP">
<p>Iauro</p>
</td>
</tr>
<tr style="height: 37px;">
<td style="height: 37px;">45</td>
<td style="height: 37px;" valign="TOP">
<p>Sungard</p>
</td>
</tr>
<tr style="height: 37px;">
<td style="height: 37px;">46</td>
<td style="height: 37px;" valign="TOP">
<p>Mastercard</p>
</td>
</tr>
<tr style="height: 37px;">
<td style="height: 37px;">47</td>
<td style="height: 37px;" valign="TOP">
<p>2coms Consulting Pvt. Ltd. (IBM)</p>
</td>
</tr>
<tr style="height: 37px;">
<td style="height: 37px;">48</td>
<td style="height: 37px;" valign="TOP">
<p>Tata Communication</p>
</td>
</tr>
<tr style="height: 37px;">
<td style="height: 37px;">49</td>
<td style="height: 37px;" valign="TOP">
<p>Tata Technologies</p>
</td>
</tr>
<tr style="height: 37px;">
<td style="height: 37px;">50</td>
<td style="height: 37px;" valign="TOP">
<p>Technoforce&nbsp;</p>
</td>
</tr>
<tr style="height: 37px;">
<td style="height: 37px;">51</td>
<td style="height: 37px;" valign="TOP">
<p>KPIT Technologies</p>
</td>
</tr>
<tr style="height: 37px;">
<td style="height: 37px;">52</td>
<td style="height: 37px;" valign="TOP">
<p>Symentic</p>
</td>
</tr>
<tr style="height: 37px;">
<td style="height: 37px;">53</td>
<td style="height: 37px;" valign="TOP">
<p>Iauro</p>
</td>
</tr>
<tr style="height: 37px;">
<td style="height: 37px;">54</td>
<td style="height: 37px;" valign="TOP">
<p>Sungard</p>
</td>
</tr>
<tr style="height: 37px;">
<td style="height: 37px;">55</td>
<td style="height: 37px;" valign="TOP">
<p>Mastercard</p>
</td>
</tr>
</tbody>
</table></div><br><br>  </div>

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

 