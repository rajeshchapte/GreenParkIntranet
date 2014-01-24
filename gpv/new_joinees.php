<?php

ini_set('session.save_path', 'tmp');
session_start();
error_reporting(E_ALL ^ E_NOTICE);


include("../connect.php");
include("prp_info.php");

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="includes/styles1.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GreenPark Hotels and Resorts Intranet</title>
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
                    <td onclick="location.href='/greenparksample/8/gphyd/';" class="color2" height="136">
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
                  <tr>
                  <td onclick="location.href='<?=$prp_root;?>/new_joinees.php';" class="color3" height="136">
                    <div class="tile_box">
                    <div align="center" style="top:10px; position:relative"><img src="images/meeting_icon.png"  width="100" /></div>
                      <div class="tile_name">
                      New Joinees
                    </div></div>
                    </td>
                  </tr>
                </table>
              
              </td>
              <td width="76%" valign="top" class="admin_content_area">
              <h2>New Joinees</h2>
                <hr />

                <?php 
				if($delmsg!=''){
					echo $delmsg;
				}
				?>
                <div style="overflow:auto; height:400px;">
                <table width="100%" border="0" cellspacing="1" cellpadding="2" bgcolor="#CCCCCC">
                  <tr bgcolor="#999999" height="25"><td><strong>Name</strong></td><td><strong>Designation</strong></td><td><strong>Email</strong></td><td><strong>Contact</strong></td></tr>
                  <?php
				  $i = 1;
				  $newjns =  mysql_query("SELECT * FROM employee_directory WHERE joining_date BETWEEN SYSDATE( ) - INTERVAL 7 DAY AND SYSDATE( ) AND prp_code = $prp_id");
					    while($newjnsres = mysql_fetch_array($newjns)){
							
				  ?>
                  <tr bgcolor="#ececef" height="35">
                    <td width="25%"><?php echo $newjnsres[first_name]." ".$newjnsres[last_name]; ?></td>
                    <td width="25%" style="text-transform:capitalize"><?=$newjnsres[designation];?></td>
                    <td width="25%">
                    <?php echo $newjnsres[email_id];
					?>
                    </td>
                    <td width="25%">
                    <?php echo $newjnsres[contact_number]; ?>
                    </td>
                   
                  </tr>
                  <?php $i++; } ?>
                </table>
				</div><br />
                
                 
                
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