<?php
$url=$_SERVER['REQUEST_URI'];
header("Refresh: ". 60 * 60 ."; URL=$url");
include("../connect.php"); 
include("prp_info.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="includes/styles1.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GreePark Hotels and Resorts Intranet</title>
</head>

<body>
<div class="wrapper">
  <div class="header">
    <?php /*?> <div class="logo_bar"> 
     <a href="/greenparksample/8/">
          <div class="logo_small" align="center"><img src="images/logo123.png" /><br />
           <div align="center" class="logo_name">GreenPark<br /><span style="font-size:17px;">Hotels</span></div>
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
        <td width="100%">
          <table width="100%" border="0" cellspacing="8" cellpadding="0">        
        
            <tr>
              <td width="33%"> 
              
                <table width="100%" height="280" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td onclick="location.href='/greenparksample/8/';" class="color2" height="136">
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
                  <tr height="136">
                    <td onclick="location.href='<?=$prp_root; ?>/';" class="color1" height="136">
                    <div class="tile_box">
                    <div align="center" style="top:0px; position:relative"><img src="images/Gp_hyd.png" width="100%" /></div>
                      <div class="tile_name" style="background-color:#d9522c; display:block; width:392px;">
                      GreenPark 
                      Hyderabad</div>
                    </div>
                    </td>
                  </tr>
                </table>
              
              </td>
              <td width="33%">
              
                <table width="100%" height="280" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="136">
                    
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="49%" height="136" class="color9" onclick="location.href='induction.php';" >
                    <div class="tile_box">
                    <div align="center" style="top:10px; position:relative"><img src="images/induction_icon.png"  width="70" /></div>
                      <div class="tile_name">
                      Induction</div>
                    </div>
                    </td>
                    <td width="8"></td>
                    <td width="49%" height="136" class="color18" onclick="location.href='policies.php';" >
                    <div class="tile_box">
                    <div align="center" style="top:20px; position:relative"><img src="images/policies_icon.png"  width="100" /></div>
                      <div class="tile_name">
                      Policies</div>
                    </div>
                    </td>
                  </tr>                  
                </table>
                    
                    
                    </td>
                    
                  </tr>
                  <tr>
                    <td height="8"></td>
                  </tr>
                  <tr height="136">
                    <td onclick="location.href='todays_birthdays.php';" class="color6" height="136">
                    <div class="tile_box">
                    <div class="title_text" style="top:10px; position:relative">
                    <marquee direction="up" scrollamount="2" scrolldelay="0" height="100" onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 2, 0);">
                    <?php
					$tadays_bd = mysql_query("SELECT * FROM employee_directory WHERE prp_code = $prp_id");
						
							while($tadays_bdres = mysql_fetch_array($tadays_bd))
							{
								
									$birthDate = $tadays_bdres[birth_date]; 
									$time = strtotime($birthDate);
									if(date('m-d') == date('m-d', $time)) {
									echo $tadays_bdres[first_name]." ".$tadays_bdres[last_name]."<br />".$tadays_bdres[designation]."<br /><br />";
								}
								
							}
						//echo $bdmsg;
					?>
                    </marquee>
                    </div>
                      <div class="tile_name" style="float:left; ">Today's Birthdays 
                      <div style="float:right"><img src="images/birthday_icon.png" width="20" /></div>
                      </div>
                    </div>
                    </td>
                  </tr>
                </table>
                
              </td>
              <td width="33%">
              
                <table width="100%" height="280" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td class="color4" height="136" width="49%" onclick="location.href='library_information.php';" >
                    <div class="tile_box">
                     <div align="center" style="top:7px; position:relative"><img src="images/library_icon.png"  width="90" /></div>
                      <div class="tile_name">
                        Library Information
                    </div>
                    </div>
                    
                    </td>
                    <td width="8"></td>
                    <td class="color12"  height="136" width="49%" onclick="location.href='vacancies.php';" >
                    <div class="tile_box">
                    <div align="center" style="top:10px; position:relative"><img src="images/vacancies_bg.png"  width="85" /></div>
                      <div class="tile_name">
                      Vaccancies
                    </div></div>
                    </td>
                  </tr>
                  <tr height="8">
                    <td colspan="3"></td>
                  </tr>
                  <tr> <?php /*?>onclick="location.href='http://103.1.173.75/GPHODCheckList/';"<?php */?>
                    <td colspan="3" class="color3" height="136" onclick="location.href='new_joinees.php';" >
                    <div class="tile_box">
                    <div class="title_text" style="top:10px; position:relative">
                    <marquee direction="up" scrollamount="2" scrolldelay="0" height="100" onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 2, 0);">
                    <?php
					$newjns =  mysql_query("SELECT * FROM employee_directory WHERE joining_date BETWEEN SYSDATE( ) - INTERVAL 7 DAY AND SYSDATE( ) AND prp_code = $prp_id");
					    while($newjnsres = mysql_fetch_array($newjns)){
							
								
									//$joiningDate = $newjnsres[birth_date]; 
									//$time = strtotime($joiningDate);
									//if(date('m-d') == date('m-d', $time)) {
									echo $newjnsres[first_name]." ".$newjnsres[last_name]."<br />".$newjnsres[designation]."<br /><br />";
								//}
								
							}
						//echo $bdmsg;
					?>
                    </marquee>
                    </div>
                      <div class="tile_name" style="float:left; ">New Joinees 
                      <div style="float:right"><img src="images/meeting_icon.png" width="20" /></div>
                      </div>
                    </div>
                    
                   
                    </td>
                  </tr>
                </table>
                
              </td>
            </tr>
            
            
            <tr>
              <td>
              
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="49%" height="140" onclick="location.href='#';" class="color4">
                    <div class="tile_box">
                    <div align="center" style="top:10px; position:relative"><img src="images/idea_box_icon.png"  width="60" /></div>
                      <div class="tile_name">
                     Idea Box
                    </div></div>
                   </td>
                   <td width="8"></td>
                    <td width="49%" height="140" class="color5" onclick="location.href='organization_charts.php';" >
                    <div class="tile_box">
                     <div align="center" style="top:30px; position:relative"><img src="images/org_charts_icon.png"  width="70" /></div>
                      <div class="tile_name">
                     Organization Charts
                    </div>
                    </div>
                    </td>
                  </tr>
                </table>
              </td>
              
              <td>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="49%" height="140" onclick="location.href='awards.php';" class="color2">
                      <div class="tile_box">
                      <div align="center" style="top:10px; position:relative"><img src="images/award_icon.png"  width="100" /></div>
                      <div class="tile_name">
                      Awards                      </div>
                    </div>
                      </td>
                      <td width="8"></td>
                      <td width="49%" height="140" onclick="location.href='know_your_managers.php';" class="color15">
                      <div class="tile_box">
                      <div align="center" style="top:15px; position:relative"><img src="images/know_your_managers.png"  width="90" /></div>
                      <div class="tile_name">
                      Know Your Managers                      </div>
                    </div>
                      </td>
                  </tr>
                </table>
                
              </td>
              <td>
              
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="49%" height="140" class="color9" onclick="location.href='#';" >
                     <div class="tile_box">
                    <div align="center" style="top:10px; position:relative"><img src="images/task_trackin_system_icon.png"  width="100" /></div>
                      <div class="tile_name">
                      Newsletter
                    </div></div>
                    
                   
                    </td>
                    <td width="8"></td>
                    <td width="49%" height="140" class="color16" onclick="location.href='events.php';" >
                    <div class="tile_box">
                     <div align="center" style="top:7px; position:relative"><img src="images/events_icon.png"  width="110" /></div>
                      <div class="tile_name">
                     Hotel Events / Staff Events
                    </div>
                    </div>
                    </td>
                  </tr>                  
                </table>
                
              </td>
            </tr>

            
            <tr>
              <td height="140"> 
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td  height="140" onclick="location.href='daily_cafeteria_menu.php';" class="color6">
                    <div class="tile_box">
                    <div align="center" style="top:10px; position:relative"><img src="images/cafeteria_menu_icon.png"  width="100" /></div>
                      <div class="tile_name">
                      Cafeteria Menu</div>
                    </div></td>
                    <td width="8"></td>
                    <td width="49%" height="140" class="color4" onclick="location.href='employee_suggestions.php';" >
                    <div class="tile_box">
                     <div align="center" style="top:15px; position:relative"><img src="images/suggestion_icon.png"  width="70" /></div>
                      <div class="tile_name">
                      Announcements</div>
                    </div>
                    </td>
                  </tr>
                </table>
              </td>
              <td height="140">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="49%" height="140" onclick="location.href='employee_complaints.php';" class="color13">
                    <div class="tile_box">
                    <div align="center" style="top:5px; position:relative"><img src="images/emplpoyee_complaints.png"  width="150" /></div>
                      
                    </div></td>
                    <td width="8"></td>
                    <td width="49%" height="140" class="color4" onclick="location.href='employee_suggestions.php';" >
                    <div class="tile_box">
                     <div align="center" style="top:15px; position:relative"><img src="images/suggestion_icon.png"  width="70" /></div>
                      <div class="tile_name">
                      Employee Suggestions</div>
                    </div>
                    </td>
                  </tr>
                </table>
              </td>
              <td height="140"> 
                <table width="100%" border="0" cellspacing="0" cellpadding="0">                  
                  <tr>
                    <td width="49%" height="140" class="color10" onclick="location.href='#';">
                     <div class="tile_box">
                     <div align="center" style="top:10px; position:relative"><img src="images/record_sales_icon.png"  width="100" /></div>
                    <div class="tile_name">
                      Record Sales</div>
                    </div>
                   
                    </td>
                    <td width="8"></td>
                    <td height="140" width="49%" class="color7" onclick="location.href='#';">
                     <div class="tile_box">
                     <div align="center" style="top:10px; position:relative"><img src="images/surveys_icov.png"  width="80" /></div>
                    <div class="tile_name">
                      Surveys</div>
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
    </div>
    
  </div>
  </div>
</div>
</body>
</html>