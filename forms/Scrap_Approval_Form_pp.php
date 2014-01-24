<?php
error_reporting(E_ALL ^ E_NOTICE);
?>
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
<form action="Scrap_Approval_Form_pp.php" method="get" target="POPUPW" onSubmit="POPUPW = window.open('about:blank','POPUPW', 'height=550,width=1000,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');" enctype="multipart/form-data" >

 <input name="VTI-GROUP" value="0" type="hidden">
  
<p class="MsoTitle" style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center">&nbsp;</p>
  
<p class="MsoTitle" style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center"><font size="3"><b>GREEN
PARK - </b><?php echo $_GET[prop]; ?></font></p>
  
<p class="MsoTitle" style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center">&nbsp;</p>
  <h1 style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center"><font size="3">APPROVAL
  FOR <span style="">&nbsp;</span>SCRAPPING <span style="">&nbsp;</span>FIXED<span style="">&nbsp;
  </span>ASSET / S</font></h1>
  <hr noshade="noshade" color="#000000">
  <table width="100%" border="0" cellspacing="0" cellpadding="0" style="font-size:13px;">
  <tr>
    <td width="4%" height="25" align="center" valign="middle">1.</td>
    <td width="96%" height="25">NAME / DESCRIPTION OF THE FIXED ASSET / S TO BE<span style="">&nbsp;&nbsp; </span>SCRAPPED<span style="">&nbsp; </span>:</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25">(INCL. MAKE,QUANTITY etc.,) (SEPARATE SHEET MAY BE ENCLOSED IF REQUIRED)</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25"><?php echo $_GET[S1]; ?></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25"><?php echo $_GET[S2]; ?></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">2.</td>
    <td height="25">YEAR OF PURCHASE AND COST.</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25"><?php echo $_GET[S4]; ?></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25"><?php echo $_GET[S5]; ?></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">3.</td>
    <td height="25">WHETHER THE ASSET (S) NEED (S) TO BE REPLACED ? IF SO, INDICATE REPLACEMENT VALUE.</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25"><?php echo $_GET[S7]; ?></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25"><?php echo $_GET[S8]; ?></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">4.</td>
    <td height="25">CONDITION OF THE ASSET / S :</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25"><?php echo $_GET[S10]; ?></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25"><?php echo $_GET[S11]; ?></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">5.</td>
    <td height="25">CAN THE ASSET BE PUT TO ANY OTHER ALTERNATIVE USE ?</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25"><?php echo $_GET[S13]; ?></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25"><?php echo $_GET[S14]; ?></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">6.</td>
    <td height="25">REASONS FOR PROPOSING TO SCRAPPING OF ASSET / S :</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25"><?php echo $_GET[S16]; ?></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25"><?php echo $_GET[S17]; ?></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="top">7.</td>
    <td height="25">PLEASE GIVE DETAILS OF THE SPARES AVAILABLE AT STORES FOR THE ASSET PROPOSED<br /> TO BE SCRAPPED AND HOW IT CAN DISPOSED</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25"><?php echo $_GET[S19]; ?></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25"><?php echo $_GET[S20]; ?></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="5%">SL#</td><td width="20%">Description of the spares at stores</td><td width="5%">Quantity</td><td width="5%">Value.</td>
      </tr>
      <td width="5%"><?php echo $_GET[S23]; ?></td>
      <td width="20%"><?php echo $_GET[S24]; ?></td>
      <td width="5%"><?php echo $_GET[S25]; ?></td>
      <td width="5%"><?php echo $_GET[S26]; ?></td>
      <tr>
        <td><?php echo $_GET[nS26]; ?></td>
        <td><?php echo $_GET[nS27]; ?></td>
        <td><?php echo $_GET[nS28]; ?></td>
        <td><?php echo $_GET[nS29]; ?></td>
      <tr>
        <td><?php echo $_GET[nS30]; ?></td>
        <td><?php echo $_GET[nS31]; ?></td>
        <td><?php echo $_GET[nS32]; ?></td>
        <td><?php echo $_GET[nS33]; ?></td>
      <tr>
        <td><?php echo $_GET[nS34]; ?></td>
        <td><?php echo $_GET[nS35]; ?></td>
        <td><?php echo $_GET[nS36]; ?></td>
        <td><?php echo $_GET[nS37]; ?></td>
      </table>
    </td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">8.</td>
    <td height="25">RECOMMENDATIONS OF H.O.D. ON THE METHOD OF DISPOSAL :</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25"><?php echo $_GET[S21]; ?></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25"><?php echo $_GET[S22]; ?></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25">&nbsp;</td>
  </tr>
  <tr>
    <td height="25" colspan="2" align="center" valign="middle"><table width="100%" height="200" border="0" cellpadding="0" cellspacing="0">
      <tbody>
        <tr>
          <td height="20"><table width="100%" height="20" border="0" cellpadding="0" cellspacing="0">
            <tbody>
              <tr>
                <td height="20" width="675"><p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;"><span style=""><span style="font-size: 7pt;">&nbsp;</span>Date&nbsp;
                  :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;Signature Of H.O.D.</span></p></td>
                </tr>
              </tbody>
            </table></td>
          </tr>
        <tr>
          <td height="20">&nbsp;</td>
          </tr>
        <tr>
          <td height="20" width="675"><p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;">9.<span style="">&nbsp;
            Financial&nbsp; Analysis&nbsp;
            By&nbsp;&nbsp; Finance&nbsp;
            Dept.&nbsp; :</span></p></td>
        </tr>
        <tr>
          <td height="20">&nbsp;</td>
          </tr>
        <tr>
          <td height="20">&nbsp;</td>
          </tr>
        <tr>
          <td height="20"><table width="100%" height="20" border="0" cellpadding="0" cellspacing="0">
            <tbody>
              <tr>
                <td height="20" width="675"><p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;">&nbsp;Purchase
                  Manager &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;Finance
                  Manager&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  Unit Head</p></td>
                </tr>
              </tbody>
            </table></td>
          </tr>
        <tr>
          <td height="20">&nbsp;</td>
          </tr>
        <tr>
          <td height="20">&nbsp;</td>
          </tr>
        <tr>
          <td height="20"><table width="100%" height="20" border="0" cellpadding="0" cellspacing="0">
            <tbody>
              <tr>
                <td height="20" width="675"><p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="">V.P.O&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  V.P.F&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;</span>C.E.O</p></td>
                </tr>
              </tbody>
            </table></td>
          </tr>
        </tbody>
      </table></td>
  </tr>
  </table>

  
</form>
</body>
</html>