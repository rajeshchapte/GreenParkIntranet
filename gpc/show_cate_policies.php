<?php
include("../connect.php");
include("prp_info.php");

$polc_cate = $_GET[polc_cate];
$polc_cate_res = mysql_query("SELECT * FROM policy_categories WHERE id = $polc_cate AND prp_code = $prp_id");
$polc_cate_res = mysql_fetch_array($polc_cate_res);
$polc =  mysql_query("SELECT * FROM policies WHERE policy_caregotry_id = $polc_cate AND prp_code = $prp_id");
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
      <?php /*?><p>Chew iPad power cord chew iPad power cord attack feet chase mice leave dead animals as gifts and stick butt in face chew iPad power cord. Chase mice. Run in circles use lap as chair why must they do that. Intrigued by the shower destroy couch leave hair everywhere sleep on keyboard chew iPad power cord. Use lap as chair. Missing until dinner time stand in front of the computer screen, intently sniff hand. Find something else more interesting. Destroy couch play time so inspect anything brought into the house hate dog burrow under covers. Sleep on keyboard destroy couch so hate dog so hide when guests come over. Chase mice destroy couch lick butt throwup on your pillow use lap as chair yet intrigued by the shower but climb leg. Stare at ceiling make muffins or hunt anything that moves claw drapes. Intently sniff hand intrigued by the shower. Why must they do that. Cat snacks leave dead animals as gifts or inspect anything brought into the house sweet beast so stare at ceiling give attitude. Flop over claw drapes but sun bathe lick butt, and chase mice. Rub face on everything lick butt leave hair everywhere lick butt, missing until dinner time for use lap as chair lick butt. Make muffins leave dead animals as gifts play time. Chew foot intrigued by the shower stare at ceiling inspect anything brought into the house yet hopped up on goofballs. 

      Hunt anything that moves intently sniff hand for hunt anything that moves play time. Chew foot climb leg throwup on your pillow so lick butt yet make muffins hate dog. Intrigued by the shower. Intently sniff hand shake treat bag. Cat snacks burrow under covers make muffins but all of a sudden go crazy find something else more interesting. Flop over chase mice. Give attitude. Inspect anything brought into the house. Stick butt in face sun bathe so find something else more interesting and intrigued by the shower. Rub face on everything use lap as chair. 

      Under the bed claw drapes chase mice but leave hair everywhere yet make muffins yet claw drapes. Use lap as chair. Find something else more interesting stretch for under the bed. Nap all day intrigued by the shower, hate dog sweet beast intently sniff hand so hate dog nap all day. Swat at dog hide when guests come over and mark territory chase mice for cat snacks. Use lap as chair. Lick butt throwup on your pillow need to chase tail. 

      Mark territory. Stick butt in face shake treat bag yet hunt anything that moves, yet hopped up on goofballs yet stare at ceiling under the bed. Give attitude chase imaginary bugs stretch so hunt anything that moves so hide when guests come over but intrigued by the shower find something else more interesting. Make muffins behind the couch for chew foot. Sweet beast flop over but throwup on your pillow. Intently sniff hand use lap as chair and missing until dinner time and chase imaginary bugs. 
      </p><?php */?>
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
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  
                  <tr>
                    <td>
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tr>
										
						<td width="100%"  height="136">
                      <?php
						while($polcres = mysql_fetch_array($polc)){
							
						?>
                        <li class="tile tile-dsmall tile-plc" data-page-type="no" data-page-name="no" style="margin: 0px 7px 4px 0px;" onclick="location.href='show_cate_policy.php?polc_id=<?=$polcres[id];?>&polc_cate=<?=$polc_cate;?>';">
         				  <div align="center" style="top:15px; position:relative; font-size:14px;"><img src="images/policies_icon.png"  width="90" /><br><?=$polcres[policy_title];?></div>
                          
                        </li>
                        
                        <?php } ?>
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



<table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tr>
										
						<td width="100%"  height="136">
                      <?php
					    
					    while($polcres = mysql_fetch_array($polc)){
							
						?>
                        
                        <div style="width:190px; height:136px; margin:0px 8px 8px 0px; float:left;" class="color14"  onclick="location.href='show_cate_policy.php?polc_id=<?=$polcres[id];?>&polc_cate=<?=$polc_cate;?>';">
                        <div class="tile_box">
                    		<div align="center" style="top:15px; position:relative"><img src="images/policies_icon.png"  width="90" /></div>
                          		<div class="tile_name" style="text-transform:capitalize">
                            		<?=$polcres[policy_title];?>
                         		</div>
                      		</div>
                        </div>
                        <?php } ?>
                        </td>
						</tr>
                               
                </table>