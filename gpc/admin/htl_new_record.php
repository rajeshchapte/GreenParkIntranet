<?php

ini_set('session.save_path', 'tmp');
session_start();
ob_start();
error_reporting(E_ALL ^ E_NOTICE);


include("../../connect.php");
include("prp_info.php");


include("session_file.php");

if(isset($_REQUEST[cancel_upload])){
	header("Location: record_sales.php");
	}

date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d H:i:s', time());

include( 'function.php');

if(isset($_REQUEST[upload_nrs])){
	
	$record_sale_date = strtotime($_POST[record_sale_date]);
	$record_sale_date = date('Y-m-d', $record_sale_date);
	$record_sale_amount = $_POST[record_sale_amount];
	
				$nrs_save = mysql_query("INSERT INTO `record_sales` (`id`, `recrds_date`, `record_sale`, `prp_code`, `created_datetime`) VALUES (NULL, '$record_sale_date', '$record_sale_amount', '$prp_id', '$date');");
			
					if($nrs_save){
						echo "DONE";
						header("Location: record_sales.php");
					}else{
							echo "Fail".mysql_error();
						}
}
	
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="includes/styles1.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GreenPark Hotels and Resorts Intranet</title>
 <link rel="stylesheet" href="datepicker/jquery-ui.css" />
<script src="datepicker/jquery-1.9.1.js"></script>
<script src="datepicker/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css" />
<script>
 $(function() {
$( "#record_sale_date" ).datepicker({
changeMonth: true,
changeYear: true
});
});

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
                  <td onclick="location.href='<?=$prp_root;?>/all_record_sales.php';" class="color3" height="136">
                    <div class="tile_box">
                    <div align="center" style="top:10px; position:relative"><img src="images/record_sales_icon.png"  width="80" /></div>
                      <div class="tile_name">
                      Record Sales
                    </div></div>
                    </td>
                  </tr>
                </table>
              
              </td>
              <td width="76%" valign="top" class="admin_content_area">
              <h2>Add New Sales Record</h2>
              <?php if(isset($msg)): ?>
			<p class='alert'><?php echo $msg ?></p>
		<?php endif ?>
                <hr />
                
                <table width="100%" border="0" cellspacing="1" cellpadding="2" bgcolor="#CCCCCC">
                  <tr bgcolor="#999999" height="25">
                    <td><strong>S. No</strong></td>
                    <td><strong>Record Type</strong></td>
                    <td><strong>Action</strong></td>
                  </tr>
                  <tr bgcolor="#ececef" height="25">
                    <td><strong>1</strong></td>
                    <td><a href="#">Hotel Total Revenue</a></td>
                    <td><input type="button" onclick="location.href='htr_rs.php';"  class="ubutton" value="New Record" /></td>
                  </tr>
                  <tr bgcolor="#ececef">
                    <td><strong>2</strong></td>
                    <td><a href="#">Front Office</a></td>
                    <td><input type="button" onclick="location.href='fo_rs.php';"  class="ubutton" value="New Record" /></td>
                  </tr>
                  <tr bgcolor="#ececef">
                    <td><strong>3</strong></td>
                    <td><a href="#">F &amp; B Service</a></td>
                    <td><input type="button" onclick="location.href='fb_rs.php';"  class="ubutton" value="New Record" /></td>
                  </tr>
                </table>
                <?php /*?><form id="form1" method="POST" action="" enctype="multipart/form-data" >   
            
        
                
                
                <table width="100%" border="0" cellspacing="5" cellpadding="0">
                  <tr>
                     <td width="20%">Record Sale Date</td><td>
                       <input type="text" name="record_sale_date" id="record_sale_date" class="adm_inptext"  />
                     </td>
                  </tr>
                  <tr>
                    <td width="20%">Record Sale</td><td><input type="text" name="record_sale_amount" id="record_sale_amount" class="adm_inptext"  /></td>
                  </tr>
                    <td>&nbsp;</td><td align="right"><br />
                    <input type="submit" class="ubutton" name="upload_nrs" value="Save" />&nbsp;&nbsp;&nbsp;
                    <input type="submit" class="ubutton" name="cancel_upload" value="Cancel" /></td>
                  </tr>
                </table>

                  
                </form><?php */?>
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