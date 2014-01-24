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


if(isset($_REQUEST[delete_polc])){
	
	$polcdelid = $_POST[polcid];
	//echo $polcdelid;
	$delpolcfile = mysql_query("DELETE FROM policies WHERE id = '$polcdelid'");
	if($delpolcfile){
		$delmsg = "Policy Deleted";
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
                  <td onclick="location.href='<?php $_SERVER['DOCUMENT_ROOT'] ?>/greenparksample/8/admin/policies.php';" class="color7" height="136">
                    <div class="tile_box">
                    <div align="center" style="top:10px; position:relative"><img src="images/policies_icon.png"  width="100" /></div>
                      <div class="tile_name">
                      Policies
                    </div></div>
                    </td>
                  </tr>
                </table>
              
              </td>
              <td width="76%" valign="top" class="admin_content_area">
              <h2>Policies</h2>
                <hr />

                <?php 
				if($delmsg!=''){
					echo $delmsg;
				}
				?>
                <div style="overflow:auto; height:400px;">
                <table width="100%" border="0" cellspacing="1" cellpadding="2" bgcolor="#CCCCCC">
                  <tr bgcolor="#999999" height="25"><td><strong>S. No</strong></td><td><strong>Policy Title</strong></td><td><strong>Policy Category</strong></td><td><strong>Action</strong></td></tr>
                  <?php
				  $i = 1;
				  $polcs =  mysql_query("SELECT * FROM policies");
					    while($polcsres = mysql_fetch_array($polcs)){
							
				  ?>
                  <tr bgcolor="#ececef">
                    <td width="7%"><?php echo $i; ?></td>
                    <td width="50%" style="text-transform:capitalize"><a style="cursor:pointer;"><?=$polcsres[policy_title];?></a></td>
                    <td width="23%">
                    <?php 
					$polc_cate_res = mysql_query("SELECT * FROM policy_categories WHERE id = $polcsres[policy_caregotry_id]");
					$polc_cate_res = mysql_fetch_array($polc_cate_res);
					echo $polc_cate_res[policy_category];
					?>
                    </td>
                    <td width="20%" align="right">
                      <div style="float:right">
                      <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" name="delete_pocform">
                        <input type="hidden" name="polcid" value="<?php echo $polcsres[id] ?>"  />
                        <input type="hidden" name="polc_text" value="<?php echo $polcsres[policy_title]; ?>"  />
                        <input type="submit" name="delete_polc" value="Delete" class="ubutton" onclick="return confirm('Are you sure want to delete?');" />
                      </form></div>
                      
                      <div style="float:right"><form method="get" action="edit_policies.php" name="edit_pocform">
                        <input type="hidden" name="polc_id" value="<?php echo $polcsres[id] ?>"  />
                        <input type="hidden" name="polc_text" value="<?php echo $polcsres[policy_title]; ?>"  />
                        <input type="submit" name="edit_poc" value="Edit" class="ubutton" />
                      </form>
                      </div>
                      
                    </td>
                  </tr>
                  <?php $i++; } ?>
                </table>
				</div>
                <form method="post" action="upload_policies.php" >
                  <input type="submit" class="ubutton" value="New Policy" />
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