<?php

require 'config/config.php';
require 'includes/form_handlers/register_handler.php';

?>
<html>
<head>
 <meta charset="utf-8">
 <title>Vishwakarma</title>
 <link rel="stylesheet" type="text/css" href="assets/css/registration_style.css">
</head>
<body>
  <div class="top">
         <header class="top_header">
              		 <p>Bansilal Ramnath Agarwal Charitable Trust's<br>
              		 <strong> Vishwakarma Institute of Technology </strong><br>
              		 (An Autonomous Institute affiliated to Savitribai Phule Pune University)</p>
         </header>
        	<div class="social">
              		<a class="btn"  href="https://twitter.com/VitpuneO">
              			<i class="fa fa-twitter" aria-hidden="true"></i>
              		</a>
              		<a class="btn" href="https://www.facebook.com/Vishwakarma-Institute-Of-Technology-1547575875489422/">
              			<i class="fa fa-facebook" aria-hidden="true"></i>
              		</a>

              		<a class="btn" href="https://www.instagram.com/vitpune_official/">
              			<i class="fa fa-instagram" aria-hidden="true"></i>
              		</a>

              		<a class="btn" href="http://google.com/a/vit.edu">
              			<i class="fa fa-envelope" aria-hidden="true"></i>
              		</a>

              		<a class="btn" href="https://www.youtube.com/user/Punevit">
              			<i class="fa fa-youtube" aria-hidden="true"></i>
              		</a>

        	</div>
    </div>
    <div class="wrapper">
        <form  action="register.php" method="post">
          <div class="Register_box">
            <div class="Registerbox_header">
                    <h2>Register</h2>
              </div>
                <div class="Grno">
                 <label for="Grno">Gr no:</label>
                		<input type="text" name="Grno" placeholder="Gr_No" value= "<?php
                    if(isset($_SESSION['Grno']))
                    {
                      echo $_SESSION['Grno'];
                    } ?> " required>
                </div>
                <br>
                <?php if(in_array("Gr.No. already in use please use a diffrent one <br>", $error_array))
                {
                  echo '<span style = "color: #FF0000 ; text-align:center;">  Gr.No. already in use please use a diffrent one  </span><br>';
                } ?>

                <div id="form">
                    <div class="fname">
                         <label for="fname">First name:</label>

                			<input type="text" name="First_name" placeholder="First_name" value= "<?php
                      if(isset($_SESSION['First_name']))
                      {
                        echo $_SESSION['First_name'];
                      } ?> " requried>
                      </div>
                      <br>
                      <?php if(in_array("Enter the first name between 2 to 25 characters<br>", $error_array))
                      {
                        echo '<span style = "color: #FF0000 ; text-align:center;">  Enter the first name between 2 to 25 characters  </span><br>';
                      } ?>

                      <label for="lname">Last name:</label>
                			<input type="text" name="Last_name" placeholder="Last_name" value= "<?php
                      if(isset($_SESSION['Last_name']))
                      {
                        echo $_SESSION['Last_name'];
                      } ?> "requried>
                      <br>

                      <?php if(in_array("Enter the last name between 2 to 25 characters<br>", $error_array))
                      {
                        echo '<span style = "color: #FF0000 ; text-align:center;">  Enter the last name between 2 to 25 characters  </span><br>';
                      } ?>

                		<div class="gender">
                			<h5>Gender</h5>
                			<input type="radio" name="gender_choice" value=:"choice-1">
                			<label for="Gender-male">Male</label>
                		<br>
                			<input type="radio" name="gender_choice" value=:"choice-2">
                			<label for="Gender-female">Female</label>
                		<br>
                			<input type="radio" name="gender_choice" value=:"choice-3">
                			<label for="Gender-Other">Other</label>
                		</div>
                		<div class="Email">
                			<label for="Email">Email:</label>

                			<input type="email" name="Email" placeholder="xyz@vit.edu" value= "<?php
                      if(isset($_SESSION['Email']))
                      {
                        echo $_SESSION['Email'];
                      } ?> " required>
                		</div>
                    <br>
                    <?php if(in_array("Email already in use please use a diffrent one <br>", $error_array))
                    {
                      echo '<span style = "color: #FF0000 ; text-align:center;">  Email already in use please use a diffrent one  </span><br>';
                    } ?>

                    <?php if(in_array("Sorry you are not a VITian <br>", $error_array))
                    {
                      echo '<span style = "color: #FF0000 ; text-align:center;"> Sorry you are not a VITian !!!!  </span><br>';
                    } ?>

                		<div class="Year">
                    			<h5>College Year</h5>
                    			<input type="radio" name="Year_choice" value="FY">
                    			<label for="Year-DESH(FY)">Fresher(FY)</label>
                    		<br>
                    			<input type="radio" name="Year_choice" value="SY">
                    			<label for="Year-SY">SY</label>
                    		<br>
                    			<input type="radio" name="Year_choice" value="TY">
                    			<label for="Year-TY">TY</label>
                    		<br>
                    			<input type="radio" name="Year_choice" value="B.Tech">
                    			<label for="Year-B.Tech">B.Tech</label>

                		</div>
                       <br>

                		<div class="Branch">
                			<label for="Branch">Branch:</label>
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
                		<div id="Contact">

                			<label for="contact">Phone No.</label>
                			<input type="text" name="Phone_No" placeholder="9876543210" value= "<?php
                      if(isset($_SESSION['Phone_No']))
                      {
                        echo $_SESSION['Phone_No'];
                      } ?> " required>

                      <?php
                      if(in_array("wrong phoneno",$error_array))
                      {
                        echo '<br><span style = "color: #FF0000 ; text-align:center;">  Enter a valid phone number !!! </span><br>';
                      } ?>

                		</div>
                		<div class="birthdate">
                			<label for="Date">Birthdate:</label>
                			<input type="date" name="Date" required>
                		</div>
                		<div class="Password">

                           <label for="Password">Password:</label>
                			<input type="password" name="Password">
                			<br>
                    </div>
                    <div class="renter">
              			 <label for="Password">Re-enter:</label>
                			<input type="password" name="Password2">
                      </div>
                       <br>

                       <?php if(in_array("Passwords don't match <br>", $error_array))
                       {
                         echo '<span style = "color: #FF0000 ; text-align:center;">  Passwords do not match </span><br>';
                       } ?>
                       <?php if(in_array("Your password must be between 5 to 30 characters <br>", $error_array))
                       {
                         echo '<span style = "color: #FF0000 ; text-align:center;">  Your password must be between 5 to 30 characters </span><br>';
                       } ?>
                       <?php if(in_array("Your password can contain only English characters or numbers <br>", $error_array))
                       {
                          echo '<span style = "color: #FF0000 ; text-align:center;">  Your password can contain only English characters or numbers </span><br>';
                       } ?>

                			<input type="checkbox" name="Agree" required>
                    	<label for="agree">I agree to all the terms and condition</label>
                      <br>

                			<input type="submit" name="continue" value="Submit">
                      <br>
                			<?php if(in_array("you are set", $error_array))
                      {
                      //  header("Location:login.php");
                        echo "<span style='color: #14C800;  text-align:center;'>You are all set dude !!! now go ahead and login..!!! </span><br>";
                        exit();
                      } ?>


                      </form>
                </div>
           </div>
  </div>

</body>

</html>
