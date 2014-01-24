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


date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d H:i:s', time());

if(isset($_REQUEST[cancel_upload])){
	header("Location: animated_sop.php");
	}

if(isset($_REQUEST[upload_asop])){

	
	
	$sop_title = $_POST['sop_title'];
	$sop_type = "animated";
	//$sop_title = substr($sop_title,0,-4);
	//$sqlselectfile = mysql_query("select id, count(user_id), doc_file from document where user_id = '$uid'");
	
	//while($getfilecount = mysql_fetch_array($sqlselectfile)){
	//$filecount = $getfilecount['count(user_id)'];
	//echo $filecount;
	//$photo_id = $_POST['photo_id'];
	$t_path = "asopfiles/"; //This is the directory where images will be saved 
	$fname = basename( $_FILES['sop_file']['name']); 
	$array=explode(".",$fname,2);
	$ext=".".$array[1]; //to get the proper extension of the file
	$rfile=str_replace(" ","_",$fname); //To get the name of the image
	//echo $rfile;
	$nfile=$rfile; //To change the new name with proper extension
	$t_path=$t_path.$nfile; //to get the path  where the file will be uploaded
	$profile_pic=$t_path;
	//echo $nfile."-".$profile_pic;
	
	
	
	if($ext=='.swf' || $ext=='.SWF'){
		define ("MAX_SIZE","500"); 
		$size=filesize($_FILES['sop_file']['tmp_name']);
		if($size > MAX_SIZE*1024){
			echo MAX_SIZE*1024;
			$errmsg = "File size limit exceeds";
		}else{
				
			
	$uploadasop = mysql_query("INSERT INTO sops (`id`, `sop_type`, `soppdf_title`, `file_location`, `created_datetime`) VALUES (NULL, '$sop_type', '$sop_title', '$rfile', '$date');");
		
				if($uploadasop){ 
					copy($_FILES['sop_file']['tmp_name'],$t_path);
					header("Location: animated_sop.php");
				}
			}
	}else{
		$errmsg = "Unsupported file format, please use only swf files";
		
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
              <h2>Upload New SOP</h2>
                <hr />
                <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" >
                
                <table width="100%" border="0" cellspacing="5" cellpadding="0">
                  <tr>
                    <td width="20%">SOP Title</td><td width="80%"><input type="text" name="sop_title" id="sop_title" class="adm_inptext"  /></td>
                  </tr>
                  <tr>
                    <td>Select File</td><td><input type="file" name="sop_file" id="sop_file"  />
                    <?php 
				if($errmsg!=''){
					echo $errmsg;
				}
				?>
                    </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td><td><br /><input type="submit" class="ubutton" name="upload_asop" value="Save" />&nbsp;&nbsp;&nbsp;
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