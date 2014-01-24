<?php
error_reporting(E_ALL ^ E_NOTICE);
?>
<!DOCTYPE html
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
<form action="Car_Requisition_prnt_pp.php" method="get" target="POPUPW" onSubmit="POPUPW = window.open('about:blank','POPUPW', 'height=550,width=1000,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');" enctype="multipart/form-data" >

  <input name="VTI-GROUP" value="0" type="hidden">
  
  <p align="center"><b>GREEN PARK - <?php echo $_GET[PROP]; ?><u>
  </u></b></p>
  <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center"><b>REQUISITION&nbsp;
  FOR&nbsp; CAR&nbsp; FROM&nbsp; 
  <?php echo $_GET[TRVLS]; ?>
  
  
  </b></p>
  <hr />
  
  <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="32%" height="25" align="left" valign="middle">1. Name Of The Officeal Booking The Car </td>
    <td width="2%" height="25" align="center" valign="middle">:</td>
    <td width="66%" height="25" align="left" valign="middle">
    <?php echo $_GET[T1]; ?>    </td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">2. Designation </td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left" valign="middle">
    <?php echo $_GET[T2]; ?>

    </td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">3. Department </td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left" valign="middle">
    <?php echo $_GET[T3]; ?>

    </td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">4. Purpose For </td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left" valign="middle">
    <?php echo $_GET[T4]; ?>

    </td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">5. Vehicle is Required </td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left" valign="middle">
    <?php echo $_GET[T5]; ?>
      
    </td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">6. Car Number </td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left" valign="middle">
      <?php echo $_GET[T6]; ?>
    </td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">7. Required On </td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left" valign="middle">
     <?php echo $_GET[T7]; ?>
    </td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">8.Required At </td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left" valign="middle">
      <?php echo $_GET[T8]; ?>
    </td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">9. Place To Visit </td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left" valign="middle">
      <?php echo $_GET[T9]; ?>
    </td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">10. Mode Og payment </td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left" valign="middle">
     <?php echo $_GET[T10]; ?>
    </td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">11. Starting Meter Reading </td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left" valign="middle">
     <?php echo $_GET[T11]; ?>
    </td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">12. Closing Meter Reading </td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left" valign="middle">
      <?php echo $_GET[T12]; ?>
    </td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">&nbsp;</td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25" align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="50" align="left" valign="middle">&nbsp;</td>
    <td height="50" align="center" valign="middle">&nbsp;</td>
    <td height="50" align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle"><span style="word-spacing: 1px; line-height: 100%; text-indent: 0pt; margin: 1px 0pt;">Sign
Of Official</span></td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25" align="center" valign="middle"><span style="word-spacing: 1px; line-height: 100%; text-indent: 0pt; margin: 1px 0pt;">Sign Of Duty Manager</span></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle"><span style="word-spacing: 1px; line-height: 100%; text-indent: 0pt; margin: 1px 0pt;">Sign Of Security Incharge</span></td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25" align="center" valign="middle"><span style="word-spacing: 1px; line-height: 100%; text-indent: 0pt; margin: 1px 0pt;">Sign Of H.O.D - Front Office</span></td>
  </tr>
  </table>

 
<hr>
 

<script language="JavaScript">
document.RCF.T1.focus();
document.RCF.T1.focus();
</script>


</form>
</body>
</html>
