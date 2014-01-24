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
            <li class="tile tile-big tile-24 rotate3d rotate3dX" data-page-type="no" data-page-name="no" onclick="location.href='<?=$prp_root;?>/';">
              <div class="faces">
                <div class="frontgph" style="background-color:#d9522c">
                  <p>GreenPark Hyderabad</p>
                </div>
                <div class="backgph"> <img src="../../../images/Gp_hyd.jpg" width="100%" height="166" /> </div>
              </div>
            </li>
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
              <div class="color8"><p style="font-size:30px;"><span class=""><img src="../../../images/tariff_icon.png"  width="100" /></span></p></div>
              
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
                                <th colspan="3" scope="row" height="25" align="center"><div align="center">FIT TARIFF IN <strong>RUPEES</strong> (INR)</div></th>
                              </tr>
                              <tr>
                                <th scope="row" height="25" align="center"><div align="center">ROOM TYPE </div></th>
                                <td height="25" align="center"><div align="center">SINGLE Rs.</div></td>
                                <td height="25" align="center"><div align="center">DOUBLE Rs.</div></td>
                              </tr>
                              <tr>
                                <th  scope="row" height="25" align="center"><div align="left">* &nbsp;&nbsp;Deluxe</div></th>
                                <td  height="25" align="center"><div align="center">Rs. 6,000</div></td>
                                <td  height="25" align="center"><div align="center">Rs. 7,000</div></td>
                              </tr>
                              <tr>
                                <th  scope="row" height="25" align="center"><div align="left">** Business Club</div></th>
                                <td  height="25" align="center"><div align="center">Rs. 7,500</div></td>
                                <td  height="25" align="center"><div align="center">Rs. 8,500</div></td>
                              </tr>
                              <tr>
                                <th  scope="row" height="25" align="center"><div align="left">** Junior Suite</div></th>
                                <td  height="25" align="center"><div align="center">-</div></td>
                                <td  height="25" align="center"><div align="center">Rs. 10,000</div></td>
                              </tr>
                              <tr>
                                <th  scope="row" height="25" align="center"><div align="left">** Executive Suite</div></th>
                                <td  height="25" align="center"><div align="center">-</div></td>
                                <td  height="25" align="center"><div align="center">Rs. 11,000</div></td>
                              </tr>
                              <tr>
                                <th  scope="row" height="25" align="center"><div align="left">** Quality Suite</div></th>
                                <td  height="25" align="center"><div align="center">-</div></td>
                                <td  height="25" align="center"><div align="center">Rs. 12,000</div></td>
                              </tr>
                            </tbody>
                          </table>
                            <p>Surrounding Area of Interest </p>
                            <p style="font-weight:normal;">Charminar, Golconda Fort, 
                              Hussain Sagar &amp; Necklace Road, Birla Mandir, Salarjung Museum, Nehru
                              Zoological park, Mecca Masjid, Qutub Shahi Tombs, Falaknuma, 
                              Vanasthalipuram Deer Park, Public Gardens, Khazana Museum, Birla 
                              Obeservatory &amp; Planetarium, Osman Sagar, Lumbini Park, Laad Bazar, 
                              Ramoji Film City, Sanghi Temple, Ocean Park, Dhola-ri-Dhani, Durgam 
                              Cheruvu, Hi-Tech city, Shilparamam </p>
                            <p style="font-weight:normal;">Kindly note that for site seeing Rs.1,000/- for 8 Hours - 80 Km by Tata Indica vehicle. <br />
                            </p></th>
                        </tr>
                        <tr>
                          <th scope="row" height="12" align="left" valign="middle"><p>Note :-</p>
                            <table style="border-collapse:collapse;font-weight:normal;" border="0" bordercolor="#666666" cellpadding="4" cellspacing="4" width="100%">
                              <tbody>
                                <tr>
                                  <td  valign="top" width="8%"><div align="right">**</div></td>
                                  <td width="92%">Extra Bed Charges - Rs. 500/-</td>
                                </tr>
                                <tr>
                                  <td  valign="top"><div align="right">*</div></td>
                                  <td>No Charge for Children under 12 occupying the same room without an extra bed.</td>
                                </tr>
                                <tr>
                                  <td  valign="top"><div align="right">*</div></td>
                                  <td>VAT  on Food and Beverage is applicable as per Government regulations.</td>
                                </tr>
                                <tr>
                                  <td  valign="top"><div align="right">*</div></td>
                                  <td>Government Luxury Tax of 5% is applicable on Rack rates.</td>
                                </tr>
                                <tr>
                                  <td  valign="top"><div align="right"></div></td>
                                  <td>Rates for Deluxe Rooms include</td>
                                </tr>
                                <tr>
                                  <td  valign="top"><div align="right">*</div></td>
                                  <td> Complimentary Buffet Breakfast at Tulips the Coffee Shop.</td>
                                </tr>
                                <tr>
                                  <td  valign="top"><div align="right"></div></td>
                                  <td>Rates for Business Club and Suite Rooms include</td>
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
                                  <td><p > CHECK OUT TIME - 12 NOON<br />
                                   
                                    CREDIT CARDS ACCEPTED -<br />
                                    All recognized International and National Credit Cards. <br />
                                    GIT TARIFF - ON APPLICATION</p>
                                    <p ><a href="images/tariff_card.doc" class="heading2"><img src="Tariff%20-%20Hotel%20Green%20Park%20Hyderabad_files/arrow.gif" height="5" border="0" width="14" />Download</a> Tariff Card <br />
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