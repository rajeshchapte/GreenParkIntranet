
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
</head>

<body>
<div class="demo-wrapper">
  
  
  
  <div class="dashboard clearfix">
        <ul class="tiles">
          <div class="col1 clearfix">
          
            <li class="tile tile-big tile-11 slideTextUp" data-page-type="no" data-page-name="no" onclick="location.href='/';">
              <div><img src="../gphyd/images/logo123.png"  width="100" /></div>
              <div><p class="prp_font">HOME</p></div>
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
           
           <h2 style="color:#000000;">TRAVEL EXPENSES REIMBURSEMENT</h2>
                <hr />
               <div>
	        	

<form action="TRAVEL_EXPENSES_REIMBURSEMENT_pp.php" method="get" target="POPUPW" onsubmit="POPUPW = window.open('about:blank','POPUPW', 'height=550,width=1000,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');" enctype="multipart/form-data" >

 
  <input name="VTI-GROUP" value="0" type="hidden">

<p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center">&nbsp;</p>

<p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center"><font size="4"><b>
GREENPARK - 
      <select size="1" name="T1" onkeyup='Fchang(this,"T1")'>
  <option selected="selected">HYDERABAD</option>
  <option>VISAKHAPATNAM</option>
  <option>CHENNAI</option>
<option value="MARIGOLD">MARIGOLD BY GREENPARK</option>
<option> HOTEL AVASA</option>
</select></b></font></p>

<p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center">&nbsp;&nbsp;</p>

