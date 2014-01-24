<?php
error_reporting(E_ALL ^ E_NOTICE);

ini_set('session.save_path', 'tmp');
session_start();
ob_start();
include("../../connect.php");
include("prp_info.php");	
$url = $_GET['url'];

	//$pass = $_POST['password'];
	//$pass = md5($pass);
	//echo $pass;
	
	$sqlsettings = "SELECT * from gp_user";
$resultsettings = mysql_query($sqlsettings);
$rowsettings = mysql_fetch_array($resultsettings);

	$msgEmail='';
	if 	(isset($_POST['user_id']))
	{
		$sqlLogin = "SELECT * from gp_user WHERE email_id='".mysql_real_escape_string(strtolower($_POST['user_id']))."' AND property_code = '$prp_id'";
		$resultLogin= mysql_query($sqlLogin);
		$row = mysql_fetch_array($resultLogin);
		
		if ($row['email_id'] == mysql_real_escape_string(strtolower($_POST['user_id'])))
		{
		    $to  = $row['email_id'];
			//$headers .= 'To: HR Corp <rajeshc@globalnest.com>';
			$headers = "From: GreenPark Intranet <noreply@hotelgreenpark.com> \r\n";
			$headers .= 'MIME-Version: 1.0' . " \r\n";
			$headers .= 'Content-type: text/plain; charset=iso-8859-1' . "\r\n";
			//$headers .= 'Cc: srinivas@hotelgreenpark.com, itd.gpa@hotelgreenpark.com' . "\r\n";
			//$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";	
			$subject = "Your password from Greenpark Intranet";
			$message = "Dear ".$row['first_name']." ".$row['last_name'].", \n\nPlease find your password for GreenPark Intranet Application.\n\nUser Id: ".$to."\nPassword: ".$row['password'];		
			if(mail($to, $subject, $message, $headers)){
				echo "EMail sent";	
				header('LOCATION: index.php');
				exit();
			}
		}
		else
			$msgEmail = "<font style='font-family:Verdana; font-size:12px; font-weight:normal; color:#FF0000; border:0px dashed #FF0000'>* Please enter a valid User ID</font>";
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
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tr>
										
						<td width="100%" valign="top" class="admin_content_area" height="400">
              <h2>Forgot Pssword?</h2>
                <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" name="admin_login_form">
                <table width="100%" border="0" cellspacing="10" cellpadding="0">                  
                  <tr>
                    <td width="20%">User Id</td><td width="80%"><input type="text" name="user_id" id="user_id"  class="adm_inptext" value="sample@greenpark.com" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue"/></td>
                  </tr>
                  
                  <tr>
                    <td></td><td><input type="submit" value="Submit" name="submit_login" class="ubutton"  /></td>
                  </tr>
                  <tr>
                    <td></td><td >
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

