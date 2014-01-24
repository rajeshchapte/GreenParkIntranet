<?php

ini_set('session.save_path', 'tmp');
session_start();
ob_start();
error_reporting(E_ALL ^ E_NOTICE);
$url = $_SERVER['REQUEST_URI'];


include("../connect.php");
include("prp_info.php");
include("session_file.php");

if(isset($_REQUEST[cancel_survey])){
	header("Location: surveys.php");
	}


$field_name = "12121221";
    echo $_POST[$field_name];
				//$date = new DateTime();
				//echo $date->format('Y-m-d H:i:s');
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d H:i:s', time());

$sid = $_REQUEST['sid'];
$select_surveys = mysql_query("SELECT * FROM survey_poll WHERE id = '$sid' AND survey_expiry_date >= CURDATE()");
if(mysql_num_rows($select_surveys)>0){
	$get_surveys = mysql_fetch_array($select_surveys);	
}else{
	$sur_expired = "<h2>This Survey was expired.</h2>Please chose an other survey from <a href='surveys.php'>Surveys Page</a> ";
}

// Check where the Survey taken bu this user or not
$check_survey = mysql_query("SELECT id FROM survey_polls_by_employee WHERE survey_id = '$sid' AND user_id = '$select_emp_res[id]'");
if(mysql_num_rows($check_survey)>0){
	$attemted_msg = "<h2>Sorry, you have already porticipated in this survey before.</h2>Please chose an other survey from <a href='surveys.php'>Surveys Page</a>";
}


// Check where the Survey taken bu this user or not

if(isset($_REQUEST[submit_survey])){
	
	$survey_qs = $_POST[survey_qs];
	foreach($survey_qs as $qid){
		$ans_id = $_POST['ansid'.$qid];
		//echo $ans_id;
		
		$insert_sp = mysql_query("INSERT INTO `survey_polls_by_employee` (`id`, `survey_id`, `survey_question_id`, `survey_answer_id`, `user_id`, `prp_code`, `created_datetime`, `created_by`) VALUES (NULL, '$sid', '$qid', '$ans_id', '$select_emp_res[id]', '$prp_id', '$date', NULL);");
				if($insert_sp){ 
				$survey_success = "<h2>Thank You very much for porticipating in this <b>&ldquo;$get_surveys[survey_name]&rdquo;</b> Survey.</h2>Please <a href='surveys.php'>click here</a> to go Surveys page.";
				//header("Location: logout.php");
				}else{
					$survey_success = "<h2>Thank You very much for porticipating in this <b>&ldquo;$get_surveys[survey_name]&rdquo;</b> Survey.</h2>Please <a href='surveys.php'>click here</a> to go Surveys page.";
						//echo "Fail".mysql_error();
					}
		
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
  
<style>
.survey_q_div{ background-color:#f9f7fa; width:100%; height:100%; margin-bottom:10px; padding:10px;}
.survey_q_div:hover{ background-color:#FFFFFF; width:100%; height:100%; margin-bottom:10px; padding:10px;}

</style>





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
        
        <li class="tile tile-big tile-26" data-page-type="no" data-page-name="no" onclick="location.href='<?=$prp_root;?>/take_survey.php?sid=<?=$sid;?>';">
          <div>
            <p align="center" style="font-size:28px;"><?=ucfirst($get_surveys[survey_name]);?></p>
          </div>
        </li>
      </div>

      <div class="col4 clearfix">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tr>
										
						<td width="100%" valign="top" class="admin_content_area">
                                                <?php
						if($sur_expired!=''){
							echo "<p style='padding:40px 0px;'><center>".$sur_expired."</center></p>";
						}elseif($attemted_msg!=''){
								echo "<p style='padding:40px 0px;'><center>".$attemted_msg."</center></p>";							
							}else{
						
						
							if($survey_success!=''){
								echo "<p style='padding:40px 0px;'><center>".$survey_success."</center></p>";							
							}else{
						?>
                        
                        
                                <form action="" method="post" enctype="multipart/form-data" name="survey_form" id="survey_form">
                                <?php
								
								$sc = 1;
								$select_scats = mysql_query("SELECT * FROM survey_cats WHERE survey_id = '$sid'");
								while($scats_res = mysql_fetch_array($select_scats)){
								
								
                                $select_survey_qs = mysql_query("SELECT * FROM survey_questions WHERE survey_id = '$sid' AND survay_cat_id = '$scats_res[id]'");
								
								if(mysql_num_rows($select_survey_qs)==0){
									$sc=$sc-1;		
									}else{	
										//$sc1=$sc;				
								echo "<b>$sc. ".$scats_res[survey_cat_title]."</b>"; 
									}
                                $j = 1;
								while($get_surveys_qs = mysql_fetch_array($select_survey_qs)){
                                ?>
                                
                                <?php  
                                    echo "<div class='survey_q_div'><b>".$j.". ".$get_surveys_qs[survey_question_text]."</b><input type='hidden' name='survey_qs[]' value='$get_surveys_qs[id]' /> <br>";
                                    $select_survey_as = mysql_query("SELECT * FROM survey_answers WHERE survey_id = '$sid'");
                                    $i = 1;
                                    while($get_surveys_as = mysql_fetch_array($select_survey_as)){
                                ?>
                                    <span style="padding:0px 10px 0px 10px;"><input type="radio" name="ansid<?=$get_surveys_qs[id];?>" id="ans_id<?=$get_surveys_qs[id].$i;?>" value="<?=$get_surveys_as[id];?>" class="req_question" /> <label for="ans_id<?=$get_surveys_qs[id].$i;?>"><?=$get_surveys_as[answer_text];?></label></span><br>

                                <?php
                                    $i++; }
									
                                echo "</div>";
								
								?>
								                              
                                   

								<?php
                                 $j++; }
								 $sc++; }
                               
                                    
                                ?>
                                <input type="submit" name="submit_survey" value="Submit" class="ubutton" />
                                <input type="button" name="cancel_survey" onClick="location.href='<?=$prp_root;?>/surveys.php';" value="Cancel" class="ubutton" />
                                </form>
                        
                        
                        
                        
                        <?php
								}
								
							}
						?>
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
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/additional-methods.js"></script>
<script type="text/javascript">

$(document).ready(function () {

   $('#survey_form').validate({
        // rules defined by the class,
		errorPlacement: function(error, element) {
			//alert(element.parent().html());
			error.insertAfter(element.parent().prev().prev());
		},
        submitHandler: function (form) { // for demo
            //alert('valid form');
            form.submit();
        }
    });
/*$("#survey_form").validate({
  errorPlacement: function(error, element) {
    error.appendTo( element.parent("td").next("td") );
  }
});*/

   $('.req_question').each(function () {
        $(this).rules('add', {
            required: true,
            messages: {
                required: '<br><span style="color:red">Please answer this by selecting any option below.</span>'
            }
        });
		//alert($(this).parent().html());
    });


});
</script>
</body></html>




