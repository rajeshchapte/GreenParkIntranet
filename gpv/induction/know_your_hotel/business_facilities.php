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
            <?php include("../../property_tile.php"); ?>
            <li class="tile tile-big tile-17 slideTextLeft" data-page-type="no" data-page-name="no"  onclick="location.href='../../induction.php';">
              <div>
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
          			
                     <h3 style="text-align:left;"> Business Facilities</h3>
             <hr />
             <div style="text-align:center; margin:0px auto;"><img src="../images/GYM.jpg" /></div>
             <p>Business Catering to the needs of corporate travelers, Hotel Green Park offers a whole range of comprehensive business facilities. Organize business meetings or conferences at the well equipped business center of the hotel.</p>
             
             
             <br />
             <p>Well equipped Business Centre, having Latest Computer Systems with Internet Connectivity, Wi-Fi facility for Lap Tops, Laser Printer, Colour Printer, Scanner, Photo Copier, Fax, E-safe, Secretarial services etc,.
            </p>
             <div style="text-align:center;"><h2>Conference & Banquet Facilities</h2></div>
             
<div style="text-align:center;"><img src="../images/business_fe.png" /></div>
<p>A good Banquet hall must reflect a fine blend of aesthetics and shape; practicality and flexibility. Each of our five banquet halls is the archetype of an ideal banquet hall. Our banquet halls have different variations; each one versatile in it's on way, to cater to your varied needs.</p>
<br />
<p>Our friendly banqueting personnel are at your disposal to customise your function details, from audiovisual requirements through corporate banquets. We can arrange anything from a themed Gala Dinner to a smaller, more informal, meal. You will find here a high degree of flexibility, coupled with professionalism. All enquiries will be dealt with by our banqueting staff within 48 hours.</p>

<table width="100%" border="0" cellspacing="0" cellpadding="0" class="gridtable">
  <tr>
    <td width="16%" height="30" align="center" valign="middle" bgcolor="#D6D6D6">Function Space</td>
    <td width="19%" height="30" align="center" valign="middle" bgcolor="#D6D6D6">Area(in sq.ft)</td>
    <td width="25%" height="30" align="center" valign="middle" bgcolor="#D6D6D6">Conference Theatre Style</td>
    <td width="15%" height="30" align="center" valign="middle" bgcolor="#D6D6D6">Reception</td>
    <td width="25%" height="30" align="center" valign="middle" bgcolor="#D6D6D6">ReceptionBanquet(sit-down)</td>
    </tr>
  <tr>
    <td width="16%" align="center" valign="middle">Chancery  </td>
    <td width="19%" align="center" valign="middle">2550</td>
    <td width="25%" align="center" valign="middle">300</td>
    <td width="15%" align="center" valign="middle">500</td>
    <td width="25%" align="center" valign="middle">250</td>
    </tr>
  <tr>
    <td width="16%" align="center" valign="middle">Consulate</td>
    <td width="19%" align="center" valign="middle">750</td>
    <td width="25%" align="center" valign="middle">35</td>
    <td width="15%" align="center" valign="middle">45</td>
    <td width="25%" align="center" valign="middle">35</td>
    </tr>
  <tr>
    <td width="16%" align="center" valign="middle">Forum</td>
    <td width="19%" align="center" valign="middle">650</td>
    <td width="25%" align="center" valign="middle">30</td>
    <td width="15%" align="center" valign="middle">40</td>
    <td width="25%" align="center" valign="middle">25</td>
    </tr>
  <tr>
    <td width="16%" align="center" valign="middle">Gardenia</td>
    <td width="19%" align="center" valign="middle">1500</td>
    <td width="25%" align="center" valign="middle">--</td>
    <td width="15%" align="center" valign="middle">75</td>
    <td width="25%" align="center" valign="middle">50</td>
    </tr>
  <tr>
    <td width="16%" align="center" valign="middle">Meadows</td>
    <td width="19%" align="center" valign="middle">12500</td>
    <td width="25%" align="center" valign="middle">--</td>
    <td width="15%" align="center" valign="middle">1500</td>
    <td width="25%" align="center" valign="middle">650</td>
    </tr>
  <tr>
    <td width="16%" align="center" valign="middle">Star Lights</td>
    <td width="19%" align="center" valign="middle">5500</td>
    <td width="25%" align="center" valign="middle">--</td>
    <td width="15%" align="center" valign="middle">400</td>
    <td width="25%" align="center" valign="middle">150</td>
    </tr>
</table>

             
  <br />           
     <div style="text-align:center;"><h2>Board Rooms</h2></div> 
     <div style="text-align:center;"><img src="../images/board_room.png" width="697" height="329" /> </div>
     <p>The Boardroom is a perfect space for intimate gatherings and private business meetings. The Boardroom leads on the The Conservatory, a light, comfortable room perfect for tea and coffee breaks, which may be booked along with The Boardroom. The room is suitable for up to 12 guests. </p>
     <div style="text-align:center;"><h2>Business Center</h2></div>     
     <div style="text-align:center;"><img src="../images/businessCenter.jpg" /></div>
     <p>Well equipped Business Centre at Lobby Level. Having Latest Computer Systems with Internet Connectivity, Wi-Fi facility for Lap Tops, Colour Printer, Scanner, Photo Copier, Fax, Secretarial services etc,.</p>
             
             
             
          
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