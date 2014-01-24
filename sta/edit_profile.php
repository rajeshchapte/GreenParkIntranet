<?php

ini_set('session.save_path', 'tmp');
session_start();
ob_start();
error_reporting(E_ALL ^ E_NOTICE);
$url = $_SERVER['REQUEST_URI'];


include("../connect.php");
include("prp_info.php");
include("session_file.php");
$url = $_GET['url'];

if(isset($_REQUEST[cancel_upload])){
	header("Location: user_profile.php");
	}


if(isset($_REQUEST[upload_emp])){
	

	$first_name = $_POST[first_name];
	$last_name = $_POST[last_name];
	$email_id = $_POST[email_id];
	$password = $_POST[password];
	$birth_date = strtotime($_POST[birth_date]);
	$birth_date = date('Y-m-d', $birth_date);
	$gender = $_POST[gender];
		
	$inserUser = mysql_query("UPDATE gp_user SET `first_name` = '$first_name',
							`last_name` = '$last_name',
							`email_id` = '$email_id',
							`password` = '$password',
							`dob` = '$birth_date',
							`gender` = '$gender' WHERE id = '$select_emp_res[id]' AND property_code = '$prp_id';");
		
		if($inserUser){
			
			header('LOCATION: user_profile.php');
			//exit();
		}else{
			$errorMsg = "Error in editing";
		}
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
   
   if( document.myForm.email_id.value == "" )
   {
     alert( "Please provide your Email!" );
     document.myForm.email_id.focus() ;
     return false;
   }
    else 
   {
   	var email = document.myForm.email_id
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
   
   /*if( document.myForm.designation.value == "" )
   {
	 alert( "Please provide your Designation!" );
	 document.myForm.designation.focus() ;
	 return false;
   }*/
   
	/*if ( ( document.myForm.gender[0].checked == false ) && ( document.myForm.gender[1].checked == false ) ) 
	{
	alert ( "Please choose your Gender: Male or Female" ); 
	return false;
	}*/
	
	 /*if( document.myForm.emp_dept.value == "" )
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
<?php include("loginout_div.php"); ?> 
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
										
						<td width="76%" valign="top" class="admin_content_area">
              <h2>Edit User Details</h2>
                <hr />
                <?php
				  $user =  mysql_query("SELECT * FROM gp_user WHERE property_code = '$prp_id' AND id = '$select_emp_res[id]'");
				  $userres = mysql_fetch_array($user);
				  
				?>
                <form id="form1" method="POST" action="" name="myForm" enctype="multipart/form-data"  >   
                <table width="100%" border="0" cellspacing="5" cellpadding="0">
                  <tr>
                    <td width="20%">First Name</td><td><input type="text" name="first_name" id="first_name" class="adm_inptext" value="<?=$userres[first_name];?>" /></td>
                  </tr>
                  <tr>
                    <td width="20%">Last Name</td><td>
                      <input type="text" name="last_name" id="last_name" class="adm_inptext" value="<?=$userres[last_name];?>"  />
                    </td>
                  </tr>
                  <tr>
                    <td width="20%">Email Id</td><td>
                      <input type="text" name="email_id" id="email_id" class="adm_inptext" value="<?=$userres[email_id];?>"  />
                    </td>
                  </tr>
                  <tr>
                    <td>Password</td><td><input type="password" name="password" id="password" class="adm_inptext"  value="<?=$userres[password];?>" /></td>
                  </tr>
                  <tr>
                    <td width="20%">Date of Birth</td><td>
                      <input type="text" name="birth_date" id="birth_date" class="adm_inptext" value="<?=date("m/d/Y",strtotime($userres[dob]));?>"  />
                    </td>
                  </tr>
                  <tr>
                    <td width="20%">Gender</td><td>
                      <input type="radio" name="gender" id="genderm" value="Male"  <?php echo $userres[gender] == 'Male' ? 'checked' : null?> /><label for="genderm">Male</label>&nbsp;&nbsp;&nbsp;
                      <input type="radio" name="gender" id="genderf"  value="Female"  <?php echo $userres[gender] == 'Female' ? 'checked' : null?>/><label for="genderf">Female</label>
                    </td>
                  </tr>   
                  <tr>
                    <td>&nbsp;</td><td align="right"><br />
                    <input type="submit" class="ubutton" name="upload_emp" value="Save" onclick="return(validate());" />&nbsp;&nbsp;&nbsp;
                    <input type="submit" class="ubutton" name="cancel_upload" value="Cancel" /></td>
                  </tr>
                 <tr>
                  <td></td><td>
                  <?php
                    if($errorMsg!=''){
                        echo $errorMsg;
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
$( "#joining_date" ).datepicker({
changeMonth: true,
changeYear: true
});
});

 $(function() {
$( "#birth_date" ).datepicker({
changeMonth: true,
changeYear: true
});
});

</script>

</body></html>


