<?php
include("../../../connect.php");
include("../../prp_info.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GreePark Hotels and Resorts Intranet</title>
<link href="js1/MetroJs.lt.css" rel="stylesheet" type="text/css">
<link href="../../includes/styles1.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../../includes/styles_w.css">
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
              <div><img src="../../images/logo123.png"  width="100" /></div>
              <div>
                <p class="prp_font">HOME</p>
              </div>
            </li>
            <li class="tile tile-big tile-24 rotate3d rotate3dX" data-page-type="no" data-page-name="no" onclick="location.href='<?=$prp_root;?>/';">
              <div class="faces">
                <div class="frontgph" style="background-color:#d9522c">
                  <p>GreenPark Hyderabad</p>
                </div>
                <div class="backgph"> <img src="../../images/Gp_hyd.jpg" width="100%" height="166" /> </div>
              </div>
            </li>
            <li class="tile tile-big tile-17 slideTextLeft" data-page-type="no" data-page-name="no"  onclick="location.href='../../induction.php';">
              <div >
                <p style="font-size:30px;"><span class=""><img src="../../images/induction_icon.png"  width="35" />&nbsp;&nbsp;&nbsp;&nbsp;</span>Induction</p>
              </div>
              <div>
                <p>A Few Donts, Board of Directors,<br>
                  Focus Document, etc...</p>
              </div>
            </li>
            
            
            <li class="tile tile-big tile-17 slideTextLeft" data-page-type="no" data-page-name="no"  onclick="location.href='../know_your_hotel.php';">
            <div class="color5"><p>Know your Hotels</p></div>
              <div class="color5"><p style="font-size:30px;"><span class=""><img src="../../images/know_your_hotel.png"  width="100" /></span></p></div>
              
            </li>
            
            
            
          </div>
          
           <div class="col4 clearfix">
           
           				 <h3 style="text-align:left;">Locations</h3>
             <hr />
             <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tbody>
                      <tr>
                        <td class="BodyText" scope="row" height="45" align="left" valign="top"><p align="center"><img src="../../images/hyd_location.gif" alt="Hotel GreenPark Hyderabad" height="400" border="0" width="226"></p>
                          <p>Located in the heart of Hyderabad with 
                            access to  important business centers, shopping malls and popular 
                            entertainment zones.  Green Park Hotel is a favorite destination for the
                          business travelers.&nbsp; The hotel is only </p></td>
                      </tr>
                      <tr>
                        <th class="headingBlack" scope="row" height="25" align="left" valign="top"><p><span class="style1">Distance </span>:</p>
                          <table style="border-collapse:collapse; font-weight:normal;" align="left" border="1" bordercolor="#666666" cellpadding="0" cellspacing="0" width="100%">

                            <tbody><tr>
                              <td class="headingBlack" scope="row" height="25" align="left">1 km from Punjagutta X roads                                 </td>
                              </tr>
                            <tr>
                              <td class="BodyText" scope="row" height="25" align="left">3 Kms from Banjara Hills, which is home to a wide       spectrum of corporate offices.                                </td>
                              </tr>
                              <tr>
                              <td class="BodyText" scope="row" height="25" align="left">7 Kms from Secunderabad Railway Station                                </td>
                              </tr>
                              <tr>
                                <td class="BodyText" scope="row" height="25" align="left"> 10 kms from IT hub of Madhapur., </td>
                              </tr>
                              <tr>
                              <td class="BodyText" scope="row" height="25" align="left">30 Kms from Airport.                                </td>
                              </tr>
                          </tbody></table>
                            
                            <p style="font-weight:normal;">
                              <br>
                            Hotel provides  Air port Pickup and drop facility on request Tours to<br>
                             
                            other places of  interest will be arranged by our Travel desk.</p>
                          </th>
                      </tr>
                      <tr>
                        <th scope="row" height="12" align="left" valign="top"><p><span class="headingBlack">Accommodation :- </span></p>
<p class="BodyText" style="font-weight:normal;">Most centrally located hotel in the city with state of art facilities.</p>                          </th>
                      </tr>
                      <tr>
                        <th scope="row" height="13" align="right" valign="top"></th>
                      </tr>
                    </tbody></table>
           
           </div>
          
          </ul>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
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