<?php
ini_set('session.save_path', 'tmp');
session_start();
ob_start();
include("../connect.php");
include("prp_info.php");

error_reporting(E_ALL ^ E_NOTICE);
$url = $_SERVER['REQUEST_URI'];

$today = date("Y-m-d 00:00:00");

/*$todaydate = date("Y-m");
$todaydate1 = $todaydate."-01";
$sel_counter = mysql_query("SELECT * FROM `page_counter` WHERE prp_code = '$prp_id' AND ( created_datetime BETWEEN '$todaydate1' AND LAST_DAY( '$todaydate1' ) )");


if(mysql_num_rows($sel_counter)==0){
	$counter = 1;
	$insert_count = mysql_query("INSERT INTO `page_counter` (`id`, `prp_code`, `counter`, `created_datetime`) VALUES (NULL, '$prp_id', '$counter', '$today')");
}else{
	
	
	$get_counter = mysql_query("SELECT SUM(counter) FROM `page_counter` WHERE prp_code = '$prp_id' AND ( created_datetime BETWEEN '$todaydate1' AND LAST_DAY( '$todaydate1' ) ) ");
	$get_counter_res = mysql_fetch_array($get_counter);
	$counter_up = $get_counter_res['SUM(counter)']+1;
	$update_count = mysql_query("UPDATE  `gp_intranetdb`.`page_counter` SET  `counter` =  '$counter_up' WHERE prp_code = '$prp_id' AND ( created_datetime BETWEEN '$todaydate1' AND LAST_DAY( '$todaydate1' ) )");
}
	$get_counter = mysql_query("SELECT SUM(counter) FROM `page_counter` WHERE prp_code = '$prp_id'");
	$get_counter_res = mysql_fetch_array($get_counter);
*/
?>
<html>

<body>
<div id="blink" style="background-color: #ffff00;display: inline;padding: 5px;">WARNING</div>
<div id="blink" style="background-color: #ffff00;display: inline;padding: 5px;">WARNING</div>
<div id="blink" style="background-color: #ffff00;display: inline;padding: 5px;">WARNING</div>
<script type="text/javascript">

var i = 1,timer;

window.onload=function() {

timer = setInterval('blink()', 500);

}

function blink() {

if (i == 1) {

document.getElementById('blink').style.backgroundColor = '#ff0000';



} else {

document.getElementById('blink').style.backgroundColor = '#ffff00';

}

if(i == 1) i = 0; else i = 1;

}

//alert(document.getElementsByTagName('div').length);

</script>
</body>
</html>
Sent at 1:52 PM on Friday