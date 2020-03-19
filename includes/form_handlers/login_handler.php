<?php

$error_array_login=array();

if(isset($_POST['login_button']))
{

   $email=filter_var($_POST['log_email'],FILTER_SANITIZE_EMAIL); // sanitzes the Email
   $_SESSION['log_email']=$email; //stores the email in the session variable
  $psd=md5($_POST['log_password']);  // gets the Password
  $check_database_query=mysqli_query($con, "SELECT * FROM users WHERE email='$email' AND password='$psd'");


  $check_login_query=mysqli_num_rows($check_database_query);
  if ($check_login_query==1)
  {
    $row= mysqli_fetch_array($check_database_query);
    $username=$row['username'];
    $user_closed_query = mysqli_query($con,"SELECT * FROM users WHERE email='$email' AND user_closed='yes'");
    if(mysqli_num_rows($user_closed_query)==1)
    {
      $reopen_account = mysqli_query($con, "UPDATE users SET user_closed='no' WHERE email='$email'");
    }

    $_SESSION['username']=$username;
    header("Location:index.php");
    exit();
  }
  else
  {
     array_push($error_array_login,"Invalid Credentials<br>");
  }



}


 ?>
