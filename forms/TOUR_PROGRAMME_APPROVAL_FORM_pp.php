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
         
          <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center"><font size="4"><b> GreenPark Hotels And Resorts Limited </b></font></p>
          <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center">&nbsp;&nbsp;</p>
          <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center"><b> TOUR PROGRAMME APPROVAL FORM</b></p>
          <hr noshade="noshade" color="#000000" />
          <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="150%" height="25" align="center" valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0" style="text-transform:capitalize;">
                <tr>
                  <td width="33%" height="25" align="left">Name </td>
                  <td width="1%" align="center" valign="middle">:</td>
                  <td width="29%" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;"> <?php echo $_GET[T2]; ?></span></td>
                  <td width="37%" height="25" align="left">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" align="left">Department </td>
                  <td align="center" valign="middle">:</td>
                  <td align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;"> <?php echo $_GET[T3]; ?></span></td>
                  <td height="25" align="left">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" align="left">Designation </td>
                  <td align="center" valign="middle">:</td>
                  <td align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;"> <?php echo $_GET[T4]; ?></span></td>
                  <td height="25" align="left">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" align="left">Place (S) Visition </td>
                  <td align="center" valign="middle">:</td>
                  <td align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;"> <?php echo $_GET[T]; ?></span></td>
                  <td height="25" align="left">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" align="left">Purpose </td>
                  <td align="center" valign="middle">:</td>
                  <td align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;"> <?php echo $_GET[T5]; ?></span></td>
                  <td height="25" align="left">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" align="left">No.Of Days Stay </td>
                  <td align="center" valign="middle">:</td>
                  <td align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;"> <?php echo $_GET[T6]; ?></span></td>
                  <td height="25" align="left">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" align="left">Departure </td>
                  <td align="center" valign="middle">:</td>
                  <td align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;"> <?php echo $_GET[T7]; ?></span></td>
                  <td height="25" align="left">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" align="left">Arrival </td>
                  <td align="center" valign="middle">:</td>
                  <td align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;"> <?php echo $_GET[T8]; ?></span></td>
                  <td height="25" align="left">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" align="left">Mode of Travel and Class of Travel </td>
                  <td align="center" valign="middle">:</td>
                  <td align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;"> <?php echo $_GET[T9]; ?></span></td>
                  <td height="25" align="left">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" align="left">Advance Required </td>
                  <td align="center" valign="middle">:</td>
                  <td align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;"> Rs. <?php echo $_GET[T10]; ?></span></td>
                  <td height="25" align="left">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" align="left">Contact Phone No at the place of visit </td>
                  <td align="center" valign="middle">:</td>
                  <td align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;"> <?php echo $_GET[T13]; ?></span></td>
                  <td height="25" align="left">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" colspan="4" align="left"><hr /></td>
                </tr>
                <tr>
                  <td height="25" colspan="4" align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td height="25" align="center" valign="middle">&nbsp;</td>
                      <td height="25" align="center" valign="middle">&nbsp;</td>
                      <td height="25" align="center" valign="middle">&nbsp;</td>
                      <td height="25" align="center" valign="middle">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="25" align="center" valign="middle">signature of the traveller </td>
                      <td height="25" align="center" valign="middle">HOD</td>
                      <td height="25" align="center" valign="middle">authorised signature </td>
                      <td height="25" align="center" valign="middle"><!--APROVAL--></td>
                    </tr>
                  </table></td>
                </tr>
                <tr>
                  <td height="25" colspan="4" align="left"><hr /></td>
                </tr>
                <tr>
                  <td height="25" colspan="4" align="center" valign="middle"><strong>FOR OFFICE USE</strong>:</td>
                </tr>
                <tr>
                  <td height="25" align="left"> travel arrangement made: </td>
                  <td align="center" valign="middle">&nbsp;</td>
                  <td align="left">&nbsp;</td>
                  <td height="25" align="left">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" align="left">&nbsp;</td>
                  <td align="center" valign="middle">&nbsp;</td>
                  <td align="left">&nbsp;</td>
                  <td height="25" align="left">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" align="left">a) air / train / bus </td>
                  <td align="center" valign="middle">:</td>
                  <td align="left">&nbsp;</td>
                  <td height="25" align="left">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" align="left">b) class </td>
                  <td align="center" valign="middle">:</td>
                  <td align="left">1st / 2nd ac / 2nd class / y class / j class </td>
                  <td height="25" align="left">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" align="left">c) ticket no </td>
                  <td align="center" valign="middle">:</td>
                  <td align="left">&nbsp;</td>
                  <td height="25" align="left">amount rs : </td>
                </tr>
                <tr>
                  <td height="25" align="left">d) booked through </td>
                  <td align="center" valign="middle">:</td>
                  <td align="left">&nbsp;</td>
                  <td height="25" align="left">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" align="left">e) bill no &amp; date </td>
                  <td align="center" valign="middle">:</td>
                  <td align="left">&nbsp;</td>
                  <td height="25" align="left">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" align="left">&nbsp;</td>
                  <td align="center" valign="middle">&nbsp;</td>
                  <td align="left">&nbsp;</td>
                  <td height="25" align="left">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" align="left">&nbsp;</td>
                  <td align="center" valign="middle">&nbsp;</td>
                  <td align="center">&nbsp;</td>
                  <td height="25" align="center">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" align="left">&nbsp;</td>
                  <td align="center" valign="middle">&nbsp;</td>
                  <td align="center">&nbsp;</td>
                  <td height="25">HRD</td>
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