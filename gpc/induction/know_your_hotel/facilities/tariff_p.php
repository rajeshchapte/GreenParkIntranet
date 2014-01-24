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
          	<h2 class="contentheading">Tariff</h2>
              <hr />
                    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tbody>
                        <tr>
                          <th scope="row" height="25" align="left" valign="top"><table style="border-collapse:collapse" align="center" border="1" bordercolor="#666666" cellpadding="0" cellspacing="0" width="100%" class="gridtable">
                            <tbody>
                              <tr>
                                <th height="25" colspan="3" align="center">FIT TARIFF IN <strong>RUPEES</strong> (INR)</th>
                              </tr>
                              <tr>
                                <td align="center" valign="middle">ROOM TYPE</td>
                                <td  height="25" align="center" valign="middle">SINGLE Rs.</td>
                                <td  height="25" align="center" valign="middle">DOUBLE Rs.</td>
                              </tr>
                              <tr>
                                <td align="left">*   Deluxe</td>
                                <td  height="25" align="center">Rs. 5,000</td>
                                <td  height="25" align="center">Rs. 6,000</td>
                              </tr>
                              <tr>
                                <td align="left">** Business Club</td>
                                <td  height="25" align="center">Rs. 6,000</td>
                                <td  height="25" align="center">Rs. 7,000</td>
                              </tr>
                              <tr>
                                <td align="left">** Junior Suite</td>
                                <td  height="25" align="center">---</td>
                                <td  height="25" align="center">Rs. 8,500</td>
                              </tr>
                              <tr>
                                <td align="left">** Executive Suite</td>
                                <td  height="25" align="center">---</td>
                                <td  height="25" align="center">Rs.10,500</td>
                              </tr>
                            </tbody>
                          </table>
                            <p>Note :-<br />
                            </p></th>
                        </tr>
                        <tr>
                          <th scope="row" height="12" align="left" valign="middle">
                            <table style="border-collapse:collapse;font-weight:normal;" border="0" bordercolor="#666666" cellpadding="4" cellspacing="4" width="100%">
                              <tbody>
                                <tr>
                                  <td  valign="top" width="8%"><div align="right">**</div></td>
                                  <td width="92%">Extra Bed Charges - Rs. 900/-</td>
                                </tr>
                                <tr>
                                  <td  valign="top"><div align="right">*</div></td>
                                  <td>No Charge for Children under 12 occupying the same room without an extra bed.</td>
                                </tr>
                                <tr>
                                  <td  valign="top"><div align="right">*</div></td>
                                  <td>VAT on Food and Beverage is applicable as per Government regulations.</td>
                                </tr>
                                <tr>
                                  <td  valign="top"><div align="right">*</div></td>
                                  <td>Government Luxury Tax of 12.5 % is applicable on Rack rates.</td>
                                </tr>
                                <tr>
                                  <td  valign="top"><div align="right"></div></td>
                                  <td><strong>Rates for Deluxe Rooms include</strong></td>
                                </tr>
                                <tr>
                                  <td  valign="top"><div align="right">*</div></td>
                                  <td>Complimentary Buffet Breakfast at Tulips the Coffee Shop.</td>
                                </tr>
                                <tr>
                                  <td  valign="top"><div align="right"></div></td>
                                  <td><strong>Rates for Business Club and Suite Rooms include</strong></td>
                                </tr>
                                <tr>
                                  <td  valign="top"><div align="right">**</div></td>
                                  <td>Complimentary Buffet Breakfast at the Business Club Lounge.</td>
                                </tr>
                                <tr>
                                  <td  valign="top"><div align="right">**</div></td>
                                  <td>Complimentary lunch at the Once Upon A Time, our speciality Restaurant.</td>
                                </tr>
                                <tr>
                                  <td  valign="top"><div align="right">**</div></td>
                                  <td>Complimentary Cocktail hour at the Business Club Lounge.</td>
                                </tr>
                                <tr>
                                  <td >&nbsp;</td>
                                  <td><p >CHECK OUT TIME - 12 NOON<br />
                                      <br />
                                      CREDIT CARDS ACCEPTED -<br />
                                      <br />
                                      All recognized International and National Credit Cards. <br />
                                      <br />
                                      GIT TARIFF - ON APPLICATION</p>
                                    <p><a href="../images/tariff_card.doc"><img src="http://www.hotelgreenpark.com/chennai/images/arrow.gif" width="14" height="5" border="0" />Download</a> Tariff Card <br />
                                  ( to Down Load Right Click on above link with Mouse and Select &quot;Save Target As&quot;)</p></td>
                                </tr>
                              </tbody>
                            </table>
                            </th>
                        </tr>
                      </tbody>
                    </table>
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