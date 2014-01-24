<?php

ini_set('session.save_path', 'tmp');
session_start();
ob_start();
error_reporting(E_ALL ^ E_NOTICE);
$url = $_SERVER['REQUEST_URI'];


include("../connect.php");
include("prp_info.php");
include("session_file.php");

if(isset($_REQUEST[cancel_comp])){
	header("Location: logout.php");
}

date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d H:i:s', time());

	

if(isset($_REQUEST[upload_comp])){
	
	$comapliant_title = $_POST[comapliant_title];
	$emp_dept = $_POST[emp_dept];
	$complaint_desc = $_POST[complaint_desc];
	
	//echo $polc_title."<br>".$polc_text."<br>".$polc_category;
	
	$comp_save = mysql_query("INSERT INTO employee_comapliants (`id`, `prp_code`, `complainer_user_id`, `complaint_title`, `departmentid`, `complaint_description`, `created_datetime`) VALUES (NULL, '$prp_id', '$_SESSION[user_id]', '$comapliant_title', '$emp_dept', '$complaint_desc', '$date');");

		if($comp_save){ 
		
			$to  = 'HR Corp <rajsingh@hotelgreenpark.com>';
			//$headers .= 'To: HR Corp <rajeshc@globalnest.com>' . "\r\n";
			$headers = "From: ".$select_emp_res[first_name]." ".$select_emp_res[last_name]." <".$select_emp_res[email_id]."> \r\n";
			$headers .= 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/plain; charset=iso-8859-1' . "\r\n";
			//$headers .= 'Cc: srinivas@hotelgreenpark.com, itd.gpa@hotelgreenpark.com' . "\r\n";
			//$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";	
			$subject = $comapliant_title;
			$message = $complaint_desc;		
			if(mail($to, $subject, $message, $headers)){
				echo "EMail sent";	
			}

		
		echo "DONE";
		header("Location: logout.php");
		}else{
				echo "Fail".mysql_error();
			 }
	//}
}
	

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
<?php include("loginout_div.php"); ?>
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
        
        <?php include("property_tile.php"); ?>

        <li class="tile tile-big tile-26" data-page-type="no" data-page-name="no" onclick="location.href='<?=$prp_root;?>/surveys.php';">
          <div>
            <p align="center" style="font-size:28px;">Surveys</p>
          </div>
        </li>
      </div>

      <div class="col4 clearfix">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tr>
										
						<td width="100%" valign="top">
					 <?php
						$select_surveys = mysql_query("SELECT * FROM survey_poll WHERE survey_expiry_date > CURDATE()  ORDER BY ID DESC");
						  while($get_surveys = mysql_fetch_array($select_surveys)){
							
						?>
        <li class="tile tile-dsmall tile-26" data-page-type="no" data-page-name="no" onclick="location.href='<?=$prp_root;?>/take_survey.php?sid=<?=ucfirst($get_surveys[id]);?>';">
          <div>
            <p align="center" style="font-size:22px;"><?=ucfirst($get_surveys[survey_name]);?></p>
          </div>
        </li>
        
                        <?php } ?>
                  
               
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




