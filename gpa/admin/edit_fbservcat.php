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

$fbservcat_id = $_GET[fbservcat_id];
$sel_fbservcat = mysql_query("SELECT * FROM fb_services_cats WHERE id = '$fbservcat_id'");
$res_fbservcat = mysql_fetch_array($sel_fbservcat);

date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d H:i:s', time());




if(isset($_REQUEST[save_fbservcat])){

	$fbservcat_name = $_POST[fbservcat_name];
	$fbservcat_desc = $_POST[fbservcat_desc];
	$fbservcat_add = mysql_query("UPDATE fb_services_cats SET `fb_serivces_cat_name` = '$fbservcat_name',
								 `fb_serivces_cat_desc` = '$fbservcat_desc' WHERE id  = '$fbservcat_id';");
		if($fbservcat_add){ 
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
<script type="text/javascript">
<!--
// Form validation code will come here.
function validate()
{
 
  if( document.myForm.fbservcat_name.value == "" )
   {
     alert( "Please provide Front Office Category Name" );
     document.myForm.fbservcat_name.focus() ;
     return false;
   }
   
   if( document.myForm.fbservcat_desc.value == "" )
   {
     alert( "Please provide Description" );
     document.myForm.fbservcat_desc.focus() ;
     return false;
   }
   
  
   	
   return( true );
}
//-->
</script>
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
                      F & B Services Categories
                    </div></div>
                    </td>
                  </tr>
                </table>
              
              </td>
              <td width="76%" valign="top" class="admin_content_area">
              <h2>Edit New F &amp; B Service</h2>
                <hr />
                <form id="form1" name="myForm" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" >   
            
        
                
                
                <table width="100%" border="0" cellspacing="5" cellpadding="0">
                  <tr>
                    <td width="20%">F &amp; B Service Name</td><td><input type="text" name="fbservcat_name" id="fbservcat_name" class="adm_inptext" value="<?=$res_fbservcat[fb_serivces_cat_name];?>"  /></td>
                  </tr>
                  <tr>
                    <td width="20%">Description</td><td><input type="text" name="fbservcat_desc" id="fbservcat_desc" class="adm_inptext" value="<?=$res_fbservcat[fb_serivces_cat_desc];?>" /></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td><td align="right"><br />
                    <input type="submit" class="ubutton" name="save_fbservcat" value="Save" onclick="return(validate());"  />&nbsp;&nbsp;&nbsp;
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