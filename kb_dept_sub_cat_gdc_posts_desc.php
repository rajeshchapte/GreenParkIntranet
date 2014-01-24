<?php
error_reporting(E_ALL ^ E_NOTICE);
ob_start();


include("connect.php");
include("prp_info.php");

$dept_id = $_GET[dept_id];
$dept_sub_id = $_GET[dept_sub_id];
$dept_sub_gdc = $_GET[dept_sub_gdc];
$kb_id = $_GET[kb_id];

$query1 = "SELECT * FROM department where id = '$dept_id'";
$result1 = mysql_query($query1) or die("Query $query failed: " . mysql_error());
$deptsubs1 = mysql_fetch_array($result1);

$query2 = "SELECT * FROM dept_sub_cat where id = '$dept_sub_id'";
$result2 = mysql_query($query2) or die("Query $query failed: " . mysql_error());
$deptsubs2 = mysql_fetch_array($result2);

$query3 = "SELECT * FROM knwledge_bank where id = '$kb_id'";
$result3 = mysql_query($query3) or die("Query $query failed: " . mysql_error());
$deptsubs3 = mysql_fetch_array($result3);

?>

<!DOCTYPE html>
<!-- saved from url=(0064)http://sarasoueidan.com/blog/windows8-animations/demo/index.html -->
<html class=" js canvas canvastext geolocation crosswindowmessaging websqldatabase indexeddb hashchange historymanagement draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions  video audio localstorage sessionstorage webworkers applicationcache svg smil svgclippaths   fontface"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>GreePark Hotels and Resorts Intranet</title>
<link href="includes/styles1.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="includes/demo-styles.css" />
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
        <li class="tile tile-big tile-26 slideTextUp" data-page-type="no" data-page-name="no" onclick="location.href='<?=$home;?>';">
          <div><img src="images/logo123.png"  width="100" /></div>
          <div>
            <p class="prp_font">HOME</p>
          </div>
        </li>

        <li class="tile tile-big tile-2 slideTextUp" data-page-type="no" data-page-name="no" onclick="location.href='knowledge_bank.php';">
          <div style="background-color:#8dbd1c; color:#FFFFFF;" class="tiletextfont">
            <p>Knowledge Bank</p>
          </div>
          <div>
            <p><img src="images/knowledge_bank_icon1.png" width="100%" /></p>
          </div>
        </li>
        <li class="tile tile-big tile-2 slideTextUp" data-page-type="no" data-page-name="no" onclick="location.href='kb_dept_sub_cats.php?dept_id=<?=$dept_id;?>';">
          <div style="background-color:#8dbd1c; color:#FFFFFF;" class="tiletextfont">
            <p><?=$deptsubs1[department_name];?></p>
          </div>
          <div>
            <p><img src="images/knowledge_bank_icon1.png" width="100%" /></p>
          </div>
        </li>
        
        
        <?php
        if($dept_sub_id!=''){ ?>
        <li class="tile tile-big tile-2 slideTextUp" data-page-type="no" data-page-name="no" onclick="location.href='kb_dept_sub_cat_gdc.php?dept_id=<?=$dept_id;?>&dept_sub_id=<?=$dept_sub_id;?>';">
          <div style="background-color:#8dbd1c; color:#FFFFFF;" class="tiletextfont">
            <p><?=$deptsubs2[sub_cat_name];?></p>
          </div>
          <div>
            <p><img src="images/knowledge_bank_icon1.png" width="100%" /></p>
          </div>
        </li>
        
        <li class="tile tile-big tile-2 slideTextUp" data-page-type="no" data-page-name="no" onclick="location.href='kb_dept_sub_cat_gdc_posts.php?dept_id=<?=$dept_id;?>&dept_sub_id=<?=$dept_sub_id;?>&dept_sub_gdc=<?=$dept_sub_gdc;?>';">
          <div style="background-color:#8dbd1c; color:#FFFFFF;" class="tiletextfont">
            <p style="font-size:20px;"><?php if($dept_sub_gdc == "GuestDelightActivities"){ echo "Guest Delight Activities";}else{ echo "Guest Complaints Handling"; } ?></p>
          </div>
          <div>
            <p><img src="images/knowledge_bank_icon1.png" width="100%" /></p>
          </div>
        </li>
		<?php	
		}else{
		?>
        <li class="tile tile-big tile-2 slideTextUp" data-page-type="no" data-page-name="no" onclick="location.href='kb_dept_sub_cat_gdc_posts.php?dept_id=<?=$dept_id;?>&dept_sub_id=<?=$dept_sub_id;?>&dept_sub_gdc=<?=$dept_sub_gdc;?>';">
          <div style="background-color:#8dbd1c; color:#FFFFFF;" class="tiletextfont">
            <p style="font-size:20px;"><?php if($dept_sub_gdc == "GuestDelightActivities"){ echo "Guest Delight Activities";}else{ echo "Guest Complaints Handling"; } ?></p>
          </div>
          <div>
            <p><img src="images/knowledge_bank_icon1.png" width="100%" /></p>
          </div>
        </li>
        <?php } ?>
        
        
      </div>

      <div class="col4 clearfix">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tr>
										
						<td valign="top" class="admin_content_area">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td><h2>Knowledge Bank - <?php if($dept_sub_gdc == "GuestDelightActivities"){ echo "Guest Delight Activities";}else{ echo "Guest Complaints Handling"; } ?></h2></td>                        
                          </tr>
                        </table>
                <hr />
                 <div style="overflow:auto; height:500px;">
                <table width="100%" border="0" cellspacing="1" cellpadding="2" bgcolor="#CCCCCC" class="admin_content_area_inner">
                  <tr bgcolor="#FFFFFF" height="25">
                    <td width="30%"><strong>Department</strong></td>
                    <td><?php echo dept_name($deptsubs3[dept_id]);?></td>
                  </tr>
                   <?php if($dept_sub_id!=''){ ?>
                   <tr bgcolor="#FFFFFF">
                   <td><strong>Sub Department</strong></td><td><?=$deptsubs2[sub_cat_name];?></td> 
                  </tr>
				  <?php } ?>
                  <tr bgcolor="#FFFFFF">
                    <td><strong>Posted on</strong></td><td><?php echo date("d F Y",strtotime($deptsubs3[created_datetime])) ;?></td>
                  </tr>
                  <tr bgcolor="#FFFFFF">
                    <td valign="top"><strong><?php if($dept_sub_gdc == "GuestDelightActivities"){ echo "Guest Delight Activities";}else{ echo "Guest Complaints Handling"; } ?> Details</strong></td>
                    <td><?=$deptsubs3[dept_gdc_desc];?></td>
                  </tr>
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


