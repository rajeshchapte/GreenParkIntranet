<?php
if ($_SESSION['email_id'] == '' || $_SESSION['role'] != 'hr' || $_SESSION['property_code'] != $prp_id)
  {
	header('LOCATION: logout.php');	
  }

?>