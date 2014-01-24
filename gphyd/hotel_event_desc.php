<?php

ini_set('session.save_path', 'tmp');
session_start();
error_reporting(E_ALL ^ E_NOTICE);
$url = $_SERVER['REQUEST_URI'];

include("../connect.php");
include("prp_info.php");

$hevs =  mysql_query("SELECT * FROM hote_staff_events WHERE id = $_GET[heveid] AND prp_code = $prp_id");
$hevsres = mysql_fetch_array($hevs);
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
<link rel="stylesheet" href="/resources/demos/style.css" />
</head>

<body>
<div class="wrapper">
  <?php /*?><div class="header">
     <div class="logo_bar"> 
     <a href="/greenparksample/8/">
          <div class="logo_small" align="center"><img src="images/logo123.png" /><br />
           <div align="center" class="logo_name">GreenPark<br /><span style="font-size:17px;">Hotels</span></div>
        </div>
      </a> 
    </div>
  </div><?php */?>
  
  <div class="content1" style=" height:auto; width:1240px; ">
  <div style=" height:550px; width:auto; z-index:999">
    <div style="float:left">
    <table width="1240" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="100%">
          <table width="100%" border="0" cellspacing="8" cellpadding="0">        
            <tr>
              <td>
                <a href="<?=$prp_root;?>/<?php echo str_replace(" ","_",strtolower($hevsres[event_type]));?>s.php"><img src="images/back_arrow.png" width="35" /></a>
              </td>
            </tr>
            <tr>              
              <td valign="top" class="admin_content_area">
             
              <center><h2><?=$hevsres[event_type];?></h2></center>
                <hr />
                <br />
                  
                  <div style="font-size:35px; color:#003194; font-family:'Open Sans', sans-serif; text-transform:capitalize; text-align:center; padding:20px 0px;"><?=$hevsres[event_activity];?></div>
                  
                  <div style="font-size:50px; color:#860052; font-family:'Open Sans', sans-serif; text-transform:capitalize; text-align:center; padding:20px 0px;">"<?=$hevsres[event_title];?>"</div>
                  
                  <div style="font-size:40px; color:#467d28; font-family:'Open Sans', sans-serif; text-transform:capitalize; text-align:center; padding:20px 0px;">Venue - "<?=trim($hevsres[event_venue]);?>"</div>
                  
                  <div style="font-size:25px; color:#070d04; font-family:'Open Sans', sans-serif; text-transform:capitalize; text-align:center; padding:20px 0px;">@  <?=date('j F Y',strtotime($hevsres[event_datetime])). ", " . date('h:i A',strtotime($hevsres[event_datetime]));?></div>
                <br /><br /><br /><br /><br /><br />  
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