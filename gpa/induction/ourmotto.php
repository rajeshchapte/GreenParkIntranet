<?php
include("../../connect.php");
include("../prp_info.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GreePark Hotels and Resorts Intranet</title>
<link href="js1/MetroJs.lt.css" rel="stylesheet" type="text/css">
  <link href="../includes/styles1.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="../includes/styles_w.css">
  <script src="js/modernizr-1.5.min.js"></script>
<style>
  .col4 {
    float: left;
    margin-right: .5%;
    width: 65%; 
	background-color:#f3f3f3;
	padding:15px;
  }
</style>
</head>

<body>
<div class="demo-wrapper">
 
    <div class="dashboard clearfix">
    <ul class="tiles">
      <div class="col1 clearfix">
        <li class="tile tile-big tile-11 slideTextUp" data-page-type="no" data-page-name="no" onclick="location.href='<?=$home;?>';">
          <div><img src="../images/logo123.png"  width="100" /></div>
          <div><p class="prp_font">HOME</p></div>
        </li>
        
        <?php include("../property_tile.php"); ?>
        <li class="tile tile-big tile-17 slideTextLeft" data-page-type="no" data-page-name="no"  onclick="location.href='../induction.php';">
          <div><p style="font-size:30px;"><span class=""><img src="../images/induction_icon.png"  width="35" />&nbsp;&nbsp;&nbsp;&nbsp;</span>Induction</p></div>
          <div><p>A Few Donts, Board of Directors,<br> Focus Document, etc...</p></div>
        </li>
        <li class="tile tile-big tile-17 slideTextLeft" data-page-type="no" data-page-name="no"  onclick="location.href='ourmotto.php';">
        <div class="color2"><p>Our Motto</p></div>
          <div class="color2"><p style="font-size:30px;"><img src="../images/ourmotto_icon.png"  width="100" /></p></div>
          
        </li>
        
      </div>
      
      
      
      
      
      <div class="col4 clearfix" style="line-height:25px;">
       <h2 class="contentheading">Our Motto</h2>
              <hr />
              
<ul style="line-height:25px;"> 
<li >GUEST IS OUR GOD</li> 
<li>GREEN PARK IS OUR TEMPLE</li> 
<li>GOOD WORK IS OUR PRAYER</li> 
<li>GUEST DELIGHT IS OUR REWARD</li> 
</ul>

</div>
    </ul>
    </div>
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