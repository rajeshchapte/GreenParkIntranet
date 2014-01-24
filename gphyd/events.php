<?php
include("../connect.php");
include("prp_info.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="includes/styles1.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GreePark Hotels and Resorts Intranet</title>
</head>

<body>
<div class="wrapper">
  <div class="header">
    <?php /*?> <div class="logo_bar"> 
     <a href="/greenparksample/8/">
          <div class="logo_small" align="center"><img src="images/logo123.png" /><br />
           <div align="center" class="logo_name">GreenPark<br /><span style="font-size:17px;">Hotels</span></div>
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
        <td width="100%">
          <table width="100%" border="0" cellspacing="8" cellpadding="0">        
        
            <tr>
              <td width="33%" valign="top"> 
              
                <table width="100%" height="280" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td onclick="location.href='<?=$home;?>';" class="color2" height="136">
                    <div class="tile_box">
                    <div align="center" style="top:10px; position:relative"><img src="images/logo123.png"  width="80" /></div>
                      <div class="tile_name">
                      </div>
                    </div>
                    </td>
                  </tr>
                  <tr>
                    <td height="8"></td>
                  </tr>
                  <tr height="136">
                    <td onclick="location.href='<?=$prp_root;?>/';" class="color1" height="136">
                    <div class="tile_box">
                    <div align="center" style="top:10px; position:relative"><img src="images/hotel_img1.png"  width="80" /></div>
                      <div class="tile_name">
                      GreenPark<br />
                      Hyderabad</div>
                    </div>
                    </td>
                  </tr>
                  <tr>
                    <td height="8"></td>
                  </tr>
                  <tr height="136">
                    <td onclick="location.href='<?=$prp_root; ?>/events.php';" class="color16" height="136">
                    <div class="tile_box">
                    <div align="center" style="top:7px; position:relative"><img src="images/events_icon.png"  width="110" /></div>
                      <div class="tile_name">
                      Hotel Events / Staff Events</div>
                    </div>
                    </td>
                  </tr>
                  <tr>
                    <td height="8"></td>
                  </tr>
                  
                </table>
              
              </td>
              <td width="76%" valign="top">
              
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  
                  <tr>
                    <td>
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tr>
										
						<td width="100%"  height="136">
                     
                        <div style="width:190px; height:136px; margin:0px 8px 8px 0px; float:left;" class="color15"  onclick="location.href='hotel_events.php';">
                        <div class="tile_box">
                    		<div align="center" style="top:7px; position:relative"><img src="images/events_icon.png"  width="100" /></div>
                          		<div class="tile_name" style="text-transform:capitalize">
                            		Hotel Events
                         		</div>
                      		</div>
                        </div>
                        
                        <div style="width:190px; height:136px; margin:0px 8px 8px 0px; float:left;" class="color18"  onclick="location.href='staff_events.php';">
                        <div class="tile_box">
                    		<div align="center" style="top:7px; position:relative"><img src="images/events_icon.png"  width="100" /></div>
                          		<div class="tile_name" style="text-transform:capitalize">
                            		Staff Events
                         		</div>
                      		</div>
                        </div>
                       
                        </td>
						</tr>
                               
                </table>
                    </td>
                  </tr>
                </table>

                
              </td>
            </tr>
            

            
          </table>
        </td>
       </tr>
    </table> 
    </div>
    
  </div>
  </div>
</div>
</body>
</html>