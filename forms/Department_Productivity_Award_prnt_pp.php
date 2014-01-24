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
<form action="Department_Productivity_Award_prnt_pp.php" method="get" target="POPUPW" onSubmit="POPUPW = window.open('about:blank','POPUPW', 'height=550,width=1000,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');" enctype="multipart/form-data" >
 
  <input name="VTI-GROUP" value="0" type="hidden">

<p style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;" align="center">&nbsp;</p>

<p style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;" align="center"><font size="4"><b>GREEN
PARK - <?php echo $_GET[PROP]; ?>
</b></font></p>

<p style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;" align="center"><b><font size="5">Monthly
Department's Productivity Award</font></b></p>
  <hr noshade="noshade" color="#000000">
  
  
  <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="15%" height="25">To</td>
    <td width="1%" height="25" align="center" valign="middle">:</td>
    <td width="84%" height="25">
    <?php echo $_GET[ENAME]; ?>   </td>
  </tr>
  <tr>
    <td height="25">Department</td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25">
    <?php echo $_GET[EDESG]; ?>
   </td>
  </tr>
  <tr>
    <td height="25" colspan="3" style="line-height:25px;"><hr /></td>
  </tr>
  <tr>
    <td height="25" colspan="3" style="line-height:25px;">
    	We are Pleased to award you an Amount of Rs.
        <?php echo $_GET[AMOUNT]; ?> 
   

Rupees <!--webbot bot="Validation" B-Value-Required="TRUE"
I-Maximum-Length="52" -->
<?php echo $_GET[AMTWD]; ?>
</p>
for the Month of :
<?php echo $_GET[MONTH]; ?>
 
on your contribution in&nbsp;Department's&nbsp;Productivity.
    </td>
    </tr>
  <tr>
    <td height="25" colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td height="25"><p>With best wishes. </p></td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25">&nbsp;</td>
  </tr>
  <tr>
    <td height="25">&nbsp;</td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    
    <td height="25">&nbsp;</td>
  </tr>
</table>

</form>
</body>
</html>