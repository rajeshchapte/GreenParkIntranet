<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "gp_intranetdb";


$connect = mysql_connect($dbhost,$dbuser,$dbpass);
if (!$connect)
  {
  die('Could not connect: ' . mysql_error());
  }
  //else{ 
  // echo "Conectoin successfull";
  //}

mysql_select_db($dbname);

// some code
error_reporting(E_ALL ^ E_NOTICE);

//date_default_timezone_set("Asia/Kolkata");

 ?>