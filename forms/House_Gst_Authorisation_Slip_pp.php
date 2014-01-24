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
<form action="House_Gst_Authorisation_Slip_pp.php" method="get" target="POPUPW" onSubmit="POPUPW = window.open('about:blank','POPUPW', 'height=550,width=1000,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');" enctype="multipart/form-data" >
 
  <input name="VTI-GROUP" value="0" type="hidden">



<p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center"><font size="4"><b>Green
Park - <?php echo $_GET[PROP]; ?></b></font></p>

<p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center">&nbsp;&nbsp;</p>

<p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center"><b>WASH
&amp; CHANGE / HOUSE GST AUTHORISATION SLIP</b></p>
  <hr noshade="noshade" color="#000000">
  <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="49%" height="25"><b>A. DETAILS OF THE PROPOSER</b></td>
    <td width="2%" height="25">&nbsp;</td>
    <td width="49%" height="25" align="left"><b>RESV.NO :<?php echo $_GET[T1]; ?></b></td>
  </tr>
  <tr>
    <td height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">i) NAME OF THE PROPOSER</span></td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left"><?php echo $_GET[T2]; ?></td>
  </tr>
  <tr>
    <td height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">ii)</span> <span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">DESIGNATION</span></td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left"><?php echo $_GET[T3]; ?></td>
  </tr>
  <tr>
    <td height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">iii)</span> <span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">DEPARTMENT</span></td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left"><?php echo $_GET[T4]; ?></td>
  </tr>
  <tr>
    <td height="25" align="left">&nbsp;</td>
    <td height="25" align="center" valign="middle"></td>
    <td height="25" align="left">&nbsp;</td>
  </tr>
  <tr>
    <td height="25" align="left"><b>B. DETAILS OF THE GUEST</b></td>
    <td height="25" align="center" valign="middle"></td>
    <td height="25" align="left">&nbsp;</td>
  </tr>
  <tr>
    <td height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;">i) PROPERTY NAME</span></td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left"><?php echo $_GET[D1]; ?></td>
  </tr>
  <tr>
    <td height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">ii)</span> <span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">NAME OF THE
  GUEST (S)</span></td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left"><?php echo $_GET[T5]; ?></td>
  </tr>
  <tr>
    <td height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;"> iii)</span> <span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">COMPANY
  NAME</span></td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left"><?php echo $_GET[T6]; ?></td>
  </tr>
  <tr>
    <td height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">i</span>v) D.O.A      </td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left"><?php echo $_GET[T9]; ?><span style="margin-left:50%;"> D.O.D </span>
    
    <?php echo $_GET[T10]; ?></td>
  </tr>
  <tr>
    <td height="25" align="left">v) ROOM TYPE</td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left"><?php echo $_GET[T11]; ?></td>
  </tr>
  <tr>
    <td height="25" align="left">vi) <span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">BILLING INSTRUCTIONS</span></td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left"><?php echo $_GET[T12]; ?></td>
  </tr>
  <tr>
    <td height="25" align="left">vii) <span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">REASON</span></td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left"><?php echo $_GET[T13]; ?></td>
  </tr>
  <tr>
    <td height="25" align="left">&nbsp;</td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25" align="left">&nbsp;</td>
  </tr>
  <tr>
    <td height="25" colspan="3" align="center"><table border="0" height="90" width="100%">
      <tbody>
        <tr>
          <td height="20">&nbsp;</td>
          <td height="20">&nbsp;</td>
        </tr>
        <tr>
          <td height="20">&nbsp;</td>
          <td height="20">&nbsp;</td>
        </tr>
        <tr>
          <td height="20" width="50%"><p align="center"><span style="text-decoration: overline;"><font size="2"></font></span></p></td>
          <td height="20" width="50%"><p align="center"><b><span style="text-decoration: overline;">Unit Head</span></b></p></td>
        </tr>
        <tr>
          <td height="20" width="50%"><b><font size="2">&nbsp;&nbsp; </font></b></td>
          <td height="20" width="50%"></td>
        </tr>
      </tbody>
    </table></td>
    </tr>
  </table>


  
</form>
</body>
</html>
