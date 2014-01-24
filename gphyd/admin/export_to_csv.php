<?php

ini_set('session.save_path', 'tmp');
session_start();
ob_start();
error_reporting(E_ALL ^ E_NOTICE);

include("../../connect.php");
include("prp_info.php");

include("session_file.php");
//$sid = $_REQUEST['sid'];
$sid = 21;

// Connect database
$table="survey_polls_by_employee";
 
$result=mysql_query("select DISTINCT(survey_question_id), COUNT(survey_answer_id), user_id from $table WHERE survey_id = '$sid'");
$res_arr = mysql_fetch_array("$result");
echo $res_arr;
$out = '';
 
// Get all fields names in table "mytablename" in database "mydb".
//$fields = mysql_list_fields(gp_intranetdb,$table);
$fieldsarr = array("survey_question_id", "survey_answer_id", "user_id");
array_push($fieldsarr, "Good", "Poor", "Satifies", "Excelent" );
// Count the table fields and put the value into $columns.
//$columns = mysql_num_fields($fields);
$columns = sizeof($fieldsarr);
// Put the name of all fields to $out.
for ($i = 0; $i < $columns; $i++) {
$l=$fieldsarr["$i"];
$out .= '"'.$l.'",';
}
$out .="\n";
 
// Add all values in the table to $out.
while ($l = mysql_fetch_array($result)) {
	
for ($i = 0; $i < $columns; $i++) {
	
	
	$out .='"'.$l["$i"].'",';
}
	$out .="\n";
}
 
// Open file export.csv.
$f = fopen ('export.csv','w');
 
// Put all values from $out to export.csv.
fputs($f, $out);
fclose($f);
 
header('Content-type: application/csv');
header('Content-Disposition: attachment; filename="export.csv"');
readfile('export.csv');



?>