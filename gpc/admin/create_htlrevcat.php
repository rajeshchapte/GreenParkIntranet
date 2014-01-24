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

				//$date = new DateTime();
				//echo $date->format('Y-m-d H:i:s');
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d H:i:s', time());




if(isset($_REQUEST[save_htlrevcat])){

	$htlrevcat_name = $_POST[htlrevcat_name];
	$htlrevcat_desc = $_POST[htlrevcat_desc];
	$htlrevcat_add = mysql_query("INSERT INTO hotel_revenue_cats (`id`, `hotel_revenue_cat_name`, `hotel_revenue_cat_desc`, `prp_code`, `created_datetime`) VALUES (NULL, '$htlrevcat_name', '$htlrevcat_desc', '$prp_id', '$date');");
		if($htlrevcat_add){ 
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
 
  if( document.myForm.htlrevcat_name.value == "" )
   {
     alert( "Please provide Revenue Category Name" );
     document.myForm.htlrevcat_name.focus() ;
     return false;
   }
   
   if( document.myForm.htlrevcat_desc.value == "" )
   {
     alert( "Please provide your Description" );
     document.myForm.htlrevcat_desc.focus() ;
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
                  <td onclick="location.href='<?=$prp_root;?>/htlrev_cats.php';" class="color3" height="136">
                    <div class="tile_box">
                    <div align="center" style="top:10px; position:relative"><img src="images/record_sales_icon.png"  width="80" /></div>
                      <div class="tile_name">
                      Hotel Revenue Categories
                    </div></div>
                    </td>
                  </tr>
                </table>
              
              </td>
              <td width="76%" valign="top" class="admin_content_area">
              <h2>Create New Hotel Revenue Category</h2>
                <hr />
                <form id="form1" name="myForm" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" >   
            
        
                
                
                <table width="100%" border="0" cellspacing="5" cellpadding="0">
                  <tr>
                    <td width="30%">Hotel Revenue Category Name</td><td><input type="text" name="htlrevcat_name" id="htlrevcat_name" class="adm_inptext"  /></td>
                  </tr>
                  <tr>
                    <td width="30%">Description</td><td><input type="text" name="htlrevcat_desc" id="htlrevcat_desc" class="adm_inptext"  /></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td><td align="right"><br /><input type="submit" class="ubutton" name="save_htlrevcat" value="Save"  onclick="return(validate());"  />&nbsp;&nbsp;&nbsp;
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