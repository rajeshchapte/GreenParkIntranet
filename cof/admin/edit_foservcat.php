<?php
error_reporting(E_ALL ^ E_NOTICE);

ini_set('session.save_path', 'tmp');
session_start();
ob_start();

include("../../connect.php");
include("prp_info.php");	


include("session_file.php");
if(isset($_REQUEST[cancel])){
	header("Location: ".$_GET[purl]);
	}

$foservcat_id = $_GET[foservcat_id];
$sel_foservcat = mysql_query("SELECT * FROM fo_services_cats WHERE id = '$foservcat_id'");
$res_foservcat = mysql_fetch_array($sel_foservcat);

date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d H:i:s', time());




if(isset($_REQUEST[save_foservcat])){

	$foservcat_name = $_POST[foservcat_name];
	$foservcat_desc = $_POST[foservcat_desc];
	$foservcat_add = mysql_query("UPDATE fo_services_cats SET `fo_serivces_cat_name` = '$foservcat_name',
								 `fo_serivces_cat_desc` = '$foservcat_desc' WHERE id  = '$foservcat_id';");
		if($foservcat_add){ 
		echo "done";
		header("Location: ".$_GET[purl]);
		}
	//}
}
	

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
                    <td onclick="location.href='<?=$home; ?>';" class="color2" height="136">
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
                  <?php include("property_tile.php"); ?>
                  <tr>
                    <td height="8"></td>
                  </tr>
                  <tr height="136">
                    <td onclick="location.href='<?=$prp_root;?>/';" class="color6" height="136">
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
                  <td onclick="location.href='<?=$prp_root;?>/fb_services_cats.php';" class="color3" height="136">
                    <div class="tile_box">
                    <div align="center" style="top:10px; position:relative"><img src="images/record_sales_icon.png"  width="80" /></div>
                      <div class="tile_name">
                      Front Office Categories
                    </div></div>
                    </td>
                  </tr>
                </table>
              
              </td>
              <td width="76%" valign="top" class="admin_content_area">
              <h2>Edit Front Office Category</h2>
                <hr />
                <form id="form1" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" >   
            
        
                
                
                <table width="100%" border="0" cellspacing="5" cellpadding="0">
                  <tr>
                    <td width="25%">Front Office Category Name</td><td width="75%"><input type="text" name="foservcat_name" id="foservcat_name" class="adm_inptext" value="<?=$res_foservcat[fo_serivces_cat_name];?>"  /></td>
                  </tr>
                  <tr>
                    <td>Description</td><td><input type="text" name="foservcat_desc" id="foservcat_desc" class="adm_inptext" value="<?=$res_foservcat[fo_serivces_cat_desc];?>" /></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td><td align="right"><br /><input type="submit" class="ubutton" name="save_foservcat" value="Save" />&nbsp;&nbsp;&nbsp;
                    <input type="submit" class="ubutton" name="cancel" value="Cancel" /></td>
                  </tr>
                </table>

                  
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