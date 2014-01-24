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
<form action="New_Asset_Handover_Form_pp.php" method="get" target="POPUPW" onSubmit="POPUPW = window.open('about:blank','POPUPW', 'height=550,width=1000,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');" enctype="multipart/form-data" >

  <input name="VTI-GROUP" value="0" type="hidden">
  <p align="center"><b>GREEN PARK - <?php echo $_GET[T1]; ?><u>
    <o:p></o:p>
      </u></b></p>
<p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center"><b>PROJECTS DEPARTMENT</b></p>
  <hr>
  <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt; text-align:center;">&nbsp;&nbsp;&nbsp; STATEMENT OF ASSETS NEWLY MADE AND HANDED-OVER TO USER
  DEPARTMENT</p>
  <hr>
  <p>The Following Assets Have Been Newly Made And Handed - Over To &nbsp;&nbsp;&nbsp;
 <?php echo $_GET[T2]; ?>
  &nbsp; DEPT.<span style="">&nbsp;
  </span>ON&nbsp;<span style=""> 
  <?php echo $_GET[T3]; ?>
  </span></p>
  <hr>
  
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="4%" height="25" align="center" valign="middle" style=" font-size:13px;"><b>S.#.</b></td>
    <td width="29%" height="25" align="left" valign="middle" style=" font-size:13px;"><b>ASSET CLASSIFICATION</b></td>
    <td width="33%" height="25" align="left" valign="middle" style=" font-size:13px;"><b>DESCRIPTION OF FIXED<span style="">&nbsp; </span>ASSETS</b></td>
    <td width="21%" height="25" align="left" valign="middle" style=" font-size:13px;"><b>QUANTITY (UNITS)</b></td>
    <td width="13%" height="25" align="left" valign="middle" style=" font-size:13px;"><b>COST Rs.</b></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" colspan="5"><hr></td>
    
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">1.</td>
    <td height="25" align="left" valign="middle"><?php echo $_GET[T4]; ?></td>
    <td height="25" align="left" valign="middle"><?php echo $_GET[T5]; ?></td>
    <td height="25" align="left" valign="middle"><?php echo $_GET[T6]; ?></td>
    <td height="25" align="left" valign="middle"><?php echo $_GET[T7]; ?></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">2.</td>
    <td height="25" align="left" valign="middle"><?php echo $_GET[T8]; ?></td>
    <td height="25" align="left" valign="middle"><?php echo $_GET[T9]; ?></td>
    <td height="25" align="left" valign="middle"><?php echo $_GET[T10]; ?></td>
    <td height="25" align="left" valign="middle"><?php echo $_GET[T11]; ?></td>
    </tr>
  <tr>
    <td height="25" align="center" valign="middle">3.</td>
    <td height="25" align="left" valign="middle"><?php echo $_GET[T12]; ?></td>
    <td height="25" align="left" valign="middle"><?php echo $_GET[T13]; ?></td>
    <td height="25" align="left" valign="middle"><?php echo $_GET[T14]; ?></td>
    <td height="25" align="left" valign="middle"><?php echo $_GET[T15]; ?></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">4.</td>
    <td height="25" align="left" valign="middle"><?php echo $_GET[T16]; ?></td>
    <td height="25" align="left" valign="middle"><?php echo $_GET[T17]; ?></td>
    <td height="25" align="left" valign="middle"><?php echo $_GET[T18]; ?></td>
    <td height="25" align="left" valign="middle"><?php echo $_GET[T19]; ?></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">5.</td>
    <td height="25" align="left" valign="middle"><?php echo $_GET[T20]; ?></td>
    <td height="25" align="left" valign="middle"><?php echo $_GET[T21]; ?></td>
    <td height="25" align="left" valign="middle"><?php echo $_GET[T22]; ?></td>
    <td height="25" align="left" valign="middle"><?php echo $_GET[T23]; ?></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">6.</td>
    <td height="25" align="left" valign="middle"><?php echo $_GET[T24]; ?></td>
    <td height="25" align="left" valign="middle"><?php echo $_GET[T25]; ?></td>
    <td height="25" align="left" valign="middle"><?php echo $_GET[T26]; ?></td>
    <td height="25" align="left" valign="middle"><?php echo $_GET[T27]; ?></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">7.</td>
    <td height="25" align="left" valign="middle"><?php echo $_GET[T28]; ?></td>
    <td height="25" align="left" valign="middle"><?php echo $_GET[T29]; ?></td>
    <td height="25" align="left" valign="middle"><?php echo $_GET[T30]; ?></td>
    <td height="25" align="left" valign="middle"><?php echo $_GET[T31]; ?></td>
  </tr>
  </table>

  
 
<hr>
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="12%" height="25">&nbsp;</td>
    <td width="1%" height="25" align="center" valign="middle">&nbsp;</td>
    <td width="69%" height="25">&nbsp;</td>
    <td width="18%" height="25" align="right">&nbsp;</td>
  </tr>
  <tr>
    <td height="25">Date</td>
    <td height="25" align="center" valign="middle"><strong>:</strong></td>
    <td height="25">&nbsp;</td>
    <td height="25" align="center">Signature</td>
  </tr>
  <tr>
    <td height="25" colspan="3">Received The Above Mentioned Assets. </td>
    <td height="25" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td height="25">&nbsp;</td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td height="25">Date</td>
    <td height="25" align="center" valign="middle"><strong>:</strong></td>
    <td height="25">&nbsp;</td>
    <td height="25" align="center">Signature</td>
  </tr>
  <tr>
    <td height="25"> Copies To </td>
    <td height="25" align="center" valign="middle"><strong>:</strong></td>
    <td height="25">User Department / F.M / Unit Head / CEO. </td>
    <td height="25">&nbsp;</td>
  </tr>
  <tr>
    <td height="25">&nbsp;</td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
  </tr>
</table>

 
</form>
</body>
</html>