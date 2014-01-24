<?php
include("../../../../connect.php");
include("../../../prp_info.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GreePark Hotels and Resorts Intranet</title>
<script language="JavaScript">
<!--
function openwindow()
{
window.open('file.html', 'newwindow', 'width=xxx,height=xxx,scrollbars=yes');
}
//-->
</script>
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
            <li class="tile tile-big tile-24 rotate3d rotate3dX" data-page-type="no" data-page-name="no" onclick="location.href='<?=$prp_root;?>/';">
              <div class="faces">
                <div class="frontgph" style="background-color:#d9522c">
                  <p>GreenPark Hyderabad</p>
                </div>
                <div class="backgph"> <img src="../../../images/Gp_hyd.jpg" width="100%" height="166" /> </div>
              </div>
            </li>
            <li class="tile tile-big tile-17 slideTextLeft" data-page-type="no" data-page-name="no"  onclick="location.href='../../../induction.php';">
              <div class="color9">
                <p style="font-size:30px;"><span class=""><img src="../../../images/induction_icon.png"  width="35" />&nbsp;&nbsp;&nbsp;&nbsp;</span>Induction</p>
              </div>
              <div class="color9">
                <p>A Few Donts, Board of Directors,<br>
                  Focus Document, etc...</p>
              </div>
            </li>
            
            
            <li class="tile tile-big tile-17 slideTextLeft" data-page-type="no" data-page-name="no"  onclick="location.href='../../know_your_hotel.php';">
            <div class="color5"><p>Know your Hotels</p></div>
              <div class="color5"><p style="font-size:30px;"><span class=""><img src="../../../images/know_your_hotel.png"  width="100" /></span></p></div>
              
            </li>
            
            <li class="tile tile-big tile-17 slideTextLeft" data-page-type="no" data-page-name="no"  onclick="location.href='../tariff.php';">
              <div class="color8"><p>Tariff</p></div>
              <div class="color8"><p style="font-size:30px;"><span class=""><img src="../../../images/tariff_icon.png"  width="100" /></span></p></div>
              
            </li>
            
          </div>
          <div class="col4 clearfix">
          	<h2 class="contentheading"><span class="heading2">Contact Us</span></h2>
              <hr />
              <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tbody>
                  <tr>
                    <td align="left" valign="top" width="215"><p > <font class="heading2" color="#FF9900" face="Verdana"> GreenPark - Hyderabad </font></p>
                      <p> Greenlands, Begumpet 
                        Hyderabad <br />
                        Andhra Pradesh 
                        INDIA 
                        500 016 <br />
                        <br />
                        Tel  :  &nbsp;091 - 040 - 66 51 51 51, <br />
                        Fax  :  091 - 040 - 23 75 76 77 <br />
                        <br />
                        Email: <a href="mailto:reserv.hyd@hotelgreenpark.com">reserv.hyd@hotelgreenpark.com</a></p>
                        </td>
                    <td rowspan="2" width="14">
                    <p align="center">&nbsp;</p>
                    </td>
                    <td align="left" valign="top" width="235">
                    <p><font class="heading2" color="#FF9900" face="Verdana">GreenPark - Visakhapatnam </font> 
                    <font style="font-size: 8pt" color="#FF9900" face="Verdana">&nbsp;&nbsp;</font></p>
                      <p >Waltair Main Road  
                        Visakhapatnam, <br />
                        Andhra Pradesh  
                        INDIA.  
                        530002 </p>
                      <p >Tel  :&nbsp;  091 - 0891 - 661 51 51 <br />
                        Fax  :  091 - 0891 - 256 37 63 <br />
                        <br />
                        Email:<br />
                        <a href="mailto:reserv.vizag@hotelgreenpark.com">reserv.vizag@hotelgreenpark.com</a></p></td>
                    <td rowspan="2" width="12">&nbsp;</td>
                    <td width="196" align="left" valign="top"><p class="heading2"><font class="heading2" color="#FF9900" face="Verdana">GreenPark - chennai </font></p>
                      <p >N.S.K. Salai, Arcot Road, Vadapalani Chennai Tamilnadu INDIA 600026<br />
                        Tel  :  &nbsp;091 - 044 – 66 51 51 51 <br />
                        Fax  :  091 - 044 – 23 75 76 77 <br />
                        <br />
                        Email:<br />
                        <a href="mailto:reserv.chn@hotelgreenpark.com">reserv.chn@hotelgreenpark.com</a></p></td>
                  </tr>
                  <tr>
                    <td width="215">&nbsp;</td>
                    <td width="235">&nbsp;</td>
                    <td>&nbsp;</td>
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