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
<form action="Maintenance_Job_Requisition_pp.php" method="get" target="POPUPW" onSubmit="POPUPW = window.open('about:blank','POPUPW', 'height=550,width=1000,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');" enctype="multipart/form-data" >


  <input name="VTI-GROUP" value="0" type="hidden">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="2" align="center"><b>GREEN PARK - <?php echo $_GET[PROP]; ?> </b></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><b>MAINTENANCE JOB REQUISITION</b></td>
    </tr>
    <tr>
      <td height="25" align="left">&nbsp;</td>
      <td height="25" align="left"><span style="padding-right:50px;">Requisition No :</span></td>
    </tr>
    <tr>
      <td width="78%" height="25" align="left">Requested by: <?php echo $_GET[dept]; ?></td>
      <td width="22%" height="25" align="left"><span style="padding-right:50px;">Date :&nbsp; <?php echo $_GET[T1]; ?> </span></td>
    </tr>
    <tr>
      <td height="25" align="left">&nbsp;</td>
      <td height="25" align="left">&nbsp;</td>
    </tr>
  </table>
 
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
    <td height="25" align="left" valign="middle">
    <?php echo $_GET[T5]; ?>
   </td>
    <td height="25" align="left" valign="middle">
    <?php echo $_GET[T9]; ?>
    </td>
    <td height="25" align="left" valign="middle">
    <?php echo $_GET[T13]; ?>
   </td>
    <td height="25" align="left" valign="middle">
    <?php echo $_GET[T17]; ?>
   </td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">2.</td>
    <td height="25" align="left" valign="middle">
    <?php echo $_GET[T6]; ?>
   </td>
    <td height="25" align="left" valign="middle">
    <?php echo $_GET[T10]; ?>
    </td>
    <td height="25" align="left" valign="middle">
    <?php echo $_GET[T14]; ?>
    </td>
    <td height="25" align="left" valign="middle">
    <?php echo $_GET[T18]; ?>
    </td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">3.</td>
    <td height="25" align="left" valign="middle">
    <?php echo $_GET[T7]; ?>
    </td>
    <td height="25" align="left" valign="middle">
    <?php echo $_GET[T11]; ?>
    </td>
    <td height="25" align="left" valign="middle">
    <?php echo $_GET[T15]; ?>
   </td>
    <td height="25" align="left" valign="middle">
    <?php echo $_GET[T19]; ?>
    </td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">4.</td>
    <td height="25" align="left" valign="middle">
    <?php echo $_GET[T8]; ?>
    </td>
    <td height="25" align="left" valign="middle">
    <?php echo $_GET[T12]; ?>
    </td>
    <td height="25" align="left" valign="middle">
    <?php echo $_GET[T16]; ?>
   </td>
    <td height="25" align="left" valign="middle">
    <?php echo $_GET[T20]; ?>
   </td>
  </tr>
  </table>

  
<hr>
  
 
 
 <table width="100%" border="0">
   <tbody><tr>
    <td width="12%" align="center">Remarks:</td>
    <td width="2%" align="right"></td>
    <td width="71%" align="left">
      <p align="left"><?php echo $_GET[DSG]; ?></p></td>
  </tr>
</tbody></table>
<table width="100%" border="0">
  <tbody><tr>
    <td width="3%" align="center">&nbsp;</td>
    <td width="31%" align="center">
      &nbsp;&nbsp;
    </td>
    <td width="8%" align="right"></td>
    <td width="8%" align="right"></td>
    <td width="35%" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td width="3%" align="center">&nbsp;</td>
    <td width="31%" align="left"><?php echo $_GET[DSG]; ?>
      
    </td>
    <td width="8%" align="right"></td>
    <td width="8%" align="right"></td>
    <td width="35%" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td width="3%" align="center">&nbsp;</td>
    <td width="31%" align="center">&nbsp;
      
    </td>
    <td width="8%" align="right"></td>
    <td width="8%" align="right"></td>
    <td width="35%" align="center">&nbsp;</td>
  </tr>
</tbody></table>
<table width="100%" border="0" height="21">
  <tbody><tr>
    <td width="3%" align="center" height="17"></td>
    <td width="47%" align="center" height="17">
      <p align="left">&nbsp;</p>
    </td>
    <td width="35%" align="center" height="17">Unit Head</td>
  </tr>
</tbody></table>
</form>
</body>
</html>