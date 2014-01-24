
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
           
           		 <h2 style="color:#000000;">New Asset Handover Form</h2>
                <hr />
               <div>
	        	

<form action="New_Asset_Handover_Form_pp.php" method="get" target="POPUPW" onsubmit="POPUPW = window.open('about:blank','POPUPW', 'height=550,width=1000,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');" enctype="multipart/form-data" >

  <input name="VTI-GROUP" value="0" type="hidden">
  <p align="center"><b>GREEN PARK - 
      <select size="1" name="T1" onkeyup='Fchang(this,"DEP")'>
        <option selected="selected">HYDERABAD</option>
        <option>VISAKHAPATNAM</option>
        <option>CHENNAI</option>
        <option value="MARIGOLD">MARIGOLD</option>
        <option>AVASA</option>
      </select>
      <u>
      <o:p></o:p>
      </u></b></p>
<p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center"><b>PROJECTS DEPARTMENT</b></p>
  <hr>
  <p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;">STATEMENT OF ASSETS NEWLY MADE AND HANDED-OVER TO USER
  DEPARTMENT</p>
  <hr>
  <p>&nbsp;THE FOLLOWING ASSETS HAVE BEEN NEWLY MADE AND HANDED - OVER TO </p>
  <p>&nbsp;&nbsp;&nbsp;
  <select size="1" name="T2" onkeyup='Fchang(this,"PDT")'>
    <option>FRONT OFFICE</option>
    <option>F &amp; B PRODUCTION</option>
    <option>F &amp; B SERVICE</option>
    <option>MAINTAINANCE</option>
    <option>ACCOUNTS</option>
    <option>HUMAN RESOURCE</option>
    <option>SECURITY</option>
    <option>I.T. DEPARTMENT </option>
    <option>HOUSE KEEPING</option>
  </select>&nbsp; DEPT.<span style="">&nbsp;
  </span>ON&nbsp;<span style=""> <input name="T3" size="20" onkeyup='Fchang(this,"AS1")' type="text"></span></p>
  <hr>
  
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="25" align="center" valign="middle"><b>S.#.</b></td>
    <td height="25" align="center" valign="middle"><b>ASSET</b></td>
    <td height="25" align="center" valign="middle"><b>DESCRIPTION OF</b></td>
    <td height="25" align="center" valign="middle"><b>QUANTITY</b></td>
    <td height="25" align="center" valign="middle"><b>COST</b></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25" align="center" valign="middle"><b>CLASSIFICATION</b></td>
    <td height="25" align="center" valign="middle"><b>FIXED<span style="">&nbsp; </span>ASSETS</b></td>
    <td height="25" align="center" valign="middle"><b>(UNITS)</b></td>
    <td height="25" align="center" valign="middle"><b>Rs.</b></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">1.</td>
    <td height="25" align="center" valign="middle"><input name="T4" size="20" maxlength="20" onkeyup='Fchang(this,"DS1")' type="text"></td>
    <td height="25" align="center" valign="middle"><input name="T5" size="35" maxlength="35" onkeyup='Fchang(this,"AQ1")' type="text"></td>
    <td height="25" align="center" valign="middle"><input name="T6" size="11" maxlength="11" onkeyup='Fchang(this,"AC1")' type="text"></td>
    <td height="25" align="center" valign="middle"><input name="T7" size="15" maxlength="15" onkeyup='Fchang(this,"AS2")' type="text"></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">2.</td>
    <td height="25" align="center" valign="middle"><input name="T8" size="20" maxlength="20" onkeyup='Fchang(this,&quot;DS1&quot;)' type="text" /></td>
    <td height="25" align="center" valign="middle"><input name="T9" size="35" maxlength="35" onkeyup='Fchang(this,&quot;AQ1&quot;)' type="text" /></td>
    <td height="25" align="center" valign="middle"><input name="T10" size="11" maxlength="11" onkeyup='Fchang(this,&quot;AC1&quot;)' type="text" /></td>
    <td height="25" align="center" valign="middle"><input name="T11" size="15" maxlength="15" onkeyup='Fchang(this,&quot;AS2&quot;)' type="text" /></td>
    </tr>
  <tr>
    <td height="25" align="center" valign="middle">3.</td>
    <td height="25" align="center" valign="middle"><input name="T12" size="20" maxlength="20" onkeyup='Fchang(this,&quot;DS1&quot;)' type="text" /></td>
    <td height="25" align="center" valign="middle"><input name="T13" size="35" maxlength="35" onkeyup='Fchang(this,&quot;AQ1&quot;)' type="text" /></td>
    <td height="25" align="center" valign="middle"><input name="T14" size="11" maxlength="11" onkeyup='Fchang(this,&quot;AC1&quot;)' type="text" /></td>
    <td height="25" align="center" valign="middle"><input name="T15" size="15" maxlength="15" onkeyup='Fchang(this,&quot;AS2&quot;)' type="text" /></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">4.</td>
    <td height="25" align="center" valign="middle"><input name="T16" size="20" maxlength="20" onkeyup='Fchang(this,&quot;DS1&quot;)' type="text" /></td>
    <td height="25" align="center" valign="middle"><input name="T17" size="35" maxlength="35" onkeyup='Fchang(this,&quot;AQ1&quot;)' type="text" /></td>
    <td height="25" align="center" valign="middle"><input name="T18" size="11" maxlength="11" onkeyup='Fchang(this,&quot;AC1&quot;)' type="text" /></td>
    <td height="25" align="center" valign="middle"><input name="T19" size="15" maxlength="15" onkeyup='Fchang(this,&quot;AS2&quot;)' type="text" /></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">5.</td>
    <td height="25" align="center" valign="middle"><input name="T20" size="20" maxlength="20" onkeyup='Fchang(this,&quot;DS1&quot;)' type="text" /></td>
    <td height="25" align="center" valign="middle"><input name="T21" size="35" maxlength="35" onkeyup='Fchang(this,&quot;AQ1&quot;)' type="text" /></td>
    <td height="25" align="center" valign="middle"><input name="T22" size="11" maxlength="11" onkeyup='Fchang(this,&quot;AC1&quot;)' type="text" /></td>
    <td height="25" align="center" valign="middle"><input name="T23" size="15" maxlength="15" onkeyup='Fchang(this,&quot;AS2&quot;)' type="text" /></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">6.</td>
    <td height="25" align="center" valign="middle"><input name="T24" size="20" maxlength="20" onkeyup='Fchang(this,&quot;DS1&quot;)' type="text" /></td>
    <td height="25" align="center" valign="middle"><input name="T25" size="35" maxlength="35" onkeyup='Fchang(this,&quot;AQ1&quot;)' type="text" /></td>
    <td height="25" align="center" valign="middle"><input name="T26" size="11" maxlength="11" onkeyup='Fchang(this,&quot;AC1&quot;)' type="text" /></td>
    <td height="25" align="center" valign="middle"><input name="T27" size="15" maxlength="15" onkeyup='Fchang(this,&quot;AS2&quot;)' type="text" /></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle">7.</td>
    <td height="25" align="center" valign="middle"><input name="T28" size="20" maxlength="20" onkeyup='Fchang(this,&quot;DS1&quot;)' type="text" /></td>
    <td height="25" align="center" valign="middle"><input name="T29" size="35" maxlength="35" onkeyup='Fchang(this,&quot;AQ1&quot;)' type="text" /></td>
    <td height="25" align="center" valign="middle"><input name="T30" size="11" maxlength="11" onkeyup='Fchang(this,&quot;AC1&quot;)' type="text" /></td>
    <td height="25" align="center" valign="middle"><input name="T31" size="15" maxlength="15" onkeyup='Fchang(this,&quot;AS2&quot;)' type="text" /></td>
  </tr>
  </table>

  
 
