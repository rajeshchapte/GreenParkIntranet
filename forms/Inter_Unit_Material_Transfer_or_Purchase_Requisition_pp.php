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
<form action="Inter_Unit_Material_Transfer_or_Purchase_Requisition_pp.php" method="get" target="POPUPW" onSubmit="POPUPW = window.open('about:blank','POPUPW', 'height=550,width=1000,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');" enctype="multipart/form-data" >


  <input name="VTI-GROUP" value="0" type="hidden">
  <p align="center"><b>GREEN PARK - <?php echo $_GET[PROP]; ?></b></p>
  <p align="center"><b>INTER UNIT MATERIAL 
  <?php echo $_GET[D1]; ?>
  
  REQUISITION</b></p>
  <p align="center"><b>It is proposed to procure / transfer&nbsp; the following
  materials , on behalf of / to&nbsp;&nbsp;&nbsp;</b></p>
  <p align="center"><b> Green Park,&nbsp; 
  
  <?php echo $_GET[D2]; ?>
  
  unit</b></p>
  <hr>
  
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="25" align="center" valign="middle"><strong>S.#.</strong></td>
    <td height="25" align="center" valign="middle"><strong>MATERIAL DESCRIPTION</strong></td>
    <td height="25" align="center" valign="middle"><strong>UOM</strong></td>
    <td height="25" align="center" valign="middle"><strong>QTY</strong></td>
    <td height="25" align="center" valign="middle"><strong>REMARKS</strong><BR /></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">1.</td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD04]; ?></td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD03]; ?></td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD02]; ?></td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD01]; ?></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">2.</td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD1]; ?></td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD2]; ?></td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD3]; ?></td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD4]; ?></td>
    </tr>
  <tr>
    <td height="25" align="center" valign="middle">3.</td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD5]; ?></td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD6]; ?></td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD7]; ?></td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD8]; ?></td>
    </tr>
  <tr>
    <td height="25" align="center" valign="middle">4.</td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD9]; ?></td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD10]; ?></td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD11]; ?></td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD12]; ?></td>
    </tr>
  <tr>
    <td height="25" align="center" valign="middle">5.</td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD13]; ?></td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD14]; ?></td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD15]; ?></td>
    <td height="25" align="center" valign="middle"><?php echo $_GET[MD16]; ?></td>
    </tr>
  <tr>
    <td height="25" align="center" valign="middle" colspan="5"><hr /></td>
    
  </tr>
  <tr>
    <td height="25" colspan="5" align="center" valign="middle"><table width="100%" border="0">
      <tbody>
        <tr>
          <td align="center">&nbsp;</td>
          <td align="center">&nbsp;</td>
          <td align="center"></td>
          <td align="center"></td>
        </tr>
        <tr>
          <td width="33%" align="center">Requisition By</td>
          <td width="18%" align="center"> Verified By</td>
          <td width="49%" align="center"></td>
          <td width="23%" align="center"></td>
        </tr>
        <tr>
          <td align="center">&nbsp;</td>
          <td align="center">&nbsp;</td>
          <td align="center">&nbsp;</td>
          <td align="center">&nbsp;</td>
        </tr>
        <tr>
          <td width="33%" align="center">&nbsp;&nbsp;</td>
          <td width="18%" align="center">&nbsp;</td>
          <td width="49%" align="center">&nbsp;</td>
          <td width="23%" align="center">&nbsp;</td>
        </tr>
        <tr>
          <td width="33%" align="left">Name&nbsp; : <?php echo $_GET[RQNAME]; ?></td>
          <td width="18%" align="center">Stores Incharge</td>
          <td colspan="2" width="49%"><p align="center">Unit Head</p></td>
        </tr>
        <tr>
          <td width="33%" align="left">Design.: <?php echo $_GET[RQDESG]; ?></td>
          <td width="18%" align="center"></td>
          <td width="49%" align="center"></td>
          <td width="23%" align="center"></td>
        </tr>
        <tr>
          <td width="33%" align="left">Date&nbsp;&nbsp; &nbsp;: <?php echo $_GET[DT1]; ?></td>
          <td width="18%" align="center"></td>
          <td width="49%" align="center"></td>
          <td width="23%" align="center"></td>
        </tr>
        <tr>
          <td align="left">&nbsp;</td>
          <td align="center"></td>
          <td align="center"></td>
          <td align="center"></td>
        </tr>
        <tr>
          <td align="left">&nbsp;</td>
          <td align="center"></td>
          <td align="center"></td>
          <td align="center"></td>
        </tr>
        <tr>
          <td colspan="4" align="left"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="14%" colspan="2"><b>Note
                :</b> To be prepared in
                TRIPLICATE.(&nbsp; Print THREE Copies).</td>
              <td width="4%">&nbsp;</td>
            </tr>
            <tr>
              <td width="14%">&nbsp;</td>
              <td width="82%">&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;">Distribution
                :</span></td>
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
              <td><span class="MsoNormal">Original&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;-&nbsp;&nbsp;&nbsp; Stores.
                <o:p></o:p>
              </span></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><span class="MsoNormal" style="word-spacing: 0in;">Duplicate&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -&nbsp;&nbsp;&nbsp;
                A/C S Department.</span></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><span style="font-size: 12pt; font-family: &quot;Times New Roman&quot;;">Master Copy&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp; Purchase Department.</span></td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table></td>
        </tr>
      </tbody>
    </table></td>
    </tr>
  </table>
  <hr>


 
</form>
</body>
</html>
