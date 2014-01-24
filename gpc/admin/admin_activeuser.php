<?php
include("../../connect.php");
$userid = $_GET['userid'];

$updateaddreq = mysql_query("update gp_user set status = '1' where id = '$userid'");
if($updateaddreq)
{
	?>
    <input type="button" value="In Active" class="ubutton_red" onclick="javascript:inActiveUser(<?PHP echo "'".$userid."'"; ?>);" />
    <?php
}
else{
	echo "DELETION failed";
}


?>