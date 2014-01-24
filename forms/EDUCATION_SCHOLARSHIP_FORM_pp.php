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
          <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center"><b> EDUCATION SCHOLARSHIP FORM</b></p>
          <hr noshade="noshade" color="#000000" />
          <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="150%" height="25" align="center" valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="49%" height="25" align="left"> NAME</td>
                  <td width="2%" align="center" valign="middle">:</td>
                  <td width="49%" height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                     <?php echo $_GET[T2]; ?>
                  </span></td>
                </tr>
                <tr>
                  <td height="25" align="left">DESIGNATION</td>
                  <td align="center" valign="middle">:</td>
                  <td height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                     <?php echo $_GET[T]; ?>
                  </span></td>
                </tr>
                <tr>
                  <td height="25" align="left">DEPARTMENT</td>
                  <td align="center" valign="middle">:</td>
                  <td height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                     <?php echo $_GET[T3]; ?>
                  </span></td>
                </tr>
                <tr>
                  <td height="25" align="left">COURSE APPEARING</td>
                  <td align="center" valign="middle">:</td>
                  <td height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                    <?php echo $_GET[T4]; ?> 
                  </span></td>
                </tr>
                <tr>
                  <td height="25" align="left">AMOUNT Rs.</td>
                  <td align="center" valign="middle">:</td>
                  <td height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                     <?php echo $_GET[T5]; ?>
                  </span></td>
                </tr>
                <tr>
                  <td height="25" colspan="3" align="left"><hr /></td>
                </tr>
                <tr>
                  <td height="25" align="left"><strong>IN CASE OF CHILDREN</strong></td>
                  <td align="center" valign="middle">&nbsp;</td>
                  <td height="25" align="left">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" colspan="3" align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="15%" height="25" align="center" valign="middle">&nbsp;</td>
                      <td width="56%" height="25" align="left" valign="middle" style="padding-left:50px;">NAME</td>
                      <td width="29%" height="25" align="left" valign="middle">CLASS</td>
                    </tr>
                    <tr>
                      <td height="25">&nbsp;</td>
                      <td height="25" align="left">&nbsp;</td>
                      <td height="25" align="left">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="25">&nbsp;</td>
                      <td height="25" align="left">&nbsp;</td>
                      <td height="25" align="left">&nbsp;</td>
                    </tr>
                  </table></td>
                </tr>
                <tr>
                  <td height="25" colspan="3" align="left"><hr /></td>
                </tr>
                <tr>
                  <td height="25" colspan="3" align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td height="25">Total amount of Claim( children and Self together) Rs.<span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                         <?php echo $_GET[T11]; ?>
                      </span></td>
                    </tr>
                    <tr>
                      <td height="25">(Rupees <span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                         <?php echo $_GET[T10]; ?>
                      </span> Only).</td>
                    </tr>
                    <tr>
                      <td height="25" align="right" style="padding-right:30px;">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="25" align="right" style="padding-right:30px;">Sign Of Applicant</td>
                    </tr>
                    <tr>
                      <td height="25" align="center"><hr /></td>
                    </tr>
                    <tr>
                      <td height="25" align="left">Recommendationof H.O.D</td>
                    </tr>
                    <tr>
                      <td height="25" align="center"><hr /></td>
                    </tr>
                    <tr>
                      <td height="25" align="center" style="padding-right:30px;">FOR HRD USE</td>
                    </tr>
                    <tr>
                      <td height="25" align="center" style="padding-right:30px;">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="25" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="30%">DOJ :</td>
                          <td width="30%">Employment Status :</td>
                          <td width="30%">G/salary :</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td colspan="2" align="left">Please  sanction an amount of  Rs.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/-&nbsp;  ( Rupees</td>
                          <td align="center"><strong>HR&nbsp;-&nbsp;Manager</strong></td>
                        </tr>
                        <tr>
                          <td colspan="2">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                        </tr>
                        <tr>
                          <td colspan="2">&nbsp;</td>
                          <td align="center">&nbsp;</td>
                        </tr>
                        <tr>
                          <td colspan="2" align="left" valign="middle"><strong>SANCTIONED / NOT SANCTIONED</strong></td>
                          <td align="center">&nbsp;</td>
                        </tr>
                        <tr>
                          <td colspan="2" align="center">&nbsp;</td>
                          <td align="left">&nbsp;</td>
                        </tr>
                        <tr>
                          <td colspan="2" align="center">&nbsp;</td>
                          <td align="left">&nbsp;</td>
                        </tr>
                        <tr>
                          <td colspan="2" align="center"><strong>H.O.D - Finance</strong></td>
                          <td align="left"><strong>Unit Head</strong></td>
                        </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td height="25" align="center"><hr /></td>
                    </tr>
                    <tr>
                      <td height="25" align="center" style="padding-right:30px;">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="25" align="center" style="padding-right:30px;">&nbsp;</td>
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
        <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center">&nbsp;</p>
      </div></td>
  </tr>
</table>


</body>
</html>