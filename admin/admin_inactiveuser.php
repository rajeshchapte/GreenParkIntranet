<?php
include("../connect.php");
$userid = $_GET['userid'];

$updateaddreq = mysql_query("update gp_user set status = '0' where id = '$userid'");
if($updateaddreq)
{
	?>
    <input type="button" value="Active" class="ubutton_green" onclick="javascript:ActiveUser(<?PHP echo "'".$userid."'"; ?>);" />
    
    <?php
}
else{
	echo "DELETION failed";
}


?>