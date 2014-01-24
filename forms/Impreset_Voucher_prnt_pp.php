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
<form action="Impreset_Voucher_prnt_pp.php" method="get" target="POPUPW" onSubmit="POPUPW = window.open('about:blank','POPUPW', 'height=550,width=1000,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');" enctype="multipart/form-data" >
 
  <input name="VTI-GROUP" value="0" type="hidden">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="2" align="center"><b>GREEN PARK - <?php echo $_GET[PROP]; ?></b></td>
    </tr>
    <tr>
      <td width="50%" colspan="2" align="center">IMPREST CASH :&nbsp; REIMBURSEMENT OF EXPENSES</td>
    </tr>
    <tr>
      <td width="50%">&nbsp;</td>
      <td width="50%">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="right">VR. No: .........................</td>
    </tr>
    <tr>
      <td align="left">&nbsp;</td>
      <td align="right" style="padding-right:150px;">&nbsp;</td>
    </tr>
    <tr>
      <td align="left">DEPARTMENT :&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_GET[DEP]; ?>&nbsp;</td>
      <td align="right" style="padding-right:70px;">DATE :&nbsp;&nbsp;&nbsp; <?php echo $_GET[T1]; ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" align="left"><span style="text-indent: 0pt; line-height: 100%; word-spacing: 0pt; margin: 0pt;">We have incurred the following expenses for official purpose which may be
        reimbursed / adjusted against advance imprest drawn.</span></td>
    </tr>
	<tr>
      <td colspan="2" align="left">&nbsp;</td>
    </tr>
	
    <tr>
      <td align="right" colspan="5"><hr color="#000000" noshade="noshade"></td>
      
    </tr>
    <tr>
      <td align="right" colspan="5">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="15%" style="padding-left:50px;"><b>Date</b></td>
            <td width="21%"><b>Particulars</b></td>
            <td width="38%"><b>Details of Supporting</b></td>
            <td width="10%"><b>Amount</b></td>
            <td width="16%">Head of A/C</td>
          </tr>
      </table></td>
    </tr>
  </table>
  <hr color="#000000" noshade="noshade">

<table width="100%" border="0">
    <tbody><tr>
      <td width="3%" height="25">1.&nbsp;</td>
      <td width="13%" height="25">

<?php echo $_GET[T2]; ?></td>
      <td width="20%" height="25"><?php echo $_GET[T3]; ?></td>
      <td width="10%" height="25"><font size="2">IND. No:&nbsp;
  </font></td>
      <td width="10%" height="25"><font size="2"><?php echo $_GET[T5]; ?></font></td>
      <td width="5%" height="25"><font size="2">
  Date : &nbsp;</font></td>
      <td width="24%" height="25"><font size="2"><?php echo $_GET[T6]; ?></font></td>
      <td width="15%" height="25"><?php echo $_GET[T11]; ?></td>
    </tr>
    <tr>
      <td width="3%" height="25"></td>
      <td width="13%" height="25"></td>
      <td width="20%" height="25"><?php echo $_GET[T4]; ?></td>
      <td width="10%" height="25"><font size="2">
  G.R.N No:</font></td>
      <td width="10%" height="25"><font size="2"><?php echo $_GET[T7]; ?></font></td>
      <td width="5%" height="25"><font size="2">
  Date :</font></td>
      <td width="24%" height="25"><font size="2"><?php echo $_GET[T8]; ?></font></td>
      <td width="15%" height="25"></td>
    </tr>
    <tr>
      <td width="3%" height="25"></td>
      <td width="13%" height="25"></td>
      <td width="20%" height="25"></td>
      <td width="10%" height="25"><font size="2">
  Bill No:&nbsp;</font></td>
      <td width="10%" height="25"><font size="2"><?php echo $_GET[T9]; ?></font></td>
      <td width="5%" height="25"><font size="2">
  Date:</font></td>
      <td width="24%" height="25"><font size="2"><?php echo $_GET[T10]; ?></font></td>
      <td width="15%" height="25"></td>
    </tr>
    <tr>
      <td width="3%" height="25"></td>
      <td width="13%" height="25">&nbsp;&nbsp;</td>
      <td width="20%" height="25">&nbsp;</td>
      <td width="10%" height="25"></td>
      <td width="10%" height="25"></td>
      <td width="5%" height="25"></td>
      <td width="24%" height="25"></td>
      <td width="15%" height="25"></td>
    </tr>
    <tr>
      <td width="3%" height="25">2.&nbsp;</td>
      <td width="13%" height="25">

