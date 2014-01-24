<?php

ini_set('session.save_path', 'tmp');
session_start();
ob_start();
error_reporting(E_ALL ^ E_NOTICE);
$url = $_SERVER['REQUEST_URI'];


include("../connect.php");
include("prp_info.php");
include("session_file.php");

$url = $_GET['url'];





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
<?php include("loginout_div.php"); ?> 
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

      </div>

      <div class="col4 clearfix">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tr>
										
						<td width="76%" valign="top" class="admin_content_area">
              <h2>Admin Details</h2>
                <hr />

                <?php 
				if($delmsg!=''){
					echo $delmsg;
				}

				  
				  $i = 1;
				  $emps =  mysql_query("SELECT * FROM gp_user WHERE property_code = '$prp_id' AND id = '$select_emp_res[id]'");
				  $empsres = mysql_fetch_array($emps);
							
				  ?>
                <div style="overflow:auto;">
                <table width="100%" border="0" cellspacing="1" cellpadding="2" bgcolor="#CCCCCC">
                  <tr height="25" bgcolor="#F2F2F2">
                  <td width="20%"><strong>Name : </strong></td><td width="80%"><?=$empsres[first_name]." ".$empsres[last_name];?></td></tr>
                  <tr bgcolor="#F2F2F2">
                  <td><strong>Emai Id : </strong></td><td><?php echo $empsres[email_id]; ?></td></tr>
                  <tr bgcolor="#F2F2F2">
                  <td><strong>Date of birth : </strong></td><td><?php echo date("d F Y",strtotime($empsres[dob])); ?></td></tr>
                  <tr bgcolor="#F2F2F2">
                  <td><strong>Gender</strong></td><td><?php echo $empsres[gender]; ?></td></tr>
                  <tr>
                  
                </table>
				</div><br />
                
                  <input type="button" onclick="location.href='edit_profile.php';"  class="ubutton" value="Edit Details" />
                
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


