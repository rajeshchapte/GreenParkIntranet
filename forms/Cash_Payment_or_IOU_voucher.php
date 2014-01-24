
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
          		 <h2 style="color:#000000;">Cash Payment or IOU voucher</h2>
                <hr />
               <div>
	        	

<form action="Cash_Payment_or_IOU_voucher_prnt_pp.php" method="get" target="POPUPW" onsubmit="POPUPW = window.open('about:blank','POPUPW', 'height=550,width=1000,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');" enctype="multipart/form-data" >

<p align="center" style="word-spacing: 0pt; text-indent:
0pt; line-height: 200%; margin: 0pt;"><font size="4"><b>Green
Park - <select name="PROP" size="1">

<option value="HYDERABAD">HYDERABAD</option>

<option value="VISAKHAPATNAM">VISAKHAPATNAM</option>

<option value="CHENNAI">CHENNAI</option>

<option value="MARIGOLD">MARIGOLD</option>
<option value="AVASA">AVASA</option>

</select></b></font></p>  <p align="center"><b><font size="4">Cash Payment or IOU voucher</font></b></p>

  <p align="center"><b>&nbsp; <select size="1" name="VTYPE" onkeyup='Fchang(this,"T1")'>
    <option>I.O.U Voucher</option>
    <option value="Cash Payment Voucher">Cash Payment Voucher</option>
  </select></b></p>
  <hr color="#000000" size="1">
  
  <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="48%" height="25" align="left" valign="middle">Date</td>
    <td width="3%" height="25" align="center" valign="middle">:</td>
    <td width="49%" height="25" align="left" valign="middle">
      <input name="VDATE" size="12" maxlength="12" value="" onkeyup='Fchang(this,&quot;T3&quot;)' type="text" />
    </td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">Payee</td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left" valign="middle"><input name="VPAYEE" size="63" onkeyup='Fchang(this,"DESG")' maxlength="60" type="text"></td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">Towards</td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left" valign="middle"><input name="VTOW1" size="63" onkeyup='Fchang(this,"T2")' maxlength="60" type="text"></td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">&nbsp;</td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25" align="left" valign="middle"><input name="VTOW2" size="63" onkeyup='Fchang(this,"T2")' maxlength="60" type="text"></td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">&nbsp;</td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25" align="left" valign="middle"><input name="VTOW3" size="63" onkeyup='Fchang(this,"T2")' maxlength="60" type="text"></td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">&nbsp;</td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25" align="left" valign="middle"><input name="VTOW4" size="63" onkeyup='Fchang(this,"T2")' maxlength="60" type="text"></td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">Amount</td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left" valign="middle"><input name="VAMT" size="63" onkeyup='Fchang(this,"T2")' maxlength="25" type="text"></td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">Rs.in Words</td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left" valign="middle"><input name="VAMTWRDS" size="63" onkeyup='Fchang(this,"T2")' maxlength="70" type="text"></td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">&nbsp;</td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25" align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="25" colspan="3" align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="25" align="left" valign="middle"><strong>Head of Acocunt</strong></td>
        <td height="25" align="left" valign="middle"><strong>Amount (Rs.)</strong></td>
      </tr>
      <tr>
        <td height="25" align="left" valign="middle"><input name="HOA1" size="60" onkeyup='Fchang(this,"T2")' maxlength="45" type="text"></td>
        <td height="25" align="left" valign="middle"><input name="HAMT1" size="24" onkeyup='Fchang(this,"T2")' maxlength="45" type="text"></td>
      </tr>
      <tr>
        <td height="25" align="left" valign="middle"><input name="HOA2" size="60" onkeyup='Fchang(this,"T2")' maxlength="45" type="text"></td>
        <td height="25" align="left" valign="middle"><input name="HAMT2" size="24" onkeyup='Fchang(this,"T2")' maxlength="45" type="text"></td>
      </tr>
      <tr>
        <td height="25" align="left" valign="middle"><input name="HOA3" size="60" onkeyup='Fchang(this,"T2")' maxlength="45" type="text"></td>
        <td height="25" align="left" valign="middle"><input name="HAMT3" size="24" onkeyup='Fchang(this,"T2")' maxlength="45" type="text"></td>
      </tr>
      <tr>
        <td height="25" align="left" valign="middle"><input name="HOA4" size="60" onkeyup='Fchang(this,"T2")' maxlength="45" type="text"></td>
        <td height="25" align="left" valign="middle"><input name="HAMT4" size="24" onkeyup='Fchang(this,"T2")' maxlength="45" type="text"></td>
      </tr>
    </table></td>
    </tr>
  <tr>
    <td height="25" align="left" valign="middle">&nbsp;</td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25" align="left" valign="middle">&nbsp;</td>
  </tr>
  </table>


<hr color="#000000" size="1">


<p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center">&nbsp;&nbsp;&nbsp;
<b><input value="Generate Voucher" name="PRNVEW" type="submit" class="ubutton"></b></p>
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