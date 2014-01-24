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

if(isset($_REQUEST[delete_sop])){
	$sopdelid = $_POST[sopid];
	$delsopfile = mysql_query("DELETE FROM sops WHERE id = $sopdelid and sop_type = 'animated'");
	if($delsopfile){
		$delmsg = "SOP File Deleted";
		//unlink($somefile);
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
                  <td onclick="location.href='<?=$admin_home;?>/sop.php';" class="color1" height="136">
                    <div class="tile_box">
                    <div align="center" style="top:10px; position:relative"><img src="images/sop_icon.png"  width="100" /></div>
                      <div class="tile_name">
                      SOP's
                    </div></div>
                    </td>
                  </tr>
                  <tr>
                    <td height="8"></td>
                  </tr>
                  <tr>
                  <td onclick="location.href='<?=$admin_home;?>/animated_sop.php';" class="color1" height="136">
                    <div class="tile_box">
                    <div align="center" style="top:10px; position:relative"><img src="images/sop_icon.png"  width="100" /></div>
                      <div class="tile_name">
                      Animated SOP's
                    </div></div>
                    </td>
                  </tr>
                </table>
              
              </td>
              <td width="76%" valign="top" class="admin_content_area">
<script src="html5lightbox.js" type="text/javascript" charset="utf-8"></script>
<script src="jquery.js" type="text/javascript" charset="utf-8"></script>



              <h2>SOP's</h2>
                <hr />
                <?php 
				if($delmsg!=''){
					echo $delmsg;
				}
				?>
                <div style="overflow:auto; height:400px;">
                <table width="100%" border="0" cellspacing="1" cellpadding="2" bgcolor="#CCCCCC">
                  <tr bgcolor="#999999" height="25"><td><strong>S.No</strong></td><td><strong>SOP Name</strong></td><td><strong>Action</strong></td></tr>
                  <?php
				  $i = 1;
				  $sops =  mysql_query("SELECT * FROM sops WHERE sop_type = 'animated'");
					    while($sopsres = mysql_fetch_array($sops)){
							$soppdf = $sopsres[soppdf_title];
				  ?>
                  <tr bgcolor="#ececef">
                    <td width="5%"><?php echo $i; ?></td>
                    <td width="80%" style="text-transform:capitalize">
<a href="asopfiles/<?=$sopsres[file_location]; ?>" class="html5lightbox" data-group="mygroup"  data-width="480" data-height="320" title="<?=$sopsres[soppdf_title]; ?>"><?=$sopsres[soppdf_title]; ?></a>
                    </td>
                    <td width="15%" align="right">
                    
                     <div style="float:right">
                      <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" name="delete_sopform">
                        <input type="hidden" name="sopid" value="<?php echo $sopsres[id] ?>"  />
                        <input type="submit" name="delete_sop" value="Delete" class="ubutton" onclick="return confirm('Are you sure want to delete?');" />
                      </form></div>
                      
                      <div style="float:right"><form method="get" action="edit_sop.php" name="edit_emp">
                        <input type="hidden" name="sopid" value="<?php echo $sopsres[id] ?>"  /> 
                        <input type="hidden" name="sop_type" value="animated"  />                  
                        <input type="submit" name="edit_sop" value="Edit" class="ubutton" />
                      </form>
                      </div>
                      
                    
                    
                    
                      
                    </td>
                  </tr>
                  <?php $i++; } ?>
                  <script type="text/javascript">
					var html5lightbox_options = {
						watermark: "",
						watermarklink: ""
					};
				</script>

                </table>
				</div>
                <form method="post" action="upload_asopfile.php" >
                <input type="hidden" name="sop_type" value="animated"  />
                  <input type="submit" class="ubutton" value="New SOP" />
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