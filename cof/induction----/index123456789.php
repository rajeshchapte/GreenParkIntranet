<?php
include("../prp_info.php");

?>

<!DOCTYPE html>
<!-- saved from url=(0064)http://sarasoueidan.com/blog/windows8-animations/demo/index.html -->
<html class=" js canvas canvastext geolocation crosswindowmessaging websqldatabase indexeddb hashchange historymanagement draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions  video audio localstorage sessionstorage webworkers applicationcache svg smil svgclippaths   fontface"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>GreePark Hotels and Resorts Intranet</title>
    <link href="js1/MetroJs.lt.css" rel="stylesheet" type="text/css">
  <link href="../includes/styles1.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="../includes/styles_w.css">
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
          <div><img src="../images/logo123.png"  width="100" /></div>
          <div><p class="prp_font">HOME</p></div>
        </li>
        
        <li class="tile tile-big tile-24 rotate3d rotate3dX" data-page-type="no" data-page-name="no" onclick="location.href='<?=$prp_root;?>/';">
          <div class="faces">
            <div class="frontgph" style="background-color:#d9522c"><p>GreenPark Hyderabad</p></div>
            <div class="backgph">
              <img src="../images/Gp_hyd.jpg" width="100%" height="166" />
            </div>
          </div>
        </li>
        
        <li class="tile tile-small tile-13 slideTextRight" data-page-type="s-page" data-page-name="random-restored-page">
          <div><p>Merchandize &nbsp;&nbsp;&nbsp;<img src="images/marchandise_icon_arrow.png" /> </p></div>
          <div ><p><img src="../images/marchandise_icon.png" width="80" /></p></div>
        </li>
        
        <li class="tile tile-small last tile-14 slideTextUp" data-page-type="r-page" data-page-name="random-r-page">
          <div style="top:22px;"><img src="../images/org_charts_icon.png"  width="100" /></div>
          <div><p>Organization Charts</p></div>
        </li>
        
        <li class="tile tile-small tile-15" data-page-type="r-page" data-page-name="random-r-page">
          <div><p align="center"><img src="../images/cafeteria_menu_icon.png"  width="80" /><br>Cafeteria Menu</p></div>
          
        </li>
        
        <li class="tile tile-small last tile-16" data-page-type="r-page" data-page-name="random-r-page">
          <div style="top:5px;"><p align="center"><img src="../images/know_your_hotel.png"  width="100" /><br>Announcements</p></div>          
        </li>
      </div>

      <div class="col2 clearfix">
        <li class="tile tile-small tile-17 slideTextLeft" data-page-type="no" data-page-name="no"  onclick="location.href='induction.php';">
          <div><p style="font-size:30px;"><span class=""><img src="../images/induction_icon.png"  width="20" />&nbsp;&nbsp;&nbsp;&nbsp;</span>Induction</p></div>
          <div><p>A Few Donts,<br> Board of Directors,<br> Focus Document,<br> etc...</p></div>
        </li>
        <li class="tile tile-small last tile-7 rotate3d rotate3dX" data-page-type="r-page" data-page-name="random-r-page">
          <div class="faces">
            <div class="frontplc"><img src="../images/policies_icon.png"  style="padding-top:25px;" width="120" /></div>
            <div class="backplc"><p align="center">Policies</p></div>
          </div>
        </li>
        <!--Tiles with a 3D effect should have the following structure:
            1) a container inside the tile with class of .faces
            2) 2 figure elements, one with class .front and the other with class .back-->
        <li class="tile tile-small tile-15nohover" data-page-type="r-page" data-page-name="random-r-page">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="140">
                  <marquee direction="up" scrollamount="2" scrolldelay="0" height="130" onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 2, 0);" style="text-align:left; padding-left:3px;">
                    Rajesh Kumar<br>
                    IT
                  </marquee>
                </td>
              </tr>
              <tr>
                <td height="20" style="padding:0 3px;">
                  <span style="clear:both; font-size:14px; float:left">Today's Birthdays</span><span style="float:right"><img src="images/birthday_icon.png" width="20" /></span>
                </td>
              </tr>
            </table>
        </li>
        <li class="tile tile-small last tile-18 slideTextRight" data-page-type="s-page" data-page-name="random-restored-page">
          <div><p>Awards &nbsp;&nbsp;&nbsp;<img src="../images/awards_icon_arrow.png" /> </p></div>
          <div><p><img src="../images/award_icon.png" width="120" /></p></div>
        </li>
        
        
        
        <li class="tile tile-small tile-19 slideTextLeft" data-page-type="r-page" data-page-name="random-r-page">
          <div><p style="font-size:20px;"><span class=""><img src="../images/know_your_managers.png"  width="120" /></span></p></div>
          <div><p>Know Your Manaagers</p></div>
        </li>
         <li class="tile tile-small last tile-15nohover" data-page-type="r-page" data-page-name="random-r-page">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="140">
                  <marquee direction="up" scrollamount="2" scrolldelay="0" height="130" onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 2, 0);" style="text-align:left; padding-left:3px;">
                    Rajesh Kumar<br>
                    IT
                  </marquee>
                </td>
              </tr>
              <tr>
                <td height="20" style="padding:0 3px;">
                  <span style="clear:both; font-size:14px; float:left">New Joinees</span><span style="float:right"><img src="images/meeting_icon.png" width="20" /></span>
                </td>
              </tr>
            </table>
        </li>
        
        
        <li class="tile tile-small tile-13 slideTextLeft" data-page-type="r-page" data-page-name="random-r-page">
          <div><p><span class=""><img src="images/suggestion_icon.png"  width="100" /></span></p></div>
          <div><p style="font-size:18px;">Employee Suggestions,<br> Employee Complaints,<br> Idea Box</p></div>
        </li>
        <li class="tile tile-small last tile-24 rotate3d rotate3dX" data-page-type="r-page" data-page-name="random-r-page">
          <div class="faces">
            <div class="fronteves" style="pading-top:10px;"><img src="images/events_icon.png"  width="130" /></div>
            <div class="backeves"><p align="center">Hotel Events<br>Staff Events</p></div>
          </div>
        </li>
        <?php /*?><li>
        <div class="tiles">
           
            <div class="live-tile flip ha" data-mode="flip">
                <div style="background-color: green; -webkit-transform: rotateX(180deg); -webkit-transition: all 500ms ease 0s; transition: all 500ms ease 0s;" class="flip-front ha">test 2</div>
                <div style="background-color: red; -webkit-transform: rotateX(360deg); -webkit-transition: all 500ms ease 0s; transition: all 500ms ease 0s;" class="flip-back ha">test 2 - back</div>
            </div>
            
        </div>
        </li><?php */?>
      </div>

      <div class="col3 clearfix">      
        <li class="tile1 tile-2xbig tile-9">
          <div onclick="playPause('video1','play_btn2')" class="content_box_div" title="Video 2">
                      <div class="content_box_newsletter" style="width:100%"> <span style="line-height:50px;">Video</span>
                      <div class="video_img" id="video_img" style="width:100%;"> 
                          <video id="video1" width="100%">
                          <source src="Hyderabad_Hotel_Green_Park_1.mp4" type="video/mp4" style="padding-left:0px;">
                          Your browser does not support HTML5 video. </video>                          
                          <div class="play_btn" id="play_btn2"></div>
                        </div>
                      <script> 

