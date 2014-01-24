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

        <li class="tile tile-big tile-29 slideTextUp" data-page-type="no" data-page-name="no"  onclick="location.href='<?=$prp_root;?>/employee_directory.php';">
          <div><p>Employee Directory</p></div> 
          <div><img src="images/directory_icon.png"  width="125"  style="margin-top:20px;"/></div>        
        </li>
        
      </div>

      <div class="col4 clearfix">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tr>
										
						<td valign="top" class="admin_content_area">
              <h2>Employee Directory</h2>
                <hr /><br>

                <?php 
				if($delmsg!=''){
					echo $delmsg;
				}
				?>
                <div style="overflow:auto; height:400px;">
                <table width="100%" border="0" cellspacing="1" cellpadding="2" bgcolor="#CCCCCC">
                  <tr bgcolor="#999999" height="25"><td><strong>Name</strong></td><td><strong>Department</strong></td><td><strong>Designation</strong></td><td><strong>Photo</strong></td></tr>
                  <?php
				  $i = 1;
				  $empdir =  mysql_query("SELECT * FROM employee_directory WHERE prp_code = $prp_id ORDER BY first_name ASC");
					    while($empdirres = mysql_fetch_array($empdir)){
							
				  ?>
                  <tr bgcolor="#ececef" height="35">
                    <td width="25%"><a href="employee_details.php?empid=<?=$empdirres[id]; ?>"><?php echo $empdirres[first_name]." ".$empdirres[last_name]; ?></a></td>
                    <td width="25%" style="text-transform:capitalize"><?php echo dept_name($empdirres[departmentid]);?></td>
                    <td width="25%">
                    <?php echo $empdirres[designation];
					?>
                    </td>
                    <td width="15%" align="center">
                    <?php if($empdirres[emp_pic]!=''){ ?><img src="admin/<?=$empdirres[emp_pic]; ?>" width="40" >
                    <?php }else	{ ?><img src="images/directory_icon.png" width="40" >
                    <?php } ?>
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


