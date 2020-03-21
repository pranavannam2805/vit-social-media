<?php 
include("includes/header.php");
include("includes/classes/User.php");
include("includes/classes/Post.php");

// upload part

if(isset($_POST['upload']))
{
    $department=$_POST['Department'];
    $div=$_POST['Division'];
    $branch=$_POST['Branch'];

    //print_r($_FILES);
   $file=$_FILES['file'];
    //print_r($file);
   $fileName=$_FILES['file']['name'];
   $fileTmpName=$_FILES['file']['tmp_name'];
   $fileSize=$_FILES['file']['size'];
   $fileError=$_FILES['file']['error'];
   $fileType=$_FILES['file']['type'];

   $fileExt= explode(".",$fileName);
   $fileActualExt =strtolower(end($fileExt));
   $allowed = array('jpeg', 'jpg', 'png','pdf');

$check_timetable_query=mysqli_query($con , "SELECT * FROM timetable WHERE department='$department' AND division='$div' AND branch='$branch'");
    $check_timetable_rows=mysqli_num_rows($check_timetable_query);
    //print_r($check_timetable_rows);
    if($check_timetable_rows==1)
    {
       if(in_array($fileActualExt, $allowed))
       {
            if($fileError === 0)
            {
                if($fileSize <=1000000)
                {
                    $rowUpload= mysqli_fetch_array($check_timetable_query);

                    $fileNameNew= $department."_".$div."_".$branch.uniqid('', true).".".$fileActualExt;
                    $fileDestination = 'assets/images/timetables/'.$fileNameNew;
                    mysqli_query($con, "UPDATE timetable SET  path = '$fileDestination' WHERE department='$department' AND division='$div' AND branch='$branch'");
                    //print_r($rowUpload);
                    move_uploaded_file($fileTmpName, $fileDestination);
                    echo "Timetable updated successfully........!!!!!";
                }
                else 
                {
                    echo "Your file is too large";
                }
            }
            else
        {
            echo "Error in uploading the file";
        }

       }

        else
        {
            echo "You can't upload files of this type";
        }
    }
    else
    {
        echo "Please select valid options";
    }
}


// display part

if(isset($_POST['search_button']))
{
    $department=$_POST['Department'];
    $div=$_POST['Division'];
    $branch=$_POST['Branch'];

    $check_timetable_query=mysqli_query($con , "SELECT * FROM timetable WHERE department='$department' AND division='$div' AND branch='$branch'");
    $check_timetable_rows=mysqli_num_rows($check_timetable_query);
    //print_r($check_timetable_rows);
    //print_r($check_timetable_query);
    if($check_timetable_rows==1)
    {
        $row= mysqli_fetch_array($check_timetable_query);
        $tt=$row['path'];
        //print_r($tt);


    }
    else
    {
        $tt=NULL;
    }

}
else 
{
    $tt=NULL;
}



?>

<form action="timetable.php" method="POST" enctype="multipart/form-data">
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

<!-- scholarship details  start here -->

<div class="main_column column">

<div class="tt_dept">
                    <label for="Select Department">Department:</label>
                    <select name="Department">
                        <option value="0" selected dislabeled >Department</option>
                            <option value="DESH">DESH</option>
                            <option value="SY">SY</option>
                            <option value="TY">TY</option>
                            <option value="BTech">BTech</option>
                            </select>
                        </div>


    <div class="tt_div">
                    <label for="Select Division">Division:</label>
                    <select name="Division">
                        <option value="0" selected dislabeled >Division</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            </select>
                
    </div>

    <div class="tt_branch">
                    <label for="Select Branch">Branch:</label>
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

<div class="search_tt">
        <input type="submit" name="search_button" value="Search">
 </div>

<br><br>
     Upload Timetable : <input type="file" name ="file" >
     <button type="submit" name="upload" >Upload</button><br><br>
     <?php if($tt != NULL) {?>
     
        <input class="tt_pic" type="image" src="<?php echo $tt ?>" alt="Submit" > <br><br>
   <?php   }
      else {?> 
        <input type="text" value="Timetable not found...!!!" > <br><br>
     <?php }  ?>
    
    

 </div>
</form>
                                                                    
     
    


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

 

 