<?php echo $_GET[T12]; ?></td>
      <td width="20%" height="25"><?php echo $_GET[T13]; ?></td>
      <td width="10%" height="25"><font size="2">IND. No:&nbsp;
  </font></td>
      <td width="10%" height="25"><font size="2"><?php echo $_GET[T15]; ?></font></td>
      <td width="5%" height="25"><font size="2">
  Date : &nbsp;</font></td>
      <td width="24%" height="25"><font size="2"><?php echo $_GET[T16]; ?></font></td>
      <td width="15%" height="25"><?php echo $_GET[T21]; ?></td>
    </tr>
    <tr>
      <td width="3%" height="25"></td>
      <td width="13%" height="25"></td>
      <td width="20%" height="25"><?php echo $_GET[T14]; ?></td>
      <td width="10%" height="25"><font size="2">
  G.R.N No:</font></td>
      <td width="10%" height="25"><font size="2"><?php echo $_GET[T17]; ?></font></td>
      <td width="5%" height="25"><font size="2">
  Date :</font></td>
      <td width="24%" height="25"><font size="2"><?php echo $_GET[T18]; ?></font></td>
      <td width="15%" height="25"></td>
    </tr>
    <tr>
      <td width="3%" height="25"></td>
      <td width="13%" height="25">&nbsp;</td>
      <td width="20%" height="25"></td>
      <td width="10%" height="25"><font size="2">
  Bill No:&nbsp;</font></td>
      <td width="10%" height="25"><font size="2"><?php echo $_GET[T19]; ?></font></td>
      <td width="5%" height="25"><font size="2">
  Date:</font></td>
      <td width="24%" height="25"><font size="2"><?php echo $_GET[T20]; ?></font></td>
      <td width="15%" height="25"></td>
    </tr>
    <tr>
      <td width="3%" height="25"></td>
      <td width="13%" height="25">&nbsp;</td>
      <td width="20%" height="25"></td>
      <td width="10%" height="25"></td>
      <td width="10%" height="25"></td>
      <td width="5%" height="25"></td>
      <td width="24%" height="25"></td>
      <td width="15%" height="25"></td>
    </tr>
    <tr>
      <td width="3%" height="25">3.&nbsp;</td>
      <td width="13%" height="25">

<?php echo $_GET[T24]; ?></td>
      <td width="20%" height="25"><?php echo $_GET[T25]; ?></td>
      <td width="10%" height="25"><font size="2">IND. No:&nbsp;
  </font></td>
      <td width="10%" height="25"><font size="2"><?php echo $_GET[T27]; ?></font></td>
      <td width="5%" height="25"><font size="2">
  Date : &nbsp;</font></td>
      <td width="24%" height="25"><font size="2"><?php echo $_GET[T28]; ?></font></td>
      <td width="15%" height="25"><?php echo $_GET[T33]; ?></td>
    </tr>
    <tr>
      <td width="3%" height="25"></td>
      <td width="13%" height="25"></td>
      <td width="20%" height="25"><?php echo $_GET[T26]; ?></td>
      <td width="10%" height="25"><font size="2">
  G.R.N No:</font></td>
      <td width="10%" height="25"><font size="2"><?php echo $_GET[T29]; ?></font></td>
      <td width="5%" height="25"><font size="2">
  Date :</font></td>
      <td width="24%" height="25"><font size="2"><?php echo $_GET[T30]; ?></font></td>
      <td width="15%" height="25"></td>
    </tr>
    <tr>
      <td width="3%" height="25"></td>
      <td width="13%" height="25">&nbsp;</td>
      <td width="20%" height="25"></td>
      <td width="10%" height="25"><font size="2">
  Bill No:&nbsp;</font></td>
      <td width="10%" height="25"><font size="2"><?php echo $_GET[T31]; ?></font></td>
      <td width="5%" height="25"><font size="2">
  Date:</font></td>
      <td width="24%" height="25"><font size="2"><?php echo $_GET[T32]; ?></font></td>
      <td width="15%" height="25"></td>
    </tr>
    <tr>
      <td width="3%" height="25"></td>
      <td width="13%" height="25">&nbsp;</td>
      <td width="20%" height="25"></td>
      <td width="10%" height="25"></td>
      <td width="10%" height="25"></td>
      <td width="5%" height="25"></td>
      <td width="24%" height="25"></td>
      <td width="15%" height="25"></td>
    </tr>
    <tr>
      <td width="3%" height="25">4.&nbsp;</td>
      <td width="13%" height="25">

