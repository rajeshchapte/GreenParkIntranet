<?php

ini_set('session.save_path', 'tmp');
session_start();
error_reporting(E_ALL ^ E_NOTICE);

include("../../connect.php");
include("prp_info.php");

include("session_file.php");

if(isset($_REQUEST[delete_rs])){
	$rsid = $_POST[rsid];
	$delrsid = mysql_query("DELETE FROM record_sales_fo WHERE id = '$rsid'");
	if($delrsid){
		$delmsg = "Front Office Sales Record Deleted";
		//unlink($somefile);
	}else{
		$delmsg = "Fail";
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
                  <td onclick="location.href='<?=$prp_root;?>/fo_record_sales.php';" class="color3" height="136">
                    <div class="tile_box">
                    <div align="center" style="top:10px; position:relative"><img src="images/record_sales_icon.png"  width="80" /></div>
                      <div class="tile_name">
                      Front Office Record Sales
                    </div></div>
                    </td>
                  </tr>
                </table>
              
              </td>
              <td width="76%" valign="top" class="admin_content_area">
              
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td><h2>Front Office Record Sales Information</h2></td>
                        <td align="right">
                          <script type="text/javascript">
                           function getval(sel) {
                               url = 'fo_record_sales.php?m_or_d=';
                               window.location = url+sel.value;
                            }
                          </script>
                         <div style="float:right; width:100%">Showing <select name="selct" id="selct" onchange="getval(this);">
                            <option value="day" <?php echo $_GET[m_or_d] == 'day' ? 'selected' : null?>>Day</option>
                            <option value="month" <?php echo $_GET[m_or_d] == 'month' ? 'selected' : null?>>Month</option>
                          </select> Wise Record Sales
                         </div> 
                        </td>
                      </tr>
                    </table>

                <hr />
                <?php 
				if($delmsg!=''){
					echo $delmsg;
				}
				?>
                <div style="overflow:auto; height:450px;">
                
<table width="100%" border="0" cellspacing="1" cellpadding="2" bgcolor="#CCCCCC">
  <tr bgcolor="#999999" height="25"><td><strong>S. No</strong></td><td><strong>Record Date</strong></td><td><strong>Record Sale Info</strong></td><td><strong>Action</strong></td></tr>
                  <?php
				  
				   if($_GET[m_or_d] != ''){
				  $mdtype = $_GET[m_or_d];
				  }else{
					$mdtype = 'day';  
				  }
				  $i = 1;
				  $rs =  mysql_query("SELECT * FROM record_sales_fo WHERE ( prp_code = '$prp_id' AND for_m_or_d = '$mdtype' ) AND ( lacs_or_rs = 'Lacs' OR lacs_or_rs = 'Rupees' ) ORDER BY convertedToRs DESC LIMIT 0 , 10");
				  if(mysql_num_rows($rs)>0){
				  while($rsres = mysql_fetch_array($rs)){
				  ?>
                  <tr bgcolor="#ececef">
                    <td width="6%"><?php echo $i; ?></td>
                    <td width="20%">
                    <?php 						  
						  if($_GET[m_or_d] == 'month'){
						  //$mdtype = $_GET[m_or_d];
						  echo  date("F Y", strtotime($rsres[recrds_date]));
						  }else{
							echo  date("j F Y", strtotime($rsres[recrds_date]));
						  }

					?>
                    </td>
                    <td width="34%" style="font-size:12px;">
					<?php echo fo_servcat("$rsres[fo_servcat_id]").": ";
					 echo "&#8377;&nbsp;"; 
					 echo $rsres[fo_record_amount]." ";
					 if($rsres[lacs_or_rs]=='Lacs'){ echo $rsres[lacs_or_rs]; } ?> 
                    </td>
                    <td width="15%" align="right">
                      <div style="float:right">
                      <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" name="delete_rs_form">
                        <input type="hidden" name="rsid" value="<?php echo $rsres[id] ?>"  />                        
                        <input type="submit" name="delete_rs" value="Delete" class="ubutton" onclick="return confirm('Are you sure want to delete?');" />
                      </form></div>
                      <div style="float:right">
                      <form method="get" action="fo_edit_rs.php" name="edit_rs_form">
                        <input type="hidden" name="rsid" value="<?php echo $rsres[id] ?>"  />                        
                        <input type="submit" name="edit_rs" value="Edit" class="ubutton" />
                      </form></div>
                    </td>
                  </tr>
                  <?php $i++; } } ?>
                  
                  <?php
				  $i = 1;
				  $rs =  mysql_query("SELECT * FROM record_sales_fo WHERE ( prp_code = '$prp_id' AND for_m_or_d = '$mdtype' ) AND ( lacs_or_rs = 'Numbers' ) ORDER BY convertedToRs DESC LIMIT 0 , 10");
				  if(mysql_num_rows($rs)>0){
				  ?>
                  <tr><td colspan="5" bgcolor="#ececef"></td></tr>
				  <?php
				  while($rsres = mysql_fetch_array($rs)){
				  ?>
                  <tr bgcolor="#ececef">
                    <td width="6%"><?php echo $i; ?></td>
                    <td width="20%">
                    <?php 						  
						  if($_GET[m_or_d] == 'month'){
						  //$mdtype = $_GET[m_or_d];
						  echo  date("F Y", strtotime($rsres[recrds_date]));
						  }else{
							echo  date("j F Y", strtotime($rsres[recrds_date]));
						  }

					?>
                    </td>
                    <td width="34%" style="font-size:12px;">
					<?php echo fo_servcat("$rsres[fo_servcat_id]").": ";					  
					 echo $rsres[fo_record_amount]." ";
					  ?> 
                    </td>
                    <td width="15%" align="right">
                      <div style="float:right">
                      <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" name="delete_rs_form">
                        <input type="hidden" name="rsid" value="<?php echo $rsres[id] ?>"  />                        
                        <input type="submit" name="delete_rs" value="Delete" class="ubutton" onclick="return confirm('Are you sure want to delete?');" />
                      </form></div>
                      <div style="float:right">
                      <form method="get" action="fo_edit_rs.php" name="edit_rs_form">
                        <input type="hidden" name="rsid" value="<?php echo $rsres[id] ?>"  />                        
                        <input type="submit" name="edit_rs" value="Edit" class="ubutton" />
                      </form></div>
                    </td>
                  </tr>
                  <?php $i++; } } ?>
                 
                  <?php
				  $i = 1;
				  $rs =  mysql_query("SELECT * FROM record_sales_fo WHERE ( prp_code = '$prp_id' AND for_m_or_d = '$mdtype' ) AND ( lacs_or_rs = '%' ) ORDER BY convertedToRs DESC LIMIT 0 , 10");
				  if(mysql_num_rows($rs)>0){
				  ?>
                  <tr><td colspan="5" bgcolor="#ececef"></td></tr>
				  <?php
				  while($rsres = mysql_fetch_array($rs)){
				  ?>
                  <tr bgcolor="#ececef">
                    <td width="6%"><?php echo $i; ?></td>
                    <td width="20%">
                    <?php 						  
						  if($_GET[m_or_d] == 'month'){
						  //$mdtype = $_GET[m_or_d];
						  echo  date("F Y", strtotime($rsres[recrds_date]));
						  }else{
							echo  date("j F Y", strtotime($rsres[recrds_date]));
						  }

					?>
                    </td>
                    <td width="34%" style="font-size:12px;">
					<?php echo fo_servcat("$rsres[fo_servcat_id]").": ";					
					 echo $rsres[fo_record_amount]." ";
					 echo $rsres[lacs_or_rs];?> 
                    </td>
                    <td width="15%" align="right">
                      <div style="float:right">
                      <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" name="delete_rs_form">
                        <input type="hidden" name="rsid" value="<?php echo $rsres[id] ?>"  />                        
                        <input type="submit" name="delete_rs" value="Delete" class="ubutton" onclick="return confirm('Are you sure want to delete?');" />
                      </form></div>
                      <div style="float:right">
                      <form method="get" action="fo_edit_rs.php" name="edit_rs_form">
                        <input type="hidden" name="rsid" value="<?php echo $rsres[id] ?>"  />                        
                        <input type="submit" name="edit_rs" value="Edit" class="ubutton" />
                      </form></div>
                    </td>
                  </tr>
                  <?php $i++; } } ?>
                  
              </table><br /><input type="button" onclick="location.href='fo_new_rs.php';"  class="ubutton" value="New Record" />
				</div><br />
                
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