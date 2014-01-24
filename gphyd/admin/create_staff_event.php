<?php

ini_set('session.save_path', 'tmp');
session_start();
ob_start();
error_reporting(E_ALL ^ E_NOTICE);


include("../../connect.php");
include("prp_info.php");



include("session_file.php");

if(isset($_REQUEST[cancel_upload])){
	header("Location: staff_events.php");
	}

date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d H:i:s', time());

	

if(isset($_REQUEST[upload_heve])){
	$event_type = 'Staff Event';
	$event_title = $_POST[event_title];
	$event_activity = $_POST[event_activity];
	$event_venue = $_POST[event_venue];
	$h = $_POST[eve_thrs];
	$m = $_POST[eve_tmins];
	if($_POST[eve_tampm] == "PM"){
		$h = $h + 12;		
	}
	$event_datetime = strtotime($_POST[event_date]." ".$h.":".$m.":00");
	$event_datetime = date('Y-m-d H:i:s', $event_datetime);
	
	//echo $polc_title."<br>".$polc_text."<br>".$polc_category;
	
	$vac_save = mysql_query("INSERT INTO `hote_staff_events` (`id`, `event_type`, `event_title`, `event_activity`, `event_venue`, `event_datetime`, `created_datetime`, `prp_code`) VALUES (NULL, '$event_type', '$event_title', '$event_activity', '$event_venue', '$event_datetime', '$date', '$prp_id');");

		if($vac_save){ 
		echo "DONE";
		header("Location: staff_events.php");
		}else{
				echo "Fail".mysql_error();
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
 
   if( document.myForm.event_title.value == "" )
   {
     alert( "Please provide Event Title!" );
     document.myForm.event_title.focus() ;
     return false;
   }
   
   
   if( document.myForm.event_activity.value == "" )
   {
     alert( "Please provide Event Activity!" );
     document.myForm.event_activity.focus() ;
     return false;
   }
   
   if( document.myForm.event_venue.value == "" )
   {
     alert( "Please provide Event Venue!" );
     document.myForm.event_venue.focus() ;
     return false;
   }
   
   if( document.myForm.event_date.value == "" )
   {
	 alert( "Please provide Event Date!" );
	 document.myForm.event_date.focus() ;
	 return false;
   }
   
	
	
	 if( document.myForm.eve_thrs.value == "" )
   {
	 alert( "Please select Event Hrs!" );
	 document.myForm.eve_thrs.focus() ;
	 return false;
   }
   
   if( document.myForm.eve_tmins.value == "" )
   {
     alert( "Please provide Event Time Min!" );
     document.myForm.eve_tmins.focus() ;
     return false;
   }
   
   
   if( document.myForm.eve_tampm.value == "" )
   {
     alert( "Please provide Event Time Am or Pm!" );
     document.myForm.eve_tampm.focus() ;
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
                  <td onclick="location.href='<?=$prp_root;?>/staff_events.php';" class="color18" height="136">
                    <div class="tile_box">
                    <div align="center" style="top:7px; position:relative"><img src="images/events_icon.png"  width="100" /></div>
                      <div class="tile_name">
                        Staff Events
                    </div></div>
                    </td>
                  </tr>
                </table>
              
              </td>
              <td width="76%" valign="top" class="admin_content_area">
              <h2>Create New Staff Event</h2>
                <hr />
                <form id="form1" name="myForm" method="POST" action="" enctype="multipart/form-data"  >   
            
        
                
                
                <table width="100%" border="0" cellspacing="5" cellpadding="0">
                  <tr>
                    <td width="20%">Event Title</td><td><input type="text" name="event_title" id="event_title" class="adm_inptext"  /></td>
                  </tr>
                  <tr>
                    <td width="20%">Event Activity</td><td>
                      <input type="text" name="event_activity" id="event_activity" class="adm_inptext"  />
                    </td>
                  </tr>
                  <tr>
                    <td width="20%">Event Venue</td><td>
                      <input type="text" name="event_venue" id="event_venue" class="adm_inptext"  />
                    </td>
                  </tr>
                  <tr>
                    <td width="20%">Event Date</td><td>
                      <input type="text" name="event_date" id="event_date" class="adm_inptext"  />
                    </td>
                  </tr>
                  <tr>
                    <td width="20%">Event Time</td><td>
                      
                      <select name="eve_thrs" class="adm_select" style="width:75px">
                        <option value="0">0 Hrs</option>
                        <option value="1">0 Hrs</option>
                        <option value="2">2 Hrs</option>
                        <option value="3">3 Hrs</option>
                        <option value="4">4 Hrs</option>
                        <option value="5">5 Hrs</option>
                        <option value="6">6 Hrs</option>
                        <option value="7">7 Hrs</option>
                        <option value="8">8 Hrs</option>
                        <option value="9">9 Hrs</option>
                        <option value="10">10 Hrs</option>
                        <option value="11">11 Hrs</option>
                        <option value="12">12 Hrs</option>
                      </select>&nbsp;&nbsp;-&nbsp;&nbsp;
                      <select name="eve_tmins" class="adm_select" style="width:75px">                      
                        <option value="00">00 Mins</option>
                        <option value="10">10 Mins</option>
                        <option value="20">20 Mins</option>
                        <option value="30">30 Mins</option>
                        <option value="40">40 Mins</option>
                        <option value="50">50 Mins</option>
                      </select>&nbsp;&nbsp;-&nbsp;&nbsp;
                      <select name="eve_tampm" class="adm_select" style="width:62px">
                        <option value="AM">AM</option>
                        <option value="PM">PM</option>
                      </select>
                      
                    </td>
                  </tr>
                    <td>&nbsp;</td><td align="right"><br />
                    <input type="submit" class="ubutton" name="upload_heve" value="Save"  onclick="return(validate());" />&nbsp;&nbsp;&nbsp;
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
$( "#event_date" ).datepicker({
changeMonth: true,
changeYear: true
});
});
</script>

</body>
</html>