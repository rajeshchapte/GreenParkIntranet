<?php

ini_set('session.save_path', 'tmp');
session_start();
ob_start();
error_reporting(E_ALL ^ E_NOTICE);


include("../../connect.php");
include("prp_info.php");


include("session_file.php");

if(isset($_REQUEST[cancel_upload])){
	header("Location: fb_record_sales.php");
	}

date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d H:i:s', time());

include( 'function.php');

if(isset($_REQUEST[upload_nrs])){
	
	$for_m_or_d = $_POST[for_m_or_d];
	if($for_m_or_d == 'day'){
		$record_date = date("Y-m-d",strtotime($_POST[record_sale_date]));
		echo $record_date;
	}else if($for_m_or_d == 'month'){
		$record_date = date("Y-m-d",strtotime($_POST[record_sale_month_y]."-".$_POST[record_sale_month_m]."-01"));
		echo $record_date;
	}

	//$record_sale_date = strtotime($_POST[record_sale_date]);
	$record_sale_type = $_POST[record_sale_type];
	$fb_servcat_id = $_POST[fb_servcat_id];
	echo $record_sale_type;
	
	if($record_sale_type == 'Revenue'){
		$lacs_or_rs = $_POST[lacs_or_rs];
		$fb_serv_record_amount = $_POST[fb_serv_record_amount];
		echo $record_sale_type;
		if($lacs_or_rs == 'Lacs'){
			$convertedToRs = $fb_serv_record_amount * 100000;
		}else{
			$convertedToRs = $fb_serv_record_amount;
		}
		echo $convertedToRs;
		$covers_record = NULL;
	}else{
		$lacs_or_rs = NULL;
		$fb_serv_record_amount = NULL;
		$convertedToRs = NULL;
		$covers_record = $_POST[fb_serv_covers_record];
	}
	
	
	
	
				$nrs_save = mysql_query("INSERT INTO record_sales_fbservices_gph (`id`, `for_m_or_d`, `recrds_date`, `record_sale_type`, `fb_servcat_id`, `fb_serv_record_amount`, `lacs_or_rs`, `convertedToRs`, `covers_record`, `prp_code`, `created_datetime`) VALUES (NULL, '$for_m_or_d', '$record_date', '$record_sale_type', '$fb_servcat_id', '$fb_serv_record_amount', '$lacs_or_rs', '$convertedToRs', '$covers_record', '$prp_id', '$date');");
				
			
					if($nrs_save){
						echo "DONE";
						//header("Location: fb_record_sales.php");
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
                  <tr>
                    <td height="8"></td>
                  </tr>
                  <tr>
                  <td onclick="location.href='<?=$prp_root;?>/fb_record_sales.php';" class="color3" height="136">
                    <div class="tile_box">
                    <div align="center" style="top:10px; position:relative"><img src="images/record_sales_icon.png"  width="80" /></div>
                      <div class="tile_name">
                      F &amp; B Record Sales
                    </div></div>
                    </td>
                  </tr>
                </table>
              
              </td>
              <td width="76%" valign="top" class="admin_content_area">
              <h2>Add New F &amp; B Sales Record</h2>
              <?php if(isset($msg)): ?>
			<p class='alert'><?php echo $msg ?></p>
		<?php endif ?>
                <hr />
                
                
                <form id="form1" method="POST" action="" enctype="multipart/form-data" >   
            
        
                
                
                <table width="100%" border="0" cellspacing="5" cellpadding="0">
                  <tr>
                     <td width="20%">Record Type</td><td>
                      <select id="thechoices" name="for_m_or_d" class="adm_select">
                        <option value="day">For the day</option>
                        <option value="month" style="width:260px;">for the month</option>
                      </select>

                     </td>
                  </tr>
                  <tr>
                     <td width="20%">Record Sale Date</td><td>
                       
                       <div id="boxes">
                            <div id="day">
							<input type="text" name="record_sale_date" id="record_sale_date" class="adm_inptext"  />
                              </div>
                            <div id="month">
                              <select name="record_sale_month_m" class="adm_select" style="width:157px;">
								<?php
								$m = date('n');
								$y = date('Y');

                                $months = array (1 => 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
        
								// Make the months pull-down list  
								//echo '<select name="month">';
								foreach ($months as $key => $value)
									{
										echo "<option value=\"$key\"";
										if ($key == $m) { echo ' selected="selected"'; }
										echo ">$value</option>\n";
									}
                                ?>
                              </select>
                              <?php
							  echo '<select name="record_sale_month_y" class="adm_select" style="width:100px">';
								for ($year = 1995; $year <= 2020; $year++)
									{
										echo "<option value=\"$year\"";
										if ($year == $y) { echo ' selected="selected"'; }
										echo ">$year</option>\n";
									}
								echo '</select>';
							  ?>
                            </div>
                            
                        </div>
					  <script type="text/javascript" src="path/to/jquery.js"></script>
                        <script type="text/javascript">
                        
                        $("#thechoices").change(function(){
                            $("#" + this.value).show().siblings().hide();
                        });
                        
                        $("#thechoices").change();
                        
                        </script>
                     </td>
                  </tr>
                  <tr>
                    <td width="20%">Record sale type</td><td>
                    <select name="record_sale_type" id="thechoices1" class="adm_select" style="width:263px">
                      <option value="Revenue">Revenue</option>
                      <option value="Covers">Covers</option>
                    </select>
                    </td>
                  </tr>
                  <tr>
                   <td width="20%">F &amp; B Servces Category</td>
                   <td>
                      <div style="float:left">
                        <select name="fb_servcat_id" class="adm_select">
                        <?php
                        $fbservcats =  mysql_query("SELECT * FROM fb_services_cats WHERE prp_code = '$prp_id'");
					    while($fbservcats_res = mysql_fetch_array($fbservcats)){
                        ?>  
                        <option value="<?=$fbservcats_res[id]?>"><?=$fbservcats_res[fb_serivces_cat_name]?></option>
                        <?php } ?>
                        </select></div>
                        <div style="float:left">&nbsp;&nbsp;&nbsp;<a href="create_fbservcat.php?purl=<?=$_SERVER['SCRIPT_NAME'];?>"><img src="images/add_icon.png" width="25" align="Create New Department" title="Create New Department"   /></a>
                       </div>


                    </td>
                  </tr>
                  <tr>
                    <td width="20%">Enter Record Amount/Number</td>
                    <td valign="top">
                      
                      
                      
                        <div id="boxes">
                            <div id="Revenue">
                            <input type="text" name="fb_serv_record_amount" id="fb_serv_record_amount" class="adm_inptext"  />&nbsp;&nbsp;                      
                            <select name="lacs_or_rs" class="adm_select" style="width:120px;">
                                <option value="Lacs">Lacs</option>
                                <?php /*?><option value="Rupees" style="width:260px;">Rupees</option><?php */?>
                            </select>    
                            </div>
                            <div id="Covers">
                            <input type="text" name="fb_serv_covers_record" id="fb_serv_record_amount" class="adm_inptext"  />&nbsp;&nbsp;
                        </div>
                       
                        <script type="text/javascript">
                        
                        $("#thechoices1").change(function(){
                        $("#" + this.value).show().siblings().hide();
                        });
                        
                        $("#thechoices1").change();
                        
                        </script>

                      
                      </td>
                  </tr>                  
                  <tr>
                    <td>&nbsp;</td><td align="right"><br />
                    <input type="submit" class="ubutton" name="upload_nrs" value="Save" />&nbsp;&nbsp;&nbsp;
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

</body>
</html>