<?php
include("../../../../connect.php");
include("../../../prp_info.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GreePark Hotels and Resorts Intranet</title>
<link href="js1/MetroJs.lt.css" rel="stylesheet" type="text/css">
<link href="../../../includes/styles1.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../../../includes/styles_w.css">
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
<div class="demo-wrapper">
  
  <div class="dashboard clearfix">
        <ul class="tiles">
          <div class="col1 clearfix">
            <li class="tile tile-big tile-11 slideTextUp" data-page-type="no" data-page-name="no" onclick="location.href='<?=$home;?>';">
              <div><img src="../../../images/logo123.png"  width="100" /></div>
              <div>
                <p class="prp_font">HOME</p>
              </div>
            </li>
            <?php include("../../../property_tile.php"); ?>
            <li class="tile tile-big tile-17 slideTextLeft" data-page-type="no" data-page-name="no"  onclick="location.href='../../../induction.php';">
              <div>
                <p style="font-size:30px;"><span class=""><img src="../../../images/induction_icon.png"  width="35" />&nbsp;&nbsp;&nbsp;&nbsp;</span>Induction</p>
              </div>
              <div>
                <p>A Few Donts, Board of Directors,<br>
                  Focus Document, etc...</p>
              </div>
            </li>
            
            
            <li class="tile tile-big tile-17 slideTextLeft" data-page-type="no" data-page-name="no"  onclick="location.href='../../know_your_hotel.php';">
            <div class="color5"><p>Know your Hotels</p></div>
              <div class="color5"><p style="font-size:30px;"><span class=""><img src="../../../images/know_your_hotel.png"  width="100" /></span></p></div>
              
            </li>
            
            <li class="tile tile-big tile-17 slideTextLeft" data-page-type="no" data-page-name="no"  onclick="location.href='../facilities.php';">
              <div class="color8"><p>Facilities</p></div>
              <div class="color8"><p style="font-size:30px;"><span class=""><img src="../../../images/facilities_icon.png"  width="120" /></span></p></div>
              
            </li>
            
          </div>
          
          <div class="col4 clearfix">
          		<h2 class="contentheading"><span class="heading2">Service</span></h2>
              <hr />
              <table style="border-collapse:collapse" align="center" border="1" cellpadding="0" cellspacing="0" width="90%" class="gridtable">
                <tbody>
                  <tr>
                    <td  scope="row" height="25" align="left" width="69%"><strong>Computerized check-in and check-out.</strong></td>
                  </tr>
                  <tr>
                    <td scope="row" height="25" align="left"><strong>24-hour room service and coffee shop.</strong></td>
                  </tr>
                  <tr>
                    <td scope="row" height="25" align="left"><strong>In house laundry / dry cleaning.</strong></td>
                  </tr>
                  <tr>
                    <td  scope="row" height="25" align="left"><strong>Secretarial services and business facilities.</strong></td>
                  </tr>
                  <tr>
                    <td  scope="row" height="25" align="left"><strong>Travel assistance &amp; Car rental.</strong></td>
                  </tr>
                  <tr>
                    <td  scope="row" height="25" align="left"><strong>Sight seeing tours on request.</strong></td>
                  </tr>
                  <tr>
                    <td  scope="row" height="25" align="left"><strong>Doctor on call.</strong></td>
                  </tr>
                  <tr>
                    <td  scope="row" height="25" align="left"><strong>Ample car parking.</strong></td>
                  </tr>
                  <tr>
                    <td  scope="row" height="25" align="left"><strong>Internet facility in the Room</strong></td>
                  </tr>
                  <tr>
                    <td  scope="row" height="25" align="left"><strong>24 hour Fax and E-mail.</strong></td>
                  </tr>
                  <tr>
                    <td  scope="row" height="25" align="left"><strong>Fully equipped business center with internet access.</strong></td>
                  </tr>
                  <tr>
                    <td  scope="row" height="25" align="left"><strong>Florist.</strong></td>
                  </tr>
                  <tr>
                    <td  scope="row" height="25" align="left"><strong>Once Upon a Time the Restaurant</strong></td>
                  </tr>
                  <tr>
                    <td  scope="row" height="25" align="left"><strong>Mustang - Bar</strong></td>
                  </tr>
                  <tr>
                    <td  scope="row" height="25" align="left"><strong>Escape - The Pub</strong></td>
                  </tr>
                  <tr>
                    <td  scope="row" height="25" align="left"><strong>Electronic Safe Lockers</strong></td>
                  </tr>
                </tbody>
              </table>
          
          </div>
          
          
          
          </ul>
  
  
  
  
  
  
  
  
  
  
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