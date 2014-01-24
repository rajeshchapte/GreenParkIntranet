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

<body onLoad="printpage()" style="transform:capitalize; line-height:20px;">
<table width="100%" border="0" cellspacing="8" cellpadding="0">
  <tr>
    <td width="33%" align="center" valign="top">
    
      <div>
        <form action="ADHOC_Rate_Authorisation_pp.php" method="get" target="POPUPW" onsubmit="POPUPW = window.open('about:blank','POPUPW', 'height=550,width=1000,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');" enctype="multipart/form-data" >
          <input name="VTI-GROUP" value="0" type="hidden" />
          
          <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center"><font size="4"><b>
            
          <?php echo $_GET[T1]; ?></b></font></p>
         
          <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center"><b> TRAVEL EXPENSES REIMBURSEMENT</b><br />
            (to be submitted within 3 working days of travel)</p>
          <hr noshade="noshade" color="#000000" />
          <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="150%" height="25" align="center" valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="20%" height="25" align="left">Date</td>
                  <td width="7%" align="center" valign="middle">:</td>
                  <td width="28%" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;"> <?php echo $_GET[T2]; ?></span></td>
                  <td width="13%" align="left">&nbsp;</td>
                  <td width="32%" height="25" align="left">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" align="left">Name</td>
                  <td align="center" valign="middle">:</td>
                  <td align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;"> <?php echo $_GET[T3]; ?></span></td>
                  <td align="left">&nbsp;</td>
                  <td height="25" align="left">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" align="left">Department</td>
                  <td align="center" valign="middle">:</td>
                  <td align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;"> <?php echo $_GET[T4]; ?></span></td>
                  <td align="left">Cadre : </td>
                  <td height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;"><?php echo $_GET[T5]; ?></span></td>
                </tr>
                <tr align="center" valign="top">
                  <td height="15" colspan="5"></td>
                </tr>
                <tr>
                  <td height="25" colspan="5" align="center" valign="middle"><strong>DETAILS OF TRAVEL SCHEDULE</strong>:</td>
                </tr>
                <tr>
                  <td height="25" colspan="5" align="left"><hr /></td>
                </tr>
                <tr>
                  <td height="25" colspan="5" align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="50%" height="25" align="center" valign="top"><strong>Departure</strong></td>
                      <td width="50%" height="25" align="center" valign="top"><strong>Arrival</strong></td>
                    </tr>
                    <tr>
                      <td height="25" align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td height="25" align="center" valign="middle">&nbsp;</td>
                          <td height="25" align="center" valign="middle">&nbsp;</td>
                          <td height="25" align="center" valign="middle">&nbsp;</td>
                          <td height="25" align="center" valign="middle">&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="25" align="center" valign="middle">Place</td>
                          <td height="25" align="center" valign="middle">Date</td>
                          <td height="25" align="center" valign="middle">Time</td>
                          <td height="25" align="center" valign="middle">Place</td>
                        </tr>
                        <tr>
                          <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                           <?php echo $_GET[T6]; ?></span></td>
                          <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                            <?php echo $_GET[T7]; ?></span></td>
                          <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                           <?php echo $_GET[T8]; ?></span></td>
                          <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                           <?php echo $_GET[T9]; ?></span></td>
                        </tr>
                        <tr>
                          <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                           <?php echo $_GET[T14]; ?></span></td>
                          <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                           <?php echo $_GET[T15]; ?></span></td>
                          <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                            <?php echo $_GET[T16]; ?></span></td>
                          <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                            <?php echo $_GET[T17]; ?></span></td>
                        </tr>
                        <tr>
                          <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                           <?php echo $_GET[T22]; ?></span></td>
                          <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                            <?php echo $_GET[T23]; ?></span></td>
                          <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                           <?php echo $_GET[T24]; ?></span></td>
                          <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                            <?php echo $_GET[T25]; ?></span></td>
                        </tr>
                      </table></td>
                      <td height="25" align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td height="25" align="center" valign="middle">&nbsp;</td>
                          <td height="25" colspan="2" align="center" valign="middle">No.of Mode of</td>
                          <td height="25" align="center" valign="middle">&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="25" align="center" valign="middle">Place</td>
                          <td height="25" align="center" valign="middle">Date</td>
                          <td height="25" align="center" valign="middle">Time</td>
                          <td height="25" align="center" valign="middle">Place</td>
                        </tr>
                        <tr>
                          <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                            <?php echo $_GET[T10]; ?></span></td>
                          <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                            <?php echo $_GET[T11]; ?></span></td>
                          <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                            <?php echo $_GET[T12]; ?></span></td>
                          <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                            <?php echo $_GET[T13]; ?></span></td>
                        </tr>
                        <tr>
                          <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                            <?php echo $_GET[T18]; ?></span></td>
                          <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                            <?php echo $_GET[T19]; ?></span></td>
                          <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                            <?php echo $_GET[T20]; ?></span></td>
                          <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                            <?php echo $_GET[T21]; ?></span></td>
                        </tr>
                        <tr>
                          <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                           <?php echo $_GET[T26]; ?></span></td>
                          <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                            <?php echo $_GET[T27]; ?></span></td>
                          <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                            <?php echo $_GET[T28]; ?></span></td>
                          <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                            <?php echo $_GET[T29]; ?></span></td>
                        </tr>
                      </table></td>
                    </tr>
                    
                  </table></td>
                </tr>
                <tr>
                  <td height="25" colspan="5" align="center" valign="middle"><hr /></td>
                </tr>
                <tr>
                  <td height="25" colspan="2" rowspan="2" align="center" valign="middle">EXPENSES</td>
                  <td align="center">&nbsp;</td>
                  <td align="center">&nbsp;</td>
                  <td height="25" align="center">AMOUNT INCURRED</td>
                </tr>
                <tr>
                  <td align="left">&nbsp;</td>
                  <td align="left">&nbsp;</td>
                  <td height="25" align="left"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="56%" height="25" align="center" valign="middle">By Company</td>
                      <td width="44%" height="25" align="center" valign="middle">By Self</td>
                    </tr>
                  </table></td>
                </tr>
                <tr>
                  <td height="25" colspan="5" align="left"><hr /></td>
                </tr>
                <tr>
                  <td height="25" colspan="5" align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="2%" height="20" align="left" valign="middle">1.</td>
                      <td width="24%" height="20"> Fare Ticket No.</td>
                      <td width="44%" height="20" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;"><?php echo $_GET[T30]; ?></span></td>
                      <td width="16%" height="20" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                       Rs. <?php echo $_GET[T31]; ?></span></td>
                      <td width="14%" height="20" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                        Rs. <?php echo $_GET[T32]; ?></span></td>
                    </tr>
                    <tr>
                      <td height="20" align="left" valign="middle">2.</td>
                      <td height="20"> Hotel Bill No.</td>
                      <td height="20" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;"><?php echo $_GET[T33]; ?></span></td>
                      <td height="20" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                        Rs. <?php echo $_GET[T34]; ?></span></td>
                      <td height="20" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                        Rs. <?php echo $_GET[T35]; ?></span></td>
                    </tr>
                    <tr>
                      <td height="20" align="left" valign="middle">3. </td>
                      <td height="20">Daily Allowanc</td>
                      <td height="20" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;"><?php echo $_GET[T36]; ?></span></td>
                      <td height="20" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                        Rs. <?php echo $_GET[T37]; ?></span></td>
                      <td height="20" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                        Rs. <?php echo $_GET[T38]; ?></span></td>
                    </tr>
                    <tr>
                      <td height="20" align="left" valign="middle">4.</td>
                      <td height="20" align="left"> Local Converynace} Provide</td>
                      <td height="20" align="left" valign="middle">&nbsp;</td>
                      <td height="20" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                        Rs. <?php echo $_GET[T39]; ?></span></td>
                      <td height="20" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                        Rs. <?php echo $_GET[T40]; ?></span></td>
                    </tr>
                    <tr>
                      <td height="20" align="left" valign="middle">5. </td>
                      <td height="20" align="left">Other incidental exp.} Details</td>
                      <td height="20" align="left" valign="middle">&nbsp;</td>
                      <td height="20" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                        Rs. <?php echo $_GET[T41]; ?></span></td>
                      <td height="20" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                       Rs. <?php echo $_GET[T42]; ?></span></td>
                    </tr>
                    <tr>
                      <td height="20" align="left" valign="middle">6. </td>
                      <td height="20" align="left">Any Others (Specify)} Separately</td>
                      <td height="20" align="left" valign="middle">&nbsp;</td>
                      <td height="20" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                        Rs. <?php echo $_GET[T43]; ?></span></td>
                      <td height="20" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                        Rs. <?php echo $_GET[T44]; ?></span></td>
                    </tr>
                    <tr>
                      <td height="20" colspan="5"><hr  /></td>
                    </tr>
                    <tr>
                      <td height="25">&nbsp;</td>
                      <td height="25" align="right">&nbsp;</td>
                      <td height="25" align="right" valign="middle">Total : </td>
                      <td height="25" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                        Rs. <?php echo $_GET[T45]; ?></span></td>
                      <td height="25" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                        Rs. <?php echo $_GET[T46]; ?></span></td>
                    </tr>
                   
                    <tr>
                      <td height="25" align="right" valign="middle">&nbsp;</td>
                      <td height="25" colspan="2" align="right" valign="middle" style="padding-right:15px;">Less :Advance taken  </td>
                      <td height="25" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                        Rs. <?php echo $_GET[T47]; ?></span></td>
                      <td height="25" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                        Rs. <?php echo $_GET[T48]; ?></span></td>
                    </tr>
                    <tr>
                      <td height="25" colspan="3" align="right" valign="middle" style="padding-right:15px;"> Net Amount Due To Self / Company </td>
                      <td height="25" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                       Rs. <?php echo $_GET[T49]; ?></span></td>
                      <td height="25" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                        Rs. <?php echo $_GET[T50]; ?></span></td>
                    </tr>
                  </table></td>
                </tr>
                <tr align="center" valign="top">
                  <td height="25" colspan="5"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td height="25" align="center" valign="middle">&nbsp;</td>
                      <td height="25" align="center" valign="middle">&nbsp;</td>
                      <td height="25" align="center" valign="middle">&nbsp;</td>
                      <td height="25" align="center" valign="middle">&nbsp;</td>
                    </tr>
                    <tr>
                      <td width="20%" height="25" align="center" valign="middle">Signature of Traveller</td>
                      <td width="20%" height="25" align="center" valign="middle">Scrutinised By</td>
                      <td width="20%" height="25" align="center" valign="middle">Approval:HOD</td>
                      <td width="20%" height="25" align="center" valign="middle">Authorised Signatory</td>
                    </tr>
                  </table></td>
                </tr>
                <tr>
                  <td height="25" colspan="5" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="20%" height="25">Received /  Refunded Rs.</td>
                      <td width="7%" height="25">&nbsp;</td>
                      <td width="7%" height="25">(Rupees</td>
                      <td width="39%" height="25">&nbsp;</td>
                      <td width="27%" height="25">Only)</td>
                    </tr>
                  </table></td>
                </tr>
                <tr>
                  <td height="25" colspan="5" align="left"><hr /></td>
                </tr>
                <tr>
                  <td height="25" align="left">Receipt No : </td>
                  <td align="center" valign="middle">&nbsp;</td>
                  <td align="left">Date:</td>
                  <td align="left">&nbsp;</td>
                  <td height="25" align="left">Debit:</td>
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