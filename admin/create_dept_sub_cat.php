<?php
error_reporting(E_ALL ^ E_NOTICE);

ini_set('session.save_path', 'tmp');
session_start();
ob_start();

include("../connect.php");
include("prp_info.php");
include("session_file.php");
$dept_id = $_GET[dept_id];

if(isset($_REQUEST[cancel])){
	header("Location: ".$_GET[purl]."?dept_id=".$dept_id);
	}

				//$date = new DateTime();
				//echo $date->format('Y-m-d H:i:s');
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d H:i:s', time());



if(isset($_REQUEST[save_dept])){
//,,
	$dept_id = $_POST[dept_id];
	$sub_cat_name = $_POST[sub_cat_name];
	$sub_cat_desc = $_POST[sub_cat_desc];
	$dept_add = mysql_query("INSERT INTO dept_sub_cat (`id`, `dept_id`, `sub_cat_name`, `sub_cat_desc`, `created_datetime`) VALUES (NULL, '$dept_id', '$sub_cat_name', '$sub_cat_desc','$date');");

		if($dept_add){ 
		echo "done";
		header("Location: ".$_GET[purl]."?dept_id=".$dept_id);
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
<script type="text/javascript">
<!--
// Form validation code will come here.
function validate()
{
 
   if( document.myForm.dept_name.value == "" )
   {
     alert( "Please provide your dept_name!" );
     document.myForm.dept_name.focus() ;
     return false;
   }
   if( document.myForm.dept_desc.value == "" )
   {
     alert( "Please provide your dept desc!" );
     document.myForm.dept_desc.focus() ;
     return false;
   } 

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
                  <td onclick="location.href='<?=$admin_home;?>/departments.php';" class="color19" height="136">
                    <div class="tile_box">
                    <div align="center" style="top:10px; position:relative"><img src="images/departments_icon.png"  width="80" /></div>
                      <div class="tile_name">
                      Departments
                    </div></div>
                    </td>
                  </tr>
                  <tr>
                    <td height="8"></td>
                  </tr>
                  <tr>
                  <td onclick="location.href='<?=$admin_home;?>/departments.php';" class="color19" height="136">
                    <div class="tile_box">
                    <div align="center" style="top:10px; position:relative"><img src="images/departments_icon.png"  width="80" /></div>
                      <div class="tile_name">
                      Sub Departments
                    </div></div>
                    </td>
                  </tr>
                </table>
              
              </td>
              <td width="76%" valign="top" class="admin_content_area">
              <h2>Create New Sub Department</h2>
                <hr />
                <form id="form1" name="myForm" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data"  >   
            
        
                
                
                <table width="100%" border="0" cellspacing="5" cellpadding="0">
                  <tr>
                    <td width="25%">Department</td><td>
                    <div style="float:left">
                    
                    <select name="dept_id" class="adm_select">
                    <?php
					$depts = mysql_query("SELECT * FROM department");
					while($depts_res = mysql_fetch_array($depts)){						
					
					?>  <option value="<?=$depts_res[id]?>"  <?php if ( $depts_res[id] == $dept_id ) echo 'selected="selected"'; ?>><?=$depts_res[department_name]?></option><?php } ?>
                    </select></div>
                    <div style="float:left">&nbsp;&nbsp;&nbsp;<a href="create_department.php"><img src="images/add_icon.png" width="25" align="Create New Category" title="Create New Category"   /></a></div>
                    </td>
                  </tr>
                  <tr>
                    <td width="20%">New Sub Department</td><td><input type="text" name="sub_cat_name" id="sub_cat_name" class="adm_inptext"  /></td>
                  </tr>
                  <tr>
                    <td width="20%">Description</td><td><input type="text" name="sub_cat_desc" id="sub_cat_desc" class="adm_inptext"  /></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td><td align="right"><br />
                    <input type="submit" class="ubutton" name="save_dept" value="Save"  onclick="return(validate());"/>&nbsp;&nbsp;&nbsp;
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