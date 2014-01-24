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
        <li class="tile tile-big tile-17 slideTextLeft" data-page-type="no" data-page-name="no"  onclick="location.href='joining_formalities.php';">
        <div class="color10"><p>Joining Formalities</p></div>
          <div class="color10"><p style="font-size:30px;"><img src="../images/joining_formalities_icon.png"  width="100" /></p></div>
          
        </li>
        
      </div>
      
      
      
      
      
      <div class="col4 clearfix" style="line-height:25px;">
       <h2>Joining Formalities</h2>
              <hr />
              <table border="0" cellspacing="0" cellpadding="0" width="100%" class="gridtable" style="font-size:14px; letter-spacing:1px;">
                        <tbody>
                          <tr>
                            <td width="20" height="321">
                            <ul style=" line-height:25px;list-style-type:disc; padding-left:50px;">
                              <li>Fill up / type joining slip, joining report and the bio-data form</li>
                              <li>Complete ESI requirements (if applicable)</li>
                              <li>Complete P.F requirements (if applicable)</li>
                              <li>Bank A/c opening form.</li></ul>
                              
                              <p>These documents are available with HR Department.</p>
                              
                              <p align="left"> <strong style="padding-left: 140px">Submit</strong></p>
                              
                                  <ul style=" line-height:25px;list-style-type:lower-alpha; padding-left:50px;">
                                      <li>Post card size group photo of dependents with employee</li>
                                      <li>Photo copy of Birth CertificateMatchmaking Schedule:&lt;br /&gt;<br />
                                      Sept 24th: 2pm to 6pm</p>
                                      <li>Photo copies of certificate of academic & Professional qualifications.</li>
                                      <li>Photo copy of relieving letter from last employment</li>
                                      <li>Photo copy of relevant experience Certificate.</li>
                                      <li>>Proof of last salary drawn</li>
                                      <li>Medical fitness certificate</li>
                                  </ul>
                              </td>
                          </tr>
                          <tr>
                            <td width="20" height="41">All           the above documents are required to be submitted to the HR Department,           within 48 Hours of joining Green Park - Hyderabad.</td>
                          </tr>
                        </tbody>
                      </table>
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