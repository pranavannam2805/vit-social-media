<?php
require 'config/config.php';
require 'includes/form_handlers/login_handler.php';

//$query=mysqli_query($con , "INSERT INTO test VALUES('','Jaydeep')" );//mysqli_query($con , values to be added in the query)
 ?>

 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Vishwakarma</title>
<link rel="stylesheet" type="text/css" href="assets/css/login_style.css">
 </head>
 <body>
    <div class="top">
           	<header class="top_header">

           			<p>Bansilal Ramnath Agarwal Charitable Trust's<br>
           			<strong>Vishwakarma Institute of Technology</strong><br>
           			(An Autonomous Institute affiliated to Savitribai Phule Pune University)</p>

           	</header>
           	<div class="social">
           		<a class="btn1"  href="https://twitter.com/VitpuneO">
           			<i class="fa fa-twitter" aria-hidden="true"></i>
           		</a>

           		<a class="btn1" href="https://www.facebook.com/Vishwakarma-Institute-Of-Technology-1547575875489422/">
           			<i class="fa fa-facebook" aria-hidden="true"></i>
           		</a>

           		<a class="btn1" href="https://www.instagram.com/vitpune_official/">
           			<i class="fa fa-instagram" aria-hidden="true"></i>
           		</a>

           		<a class="btn1" href="http://google.com/a/vit.edu">
           			<i class="fa fa-envelope" aria-hidden="true"></i>
           		</a>

           		<a class="btn1" href="https://www.youtube.com/user/Punevit">
           			<i class="fa fa-youtube" aria-hidden="true"></i>
           		</a>
           	</div>


    </div>
<div class="wrapper">
  <div class="login_box">
     <div class="login_header">
         <h1> V MET </h1>
         <h2> Login </h2>

     </div>
            <form action="login.php" method="POST">
               		<div class="textbox">
                     			<i class="fa fa-user" aria-hidden="true"></i>
                     			<input type="email" name="log_email" placeholder="Email" value= "<?php
                          if(isset($_SESSION['log_email']))
                          {
                            echo $_SESSION['log_email'];
                          } ?> "required>
               		</div>

               		<div class="textbox">
                       			<i class="fa fa-lock" aria-hidden="true"></i>
                       			<input type="password" name="log_password" placeholder="Password" required>
               		</div>

               		<div class="btn">
                       			<input type="submit" name="login_button" value="Login">
                       			<button class="sign-up"><a href="register.php">Sign up</a></button><br>

                            <?php if(in_array("Invalid Credentials<br>",$error_array_login)) {echo '<span style = "color: #FF0000 ; text-align:center;"><strong> Invalid Credentials </strong></span><br><br>'; }?>

                  </div>

              </form>
      </div>
  </div>

 </body>
 </html>
