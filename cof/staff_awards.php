<?php

ini_set('session.save_path', 'tmp');
session_start();
error_reporting(E_ALL ^ E_NOTICE);


include("../connect.php");
include("prp_info.php");

?>


<!DOCTYPE html>
<!-- saved from url=(0064)http://sarasoueidan.com/blog/windows8-animations/demo/index.html -->
<html class=" js canvas canvastext geolocation crosswindowmessaging websqldatabase indexeddb hashchange historymanagement draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions  video audio localstorage sessionstorage webworkers applicationcache svg smil svgclippaths   fontface"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>GreePark Hotels and Resorts Intranet</title>
  <link href="includes/styles1.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="includes/styles_w.css">
  <script src="js/modernizr-1.5.min.js"></script>

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
        <li class="tile tile-big tile-18 slideTextRight" data-page-type="no" data-page-name="no"  onclick="location.href='<?=$prp_root;?>/awards.php';">
          <div><img src="images/award_icon.png"  width="125"  style="margin-top:20px;"/></div>        
          <div><p>Awards</p></div> 
        </li>
        <li class="tile tile-big tile-18 slideTextRight" data-page-type="no" data-page-name="no"  onclick="location.href='<?=$prp_root;?>/staff_awards.php';">
          <div><img src="images/award_icon.png"  width="125"  style="margin-top:20px;"/></div>        
          <div><p>Staff Awards</p></div> 
        </li>
        
      </div>

      <div class="col4 clearfix">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tr>
										
						<td valign="top" class="admin_content_area">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td><h2>Staff Awards</h2></td>
                        <td align="right">
                          <script type="text/javascript">
                           function getval(sel) {
                               url = 'staff_awards.php?m_or_d=';
                               window.location = url+sel.value;
                            }
                          </script>
                         <div style="float:right; width:100%">Showing <select name="selct" id="selct" onchange="getval(this);">
                            <option value="yearly" <?php echo $_GET[m_or_d] == 'yearly' ? 'selected' : null?>>Yearly</option>
                            <option value="quarterly" <?php echo $_GET[m_or_d] == 'quarterly' ? 'selected' : null?>>Quarterly</option>
                            <option value="monthly" <?php echo $_GET[m_or_d] == 'monthly' ? 'selected' : null?>>Monthly</option>
                          </select> Awards
                         </div> 
                        </td>
                      </tr>
                    </table>
                <hr /><br>

                <?php 
				if($delmsg!=''){
					echo $delmsg;
				}
				?>
                 <div style="overflow:auto; height:450px;">
                 
                 
                 
                 
<table width="100%" border="0" cellspacing="1" cellpadding="2" bgcolor="#CCCCCC">
                  <tr bgcolor="#999999" height="25">
                    <td><strong>&nbsp;&nbsp;&nbsp;Name</strong></td>
                    <td><strong>&nbsp;&nbsp;&nbsp;Designation</strong></td>
                    <td><strong>&nbsp;&nbsp;&nbsp;Department</strong></td>
                    <td><strong>&nbsp;&nbsp;&nbsp;Type of Award</strong></td>
                    <td align="center"><strong>Picture</strong></td>
                  </tr>
					<?php
						if($_GET[m_or_d] != ''){
							$mqytype = $_GET[m_or_d];
						}else{
							$mqytype = 'yearly';  
						}
						
						$i = 1;
						$htl_awards =  mysql_query("SELECT * FROM hotel_awards WHERE prp_code = $prp_id AND mqy_type = '$mqytype'");
						while($htl_awards_res = mysql_fetch_array($htl_awards)){
                    
                    ?>
                
                 
                

                  <tr bgcolor="#ececef" height="35">
                    <td width="25%">&nbsp;&nbsp;&nbsp;<?php echo $htl_awards_res[employee_name]//." ".$newjnsres[last_name]; ?></td>
                    <td width="25%" style="text-transform:capitalize">&nbsp;&nbsp;&nbsp;<?=$htl_awards_res[designation];?></td>
                    <td width="25%">&nbsp;&nbsp;&nbsp;
                    <?php echo $htl_awards_res[departmentid];
					?>
                    </td>
                    <td width="25%" align="center">
                    <?php echo $htl_awards_res[type_of_award]; ?>
                    </td>
                   <td align="center" valign="middle"><?php if($htl_awards_res[employee_pic]!=NULL){ ?><img src="<?php echo $prp_root."/admin/".$htl_awards_res[employee_pic]; ?>" width="60" />
                   <?php }else{ ?><img src="<?=$prp_root;?>/images/human_icon.png" width="40" /> <?php } ?>
                   </td>
                   
                  </tr>
                  <?php $i++; } ?>
                </table>
				</div><br />
                
                 
                
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
    

</body></html>




