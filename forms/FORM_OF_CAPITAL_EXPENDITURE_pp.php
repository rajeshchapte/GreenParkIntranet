<?php
error_reporting(E_ALL ^ E_NOTICE);
?>
<html>
<head>
<script type="text/javascript" language="Javascript1.2">
<!--
function printpage() {
window.print();
}
//-->
</script>
<style>
  .col4 {
    float: left;
    margin-right: .5%;
    width: 65%; 
	background-color:#f3f3f3;
	padding:15px;
  }
</style>

</head>
<body onLoad="printpage()">
<form action="FORM_OF_CAPITAL_EXPENDITURE_pp.php" method="get" target="POPUPW" onSubmit="POPUPW = window.open('about:blank','POPUPW', 'height=550,width=1000,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');" enctype="multipart/form-data" >
  
<p class="MsoSubtitle" style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center">&nbsp;</p>
<p class="MsoSubtitle" style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center">
<b>FORM OF CAPITAL EXPENDITURE&nbsp;</b></p>

<table id="table3" height="75" width="100%" border="0" bordercolor="#ffffff" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td height="25" colspan="2">&nbsp;</td>
    </tr>
    <tr> 
    <td height="25" width="564" style="border-bottom:1px solid #000000;border-top:1px solid #000000; font-size:13px;">
REF: PROPOSAL NO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php echo $_GET[RPOSN1]; ?></td><td bordercolor="#FFFFFF" height="25" width="322" style="border-bottom:1px solid #000000;border-top:1px solid #000000;">
    DATE:&nbsp; <?php echo $_GET[FDATE]; ?>&nbsp;&nbsp;
    </td>
  </tr>
    <tr>
      <td height="25" colspan="2" align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        
        <tr>
          <td width="39%" height="25" style="border-bottom:1px solid #000000;border-top:0px solid #000000; font-size:13px;"><strong>01. UNIT NAME</strong></td>
          <td width="1%" height="25" align="center" valign="middle" style="border-bottom:1px solid #000000;border-top:0px solid #000000;">:</td>
          <td width="60%" height="25" style="border-bottom:1px solid #000000;border-top:0px solid #000000; font-size:13px;"><b>GREEN PARK - </b><?php echo $_GET[D1]; ?></td>
        </tr>
        
        <tr>
          <td height="25" style="border-bottom:1px solid #000000;border-top:0px solid #000000; font-size:13px;"><strong>02. PROPOSING DEPARTMENT</strong></td>
          <td height="25" align="center" valign="middle" style="border-bottom:1px solid #000000;border-top:0px solid #000000;">:</td>
          <td height="25" style="border-bottom:1px solid #000000;border-top:0px solid #000000;"><?php echo $_GET[dept]; ?></td>
        </tr>
        
        <tr>
          <td height="25" style="border-bottom:1px solid #000000;border-top:px solid #000000; font-size:13px;"><strong>03. NATURE OF WORK</strong></td>
          <td height="25" align="center" valign="middle" style="border-bottom:1px solid #000000;border-top:0px solid #000000;">:</td>
          <td height="25" style="border-bottom:1px solid #000000;border-top:0px solid #000000;"><?php echo $_GET[dept0]; ?></td>
        </tr>
        <tr>
          <td height="25" colspan="3">&nbsp;</td>
        </tr>
        <tr>
          <td height="25" style="font-size:13px;"><strong>04. PURPOSE BRIEF</strong></td>
          <td height="25" align="center" valign="middle">:</td>
          <td height="25"><?php echo $_GET[PURP1]; ?></td>
        </tr>
        <tr>
          <td height="25" style="font-size:13px;">&nbsp;</td>
          <td height="25" align="center" valign="middle">&nbsp;</td>
          <td height="25">&nbsp;</td>
        </tr>
      </table></td>
      </tr>
  </tbody>
</table>


