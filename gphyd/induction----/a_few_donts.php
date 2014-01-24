<?php
include("../../connect.php");
include("../prp_info.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GreePark Hotels and Resorts Intranet</title>
<link href="../includes/styles1.css" rel="stylesheet" type="text/css" />

  <link rel="stylesheet" href="../includes/styles_w.css">
  
  <script src="js/modernizr-1.5.min.js"></script>
<style>
  .col4 {
    float: left;
    margin-right: .5%;
    width: 65%; 
	background-color:#f3f3f3;
	padding:15px;
  }
</style>
</head>

<body>
<div class="wrapper">
  
  
  <div class="content1" style=" height:auto; width:1240px; ">
  <div style=" height:550px; width:auto; z-index:999">
    <div style="float:left">
    <div class="clear"></div>
 	 
    <ul class="tiles">
        <div class="col1 clearfix">
       	 	 <li class="tile tile-big tile-11 slideTextUp" data-page-type="no" data-page-name="no" onclick="location.href='<?=$home;?>';">
          <div><img src="../images/logo123.png"  width="78" /></div>
          <div><p class="prp_font">HOME</p></div>
        </li>
        
        <li class="tile tile-big tile-24 rotate3d rotate3dX" data-page-type="no" data-page-name="no" onclick="location.href='<?=$prp_root;?>/';">
          <div class="faces">
            <div class="frontgph" style="background-color:#d9522c"><p>GreenPark Hyderabad</p></div>
            <div class="backgph">
              <img src="../images/Gp_hyd.jpg" width="100%" height="166" />
            </div>
          </div>
        </li>
        
         <li class="tile tile-big tile-17 slideTextLeft" data-page-type="no" data-page-name="no"  onclick="location.href='../induction.php';">
          <div class="color9"><p style="font-size:30px;"><span class=""><img src="../images/induction_icon.png"  width="35" />&nbsp;&nbsp;&nbsp;&nbsp;</span>Induction</p></div>
          <div class="color9"><p>A Few Donts, Board of Directors,<br> Focus Document, etc...</p></div>
        </li>
        
        <li class="tile tile-big tile-17 slideTextLeft" data-page-type="no" data-page-name="no"  onclick="location.href='a_few_donts.php';">
         <div class="color10"><p style="color:#FFF;">A FEW   DONT'S</p></div>
         <div class="color10"><p style="font-size:30px;"><img src="../images/A_FEW_DONT'S_icon.png"  width="100" /></p></div>
         
        </li>
        </div>
        
        
        
        
        <div class="col4 clearfix">
         <h2 class="contentheading">A FEW   DONT'S</h2>
              <hr />
        	<table border="0" cellspacing="0" cellpadding="0" width="100%">
                        
                          <tr>
                            
                            <td style="padding:23px;">
                            <ol style="width:98%;line-height:32px;">
                                <li>Personal calls either outgoing or incoming are not permitted.</li>
                                <li>Do not enter or visit other departments, public areas, or guest room floors, unless and until your duties require your presence there.</li>
                                <li>No employee is permitted to use Restaurants, Bar Etc.</li>
                                <li>Employees should not use the Hotel parking area.</li>
                                <li>No employee is to drink alcoholic beverage during his working hours.</li>
                                <li>The use of vile or obscene languages is not called for.</li>
                                <li>Gum chewing, chewing of betel or munching of candy or cookies in public area is prohibited.</li>
                                <li>No smoking except in locker rooms and employees dining room.</li>
                                <li>"Horseplay" and practical jokes are not permitted in the Hotel at any time.</li>
                                <li>Avoid being in Hotel premises when your duty is over.</li>
                                <li>Insubordination will render you liable for severe disciplinary action.</li>
                                <li>Dishonesty will result in termination of services.</li>
                                <li>Smoking in "Non-smoking areas" is forbidden.</li>
                                <li>Habitual tardiness will not be tolerated.</li>
                                <li>Overstaying on leave without getting it extended prior to the expiry of leave, will be liable for disciplinary action.</li>
                                <li>Use of intoxicating drugs is banned.</li>
                                <li>Inability or carelessness in maintaining safe working conditions for self or others is viewed serious</li>
                                <li>Willful destruction of hotel property will subject you to termination of services.</li>
                                <li>Giving false information at the time of employment will be cause for termination.</li>
                                <li>Failure to deposit any articles found by you, in the House-Keeping Department, is liable for disciplinary action.</li>
                                <li>Chronic absenteeism is an act of in discipline.</li>
                             </ol></td>
                          </tr>
                       
                      </table>
        </div>
    </ul>
    
    <table width="1240" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="100%">
          
        </td>
       </tr>
    </table> 
    </div>
    
  </div>
  </div>
</div>
<script src="js/jquery-1.8.2.min.js"></script>
  <script src="js/scripts.js"></script>
    
    <script src="js1/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="js1/MetroJs.lt.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".live-tile,.flip-list").liveTile();
        });
    </script>
</body>
</html>