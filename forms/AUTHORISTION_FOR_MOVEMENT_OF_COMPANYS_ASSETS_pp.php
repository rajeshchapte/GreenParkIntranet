<?php
error_reporting(E_ALL ^ E_NOTICE);
?>
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" language="Javascript1.2">
  <!--
  function printpage() {
  window.print();
  }
  //-->
</script>
<style>
  .col4 {
    float: left;
    margin-right: .5%;
    width: 65%; 
	background-color:#f3f3f3;
	padding:15px;
  }
</style>
</head>
<body onLoad="printpage()">
<table width="100%" border="0" cellspacing="8" cellpadding="0">
  <tr>
    <td width="33%" align="center" valign="middle">
    
      <div>
        <form action="AUTHORISTION_FOR_MOVEMENT_OF_COMPANYS_ASSETS_pp.php" method="get" target="POPUPW" onSubmit="POPUPW = window.open('about:blank','POPUPW', 'height=550,width=1000,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');" enctype="multipart/form-data" >
         
          <p align="center"><b><font size="3">GREEN PARK - </font>
            <?php echo $_GET[PROP]; ?>
          </b></p>
          <p align="center"><font size="3"><b>AUTHORISATION FOR MOVEMENT OF COMPANY'S
            ASSETS</b></font></p>
          <hr>
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="49%" align="left" valign="middle"><font size="3">Asset Name </font></td>
              <td width="2%" height="25" align="center" valign="middle">:</td>
              <td width="49%" height="25" align="left" valign="middle"><font size="3">
              <?php echo $_GET[ANM]; ?>
                
              </font></td>
            </tr>
            <tr>
              <td align="left" valign="middle"><font size="3">Description </font></td>
              <td height="25" align="center" valign="middle">:</td>
              <td height="25" align="left" valign="middle"><font size="3">
               <?php echo $_GET[DES1]; ?>
                
              </font></td>
            </tr>
            <tr>
              <td align="left" valign="middle"><font size="3">Location </font></td>
              <td height="25" align="center" valign="middle">:</td>
              <td height="25" align="left" valign="middle"><font size="3">
              <?php echo $_GET[DES2]; ?>

              </font></td>
            </tr>
            <tr>
              <td align="left" valign="middle"><font size="3">Existing </font></td>
              <td height="25" align="center" valign="middle">:</td>
              <td height="25" align="left" valign="middle"><font size="3">
                            <?php echo $_GET[EXG]; ?>

              </font></td>
            </tr>
            <tr>
              <td align="left" valign="middle"><font size="3">Proposed </font></td>
              <td height="25" align="center" valign="middle">:</td>
              <td height="25" align="left" valign="middle"><font size="3">
                                          <?php echo $_GET[PROS]; ?>

              </font></td>
            </tr>
            <tr>
              <td align="left" valign="middle"><font size="3">Reasons For Shifting </font></td>
              <td height="25" align="center" valign="middle">:</td>
              <td height="25" align="left" valign="middle"><font size="3">
                                                        <?php echo $_GET[RFS1]; ?>

              </font></td>
            </tr>
            <tr>
              <td align="left" valign="middle">&nbsp;</td>
              <td height="25" align="center" valign="middle">:</td>
              <td height="25" align="left" valign="middle"><font size="3">
                                                                      <?php echo $_GET[RFS2]; ?>

              </font></td>
            </tr>
            <tr>
              <td align="left" valign="middle"><font size="3">Date Of Shifting </font></td>
              <td height="25" align="center" valign="middle">:</td>
              <td height="25" align="left" valign="middle"><font size="3">
<?php echo $_GET[DSG]; ?>

              </font></td>
            </tr>
            <tr>
              <td align="left" valign="middle">&nbsp;</td>
              <td height="25" align="center" valign="middle">&nbsp;</td>
              <td height="25" align="left" valign="middle">&nbsp;</td>
            </tr>
            <tr>
              <td align="left" valign="middle">&nbsp;</td>
              <td height="25" align="center" valign="middle">&nbsp;</td>
              <td height="25" align="left" valign="middle">&nbsp;</td>
            </tr>
            <tr>
              <td align="center" valign="middle"><font size="3"><strong>Proposed By </strong></font></td>
              <td height="25" align="center" valign="middle">&nbsp;</td>
              <td height="25" align="center" valign="middle"><font size="3"><strong>Approved By </strong></font></td>
            </tr>
            <tr>
              <td align="left" valign="middle">&nbsp;</td>
              <td height="25" align="center" valign="middle">&nbsp;</td>
              <td height="25" align="left" valign="middle">&nbsp;</td>
            </tr>
            <tr>
              <td align="left" valign="middle">&nbsp;</td>
              <td height="25" align="center" valign="middle">&nbsp;</td>
              <td height="25" align="left" valign="middle">&nbsp;</td>
            </tr>
            <tr>
              <td align="left" valign="middle"><font size="3">C.C.TO<span style="">&nbsp; </span>:<span style="">&nbsp; </span>H.R.D. /<span style="">&nbsp; </span>ACCOUNTS / OFFICE<span style="">&nbsp; </span>COPY</font></td>
              <td height="25" align="center" valign="middle">&nbsp;</td>
              <td height="25" align="left" valign="middle">&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td height="25" align="center" valign="middle">&nbsp;</td>
              <td height="25" align="left" valign="middle">&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td height="25" align="center" valign="middle">&nbsp;</td>
              <td height="25" align="left" valign="middle">&nbsp;</td>
            </tr>
          </table>
        </form>
        <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center">&nbsp;</p>
    </div></td>
  </tr>
</table>
</body>
</html>