<p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center"><b>
 TRAVEL EXPENSES REIMBURSEMENT</b><br />
 (to be submitted within 3 working days of travel)</p>
  <hr noshade="noshade" color="#000000">
  <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="150%" height="25" align="center" valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="46%" height="25" colspan="2" align="left">Date</td>
        <td width="2%" align="center" valign="middle">:</td>
        <td width="52%" height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
          <input name="T2" size="30" maxlength="30" onkeyup='Fchang(this,&quot;T3&quot;)' type="text" />
          </span></td>
      </tr>
      <tr>
        <td width="46%" height="25" colspan="2" align="left">Name</td>
        <td align="center" valign="middle">:</td>
        <td height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
          <input name="T3" size="30" maxlength="30" onkeyup='Fchang(this,&quot;T4&quot;)' type="text" />
          </span></td>
        </tr>
      <tr>
        <td height="25" colspan="2" align="left">Department</td>
        <td align="center" valign="middle">:</td>
        <td height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
          <input name="T4" size="30" maxlength="30" onkeyup='Fchang(this,&quot;T5&quot;)' type="text" />
          </span></td>
        </tr>
      <tr>
        <td height="25" colspan="2" align="left">Cadre</td>
        <td align="center" valign="middle">:</td>
        <td height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
          <input name="T5" size="30" maxlength="30" onkeyup='Fchang(this,&quot;T5&quot;)' type="text" />
        </span></td>
        </tr>
      <tr align="center" valign="top">
        <td height="15" colspan="4"></td>
        </tr>
      <tr>
        <td height="25" colspan="4" align="center" valign="middle"><strong>DETAILS OF TRAVEL SCHEDULE</strong>:</td>
        </tr>
      <tr>
        <td height="25" colspan="4" align="left"><hr /></td>
        </tr>
      <tr>
        <td height="25" colspan="4" align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
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
                  <input name="T6" size="10" maxlength="10" onkeyup='Fchang(this,&quot;T11&quot;)' type="text" />
                  </span></td>
                <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                  <input name="T7" size="10" maxlength="10" onkeyup='Fchang(this,&quot;T11&quot;)' type="text" />
                  </span></td>
                <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                  <input name="T8" size="10" maxlength="10" onkeyup='Fchang(this,&quot;T11&quot;)' type="text" />
                  </span></td>
                <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                  <input name="T9" size="10" maxlength="10" onkeyup='Fchang(this,&quot;T11&quot;)' type="text" />
                  </span></td>
              </tr>
              <tr>
                <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                  <input name="T14" size="10" maxlength="10" onkeyup='Fchang(this,&quot;T11&quot;)' type="text" />
                </span></td>
                <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                  <input name="T15" size="10" maxlength="10" onkeyup='Fchang(this,&quot;T11&quot;)' type="text" />
                </span></td>
                <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                  <input name="T16" size="10" maxlength="10" onkeyup='Fchang(this,&quot;T11&quot;)' type="text" />
                </span></td>
                <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                  <input name="T17" size="10" maxlength="10" onkeyup='Fchang(this,&quot;T11&quot;)' type="text" />
                </span></td>
              </tr>
              <tr>
                <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                  <input name="T22" size="10" maxlength="10" onkeyup='Fchang(this,&quot;T11&quot;)' type="text" />
                </span></td>
                <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                  <input name="T23" size="10" maxlength="10" onkeyup='Fchang(this,&quot;T11&quot;)' type="text" />
                </span></td>
                <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                  <input name="T24" size="10" maxlength="10" onkeyup='Fchang(this,&quot;T11&quot;)' type="text" />
                </span></td>
                <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                  <input name="T25" size="10" maxlength="10" onkeyup='Fchang(this,&quot;T11&quot;)' type="text" />
                </span></td>
              </tr>
            </table></td>
            <td height="25" align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="25" align="center" valign="middle">&nbsp;</td>
                <td height="25" colspan="2" align="center" valign="middle">No.of Mode of</td>
                <td height="25" align="center" valign="middle">&nbsp;</td>
              </tr>
              <tr>
                <td height="25" align="center" valign="middle">Date</td>
                <td height="25" align="center" valign="middle">Time</td>
                <td height="25" align="center" valign="middle">Days</td>
                <td height="25" align="center" valign="middle">Travel</td>
              </tr>
              <tr>
                <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                  <input name="T10" size="10" maxlength="10" onkeyup='Fchang(this,&quot;T11&quot;)' type="text" />
                  </span></td>
                <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                  <input name="T11" size="10" maxlength="10" onkeyup='Fchang(this,&quot;T11&quot;)' type="text" />
                  </span></td>
                <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                  <input name="T12" size="10" maxlength="10" onkeyup='Fchang(this,&quot;T11&quot;)' type="text" />
                  </span></td>
                <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                  <input name="T13" size="10" maxlength="10" onkeyup='Fchang(this,&quot;T11&quot;)' type="text" />
                  </span></td>
              </tr>
              <tr>
                <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                  <input name="T18" size="10" maxlength="10" onkeyup='Fchang(this,&quot;T11&quot;)' type="text" />
                </span></td>
                <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                  <input name="T19" size="10" maxlength="10" onkeyup='Fchang(this,&quot;T11&quot;)' type="text" />
                </span></td>
                <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                  <input name="T20" size="10" maxlength="10" onkeyup='Fchang(this,&quot;T11&quot;)' type="text" />
                </span></td>
                <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                  <input name="T21" size="10" maxlength="10" onkeyup='Fchang(this,&quot;T11&quot;)' type="text" />
                </span></td>
              </tr>
              <tr>
                <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                  <input name="T26" size="10" maxlength="10" onkeyup='Fchang(this,&quot;T11&quot;)' type="text" />
                </span></td>
                <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                  <input name="T27" size="10" maxlength="10" onkeyup='Fchang(this,&quot;T11&quot;)' type="text" />
                </span></td>
                <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                  <input name="T28" size="10" maxlength="10" onkeyup='Fchang(this,&quot;T11&quot;)' type="text" />
                </span></td>
                <td height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
                  <input name="T29" size="10" maxlength="10" onkeyup='Fchang(this,&quot;T11&quot;)' type="text" />
                </span></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td height="25">&nbsp;</td>
            <td height="25">&nbsp;</td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td height="25" colspan="4" align="center" valign="middle"><hr /></td>
        </tr>
      <tr>
        <td height="25" colspan="3" rowspan="2" align="center" valign="middle">EXPENSES</td>
        <td height="25" align="center">AMOUNT INCURRED</td>
      </tr>
      <tr>
        <td height="25" align="left"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="25" align="center" valign="middle">By Company</td>
            <td height="25" align="center" valign="middle">By Self</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="25" colspan="4" align="left"><hr /></td>
        </tr>
      <tr>
        <td height="25" colspan="4" align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="25" align="left" valign="middle">1.</td>
            <td height="25"> Fare Ticket No.</td>
            <td width="200" height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
              <input name="T30" size="20" maxlength="10" onkeyup='Fchang(this,&quot;T11&quot;)' type="text" />
            </span></td>
            <td width="200" height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
              <input name="T31" size="20" maxlength="10" onkeyup='Fchang(this,&quot;T11&quot;)' type="text" />
            </span></td>
            <td width="200" height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
              <input name="T32" size="20" maxlength="10" onkeyup='Fchang(this,&quot;T11&quot;)' type="text" />
            </span></td>
          </tr>
          <tr>
            <td height="25" align="left" valign="middle">2.</td>
            <td height="25"> Hotel Bill No.</td>
            <td width="200" height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
              <input name="T33" size="20" maxlength="10" onkeyup='Fchang(this,&quot;T11&quot;)' type="text" />
            </span></td>
            <td width="200" height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
              <input name="T34" size="20" maxlength="10" onkeyup='Fchang(this,&quot;T11&quot;)' type="text" />
            </span></td>
            <td width="200" height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
              <input name="T35" size="20" maxlength="10" onkeyup='Fchang(this,&quot;T11&quot;)' type="text" />
            </span></td>
            </tr>
          <tr>
            <td height="25" align="left" valign="middle">3. </td>
            <td height="25">Daily Allowance</td>
            <td width="200" height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
              <input name="T36" size="20" maxlength="10" onkeyup='Fchang(this,&quot;T11&quot;)' type="text" />
            </span></td>
            <td width="200" height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
              <input name="T37" size="20" maxlength="10" onkeyup='Fchang(this,&quot;T11&quot;)' type="text" />
            </span></td>
            <td width="200" height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
              <input name="T38" size="20" maxlength="10" onkeyup='Fchang(this,&quot;T11&quot;)' type="text" />
            </span></td>
            </tr>
          <tr>
            <td height="25" align="left" valign="middle">4.</td>
            <td height="25" align="left"> Local Conveyance}</td>
            <td width="200" align="left" valign="middle">Provide</td>
            <td width="200" height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
              <input name="T39" size="20" maxlength="10" onkeyup='Fchang(this,&quot;T11&quot;)' type="text" />
            </span></td>
            <td width="200" height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
              <input name="T40" size="20" maxlength="10" onkeyup='Fchang(this,&quot;T11&quot;)' type="text" />
            </span></td>
            </tr>
          <tr>
            <td height="25" align="left" valign="middle">5. </td>
            <td height="25" align="left">Other incidental exp.}</td>
            <td width="200" align="left" valign="middle">Details</td>
            <td width="200" height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
              <input name="T41" size="20" maxlength="10" onkeyup='Fchang(this,&quot;T11&quot;)' type="text" />
            </span></td>
            <td width="200" height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
              <input name="T42" size="20" maxlength="10" onkeyup='Fchang(this,&quot;T11&quot;)' type="text" />
            </span></td>
            </tr>
          <tr>
            <td height="25" align="left" valign="middle">6. </td>
            <td height="25" align="left">Any Others (Specify)}</td>
            <td width="200" align="left" valign="middle">Separately</td>
            <td width="200" height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
              <input name="T43" size="20" maxlength="10" onkeyup='Fchang(this,&quot;T11&quot;)' type="text" />
            </span></td>
            <td width="200" height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
              <input name="T44" size="20" maxlength="10" onkeyup='Fchang(this,&quot;T11&quot;)' type="text" />
            </span></td>
          </tr>
          <tr>
            <td height="25">&nbsp;</td>
            <td height="25" align="right">&nbsp;</td>
            <td width="200" height="25" align="right" valign="middle"><strong>Total</strong></td>
            <td width="200" height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
              <input name="T45" size="20" maxlength="10" onkeyup='Fchang(this,&quot;T11&quot;)' type="text" />
            </span></td>
            <td width="200" height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
              <input name="T46" size="20" maxlength="10" onkeyup='Fchang(this,&quot;T11&quot;)' type="text" />
            </span></td>
          </tr>
          <tr>
            <td height="25">&nbsp;</td>
            <td height="25" align="right">&nbsp;</td>
            <td width="200" height="25">&nbsp;</td>
            <td width="200" height="25">&nbsp;</td>
            <td width="200" height="25">&nbsp;</td>
          </tr>
          <tr>
            <td height="25" align="right" valign="middle">&nbsp;</td>
            <td height="25" colspan="2" align="right" valign="middle">LESS:Advance taken</td>
            <td width="200" height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
              <input name="T47" size="20" maxlength="10" onkeyup='Fchang(this,&quot;T11&quot;)' type="text" />
            </span></td>
            <td width="200" height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
              <input name="T48" size="20" maxlength="10" onkeyup='Fchang(this,&quot;T11&quot;)' type="text" />
            </span></td>
          </tr>
          <tr>
            <td height="25" colspan="3" align="right" valign="middle">NET AMOUNT DUE TO SELF / COMPANY</td>
            <td width="200" height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
              <input name="T49" size="20" maxlength="10" onkeyup='Fchang(this,&quot;T11&quot;)' type="text" />
            </span></td>
            <td width="200" height="25" align="center" valign="middle"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
              <input name="T50" size="20" maxlength="10" onkeyup='Fchang(this,&quot;T11&quot;)' type="text" />
            </span></td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td align="left">&nbsp;</td>
        <td width="46%" height="25" align="left">&nbsp;</td>
        <td align="center" valign="middle">&nbsp;</td>
        <td height="25" align="left">&nbsp;</td>
      </tr>
      <tr align="center" valign="top">
        <td height="25" colspan="4"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="25">&nbsp;</td>
            <td height="25">&nbsp;</td>
            <td height="25">&nbsp;</td>
            <td height="25">&nbsp;</td>
            <td height="25">&nbsp;</td>
          </tr>
          <tr>
            <td width="20%" height="25" align="center" valign="middle">Signature of Traveller</td>
            <td width="20%" height="25" align="center" valign="middle">Scrutinised By</td>
            <td width="20%" height="25" align="center" valign="middle">Approval:HOD</td>
            <td width="20%" height="25" align="center" valign="middle">Unit Head</td>
            <td width="20%" height="25" align="center" valign="middle">CEO</td>
          </tr>
          <tr>
            <td height="25">&nbsp;</td>
            <td height="25">&nbsp;</td>
            <td height="25">&nbsp;</td>
            <td height="25">&nbsp;</td>
            <td height="25">&nbsp;</td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td height="25" colspan="4" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="24%" height="25">Received /  Refunded Rs.</td>
            <td width="16%" height="25">&nbsp;</td>
            <td width="8%" height="25" align="left" valign="top">(Rupees</td>
            <td width="42%" height="25" align="left" valign="top">&nbsp;</td>
            <td width="10%" height="25" align="left" valign="top">Only)</td>
          </tr>
        </table></td>
      </tr>
      
      <tr>
        <td height="25" colspan="4" align="left"><hr /></td>
        </tr>
      <tr>
        <td align="left">Recipt No :</td>
        <td height="25" align="left">Date:</td>
        <td align="center" valign="middle">&nbsp;</td>
        <td height="25" align="left">Debit:</td>
      </tr>
      <tr>
        <td align="left">&nbsp;</td>
        <td height="25" align="left">&nbsp;</td>
        <td align="center" valign="middle">&nbsp;</td>
        <td height="25" align="left">&nbsp;</td>
      </tr>
      <tr>
        <td align="left">&nbsp;</td>
        <td height="25" align="left">&nbsp;</td>
        <td align="center" valign="middle">&nbsp;</td>
        <td height="25" align="left"><b>
          <input value="Reset" name="Reset" type="Reset"  class="ubutton"/>
          <input value="Print Prevew" name="PRNVEW" type="submit"  class="ubutton"/>
          </b></td>
      </tr>
      </table></td>
  </tr>
</table>

  

 
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