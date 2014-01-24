<?php

ini_set('session.save_path', 'tmp');
session_start();
error_reporting(E_ALL ^ E_NOTICE);

include("../../connect.php");
include("prp_info.php");	


include("session_file.php");
if(isset($_REQUEST[cancel])){
	@header("Location: upload_policies.php");
	}

				//$date = new DateTime();
				//echo $date->format('Y-m-d H:i:s');
//date_default_timezone_set('Asia/Kolkata');
//$date = date('Y-m-d H:i:s', time());




if(isset($_REQUEST[save_cate])){

	$polc_cate = $_POST[polc_cate];
	$polc_cate_desc = $_POST[polc_cate_desc];
	$polc_cate_add = mysql_query("INSERT INTO policy_categories (`id`, `policy_category`, `polc_cate_desc`) VALUES (NULL, '$polc_cate', '$polc_cate_desc');");

		if($polc_cate_add){ 
		echo "done";
		@header("Location: upload_policies.php");
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
	
	function validate(){
	
	if( document.myForm.polc_cate.value == "" )
	   {
		 alert( "Please provide your Policy Category!" );
		 document.myForm.polc_cate.focus() ;
		 return false;
	   }
	
	
	if( document.myForm.polc_cate_desc.value == "" )
	   {
		 alert( "Please Enter your Policy Description!" );
		 document.myForm.polc_cate_desc.focus() ;
		 return false;
	   }
   
}
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
                  <td onclick="location.href='<?=$prp_root;?>/policies.php';" class="color1" height="136">
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
              <h2>Create New policy</h2>
                <hr />
                <form id="form1" name="myForm" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data"  onsubmit="return(validate());">   
            
        
                
                
                <table width="100%" border="0" cellspacing="5" cellpadding="0">
                  <tr>
                    <td width="20%">Policy Category</td><td><input type="text" name="polc_cate" id="polc_cate" class="adm_inptext"  /></td>
                  </tr>
                  <tr>
                    <td width="20%">Description</td><td><input type="text" name="polc_cate_desc" id="polc_cate_desc" class="adm_inptext"  /></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td><td align="right"><br /><input type="submit" class="ubutton" name="save_cate" value="Save" />&nbsp;&nbsp;&nbsp;
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