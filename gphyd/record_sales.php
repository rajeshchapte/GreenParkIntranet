<?php

ini_set('session.save_path', 'tmp');
session_start();
error_reporting(E_ALL ^ E_NOTICE);

include("../connect.php");
include("prp_info.php");

?>

<!DOCTYPE html>
<!-- saved from url=(0064)http://sarasoueidan.com/blog/windows8-animations/demo/index.html -->
<html class=" js canvas canvastext geolocation crosswindowmessaging websqldatabase indexeddb hashchange historymanagement draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions  video audio localstorage sessionstorage webworkers applicationcache svg smil svgclippaths fontface"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>GreePark Hotels and Resorts Intranet</title>
  <link href="includes/styles1.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="includes/styles_w.css">
  <script src="js/modernizr-1.5.min.js"></script>
  
  <script type="text/javascript" src="js/jquery-latest.js"></script>
  <script src="../SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
  <link href="../SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css">
  <STYLE>
  #accordion{list-style:none;padding:0 0 0 0;width:100%}
  #accordion li{display:block;background-color:#5b39b5;font-weight:bold;margin:1px;cursor:pointer;padding:5px 5px 5px 7px;list-style:circle; color:#FFFFFF}
  #accordion ul{list-style:none;padding:0 0 0 0;display:none}
  #accordion ul li{font-weight:normal;cursor:auto;background-color:#fff;padding:5px; color:#333333}
  #accordion ol li{font-weight:normal;cursor:auto;background-color:#DDDDDD;padding:3px; color:#333333;
	list-style: none;
	border-left: solid 1px #CCCCCC;
	border-bottom: solid 1px #999;
	border-top: solid 1px #999;
	border-right: solid 1px #999;
	-moz-user-select: none;
	-khtml-user-select: none;
	cursor: pointer;
}
  #accordion a{text-decoration:none}
  #accordion a:hover{text-decoration:underline}
  
  #accordion .TabbedPanelsContentGroup {
	clear: both;
	border-left: solid 1px #CCC;
	border-bottom: solid 1px #CCC;
	border-top: solid 1px #999;
	border-right: solid 1px #999;
	background-color: #EEE;
}
#accordion .TabbedPanelsTabSelected {
	background-color: #EEE;
	border-bottom: solid 1px #999;
}
#accordion.VTabbedPanels .TabbedPanelsTabGroup {
	float: left;
	background-color: #EEE;
	position: relative;
	border-top: solid 1px #999;
	border-right: solid 1px #999;
	border-left: solid 1px #CCC;
	border-bottom: solid 1px #CCC;
}



  </STYLE>
  
</head>

<body>

  <!--===============================Start Demo====================================================-->
<div class="demo-wrapper">
<!-- classnames for the pages should include: 1) type of page 2) page name-->
  <div class="s-page random-restored-page">
    <h2 class="page-title">Some minimized App</h2>
    <div class="close-button s-close-button">x</div>
  </div>
  <div class="s-page custom-page">
    <h2 class="page-title">Thank You!</h2>
    <div class="close-button s-close-button">x</div>
  </div>
  <div class="r-page random-r-page">

    <div class="page-content">
      <h2 class="page-title">App Screen</h2>
      
    </div>
    
    <div class="close-button r-close-button">x</div>
  </div>
