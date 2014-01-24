<?php
include("connect.php");
include("prp_info.php");

$polc_cate = $_GET[polc_cate];
$polc_id = $_GET[polc_id];
$polc_cate_res = mysql_query("SELECT * FROM policy_categories WHERE id = $polc_cate AND prp_code = $prp_id");
$polc_cate_res = mysql_fetch_array($polc_cate_res);
$polc =  mysql_query("SELECT * FROM policies WHERE id = $polc_id AND prp_code = $prp_id");
$polcres = mysql_fetch_array($polc);
?>



<!DOCTYPE html>
<!-- saved from url=(0064)http://sarasoueidan.com/blog/windows8-animations/demo/index.html -->
<html class=" js canvas canvastext geolocation crosswindowmessaging websqldatabase indexeddb hashchange historymanagement draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions  video audio localstorage sessionstorage webworkers applicationcache svg smil svgclippaths   fontface"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>GreePark Hotels and Resorts Intranet</title>
<link href="includes/styles1.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="includes/demo-styles.css" />
  <script src="js/modernizr-1.5.min.js"></script>
<script language="javascript">

function Disable_Control_C() {
var keystroke = String.fromCharCode(event.keyCode).toLowerCase();

if (event.ctrlKey && (keystroke == 'c' || keystroke == 'v' || keystroke == 'p')) {
//alert("let's see");
event.returnValue = false; // disable Ctrl+C
}
}

</script>
<script language="javascript">
document.onmousedown=disableclick;
status="Right Click Disabled";
function disableclick(e)
{
  if(event.button==2)
   {
    // alert(status);
     return false;	
   }
}
</script>

</head>

<body onkeydown="javascript:Disable_Control_C()" oncontextmenu="return false;">
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

        <li class="tile tile-big last tile-7 rotate3d rotate3dX" data-page-type="no" data-page-name="no"  onclick="location.href='policies.php';">
          <div class="faces">
            <div class="frontplc"><img src="images/policies_icon.png"  style="padding-top:25px;" width="120" /></div>
            <div class="backplc tiletextfont1"><p>Policies</p></div>
          </div>
        </li>
        
        <li class="tile tile-big last tile-plc" data-page-type="no" data-page-name="no"  onclick="location.href='show_cate_policies.php?polc_cate=<?=$polc_cate;?>';">
          <div class="faces">
            <div style="top:15px; position:relative;"><img src="images/policies_icon.png"  width="90" /><br><?=$polc_cate_res[policy_category];?></div>
            
          </div>
        </li>
        
      </div>

      <div class="col4 clearfix">
      
        <li class="tile-content" data-page-type="no" data-page-name="no">
         
          <div style="padding:7px; clear:both">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  
                  <tr>
                    <td class="admin_content_area"> 
                    <center><h2><?=$polcres[policy_title];?></h2></center>
                    <hr /><br>
					<?=str_replace("font-size","",$polcres[policy_text]);?>
                      
                    </td>
                  </tr>
                </table>
                      
                    </div>
        </li>
      </div>

      
    </ul>
  </div><!--end dashboard-->

</div>
<!--====================================end demo wrapper================================================-->
  <script src="js/jquery-1.8.2.min.js"></script>
  <script src="js/scripts.js"></script>
</body>
</html>