function playPause(str,str1)
{
var myVideo= document.getElementById(str);
var playbtn2= document.getElementById(str1);
 
if (myVideo.paused) {
  myVideo.play();
  document.getElementById('play_btn2').style.background = "#FFFFFF url(images/pause_blue.png)";
	document.getElementById('video_img').style.opacity = 1; 
}else { 
  myVideo.pause(); 
  document.getElementById('play_btn2').style.background = "#FFFFFF url(images/play_blue.png)";
	if (document.getElementById('video_img').onmouseover)
	document.getElementById('video_img').onmouseover.style.opacity = 1; 
	esle
	document.getElementById('video_img').style.opacity = .7; 

}
} 

</script> 
                    </div>
                    </div>
        </li>
       
        
        <li class="tile tile-small tile-22 slideTextUp" data-page-type="r-page" data-page-name="random-r-page">
          
          <div><p>Library Information</p></div> 
          <div><img src="images/library_icon.png"  width="125"  style="margin-top:20px;"/></div>        
        </li>
        
         <li class="tile tile-small last tile-21 slideTextUp" data-page-type="r-page" data-page-name="random-r-page">
          
          <div><p>Vacancies</p></div> 
          <div><img src="images/vacancies_bg.png"  width="110"  style="margin-top:20px;"/></div>        
        </li>
        
        
        <li class="tile tile-small tile-20" data-page-type="r-page" data-page-name="random-r-page">
          <div><p align="center" style="font-size:24px;">Record Sales <br /> Surveys</p></div>
        </li>
        
        <li class="tile tile-small last tile-16" data-page-type="r-page" data-page-name="random-r-page">
          <div style="top:5px;"><p align="center"><img src="images/newsletter_icon.png"  width="100" /><br>Newsletter</p></div>          
        </li>
        
      </div>
    </ul>
  </div><!--end dashboard-->

</div>
<!--====================================end demo wrapper================================================-->
  <script src="js/jquery-1.8.2.min.js"></script>
  <script src="js/scripts.js"></script>
    
    <script src="js1/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="js1/MetroJs.lt.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".live-tile,.flip-list").liveTile();
        });
    </script>


</body></html>