<hr>
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="25">&nbsp;</td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25" align="right">&nbsp;</td>
  </tr>
  <tr>
    <td height="25">DATE</td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25" align="right">SIGNATURE</td>
  </tr>
  <tr>
    <td height="25" colspan="3">&nbsp;</td>
    <td height="25">&nbsp;</td>
  </tr>
  <tr>
    <td height="25" colspan="3">RECEIVED THE ABOVE MENTIONED ASSETS.</td>
    <td height="25">&nbsp;</td>
  </tr>
  <tr>
    <td height="25">DATE</td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25" align="right">SIGNATURE</td>
  </tr>
  <tr>
    <td height="25">COPIES TO</td>
    <td height="25" align="center" valign="middle">:</td>
    <td height="25">USER
  DEPARTMENT / F.M. / UNIT HEAD /CEO.</td>
    <td height="25">&nbsp;</td>
  </tr>
  <tr>
    <td height="25">&nbsp;</td>
    <td height="25" align="center" valign="middle">&nbsp;</td>
    <td height="25">&nbsp;</td>
    <td height="25">&nbsp;</td>
  </tr>
</table>

  <p style="float:right; padding-right:50px;">
  
  <input value="Print Prevew" name="PVIEW"  type="submit" class="ubutton">
  </b></p>
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