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
            <h3>Electronics Enginerring</h3>
        </div>
        
        <div class="Place_stats"><h3>Placement Statistics</h3></div>  

        <div itemprop="articleBodyelex1">
   
<p style="margin-bottom: 0cm;">&nbsp;</p>
<p style="margin-bottom: 0cm;">&nbsp;</p>
<div class="table-responsiveelex1"><table class="MsoTableLightListAccent5" style="width: 505px; border-collapse: collapse; border: none; height: 289px;" border="1" cellspacing="0" cellpadding="0">
<tbody>
<tr style="mso-yfti-irow: -1; mso-yfti-firstrow: yes; height: 21.5pt;">
<td style="width: 210px; border: 1pt solid windowtext; background: #4bacc6; padding: 0in 5.4pt; height: 21.5pt;" valign="top">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal; vertical-align: bottom; mso-yfti-cnfc: 1;" align="center"><b><span lang="EN-IN" style="font-size: 16.0pt; font-family: 'Arial','sans-serif'; mso-fareast-font-family: 'Times New Roman'; color: white; mso-themecolor: background1; mso-font-kerning: 12.0pt; mso-ansi-language: EN-IN;">Academic Year</span></b></p>
</td>
<td style="width: 264px; border-top: 1pt solid windowtext; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-image: initial; border-left: none; background: #4bacc6; padding: 0in 5.4pt; height: 21.5pt;" valign="top">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal; vertical-align: bottom; mso-yfti-cnfc: 1;" align="center"><b><span lang="EN-IN" style="font-size: 16.0pt; font-family: 'Arial','sans-serif'; mso-fareast-font-family: 'Times New Roman'; color: white; mso-themecolor: background1; mso-font-kerning: 12.0pt; mso-ansi-language: EN-IN;">No of Students Placed</span></b></p>
</td>
</tr>
<tr style="mso-yfti-irow: 0; height: 19.7pt;">
<td style="width: 210px; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0in 5.4pt; height: 19.7pt;" valign="top">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal; vertical-align: bottom; mso-yfti-cnfc: 64;" align="center"><span lang="EN-IN" style="font-size: 16.0pt; font-family: 'Arial','sans-serif'; mso-fareast-font-family: 'Times New Roman'; color: black; mso-font-kerning: 12.0pt; mso-ansi-language: EN-IN;">2012-13</span></p>
</td>
<td style="width: 264px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; height: 19.7pt;" valign="top">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal; vertical-align: bottom; mso-yfti-cnfc: 64;" align="center"><span lang="EN-IN" style="font-size: 16.0pt; font-family: 'Arial','sans-serif'; mso-fareast-font-family: 'Times New Roman'; color: black; mso-font-kerning: 12.0pt; mso-ansi-language: EN-IN;">63</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 1; height: 19.7pt;">
<td style="width: 210px; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0in 5.4pt; height: 19.7pt;" valign="top">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal; vertical-align: bottom;" align="center"><span lang="EN-IN" style="font-size: 16.0pt; font-family: 'Arial','sans-serif'; mso-fareast-font-family: 'Times New Roman'; color: black; mso-font-kerning: 12.0pt; mso-ansi-language: EN-IN;">2013-14</span></p>
</td>
<td style="width: 264px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; height: 19.7pt;" valign="top">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal; vertical-align: bottom;" align="center"><span lang="EN-IN" style="font-size: 16.0pt; font-family: 'Arial','sans-serif'; mso-fareast-font-family: 'Times New Roman'; color: black; mso-font-kerning: 12.0pt; mso-ansi-language: EN-IN;">78</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 2; height: 19.7pt;">
<td style="width: 210px; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0in 5.4pt; height: 19.7pt;" valign="top">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal; vertical-align: bottom; mso-yfti-cnfc: 64;" align="center"><span lang="EN-IN" style="font-size: 16.0pt; font-family: 'Arial','sans-serif'; mso-fareast-font-family: 'Times New Roman'; color: black; mso-font-kerning: 12.0pt; mso-ansi-language: EN-IN;">2014-15</span></p>
</td>
<td style="width: 264px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; height: 19.7pt;" valign="top">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal; vertical-align: bottom; mso-yfti-cnfc: 64;" align="center"><span lang="EN-IN" style="font-size: 16.0pt; font-family: 'Arial','sans-serif'; mso-fareast-font-family: 'Times New Roman'; color: black; mso-font-kerning: 12.0pt; mso-ansi-language: EN-IN;">65</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 3; height: 19.7pt;">
<td style="width: 210px; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0in 5.4pt; height: 19.7pt;" valign="top">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal; vertical-align: bottom;" align="center"><span lang="EN-IN" style="font-size: 16.0pt; font-family: 'Arial','sans-serif'; mso-fareast-font-family: 'Times New Roman'; color: black; mso-font-kerning: 12.0pt; mso-ansi-language: EN-IN;">2015-16</span></p>
</td>
<td style="width: 264px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; height: 19.7pt;" valign="top">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal; vertical-align: bottom;" align="center"><span lang="EN-IN" style="font-size: 16.0pt; font-family: 'Arial','sans-serif'; mso-fareast-font-family: 'Times New Roman'; color: black; mso-font-kerning: 12.0pt; mso-ansi-language: EN-IN;">71</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 4; height: 19.7pt;">
<td style="width: 210px; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0in 5.4pt; height: 19.7pt;" valign="top">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal; vertical-align: bottom; mso-yfti-cnfc: 64;" align="center"><span lang="EN-IN" style="font-size: 16.0pt; font-family: 'Arial','sans-serif'; mso-fareast-font-family: 'Times New Roman'; color: black; mso-font-kerning: 12.0pt; mso-ansi-language: EN-IN;">2016-17</span></p>
</td>
<td style="width: 264px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; height: 19.7pt;" valign="top">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal; vertical-align: bottom; mso-yfti-cnfc: 64;" align="center"><span lang="EN-IN" style="font-size: 16.0pt; font-family: 'Arial','sans-serif'; mso-fareast-font-family: 'Times New Roman'; color: black; mso-font-kerning: 12.0pt; mso-ansi-language: EN-IN;">75</span></p>
</td>
</tr>
<tr style="mso-yfti-irow: 5; mso-yfti-lastrow: yes; height: 19.7pt;">
<td style="width: 210px; border-right: 1pt solid windowtext; border-bottom: 1pt solid windowtext; border-left: 1pt solid windowtext; border-image: initial; border-top: none; padding: 0in 5.4pt; height: 19.7pt;" valign="top">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal; vertical-align: bottom;" align="center"><span lang="EN-IN" style="font-size: 16.0pt; font-family: 'Arial','sans-serif'; mso-fareast-font-family: 'Times New Roman'; color: black; mso-font-kerning: 12.0pt; mso-ansi-language: EN-IN;">2017-18</span></p>
</td>
<td style="width: 264px; border-top: none; border-left: none; border-bottom: 1pt solid windowtext; border-right: 1pt solid windowtext; padding: 0in 5.4pt; height: 19.7pt;" valign="top">
<p class="MsoNormal" style="margin-bottom: .0001pt; text-align: center; line-height: normal; vertical-align: bottom;" align="center"><span style="font-size: 16.0pt; font-family: 'Arial','sans-serif'; mso-fareast-font-family: 'Times New Roman'; color: black; mso-font-kerning: 12.0pt;">83</span></p>
</td>
</tr>
</tbody>
</table></div>
<p style="margin-bottom: 0cm;">&nbsp;</p>   </div><br><br>
          <div class="Company_stats"><h3>RECRUITING COMPANIES</h3></div> 
    
          <div class="articleBodyelex2">
    
