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

<div align="center">
  <center>
  <table border="0" height="27" width="100%">
    <tbody><tr>
      <td height="27" align="center">

<p style="text-indent: 0pt; word-spacing: 0pt; line-height: 150%; margin: 0pt;" align="center"><b>
&nbsp;  <?php echo $_GET[PROP]; ?></b></p>
<p style="text-indent: 0pt; word-spacing: 0pt; line-height: 150%; margin: 0pt;" align="center"><b>
ADHOC - RATE AUTHORISATION SLIP&nbsp;</b></p>
      </td>
    </tr>
  </tbody></table>
  </center>
</div>
<hr noshade="noshade" color="#000000">
<table border="0" width="100%">
  <tbody><tr>
    <td width="33%">
  <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="left"><b>
  <font size="2">
  A. </font>Details Of The Proposer</b></p>
    </td>
    <td width="20%">
    </td>
    <td width="13%">
  <b>Resv .No :</b>
    </td>
    <td width="34%">
  <b><font size="2"><?php echo $_GET[T1]; ?></font></b>
    </td>
  </tr>
</tbody></table>
<table border="0" width="101%">
  <tbody><tr>
    <td width="30%" align="left"><font size="2">i) </font>Name
      Of The Proposer</td>
    <td width="2%"><font size="2">:</font></td>
    <td width="68%"><font size="2"><?php echo $_GET[T2]; ?></font></td>
  </tr>
</tbody></table>
<table border="0" width="100%">
  <tbody><tr>
    <td width="30%">
  <font size="2">ii)</font>Designation</td>
    <td width="2%">
  <font size="2">:</font></td>
    <td width="68%"><font size="2"><?php echo $_GET[T3]; ?></font></td>
  </tr>
</tbody></table>
<table border="0" width="100%">
  <tbody><tr>
    <td width="30%"><font size="2">iii)</font>Department</td>
    <td width="2%"><font size="2">:</font></td>
    <td width="68%"><font size="2"><?php echo $_GET[T4]; ?></font></td>
  </tr>
</tbody></table>
<hr>
<table border="0" width="100%">
  <tbody><tr>
    <td width="31%" align="left"><b><font size="2">B. </font>Details Of The Guest</b></td>
    <td width="69%"></td>
  </tr>
</tbody></table>
<table border="0" width="100%">
  <tbody><tr>
    <td width="30%" align="left" valign="middle"><font size="2">&nbsp;&nbsp; i) </font>Property Name</td>
    <td width="2%"><font size="2">:</font></td>
    <td width="68%"><font size="2"><?php echo $_GET[D1]; ?></font></td>
  </tr>
  <tr>
    <td width="30%" align="left" valign="middle"><font size="2">&nbsp; ii) </font>Name Of The
      Guest&nbsp;(S)</td>
    <td width="2%"><font size="2">:</font></td>
    <td width="68%"><font size="2"><?php echo $_GET[T5]; ?></font></td>
  </tr>
  <tr>
    <td colspan="2" width="32%"></td>
    <td width="68%"><font size="2"><?php echo $_GET[T6]; ?></font></td>
  </tr>
  <tr>
  <tr>
    <td colspan="2" width="32%"></td>
    <td width="68%"><font size="2"><?php echo $_GET[T7]; ?></font></td>
  </tr>
  <tr>
    <td width="30%"><font size="2">&nbsp;iii) <span style="font-size: 12pt; font-family: &quot;Times New Roman&quot;;">Company Name</span></font></td>
    <td width="2%"><font size="2">:</font></td>
    <td width="68%"><font size="2"><?php echo $_GET[T8]; ?></font></td>
  </tr>
</tbody></table>
<table border="0" width="100%">
  <tbody><tr>
    <td width="30%">
  <font size="2">&nbsp;iv) D.O.A</font></td>
    <td width="1%">
  <font size="2">:</font></td>
    <td width="26%"><font size="2"><?php echo $_GET[T9]; ?></font></td>
    <td width="14%" align="right">
      
  <font size="2">
  TIME :</font></td>
    <td width="29%"><font size="2"><?php echo $_GET[T10]; ?></font></td>
  </tr>
</tbody></table>
</tbody></table>
<table border="0" width="100%">
  <tbody><tr>
    <td width="30%">
  <font size="2">&nbsp;v) D.O.D</font></td>
    <td width="2%">
  <font size="2">:</font></td>
    <td width="25%"><font size="2"><?php echo $_GET[T11]; ?></font></td>
    <td width="14%" align="right" valign="middle">
     
  <font size="2">
  TIME :</font></td>
    <td width="29%"><font size="2"><?php echo $_GET[T12]; ?></font></td>
  </tr>
</tbody></table>
<table border="0" height="24" width="100%">
  <tbody><tr>
    <td height="20" width="30%">
  <font size="2"> vi) <span style="font-size: 12pt; font-family: &quot;Times New Roman&quot;;">Room&nbsp; Type</span></font></td>
    <td height="20" width="2%">
  <font size="2">:</font></td>
    <td height="20" width="68%"><font size="2"><?php echo $_GET[T13]; ?></font></td>
  </tr>
</tbody></table>
<table border="0" height="24" width="100%">
  <tbody><tr>
    <td height="20" width="30%">
  <font size="2"> vii) <span style="font-size: 12pt; font-family: &quot;Times New Roman&quot;;">Rate/Plan/Inclusions</span></font></td>
    <td height="20" width="2%">
  <font size="2">:</font></td>
    <td height="20" width="68%"><font size="2"><?php echo $_GET[T14]; ?></font></td>
  </tr>
</tbody></table>
<table border="0" height="19" width="100%">
  <tbody><tr>
    <td height="15" width="30%">
  <font size="2">viii)</font> Billing Instructions&nbsp;</td>
    <td height="15" width="2%">
  <font size="2">:</font></td>
    <td height="15" width="68%"><font size="2"><?php echo $_GET[T15]; ?></font></td>
  </tr>
</tbody></table>
<table border="0" width="100%">
  <tbody><tr>
    <td width="30%">
  <font size="2">
  ix) </font>Reason</td>
    <td width="2%">
  <font size="2">:</font></td>
    <td width="68%"><font size="2"><?php echo $_GET[T16]; ?></font></td>
  </tr>
</tbody></table>

<table border="0" height="86" width="100%">
  <tbody>
<tr>
  <td height="26">&nbsp;</td>
  <td height="26">&nbsp;</td>
</tr>
<tr>
  <td height="26">&nbsp;</td>
  <td height="26">&nbsp;</td>
</tr>
<tr>
    <td  height="26" colspan="2" align="center">Sales Head&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Approved by
   </font>
 </p></td>
</tr>

</tbody></table>
  

</tbody>
</table>


</body>
</html>
