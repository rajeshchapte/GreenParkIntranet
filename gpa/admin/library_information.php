<?php

ini_set('session.save_path', 'tmp');
session_start();
ob_start();
error_reporting(E_ALL ^ E_NOTICE);

include("../../connect.php");
include("prp_info.php");

include("session_file.php");

if(isset($_REQUEST[delete_comp])){
	$libinfoid = $_POST[compid];
	$dellibinfo = mysql_query("DELETE FROM library_information WHERE id = '$libinfoid'");
	if($dellibinfo){
		$delmsg = "Book Deleted";
		//unlink($somefile);
	}else{
		$delmsg = "Fail";
	}
}


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="includes/styles1.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GreenPark Hotels and Resorts Intranet</title>
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
                    <td onclick="location.href='<?=$home; ?>';" class="color2" height="136">
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
                  <td onclick="location.href='<?=$prp_root;?>/library_information.php';" class="color4" height="136">
                    <div class="tile_box">
                    <div align="center" style="top:10px; position:relative"><img src="images/library_icon.png"  width="90" /></div>
                      <div class="tile_name">
                      Library Information
                    </div></div>
                    </td>
                  </tr>
                </table>
              
              </td>
              <td width="76%" valign="top" class="admin_content_area">
              <h2>Library Information</h2>
                <hr />

                <?php 
				if($delmsg!=''){
					echo $delmsg;
				}
				?>
                <div style="overflow:auto; height:450px;">
                <table width="100%" border="0" cellspacing="1" cellpadding="2" bgcolor="#CCCCCC">
                  <tr bgcolor="#999999" height="25"><td><strong>S. No</strong></td><td><strong>Book Code</strong></td><td><strong>Book Name</strong></td><td><strong>AUthor Name</strong></td><td><strong>Action</strong></td></tr>
                  <?php
				  $i = 1;
				  $emps =  mysql_query("SELECT * FROM library_information WHERE prp_code = $prp_id ORDER BY id DESC");
					    while($empsres = mysql_fetch_array($emps)){
							
				  ?>
                  <tr bgcolor="#ececef">
                    <td width="6%"><?php echo $i; ?></td>
                    <td width="20%" style="text-transform:capitalize"><?=$empsres[book_code];?></td>
                    <td width="30%">
                    <?php echo $empsres[book_name];
					?>
                    </td>
                    <td width="20%">
                    <?php echo $empsres[author_name];
					?>
                    </td>
                    <td width="16%" align="right">
                      <div style="float:right">
                      <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" name="delete_empf">
                        <input type="hidden" name="compid" value="<?php echo $empsres[id] ?>"  />                        
                        <input type="submit" name="delete_comp" value="Delete" class="ubutton" onclick="return confirm('Are you sure want to delete?');" />
                      </form></div>&nbsp;
                      <div style="float:right">
                      <form method="get" action="edit_book.php" name="edit_bookf">
                        <input type="hidden" name="bookid" value="<?php echo $empsres[id] ?>"  />                        
                        <input type="submit" name="edit_book" value="Edit" class="ubutton" />
                      </form></div>
                    </td>
                  </tr>
                  <?php $i++; } ?>
                </table>
				</div><br /><br />
                <input type="button" onclick="location.href='add_book.php';"  class="ubutton" value="Add Book" />
                 
                
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