<?php

/* Property Info and root paths */
include("prp_root_info.php");

$select_prp = mysql_query("SELECT * FROM properties WHERE property_code = '$prp_code'");
$res_prp = mysql_fetch_array($select_prp);
$prp_id = $res_prp[id];



function dept_name($deptid){
$select_dept = mysql_query("select * from department where id = $deptid");
$deptres = mysql_fetch_array($select_dept);
$dept_name = $deptres[department_name];
return $dept_name;
}

if($_SESSION[user_id] != ''){
$select_emp = mysql_query("SELECT * FROM `gp_user` WHERE id = $_SESSION[user_id]");
$select_emp_res = mysql_fetch_array($select_emp);
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

function htlrev_cat($htlrevcatid){
$select_htlcat = mysql_query("select * from hotel_revenue_cats where id = $htlrevcatid");
$htlcatres = mysql_fetch_array($select_htlcat);
$htlcat_name = $htlcatres[hotel_revenue_cat_name];
return $htlcat_name;
}


?>