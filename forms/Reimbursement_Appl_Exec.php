
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
$( "#reimbursement" ).datepicker({
changeMonth: true,
changeYear: true,
dateFormat: "dd/mm/yy"
});
});


 $(function() {
$( "#reimbursement1" ).datepicker({
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
           
           			<h2 style="color:#000000;">Reimbursement Appl Exec</h2>
                <hr />
               <div>
	        	

<form action="Reimbursement_Appl_Exec_pp.php" method="get" target="POPUPW" onsubmit="POPUPW = window.open('about:blank','POPUPW', 'height=550,width=1000,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');" enctype="multipart/form-data" >
 
  <input name="VTI-GROUP" value="0" type="hidden">

 

  <p align="center"><b>GREEN PARK - 
      <select size="1" name="PROP" onkeyup='Fchang(this,"T1")'>
    <option selected="selected">HYDERABAD</option>
    <option>VISAKHAPATNAM</option>
    <option>CHENNAI</option>
<option value="MARIGOLD">MARIGOLD</option>
<option>AVASA</option>
  </select>
  
  </b></p>
  <hr color="#000000" size="1">
  <table width="100%" border="0" cellspacing="5" cellpadding="0">
    <tr>
      <td align="left" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;">FROM</span></td>
      <td align="left" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;">
        <input name="T1" size="45" onkeyup='Fchang(this,&quot;DESG&quot;)' maxlength="45" type="text"  id="reimbursement1"/>
      </span></td>
      <td align="left" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;"> TO : H.O.D FINANCE</span></td>
    </tr>
    <tr>
      <td align="left" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;">Designation</span></td>
      <td align="left" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;">
        <input name="DESG" size="45" onkeyup='Fchang(this,&quot;T2&quot;)' maxlength="45" type="text" />
      </span></td>
      <td align="left" valign="middle">&nbsp;</td>
    </tr>
    <tr>
      <td align="left" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;">DATE</span></td>
      <td align="left" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;">
        <input name="T2" size="12" maxlength="12" value="27/06/2013" onkeyup='Fchang(this,&quot;T3&quot;)' type="text" id="reimbursement"/>
      </span></td>
      <td align="left" valign="middle">&nbsp;</td>
    </tr>
  </table>
 
  <hr color="#000000" size="1">
  
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25" align="center" valign="middle"><b>AMOUNT Rs.</b></td>
    <td height="25" align="center" valign="middle"><b>BILLS ENCLOSED Rs.</b></td>
    <td height="25" align="center" valign="middle"><b>PERIOD</b></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">1.</td>
    <td height="25" align="left" valign="middle">MEDICAL EXPENSES</td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="center" valign="middle"><input name="T3" size="8" maxlength="12" onkeyup='Fchang(this,"T4")' type="text"></td>
    <td height="25" align="center" valign="middle"><input name="T4" size="12" maxlength="12" onkeyup='Fchang(this,"T5")' type="text"></td>
    <td height="25" align="center" valign="middle"><input name="T5" size="20" maxlength="25" onkeyup='Fchang(this,"T6")' type="text"></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">2.</td>
    <td height="25" align="left" valign="middle">UNIFORM &amp; WASHING EXPENSES</td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="center" valign="middle"><input name="T6" size="8" maxlength="12" onkeyup='Fchang(this,&quot;T4&quot;)' type="text" /></td>
    <td height="25" align="center" valign="middle"><input name="T7" size="12" maxlength="12" onkeyup='Fchang(this,&quot;T5&quot;)' type="text" /></td>
    <td height="25" align="center" valign="middle"><input name="T8" size="20" maxlength="25" onkeyup='Fchang(this,&quot;T6&quot;)' type="text" /></td>
    </tr>
  <tr>
    <td height="25" align="center" valign="middle">3.</td>
    <td height="25" align="left" valign="middle">PROFESSIONAL PURSUIT</td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="center" valign="middle"><input name="T9" size="8" maxlength="12" onkeyup='Fchang(this,&quot;T4&quot;)' type="text" /></td>
    <td height="25" align="center" valign="middle"><input name="T10" size="12" maxlength="12" onkeyup='Fchang(this,&quot;T5&quot;)' type="text" /></td>
    <td height="25" align="center" valign="middle"><input name="T11" size="20" maxlength="25" onkeyup='Fchang(this,&quot;T6&quot;)' type="text" /></td>
    </tr>
  <tr>

    <td height="25" align="center" valign="middle">4.</td>
    <td height="25" align="left" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;">TELEPHONE
EXPENSES</span></td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="center" valign="middle"><input name="T12" size="8" maxlength="12" onkeyup='Fchang(this,&quot;T4&quot;)' type="text" /></td>
    <td height="25" align="center" valign="middle"><input name="T13" size="12" maxlength="12" onkeyup='Fchang(this,&quot;T5&quot;)' type="text" /></td>
    <td height="25" align="center" valign="middle"><input name="T14" size="20" maxlength="25" onkeyup='Fchang(this,&quot;T6&quot;)' type="text" /></td>
    </tr>
  <tr>
    <td height="25" align="center" valign="middle">5.</td>
    <td height="25" align="left" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;">LEAVE TRAVEL
ALLOWANCE</span></td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="center" valign="middle"><input name="T15" size="8" maxlength="12" onkeyup='Fchang(this,&quot;T4&quot;)' type="text" /></td>
    <td height="25" align="center" valign="middle"><input name="T16" size="12" maxlength="12" onkeyup='Fchang(this,&quot;T5&quot;)' type="text" /></td>
    <td height="25" align="center" valign="middle"><input name="T17" size="20" maxlength="25" onkeyup='Fchang(this,&quot;T6&quot;)' type="text" /></td>
    </tr>
  </table>

<p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="left">&nbsp;&nbsp;&nbsp;</p>
<p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="left">&nbsp;&nbsp;&nbsp;
  <strong>Thanks &amp; Regards,</strong></p>
<p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="left">&nbsp;&nbsp;&nbsp;
  </p>

  <input value="Print Prevew" name="PRNVEW" type="submit"  class="ubutton" style="float:right;"/>
</b></p>
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