<p>&nbsp;</p>
<div class="table-responsiveelex2"><table class="MsoTableLightShadingAccent3" style="border-collapse: collapse; border: none; width: 565.667px;" border="1" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="width: 157px; border: 1pt solid #78c0d4; padding: 0cm 5.4pt;">
<p class="MsoListParagraph" style="mso-add-space: auto; text-indent: -18.0pt; line-height: 200%; mso-list: l0 level1 lfo1; mso-yfti-cnfc: 5; margin: 0cm 0cm .0001pt 68.15pt;"><!-- [if !supportLists]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">1.<span style="font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: 'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></b><!--[endif]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">&nbsp;</span></b></p>
</td>
<td style="width: 380.667px; border-style: solid solid solid none; border-top-color: #78c0d4; border-right-color: #78c0d4; border-bottom-color: #78c0d4; border-top-width: 1pt; border-right-width: 1pt; border-bottom-width: 1pt; padding: 0cm 5.4pt;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: 200%; mso-yfti-cnfc: 1;"><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1; mso-bidi-font-weight: bold;">INFOSYS</span></p>
</td>
</tr>
<tr>
<td style="width: 157px; border-style: none solid solid; border-right-color: #78c0d4; border-bottom-color: #78c0d4; border-left-color: #78c0d4; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; padding: 0cm 5.4pt; background: #e6eed5;">
<p class="MsoListParagraph" style="mso-add-space: auto; text-indent: -18.0pt; line-height: 200%; mso-list: l0 level1 lfo1; mso-yfti-cnfc: 68; margin: 0cm 0cm .0001pt 68.15pt;"><!-- [if !supportLists]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">2.<span style="font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: 'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></b><!--[endif]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">&nbsp;</span></b></p>
</td>
<td style="width: 380.667px; border-style: none solid solid none; border-bottom-color: #78c0d4; border-bottom-width: 1pt; border-right-color: #78c0d4; border-right-width: 1pt; padding: 0cm 5.4pt; background: #e6eed5;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: 200%; mso-yfti-cnfc: 64;"><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">WIPRO</span></p>
</td>
</tr>
<tr>
<td style="width: 157px; border-style: none solid solid; border-right-color: #78c0d4; border-bottom-color: #78c0d4; border-left-color: #78c0d4; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; padding: 0cm 5.4pt;">
<p class="MsoListParagraph" style="mso-add-space: auto; text-indent: -18.0pt; line-height: 200%; mso-list: l0 level1 lfo1; mso-yfti-cnfc: 4; margin: 0cm 0cm .0001pt 68.15pt;"><!-- [if !supportLists]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">3.<span style="font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: 'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></b><!--[endif]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">&nbsp;</span></b></p>
</td>
<td style="width: 380.667px; border-style: none solid solid none; border-bottom-color: #78c0d4; border-bottom-width: 1pt; border-right-color: #78c0d4; border-right-width: 1pt; padding: 0cm 5.4pt;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: 200%;"><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">COGNIZANT</span></p>
</td>
</tr>
<tr>
<td style="width: 157px; border-style: none solid solid; border-right-color: #78c0d4; border-bottom-color: #78c0d4; border-left-color: #78c0d4; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; padding: 0cm 5.4pt; background: #e6eed5;">
<p class="MsoListParagraph" style="mso-add-space: auto; text-indent: -18.0pt; line-height: 200%; mso-list: l0 level1 lfo1; mso-yfti-cnfc: 68; margin: 0cm 0cm .0001pt 68.15pt;"><!-- [if !supportLists]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">4.<span style="font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: 'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></b><!--[endif]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">&nbsp;</span></b></p>
</td>
<td style="width: 380.667px; border-style: none solid solid none; border-bottom-color: #78c0d4; border-bottom-width: 1pt; border-right-color: #78c0d4; border-right-width: 1pt; padding: 0cm 5.4pt; background: #e6eed5;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: 200%; mso-yfti-cnfc: 64;"><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">ACCENTURE</span></p>
</td>
</tr>
<tr>
<td style="width: 157px; border-style: none solid solid; border-right-color: #78c0d4; border-bottom-color: #78c0d4; border-left-color: #78c0d4; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; padding: 0cm 5.4pt;">
<p class="MsoListParagraph" style="mso-add-space: auto; text-indent: -18.0pt; line-height: 200%; mso-list: l0 level1 lfo1; mso-yfti-cnfc: 4; margin: 0cm 0cm .0001pt 68.15pt;"><!-- [if !supportLists]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">5.<span style="font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: 'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></b><!--[endif]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">&nbsp;</span></b></p>
</td>
<td style="width: 380.667px; border-style: none solid solid none; border-bottom-color: #78c0d4; border-bottom-width: 1pt; border-right-color: #78c0d4; border-right-width: 1pt; padding: 0cm 5.4pt;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: 200%;"><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">L &amp; T INFOTECH</span></p>
</td>
</tr>
<tr>
<td style="width: 157px; border-style: none solid solid; border-right-color: #78c0d4; border-bottom-color: #78c0d4; border-left-color: #78c0d4; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; padding: 0cm 5.4pt; background: #e6eed5;">
<p class="MsoListParagraph" style="mso-add-space: auto; text-indent: -18.0pt; line-height: 200%; mso-list: l0 level1 lfo1; mso-yfti-cnfc: 68; margin: 0cm 0cm .0001pt 68.15pt;"><!-- [if !supportLists]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">6.<span style="font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: 'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></b><!--[endif]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">&nbsp;</span></b></p>
</td>
<td style="width: 380.667px; border-style: none solid solid none; border-bottom-color: #78c0d4; border-bottom-width: 1pt; border-right-color: #78c0d4; border-right-width: 1pt; padding: 0cm 5.4pt; background: #e6eed5;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: 200%; mso-yfti-cnfc: 64;"><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">EINFOCHIPS LTD</span></p>
</td>
</tr>
<tr>
<td style="width: 157px; border-style: none solid solid; border-right-color: #78c0d4; border-bottom-color: #78c0d4; border-left-color: #78c0d4; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; padding: 0cm 5.4pt;">
<p class="MsoListParagraph" style="mso-add-space: auto; text-indent: -18.0pt; line-height: 200%; mso-list: l0 level1 lfo1; mso-yfti-cnfc: 4; margin: 0cm 0cm .0001pt 68.15pt;"><!-- [if !supportLists]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">7.<span style="font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: 'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></b><!--[endif]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">&nbsp;</span></b></p>
</td>
<td style="width: 380.667px; border-style: none solid solid none; border-bottom-color: #78c0d4; border-bottom-width: 1pt; border-right-color: #78c0d4; border-right-width: 1pt; padding: 0cm 5.4pt;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: 200%;"><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">WAVELET TECHNOLOGIES PVT LTD</span></p>
</td>
</tr>
<tr>
<td style="width: 157px; border-style: none solid solid; border-right-color: #78c0d4; border-bottom-color: #78c0d4; border-left-color: #78c0d4; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; padding: 0cm 5.4pt; background: #e6eed5;">
<p class="MsoListParagraph" style="mso-add-space: auto; text-indent: -18.0pt; line-height: 200%; mso-list: l0 level1 lfo1; mso-yfti-cnfc: 68; margin: 0cm 0cm .0001pt 68.15pt;"><!-- [if !supportLists]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">8.<span style="font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: 'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></b><!--[endif]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">&nbsp;</span></b></p>
</td>
<td style="width: 380.667px; border-style: none solid solid none; border-bottom-color: #78c0d4; border-bottom-width: 1pt; border-right-color: #78c0d4; border-right-width: 1pt; padding: 0cm 5.4pt; background: #e6eed5;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: 200%; mso-yfti-cnfc: 64;"><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">IBM</span></p>
</td>
</tr>
<tr>
<td style="width: 157px; border-style: none solid solid; border-right-color: #78c0d4; border-bottom-color: #78c0d4; border-left-color: #78c0d4; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; padding: 0cm 5.4pt;">
<p class="MsoListParagraph" style="mso-add-space: auto; text-indent: -18.0pt; line-height: 200%; mso-list: l0 level1 lfo1; mso-yfti-cnfc: 4; margin: 0cm 0cm .0001pt 68.15pt;"><!-- [if !supportLists]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">9.<span style="font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: 'Times New Roman';">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></b><!--[endif]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">&nbsp;</span></b></p>
</td>
<td style="width: 380.667px; border-style: none solid solid none; border-bottom-color: #78c0d4; border-bottom-width: 1pt; border-right-color: #78c0d4; border-right-width: 1pt; padding: 0cm 5.4pt;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: 200%;"><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">TATA ELXSI</span></p>
</td>
</tr>
<tr>
<td style="width: 157px; border-style: none solid solid; border-right-color: #78c0d4; border-bottom-color: #78c0d4; border-left-color: #78c0d4; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; padding: 0cm 5.4pt; background: #e6eed5;">
<p class="MsoListParagraph" style="mso-add-space: auto; text-indent: -18.0pt; line-height: 200%; mso-list: l0 level1 lfo1; mso-yfti-cnfc: 68; margin: 0cm 0cm .0001pt 68.15pt;"><!-- [if !supportLists]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">10.<span style="font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: 'Times New Roman';">&nbsp; </span></span></b><!--[endif]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">&nbsp;</span></b></p>
</td>
<td style="width: 380.667px; border-style: none solid solid none; border-bottom-color: #78c0d4; border-bottom-width: 1pt; border-right-color: #78c0d4; border-right-width: 1pt; padding: 0cm 5.4pt; background: #e6eed5;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: 200%; mso-yfti-cnfc: 64;"><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">AUDIENCE SCIENCE INDIA PVT LTD</span></p>
</td>
</tr>
<tr>
<td style="width: 157px; border-style: none solid solid; border-right-color: #78c0d4; border-bottom-color: #78c0d4; border-left-color: #78c0d4; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; padding: 0cm 5.4pt;">
<p class="MsoListParagraph" style="mso-add-space: auto; text-indent: -18.0pt; line-height: 200%; mso-list: l0 level1 lfo1; mso-yfti-cnfc: 4; margin: 0cm 0cm .0001pt 68.15pt;"><!-- [if !supportLists]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">11.<span style="font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: 'Times New Roman';">&nbsp; </span></span></b><!--[endif]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">&nbsp;</span></b></p>
</td>
<td style="width: 380.667px; border-style: none solid solid none; border-bottom-color: #78c0d4; border-bottom-width: 1pt; border-right-color: #78c0d4; border-right-width: 1pt; padding: 0cm 5.4pt;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: 200%;"><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">AMDOCS INDIA</span></p>
</td>
</tr>
<tr>
<td style="width: 157px; border-style: none solid solid; border-right-color: #78c0d4; border-bottom-color: #78c0d4; border-left-color: #78c0d4; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; padding: 0cm 5.4pt; background: #e6eed5;">
<p class="MsoListParagraph" style="mso-add-space: auto; text-indent: -18.0pt; line-height: 200%; mso-list: l0 level1 lfo1; mso-yfti-cnfc: 68; margin: 0cm 0cm .0001pt 68.15pt;"><!-- [if !supportLists]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">12.<span style="font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: 'Times New Roman';">&nbsp; </span></span></b><!--[endif]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">&nbsp;</span></b></p>
</td>
<td style="width: 380.667px; border-style: none solid solid none; border-bottom-color: #78c0d4; border-bottom-width: 1pt; border-right-color: #78c0d4; border-right-width: 1pt; padding: 0cm 5.4pt; background: #e6eed5;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: 200%; mso-yfti-cnfc: 64;"><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">TECH MAHINDRA</span></p>
</td>
</tr>
<tr>
<td style="width: 157px; border-style: none solid solid; border-right-color: #78c0d4; border-bottom-color: #78c0d4; border-left-color: #78c0d4; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; padding: 0cm 5.4pt;">
<p class="MsoListParagraph" style="mso-add-space: auto; text-indent: -18.0pt; line-height: 200%; mso-list: l0 level1 lfo1; mso-yfti-cnfc: 4; margin: 0cm 0cm .0001pt 68.15pt;"><!-- [if !supportLists]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">13.<span style="font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: 'Times New Roman';">&nbsp; </span></span></b><!--[endif]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">&nbsp;</span></b></p>
</td>
<td style="width: 380.667px; border-style: none solid solid none; border-bottom-color: #78c0d4; border-bottom-width: 1pt; border-right-color: #78c0d4; border-right-width: 1pt; padding: 0cm 5.4pt;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: 200%;"><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">FLEXTRONICS TECHNOLOGIES INDIA PVT LTD</span></p>
</td>
</tr>
<tr>
<td style="width: 157px; border-style: none solid solid; border-right-color: #78c0d4; border-bottom-color: #78c0d4; border-left-color: #78c0d4; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; padding: 0cm 5.4pt; background: #e6eed5;">
<p class="MsoListParagraph" style="mso-add-space: auto; text-indent: -18.0pt; line-height: 200%; mso-list: l0 level1 lfo1; mso-yfti-cnfc: 68; margin: 0cm 0cm .0001pt 68.15pt;"><!-- [if !supportLists]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">14.<span style="font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: 'Times New Roman';">&nbsp; </span></span></b><!--[endif]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">&nbsp;</span></b></p>
</td>
<td style="width: 380.667px; border-style: none solid solid none; border-bottom-color: #78c0d4; border-bottom-width: 1pt; border-right-color: #78c0d4; border-right-width: 1pt; padding: 0cm 5.4pt; background: #e6eed5;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: 200%; mso-yfti-cnfc: 64;"><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">LEVIA TECHNOLOGIES</span></p>
</td>
</tr>
<tr>
<td style="width: 157px; border-style: none solid solid; border-right-color: #78c0d4; border-bottom-color: #78c0d4; border-left-color: #78c0d4; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; padding: 0cm 5.4pt;">
<p class="MsoListParagraph" style="mso-add-space: auto; text-indent: -18.0pt; line-height: 200%; mso-list: l0 level1 lfo1; mso-yfti-cnfc: 4; margin: 0cm 0cm .0001pt 68.15pt;"><!-- [if !supportLists]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">15.<span style="font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: 'Times New Roman';">&nbsp; </span></span></b><!--[endif]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">&nbsp;</span></b></p>
</td>
<td style="width: 380.667px; border-style: none solid solid none; border-bottom-color: #78c0d4; border-bottom-width: 1pt; border-right-color: #78c0d4; border-right-width: 1pt; padding: 0cm 5.4pt;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: 200%;"><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">CADENCE DESIGN SYSTEMS &nbsp;</span></p>
</td>
</tr>
<tr>
<td style="width: 157px; border-style: none solid solid; border-right-color: #78c0d4; border-bottom-color: #78c0d4; border-left-color: #78c0d4; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; padding: 0cm 5.4pt; background: #e6eed5;">
<p class="MsoListParagraph" style="mso-add-space: auto; text-indent: -18.0pt; line-height: 200%; mso-list: l0 level1 lfo1; mso-yfti-cnfc: 68; margin: 0cm 0cm .0001pt 68.15pt;"><!-- [if !supportLists]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">16.<span style="font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: 'Times New Roman';">&nbsp; </span></span></b><!--[endif]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">&nbsp;</span></b></p>
</td>
<td style="width: 380.667px; border-style: none solid solid none; border-bottom-color: #78c0d4; border-bottom-width: 1pt; border-right-color: #78c0d4; border-right-width: 1pt; padding: 0cm 5.4pt; background: #e6eed5;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: 200%; mso-yfti-cnfc: 64;"><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">CYBAGE</span></p>
</td>
</tr>
<tr>
<td style="width: 157px; border-style: none solid solid; border-right-color: #78c0d4; border-bottom-color: #78c0d4; border-left-color: #78c0d4; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; padding: 0cm 5.4pt;">
<p class="MsoListParagraph" style="mso-add-space: auto; text-indent: -18.0pt; line-height: 200%; mso-list: l0 level1 lfo1; mso-yfti-cnfc: 4; margin: 0cm 0cm .0001pt 68.15pt;"><!-- [if !supportLists]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">17.<span style="font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: 'Times New Roman';">&nbsp; </span></span></b><!--[endif]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">&nbsp;</span></b></p>
</td>
<td style="width: 380.667px; border-style: none solid solid none; border-bottom-color: #78c0d4; border-bottom-width: 1pt; border-right-color: #78c0d4; border-right-width: 1pt; padding: 0cm 5.4pt;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: 200%;"><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">INAUTIX TECHNOLOGIES</span></p>
</td>
</tr>
<tr>
<td style="width: 157px; border-style: none solid solid; border-right-color: #78c0d4; border-bottom-color: #78c0d4; border-left-color: #78c0d4; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; padding: 0cm 5.4pt; background: #e6eed5;">
<p class="MsoListParagraph" style="mso-add-space: auto; text-indent: -18.0pt; line-height: 200%; mso-list: l0 level1 lfo1; mso-yfti-cnfc: 68; margin: 0cm 0cm .0001pt 68.15pt;"><!-- [if !supportLists]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">18.<span style="font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: 'Times New Roman';">&nbsp; </span></span></b><!--[endif]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">&nbsp;</span></b></p>
</td>
<td style="width: 380.667px; border-style: none solid solid none; border-bottom-color: #78c0d4; border-bottom-width: 1pt; border-right-color: #78c0d4; border-right-width: 1pt; padding: 0cm 5.4pt; background: #e6eed5;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: 200%; mso-yfti-cnfc: 64;"><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">TATA TECHNOLOGIES</span></p>
</td>
</tr>
<tr>
<td style="width: 157px; border-style: none solid solid; border-right-color: #78c0d4; border-bottom-color: #78c0d4; border-left-color: #78c0d4; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; padding: 0cm 5.4pt;">
<p class="MsoListParagraph" style="mso-add-space: auto; text-indent: -18.0pt; line-height: 200%; mso-list: l0 level1 lfo1; mso-yfti-cnfc: 4; margin: 0cm 0cm .0001pt 68.15pt;"><!-- [if !supportLists]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">19.<span style="font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: 'Times New Roman';">&nbsp; </span></span></b><!--[endif]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">&nbsp;</span></b></p>
</td>
<td style="width: 380.667px; border-style: none solid solid none; border-bottom-color: #78c0d4; border-bottom-width: 1pt; border-right-color: #78c0d4; border-right-width: 1pt; padding: 0cm 5.4pt;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: 200%;"><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">FINIQ CONSULTING (INDIA) PVT LTD</span></p>
</td>
</tr>
<tr>
<td style="width: 157px; border-style: none solid solid; border-right-color: #78c0d4; border-bottom-color: #78c0d4; border-left-color: #78c0d4; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; padding: 0cm 5.4pt; background: #e6eed5;">
<p class="MsoListParagraph" style="mso-add-space: auto; text-indent: -18.0pt; line-height: 200%; mso-list: l0 level1 lfo1; mso-yfti-cnfc: 68; margin: 0cm 0cm .0001pt 68.15pt;"><!-- [if !supportLists]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">20.<span style="font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: 'Times New Roman';">&nbsp; </span></span></b><!--[endif]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">&nbsp;</span></b></p>
</td>
<td style="width: 380.667px; border-style: none solid solid none; border-bottom-color: #78c0d4; border-bottom-width: 1pt; border-right-color: #78c0d4; border-right-width: 1pt; padding: 0cm 5.4pt; background: #e6eed5;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: 200%; mso-yfti-cnfc: 64;"><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">ORACLE INDIA PVT LTD (OFSS)</span></p>
</td>
</tr>
<tr>
<td style="width: 157px; border-style: none solid solid; border-right-color: #78c0d4; border-bottom-color: #78c0d4; border-left-color: #78c0d4; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; padding: 0cm 5.4pt;">
<p class="MsoListParagraph" style="mso-add-space: auto; text-indent: -18.0pt; line-height: 200%; mso-list: l0 level1 lfo1; mso-yfti-cnfc: 4; margin: 0cm 0cm .0001pt 68.15pt;"><!-- [if !supportLists]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">21.<span style="font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: 'Times New Roman';">&nbsp; </span></span></b><!--[endif]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">&nbsp;</span></b></p>
</td>
<td style="width: 380.667px; border-style: none solid solid none; border-bottom-color: #78c0d4; border-bottom-width: 1pt; border-right-color: #78c0d4; border-right-width: 1pt; padding: 0cm 5.4pt;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: 200%;"><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">DIEBOLD SYSTEMS PVT LTD</span></p>
</td>
</tr>
<tr>
<td style="width: 157px; border-style: none solid solid; border-right-color: #78c0d4; border-bottom-color: #78c0d4; border-left-color: #78c0d4; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; padding: 0cm 5.4pt; background: #e6eed5;">
<p class="MsoListParagraph" style="mso-add-space: auto; text-indent: -18.0pt; line-height: 200%; mso-list: l0 level1 lfo1; mso-yfti-cnfc: 68; margin: 0cm 0cm .0001pt 68.15pt;"><!-- [if !supportLists]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">22.<span style="font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: 'Times New Roman';">&nbsp; </span></span></b><!--[endif]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">&nbsp;</span></b></p>
</td>
<td style="width: 380.667px; border-style: none solid solid none; border-bottom-color: #78c0d4; border-bottom-width: 1pt; border-right-color: #78c0d4; border-right-width: 1pt; padding: 0cm 5.4pt; background: #e6eed5;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: 200%; mso-yfti-cnfc: 64;"><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">AVANTI (N)</span></p>
</td>
</tr>
<tr>
<td style="width: 157px; border-style: none solid solid; border-right-color: #78c0d4; border-bottom-color: #78c0d4; border-left-color: #78c0d4; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; padding: 0cm 5.4pt;">
<p class="MsoListParagraph" style="mso-add-space: auto; text-indent: -18.0pt; line-height: 200%; mso-list: l0 level1 lfo1; mso-yfti-cnfc: 4; margin: 0cm 0cm .0001pt 68.15pt;"><!-- [if !supportLists]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">23.<span style="font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: 'Times New Roman';">&nbsp; </span></span></b><!--[endif]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">&nbsp;</span></b></p>
</td>
<td style="width: 380.667px; border-style: none solid solid none; border-bottom-color: #78c0d4; border-bottom-width: 1pt; border-right-color: #78c0d4; border-right-width: 1pt; padding: 0cm 5.4pt;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: 200%;"><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">JOHN DEERE</span></p>
</td>
</tr>
<tr>
<td style="width: 157px; border-style: none solid solid; border-right-color: #78c0d4; border-bottom-color: #78c0d4; border-left-color: #78c0d4; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; padding: 0cm 5.4pt; background: #e6eed5;">
<p class="MsoListParagraph" style="mso-add-space: auto; text-indent: -18.0pt; line-height: 200%; mso-list: l0 level1 lfo1; mso-yfti-cnfc: 68; margin: 0cm 0cm .0001pt 68.15pt;"><!-- [if !supportLists]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">24.<span style="font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: 'Times New Roman';">&nbsp; </span></span></b><!--[endif]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">&nbsp;</span></b></p>
</td>
<td style="width: 380.667px; border-style: none solid solid none; border-bottom-color: #78c0d4; border-bottom-width: 1pt; border-right-color: #78c0d4; border-right-width: 1pt; padding: 0cm 5.4pt; background: #e6eed5;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: 200%; mso-yfti-cnfc: 64;"><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">SG ANALYTICS PVT LTD</span></p>
</td>
</tr>
<tr>
<td style="width: 157px; border-style: none solid solid; border-right-color: #78c0d4; border-bottom-color: #78c0d4; border-left-color: #78c0d4; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; padding: 0cm 5.4pt;">
<p class="MsoListParagraph" style="mso-add-space: auto; text-indent: -18.0pt; line-height: 200%; mso-list: l0 level1 lfo1; mso-yfti-cnfc: 4; margin: 0cm 0cm .0001pt 68.15pt;"><!-- [if !supportLists]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">25.<span style="font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: 'Times New Roman';">&nbsp; </span></span></b><!--[endif]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">&nbsp;</span></b></p>
</td>
<td style="width: 380.667px; border-style: none solid solid none; border-bottom-color: #78c0d4; border-bottom-width: 1pt; border-right-color: #78c0d4; border-right-width: 1pt; padding: 0cm 5.4pt;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: 200%;"><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">TEJAS NETWORK</span></p>
</td>
</tr>
<tr>
<td style="width: 157px; border-style: none solid solid; border-right-color: #78c0d4; border-bottom-color: #78c0d4; border-left-color: #78c0d4; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; padding: 0cm 5.4pt; background: #e6eed5;">
<p class="MsoListParagraph" style="mso-add-space: auto; text-indent: -18.0pt; line-height: 200%; mso-list: l0 level1 lfo1; mso-yfti-cnfc: 68; margin: 0cm 0cm .0001pt 68.15pt;"><!-- [if !supportLists]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">26.<span style="font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: 'Times New Roman';">&nbsp; </span></span></b><!--[endif]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">&nbsp;</span></b></p>
</td>
<td style="width: 380.667px; border-style: none solid solid none; border-bottom-color: #78c0d4; border-bottom-width: 1pt; border-right-color: #78c0d4; border-right-width: 1pt; padding: 0cm 5.4pt; background: #e6eed5;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: 200%; mso-yfti-cnfc: 64;"><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">PERENNIAL SYSTEMS </span></p>
</td>
</tr>
<tr>
<td style="width: 157px; border-style: none solid solid; border-right-color: #78c0d4; border-bottom-color: #78c0d4; border-left-color: #78c0d4; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; padding: 0cm 5.4pt;">
<p class="MsoListParagraph" style="mso-add-space: auto; text-indent: -18.0pt; line-height: 200%; mso-list: l0 level1 lfo1; mso-yfti-cnfc: 4; margin: 0cm 0cm .0001pt 68.15pt;"><!-- [if !supportLists]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">27.<span style="font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: 'Times New Roman';">&nbsp; </span></span></b><!--[endif]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">&nbsp;</span></b></p>
</td>
<td style="width: 380.667px; border-style: none solid solid none; border-bottom-color: #78c0d4; border-bottom-width: 1pt; border-right-color: #78c0d4; border-right-width: 1pt; padding: 0cm 5.4pt;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: 200%;"><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">SYMANTEC</span></p>
</td>
</tr>
<tr>
<td style="width: 157px; border-style: none solid solid; border-right-color: #78c0d4; border-bottom-color: #78c0d4; border-left-color: #78c0d4; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; padding: 0cm 5.4pt; background: #e6eed5;">
<p class="MsoListParagraph" style="mso-add-space: auto; text-indent: -18.0pt; line-height: 200%; mso-list: l0 level1 lfo1; mso-yfti-cnfc: 68; margin: 0cm 0cm .0001pt 68.15pt;"><!-- [if !supportLists]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">28.<span style="font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: 'Times New Roman';">&nbsp; </span></span></b><!--[endif]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">&nbsp;</span></b></p>
</td>
<td style="width: 380.667px; border-style: none solid solid none; border-bottom-color: #78c0d4; border-bottom-width: 1pt; border-right-color: #78c0d4; border-right-width: 1pt; padding: 0cm 5.4pt; background: #e6eed5;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: 200%; mso-yfti-cnfc: 64;"><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">ERICSSON</span></p>
</td>
</tr>
<tr>
<td style="width: 157px; border-style: none solid solid; border-right-color: #78c0d4; border-bottom-color: #78c0d4; border-left-color: #78c0d4; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; padding: 0cm 5.4pt;">
<p class="MsoListParagraph" style="mso-add-space: auto; text-indent: -18.0pt; line-height: 200%; mso-list: l0 level1 lfo1; mso-yfti-cnfc: 4; margin: 0cm 0cm .0001pt 68.15pt;"><!-- [if !supportLists]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">29.<span style="font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: 'Times New Roman';">&nbsp; </span></span></b><!--[endif]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">&nbsp;</span></b></p>
</td>
<td style="width: 380.667px; border-style: none solid solid none; border-bottom-color: #78c0d4; border-bottom-width: 1pt; border-right-color: #78c0d4; border-right-width: 1pt; padding: 0cm 5.4pt;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: 200%;"><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">ORACLE OFSS</span></p>
</td>
</tr>
<tr>
<td style="width: 157px; border-style: none solid solid; border-right-color: #78c0d4; border-bottom-color: #78c0d4; border-left-color: #78c0d4; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; padding: 0cm 5.4pt; background: #e6eed5;">
<p class="MsoListParagraph" style="mso-add-space: auto; text-indent: -18.0pt; line-height: 200%; mso-list: l0 level1 lfo1; mso-yfti-cnfc: 68; margin: 0cm 0cm .0001pt 68.15pt;"><!-- [if !supportLists]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">30.<span style="font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: 'Times New Roman';">&nbsp; </span></span></b><!--[endif]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">&nbsp;</span></b></p>
</td>
<td style="width: 380.667px; border-style: none solid solid none; border-bottom-color: #78c0d4; border-bottom-width: 1pt; border-right-color: #78c0d4; border-right-width: 1pt; padding: 0cm 5.4pt; background: #e6eed5;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: 200%; mso-yfti-cnfc: 64;"><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">GOLDMAN SACHS</span></p>
</td>
</tr>
<tr>
<td style="width: 157px; border-style: none solid solid; border-right-color: #78c0d4; border-bottom-color: #78c0d4; border-left-color: #78c0d4; border-right-width: 1pt; border-bottom-width: 1pt; border-left-width: 1pt; padding: 0cm 5.4pt;">
<p class="MsoListParagraph" style="mso-add-space: auto; text-indent: -18.0pt; line-height: 200%; mso-list: l0 level1 lfo1; mso-yfti-cnfc: 4; margin: 0cm 0cm .0001pt 68.15pt;"><!-- [if !supportLists]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">31.<span style="font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: 'Times New Roman';">&nbsp; </span></span></b><!--[endif]--><b><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">&nbsp;</span></b></p>
</td>
<td style="width: 380.667px; border-style: none solid solid none; border-bottom-color: #78c0d4; border-bottom-width: 1pt; border-right-color: #78c0d4; border-right-width: 1pt; padding: 0cm 5.4pt;">
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: 200%;"><span style="font-size: 12.0pt; line-height: 200%; mso-bidi-font-family: Calibri; mso-bidi-theme-font: minor-latin; color: black; mso-themecolor: text1;">IGATE</span></p>
</td>
</tr>
</tbody>
</table></div><br> <br><br> </div>

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

 