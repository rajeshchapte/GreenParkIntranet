<?php
error_reporting(E_ALL ^ E_NOTICE);
ob_start();


include("connect.php");
include("prp_info.php");

$dept_id = $_GET[dept_id]; 
$query1 = "SELECT * FROM department where id = '$dept_id'";
$result1 = mysql_query($query1) or die("Query $query failed: " . mysql_error());
$deptsubs1 = mysql_fetch_array($result1);
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
      </div>

      <div class="col4 clearfix">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  
                  <tr>
                    <td>
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tr>
										
						<td width="100%"  height="136">
                      <?php
				  	    $query = "select id, sub_cat_name from dept_sub_cat where dept_id = '$dept_id'";
						$result = mysql_query($query) or die("Query $query failed: " . mysql_error());
						
						if(mysql_num_rows($result)==0){
							?>
                            <li class="tile tile-dsmall tile-22 slideTextUp" data-page-type="no" data-page-name="no"  style="margin: 0px 7px 4px 0px;" onclick="location.href='kb_dept_sub_cat_gdc_posts.php?dept_id=<?=$dept_id;?>&dept_sub_id=<?=$dept_sub_id;?>&dept_sub_gdc=GuestDelightActivities';">
                              <div><p style="font-size:20px;">Guest Delight Activities</p></div> 
                              <div><img src="images/knowledge_bank_icon.png"  width="125"  style="margin-top:20px;"/></div>        
                            </li>
                                            
                            <li class="tile tile-dsmall tile-22 slideTextUp" data-page-type="no" data-page-name="no"  style="margin: 0px 7px 4px 0px;" onclick="location.href='kb_dept_sub_cat_gdc_posts.php?dept_id=<?=$dept_id;?>&dept_sub_id=<?=$dept_sub_id;?>&dept_sub_gdc=GuestComplaintsHandling';">
                              <div><p style="font-size:20px;">Guest Complaints Handling</p></div> 
                              <div><img src="images/knowledge_bank_icon.png"  width="125"  style="margin-top:20px;"/></div>        
                            </li>
						<?php	
						}else{
						
					    while($deptsubs = mysql_fetch_array($result)){
						?>
                            <li class="tile tile-dsmall tile-22 slideTextUp" data-page-type="no" data-page-name="no"  style="margin: 0px 7px 4px 0px;" onclick="location.href='kb_dept_sub_cat_gdc.php?dept_id=<?=$dept_id;?>&dept_sub_id=<?=$deptsubs[id];?>';">
                              <div><p style="font-size:22px;"><?=ucfirst($deptsubs[sub_cat_name]);?></p></div> 
                              <div><img src="images/knowledge_bank_icon.png"  width="125"  style="margin-top:20px;"/></div>        
                            </li>
                        
                        <?php } }?>
                        </td>
						</tr>
                               
                </table>
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


