
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="../admin/includes/styles1.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GreePark Hotels and Resorts Intranet</title>
<link href="js1/MetroJs.lt.css" rel="stylesheet" type="text/css">
<link href="gphyd/includes/styles1.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../gphyd/includes/styles_w.css">
<script src="js/modernizr-1.5.min.js"></script>
<style>
  .col4 {
    float: left;
    margin-right: .5%;
    width: 65%; 
	background-color:#f3f3f3;
	padding:15px;
  }
</style>
<link rel="stylesheet" href="../includes/jquery-ui.css" />
<script src="../js/jquery-1.9.1.js"></script>
<script src="../js/jquery-ui.js"></script>


<!--<script src="datepicker/jquery-1.9.1.js"></script>
<script src="datepicker/jquery-ui.js"></script>
<link rel="stylesheet" href="datepicker/jquery-ui.css" />-->


<link rel="stylesheet" href="/resources/demos/style.css" />
<script>
 $(function() {
$( "#interunitdate" ).datepicker({
changeMonth: true,
changeYear: true,
dateFormat: "dd/mm/yy"
});
});


</script>
</head>

<body>
<div class="demo-wrapper">
 
  
  
  <div class="dashboard clearfix">
        <ul class="tiles">
          <div class="col1 clearfix">
          
            <li class="tile tile-big tile-11 slideTextUp" data-page-type="no" data-page-name="no" onclick="location.href='/';">
              <div><img src="../gphyd/images/logo123.png"  width="100" /></div>
              <div><p class="prp_font">HOME</p></div>
            </li>
            
                    <li class="tile tile-big tile-24 rotate3d rotate3dX" data-page-type="no" data-page-name="no" onclick="location.href='../forms.php';">
          <div class="faces">
            <div class="frontforms tiletextfont">
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Forms</p>
            </div>
            <div class="backforms"><img src="../images/forms_icon.png" width="160" /></div>
          </div>
        </li>
            
          </div>
          
          <div class="col4 clearfix">
           
           			<h2 style="color:#000000;">Inter Unit Material Transfer or Purchase Requisition</h2>
                <hr />
               <div>
	        	

<form action="Inter_Unit_Material_Transfer_or_Purchase_Requisition_pp.php" method="get" target="POPUPW" onsubmit="POPUPW = window.open('about:blank','POPUPW', 'height=550,width=1000,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');" enctype="multipart/form-data" >


  <input name="VTI-GROUP" value="0" type="hidden">
  <p align="center"><b>GREEN PARK - <select size="1" name="PROP" onkeyup='Fchang(this,"DT")'>
    <option>HYDERABAD</option>
    <option>VISAKHAPATNAM</option>
    <option>CHENNAI</option>
<option value="MARIGOLD">MARIGOLD</option>
<option>AVASA</option>
  </select> </b></p>
  <p align="center"><b>INTER UNIT MATERIAL <select size="1" name="D1">
    <option>PURCHASE</option>
    <option>TRANSFER</option>
  </select> REQUISITION</b></p>
  <p align="center"><b>It is proposed to procure / transfer&nbsp; the following
  materials , on behalf of / to&nbsp;&nbsp;&nbsp;</b></p>
  <p align="center"><b> Green Park,&nbsp; <select size="1" name="D2" onkeyup='Fchang(this,"DT")'>
    <option>HYDERABAD</option>
    <option>CHENNAI</option>
    <option>VISAKHAPATNAM</option>
