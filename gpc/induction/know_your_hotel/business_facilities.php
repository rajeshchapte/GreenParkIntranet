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
             <div style="text-align:center; margin:0px auto;"><img src="../images/Business-Facilities.png" width="697" height="329" /></div>
             <p>The hotel also offers special privileges to the discerning business traveler. Business Club floor with an exclusive lounge attached, serves as a delightful rendezvous for the like-minded. Complimentary breakfast , happy hours and Wi-fi Internet Connectivity for Lap Top Computers make the business Club lounge an exclusive place for Business Club Room Guests.</p>
             <p>Business Catering to the needs of corporate travelers, Hotel Green Park offers a whole range of comprehensive business facilities. Organize business meetings or conferences at the well equipped business center of the hotel. Boardroom and Ashwini is ideal for accommodating about 12 to 60 people, however for larger corporate gatherings &quot;Sesh Mahal&quot; is a better option.</p>
             <p>&nbsp;</p>
             <p>Well equipped Business Centre at Lobby Level. Having Latest Computer Systems with Internet Connectivity, Wi-Fi facility for Lap Tops, Laser Printer, Colour Printer, Scanner, Photo Copier, Fax, Secretarial services etc,.</p>
             
             <h3>&nbsp;</h3>
             <div style="text-align:center; margin:0px auto;"></div><br />
             <h3 style="text-align:left;">&nbsp;</h3> 
                 <div style="text-align:center; margin:0px auto;"></div>
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