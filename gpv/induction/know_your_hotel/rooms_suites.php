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
      <td colspan="2" align="left" valign="top" >
        
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tbody>
            <tr>
              <td scope="row" align="center" height="25" valign="top"><img src="../../images/v_rooms_image.png" /></td>
            </tr>
            <tr>
              <td scope="row" align="left" height="25" valign="top"><p>The smartly designed rooms and suites offer warmth and personalized services which are hallmark of Green Park Hospitality. The rooms are designed to provide the right ambience and comforts for a relaxing stay for the discerning business traveler </p></td>
            </tr>
            <tr>
              <th scope="row" align="left" height="12" valign="top"><table  border="0" bordercolor="#999999" cellpadding="0" cellspacing="0" width="100%" class="gridtable">
                <tbody>
                  <tr>
                    <td colspan="3" align="center">FIT TARIFF IN <strong>RUPEES</strong> (INR)</td>
                    </tr>
                  <tr>
                    <td width="404">ROOM TYPE</td>
                    <td width="230">SINGLE Rs.</td>
                    <td align="right" width="264">DOUBLE Rs.</td>
                  </tr>
                  <tr>
                    <td>*   Executive</td>
                    <td>Rs. 3,800</td>
                    <td align="right" width="264">Rs. 4,500</td>
                  </tr>
                  <tr>
                    <td>*   Deluxe</td>
                    <td>Rs. 4,500</td>
                    <td align="right" width="264">Rs. 5,200</td>
                  </tr>
                  <tr>
                    <td>** Business Club</td>
                    <td>Rs. 5,300</td>
                    <td align="right" width="264">Rs. 6,000</td>
                  </tr>
                  <tr>
                    <td>** Executive Suite</td>
                    <td>---</td>
                    <td align="right" width="264">Rs. 6,700</td>
                  </tr>
                  <tr>
                    <td>** Quality Suite</td>
                    <td>---</td>
                    <td align="right" width="264">Rs. 7,600</td>
                  </tr>
                </tbody>
              </table></th>
            </tr>
            
            <tr>
              <th align="left" style="font-weight:normal;">
              	Government Luxury Tax of 5% is applicable on Rack rates. 