<?php echo $_GET[T34]; ?></td>
      <td width="20%" height="25"><?php echo $_GET[T35]; ?></td>
      <td width="10%" height="25"><font size="2">IND. No:&nbsp;
  </font></td>
      <td width="10%" height="25"><font size="2"><?php echo $_GET[T37]; ?></font></td>
      <td width="5%" height="25"><font size="2">
  Date : &nbsp;</font></td>
      <td width="24%" height="25"><font size="2"><?php echo $_GET[T38]; ?></font></td>
      <td width="15%" height="25"><?php echo $_GET[T43]; ?></td>
    </tr>
    <tr>
      <td width="3%" height="25"></td>
      <td width="13%" height="25"></td>
      <td width="20%" height="25"><?php echo $_GET[T36]; ?></td>
      <td width="10%" height="25"><font size="2">
  G.R.N No:</font></td>
      <td width="10%" height="25"><font size="2"><?php echo $_GET[T39]; ?></font></td>
      <td width="5%" height="25"><font size="2">
  Date :</font></td>
      <td width="24%" height="25"><font size="2"><?php echo $_GET[T40]; ?></font></td>
      <td width="15%" height="25"></td>
    </tr>
    <tr>
      <td width="3%" height="25"></td>
      <td width="13%" height="25">&nbsp;</td>
      <td width="20%" height="25"></td>
      <td width="10%" height="25"><font size="2">
  Bill No:&nbsp;</font></td>
      <td width="10%" height="25"><font size="2"><?php echo $_GET[T41]; ?></font></td>
      <td width="5%" height="25"><font size="2">
  Date:</font></td>
      <td width="24%" height="25"><font size="2"><?php echo $_GET[T42]; ?></font></td>
      <td width="15%" height="25"></td>
    </tr>
    <tr>
      <td width="3%" height="25"></td>
      <td width="13%" height="25">&nbsp;</td>
      <td width="20%" height="25"></td>
      <td width="10%" height="25"></td>
      <td width="10%" height="25"></td>
      <td width="5%" height="25"></td>
      <td width="24%" height="25"></td>
      <td width="15%" height="25"></td>
    </tr>
    <tr>
      <td width="3%" height="25">5.&nbsp;</td>
      <td width="13%" height="25">

<?php echo $_GET[T44]; ?></td>
      <td width="20%" height="25"><?php echo $_GET[T45]; ?></td>
      <td width="10%" height="25"><font size="2">IND. No:&nbsp;
  </font></td>
      <td width="10%" height="25"><font size="2"><?php echo $_GET[T47]; ?></font></td>
      <td width="5%" height="25"><font size="2">
  Date : &nbsp;</font></td>
      <td width="24%" height="25"><font size="2"><?php echo $_GET[T48]; ?></font></td>
      <td width="15%" height="25"><?php echo $_GET[T53]; ?></td>
    </tr>
    <tr>
      <td width="3%" height="25"></td>
      <td width="13%" height="25"></td>
      <td width="20%" height="25"><?php echo $_GET[T46]; ?></td>
      <td width="10%" height="25"><font size="2">
  G.R.N No:</font></td>
      <td width="10%" height="25"><font size="2"><?php echo $_GET[T49]; ?></font></td>
      <td width="5%" height="25"><font size="2">
  Date :</font></td>
      <td width="24%" height="25"><font size="2"><?php echo $_GET[T50]; ?></font></td>
      <td width="15%" height="25"></td>
    </tr>
    <tr>
      <td width="3%" height="25"></td>
      <td width="13%" height="25">&nbsp;</td>
      <td width="20%" height="25"></td>
      <td width="10%" height="25"><font size="2">
  Bill No:&nbsp;</font></td>
      <td width="10%" height="25"><font size="2"><?php echo $_GET[T51]; ?></font></td>
      <td width="5%" height="25"><font size="2">
  Date:</font></td>
      <td width="24%" height="25"><font size="2"><?php echo $_GET[T52]; ?></font></td>
      <td width="15%" height="25"></td>
    </tr>
    <tr>
      <td width="3%" height="25"></td>
      <td width="13%" height="25">&nbsp;</td>
      <td width="20%" height="25"></td>
      <td width="10%" height="25"></td>
      <td width="10%" height="25"></td>
      <td width="5%" height="25"></td>
      <td width="24%" height="25"></td>
      <td width="15%" height="25"></td>
    </tr>
    <tr>
      <td width="3%" height="25">6.&nbsp;</td>
      <td width="13%" height="25">

