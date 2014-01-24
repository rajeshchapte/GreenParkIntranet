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
    <td width="33%" align="center" valign="top"><h2 style="margin:0px; padding:0px">Leave Application</h2>
      <hr />
      <div>
        <form action="ADHOC_Rate_Authorisation_pp.php" method="get" target="POPUPW" onsubmit="POPUPW = window.open('about:blank','POPUPW', 'height=550,width=1000,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');" enctype="multipart/form-data" >
          <input name="VTI-GROUP" value="0" type="hidden" />
          <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center">&nbsp;</p>
          <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="150%" height="25" align="center" valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="26%" height="25" align="left">&nbsp;</td>
                  <td align="center" valign="middle">&nbsp;</td>
                  <td width="74%" height="25" align="right">Date: <?php echo $_GET[T3]; ?></td>
                </tr>
                <tr>
                  <td height="25" align="left">Swipe Card No</td>
                  <td align="center" valign="middle">:</td>
                  <td height="25" align="left">
                    <?php echo $_GET[T4]; ?></td>
                </tr>
                <tr>
                  <td height="25" align="left">Name</td>
                  <td align="center" valign="middle">:</td>
                  <td height="25" align="left">
                    <?php echo $_GET[T5]; ?></td>
                </tr>
                <tr>
                  <td height="25" align="left">Designation</td>
                  <td align="center" valign="middle">:</td>
                  <td height="25" align="left">
                    <?php echo $_GET[T17]; ?>
                    <table width="50%" border="0" cellspacing="0" cellpadding="0" style="float:right;">
                      <tr>
                        <td width="50%" align="left">Department</td>
                        <td width="4%" align="left">:</td>
                        <td width="46%" align="left"><?php echo $_GET[T18]; ?></td>
                      </tr>
                    </table></td>
                </tr>
                <tr>
                  <td height="25" align="left">Leave Required</td>
                  <td align="center" valign="middle">:</td>
                  <td height="25" align="left">
                    <?php echo $_GET[T]; ?>Days

<?php echo $_GET[D1]; ?></td>
                </tr>
                <tr>
                  <td height="25" colspan="3" align="left"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="25%" height="25">From</td>
                      <td width="1%" align="center">:</td>
                      <td width="13%" height="25" align="left">
                        <?php echo $_GET[T6]; ?></td>
                      <td width="4%" height="25" align="center">To :</td>
                      <td width="57%" height="25" align="left">
                        <?php echo $_GET[T7]; ?>(Both days inclusive).</td>
                    </tr>
                  </table></td>
                </tr>
                <tr>
                  <td height="25" align="left">Purpose</td>
                  <td align="center" valign="middle">:</td>
                  <td align="left">
                    <?php echo $_GET[T13]; ?></td>
                </tr>
                <tr>
                  <td height="25" align="left">Leave Address</td>
                  <td align="center" valign="middle">:</td>
                  <td align="left">
                    <?php echo $_GET[T14]; ?></td>
                </tr>
                <tr>
                  <td height="25" align="left">&nbsp;</td>
                  <td align="center" valign="middle"></td>
                  <td align="left">
                    <?php echo $_GET[T15]; ?></td>
                </tr>
                <tr>
                  <td height="25" align="left">&nbsp;</td>
                  <td align="center" valign="middle">&nbsp;</td>
                  <td height="25" align="right">Signature of Applicant</td>
                </tr>
                <tr>
                  <td height="25" colspan="3" align="left"><hr style="width:100%;" /></td>
                </tr>
                <tr>
                  <td height="25" colspan="3" align="left">(To be filled in by the H.R Department)</td>
                  </tr>
                <tr>
                  <td height="25" colspan="3" align="center"><h2>LEAVES TO CREDIT</h2></td>
                  </tr>
                <tr>
                  <td height="25" colspan="3" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="25%" height="25" align="left">Casuel :-</td>
                      <td width="29%" height="25" align="left">days</td>
                      <td width="21%" height="25" align="left">&nbsp;</td>
                      <td width="25%" height="25">&nbsp;</td>
                    </tr>
                    <tr>
                      <td width="25%" height="25" align="left">Privilege:- </td>
                      <td width="29%" height="25" align="left">days</td>
                      <td height="25">Sick:-</td>
                      <td height="25">days</td>
                    </tr>
                    <tr>
                      <td colspan="4" style="height:20px;">&nbsp;</td>
                      </tr>
                    <tr>
                      <td align="left" colspan="4"><hr style="width:100%;"  /></td>
                    </tr>
                    <tr>
                      <td height="25" colspan="2" align="left">Leave Sanctioned / Not Sanctioned</td>
                      
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="25">Privilege</td>
                      <td height="25">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="25">Casual</td>
                      <td height="25">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="25">Sick</td>
                      <td height="25">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="25">&nbsp;</td>
                      <td height="25" align="center">Head of Department</td>
                      <td>&nbsp;</td>
                      <td align="center">H.R Manager | Head HR</td>
                    </tr>
                    <tr>
                      <td colspan="4"><hr  style="width:100%;" /></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td colspan="2" align="center">&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td colspan="2" align="center"><h2>LEAVES PASS</h2></td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>Mr./ Ms.</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>your application for</td>
                    </tr>
                    <tr>
                      <td>Leave from</td>
                      <td>&nbsp;</td>
                      <td> to </td>
                      <td>has been sanctioned / not sanctimed</td>
                    </tr>
                    <tr>
                      <td>Date:</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td align="center">H.R Department</td>
                      <td>&nbsp;</td>
                    </tr>
                  </table></td>
                  </tr>
                <tr>
                  <td height="25" align="left">&nbsp;</td>
                  <td align="center" valign="middle">&nbsp;</td>
                  <td height="25" align="left">&nbsp;</td>
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