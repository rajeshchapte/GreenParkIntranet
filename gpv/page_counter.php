<?php


$todaydate = date("Y-m");
$todaydate1 = $todaydate."-01";
$sel_counter = mysql_query("SELECT * FROM `page_counter` WHERE prp_code = '$prp_id' AND ( created_datetime BETWEEN '$todaydate1' AND LAST_DAY( '$todaydate1' ) )");


if(mysql_num_rows($sel_counter)==0){
	$counter = 1;
	$insert_count = mysql_query("INSERT INTO `page_counter` (`id`, `prp_code`, `counter`, `created_datetime`) VALUES (NULL, '$prp_id', '$counter', '$today')");
}else{
	
	
	$get_counter = mysql_query("SELECT SUM(counter) FROM `page_counter` WHERE prp_code = '$prp_id' AND ( created_datetime BETWEEN '$todaydate1' AND LAST_DAY( '$todaydate1' ) ) ");
	$get_counter_res = mysql_fetch_array($get_counter);
	$counter_up = $get_counter_res['SUM(counter)']+1;
	$update_count = mysql_query("UPDATE  `page_counter` SET  `counter` =  '$counter_up' WHERE prp_code = '$prp_id' AND ( created_datetime BETWEEN '$todaydate1' AND LAST_DAY( '$todaydate1' ) )");
}
	$get_counter = mysql_query("SELECT SUM(counter) FROM `page_counter` WHERE prp_code = '$prp_id'");
	$get_counter_res = mysql_fetch_array($get_counter);


?>