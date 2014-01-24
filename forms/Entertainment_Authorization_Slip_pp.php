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
<form action="Entertainment_Authorization_Slip_pp.php" method="get" target="POPUPW" onSubmit="POPUPW = window.open('about:blank','POPUPW', 'height=550,width=1000,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');" enctype="multipart/form-data" >
 
  <input name="VTI-GROUP" value="0" type="hidden">

<p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center">&nbsp;</p>

<p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center"><font size="4"><b>Green
Park - <?php echo $_GET[PROP]; ?>
</b></font></p>

<p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center">&nbsp;&nbsp;</p>
  <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center"><b><font size="4">ENTERTAINMENT
  AUTHORIZATION&nbsp;</font></b></p>
  <hr color="#000000" noshade="noshade">
  
  <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="49%" height="25"><strong>A. Details Of The Proposer </strong></td>
    <td width="2%" height="25" align="center" valign="middle">&nbsp;</td>
    <td width="49%" height="25"></td>
  </tr>
  <tr>
    <td height="25">i) Name Of The Proposer </td>
    <td height="25" align="center" valign="middle"><strong>:</strong></td>
    <td height="25"><?php echo $_GET[T1]; ?></td>
  </tr>
  <tr>
    <td height="25">2. Designation </td>
    <td height="25" align="center" valign="middle"><strong>:</strong></td>
    <td height="25"><?php echo $_GET[T2]; ?></td>
  </tr>
  <tr>
    <td height="25">3. <span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">Department </span></td>
    <td height="25" align="center" valign="middle"><strong>:</strong></td>
    <td height="25"><?php echo $_GET[T3]; ?></td>
  </tr>
  <tr>
    <td height="25" colspan="3"><hr /></td>
    
  </tr>
  <tr>
    <td height="25"><b>B. Details Of The Guest </b></td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25">&nbsp;</td>
  </tr>
  <tr>
    <td height="25"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;">1. </span><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;">Property Name </span></td>
    <td height="25" align="center" valign="middle"><strong>:</strong></td>
    <td height="25">
    <?php echo $_GET[D1]; ?>
   </td>
  </tr>
  <tr>
    <td height="25"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">2.</span> <span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">Name Of The Guest </span></td>
    <td height="25" align="center" valign="middle"><strong>:</strong></td>
    <td height="25"><?php echo $_GET[T4]; ?></td>
  </tr>
  <tr>
    <td height="25"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">3.</span> <span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">Company Name </span></td>
    <td height="25" align="center" valign="middle"><strong>:</strong></td>
    <td height="25"><?php echo $_GET[T5]; ?></td>
  </tr>
  <tr>
    <td height="25"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">4. D.O.A</span></td>
    <td height="25" align="center" valign="middle"><strong>:</strong></td>
    <td height="25"><?php echo $_GET[T6]; ?>
  <span style="padding-left:55px;">  Time: <?php echo $_GET[T7]; ?></span></td>
  </tr>
  <tr>
    <td height="25">5. <span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">Room / F&amp;B
    Outlet</span></td>
    <td height="25" align="center" valign="middle"><strong>:</strong></td>
    <td height="25"><?php echo $_GET[T8]; ?></td>
  </tr>
  <tr>
    <td height="25">6. Pax </td>
    <td height="25" align="center" valign="middle"><strong>:</strong></td>
    <td height="25"><?php echo $_GET[PAX]; ?></td>
  </tr>
  <tr>
    <td height="25">7. <span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">Billing Instructions </span></td>
    <td height="25" align="center" valign="middle"><strong>:</strong></td>
    <td height="25"><?php echo $_GET[T9]; ?></td>
  </tr>
  <tr>
    <td height="25">8. <span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">Reason </span></td>
    <td height="25" align="center" valign="middle"><strong>:</strong></td>
    <td height="25"><?php echo $_GET[T10]; ?></td>
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
  <tr>
    <td height="25" colspan="3" align="center"><table width="100%" height="24" border="0" cellpadding="0" cellspacing="0">
      <tbody>
        <tr>
          <td width="50%" height="20"></td>
          <td width="50%" height="20" align="right" valign="middle" style="padding-right:50px;">Unit Head</td>
        </tr>
      </tbody>
    </table></td>
    </tr>
  </table>


  
</form>
</body>
</html>
