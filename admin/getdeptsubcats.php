<?php
ini_set('session.save_path', 'tmp');
session_start();
error_reporting(E_ALL ^ E_NOTICE);

include("../connect.php");
include("prp_info.php");

include("session_file.php");
  
  
$deptid = $_GET['deptid'];

?>

<select name="kb_dept_sub_cat" class="adm_select">
	<?php
	if($deptid==0){ ?>
		<option value="0">--Please select Deartment--</option>	
	<?php
    }else{
    $depts = mysql_query("SELECT * FROM dept_sub_cat WHERE dept_id = '$deptid'");
	if(mysql_num_rows($depts)==0){ ?>
	<option value="NULL">--No Records Found--</option>	
	<?php
    }else{
    while($depts_res = mysql_fetch_array($depts)){ ?>  
    <option value="<?=$depts_res[id]?>"><?=$depts_res[sub_cat_name]?></option>
	<?php } } }?>
</select>