Extra Bed Charges - Rs. 500/- <br />
No Charge for Children under 12 occupying the same room without an extra bed. 
VAT on Food and Beverage is applicable as per Government regulations. 
Check out time - 12 NOON<br />
All recognized International and National Credit Cards are accepted
GIT Tariff - On request
              </th>
            </tr>
            <tr>
              <td>
              	<div style="text-align:center;">
                <h2 style="margin:0px; padding:0px;">GUEST ROOM FEATURES</h2>
                <h3 style="margin:0px; padding:0px;">CATEGORY : Executive</h3>
                <h4 style="margin:0px; padding:0px;"> S.ft Area- 294 sft - Twin Bed Room</h4>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <ul>
                    <li>Complimentary Fruit Platter </li>
                    <li>Complimentary Buffet Breakfast at Once Upon a Time </li>
                    <li>Complimentary Use of Gymnasium </li>
                    <li>Complimentary High Speed Internet / Wi-Fi</li>
                    
                </ul>
                
                <br />
                
                <ul>
                    <li>Double/Single Bed with 6" mattress  </li>
                    <li>100% Cotton Room/Bath Linen </li>
                    <li>Head Board </li>
                    <li>Wooden Flooring</li>
                    
                </ul>
                
                <br />
                
                <ul>
                    <li> Electronic safe  </li>
                    <li> In House Laundry</li>
                    <li> Refrigerator</li>
                    <li>Snacks tray</li>
                    
                </ul>
                
                
                <br />
                
                <ul>
                    <li>  Philips 21 inches TV </li>
                    <li>Bed side phone and Bath room phone </li>
                    <li>Luggage Rack </li>
                    <li>Single Sofa</li>
                    <li>Working Table with drawer</li>
                    
                    
                </ul>
                
                
                <br />
                
                <ul>
                    <li>  5 ampere sockets </li>
                    <li> Water Sprinkler </li>
                    <li> Free standing with granite top & washbasin.</li>
                    
                  </ul>
                  
                  
                  <br />
                  <div style="text-align:center;">
                <h2 style="margin:0px; padding:0px;">GUEST ROOM FEATURES</h2>
                <h3 style="margin:0px; padding:0px;">CATEGORY : Deluxe</h3>
                <h4 style="margin:0px; padding:0px;">S.Ft Area- 294 sft. -	Large Bed Room </h4>
                </div>
                
                
                <br />
                
                <ul>
                    <li>Complimentary Mineral Water </li>
                    <li>Complimentary Fruit Platter  </li>
                    <li>Complimentary Soft Drinks , Chocolates </li>
                    <li> Complimentary Buffet Breakfast at Once Upon a Time</li>
                    <li>Complimentary Use of Gymnasium  </li>
                    <li>Complimentary High Speed Internet / Wi-Fi</li>
                                        
                  </ul>
                  
                  
                  
                   <br />
                
                <ul>
                    <li>Double/Single Bed with 6" mattress  </li>
                    <li>Cozy Duvets</li>
                    <li>100% Cotton Room/Bath Linen </li>
                    <li>Head Board</li>
                    <li>Wooden Flooring</li>
                    
                                        
                  </ul>
                
                
                
                
                <br />
                
                <ul>
                    <li>Tea / Coffee Maker</li>
                    <li>Hair Dryer on request</li>
                    <li>Electronic safe</li>
                    <li>In House Laundry</li>
                    <li>Refrigerator</li>
                    <li>Snacks tray</li>
                                          
                  </ul>
                
                
                 <br />
                
                <ul>
                    <li>Philips 21 inches TV</li>
                    <li>Bed side phone and Bath room phone</li>
                    <li>Luggage Rack</li>
                    <li>Single Sofa</li>
                    <li>Working Table with drawer</li>
                                                             
                  </ul>
                  
                  
                  <br />
                
                <ul>
                    <li>5 ampere sockets</li>
                    <li>Water Sprinkler </li>
                    <li>Free standing with granite top & washbasin </li>
                                                            
                  </ul>
                <br />  
                  
                  <div style="text-align:center;">
               
                
                <h3 style="margin:0px; padding:0px;">CATEGORY: Business Club</h3>
                <h4 style="margin:0px; padding:0px;">S.Ft Area- 294 sft. -	Large Bed Room </h4>
                </div>
                  
                  <br />
                
                <ul>
                    <li>Complimentary Mineral Water</li>
                    <li>Complimentary Fruit Platter</li>
                    <li>Complimentary Soft Drinks , Chocolates </li>
                    <li>Complimentary Buffet Breakfast at Once Upon a Time</li>
                    <li>Complimentary Cocktail hour at the Business Club Lounge </li>
                    <li>Complimentary Use of Gymnasium </li>
                    <li>Complimentary High Speed Internet / Wi-Fi</li>
                                                                                
                  </ul>
                  
                  <br />
                
                <ul>
                    <li>Double/Single Bed with 6" mattress </li>
                    <li>Cozy Duvets</li>
                    <li>100% Cotton Room/Bath Linen</li>
                    <li>Head Board</li>
                    <li>Wooden Flooring</li>
                                                                                                   
                  </ul>
                  
                  <br />
                    <ul>
                        <li>Tea / Coffee Maker</li>
                        <li>Hair Dryer on request</li>
                        <li>Electronic safe</li>
                        <li>In House Laundry</li>
                        <li>Refrigerator</li>
                        <li>Snacks tray</li>
                                                                       
                      </ul>
                  
                  
                  		<br />
                        <ul>
                            <li>Wall Mounted LG LCD TV 26 inches with access to over 100 channels.</li>
                            <li>Bed side phone and Bath room phone</li>
                            <li>Luggage Rack</li>
                            <li>Single Sofa</li>
                            <li>Working Table with drawer</li>
                                                                                                           
                        </ul>
                        
                        <br />
                        <ul>
                            <li>5 ampere sockets</li>
                            <li>Water Sprinkler </li>
                            <li>Free standing with granite top & washbasin</li>
                            <li>Bath Tub</li>
                        </ul>
                  
                  
                  
                  <br />
                  <div style="text-align:center;">
               
                <h3 style="margin:0px; padding:0px;">CATEGORY : Executive Suite</h3>
                <h4 style="margin:0px; padding:0px;"> Sq.Ft Area- 520 sqft</h4>
                </div>
                
                <br />
                        <ul>
                            <li>Complimentary Mineral Water</li>
                            <li>Complimentary Fruit Platter </li>
                            <li>Complimentary Soft Drinks , Chocolates</li>
                            <li>Complimentary Buffet Breakfast at Once Upon a Time</li>
                            <li>Complimentary Cocktail hour at the Business Club Lounge </li>
                            <li>Complimentary Use of Gymnasium </li>
                            <li>Complimentary High Speed Internet / Wi-Fi</li>
                        </ul>
                        
                        
                        <br />
                        <ul>
                            <li>Double/Single Bed with 6" mattress</li>
                            <li>Cozy Duvets</li>
                            <li>100% Cotton Room/Bath Linen</li>
                            <li>Head Board</li>
                            <li>Wooden Flooring</li>
                        </ul>
                		<br />
                        <ul>
                            <li>Tea / Coffee Maker</li>
                            <li>Hair Dryer on request</li>
                            <li>Electronic safe</li>
                            <li>In House Laundry</li>
                            <li>Refrigerator</li>
                            <li>Snacks tray</li>
                        </ul>
                        
                        
                        <br />
                        <ul>
                            <li>Wall Mounted LG LCD TV 26 inches with access to over 100 channels.</li>
                            <li>Bed side phone and Bath room phone</li>
                            <li>Luggage Rack</li>
                            <li>One Single Sofa and Three seater sofa with centre table in living room</li>
                            <li>Working Table with drawer</li>
                        </ul>
                        
                        <br />
                        <ul>
                            <li>5 ampere sockets</li>
                            <li>Water Sprinkler</li>
                            <li>Free standing with granite top & washbasin</li>
                            <li>Bath Tub</li>
                            <li>Free standing with granite top & washbasin</li>
                        </ul>
                
                        <br />
                        <div style="text-align:center;">
                            <h3 style="margin:0px; padding:0px;">CATEGORY : Quality Suites</h3>
                            <h4 style="margin:0px; padding:0px;"> Sq.ft Area- 590 Sqft</h4>
                        </div>
                
                		<br />
                        <ul>
                            <li>Complimentary Mineral Water</li>
                            <li>Complimentary Fruit Platter</li>
                            <li>Complimentary Soft Drinks , Chocolates </li>
                            <li>Complimentary Buffet Breakfast at Once Upon a Time</li>
                            <li>Complimentary Cocktail hour at the Business Club Lounge</li>
                            <li>Complimentary Use of Gymnasium </li>
                            <li>Complimentary High Speed Internet / Wi-Fi</li>
                        </ul>
                
                <br />
                    <ul>
                        <li>Double/Single Bed with 6" mattress </li>
                        <li>Cozy Duvets</li>
                        <li>100% Cotton Room/Bath Linen</li>
                        <li>Head Board</li>
                        <li>Wooden Flooring</li>
                     </ul>
                    <br />
                        <ul>
                        <li>Tea / Coffee Maker</li>
                        <li>Hair Dryer on request</li>
                        <li>Electronic safe</li>
                        <li>In House Laundry</li>
                        <li>Refrigerator</li>
                        <li>Snacks tray</li>
                    </ul>
                    <br />
                    <ul>
                        <li>Wall Mounted LG LCD TV 26 inches with access to over 100 channels.</li>
                        <li>Bed side phone and Bath room phone</li>
                        <li>Luggage Rack</li>
                        <li>One Single Sofa and Three seater sofa with centre table in living room</li>
                        <li>Working Table with drawer</li>
                    </ul>
                    <br />
                    <ul>
                        <li>5 ampere sockets</li>
                        <li>Water Sprinkler </li>
                        <li>Free standing with granite top & washbasin</li>
                        <li>Bath Tub</li>
                        <li>Free standing with granite top & washbasin</li>
                    </ul>
                    
              </td>
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