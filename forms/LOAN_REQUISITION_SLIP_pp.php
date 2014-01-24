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
        
          <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center"><font size="4"><b>
         GREENPARK - <?php echo $_GET[PROP]; ?>
           
          </b></font></p>
          <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center">&nbsp;&nbsp;</p>
          <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center"><b> LOAN REQUISITION SLIP</b></p>
         
          <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="150%" height="25" align="center" valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="19%" height="25" align="left">&nbsp;</td>
                  <td width="0%" align="center" valign="middle">&nbsp;</td>
                  <td width="81%" height="25" align="right">To :The Unit Head</td>
                </tr>
                <tr>
                  <td height="25" align="left">From</td>
                  <td align="center" valign="middle">:</td>
                  <td height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                    <?php echo $_GET[T3]; ?>
                  </span></td>
                </tr>
                <tr>
                  <td height="25" align="left">Designation</td>
                  <td align="center" valign="middle">:</td>
                  <td height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                   <?php echo $_GET[T4]; ?> 
                  </span></td>
                </tr>
                <tr>
                  <td height="25" align="left">Department</td>
                  <td align="center" valign="middle">:</td>
                  <td height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                    <?php echo $_GET[T]; ?>
                  </span></td>
                </tr>
                <tr>
                  <td height="25" colspan="3" align="left"><hr /></td>
                </tr>
                <tr>
                  <td height="25" align="left">Dear Sir,</td>
                  <td align="center" valign="middle">&nbsp;</td>
                  <td height="25" align="left">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" colspan="3" align="left">Kindly allow me a loan of Rs.<span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;"><?php echo $_GET[T102]; ?> :(Rupees 
                    <?php echo $_GET[T103]; ?> Only), Starting from:
                    <?php echo $_GET[T104]; ?> I will repay the loan amount in
                    <?php echo $_GET[T6]; ?> installments@Rs. <?php echo $_GET[T105]; ?></span></td>
                </tr>
                <tr>
                  <td height="25" colspan="3" align="left">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" align="left">Reasons for Loan :</td>
                  <td align="center" valign="middle">&nbsp;</td>
                  <td align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                    <?php echo $_GET[T8]; ?></span></td>
                </tr>
                <tr>
                  <td height="25" align="left">&nbsp;</td>
                  <td align="center" valign="middle">&nbsp;</td>
                  <td align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                    <?php echo $_GET[T9]; ?></span></td>
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
                  <td height="25" align="left">&nbsp;</td>
                  <td align="center" valign="middle">&nbsp;</td>
                  <td height="25" align="center">Signature Of The Employee.</td>
                </tr>
                <tr>
                  <td height="25" colspan="3" align="center" valign="middle"><hr /></td>
                </tr>
                <tr>
                  <td height="25" colspan="3" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td height="30" colspan="3" align="left">I,&nbsp;&nbsp;&nbsp;working  in your company do hearby stand guarantee for the loan of  Rs.&nbsp;/-&nbsp;taken by &nbsp;&nbsp; and would be repaid by me to the company  in case of default by.</td>
                      </tr>
                    <tr>
                      <td width="33%" height="30">&nbsp;</td>
                      <td width="33%" height="30">&nbsp;</td>
                      <td width="33%" height="30">&nbsp;</td>
                    </tr>
                    <tr>
                      <td width="33%" height="30">&nbsp;</td>
                      <td width="33%" height="30" align="center">Signature</td>
                      <td width="33%" height="30">&nbsp;</td>
                    </tr>
                    <tr>
                      <td width="33%" height="30" colspan="3"><hr /></td>
                      </tr>
                    <tr>
                      <td width="33%" height="30" align="left"><p>Recommendations Of Hod :</p></td>
                      <td width="33%" height="30">&nbsp;</td>
                      <td width="33%" height="30">&nbsp;</td>
                    </tr>
                    <tr align="left">
                      <td width="33%" height="30" colspan="3"><hr /></td>
                      </tr>
                    <tr>
                      <td width="33%" height="30" align="left">Recommendations  Of Accounts :</td>
                      <td width="33%" height="30">&nbsp;</td>
                      <td width="33%" height="30">&nbsp;</td>
                    </tr>
                    <tr align="left">
                      <td height="30" colspan="3"><hr /></td>
                      </tr>
                    <tr>
                      <td height="30" align="left">For  HRD Office Use </td>
                      <td height="30">&nbsp;</td>
                      <td height="30">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="30" colspan="2"><p>Please sanction an amount of Rs .&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(  Rupees <span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;"><?php echo $_GET[T103]; ?></span>&nbsp;&nbsp;&nbsp;Only)</p></td>
                      <td height="30">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="30">&nbsp;</td>
                      <td height="30">&nbsp;</td>
                      <td height="30">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="30" colspan="3" align="center"><p>DOJ  :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  E.STATUS:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  G/SALARY:</p></td>
                      </tr>
                    <tr>
                      <td height="30">&nbsp;</td>
                      <td height="30">&nbsp;</td>
                      <td height="30">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="30" align="left"><p>Monthly Deduction :Rs.</p></td>
                      <td height="30">&nbsp;</td>
                      <td height="30">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="30">&nbsp;</td>
                      <td height="30" align="center">HR  - Manager</td>
                      <td height="30">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="30" colspan="3"><hr  /></td>
                      
                    </tr>
                    <tr>
                      <td height="30"><p>Loan Sanctioned / Not Sanctioned.</p></td>
                      <td height="30">&nbsp;</td>
                      <td height="30">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="30">Loan  Amount :</td>
                      <td height="30">Installments  :</td>
                      <td height="30">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="30" align="left">&nbsp;</td>
                      <td height="30">&nbsp;</td>
                      <td height="30">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="30" align="left">H.O.D  - Finance</td>
                      <td height="30">Unit  head&nbsp;&nbsp;Approved</td>
                      <td height="30">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="30" align="left">&nbsp;</td>
                      <td height="30">&nbsp;</td>
                      <td height="30">&nbsp;</td>
                    </tr>
                    <tr>
                      <td height="30" align="left">&nbsp;</td>
                      <td height="30">&nbsp;</td>
                      <td height="30">&nbsp;</td>
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