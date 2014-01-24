<?php
error_reporting(E_ALL ^ E_NOTICE);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GreePark Hotels and Resorts Intranet</title>

<style>
  .col4 {
    float: left;
    margin-right: .5%;
    width: 65%; 
	background-color:#f3f3f3;
	padding:15px;
  }
</style>
<script type="text/javascript" language="Javascript1.2">
  <!--
  function printpage() {
  window.print();
  }
  //-->
</script>
</head>

<body onLoad="printpage()">
<table width="100%" border="0" cellspacing="8" cellpadding="0">
  <tr>
    <td width="33%" valign="top">
      
      <div>
        <form action="ADHOC_Rate_Authorisation_pp.php" method="get" target="POPUPW" onsubmit="POPUPW = window.open('about:blank','POPUPW', 'height=550,width=1000,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');" enctype="multipart/form-data" >
          <input name="VTI-GROUP" value="0" type="hidden" />
          <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center">&nbsp;</p>
          <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center"><font size="4"><b>GREENPARK - <?php echo $_GET[PROP]; ?>
          
          </b></font></p>
          <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center">&nbsp;&nbsp;</p>
          <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center"><b> STAFF FOOD PARCEL AUTHORISATION SLIP</b></p>
          <hr noshade="noshade" color="#000000" />
          <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="150%" height="25" align="center" valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="25" colspan="3" align="center" valign="middle" style="color:#F00;">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" align="left">&nbsp;</td>
                  <td align="center" valign="middle">&nbsp;</td>
                  <td height="25" align="right"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                   Date :<?php echo $_GET[T2]; ?> </span></td>
                </tr>
                <tr>
                  <td height="25" align="left">Name</td>
                  <td align="center" valign="middle">:</td>
                  <td height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                    <?php echo $_GET[T3]; ?></span></td>
                </tr>
                <tr>
                  <td height="25" align="left">Designation</td>
                  <td align="center" valign="middle">:</td>
                  <td height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                   <?php echo $_GET[T4]; ?></span></td>
                </tr>
                <tr>
                  <td height="25" align="left">Department</td>
                  <td align="center" valign="middle">:</td>
                  <td height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                    <?php echo $_GET[T]; ?></span></td>
                </tr>
                <tr>
                  <td height="25" align="left">Food Details</td>
                  <td align="center" valign="middle">:</td>
                  <td height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                   <?php echo $_GET[T5]; ?></span></td>
                </tr>
                <tr>
                  <td height="25" align="left">Reason</td>
                  <td align="center" valign="middle">:</td>
                  <td height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                   <?php echo $_GET[T6]; ?></span></td>
                </tr>
                <tr>
                  <td height="25" align="left">Billing Instruction</td>
                  <td align="center" valign="middle">:</td>
                  <td height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                   <?php echo $_GET[T7]; ?></span></td>
                </tr>
                <tr>
                  <td height="25" align="left">&nbsp;</td>
                  <td align="center" valign="middle">&nbsp;</td>
                  <td height="25" align="left">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" align="left">&nbsp;</td>
                  <td align="center" valign="middle">&nbsp;</td>
                  <td height="25" align="left">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" align="center">Sign of Employee</td>
                  <td align="center" valign="middle">&nbsp;</td>
                  <td height="25" align="center">Head of the Department</td>
                </tr>
                
              </table></td>
            </tr>
          </table>
        </form>
        
      </div></td>
  </tr>
</table>
</body>
</html>