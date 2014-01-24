<?php

ini_set('session.save_path', 'tmp');
session_start();
error_reporting(E_ALL ^ E_NOTICE);

include("../../connect.php");
include("prp_info.php");

include("session_file.php");

if(isset($_REQUEST[delete_kym])){
	$kymid = $_POST[kymid];
	$delkymidid = mysql_query("DELETE FROM know_your_managers WHERE id = '$kymid'");
	if($delkymidid){
		$delmsg = "Record Deleted";
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
<script type="text/javascript">
function moveKymDown(str, nextid)
{
if (str=="")
  {
  document.getElementById("userRequestinfoDiv"+str).innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	window.location.reload()
    document.getElementById("userRequestinfoDiv"+str).innerHTML=xmlhttp.responseText;
	Ajax();
	/*window.location = "know_your_managers.php";*/
    }
  }
xmlhttp.open("GET","moveknydown.php?knyupid="+str+"&nextid="+nextid,true);
xmlhttp.send();
}

function moveKymUp(str, previd)
{
if (str=="")
  {
  document.getElementById("userRequestinfoDiv"+str).innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
		window.location.reload()
    document.getElementById("userRequestinfoDiv"+str).innerHTML=xmlhttp.responseText;
	Ajax();
	/*window.location = "know_your_managers.php";*/
    }
  }
xmlhttp.open("GET","moveknyup.php?knyupid="+str+"&previd="+previd,true);
xmlhttp.send();
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
                  <td onclick="location.href='<?=$prp_root;?>/know_your_managers.php';" class="color4" height="136">
                    <div class="tile_box">
                    <div align="center" style="top:10px; position:relative"><img src="images/know_your_managers.png"  width="80" /></div>
                      <div class="tile_name">
                      Know Your Managers
                    </div></div>
                    </td>
                  </tr>
                </table>
              
              </td>
              <td width="76%" valign="top" class="admin_content_area">
              <h2>Know Your Managers</h2>
                <hr />
<script type="text/javascript">
    function MoveDown(roww,rowwN,strorder, nextid)
    { 
      divv = document.getElementById(roww+'R').innerHTML;
      if(roww)
      { 
        ch = document.getElementById(rowwN+'R').innerHTML;
        document.getElementById(rowwN+'R').innerHTML = document.getElementById(roww+'R').innerHTML;
        document.getElementById(roww+'R').innerHTML = ch; 
		moveKymDown(strorder, nextid);
      }
    }
    function MoveUp(roww,rowwN,strorder, previd)
    { 
      divv = document.getElementById(roww+'R').innerHTML;
      if(roww)
      { 
        ch = document.getElementById(rowwN+'R').innerHTML;
        document.getElementById(rowwN+'R').innerHTML = document.getElementById(roww+'R').innerHTML;
        document.getElementById(roww+'R').innerHTML = ch; 
		moveKymUp(strorder, previd);
      }
    }
</script>

                <?php 
				if($delmsg!=''){
					echo $delmsg;
				}
				?>
                
                <div style="overflow:auto; height:450px;">
                <table width="100%" border="0" cellspacing="0" cellpadding="2">
                  <?php /*?><tr bgcolor="#999999" height="25">
                    <td><strong>Name</strong></td>
                    <td><strong>Deaprtname</strong></td>
                    <td><strong>Designation</strong></td>
                    <td><strong>Email / Phone / Mobile</strong></td>
                    <td colspan="2"><strong>Action</strong></td>
                  </tr><?php */?>
                  <tr >                    
                    <td style="text-transform:capitalize">
                    

                    					
                  <table width="100%" border="0" cellspacing="0" cellpadding="5">
                  <?php
				  
				  
				  $i = 1;
				  $kym =  mysql_query("SELECT * FROM know_your_managers WHERE prp_code = $prp_id ORDER BY sort_oreder DESC");
				  
					$previousRow = array();
					$currentRow = mysql_fetch_row($kym);
					 $c =0;
					while ($currentRow) {
						$nextRow = mysql_fetch_row($kym);
					
						//echo "<br>currentRow:".$currentRow[0];
						//echo "previousRow:".$previousRow[0];
						//echo "nextRow:".$nextRow[0];
					
					//}

				  
				  
				  
				 
					   // while($kymres = mysql_fetch_array($kym)){
							$c++;
							//$kymidarr[] = $kymres["id"];
							
							
				  ?> 
                    <tr bgcolor="#ececef">
                      <td style="border-bottom: 1px solid #CCCCCC;">
				
					<div id="D<?php echo $c; ?>R">
                      <div style="float:left"> 
						<?php 
                        echo $currentRow[1]." ".$currentRow[2]."<br>";
                        echo $currentRow[9]; echo ", "; 
						if($currentRow[8]!='0'){ echo dept_name($currentRow[8]); 
						} 
                        echo "<br>";
                        //echo "Email: ".$kymres[m_email]."<br>Mobile: ".$kymres[m_mobile]."<br>Phone".$kymres[m_phone]."(EXT:) ".$kymres[m_phone_extn];
                        ?>
                      </div>
                      <div style="float:right; padding-top:15px" >
                      <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" name="delete_kym_form">
                        <input type="hidden" name="kymid" value="<?php echo $currentRow[0] ?>"  />
                        <input type="hidden" name="kymnextid" value="<?php echo $nextRow[0] ?>"  />
                        <input type="submit" name="delete_kym" value="Delete" class="ubutton" onclick="return confirm('Are you sure want to delete?');" />
                      </form>
                      </div>
                       <div style="float:right; padding-top:15px" >
                      <form method="get" action="edit_manager.php" name="edit_kym_form">
                        <input type="hidden" name="mid" value="<?php echo $currentRow[0]; ?>"  />   
                        <input type="hidden" name="kymprevid" value="<?php echo $previousRow[0]; ?>"  />             
                        <input type="submit" name="send_kym" value="Edit" class="ubutton" />
                      </form>
                      </div>
                    </div>
                      
                      <div style="float:right; padding-top:18px; width:80px;">
                      <div id="userRequestinfoDiv<?php echo $currentRow[0]; ?>" style="clear:both; float:left"></div>
                      <div style="float:right">
                       <input type="image" src="images/up_icon.png" title="Move Up" style="width:20px;" id="U<?php echo $c; ?>" value="Up" class="move up"  onClick="MoveUp('D<?php echo $c; ?>','D<?php echo $c-1; ?>','<?php echo $currentRow[0]; ?>', <?php echo $previousRow[0]; ?>);"/>
                       <input type="image" src="images/down_icon.png" title="Move Down" style="width:20px;" id="D<?php echo $c; ?>" value="Down" class="move down"  onClick="MoveDown('D<?php echo $c; ?>','D<?php echo $c+1; ?>','<?php echo $currentRow[0]; ?>', <?php echo $nextRow[0] ?>);"/>
                       </div>
                      </div>
                      </td>
                      </tr>
                    
                                                              


                  <?php
						$previousRow = $currentRow;
						$currentRow = $nextRow;

				  
				   $i++; } ?>
                    </table>
                  
                  
                  
                    </td>
                    
                  </tr>
                </table>
				</div><br /><br />
                <input type="button" onclick="location.href='new_manager.php';"  class="ubutton" value="Add Managers" />
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