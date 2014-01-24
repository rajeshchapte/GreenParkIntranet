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
</style></head>

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
          			<h2 class="contentheading"><span class="heading2" style=" color:#000000;">Facilities</span></h2>
              <hr />
              <P>Situated on Waltair main road, this 110 room hotel is 14 kms from the airport and just 2 kms from the railway station. It is located in close proximity and is a five minute drive from the business and commercial centre.</P>
              <table align="center" border="0" cellpadding="4" cellspacing="4" width="100%" class="gridtable">
                <tbody>
                  <tr>
                    <th colspan="2" align="left">Guest Rooms</th>
                  </tr>
                  <tr>
                    <td valign="top" width="68%"><p align="justify">Accommodation at Green Park is synonymous for comfort. 110 well furnished and comfortable rooms equipped with direct dial telephone, individual thermostat control for air-conditioning, colour T.V. with all popular channels and E-safe, complimentary Coffee /Tea making facility in Deluxe, Business Club and Suite rooms.</p></td>
                    <td width="32%" align="center" valign="middle"><p><img src="../images/room3.jpg" height="104" align="center" border="0" width="165" /></p></td>
                  </tr>
                  <tr>
                    <th colspan="2" align="left">Business Club Lounge</th>
                  </tr>
                  <tr>
                    <td width="68%"><p align="justify">The hotel also offers special privileges to the discerning business traveler. Business Club floor with an exclusive lounge attached, serves as a delightful rendezvous for the like-minded. Complimentary breakfast , happy hours and Wi-fi Internet Connectivity for Lap Top Computers make the business Club lounge an exclusive place for Business Club Room Guests.</p></td>
                    <td valign="top" width="32%"><div align="center"><img src="../images/Businesslaunge1.jpg" height="108" align="center" border="0" width="171" /></div></td>
                  </tr>
                  <tr>
                    <th colspan="2" align="left">Tulips</th>
                  </tr>
                  <tr>
                    <td height="84" valign="top" width="68%"><p align="justify">The multi-cuisine restaurant serving choicest Indian and International cuisine</p></td>
                    <td width="32%" align="center"><img src="../images/princes.jpg" height="104" align="center" border="0" width="165" /></td>
                  </tr>
                  <tr>
                    <th colspan="2" align="left">Once Upon a time</th>
                  </tr>
                  <tr>
                    <td valign="top" width="68%"><p align="justify">A speciality Multi-cuisine buffet restaurant serving south Indian & North Indian delicacies open for lunch and dinner</p></td>
                    <td width="32%" align="center"><img src="../images/mustang.jpg" height="104" align="center" border="0" width="165" /></td>
                  </tr>
                  <tr>
                    <th colspan="2" align="left">Mustang Bar</th>
                  </tr>
                  <tr>
                    <td valign="top" width="68%"><p align="justify">An elegant bar serving alcoholic and other beverages. It is an ideal place to entertain business associates or unwind in the evenings. Open from 3.00 pm to 12.00 midnight</p></td>
                    <td width="32%" align="center"><img src="../images/southerspice.jpg" height="104" align="center" border="0" width="165" /></td>
                  </tr>
                  <tr>
                    <th colspan="2" align="left">Escape</th>
                  </tr>
                  <tr>
                    <td valign="top" width="68%"><p align="justify">A fun bar serving choicest drinks. Open from 12.00 noon till 12.00 midnight</p></td>
                    <td width="32%" align="center"><img src="../../../images/mustang.gif" height="116" align="center" border="0" width="171" /></td>
                  </tr>
                </tbody>
                <tr>
                  <td colspan="2">Meadows
                  <p>Sprawling lawns with facilities to hold functions for nearly 1500 people.</p>
                  <p>&nbsp;</p>
                  <p><a href="../business_facilities.php">CONFERENCE & BANQUET FACILITIES</a></p></td>
                </tr>
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