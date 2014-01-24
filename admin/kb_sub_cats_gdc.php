<?php

ini_set('session.save_path', 'tmp');
session_start();
ob_start();
error_reporting(E_ALL ^ E_NOTICE);

if ($_SESSION['email_id'] == '' && $_SESSION['role'] != 'admin')
  {
	header('LOCATION: logout.php');	
  }

include("../connect.php");
include("prp_info.php");
$dept_id = $_GET[dept_id];
$dept_sub_id = $_GET[dept_sub_id];
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
                  <tr height="136">
                    <td onclick="location.href='<?=$admin_home;?>/';" class="color6" height="136">
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
                  <td onclick="location.href='<?=$admin_home;?>/knowledge_bank.php';" class="color10" height="136">
                    <div class="tile_box">
                    		<div align="center" style="top:10px; position:relative"><img src="images/knowledge_bank_icon.png"  width="115" /></div>
                          		<div class="tile_name" style="text-transform:capitalize">
                            		Knowledge Bank
                         		</div>
                      		</div>
                        </div>
                    </td>
                  </tr>
                </table>
              
              </td>
              <td width="76%" valign="top" class="admin_content_area">
              <h2>Knowledge Bank</h2>
                <hr />
                <?php 
				if($delmsg!=''){
					echo $delmsg;
				}
				?>
                <div style="overflow:auto; height:400px;">
                <table width="100%" border="0" cellspacing="1" cellpadding="2" bgcolor="#CCCCCC">
                  <tr bgcolor="#999999" height="25"><td><strong>S.No</strong></td><td><strong>Name</strong></td></tr>
                  <tr bgcolor="#ececef">
                    <td width="5%">1</td>
                    <td width="80%" style="text-transform:capitalize">
                 <a href="<?=$admin_home;?>/kb_sub_cats_posts.php?dept_id=<?=$dept_id;?>&dept_sub_id=<?=$dept_sub_id;?>&dept_gdc=GuestDelightActivities" style="cursor:pointer;">
                    Guest Delight Activities
                    </a></td>
                    
                  </tr>
                  <tr bgcolor="#ececef">
                    <td width="5%">2</td>
                    <td width="80%" style="text-transform:capitalize"><a href="<?=$admin_home;?>/kb_sub_cats_posts.php?dept_id=<?=$dept_id;?>&dept_sub_id=<?=$dept_sub_id;?>&dept_gdc=GuestComplaintsHandling" style="cursor:pointer;">Guest Complaints Handling</a></td>
                    
                  </tr>
                </table>
				</div>
                <form method="post" action="create_knowledge_bank.php?burl=<?=$_SERVER['SCRIPT_NAME'];?>&dept_id=<?=$dept_id;?>&dept_sub_id=<?=$dept_sub_id;?>" >
                  <input type="submit" class="ubutton" value="New Knowledge Bank" />
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
</body>
</html>