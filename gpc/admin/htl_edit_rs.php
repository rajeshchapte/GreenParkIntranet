<?php

ini_set('session.save_path', 'tmp');
session_start();
ob_start();
error_reporting(E_ALL ^ E_NOTICE);


include("../../connect.php");
include("prp_info.php");


include("session_file.php");

$rsid = $_GET[rsid];
$sel_rs = mysql_query("SELECT * FROM record_sales WHERE id  = '$rsid'");
$sel_rs_res = mysql_fetch_array($sel_rs);


if(isset($_REQUEST[cancel_upload])){
	header("Location: htl_record_sales.php");
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

	$record_sale_type = $_POST[record_sale_type];
	$record_sale_amount = $_POST[record_sale_amount];
	$lacs_or_rs = $_POST[lacs_or_rs];
	if($lacs_or_rs == 'Lacs'){
		$convertedToRs = $record_sale_amount * 100000;
	}else{
		$convertedToRs = $record_sale_amount;
	}
				$nrs_save = mysql_query("UPDATE  record_sales SET  `for_m_or_d` =  '$for_m_or_d',
											`recrds_date` =  '$record_date',
											`record_sale_type` =  '$record_sale_type',
											`record_sale` =  '$record_sale_amount',
											`lacs_or_rs` = '$lacs_or_rs',
											`convertedToRs` = '$convertedToRs' WHERE  id = '$rsid';");
				
				;
			
					if($nrs_save){
						echo "DONE";
						header("Location: htl_record_sales.php");
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
<script type="text/javascript">
<!--
// Form validation code will come here.
function validate()
{
 
  if( document.myForm.for_m_or_d.value == "" )
   {
     alert( "Please provide Record Type" );
     document.myForm.for_m_or_d.focus() ;
     return false;
   }
   
   if( document.myForm.record_sale_date.value == "" )
   {
     alert( "Please provide your Record Sale Date" );
     document.myForm.record_sale_date.focus() ;
     return false;
   }
   
   if( document.myForm.record_sale_amount.value == "" )
   {
	 alert( "Please provide your Record Sale!" );
	 document.myForm.record_sale_amount.focus() ;
	 return false;
   }
   
	 if( document.myForm.emp_dept.value == "" )
   {
	 alert( "Please select Department!" );
	 document.myForm.emp_dept.focus() ;
	 return false;
   }
   	
   return( true );
}
//-->
</script>

</head>

<body onload="javascript:changeval();">
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
                  <td onclick="location.href='<?=$prp_root;?>/htl_record_sales.php';" class="color3" height="136">
                    <div class="tile_box">
                    <div align="center" style="top:10px; position:relative"><img src="images/record_sales_icon.png"  width="80" /></div>
                      <div class="tile_name">
                      Hotel Revenue Record Sales
                    </div></div>
                    </td>
                  </tr>
                </table>
              
              </td>
              <td width="76%" valign="top" class="admin_content_area">
              <h2>Edit Hotel Revenue Sales Record</h2>
              <?php if(isset($msg)): ?>
			<p class='alert'><?php echo $msg ?></p>
		<?php endif ?>
                <hr />
                
                
                <form id="form1" name="myForm" method="POST" action="" enctype="multipart/form-data" />   
            
        
                
                
                <table width="100%" border="0" cellspacing="5" cellpadding="0">
                  <tr>
                     <td width="20%">Record Type</td><td>
                      <select id="thechoices" name="for_m_or_d" class="adm_select" style="width:260px;">
                        <option value="day" <?php echo $sel_rs_res[for_m_or_d] == 'day' ? 'selected' : null?>>For the day</option>
                        <option value="month" <?php echo $sel_rs_res[for_m_or_d] == 'month' ? 'selected' : null?>>for the month</option>
                      </select>

                     </td>
                  </tr>
                  <tr>
                     <td width="20%">Record Sale Date</td><td>
                       
                       <div id="boxes">
                            <div id="day">
							<input type="text" name="record_sale_date" id="record_sale_date" class="adm_inptext" value="<?php echo date('m/d/Y',strtotime($sel_rs_res[recrds_date]));?>" />
                              </div>
                            <div id="month">
                              <select name="record_sale_month_m" class="adm_select" style="width:157px;">
								<?php
								$m = date('n',strtotime($sel_rs_res[recrds_date]));
								$y = date('Y',strtotime($sel_rs_res[recrds_date]));
									
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
                   <td width="20%">Hotel Revenue Category</td>
                   <td>
                      <div style="float:left">
                        <select id="htlrevcat_id" name="htlrevcat_id" class="adm_select" onchange="javascript:changeval();">
                        <?php
                        $htlrevcats =  mysql_query("SELECT * FROM hotel_revenue_cats WHERE prp_code = '$prp_id'");
					    while($htlrevcats_res = mysql_fetch_array($htlrevcats)){
                        ?>  
                        <option value="<?=$htlrevcats_res[id]?>" <?php echo $htlrevcats_res[id] == $sel_rs_res[	hotel_revenue_cat_id] ? 'selected' : null?>><?=$htlrevcats_res[hotel_revenue_cat_name]?></option>
                        <?php } ?>
                        </select></div>
                        <div style="float:left">&nbsp;&nbsp;&nbsp;<a href="create_htlrevcat.php?purl=<?=$_SERVER['SCRIPT_NAME'];?>"><img src="images/add_icon.png" width="25" align="Create New Department" title="Create New Category"   /></a>
                       </div>


                    </td>
                  </tr>
                  <tr>
                    <td width="20%">Record Sale</td>
                    <td>
                    
                        
                        
                        
                        <div id="boxes">
                            <div id="Revenue">
                                               
                                <input type="text" name="record_sale_amount" id="record_sale_amount" class="adm_inptext"  style="float:left" value="<?php echo $sel_rs_res[record_sale];?>"  />&nbsp;&nbsp;
                      <span id="whatever" style="float:left; display:none">&nbsp;&nbsp;<select name="lacs_or_rs" class="adm_select" style="width:120px;">
                        <option value="Lacs" <?php echo $sel_rs_res[lacs_or_rs] == 'Lacs' ? 'selected' : null?>>Lacs</option>
                        <?php /*?><option value="Rupees" <?php echo $sel_rs_res[lacs_or_rs] == 'Rupees' ? 'selected' : null?>>Rupees</option><?php */?>
                      </select> </span>
                      <span id="whatever1" style="float:left">&nbsp;&nbsp; % </span>
                        <script type="text/javascript">
						function changeval(){
							if(document.getElementById("htlrevcat_id").value == "1"){
								
							document.getElementById("whatever").style.display = "none";
							document.getElementById("whatever1").style.display = "block";
							}else{
							document.getElementById("whatever").style.display = "block";
							document.getElementById("whatever1").style.display = "none";
							}
						}
                        </script>                 
                                               
   
                            </div>
                            <div id="Covers">
                            <input type="text" name="record_sale_amount" id="record_sale_amount" class="adm_inptext" value="<?php echo $sel_rs_res[record_sale];?>"  />&nbsp;&nbsp;
                        </div>
                        <script type="text/javascript">
                        
                        $("#thechoices1").change(function(){
                        $("#" + this.value).show().siblings().hide();
                        });
                        
                        $("#thechoices1").change();
                        
                        </script>
                    
                    </div>
                    </td>
                  </tr>
                    <td>&nbsp;</td><td align="right"><br />
                    <input type="submit" class="ubutton" name="upload_nrs" value="Save"  onclick="return(validate());" />&nbsp;&nbsp;&nbsp;
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