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
             <div style="text-align:center; margin:0px auto;"><img src="../../images/BusinessClubLounge.jpg" /></div>
             <p>Hotel Green Park offers a comprehensive range of business facilities to organize business meetings and conferences. We have three banqueting venues to meet varied requirements for business and social occasions. </p>
             <p>The hotel also offers special privileges to Business Club room and Suit Room guests. The business Club guests have an exclusive lounge which serves complementary breakfast and cocktails. </p>
             <p>A well equipped Business Centre at Lobby level has all the latest computer systems with internet connectivity, Wi-Fi facility for Laptops, Laser Printers, Color Printers, Scanners, Photo Copier, Fax, Secretarial services etc.</p>
             
             <h3>Conference & Banquet Facilities</h3>
             <div style="text-align:center; margin:0px auto;"><img src="../../images/Conference_Banque_Facilities.jpg" /></div><br />
             <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="gridtable">
                          <tr>
                            <td height="42" align="center"><strong>Function Space</strong></td>
                            <td align="center">Images</td>
                            <td height="42" align="center"  class="style1"><strong>Area<br />
                              (in sq.ft) </strong></td>
                            <td height="42" align="center"  class="style1"><strong>Conference<br />
                              Theatre Style </strong></td>
                            <td height="42" align="center"  class="style1"><strong>Reception</strong></td>
                            <td height="42" align="center"  class="style1"><strong>Banquet <br />
                              (sit-down)</strong></td>
                          </tr>
                          <tr>
                            <td height="25" align="center"  scope="row"><strong>Residency</strong> &nbsp;</td>
                            <td align="center"  scope="row">
                            <a href="#">
                            <img src="../../images/PICON.gif" alt="View Image" width="18" height="14" border="0" onclick="MM_openBrWindow('residency.htm','','width=690,height=490')" />
                            </a></td>
                            <td height="25" align="center" >3350</td>
                            <td height="25" align="center" >250</td>
                            <td height="25" align="center" >400</td>
                            <td height="25" align="center" >150</td>
                          </tr>
                          <tr>
                            <td height="25" align="center"  scope="row"><strong>Chancery</strong></td>
                            <td align="center"  scope="row">
                            <a href="#">
                            <img src="../../images/PICON.gif" alt="View Image" width="18" height="14" border="0" onclick="MM_openBrWindow('Chancery.htm','','width=690,height=490')" />
                            </a>
                            </td>
                            <td height="25" align="center" >1000</td>
                            <td height="25" align="center" >65</td>
                            <td height="25" align="center" >100</td>
                            <td height="25" align="center" >30</td>
                          </tr>
                          <tr>
                            <td height="25" align="center"  scope="row"><strong>Senate</strong></td>
                            <td align="center"  scope="row">
                            <a href="#">
                            <img src="../../images/PICON.gif" alt="View Image" width="18" height="14" border="0" onclick="MM_openBrWindow('Senate.htm','','width=690,height=490')" />
                            </a>
                            </td>
                            <td height="25" align="center" >575</td>
                            <td height="25" align="center" >40</td>
                            <td height="25" align="center" >50</td>
                            <td height="25" align="center" >20</td>
                          </tr>
                          <tr>
                            <td height="25" align="center"  scope="row"><strong>Consulate</strong></td>
                            <td align="center"  scope="row">
                            <a href="#">
                            <img src="../../images/PICON.gif" alt="View Image" width="18" height="14" border="0" onclick="MM_openBrWindow('Consulate.htm','','width=740,height=545')" />
                            </a>
                            </td>
                            <td height="25" align="center" >425</td>
                            <td height="25" align="center" >20</td>
                            <td height="25" align="center" >25</td>
                            <td height="25" align="center" >10</td>
                          </tr>
                          <tr>
                            <td height="25" align="center"  scope="row"><strong>Gardenia</strong></td>
                            <td align="center"  scope="row">
                            <a href="#"><img src="../../images/PICON.gif" alt="View Image" width="18" height="14" border="0" onclick="MM_openBrWindow('Gardenia.htm','','width=740,height=545')" />
                            </a>
                            </td>
                            <td height="25" align="center" >7000</td>
                            <td height="25" align="center" >--</td>
                            <td height="25" align="center" >700</td>
                            <td height="25" align="center" >300</td>
                          </tr>
                        </table>
                  <h3 style="text-align:left;"> Business Club Lounge  </h3> 
                 <div style="text-align:center; margin:0px auto;"><img src="../../images/business_club_lunge.jpg" /></div><br /> 
                  <p>Our business club guests relax and unwind enjoying a beverage of choice at our full service Business Club Lounge located in the second floor, the lounge offers an ideal place for holding business meetings. The lounge is exclusive for Business Club, Junior, Quality and Executive Suite guests with unlimited options. Our well stocked bar has a wide selection of wines, spirits and mock tails. </p>
                  
                  <h3>Features</h3>
                  
                  Fully licensed bar<br />
Relaxed ambience<br />
Draught & bottled beers<br />
A good selection of wines<br />
Good range of spirits, mixers & soft drinks<br />
Coffee & tea<br />
Classic décor and furnishings<br />
          
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