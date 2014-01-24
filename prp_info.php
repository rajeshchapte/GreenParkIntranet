<?php
/* Property Info and root paths */
$home = "/";
$prp_rootgph = "/gphyd";
$prp_rootgpc = "/gpc";
$prp_rootgpv = "/gpv";
$prp_rootgpa = "/gpa";
$prp_rootavasa = "/sta";
$prp_rootcof = "/cof";

function dept_name($deptid){
$select_dept = mysql_query("select * from department where id = $deptid");
$deptres = mysql_fetch_array($select_dept);
$dept_name = $deptres[department_name];
return $dept_name;
}

function get_gph_count(){
		$get_counter = mysql_query("SELECT SUM(counter) FROM `page_counter` WHERE prp_code = '1'");
		$get_counter_res = mysql_fetch_array($get_counter);
		$counter = $get_counter_res['SUM(counter)'];
			if($counter=='' || $counter == NULL){
				echo "0";
			}else{
				echo $counter;	
			}
}
function get_gpa_count(){
		$get_counter = mysql_query("SELECT SUM(counter) FROM `page_counter` WHERE prp_code = '2'");
		$get_counter_res = mysql_fetch_array($get_counter);
		$counter = $get_counter_res['SUM(counter)'];
			if($counter=='' || $counter == NULL){
				echo "0";
			}else{
				echo $counter;	
			}
}
function get_sta_count(){
		$get_counter = mysql_query("SELECT SUM(counter) FROM `page_counter` WHERE prp_code = '3'");
		$get_counter_res = mysql_fetch_array($get_counter);
		$counter = $get_counter_res['SUM(counter)'];
			if($counter=='' || $counter == NULL){
				echo "0";
			}else{
				echo $counter;	
			}
}
function get_gpc_count(){
		$get_counter = mysql_query("SELECT SUM(counter) FROM `page_counter` WHERE prp_code = '4'");
		$get_counter_res = mysql_fetch_array($get_counter);
		$counter = $get_counter_res['SUM(counter)'];
			if($counter=='' || $counter == NULL){
				echo "0";
			}else{
				echo $counter;	
			}
}
function get_gpv_count(){
		$get_counter = mysql_query("SELECT SUM(counter) FROM `page_counter` WHERE prp_code = '5'");
		$get_counter_res = mysql_fetch_array($get_counter);
		$counter = $get_counter_res['SUM(counter)'];
			if($counter=='' || $counter == NULL){
				echo "0";
			}else{
				echo $counter;	
			}
}

?>