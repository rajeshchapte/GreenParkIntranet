<?php

// NO NEED TO AGAIN DECLARE $_SESSION['email'] VARIABLE;
// session_destroy() function will destroy whatever the sessions are been using currently...
//$_SESSION['email'] = '';

include("../../connect.php");
ini_set('session.save_path', 'tmp');
session_start();
session_destroy();
mysql_close($connect);
header('LOCATION: login.php');
exit();
?>
