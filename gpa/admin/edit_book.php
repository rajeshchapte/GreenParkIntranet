<?php

ini_set('session.save_path', 'tmp');
session_start();
ob_start();
error_reporting(E_ALL ^ E_NOTICE);


include("../../connect.php");
include("prp_info.php");



include("session_file.php");

if(isset($_REQUEST[cancel_upload])){
	header("Location: library_information.php");
	}

				//$date = new DateTime();
				//echo $date->format('Y-m-d H:i:s');
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d H:i:s', time());

$bid = $_GET[bookid];
$select_book = mysql_query("SELECT * FROM library_information WHERE id = $bid");
$sel_book_res = mysql_fetch_array($select_book);

if(isset($_REQUEST[upload_book])){
	
	$book_code = $_POST[book_code];
	$book_name = $_POST[book_name];
	$author_name = $_POST[author_name];
	$book_price = $_POST[book_price];
	$book_cate = $_POST[book_cate];
	
	//echo $polc_title."<br>".$polc_text."<br>".$polc_category;
	
	$book_save = mysql_query("UPDATE  library_information SET  `book_code` =  '$book_code',
							`book_name` =  '$book_name',
							`author_name` =  '$author_name',
							`book_price` =  '$book_price',
							`book_category_id` = '$book_cate' WHERE  id ='$bid';");
							
		if($book_save){ 
		echo "DONE";
		header("Location: library_information.php");
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

</script><br />



<script type="text/javascript">
<!--
// Form validation code will come here.
function validate()
{
 
   if( document.myForm.book_code.value == "" )
   {
     alert( "Please Enter Book Code!" );
     document.myForm.book_code.focus() ;
     return false;
   }
  
  
    if( document.myForm.book_name.value == "" )
   {
     alert( "Please Enter Book Name!" );
     document.myForm.book_name.focus() ;
     return false;
   }
   
   
   
   if( document.myForm.author_name.value == "" )
   {
     alert( "Please provide Author Name!" );
     document.myForm.author_name.focus() ;
     return false;
   }
   
   if( document.myForm.book_price.value == "" )
   {
     alert( "Please provide Book Price!" );
     document.myForm.book_price.focus() ;
     return false;
   }
   
   return( true );
}
//-->
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
                  <td onclick="location.href='<?=$prp_root;?>/library_information.php';" class="color4" height="136">
                    <div class="tile_box">
                    <div align="center" style="top:10px; position:relative"><img src="images/library_icon.png"  width="80" /></div>
                      <div class="tile_name">
                      Library Information
                    </div></div>
                    </td>
                  </tr>
                </table>
              
              </td>
              <td width="76%" valign="top" class="admin_content_area">
              <h2>Add New Book</h2>
                <hr />
                <form id="form1" name="myForm" method="POST" action="" enctype="multipart/form-data">   
            
        
                
                
                <table width="100%" border="0" cellspacing="5" cellpadding="0">
                  <tr>
                     <td width="20%">Book Category</td><td>
                       <div style="float:left">
                       <select name="book_cate" class="adm_select">
						<?php
                        $bcat = mysql_query("SELECT * FROM  `book_category` WHERE prp_code = $prp_id");
                        while($bcatres = mysql_fetch_array($bcat)){
                        ?>  
                        <option value="<?=$bcatres[id]?>" <?php echo "$bcatres[id]" == "$sel_book_res[book_category_id]" ? 'selected' : null?>><?=$bcatres[book_category_name]?></option>
                        <?php } ?>
                        </select></div>
                        <div style="float:left">&nbsp;&nbsp;&nbsp;<a href="add_book_category.php"><img src="images/add_icon.png" width="25" align="Create New Book Category" title="Create New Book Category" /></a></div>
                     </td>
                  </tr>
                  <tr>
                    <td width="20%">Book Code</td><td><input type="text" name="book_code" id="book_code" class="adm_inptext" value="<?=$sel_book_res[book_code];?>"  /></td>
                  </tr>
                  <tr>
                    <td width="20%">Book Name</td><td>
                      <input type="text" name="book_name" id="book_name" class="adm_inptext" value="<?=$sel_book_res[book_name];?>"  />
                    </td>
                  </tr>
                  <tr>
                    <td width="20%">Author Name</td><td>
                      <input type="text" name="author_name" id="author_name" class="adm_inptext" value="<?=$sel_book_res[author_name];?>"  /> 
                    </td>
                  </tr>
                  <tr>
                    <td width="20%">Book Price</td><td>                      
                       <input type="text" name="book_price" id="book_price" class="adm_inptext" value="<?=$sel_book_res[book_price];?>"  />                     
                    </td>
                  </tr>
                 
                    <td>&nbsp;</td><td align="right"><br />
                    <input type="submit" class="ubutton" name="upload_book" value="Save" onclick="return(validate());"  />&nbsp;&nbsp;&nbsp;
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