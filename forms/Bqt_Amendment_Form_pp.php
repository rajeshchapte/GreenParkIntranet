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
<form method="get" action="Bqt_Amendment_Form_pp.php" target="POPUPW" onSubmit="POPUPW = window.open('about:blank','POPUPW', 'height=550,width=1000,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');" enctype="multipart/form-data">
  <input name="VTI-GROUP" value="0" type="hidden">
  <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center">&nbsp;</p>
  <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center"><font size="4"><b>Green Park - <?php echo $_GET[PROP]; ?>
    
  </b></font></p>
  <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center">&nbsp;&nbsp;</p>
  <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center"><b>BANQUET AMENDMENT FORM</b></p>
  <hr color="#000000" noshade="noshade">
  <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="28%" height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;">1. Sl. No </span></td>
      <td width="1%" height="25"><strong>:</strong></td>
      <td width="27%" height="25"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;">
       <?php echo $_GET[SLNO]; ?>
       
      </span></td>
      <td width="11%" height="25"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;">2. Date </span></td>
      <td width="1%" height="25"><strong>:</strong></td>
      <td width="29%" height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;">
        <?php echo $_GET[DATE]; ?>
       
      </span></td>
      <td width="3%" height="25">&nbsp;</td>
    </tr>
    <tr>
      <td height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">3. F.P. No </span></td>
      <td height="25"><strong>:</strong></td>
      <td height="25"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
      <?php echo $_GET[FPNO]; ?>
        
      </span></td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
    </tr>
    <tr>
      <td height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">4. Date of Function </span></td>
      <td height="25"><strong>:</strong></td>
      <td height="25"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
      <?php echo $_GET[DOF]; ?>
      
      </span></td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
    </tr>
    <tr>
      <td height="25" align="left">5.<span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;"> Party Name </span></td>
      <td height="25"><strong>:</strong></td>
      <td height="25"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
      <?php echo $_GET[PNAME]; ?>
        
      </span></td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
    </tr>
    <tr>
      <td height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">6.  Host Name </span></td>
      <td height="25"><strong>:</strong></td>
      <td height="25"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
      <?php echo $_GET[HNAME]; ?>
       
      </span></td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
    </tr>
    <tr>
      <td height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">7.</span> <span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;"> Rate </span></td>
      <td height="25"><strong>:</strong></td>
      <td height="25"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
        <?php echo $_GET[RATE]; ?>
        
      </span></td>
      <td height="25"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">8. Reference </span></td>
      <td height="25"><strong>:</strong></td>
      <td height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
        <?php echo $_GET[REF]; ?>

      </span></td>
      <td height="25">&nbsp;</td>
    </tr>
    <tr>
      <td height="25" align="left">9.<span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">Guaranteed pax </span></td>
      <td height="25"><strong>:</strong></td>
      <td height="25"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
      <?php echo $_GET[GPAX]; ?>

      </span></td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
    </tr>
    <tr>
      <td height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">10.  Expected Pax </span></td>
      <td height="25"><strong>:</strong></td>
      <td height="25"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
      <?php echo $_GET[EPAX]; ?>

      </span></td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
    </tr>
    <tr>
      <td height="25" align="left">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
    </tr>
    <tr>
      <td height="25" align="left" style="border:1px solid #000000; padding-left:10px;"><b>Amendment Type </b></td>
      <td height="25">&nbsp;</td>
      <td height="25" colspan="5" style="border:1px solid #000000;"><font size="4"><b>
      <?php echo $_GET[AMENTYPE]; ?>
      </b></font></td>
      
      
    </tr>
    <tr>
      <td height="25" align="left">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
    </tr>
    <tr>
      <td height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">1.  Existing </span></td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
    </tr>
    <tr>
      <td height="25" colspan="3" align="left" style="padding-left:25px;"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
      <?php echo $_GET[ED1]; ?>

      </span></td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
    </tr>
    <tr>
      <td height="25" colspan="3" align="left" style="padding-left:25px;"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
      <?php echo $_GET[ED2]; ?>

      </span></td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
    </tr>
    <tr>
      <td height="25" colspan="3" align="left" style="padding-left:25px;"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
      <?php echo $_GET[ED3]; ?>

      </span></td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
    </tr>
    <tr>
      <td height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">2.  Revised </span></td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
    </tr>
    <tr>
      <td height="25" colspan="3" align="left" style="padding-left:25px;"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
      <?php echo $_GET[RE1]; ?>

      </span></td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
    </tr>
    <tr>
      <td height="25" colspan="3" align="left" style="padding-left:25px;"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
      <?php echo $_GET[RE2]; ?>

      </span></td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
    </tr>
    <tr>
      <td height="25" colspan="3" align="left" style="padding-left:25px;"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
      <?php echo $_GET[RE3]; ?>

      </span></td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
    </tr>
    <tr>
      <td height="25" align="left">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
    </tr>
    <tr>
      <td height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">Proposed By </span></td>
      <td height="25"><strong>:</strong></td>
      <td height="25"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;"><?php echo $_GET[PROPBY]; ?></span></td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
    </tr>
    <tr>
      <td height="25" align="left">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
    </tr>
    <tr>
      <td height="25" align="left">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25" align="center"><font size="3">F&amp;B Manager</font></td>
      <td height="25">&nbsp;</td>
      <td height="25">&nbsp;</td>
      <td height="25" align="center"><font size="3">Unit
   Head</font></td>
      <td height="25">&nbsp;</td>
    </tr>
    <tr>
      <td height="25" colspan="7" align="center">&nbsp;</td>
    </tr>
  </table>
</form>

</body>
</html>
