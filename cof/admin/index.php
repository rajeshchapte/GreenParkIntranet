<?php
ini_set('session.save_path', 'tmp');

error_reporting(E_ALL ^ E_NOTICE); //For Hiding undefined errors 

ini_set('session.save_path', 'tmp');
session_start();
include("../../connect.php");

include("prp_info.php");
include("session_file.php");
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
                    <td onclick="location.href='<?=$home;?>';" class="color2" height="136">
                    <div class="tile_box" sty>
                    <div align="center" style="top:10px; position:relative;"><img src="images/logo123.png"  width="80" /></div>
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
                    <td onclick="location.href='<?=$prp_root; ?>/';" class="color6" height="136">
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
                 
                </table>
              
              </td>
              <td width="76%" valign="top">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  
                  <tr>
                    <td>
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tr>
										
						<td width="100%"  height="136">
                        <div style="width:190px; height:136px; margin:0px 8px 8px 0px; float:left;" onclick="location.href='<?=$prp_root; ?>/emp_dir.php';" class="color15">
                        <div class="tile_box">
                    		<div align="center" style="top:15px; position:relative"><img src="images/directory_icon.png"  width="80" /></div>
                          		<div class="tile_name" style="text-transform:capitalize">
                            		Employee Directory
                         		</div>
                      		</div>
                        </div>
                        
                        <div style="width:190px; height:136px; margin:0px 8px 8px 0px; float:left;" onclick="location.href='<?=$prp_root; ?>/gp_users.php';" class="color5">
                        <div class="tile_box">
                    		<div align="center" style="top:15px; position:relative"><img src="images/users_icon.png"  width="80" /></div>
                          		<div class="tile_name" style="text-transform:capitalize">
                            		<?=$res_prp[property_name];?> Users
                         		</div>
                      		</div>
                        </div>                        

                        <div style="width:190px; height:136px; margin:0px 8px 8px 0px; float:left;" onclick="location.href='<?=$prp_root; ?>/departments.php';" class="color19">
                        <div class="tile_box">
                    		<div align="center" style="top:15px; position:relative"><img src="images/departments_icon.png"  width="80" /></div>
                          		<div class="tile_name" style="text-transform:capitalize">
                            		Departments
                         		</div>
                      		</div>
                        </div>                        

                        <div style="width:190px; height:136px; margin:0px 8px 8px 0px; float:left;" onclick="location.href='<?=$prp_root; ?>/policies.php';" class="color18">
                        <div class="tile_box">
                    		<div align="center" style="top:15px; position:relative"><img src="images/policies_icon.png"  width="90" /></div>
                          		<div class="tile_name" style="text-transform:capitalize">
                            		Policies
                         		</div>
                      		</div>
                        </div>
                        
                        <div style="width:190px; height:136px; margin:0px 8px 8px 0px; float:left;" onclick="location.href='<?=$prp_root; ?>/vacancies.php';" class="color12">
                        <div class="tile_box">
                    		<div align="center" style="top:15px; position:relative"><img src="images/vacancies_bg.png"  width="90" /></div>
                          		<div class="tile_name" style="text-transform:capitalize">
                            		Vacancies
                         		</div>
                      		</div>
                        </div>
                        
                        <div style="width:190px; height:136px; margin:0px 8px 8px 0px; float:left;" onclick="location.href='<?=$prp_root; ?>/library_information.php';" class="color4">
                        <div class="tile_box">
                    		<div align="center" style="top:7px; position:relative"><img src="images/library_icon.png"  width="90" /></div>
                          		<div class="tile_name" style="text-transform:capitalize">
                            		Library Information
                         		</div>
                      		</div>
                        </div>
                        
                                                
                        <div style="width:190px; height:136px; margin:0px 8px 8px 0px; float:left;" onclick="location.href='<?=$prp_root; ?>/employee_suggestions.php';" class="color4">
                        <div class="tile_box">
                    		<div align="center" style="top:15px; position:relative"><img src="images/suggestion_icon.png"  width="70" /></div>
                          		<div class="tile_name" style="text-transform:capitalize">
                            		Employee Suggestions
                         		</div>
                      		</div>
                        </div>
  
                        <div style="width:190px; height:136px; margin:0px 8px 8px 0px; float:left;" class="color19"  onclick="location.href='news_letter.php';">
                        <div class="tile_box">
                    		<div align="center" style="top:0px; position:relative"><img src="images/newsletter_icon.png"  width="110" /></div>
                          		<div class="tile_name" style="text-transform:capitalize">
                            		Newsletter
                         		</div>
                      		</div>
                        </div>
                        
                        <div style="width:190px; height:136px; margin:0px 8px 8px 0px; float:left;" onclick="location.href='<?=$prp_root; ?>/employee_complaints.php';" class="color13">
                        <div class="tile_box">
                    		<div align="center" style="top:3px; position:relative"><img src="images/emplpoyee_complaints.png"  width="150" /></div>
                          		<div class="tile_name" style="text-transform:capitalize">
                            		
                         		</div>
                      		</div>
                        </div>

                        <div style="width:190px; height:136px; margin:0px 8px 8px 0px; float:left;" class="color3"  onclick="location.href='surveys.php';">
                        <div class="tile_box">
                    		<div align="center" style="top:10px; position:relative"><img src="images/record_sales_icon.png"  width="80" /></div>
                          		<div class="tile_name" style="text-transform:capitalize">
                            		Surveys
                         		</div>
                      		</div>
                        </div>


                        <div style="width:190px; height:136px; margin:0px 8px 8px 0px; float:left;" class="color15"  onclick="location.href='hotel_events.php';">
                        <div class="tile_box">
                    		<div align="center" style="top:7px; position:relative"><img src="images/events_icon.png"  width="100" /></div>
                          		<div class="tile_name" style="text-transform:capitalize">
                            		Hotel Events
                         		</div>
                      		</div>
                        </div>

                        
                        <div style="width:190px; height:136px; margin:0px 8px 8px 0px; float:left;" class="color18"  onclick="location.href='staff_events.php';">
                        <div class="tile_box">
                    		<div align="center" style="top:7px; position:relative"><img src="images/events_icon.png"  width="100" /></div>
                          		<div class="tile_name" style="text-transform:capitalize">
                            		Staff Events
                         		</div>
                      		</div>
                        </div>
                        
                        <div style="width:190px; height:136px; margin:0px 8px 8px 0px; float:left;" class="color6"  onclick="location.href='daily_cafeteria_menu.php';">
                        <div class="tile_box">
                    		<div align="center" style="top:13px; position:relative"><img src="images/cafeteria_menu_icon.png"  width="80" /></div>
                          		<div class="tile_name" style="text-transform:capitalize">
                            		Cafeteria Menu
                         		</div>
                      		</div>
                        </div>
                        
                        <div style="width:190px; height:136px; margin:0px 8px 8px 0px; float:left;" class="color2"  onclick="location.href='awards.php';">
                        <div class="tile_box">
                    		<div align="center" style="top:13px; position:relative"><img src="images/award_icon.png"  width="80" /></div>
                          		<div class="tile_name" style="text-transform:capitalize">
                            		Awards
                         		</div>
                      		</div>
                        </div>

                     
                        <div style="width:190px; height:136px; margin:0px 8px 8px 0px; float:left;" class="color19"  onclick="location.href='announcements.php';">
                        <div class="tile_box">
                    		<div align="center" style="top:10px; position:relative"><img src="images/know_your_hotel.png"  width="110" /></div>
                          		<div class="tile_name" style="text-transform:capitalize">
                            		Announcements
                         		</div>
                      		</div>
                        </div>
                     
                     
                        <div style="width:190px; height:136px; margin:0px 8px 8px 0px; float:left;" class="color4"  onclick="location.href='merchandize.php';">
                        <div class="tile_box">
                    		<div align="center" style="top:10px; position:relative"><img src="images/marchandise_icon.png"  width="80" /></div>
                          		<div class="tile_name" style="text-transform:capitalize">
                            		Merchandize
                         		</div>
                      		</div>
                        </div>


                        <div style="width:190px; height:136px; margin:0px 8px 8px 0px; float:left;" class="color3"  onclick="location.href='know_your_managers.php';">
                        <div class="tile_box">
                    		<div align="center" style="top:10px; position:relative"><img src="images/know_your_managers.png"  width="80" /></div>
                          		<div class="tile_name" style="text-transform:capitalize">
                            		Know Your Managers
                         		</div>
                      		</div>
                        </div>
                    
                        <div style="width:190px; height:136px; margin:0px 8px 8px 0px; float:left;" class="color3"  onclick="location.href='all_record_sales.php';">
                        <div class="tile_box">
                    		<div align="center" style="top:10px; position:relative"><img src="images/record_sales_icon.png"  width="80" /></div>
                          		<div class="tile_name" style="text-transform:capitalize">
                            		Record Sales
                         		</div>
                      		</div>
                        </div>

                        <div style="width:190px; height:136px; margin:0px 8px 8px 0px; float:left;" class="color3"  onclick="location.href='fb_services_cats.php';">
                        <div class="tile_box">
                    		<div align="center" style="top:10px; position:relative"><img src="images/record_sales_icon.png"  width="80" /></div>
                          		<div class="tile_name" style="text-transform:capitalize">
                            		F & B Services Categories
                         		</div>
                      		</div>
                        </div>
                        <div style="width:190px; height:136px; margin:0px 8px 8px 0px; float:left;" class="color3"  onclick="location.href='fo_services_cats.php';">
                        <div class="tile_box">
                    		<div align="center" style="top:10px; position:relative"><img src="images/record_sales_icon.png"  width="80" /></div>
                          		<div class="tile_name" style="text-transform:capitalize">
                            		Front Office Categories
                         		</div>
                      		</div>
                        </div>
                        
                        <div style="width:190px; height:136px; margin:0px 8px 8px 0px; float:left;" class="color3"  onclick="location.href='htlrev_cats.php';">
                        <div class="tile_box">
                    		<div align="center" style="top:10px; position:relative"><img src="images/record_sales_icon.png"  width="80" /></div>
                          		<div class="tile_name" style="text-transform:capitalize">
                            		Hotel Revenue Categories
                         		</div>
                      		</div>
                        </div>
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