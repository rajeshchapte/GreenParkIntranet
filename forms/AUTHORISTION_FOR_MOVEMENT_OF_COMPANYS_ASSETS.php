
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
$( "#authoristiondate" ).datepicker({
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
          		 <h2 style="color:#000000;">AUTHORISATION FOR MOVEMENT OF COMPANY’S ASSETS</h2>
                <hr />
               <div>
	        	
<form action="AUTHORISTION_FOR_MOVEMENT_OF_COMPANYS_ASSETS_pp.php" method="get" target="POPUPW" onsubmit="POPUPW = window.open('about:blank','POPUPW', 'height=550,width=1000,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');" enctype="multipart/form-data" >


   <p align="center">&nbsp;</p>
   <p align="center"><b><font size="3">GREEN PARK - </font><select size="1" name="PROP" onkeyup='Fchang(this,"ANM")'>
    <option>HYDERABAD</option>
    <option>VISAKHAPATNAM</option>
    <option>CHENNAI</option>
<option>MARIGOLD</option>
<option>AVASA</option>
  </select></b></p>
  <p align="center"><font size="3"><b>AUTHORISATION FOR MOVEMENT OF COMPANY’S
  ASSETS</b></font></p>
  <hr>
  
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="49%" align="left" valign="middle"><font size="3">ASSET<span style="">&nbsp; </span>NAME</font></td>
    <td width="2%" height="25" align="center" valign="middle">:</td>
    <td width="49%" height="25" align="left" valign="middle"><font size="3">
      <input name="ANM" size="45" maxlength="45" onkeyup='Fchang(this,&quot;DES1&quot;)' type="text" />
    </font></td>
  </tr>
  <tr>
    <td align="left" valign="middle"><font size="3">DESCRIPTION</font></td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left" valign="middle"><font size="3">
      <input name="DES1" size="45" maxlength="50" onkeyup='Linecut(this,&quot;DES2&quot;)' type="text" />
    </font></td>
  </tr>
  <tr>
    <td align="left" valign="middle"><font size="3">LOCATION</font></td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left" valign="middle"><font size="3">
      <input name="DES2" size="45" maxlength="50" onkeyup='Fchang(this,&quot;EXG&quot;)' type="text" />
    </font></td>
  </tr>
  <tr>
    <td align="left" valign="middle"><font size="3">EXISTING</font></td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left" valign="middle"><font size="3">
      <input name="EXG" size="45" maxlength="45" onkeyup='Fchang(this,&quot;PROS&quot;)' type="text" />
    </font></td>
  </tr>
  <tr>
    <td align="left" valign="middle"><font size="3">PROPOSED</font></td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left" valign="middle"><font size="3">
      <input name="PROS" size="45" maxlength="45" onkeyup='Fchang(this,&quot;RFS1&quot;)' type="text" />
    </font></td>
  </tr>
  <tr>
    <td align="left" valign="middle"><font size="3">REASONS FOR SHIFTING</font></td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left" valign="middle"><font size="3">
      <input name="RFS1" size="45" maxlength="60" onkeyup='Linecut(this,&quot;RFS2&quot;)' type="text" />
    </font></td>
  </tr>
  <tr>
    <td align="left" valign="middle">&nbsp;</td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25" align="left" valign="middle"><font size="3">
      <input name="RFS2" size="45" maxlength="60" onkeyup='Fchang(this,&quot;DSG&quot;)' type="text" />
    </font></td>
  </tr>
  <tr>
    <td align="left" valign="middle"><font size="3">DATE<span style="">&nbsp; </span>OF<span style="">&nbsp; </span>SHIFTING</font></td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25" align="left" valign="middle"><font size="3">
      <input name="DSG" size="15" maxlength="15" onkeyup='Fchang(this,&quot;PVEW&quot;)' type="text" id="authoristiondate"/>
    </font></td>
  </tr>
  <tr>
    <td align="left" valign="middle">&nbsp;</td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25" align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="middle">&nbsp;</td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25" align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="middle"><font size="3"><strong>PROPOSED<span style="">&nbsp; </span>BY</strong></font></td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25" align="center" valign="middle"><font size="3"><strong>APPROVED<span style="">&nbsp; </span>BY</strong></font></td>
  </tr>
  <tr>
    <td align="left" valign="middle">&nbsp;</td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25" align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="middle"><font size="3">C.C.TO<span style="">&nbsp; </span>:<span style="">&nbsp; </span>H.R.D. /<span style="">&nbsp; </span>ACCOUNTS / OFFICE<span style="">&nbsp; </span>COPY</font></td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25" align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25" align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25" align="left" valign="middle"><input value="Print Preivew" name="PVEW" type="submit" class="ubutton" /></td>
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