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
<form action="Cash_Payment_or_IOU_voucher_prnt_pp.php" method="get" target="POPUPW" onSubmit="POPUPW = window.open('about:blank','POPUPW', 'height=550,width=1000,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');" enctype="multipart/form-data" >

<p align="center" style="word-spacing: 0pt; text-indent:
0pt; line-height: 200%; margin: 0pt;"><font size="4"><b>Green
Park - <?php echo $_GET[PROP]; ?>
</b></font></p> 
<b><font size="4" style="text-align:center;">(A Unit of GreenPark Hotels And Resorts Limited )</font></b>

  <p align="center"><b>&nbsp; 
  <?php echo $_GET[VTYPE]; ?>
 
  
  </b></p>
  <hr color="#000000" size="1">
  
  <table border="0" width="100%" height="24">
    <tbody>
      <tr>
        <td width="30%" height="20">Voucher Date:</td>
        <td width="30%" height="20"> Voucher No:</td>
        <td width="30%" height="20">Voucher Amount :-</td>
      </tr>
    </tbody>
  </table>
  
  
   <hr color="#000000" size="1">
  
  <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="48%" height="25" align="left" valign="middle">&nbsp;</td>
    <td width="0%" height="25" align="center" valign="middle">:</td>
    <td width="52%" height="25" align="left" valign="middle">
    <?php echo $_GET[VDATE]; ?>    </td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">Payee</td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left" valign="middle">
    <?php echo $_GET[VPAYEE]; ?>
    </td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">Towards</td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left" valign="middle">
    <?php echo $_GET[VTOW1]; ?>
    </td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">&nbsp;</td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25" align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">&nbsp;</td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25" align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">&nbsp;</td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25" align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">&nbsp;</td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">Rs.in Words</td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">&nbsp;</td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25" align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="25" colspan="3" align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
     <tr>
        <td align="left" valign="middle" colspan="3"><hr /></td>
       
      </tr>
      <tr>
        <td width="37%" align="left" valign="middle">GL/SL Code</td>
        <td width="41%" height="25" align="left" valign="middle"><strong>Head of Acocunt</strong></td>
        <td width="22%" height="25" align="left" valign="middle"><strong>Rs.</strong></td>
      </tr>
      <tr>
        <td align="left" valign="middle" colspan="3"><hr /></td>
       
      </tr>
      <tr>
        <td align="left" valign="middle">&nbsp;</td>
        <td height="25" align="left" valign="middle">
        <?php echo $_GET[HOA1]; ?>        </td>
        <td height="25" align="left" valign="middle">
        <?php echo $_GET[HAMT1]; ?>        </td>
      </tr>
      <tr>
        <td align="left" valign="middle">&nbsp;</td>
        <td height="25" align="left" valign="middle">
        <?php echo $_GET[HOA2]; ?>        </td>
        <td height="25" align="left" valign="middle">
        <?php echo $_GET[HAMT2]; ?>        </td>
      </tr>
      <tr>
        <td align="left" valign="middle">&nbsp;</td>
        <td height="25" align="left" valign="middle">
        <?php echo $_GET[HOA3]; ?>        </td>
        <td height="25" align="left" valign="middle">
        <?php echo $_GET[HAMT3]; ?>        </td>
      </tr>
      <tr>
        <td align="left" valign="middle">&nbsp;</td>
        <td height="25" align="left" valign="middle">
        <?php echo $_GET[HOA4]; ?>        </td>
        <td height="25" align="left" valign="middle">
        <?php echo $_GET[HAMT4]; ?>       </td>
      </tr>
    </table></td>
    </tr>
  <tr>
    <td height="25" align="left" valign="middle" colspan="3"><hr /></td>
    
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">&nbsp;</td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25" align="center" valign="middle">Total Amount :</td>
  </tr>
 <tr>
    <td height="25" align="left" valign="middle" colspan="3"><hr /></td>
    
  </tr>
  <tr>
    <td height="25" colspan="3" align="center" valign="top"><table width="80%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center" valign="middle">&nbsp;</td>
        <td align="center" valign="middle">&nbsp;</td>
        <td align="center" valign="middle">&nbsp;</td>
      </tr>
      <tr>
        <td align="center" valign="middle"><span style="line-height: 100%; margin-top: 0pt; margin-bottom: 0pt;">Prepared
  by</span></td>
        <td align="center" valign="middle"><span style="line-height: 100%; margin-top: 0pt; margin-bottom: 0pt;">Passed
  by</span></td>
        <td align="center" valign="middle"><span style="line-height: 100%; margin-top: 0pt; margin-bottom: 0pt;">Authorised
  by</span></td>
      </tr>
      <tr>
        <td align="center" valign="middle">&nbsp;</td>
        <td align="center" valign="middle">&nbsp;</td>
        <td align="center" valign="middle">&nbsp;</td>
      </tr>
      <tr>
        <td align="center" valign="middle">&nbsp;</td>
        <td align="center" valign="middle">&nbsp;</td>
        <td align="center" valign="middle">&nbsp;</td>
      </tr>
      <tr>
        <td align="center" valign="middle"><span style="line-height: 100%; margin-top: 0pt; margin-bottom: 0pt;">Cashier</span></td>
        <td align="center" valign="middle">&nbsp;</td>
        <td align="center" valign="middle"><span style="line-height: 100%; margin-top: 0pt; margin-bottom: 0pt;">Received by</span></td>
      </tr>
    </table></td>
    </tr>
  <tr>
    <td height="25" align="left" valign="middle">&nbsp;</td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25" align="left" valign="middle">&nbsp;</td>
  </tr>
  </table>



</form>
</body>
</html>