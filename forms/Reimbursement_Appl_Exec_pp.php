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
<form action="Reimbursement_Appl_Exec_pp.php" method="get" target="POPUPW" onSubmit="POPUPW = window.open('about:blank','POPUPW', 'height=550,width=1000,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');" enctype="multipart/form-data" >
 
  <input name="VTI-GROUP" value="0" type="hidden">

 

  <p align="center"><b>GREEN PARK - <?php echo $_GET[PROP]; ?>
  
  </b></p>
  <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center"><b>Reimbursement Appl Exec</b></p>
  <hr color="#000000" size="1">
  <table width="100%" border="0" cellspacing="5" cellpadding="0">
    <tr>
      <td width="10%" align="left">From</td>
      <td width="28%" align="left"><?php echo $_GET[T1]; ?></td>
      <td width="62%" align="left">TO : H.O.D FINANCE</td>
    </tr>
    <tr>
      <td align="left">Designation</td>
      <td align="left"><?php echo $_GET[DESG]; ?></td>
      <td align="left">&nbsp;</td>
    </tr>
    <tr>
      <td align="left">Date</td>
      <td align="left"><?php echo $_GET[T2]; ?></td>
      <td align="left">&nbsp;</td>
    </tr>
    <tr>
      <td align="left">&nbsp;</td>
      <td align="left">&nbsp;</td>
      <td align="left">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3" align="left" valign="middle">Dear Sir,</td>
    </tr>
    <tr>
      <td colspan="3" align="left"> I request you to kindly arrange for the reimbursement of&nbsp; the following:  </td>
    </tr>
  </table>
  
<hr color="#000000" size="1">
  
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="2%" height="25" align="center" valign="middle">&nbsp;</td>
    <td width="32%" height="25" align="center" valign="middle">&nbsp;</td>
    <td width="1%" height="25" align="center" valign="middle">&nbsp;</td>
    <td width="17%" height="25" align="center" valign="middle"><b>Amount Rs.</b></td>
    <td width="22%" height="25" align="center" valign="middle"><b>Bills Evclosed Rs.</b></td>
    <td width="26%" height="25" align="center" valign="middle"><b>Period </b></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">1.</td>
    <td height="25" align="left" valign="middle">Medical Expenses </td>
    <td height="25" align="center" valign="middle"><strong>:</strong></td>
    <td height="25" align="right" valign="middle"><?php echo $_GET[T3]; ?></td>
    <td height="25" align="right" valign="middle"><?php echo $_GET[T4]; ?></td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[T5]; ?></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">2.</td>
    <td height="25" align="left" valign="middle"> Uniform &amp; Washing Expenses </td>
    <td height="25" align="center" valign="middle"><strong>:</strong></td>
    <td height="25" align="right" valign="middle"><?php echo $_GET[T6]; ?></td>
    <td height="25" align="right" valign="middle"><?php echo $_GET[T7]; ?></td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[T8]; ?></td>
    </tr>
  <tr>
    <td height="25" align="center" valign="middle">3.</td>
    <td height="25" align="left" valign="middle">Professional Pursuit </td>
    <td height="25" align="center" valign="middle"><strong>:</strong></td>
    <td height="25" align="right" valign="middle"><?php echo $_GET[T9]; ?></td>
    <td height="25" align="right" valign="middle"><?php echo $_GET[T10]; ?></td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[T11]; ?></td>
    </tr>
  <tr>

    <td height="25" align="center" valign="middle">4.</td>
    <td height="25" align="left" valign="middle">Telephone Expenses </td>
    <td height="25" align="center" valign="middle"><strong>:</strong></td>
    <td height="25" align="right" valign="middle"><?php echo $_GET[T12]; ?></td>
    <td height="25" align="right" valign="middle"><?php echo $_GET[T13]; ?></td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[T14]; ?></td>
    </tr>
  <tr>
    <td height="25" align="center" valign="middle">5.</td>
    <td height="25" align="left" valign="middle">Leave Travel Allowance </td>
    <td height="25" align="center" valign="middle"><strong>:</strong></td>
    <td height="25" align="right" valign="middle"><?php echo $_GET[T15]; ?></td>
    <td height="25" align="right" valign="middle"><?php echo $_GET[T16]; ?></td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[T17]; ?></td>
    </tr>
  </table>

<p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="left">&nbsp;&nbsp;&nbsp;</p>
<p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="left">&nbsp;&nbsp;&nbsp;
  <strong>Thanks &amp; Regards,</strong></p>
<p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="left">&nbsp;&nbsp;&nbsp;
  </p>
<p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="left">&nbsp;</p>
<p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center">&nbsp;&nbsp;&nbsp;</p>
</form>
</body>
</html>