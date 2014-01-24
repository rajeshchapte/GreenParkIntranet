<?php
include("../connect.php");

include("prp_info.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="includes/styles1.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GreePark Hotels and Resorts Intranet</title>
<link href="js1/MetroJs.lt.css" rel="stylesheet" type="text/css">
<link href="includes/styles1.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="includes/styles_w.css">
<script src="js/modernizr-1.5.min.js"></script>
</head>

<body>
<div class="demo-wrapper">
  <div class="dashboard clearfix">
    <ul class="tiles">
      <div class="col1 clearfix">
        <li class="tile tile-big tile-11 slideTextUp" data-page-type="no" data-page-name="no" onclick="location.href='<?=$home;?>';">
          <div><img src="images/logo123.png"  width="100" /></div>
          <div>
            <p class="prp_font">HOME</p>
          </div>
        </li>
        
        <?php include("property_tile.php"); ?> 
        
        <li class="tile tile-big tile-17 slideTextLeft" data-page-type="no" data-page-name="no"  onclick="location.href='induction.php';">
          <div>
            <p style="font-size:30px;"><span class=""><img src="images/induction_icon.png"  width="35" />&nbsp;&nbsp;&nbsp;&nbsp;</span>Induction</p>
          </div>
          <div>
            <p>A Few Donts, Board of Directors,<br>
              Focus Document, etc...</p>
          </div>
        </li>
      </div>
      <div class="col2 clearfix">
        <li class="tile tile-small tile-16 slideTextUp" data-page-type="no" data-page-name="no" onclick="window.open('induction/welcomenote_document.pdf', 'popUpWindow', 'height=650, width=1100, left=50, top=50, resizable=yes, scrollbars=yes, toolbar=yes, menubar=no, location=no, directories=no, status=yes');" style="margin: 0px 7px 4px 0px;">
          <div class="color18">
            <p style="color:#FFF;">Welcome Note</p>
          </div>
          <div class="color18"><img src="images/welcome_note_icon.png"  width="110"  style="margin-top:30px;" /></div>
        </li>
        <li class="tile tile-small last tile-19 slideTextLeft" data-page-type="r-page" data-page-name="random-r-page" onclick="location.href='induction/joining_formalities.php';">
          <div class="color10">
            <p style="color:#FFF;">Joining Formalities</p>
          </div>
          <div class="color10">
            <p style="font-size:20px;"><span class=""><img src="images/joining_formalities_icon.png"  width="120" /></span></p>
          </div>
        </li>
        <li class="tile tile-big last tile-18 slideTextRight" data-page-type="s-page" data-page-name="random-restored-page" onclick="location.href='induction/greenpark_emailids.php';">
          <div class="color17">
            <p><img src="images/email_icon.png" width="130" /></p>
          </div>
          <div class="color17">
            <p style="color:#FFFFFF;">GreenPark Email IDs </p>
          </div>
        </li>
        <li class="tile tile-big tile-21 slideTextUp" data-page-type="r-page" data-page-name="random-r-page" onclick="location.href='induction/mission_objectives.php';">
          <div class="color1">
            <p style="color:#FFFFFF; font-size:26px;">Mission Objectives</p>
          </div>
          <div class="color1"><img src="images/mission_icon.png"  width="110"  style="margin-top:20px;"/></div>
        </li>
        <li class="tile tile-big tile-17 slideTextLeft" data-page-type="no" data-page-name="no"  onclick="location.href='induction/a_few_donts.php';">
          <div class="color16">
            <p>A Few Donts</p>
          </div>
          <div class="color16">
            <p style="font-size:30px;"><span class=""><img src="images/A_FEW_DONT'S_icon.png"  width="80" /></span></p>
          </div>
        </li>
      </div>
      <div class="col3 clearfix">
        <li class="tile tile-small tile-22 slideTextUp" data-page-type="r-page" data-page-name="random-r-page" onclick="location.href='induction/focus_document.php';">
          <div class="color16">
            <p>Focus Document</p>
          </div class="color16">
          <div class="color2"><img src="images/document_icon.png"  width="125"  style="margin-top:20px;"/></div>
        </li>
        <li class="tile tile-small last tile-21 slideTextUp" data-page-type="r-page" data-page-name="random-r-page" onclick="location.href='induction/know_your_hotel.php';">
          <div>
            <p>Know your Hotel</p>
          </div>
          <div class="color5"><img src="images/know_your_hotel.png"  width="110"  style="margin-top:40px;"/></div>
        </li>
        <li class="tile tile-big tile-22 slideTextUp" data-page-type="r-page" data-page-name="random-r-page" onclick="location.href='induction/group_companies.php';">
          <div class="color8">
            <p style="color:#FFFFFF;">Group Companies</p>
          </div>
          <div class="color8"><img src="images/GROUP_COMPANIES_icon.png"  width="125"  style="margin-top:20px;"/></div>
        </li>
        <li class="tile tile-big tile-13 slideTextLeft" data-page-type="r-page" data-page-name="random-r-page" onclick="location.href='induction/ourmotto.php';">
          <div class="color2">
            <p style="color:#FFFFFF; font-size:26px;">Our Motto</p>
          </div>
          <div class="color2">
            <p><span><img src="images/ourmotto_icon.png"  width="100" /></span></p>
          </div>
        </li>
        
        <li class="tile tile-big last tile-7 slideTextRight" data-page-type="s-page" data-page-name="random-restored-page" onclick="location.href='induction/board_of_directors.php';">
          <div class="color7">
            <p><img src="images/board_of_directors_icon.png" width="130" /></p>
          </div>
          <div class="color7">
            <p style="color:#FFFFFF; font-size:26px;">Board of Directors </p>
          </div>
        </li>


      </div>
    </ul>
  </div>
  <!--end dashboard--> 
</div>
<script src="js/jquery-1.8.2.min.js"></script> 
<script src="js/scripts.js"></script> 
<script src="js1/jquery-1.7.1.min.js" type="text/javascript"></script> 
<script src="js1/MetroJs.lt.js" type="text/javascript"></script> 
<script type="text/javascript">
        $(document).ready(function () {
            $(".live-tile,.flip-list").liveTile();
        });
    </script>
</body>
</html>