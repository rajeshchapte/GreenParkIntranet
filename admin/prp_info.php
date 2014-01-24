<?php
/* Property Info and root paths */
$home = "/w8/";
$admin_home = "/w8/admin";
$select_prp = mysql_query("SELECT * FROM properties WHERE property_code = '$prp_code'");
$res_prp = mysql_fetch_array($select_prp);
$prp_id = $res_prp[id];


$user_id = $_SESSION['email_id'];
$select_user = mysql_query("select * from gp_user where email_id = '$user_id'");
$select_user_res = mysql_fetch_array($select_user);

function get_prp_name($prpid){
$select_prp = mysql_query("select * from properties where id = '$prpid'");
$prpres = mysql_fetch_array($select_prp);
$prp_name = $prpres[property_name];
return $prp_name;
}

?>