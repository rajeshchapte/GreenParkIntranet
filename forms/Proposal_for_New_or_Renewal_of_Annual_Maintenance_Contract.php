<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="../admin/includes/styles1.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GreePark Hotels and Resorts Intranet</title>
<link href="js1/MetroJs.lt.css" rel="stylesheet" type="text/css">
<link href="gphyd/includes/styles1.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../gphyd/includes/styles_w.css">
<script src="js/modernizr-1.5.min.js"></script>
<style>
.col4 {
	float: left;
	margin-right: .5%;
	width: 65%;
	background-color:#f3f3f3;
	padding:15px;
}
</style>
<link rel="stylesheet" href="../includes/jquery-ui.css" />
<script src="../js/jquery-1.9.1.js"></script>
<script src="../js/jquery-ui.js"></script>

<!--<script src="datepicker/jquery-1.9.1.js"></script>
<script src="datepicker/jquery-ui.js"></script>
<link rel="stylesheet" href="datepicker/jquery-ui.css" />-->

<link rel="stylesheet" href="/resources/demos/style.css" />
<script>
 $(function() {
$( "#proposaldate" ).datepicker({
changeMonth: true,
changeYear: true,
dateFormat: "dd/mm/yy"
});
});


</script>
</head>

<body>
<div class="demo-wrapper">
  <div class="dashboard clearfix">
    <ul class="tiles">
      <div class="col1 clearfix">
        <li class="tile tile-big tile-11 slideTextUp" data-page-type="no" data-page-name="no" onclick="location.href='/';">
          <div><img src="../gphyd/images/logo123.png"  width="100" /></div>
          <div>
            <p class="prp_font">HOME</p>
          </div>
        </li>
        <li class="tile tile-big tile-24 rotate3d rotate3dX" data-page-type="no" data-page-name="no" onclick="location.href='../forms.php';">
          <div class="faces">
            <div class="frontforms tiletextfont">
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Forms</p>
            </div>
            <div class="backforms"><img src="../images/forms_icon.png" width="160" /></div>
          </div>
        </li>
      </div>
      <div class="col4 clearfix">
        <h2 style="color:#000000;">Proposal for New or Renewal of Annual Maintenance Contract</h2>
        <hr />
        <div>
          <form action="Proposal_for_New_or_Renewal_of_Annual_Maintenance_Contract_pp.php" method="get" target="POPUPW" onsubmit="POPUPW = window.open('about:blank','POPUPW', 'height=550,width=1000,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');" enctype="multipart/form-data" >
          
            <p class="MsoNormal" style="text-align: center;" align="center">Green Park - <font size="3">
              <select size="1" name="prop" onkeydown="if(event.keyCode==13) event.keyCode=9;">
                <option selected="selected">HYDERABAD</option>
                <option>VISAKHAPATNAM</option>
                <option>CHENNAI</option>
                <option value="MARIGOLD">MARIGOLD</option>
                <option>AVASA</option>
              </select>
              </font> </p>
            <p class="MsoNormal" style="text-align: justify;">&nbsp;<u><b>PROPOSAL FOR
              <select size="1" name="AT" onkeydown="if(event.keyCode==13) event.keyCode=9;">
                <option>NEW</option>
                <option selected="selected">RENEWAL OF</option>
              </select>
              ANNUAL MAINTENANCE CONTRACT</b>
              <o:p> </o:p>
              </u></p>
            <table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tbody>
                <tr>
                  <td width="23%">DEPARTMENT :&nbsp;&nbsp;</td>
                  <td width="36%">&nbsp;
                    <select name="dept" size="1" onkeydown="if(event.keyCode==13) event.keyCode=9;">
                      <option>FRONT OFFICE</option>
                      <option>F &amp; B SERVICE</option>
                      <option>F &amp; B PRODUCTION</option>
                      <option>HOUSE KEEPING</option>
                      <option>ACCOUNTS</option>
                      <option>MAINTENANCE</option>
                      <option>PROJECTS</option>
                      <option>H R D</option>
                      <option>SECURITY</option>
                      <option>IT- Department</option>
                    </select></td>
                  <td width="9%">DATE :</td>
                  <td width="32%"><input name="DATE" onkeydown="if(event.keyCode==13) event.keyCode=9;" size="12" type="text" id="proposaldate"></td>
                </tr>
              </tbody>
            </table>
            <table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tbody>
                <tr>
                  <td colspan="4" width="100%"></td>
                </tr>
                <tr>
                  <td width="36%"><b><u>I) EQUIPMENT DETAILS:</u></b></td>
                  <td width="14%"></td>
                  <td width="28%"></td>
                  <td width="22%"></td>
                </tr>
              </tbody>
            </table>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" height="188">
              <tbody>
                <tr>
                  <td rowspan="2" width="7%" align="center" height="40"><b>SL #</b></td>
                  <td rowspan="2" width="30%" align="center" height="40"><b>DESCRIPTION</b></td>
                  <td rowspan="2" width="19%" align="center" height="40"><b>LOCATION</b></td>
                  <td rowspan="2" width="10%" align="center" height="40"><b>QTY</b></td>
                  <td rowspan="2" width="9%" align="center" height="40"><b>RATE</b></td>
                  <td colspan="2" align="center" height="20"><p align="center"><b>PURCHASE</b></p></td>
                </tr>
                <tr>
                  <td width="14%" align="center" height="20"><b>VALUE</b></td>
                  <td width="11%" align="center" height="20"><b>YEAR</b></td>
                </tr>
                <tr>
                  <td colspan="7" height="25"><hr></td>
                </tr>
                <tr>
                  <td width="7%" height="25" align="center">1.</td>
                  <td width="30%" height="25"><input name="EQD1" onkeydown="if(event.keyCode==13) event.keyCode=9;" size="25" type="text"></td>
                  <td width="19%" height="25"><input name="EQD2" onkeydown="if(event.keyCode==13) event.keyCode=9;" size="17" type="text"></td>
                  <td width="10%" height="25"><input name="EQD3" onkeydown="if(event.keyCode==13) event.keyCode=9;" size="6" type="text"></td>
                  <td width="9%" height="25"><input name="EQD4" onkeydown="if(event.keyCode==13) event.keyCode=9;" size="9" type="text"></td>
                  <td width="14%" height="25"><input name="EQD5" onkeydown="if(event.keyCode==13) event.keyCode=9;" size="12" type="text"></td>
                  <td width="11%" height="25"><input name="EQD6" onkeydown="if(event.keyCode==13) event.keyCode=9;" size="5" type="text"></td>
                </tr>
                <tr>
                  <td width="7%" height="25" align="center">2.</td>
                  <td width="30%" height="25"><input name="EQD7" onkeydown="if(event.keyCode==13) event.keyCode=9;" size="25" type="text"></td>
                  <td width="19%" height="25"><input name="EQD8" onkeydown="if(event.keyCode==13) event.keyCode=9;" size="17" type="text"></td>
                  <td width="10%" height="25"><input name="EQD9" onkeydown="if(event.keyCode==13) event.keyCode=9;" size="6" type="text"></td>
                  <td width="9%" height="25"><input name="EQD10" onkeydown="if(event.keyCode==13) event.keyCode=9;" size="9" type="text"></td>
                  <td width="14%" height="25"><input name="EQD11" onkeydown="if(event.keyCode==13) event.keyCode=9;" size="12" type="text"></td>
                  <td width="11%" height="25"><input name="EQD12" onkeydown="if(event.keyCode==13) event.keyCode=9;" size="5" type="text"></td>
                </tr>
                <tr>
                  <td width="7%" height="25" align="center">3.</td>
                  <td width="30%" height="25"><input name="EQD13" onkeydown="if(event.keyCode==13) event.keyCode=9;" size="25" type="text"></td>
                  <td width="19%" height="25"><input name="EQD14" onkeydown="if(event.keyCode==13) event.keyCode=9;" size="17" type="text"></td>
                  <td width="10%" height="25"><input name="EQD15" onkeydown="if(event.keyCode==13) event.keyCode=9;" size="6" type="text"></td>
                  <td width="9%" height="25"><input name="EQD16" onkeydown="if(event.keyCode==13) event.keyCode=9;" size="9" type="text"></td>
                  <td width="14%" height="25"><input name="EQD17" onkeydown="if(event.keyCode==13) event.keyCode=9;" size="12" type="text"></td>
                  <td width="11%" height="25"><input name="EQD18" onkeydown="if(event.keyCode==13) event.keyCode=9;" size="5" type="text"></td>
                </tr>
                <tr>
                  <td width="7%" height="25" align="center">4.</td>
                  <td width="30%" height="25"><input name="EQD19" onkeydown="if(event.keyCode==13) event.keyCode=9;" size="25" type="text"></td>
                  <td width="19%" height="25"><input name="EQD20" onkeydown="if(event.keyCode==13) event.keyCode=9;" size="17" type="text"></td>
                  <td width="10%" height="25"><input name="EQD21" onkeydown="if(event.keyCode==13) event.keyCode=9;" size="6" type="text"></td>
                  <td width="9%" height="25"><input name="EQD22" onkeydown="if(event.keyCode==13) event.keyCode=9;" size="9" type="text"></td>
                  <td width="14%" height="25"><input name="EQD23" onkeydown="if(event.keyCode==13) event.keyCode=9;" size="12" type="text"></td>
                  <td width="11%" height="25"><input name="EQD24" onkeydown="if(event.keyCode==13) event.keyCode=9;" size="5" type="text"></td>
                </tr>
                <tr>
                  <td width="7%" height="23" align="center">5.</td>
                  <td width="30%" height="23"><input name="EQD25" onkeydown="if(event.keyCode==13) event.keyCode=9;" size="25" type="text"></td>
                  <td width="19%" height="23"><input name="EQD26" onkeydown="if(event.keyCode==13) event.keyCode=9;" size="17" type="text"></td>
                  <td width="10%" height="23"><input name="EQD27" onkeydown="if(event.keyCode==13) event.keyCode=9;" size="6" type="text"></td>
                  <td width="9%" height="23"><input name="EQD28" onkeydown="if(event.keyCode==13) event.keyCode=9;" size="9" type="text"></td>
                  <td width="14%" height="23"><input name="EQD29" onkeydown="if(event.keyCode==13) event.keyCode=9;" size="12" type="text"></td>
                  <td width="11%" height="23"><input name="EQD30" onkeydown="if(event.keyCode==13) event.keyCode=9;" size="5" type="text"></td>
                </tr>
                <tr>
                  <td width="7%" height="25"></td>
                  <td colspan="4" height="25"><p align="right"><b>TOTAL PURCHASE VALUE :</b></p></td>
                  <td width="14%" height="25"><input name="EQD31" onkeydown="if(event.keyCode==13) event.keyCode=9;" size="12" type="text"></td>
                  <td width="11%" height="25"></td>
                </tr>
              </tbody>
            </table>
            <p><b><u>II) EXISTING AMC DETAILS:</u></b></p>
            <hr>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" style="line-height:30px;">
              <tbody>
                <tr>
                  <td width="34%" height="25">WARRANTY EXPIRES ON</td>
                  <td width="23%" height="25"><input name="EQD32" onkeydown="if(event.keyCode==13) event.keyCode=9;" size="20" type="text"></td>
                  <td width="24%" height="25">AMC EXPIRES ON</td>
                  <td width="19%" height="25"><input name="EQD33" onkeydown="if(event.keyCode==13) event.keyCode=9;" size="15" type="text"></td>
                </tr>
                <tr>
                  <td width="34%" height="25">NAME OF THE SUPPLIER</td>
                  <td width="66%" height="25" colspan="3"><input name="EQD34" onkeydown="if(event.keyCode==13) event.keyCode=9;" size="61" type="text"></td>
                </tr>
                <tr>
                  <td width="34%" height="25">AMC VALUE</td>
                  <td width="47%" height="25" colspan="2"><input name="EQD35" onkeydown="if(event.keyCode==13) event.keyCode=9;" size="36" type="text"></td>
                  <td width="19%" height="25"></td>
                </tr>
                <tr>
                  <td height="25">&nbsp;</td>
                  <td height="25" colspan="2">&nbsp;</td>
                  <td height="25"></td>
                </tr>
              </tbody>
            </table>
            <p><b><u>III)&nbsp; A. SERVICE DETAILS</u></b>:</p>
            <hr>
            
            <table width="100%" border="0" cellpadding="0" cellspacing="0" style="line-height:30px;">
              <tbody>
                <tr>
                  <td width="35%" align="center"><b>PARTICULARS</b></td>
                  <td width="16%" align="center"><b>GOOD</b></td>
                  <td width="12%" align="center"><b>FAIR</b></td>
                  <td width="25%" align="center"><b>SATISFACTORY</b></td>
                  <td width="12%" align="center"><b>POOR</b></td>
                </tr>
                <tr>
                  <td width="35%">KNOWLEDGE OF ENGINEERS</td>
                  <td width="16%" align="center"><input value="GOOD" name="EQD36"  type="radio"></td>
                  <td width="12%" align="center"><input value="FAIR" name="EQD36"  type="radio"></td>
                  <td width="25%" align="center"><input value="SATISFACTORY" name="EQD36" type="radio"></td>
                  <td width="12%" align="center"><input value="POOR" name="EQD36" type="radio"></td>
                </tr>
                <tr>
                  <td width="35%">RESPONSE TIME</td>
                  <td width="16%" align="center"><input value="GOOD" name="EQD40" type="radio"></td>
                  <td width="12%" align="center"><input value="FAIR" name="EQD40" type="radio"></td>
                  <td width="25%" align="center"><input value="SATISFACTORY" name="EQD40" type="radio"></td>
                  <td width="12%" align="center"><input value="POOR" name="EQD40" type="radio"></td>
                </tr>
                <tr>
                  <td width="35%">AVAILABILITY OF SPARES</td>
                  <td width="16%" align="center"><input value="GOOD" name="EQD44" type="radio"></td>
                  <td width="12%" align="center"><input value="FAIR" name="EQD44" type="radio"></td>
                  <td width="25%" align="center"><input value="SATISFACTORY" name="EQD44" type="radio"></td>
                  <td width="12%" align="center"><input value="POOR" name="EQD44" type="radio"></td>
                </tr>
                <tr>
                  <td width="35%">OVER ALL RATING</td>
                  <td width="16%" align="center"><input value="GOOD" name="EQD48" type="radio"></td>
                  <td width="12%" align="center"><input value="FAIR" name="EQD48" type="radio"></td>
                  <td width="25%" align="center"><input value="SATISFACTORY" name="EQD48" type="radio"></td>
                  <td width="12%" align="center"><input value="POOR" name="EQD48" type="radio"></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td align="center">&nbsp;</td>
                  <td align="center">&nbsp;</td>
                  <td align="center">&nbsp;</td>
                  <td align="center">&nbsp;</td>
                </tr>
              </tbody>
            </table>
           
            <p><b>B. No of Visits by Contractor during last AMC Period</b></p>
            <hr>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" style="line-height:30px;">
              <tbody>
                <tr>
                  <td width="50%">Scheduled Maintenance Calls</td>
                  <td width="50%">: 
                  <input name="EQD52" onkeydown="if(event.keyCode==13) event.keyCode=9;" size="20" type="text"></td>
                </tr>
                <tr>
                  <td width="50%">Repair Calls</td>
                  <td width="50%">: 
                  <input name="EQD53" onkeydown="if(event.keyCode==13) event.keyCode=9;" size="20" type="text"></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
              </tbody>
            </table>
            <p><b><u>IV) AMC PROPOSAL DETAILS:</u></b></p>
            <hr>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" style="line-height:30px;">
              <tbody>
                <tr>
                  <td colspan="2" width="41%">NAME OF THE AMC SUPPLIER</td>
                  <td colspan="4" width="62%"><input name="EQD54" onkeydown="if(event.keyCode==13) event.keyCode=9;" size="57" type="text"></td>
                </tr>
                <tr>
                  <td width="27%">PERIOD OF AMC:</td>
                  <td width="14%"></td>
                  <td width="12%" align="right">FROM:</td>
                  <td width="19%" align="left"><input name="EQD55" onkeydown="if(event.keyCode==13) event.keyCode=9;" size="17" type="text"></td>
                  <td width="5%">TO:</td>
                  <td width="26%"><input name="EQD56" onkeydown="if(event.keyCode==13) event.keyCode=9;" size="20" type="text"></td>
                </tr>
              </tbody>
            </table>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" style="line-height:30px;">
              <tbody>
                <tr>
                  <td width="60%" align="left">TOTAL AMC VALUE</td>
                  <td width="40%" align="left"><input name="EQD57" onkeydown="if(event.keyCode==13) event.keyCode=9;" size="20" type="text"></td>
                </tr>
                <tr>
                  <td width="60%" align="left">LAST YEAR AMC VALUE</td>
                  <td width="40%" align="left"><input name="EQD58" onkeydown="if(event.keyCode==13) event.keyCode=9;" size="20" type="text"></td>
                </tr>
                <tr>
                  <td width="60%" align="left">% OF INCREASE&nbsp;&nbsp; /&nbsp;&nbsp;&nbsp;&nbsp; DECREASE IN AMC</td>
                  <td width="40%" align="left"><input name="EQD59" onkeydown="if(event.keyCode==13) event.keyCode=9;" size="20" type="text"></td>
                </tr>
                <tr>
                  <td width="60%" align="left">AMC COST % TO PURCHASE VALUE</td>
                  <td width="40%" align="left"><input name="EQD60" onkeydown="if(event.keyCode==13) event.keyCode=9;" size="20" type="text"></td>
                </tr>
                <tr>
                  <td width="60%" align="left">WHETHER AMC INCLUDES</td>
                  <td width="40%" align="left"><p class="MsoNormal" style="text-align: justify;">
                      <select size="1" name="EQD61" onkeydown="if(event.keyCode==13) event.keyCode=9;">
                        <option>LABOUR</option>
                        <option>MATERIAL</option>
                        <option>BOTH LABOUR &amp; MATERIAL</option>
                      </select>
                    </p></td>
                </tr>
                <tr>
                  <td width="60%" align="left">REASONS FOR CHANGING THE SUPPLIER IF ANY </td>
                  <td width="40%" align="left"><input name="EQD62" onkeydown="if(event.keyCode==13) event.keyCode=9;" size="35" type="text"></td>
                </tr>
                <tr>
                  <td align="left">&nbsp;</td>
                  <td align="left">&nbsp;</td>
                </tr>
              </tbody>
            </table>
            <hr>
            <p>** Note :- the format is of&nbsp; TWO pages and to see the 2nd page use "Preview" </p>
            <p style="float:right;">
              <input value="Print Prevew" name="PRNVEW" type="submit"  class="ubutton"/>
            </p>
          </form>
          <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center">&nbsp;</p>
        </div>
      </div>
    </ul>
  </div>
</div>
<script src="js/jquery-1.8.2.min.js"></script> 
<script src="js/scripts.js"></script> 
<script src="js1/jquery-1.7.1.min.js" type="text/javascript"></script> 
<script src="js1/MetroJs.lt.js" type="text/javascript"></script> 
<script type="text/javascript">
        $(document).ready(function () {
            $(".live-tile,.flip-list").liveTile();
        });
    </script>
</body>
</html>