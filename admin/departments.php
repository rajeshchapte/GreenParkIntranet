<?php
ini_set('session.save_path', 'tmp');
session_start();
error_reporting(E_ALL ^ E_NOTICE);
include("../connect.php");
include("prp_info.php");
include("session_file.php");


if(isset($_REQUEST[delete_dept])){
	$dept_id = $_POST[dept_id];
	$delempfile = mysql_query("DELETE FROM department WHERE id = '$dept_id'");
	if($delempfile){
		$delmsg = "Department Deleted";
		//unlink($somefile);
	}else{
		$delmsg = "Fail";
	}
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
                </table>
              
              </td>
              <td width="76%" valign="top" class="admin_content_area">
              <h2>Departments Information</h2>
                <hr />

                <?php 
				if($delmsg!=''){
					echo $delmsg;
				}
				?>
                <div style="overflow:auto; height:450px;">
                <table width="100%" border="0" cellspacing="1" cellpadding="2" bgcolor="#CCCCCC">
                  <tr bgcolor="#999999" height="25"><td><strong>Department Name</strong></td><td><strong>Designation</strong></td><td><strong>Action</strong></td></tr>
                  <?php
				  $i = 1;
				  $depts =  mysql_query("SELECT * FROM department");
					    while($depts_res = mysql_fetch_array($depts)){
							
				  ?>
                  <tr bgcolor="#ececef" height="35">
                    <td width="40%"><?php echo $depts_res[department_name]//." ".$newjnsres[last_name]; ?></td>
                    <td width="40%" style="text-transform:capitalize"><?=$depts_res[department_description];?></td>
                   <td width="20%" align="right">
                      <div style="float:right">
                      <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" name="delete_dept_form">
                        <input type="hidden" name="dept_id" value="<?php echo $depts_res[id] ?>"  />                        
                        <input type="submit" name="delete_dept" value="Delete" class="ubutton" onclick="return confirm('Are you sure want to delete?');" />
                      </form></div>
                      
                      <div style="float:right"><form method="get" action="edit_department.php" name="edit_dept_form">
                        <input type="hidden" name="dept_id" value="<?php echo $depts_res[id] ?>"  />  
                        <input type="hidden" name="purl" value="<?=$_SERVER['SCRIPT_NAME'];?>"  />                  
                        <input type="submit" name="edit_dept" value="Edit" class="ubutton" />
                      </form>
                      </div>
                      
                    </td>
                   
                  </tr>
                  <?php $i++; } ?>
                </table>
				</div><br /><br />
                
                
                
                  <input type="button" onclick="location.href='create_department.php?purl=<?=$_SERVER['SCRIPT_NAME'];?>';"  class="ubutton" value="New Department" />
                
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