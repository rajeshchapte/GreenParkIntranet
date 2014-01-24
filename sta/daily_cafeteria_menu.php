<?php 

ini_set('session.save_path', 'tmp');
session_start();
error_reporting(E_ALL ^ E_NOTICE);
$url = $_SERVER['REQUEST_URI'];

include("../connect.php");
include("prp_info.php");

$today = date("Y-m-d 00:00:00");
$todays_menu = mysql_query("SELECT * FROM cafeteria_menu WHERE menu_date = '$today' AND prp_code = $prp_id");
$tmres = mysql_fetch_array($todays_menu);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="includes/styles1.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GreenPark Hotels and Resorts Intranet</title>
<link rel="stylesheet" href="/resources/demos/style.css" />
</head>

<body>
<div class="wrapper">
 <?php /*?>  <div class="header">
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
                <a href="<?=$prp_root;?>/"><img src="images/back_arrow.png" width="35" /></a>
              </td>
            </tr>
            <tr>              
              <td valign="top" class="admin_content_area" colspan="2" width="100%">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="50%"><div style="width:40%; float:left;"><h2>LUNCH IS SERVED</h2></div></td>
    <td width="50%" align="right" valign="middle"><h2>Date: <?php echo date("j F Y",strtotime($tmres[menu_date])); ?></h2></td>
  </tr>
</table>

              
                <hr />
                <table border="0" cellpadding="0" cellspacing="0" width="100%" class="gridtable">
                            <tr>
                              <td width="24%" height="35" align="center" valign="top" bgcolor="#FFFFFF" style="padding-left:3px;"><img src="images/be_healthy.png" width="293" height="404" style="border:3px solid #CCC;" /></td>
                              <td width="73%" height="35" align="center" valign="top" bgcolor="#FFFFFF">
                              <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border:3px solid #CCC;">
                                <tr>
                                  <td width="82%" height="30" align="center" valign="top" bgcolor="#FFFFFF">
                                    
                                    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="gridtable">
                                      <?php
										$nvitems = explode(",",$tmres[menu_non_veg_items]);
										foreach($nvitems as $key => $val ){ ?>
                                      <tr>
                                        <td style="text-transform:capitalize;"><h3 style="padding:0px; margin:0px;">
											<?php echo $val; ?>
										
                                        </h3></td>
                                        </tr>
                                        <?php										
										}
                                        ?>
                                      </table>
                                    
                                  </td>
                                  <td width="18%" height="30" align="right" valign="middle"><img src="images/veg_nonveg_icon.png" width="83" height="83" /></td>
                                </tr>
                                <tr>
                                  <td height="30" align="center" valign="top" bgcolor="#FFFFFF">
                                   
                                    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="gridtable" style="border:0px;">
                                    <?php
										$vitems = explode(",",$tmres[menu_veg_items]);
										
										foreach($vitems as $key => $val ){ ?>
                                      <tr>
                                        <td style="text-transform:capitalize;"><h3 style="padding:0px; margin:0px;">
											<?php echo $val; ?>
										
                                        </h3></td>
                                        </tr>
                                        <?php										
										}
                                        ?>
                                        </table> 
                                      
                                  </td>
                                  <td height="30" align="right" valign="middle"><img src="images/veg_icon.png" width="83" height="83" /></td>
                                </tr>
                                <tr>
                                  <td colspan="2" align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="table" style="border:0px;">
                                    <?php
										$vitems = explode(",",$tmres[menu_drinks_fruits]);
										
										foreach($vitems as $key => $val ){ ?>
                                      <tr>
                                        <td style="text-transform:capitalize;"><h3 style="padding:0px; margin:0px;">
											<?php echo $val; ?>
										
                                        </h3></td>
                                        </tr>
                                        <?php										
										}
                                        ?>
                                    </table></td>
                                </tr>
                                </table></td>
                              <td width="3%" height="35" align="right" valign="top" bgcolor="#FFFFFF" style="padding-right:3px;"><img src="images/food_guide_pyramid.png" width="303" height="404" /></td>
                            </tr>
                            <tr>
                              <td height="35" colspan="3" align="center" valign="top" bgcolor="#FFFFFF" style="padding-left:3px;"><table width="100%" border="0" cellspacing="0" cellpadding="0"  class="gridtable">
                                <tr>
                                  <td height="35" align="center" valign="middle"><h2 align="center"><strong>Thought  of the Day</strong><strong> </strong></h2></td>
                                </tr>
                                <tr>
                                  <td height="35" align="center" valign="middle"><h2 align="center" style="color:#3333CC"><?=$tmres[thought_of_day];?></h2></td>
                                </tr>
                              </table></td>
                            </tr>
                          </table>
                
              </td>
            </tr>
            <tr>
            	<td>
                	
                </td>
            </tr>
            </table>
            
            
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