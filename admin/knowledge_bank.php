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
                  <tr bgcolor="#999999" height="25"><td><strong>S.No</strong></td><td><strong>Name</strong></td><td><strong>Action</strong></td></tr>
                  <?php
				  $i = 1;
				  $sops =  mysql_query("SELECT * FROM department ORDER BY department_name ASC");
					    while($sopsres = mysql_fetch_array($sops)){
							$soppdf = $sopsres[department_name];
				  ?>
                  <tr bgcolor="#ececef">
                    <td width="5%"><?php echo $i; ?></td>
                    <td width="60%" style="text-transform:capitalize"><a href="<?=$admin_home;?>/kb_sub_cats.php?dept_id=<?=$sopsres[id];?>" style="cursor:pointer;"><?=$sopsres[department_name];?></a></td>
                    <td width="20%" ><a href="create_dept_sub_cat.php?dept_id=<?=$sopsres[id];?>&purl=<?=$_SERVER['REQUEST_URI'];?>">Create Sub Category</a></td>
                    
                  </tr>
                  <?php $i++; } ?>
                </table>
				</div>
                <form method="post" action="create_knowledge_bank.php?burl=<?=$_SERVER['REQUEST_URI'];?>" >
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