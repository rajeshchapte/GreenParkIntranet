<?php

ini_set('session.save_path', 'tmp');
session_start();
ob_start();
error_reporting(E_ALL ^ E_NOTICE);

include("../../connect.php");
include("prp_info.php");

include("session_file.php");

$sid = $_REQUEST['sid'];


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


$select_surveys = mysql_query("SELECT * FROM survey_poll WHERE id = '$sid'");
$get_surveys = mysql_fetch_array($select_surveys);


?>

<!DOCTYPE>
<html>
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
                        <td><h2>Surveys Details</h2></td>
                      </tr>
                    </table>

              
              
                <hr />
                <?php 
				if($delmsg!=''){
					echo $delmsg;
				}
				?>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td style="background-color:#FFF; border:1px solid #999; padding:5px;">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" >
                                  <tr>
                                    <td colspan="2">
                                    <a href="survey_details.php?sid=<?=$get_surveys[id];?>"><?=$get_surveys[survey_name];?></a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td colspan="2">
                                      Expiry Date: <?php echo date("d F Y",strtotime($get_surveys[survey_expiry_date]));?>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td colspan="2"><br />
                                      Survey Scale:<br />
                                      <?php
									  $i = 1;
									    $sel_survey_scale = mysql_query("SELECT * FROM survey_answers WHERE survey_id = '$sid'");
										while($get_survey_scale = mysql_fetch_array($sel_survey_scale)){
											echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". $i.". ".$get_survey_scale[answer_text]."<br>";//." - <a href='edit_survey_scale.php?sid=$sid'>Edit</a><br>";
											
									  ?>
                                      <?php
										$i++;
										 }
									  ?><br />
                                      
                                      
                                    </td>
                                  </tr>
                                  <tr>
                                    <td align="center" colspan="2">
                                    <div style="width:100%; position:relative;"><?php include("survey_chart_div.php"); ?></div>
                                    </td>
                                  </tr>
                                  <tr><td colspan="2" height="20"></td></tr>
                                  <tr>
                                    <td style="font-size:12px;" align="left">
                                      Survey Questions:  <a href="survey_questions.php?sid=<?=$get_surveys[id];?>"><strong><?php echo get_survey_questions($get_surveys[id]); ?></strong> [ View ]</a>&nbsp;&nbsp;&nbsp;
                                      
                                      Survey Participants: <strong><?php echo get_survey_participants($get_surveys[id], $select_user_res[id], $prp_id); ?></strong>
                                    </td>
                                    <td align="right" style="font-size:12px;">
                                      <a href="add_new_question.php?sid=<?=$get_surveys[id];?>">Add New Question</a> - <a href="edit_survey.php?sid=<?=$get_surveys[id];?>">Edit</a> - <a href="delete_survey.php?sid=<?=$get_surveys[id];?>">Delete</a>
                                    </td>
                                  </tr>
                                </table>

                              </td>
                            </tr>
                          </table>
               
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