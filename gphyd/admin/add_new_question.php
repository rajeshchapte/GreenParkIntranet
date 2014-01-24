<?php

ini_set('session.save_path', 'tmp');
session_start();
ob_start();
error_reporting(E_ALL ^ E_NOTICE);

include("../../connect.php");
include("prp_info.php");

include("session_file.php");


date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d H:i:s', time());

$sid = $_REQUEST['sid'];


if(isset($_REQUEST[cancel_upload])){
	header("Location: survey_questions.php?sid=$sid");
	}


if(isset($_REQUEST[upload_survey_q])){
	
	
	//survey_name,expiry_date,
	$survey_question = $_POST[survey_question];
	$survay_cat = $_POST[survay_cat];
	
	$insert_survey_q = mysql_query("INSERT INTO `survey_questions` (`id`, `survey_id`, `survay_cat_id`, `survey_question_text`, `prp_code`, `created_datetime`, `created_by`) VALUES (NULL, '$sid', '$survay_cat', '$survey_question', '$prp_id', '$date', '$select_user_res[id]');");
	if($insert_survey_q){
			echo $line."Inserted succesfully";
			header("Location: survey_questions.php?sid=$sid");
	}else{
	echo mysql_error();	
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

<script type="text/javascript">
<!--
// Form validation code will come here.
function validate()
{
 
   if( document.myForm.survey_name.value == "" )
   {
     alert( "Please provide Survay Name!" );
     document.myForm.survey_name.focus() ;
     return false;
   }
   
	
   if( document.myForm.expiry_date.value == "" )
   {
     alert( "Please provide expiry date!" );
     document.myForm.expiry_date.focus() ;
     return false;
   }
   if( document.myForm.survey_scale.value == "" )
   {
     alert( "Please provide expiry date!" );
     document.myForm.survey_scale.focus() ;
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
                  <tr>
                    <td height="8"></td>
                  </tr>
                  <tr>
                  <td onclick="location.href='<?=$prp_root;?>/surveys.php';" class="color3" height="136">
                    <div class="tile_box">
                    <div align="center" style="top:10px; position:relative"><img src="images/record_sales_icon.png"  width="80" /></div>
                      <div class="tile_name">
                      Add Survey Questions
                    </div></div>
                    </td>
                  </tr>
                </table>
              
              </td>
              <td width="76%" valign="top" class="admin_content_area">
                     <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td><h2>Add New Question</h2>
                        <hr />
                        </td>                        
                      </tr>
                      <tr>
                        <td>
                          <form id="form1" method="POST" action="" name="myForm" enctype="multipart/form-data"  >   
                        <table width="100%" border="0" cellspacing="5" cellpadding="0">
                          <tr>
                            <td>Survey Question Category</td>
                            <td>
                              <div style="float:left">
                            
                            <select name="survay_cat" class="adm_select">
                            <?php /*?><option value="0">NONE</option><?php */?>
                            <?php
                            $scat = mysql_query("SELECT * FROM `survey_cats` WHERE survey_id = '$sid'");
                            while($scatres = mysql_fetch_array($scat)){
                            ?>  
                            <option value="<?=$scatres[id]?>"><?=$scatres[survey_cat_title]?></option>
                            <?php } ?>
                            </select></div>
                            <div style="float:left">&nbsp;&nbsp;&nbsp;<a href="create_scat.php?sid=<?=$sid;?>&purl=<?=$_SERVER['SCRIPT_NAME'];?>"><img src="images/add_icon.png" width="25" align="Create New Department" title="Create New Department"   /></a></div>
                            </td>
                          </tr>
                          <tr>
                            <td width="25%" valign="top">Survey Question</td>
                            <td><textarea name="survey_question" id="survey_question" rows="6" cols="40" ></textarea></td>
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
                          <tr>
                            <td>&nbsp;</td><td align="right"><br />
                            <input type="submit" class="ubutton" name="upload_survey_q" value="Save" onclick="return(validate());" />&nbsp;&nbsp;&nbsp;
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
$( "#expiry_date" ).datepicker({
changeMonth: true,
changeYear: true
});
});
</script>


</body>
</html>