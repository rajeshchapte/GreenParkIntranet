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

<body onLoad="printpage()" style="text-transform:capitalize;">
<table width="100%" border="0" cellspacing="8" cellpadding="0">
  <tr>
    <td width="33%" valign="top">
     
      <div>
        <form action="ADHOC_Rate_Authorisation_pp.php" method="get" target="POPUPW" onsubmit="POPUPW = window.open('about:blank','POPUPW', 'height=550,width=1000,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');" enctype="multipart/form-data" >
          <input name="VTI-GROUP" value="0" type="hidden" />
          
          <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center"><font size="4"><b>
          
          <?php echo $_GET[PROP]; ?>
           
          </b></font></p>
          <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center">&nbsp;&nbsp;</p>
          <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center"><b> EDUCATION FUND LOAN FORM</b></p>
          <hr noshade="noshade" color="#000000" />
          <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="150%" height="25" align="center" valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="49%" height="25" align="left">Employee name </td>
                  <td width="2%" align="center" valign="middle">:</td>
                  <td width="49%" height="25" align="left">
                   <?php echo $_GET[T2]; ?>
                  </td>
                </tr>
                <tr>
                  <td height="25" align="left">designation </td>
                  <td align="center" valign="middle">:</td>
                  <td height="25" align="left">
                    <?php echo $_GET[T]; ?>
                  </td>
                </tr>
                <tr>
                  <td height="25" align="left">department </td>
                  <td align="center" valign="middle">:</td>
                  <td height="25" align="left">
                   <?php echo $_GET[T3]; ?> 
                  </td>
                </tr>
                <tr>
                  <td height="25" align="left">course appearing </td>
                  <td align="center" valign="middle">:</td>
                  <td height="25" align="left">
                   <?php echo $_GET[T4]; ?> 
                  </td>
                </tr>
                <tr>
                  <td height="25" align="left">amount of loan rs. </td>
                  <td align="center" valign="middle">:</td>
                  <td height="25" align="left">
                   <?php echo $_GET[T5]; ?> 
                  </td>
                </tr>
                <tr>
                  <td height="25" colspan="3" align="left"><hr /></td>
                </tr>
                <tr>
                  <td height="25" align="left"><strong>incase of children </strong></td>
                  <td align="center" valign="middle">&nbsp;</td>
                  <td height="25" align="left">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" colspan="3" align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="15%" height="25" align="center" valign="middle">&nbsp;</td>
                      <td width="56%" height="25" align="center" valign="middle">name</td>
                      <td width="29%" height="25" align="center" valign="middle">class</td>
                    </tr>
                    <tr>
                      <td height="25" align="center" valign="middle">1.</td>
                      <td height="25" align="center">
                        <?php echo $_GET[T6]; ?>
                      </td>
                      <td height="25" align="center">
                        <?php echo $_GET[T8]; ?>
                      </td>
                    </tr>
                    <tr>
                      <td height="25" align="center" valign="middle">2.</td>
                      <td height="25" align="center">
                        <?php echo $_GET[T7]; ?>
                      </td>
                      <td height="25" align="center">
                        <?php echo $_GET[T9]; ?>
                      </td>
                    </tr>
                  </table></td>
                </tr>
                <tr>
                  <td height="25" colspan="3" align="left"><hr /></td>
                </tr>
                <tr>
                  <td height="25" colspan="3" align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td height="25">Total amount of loan( children and Self together) Rs.
                        <?php echo $_GET[T11]; ?>
                      (Rupees 
                       <?php echo $_GET[T10]; ?> Only).</td>
                    </tr>
                    
                    <tr>
                      <td height="25" align="right" style="padding-right:30px;">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="25" align="right" style="padding-right:30px;"><strong>Sign of Applicant</strong></td>
                    </tr>
                    <tr>
                      <td height="25"><hr /></td>
                    </tr>
                    <tr>
                      <td height="25" align="left"><strong>Recommendation Of H.O.D</strong></td>
                    </tr>
                    <tr>
                      <td height="25"><hr /></td>
                    </tr>
                    <tr>
                      <td height="25" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="50%" align="left">Details Of Existing Loans</td>
                          <td width="50%" align="right" style="padding-right:30px;">&nbsp;</td>
                        </tr>
                        <tr>
                          <td align="left">&nbsp;</td>
                          <td align="right" style="padding-right:30px;">Sign of Accounts Dept.</td>
                        </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td height="25"><hr /></td>
                    </tr>
                    <tr>
                      <td height="25" align="center"><strong>FOR HRD USE</strong></td>
                    </tr>
                    <tr>
                      <td height="25" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="30%">DOJ:</td>
                          <td width="30%">Employment Status:</td>
                          <td width="30%">G/Salary: </td>
                        </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td height="25">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="25" align="left">Please sanction an amount of Rs:_______________/- (Rupees_________________________________)</td>
                    </tr>
                    <tr>
                      <td height="25" align="left">Installment Amount:</td>
                    </tr>
                    <tr>
                      <td height="25" align="right" style="padding-right:50px;">HR - Manager</td>
                    </tr>
                    <tr>
                      <td height="25" align="center"><hr /></td>
                    </tr>
                    <tr>
                      <td height="25" align="left"><strong>SANCTIONED / NOT SANCTIONED</strong></td>
                    </tr>
                    <tr>
                      <td height="25" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="50%">Loan Amount :</td>
                          <td width="50%">Installments:</td>
                        </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td height="25" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td width="50%" style=" text-align:center;">&nbsp;</td>
                          <td width="50%" align="left" style="padding-left:35px;">&nbsp;</td>
                        </tr>
                        <tr>
                          <td style=" text-align:center;"><strong>H.O.D - Finance</strong></td>
                          <td align="left" style="padding-left:35px;"><strong>Unit Head</strong></td>
                        </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td height="25">&nbsp;</td>
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