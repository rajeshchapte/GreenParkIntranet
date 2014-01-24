<?php

ini_set('session.save_path', 'tmp');
session_start();
error_reporting(E_ALL ^ E_NOTICE);

/*if ($_SESSION['email_id'] == '' && $_SESSION['role'] != 'admin')
  {
	header('LOCATION: logout.php');	
  }
*/
include("../connect.php");
include("prp_info.php");


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="includes/styles1.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GreenPark Hotels and Resorts Intranet</title>
<script type="text/javascript">
// Popup window code
function newPopup(url) {
	popupWindow = window.open(
		url,'popUpWindow','height=500,width=900,left=50,top=50,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
}
</script>
</head>

<body>
<div class="wrapper">
  <div class="header">
    <?php /*?> <div class="logo_bar"> 
     <a href="/greenparksample/8/">
          <div class="logo_small" align="center"><img src="images/logo123.png" /><br />
           <div align="center" class="logo_name">GreenPark<br /><span style="font-size:17px;">Hotels</div>
        </div>
      </a> 
    </div><?php */?>
  </div>
  <div class="clear"></div>
  <div class="content1" style=" height:auto; width:1240px; ">
    <div style=" height:550px; width:auto; z-index:999">
      <div style="float:left">
        <table width="1240" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="100%"><table width="100%" border="0" cellspacing="8" cellpadding="0">
                <tr>
                  <td width="33%" valign="top"><table width="100%" height="280" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td onclick="location.href='<?=$home;?>';" class="color2" height="136"><div class="tile_box">
                            <div align="center" style="top:10px; position:relative"><img src="images/logo123.png"  width="80" /></div>
                            <div class="tile_name"> </div>
                          </div></td>
                      </tr>
                      <tr>
                        <td height="8"></td>
                      </tr>
                      <tr height="136">
                        <td onclick="location.href='<?=$prp_root;?>/';" class="color1" height="136"><div class="tile_box">
                            <div align="center" style="top:10px; position:relative"><img src="images/hotel_img1.png"  width="80" /></div>
                            <div class="tile_name"> GreenPark<br />
                              Hyderabad</div>
                          </div></td>
                      </tr>
                      <tr>
                        <td height="8"></td>
                      </tr>
                      <tr>
                        <td onclick="location.href='<?=$prp_root;?>/know_your_managers.php';" class="color15" height="136"><div class="tile_box">
                            <div align="center" style="top:20px; position:relative"><img src="images/know_your_managers.png"  width="80" /></div>
                            <div class="tile_name"> Know Your Managers </div>
                          </div></td>
                      </tr>
                    </table></td>
                  <td width="76%" valign="top">
                    
                    
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="">
                          <tr>
                            <td height="136" class="color11" width="403" valign="top">
                                <div class="knowyourmanagers_tile_box">
                                    <div class="" style="top:10px; position:relative; padding:0px 0px 0px 5px"><img src="images/mohan_krishna.png" align="right" width="90" />
                                        <strong>GREENPARK HYDERABD OFFICE</strong><br />
                                        Ph: 040 - 66 51 51 51<br />
                                        Fax : 040 - 23 75 76 77<br /><br />
                                        
                                    </div>
                                    <div class="knowyourmanagers_tile_name" style="float:left; ">                                         
                                        <a href="JavaScript:newPopup('mailto:hyd@hotelgreenpark.com');">Hyd@hotelgreenpark.com</a>
                                        <div style="float:right"><img src="images/know_your_managers.png" width="20" /></div>
                                    </div>
                                </div>
                            </td>
                            <td width="8"></td><td height="136" class="color11" valign="top">
                            <div class="knowyourmanagers_tile_box">
                                <div class="" style="top:10px; position:relative; padding:0px 0px 0px 5px">
                                    <strong style="text-transform:uppercase">Mr. RAJKUMAR SING</strong><br />
                                    General Manager(O)<br />
                                    Mobile: 95050 56111<br />
                                    Ph: 040 - 66 51 51 51 ( Ext: 4455 )<br />
                                    Fax : 040 - 23 75 76 77<br /><br />
                                </div>
                                <div class="knowyourmanagers_tile_name" style="float:left;"> 
                                	<a href="JavaScript:newPopup('mailto:rajsingh@hotelgreenpark.com');">Rajsingh@hotelgreenpark.com</a>
                                	<div style="float:right"><img src="images/know_your_managers.png" width="20" /></div>
                                </div>
                            </div>
                            </td>
                          </tr>
                          <tr><td colspan="3" height="8"></td></tr>
                          
                          <tr>
                            <td height="136" class="color11" width="403" valign="top">
                                <div class="knowyourmanagers_tile_box">
                                    <div class="" style="top:10px; position:relative; padding:0px 0px 0px 5px">
                                        <strong style="text-transform:uppercase">Mr. JOYDEEP MAZUMDAR</strong><br />
                                        Executive Assistant Manager<br />
                                        Mobile: 98486 33190<br />
                                        Ph: 040 - 66 51 51 51 ( Ext: 4667 )<br />
                                        Fax : 040 - 23 75 76 77<br /><br />
                                    </div>
                                    <div class="knowyourmanagers_tile_name" style="float:left; "> 
                                        <a href="JavaScript:newPopup('mailto:joydeep@hotelgreenpark.com');">Joydeep@hotelgreenpark.com</a>
                                        <div style="float:right"><img src="images/know_your_managers.png" width="20" /></div>
                                    </div>
                                </div>
                            </td>
                            <td width="8"></td><td height="136" class="color11" valign="top">
                            <div class="knowyourmanagers_tile_box">
                                <div class="" style="top:10px; position:relative; padding:0px 0px 0px 5px">
                                    <strong>Mr.S.V. SESHA SAI</strong><br />
                                    Finance Manager<br />
                                    Mobile: 99127 44188<br />
                                    Ph: 040 - 66 51 51 51 ( Ext: 4431 )<br />
                                    Fax : 040 - 23 75 76 77<br /><br />
                                </div>
                                <div class="knowyourmanagers_tile_name" style="float:left;"> 
                                	<a href="JavaScript:newPopup('mailto:seshasai@hotelgreenpark.com');">Seshasai@hotelgreenpark.com</a>
                                	<div style="float:right"><img src="images/know_your_managers.png" width="20" /></div>
                                </div>
                            </div>
                            </td>
                          </tr>
                          <tr><td colspan="3" height="8"></td></tr>
                          
                          <tr>
                            <td height="136" class="color11" width="403" valign="top">
                                <div class="knowyourmanagers_tile_box">
                                    <div class="" style="top:10px; position:relative; padding:0px 0px 0px 5px">
                                        <strong style="text-transform:uppercase">Mr. ABDUL AZEEM HASHMATH</strong><br />
                                        Chief Engineer<br />
                                        Mobile: 98481 57591<br />
                                        Ph: 040 - 66 51 51 51 ( Ext: 4439 )<br />
                                        Fax : 040 - 23 75 76 77<br /><br />
                                    </div>
                                    <div class="knowyourmanagers_tile_name" style="float:left; "> 
                                        <a href="JavaScript:newPopup('mailto:azeem@hotelgreenpark.com');">Azeem@hotelgreenpark.com</a>
                                        <div style="float:right"><img src="images/know_your_managers.png" width="20" /></div>
                                    </div>
                                </div>
                            </td>
                            <td width="8"></td><td height="136" class="color11" valign="top">
                            <div class="knowyourmanagers_tile_box">
                                <div class="" style="top:10px; position:relative; padding:0px 0px 0px 5px">
                                    <strong>Mr. N.KRISHNA</strong><br />
                                    HR Manager<br />
                                    Mobile: 96666 69011<br />
                                    Ph: 040 - 66 51 51 51 ( Ext: 4468 )<br />
                                    Fax : 040 - 23 75 76 77<br /><br />
                                </div>
                                <div class="knowyourmanagers_tile_name" style="float:left;"> 
                                	<a href="JavaScript:newPopup('mailto:nkrishna@hotelgreenpark.com');">Nkrishna@hotelgreenpark.com</a>
                                	<div style="float:right"><img src="images/know_your_managers.png" width="20" /></div>
                                </div>
                            </div>
                            </td>
                          </tr>
                          <tr><td colspan="3" height="8"></td></tr>
                          
                          <tr>
                            <td height="136" class="color11" width="403" valign="top">
                                <div class="knowyourmanagers_tile_box">
                                    <div class="" style="top:10px; position:relative; padding:0px 0px 0px 5px">
                                        <strong style="text-transform:uppercase">Mr. KUMAR JAMBARAPU</strong><br />
                                        Manager- HK<br />
                                        Mobile: 95534 53311<br />
                                        Ph: 040 - 66 51 51 51 ( Ext: 4458 )<br />
                                        Fax : 040 - 23 75 76 77<br /><br />
                                    </div>
                                    <div class="knowyourmanagers_tile_name" style="float:left; "> 
                                        <a href="JavaScript:newPopup('mailto:jkumar@hotelgreenpark.com');">Jkumar@hotelgreenpark.com</a>
                                        <div style="float:right"><img src="images/know_your_managers.png" width="20" /></div>
                                    </div>
                                </div>
                            </td>
                            <td width="8"></td><td height="136" class="color11" valign="top">
                            <div class="knowyourmanagers_tile_box">
                                <div class="" style="top:10px; position:relative; padding:0px 0px 0px 5px">
                                    <strong>Mr. M.SATYANARAYANA</strong><br />
                                    Dy.Manager-IT<br />
                                    Mobile: 96660 31879<br />
                                    Ph: 040 - 66 51 51 51 ( Ext: 4666 )<br />
                                    Fax : 040 - 23 75 76 77<br /><br />
                                </div>
                                <div class="knowyourmanagers_tile_name" style="float:left;"> 
                                	<a href="JavaScript:newPopup('mailto:msatish@hotelgreenpark.com');">Msatish@hotelgreenpark.com</a>
                                	<div style="float:right"><img src="images/know_your_managers.png" width="20" /></div>
                                </div>
                            </div>
                            </td>
                          </tr>
                          <tr><td colspan="3" height="8"></td></tr>
                          
                          <tr>
                            <td height="136" class="color11" width="403" valign="top">
                                <div class="knowyourmanagers_tile_box">
                                    <div class="" style="top:10px; position:relative; padding:0px 0px 0px 5px">
                                        <strong style="text-transform:uppercase">Mr. GANESH BABU</strong><br />
                                        Dy. Manager- Purchase<br />
                                        Mobile: 85010 13338<br />
                                        Ph: 040 - 66 51 51 51 ( Ext: 4437 )<br />
                                        Fax : 040 - 23 75 76 77<br /><br />
                                    </div>
                                    <div class="knowyourmanagers_tile_name" style="float:left; "> 
                                        <a href="JavaScript:newPopup('mailto:ganesh.sv@hotelgreenpark.com');">Ganesh.sv@hotelgreenpark.com</a>
                                        <div style="float:right"><img src="images/know_your_managers.png" width="20" /></div>
                                    </div>
                                </div>
                            </td>
                            <td width="8"></td><td height="136" class="color11" valign="top">
                            <div class="knowyourmanagers_tile_box">
                                <div class="" style="top:10px; position:relative; padding:0px 0px 0px 5px">
                                    <strong>Mr. VAMSI KRISHNA</strong><br />
                                    Dy. Manager- Front Office<br />
                                    Mobile: 99481 75675<br />
                                    Ph: 040 - 66 51 51 51 ( Ext: 4450 )<br />
                                    Fax : 040 - 23 75 76 77<br /><br />
                                </div>
                                <div class="knowyourmanagers_tile_name" style="float:left;"> 
                                	<a href="JavaScript:newPopup('mailto:vamsi.krishna@hotelgreenpark.com');">Vamsi.krishna@hotelgreenpark.com</a>
                                	<div style="float:right"><img src="images/know_your_managers.png" width="20" /></div>
                                </div>
                            </div>
                            </td>
                          </tr>
                          <tr><td colspan="3" height="8"></td></tr>
                          
                          <tr>
                            <td height="136" class="color11" width="403" valign="top">
                                <div class="knowyourmanagers_tile_box">
                                    <div class="" style="top:10px; position:relative; padding:0px 0px 0px 5px">
                                        <strong style="text-transform:uppercase">Mr. SAI PRASAD</strong><br />
                                        Security Officer<br />
                                        Mobile: 98480 73410<br />
                                        Ph: 040 - 66 51 51 51 ( Ext: 4465 )<br />
                                        Fax : 040 - 23 75 76 77<br /><br />
                                        
                                    </div>
                                    <div class="knowyourmanagers_tile_name" style="float:left; "> 
                                        <a href="JavaScript:newPopup('mailto:saiprasad@hotelgreenpark.com');">Saiprasad@hotelgreenpark.com</a>
                                        <div style="float:right"><img src="images/know_your_managers.png" width="20" /></div>
                                    </div>
                                </div>
                            </td>
                            <td width="8"></td><td height="136" valign="top">
                            
                            </td>
                          </tr>
                          <tr><td colspan="3" height="8"></td></tr>
                          
                          
                          
                          
                        </table>

                      
                      
                      
                      
                      
                      
                   </td>
                </tr>
              </table></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>
</body>
</html>