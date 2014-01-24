<?php

ini_set('session.save_path', 'tmp');
session_start();
ob_start();
error_reporting(E_ALL ^ E_NOTICE);


include("../../connect.php");
include("prp_info.php");



include("session_file.php");

if(isset($_REQUEST[cancel_upload])){
	header("Location: announcements.php");
	}

date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d H:i:s', time());
$i=5;
$date1 = strtotime(date("Y-m-d", strtotime($date)) . " +".$i."days");

if(isset($_REQUEST[upload_ancs])){
	$announcement_name = $_POST[announcement_name];
	$announcement_desc = $_POST[announcement_desc];
	
	
	$t_path = "announcementfiles/"; //This is the directory where images will be saved 
	$fname = basename( $_FILES['ancmnt_file']['name']); 
	$array=explode(".",$fname,2);
	$ext=".".$array[1]; //to get the proper extension of the file
	$rfile=str_replace(" ","_",$fname); //To get the name of the image
	//echo $rfile;
	$nfile=$rfile; //To change the new name with proper extension
	$t_path=$t_path.$nfile; //to get the path  where the file will be uploaded
	$profile_pic=$t_path;

	
	$ancs_save = mysql_query("INSERT INTO `announcements` (`id`, `announcement`, `announcement_desc`, `file_location`, `departmentid`, `prp_code`, `created_datetime`) VALUES (NULL, '$announcement_name', '$announcement_desc', '$rfile', NULL, '$prp_id', '$date');");

		if($ancs_save){ 
		echo "DONE";
		move_uploaded_file($_FILES['ancmnt_file']['tmp_name'],$t_path);
		header("Location: announcements.php");		
		}else{
			$error_msg = "Fail";	
		}
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


<script type="text/javascript">
<!--
// Form validation code will come here.
function validate()
{
 
   if( document.myForm.announcement_name.value == "" )
   {
     alert( "Please provide Announcement" );
     document.myForm.announcement_name.focus() ;
     return false;
   }
  
   if( document.myForm.announcement_desc.value == "" )
   {
     alert( "Please provide Descritpin!" );
     document.myForm.announcement_desc.focus() ;
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
                  <td onclick="location.href='<?=$prp_root;?>/announcements.php';" class="color19" height="136">
                    <div class="tile_box">
                    <div align="center" style="top:7px; position:relative"><img src="images/know_your_hotel.png"  width="100" /></div>
                      <div class="tile_name">
                      Announcements
                    </div></div>
                    </td>
                  </tr>
                </table>
              
              </td>
              <td width="76%" valign="top" class="admin_content_area">
              <h2>Create Announcement</h2>
                <hr />
                <form id="form1" name="myForm" method="POST" action="" enctype="multipart/form-data" >   
                <table width="100%" border="0" cellspacing="5" cellpadding="0">
                  <tr>
                    <td width="20%">Announcement</td><td>
                      <input type="text" name="announcement_name" id="announcement_name" class="adm_inptext"  /><br />
                      <?php if($error_msg != ''){
						  echo "<span style='color:red; font-size:12px;'>".$error_msg."</a>";
						  
					  }?>
                    </td>
                  </tr>
                  <tr>
                    <td width="20%">Descritpin</td><td><input type="text" name="announcement_desc" id="announcement_desc" class="adm_inptext"  /></td>
                  </tr>
                  <tr>
                    <td>Select File</td><td><input type="file" name="ancmnt_file" id="ancmnt_file"  /></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td><td align="right"><br />
                    <input type="submit" class="ubutton" name="upload_ancs" value="Save"  onclick="return(validate());"/>&nbsp;&nbsp;&nbsp;
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