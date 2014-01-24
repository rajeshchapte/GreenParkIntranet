<?php

ini_set('session.save_path', 'tmp');
session_start();
ob_start();
error_reporting(E_ALL ^ E_NOTICE);

include("../../connect.php");
include("prp_info.php");

include("session_file.php");

if(isset($_REQUEST[delete_rs])){
	$rsid = $_POST[rsid];
	$delrsid = mysql_query("DELETE FROM survey_poll WHERE id = '$sid'");
	if($delrsid){
		$delmsg = "Survey Deleted";
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
                </table>
              
              </td>
              <td width="76%" valign="top" class="admin_content_area">
                     <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td><h2>Surveys</h2></td>
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
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <?php
						  $select_surveys = mysql_query("SELECT * FROM survey_poll ORDER BY ID DESC");
						  while($get_surveys = mysql_fetch_array($select_surveys)){
							  ?>
                            <tr>
                              <td style="background-color:#FFF; border:1px solid #999; padding:5px;">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td>
                                    <a href="survey_details.php?sid=<?=$get_surveys[id];?>"><?=ucfirst($get_surveys[survey_name]);?></a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td style="font-size:12px;" align="left">
                                      Survey Questions:  <a href="survey_questions.php?sid=<?=$get_surveys[id];?>"><strong><?php echo get_survey_questions($get_surveys[id]); ?></strong> [ View ]</a>&nbsp;&nbsp;&nbsp;
                                      
                                      Survey Participants: <strong><?php echo get_survey_participants($get_surveys[id], $select_user_res[id], $prp_id); ?></strong>
                                    </td>
                                    <td align="right" style="font-size:12px;">
                                      <a href="edit_survey.php?sid=<?=$get_surveys[id];?>">Edit</a> - <a href="delete_survey.php?sid=<?=$get_surveys[id];?>">Delete</a>
                                    </td>
                                  </tr>
                                </table>

                              </td>
                            </tr>
                            <tr><td height="5"></td></tr>
                          <?php    
						  }
						  ?>
                          </table>
 <br /><input type="button" onclick="location.href='new_survey.php';"  class="ubutton" value="New Survey" />
               
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