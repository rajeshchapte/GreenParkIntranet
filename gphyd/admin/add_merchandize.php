<?php

ini_set('session.save_path', 'tmp');
session_start();
ob_start();
error_reporting(E_ALL ^ E_NOTICE);


include("../../connect.php");
include("prp_info.php");



include("session_file.php");

if(isset($_REQUEST[cancel_upload])){
	header("Location: merchandize.php");
	}

date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d H:i:s', time());

include( 'function.php');

if(isset($_REQUEST[upload_item])){
	
	$item_name = $_POST[item_name];
	$item_desc = $_POST[item_desc];
	$item_price = $_POST[item_price];
	
	// settings
	$max_file_size = 1024*200; // 200kb
	$valid_exts = array('jpeg', 'jpg', 'png', 'gif');
	// thumbnail sizes
	$sizes = array( 200 => 200);
	$t_path = "marchandize_item/";
	//if ($_SERVER['REQUEST_METHOD'] == 'POST' AND isset($_FILES['image'])) {
		if( $_FILES['item_image']['size'] < $max_file_size ){
			// get file extension
			$ext = strtolower(pathinfo($_FILES['item_image']['name'], PATHINFO_EXTENSION));
			if (in_array($ext, $valid_exts)) {
				/* resize image */
				foreach ($sizes as $w => $h) {
					$files[] = resize($w, $h);
					echo $files;
				}
	
			} else {
				$msg = 'Unsupported file';
			}
		} else{
			$msg = 'Please upload image smaller than 200KB';
		}
	//}

	if(isset($files)){
			foreach ($files as $image) {
				//echo "<img class='img' src='{$image}' /><br /><br />";
				$item_save = mysql_query("INSERT INTO merchandize (`id`, `item_name`, `item_desc`, `item_price`, `item_image`, `prp_code`, `created_datetime`) VALUES (NULL, '$item_name', '$item_desc', '$item_price', '$image', '$prp_id', '$date');");
			
					if($item_save){
						move_uploaded_file($image,$path);
					echo "DONE";
					header("Location: merchandize.php");
					}else{
							echo "Fail".mysql_error();
						}
			}
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
 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css" />
<script>
 $(function() {
$( "#joining_date" ).datepicker({
changeMonth: true,
changeYear: true
});
});

 $(function() {
$( "#birth_date" ).datepicker({
changeMonth: true,
changeYear: true
});
});

</script>



<script type="text/javascript">
<!--
// Form validation code will come here.
function validate()
{
 
   if( document.myForm.item_name.value == "" )
   {
     alert( "Please provide Item Name" );
     document.myForm.item_name.focus() ;
     return false;
   }
  
   if( document.myForm.item_desc.value == "" )
   {
     alert( "Please provide item Descritpin!" );
     document.myForm.item_desc.focus() ;
     return false;
   }
   
   
    if( document.myForm.item_price.value == "" )
   {
     alert( "Please provide Item Price!" );
     document.myForm.item_price.focus() ;
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
                  <td onclick="location.href='<?=$prp_root;?>/merchandize.php';" class="color4" height="136">
                    <div class="tile_box">
                    <div align="center" style="top:10px; position:relative"><img src="images/marchandise_icon.png"  width="80" /></div>
                      <div class="tile_name">
                      Merchandize
                    </div></div>
                    </td>
                  </tr>
                </table>
              
              </td>
              <td width="76%" valign="top" class="admin_content_area">
              <h2>Add New Item</h2>
              <?php if(isset($msg)): ?>
			<p class='alert'><?php echo $msg ?></p>
		<?php endif ?>
                <hr />
                <form id="form1" name="myForm" method="POST" action="" enctype="multipart/form-data"  >   
            
        
                
                
                <table width="100%" border="0" cellspacing="5" cellpadding="0">
                  <tr>
                     <td width="20%">Item Name</td><td>
                       <input type="text" name="item_name" id="item_name" class="adm_inptext"  />
                     </td>
                  </tr>
                  <tr>
                    <td width="20%">Item Description</td><td><input type="text" name="item_desc" id="item_desc" class="adm_inptext"  /></td>
                  </tr>
                  <tr>
                    <td width="20%">Item Price</td><td>
                      <input type="text" name="item_price" id="item_price" class="adm_inptext"  />
                    </td>
                  </tr>
                  <tr>
                    <td width="20%">Item Image</td><td>
                      <input type="file" name="item_image" id="item_image" /> 
                    </td>
                  </tr>
                    <td>&nbsp;</td><td align="right"><br />
                    <input type="submit" class="ubutton" name="upload_item" value="Save" onclick="return(validate());" />&nbsp;&nbsp;&nbsp;
                    <input type="submit" class="ubutton" name="cancel_upload" value="Cancel" /></td>
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