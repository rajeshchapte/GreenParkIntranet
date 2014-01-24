<?php

ini_set('session.save_path', 'tmp');
session_start();
ob_start();
error_reporting(E_ALL ^ E_NOTICE);


include("../../connect.php");
include("prp_info.php");

$nlid = $_GET[nl_id];

include("session_file.php");

if(isset($_REQUEST[cancel_upload])){
	header("Location: news_letter.php");
	}

date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d H:i:s', time());
$i=5;
$date1 = strtotime(date("Y-m-d", strtotime($date)) . " +".$i."days");

if(isset($_REQUEST[upload_nl])){
	$nl_date = date('Y-m-d',strtotime($_POST[nl_date]));
	$nl_headline = $_POST[nl_headline];
	$nl_desc = $_POST[nl_desc];
	$comp_date = date('Y-m-d H:i:s', $date1);
	
	
	
		if($_FILES['nl_file']['name']!=''){
	$max_file_size = 1024*2048;
				if( $_FILES['nl_file']['size'] > $max_file_size ){
					$error_msg = "File size exceeds maximun limit of 2MB.";
				}else{
				$t_path = "nl_files/"; //This is the directory where images will be saved 
				$fname = basename( $_FILES['nl_file']['name']); 
				$array=explode(".",$fname,2);
				$ext=".".$array[1]; //to get the proper extension of the file
				$rfile="nl_file_".$nlid; //To get the name of the image
				$nfile=$rfile.$ext; //To change the new name with proper extension
				$t_path=$t_path.$nfile; //to get the path  where the file will be uploaded
				$profile_pic=$t_path;
				echo $profile_pic;
					$nl_save = mysql_query("UPDATE  news_letter SET  
											`news_title` =  '$nl_headline',
											`news_desc` =  '$nl_desc',
											`news_date` =  '$nl_date',
											`nl_file_path` = '$profile_pic' WHERE  id = '$nlid';");
				
			
					if($nl_save){ 
					echo "DONE";
					move_uploaded_file($_FILES['nl_file']['tmp_name'],$t_path);
					header("Location: news_letter.php");
					}else{
						   // $error_msg = "Duplicate record on selected date, please choose another date.";	
							$error_msg = "Fail - ".mysql_error();
						}
				}
		}else{
					$nl_save = mysql_query("UPDATE  news_letter SET  
											`news_title` =  '$nl_headline',
											`news_desc` =  '$nl_desc',
											`news_date` =  '$nl_date' WHERE  id = '$nlid';");
				
			
					if($nl_save){ 
					echo "DONE";
					header("Location: news_letter.php");
					}else{
						   // $error_msg = "Duplicate record on selected date, please choose another date.";	
							$error_msg = "Fail - ".mysql_error();
						}
		}
	
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
 
   if( document.myForm.nl_date.value == "" )
   {
     alert( "Please provide Newsletter Date!" );
     document.myForm.nl_date.focus() ;
     return false;
   }
   
   
   if( document.myForm.nl_headline.value == "" )
   {
     alert( "Please provide Headline!" );
     document.myForm.nl_headline.focus() ;
     return false;
   }
   
   if( document.myForm.nl_desc.value == "" )
   {
     alert( "Please provide News Description!" );
     document.myForm.nl_desc.focus() ;
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
                  <td onclick="location.href='<?=$prp_root;?>/news_letter.php';" class="color19" height="136">
                    <div class="tile_box">
                    <div align="center" style="top:0px; position:relative"><img src="images/newsletter_icon.png"  width="110" /></div>
                      <div class="tile_name">
                      Newsletter
                    </div></div>
                    </td>
                  </tr>
                </table>

              </td>
              <td width="76%" valign="top" class="admin_content_area">
              <h2>Create Newsletter</h2>
                <hr />
                <?php
				$sel_nl = mysql_query("SELECT * FROM news_letter WHERE ID = '$nlid' AND prp_code = '$prp_id'");
				$sel_nl_res = mysql_fetch_array($sel_nl);
				?>
                <form id="form1" name="myForm" method="POST" action="" enctype="multipart/form-data"  >   
                <table width="100%" border="0" cellspacing="5" cellpadding="0">
                  <tr>
                    <td width="20%">Newsletter Date</td><td>
                      <input type="text" name="nl_date" id="nl_date" class="adm_inptext" value="<?php echo date("m/d/Y", strtotime($sel_nl_res[news_date]));?>"  /><br />
                      <?php if($error_msg != ''){
						  echo "<span style='color:red; font-size:12px;'>".$error_msg."</a>";
						  
					  }?>
                    </td>
                  </tr>
                  <tr>
                    <td width="20%">Headline</td><td><input type="text" name="nl_headline" id="nl_headline" class="adm_inptext" value="<?=$sel_nl_res[news_title];?>"  /></td>
                  </tr>
                  <tr>
                    <td width="20%">News Description</td><td>
                      <input type="text" name="nl_desc" id="nl_desc" class="adm_inptext"  value="<?=$sel_nl_res[news_desc];?>" />
                    </td>
                  </tr>
                  <tr>
                    <td width="20%">Newsletter File</td><td>
                      <input type="file" name="nl_file" id="nl_file"  />
                      <span style="color:red;"> <?php
					   if(isset($error_msg)){
						  echo $error_msg;   
					   }
					   ?></span>
                    </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td><td align="right"><br />
                    <input type="submit" class="ubutton" name="upload_nl" value="Save"  onclick="return(validate());" />&nbsp;&nbsp;&nbsp;
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
$( "#nl_date" ).datepicker({
changeMonth: true,
changeYear: true
});
});
</script>

</body>
</html>