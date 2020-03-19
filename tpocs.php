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
    <div class="tpocs_info">
        <div class="tpocs_font">
            <h3>Placements</h3>
            <h3>Computer Enginerring</h3>
        </div>

        
        <div class="Place_stats"><h3>Placement Statistics</h3></div>                
        

        
                                <div class="articleBodycs1">
        <div class="table-responsivecs1"><table border="1" style="width: 740.667px;">
<tbody>
<tr style="height: 31px;">
<td style="height: 31px; width: 47px;">Year</td>
<td style="height: 31px; width: 228px;">No. of Students Placed from B.Tech Computer/ Eligible Candidates</td>
<td style="height: 31px; width: 197px;">Percentage of Placements</td>
<td style="height: 31px; width: 205px;">No. of Students Placed from M.Tech CSE-IT/ Eligible Candidates</td>
<td style="height: 31px; width: 77.6667px;">Percentage of Placements</td>
</tr>
<tr style="height: 15px;">
<td style="height: 15px; width: 47px;">2013-14</td>
<td style="height: 15px; width: 228px;">132/175</td>
<td style="height: 15px; width: 197px;"><strong>75.42%</strong></td>
<td style="height: 15px; width: 205px;">7/23</td>
<td style="height: 15px; width: 77.6667px;"><strong>30.43%</strong></td>
</tr>
<tr style="height: 15.2667px;">
<td style="height: 15.2667px; width: 47px;">2014-15</td>
<td style="height: 15.2667px; width: 228px;">130/152</td>
<td style="height: 15.2667px; width: 197px;"><strong>85.53%</strong></td>
<td style="height: 15.2667px; width: 205px;">9/11</td>
<td style="height: 15.2667px; width: 77.6667px;"><strong>81.81%</strong></td>
</tr>
<tr style="height: 15px;">
<td style="height: 15px; width: 47px;">2015-16</td>
<td style="height: 15px; width: 228px;">99/124</td>
<td style="height: 15px; width: 197px;"><strong>79.83%</strong></td>
<td style="height: 15px; width: 205px;">11/13</td>
<td style="height: 15px; width: 77.6667px;"><strong>84.61%</strong></td>
</tr>
<tr style="height: 15px;">
<td style="height: 15px; width: 47px;">2016-17</td>
<td style="height: 15px; width: 228px;">84/111</td>
<td style="height: 15px; width: 197px;"><strong>75.70%</strong></td>
<td style="height: 15px; width: 205px;">4/15</td>
<td style="height: 15px; width: 77.6667px;"><strong>26.67%</strong></td>
</tr>
<tr style="height: 15px;">
<td style="height: 15px; width: 47px;">2017-18</td>
<td style="height: 15px; width: 228px;">116/144 (Ongoing)</td>
<td style="height: 15px; width: 197px;"><strong>80.55% Ongoing </strong></td>
<td style="height: 15px; width: 205px;">1/14 Ongoing</td>
<td style="height: 15px; width: 77.6667px;"><strong>Ongoing..</strong></td>
</tr>
</tbody>
</table></div>
<p>&nbsp;</p>
<p><strong>Highest Package Received : 37.4 LPA By Microsoft.</strong></p>
<p><b>Average Package:</b> 4.5 LPA</p>
<p>&nbsp;</p>   </div>

    
           <div class="Company_stats"><h3>RECRUITING COMPANIES</h3></div>   
           <p>&nbsp;</p>    
           <div itemprop="articleBodycs2">
        <div class="table-responsivecs2"><table border="2" style="width:740.667px;">
