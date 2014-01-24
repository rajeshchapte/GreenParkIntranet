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
<form action="Inter_Unit_Stock_Transfer_Advice_pp.php" method="get" target="POPUPW" onSubmit="POPUPW = window.open('about:blank','POPUPW', 'height=550,width=1000,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');" enctype="multipart/form-data" >
  
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="82%" height="25" align="center"><font size="4"><b>Green Park - <?php echo $_GET[PROP]; ?> </b></font></td>
    <td width="18%" height="25" align="left"><span style="padding-right:50px;"><b>No : </b></span></td>
  </tr>
  <tr>
    <td height="25" align="center"><b>INTER UNIT STOCK TRANSFER ADVICE</b></td>
    <td height="25" align="left"><b>Date : <?php echo $_GET[D1]; ?> <u> </u></b></td>
  </tr>
  <tr>
    <td height="25" align="center">&nbsp;</td>
    <td height="25" align="left">&nbsp;</td>
  </tr>
</table>

<hr>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="25" align="center" valign="middle"><b>S.#.</b></td>
    <td height="25" align="center" valign="middle"><b>MATERIAL&nbsp; DESCRIPTION</b></td>
    <td height="25" align="center" valign="middle"><b>UOM</b></td>
    <td height="25" align="center" valign="middle"><b>QTY</b></td>
    <td height="25" align="center" valign="middle"><b>RATE</b></td>
    <td height="25" align="center" valign="middle"><b>VALUE</b></td>
    <td height="25" align="center" valign="middle"><b>REMARKS</b></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">1.</td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD1]; ?></td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD2]; ?></td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD3]; ?></td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD4]; ?></td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD5]; ?></td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD6]; ?></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">2.</td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD7]; ?></td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD8]; ?></td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD9]; ?></td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD10]; ?></td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD11]; ?></td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD12]; ?></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">3.</td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD13]; ?></td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD14]; ?></td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD15]; ?></td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD16]; ?></td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD17]; ?></td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD18]; ?></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">4.</td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD19]; ?></td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD20]; ?></td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD21]; ?></td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD22]; ?></td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD23]; ?></td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD24]; ?></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">5.</td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD25]; ?></td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD26]; ?></td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD27]; ?></td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD28]; ?></td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD29]; ?></td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD30]; ?></td>
  </tr>
  </table>

  
  
  
  
<hr>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="17%" height="25" align="left" valign="middle">Insurance Agency</td>
    <td width="1%" height="25" align="center" valign="middle">:</td>
    <td width="82%" height="25" align="left" valign="middle"><?php echo $_GET[IAN]; ?></td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">Insured Amount</td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left" valign="middle"><?php echo $_GET[IAMT]; ?></td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">Reference</td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left" valign="middle"><?php echo $_GET[IREF]; ?></td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">&nbsp;</td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25" align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle" colspan="3"><hr /></td>
   
  </tr>
  <tr>
    <td height="25" colspan="3" align="left" valign="middle"><b>*NOTE :</b>&nbsp;&nbsp;In case material transfer is done by procuring material directly from
  outside,<br />
   please mention party's Name, Address, Bill No., Date and value</td>
    </tr>
  <tr>
    <td height="25" colspan="3" align="center" valign="top"><table width="80%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="32%" height="30" align="center" valign="middle">&nbsp;</td>
        <td width="35%" height="30" align="center" valign="middle">&nbsp;</td>
        <td width="33%" height="30" align="center" valign="middle">&nbsp;</td>
      </tr>
      <tr>
        <td height="30" align="center" valign="middle">Prepared by</td>
        <td height="30" align="center" valign="middle">Passed By</td>
        <td height="30" align="center" valign="middle">Approved By</td>
      </tr>
      <tr>
        <td height="30" align="center" valign="middle">Main Stores</td>
        <td height="30" align="center" valign="middle">Accounts</td>
        <td height="30" align="center" valign="middle">H.O.D - Finance</td>
      </tr>
      <tr>
        <td height="30" align="center" valign="middle">&nbsp;</td>
        <td height="30" align="center" valign="middle">&nbsp;</td>
        <td height="30" align="center" valign="middle">&nbsp;</td>
      </tr>
      <tr>
        <td height="30" valign="middle" colspan="3"><b>Note :&nbsp;&nbsp; </b>&nbsp; To be prepared in Quadruplicate</td>
      </tr>
      <tr>
        <td height="30" align="center" valign="middle">&nbsp;</td>
        <td height="30" align="center" valign="middle">&nbsp;</td>
        <td height="30" align="center" valign="middle">&nbsp;</td>
      </tr>
      <tr>
        <td height="30" align="left" valign="middle"><p>Distribution : </p></td>
        <td height="30" align="left" valign="middle">&nbsp;</td>
        <td height="30" align="left" valign="middle">&nbsp;</td>
      </tr>
      <tr>
        <td height="30" align="center" valign="middle" colspan="3"><table width="90%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="30" align="left" valign="middle">Original</td>
            <td height="30" align="left" valign="middle">- GPV/GPC&nbsp; Along With The Mterial.</td>
          </tr>
          <tr>
            <td height="30" align="left" valign="middle">Duplicate</td>
            <td height="30" align="left" valign="middle">-    A/C S Dept. GPH.</td>
          </tr>
          <tr>
            <td height="30" align="left" valign="middle">Triplicate</td>
            <td height="30" align="left" valign="middle">-    HRD / Security.</td>
          </tr>
          <tr>
            <td height="30" align="left" valign="middle">Master Copy</td>
            <td height="30" align="left" valign="middle">-    Main Stores, GPH.</td>
          </tr>
          <tr>
            <td height="30" align="left" valign="middle">&nbsp;</td>
            <td height="30" align="left" valign="middle">&nbsp;</td>
          </tr>
        </table></td>
       
      </tr>
	  </table>
	  </td>
  </tr>
  <tr>
    <td height="25" colspan="3" align="left" valign="middle">&nbsp;</td>
  </tr>
</table>

  
</form>
</body>
</html>