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

  <div class="content1" style=" height:auto; width:1240px; ">
    <div style=" height:550px; width:auto; z-index:999">
      <div class="dashboard clearfix">
        <ul class="tiles">
          <div class="col1 clearfix">
            <li class="tile tile-big tile-11 slideTextUp" data-page-type="no" data-page-name="no" onclick="location.href='<?=$home;?>';">
              <div><img src="../images/logo123.png"  width="100" /></div>
              <div>
                <p class="prp_font">HOME</p>
              </div>
            </li>
            <li class="tile tile-big tile-24 rotate3d rotate3dX" data-page-type="no" data-page-name="no" onclick="location.href='<?=$prp_root;?>/';">
              <div class="faces">
                <div class="frontgph" style="background-color:#d9522c">
                  <p>GreenPark Hyderabad</p>
                </div>
                <div class="backgph"> <img src="../images/Gp_hyd.jpg" width="100%" height="166" /> </div>
              </div>
            </li>
            <li class="tile tile-big tile-17 slideTextLeft" data-page-type="no" data-page-name="no"  onclick="location.href='../induction.php';">
              <div class="color9">
                <p style="font-size:30px;"><span class=""><img src="../images/induction_icon.png"  width="35" />&nbsp;&nbsp;&nbsp;&nbsp;</span>Induction</p>
              </div>
              <div class="color9">
                <p>A Few Donts, Board of Directors,<br>
                  Focus Document, etc...</p>
              </div>
            </li>
            
            
            <li class="tile tile-big tile-17 slideTextLeft" data-page-type="no" data-page-name="no"  onclick="location.href='know_your_hotel.php';">
              <div class="color5"><p>Know your Hotels</p></div>
              <div class="color5"><p style="font-size:30px;"><span class=""><img src="../images/know_your_hotel.png"  width="100" /></span></p></div>
              
            </li>
          </div>
          
          
          
          
          
          	 <div class="col2 clearfix">
             
             
             	
             
             
          		 <li class="tile tile-small tile-22 slideTextUp" data-page-type="r-page" data-page-name="random-r-page" onclick="location.href='know_your_hotel/rooms_suites.php';">
                      <div><p>Rooms & Suites</p></div>           
                      <div class="color1"><img src="../images/rooms_suites_icon.png"  width="125"  style="margin-top:35px;"/></div> 
          			</li>
        
         		<li class="tile tile-small last tile-21 slideTextUp" data-page-type="r-page" data-page-name="random-r-page" onclick="location.href='know_your_hotel/business_facilities.php';">
                     <div><p>Business Facilities</p></div> 
                     <div class="color5"><img src="../images/business_icon.png"  width="120"  style="margin-top:40px;"/></div>        
                  </li>
        
                
                <li class="tile tile-big last tile-21 slideTextUp" data-page-type="r-page" data-page-name="random-r-page" onclick="location.href='know_your_hotel/locations.php';">
                <div class="color14"><p style="color:#FFFFFF;">Location</p></div> 
                    <div class="color14"><img src="../images/location_icon.png"  width="110"  style="margin-top:35px;"/></div>        
                    
        		</li>
          
          
          	</div>
            
            
            
            
             <div class="col2 clearfix">
             		 <li class="tile tile-small tile-22 slideTextUp" data-page-type="r-page" data-page-name="random-r-page" onclick="location.href='know_your_hotel/restaurants.php';">
                      <div class="color17"><p>Restaurants</p></div>           
                      <div class="color17"><img src="../images/restaurants.png"  width="125"  style="margin-top:35px;"/></div> 
          			</li>
        
         		<li class="tile tile-small last tile-21 slideTextUp" data-page-type="r-page" data-page-name="random-r-page" onclick="location.href='know_your_hotel/tariff.php';">
                     <div class="color8"><p>Tariff</p></div> 
                     <div class="color8"><img src="../images/tariff_icon.png"  width="120"  style="margin-top:40px;"/></div>        
                  </li>
             </div>
            
            
            
            
        </ul>
      </div>
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