
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
$( "#capitaldate" ).datepicker({
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
           
           			 <h2 style="color:#000000;">FORM OF CAPITAL EXPENDITURE </h2>
                <hr />
               <div>
	        	

<form action="FORM_OF_CAPITAL_EXPENDITURE_pp.php" method="get" target="POPUPW" onsubmit="POPUPW = window.open('about:blank','POPUPW', 'height=550,width=1000,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');" enctype="multipart/form-data" >
  
<p class="MsoSubtitle" style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center">&nbsp;</p>
<p class="MsoSubtitle" style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center">
<b><font size="3">FORM OF CAPITAL EXPENDITURE&nbsp;</font></b></p>
<p class="MsoSubtitle" style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center">&nbsp;</p>
<hr>

<table id="table3" height="40" width="890" border="0" bordercolor="#ffffff" cellpadding="0" cellspacing="0">
  <tbody><tr> 
    <td height="25" width="564">
REF: PROPOSAL NO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input name="RPOSN1" size="20" maxlength="30" type="text"></td><td bordercolor="#FFFFFF" height="25" width="322">
    DATE:&nbsp; <input name="FDATE" size="20" type="text" id="capitaldate">&nbsp;&nbsp;
    </td>
  </tr>
    <tr>
      <td height="25" colspan="2" align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="25">&nbsp;</td>
          <td height="25">&nbsp;</td>
          <td height="25">&nbsp;</td>
        </tr>
        <tr>
          <td height="25">01. UNIT NAME</td>
          <td height="25" align="center" valign="middle">:</td>
          <td height="25"><b>GREEN PARK - </b></font><select size="1" name="D1" onkeyup='OnLoad(this,"date")'>
  <option selected="selected">HYDERABAD</option>
  <option>VISAKHAPATNAM</option>
  <option>CHENNAI</option>
<option value="MARIGOLD">MARIGOLD</option>
 <option>AVASA</option>
</select></td>
        </tr>
        <tr>
          <td height="25">02. PROPOSING DEPARTMENT</td>
          <td height="25" align="center" valign="middle">:</td>
          <td height="25"><select size="1" name="dept" onkeyup='OnLoad(this,"date")'>
  <option>FRONT OFFICE</option>
  <option>F &amp; B SERVICE</option>
  <option>F &amp; B PRODUCTION</option>
  <option>I.T DEPARTMENT</option>
  <option>HOUSE KEEPING</option>
  <option>ACCOUNTS</option>
  <option>MAINTENANCE</option>
  <option>PROJECTS</option>
  <option>H R D</option>
  <option>SECURITY</option>
</select></td>
        </tr>
        <tr>
          <td height="25">03. NATURE OF WORK</td>
          <td height="25" align="center" valign="middle">:</td>
          <td height="25"><select size="1" name="dept0" onkeyup='OnLoad(this,"date")'>
  <option>(A) CIVIL RENOVATION</option>
	<option>(B) ENGINEERING RENOVATION</option>
	<option>(C) PURCHASE OF NEW EQUIPMENT</option>
	<option>(D) REPLACEMNET OF EXISITING EQUIPMENT
	</option>
</select></td>
        </tr>
        <tr>
          <td height="25">04. PURPOSE BRIEF</td>
          <td height="25" align="center" valign="middle">:</td>
          <td height="25"><input name="PURP1" size="60" maxlength="85" type="text"></td>
        </tr>
        <tr>
          <td height="25">&nbsp;</td>
          <td height="25" align="center" valign="middle">&nbsp;</td>
          <td height="25"><input name="PURP7" size="60" maxlength="85" type="text" /></td>
        </tr>
        <tr>
          <td height="25">&nbsp;</td>
          <td height="25" align="center" valign="middle">&nbsp;</td>
          <td height="25"><input name="PURP8" size="60" maxlength="85" type="text" /></td>
        </tr>
        <tr>
          <td height="25">&nbsp;</td>
          <td height="25" align="center" valign="middle">&nbsp;</td>
          <td height="25"><input name="PURP9" size="60" maxlength="85" type="text" /></td>
        </tr>
        <tr>
          <td height="25">&nbsp;</td>
          <td height="25" align="center" valign="middle">&nbsp;</td>
          <td height="25"><input name="PURP10" size="60" maxlength="85" type="text" /></td>
        </tr>
        <tr>
          <td height="25">&nbsp;</td>
          <td height="25" align="center" valign="middle">&nbsp;</td>
          <td height="25"><input name="PURP11" size="60" maxlength="85" type="text" /></td>
        </tr>
        <tr>
          <td height="25">&nbsp;</td>
          <td height="25" align="center" valign="middle">&nbsp;</td>
          <td height="25">&nbsp;</td>
        </tr>
        <tr>
          <td height="25">&nbsp;</td>
          <td height="25" align="center" valign="middle">&nbsp;</td>
          <td height="25">&nbsp;</td>
        </tr>
      </table></td>
      </tr>
  </tbody>
</table>


<hr>
<b>05. CAPITAL ITEM (S)
</b>

<table width="95%" height="200" border="0" align="center" cellspacing="0" id="table2">
  <tbody>
    <tr>
      <td height="25" align="center">&nbsp;</td>
      <td height="25" align="center">&nbsp;</td>
      <td height="25" align="center">&nbsp;</td>
      <td height="25" align="center">&nbsp;</td>
      <td height="25" align="center">&nbsp;</td>
    </tr>
    <tr>
    <td height="25" width="31" align="center">
      <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center">
		<font size="2">S.NO.</font></p>
    </td>
    <td height="25" width="372" align="center">
      <font size="2">Description of Item</font></td>
    <td height="25" width="80" align="center">
      <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center"><font size="2">Qty</font></p>
    </td>
    <td height="25" width="113" align="center">
      <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center"><font size="2">Unit
      Cost Rs.</font></p>
    </td>
    <td height="25" width="160" align="center">
      <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center"><font size="2">Total
      Cost Incl.All Taxes Rs.</font></p>
    </td>
  </tr>
  <tr>
    <td height="25" width="31" align="center">
      <font size="2">1</font></td>
    <td height="25" width="372" align="center">
      <font size="2">&nbsp;</font><!--webbot bot="Validation"
      b-value-required="TRUE" i-maximum-length="50" --><input name="DNM1" size="50" maxlength="50" onkeyup='OnLoad(this,"DQTY1")' type="text"></td>
    <td height="25" width="80" align="center">
      <!--webbot bot="Validation" s-data-type="Number" s-number-separators=",."
      b-value-required="TRUE" i-maximum-length="6" --><input name="DQTY1" size="8" maxlength="6" onkeyup='OnLoad(this,"DUP1")' type="text"></td>
    <td height="25" width="113" align="center">
      <!--webbot bot="Validation" s-data-type="Number" s-number-separators=",."
      b-value-required="TRUE" i-maximum-length="9" --><input name="DUP1" size="8" maxlength="9" onkeyup='OnLoad(this,"DTOC1")' type="text"></td>
    <td height="25" width="160" align="center">
      <!--webbot bot="Validation" s-data-type="Number" s-number-separators=",."
      b-value-required="TRUE" i-maximum-length="10" --><input name="DTOC1" size="10" maxlength="10" onkeyup='OnLoad(this,"DNM2")' type="text"></td>
  </tr>
  <tr>
    <td height="25" width="31" align="center">
      <font size="2">2</font></td>
    <td height="25" width="372" align="center">
      <font size="2">&nbsp;</font><!--webbot bot="Validation"
      b-value-required="TRUE" i-maximum-length="50" --><input name="DNM2" size="50" maxlength="50" onkeyup='OnLoad(this,"DQTY2")' type="text"></td>
    <td height="25" width="80" align="center">
      <!--webbot bot="Validation" s-data-type="Number" s-number-separators=",."
      b-value-required="TRUE" i-maximum-length="6" --><input name="DQTY2" size="8" maxlength="6" onkeyup='OnLoad(this,"DMP2")' type="text"></td>
    <td height="25" width="113" align="center">
      <!--webbot bot="Validation" s-data-type="Number" s-number-separators=",."
      b-value-required="TRUE" i-maximum-length="9" --><input name="DUP2" size="8" maxlength="9" onkeyup='OnLoad(this,"DTOC2")' type="text"></td>
    <td height="25" width="160" align="center">
      <!--webbot bot="Validation" s-data-type="Number" s-number-separators=",."
      b-value-required="TRUE" i-maximum-length="10" --><input name="DTOC2" size="10" maxlength="10" onkeyup='OnLoad(this,"DNM3")' type="text"></td>
  </tr>
  <tr>
    <td height="25" width="31" align="center">
      <font size="2">3</font></td>
<td height="25" width="372" align="center">
      <font size="2">&nbsp;</font><!--webbot bot="Validation"
      b-value-required="TRUE" i-maximum-length="50" --><input name="DNM3" size="50" maxlength="50" onkeyup='OnLoad(this,"DQTY4")' type="text"></td>
    <td height="25" width="80" align="center">
      <!--webbot bot="Validation" s-data-type="Number" s-number-separators=",."
      b-value-required="TRUE" i-maximum-length="6" --><input name="DQTY3" size="8" maxlength="6" onkeyup='OnLoad(this,"DUP3")' type="text"></td>
    <td height="25" width="113" align="center">
      <!--webbot bot="Validation" s-data-type="Number" s-number-separators=",."
      b-value-required="TRUE" i-maximum-length="9" --><input name="DUP3" size="8" maxlength="9" onkeyup='OnLoad(this,"DTOC3")' type="text"></td>
    <td height="25" width="160" align="center">
      <!--webbot bot="Validation" s-data-type="Number" s-number-separators=",."
      b-value-required="TRUE" i-maximum-length="10" --><input name="DTOC3" size="10" maxlength="10" onkeyup='OnLoad(this,"DNM4")' type="text"></td>
  </tr>
  <tr>
    <td height="25" width="31" align="center">
      <font size="2">4</font></td>
    <td height="25" width="372" align="center">
      <font size="2">&nbsp;</font><!--webbot bot="Validation"
      b-value-required="TRUE" i-maximum-length="20" --><input name="DNM4" size="50" maxlength="50" onkeyup='OnLoad(this,"DQTY4")' type="text"></td>
    <td height="25" width="80" align="center">
      <font size="2">&nbsp;</font><!--webbot bot="Validation"
      s-data-type="Number" s-number-separators=",." b-value-required="TRUE"
      i-maximum-length="6" --><input name="DQTY4" size="8" maxlength="6" onkeyup='OnLoad(this,"DUP4")' type="text"></td>
    <td height="25" width="113" align="center">
      <font size="2">&nbsp;</font><!--webbot bot="Validation"
      s-data-type="Number" s-number-separators=",." b-value-required="TRUE"
      i-maximum-length="9" --><input name="DUP4" size="8" maxlength="9" onkeyup='OnLoad(this,"DTOC4")' type="text"></td>
    <td height="25" width="160" align="center">
      <font size="2">&nbsp;</font><!--webbot bot="Validation"
      s-data-type="Number" s-number-separators=",." b-value-required="TRUE"
      i-maximum-length="10" --><input name="DTOC4" size="10" maxlength="10" onkeyup='OnLoad(this,"DNM5")' type="text"></td>
  </tr>
  <tr>
    <td height="25" width="31" align="center">
      <font size="2">5</font></td>
    <td height="25" width="372" align="center">
      <font size="2">&nbsp;</font><!--webbot bot="Validation"
      b-value-required="TRUE" i-maximum-length="20" --><input name="DNM5" size="50" maxlength="50" onkeyup='OnLoad(this,"DQTY5")' type="text"></td>
    <td height="25" width="80" align="center">
      <font size="2">&nbsp;</font><!--webbot bot="Validation"
      s-data-type="Number" s-number-separators=",." b-value-required="TRUE"
      i-maximum-length="6" --><input name="DQTY5" size="8" maxlength="6" onkeyup='OnLoad(this,"DUP5")' type="text"></td>
    <td height="25" width="113" align="center">
      <font size="2">&nbsp;</font><!--webbot bot="Validation"
      s-data-type="Number" s-number-separators=",." b-value-required="TRUE"
      i-maximum-length="9" --><input name="DUP5" size="8" maxlength="9" onkeyup='OnLoad(this,"DTOC5")' type="text"></td>
    <td height="25" width="160" align="center">
      <font size="2">&nbsp;</font><!--webbot bot="Validation"
      s-data-type="Number" s-number-separators=",." b-value-required="TRUE"
      i-maximum-length="10" --><input name="DTOC5" size="10" maxlength="10" onkeyup='OnLoad(this,"DNM6")' type="text"></td>
  </tr>
  <tr>
    <td height="25" width="31" align="center">
      <font size="2">6</font></td>
    <td height="25" width="372" align="center">
      <font size="2">&nbsp;</font><!--webbot bot="Validation"
      b-value-required="TRUE" i-maximum-length="20" --><input name="DNM6" size="50" maxlength="50" onkeyup='OnLoad(this,"DQTY6")' type="text"></td>
    <td height="25" width="80" align="center">
      <font size="2">&nbsp;</font><!--webbot bot="Validation"
      s-data-type="Number" s-number-separators=",." b-value-required="TRUE"
      i-maximum-length="6" --><input name="DQTY6" size="8" maxlength="6" onkeyup='OnLoad(this,"DUP6")' type="text"></td>
    <td height="25" width="113" align="center">
      <font size="2">&nbsp;</font><!--webbot bot="Validation"
      s-data-type="Number" s-number-separators=",." b-value-required="TRUE"
      i-maximum-length="9" --><input name="DUP6" size="8" maxlength="9" onkeyup='OnLoad(this,"DTOC6")' type="text"></td>
    <td height="25" width="160" align="center">
      <font size="2">&nbsp;</font><!--webbot bot="Validation"
      s-data-type="Number" s-number-separators=",." b-value-required="TRUE"
      i-maximum-length="10" --><input name="DTOC6" size="10" maxlength="10" onkeyup='OnLoad(this,"ITM1")' type="text"></td>
  </tr>
</tbody></table>

<hr>
<p class="MsoNormal" style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;">
<b>(A) ANY ALTERNATIVES CONSIDERED FOR THE ABOVE:</b></p>
<hr>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="25" align="left" valign="middle"><input name="ITM1" size="105" maxlength="100" onkeyup='OnLoad(this,"ITM2")' type="text"></td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle"><input name="ITM2" size="105" maxlength="100" onkeyup='OnLoad(this,"ITM3")' type="text"></td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle"><input name="ITM3" size="105" maxlength="100" onkeyup='OnLoad(this,"ITM4")' type="text"></td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle"><input name="ITM4" size="105" maxlength="100" onkeyup='OnLoad(this,"ITM5")' type="text"></td>
  </tr>
</table>







<hr>
<p class="MsoNormal" style="word-spacing: 0pt; line-height: 100%; text-indent: 0pt; margin: 0pt;">
<b>(B) INCASE OF REPLACEMENT, HOW THE EXISTING ASSET IS PROPOSED TO BE DEALT 
WITH:</b></p>
<hr>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="25" align="left"><input name="ITM5" size="106" maxlength="100" onkeyup='OnLoad(this,"ITM6")' type="text"></td>
  </tr>
  <tr>
    <td height="25" align="left"><input name="ITM6" size="106" maxlength="100" onkeyup='OnLoad(this,"ITM7")' type="text"></td>
  </tr>
  <tr>
    <td height="25" align="left"><input name="ITM7" size="106" maxlength="100" onkeyup='OnLoad(this,"ITM8")' type="text"></td>
  </tr>
  <tr>
    <td height="25" align="left"><input name="ITM8" size="106" maxlength="100" onkeyup='OnLoad(this,"ITM9")' type="text"></td>
  </tr>
</table>









<hr>
<p class="MsoNormal" style="word-spacing: 0pt; line-height: 100%; text-indent: 0pt; margin: 0pt;">
<b>06. RECOMMENDATIONS WITH COMPLETE DETAILS:</b></p>
<hr>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="25" align="left"><input name="ITM9" size="105" maxlength="100" onkeyup='OnLoad(this,"ITM10")' type="text"></td>
  </tr>
  <tr>
    <td height="25" align="left"><input name="ITM10" size="105" maxlength="100" onkeyup='OnLoad(this,"ITM11")' type="text"></td>
  </tr>
  <tr>
    <td height="25" align="left"><input name="ITM11" size="105" maxlength="100" onkeyup='OnLoad(this,"ITM12")' type="text"></td>
  </tr>
  <tr>
    <td height="25" align="left"><input name="ITM12" size="105" maxlength="100" onkeyup='OnLoad(this,"ITM13")' type="text"></td>
  </tr>
</table>








<hr>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="47%" height="25"><strong>07. FINANCIAL IMPLICATIONS:</strong></td>
    <td width="23%" height="25">&nbsp;</td>
    <td width="30%" height="25">&nbsp;</td>
  </tr>
  <tr>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
  </tr>
  <tr>
    <td height="25">A) COST OF MATERIAL/EQUIPMENT</td>
    <td height="25">&nbsp;</td>
    <td height="25"><input name="FINA" size="26" type="text"></td>
  </tr>
  <tr>
    <td height="25">B) COST OF LABOUR CHARGES</td>
    <td height="25">&nbsp;</td>
    <td height="25"><input name="FINB" size="26" type="text"></td>
  </tr>
  <tr>
    <td height="25">C) ESTIMATED LOSS OF REV.DURING RENOVATION </td>
    <td height="25">&nbsp;</td>
    <td height="25"><input name="FINC" size="26" type="text"></td>
  </tr>
  <tr>
    <td height="25">D) TOTAL (A+B+C+)</td>
    <td height="25">&nbsp;</td>
    <td height="25"><input name="FIND" size="26" type="text"></td>
  </tr>
</table>


<hr>
<p class="MsoNormal" style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center">&nbsp;
<input value="PRINT  PREVIEW" name="pvew"  type="submit" class="ubutton">
</p>

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