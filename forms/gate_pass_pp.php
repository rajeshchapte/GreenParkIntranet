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
    <td width="33%" align="center" valign="top">
      
      <div>
        <form action="ADHOC_Rate_Authorisation_pp.php" method="get" target="POPUPW" onsubmit="POPUPW = window.open('about:blank','POPUPW', 'height=550,width=1000,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');" enctype="multipart/form-data" >
          <input name="VTI-GROUP" value="0" type="hidden" />
          <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center">&nbsp;</p>
          <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center"><font size="4"><b>
           <?php echo $_GET[PROP]; ?> 
          </b></font></p>
          <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center">&nbsp;&nbsp;</p>
          <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center"><b> Gate Pass</b></p>
          <hr noshade="noshade" color="#000000" />
          <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="150%" height="25" align="center" valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="25" colspan="3" align="center" style="color:#F00;">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" colspan="3" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="21%">S.No</td>
                      <td width="4%" valign="middle">:</td>
                      <td width="28%">&nbsp;</td>
                      <td width="21%" align="right">Date</td>
                      <td width="0%" valign="middle">:</td>
                      <td width="26%"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;"><?php echo $_GET[T6]; ?></span></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td valign="middle">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td valign="middle">&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>Name</td>
                      <td valign="middle">:</td>
                      <td><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;"><?php echo $_GET[T]; ?></span></td>
                      <td>Designation</td>
                      <td valign="middle">:</td>
                      <td><?php echo $_GET[T8]; ?></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td valign="middle">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td valign="middle">&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="6">Please allow him through the main gate to go out on <?php echo $_GET[D1]; ?> Work </td>
                      </tr>
                    <tr>
                      <td colspan="6">&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="6">Purpose</td>
                    </tr>
                    <tr>
                      <td colspan="6">&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="6"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="186">&nbsp;</td>
                          <td width="32">&nbsp;</td>
                          <td width="203">&nbsp;</td>
                          <td width="248">&nbsp;</td>
                          <td width="4">&nbsp;</td>
                          <td width="233">&nbsp;</td>
                        </tr>
                        <tr>
                          <td>Time Out</td>
                          <td>:</td>
                          <td>&nbsp;</td>
                          <td>Time In</td>
                          <td width="4">:</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td width="4">&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td align="center">&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td align="center">&nbsp;</td>
                          <td width="4">&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td align="center" colspan="3">Signature of HOD</td>
                          
                          <td align="center" colspan="3">Signature of Security</td>
                          
                          
                        </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td colspan="6">&nbsp;</td>
                    </tr>
                  </table></td>
                  </tr>
                <tr>
                  <td width="49%" height="25" align="left">&nbsp;</td>
                  <td width="2%" align="center" valign="middle">&nbsp;</td>
                  <td width="49%" height="25" align="left">&nbsp;</td>
                </tr>
              </table></td>
            </tr>
          </table>
        </form>
        <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center">&nbsp;</p>
      </div></td>
  </tr>
</table>
</body>
</html>