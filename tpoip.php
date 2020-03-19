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
            <h3>Industrial &amp; Production Enginerring</h3>
        </div>
        
        <div class="Place_stats"><h3>Placement Statistics</h3></div>  
<div itemprop="articleBody">
    <div class="table-responsive"><table style="width: 100%;" border="1">
<tbody>
<tr valign="TOP">
<td style="width: 11%;"><strong>Year</strong></td>
<td style="width: 37.8339%;">
<p><strong>No. of students placed/ Higher studies</strong></p>
<p><strong> (B. Tech. Industrial Engineering)</strong></p>
</td>
<td style="width: 43.1661%;">
<p><strong>No. of students placed/ Higher studies&nbsp;</strong><strong> (B. Tech. Production Engineering)</strong></p>
</td>
</tr>
<tr valign="TOP">
<td style="width: 11%;">2013-14</td>
<td style="width: 37.8339%;">33</td>
<td style="width: 43.1661%;">49</td>
</tr>
<tr valign="TOP">
<td style="width: 11%;">2014-15</td>
<td style="width: 37.8339%;">35</td>
<td style="width: 43.1661%;">34</td>
</tr>
<tr valign="TOP">
<td style="width: 11%;">2015-16</td>
<td style="width: 37.8339%;">21</td>
<td style="width: 43.1661%;">25</td>
</tr>
</tbody>
</table></div>
<p>&nbsp;</p>
<p>&nbsp;</p>   </div>

        <div class="Company_stats"><h3>RECRUITING COMPANIES</h3></div> 

        <div class="articleBody">
    <div class="list">
<ul>
<li>Accenture</li>
<li>Volkswagen India Private Limited</li>
<li>Mercedez Benz</li>
<li>John Deere</li>
<li>Cognizant</li>
<li>Tech Mahindra</li>
<li>IBM</li>
<li>Infosys</li>
<li>Bosch</li>
<li>Wipro</li>
<li>Tata Autocomp</li>
<li>Musigma</li>
<li>Principal Global</li>
<li>Bristlecone</li>
<li>T.E. Connectivity</li>
<li>Symphony Technologies</li>
<li>Oriental Rubber</li>
<li>Murugappa</li>
<li>ACG Worldwide</li>
<li>LEAR Corporation</li>
<li>KIPT Technologies</li>
<li>Atlas Copco</li>
<li>Endurance</li>
<li>GKN Sinter Metals</li>
<li>Sandvik Asia</li>
<li>Eicher</li>
<li>Tech Mahindra</li>
<li>Kirloskar Pneumatics</li>
</ul>
</div> <br><br> </div>
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

 