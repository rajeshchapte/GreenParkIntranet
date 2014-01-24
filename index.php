<?php
include("connect.php");
include("prp_info.php");

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>GreePark Hotels and Resorts Intranet</title>
<link href="includes/styles1.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="includes/demo-styles.css" />
<style>
.dashboard{ padding:0em 1em 1em 1em;}
</style>
<script src="js/modernizr-1.5.min.js"></script>
</head>

<body>

<!--===============================Start Demo====================================================-->
<div class="demo-wrapper"> 
  <!-- classnames for the pages should include: 1) type of page 2) page name-->
  <div class="s-page random-restored-page">
    <h2 class="page-title">Search</h2>
    <div class="close-button s-close-button">x</div>
    
    <div style="width:100%;">
      <div style="margin:0 auto;  width:332px; height:32px; padding:2px; background-color:#FFFFFF">
      <form action="site_search.php" method="get" enctype="multipart/form-data">
         <input type="text" name="searc_key" id="searc_key" style="height:28px; line-height:28px; border:0px; width:300px; padding:0px; margin:0px;" />
         <input type="submit" class="search_submit" value="" align="Search" />
      </form>
      </div>
    </div>
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
  
    <div class="r-page innovation_div">
    <div class="page-content">
      <h2 class="page-title">New Innovations</h2>
      <table width="100%" border="0" cellspacing="8" cellpadding="0">
        <tr>
          <td valign="top" class="admin_content_area" colspan="2" width="100%"><table width="100%" border="0" cellspacing="0" cellpadding="0">

              <tr>
                <td valign="top">
                
				<?php
				  $invs =  mysql_query("SELECT * FROM innovations ORDER BY id DESC");
				  while($invsres = mysql_fetch_array($invs)){							
					?>
                  <div style="width:100%; height:136px; margin:0px 8px 8px 0px; float:left;" class="color13">
                    <div class="knowyourmanagers_tile_box">
                      <div class="" style="top:10px; font-size:14px; position:relative; padding:0px 0px 0px 5px"> <strong><?php echo $invsres[innovation_title]; ?></strong><br />
                        <?=$invsres[innovation_desc];?>
                        </div>
                      <div class="knowyourmanagers_tile_name" style="float:left; ">
                       <div style="float:right"><img src="images/innovation.png" width="60" /></div>
                      </div>
                    </div>
                  </div>
                  <?php 
					}
 ?></td>
              </tr>
            </table></td>
        </tr>
      </table>
    </div>
    <div class="close-button r-close-button">x</div>
  </div>
  <!--each tile should specify what page type it opens (to determine which animation) and the corresponding page name it should open-->
  <div class="dashboard clearfix">
      <div style="height:40px; color:#FFFFFF; padding:0px 0px 0px 10px; width:auto; line-height:40px; margin:0px 0px 0px 20px;font-family: 'Open Sans Light';">
        <span>HITS: GPH-<?php get_gph_count(); ?>, MG-<?php get_gpa_count(); ?>, AV-<?php get_sta_count(); ?>, GPC-<?php get_gpc_count(); ?>, GPV-<?php get_gpv_count(); ?></span>
      </div>
    <ul class="tiles">
      <div class="col1 clearfix">
        <li class="tile tile-big tile-26 slideTextUp" data-page-type="no" data-page-name="no"  onclick="location.href='<?=$home;?>';">
          <div><img src="images/logo123.png"  width="100" /></div>
          <div>
            <p class="prp_font">HOME</p>
          </div>
        </li>
        <li class="tile tile-big tile tile-2 slideTextRight" data-page-type="no" data-page-name ="no" onclick="location.href='<?=$prp_rootgph;?>/';">
          <div>
            <p><img src="images/Gp_hyd.png" width="100%" height="166" /></p>
          </div>
          <div style="background-color:#d9522c;" class="tiletextfont1">
            <p>GreenPark Hyderabad</p>
          </div>
        </li>
        <li class="tile tile-big tile-2 slideTextUp" data-page-type="no" data-page-name="no" onclick="location.href='<?=$prp_rootgpc;?>/';">
          <div class="tiletextfont" style="background-color:#5b39b5;">
            <p>GreenPark Chennai</p>
          </div>
          <div><img src="images/gpc_slide.png" width="404" height="166" /></div>
        </li>
        <li class="tile tile-big last tile-gpv  slideTextRight" data-page-type="no" data-page-name="no" onclick="location.href='<?=$prp_rootgpv;?>/';">
          <div><img src="images/Gp_vizag.jpg" width="100%" height="166" /></div>
          <div  class="tiletextfont" style="background-color:#a200a9; color:#FFFFFF;">
            <p>GreenPark Vizag</p>
          </div>
        </li>
      </div>
      <div class="col2 clearfix">
        <li class="tile tile-big tile-2 slideTextUp" data-page-type="no" data-page-name="no" onclick="location.href='<?=$prp_rootgpa;?>/';">
          <div style="background-color:#ff8b0c; color:#FFFFFF;" class="tiletextfont1">
            <p>Marigold</p>
          </div>
          <div>
            <p><img src="images/Gp_marigold.jpg" width="100%" /></p>
          </div>
        </li>
        <li class="tile tile-big tile-2 slideTextLeft" data-page-type="no" data-page-name="no" onclick="location.href='<?=$prp_rootavasa;?>/';">
          <div style="background-color:#4342d5; color:#FFFFFF;" class="tiletextfont1">
            <p>AVASA</p>
          </div>
          <div>
            <p><img src="images/Gp_avasa.jpg" width="100%" /></p>
          </div>
        </li>
        <li class="tile tile-big tile-2 slideTextUp" data-page-type="no" data-page-name="no" onclick="location.href='<?=$prp_rootcof;?>/';">
          <div style="background-color:#ba1d48; color:#FFFFFF;" class="tiletextfont1">
            <p>Corporate Office</p>
          </div>
          <div>
            <p><img src="images/Gp_corporate_office.jpg" width="100%" /></p>
          </div>
        </li>
        <li class="tile tile-small tile tile-31 slideTextRight" data-page-type="s-page" data-page-name="random-restored-page">
          <div>
            <p><img src="images/search_icon1.png" width="100%" /></p>
          </div>
          <div style="background-color:#178ab5;" class="tiletextfont1">
            <p>Search</p>
          </div>
        </li>
        <li class="tile tile-small last tile-30  slideTextRight" data-page-type="r-page" data-page-name="innovation_div">
          <div style="background-color:#ff8b0c; color:#FFFFFF;">
            <p><img src="images/innovation.png"  width="190"/></p>
          </div>
          <div style="background-color:#ff8b0c; color:#FFFFFF;" class="tiletextfont1">
            <p>Innovation</p>
          </div>
        </li>
      </div>
      <div class="col3 clearfix">
        <li class="tile tile-small tile-24 rotate3d rotate3dX" data-page-type="no" data-page-name="no" onclick="location.href='forms.php';">
          <div class="faces">
            <div class="frontforms tiletextfont">
              <p>Forms</p>
            </div>
            <div class="backforms"><img src="images/forms_icon.png" width="160" /></div>
          </div>
        </li>
        <li class="tile tile-small last tile-2  slideTextRight" data-page-type="no" data-page-name="no" onclick="location.href='sop.php';">
          <div style="margin-top:0px;">
            <p><img src="images/sop_icon.png" width="130" /></p>
          </div>
          <div style="background-color:#007e00; color:#FFFFFF;" class="tiletextfont">
            <p>SOP</p>
          </div>
        </li>
        <li class="tile tile-big tile-2 slideTextLeft" data-page-type="no" data-page-name="no" onclick="window.open('http://103.1.173.75/GPHODCheckList/', 'popUpWindow', 'height=650,width=1100,left=50,top=50, resizable=yes, scrollbars=yes, toolbar=yes, menubar=no, location=no, directories=no, status=yes');">
          <div style="background-color:#0a5ac3; color:#FFFFFF;" class="tiletextfont1">
            <p>Task Tracking System</p>
          </div>
          <div><img src="images/Gp_task_trackin_system_icon1.jpg" width="100%" /></div>
        </li>
        <li class="tile tile-small tile tile-2 slideTextRight" data-page-type="no" data-page-name ="no" onclick="window.open('http://115.115.87.146:8081/','popUpWindow','height=650,width=1100,left=50,top=50,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');">
          <div>
            <p><img src="images/dmc_icon.png"  width="100%"/></p>
          </div>
          <div style="background-color:#5fb335;" class="tiletextfont">
            <p>DMS</p>
          </div>
        </li>
        <li class="tile tile-small last tile-2  slideTextRight" data-page-type="no" data-page-name="no" onclick="window.open('http://194.194.194.1/rvw','popUpWindow','height=650,width=1100,left=50,top=50,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');">
          <div>
            <p><img src="images/ramco_icon.png"  width="100%"/></p>
          </div>
          <div style="background-color:#cd0e13; color:#FFFFFF;" class="tiletextfont">
            <p>HRMS</p>
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
      </div>
    </ul>
  </div>
  <!--end dashboard--> 
  
</div>
<!--====================================end demo wrapper================================================--> 
<script src="js/jquery-1.8.2.min.js"></script> 
<script src="js/scripts.js"></script>
</body>
</html>
