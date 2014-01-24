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
              <div >
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
          
          	 <h3 style="text-align:left;"> Restaurants & Bar </h3>
             <hr />
             <table id="table1" align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
  <tbody>
    <tr>
      <td colspan="2" align="left" valign="top" >
        
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tbody>
            <tr>
              <td scope="row" align="center" height="25" valign="top"><img src="../images/bar.png" width="697" height="329" /></td>
            </tr>
            <tr>
              <th scope="row" align="left" height="12" valign="top">&nbsp;</th>
            </tr>
            <tr>
              <th scope="row" align="center" height="13" valign="top">
              <table border="0" cellpadding="0" cellspacing="0"  width="100%" class="gridtable" style="font-size:12px; text-align:justify; line-height:25px; font-weight:normal;">
                          <tr>
                            <th height="25" width="21%"><strong>NAME</strong></th>
                            <th height="25" width="32%"><strong>TYPE</strong></th>
                            <th height="25" width="12%"><strong>DAYS</strong></th>
                          </tr>
                          <tr>
                            <td height="45">Tulips</td>
                            <td height="45">The Coffee Shop at Lobby Level( 11.30 am to 11.30 pm)</td>
                            <td height="45">Daily</td>
                          </tr>
                          <tr>
                            <td height="45">Once Upon a Time</td>
                            <td height="45">Multi-cuisine Buffet restaurant Lunch - 12.30 pm to 3.00 pm Dinner - 7.30 pm to 11.00 pm Midnight Biryani - 11.30 pm onwards</td>
                            <td height="45">Daily</td>
                          </tr>
                          <tr>
                            <td height="44">Mustang Bar</td>
                            <td height="44">Bar at Lobby Level (3.00 Hrs to 12.00 midnight)</td>
                            <td height="44">Daily</td>
                          </tr>
                          <tr>
                            <td height="25">Escape</td>
                            <td height="25">The Fun Bar(12.00 noon to 12.00 midnight)</td>
                            <td height="25">Daily</td>
                          </tr>
                        </table></th>
            </tr>
          
        </table>
        
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tbody>
            <tr>
              <td><h3>Tulips</h3></td>
            </tr>
            <tr>
              <td align="center" valign="top"><img src="../images/tulips.png" width="697" height="329" /></td>
            </tr>
            <tr>
              <td><p style="line-height:25px;">The multi-cuisine restaurant - at Lobby level ( 12:00 Noon to 23:30 Hrs.)</p></td>
            </tr>
            <tr>
              <td><h3>Once Upon A Time</h3></td>
            </tr>
            <tr>
              <td align="center" valign="top"><img src="../images/Once-Upon-a-time.png" width="697" height="329" /></td>
            </tr>
            <tr>
              <td><p style="line-height:25px;">Specialty restaurant - at Lobby Level(24 Hrs) </p></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><h3>Mustang Bar</h3></td>
            </tr>
            <tr>
              <td align="center" valign="top"><img src="../images/Mustang-Bar.png" width="188" height="298" /></td>
            </tr>
            <tr>
              <td><p style="line-height:25px;">Bar - at Lobby Level( 3.00 PM to 12.00 Midnight )</p> </td>
            </tr>
            <tr>
              <td><h3>Escape</h3></td>
            </tr>
            <tr>
              <td align="center" valign="top"><img src="../images/Escape.png" width="442" height="282" /></td>
            </tr>
            <tr>
              <td>Pub - at I st Floor ( 12:00 Noon to 23:30 hrs ) </td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
          </tbody>
        </table>
        </td>
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