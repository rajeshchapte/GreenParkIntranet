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
          		<h3 style="text-align:left;"> Rooms & Suites</h3>
             <hr />
             <table id="table1" align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
  <tbody>
    <tr>
      <td colspan="2" align="left" valign="top" ><p>The experience of being in the heart of the city while enjoying a quiet evening. Such is the charm of the rooms at Marigold. It's a beautiful mix of subtle design statements and luxurious touches full of little extras. Enjoy your stay.</p><br /></td>
    </tr>
    <tr>
      <td colspan="2" align="center" valign="top" >
        
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tbody>
           
            <tr>
              <th scope="row" align="left" height="12" valign="top"><table width="100%"  border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#999999" class="gridtable">
                <tbody>
                  <tr>
                    <td width="50%">MARIGOLD LUXURY</td>
                    <td align="right" width="50%">N/A</td>
                  </tr>
                  <tr>
                    <td width="50%">MARIGOLD PREMIUM</td>
                    <td align="right" width="50%">N/A</td>
                  </tr>
                  <tr>
                    <td width="50%">MARIGOLD STUDIO</td>
                    <td align="right" width="50%">N/A</td>
                  </tr>
                  <tr>
                    <td width="50%">MARIGOLD ROYAL SUITE</td>
                    <td align="right" width="50%">N/A</td>
                  </tr>
                  <tr>
                    <td width="50%">PRESIDENTIAL SUITE</td>
                    <td align="right" width="50%">N/A</td>
                  </tr>
                </tbody>
              </table></th>
            </tr>
            <tr>
              <th scope="row" align="right" height="13" valign="top">&nbsp;</th>
            </tr>
          </tbody>
        </table>
        <div style="text-align:center;">
                <h2 style="margin:0px; padding:0px;">MARIGOLD LUXURY</h2>
                <h3 style="margin:0px; padding:0px;">CATEGORY : LUXURY</h3>
                <!-- <h4 style="margin:0px; padding:0px;"> S.ft Area-  244 sft</h4>-->
                </div>
       <img src="../../images/luxury_room1.jpg" width="697" height="329" />
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tbody>
            <tr>
              <td>Satellite Television <br /> Electronic safe <br /> Dual line Telephones with voice mail <br /> Personal bar <br /> LCD TV <br /> Wired & wireless broadband internet access <br /> iPod docking station <br /> Complimentary Buffet Breakfast

</td>
            </tr>
          </tbody>
        </table>
        <br />
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tbody>
            <tr>
              <td align="center">
              	 <div style="text-align:center;">
                <h2 style="margin:0px; padding:0px;">MARIGOLD PREMIUM</h2>
                <h3 style="margin:0px; padding:0px;">CATEGORY : PREMIUM</h3>
                 <!--<h4 style="margin:0px; padding:0px;"> S.ft Area-  244 sft</h4>-->
                  </div>
              </td>
            </tr>
            <tr>
              <td align="center"><img src="../../images/premium_room.jpg" width="697" height="329" /></td>
            </tr>
            <tr>
              <td align="left">&nbsp;</td>
            </tr>
            <tr>
              <td align="left">
              	Satellite television <br /> Electronic safe <br /> Dual line telephones with voice mail <br /> Personal bar <br /> LCD TV <br /> Wired & wireless broadband internet access <br /> Complimentary cocktails at Oasis Lounge <br /> iPod docking station <br /> Complimentary Buffet Breakfast <br /> One way Airport conveyance
              </td>
            </tr>
            <tr>
              <td align="center">
              	<div style="text-align:center;">
                <h2 style="margin:0px; padding:0px;">MARIGOLD STUDIO</h2>
                <h3 style="margin:0px; padding:0px;">CATEGORY : STUDIO</h3>
                 <!--<h4 style="margin:0px; padding:0px;"> S.ft Area-  244 sft</h4>-->
                  </div>
              </td>
            </tr>
            <tr>
              <td align="center"><img src="../../images/luxury_room.jpg" width="697" height="329" /></td>
            </tr>
            <tr>
              <td align="left">&nbsp;</td>
            </tr>
            <tr>
              <td align="left">
              	Satellite television <br />  Electronic safe <br />  Dual line telephones with voice mail <br />  Personal bar <br />  LCD TV <br />  Wired & wireless broadband internet access <br />  Complimentary cocktails at Oasis Lounge <br />  iPod docking station <br />  Complimentary Buffet Breakfast <br />  Complimentary usage of the Meeting Room for an hour <br />  Two way Airport conveyance
              </td>
            </tr>
            <tr>
              <td align="center">
              	<div style="text-align:center;">
                <h2 style="margin:0px; padding:0px;">MARIGOLD ROYAL SUITE</h2>
                <h3 style="margin:0px; padding:0px;">CATEGORY : ROYAL SUITE</h3>
                 <!--<h4 style="margin:0px; padding:0px;"> S.ft Area-  244 sft</h4>-->
                  </div>
              </td>
            </tr>
            <tr>
              <td align="center"><img src="../../images/royal_suite_room.jpg" width="697" height="329" /></td>
            </tr>
            <tr>
              <td align="left">&nbsp;</td>
            </tr>
            <tr>
              <td align="left">
              	Satellite television <br /> Electronic safe <br /> Dual line telephones with voice mail <br /> Personal bar <br /> LCD TV <br /> Wired & wireless broadband internet access <br /> Complimentary cocktails at Oasis Lounge <br /> iPod docking station <br /> Complimentary Buffet Breakfast <br /> Complimentary usage of the Meeting Room for two hours <br /> Two way Airport conveyance <br /> Complimentary Cocktails at the Oasis Lounge
              </td>
            </tr>
            <tr>
              <td align="center">
              	<div style="text-align:center;">
                <h2 style="margin:0px; padding:0px;">PRESIDENTIAL SUITE</h2>
                <h3 style="margin:0px; padding:0px;">CATEGORY : PRESIDENTIAL SUITE</h3>
                 <!--<h4 style="margin:0px; padding:0px;"> S.ft Area-  244 sft</h4>-->
                  </div>
              </td>
            </tr>
            <tr>
              <td align="center"><img src="../../images/presidential_suite_room.jpg" width="697" height="329" /></td>
            </tr>
            <tr>
              <td align="left">&nbsp;</td>
            </tr>
            <tr>
              <td align="left">
              	Satellite television <br />  Electronic safe <br />  Dual line telephones with voice mail <br />  Personal bar <br />  LCD TV <br />  Wired & wireless broadband internet access <br />  iPod docking station <br />  Complimentary Buffet Breakfast <br />  Complimentary usage of the Meeting Room for two hours <br />  Two way Airport conveyance <br />  Complimentary Cocktails at the Oasis Lounge <br />  Complimentary Jacuzzi and Steam Bath service
              </td>
            </tr>
            <tr>
              <td align="left">&nbsp;</td>
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