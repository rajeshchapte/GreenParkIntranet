<?php
if ($_SESSION['email_id'] == '' || $_SESSION['role'] != 'admin')
  {
	header('LOCATION: logout.php');
  }


?>