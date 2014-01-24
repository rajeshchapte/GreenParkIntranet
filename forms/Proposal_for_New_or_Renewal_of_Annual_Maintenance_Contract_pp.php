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
<form action="Proposal_for_New_or_Renewal_of_Annual_Maintenance_Contract_pp.php" method="get" target="POPUPW" onSubmit="POPUPW = window.open('about:blank','POPUPW', 'height=550,width=1000,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');" enctype="multipart/form-data" >
  <p class="MsoNormal" style="text-align: center;" align="center"><span style="font-family: &quot;Bookman Old Style&quot;;">Green
    Park - </span><font size="3">
    <?php echo $_GET[prop]; ?></font> </p>
  <p class="MsoNormal" style="text-align: center;"><span style="font-family: &quot;Bookman Old Style&quot;;">&nbsp;</span><u><span style="font-family: &quot;Bookman Old Style&quot;;"><b>PROPOSAL FOR
  <?php echo $_GET[AT]; ?>
    ANNUAL MAINTENANCE CONTRACT</b>
    <o:p> </o:p>
    </span></u></p>
  <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tbody>
      <tr>
        <td width="18%" height="25"><span style="font-family: &quot;Bookman Old Style&quot;;">DEPARTMENT :&nbsp;&nbsp;</span></td>
        <td width="41%" height="25">&nbsp;
        <?php echo $_GET[dept]; ?></td>
        <td width="6%" height="25"><span style="font-family: &quot;Bookman Old Style&quot;;">DATE :</span></td>
        <td width="35%" height="25">
        
        <?php echo $_GET[DATE]; ?></td>
      </tr>
      <tr>
        <td height="25" colspan="4"><hr /></td>
      </tr>
    </tbody>
  </table>
  <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tbody>
      <tr>
        <td colspan="4" width="100%"></td>
      </tr>
      <tr>
        <td width="100%"><b><u><span style="">I) EQUIPMENT DETAILS:</span></u></b></td>
        <td width="14%"></td>
        <td width="28%"></td>
        <td width="22%"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td></td>
        <td colspan="2" align="center">&nbsp;</td>
      </tr>
    </tbody>
  </table>
  <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tbody>
      <tr>
        <td rowspan="2" width="3%" align="center" height="40"><b><span style="">SL #</span></b></td>
        <td rowspan="2" width="25%" align="center" height="40"><b><span style="">DESCRIPTION</span></b></td>
        <td rowspan="2" width="14%" align="center" height="40"><b><span style="">LOCATION</span></b></td>
        <td rowspan="2" width="14%" align="center" height="40"><b><span style="">QTY</span></b></td>
        <td rowspan="2" width="14%" align="center" height="40"><b><span style="">RATE</span></b></td>
        <td colspan="2" align="center" height="20"><p align="center"><b>PURCHASE</b></p></td>
      </tr>
      <tr>
        <td width="14%" height="20" align="center" valign="middle"><b><span style="">VALUE</span></b></td>
        <td width="16%" height="20" align="center" valign="middle"><b><span style="">YEAR</span></b></td>
      </tr>
  </table>
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="7" height="25"><hr></td>
      </tr>
      <tr>
        <td width="3%" height="25">1.</td>
        <td width="25%" height="25" align="center"><?php echo $_GET[EQD1]; ?></td>
        <td width="14%" height="25" align="center"><?php echo $_GET[EQD2]; ?></td>
        <td width="14%" height="25" align="center"><?php echo $_GET[EQD3]; ?></td>
        <td width="14%" height="25" align="center"><?php echo $_GET[EQD4]; ?></td>
        <td width="13%" height="25" align="center"><?php echo $_GET[EQD5]; ?></td>
        <td width="17%" height="25" align="center"><?php echo $_GET[EQD6]; ?></td>
      </tr>
      <tr>
        <td width="3%" height="25">2.</td>
        <td width="25%" height="25" align="center"><?php echo $_GET[EQD7]; ?></td>
        <td width="14%" height="25" align="center"><?php echo $_GET[EQD8]; ?></td>
        <td width="14%" height="25" align="center"><?php echo $_GET[EQD9]; ?></td>
        <td width="14%" height="25" align="center"><?php echo $_GET[EQD10]; ?></td>
        <td width="13%" height="25" align="center"><?php echo $_GET[EQD11]; ?></td>
        <td width="17%" height="25" align="center"><?php echo $_GET[EQD12]; ?></td>
      </tr>
      <tr>
        <td width="3%" height="25">3.</td>
        <td width="25%" height="25" align="center"><?php echo $_GET[EQD13]; ?></td>
        <td width="14%" height="25" align="center"><?php echo $_GET[EQD14]; ?></td>
        <td width="14%" height="25" align="center"><?php echo $_GET[EQD15]; ?></td>
        <td width="14%" height="25" align="center"><?php echo $_GET[EQD16]; ?></td>
        <td width="13%" height="25" align="center"><?php echo $_GET[EQD17]; ?></td>
        <td width="17%" height="25" align="center"><?php echo $_GET[EQD18]; ?></td>
      </tr>
      <tr>
        <td width="3%" height="25">4.</td>
        <td width="25%" height="25" align="center"><?php echo $_GET[EQD19]; ?></td>
        <td width="14%" height="25" align="center"><?php echo $_GET[EQD20]; ?></td>
        <td width="14%" height="25" align="center"><?php echo $_GET[EQD21]; ?></td>
        <td width="14%" height="25" align="center"><?php echo $_GET[EQD22]; ?></td>
        <td width="13%" height="25" align="center"><?php echo $_GET[EQD23]; ?></td>
        <td width="17%" height="25" align="center"><?php echo $_GET[EQD24]; ?></td>
      </tr>
      <tr>
        <td width="3%" height="25">5.</td>
        <td width="25%" height="25" align="center"><?php echo $_GET[EQD25]; ?></td>
        <td width="14%" height="25" align="center"><?php echo $_GET[EQD26]; ?></td>
        <td width="14%" height="25" align="center"><?php echo $_GET[EQD27]; ?></td>
        <td width="14%" height="25" align="center"><?php echo $_GET[EQD28]; ?></td>
        <td width="13%" height="25" align="center"><?php echo $_GET[EQD29]; ?></td>
        <td width="17%" height="25" align="center"><?php echo $_GET[EQD30]; ?></td>
      </tr>
      <tr>
        <td height="25" colspan="7"><hr /></td>
       
      </tr>
      <tr>
        <td width="3%" height="25"></td>
        <td height="25" colspan="4" align="center"><p align="right"><b><span style="">TOTAL PURCHASE VALUE :</span></b></p></td>
        <td width="13%" height="25" align="center"><?php echo $_GET[EQD31]; ?></td>
        <td width="17%" height="25" align="center"></td>
      </tr>
	  
	  
	  <tr>
        <td width="3%" height="25" colspan="7"><hr></td>
       
      </tr>
	  
	  
	  
    </tbody>
  </table>
  <p><b><u><span style="">II) EXISTING AMC DETAILS:</span></u></b></p>
  <hr>
  <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tbody>
      <tr>
        <td width="34%" height="25"><span style="font-family: &quot;Bookman Old Style&quot;;">WARRANTY EXPIRES ON</span></td>
        <td width="23%" height="25"><?php echo $_GET[EQD32]; ?></td>
        <td width="24%" height="25"><span style="font-family: &quot;Bookman Old Style&quot;;">AMC EXPIRES ON</span></td>
        <td width="19%" height="25"><?php echo $_GET[EQD33]; ?></td>
      </tr>
      <tr>
        <td width="34%" height="25"><span style="font-family: &quot;Bookman Old Style&quot;;">NAME OF THE SUPPLIER</span></td>
        <td width="66%" height="25" colspan="3"><?php echo $_GET[EQD34]; ?></td>
      </tr>
      <tr>
        <td width="34%" height="25"><span style="font-family: &quot;Bookman Old Style&quot;;">AMC VALUE<span style=""></span></span></td>
        <td width="47%" height="25" colspan="2"><?php echo $_GET[EQD35]; ?></td>
        <td width="19%" height="25"></td>
      </tr>
    </tbody>
  </table>
  <p><b><u>III)<span style="">&nbsp; </span>A. SERVICE DETAILS</u></b>:</p>
  <hr>
  <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tbody>
      <tr>
        <td width="35%" height="25" align="center"><span style="font-size: 11pt; text-decoration: none;"><b>PARTICULARS</b></span></td>
        <td width="16%" height="25" align="center"><b><span style="">GOOD</span></b></td>
        <td width="12%" height="25" align="center"><b><span style="">FAIR</span></b></td>
        <td width="25%" height="25" align="center"><b><span style="">SATISFACTORY</span></b></td>
        <td width="12%" height="25" align="center"><b><span style="">POOR</span></b></td>
      </tr>
      <tr>
        <td height="25" colspan="7"><hr></td>
       
      </tr>
      <tr>
        <td width="35%" height="25"><span style="font-size: 11pt; font-family: &quot;Bookman Old Style&quot;;">KNOWLEDGE OF ENGINEERS</span></td>
        <td width="16%" height="25" align="center"><?php echo $_GET[EQD36]; ?></td>
        <td width="12%" height="25" align="center"><?php echo $_GET[EQD36]; ?></td>
        <td width="25%" height="25" align="center"><?php echo $_GET[EQD36]; ?></td>
        <td width="12%" height="25" align="center"><?php echo $_GET[EQD36]; ?></td>
      </tr>
      <tr>
        <td width="35%" height="25"><span style="font-size: 11pt; font-family: &quot;Bookman Old Style&quot;;">RESPONSE TIME</span></td>
        <td width="16%" height="25" align="center"><?php echo $_GET[EQD40]; ?></td>
        <td width="12%" height="25" align="center"><?php echo $_GET[EQD40]; ?></td>
        <td width="25%" height="25" align="center"><?php echo $_GET[EQD40]; ?></td>
        <td width="12%" height="25" align="center"><?php echo $_GET[EQD40]; ?></td>
      </tr>
      <tr>
        <td width="35%" height="25"><span style="font-size: 11pt; font-family: &quot;Bookman Old Style&quot;;">AVAILABILITY OF SPARES</span></td>
        <td width="16%" height="25" align="center"><?php echo $_GET[EQD44]; ?></td>
        <td width="12%" height="25" align="center"><?php echo $_GET[EQD44]; ?></td>
        <td width="25%" height="25" align="center"><?php echo $_GET[EQD44]; ?></td>
        <td width="12%" height="25" align="center"><?php echo $_GET[EQD44]; ?></td>
      </tr>
      <tr>
        <td width="35%" height="25"><span style="font-size: 11pt; font-family: &quot;Bookman Old Style&quot;;">OVER ALL RATING</span></td>
        <td width="16%" height="25" align="center"><?php echo $_GET[EQD48]; ?></td>
        <td width="12%" height="25" align="center"><?php echo $_GET[EQD48]; ?></td>
        <td width="25%" height="25" align="center"><?php echo $_GET[EQD48]; ?></td>
        <td width="12%" height="25" align="center"><?php echo $_GET[EQD48]; ?></td>
      </tr>
    </tbody>
  </table>
  <p><b><span style="text-transform: uppercase;">B. No of Visits by Contractor during last AMC Period</span></b></p>
  <hr>
  <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tbody>
      <tr>
        <td width="43%" height="25"><span style="font-family: &quot;Bookman Old Style&quot;;">Scheduled Maintenance Calls</span></td>
        <td width="57%" height="25">: <?php echo $_GET[EQD52]; ?></td>
      </tr>
      <tr>
        <td width="43%" height="25"><span style="font-family: &quot;Bookman Old Style&quot;;">Repair Calls</span></td>
        <td width="57%" height="25">: <?php echo $_GET[EQD53]; ?></td>
      </tr>
      <tr>
        <td height="25">&nbsp;</td>
        <td height="25">&nbsp;</td>
      </tr>
    </tbody>
  </table>
  <p><b><u><span style="">IV) AMC PROPOSAL DETAILS:</span></u></b></p>
  <hr>
  <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tbody>
      <tr>
        <td colspan="2"><span style="font-family: &quot;Bookman Old Style&quot;;">NAME OF THE AMC SUPPLIER</span></td>
        <td colspan="4"><strong>:</strong> <?php echo $_GET[EQD54]; ?></td>
      </tr>
      <tr>
        <td width="27%"><span style="font-family: &quot;Bookman Old Style&quot;;">PERIOD OF AMC:</span></td>
        <td width="16%"></td>
        <td width="12%"><span style="font-family: &quot;Bookman Old Style&quot;;"><strong>: </strong>FROM:</span></td>
        <td width="13%"><?php echo $_GET[EQD55]; ?></td>
        <td width="9%"><span style="font-family: &quot;Bookman Old Style&quot;;">TO:</span></td>
        <td width="23%"><?php echo $_GET[EQD56]; ?></td>
      </tr>
    </tbody>
  </table>
  <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tbody>
      <tr>
        <td width="43%" height="25"><span style="font-family: &quot;Bookman Old Style&quot;;">TOTAL AMC VALUE</span></td>
        <td width="57%" height="25"><strong>:</strong> <?php echo $_GET[EQD57]; ?></td>
      </tr>
      <tr>
        <td width="43%" height="25"><span style="font-family: &quot;Bookman Old Style&quot;;">LAST YEAR AMC VALUE</span></td>
        <td width="57%" height="25"><strong>: </strong><?php echo $_GET[EQD58]; ?></td>
      </tr>
      <tr>
        <td width="43%" height="25"><span style="font-family: &quot;Bookman Old Style&quot;;">% OF INCREASE&nbsp;&nbsp; /&nbsp;&nbsp;&nbsp;&nbsp; DECREASE IN AMC</span></td>
        <td width="57%" height="25"><strong>: </strong><?php echo $_GET[EQD59]; ?></td>
      </tr>
      <tr>
        <td width="43%" height="25"><span style="font-family: &quot;Bookman Old Style&quot;;">AMC COST % TO PURCHASE VALUE</span></td>
        <td width="57%" height="25"><strong>: </strong><?php echo $_GET[EQD60]; ?></td>
      </tr>
      <tr>
        <td width="43%" height="25"><span style="font-size: 11pt; font-family: &quot;Bookman Old Style&quot;;">WHETHER AMC INCLUDES</span></td>
        <td width="57%" height="25"><p class="MsoNormal" style="text-align: justify;">
        <strong>: </strong><?php echo $_GET[EQD61]; ?></p></td>
      </tr>
      <tr>
        <td width="43%" height="25"><span style="font-size: 11pt; font-family: &quot;Bookman Old Style&quot;;">REASONS FOR CHANGING THE SUPPLIER IF ANY :</span></td>
        <td width="57%" height="25"><strong>:</strong> <?php echo $_GET[EQD62]; ?></td>
      </tr>
      <tr>
        <td height="25">&nbsp;</td>
        <td height="25">&nbsp;</td>
      </tr>
      <tr>
        <td height="25">&nbsp;</td>
        <td height="25">&nbsp;</td>
      </tr>
      <tr>
        <td height="25" colspan="2"><span style="">Recommendations
        Of The</span>&nbsp; H.O.D:</td>
      </tr>
      <tr>
        <td height="25" colspan="2"><hr /></td>
      </tr>
      <tr>
        <td height="25">&nbsp;</td>
        <td height="25">&nbsp;</td>
      </tr>
      <tr>
        <td height="25" align="left">Date:</td>
        <td height="25" align="left"><b><span style="">H.O.D</span><span style="">&nbsp;&nbsp;Signature</span></b></td>
      </tr>
      <tr>
        <td height="25" colspan="2" align="left"><hr></td>
      </tr>
      <tr>
        <td height="25" align="left"> Proposal Returned / Recommended/Approved and Forwarded To C.E.O For Approval / Information:</span>        </td>
        <td height="25" align="left">&nbsp;</td>
      </tr>
      <tr>
        <td height="25" align="left">&nbsp;</td>
        <td height="25" align="left">&nbsp;</td>
      </tr>
      <tr>
        <td height="25">Date:</td>
        <td height="25"><b>Unit
    Head</b></td>
      </tr>
      <tr>
        <td height="25" colspan="2"><hr></td>
      </tr>
      <tr>
        <td height="25">&nbsp;</td>
        <td height="25">&nbsp;</td>
      </tr>
      <tr>
        <td height="25"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">GM - BPM&nbsp;&nbsp;| GM - Engineering</span></td>
        <td height="25">&nbsp;</td>
      </tr>
      <tr>
        <td height="25" colspan="2"><hr></td>
      </tr>
      <tr>
        <td height="25">Proposal
    Returned/Approved</td>
        <td height="25">&nbsp;</td>
      </tr>
      <tr>
        <td height="25">&nbsp;</td>
        <td height="25">&nbsp;</td>
      </tr>
      <tr>
        <td height="25">&nbsp;</td>
        <td height="25">&nbsp;</td>
      </tr>
      <tr>
        <td height="25" colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="33%" align="center"><b>V.P.O</b></td>
            <td width="33%" align="center"><b>V.P.F</b></td>
            <td width="33%" align="center"><b>C.E.O.</b></td>
          </tr>
        </table></td>
      </tr>
      
      <tr>
        <td height="25" colspan="2" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="30" colspan="3" align="center" style="border-top:1px solid #000000;"><b><u><span style="font-size: 11pt;">FOR
              USE BY THE FINANCE DEPARTMENT:
              <o:p> </o:p>
            </span></u></b></td>
            </tr>
          <tr>
            <td width="30%" height="30"><span class="MsoNormal" style="text-align: justify; word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;"><span style="">Cheque
    Issued In Favour Of:</span><span style="">
    <o:p></o:p>
    </span></span></td>
            <td width="30%" height="30">&nbsp;</td>
            <td width="30%" height="30">&nbsp;</td>
          </tr>
          <tr>
            <td width="30%" height="30">Cheque
    No :<span style="">&nbsp;</span></td>
            <td width="30%" height="30">Date :<span style="">&nbsp;</span></td>
            <td width="30%" height="30">Amount :
              <o:p> </o:p></td>
          </tr>
          <tr>
            <td height="30">TDS&nbsp;
    % Deducted :</td>
            <td height="30">TDS
    Amount&nbsp;&nbsp; :</td>
            <td height="30">&nbsp;</td>
          </tr>
          <tr>
            <td height="30">A/C
    JV Number&nbsp;&nbsp;&nbsp; :
    <o:p> </o:p></td>
            <td height="30">&nbsp;</td>
            <td height="30">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="25" align="center"><b>Finance Department</b><span style="">&nbsp;&nbsp;</span></td>
        <td height="25" align="center"><b>H.O.D Finance</b></td>
      </tr>
    </tbody>
  </table>
  <hr>
 
 
</form>
</body>
</html>