<!--each tile should specify what page type it opens (to determine which animation) and the corresponding page name it should open-->
  <div class="dashboard clearfix">
    <ul class="tiles">
      <div class="col1 clearfix">
        <li class="tile tile-big tile-11 slideTextUp" data-page-type="no" data-page-name="no" onclick="location.href='<?=$home;?>';">
          <div><img src="images/logo123.png"  width="100" /></div>
          <div><p class="prp_font">HOME</p></div>
        </li>
        
        <?php include("property_tile.php"); ?>

        <li class="tile tile-big last tile-20 slideTextRight" data-page-type="no" data-page-name="no" onclick="location.href='<?=$prp_root;?>/record_sales.php';">
          <div><p><span class=""><img src="images/record_sales_icon.png"  width="120" /></span></p></div>
          <div><p style="font-size:26px;">Record Sales</p></div>
        </li>
        
      </div>

      <div class="col4 clearfix">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tr>
										
						<td valign="top" class="admin_content_area">
              
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td><h2><?=$res_prp[property_name];?> Record Sales</h2></td>
                        <td align="right">
                          <script type="text/javascript">
                           function getval(sel) {
                               url = 'record_sales.php?m_or_d=';
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
                    <ul id="accordion">
                        
                        
                        
                        
                        <li>Hotel Revenue Sales Record</li>
                        <ul>
                            <li>
                            <?php 
								if($delmsg!=''){
									echo $delmsg;
								}
								 if($_GET[m_or_d] != ''){
                          $mdtype = $_GET[m_or_d];
                          }else{
                            $mdtype = 'day';  
                          }
								?>
								<div style="overflow:auto; height:400px; color:#333333">
                                                 <div id="TabbedPanels1" class="TabbedPanels">
                                  <ol class="TabbedPanelsTabGroup">
                                    <li class="TabbedPanelsTab" tabindex="0">Hotel Revenue - Record Sales</li>                                    
                                    <li class="TabbedPanelsTab" tabindex="0">Hotel Revenue  - G.O.P%</li>
                                  </ol>
                                  <div class="TabbedPanelsContentGroup">
                                    
                                    
                                    
                                    <div class="TabbedPanelsContent">
                                      
                                      <table width="100%" border="0" cellspacing="1" cellpadding="2" bgcolor="#CCCCCC">
                                          <tr bgcolor="#999999" height="25"><td><strong>S. No</strong></td><td><strong>Record Date</strong></td><td><strong>Record Type</strong></td><td><strong>Record Amount</strong></td></tr>
                                                          <?php
                                                          if($_GET[m_or_d] != ''){
                                                          $mdtype = $_GET[m_or_d];
                                                          }else{
                                                            $mdtype = 'day';  
                                                          }
                                                          $i = 1;
                                                          $rs =  mysql_query("SELECT * FROM record_sales WHERE ( prp_code = '$prp_id' AND for_m_or_d = '$mdtype' ) AND ( lacs_or_rs = 'Lacs' OR lacs_or_rs = 'Rupees' ) AND hotel_revenue_cat_id NOT IN (1) ORDER BY convertedToRs DESC LIMIT 0, 10");
                                                                while($rsres = mysql_fetch_array($rs)){
                                                                    
                                                          ?>
                                                          <tr bgcolor="#FFFFFF">
                                                            <td width="6%"><?php echo $i; ?></td>
                                                            <td width="30%">
                                                            
                                                            <?php 
                                                                  if($_GET[m_or_d] == 'month'){
                                                                  //$mdtype = $_GET[m_or_d];
                                                                  echo  date("F Y", strtotime($rsres[recrds_date]));
                                                                  }else{
                                                                    echo  date("j F Y", strtotime($rsres[recrds_date]));
                                                                  }
                                                            
                                                            //echo  date("j F Y", strtotime($rsres[recrds_date]));
                                                            ?>
                                                            </td>
                                                             <td width="10%"><?php echo $rsres[record_sale_type]; ?></td>
                                                            <td width="24%" style="font-size:12px; padding:0 0 0 5px">
															<?php 
															
																if($rsres[record_sale]!='0'){ 
																	echo  htlrev_cat($rsres[hotel_revenue_cat_id]).":&nbsp;";																	
																	if($rsres[record_sale_type] != 'Covers'){ echo "&#8377;&nbsp;"; }
																	echo $rsres[record_sale]." "; 
																	if($rsres[record_sale_type] != 'Covers'){ 
																	if($rsres[lacs_or_rs]=='Lacs'){ 
																	echo $rsres[lacs_or_rs]; 
																	}
																	}
																} 
															
															?>
                                                            </td>                                                           
                                                          </tr>
                                                          <?php $i++; } ?>
                                                          
                                                          
                                                          
                                                          <?php                                                          
                                                          $i = 1;
                                                          $rs =  mysql_query("SELECT * FROM record_sales WHERE ( prp_code = '$prp_id' AND for_m_or_d = '$mdtype' ) AND ( lacs_or_rs = '%' ) AND hotel_revenue_cat_id NOT IN (1) ORDER BY convertedToRs DESC LIMIT 0, 10");
														  if(mysql_num_rows($rs)>0){
														  ?>
                                                          <tr bgcolor="#FFFFFF"><td colspan="5" height="5"></td></tr>
                                                          <?php
														  
                                                                while($rsres = mysql_fetch_array($rs)){
                                                                    
                                                          ?>
                                                          <tr bgcolor="#FFFFFF">
                                                            <td width="6%"><?php echo $i; ?></td>
                                                            <td width="30%">
                                                            
                                                            <?php 
                                                                  if($_GET[m_or_d] == 'month'){
                                                                  //$mdtype = $_GET[m_or_d];
                                                                  echo  date("F Y", strtotime($rsres[recrds_date]));
                                                                  }else{
                                                                    echo  date("j F Y", strtotime($rsres[recrds_date]));
                                                                  }
                                                            
                                                            //echo  date("j F Y", strtotime($rsres[recrds_date]));
                                                            ?>
                                                            </td>
                                                             <td width="10%"><?php echo $rsres[record_sale_type]; ?></td>
                                                            <td width="24%" style="font-size:12px; padding:0 0 0 10px"0>
															<?php 
															
																if($rsres[record_sale]!='0'){ 
																	echo  htlrev_cat($rsres[hotel_revenue_cat_id]).":&nbsp;";
																	
																	if($rsres[record_sale_type] != 'Covers'){ 
																		echo "&#8377;&nbsp;"; 																
																	}
																	 
																	echo $rsres[record_sale]." "; 
																	if($rsres[record_sale_type] != 'Covers'){ 
																	if($rsres[lacs_or_rs]=='%'){ 
																	echo $rsres[lacs_or_rs]; 
																	}
																	}
																} 
															
															?>
                                                            </td>                                                           
                                                          </tr>
                                                          <?php $i++; } } ?>
                                                          
                                                          <?php                                                          
                                                          $i = 1;
                                                          $rs =  mysql_query("SELECT * FROM record_sales WHERE ( prp_code = '$prp_id' AND for_m_or_d = '$mdtype' ) AND ( lacs_or_rs = 'Numbers' ) AND hotel_revenue_cat_id NOT IN (1) ORDER BY convertedToRs DESC LIMIT 0, 10");
														  if(mysql_num_rows($rs)>0){
														  ?>
                                                          <tr bgcolor="#FFFFFF"><td colspan="5" height="5"></td></tr>
                                                          <?php
														  
                                                                while($rsres = mysql_fetch_array($rs)){
                                                                    
                                                          ?>
                                                          <tr bgcolor="#FFFFFF">
                                                            <td width="6%"><?php echo $i; ?></td>
                                                            <td width="30%">
                                                            
                                                            <?php 
                                                                  if($_GET[m_or_d] == 'month'){
                                                                  //$mdtype = $_GET[m_or_d];
                                                                  echo  date("F Y", strtotime($rsres[recrds_date]));
                                                                  }else{
                                                                    echo  date("j F Y", strtotime($rsres[recrds_date]));
                                                                  }
                                                            
                                                            //echo  date("j F Y", strtotime($rsres[recrds_date]));
                                                            ?>
                                                            </td>
                                                             <td width="10%"><?php echo $rsres[record_sale_type]; ?></td>
                                                            <td width="24%" style="font-size:12px; padding:0 0 0 10px"0>
															<?php 															
																if($rsres[record_sale]!='0'){ 
																	echo  htlrev_cat($rsres[hotel_revenue_cat_id]).":&nbsp;";
																	echo $rsres[record_sale]." "; 																	
																} 
															
															?>
                                                            </td>                                                           
                                                          </tr>
                                                          <?php $i++; } } ?>
                                                    </table>
                                                    
                                                    
                                                    </div>
                                     <div class="TabbedPanelsContent">
                                       <table width="100%" border="0" cellspacing="1" cellpadding="2" bgcolor="#CCCCCC">
                                          <tr bgcolor="#999999" height="25"><td><strong>S. No</strong></td><td><strong>Record Date</strong></td><td><strong>Record Amount</strong></td></tr>
                                                          <?php
                                                          if($_GET[m_or_d] != ''){
                                                          $mdtype = $_GET[m_or_d];
                                                          }else{
                                                            $mdtype = 'day';  
                                                          }
                                                          $i = 1;
                                                          $rs =  mysql_query("SELECT * FROM record_sales WHERE prp_code = '$prp_id' AND for_m_or_d = '$mdtype' AND hotel_revenue_cat_id IN (1) ORDER BY convertedToRs DESC LIMIT 0, 10");
                                                                while($rsres = mysql_fetch_array($rs)){
                                                                    
                                                          ?>
                                                          <tr bgcolor="#FFFFFF">
                                                            <td width="6%"><?php echo $i; ?></td>
                                                            <td width="30%">
                                                            
                                                            <?php 
                                                                  if($_GET[m_or_d] == 'month'){
                                                                  //$mdtype = $_GET[m_or_d];
                                                                  echo  date("F Y", strtotime($rsres[recrds_date]));
                                                                  }else{
                                                                    echo  date("j F Y", strtotime($rsres[recrds_date]));
                                                                  }
                                                            
                                                            //echo  date("j F Y", strtotime($rsres[recrds_date]));
                                                            ?>
                                                            </td>
                                                            <td width="24%" style="text-transform:capitalize"><?php if($rsres[record_sale]!='0'){ ?> <?=$rsres[record_sale]; } ?> %</td>
                                                            
                                                          </tr>
                                                          <?php $i++; } ?>
                                                    </table></div>
                                  </div>
                                </div>

                               
<?php /*?><table width="100%" border="0" cellspacing="1" cellpadding="2" bgcolor="#CCCCCC">
					    <tr bgcolor="#999999" height="25"><td><strong>&nbsp;&nbsp;&nbsp;S. No</strong></td><td><strong>&nbsp;&nbsp;&nbsp;Record Sale Date</strong></td><td><strong>&nbsp;&nbsp;&nbsp;Record Sale</strong></td></tr>
								  <?php
								  $i = 1;
								  $rs =  mysql_query("SELECT * FROM record_sales WHERE prp_code = '$prp_id' AND for_m_or_d = '$mdtype' ORDER BY convertedToRs DESC LIMIT 0, 10");
										while($rsres = mysql_fetch_array($rs)){
								  ?>
								  <tr bgcolor="#FFFFFF" height="35">
									<td width="8%" align="center"><?php echo $i; ?></td>
									<td width="41%">&nbsp;&nbsp;&nbsp;<?php 
									if($_GET[m_or_d] == 'month'){
                                  //$mdtype = $_GET[m_or_d];
                                  echo  date("F Y", strtotime($rsres[recrds_date]));
                                  }else{
                                    echo  date("j F Y", strtotime($rsres[recrds_date]));
                                  }
									
									//echo date("j F Y", strtotime($rsres[recrds_date])); ?></td>
									<td width="41%" style="text-transform:capitalize">&#8377;&nbsp;<?=$rsres[record_sale]." ".$rsres[lacs_or_rs];?></td>
								  </tr>
								  <?php $i++; } ?>
								</table><?php */?>
								</div>
                            </li>
                        </ul>
                        
                        
                        
                        
                        
                        <li>Front Office Sales Record</li>
                        <ul>
                            <li>
                                    <div style="overflow:auto; height:400px;">
                        
        <table width="100%" border="0" cellspacing="1" cellpadding="2" bgcolor="#CCCCCC">
          <tr bgcolor="#999999" height="25"><td><strong>S. No</strong></td><td style="padding:0 0 0 10px"><strong>Record Date</strong></td><td style="padding:0 0 0 10px"><strong>Record Information</strong></td></tr>
                         
                          <?php
                          $i = 1;
                          $rs =  mysql_query("SELECT * FROM record_sales_fo WHERE prp_code = '$prp_id' AND for_m_or_d = '$mdtype' AND ( lacs_or_rs = 'Lacs' OR lacs_or_rs = 'Rupees' ) ORDER BY convertedToRs DESC LIMIT 0 , 10");
                                while($rsres = mysql_fetch_array($rs)){
                          ?>
                          <tr bgcolor="#FFFFFF">
                            <td width="6%" align="center"><?php echo $i; ?></td>
                            <td width="20%" style="padding:0 0 0 10px">
                            <?php 						  
                                  if($_GET[m_or_d] == 'month'){
                                  //$mdtype = $_GET[m_or_d];
                                  echo  date("F Y", strtotime($rsres[recrds_date]));
                                  }else{
                                    echo  date("j F Y", strtotime($rsres[recrds_date]));
                                  }
        
                            ?>
                            </td>
                            <td width="34%" style="font-size:12px; padding:0 0 0 10px">
                            
                              <?php echo fo_servcat("$rsres[fo_servcat_id]").": ";
							  if($rsres[lacs_or_rs]=='Lacs' || $rsres[lacs_or_rs]=='Rupees'){
								  echo "&#8377;&nbsp;"; 
							  }
							  echo $rsres[fo_record_amount]." "; 
							  if($rsres[lacs_or_rs]=='Lacs'){ 
							  	echo $rsres[lacs_or_rs]; 
							  }
							  
							  
							   ?> 
                            </td>
                            
                          </tr>
                          <?php $i++; } ?>
                          
                          
                          <?php
                          $i = 1;
                          $rs =  mysql_query("SELECT * FROM record_sales_fo WHERE prp_code = '$prp_id' AND for_m_or_d = '$mdtype' AND lacs_or_rs = '%' ORDER BY convertedToRs DESC LIMIT 0 , 10");
						  if(mysql_num_rows($rs)>0){
					      ?>
                          <tr bgcolor="#FFFFFF"><td colspan="5" height="5"></td></tr>
                          <?php
						  
                                while($rsres = mysql_fetch_array($rs)){
                          ?>
                          <tr bgcolor="#FFFFFF">
                            <td width="6%" align="center"><?php echo $i; ?></td>
                            <td width="20%" style="padding:0 0 0 10px">
                            <?php 						  
                                  if($_GET[m_or_d] == 'month'){
                                  //$mdtype = $_GET[m_or_d];
                                  echo  date("F Y", strtotime($rsres[recrds_date]));
                                  }else{
                                    echo  date("j F Y", strtotime($rsres[recrds_date]));
                                  }
        
                            ?>
                            </td>
                            <td width="34%" style="font-size:12px; padding:0 0 0 10px">
                            
                              <?php echo fo_servcat("$rsres[fo_servcat_id]").": ";							 
							  echo $rsres[fo_record_amount]." "; 
							  if($rsres[lacs_or_rs]=='%'){ 
							  	echo $rsres[lacs_or_rs]; 
							  }
							  
							  
							   ?> 
                            </td>
                            
                          </tr>
                          <?php $i++; } } ?>
                          
                          
                          <?php
                          $i = 1;
                          $rs =  mysql_query("SELECT * FROM record_sales_fo WHERE prp_code = '$prp_id' AND for_m_or_d = '$mdtype' AND lacs_or_rs = 'Numbers' ORDER BY convertedToRs DESC LIMIT 0 , 10");
						  if(mysql_num_rows($rs)>0){
					      ?>
                          <tr bgcolor="#FFFFFF"><td colspan="5" height="5"></td></tr>
                          <?php
						  
                                while($rsres = mysql_fetch_array($rs)){
                          ?>
                          <tr bgcolor="#FFFFFF">
                            <td width="6%" align="center"><?php echo $i; ?></td>
                            <td width="20%" style="padding:0 0 0 10px">
                            <?php 						  
                                  if($_GET[m_or_d] == 'month'){
                                  //$mdtype = $_GET[m_or_d];
                                  echo  date("F Y", strtotime($rsres[recrds_date]));
                                  }else{
                                    echo  date("j F Y", strtotime($rsres[recrds_date]));
                                  }
        
                            ?>
                            </td>
                            <td width="34%" style="font-size:12px; padding:0 0 0 10px">
                              <?php echo fo_servcat("$rsres[fo_servcat_id]").": ".$rsres[fo_record_amount];	?> 
                            </td>
                            
                          </tr>
                          <?php $i++; } } ?>
                      </table>
                        </div>
                            </li>
                        </ul>
                       
                       
                       
                       
                       
                       
                        <li>F &amp; B Sales Record</li>
                        <ul>
                            <li>
                            <div style="overflow:auto; width:100%; height:450px;">
                
               				  <div id="TabbedPanels2" class="TabbedPanels">
                				<ol class="TabbedPanelsTabGroup">
                				    <li class="TabbedPanelsTab" tabindex="0">F &amp; B Sales Record - Revenue</li>
                				    <li class="TabbedPanelsTab" tabindex="0">F &amp; B Sales Record - Covers</li>
              				    </ol>
                				  <div class="TabbedPanelsContentGroup">
                				    <div class="TabbedPanelsContent">
                                    <table width="100%" border="0" cellspacing="1" cellpadding="2" bgcolor="#CCCCCC">
  <tr bgcolor="#999999" height="25"><td align="center"><strong>S. No</strong></td><td style="padding:0 0 0 10px"><strong>Record Date</strong></td><td style="padding:0 0 0 10px"><strong>Record Type</strong></td><td style="padding:0 0 0 10px"><strong>Record Information</strong></td></tr>
                  <?php
				  $i = 1;
				  $rs =  mysql_query("SELECT * FROM record_sales_fbservices_gph WHERE prp_code = '$prp_id' AND for_m_or_d = '$mdtype' AND  record_sale_type = 'Revenue' AND ( lacs_or_rs = 'Lacs' OR lacs_or_rs = 'Rupees' ) ORDER BY convertedToRs DESC LIMIT 0 , 10");
					    while($rsres = mysql_fetch_array($rs)){							
				  ?>
                  <tr bgcolor="#FFFFFF">
                    <td width="6%" align="center"><?php echo $i; ?></td>
                    <td width="15%" style="padding:0 0 0 10px">
                    <?php 
						  if($_GET[m_or_d] == 'month'){
						  //$mdtype = $_GET[m_or_d];
						  echo  date("F Y", strtotime($rsres[recrds_date]));
						  }else{
							echo  date("j F Y", strtotime($rsres[recrds_date]));
						  }

					?>
                    </td>
                    <td width="15%" style="padding:0 0 0 10px"><?=$rsres[record_sale_type];?></td>
                    <td width="34%" style="font-size:12px; padding:0 0 0 10px">
					<?php echo fb_servcat("$rsres[fb_servcat_id]").": &#8377;&nbsp;".$rsres[fb_serv_record_amount]." "; 
							if($rsres[lacs_or_rs]=='Lacs'){ echo $rsres[lacs_or_rs]; }; ?> 
                    </td>
                  </tr>
                  <?php $i++; } ?>
                  
                  
                  <?php
				  $i = 1;
				  $rs =  mysql_query("SELECT * FROM record_sales_fbservices_gph WHERE prp_code = '$prp_id' AND for_m_or_d = '$mdtype' AND  record_sale_type = 'Revenue' AND ( lacs_or_rs = '%' ) ORDER BY convertedToRs DESC LIMIT 0 , 10");
				  if(mysql_num_rows($rs)){
				  ?>
                  <tr bgcolor="#FFFFFF"><td colspan="5" height="5"></td></tr>
                  <?php
					    while($rsres = mysql_fetch_array($rs)){							
				  ?>
                  <tr bgcolor="#FFFFFF">
                    <td width="6%" align="center"><?php echo $i; ?></td>
                    <td width="15%" style="padding:0 0 0 10px">
                    <?php 
						  if($_GET[m_or_d] == 'month'){
						  //$mdtype = $_GET[m_or_d];
						  echo  date("F Y", strtotime($rsres[recrds_date]));
						  }else{
							echo  date("j F Y", strtotime($rsres[recrds_date]));
						  }

					?>
                    </td>
                    <td width="15%" style="padding:0 0 0 10px"><?=$rsres[record_sale_type];?></td>
                    <td width="34%" style="font-size:12px; padding:0 0 0 10px">
					<?php echo fb_servcat("$rsres[fb_servcat_id]").":&nbsp;".$rsres[fb_serv_record_amount]." "; 
							if($rsres[lacs_or_rs]=='%'){ echo $rsres[lacs_or_rs]; }; ?> 
                    </td>
                  </tr>
                  <?php $i++; } } ?>
                  
                  <?php
				  $i = 1;
				  $rs =  mysql_query("SELECT * FROM record_sales_fbservices_gph WHERE prp_code = '$prp_id' AND for_m_or_d = '$mdtype' AND  record_sale_type = 'Revenue' AND ( lacs_or_rs = 'Numbers' ) ORDER BY convertedToRs DESC LIMIT 0 , 10");
				  if(mysql_num_rows($rs)){
				  ?>
                  <tr bgcolor="#FFFFFF"><td colspan="5" height="5"></td></tr>
                  <?php
					    while($rsres = mysql_fetch_array($rs)){							
				  ?>
                  <tr bgcolor="#FFFFFF">
                    <td width="6%" align="center"><?php echo $i; ?></td>
                    <td width="15%" style="padding:0 0 0 10px">
                    <?php 
						  if($_GET[m_or_d] == 'month'){
						  //$mdtype = $_GET[m_or_d];
						  echo  date("F Y", strtotime($rsres[recrds_date]));
						  }else{
							echo  date("j F Y", strtotime($rsres[recrds_date]));
						  }

					?>
                    </td>
                    <td width="15%" style="padding:0 0 0 10px"><?=$rsres[record_sale_type];?></td>
                    <td width="34%" style="font-size:12px; padding:0 0 0 10px">
					<?php echo fb_servcat("$rsres[fb_servcat_id]").":&nbsp;".$rsres[fb_serv_record_amount]; ?> 
                    </td>
                  </tr>
                  <?php $i++; } } ?>
            </table>
                                    </div>
                				    <div class="TabbedPanelsContent">
                                    <table width="100%" border="0" cellspacing="1" cellpadding="2" bgcolor="#CCCCCC">
  <tr bgcolor="#999999" height="25"><td align="center"><strong>S. No</strong></td><td style="padding:0 0 0 10px"><strong>Record Date</strong></td><td style="padding:0 0 0 10px"><strong>Record Type</strong></td><td style="padding:0 0 0 10px"><strong>Record Information</strong></td></tr>
                  <?php

				  $i = 1;
				  $rs =  mysql_query("SELECT * FROM record_sales_fbservices_gph WHERE prp_code = '$prp_id' AND for_m_or_d = '$mdtype' AND record_sale_type = 'Covers' ORDER BY covers_record DESC LIMIT 0 , 10");
					    while($rsres = mysql_fetch_array($rs)){
							
				  ?>
                  <tr bgcolor="#FFFFFF">
                    <td width="6%" align="center"><?php echo $i; ?></td>
                    <td width="15%" style="padding:0 0 0 10px">
                    <?php 
						  if($_GET[m_or_d] == 'month'){
						  //$mdtype = $_GET[m_or_d];
						  echo  date("F Y", strtotime($rsres[recrds_date]));
						  }else{
							echo  date("j F Y", strtotime($rsres[recrds_date]));
						  }

					?>
                    </td>
                    <td width="15%" style="padding:0 0 0 10px"><?=$rsres[record_sale_type];?></td>
                    <td width="34%" style="font-size:12px; padding:0 0 0 10px">
					<?php echo fb_servcat("$rsres[fb_servcat_id]").": ".$rsres[covers_record]; ?> 

                    </td>
                    
                  </tr>
                  <?php $i++; } ?>
            </table>
                                    </div>
              				    </div>
              				  </div>
<?php /*?><table width="100%" border="0" cellspacing="1" cellpadding="2" bgcolor="#CCCCCC">
  <tr bgcolor="#999999" height="25"><td align="center"><strong>S. No</strong></td><td style="padding:0 0 0 10px"><strong>Record Date</strong></td><td style="padding:0 0 0 10px"><strong>Record Type</strong></td><td style="padding:0 0 0 10px"><strong>Record Information</strong></td></tr>
                  <?php

				  $i = 1;
				  $rs =  mysql_query("SELECT * FROM record_sales_fbservices_gph WHERE prp_code = '$prp_id' AND for_m_or_d = '$mdtype' ORDER BY convertedToRs DESC LIMIT 0 , 10");
					    while($rsres = mysql_fetch_array($rs)){
							
				  ?>
                  <tr bgcolor="#FFFFFF">
                    <td width="6%" align="center"><?php echo $i; ?></td>
                    <td width="15%" style="padding:0 0 0 10px">
                    <?php 
						  if($_GET[m_or_d] == 'month'){
						  //$mdtype = $_GET[m_or_d];
						  echo  date("F Y", strtotime($rsres[recrds_date]));
						  }else{
							echo  date("j F Y", strtotime($rsres[recrds_date]));
						  }

					?>
                    </td>
                    <td width="15%" style="padding:0 0 0 10px"><?=$rsres[record_sale_type];?></td>
                    <td width="34%" style="font-size:12px; padding:0 0 0 10px">
					<?php echo fb_servcat("$rsres[fb_servcat_id]").": &#8377;&nbsp;".$rsres[fb_serv_record_amount]." ".$rsres[lacs_or_rs]; ?> 

                    </td>
                    
                  </tr>
                  
                  <?php $i++; } ?>
            </table><?php */?>
				</div>
                            </li>
                        </ul>
                    </ul>
<SCRIPT>$("#accordion > li").click(function(){if(false==$(this).next().is(':visible')){$('#accordion > ul').slideUp(300);}
$(this).next().slideToggle(300);});$('#accordion > ul:eq(0)').show();</SCRIPT>



                <br />
                
                 
              </td>
						</tr>
                               
                </table>
      </div>

      
    </ul>
  </div><!--end dashboard-->

</div>
<!--====================================end demo wrapper================================================-->
  <script src="js/jquery-1.8.2.min.js"></script>
  <script src="js/scripts.js"></script>
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
var TabbedPanels2 = new Spry.Widget.TabbedPanels("TabbedPanels2");
</script>
</body>
</html>