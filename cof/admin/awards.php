<?php

ini_set('session.save_path', 'tmp');
session_start();
error_reporting(E_ALL ^ E_NOTICE);
include("../../connect.php");
include("prp_info.php");

include("session_file.php");

if(isset($_REQUEST[delete_htl_award])){
	$htl_award_id = $_POST[htl_award_id];
	$delempfile = mysql_query("DELETE FROM hotel_awards WHERE id = '$htl_award_id'");
	if($delempfile){
		$delmsg = "Hotel Award Deleted";
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
              <h2>Hotel Awards</h2>
                <hr />

                <?php 
				if($delmsg!=''){
					echo $delmsg;
				}
				?>
                <div style="overflow:auto; height:450px;">
                <table width="100%" border="0" cellspacing="1" cellpadding="2" bgcolor="#CCCCCC">
                  <tr bgcolor="#999999" height="25"><td><strong>Name</strong></td><td><strong>Designation</strong></td><td><strong>Department</strong></td><td><strong>Type of Award</strong></td><td><strong>Action</strong></td></tr>
                  <?php
				  $i = 1;
				  $htl_awards =  mysql_query("SELECT * FROM hotel_awards WHERE prp_code = $prp_id");
					    while($htl_awards_res = mysql_fetch_array($htl_awards)){
							
				  ?>
                  <tr bgcolor="#ececef" height="35">
                    <td width="25%"><?php echo $htl_awards_res[employee_name]//." ".$newjnsres[last_name]; ?></td>
                    <td width="20%" style="text-transform:capitalize"><?=$htl_awards_res[designation];?></td>
                    <td width="15%">
                    <?php echo $htl_awards_res[departmentid];
					?>
                    </td>
                    <td width="25%">
                    <?php echo $htl_awards_res[type_of_award]; ?>
                    </td>
                   <td width="20%" align="right">
                      <div style="float:right">
                      <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" name="delete_htl_award">
                        <input type="hidden" name="htl_award_id" value="<?php echo $htl_awards_res[id] ?>"  />                        
                        <input type="submit" name="delete_htl_award" value="Delete" class="ubutton" onclick="return confirm('Are you sure want to delete?');" />
                      </form></div>
                      
                      <div style="float:right"><form method="get" action="edit_htl_award.php" name="edit_htla_form">
                        <input type="hidden" name="htla_id" value="<?php echo $htl_awards_res[id] ?>"  />                   
                        <input type="submit" name="edit_htla" value="Edit" class="ubutton" />
                      </form>
                      </div>
                      
                    </td>
                   
                  </tr>
                  <?php $i++; } ?>
                </table>
				</div><br /><br />
                
                
                
                  <input type="button" onclick="location.href='add_htl_award.php';"  class="ubutton" value="New Award" />
                
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