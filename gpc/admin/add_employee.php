<?php

ini_set('session.save_path', 'tmp');
session_start();
ob_start();
error_reporting(E_ALL ^ E_NOTICE);


include("../../connect.php");
include("prp_info.php");



include("session_file.php");

if(isset($_REQUEST[cancel_upload])){
	@header("Location: emp_dir.php");
	}

date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d H:i:s', time());

$emp_dir =  mysql_query("SELECT MAX(id) as idm FROM employee_directory WHERE prp_code = $prp_id");
$emp_dir_res = mysql_fetch_array($emp_dir);
$maxid = $emp_dir_res[idm]+1;



if(isset($_REQUEST[upload_emp])){
	
	$fist_name = $_POST[first_name];
	$last_name = $_POST[last_name];
	$email_id = $_POST[email_id];
	$mobile_no = $_POST[mobile_no];
	$address = $_POST[address];
	$birth_date = strtotime($_POST[birth_date]);
	$birth_date = date('Y-m-d', $birth_date);
	$designation = $_POST[designation];
	$gender = $_POST[gender];
	$emp_dept = $_POST[emp_dept];
	$joining_date =  strtotime($_POST[joining_date]);
	$joining_date = date('Y-m-d', $joining_date);
	
	if($_FILES['emp_img']['name']!=''){
	$max_file_size = 1024*2048;
				if( $_FILES['emp_img']['size'] > $max_file_size ){
					$error_msg = "File size exceeds maximun limit of 2MB.";
				}else{
				$t_path = "emp_pic_dir/"; //This is the directory where images will be saved 
				$fname = basename( $_FILES['emp_img']['name']); 
				$array=explode(".",$fname,2);
				$ext=".".$array[1]; //to get the proper extension of the file
				$rfile="emppic_".$maxid; //To get the name of the image
				$nfile=$rfile.$ext; //To change the new name with proper extension
				$t_path=$t_path.$nfile; //to get the path  where the file will be uploaded
				$profile_pic=$t_path;
				echo $profile_pic;
			
				echo $joining_date;
				
				
				//echo $polc_title."<br>".$polc_text."<br>".$polc_category;
				
				$emp_save = mysql_query("INSERT INTO `employee_directory` (`id`,  `prp_code`, `first_name`, `last_name`, `gender`, `email_id`, `contact_number`, `address`, `birth_date`, `joining_date`, `designation`, `emp_pic`, `created_datetime`, `modified_datetime`, `departmentid`) VALUES (NULL, '$prp_id','$fist_name', '$last_name', '$gender', '$email_id', '$mobile_no', '$address', '$birth_date', '$joining_date', '$designation', '$profile_pic', '$date', '$date','$emp_dept');");
			
					if($emp_save){ 
						move_uploaded_file($_FILES['emp_img']['tmp_name'],$t_path);
						header("Location: emp_dir.php");
					}else{
						echo "Fail".mysql_error();
					}
				}
	}else{
				$emp_save = mysql_query("INSERT INTO `employee_directory` (`id`,  `prp_code`, `first_name`, `last_name`, `gender`, `email_id`, `contact_number`, `address`, `birth_date`, `joining_date`, `designation`, `emp_pic`, `created_datetime`, `modified_datetime`, `departmentid`) VALUES (NULL, '$prp_id','$fist_name', '$last_name', '$gender', '$email_id', '$mobile_no', '$address', '$birth_date', '$joining_date', '$designation', NULL, '$date', '$date','$emp_dept');");
			
					if($emp_save){ 
						header("Location: emp_dir.php");
					}else{
						echo "Fail".mysql_error();
					}
		
	}
}
	

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="includes/styles1.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GreenPark Hotels and Resorts Intranet</title>

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
	
	if( document.myForm.mobile_no.value == "" )
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
   }
   
   if( document.myForm.birth_date.value == "" )
   {
     alert( "Please provide your Date of birth!" );
     document.myForm.birth_date.focus() ;
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
                  <td onclick="location.href='<?=$prp_root;?>/emp_dir.php';" class="color15" height="136">
                    <div class="tile_box">
                    <div align="center" style="top:10px; position:relative"><img src="images/directory_icon.png"  width="80" /></div>
                      <div class="tile_name">
                      Employee Directory
                    </div></div>
                    </td>
                  </tr>
                </table>
              
              </td>
              <td width="76%" valign="top" class="admin_content_area">
              <h2>Create New Employee</h2>
                <hr />
                <form id="form1" method="POST" action="" name="myForm" enctype="multipart/form-data"  >   
            
        
                
                
                <table width="100%" border="0" cellspacing="5" cellpadding="0">
                  <tr>
                    <td width="20%">First Name</td><td><input type="text" name="first_name" id="first_name" class="adm_inptext"  /></td>
                  </tr>
                  <tr>
                    <td width="20%">Last Name</td><td>
                      <input type="text" name="last_name" id="last_name" class="adm_inptext"  />
                    </td>
                  </tr>
                  <tr>
                    <td width="20%">Email Id</td><td>
                      <input type="text" name="email_id" id="email_id" class="adm_inptext"  />
                    </td>
                  </tr>
                  <tr>
                    <td width="20%">Mobile No</td><td>
                      <input type="text" name="mobile_no" id="mobile_no" class="adm_inptext"  />
                    </td>
                  </tr>
                  <tr>
                    <td width="20%" valign="top">Address</td><td>
                      <textarea name="address" id="address" class="adm_inptext" style="height:60px;"></textarea>
                    </td>
                  </tr>
                  <tr>
                    <td width="20%">Date of Birth</td><td>
                      <input type="text" name="birth_date" id="birth_date" class="adm_inptext"  />
                    </td>
                  </tr>
                  <tr>
                    <td width="20%">Designation</td><td>
                      <input type="text" name="designation" id="designation" class="adm_inptext"  />
                    </td>
                  </tr>
                  <tr>
                    <td width="20%">Gender</td><td>
                      <input type="radio" name="gender" id="genderm" value="Male"  /><label for="genderm">Male</label>&nbsp;&nbsp;&nbsp;
                      <input type="radio" name="gender" id="genderf"  value="Female" /><label for="genderf">Female</label>
                    </td>
                  </tr>   
                  <tr>
                    <td width="20%">Department</td><td>
                      <div style="float:left">
                    
                    <select name="emp_dept" class="adm_select">
                    <?php
					$dept = mysql_query("SELECT * FROM  `department`");
					while($deptres = mysql_fetch_array($dept)){
					?>  
                    <option value="<?=$deptres[id]?>"><?=$deptres[department_name]?></option>
					<?php } ?>
                    </select></div>
                    <div style="float:left">&nbsp;&nbsp;&nbsp;<a href="create_department.php"><img src="images/add_icon.png" width="25" align="Create New Department" title="Create New Department"   /></a></div>
                    </td>
                  </tr> 
                  <tr>
                  <td width="20%">Date of Joining</td><td>
                      <input type="text" name="joining_date" id="joining_date"  class="adm_inptext"  />
                     
                    </td>        
                    </tr>     
                  <tr>
                  <td width="20%">Employee Photo</td><td>
                      <input type="file" name="emp_img" id="emp_img"   />
                      <span style="color:red;"> <?php
					   if(isset($error_msg)){
						  echo $error_msg;   
					   }
					   ?></span>
                      </td>        
                    </tr>     
                  <tr>
                    <td>&nbsp;</td><td align="right"><br />
                    <input type="submit" class="ubutton" name="upload_emp" value="Save" onclick="return(validate());" />&nbsp;&nbsp;&nbsp;
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

</body>
</html>