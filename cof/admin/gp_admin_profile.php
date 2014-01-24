<?php

ini_set('session.save_path', 'tmp');
session_start();
ob_start();
error_reporting(E_ALL ^ E_NOTICE);
include("../../connect.php");
include("prp_info.php");


include("session_file.php");



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
    <?php include("loginout_div.php"); ?>
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
                    <td onclick="location.href='<?=$home; ?>';" class="color2" height="136">
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
                  <?php include("property_tile.php"); ?>
                  <tr>
                    <td height="8"></td>
                  </tr>
                  <tr height="136">
                    <td onclick="location.href='<?=$prp_root;?>/';" class="color6" height="136">
                    <div class="tile_box">
                    <div align="center" style="top:50px; position:relative"><img src="images/admin_icon.png"  width="100" /></div>
                      <div class="tile_name">
                      Admin
                    </div></div>
                    </td>
                  </tr>
                  <tr>
                    <td height="8"></td>
                  </tr>
                  <tr>
                  <td onclick="location.href='<?=$prp_root;?>/gp_users.php';" class="color5" height="136">
                    <div class="tile_box">
                      <div align="center" style="top:15px; position:relative"><img src="images/users_icon.png"  width="80" /></div>
                        <div class="tile_name" style="text-transform:capitalize">
                            <?=$res_prp[property_name];?> Admin
                        </div>
                    </div>
                    </td>
                  </tr>
                </table>
              
              </td>
              <td width="76%" valign="top" class="admin_content_area">
              <h2>Admin Details</h2>
                <hr />

                <?php 
				if($delmsg!=''){
					echo $delmsg;
				}

				  
				  $i = 1;
				  $emps =  mysql_query("SELECT * FROM gp_user WHERE property_code = '$prp_id' AND id = '$select_user_res[id]'");
				  $empsres = mysql_fetch_array($emps);
							
				  ?>
                <div style="overflow:auto;">
                <table width="100%" border="0" cellspacing="1" cellpadding="2" bgcolor="#CCCCCC">
                  <tr height="25" bgcolor="#F2F2F2">
                  <td width="20%"><strong>Name : </strong></td><td width="80%"><?=$empsres[first_name]." ".$empsres[last_name];?></td></tr>
                  <tr bgcolor="#F2F2F2">
                  <td><strong>Emai Id : </strong></td><td><?php echo $empsres[email_id]; ?></td></tr>
                  <tr bgcolor="#F2F2F2">
                  <td><strong>Date of birth : </strong></td><td><?php echo date("d F Y",strtotime($empsres[dob])); ?></td></tr>
                  <tr bgcolor="#F2F2F2">
                  <td><strong>Gender</strong></td><td><?php echo $empsres[gender]; ?></td></tr>
                  <tr>
                  
                </table>
				</div><br />
                
                  <input type="button" onclick="location.href='edit_admin_profile.php?aid=<?php echo $empsres[id]; ?>';"  class="ubutton" value="Edit Details" />
                
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