<?php echo $_GET[T54]; ?></td>
      <td width="20%" height="25"><?php echo $_GET[T55]; ?></td>
      <td width="10%" height="25"><font size="2">IND. No:&nbsp;
  </font></td>
      <td width="10%" height="25"><font size="2"><?php echo $_GET[T57]; ?></font></td>
      <td width="5%" height="25"><font size="2">
  Date : &nbsp;</font></td>
      <td width="24%" height="25"><font size="2"><?php echo $_GET[T58]; ?></font></td>
      <td width="15%" height="25"><?php echo $_GET[T63]; ?></td>
    </tr>
    <tr>
      <td width="3%" height="25"></td>
      <td width="13%" height="25"></td>
      <td width="20%" height="25"><?php echo $_GET[T56]; ?></td>
      <td width="10%" height="25"><font size="2">
  G.R.N No:</font></td>
      <td width="10%" height="25"><font size="2"><?php echo $_GET[T59]; ?></font></td>
      <td width="5%" height="25"><font size="2">
  Date :</font></td>
      <td width="24%" height="25"><font size="2"><?php echo $_GET[T60]; ?></font></td>
      <td width="15%" height="25"></td>
    </tr>
    <tr>
      <td width="3%" height="25"></td>
      <td width="13%" height="25">&nbsp;</td>
      <td width="20%" height="25"></td>
      <td width="10%" height="25"><font size="2">
  Bill No:&nbsp;</font></td>
      <td width="10%" height="25"><font size="2"><?php echo $_GET[T61]; ?></font></td>
      <td width="5%" height="25"><font size="2">
  Date:</font></td>
      <td width="24%" height="25"><font size="2"><?php echo $_GET[T62]; ?></font></td>
      <td width="15%" height="25"></td>
    </tr>
    <tr>
      <td width="3%" height="25" colspan="8"><hr /></td>
    </tr>
    <tr>
      <td height="25"></td>
      <td height="25">&nbsp;</td>
      <td height="25"></td>
      <td height="25"></td>
      <td height="25"></td>
      <td height="25"></td>
      <td height="25" colspan="2" align="left"><span style="text-indent: 0pt; line-height: 100%; word-spacing: 0pt; margin: 0pt;">&nbsp; <b>Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> <?php echo $_GET[T65]; ?> &nbsp;(
  Rs. <?php echo $_GET[T64]; ?>&nbsp;
  )&nbsp;</span></td>
    </tr>
	 <tr>
      <td width="3%" height="25" colspan="8"><hr /></td>
    </tr>
   
  </tbody></table>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><span style="text-indent: 0pt; line-height: 100%; word-spacing: 0pt; margin: 0pt;">Name &amp; signature</span></td>
      <td align="center"><span style="text-indent: 0pt; line-height: 100%; word-spacing: 0pt; margin: 0pt;">Approval</span></td>
      <td align="center"><span style="text-indent: 0pt; line-height: 100%; word-spacing: 0pt; margin: 0pt;">passed by</span></td>
      <td align="center"><span style="text-indent: 0pt; line-height: 100%; word-spacing: 0pt; margin: 0pt;">approved by</span></td>
    </tr>
    <tr>
      <td align="center">&nbsp;</td>
      <td align="center">&nbsp;</td>
      <td align="center">&nbsp;</td>
      <td align="center">&nbsp;</td>
    </tr>
    <tr>
      <td align="center">&nbsp;</td>
      <td align="center">&nbsp;</td>
      <td align="center">&nbsp;</td>
      <td align="center">&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><span style="text-indent: 0pt; line-height: 100%; word-spacing: 0pt; margin: 0pt;">of Claimant</span></td>
      <td align="center"><span style="text-indent: 0pt; line-height: 100%; word-spacing: 0pt; margin: 0pt;">H.O.D</span></td>
      <td align="center"><span style="text-indent: 0pt; line-height: 100%; word-spacing: 0pt; margin: 0pt;">Accounts Section</span></td>
      <td align="center"><span style="text-indent: 0pt; line-height: 100%; word-spacing: 0pt; margin: 0pt;">H.O.D - Finance</span></td>
    </tr>
  </table>
  


  
</form>
</body>
</html>

