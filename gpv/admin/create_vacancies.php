<?php

ini_set('session.save_path', 'tmp');
session_start();
ob_start();
error_reporting(E_ALL ^ E_NOTICE);


include("../../connect.php");
include("prp_info.php");



include("session_file.php");

if(isset($_REQUEST[cancel_upload])){
	header("Location: vacancies.php");
	}

date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d H:i:s', time());

	

if(isset($_REQUEST[upload_vac])){
	
	$positions = $_POST[positions];
	$qualification = $_POST[qualification];
	$exp = $_POST[expyears]." - ".$_POST[expmonths];
	$vmale = $_POST[vmale];
	$vfemale = $_POST[vfemale];
	
	//echo $polc_title."<br>".$polc_text."<br>".$polc_category;
	
	$vac_save = mysql_query("INSERT INTO  `vacancies` (
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
NULL ,  '$positions',  '$qualification',  '$exp',  '$vmale',  '$vfemale',  '$prp_id',  NULL,  '$date',  '$prp_id'
);");

		if($vac_save){ 
		echo "DONE";
		header("Location: vacancies.php");
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


 <script type="text/javascript">
	
	function validate(){
	
	if( document.myForm.positions.value == "" )
	   {
		 alert( "Please provide positions!" );
		 document.myForm.positions.focus() ;
		 return false;
	   }
	
	
	if( document.myForm.qualification.value == "" )
	   {
		 alert( "Please Enter Qualification!" );
		 document.myForm.qualification.focus() ;
		 return false;
	   }
	   
	   
	   if( document.myForm.expyears.value == "" )
	   {
		 alert( "Please Select Experience!" );
		 document.myForm.expyears.focus() ;
		 return false;
	   }
	   
	   if( document.myForm.expmonths.value == "" )
	   {
		 alert( "Please Select Experience!" );
		 document.myForm.expmonths.focus() ;
		 return false;
	   }
	   
	   
	   
	   
	   
	   if ( ( document.myForm.vmale.checked == false ) && ( document.myForm.vfemale.checked == false ) ) 
	{
	alert ( "Please choose your Gender: Male or Female" ); 
	return false;
	}
	
	
	
	
	
	
   
}
	</script>



</head>

<body>
<div class="wrapper">
  <div class="header">
    <?php include("loginout_div.php"); ?>
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
                  <?php include("property_tile.php"); ?>
                  <tr>
                    <td height="8"></td>
                  </tr>
                  <tr height="136">
                    <td onclick="location.href='<?=$prp_root;?>/';" class="color6" height="136">
                    <div class="tile_box">
                    <div align="center" style="top:50px; position:relative"><img src="images/admin_icon.png"  width="100" /></div>
                      <div class="tile_name">
                      Admin
                    </div></div>
                    </td>
                  </tr>
                  <tr>
                    <td height="8"></td>
                  </tr>
                  <tr>
                  <td onclick="location.href='<?=$prp_root;?>/vacancies.php';" class="color12" height="136">
                    <div class="tile_box">
                    <div align="center" style="top:10px; position:relative"><img src="images/vacancies_bg.png"  width="80" /></div>
                      <div class="tile_name">
                      Vacancies
                    </div></div>
                    </td>
                  </tr>
                </table>
              
              </td>
              <td width="76%" valign="top" class="admin_content_area">
              <h2>Create New Vacancies</h2>
                <hr />
                <form id="form1" name="myForm" method="POST" action="" enctype="multipart/form-data" >   
            
        
                
                
                <table width="100%" border="0" cellspacing="5" cellpadding="0">
                  <tr>
                    <td width="20%">Positions</td><td><input type="text" name="positions" id="positions" class="adm_inptext"  /></td>
                  </tr>
                  <tr>
                    <td width="20%">Qualification</td><td>
                      <input type="text" name="qualification" id="qualification" class="adm_inptext"  />
                    </td>
                  </tr>
                  <tr>
                    <td width="20%">Experience</td><td>
                      
                      <select name="expyears" class="adm_select" style="width:120px">
                        <option value="0 Years">0 Years</option>
                        <option value="1 Years">0 Years</option>
                        <option value="2 Years">2 Years</option>
                        <option value="3 Years">3 Years</option>
                        <option value="4 Years">4 Years</option>
                        <option value="5 Years">5 Years</option>
                        <option value="6 Years">6 Years</option>
                        <option value="7 Years">7 Years</option>
                        <option value="8 Years">8 Years</option>
                        <option value="9 Years">9 Years</option>
                        <option value="10 Years">10 Years</option>
                        <option value="11 Years">11 Years</option>
                        <option value="12 Years">12 Years</option>
                        <option value="13 Years">13 Years</option>
                        <option value="14 Years">14 Years</option>
                        <option value="15 Years">15 Years</option>
                        <option value="16 Years">16 Years</option>
                        <option value="17 Years">17 Years</option>
                        <option value="18 Years">18 Years</option>
                        <option value="19 Years">19 Years</option>
                        <option value="20 Years">20 Years</option>
                      </select>&nbsp;&nbsp;-&nbsp;&nbsp;
                      
                      <select name="expmonths" class="adm_select" style="width:120px">                      
                        <option value="0 Months">0 Months</option>
                        <option value="1 Months">1 Months</option>
                        <option value="2 Months">2 Months</option>
                        <option value="3 Months">3 Months</option>
                        <option value="4 Months">4 Months</option>
                        <option value="5 Months">5 Months</option>
                        <option value="6 Months">6 Months</option>
                        <option value="7 Months">7 Months</option>
                        <option value="8 Months">8 Months</option>
                        <option value="9 Months">9 Months</option>
                        <option value="10 Months">10 Months</option>
                        <option value="11 Months">11 Months</option>                        
                      </select>
                      
                    </td>
                  </tr>
                  <tr>
                    <td width="20%">Gender</td><td>
                      
                      <input type="checkbox" name="vmale" value="Male" id="vmale" /><label for="vmale">Male</label> - 
                      <input type="checkbox" name="vfemale" id="vfemale" value="Female" /><label for="vfemale">Female</label>
                    </td>
                  </tr>
                 
                    <td>&nbsp;</td><td align="right"><br />
                    <input type="submit" class="ubutton" name="upload_vac" value="Save"  onclick="return(validate());"/>&nbsp;&nbsp;&nbsp;
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