<hr>
<b>05. Capital Item (S)
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
		S.NO.</p>
    </td>
    <td height="25" width="372" align="center">
      Description of Item</td>
    <td height="25" width="80" align="center">
      <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center">Qty</p>
    </td>
    <td height="25" width="113" align="center">
      <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center">Unit
      Cost Rs.</p>
    </td>
    <td height="25" width="160" align="center">
      <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center">Total
      Cost Incl.All Taxes Rs.</p>
    </td>
  </tr>
  <tr>
    <td height="25" width="31" align="center">
      1</td>
    <td height="25" width="372" align="center">
      &nbsp;<!--webbot bot="Validation"
      b-value-required="TRUE" i-maximum-length="50" --><?php echo $_GET[DNM1]; ?></td>
    <td height="25" width="80" align="center">
      <!--webbot bot="Validation" s-data-type="Number" s-number-separators=",."
      b-value-required="TRUE" i-maximum-length="6" --><?php echo $_GET[DQTY1]; ?></td>
    <td height="25" width="113" align="center">
      <!--webbot bot="Validation" s-data-type="Number" s-number-separators=",."
      b-value-required="TRUE" i-maximum-length="9" --><?php echo $_GET[DUP1]; ?></td>
    <td height="25" width="160" align="center">
      <!--webbot bot="Validation" s-data-type="Number" s-number-separators=",."
      b-value-required="TRUE" i-maximum-length="10" --><?php echo $_GET[DTOC1]; ?></td>
  </tr>
  <tr>
    <td height="25" width="31" align="center">
      2</td>
    <td height="25" width="372" align="center">
      &nbsp;<!--webbot bot="Validation"
      b-value-required="TRUE" i-maximum-length="50" --><?php echo $_GET[DNM2]; ?></td>
    <td height="25" width="80" align="center">
      <!--webbot bot="Validation" s-data-type="Number" s-number-separators=",."
      b-value-required="TRUE" i-maximum-length="6" --><?php echo $_GET[DQTY2]; ?></td>
    <td height="25" width="113" align="center">
      <!--webbot bot="Validation" s-data-type="Number" s-number-separators=",."
      b-value-required="TRUE" i-maximum-length="9" --><?php echo $_GET[DUP2]; ?></td>
    <td height="25" width="160" align="center">
      <!--webbot bot="Validation" s-data-type="Number" s-number-separators=",."
      b-value-required="TRUE" i-maximum-length="10" --><?php echo $_GET[DTOC2]; ?></td>
  </tr>
  <tr>
    <td height="25" width="31" align="center">
      3</td>
<td height="25" width="372" align="center">
      &nbsp;<!--webbot bot="Validation"
      b-value-required="TRUE" i-maximum-length="50" --><?php echo $_GET[DNM3]; ?></td>
    <td height="25" width="80" align="center">
      <!--webbot bot="Validation" s-data-type="Number" s-number-separators=",."
      b-value-required="TRUE" i-maximum-length="6" --><?php echo $_GET[DQTY3]; ?></td>
    <td height="25" width="113" align="center">
      <!--webbot bot="Validation" s-data-type="Number" s-number-separators=",."
      b-value-required="TRUE" i-maximum-length="9" --><?php echo $_GET[DUP3]; ?></td>
    <td height="25" width="160" align="center">
      <!--webbot bot="Validation" s-data-type="Number" s-number-separators=",."
      b-value-required="TRUE" i-maximum-length="10" --><?php echo $_GET[DTOC3]; ?></td>
  </tr>
  <tr>
    <td height="25" width="31" align="center">
      4</td>
    <td height="25" width="372" align="center">
      &nbsp;<!--webbot bot="Validation"
      b-value-required="TRUE" i-maximum-length="20" --><?php echo $_GET[DNM4]; ?></td>
    <td height="25" width="80" align="center">
      &nbsp;<!--webbot bot="Validation"
      s-data-type="Number" s-number-separators=",." b-value-required="TRUE"
      i-maximum-length="6" --><?php echo $_GET[DQTY4]; ?></td>
    <td height="25" width="113" align="center">
      &nbsp;<!--webbot bot="Validation"
      s-data-type="Number" s-number-separators=",." b-value-required="TRUE"
      i-maximum-length="9" --><?php echo $_GET[DUP4]; ?></td>
    <td height="25" width="160" align="center">
      &nbsp;<!--webbot bot="Validation"
      s-data-type="Number" s-number-separators=",." b-value-required="TRUE"
      i-maximum-length="10" --><?php echo $_GET[DTOC4]; ?></td>
  </tr>
  <tr>
    <td height="25" width="31" align="center">
      5</td>
    <td height="25" width="372" align="center">
      &nbsp;<!--webbot bot="Validation"
      b-value-required="TRUE" i-maximum-length="20" --><?php echo $_GET[DNM5]; ?></td>
    <td height="25" width="80" align="center">
      &nbsp;<!--webbot bot="Validation"
      s-data-type="Number" s-number-separators=",." b-value-required="TRUE"
      i-maximum-length="6" --><?php echo $_GET[DQTY5]; ?></td>
    <td height="25" width="113" align="center">
      &nbsp;<!--webbot bot="Validation"
      s-data-type="Number" s-number-separators=",." b-value-required="TRUE"
      i-maximum-length="9" --><?php echo $_GET[DUP5]; ?></td>
    <td height="25" width="160" align="center">
      &nbsp;<!--webbot bot="Validation"
      s-data-type="Number" s-number-separators=",." b-value-required="TRUE"
      i-maximum-length="10" --><?php echo $_GET[DTOC5]; ?></td>
  </tr>
  <tr>
    <td height="25" width="31" align="center">
      6</td>
    <td height="25" width="372" align="center">
      &nbsp;<!--webbot bot="Validation"
      b-value-required="TRUE" i-maximum-length="20" --><?php echo $_GET[DNM6]; ?></td>
    <td height="25" width="80" align="center">
      &nbsp;<!--webbot bot="Validation"
      s-data-type="Number" s-number-separators=",." b-value-required="TRUE"
      i-maximum-length="6" --><?php echo $_GET[DQTY6]; ?></td>
    <td height="25" width="113" align="center">
      &nbsp;<!--webbot bot="Validation"
      s-data-type="Number" s-number-separators=",." b-value-required="TRUE"
      i-maximum-length="9" --><?php echo $_GET[DUP6]; ?></td>
    <td height="25" width="160" align="center">
      &nbsp;<!--webbot bot="Validation"
      s-data-type="Number" s-number-separators=",." b-value-required="TRUE"
      i-maximum-length="10" --><?php echo $_GET[DTOC6]; ?></td>
  </tr>
