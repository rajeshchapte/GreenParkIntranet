
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
$( "#maintenancedate" ).datepicker({
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
           
           			<h2 style="color:#000000;">Maintenance Job Requisition</h2>
                <hr />
               <div>
	        	

<form action="Maintenance_Job_Requisition_pp.php" method="get" target="POPUPW" onsubmit="POPUPW = window.open('about:blank','POPUPW', 'height=550,width=1000,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');" enctype="multipart/form-data" >


  <input name="VTI-GROUP" value="0" type="hidden">
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
  <p align="right" style="padding-right:50px;">&nbsp;</p>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="2" align="center"><b>GREEN PARK -
          <select size="1" name="PROP" onkeyup='Fchang(this,&quot;DT&quot;)'>
            <option>HYDERABAD</option>
            <option>VISAKHAPATNAM</option>
            <option>CHENNAI</option>
            <option value="MARIGOLD">MARIGOLD</option>
            <option>AVASA</option>
          </select>
      </b></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><b>MAINTENANCE JOB REQUISITION</b></td>
    </tr>
    <tr>
      <td width="71%">&nbsp;</td>
      <td width="29%">Requisition No :</td>
    </tr>
    <tr>
      <td>&nbsp;Requested by:
        <select size="1" name="dept" onkeyup='Fchang(this,&quot;T1&quot;)'>
          <option>FRONT OFFICE</option>
          <option>F &amp; B SERVICE</option>
          <option>F &amp; B PRODUCTION</option>
          <option>HOUSE KEEPING</option>
          <option>ACCOUNTS</option>
          <option>MAINTAINANCE</option>
          <option>H R D</option>
          <option>SECURITY</option>
          <option>I.T. DEPARTMENT</option>
          <option>PROJECTS</option>
        </select>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
      <td><span style="padding-right:50px;">Date :&nbsp;
          <input name="T1" size="12" onkeyup='Fchang(this,&quot;S1&quot;)' type="text" id="maintenancedate" />
      </span></td>
    </tr>
  </table>
  <p class="MsoNormal" style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;">&nbsp;</p>
<hr>
  <table width="100%" border="0" cellspacing="5" cellpadding="0">
  <tr>
    <td height="25" align="center" valign="middle"><b>S.#.</b></td>
    <td height="25" align="center" valign="middle"><b>Equipment
  / Area</b></td>
    <td height="25" align="center" valign="middle"><b>Nature of
  work</b></td>
    <td height="25" align="center" valign="middle"><b>Name of Party</b></td>
    <td height="25" align="center" valign="middle"><b>Approximate</b></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25" align="center" valign="middle"><span class="MsoNormal" style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;">Recommended</span></td>
    <td height="25" align="center" valign="middle"><span class="MsoNormal" style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;"><span style=""><b>Value</b></span>&nbsp;&nbsp;Rs</span></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">1.</td>
    <td height="25" align="left" valign="middle"><textarea name="T5" cols="25" onkeyup="Fchang(this,&quot;S4&quot;)"></textarea></td>
    <td height="25" align="left" valign="middle"><textarea name="T9" cols="25" onkeyup="Fchang(this,&quot;S4&quot;)"></textarea></td>
    <td height="25" align="left" valign="middle"><textarea name="T13" cols="25" onkeyup="Fchang(this,&quot;S4&quot;)"></textarea></td>
    <td height="25" align="left" valign="middle"><input name="T17" size="10" maxlength="12" onkeyup='Fchang(this,&quot;S4&quot;)' type="text" /></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">2.</td>
    <td height="25" align="left" valign="middle"><textarea name="T6" cols="25" onkeyup="Fchang(this,&quot;S4&quot;)"></textarea></td>
    <td height="25" align="left" valign="middle"><textarea name="T10" cols="25" onkeyup="Fchang(this,&quot;S4&quot;)"></textarea></td>
    <td height="25" align="left" valign="middle"><textarea name="T14" cols="25" onkeyup="Fchang(this,&quot;S4&quot;)"></textarea></td>
    <td height="25" align="left" valign="middle"><input name="T18" size="10" maxlength="12" onkeyup='Fchang(this,&quot;S4&quot;)' type="text" /></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">3.</td>
    <td height="25" align="left" valign="middle"><textarea name="T7" cols="25" onkeyup="Fchang(this,&quot;S4&quot;)"></textarea></td>
    <td height="25" align="left" valign="middle"><textarea name="T11" cols="25" onkeyup="Fchang(this,&quot;S4&quot;)"></textarea></td>
    <td height="25" align="left" valign="middle"><textarea name="T15" cols="25" onkeyup="Fchang(this,&quot;S4&quot;)"></textarea></td>
    <td height="25" align="left" valign="middle"><input name="T19" size="10" maxlength="12" onkeyup='Fchang(this,&quot;S4&quot;)' type="text" /></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">4.</td>
    <td height="25" align="left" valign="middle"><textarea name="T8" cols="25" onkeyup="Fchang(this,&quot;S4&quot;)"></textarea></td>
    <td height="25" align="left" valign="middle"><textarea name="T12" cols="25" onkeyup="Fchang(this,&quot;S4&quot;)"></textarea></td>
    <td height="25" align="left" valign="middle"><textarea name="T16" cols="25" onkeyup="Fchang(this,&quot;S4&quot;)"></textarea></td>
    <td height="25" align="left" valign="middle"><input name="T20" size="10" maxlength="12" onkeyup='Fchang(this,&quot;S4&quot;)' type="text" /></td>
  </tr>
  </table>

  
<hr>
  <p>Remarks : <input name="RM" onkeyup='Fchang(this,"PVIEW")' size="77" type="text"></p>
  
  <p>Proposed by&nbsp;<input name="PO" size="20" type="text">  </p>
  <div style="float:right;">UNIT HEAD</div>
  <p align="center"><b><input value="Print Prevew" name="PVIEW" type="submit" class="ubutton"></b></p>
</form>

<p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center">&nbsp;</p>
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