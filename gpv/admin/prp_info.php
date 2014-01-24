<?php
include_once("prp_root_info.php");

$select_prp = mysql_query("SELECT * FROM properties WHERE property_code = '$prp_code'");
$res_prp = mysql_fetch_array($select_prp);
$prp_id = $res_prp[id];

$user_id = $_SESSION['email_id'];
$select_user = mysql_query("select * from gp_user where email_id = '$user_id'");
$select_user_res = mysql_fetch_array($select_user);


function dept_name($deptid){
$select_dept = mysql_query("select * from department where id = $deptid");
$deptres = mysql_fetch_array($select_dept);
$dept_name = $deptres[department_name];
return $dept_name;
}

function htlrev_cat($htlrevcatid){
$select_htlcat = mysql_query("select * from hotel_revenue_cats where id = $htlrevcatid");
$htlcatres = mysql_fetch_array($select_htlcat);
$htlcat_name = $htlcatres[hotel_revenue_cat_name];
return $htlcat_name;
}

function fb_servcat($fbservcatid){
$select_fbcat = mysql_query("select * from fb_services_cats where id = $fbservcatid");
$fbcatres = mysql_fetch_array($select_fbcat);
$fbcat_name = $fbcatres[fb_serivces_cat_name];
return $fbcat_name;
}

function fo_servcat($foservcatid){
$select_focat = mysql_query("select * from fo_services_cats where id = $foservcatid");
$focatres = mysql_fetch_array($select_focat);
$focat_name = $focatres[fo_serivces_cat_name];
return $focat_name;
}

function get_survey_questions($sid){
	$get_survey_quetions = mysql_query("SELECT COUNT(*) FROM survey_questions WHERE survey_id = '$sid'");
	$row = mysql_fetch_array($get_survey_quetions);
	return $row['COUNT(*)'];
}

function get_survey_participants($sid, $uid, $pid){
	$get_survey_participants = mysql_query("SELECT COUNT(DISTINCT user_id) FROM survey_polls_by_employee WHERE ( survey_id = '$sid' AND prp_code = '$pid' )");
	$row = mysql_fetch_array($get_survey_participants);
	return $row['COUNT(DISTINCT user_id)'];
}

?>