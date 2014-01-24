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
	header("Location: surveys.php");
	}


if(isset($_REQUEST[delete_sq])){
	
	$delete_survey = mysql_query("DELETE FROM survey_poll WHERE id = '$sid'");
	if($delete_survey){
		$errorMsg = "<span style='color:red;'>Survey and it's Related records are deleted.</span> <br>Go to <a href='surveys.php'>Surveys</a>";
	}else{
	echo mysql_error();	
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
                </table>
              
              </td>
              <td width="76%" valign="top" class="admin_content_area">
                     <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td><h2>Delete Survey</h2>
                        <hr />
                        </td>                        
                      </tr>
                      <tr>
                        <td align="center" height="100">
                        <?php
                            if($errorMsg!=''){
                                echo $errorMsg;
                            }else{
                            ?>
						<?php
                        $select_surveys = mysql_query("SELECT * FROM survey_poll WHERE id = '$sid'");
                        $get_surveys = mysql_fetch_array($select_surveys);
						echo "<b style='font-size:18px;'>".$get_surveys[survey_name]."</b>";
						?>
<br /><br />
                         <span style="color:red; font-size:14px;">Deleting Survey will delete all it's related data records like Questions, Scale, Participants</span>
                        <br /><br /> If you really want to delete this survey, please click on delete button.<br /><br />
                        
                      <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" name="delete_sq_form">
                        <input type="hidden" name="sqid" value="<?php echo $get_surveys[id] ?>"  />                        
                        <input type="submit" name="delete_sq" value="Delete" class="ubutton" />
                      </form>
                         <?php } ?>
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