<?php
//Declaration  of variables
$gr_no="";
$fname="";
$lname="";
$gen="";  //gender
$em="";
$year="";
$branch="";
$phone="";
$dob="";
$psd="";
$psd2="";
$error_array=array();

if(isset($_POST['continue']))
{
	//registration VALUES


	//gr no
	$g=strip_tags($_POST['Grno']);// removes html tags
	$gr_no=str_replace(' ','',$gr_no);// removes spaces
  $g_check =mysqli_query($con," SELECT gr_no FROM users WHERE gr_no= '$g'");
  $num_rowsg = mysqli_num_rows($g_check);
  if($num_rowsg>0)
  {
    array_push($error_array, "Gr.No. already in use please use a diffrent one <br>");
  }
  else
  {
    $gr_no=strip_tags($_POST['Grno']);
  }
  $_SESSION['Grno'] = $gr_no;   //stores the gr no in the session variable

	//first name
	$fname=strip_tags($_POST['First_name']);// removes html tags
	$fname=str_replace(' ','',$fname);// removes spaces
	$fname=ucfirst(strtolower($fname)); //uppercase first letter
  $_SESSION['First_name'] = $fname;   //stores the gr no in the session variable

	//last name
	$lname=strip_tags($_POST['Last_name']);// removes html tags
	$lname=str_replace(' ','',$lname);// removes spaces
	$lname=ucfirst(strtolower($lname)); //uppercase first letter
  $_SESSION['Last_name'] = $lname;   //stores the gr no in the session variable

	//gender
	if(isset($_POST['gender_choice']))
	{
		$gen=$_POST['gender_choice'];
	}

	//year
	if(isset($_POST['Year_choice']))
	{
		$year=$_POST['Year_choice'];
	}

	// for Branch
	$branch = $_POST['Branch'];  // Storing Selected Value In Variable

	// for phone
	$phone=strip_tags($_POST['Phone_No']);// removes html tags
	$phone=str_replace(' ','',$phone);// removes spaces
	if(strlen($phone)<10 || strlen($phone)>10)
	{
		array_push($error_array,"wrong phoneno");
	}
  $_SESSION['Phone_No'] = $phone;   //stores the phone no in the session variable


	//select dob
	$dob=$_POST['Date'];   // not confirmed

	// set password
  $psd=strip_tags($_POST['Password']);
  $psd2=strip_tags($_POST['Password2']);


	//email
	$m=strip_tags($_POST['Email']);
	$vit="@vit.edu";
	if(strpos($m,$vit) == false)
	{
		array_push($error_array, "Sorry you are not a VITian <br>");
	}
	else
	{
  		//echo "Welcome";
  		$em=$m;
      // check if email already exists
      $e_check =mysqli_query($con," SELECT email FROM users WHERE email= '$em'");
      // count the no of rows returned
      $num_rows = mysqli_num_rows($e_check);

      if($num_rows>0)
      {
        array_push($error_array, "Email already in use please use a diffrent one <br>");
      }
      else
      {
        if(strlen($fname)>25 || strlen($fname)<2)
        {
          array_push($error_array,"Enter the first name between 2 to 25 characters <br>");
        }
        if(strlen($lname)>25 || strlen($lname)<2)
        {
          array_push($error_array, "Enter the last name between 2 to 25 characters <br>");
        }
        if($psd!=$psd2)
        {
          array_push($error_array, "Passwords don't match <br>");
        }
        else
        {
          if(preg_match('/[^A-Za-z0-9]/',$psd))
          {
            array_push($error_array, "Your password can contain only English characters or numbers <br>");
          }
          if(strlen($psd)>30 || strlen($psd)<5)
          {
            array_push($error_array, "Your password must be between 5 to 30 characters <br>");
          }
        }
      }
      $_SESSION['Email'] = $em;
	 }

   if(empty($error_array))
   {
     $psd=md5($psd);   // Encrypts password before sending to database
     // generating the username for the user

     $username=strtolower($fname . "_" . $lname);
     $check_username_query =mysqli_query($con , "SELECT username FROM users WHERE username ='$username'");

     // check username already exists
     $i=0;
    while(mysqli_num_rows($check_username_query) != 0)
    {
       $i++;
       $username= $username.$i;
       $check_username_query=mysqli_query($con ,"SELECT username FROM users WHERE username ='$username'");
    }

     // assigning a profile picture
     $random=rand(1,2); // Selects Random number from 1 nd 2
     if($random==1)
     {
       $profile_pic="assets/images/profile_pics/default/head_amethyst.png";
     }
     if($random==2)
     {
       $profile_pic="assets/images/profile_pics/default/head_wet_asphalt.png";
     }

     $query=mysqli_query($con,"INSERT INTO users VALUES('', '$gr_no','$fname','$lname','$username','$gen','$em','$psd','$year','$branch','$phone','$dob',',','$profile_pic','0','0','no')");

     array_push($error_array,"you are set");

   }

	// $result=mysqli_query($con,"SELECT * FROM users WHERE email= '$em' ");
	// $count=mysqli_num_rows($result);


	}




 ?>
