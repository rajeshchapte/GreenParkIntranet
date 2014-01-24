
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
$( "#bqudate" ).datepicker({
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
          
          		<h2 style="color:#000;">Bqt Amendment Form</h2>
                <hr />
               <div>
	        	



<form method="get" action="Bqt_Amendment_Form_pp.php" target="POPUPW" onsubmit="POPUPW = window.open('about:blank','POPUPW', 'height=550,width=1000,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');" enctype="multipart/form-data">


 <input name="VTI-GROUP" value="0" type="hidden">

 <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center">&nbsp;</p>

 <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center"><font size="4"><b>Green Park - <select size="1" name="PROP" onkeyup='Fchang(this,"T1")'>
  <option selected="selected">HYDERABAD</option>
  <option>VISAKHAPATNAM</option>
  <option>CHENNAI</option>
<option>MARIGOLD</option>
<option>AVASA</option>
 </select></b></font></p>

 <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center">&nbsp;&nbsp;</p>

 <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center"><b>BANQUET AMENDMENT FORM</b></p>

 <hr color="#000000" noshade="noshade">
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="25"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;">I) SL.NO</span></td>
    <td height="25">:</td>
    <td height="25"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;">
      <input name="SLNO" size="35" maxlength="30" onkeyup='Fchang(this,&quot;T3&quot;)' tabindex="5" type="text" />
    </span></td>
    <td height="25"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;">II) DATE</span></td>
    <td height="25">:</td>
    <td height="25"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;">
      <input name="DATE" size="16" maxlength="30" onkeyup='Fchang(this,&quot;T3&quot;)' tabindex="6" type="text" id="bqudate"/>
    </span></td>
    <td height="25">&nbsp;</td>
  </tr>
  <tr>
    <td height="25"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">III) F.P.NO</span></td>
    <td height="25">:</td>
    <td height="25"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
      <input name="FPNO" size="35" maxlength="30" onkeyup='Fchang(this,&quot;T3&quot;)' tabindex="7" type="text" />
    </span></td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
  </tr>
  <tr>
    <td height="25"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">IV) DATE OF
 FUNCTION</span></td>
    <td height="25">:</td>
    <td height="25"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
      <input name="DOF" size="35" maxlength="30" onkeyup='Fchang(this,&quot;T3&quot;)' tabindex="8" type="text" />
    </span></td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
  </tr>
  <tr>
    <td height="25"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">V)</span> <span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">PARTY
 NAME</span></td>
    <td height="25">:</td>
    <td height="25"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
      <input name="PNAME" size="35" maxlength="30" onkeyup='Fchang(this,&quot;T4&quot;)' tabindex="9" type="text" />
    </span></td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
  </tr>
  <tr>
    <td height="25"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">VI) HOST
 NAME</span></td>
    <td height="25">:</td>
    <td height="25"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
      <input name="HNAME" size="35" maxlength="30" onkeyup='Fchang(this,&quot;T4&quot;)' tabindex="10" type="text" />
    </span></td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
  </tr>
  <tr>
    <td height="25"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">VII)</span> <span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">RATE</span></td>
    <td height="25">:</td>
    <td height="25"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
      <input name="RATE" size="35" maxlength="30" onkeyup='Fchang(this,&quot;T5&quot;)' tabindex="12" type="text" />
    </span></td>
    <td height="25"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">VIII) REFERENCE</span></td>
    <td height="25">:</td>
    <td height="25"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
      <input name="REF" size="23" maxlength="30" onkeyup='Fchang(this,&quot;T4&quot;)' tabindex="13" type="text" />
    </span></td>
    <td height="25">&nbsp;</td>
  </tr>
  <tr>
    <td height="25"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">IX)</span> <span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">GUARANTEED PAX</span></td>
    <td height="25">:</td>
    <td height="25"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
      <input name="GPAX" size="35" maxlength="30" onkeyup='Fchang(this,&quot;T5&quot;)' tabindex="13" type="text" />
    </span></td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
  </tr>
  <tr>
    <td height="25"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">X) EXPECTED PAX</span></td>
    <td height="25">:</td>
    <td height="25"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
      <input name="EPAX" size="35" maxlength="30" onkeyup='Fchang(this,&quot;T5&quot;)' tabindex="14" type="text" />
    </span></td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
  </tr>
  <tr>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
  </tr>
  <tr>
    <td height="25"><b>AMENDMENT
 TYPE</b></td>
    <td height="25">:</td>
    <td height="25"><font size="4"><b>
      <select size="1" name="AMENTYPE" onkeyup='Fchang(this,&quot;T1&quot;)' tabindex="15">
        <option selected="selected" value="Rate Revision">Rate Revision</option>
        <option value="Pax Rivision">Pax Rivision</option>
        <option value="Dishes Addition">Dishes Addition</option>
        <option value="Party Cancelled">Party Cancelled</option>
        <option value="Party Post Poned">Party Post Poned</option>
        <option value="Discount Offered">Discount Offered</option>
      </select>
    </b></font></td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
  </tr>
  <tr>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
  </tr>
  <tr>
    <td height="25"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">I) EXISTING</span></td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>

  </tr>
  <tr>
    <td height="25" colspan="3" style="padding-left:25px;"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
      <input name="ED1" size="57" maxlength="57" onkeyup='Fchang(this,&quot;T6&quot;)' tabindex="16" type="text" />
    </span></td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
  </tr>
  <tr>
    <td height="25" colspan="3" style="padding-left:25px;"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
      <input name="ED2" size="57" maxlength="57" onkeyup='Fchang(this,&quot;T6&quot;)' tabindex="17" type="text" />
    </span></td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
  </tr>
  <tr>
    <td height="25" colspan="3" style="padding-left:25px;"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
      <input name="ED3" size="57" maxlength="57" onkeyup='Fchang(this,&quot;T8&quot;)' tabindex="18" type="text" />
    </span></td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
  </tr>
  <tr>
    <td height="25"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">II) REVISED</span></td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
  </tr>
  <tr>
    <td height="25" colspan="3" style="padding-left:25px;"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
      <input name="RE1" size="57" maxlength="57" onkeyup='clok(this,&quot;T9&quot;)' tabindex="19" type="text" />
    </span></td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
  </tr>
  <tr>
    <td height="25" colspan="3" style="padding-left:25px;"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
      <input name="RE2" size="57" maxlength="57" onkeyup='clok(this,&quot;T9&quot;)' tabindex="20" type="text" />
    </span></td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
  </tr>
  <tr>
    <td height="25" colspan="3" style="padding-left:25px;"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
      <input name="RE3" size="57" maxlength="57" onkeyup='clok(this,&quot;T9&quot;)' tabindex="21" type="text" />
    </span></td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
  </tr>
  <tr>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
  </tr>
  <tr>
    <td height="25"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">PROPOSED BY</span></td>
    <td height="25">:</td>
    <td height="25"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
      <input name="PROPBY" size="20" maxlength="30" onkeyup='Fchang(this,&quot;T4&quot;)' tabindex="22" type="text" />
    </span></td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
  </tr>
  <tr>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25"><b>
      <input value="Print Prevew" name="PRNVEW" tabindex="23" type="submit" class="ubutton" />
    </b></td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
  </tr>
</table>

 
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