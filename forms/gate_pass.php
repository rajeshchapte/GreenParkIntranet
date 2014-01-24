
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
$( "#gatepassdate" ).datepicker({
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
           
           		<h2 style="color:#000000;">Gate Pass</h2>
                <hr />
               <div>
	        	

<form action="gate_pass_pp.php" method="get" target="POPUPW" onsubmit="POPUPW = window.open('about:blank','POPUPW', 'height=550,width=1000,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');" enctype="multipart/form-data" >

 
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

<p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center"><b>
 Gate Pass</b></p>
  <hr noshade="noshade" color="#000000">
  <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="150%" height="25" align="center" valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="25" colspan="3" align="center" style="color:#F00;"><strong>Leave Unknown fields empty and GO Directly to &quot;Print Preview&quot; to print EMPTY form.</strong></td>
        </tr>
      <tr>
        <td height="25" align="left">Date</td>
        <td align="center" valign="middle">:</td>
        <td height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
          <input name="T6" size="45" maxlength="45" onkeyup='Fchang(this,&quot;T7&quot;)' type="text"  class="adm_inptext" id="gatepassdate" />
        </span></td>
      </tr>
      <tr>
        <td height="25" align="left">Name</td>
        <td align="center" valign="middle">:</td>
        <td height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
          <input name="T" size="45" maxlength="45" onkeyup='Fchang(this,&quot;T7&quot;)' type="text" />
        </span></td>
      </tr>
      <tr>
        <td height="25" align="left">Designation</td>
        <td align="center" valign="middle">:</td>
        <td height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
          <input name="T2" size="45" maxlength="45" onkeyup='Fchang(this,&quot;T8&quot;)' type="text" />
        </span></td>
      </tr>
      <tr>
        <td height="25" align="left">Description </td>
        <td align="center" valign="middle">:</td>
        <td height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
          <textarea name="T01" cols="45" onkeyup="Fchang(this,&quot;T7&quot;)"></textarea>
        </span></td>
      </tr>
      <tr>
        <td height="25" align="left">Please allow him through the main gate to go out on</td>
        <td align="center" valign="middle">:</td>
        <td height="25" align="left" valign="top"><b><font size="4">
          <select size="1" name="D1" onkeyup='Fchang(this,&quot;T1&quot;)'>
            <option>Personal</option>
            <option>Official </option>
           
          </select>
        </font></b></td>
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