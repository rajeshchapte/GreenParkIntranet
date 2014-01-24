<?php

ini_set('session.save_path', 'tmp');
session_start();
ob_start();
error_reporting(E_ALL ^ E_NOTICE);


include("../../connect.php");
include("prp_info.php");



include("session_file.php");

if(isset($_REQUEST[cancel_upload])){
	header("Location: awards.php");
	}

date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d H:i:s', time());

$htl_awards =  mysql_query("SELECT MAX(id) as idm FROM hotel_awards WHERE prp_code = $prp_id");
$htl_awards_res = mysql_fetch_array($htl_awards);
$maxid = $htl_awards_res[idm]+1;

// htl_awrd_year_m,htl_awrd_month_m,htl_awrd_month_q,htl_awrd_year_q   ,
if(isset($_REQUEST[upload_htl_award])){
	
	$mqy_type = $_POST[mqy_type];
	if($mqy_type == 'yearly'){
		$award_my = date("Y-m-d",strtotime($_POST[htl_awrd_yearly]."-12-31"));
	}else if($mqy_type == 'quarterly'){
		$award_my = date("Y-m-d",strtotime($_POST[htl_awrd_year_q]."-".$_POST[htl_awrd_month_q]."-01"));
	}else if($mqy_type == 'monthly'){
		$award_my = date("Y-m-d",strtotime($_POST[htl_awrd_year_m]."-".$_POST[htl_awrd_month_m]."-01"));
	}
	$employee_name = $_POST[employee_name];
	$designation = $_POST[designation];
	$departmentid = $_POST[departmentid];
	$type_of_award = $_POST[type_of_award];
	
	
	if($_FILES['doc_file']['name']!=''){
	$max_file_size = 1024*2048;
	if( $_FILES['doc_file']['size'] > $max_file_size ){
					$error_msg = "File size exceeds maximun limit of 2MB.";
				}else{
						$t_path = "hotel_award_pics/"; //This is the directory where images will be saved 
						$fname = basename( $_FILES['doc_file']['name']); 
						$array=explode(".",$fname,2);
						$ext=".".$array[1]; //to get the proper extension of the file
						$rfile="htlawardspic_".$maxid; //To get the name of the image
						$nfile=$rfile.$ext; //To change the new name with proper extension
						$t_path=$t_path.$nfile; //to get the path  where the file will be uploaded
						$profile_pic=$t_path;
						//echo $profile_pic;
						
						//echo $polc_title."<br>".$polc_text."<br>".$polc_category;
							
						$htl_award_save = mysql_query("INSERT INTO `hotel_awards` (`id`, `mqy_type`, `award_my`, `employee_name`, `designation`, `departmentid`, `type_of_award`, `employee_pic`,`created_datetime`, `prp_code`) VALUES (NULL, '$mqy_type', '$award_my', '$employee_name', '$designation', '$departmentid', '$type_of_award', '$profile_pic', '$date', '$prp_id');");
						
					
							if($htl_award_save){ 
							move_uploaded_file($_FILES['doc_file']['tmp_name'],$t_path);
							header("Location: awards.php");
							}else{
									echo "Fail".mysql_error();
								 }
				}
	}else{
						$htl_award_save = mysql_query("INSERT INTO `hotel_awards` (`id`, `mqy_type`, `award_my`, `employee_name`, `designation`, `departmentid`, `type_of_award`, `employee_pic`,`created_datetime`, `prp_code`) VALUES (NULL, '$mqy_type', '$award_my', '$employee_name', '$designation', '$departmentid', '$type_of_award', NULL, '$date', '$prp_id');");
						
					
							if($htl_award_save){ 
							move_uploaded_file($_FILES['doc_file']['tmp_name'],$t_path);
							header("Location: awards.php");
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
 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
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
 
   if( document.myForm.htl_awrd_month_m.value == "" )
   {
     alert( "Please provide Monthly / Yearly" );
     document.myForm.htl_awrd_month_m.focus() ;
     return false;
   }
  
   if( document.myForm.htl_awrd_month_q.value == "" )
   {
     alert( "Please provide your Address!" );
     document.myForm.htl_awrd_month_q.focus() ;
     return false;
   }
   
   
   
   if( document.myForm.employee_name.value == "" )
   {
     alert( "Please provide Employee Name!" );
     document.myForm.employee_name.focus() ;
     return false;
   }
   
   if( document.myForm.designation.value == "" )
   {
	 alert( "Please provide your Designation!" );
	 document.myForm.designation.focus() ;
	 return false;
   }
  
	 if( document.myForm.departmentid.value == "" )
   {
	 alert( "Please select Department!" );
	 document.myForm.departmentid.focus() ;
	 return false;
   }
   
   if( document.myForm.type_of_award.value == "" )
   {
     alert( "Please provide Type of Award!" );
     document.myForm.type_of_award.focus() ;
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
                  <td onclick="location.href='<?=$prp_root;?>/awards.php';" class="color2" height="136">
                    <div class="tile_box">
                    <div align="center" style="top:10px; position:relative"><img src="images/award_icon.png"  width="80" /></div>
                      <div class="tile_name">
                      Hotel Awards
                    </div></div>
                    </td>
                  </tr>
                </table>
              
              </td>
              <td width="76%" valign="top" class="admin_content_area">
              <h2>Add New Hotel Awards</h2>
                <hr />
                <form id="form1" name="myForm" method="POST" action="" enctype="multipart/form-data" >   
            
        
                
                
                <table width="100%" border="0" cellspacing="5" cellpadding="0">
                  <tr>
                    <td>Monthly / Yearly</td>
                    <td>
                    
                    <!-- the select
                    <select id="thechoices">
                        <option value="box1">Box 1</option>
                        <option value="box2">Box 2</option>
                        <option value="box3">Box 3</option>
                    </select> 

                    <div id="boxes">
    <div id="box1"><p>Box 1 stuff...</p></div>
    <div id="box2"><p>Box 2 stuff...</p></div>
    <div id="box3"><p>Box 3 stuff...</p></div>
</div>-->
                    
                      <select id="thechoices" name="mqy_type" class="adm_select">
                        <option value="yearly">Yearly Award</option>
                        <option value="quarterly" style="width:260px;">Quarterly  Award</option>
                        <option value="monthly" style="width:260px;">Monthly Award</option>
                      </select>
                        <!-- the DIVs -->
                        
                        <!-- the jQuery -->
                    </td>
                  </tr>
                  <tr>
                    <td>Select Year / Month</td>
                    <td>
                        <div id="boxes">
                            <div id="yearly">
							<?php
							$m = date('n');
							$y = date('Y');

							  echo '<select name="htl_awrd_yearly" class="adm_select" style="width:262px">';
								for ($year = 2005; $year <= 2020; $year++)
									{
										echo "<option value=\"$year\"";
										if ($year == $y) { echo ' selected="selected"'; }
										echo ">$year</option>\n";
									}
								echo '</select>';
							  ?>
                              </div>
                            <div id="monthly">
                              <select name="htl_awrd_month_m" class="adm_select" style="width:157px;">
								<?php
                                $months = array (1 => 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
        
								// Make the months pull-down list  
								//echo '<select name="month">';
								foreach ($months as $key => $value)
									{
										echo "<option value=\"$key\"";
										if ($key == $m) { echo ' selected="selected"'; }
										echo ">$value</option>\n";
									}
                                ?>
                              </select>
                              <?php
							  echo '<select name="htl_awrd_year_m" class="adm_select" style="width:100px">';
								for ($year = 2005; $year <= 2020; $year++)
									{
										echo "<option value=\"$year\"";
										if ($year == $y) { echo ' selected="selected"'; }
										echo ">$year</option>\n";
									}
								echo '</select>';
							  ?>
                            </div>
                            <div id="quarterly">
                              <select name="htl_awrd_month_q" class="adm_select" style="width:157px;">
								<?php
                                $months = array (1 => 'January', 4 => 'April', 7 =>'July', 10 => 'October');
        
								// Make the months pull-down list
								//echo '<select name="month">';
								foreach ($months as $key => $value)
									{
										echo "<option value=\"$key\"";
										if ($key == $m) { echo ' selected="selected"'; }
										echo ">$value</option>\n";
									}
                                ?>
                              </select>
                              <?php
							  echo '<select name="htl_awrd_year_q" class="adm_select" style="width:100px">';
								for ($year = 2005; $year <= 2020; $year++)
									{
										echo "<option value=\"$year\"";
										if ($year == $y) { echo ' selected="selected"'; }
										echo ">$year</option>\n";
									}
								echo '</select>';
							  ?>
                            </div>
                        </div>
                        <script type="text/javascript" src="path/to/jquery.js"></script>
                        <script type="text/javascript">
                        
                        $("#thechoices").change(function(){
                            $("#" + this.value).show().siblings().hide();
                        });
                        
                        $("#thechoices").change();
                        
                        </script>
                        
                        
                    
                    </td>
                  </tr>
                  <tr>
                    <td width="20%">Employee Name</td><td><input type="text" name="employee_name" id="first_name" class="adm_inptext"  /></td>
                  </tr>
                  <tr>
                    <td width="20%">Designation</td><td>
                      <input type="text" name="designation" id="designation" class="adm_inptext"  />
                    </td>
                  </tr>
                  <tr>
                    <td width="20%">Department</td><td>
                      <select name="departmentid" class="adm_select">
                    <?php
					$dept = mysql_query("SELECT * FROM  `department`");
					while($deptres = mysql_fetch_array($dept)){
					?>  
                    <option value="<?=$deptres[department_name]?>">
					<?=$deptres[department_name]?></option>
					<?php } ?>
                    </select>
                    </td>
                  </tr>
                  <tr>
                    <td width="20%">Type of Award</td><td>
                      <input type="text" name="type_of_award" id="type_of_award" class="adm_inptext"  />
                    </td>
                  </tr>
                  <tr>
                    <td>Picture</td><td> <input name="doc_file" type="file" />
                    <br />
                    <span style="color:red;"> <?php
					   if(isset($error_msg)){
						  echo $error_msg;   
					   }
					   ?></span>
                    </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td><td align="right"><br />
                    <input type="submit" class="ubutton" name="upload_htl_award" value="Save"  onclick="return(validate());" />&nbsp;&nbsp;&nbsp;
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