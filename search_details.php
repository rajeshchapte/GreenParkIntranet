<?php
include("connect.php");
include("prp_info.php");

$sempid = $_GET[sempid];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="gphyd/includes/styles1.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GreePark Hotels and Resorts Intranet</title>
<link href="js1/MetroJs.lt.css" rel="stylesheet" type="text/css">
<link href="gphyd/includes/styles1.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="includes/demo-styles.css">
<script src="js/modernizr-1.5.min.js"></script>
<style>
.color3 p{color:#FFFFFF}
</style>
</head>

<body>

  <div class="content1" style=" height:auto; width:1240px; ">
    <div style=" height:550px; width:auto; z-index:999">
    
    
    <div class="dashboard clearfix">
        <ul class="tiles">
          <div class="col1 clearfix">
        <li class="tile tile-big tile-26 slideTextUp" data-page-type="no" data-page-name="no" onclick="location.href='/';">
          <div><img src="images/logo123.png"  width="100" /></div>
          <div>
            <p class="prp_font">HOME</p>
          </div>
        </li>
        <li class="tile tile-big tile tile-31 slideTextRight" data-page-type="" data-page-name ="" onclick="location.href='site_search.php?searc_key=<?=$searc_key;?>';">
          <div>
            <p><img src="images/search_icon1.png" width="197" /></p>
          </div>
          <div style="background-color:#178ab5;" class="tiletextfont1">
            <p>Search</p>
          </div>
        </li>
           
            
            
            
          </div>
          <div class="col4 clearfix">
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="admin_content_area">
              <tr>
                <td valign="top">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                     <td valign="top" colspan="2"><h2>Search Results</h2></td><td>
                     
                     </td>
                   </tr>
                     <?php
					 	$search_users = mysql_query("SELECT * FROM employee_directory WHERE id = '$sempid'");						
						if(mysql_num_rows($search_users)>0){
							$i = 1;
							while($get_search_users = mysql_fetch_array($search_users)){
					 ?>
                   <tr>
                     <td width="2%" valign="top" style="border-bottom:1px solid #999999"></td><td width="98%" style="border-bottom:1px solid #999999">
					 <strong>Name: </strong><?php echo $get_search_users[first_name]." ".$get_search_users[last_name];?><br> 
					 <strong>Email Id: </strong><?php echo $get_search_users[email_id];?><br> 
                     <strong>Contact #: </strong><?php echo $get_search_users[contact_number];?><br> 
                     <strong>Date of Birth:</strong> <?php echo $get_search_users[birth_date];?><br> 
                     <strong>Date of Joining:</strong> <?php echo $get_search_users[joining_date];?><br> 
                     <strong>Designation:</strong> <?php echo $get_search_users[designation];?><br> 
                     <strong>Department: </strong><?php echo dept_name($get_search_users[departmentid]);?><br> 
                     
                     </td>
                   </tr>
                   <?php $i++; } } ?>
                 </table>
                </td>
              </tr>
            </table>

          		 

          </div>
          
          
          
          </ul>
      
    </div>
  </div>
</div>
<script src="js/jquery-1.8.2.min.js"></script> 
<script src="js/scripts.js"></script> 
<script src="js1/jquery-1.7.1.min.js" type="text/javascript"></script> 
<script src="js1/MetroJs.lt.js" type="text/javascript"></script> 
<script type="text/javascript">
        $(document).ready(function () {
            $(".live-tile,.flip-list").liveTile();
        });
    </script>
</body>
</html>