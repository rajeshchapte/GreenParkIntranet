<?php

ini_set('session.save_path', 'tmp');
session_start();
ob_start();
error_reporting(E_ALL ^ E_NOTICE);

if ($_SESSION['email_id'] == '' && $_SESSION['role'] != 'admin')
  {
	header('LOCATION: logout.php');	
  }

include("../connect.php");
include("prp_info.php");

if(isset($_REQUEST[delete_sop])){
	$sopdelid = $_POST[sopid];
	$delsopfile = mysql_query("DELETE FROM sops WHERE id = $sopdelid");
	if($delsopfile){
		$delmsg = "SOP File Deleted";
		//unlink($somefile);
	}
}


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
                    <td onclick="location.href='<?=$admin_home;?>/';" class="color6" height="136">
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
                  <td onclick="location.href='<?=$admin_home;?>/sop.php';" class="color1" height="136">
                    <div class="tile_box">
                    <div align="center" style="top:10px; position:relative"><img src="images/sop_icon.png"  width="100" /></div>
                      <div class="tile_name">
                      SOP's
                    </div></div>
                    </td>
                  </tr>
                </table>
              
              </td>
              <td width="76%" valign="top">
              <div style="width:190px; height:136px; margin:0px 8px 8px 0px; float:left;" onclick="location.href='<?=$admin_home; ?>/documented_sop.php';" class="color1">
                <div class="tile_box">
                    <div align="center" style="top:15px; position:relative"><img src="images/sop_icon.png"  width="90" /></div>
                        <div class="tile_name" style="text-transform:capitalize">
                            Documented SOP's
                        </div>
                    </div>
                </div>
                <div style="width:190px; height:136px; margin:0px 8px 8px 0px; float:left;" onclick="location.href='<?=$admin_home; ?>/animated_sop.php';" class="color1">
                <div class="tile_box">
                    <div align="center" style="top:15px; position:relative"><img src="images/sop_icon.png"  width="90" /></div>
                        <div class="tile_name" style="text-transform:capitalize">
                            Animated SOP's
                        </div>
                    </div>
                </div>
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