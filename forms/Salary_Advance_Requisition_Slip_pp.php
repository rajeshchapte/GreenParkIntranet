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
  html{transform:capitalize;}
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
          
          <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center"><font size="4"><b>GREENPARK - 
           <?php echo $_GET[PROP]; ?>
            
          </b></font></p>
          <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center">&nbsp;&nbsp;</p>
          <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center"><b> Salary Advance Requisition Slip</b></p>
          <hr noshade="noshade" color="#000000" />
          <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="150%" height="25" align="center" valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="30%" height="25" align="left">&nbsp;</td>
                  <td width="0%" align="center" valign="middle">&nbsp;</td>
                  <td width="70%" height="25" align="left">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" align="left">&nbsp;</td>
                  <td align="center" valign="middle">&nbsp;</td>
                  <td height="25" align="left"><strong>To : H.O.D-FINANCE</strong></td>
                </tr>
                <tr>
                  <td height="25" align="left">Employee Name </td>
                  <td align="center" valign="middle">:</td>
                  <td height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                   <?php echo $_GET[T3]; ?></span></td>
                </tr>
                <tr>
                  <td height="25" align="left">Designation </td>
                  <td align="center" valign="middle">:</td>
                  <td height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                    <?php echo $_GET[T4]; ?></span></td>
                </tr>
                <tr>
                  <td height="25" align="left">Department </td>
                  <td align="center" valign="middle">:</td>
                  <td height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                   <?php echo $_GET[T]; ?></span></td>
                </tr>
                <tr>
                  <td height="25" colspan="3" align="left"><hr /></td>
                </tr>
                <tr>
                  <td height="25" align="left">&nbsp;</td>
                  <td align="center" valign="middle">&nbsp;</td>
                  <td height="25" align="left">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" align="left"><p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="left">DEAR SIR,</p></td>
                  <td align="center" valign="middle">&nbsp;</td>
                  <td height="25" align="left">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" align="left" colspan="3">Kindly allow me salary advance of Rs.<?php echo $_GET[T7]; ?>(Rupees <?php echo $_GET[T8]; ?>                    Only),   and deduct the same from the salary of : <span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;"><?php echo $_GET[T9]; ?> Reasons for salary advance <?php echo $_GET[T2]; ?> </span></td>
                
                  
                </tr>
                <tr>
                  <td height="25" colspan="3" align="center" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" align="left" colspan="3">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" align="left" colspan="3">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" align="left">&nbsp;</td>
                  <td align="center" valign="middle">&nbsp;</td>
                  <td height="25" align="right" valign="middle">Signature of the Employee</td>
                </tr>
                <tr>
                  <td height="25" colspan="3" align="center"><hr /></td>
                  </tr>
                <tr>
                  <td height="25" colspan="3" align="left">Recommendations of H.O.D </td>
                </tr>
                <tr>
                  <td height="25" colspan="3" align="center"><hr /></td>
                  </tr>
                <tr>
                  <td height="25" colspan="3" align="left">Recommendations of Accounts </td>
                </tr>
                <tr>
                  <td height="25" colspan="3" align="center"><hr /></td>
                  </tr>
                <tr>
                  <td height="25" align="left">Net salary Rs.</td>
                  <td align="center" valign="middle">&nbsp;</td>
                  <td height="25" align="left">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" align="left">Attendance for the month:</td>
                  <td align="center" valign="middle">&nbsp;</td>
                  <td height="25" align="left">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" colspan="3" align="left">Salary advance of Rs .(Rupees<span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                    <?php echo $_GET[T6]; ?></span> Only)</td>
                </tr>
                <tr>
                  <td height="25" align="left">&nbsp;</td>
                  <td align="center" valign="middle">&nbsp;</td>
                  <td height="25" align="left">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" align="left">Salary of : 	</td>
                  <td align="center" valign="middle">&nbsp;</td>
                  <td height="25" align="left">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" align="center">Manager-HR</td>
                  <td align="center" valign="middle">&nbsp;</td>
                  <td height="25" align="center">HOD-Finance </td>
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