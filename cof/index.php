<?php
ini_set('session.save_path', 'tmp');
session_start();
ob_start();
include("../connect.php");
include("prp_info.php");

error_reporting(E_ALL ^ E_NOTICE);
$url = $_SERVER['REQUEST_URI'];

$today = date("Y-m-d 00:00:00");
?>

<!DOCTYPE html>
<!-- saved from url=(0064)http://sarasoueidan.com/blog/windows8-animations/demo/index.html -->
<html class=" js canvas canvastext geolocation crosswindowmessaging websqldatabase indexeddb hashchange historymanagement draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions  video audio localstorage sessionstorage webworkers applicationcache svg smil svgclippaths   fontface">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>GreePark Hotels and Resorts Intranet</title>
<link href="includes/styles1.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="includes/styles_w.css">
<script src="js/modernizr-1.5.min.js"></script>
</head>

<body>
<!--===============================Start Demo====================================================-->
<div class="demo-wrapper"> 
  <!-- classnames for the pages should include: 1) type of page 2) page name-->
<?php //include("loginout_div.php"); ?>  
<div class="s-page random-restored-page">
    <h2 class="page-title">Some minimized App</h2>
    <div class="close-button s-close-button">x</div>
  </div>
  <div class="s-page custom-page">
    <h2 class="page-title">Thank You!</h2>
    <div class="close-button s-close-button">x</div>
  </div>
  <div class="r-page random-r-page">
    <div class="page-content">
      <h2 class="page-title">App Screen</h2>
    </div>
    <div class="close-button r-close-button">x</div>
  </div>
  
  <!-- Cafeteria Menu Starts-->
  <div class="r-page cafeteria-menu">
    <div class="page-content">
      <h2 class="page-title">Today's Cafeteria Menu</h2>
      <?php
		$todays_menu = mysql_query("SELECT * FROM cafeteria_menu WHERE menu_date = '$today' AND prp_code = $prp_id");
		$tmres = mysql_fetch_array($todays_menu);
	  ?>
      <table width="100%" border="0" cellspacing="8" cellpadding="0">
        <tr>
          <td valign="top" class="admin_content_area" colspan="2" width="100%"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="50%"><div style="width:40%; float:left;">
                    <h2>LUNCH IS SERVED</h2>
                  </div></td>
                <td width="50%" align="right" valign="middle"><h2> Date:
                    <?php 
	if($tmres[menu_date]!=''){
	echo date("j F Y",strtotime($tmres[menu_date]));
	}else{
		echo date("j F Y");
		
	}
	
	 ?>
                  </h2></td>
              </tr>
            </table>
            <hr />
            <table border="0" cellpadding="0" cellspacing="0" width="100%" class="gridtable">
              <tr>
                <td width="24%" height="35" align="center" valign="top" bgcolor="#FFFFFF" style="padding-left:3px;"><img src="images/be_healthy.png" width="293" height="404" style="border:3px solid #CCC;" /></td>
                <td width="73%" height="35" align="center" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0" style="border:3px solid #CCC;">
                    <tr>
                      <td width="82%" height="30" align="center" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="gridtable">
                          <?php
										$nvitems = explode(",",$tmres[menu_non_veg_items]);
										foreach($nvitems as $key => $val ){ ?>
                          <tr>
                            <td style="text-transform:capitalize;"><h3 style="padding:0px; margin:0px;"> <?php echo $val; ?> </h3></td>
                          </tr>
                          <?php										
										}
                                        ?>
                        </table></td>
                      <td width="18%" height="30" align="right" valign="middle"><img src="images/veg_nonveg_icon.png" width="83" height="83" /></td>
                    </tr>
                    <tr>
                      <td height="30" align="center" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="gridtable" style="border:0px;">
                          <?php
										$vitems = explode(",",$tmres[menu_veg_items]);
										
										foreach($vitems as $key => $val ){ ?>
                          <tr>
                            <td style="text-transform:capitalize;"><h3 style="padding:0px; margin:0px;"> <?php echo $val; ?> </h3></td>
                          </tr>
                          <?php										
										}
                                        ?>
                        </table></td>
                      <td height="30" align="right" valign="middle"><img src="images/veg_icon.png" width="83" height="83" /></td>
                    </tr>
                    <tr>
                      <td colspan="2" align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="table" style="border:0px;">
                          <?php
										$vitems = explode(",",$tmres[menu_drinks_fruits]);
										
										foreach($vitems as $key => $val ){ ?>
                          <tr>
                            <td style="text-transform:capitalize;"><h3 style="padding:0px; margin:0px;"> <?php echo $val; ?> </h3></td>
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
                      <td height="35" align="center" valign="middle"><h2 align="center" style="color:#3333CC">
                          <?=$tmres[thought_of_day];?>
                        </h2></td>
                    </tr>
                  </table></td>
              </tr>
            </table></td>
        </tr>
        <tr>
          <td></td>
        </tr>
      </table>
    </div>
    <div class="close-button r-close-button">x</div>
  </div>
  <!-- Cafeteria Menu Ends--> 
  
  <!-- Todays Birthdays Starts-->
  <div class="r-page todays_birthdays">
    <div class="page-content">
      <h2 class="page-title">Today's Birthdays</h2>
      <table width="100%" border="0" cellspacing="8" cellpadding="0">
        <tr>
          <td valign="top" class="admin_content_area" colspan="2" width="100%"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td align="right" valign="middle"><h2> Date:
                    <?php 
	if($tmres[menu_date]!=''){
	echo date("j F Y",strtotime($tmres[menu_date]));
	}else{
		echo date("j F Y");
		
	}
	
	 ?>
                  </h2></td>
              </tr>
              <tr>
                <td valign="top"><?php
					$tadays_bd = mysql_query("SELECT * FROM employee_directory WHERE prp_code = $prp_id");


					while($tadays_bdres= mysql_fetch_array($tadays_bd))
					{
						$birthDate = $tadays_bdres[birth_date]; 
						$time = strtotime($birthDate);
						if(date('m-d') == date('m-d', $time)) {
						
					?>
                  <div style="width:100%; height:136px; margin:0px 8px 8px 0px; float:left;" class="color13">
                    <div class="knowyourmanagers_tile_box">
                      <div class="" style="top:10px; font-size:14px; position:relative; padding:0px 0px 0px 5px"> <strong><?php echo $tadays_bdres[first_name]." ".$tadays_bdres[last_name] ?></strong><br />
                        <?=$tadays_bdres[designation];?>
                        <br />
                        <a href="JavaScript:newPopup('mailto:<?=$tadays_bdres[email_id];?>');">
                        <?=$tadays_bdres[email_id];?>
                        </a> </div>
                      <div class="knowyourmanagers_tile_name" style="float:left; ">
                        <div style="float:right"><img src="admin/<?=$tadays_bdres[emp_pic];?>" width="100" height="120" /></div>
                      </div>
                    </div>
                  </div>
                  <?php }
					}
 ?>				</td>
              </tr>
            </table></td>
        </tr>
      </table>
    </div>
    <div class="close-button r-close-button">x</div>
  </div>
  <!-- Todays Birthdays Ends --> 

  <!-- New Joinees Starts-->
  <div class="s-page new_joinees">
      <h2 class="page-title">New Joinees</h2>
      <table width="100%" border="0" cellspacing="8" cellpadding="0">
        <tr>
          <td valign="top" class="admin_content_area" colspan="2" width="100%"><table width="100%" border="0" cellspacing="0" cellpadding="0">

              <tr>
                <td valign="top">
                
				<?php
				  $newjns =  mysql_query("SELECT * FROM employee_directory WHERE DATE( joining_date ) >= DATE_SUB( CURDATE( ) , INTERVAL 7 DAY )  AND prp_code = $prp_id");
				  while($newjnsres = mysql_fetch_array($newjns)){							
					?>
                  <div style="width:100%; height:136px; margin:0px 8px 8px 0px; float:left;" class="color13">
                    <div class="knowyourmanagers_tile_box">
                      <div class="" style="top:10px; font-size:14px; position:relative; padding:0px 0px 0px 5px; float:left; text-align:left"> <strong><?php echo $newjnsres[first_name]." ".$newjnsres[last_name] ?></strong><br />
                        <?php echo dept_name($newjnsres[departmentid]);?>
                        <br />
                        <a href="JavaScript:newPopup('mailto:<?=$tadays_bdres[email_id];?>');">
                        <?=$newjnsres[email_id];?>
                        </a> </div>
                      <div class="knowyourmanagers_tile_name" style="float:left; ">
                       <div style="float:right"><img src="admin/<?=$newjnsres[emp_pic];?>" width="100" height="120" /></div>
                      </div>
                    </div>
                  </div>
                  <?php 
					}
 ?></td>
              </tr>
            </table></td>
        </tr>
      </table>
    <div class="close-button s-close-button">x</div>
  </div>
  <!-- New Joinees Ends --> 



  <!-- Merchandize Starts-->
  

  <div class="s-page merchandize_div">
    
      <h2 class="page-title">Merchandize</h2>
      <table width="100%" border="0" cellspacing="8" cellpadding="0">
        <tr>
          <td valign="top" class="admin_content_area" colspan="2" width="100%"><table width="100%" border="0" cellspacing="0" cellpadding="0">

              <tr>
                <td valign="top">
                
				<?php
				  $mitems =  mysql_query("SELECT * FROM merchandize WHERE prp_code = $prp_id ORDER BY created_datetime DESC ");//WHERE joining_date BETWEEN SYSDATE( ) - INTERVAL 7 DAY AND SYSDATE( ) AND prp_code = $prp_id
				  while($mitemsres = mysql_fetch_array($mitems)){							
					?>
                  <div style="width:300px; height:300px; margin:0px 8px 8px 0px; float:left;" class="color13">
                      <div class="" style="top:10px; font-size:14px; position:relative; padding:5px"> <strong><?php echo $mitemsres[item_name]; ?></strong><br />
                        <img src="admin/<?=$mitemsres[item_image];?>" width="200" height="200" style="border:2px solid #CCCCCC" /><br />
                        <?=$mitemsres[item_price];?><br />
                        <?=ucfirst($mitemsres[item_desc]);?>
                         </div>
                  </div>
                  <?php 
					}
 ?></td>
              </tr>
            </table></td>
        </tr>
      </table>
    
    <div class="close-button s-close-button">x</div>
  </div>
  <!-- Merchandize Ends --> 

  <!-- Organization Chart Starts-->
  <div class="r-page org_charts">
    <div class="page-content">
      <h2 class="page-title">Organization Chart</h2>
      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" style="font-size:16px;">
  <tr>
    <td align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="30%" align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="150" align="center" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td align="center" valign="top"><img src="images/G_V_PRASAD_Vice_Chairman.jpg" width="118" height="166" /></td>
          </tr>
          <tr>
            <td align="center" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td align="center" valign="top">G V PRASAD<br />Vice Chairman</td>
          </tr>
          <tr>
            <td align="center" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td align="center" valign="top"><img src="images/K_MOHAN_KRISHNA_Vice_President_Operations.jpg" /></td>
          </tr>
          <tr>
            <td align="center" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td align="center" valign="top">K MOHAN KRISHNA<br />
              Vice President Operations</td>
          </tr>
        </table></td>
        <td width="30%" align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" valign="top"><img src="images/SHRI_HARISCHANDRA_REDDY-Chairman.jpg" /></td>
          </tr>
          <tr>
            <td align="center" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td align="center" valign="top">SHRI HARISCHANDRA REDDY<br />
              Chairman</td>
          </tr>
          <tr>
            <td align="center" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td align="center" valign="top"><img src="images/B_GAUTAM_Chief_Executive_Officer.jpg" /></td>
          </tr>
          <tr>
            <td align="center" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td align="center" valign="top">B GAUTAM<br />
              Chief Executive Officer</td>
          </tr>
        </table></td>
        <td width="30%" align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="150" align="center" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td align="center" valign="top"><img src="images/PARVATHY_REDDY_Executive_Director.jpg" width="118" height="166" /></td>
          </tr>
          <tr>
            <td align="center" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td align="center" valign="top">PARVATHY REDDY<br />Executive Director</td>
          </tr>
          <tr>
            <td align="center" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td align="center" valign="top"><img src="images/M_NARAYANAMURTY_Vice_President_Finance.jpg" /></td>
          </tr>
          <tr>
            <td align="center" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td align="center" valign="top">M NARAYANAMURTY<br />Vice President Finance</td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center" valign="top">&nbsp;</td>
        <td align="center" valign="top">&nbsp;</td>
        <td align="center" valign="top">&nbsp;</td>
        <td align="center" valign="top">&nbsp;</td>
        <td align="center" valign="top">&nbsp;</td>
        <td align="center" valign="top">&nbsp;</td>
        <td align="center" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td width="14%" align="center" valign="top"><img src="images/K_A_SRINIVAS_General_Manager_Business_Process_Management.jpg" /></td>
        <td width="14%" align="center" valign="top"><img src="images/S_VENKATESWARA RAO_General_Manager_Human_Resource_Department.jpg" /></td>
        <td width="14%" align="center" valign="top"><img src="images/CHALAPATHI_RAO_Corporate_Chef.jpg" /></td>
        <td width="14%" align="center" valign="top"><img src="images/P_RANGASWAMY_General_Manager_Engineering.jpg" /></td>
        <td width="14%" align="center" valign="top"><img src="images/CH_V_V_S MURTHY_General_Manager_Materials.jpg" /></td>
        <td width="14%" align="center" valign="top"><img src="images/G_SRINIVAS_ General Manager_Sales.jpg" /></td>
        <td width="14%" align="center" valign="top"><img src="images/MANESH_KUMAR_Deputy_General_Manager_House_Keeping.jpg" /></td>
      </tr>
      <tr>
        <td width="14%" align="center" valign="top">&nbsp;</td>
        <td width="14%" align="center" valign="top">&nbsp;</td>
        <td width="14%" align="center" valign="top">&nbsp;</td>
        <td width="14%" align="center" valign="top">&nbsp;</td>
        <td width="14%" align="center" valign="top">&nbsp;</td>
        <td width="14%" align="center" valign="top">&nbsp;</td>
        <td width="14%" align="center" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td width="14%" align="center" valign="top">K A SRINIVAS<br />
          GM - BPM</td>
        <td width="14%" align="center" valign="top">S VENKATESWARA RAO<br />
          GM - Human Resources</td>
        <td width="14%" align="center" valign="top">CHALAPATHI RAO<br />
          Corporate Chef</td>
        <td width="14%" align="center" valign="top">P RANGASWAMY<br />
          GM - Engineering</td>
        <td width="14%" align="center" valign="top">CH V V S MURTHY<br />
          GM - Materials</td>
        <td width="14%" align="center" valign="top">G SRINIVAS<br /> 
          GM - Sales</td>
        <td width="14%" align="center" valign="top">MANESH KUMAR<br />
          GM - House Keeping</td>
      </tr>
    </table></td>
  </tr>
</table>
    </div>
    <div class="close-button r-close-button">x</div>
  </div>
  <!-- Organization Charts Ends --> 


  <!-- Announcements Starts-->
  <div class="r-page announcements_div">
    <div class="page-content">
      <h2 class="page-title">Announcements</h2>
      <table width="100%" border="0" cellspacing="8" cellpadding="0">
        <tr>
          <td valign="top" class="admin_content_area" colspan="2" width="100%"><table width="100%" border="0" cellspacing="0" cellpadding="0">

              <tr>
                <td valign="top">
                
				<?php
				  $ancs =  mysql_query("SELECT * FROM announcements WHERE created_datetime > DATE_ADD(Now(), INTERVAL - 15 DAY) AND prp_code = $prp_id ORDER BY id DESC");
				  while($ancsres = mysql_fetch_array($ancs)){							
					?>
                  <div style="width:100%; height:136px; margin:0px 8px 8px 0px; float:left;" class="color13">
                    <div class="knowyourmanagers_tile_box">
                      <div class="" style="top:10px; font-size:14px; position:relative; padding:0px 0px 0px 5px"> <strong><?php echo $ancsres[announcement]; ?></strong><br />
                        <?=$ancsres[announcement_desc];?>
                        <?php if($ancsres[file_location]!= ''){ ?>
                        <br><a  onclick="window.open('<?=$prp_root;?>/admin/announcementfiles/<?=$ancsres[file_location];?>', 'popUpWindow', 'height=650, width=1100, left=50, top=50, resizable=yes, scrollbars=yes, toolbar=yes, menubar=no, location=no, directories=no, status=yes');">More...</a>
                        <?php } ?>
                        </div>
                      <div class="knowyourmanagers_tile_name" style="float:left; ">
                       <div style="float:right"><img src="images/know_your_hotel.png" width="40" /></div>
                      </div>
                    </div>
                  </div>
                  <?php 
					}
 ?></td>
              </tr>
            </table></td>
        </tr>
      </table>
    </div>
    <div class="close-button r-close-button">x</div>
  </div>
  <!-- Announcements Ends --> 


  <!-- New Joinees Starts-->
  <div class="r-page news_letter_div">
    <div class="page-content">
      <h2 class="page-title">News Letter</h2>
      <table width="100%" border="0" cellspacing="8" cellpadding="0">
        <tr>
          <td valign="top" class="admin_content_area" colspan="2" width="100%">
          
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
                <td align="right" valign="middle"><h2> Date: <?php echo date("j F Y"); ?></h2></td>
              </tr>
              <tr>
                <td valign="top">
                <?php
					$nl = mysql_query("SELECT * FROM news_letter WHERE prp_code = $prp_id ORDER BY id DESC");
					while($nlres= mysql_fetch_array($nl))
					{
						
					?>
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>

                  <div style="width:100%; height:136px; margin:0px 8px 8px 0px;" class="color13">
                    <div class="knowyourmanagers_tile_box">
                      <div class="" style="top:10px; font-size:14px; position:relative; padding:0px 0px 0px 5px"> <strong><?php  echo $nlres[news_title] ?></strong><br />
                        <?=$nlres[news_desc];?><br>
                        <?php if($nlres[nl_file_path]!=''){ ?>
                         <a onclick="window.open('<?=$prp_root;?>/admin/<?=$nlres[nl_file_path];?>', 'popUpWindow', 'height=650, width=1100, left=50, top=50, resizable=yes, scrollbars=yes, toolbar=yes, menubar=no, location=no, directories=no, status=yes');" style="margin: 0px 7px 4px 0px;">More...</a>
                      </div><?php } ?>
                      <div class="knowyourmanagers_tile_name" style="float:left; ">
                       <div style="float:right"><img src="images/newsletter_icon.png" width="40" /></div>
                      </div>
                    </div>
                  </div>
</td>
  </tr>
</table>                  <?php 
					}
 ?></td>
              </tr>
            </table>
            </td>
        </tr>
      </table>
    </div>
    <div class="close-button r-close-button">x</div>
  </div>
  <!-- New Joinees Ends --> 

  <!-- Know Your Managers Starts-->
  <div class="r-page know_your_managers">
    <div class="page-content">
      <h2 class="page-title">Know Your Managers</h2>
      <table width="100%" border="0" cellspacing="8" cellpadding="0">
        <tr>
          <td valign="top" class="admin_content_area" colspan="2" width="100%"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td align="right" valign="middle"><h2> Date:
                    <?php echo date("j F Y") ?>
                  </h2></td>
              </tr>
              <tr>
                <td valign="top">
                	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="">
                          <tr>
                            <td class="color11" valign="top" style="padding:4px">
                              <?php
							  $kym =  mysql_query("SELECT * FROM know_your_managers WHERE prp_code = $prp_id ORDER BY sort_oreder DESC");
								while($kymres = mysql_fetch_array($kym)){
								?>
                                <div  style="width:370px; height:150px; margin:4px; background-color:#FFFFFF; float:left">
                                    <div class="" style="top:10px; position:relative; padding:0px 5px 0px 5px">
                                    
                                    <?php if($kymres[m_pic]!=''){ ?><img src="admin/<?=$kymres[m_pic];?>" align="right" width="130" /><?php }else{?>
                                    <img src="images/know_your_managers.png" width="120" align="right" /><?php } ?>
                                    
                                    
                                        <?php 
										echo $kymres[m_first_name]." ".$kymres[m_last_name]."<br>";
										echo $kymres[m_designation].", ".dept_name($kymres[m_department]) ."<br>";
										echo "Mobile: ".$kymres[m_mobile];
										if($kymres[m_phone] != NULL or $kymres[m_phone] != ''){ echo "<br>Phone: ".$kymres[m_phone]; }//." - (EXT:) ".$kymres[m_phone_extn];
										//echo "<br>FAX: ".$kymres[m_fax];
										?> 
                                        <br><a href="JavaScript:newPopup('mailto:<?=$kymres[m_email];?>');"><?=$kymres[m_email];?></a>                                      
                                    
                                    </div>
                                </div>
                                <?php
								}
							  ?>
                            
                            </td>
                           
                          </tr>
                        </table>
                
                </td>
              </tr>
            </table></td>
        </tr>
      </table>
      
    </div>
    <div class="close-button r-close-button">x</div>
  </div>
  <!-- Know Your Managers Ends --> 


 
  <!--each tile should specify what page type it opens (to determine which animation) and the corresponding page name it should open-->
  <div class="dashboard clearfix">
    <ul class="tiles">
      <div class="col1 clearfix">
        <li class="tile tile-big tile-11 slideTextUp" data-page-type="no" data-page-name="no" onclick="location.href='<?=$home;?>';">
          <div><img src="images/logo123.png"  width="100" /></div>
          <div>
            <p class="prp_font">HOME</p>
          </div>
        </li>
        <?php include("property_tile.php"); ?>
        <li class="tile tile-small tile-13 slideTextRight" data-page-type="s-page" data-page-name="merchandize_div">
          <div >
            <p><img src="images/marchandise_icon.png" width="80" /></p>
          </div>
          <div>
            <p>Merchandize
            </p>
          </div>
        </li>
        <li class="tile tile-small last tile-14 slideTextUp" data-page-type="r-page" data-page-name="org_charts">
          <div>
            <p>Organization Chart</p>
          </div>
          <div><img src="images/org_charts_icon.png"  width="100"  style="margin-top:20px;"/></div>
        </li>
        <li class="tile tile-small tile-25" data-page-type="r-page" data-page-name="cafeteria-menu">
          <div>
            <p align="center">
              Cafeteria Menu</p>
          </div>
        </li>
        <li class="tile tile-tsmall1 last tile-29 slideTextUp" data-page-type="no" data-page-name="no" onclick="location.href='employee_directory.php';">
           <div><p align="center">Employee Directory</p></div>
           <div><p><img src="images/directory_icon.png" width="50" /></p></div>
        </li>
        <li class="tile tile-tsmall1 last tile-16" data-page-type="r-page" data-page-name="announcements_div">
          <div><p align="center">Announcements</p></div>
        </li>
      </div>
      <div class="col2 clearfix">
        <li class="tile tile-small tile-17 slideTextLeft" data-page-type="no" data-page-name="no"  onclick="location.href='induction.php';">
          <div>
            <p><span class=""><img src="images/induction_icon.png"  width="20" />&nbsp;&nbsp;&nbsp;&nbsp;</span>Induction</p>
          </div>
          <div>
            <p>A Few Donts,<br>
              Board of Directors,<br>
              Focus Document,<br>
              etc...</p>
          </div>
        </li>
       
        <li class="tile tile-small last tile-27 slideTextUp" data-page-type="no" data-page-name="no" onclick="location.href='<?=$prp_root;?>/policies.php';">
          <div><p>Policies</p></div>
          <div><p><span class=""><img src="images/policies_icon.png"  width="120" /></span></p></div>
        </li>
        <!--Tiles with a 3D effect should have the following structure:
            1) a container inside the tile with class of .faces
            2) 2 figure elements, one with class .front and the other with class .back-->
        <li class="tile tile-small tile-15nohover" data-page-type="r-page" data-page-name="todays_birthdays">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="140"><marquee direction="up" scrollamount="2" scrolldelay="0" height="130" onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 2, 0);" style="text-align:left; padding-left:3px;">
              
			  <?php
					$tadays_bd = mysql_query("SELECT * FROM employee_directory WHERE prp_code = $prp_id");
					while($tadays_bdres= mysql_fetch_array($tadays_bd))
					{
						$birthDate = $tadays_bdres[birth_date]; 
						$time = strtotime($birthDate);
						if(date('m-d') == date('m-d', $time)) {						
						 echo $tadays_bdres[first_name]." ".$tadays_bdres[last_name]."<br>";
						 $selctdept = mysql_query("SELECT * FROM department WHERE id = '$tadays_bdres[departmentid]'");
						 $selectdeptres = mysql_fetch_array($selctdept);
						 echo $selectdeptres[department_name]."<br>";
						 echo "<img src='admin/$tadays_bdres[emp_pic]' width='140' align='center' style='margin-bottom:5px; border:1px solid #FFFFFF' /><br><hr><br>";
					    }
					}
				 ?>
                </marquee></td>
            </tr>
            <tr>
              <td height="20" style="padding:0 3px;"><span style="clear:both; font-size:14px; float:left">Today's Birthdays</span><span style="float:right"><img src="images/birthday_icon.png" width="20" /></span></td>
            </tr>
          </table>
        </li>
        <li class="tile tile-small last tile-18 slideTextRight" data-page-type="no" data-page-name="no" onclick="location.href='<?=$prp_root;?>/awards.php';">
          <div>
            <p><img src="images/award_icon.png" width="120" /></p>
          </div>
          <div>
            <p>Awards
              <?php /*?> &nbsp;&nbsp;&nbsp;<img src="images/awards_icon_arrow.png" /> <?php */?>
            </p>
          </div>
        </li>
        <li class="tile tile-small tile-19 slideTextLeft" data-page-type="r-page" data-page-name="know_your_managers">
          <div>
            <p>Know Your Managers</p>
          </div>
          <div>
            <p style="font-size:20px;"><span class=""><img src="images/know_your_managers.png"  width="120" /></span></p>
          </div>
        </li>
        <li class="tile tile-small last tile-15nohover" data-page-type="s-page" data-page-name="new_joinees">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="140"><marquee direction="up" scrollamount="2" scrolldelay="0" height="130" onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 2, 0);" style="text-align:left; padding-left:3px;">
              
              <?php
				  $newjns =  mysql_query("SELECT * FROM employee_directory WHERE DATE( joining_date ) >= DATE_SUB( CURDATE( ) , INTERVAL 7 DAY ) AND prp_code = $prp_id");
				  while($newjnsres = mysql_fetch_array($newjns)){							
					
					   echo $newjnsres[first_name]." ".$newjnsres[last_name]."<br>"; 
				 	   $selctdept = mysql_query("SELECT * FROM department WHERE id = '$newjnsres[departmentid]'");
				       $selectdeptres = mysql_fetch_array($selctdept);
					   echo $selectdeptres[department_name]."<br><br>";
					   
					}
					?>
              
              
               
                </marquee></td>
            </tr>
            <tr>
              <td height="20" style="padding:0 3px;"><span style="clear:both; font-size:14px; float:left">New Joinees</span><span style="float:right"><img src="images/meeting_icon.png" width="20" /></span></td>
            </tr>
          </table>
        </li>
        
         
        <li class="tile tile-tsmall tile-25 slideTextRight" data-page-type="no" data-page-name="no" onclick="location.href='<?=$prp_root;?>/employee_suggestions.php';">
          <div><p><span class=""><img src="images/suggestion_icon.png"  width="50" /></span></p></div>
          <div><p style="font-size:17px">Suggestions</p></div>
        </li>
        <li class="tile tile-tsmall tile-22 slideTextLeft" data-page-type="no" data-page-name="no" onclick="location.href='<?=$prp_root;?>/employee_complaints.php';">
          <div><p style="font-size:17px">Complaints</p></div>
          <div><p><span class=""><img src="images/emplpoyee_complaints.png"  width="65" /></span></p></div>
        </li>
        
        
        <li class="tile tile-tsmall1 tile-14 slideTextRight" data-page-type="no" data-page-name="no" onclick="location.href='<?=$prp_root;?>/hotel_events.php';">
          <div><p><span class=""><img src="images/events_icon.png"  width="60" /></span></p></div>
          <div><p style="font-size:23px;">Hotel Events</p></div>
        </li>
        
        <li class="tile tile-tsmall tile-13 slideTextUp" data-page-type="no" data-page-name="no" onclick="location.href='<?=$prp_root;?>/employee_suggestions.php';">
          <div><p>Idea</p></div>
          <div><p><span class=""><img src="images/idea_box_bg.png"  width="35" /></span></p></div>
        </li>
        <li class="tile tile-tsmall tile-26" data-page-type="no" data-page-name="no" onclick="location.href='<?=$prp_root;?>/surveys.php';">
          <div>
            <p align="center">Surveys</p>
          </div>
        </li>
        
        <li class="tile tile-tsmall1 tile-24 slideTextUp" data-page-type="no" data-page-name="no" onclick="location.href='<?=$prp_root;?>/staff_events.php';">
          <div style="background-color:#cd0e13; font-size:23px;"><p>Staff Events</p></div>
          <div style="background-color:#cd0e13;"><p><span class=""><img src="images/events_icon.png"  width="60" /></span></p></div>
        </li>
        

        
        
     
      </div>
      
      <div class="col3 clearfix">
        <li class="tile1 tile-2xbig tile-9">
          <div onclick="playPause('video1','play_btn2')" class="content_box_div" title="Video 2">
            <div class="content_box_newsletter" style="width:100%"> <span style="line-height:50px;">Video</span>
              <div class="video_img" id="video_img" style="width:100%;">
                <video id="video1" width="100%">
                  <source src="Hyderabad_Hotel_Green_Park_1.mp4" type="video/mp4" style="padding-left:0px;">
                  Your browser does not support HTML5 video. </video>
                <div class="play_btn" id="play_btn2"></div>
              </div>
              <script> 
						function playPause(str,str1)
						{
						var myVideo= document.getElementById(str);
						var playbtn2= document.getElementById(str1);
						 
						if (myVideo.paused) {
						  myVideo.play();
						  document.getElementById('play_btn2').style.background = "#FFFFFF url(images/pause_blue.png)";
							document.getElementById('video_img').style.opacity = 1; 
						}else { 
						  myVideo.pause(); 
						  document.getElementById('play_btn2').style.background = "#FFFFFF url(images/play_blue.png)";
							if (document.getElementById('video_img').onmouseover)
							document.getElementById('video_img').onmouseover.style.opacity = 1; 
							esle
							document.getElementById('video_img').style.opacity = .7; 
						}
						} 
						</script> 
            </div>
          </div>
        </li>
        <li class="tile tile-small tile-22 slideTextUp" data-page-type="no" data-page-name="no"  onclick="location.href='library_information.php';">
          <div>
            <p style="font-size:20px;">Library Information</p>
          </div>
          <div><img src="images/library_icon.png"  width="125"  style="margin-top:20px;"/></div>
        </li>
        <li class="tile tile-small last tile-27 slideTextUp" data-page-type="no" data-page-name="no" onclick="location.href='vacancies.php';">
          <div>
            <p>Vacancies</p>
          </div>
          <div><img src="images/vacancies_bg.png"  width="110"  style="margin-top:20px;"/></div>
        </li>
         <li class="tile tile-small tile-20 slideTextRight" data-page-type="no" data-page-name="no" onclick="location.href='<?=$prp_root;?>/record_sales.php';">
          <div><p><span class=""><img src="images/record_sales_icon.png"  width="100" /></span></p></div>
          <div><p>Record Sales</p></div>
        </li>

        
        <li class="tile tile-small last tile-26" data-page-type="r-page" data-page-name="news_letter_div">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="140"><marquee direction="up" scrollamount="2" scrolldelay="0" height="130" onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 2, 0);" style="text-align:left; padding-left:3px;">
              <?php
					$nl = mysql_query("SELECT * FROM news_letter WHERE DATE( news_date ) > DATE_SUB( CURDATE( ) , INTERVAL 3 MONTH ) AND prp_code = $prp_id ORDER BY id DESC");
					while($nlres= mysql_fetch_array($nl))
					{
						 echo $nlres[news_title]."<br><p style='font-size:14px;'>".$nlres[news_desc]."</p><br>";
					}
				 ?>
                </marquee></td>
            </tr>
            <tr>
              <td height="20" style="padding:0 3px;"><span style="clear:both; font-size:14px; float:left">Newsletter</span><span style="float:right"><img src="images/newsletter_icon.png" width="20" /></span></td>
            </tr>
          </table>
          <?php /*?><div style="top:5px;"><p align="center"><img src="images/.png"  width="100" /><br></p></div><?php */?>
        </li>
      </div>
    </ul>
  </div>
  <!--end dashboard--> 
  
</div>
<!--====================================end demo wrapper================================================--> 
<script src="js/jquery-1.8.2.min.js"></script> 
<script src="js/scripts.js"></script>
</body>
</html>