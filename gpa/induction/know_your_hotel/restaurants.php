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
             <table id="table1" align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="90%">
  <tbody>
    <tr>
      <td colspan="2" align="left" valign="top" >
        
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tbody>
            <tr>
              <td scope="row" align="center" height="25" valign="top"><img src="../../images/restaurants.jpg" width="446" height="280" /></td>
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
                            <th height="25" width="35%"><strong>HOURS</strong></th>
                            <th height="25" width="12%"><strong>DAYS</strong></th>
                          </tr>
                          <tr>
                            <td height="45">Once Upon A Time</td>
                            <td height="45">Speciality&nbsp; Restaurant<br>
                              at Lobby Level</td>
                            <td height="45">12:30 hrs to 15:30 hrs<br> 
                              19:30 hrs to 23:30 hrs</td>
                            <td height="45">Daily</td>
                          </tr>
                          <tr>
                            <td height="45">Tulips</td>
                            <td height="45">Coffee Shop -<br>
                              at Lobby</td>
                            <td height="45">24 Hrs</td>
                            <td height="45">Daily</td>
                          </tr>
                          <tr>
                            <td height="44">The Mustang Bar</td>
                            <td height="44">Bar - at Lobby<br> 
                              Level</td>
                            <td height="44">13:00 hrs to 02:30 hrs</td>
                            <td height="44">Daily</td>
                          </tr>
                          <tr>
                            <td height="25">
                              Business Club<br>
                                Lounge
                            </td>
                            <td height="25">Exclusive Lounge for Club Floor Guests</td>
                            <td height="25">7:00 hrs to 20:00 hrs</td>
                            <td height="25">Daily</td>
                          </tr>
                          <tr>
                            <td height="25">Torque</td>
                            <td height="25">Pub - at Basement Level</td>
                            <td height="25">18:00 hrs to 02:30 hrs </td>
                            <td height="25">Tuesday to Sunday</td>
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
              <td align="center" valign="top"><img src="../../images/tulips.jpg" width="446" height="281" /></td>
            </tr>
            <tr>
              <td><p style="line-height:25px;">The all hour Coffee shop open towards the lobby, Tulips symbolized the liveliness and energy of Green Park. Signature paintings by renowned painter Vaikuntham on subtle background hues of creams and browns grace the place. The coffee serves 24 hours  and serves breakfast , lunch and buffet dinner. Our popular Midnight Biryani buffet has captured the imagination of Hyderabadis as well as discerning guests from across the globe</p></td>
            </tr>
            <tr>
              <td><h3>Once Upon A Time</h3></td>
            </tr>
            <tr>
              <td align="center" valign="top"><img src="../../images/once_opon_a_time.jpg" width="443" height="281" /></td>
            </tr>
            <tr>
              <td><p style="line-height:25px;">The signature restaurant is our tribute to the princely cuisines of   India. The restaurant has been designed with modern elements subtly   integrated with the elements of princely India. Wooden columns from   Chettinad, Filigree work from Nizams, Moghal portraits adorn the   restaurant. </p></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><p style="line-height:25px;">The ambience is complemented by the menu which offers an eclectic mix of   items from various cuisines. Our chefs specialized in traditional   Hyderabadi cuisine.  The authentic Hyderabadi biryani at Once Upon a   Time is part of Hyderabad folklore.   ning guests unwind after a hard day's work.</p></td>
            </tr>
            <tr>
              <td><h3>Mustang Bar</h3></td>
            </tr>
            <tr>
              <td align="center" valign="top"><img src="../../images/mustang_bar.jpg" width="446" height="298" /></td>
            </tr>
            <tr>
              <td><p style="line-height:25px;">The signature  bar is ideal for a quiet and refreshing evening out. The   bar is designed with  an eclectic mix of textures and lighting. The   double hued walls and the backlit  table give the place a enchanting   feel.   The décor is pleasing and yet chic, making the bar a fine place   to  unwind.</p> </td>
            </tr>
            <tr>
              <td><h3>Torque</h3></td>
            </tr>
            <tr>
              <td align="center" valign="top"><img src="../../images/torque.jpg" width="446" height="297" /></td>
            </tr>
            <tr>
              <td>The one stop pub for all you autophiles, sports bar addicts and party people.</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>Torque has an automotive theme and has integrated various automotive   elements in to the interior to make your experience at our pub unique.</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>Torque is the place to be to watch your favourite sports, grab a drink   after work, catch up with long lost friends, party till you drop on   weekends and have a chilled out Sunday.</td>
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