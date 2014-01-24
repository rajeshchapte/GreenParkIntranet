
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
          		<h2 style="color:#000000;">Car Requisition</h2>
                <hr />
               <div>
	        	



<form action="Car_Requisition_prnt_pp.php" method="get" target="POPUPW" onsubmit="POPUPW = window.open('about:blank','POPUPW', 'height=550,width=1000,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');" enctype="multipart/form-data" >

  <input name="VTI-GROUP" value="0" type="hidden">
  <p align="center">&nbsp;</p>
  <p align="center"><b>GREEN PARK – <select size="1" name="PROP" onkeyup='Fchang(this,"TRVLS")'>
    <option selected="selected">HYDERABAD</option>
    <option>VISAKHAPATNAM</option>
    <option>CHENNAI</option>
<option>MARIGOLD</option>
<option>AVASA</option>
  </select><u><o:p></o:p>
  </u></b></p>
  <p align="center">&nbsp;</p>
  <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center"><b>REQUISITION&nbsp;
  FOR&nbsp; CAR&nbsp; FROM&nbsp; <select size="1" name="TRVLS" onkeyup='Fchang(this,"T1")'>
    <option selected="selected">AUTOFIN</option>
    <option>HOTEL</option>
    <option>__________</option>
  </select></b></p>
  <hr />
  
  <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="25" align="left" valign="middle">1. NAME OF THE OFFICIAL&nbsp; BOOKING THE CAR</td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left" valign="middle">
      <input name="T1" size="40" maxlength="40" onkeyup='Fchang(this,&quot;T2&quot;)' type="text" />
    </td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">2. DESIGNATION</td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left" valign="middle">
      <input name="T2" size="40" maxlength="40" onkeyup='Fchang(this,&quot;T3&quot;)' type="text" />
    </td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">3. DEPARTMENT</td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left" valign="middle">
      <input name="T3" size="40" maxlength="40" onkeyup='Fchang(this,&quot;T4&quot;)' type="text" />
    </td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">4. PURPOSE FOR</td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left" valign="middle">
      <input name="T4" size="40" maxlength="40" onkeyup='Fchang(this,&quot;T5&quot;)' type="text" />
    </td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">5. VEHICLE IS REQUIRED</td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left" valign="middle">
      <input name="T5" size="40" maxlength="40" onkeyup='Fchang(this,&quot;T6&quot;)' type="text" />
    </td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">6. CAR NUMBER</td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left" valign="middle">
      <input name="T6" size="40" maxlength="40" onkeyup='Fchang(this,&quot;T7&quot;)' type="text" />
    </td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">7. REQUIRED ON</td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left" valign="middle">
      <input name="T7" size="40" maxlength="40" onkeyup='Fchang(this,&quot;T8&quot;)' type="text" />
    </td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">8.REQUIRED AT</td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left" valign="middle">
      <input name="T8" size="40" maxlength="40" onkeyup='Fchang(this,&quot;T9&quot;)' type="text" />
    </td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">9. PLACE TO  VISIT</td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left" valign="middle">
      <input name="T9" size="40" maxlength="40" onkeyup='Fchang(this,&quot;T10&quot;)' type="text" />
    </td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">10. MODE OF PAYMENT</td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left" valign="middle">
      <input name="T10" size="40" maxlength="40" onkeyup='Fchang(this,&quot;T11&quot;)' type="text" />
    </td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">11. STARTING METER READING</td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left" valign="middle">
      <input name="T11" size="40" maxlength="40" onkeyup='Fchang(this,&quot;T12&quot;)' type="text" />
    </td>
  </tr>
  <tr>
    <td height="25" align="left" valign="middle">12. CLOSING METER READING</td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left" valign="middle">
      <input name="T12" size="40" maxlength="40" onkeyup='Fchang(this,&quot;PVIEW&quot;)' type="text" />
    </td>
  </tr>
  </table>

 
<hr>
  <p align="center"><b><input value="Print Prevew" name="PVIEW" type="submit" class="ubutton"></b></p>

<script language="JavaScript">
document.RCF.T1.focus();
document.RCF.T1.focus();
</script>


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