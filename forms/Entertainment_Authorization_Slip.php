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
        <h2 style="color:#000000;">Entertainment Authorization Slip</h2>
        <hr />
        <div>
          <form action="Entertainment_Authorization_Slip_pp.php" method="get" target="POPUPW" onsubmit="POPUPW = window.open('about:blank','POPUPW', 'height=550,width=1000,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');" enctype="multipart/form-data" >
                    <input name="VTI-GROUP" value="0" type="hidden">
                    <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center">&nbsp;</p>
                    <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center"><font size="4"><b>Green
                      Park -
                      <select size="1" name="PROP" onkeyup='Fchang(this,"T1")'>
                        <option selected="selected">HYDERABAD</option>
                        <option>VISAKHAPATNAM</option>
                        <option>CHENNAI</option>
                        <option value="MARIGOLD">MARIGOLD</option>
                        <option>AVASA</option>
                      </select>
                      </b></font></p>
                    <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center">&nbsp;&nbsp;</p>
                    <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center"><b><font size="4">ENTERTAINMENT
                      AUTHORIZATION&nbsp;</font></b></p>
                    <hr color="#000000" noshade="noshade">
                    <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="25"><strong>A. DETAILS OF THE PROPOSER</strong></td>
                        <td height="25">&nbsp;</td>
                        <td height="25"></td>
                      </tr>
                      <tr>
                        <td height="25">i) NAME OF THE PROPOSER </td>
                        <td height="25" align="center" valign="middle">:</td>
                        <td height="25"><input name="T1" size="30" maxlength="30" onkeyup='Fchang(this,"T2")' type="text"></td>
                      </tr>
                      <tr>
                        <td height="25">ii) DESIGNATION </td>
                        <td height="25" align="center" valign="middle">:</td>
                        <td height="25"><input name="T2" size="30" maxlength="30" onkeyup='Fchang(this,"T3")' type="text"></td>
                      </tr>
                      <tr>
                        <td height="25">iii) <span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">DEPARTMENT</span></td>
                        <td height="25" align="center" valign="middle">:</td>
                        <td height="25"><input name="T3" size="30" maxlength="30" onkeyup='Fchang(this,"T4")' type="text"></td>
                      </tr>
                      <tr>
                        <td height="25">&nbsp;</td>
                        <td height="25" align="center" valign="middle">&nbsp;</td>
                        <td height="25">&nbsp;</td>
                      </tr>
                      <tr>
                        <td height="25"><b>B. DETAILS OF THE GUEST</b></td>
                        <td height="25" align="center" valign="middle">&nbsp;</td>
                        <td height="25">&nbsp;</td>
                      </tr>
                      <tr>
                        <td height="25"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;">i)</span> <span style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;">PROPERTY NAME</span></td>
                        <td height="25" align="center" valign="middle">:</td>
                        <td height="25"><select size="1" name="D1" onkeyup='Fchang(this,"T1")'>
                            <option selected="selected">GREENPARK-HYDERABAD</option>
                            <option>GREENPARK-VISAKHAPATNAM</option>
                            <option>GREENPARK-CHENNAI</option>
                            <option>MARIGOLD BY GREENPARK</option>
                            <option>AVASA</option>
                          </select></td>
                      </tr>
                      <tr>
                        <td height="25"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">ii)</span> <span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">NAME OF THE
                          GUEST</span></td>
                        <td height="25" align="center" valign="middle">:</td>
                        <td height="25"><input name="T4" size="45" maxlength="45" onkeyup='Fchang(this,"T5")' type="text"></td>
                      </tr>
                      <tr>
                        <td height="25"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">iii)</span> <span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">COMPANY
                          NAME</span></td>
                        <td height="25" align="center" valign="middle">:</td>
                        <td height="25"><input name="T5" size="45" maxlength="45" onkeyup='clok(this,"T6")' type="text"></td>
                      </tr>
                      <tr>
                        <td height="25"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">iv) D.O.A</span></td>
                        <td height="25" align="center" valign="middle">:</td>
                        <td height="25"><input name="T6" size="15" maxlength="10" onkeyup='Fchang(this,"T7")' type="text">
                         <span style="padding-left:33px;"> TIME:
                          <input name="T7" size="10" maxlength="10" onkeyup='Fchang(this,"T8")' type="text"></span></td>
                      </tr>
                      <tr>
                        <td height="25">v) <span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">ROOM / F&amp;B
                          OUTLET</span></td>
                        <td height="25" align="center" valign="middle">:</td>
                        <td height="25"><input name="T8" size="45" maxlength="45" onkeyup='Fchang(this,"T9")' type="text"></td>
                      </tr>
                      <tr>
                        <td height="25"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">vi)</span> <span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">PAX</span></td>
                        <td height="25" align="center" valign="middle">:</td>
                        <td height="25"><input name="PAX" size="16" maxlength="16" onkeyup='Fchang(this,"T9")' type="text"></td>
                      </tr>
                      <tr>
                        <td height="25">vii) <span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">BILLING INSTRUCTIONS</span></td>
                        <td height="25" align="center" valign="middle">:</td>
                        <td height="25"><input name="T9" size="45" maxlength="45" onkeyup='Fchang(this,"T10")' type="text"></td>
                      </tr>
                      <tr>
                        <td height="25">viii) <span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">REASON</span></td>
                        <td height="25" align="center" valign="middle">:</td>
                        <td height="25"><input name="T10" size="45" maxlength="45" onkeyup='Fchang(this,"PRNVEW")' type="text"></td>
                      </tr>
                    </table>
                    <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="left"><!--webbot bot="Validation" B-Value-Required="TRUE"
  I-Maximum-Length="30" --></p>
                    <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="left"><!--webbot bot="Validation" B-Value-Required="TRUE"
  I-Maximum-Length="45" --></p>
                    <p align="center"><b>
                      <input value="Print Prevew" name="PRNVEW" type="submit" class="ubutton">
                      </b></p>
                  </form>
          <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center">&nbsp;</p>
        </div>
      </div>
    </ul>
  </div>
  <div style="float:left">
    
  </div>
</div>
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