</tbody></table>

<hr>
<p class="MsoNormal" style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt; font-size:13px;">
<b>(A) ANY ALTERNATIVES CONSIDERED FOR THE ABOVE:</b></p>
<hr>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="25" align="left" valign="middle"><?php echo $_GET[ITM1]; ?></td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle"><?php echo $_GET[ITM2]; ?></td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle"><?php echo $_GET[ITM3]; ?></td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle"><?php echo $_GET[ITM4]; ?></td>
  </tr>
</table>

<hr>


<p class="MsoNormal" style="word-spacing: 0pt; line-height: 100%; text-indent: 0pt; margin: 0pt; font-size:13px;">
<b>(B) INCASE OF REPLACEMENT, HOW THE EXISTING ASSET IS PROPOSED TO BE DEALT 
WITH:</b></p>
<hr>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="25" align="left"><?php echo $_GET[ITM5]; ?></td>
  </tr>
  <tr>
    <td height="25" align="left"><?php echo $_GET[ITM6]; ?></td>
  </tr>
  <tr>
    <td height="25" align="left"><?php echo $_GET[ITM7]; ?></td>
  </tr>
  <tr>
    <td height="25" align="left"><?php echo $_GET[ITM8]; ?></td>
  </tr>
</table>

<hr>
<p class="MsoNormal" style="word-spacing: 0pt; line-height: 100%; text-indent: 0pt; margin: 0pt; font-size:13px;">
<b>06. RECOMMENDATIONS WITH COMPLETE DETAILS:</b></p>
<hr>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="25" align="left"><?php echo $_GET[ITM9]; ?></td>
  </tr>
  <tr>
    <td height="25" align="left"><?php echo $_GET[ITM10]; ?></td>
  </tr>
  <tr>
    <td height="25" align="left"><?php echo $_GET[ITM11]; ?></td>
  </tr>
  <tr>
    <td height="25" align="left"><?php echo $_GET[ITM12]; ?></td>
  </tr>
</table>

<hr>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="25" align="left" colspan="3">(Comparative statement along with necessary Quotations need to be enclosed. All columns to be filled with proper details.) </td>
    
  </tr>
  <tr>
    <td height="25" align="left" style="border-bottom:1px solid #000000;border-top:1px solid #000000;">&nbsp;</td>
    <td height="25" align="center" valign="middle" style="border-bottom:1px solid #000000;border-top:1px solid #000000;">&nbsp;</td>
    <td height="25" align="left" style="border-bottom:1px solid #000000;border-top:1px solid #000000;">&nbsp;</td>
  </tr>
  <tr>
    <td width="49%" height="25" align="left" style="font-size:13px;"><strong>07. FINANCIAL IMPLICATIONS:</strong></td>
    <td width="1%" height="25" align="center" valign="middle">&nbsp;</td>
    <td width="50%" height="25" align="left">&nbsp;</td>
  </tr>
  <tr>
    <td height="25" align="left" colspan="3"><hr /></td>
    
  </tr>
  <tr>
    <td height="25" align="left">A) COST OF MATERIAL/EQUIPMENT</td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left"><?php echo $_GET[FINA]; ?></td>
  </tr>
  <tr>
    <td height="25" align="left">B) COST OF LABOUR CHARGES</td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left"><?php echo $_GET[FINB]; ?></td>
  </tr>
  <tr>
    <td height="25" align="left">C) ESTIMATED LOSS OF REV.DURING RENOVATION </td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left"><?php echo $_GET[FINC]; ?></td>
  </tr>
  <tr>
    <td height="25" align="left" style="padding-left:25px;">TOTAL (A+B+C+)</td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left"><?php echo $_GET[FIND]; ?></td>
  </tr>
  <tr>
    <td height="25" align="left">&nbsp;</td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25" align="left">&nbsp;</td>
  </tr>
  <tr>
    <td height="25" colspan="3" align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><b>H.O.D</b></td>
        <td><b>CHIEF ENGINEER/PROJECT INCHARGE</b></td>
        <td><b>PURCHASE MANAGER</b></td>
      </tr>
      <tr>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
        <td height="30">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><b>FINANCE MANAGER</b></td>
        <td><b>UNIT HEAD</b></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3" align="left" valign="middle"><p><span style="font-weight: 700;">GM - BPM | GM - ENGINEERING |</span>&nbsp; <span style=""><b>GM -
          MATERIALS</b></span></p>
          <span style="">
          <hr>
          
          <p> <b>  APPROVED / NOT APPROVED</b></p>
          </span></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center"><b>V.P.O</b></td>
        <td align="center">V.P.F</td>
        <td align="center">CEO</td>
      </tr>
    </table></td>
    </tr>
</table>




</form>
</body>
</html>

