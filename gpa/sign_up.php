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

date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d H:i:s', time());

	$msgEmail='';
	if 	(isset($_POST['user_id']))
	{
		$sqlLogin = "SELECT * from gp_user WHERE email_id='".mysql_real_escape_string(strtolower($_POST['user_id']))."' AND property_code = '$prp_id'";
		$resultLogin= mysql_query($sqlLogin);
		$row = mysql_fetch_array($resultLogin);
		
		if (mysql_num_rows($resultLogin) == 0 )
		{
		
		$first_name = $_POST[first_name];
		$last_name = $_POST[last_name];
		$user_id = $_POST[user_id];
		$password = $_POST[password];
		$birth_date = strtotime($_POST[birth_date]);
		$birth_date = date('Y-m-d', $birth_date);
		$gender = $_POST[gender];
			
			$inserUser = mysql_query("INSERT INTO gp_user (`id`, `first_name`, `last_name`, `email_id`, `password`, `location`, `dob`, `property`, `property_code`, `status`, `role`, `created_datetime`) VALUES (NULL, '$first_name', '$last_name', '$user_id', '$password', '$res_prp[location]', '$birth_date', '$res_prp[property_name]', '$prp_id', '1', 'user', '$date');");
			
			if($inserUser){
				
			$sqlLogin = "SELECT * from gp_user WHERE email_id='".mysql_real_escape_string(strtolower($_POST['user_id']))."' AND password='".mysql_real_escape_string($pass)."' AND property_code = '$prp_id'" ;
		$resultLogin= mysql_query($sqlLogin);
		$row = mysql_fetch_array($resultLogin);

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
			}
		}
		else
			$msgEmail = "<font style='font-family:Verdana; font-size:11px; font-weight:bold; color:#FF0000; border:0px dashed #FF0000 '>* Email Id entered is already exists. Please choose another email Id</font>";
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
<script type="text/javascript">
<!--
// Form validation code will come here.
function validate()
{
 
   if( document.myForm.first_name.value == "" )
   {
     alert( "Please provide your First Name!" );
     document.myForm.first_name.focus() ;
     return false;
   }
   else 
   {
   	var regex = /^[a-zA-Z ]{2,30}$/;
	var firstname = document.myForm.first_name;
    if (regex.test(firstname.value)) {
        
    }
    else {
		alert( "Please provide valid First Name!" );
		document.myForm.first_name.focus() ;
        return false;
    }
   }
   
    if( document.myForm.last_name.value == "" )
   {
     alert( "Please provide your Last Name!" );
     document.myForm.last_name.focus() ;
     return false;
   }
   else
   {
   	var regex = /^[a-zA-Z ]{2,30}$/;
	var lastname = document.myForm.last_name;
    if (regex.test(lastname.value)) {
        
    }
    else {
		alert( "Please provide valid Last Name!" );
        return false;
    }
   }
   
   if( document.myForm.user_id.value == "" )
   {
     alert( "Please provide your Email!" );
     document.myForm.user_id.focus() ;
     return false;
   }
    else 
   {
   	var email = document.myForm.user_id
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

		if (!filter.test(email.value)) {
		alert('Please provide a valid email address');
		email.focus;
		return false;
	   }
	}
	
	if( document.myForm.password.value == "" )
   {
     alert( "Please enter password!" );
     document.myForm.password.focus() ;
     return false;
   }
   
   if( document.myForm.c_password.value == "" )
   {
     alert( "Please enter password!" );
     document.myForm.c_password.focus() ;
     return false;
   }
   
   if( document.myForm.c_password.value !=  document.myForm.password.value )
   {
     alert( "Password and confirm password do not match!" );
     document.myForm.c_password.focus() ;
     return false;
   }
	
	/*if( document.myForm.mobile_no.value == "" )
   {
     alert( "Please provide your Mobile!" );
     document.myForm.mobile_no.focus() ;
     return false;
   }
   else 
   {
   	var regex = /^[0-9]{10,15}$/;
	var mobile = document.myForm.mobile_no;
    if (regex.test(mobile.value)) {
        
    }
    else {
		alert( "Please provide valid Mobile Number!" );
        return false;
    }
   }
   
   if( document.myForm.address.value == "" )
   {
     alert( "Please provide your Address!" );
     document.myForm.address.focus() ;
     return false;
   }*/
   
   if( document.myForm.birth_date.value == "" )
   {
     alert( "Please provide your Date of birth!" );
     document.myForm.birth_date.focus() ;
     return false;
   }
   
  /* if( document.myForm.designation.value == "" )
   {
	 alert( "Please provide your Designation!" );
	 document.myForm.designation.focus() ;
	 return false;
   }*/
   
	if ( ( document.myForm.gender[0].checked == false ) && ( document.myForm.gender[1].checked == false ) ) 
	{
	alert ( "Please choose your Gender: Male or Female" ); 
	return false;
	}
	
	/* if( document.myForm.emp_dept.value == "" )
   {
	 alert( "Please select Department!" );
	 document.myForm.emp_dept.focus() ;
	 return false;
   }
   
   if( document.myForm.joining_date.value == "" )
   {
     alert( "Please provide your Date of joining!" );
     document.myForm.joining_date.focus() ;
     return false;
   }*/
   
  
	
   return( true );
}
//-->
</script>

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
              <h2>Sign Up</h2>
                <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" name="myForm">
                <table width="100%" border="0" cellspacing="10" cellpadding="0">    
                  <tr>
                    <td>First Name</td>
                    <td><input type="text" name="first_name" id="first_name"  class="adm_inptext" /></td>
                  </tr>              
                  <tr>
                    <td>Last Name</td>
                    <td><input type="text" name="last_name" id="last_name"  class="adm_inptext" /></td>
                  </tr>              
                  <tr>
                    <td width="20%">User Id</td><td width="80%"><input type="text" name="user_id" id="user_id"  class="adm_inptext" /></td>
                  </tr>
                  <tr>
                    <td>Password</td><td><input type="password" name="password" id="password" class="adm_inptext"  /></td>
                  </tr>
                  <tr>
                    <td>Confirm Password</td><td><input type="password" name="c_password" id="c_password" class="adm_inptext" /></td>
                  </tr>
                  <tr>
                    <td width="20%">Date of Birth</td><td>
                      <input type="text" name="birth_date" id="birth_date" class="adm_inptext"  />
                    </td>
                  </tr>
                  <tr>
                    <td width="20%">Gender</td><td>
                      <input type="radio" name="gender" id="genderm" value="Male"  /><label for="genderm">Male</label>&nbsp;&nbsp;&nbsp;
                      <input type="radio" name="gender" id="genderf"  value="Female" /><label for="genderf">Female</label>
                    </td>
                  </tr>   
                  <tr>
                    <td></td><td><input type="submit" value="Sign Up" name="submit_login" class="ubutton"  onclick="return(validate());" /></td>
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
      </div>


      
    </ul>
  </div><!--end dashboard-->

</div>
<!--====================================end demo wrapper================================================-->
  <script src="js/jquery-1.8.2.min.js"></script>
  <script src="js/scripts.js"></script>
    
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css" />
<script>
$(function() {
$( "#birth_date" ).datepicker({
changeMonth: true,
changeYear: true
});
});

</script>

</body></html>


