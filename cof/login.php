<?php

ini_set('session.save_path', 'tmp');
session_start();
error_reporting(E_ALL ^ E_NOTICE);
include("../connect.php");
include("prp_info.php");	
$url = $_GET['url'];

	$pass = $_POST['password'];
	//$pass = md5($pass);
	//echo $pass;
	
	$sqlsettings = "SELECT * from gp_user";
$resultsettings = mysql_query($sqlsettings);
$rowsettings = mysql_fetch_array($resultsettings);

	$msgEmail='';
	if 	(isset($_POST['user_id']))
	{
		$sqlLogin = "SELECT * from gp_user WHERE email_id='".mysql_real_escape_string(strtolower($_POST['user_id']))."' AND password='".mysql_real_escape_string($pass)."' AND  property_code = '$prp_id'" ;
		$resultLogin= mysql_query($sqlLogin);
		$row = mysql_fetch_array($resultLogin);
		
		if ($row['email_id'] == mysql_real_escape_string(strtolower($_POST['user_id'])) & $row['password'] == mysql_real_escape_string($pass) )
		{
			if($row['status'] == '1'){
			$_SESSION['email_id'] = stripslashes($row['email_id']);
			$_SESSION['role'] = stripslashes($row['role']);
			$_SESSION['property_code'] = stripslashes($row['property_code']);
			$_SESSION['user_id'] = stripslashes($row['id']);
			//echo $_SESSION['email_id'] . "= " .stripslashes($row['email_id']);;
			
			if($url!='') 
			   header('LOCATION: '.$url); // holds url for last page visited.
			else 			   
			   header('LOCATION: index.php');
			exit();
			}else{
			$msgEmail = "<font style='font-family:Verdana; font-size:10px; font-weight:bold; color:#FF0000; border:0px dashed #FF0000 '>* Your account is inactive, please contact administrator</font>";
			}

		}
		else
			$msgEmail = "<font style='font-family:Verdana; font-size:10px; font-weight:bold; color:#FF0000; border:0px dashed #FF0000 '>* Invalid Login ID or Pawword</font>";
	}




?>


<!DOCTYPE html>
<!-- saved from url=(0064)http://sarasoueidan.com/blog/windows8-animations/demo/index.html -->
<html class=" js canvas canvastext geolocation crosswindowmessaging websqldatabase indexeddb hashchange historymanagement draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions  video audio localstorage sessionstorage webworkers applicationcache svg smil svgclippaths   fontface"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>GreePark Hotels and Resorts Intranet</title>
  <link href="includes/styles1.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="includes/styles_w.css">
  <script src="js/modernizr-1.5.min.js"></script>

</head>

<body>
  <!--===============================Start Demo====================================================-->
<div class="demo-wrapper">
<!-- classnames for the pages should include: 1) type of page 2) page name-->
  <div class="s-page random-restored-page">
    <h2 class="page-title">Some minimized App</h2>
    <div class="close-button s-close-button">x</div>
  </div>
  <div class="s-page custom-page">
    <h2 class="page-title">Thank You!</h2>
    <div class="close-button s-close-button">x</div>
  </div>
  <div class="r-page random-r-page">

    <div class="page-content">
      <h2 class="page-title">App Screen</h2>
      
    </div>
    
    <div class="close-button r-close-button">x</div>
  </div>
<!--each tile should specify what page type it opens (to determine which animation) and the corresponding page name it should open-->
  <div class="dashboard clearfix">
    <ul class="tiles">
      <div class="col1 clearfix">
        <li class="tile tile-big tile-11 slideTextUp" data-page-type="no" data-page-name="no" onclick="location.href='<?=$home;?>';">
          <div><img src="images/logo123.png"  width="100" /></div>
          <div><p class="prp_font">HOME</p></div>
        </li>
        
        <?php include("property_tile.php"); ?>

      </div>

      <div class="col4 clearfix">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tr>
										
						<td width="100%" valign="top" class="admin_content_area">
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
                    <td></td><td ><a href="forgot_password.php?url=<?=$url;?>">Forgot Password?</a> | <a href="sign_up.php?url=<?=$url;?>">Sing Up</a><br /><br />
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
      </div>


      
    </ul>
  </div><!--end dashboard-->

</div>
<!--====================================end demo wrapper================================================-->
  <script src="js/jquery-1.8.2.min.js"></script>
  <script src="js/scripts.js"></script>
    

</body></html>


