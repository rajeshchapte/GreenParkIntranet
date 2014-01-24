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
<blockquote>&nbsp;</blockquote>
<table width="100%" border="0" cellspacing="8" cellpadding="0">
  <tr>
    <td width="33%" valign="top">
    
      <div>
        <form action="ADHOC_Rate_Authorisation_pp.php" method="get" target="POPUPW" onsubmit="POPUPW = window.open('about:blank','POPUPW', 'height=550,width=1000,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');" enctype="multipart/form-data" >
          <input name="VTI-GROUP" value="0" type="hidden" />
          
          <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center"><font size="4"><b>GREENPARK - <?php echo $_GET[PROP]; ?></b></font></p>
         
          <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center"><b> SHIFT EXCHANGE FORM</b></p>
          <hr noshade="noshade" color="#000000" />
          <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="150%" height="25" align="center" valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="25" align="left">To:HRD Manager,</td>
                  <td align="center" valign="middle">&nbsp;</td>
                  <td height="25" align="left">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" colspan="3" align="left" style="padding-left:25px;">Kindly change the	of the
                    <?php echo $_GET[select]; ?>
                    following personnel, due to exigencies of work which could not be anticipated in advance.</td>
                </tr>
                <tr>
                  <td height="25" colspan="3" align="left"><hr /></td>
                </tr>
                <tr>
                  <td height="25" colspan="3" align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td height="25" rowspan="2" align="center" valign="middle">S.#.</td>
                      <td height="25" rowspan="2" align="left" valign="middle">Name of Employee</td>
                      <td height="25" rowspan="2" align="left" valign="middle">Section</td>
                      <td height="25" rowspan="2" align="left" valign="middle">Date of Change</td>
                      <td height="25" align="left" valign="middle">Shift</td>
                      <td height="25" align="left" valign="middle">W/Off</td>
                    </tr>
                    <tr>
                      <td height="25" valign="middle">From</td>
                      <td height="25" valign="middle">To</td>
                    </tr>
                    <tr>
                      <td height="25" align="center">1</td>
                      <td height="25" align="left" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                        <?php echo $_GET[T5]; ?></span></td>
                      <td height="25" align="left" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                        <?php echo $_GET[T6]; ?></span></td>
                      <td align="left" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                        <?php echo $_GET[T7]; ?></span></td>
                      <td align="left" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                        <?php echo $_GET[T8]; ?></span></td>
                      <td align="left" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                        <?php echo $_GET[T9]; ?></span></td>
                    </tr>
                    <tr>
                      <td height="25" align="center">2</td>
                      <td height="25" align="left" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                        <?php echo $_GET[T10]; ?></span></td>
                      <td height="25" align="left" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                        <?php echo $_GET[T11]; ?></span></td>
                      <td align="left" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                        <?php echo $_GET[T12]; ?></span></td>
                      <td align="left" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                        <?php echo $_GET[T13]; ?></span></td>
                      <td align="left" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                        <?php echo $_GET[T14]; ?></span></td>
                    </tr>
                    <tr>
                      <td height="25" align="center">3</td>
                      <td height="25" align="left" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                        <?php echo $_GET[T15]; ?></span></td>
                      <td height="25" align="left" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                        <?php echo $_GET[T16]; ?></span></td>
                      <td align="left" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                        <?php echo $_GET[T17]; ?></span></td>
                      <td align="left" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                        <?php echo $_GET[T18]; ?></span></td>
                      <td align="left" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                        <?php echo $_GET[T19]; ?></span></td>
                    </tr>
                    <tr>
                      <td height="25" align="center">&nbsp;</td>
                      <td height="25" align="left" valign="middle">&nbsp;</td>
                      <td height="25" align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="25" align="center">&nbsp;</td>
                      <td height="25" align="left" valign="middle">&nbsp;</td>
                      <td height="25" align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                      <td align="left" valign="middle">&nbsp;</td>
                    </tr>
                  </table></td>
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
                  <td height="25" colspan="3" align="left" valign="top">&nbsp;</td>
                  </tr>
                <tr>
                  <td height="25" colspan="3" align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td height="30" align="center" valign="middle">&nbsp;</td>
                      <td height="30" align="center" valign="middle">&nbsp;</td>
                      <td height="30" align="center" valign="middle">&nbsp;</td>
                    </tr>
                    <tr>
                      <td width="33%" height="30" align="center" valign="middle">Section In-Charge </td>
                      <td width="33%" height="30" align="center" valign="middle">HOD</td>
                      <td width="33%" height="30" align="center" valign="middle">HR-Manager</td>
                    </tr>
                  </table></td>
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