<?php

ini_set('session.save_path', 'tmp');
session_start();
ob_start();
error_reporting(E_ALL ^ E_NOTICE);


include("../../connect.php");
include("prp_info.php");



include("session_file.php");

if(isset($_REQUEST[cancel_upload])){
	header("Location: daily_cafeteria_menu.php");
	}

date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d H:i:s', time());
$i=5;
$date1 = strtotime(date("Y-m-d", strtotime($date)) . " +".$i."days");

if(isset($_REQUEST[upload_cftm])){
	$menu_date = date('Y-m-d H:i:s',strtotime($_POST[menu_date]));
	$comp_date = date('Y-m-d H:i:s', $date1);
	$menu_non_veg_items = $_POST[menu_non_veg_items];
	$menu_veg_items = $_POST[menu_veg_items];
	$drinks_and_fruits = $_POST[drinks_and_fruits];
	$thought_of_day = $_POST[thought_of_day];
	
	if($menu_date <= $comp_date){
	$vac_save = mysql_query("INSERT INTO cafeteria_menu (`id`, `menu_date`, `menu_non_veg_items`, `menu_veg_items`, `menu_drinks_fruits`, `thought_of_day`, `created_datetime`,  `prp_code`) VALUES (NULL, '$menu_date', '$menu_non_veg_items', '$menu_veg_items', '$drinks_and_fruits', '$thought_of_day', '$date', '$prp_id');");

		if($vac_save){ 
		echo "DONE";
		header("Location: daily_cafeteria_menu.php");
		}else{
			   // $error_msg = "Duplicate record on selected date, please choose another date.";	
				$error_msg = "Fail - ".mysql_error();
			}
	}else{
		$error_msg = "You can upload cefetaria menu for next 5 days only.";	
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
 
   if( document.myForm.menu_date.value == "" )
   {
     alert( "Please provide Menu Date" );
     document.myForm.menu_date.focus() ;
     return false;
   }
  
   
  /* if( document.myForm.menu_non_veg_items.value == "" )
   {
     alert( "Please provide Non Veg Items" );
     document.myForm.menu_non_veg_items.focus() ;
     return false;
   }
   
   if( document.myForm.menu_veg_items.value == "" )
   {
     alert( "Please provide Veg Items" );
     document.myForm.menu_veg_items.focus() ;
     return false;
   }
   */
   if( document.myForm.drinks_and_fruits.value == "" )
   {
	 alert( "Please provide Drinks And Friuts!" );
	 document.myForm.drinks_and_fruits.focus() ;
	 return false;
   }
  
	 if( document.myForm.thought_of_day.value == "" )
   {
	 alert( "Please Enter Thought Of The Day!" );
	 document.myForm.thought_of_day.focus() ;
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
                  <td onclick="location.href='<?=$prp_root;?>/daily_cafeteria_menu.php';" class="color6" height="136">
                    <div class="tile_box">
                    <div align="center" style="top:7px; position:relative"><img src="images/cafeteria_menu_icon.png"  width="100" /></div>
                      <div class="tile_name">
                      Cafeteria Menu
                    </div></div>
                    </td>
                  </tr>
                </table>
              
              </td>
              <td width="76%" valign="top" class="admin_content_area">
              <h2>Create New Cafeteria Menu</h2>
                <hr />
                <form id="form1" name="myForm" method="POST" action="" enctype="multipart/form-data">   
                <table width="100%" border="0" cellspacing="5" cellpadding="0">
                  <tr>
                    <td width="20%">Menu Date</td><td>
                      <input type="text" name="menu_date" id="menu_date" class="adm_inptext"  /><br />
                      <?php if($error_msg != ''){
						  echo "<span style='color:red; font-size:12px;'>".$error_msg."</a>";
						  
					  }?>
                    </td>
                  </tr>
                  <tr>
                    <td width="20%">Non Veg Items</td><td><input type="text" name="menu_non_veg_items" id="menu_non_veg_items" class="adm_inptext"  /></td>
                  </tr>
                  <tr>
                    <td width="20%">Veg Items</td><td>
                      <input type="text" name="menu_veg_items" id="menu_veg_items" class="adm_inptext"  />
                    </td>
                  </tr>
                  <tr>
                    <td width="20%">Drinks And Friuts</td><td>
                      <input type="text" name="drinks_and_fruits" id="drinks_and_fruits" class="adm_inptext"  />
                    </td>
                  </tr>
                  <tr>
                    <td width="20%">Thought Of The Day</td><td>
                      <input type="text" name="thought_of_day" id="thought_of_day" class="adm_inptext"  />
                    </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td><td align="right"><br />
                    <input type="submit" class="ubutton" name="upload_cftm" value="Save"   onclick="return(validate());" />&nbsp;&nbsp;&nbsp;
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
 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css" />
<script>
 $(function() {
$( "#menu_date" ).datepicker({
changeMonth: true,
changeYear: true
});
});
</script>

</body>
</html>