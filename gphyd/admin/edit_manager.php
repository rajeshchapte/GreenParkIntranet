<?php

ini_set('session.save_path', 'tmp');
session_start();
ob_start();
error_reporting(E_ALL ^ E_NOTICE);


include("../../connect.php");
include("prp_info.php");


$mid = $_GET[mid];

include("session_file.php");

if(isset($_REQUEST[cancel_upload])){
	header("Location: know_your_managers.php");
	}

date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d H:i:s', time());

include( 'function_kny.php');

if(isset($_REQUEST[edit_kym])){
	
	$m_first_name = $_POST[m_first_name];
	$m_last_name = $_POST[m_last_name];
	$m_email = $_POST[m_email];
	$m_mobile = $_POST[m_mobile];
	$m_phone = $_POST[m_phone];
	//$m_phone_extn = $_POST[m_phone_extn];
	$m_department = $_POST[m_department];
	$m_designation = $_POST[m_designation];


	
	if($_FILES['item_image']['name']!=''){
		
		echo "image is selected";
		
	
	// settings
	$max_file_size = 1024*2048; // 200kb
	$valid_exts = array('jpeg', 'jpg', 'png', 'gif');
	// thumbnail sizes
	$sizes = array( 200 => 200);
	$t_path = "kny_pics/";
	//if ($_SERVER['REQUEST_METHOD'] == 'POST' AND isset($_FILES['image'])) {
		if( $_FILES['item_image']['size'] < $max_file_size ){
			// get file extension
			$ext = strtolower(pathinfo($_FILES['item_image']['name'], PATHINFO_EXTENSION));
			if (in_array($ext, $valid_exts)) {
				/* resize image */
				foreach ($sizes as $w => $h) {
					$files[] = resize($w, $h);
					echo $files;
				}
	
			} else {
				$msg = 'Unsupported file';
			}
		} else{
			$msg = 'Please upload image smaller than 2MB';
		}
	//}

	if(isset($files)){
			foreach ($files as $image) {
				//echo "<img class='img' src='{$image}' /><br /><br />";
				$kny_save = mysql_query("UPDATE  know_your_managers SET  `m_first_name` =  '$m_first_name',
										`m_last_name` =  '$m_last_name',
										`m_email` =  '$m_email',
										`m_mobile` =  '$m_mobile',
										`m_phone` =  '$m_phone',
										`m_phone_extn` =  NULL,
										`m_fax` =  NULL,
										`m_department` =  '$m_department',
										`m_designation` =  '$m_designation',
										`m_pic` =  '$image',
										`prp_code` =  '$prp_id',
										`created_datetime` =  '$date' WHERE  id = $_GET[mid] ;");
			
					if($kny_save){
							move_uploaded_file($image,$path);
							echo "DONE";
							header("Location: know_your_managers.php");
					}else{
							echo "Fail".mysql_error();
						}
			}
		}
	}else{ 
	//echo "no image selected";
					$kny_save = mysql_query("UPDATE  know_your_managers SET  `m_first_name` =  '$m_first_name',
										`m_last_name` =  '$m_last_name',
										`m_email` =  '$m_email',
										`m_mobile` =  '$m_mobile',
										`m_phone` =  '$m_phone',
										`m_phone_extn` =  NULL,
										`m_fax` =  NULL,
										`m_department` =  '$m_department',
										`m_designation` =  '$m_designation',
										`prp_code` =  '$prp_id',
										`created_datetime` =  '$date' WHERE  id = $_GET[mid] ;");
			
					if($kny_save){
							//echo "DONE";
							header("Location: know_your_managers.php");
					}else{
							echo "Fail".mysql_error();
						}

	
	 }
	//}
}
	
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="includes/styles1.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GreenPark Hotels and Resorts Intranet</title>
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
<script type="text/javascript">
<!--
// Form validation code will come here.
function validate()
{
 
   if( document.myForm.m_first_name.value == "" )
   {
     alert( "Please provide your First Name!" );
     document.myForm.m_first_name.focus() ;
     return false;
   }
   else 
   {
   	var regex = /^[a-zA-Z ]{2,30}$/;
	var firstname = document.myForm.m_first_name;
    if (regex.test(firstname.value)) {
        
    }
    else {
		alert( "Please provide valid First Name!" );
		document.myForm.m_first_name.focus() ;
        return false;
    }
   }
   
    if( document.myForm.m_last_name.value == "" )
   {
     alert( "Please provide your Last Name!" );
     document.myForm.m_last_name.focus() ;
     return false;
   }
   else
   {
   	var regex = /^[a-zA-Z ]{2,30}$/;
	var lastname = document.myForm.m_last_name;
    if (regex.test(lastname.value)) {
        
    }
    else {
		alert( "Please provide valid Last Name!" );
        return false;
    }
   }
   
   if( document.myForm.m_email.value == "" )
   {
     alert( "Please provide your Email!" );
     document.myForm.m_email.focus() ;
     return false;
   }
    else 
   {
   	var email = document.myForm.m_email
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

		if (!filter.test(email.value)) {
		alert('Please provide a valid email address');
		email.focus;
		return false;
	   }
	}
	
	if( document.myForm.m_mobile.value == "" )
   {
     alert( "Please provide your Mobile!" );
     document.myForm.m_mobile.focus() ;
     return false;
   }
   else 
   {
   	var regex = /^[0-9]{10,15}$/;
	var mobile = document.myForm.m_mobile;
    if (regex.test(mobile.value)) {
        
    }
    else {
		alert( "Please provide valid Mobile Number!" );
        return false;
    }
   }
   
   /*if( document.myForm.m_fax.value == "" )
   {
     alert( "Please provide your Fax Number!" );
     document.myForm.m_fax.focus() ;
     return false;
   }*/
   
   if( document.myForm.m_designation.value == "" )
   {
     alert( "Please provide your Designation" );
     document.myForm.m_designation.focus() ;
     return false;
   }
   
   if( document.myForm.designation.value == "" )
   {
	 alert( "Please provide your Designation!" );
	 document.myForm.designation.focus() ;
	 return false;
   }
   
	if ( ( document.myForm.gender[0].checked == false ) && ( document.myForm.gender[1].checked == false ) ) 
	{
	alert ( "Please choose your Gender: Male or Female" ); 
	return false;
	}
	
	 if( document.myForm.emp_dept.value == "" )
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
   }
   
  
	
   return( true );
}
//-->
</script>
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
                  <td onclick="location.href='<?=$prp_root;?>/know_your_managers.php';" class="color4" height="136">
                     <div class="tile_box">
                    <div align="center" style="top:10px; position:relative"><img src="images/know_your_managers.png"  width="80" /></div>
                      <div class="tile_name">
                      Know Your Managers
                    </div></div>
                    </td>
                  </tr>
                </table>
              
              </td>
              <td width="76%" valign="top" class="admin_content_area">
              <h2>New Manager</h2>              
              <?php if(isset($msg)): ?>
			<p class='alert'><?php echo $msg ?></p>
		<?php endif ?>
                <hr />
                <?php
				$select_manager = mysql_query("Select * from know_your_managers WHERE id = '$mid'");
				$select_manager_res = mysql_fetch_array($select_manager);
				?>
                
                <form id="form1" name="myForm" method="POST" action="" enctype="multipart/form-data" >   
            
        
               
                
                <table width="100%" border="0" cellspacing="5" cellpadding="0">
                  <tr>
                     <td width="20%">First Name</td><td>
                       <input type="text" name="m_first_name" id="m_first_name" class="adm_inptext" value="<?=$select_manager_res[m_first_name]; ?>"  />
                     </td>
                  </tr>
                  <tr>
                     <td width="20%">Last Name</td><td>
                       <input type="text" name="m_last_name" id="m_last_name" class="adm_inptext"  value="<?=$select_manager_res[m_last_name]; ?>"  />
                     </td>
                  </tr>
                  <tr>
                     <td width="20%">Email Id</td><td>
                       <input type="text" name="m_email" id="m_email" class="adm_inptext" value="<?=$select_manager_res[m_email]; ?>"  />
                     </td>
                  </tr>
                  <tr>
                     <td width="20%">Mobile</td><td>
                       <input type="text" name="m_mobile" id="m_mobile" class="adm_inptext" value="<?=$select_manager_res[m_mobile]; ?>" />
                     </td>
                  </tr>
                  <tr>
                     <td width="20%">Phone</td><td>
                       <input type="text" name="m_phone" id="m_phone" class="adm_inptext" value="<?=$select_manager_res[m_phone]; ?>"  /><?php /*?>&nbsp;&nbsp;-&nbsp;&nbsp;
                       <input type="text" name="m_phone_extn" id="m_phone_extn" class="adm_inptext" style="width:60px;" value="<?=$select_manager_res[m_phone_extn]; ?>"   /><?php */?>
                     </td>
                  </tr>
                 <?php /*?> <tr>
                     <td width="20%">Fax</td><td>
                       <input type="text" name="m_fax" id="m_fax" class="adm_inptext" value="<?=$select_manager_res[m_fax]; ?>"  />
                     </td>
                  </tr><?php */?>
                  <tr>
                    <td width="20%">Department</td><td>
                      <div style="float:left">
                    
                    <select name="m_department" class="adm_select">
                    <option value="0">NONE</option>
                    <?php
					$dept = mysql_query("SELECT * FROM  `department`");
					while($deptres = mysql_fetch_array($dept)){
					?>  
                    <option value="<?=$deptres[id]?>"  <?php if ( $deptres[id] == $select_manager_res[m_department]) echo 'selected="selected"'; ?>><?=$deptres[department_name]?></option>
					<?php } ?>
                    </select></div>
                    <div style="float:left">&nbsp;&nbsp;&nbsp;<a href="create_department.php?purl=<?=$_SERVER['SCRIPT_NAME'];?>"><img src="images/add_icon.png" width="25" align="Create New Department" title="Create New Department"   /></a></div>
                    </td>
                  </tr> 
                  <tr>
                    <td width="20%">Designation</td><td>
                      <input type="text" name="m_designation" id="m_designation" class="adm_inptext" value="<?=$select_manager_res[m_last_name]; ?>"  />
                    </td>
                  </tr>
                  <tr>
                    <td width="20%">Manager Photo</td><td>
                      <img src="<?=$select_manager_res[m_pic]; ?>" width="120" /><br />
                      <input type="file" name="item_image" id="item_image" /> 
                    </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td><td align="right"><br />
                    <input type="submit" class="ubutton" name="edit_kym" value="Save Changes"  onclick="return(validate());"/>&nbsp;&nbsp;&nbsp;
                    <input type="submit" class="ubutton" name="cancel_upload" value="Cancel" /></td>
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