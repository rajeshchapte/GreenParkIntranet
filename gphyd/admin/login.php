<?php

ini_set('session.save_path', 'tmp');
session_start();
error_reporting(E_ALL ^ E_NOTICE);
include("../../connect.php");
include("prp_info.php");	


	$pass = $_POST['password'];
	//$pass = md5($pass);
	//echo $pass;
	
	$sqlsettings = "SELECT * from gp_user";
$resultsettings = mysql_query($sqlsettings);
$rowsettings = mysql_fetch_array($resultsettings);

	$msgEmail='';
	if 	(isset($_POST['user_id']))
	{
		$sqlLogin = "SELECT * from gp_user WHERE email_id='".mysql_real_escape_string(strtolower($_POST['user_id']))."' AND password='".mysql_real_escape_string($pass)."' AND role='hr' AND property_code = '$prp_id'" ;
		$resultLogin= mysql_query($sqlLogin);
		$row = mysql_fetch_array($resultLogin);
		
		
		if ($row['email_id'] == mysql_real_escape_string(strtolower($_POST['user_id'])) & $row['password'] == mysql_real_escape_string($pass) )
		{
			if($row['status'] == '1'){
			$_SESSION['email_id'] = stripslashes($row['email_id']);
			$_SESSION['role'] = stripslashes($row['role']);
			$_SESSION['property_code'] = stripslashes($row['property_code']);
			//echo $_SESSION['email_id'] . "= " .stripslashes($row['email_id']);;
			@header('LOCATION: index.php');
			exit();
			}else{
			$msgEmail = "<font style='font-family:Verdana; font-size:10px; font-weight:bold; color:#FF0000; border:0px dashed #FF0000 '>* Your account is inactive, please contact administrator</font>";
			}

		}
		else
			$msgEmail = "<font style='font-family:Verdana; font-size:10px; font-weight:bold; color:#FF0000; border:0px dashed #FF0000 '>* Invalid Login ID or Pawword</font>";
	}




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
    <?php //include("loginout_div.php"); ?>
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
                    <td onclick="location.href='<?=$prp_root; ?>/';" class="color6" height="136">
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
                 
                </table>
              
              </td>
              <td width="76%" valign="top" class="admin_content_area">
              <h2>Login</h2>
                <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" name="admin_login_form">
                <table width="100%" border="0" cellspacing="10" cellpadding="0">                  
                  <tr>
                    <td width="20%">User Id</td><td width="80%"><input type="text" name="user_id" id="user_id"  class="adm_inptext" value="sample@greenpark.com" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue"/></td>
                  </tr>
                  <tr>
                    <td>Password</td><td><input type="password" name="password" id="password" class="adm_inptext" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue" value="password" /></td>
                  </tr>
                  <tr>
                    <td></td><td><input type="submit" value="Login" name="submit_login" class="ubutton"  /></td>
                  </tr>
                  <tr>
                    <td></td><td ><a href="forgot_password.php">Forgot Password?</a><br /><br />
                    <?php
				if($msgEmail!=''){
					echo $msgEmail;
				}
				?>
                    </td>
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