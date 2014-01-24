<?php

ini_set('session.save_path', 'tmp');
session_start();
error_reporting(E_ALL ^ E_NOTICE);
header("Refresh: ". 60 * 60 ."; URL=$url");
include("../connect.php");
include("prp_info.php");


/*if ($_SESSION['email_id'] == '' && $_SESSION['role'] != 'admin')
  {
	header('LOCATION: logout.php');	
  }
*/

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="includes/styles1.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GreenPark Hotels and Resorts Intranet</title>
<script type="text/javascript">
// Popup window code
function newPopup(url) {
	popupWindow = window.open(
		url,'popUpWindow','height=500,width=900,left=50,top=50,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
}
</script>
</head>

<body>
<div class="wrapper">
  <div class="header">
    <?php /*?> <div class="logo_bar"> 
     <a href="/greenparksample/8/">
          <div class="logo_small" align="center"><img src="images/logo123.png" /><br />
           <div align="center" class="logo_name">GreenPark<br /><span style="font-size:17px;">Hotels</div>
        </div>
      </a> 
    </div><?php */?>
  </div>
  <div class="clear"></div>
  <div class="content1" style=" height:auto; width:1240px; ">
    <div style=" height:550px; width:auto; z-index:999">
      <div style="float:left">
        <table width="1240" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="100%"><table width="100%" border="0" cellspacing="8" cellpadding="0">
                <tr>
                  <td width="33%" valign="top"><table width="100%" height="280" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td onclick="location.href='<?=$home;?>';" class="color2" height="136"><div class="tile_box">
                            <div align="center" style="top:10px; position:relative"><img src="images/logo123.png"  width="80" /></div>
                            <div class="tile_name"> </div>
                          </div></td>
                      </tr>
                      <tr>
                        <td height="8"></td>
                      </tr>
                      <tr height="136">
                        <td onclick="location.href='<?=$prp_root;?>/';" class="color1" height="136"><div class="tile_box">
                            <div align="center" style="top:10px; position:relative"><img src="images/hotel_img1.png"  width="80" /></div>
                            <div class="tile_name"> GreenPark<br />
                              Hyderabad</div>
                          </div></td>
                      </tr>
                      <tr>
                        <td height="8"></td>
                      </tr>
                      <tr>
                        <td onclick="location.href='<?=$prp_root;?>/todays_birthdays.php';" class="color6" height="136"><div class="tile_box">
                            <div align="center" style="top:20px; position:relative"><img src="images/birthday_icon.png"  width="80" /></div>
                            <div class="tile_name"> Today's Birthdays </div>
                          </div></td>
                      </tr>
                    </table></td>
                  <td width="76%" valign="top">
                    
                     <?php
					$tadays_bd = mysql_query("SELECT * FROM employee_directory WHERE prp_code = $prp_id");


					while($tadays_bdres= mysql_fetch_array($tadays_bd))
					{
						$birthDate = $tadays_bdres[birth_date]; 
						$time = strtotime($birthDate);
						if(date('m-d') == date('m-d', $time)) {
						
					?>
                        <div style="width:403px; height:136px; margin:0px 8px 8px 0px; float:left;" class="color13">
                                <div class="knowyourmanagers_tile_box">
                                    <div class="" style="top:10px; position:relative; padding:0px 0px 0px 5px">
                                        <strong><?php echo $tadays_bdres[first_name]." ".$tadays_bdres[last_name] ?></strong><br />
                                        <?=$tadays_bdres[designation];?><br />
                                        <a href="JavaScript:newPopup('mailto:<?=$tadays_bdres[email_id];?>');"><?=$tadays_bdres[email_id];?></a>
                                    </div>
                                    <div class="knowyourmanagers_tile_name" style="float:left; ">                                         
                                        
                                        <div style="float:right"><img src="images/todays_birthdays_bg.png" width="130" /></div>
                                    </div>
                                </div>
                        </div>
                       <?php }
					}
 ?>
                   </td>
                </tr>
              </table></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>
</body>
</html>