<tbody>
<tr>
<td><strong>Sr. No.</strong></td>
<td><strong>Company Name</strong></td>
</tr>
<tr>
<td>1</td>
<td>Nvidia Ltd.</td>
</tr>
<tr>
<td>2</td>
<td>Thoughtworks Ltd.</td>
</tr>
<tr>
<td>3</td>
<td>MuSigma Business Solutions Ltd.</td>
</tr>
<tr>
<td>4</td>
<td>Tata Technologies Ltd.</td>
</tr>
<tr>
<td>5</td>
<td>EQ Technologic Ltd.</td>
</tr>
<tr>
<td>6</td>
<td>Deloitte Ltd.</td>
</tr>
<tr>
<td>7</td>
<td>S1 Services Ltd.</td>
</tr>
<tr>
<td>8</td>
<td>Texas Instruments Ltd.</td>
</tr>
<tr>
<td>9</td>
<td>Works Application Co. Ltd.</td>
</tr>
<tr>
<td>10</td>
<td>Persistent Systems</td>
</tr>
<tr>
<td>11</td>
<td>Cognizant Ltd.</td>
</tr>
<tr>
<td>12</td>
<td>Accenture Ltd.</td>
</tr>
<tr>
<td>13</td>
<td>Wipro Technologies Ltd.</td>
</tr>
<tr>
<td>14</td>
<td>Infosys Ltd.</td>
</tr>
<tr>
<td>15</td>
<td>Imaginations Technology</td>
</tr>
<tr>
<td>16</td>
<td>Wipro Technologies Ltd.</td>
</tr>
<tr>
<td>17</td>
<td>Tavisca Solutions Pvt. Ltd.</td>
</tr>
<tr>
<td>18</td>
<td>Zensar</td>
</tr>
<tr>
<td>19</td>
<td>Cybage</td>
</tr>
<tr>
<td>20</td>
<td>Synechron Technologies Pvt. Ltd.</td>
</tr>
<tr>
<td>21</td>
<td>Indian Army</td>
</tr>
<tr>
<td>22</td>
<td>ADP</td>
</tr>
<tr>
<td>23</td>
<td>Microsoft</td>
</tr>
<tr>
<td>24</td>
<td>iGate Patni</td>
</tr>
<tr>
<td>25</td>
<td>Godrej Infotech</td>
</tr>
<tr>
<td>26</td>
<td>SNS Tech.</td>
</tr>
<tr>
<td>27</td>
<td>Vertex Ltd.</td>
</tr>
<tr>
<td>28</td>
<td>G. S. Lab</td>
</tr>
<tr>
<td>29</td>
<td>PEP [Career Net Test]</td>
</tr>
<tr>
<td>30</td>
<td>Nilhilent Technologies</td>
</tr>
<tr>
<td>31</td>
<td>AKS Software</td>
</tr>
<tr>
<td>32</td>
<td>Cypress Semiconductors</td>
</tr>
<tr>
<td>33</td>
<td>Icerties</td>
</tr>
<tr>
<td>34</td>
<td>Deutsche Bank</td>
</tr>
<tr>
<td>35</td>
<td>Avaya</td>
</tr>
<tr>
<td>36</td>
<td>&nbsp;Barclays</td>
</tr>
<tr>
<td>37</td>
<td>Calsoft</td>
</tr>
<tr>
<td>38</td>
<td>TechMahindra</td>
</tr>
<tr>
<td>39</td>
<td>Capgemini</td>
</tr>
<tr>
<td>40</td>
<td>Tata Technologies</td>
</tr>
<tr>
<td>41</td>
<td>Technoforce&nbsp;</td>
</tr>
<tr>
<td>42</td>
<td>&nbsp;KPIT Technologies</td>
</tr>
<tr>
<td>43</td>
<td>&nbsp;Symentic</td>
</tr>
<tr>
<td>44</td>
<td>&nbsp;Iauro</td>
</tr>
<tr>
<td>45</td>
<td>&nbsp;Sungard</td>
</tr>
<tr>
<td>46</td>
<td>&nbsp;Mastercard</td>
</tr>
<tr>
<td>47</td>
<td>2coms Consulting Pvt. Ltd. (IBM)</td>
</tr>
<tr>
<td>48</td>
<td>Tata Communication</td>
</tr>
<tr>
<td>49</td>
<td>Tata Technologies</td>
</tr>
<tr>
<td>50</td>
<td>Technoforce&nbsp;</td>
</tr>
<tr>
<td>51</td>
<td>KPIT Technologies</td>
</tr>
<tr>
<td>52</td>
<td>&nbsp;Symentic</td>
</tr>
<tr>
<td>53</td>
<td>Iauro</td>
</tr>
<tr>
<td>54</td>
<td>Sungard</td>
</tr>
<tr>
<td>55</td>
<td>Eaton Technologies</td>
</tr>
<tr>
<td>56</td>
<td>INFIBEAM</td>
</tr>
<tr>
<td>57</td>
<td>PRINCIPAL GLOBAL (N)</td>
</tr>
<tr>
<td>58</td>
<td>CLARICE TECHNOLOGY</td>
</tr>
<tr>
<td>59</td>
<td>HARBINGER GROUP</td>
</tr>
<tr>
<td>60</td>
<td>XTREMUM SOLUTIONS PVT LTD</td>
</tr>
<tr>
<td>61</td>
<td>MU SIGMA (N)</td>
</tr>
<tr>
<td>62</td>
<td>ZS ASSOCIATE</td>
</tr>
<tr>
<td>63</td>
<td>XORIANT SOLUTIONS PVT LTD.&nbsp;</td>
</tr>
<tr>
<td>64</td>
<td>SOFT LINK INTERNATIONAL PVT LTD</td>
</tr>
<tr>
<td>65</td>
<td>LARSEN &amp; TOUBRO INFOTECH</td>
</tr>
<tr>
<td>66</td>
<td>INAUTIX TECHNOLOGIES</td>
</tr>
<tr>
<td>67</td>
<td>MEDIA OCEAN</td>
</tr>
<tr>
<td>68</td>
<td>ORACLE INDIA PVT LTD (OFSS)</td>
</tr>
<tr>
<td>69</td>
<td>SIGMA SOFTWARE</td>
</tr>
<tr>
<td>70</td>
<td>CUMMINS INDIA LTD</td>
</tr>
<tr>
<td>71</td>
<td>DIEBOLD SYSTEMS PVT LTD</td>
</tr>
<tr>
<td>72</td>
<td>TATA ELXSI</td>
</tr>
<tr>
<td>73</td>
<td>IBM</td>
</tr>
<tr>
<td>74</td>
<td>QUICK HEAL</td>
</tr>
<tr>
<td>75</td>
<td>WISDMLABS (N)</td>
</tr>
<tr>
<td>76</td>
<td>AMDOCS</td>
</tr>
<tr>
<td>77</td>
<td>ACCELYA KALE SOLUTIONS PVT LTD</td>
</tr>
<tr>
<td>78</td>
<td>SG ANALYTICS PVT LTD</td>
</tr>
<tr>
<td>79</td>
<td>TIBCO SOFTWARE INDIA</td>
</tr>
<tr>
<td>80</td>
<td>SYNERZIP SOFTECH INDIA PVT LTD</td>
</tr>
<tr>
<td>81</td>
<td>CAPSTONE SECURITIES.</td>
</tr>
</tbody>
</table>
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

 