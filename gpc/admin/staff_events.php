<?php

ini_set('session.save_path', 'tmp');
session_start();
error_reporting(E_ALL ^ E_NOTICE);

include("../../connect.php");
include("prp_info.php");

include("session_file.php");

if(isset($_REQUEST[delete_seve])){
	$seveid = $_POST[seveid];
	$delseve = mysql_query("DELETE FROM hote_staff_events WHERE id = '$seveid'");
	if($delseve){
		$delmsg = "Staff Event Deleted";
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
              <h2>Staff Events</h2>
                <hr />

                <?php 
				if($delmsg!=''){
					echo $delmsg;
				}
				?>
                <div style="overflow:auto; height:450px;">
                <table width="100%" border="0" cellspacing="1" cellpadding="2" bgcolor="#CCCCCC">
                  <tr bgcolor="#999999" height="25"><td><strong>Event Title</strong></td><td><strong>Event Activity</strong></td><td><strong>Venue</strong></td><td><strong>Date and Time</strong></td><td><strong>Action</strong></td></tr>
                  <?php
				  $i = 1;
				  $hevs =  mysql_query("SELECT * FROM hote_staff_events WHERE prp_code = $prp_id AND event_type = 'Staff Event' ORDER BY event_datetime DESC");
					    while($hevsres = mysql_fetch_array($hevs)){
							
				  ?>
                  <tr bgcolor="#ececef">
                    <td width="20%"><?php echo $hevsres[event_title]; ?></td>
                    <td width="20%" style="text-transform:capitalize"><?=$hevsres[event_activity];?></td>
                    <td width="15%">
                    <?php echo $hevsres[event_venue];
					?>
                    </td>
                    <td width="22%">
                    <?php echo date('j F Y',strtotime($hevsres[event_datetime])). ", " . date('h:i A',strtotime($hevsres[event_datetime])); 
					?>
                    </td>
                    <td width="18%" align="right">
                      <div style="float:right">
                      <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" name="delete_empf">
                        <input type="hidden" name="seveid" value="<?php echo $hevsres[id] ?>"  />                        
                        <input type="submit" name="delete_seve" value="Delete" class="ubutton" onclick="return confirm('Are you sure want to delete?');" />
                      </form></div>
                      
                      <div style="float:right"><form method="get" action="edit_seve.php" name="edit_emp">
                        <input type="hidden" name="seveid" value="<?php echo $hevsres[id] ?>"  />                        
                        <input type="submit" name="edit_seve" value="Edit" class="ubutton" />
                      </form>
                      </div>
                      
                    </td>
                  </tr>
                  <?php $i++; } ?>
                </table>
				</div><br /><br />
                
                  <input type="button" onclick="location.href='create_staff_event.php';"  class="ubutton" value="New Staff Event" />
                
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