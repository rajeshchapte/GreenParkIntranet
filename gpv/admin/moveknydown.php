<?php
ini_set('session.save_path', 'tmp');
session_start();
error_reporting(E_ALL ^ E_NOTICE);

include("../../connect.php");
include("prp_info.php");

include("session_file.php");
  
  
$knyupid = $_GET['knyupid'];

$selkym = mysql_query("SELECT * FROM know_your_managers WHERE id = '$knyupid'");
$selkym_res = mysql_fetch_array($selkym);
$ecrease_sort_order_by_1 = $selkym_res[sort_oreder] - 1;
$increase_sort_order_by_1 = $ecrease_sort_order_by_1 + 1;
//echo $knyupid."<br>decrs-".$ecrease_sort_order_by_1."<br>incrs-".$increase_sort_order_by_1;

$updateaddreq1 = mysql_query("UPDATE know_your_managers set sort_oreder = '$ecrease_sort_order_by_1' WHERE id = '$knyupid'");
if($updateaddreq1){
	$updateaddreq2 = mysql_query("UPDATE know_your_managers set sort_oreder = '$increase_sort_order_by_1' WHERE  id NOT IN ( '$knyupid' ) AND `sort_oreder` = '$ecrease_sort_order_by_1'");
	//echo "UPDATE know_your_managers set sort_oreder = '$increase_sort_order_by_1' WHERE  id NOT IN ( '$knyupid' ) AND `sort_oreder` = '$ecrease_sort_order_by_1'";
	
	if($updateaddreq2){
		//@header("Location: know_your_managers.php");
		echo "<img src='images/loading.gif'  />";
	}
}
//echo $knyupid.$ecrease_sort_order_by_1;


?>