<?php
ini_set('session.save_path', 'tmp');
session_start();

ob_start();
error_reporting(E_ALL ^ E_NOTICE);
include("../../connect.php");
include("prp_info.php");	

include("session_file.php");


if(isset($_REQUEST[cancel_upload])){
	@header("Location: policies.php");
	}

				//$date = new DateTime();
				//echo $date->format('Y-m-d H:i:s');
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d H:i:s', time());

	

if(isset($_REQUEST[upload_polc])){
	

	$polc_title = $_POST[polc_title];
	$polc_title = str_replace("'","",$polc_title);
	$polc_text = $_POST[editor1];
	$polc_text1 = str_replace("'","",$polc_text);
	$polc_category = $_POST[polc_category];
	//echo $polc_title."<br>".$polc_text."<br>".$polc_category;
	
	$polc = mysql_query("INSERT INTO policies (`id`,`policy_caregotry_id`, `prp_code`, `policy_title`, `policy_text`,`datetime`) VALUES (NULL, '$polc_category', '$prp_id', '$polc_title', '$polc_text1', '$date');");

		if($polc){ 
		echo "done";
		header("Location: policies.php");
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
	<script src="ckeditor.js"></script>
	<link href="sample.css" rel="stylesheet">
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
                  <td onclick="location.href='<?=$prp_root;?>/policies.php';" class="color1" height="136">
                    <div class="tile_box">
                    <div align="center" style="top:10px; position:relative"><img src="images/policies_icon.png"  width="100" /></div>
                      <div class="tile_name">
                      Policies
                    </div></div>
                    </td>
                  </tr>
                </table>
              
              </td>
              <td width="76%" valign="top" class="admin_content_area">
              <h2>Create New policy</h2>
                <hr />
                <form id="form1" name="myForm" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" >   
            
        
                
                
                <table width="100%" border="0" cellspacing="5" cellpadding="0">
                  <tr>
                    <td width="20%">Policy Title</td><td><input type="text" name="polc_title" id="polc_title" class="adm_inptext"  /></td>
                  </tr>
                  <tr>
                    <td width="20%">Policy Category</td><td>
                    <div style="float:left">
                    
                    <select name="polc_category" class="adm_select">
                    <?php
					$polc_cates = mysql_query("SELECT * FROM policy_categories");
					while($polc_catesres = mysql_fetch_array($polc_cates)){						
					
					?>  <option value="<?=$polc_catesres[id]?>"><?=$polc_catesres[policy_category]?></option><?php } ?>
                    </select></div>
                    <div style="float:left">&nbsp;&nbsp;&nbsp;<a href="create_category.php"><img src="images/add_icon.png" width="25" align="Create New Category" title="Create New Category"   /></a></div>
                    </td>
                  </tr>
                  
                  <tr>
                    <td colspan="2"><br />Policy Text<br />
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