
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
$( "#leavedate" ).datepicker({
changeMonth: true,
changeYear: true,
dateFormat: "dd/mm/yy"
});
});

$(function() {
$( "#fromdate" ).datepicker({
changeMonth: true,
changeYear: true,
dateFormat: "dd/mm/yy"
});
});

$(function() {
$( "#todate" ).datepicker({
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
           
           		<h2 style="color:#000000;">Leave Application</h2>
                <hr />
               <div>
	        	

<form action="Leave_Application_pp.php" method="get" target="POPUPW" onsubmit="POPUPW = window.open('about:blank','POPUPW', 'height=550,width=1000,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');" enctype="multipart/form-data" >

 
  <input name="VTI-GROUP" value="0" type="hidden">

<p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center">&nbsp;</p>

<p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center"><font size="4"><b>
<select size="1" name="PROP" onkeyup='Fchang(this,"T1")'>
  <option selected="selected">GREENPARK - HYDERABAD</option>
  <option>GREENPARK - VISAKHAPATNAM</option>
  <option>GREENPARK - CHENNAI</option>
<option value="MARIGOLD">MARIGOLD BY GREENPARK</option>
<option> HOTEL AVASA</option>
</select></b></font></p>

<p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center">&nbsp;&nbsp;</p>

<br />
  <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="150%" height="25" align="center" valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
      <!--<tr>
        <td height="25" align="left">Leave Application</td>
        <td align="center" valign="middle">:</td>
        <td height="25" align="left">
          <input name="T2" size="30" maxlength="30" onkeyup='Fchang(this,&quot;T3&quot;)' type="text" />
          </td>
        </tr>-->
      <tr>
        <td width="26%" height="25" align="left">Date</td>
        <td width="0%" align="center" valign="middle">:</td>
        <td width="74%" height="25" align="left">
          <input name="T3" size="30" maxlength="30" onkeyup='Fchang(this,&quot;T4&quot;)' type="text" id="leavedate" />
          </td>
        </tr>
      <tr>
        <td height="25" align="left">Swipe Card No</td>
        <td align="center" valign="middle">:</td>
        <td height="25" align="left">
          <input name="T4" size="30" maxlength="30" onkeyup='Fchang(this,&quot;T5&quot;)' type="text" />
          </td>
        </tr>
      <tr>
        <td height="25" align="left">Name</td>
        <td align="center" valign="middle">:</td>
        <td height="25" align="left">
          <input name="T5" size="30" maxlength="30" onkeyup='Fchang(this,&quot;T5&quot;)' type="text" />
        </td>
        </tr>
      <tr>
        <td height="25" align="left">Designation</td>
        <td align="center" valign="middle">:</td>
        <td height="25" align="left">
          <input name="T17" size="30" maxlength="30" onkeyup='Fchang(this,&quot;T5&quot;)' type="text" />
        </td>
        </tr>
      <tr>
        <td height="25" align="left">Department</td>
        <td align="center" valign="middle">:</td>
        <td height="25" align="left">
          <input name="T18" size="30" maxlength="30" onkeyup='Fchang(this,&quot;T5&quot;)' type="text" />
        </td>
        </tr>
      <tr>
        <td height="25" align="left">Leave Required</td>
        <td align="center" valign="middle">:</td>
        <td height="25" align="left">
          <input name="T" size="30" maxlength="30" onkeyup='Fchang(this,&quot;T5&quot;)' type="text" />
        Days
<select size="1" name="D1" onkeyup='Fchang(this,&quot;T1&quot;)'>
            <option selected="selected">Casual leave</option>
            <option selected="selected">privilege leave</option>
            <option selected="selected">sick leave </option>
            <option selected="selected">others</option>
           
            </select>
          </td>
        </tr>
      <tr>
        <td height="25" colspan="3" align="left"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="25%" height="25">From</td>
              <td width="1%" align="center">:</td>
              <td width="19%" height="25" align="left"><input name="T6" size="15" maxlength="30" onkeyup='Fchang(this,&quot;T5&quot;)' type="text" id="fromdate" />
              </td>
              <td width="8%" height="25" align="center">To :</td>
              <td width="47%" height="25" align="left">
                <input name="T7" size="15" maxlength="30" onkeyup='Fchang(this,&quot;T5&quot;)' type="text" id="todate" />
              <font style="font-size:12px;">(Both days inclusive).</font></td>
            </tr>
          </table></td>
        </tr>
      <tr>
        <td height="25" align="left">Purpose</td>
        <td align="center" valign="middle">:</td>
        <td align="left">
          <input name="T13" size="45" maxlength="45" onkeyup='Fchang(this,&quot;T12&quot;)' type="text" />
        </td>
        </tr>
      <tr>
        <td height="25" align="left">Leave Address</td>
        <td align="center" valign="middle">:</td>
        <td align="left">
          <input name="T14" size="45" maxlength="45" onkeyup='Fchang(this,&quot;T14&quot;)' type="text" />
        </td>
        </tr>
      <tr>
        <td height="25" align="left">&nbsp;</td>
        <td align="center" valign="middle">&nbsp;</td>
        <td align="left">
          <input name="T15" size="45" maxlength="45" onkeyup='Fchang(this,&quot;T15&quot;)' type="text" />
        </td>
        </tr>
      <tr>
        <td height="25" align="left">&nbsp;</td>
        <td align="center" valign="middle">&nbsp;</td>
        <td height="25" align="left">&nbsp;</td>
      </tr>
      <tr>
        <td height="25" align="left">&nbsp;</td>
        <td align="center" valign="middle">&nbsp;</td>
        <td height="25" align="left"><b>
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