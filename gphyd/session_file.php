<?php
if ($_SESSION['emp_id'] == '' || $_SESSION['property_code'] != $prp_id)
  {
	header('LOCATION: logout.php?url='.$url);	
  }

?>