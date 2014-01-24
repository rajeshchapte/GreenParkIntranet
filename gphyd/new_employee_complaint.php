<?php

ini_set('session.save_path', 'tmp');
session_start();
error_reporting(E_ALL ^ E_NOTICE);




if ($_SESSION['email_id'] == '' || $_SESSION['role'] != 'hr' || $_SESSION['property_code'] != '1')
  {
	header('LOCATION: logout.php');	
  }

include("../connect.php");
include("prp_info.php");

if(isset($_REQUEST[cancel_upload])){
	@header("Location: emp_dir.php");
	}

				//$date = new DateTime();
				//echo $date->format('Y-m-d H:i:s');
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d H:i:s', time());

	

if(isset($_REQUEST[upload_vac])){
	
	$positions = $_POST[positions];
	$qualification = $_POST[qualification];
	$exp = $_POST[expyears]." - ".$_POST[expmonths];
	$vmale = $_POST[vmale];
	$vfemale = $_POST[vfemale];
	
	//echo $polc_title."<br>".$polc_text."<br>".$polc_category;
	
	$vac_save = mysql_query("INSERT INTO  `gp_intranetdb`.`vacancies` (
`id` ,
`position` ,
`qualification` ,
`experience` ,
`genderm` ,
`genderf` ,
`prp_code` ,
`location` ,
`created_datetime` ,
`status`
)
VALUES (
NULL ,  '$positions',  '$qualification',  '$exp',  '$vmale',  '$vfemale',  '$prp_id',  NULL,  '$date',  '1'
);");

		if($vac_save){ 
		echo "DONE";
		@header("Location: vacancies.php");
		}else{
				echo "Fail".mysql_error();
			}
	//}
}
	

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="includes/styles1.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GreenPark Hotels and Resorts Intranet</title>
 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css" />
<script>
 $(function() {
$( "#joining_date" ).datepicker({
changeMonth: true,
changeYear: true
});
});

 $(function() {
$( "#birth_date" ).datepicker({
changeMonth: true,
changeYear: true
});
});

</script>
</head>

<body>
<div class="wrapper">
  <div class="header">
    <?php /*?> <div class="logo_bar"> 
     <a href="/greenparksample/8/">
          <div class="logo_small" align="center"><img src="images/logo123.png" /><br />
           <div align="center" class="logo_name">GreenPark<br /><span style="font-size:17px;">Hotels</span></div>
        </div>
      </a> 
    </div><?php */?>
  </div>
  <div class="clear"></div>
  <div class="content1" style=" height:auto; width:1240px; ">
  <div style=" height:550px; width:auto; z-index:999">
    <div style="float:left">
    <table width="1240" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="100%">
          <table width="100%" border="0" cellspacing="8" cellpadding="0">        
        
            <tr>
              <td width="33%" valign="top"> 
              
                <table width="100%" height="280" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td onclick="location.href='<?=$home;?>';" class="color2" height="136">
                    <div class="tile_box">
                    <div align="center" style="top:10px; position:relative"><img src="images/logo123.png"  width="80" /></div>
                      <div class="tile_name">
                      </div>
                    </div>
                    </td>
                  </tr>
                  <tr>
                    <td height="8"></td>
                  </tr>
                  <tr height="136">
                    <td onclick="location.href='<?=$prp_home; ?>/';" class="color1" height="136">
                    <div class="tile_box">
                    <div align="center" style="top:10px; position:relative"><img src="images/hotel_img1.png"  width="80" /></div>
                      <div class="tile_name">
                      GreenPark<br />
                      Hyderabad</div>
                    </div>
                    </td>
                  </tr>
                  <tr>
                    <td height="8"></td>
                  </tr>
                  <tr>
                  <td onclick="location.href='<?=$prp_root;?>/employee_complaints.php';" class="color13" height="136">
                    <div class="tile_box">
                    <div align="center" style="top:3px; position:relative"><img src="images/emplpoyee_complaints.png"  width="150" /></div>
                      <div class="tile_name">
                      Employee Compaints
                    </div></div>
                    </td>
                  </tr>
                </table>
              
              </td>
              <td width="76%" valign="top" class="admin_content_area">
              <h2>Create New Vacancies</h2>
                <hr />
                <form id="form1" method="POST" action="" enctype="multipart/form-data" >   
            
        
                
                
                <table width="100%" border="0" cellspacing="5" cellpadding="0">
                  <tr>
                    <td width="20%">Comapliant Title</td><td><input type="text" name="comapliant_title" id="comapliant_title" class="adm_inptext"  /></td>
                  </tr>
                  <tr>
                    <td width="20%">Depasrtment</td><td>
                        <select name="emp_dept" class="adm_select">
						<?php
                        $dept = mysql_query("SELECT * FROM  `department`");
                        while($deptres = mysql_fetch_array($dept)){
                        ?>  
                        <option value="<?=$deptres[id]?>"><?=$deptres[department_name]?></option>
                        <?php } ?>
                        </select>
                    </td>
                  </tr>
                  
                  <tr>
                    <td width="20%">Gender</td><td>
                      a
                    </td>
                  </tr>
                 
                    <td>&nbsp;</td><td align="right"><br />
                    <input type="submit" class="ubutton" name="upload_vac" value="Save" />&nbsp;&nbsp;&nbsp;
                    <input type="submit" class="ubutton" name="cancel_upload" value="Cancel" /></td>
                  </tr>
                </table>

                  
                </form>
              </td>
            </tr>
            

            
          </table>
        </td>
       </tr>
    </table> 
    </div>
    
  </div>
  </div>
</div>
</body>
</html>