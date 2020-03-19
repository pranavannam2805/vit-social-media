<?php 
include("includes/header.php");
include("includes/classes/User.php");
include("includes/classes/Post.php");


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

<!-- scholarship details  start here -->

<div class="main_column column">
    <div class="scholarship_font">
            <h3>Scholarship<br></h3>
        </div>
    <div class="scholarship_info">

       <div class="s1">
        <a href="https://www.buddy4study.com/scholarship/post-matric-scholarship-to-sbc-students-maharashtra"><h4>Post Matric Scholarship to SBC Student</h4></a><br>
        <a>The VJNT, OBC, and SBC Welfare Department, Government of Maharashtra invites applications for Post Matric Scholarship to SBC Students 2019-20, Maharashtra from SBC category students who have completed class 10 and are studying at the post-matric level. The selected students will win various awards.</a><br><br>
        <strong>Application Period:</strong><a>August To October</a><br><br><br>
        </div>
        <div class="s1">
         <a href="https://www.buddy4study.com/scholarship/tuition-fees-and-examination-fees-to-sbc-students-maharashtra"><h4>Tuition Fees and Examination Fees to SBC Students</h4></a> <br>
        <a>The VJNT, OBC and SBC Welfare Department, Government of Maharashtra invites applications for Tuition Fees and Examination Fees to SBC Students, Maharashtra 2019-20 from SBC students studying in class 11 to PhD level. The scholarship aims to create opportunities for SBC students by providing them financial aid to pursue higher education. The selected students will receive tuition fees and exam fees reimbursement under this scheme.  </a><br><br>
        <strong>Application Period:</strong><a>August To October</a><br><br><br></div>

        <div class="s1">
         <a href="https://mahadbtmahait.gov.in/SchemeData/SchemeData?str=E9DDFA703C38E51AD7C4C238FF7FAB33"><h4>Dr. Punjabrao Deshmukh Vasatigruh Nirvah Bhatta Yojna</h4></a> <br>
        <a>The Directorate of Higher Education, Government of Maharashtra invites applications for Dr. Punjabrao Deshmukh Vasatigruh Nirvah Bhatta Yojna 2019-20, Maharashtra from students who are wards of registered labour and who have taken admission in Technical, Professional or Non Professional courses at graduation or post-graduation level. The selected students will receive up to INR 30,000 for 10 months as scholarship amount.</a><br><br>
        <strong>Application Period:</strong><a>August To October</a><br><br><br></div>

        <div class="s1">
         <a href="https://mahadbtmahait.gov.in/SchemeData/SchemeData?str=E9DDFA703C38E51A2D3C3A162F4DE21D"><h4>Rajarshi Chhatrapati Shahu Maharaj Shikshan Shulk Shishyavrutti Yojna</h4></a> <br>
        <a>The Department of Higher Education, Government of Maharashtra invites applications from students taking admission in a professional or non-professional course under the Directorate of Higher Education for Rajarshi Chhatrapati Shahu Maharaj Shikshan Shulk Shishyavrutti Yojna 2019-20, Maharashtra. The scholarship is applicable for students coming from economically weaker sections of society. The selected students can receive up to 100% tuition fees and exam fees.</a><br><br>
        <strong>Application Period:</strong><a>August To October</a><br><br><br></div>

        <div class="s1">
        <a href="https://leverageedu.com/blog/ratan-tata-scholarship-for-engineering-students/"><h4>Ratan Tata Scholarship for Engineering Students</h4></a> <br>
        <a>TRatan Tata Scholarship is an initiative to offer financial aid to Indian students aspiring to pursue higher studies either in the US or the UK. Through this funding, the scholarship has ties with several universities across the globe, Cornell University is one of the prominent sponsors.</a><br><br>
        <strong>Application Period:</strong><a>August To October</a><br><br><br></div>

        <div class="s1">
         <a href="https://mahadbtmahait.gov.in/SchemeData/SchemeData?str=E9DDFA703C38E51A054A8D0DAA702B64"><h4>Post Matric Scholarship for Person with disability</h4></a> <br>
        <a>1) Providing financial assistance for education.
2) To reduce the drop in education leakage.
3) Creating a passion for higher education.
4) Providing students the opportunity to go to the mainstream of education through education.
5) Scholarship scheme to avoid transparency, co-ordination and delay.
6) Benefits of Tuition Fees, Exam Fees and Maintenance Allowance are paid to only Disable Persons.</a><br><br>
        <strong>Application Period:</strong><a>August To October</a><br><br><br></div>

        <div class="s1">
         <a href="https://mahadbtmahait.gov.in/SchemeData/SchemeData?str=E9DDFA703C38E51AB0BE07C3EC756406"><h4>Eklavya Scholarship</h4></a> <br>
        <a>Those students who admitted for Post Graduate and obtained 60 percent marks in arts commerce and law graduation and 70 % marks in Science graduation are eligible to apply for this scolarship.
 Parental annual income should not exceed 75.000 Rs/-
Student should resident of Maharashtra
 Students should not work full time or part time. Selection of Candidates Is on Merit basis</a><br><br>
        <strong>Application Period:</strong><a>August To October</a><br><br></div>

        <div class="s1">
         <a href="https://mahadbtmahait.gov.in/SchemeData/SchemeData?str=E9DDFA703C38E51ABF4E10E281A07733"><h4>Jawaharlal Nehru University Scholarship</h4></a> <br>
        <a>Jawaharlal Nehru University scheme is started by Jawaharlal University for Maharashtra .
Among the students from maharastra studying in that University One Student is selected by University according to GR.SCH1082/151160/(2173)/GEN5,DATED 7/5/1983.</a><br><br>
        <strong>Application Period:</strong><a>August To October</a><br><br><br></div>

        <div class="s1">
      <a href="https://mahadbtmahait.gov.in/#">CLICL HERE</a> <br>
        <a>For other scholarship Click Above ,here we should get other Government Scholarship</a>
        <br><br><br></div>

        <div class="s1">
         <a href="https://www.buddy4study.com/article/top-trending-scholarships-for-engineering-students">Click Here</a> <br>
        <a>Top-trending Scholarship For <strong>Enginerring</strong> students</a>
        <br><br>
        </div>
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
