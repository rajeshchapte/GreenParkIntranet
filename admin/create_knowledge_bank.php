<?php
ini_set('session.save_path', 'tmp');
session_start();

ob_start();
error_reporting(E_ALL ^ E_NOTICE);
include("../connect.php");
include("prp_info.php");	

include("session_file.php");

$burl = $_GET[burl];
$dept_id = $_GET[dept_id];
$dept_sub_id = $_GET[dept_sub_id];
$dept_gdc = $_GET[dept_gdc];


if(isset($_REQUEST[cancel_upload])){
	header("Location: ".$burl."?dept_id=".$dept_id."&dept_sub_id=".$dept_sub_id."&dept_gdc=".$dept_gdc);
	}
				//$date = new DateTime();
				//echo $date->format('Y-m-d H:i:s');
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d H:i:s', time());

	

if(isset($_REQUEST[upload_polc])){
	
	$kb_title = $_POST[kb_title];
	$kb_dept = $_POST[kb_dept];
	$kb_dept_sub_cat = $_POST[kb_dept_sub_cat];
	
	$kb_dept_gdc = $_POST[kb_dept_gdc];
	$kb_text = $_POST[editor1];
	$kb_text1 = str_replace("'","",$kb_text);
	//echo $polc_title."<br>".$polc_text."<br>".$polc_category;
	if($kb_dept_sub_cat == '' || $kb_dept_sub_cat == NULL){
		
	
	$kbs = mysql_query("INSERT INTO knwledge_bank (`id`, `dept_id`, `dept_sub_cat_id`, `dept_gdc`, `kb_title`, `dept_gdc_desc`, `created_datetime`) VALUES (NULL, '$kb_dept', NULL, '$kb_dept_gdc', '$kb_title', '$kb_text1', '$date');");
		echo "INSERT INTO knwledge_bank (`id`, `dept_id`, `dept_sub_cat_id`, `dept_gdc`, `kb_title`, `dept_gdc_desc`, `created_datetime`) VALUES (NULL, '$kb_dept', NULL, '$kb_dept_gdc', '$kb_title', '$kb_text1', '$date');";

	}else{
	$kbs = mysql_query("INSERT INTO knwledge_bank (`id`, `dept_id`, `dept_sub_cat_id`, `dept_gdc`, `kb_title`, `dept_gdc_desc`, `created_datetime`) VALUES (NULL, '$kb_dept', '$kb_dept_sub_cat', '$kb_dept_gdc', '$kb_title', '$kb_text1', '$date');");
		echo "INSERT INTO knwledge_bank (`id`, `dept_id`, `dept_sub_cat_id`, `dept_gdc`, `kb_title`, `dept_gdc_desc`, `created_datetime`) VALUES (NULL, '$kb_dept', '$kb_dept_sub_cat', '$kb_dept_gdc', '$kb_title', '$kb_text1', '$date');";

	}
	
		if($kbs){ 
		echo "done";
		header("Location: ".$burl."?dept_id=".$dept_id."&dept_sub_id=".$dept_sub_id."&dept_gdc=".$dept_gdc);
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
	<script src="../gphyd/admin/ckeditor.js"></script>
	<link href="../gphyd/admin/sample.css" rel="stylesheet">
	<script>

// The instanceReady event is fired, when an instance of CKEditor has finished
// its initialization.
CKEDITOR.on( 'instanceReady', function( ev ) {
	// Show the editor name and description in the browser status bar.
	document.getElementById( 'eMessage' ).innerHTML = 'Instance <code>' + ev.editor.name + '<\/code> loaded.';

	// Show this sample buttons.
	document.getElementById( 'eButtons' ).style.display = 'block';
});

function InsertHTML() {
	// Get the editor instance that we want to interact with.
	var editor = CKEDITOR.instances.editor1;
	var value = document.getElementById( 'htmlArea' ).value;

	// Check the active editing mode.
	if ( editor.mode == 'wysiwyg' )
	{
		// Insert HTML code.
		// http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-insertHtml
		editor.insertHtml( value );
	}
	else
		alert( 'You must be in WYSIWYG mode!' );
}

function InsertText() {
	// Get the editor instance that we want to interact with.
	var editor = CKEDITOR.instances.editor1;
	var value = document.getElementById( 'txtArea' ).value;

	// Check the active editing mode.
	if ( editor.mode == 'wysiwyg' )
	{
		// Insert as plain text.
		// http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-insertText
		editor.insertText( value );
	}
	else
		alert( 'You must be in WYSIWYG mode!' );
}

function SetContents() {
	// Get the editor instance that we want to interact with.
	var editor = CKEDITOR.instances.editor1;
	var value = document.getElementById( 'htmlArea' ).value;

	// Set editor contents (replace current contents).
	// http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-setData
	editor.setData( value );
}

function GetContents() {
	// Get the editor instance that you want to interact with.
	var editor = CKEDITOR.instances.editor1;

	// Get editor contents
	// http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-getData
	alert( editor.getData() );
}

function ExecuteCommand( commandName ) {
	// Get the editor instance that we want to interact with.
	var editor = CKEDITOR.instances.editor1;

	// Check the active editing mode.
	if ( editor.mode == 'wysiwyg' )
	{
		// Execute the command.
		// http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-execCommand
		editor.execCommand( commandName );
	}
	else
		alert( 'You must be in WYSIWYG mode!' );
}

function CheckDirty() {
	// Get the editor instance that we want to interact with.
	var editor = CKEDITOR.instances.editor1;
	// Checks whether the current editor contents present changes when compared
	// to the contents loaded into the editor at startup
	// http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-checkDirty
	alert( editor.checkDirty() );
}

function ResetDirty() {
	// Get the editor instance that we want to interact with.
	var editor = CKEDITOR.instances.editor1;
	// Resets the "dirty state" of the editor (see CheckDirty())
	// http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-resetDirty
	editor.resetDirty();
	alert( 'The "IsDirty" status has been reset' );
}

function Focus() {
	CKEDITOR.instances.editor1.focus();
}

function onFocus() {
	document.getElementById( 'eMessage' ).innerHTML = '<b>' + this.name + ' is focused </b>';
}

function onBlur() {
	document.getElementById( 'eMessage' ).innerHTML = this.name + ' lost focus';
}

	</script>
    
    
    
    <script type="text/javascript">
	
	function validate(){
	
	if( document.myForm.polc_title.value == "" )
	   {
		 alert( "Please provide your Polic Title!" );
		 document.myForm.polc_title.focus() ;
		 return false;
	   }
	
	
	/**if( document.myForm.polc_category.value == "" )
	   {
		 alert( "Please select Category!" );
		 document.myForm.polc_category.focus() ;
		 return false;
	   }*/
   
}
	</script>
<script type="text/javascript">
function getDeptSubCats(str)
{
if (str=="")
  {
  document.getElementById("deptsubcatDiv").innerHTML="";
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
	//window.location.reload()
    document.getElementById("deptsubcatDiv").innerHTML=xmlhttp.responseText;
	Ajax();
	/*window.location = "know_your_managers.php";*/
    }
  }
xmlhttp.open("GET","getdeptsubcats.php?deptid="+str,true);
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
                  <tr height="136">
                    <td onclick="location.href='<?=$admin_home;?>/';" class="color6" height="136">
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
                  <td onclick="location.href='<?=$admin_home;?>/knowledge_bank.php';" class="color10" height="136">
                    <div class="tile_box">
                    		<div align="center" style="top:10px; position:relative"><img src="images/knowledge_bank_icon.png"  width="115" /></div>
                          		<div class="tile_name" style="text-transform:capitalize">
                            		Knowledge Bank
                         		</div>
                      		</div>
                        </div>
                    </td>
                  </tr>
                </table>
              
              </td>
              <td width="76%" valign="top" class="admin_content_area">
              <h2>Create Knowledge Bank</h2>
                <hr />
                <form id="form1" name="myForm" method="POST" action="<?php $_SERVER['../gphyd/admin/PHP_SELF']; ?>" enctype="multipart/form-data" >   
            
        
                
                
                <table width="100%" border="0" cellspacing="5" cellpadding="0">
                  <tr>
                    <td width="25%">Knowledge Bank Title</td><td><input type="text" name="kb_title" id="polc_title" class="adm_inptext"  /></td>
                  </tr>
                  <tr>
                    <td width="25%">Department</td><td>
                    <div style="float:left">
                    
                    <select name="kb_dept" class="adm_select" onchange="getDeptSubCats(this.value)">
                    <option value="0">--SELECT--</option>
                    <?php
					$depts = mysql_query("SELECT * FROM department");
					while($depts_res = mysql_fetch_array($depts)){						
					
					?>  <option value="<?=$depts_res[id]?>" <?php if ( $depts_res[id] == $dept_id) echo 'selected="selected"'; ?>><?=$depts_res[department_name]?></option><?php } ?>
                    </select></div>
                    <div style="float:left">&nbsp;&nbsp;&nbsp;<a href="create_department.php?purl=<?=$_SERVER['REQUEST_URI'];?>"><img src="images/add_icon.png" width="25" align="Create New Category" title="Create New Category"   /></a></div>
                    </td>
                  </tr>
                  <tr>
                    <td width="25%">Department Categories</td><td>
                    <div style="float:left" id="deptsubcatDiv">
                    
                    <select name="kb_dept_sub_cat" class="adm_select">
                    
                    <?php
					if($dept_id!=''){
						$sub_depts = mysql_query("SELECT * FROM dept_sub_cat WHERE dept_id = '$dept_id'");
						echo $sub_depts;
					}else{
					$sub_depts = mysql_query("SELECT * FROM dept_sub_cat");
					echo '<option value=NULL>--SELECT--</option>';
					}
					while($sub_depts_res = mysql_fetch_array($sub_depts)){						
					
					?>  <option value="<?=$sub_depts_res[id]?>" <?php if ( $sub_depts_res[id] == $dept_sub_id) echo 'selected="selected"'; ?>><?=$sub_depts_res[sub_cat_name]?></option><?php } ?>
                    </select></div>
                    <div style="float:left">&nbsp;&nbsp;&nbsp;<a href="create_dept_sub_cat.php?purl=<?=$_SERVER['REQUEST_URI'];?>"><img src="images/add_icon.png" width="25" align="Create New Category" title="Create New Category"   /></a></div>
                    </td>
                  </tr>
                  <tr>
                    <td width="25%">Knowledge Bank Type</td><td>
                    <div style="float:left">
                    
                    <select name="kb_dept_gdc" class="adm_select">
                      <option value="GuestDelightActivities" <?php if ( $dept_gdc == "GuestDelightActivities") echo 'selected="selected"'; ?>>Guest Delight Activities</option>
                      <option value="GuestComplaintsHandling" <?php if ( $dept_gdc == "GuestComplaintsHandling") echo 'selected="selected"'; ?>>Guest Complaints Handling</option>
                    </select>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2"><br />Knowledge Bank Text<br />
						<?php   
                            // Create Editor instance and use Text property to load content into the RTE.  
                           /* $rte=new RichTextEditor(); 
							  
                            $rte->Text="Type here"; 
                            // Set a unique ID to Editor   
                            $rte->ID="Editor1";    
                            $rte->MvcInit();   
                            // Render Editor 
                            echo $rte->GetString();  */
                        ?>  
                        
               <textarea cols="100" id="editor1" name="editor1" rows="10">Type Here</textarea> 
                        
                        		<script>
			// Replace the <textarea id="editor1"> with an CKEditor instance.
			CKEDITOR.replace( 'editor1', {
				on: {
					focus: onFocus,
					blur: onBlur,

					// Check for availability of corresponding plugins.
					pluginsLoaded: function( evt ) {
						var doc = CKEDITOR.document, ed = evt.editor;
						if ( !ed.getCommand( 'bold' ) )
							doc.getById( 'exec-bold' ).hide();
						if ( !ed.getCommand( 'link' ) )
							doc.getById( 'exec-link' ).hide();
					}
				}
			});
		</script>


                    </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td><td align="right"><br />
                    <input type="submit" class="ubutton" name="upload_polc" value="Save"  onclick="return(validate());" />&nbsp;&nbsp;&nbsp;
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