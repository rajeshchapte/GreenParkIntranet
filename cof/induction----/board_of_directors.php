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
          <div><img src="../images/logo123.png"  width="100" /></div>
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
        
        <li class="tile tile-big tile-17 slideTextLeft" data-page-type="no" data-page-name="no"  onclick="location.href='board_of_directors.php';">
        <div class="color7"><p style="color:#FFF;">BOARD OF DIRECTORS</p></div>
         <div class="color7"><p style="font-size:30px;"><img src="../images/board_of_directors_icon.png"  width="100" /></p></div>
          
        </li>
        </div>
        
        
        
        
        <div class="col4 clearfix">
         <h2 class="contentheading">BOARD OF DIRECTORS</h2>
              <hr />
        	<table class="gridtable" style="height: 276px; font-weight:normal;" cellspacing="0" cellpadding="0" width="100%">
                        <tbody>
                          <tr>
                            <th align="left" valign="middle">Name</th>
                            <th align="left" valign="middle">Designation</th>
                          </tr>
                          <tr>
                            <td align="left" valign="middle"><strong> SRI. G.HARISCHANDRA REDDY</strong></td>
                            <td align="left" valign="middle"><strong>CHAIRMAN</strong></td>
                          </tr>
                          <tr>
                            <td width="50%" height="37" align="left" valign="middle"><strong>SRI. G.V. PRASAD </strong></td>
                            <td width="50%" height="37" align="left" valign="middle"><strong>VICE CHAIRMAN</strong></td>
                          </tr>
                          <tr>
                            <td width="50%" height="22" align="left" valign="middle"><strong>DR. K. ANJI REDDY</strong><br /></td>
                            <td width="50%" height="22" align="left" valign="middle"><strong>DIRECTOR</strong></td>
                          </tr>
                          <tr>
                            <td width="50%" height="24" align="left" valign="middle"><strong>MR. K. SATISH REDDY </strong><br /></td>
                            <td width="50%" height="24" align="left" valign="middle"><strong>DIRECTOR</strong></td>
                          </tr>
                          <tr>
                            <td width="50%" height="24" align="left" valign="middle"><strong>SRI. K.V. RAVINDRA REDDY</strong></td>
                            <td width="50%" height="24" align="left" valign="middle"><strong>DIRECTOR</strong></td>
                          </tr>
                          <tr>
                            <td width="50%" height="24" align="left" valign="middle"><strong>SMT. G.PARVATHY </strong></td>
                            <td width="50%" height="24" align="left" valign="middle"><strong>EXECUTIVE DIRECTOR</strong></td>
                          </tr>
                          <tr>
                            <td width="50%" height="24" align="left" valign="middle"><strong>SMT. G. ANURADHA</strong></td>
                            <td width="50%" height="24" align="left" valign="middle"><strong>DIRECTOR</strong></td>
                          </tr>
                          <tr>
                            <td align="left" valign="middle"><strong> SRI.K.HARISCHANDRA PRASAD</strong></td>
                            <td width="50%" height="37" align="left" valign="middle"><strong>DIRECTOR</strong></td>
                          </tr>
                          <tr>
                            <td align="left" valign="middle"><strong> SMT.G.SYAMALA </strong></td>
                            <td width="50%" height="37" align="left" valign="middle"><strong>DIRECTOR</strong></td>
                          </tr>
                        </tbody>
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