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
	

if(isset($_REQUEST[cancel])){
	header("Location: innovation.php");
	}

date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d H:i:s', time());

if(isset($_REQUEST[save_inv])){

	$inv_title = $_POST[inv_title];
	$inv_desc = $_POST[inv_desc];
	$inv_add = mysql_query("INSERT INTO `gp_intranetdb`.`innovations` (`id`, `innovation_title`, `innovation_desc`, `prp_code`, `created_datetime`) VALUES (NULL, '$inv_title', '$inv_desc', NULL, '$date');");

		if($inv_add){ 
		echo "done";
		header("Location: innovation.php");
		}
	//}
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
                  <td onclick="location.href='<?=$admin_home;?>/innovation.php';" class="color5" height="136">
                    <div class="tile_box">
                    <div align="center" style="top:7px; position:relative"><img src="images/innovation.png"  width="65" /></div>
                      <div class="tile_name">
                      Innovation
                    </div></div>
                    </td>
                  </tr>
                </table>
              
              </td>
              <td width="76%" valign="top" class="admin_content_area">
              <h2>New Innovation</h2>
                <hr />
                <form id="form1" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" >   
            
        
                
                
                <table width="100%" border="0" cellspacing="5" cellpadding="0">
                  <tr>
                    <td width="20%">Innovation Title</td><td><input type="text" name="inv_title" id="inv_title" class="adm_inptext"  /></td>
                  </tr>
                  <tr>
                    <td width="20%">Description</td><td><input type="text" name="inv_desc" id="inv_desc" class="adm_inptext"  /></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td><td align="right"><br /><input type="submit" class="ubutton" name="save_inv" value="Save" />&nbsp;&nbsp;&nbsp;
                    <input type="submit" class="ubutton" name="cancel" value="Cancel" /></td>
                  </tr>
                </table>

                  
                </form>
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