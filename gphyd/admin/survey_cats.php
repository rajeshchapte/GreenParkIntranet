<?php

ini_set('session.save_path', 'tmp');
session_start();
ob_start();
error_reporting(E_ALL ^ E_NOTICE);

include("../../connect.php");
include("prp_info.php");

include("session_file.php");

$sid = $_REQUEST['sid'];

if(isset($_REQUEST[delete_sc])){
	$scid = $_POST[scid];
	$delrsid = mysql_query("DELETE FROM survey_cats WHERE id = '$scid'");
	if($delrsid){
		$delmsg = "Survey Category Deleted. ";
		//unlink($somefile);
	}else{
		$delmsg = "This category connot be deleted. There are some questions under this category.";
	}
}
$select_surveys = mysql_query("SELECT * FROM survey_poll WHERE id = '$sid'");
$get_surveys = mysql_fetch_array($select_surveys);


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
                  <td onclick="location.href='<?=$prp_root;?>/surveys.php';" class="color3" height="136">
                    <div class="tile_box">
                    <div align="center" style="top:10px; position:relative"><img src="images/record_sales_icon.png"  width="80" /></div>
                      <div class="tile_name">
                      Surveys
                    </div></div>
                    </td>
                  </tr>
                  <tr>
                    <td height="8"></td>
                  </tr>
                  <tr>
                  <td onClick="location.href='<?=$prp_root;?>/survey_details.php?sid=<?=$sid;?>';" class="color3" height="136">
                    <div class="tile_box">
                    <div align="center" style="top:10px; position:relative"><img src="images/record_sales_icon.png"  width="80" /></div>
                      <div class="tile_name">
                      <?=$get_surveys[survey_name];?>
                    </div></div>
                    </td>
                  </tr>
                </table>
              
              </td>
              <td width="76%" valign="top" class="admin_content_area">
                     <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td><h2>Survey - <a href="survey_details.php?sid=<?=$get_surveys[id];?>"><?=$get_surveys[survey_name];?></a></h2></td>
                        <td align="right">
                          

                      
                        </td>
                      </tr>
                    </table>

              
              
                <hr />
                <?php 
				if($delmsg!=''){
					echo $delmsg;
				}
				?>
                <table width="100%" border="0" cellspacing="1" cellpadding="3" bgcolor="#999999">
                          <?php
						  $select_survey_c = mysql_query("SELECT * FROM survey_cats WHERE survey_id = '$sid'");
							  	if(mysql_num_rows($select_survey_c)==0){
									echo "There are no Categories in this suervey - <a href='create_scat.php?sid=".$sid."&purl=".$_SERVER['SCRIPT_NAME']."'>Add New Category</a>";
								}else{
						?>
                        <tr bgcolor="#CCCCCC">
                          <td width="6%">S.No</td><td width="76%">Survey Category</td><td width="18%">Actions</td>
                        </tr>
                        <?php
						$i = 1;
						  while($get_select_survey_c = mysql_fetch_array($select_survey_c)){
							  ?>
                            <tr bgcolor="#FFFFFF"><td><?=$i;?></td>
                              <td>
                                <?=$get_select_survey_c[survey_cat_title];?>
                              </td>
                              <td>
                              <div style="float:right">
                      <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" name="delete_sc_form">
                        <input type="hidden" name="scid" value="<?php echo $get_select_survey_c[id] ?>"  />                        
                        <input type="submit" name="delete_sc" value="Delete" class="ubutton" onclick="return confirm('Are you sure want to delete?');" />
                      </form></div>
                      <div style="float:right">
                      <form method="get" action="edit_survey_cat.php" name="edit_sc_form">
                      <input type="hidden" name="sid" value="<?php echo $sid; ?>"  />  
                        <input type="hidden" name="scid" value="<?php echo $get_select_survey_c[id]; ?>"  />                        
                        <input type="submit" name="edit_sc" value="Edit" class="ubutton" />
                      </form></div>
                              </td>
                            </tr>
                            
                          <?php  $i++;  
						  }  }
						  ?>
                          </table>
                          <?php
                          if(mysql_num_rows($select_survey_c)!=0){ ?>
                          
					<br /><input type="button" onclick="location.href='create_scat.php?sid=<?=$sid;?>&purl=<?=$_SERVER['SCRIPT_NAME'];?>';"  class="ubutton" value="Add New Category" />
               <?php  } ?>
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