<option>MARIGOLD</option>
<option>AVASA</option>
  </select>  unit</b></p>
  <hr>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td height="25" align="center" valign="middle"><strong>S.#.</strong></td>
      <td height="25" align="center" valign="middle"><strong>MATERIAL DESCRIPTION</strong></td>
      <td height="25" align="center" valign="middle"><strong>UOM</strong></td>
      <td height="25" align="center" valign="middle"><strong>QTY</strong></td>
      <td height="25" align="center" valign="middle"><strong>REMARKS</strong><br />
        (Indicate Stock at GPH Wherever Necessary)</td>
    </tr>
    <tr>
      <td height="25" align="center" valign="middle">1.</td>
      <td height="25" align="center" valign="middle"><input name="MD04" size="40" maxlength="35" onkeyup='Fchang(this,&quot;U1&quot;)' type="text" /></td>
      <td height="25" align="center" valign="middle"><input name="MD03" size="8" maxlength="7" onkeyup='Fchang(this,&quot;Q1&quot;)' type="text" /></td>
      <td height="25" align="center" valign="middle"><input name="MD02" size="8" maxlength="10" onkeyup='Fchang(this,&quot;RM1&quot;)' type="text" /></td>
      <td height="25" align="center" valign="middle"><input name="MD01" size="23" maxlength="12" onkeyup='Fchang(this,&quot;MD2&quot;)' type="text" /></td>
    </tr>
    <tr>
      <td height="25" align="center" valign="middle">2.</td>
      <td height="25" align="center" valign="middle"><input name="MD1" size="40" maxlength="35" onkeyup='Fchang(this,&quot;U1&quot;)' type="text" /></td>
      <td height="25" align="center" valign="middle"><input name="MD2" size="8" maxlength="7" onkeyup='Fchang(this,&quot;Q1&quot;)' type="text" /></td>
      <td height="25" align="center" valign="middle"><input name="MD3" size="8" maxlength="10" onkeyup='Fchang(this,&quot;RM1&quot;)' type="text" /></td>
      <td height="25" align="center" valign="middle"><input name="MD4" size="23" maxlength="12" onkeyup='Fchang(this,&quot;MD2&quot;)' type="text" /></td>
    </tr>
    <tr>
      <td height="25" align="center" valign="middle">3.</td>
      <td height="25" align="center" valign="middle"><input name="MD5" size="40" maxlength="35" onkeyup='Fchang(this,&quot;U1&quot;)' type="text" /></td>
      <td height="25" align="center" valign="middle"><input name="MD6" size="8" maxlength="7" onkeyup='Fchang(this,&quot;Q1&quot;)' type="text" /></td>
      <td height="25" align="center" valign="middle"><input name="MD7" size="8" maxlength="10" onkeyup='Fchang(this,&quot;RM1&quot;)' type="text" /></td>
      <td height="25" align="center" valign="middle"><input name="MD8" size="23" maxlength="12" onkeyup='Fchang(this,&quot;MD2&quot;)' type="text" /></td>
    </tr>
    <tr>
      <td height="25" align="center" valign="middle">4.</td>
      <td height="25" align="center" valign="middle"><input name="MD9" size="40" maxlength="35" onkeyup='Fchang(this,&quot;U1&quot;)' type="text" /></td>
      <td height="25" align="center" valign="middle"><input name="MD10" size="8" maxlength="7" onkeyup='Fchang(this,&quot;Q1&quot;)' type="text" /></td>
      <td height="25" align="center" valign="middle"><input name="MD11" size="8" maxlength="10" onkeyup='Fchang(this,&quot;RM1&quot;)' type="text" /></td>
      <td height="25" align="center" valign="middle"><input name="MD12" size="23" maxlength="12" onkeyup='Fchang(this,&quot;MD2&quot;)' type="text" /></td>
    </tr>
    <tr>
      <td height="25" align="center" valign="middle">5.</td>
      <td height="25" align="center" valign="middle"><input name="MD13" size="40" maxlength="35" onkeyup='Fchang(this,&quot;U1&quot;)' type="text" /></td>
      <td height="25" align="center" valign="middle"><input name="MD14" size="8" maxlength="7" onkeyup='Fchang(this,&quot;Q1&quot;)' type="text" /></td>
      <td height="25" align="center" valign="middle"><input name="MD15" size="8" maxlength="10" onkeyup='Fchang(this,&quot;RM1&quot;)' type="text" /></td>
      <td height="25" align="center" valign="middle"><input name="MD16" size="23" maxlength="12" onkeyup='Fchang(this,&quot;MD2&quot;)' type="text" /></td>
    </tr>
  </table>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
    </tr>
    <tr>
      <td height="25"><strong>Requisition By</strong></td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
    </tr>
    <tr>
      <td height="25">Name</td>
      <td height="25">&nbsp;</td>
      <td height="25"><input name="RQNAME" size="30" onkeyup='Fchang(this,"RQDESG")' maxlength="32" type="text"></td>
    </tr>
    <tr>
      <td height="25">Designation</td>
      <td height="25">&nbsp;</td>
      <td height="25"><input name="RQDESG" size="30" onkeyup='Fchang(this,"DT1")' maxlength="30" type="text"></td>
    </tr>
    <tr>
      <td height="25">Date</td>
      <td height="25">&nbsp;</td>
      <td height="25"><input name="DT1" onkeyup='Fchang(this,"PVIEW")' size="10" maxlength="10" type="text" id="interunitdate"></td>
    </tr>
    <tr>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
    </tr>
    <tr>
      <td height="25" colspan="3"><p><b>Note :&nbsp;</b>To be prepared in
  TRIPLICATE.(&nbsp; Print THREE Copies).</p></td>
      </tr>
    <tr>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
    </tr>
  </table>

<hr>


  <p align="center"><b><input value="Print Prevew" name="PVIEW"  type="submit" class="ubutton"></b></p>
</form>




	        </div>
           
           </div>
          
          
          
          
          
          
          
          
          
          
          
          
          </ul>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
    
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