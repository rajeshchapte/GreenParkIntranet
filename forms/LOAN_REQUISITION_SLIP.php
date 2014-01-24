
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
           
           			<h2 style="color:#000000;">LOAN REQUISITION SLIP</h2>
                <hr />
               <div>
	        	

<form action="LOAN_REQUISITION_SLIP_pp.php" method="get" target="POPUPW" onsubmit="POPUPW = window.open('about:blank','POPUPW', 'height=550,width=1000,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');" enctype="multipart/form-data" >

 
  <input name="VTI-GROUP" value="0" type="hidden">

<p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center">&nbsp;</p>

<p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center"><font size="4"><b>
GREENPARK -  
      <select size="1" name="PROP" onkeyup='Fchang(this,"T1")'>
  <option selected="selected">HYDERABAD</option>
  <option>VISAKHAPATNAM</option>
  <option>CHENNAI</option>
<option value="MARIGOLD">MARIGOLD BY GREENPARK</option>
<option> HOTEL AVASA</option>
</select></b></font></p>

<p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center">&nbsp;&nbsp;</p>

<p style="word-spacing: 0pt; text-indent: 0pt; line-height: 100%; margin: 0pt;" align="center"><b>
 LOAN REQUISITION SLIP</b></p>
  <hr noshade="noshade" color="#000000">
  <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="150%" height="25" align="center" valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="25" align="left">To</td>
        <td align="center" valign="middle">:</td>
        <td height="25" align="left"><strong>The Unit Head</strong></td>
      </tr>
      <tr>
        <td height="25" align="left">Employee Name</td>
        <td align="center" valign="middle">:</td>
        <td height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
        <input type="text" name="T3" />
         </span></td>
      </tr>
      <tr>
        <td height="25" align="left">Designation</td>
        <td align="center" valign="middle">:</td>
        <td height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;"> <input type="text" name="T4" /> </span></td>
      </tr>
      <tr>
        <td height="25" align="left">Department</td>
        <td align="center" valign="middle">:</td>
        <td height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;"> <input type="text" name="T" /></span></td>
      </tr>
      <tr>
        <td height="25" colspan="3" align="left"><hr /></td>
      </tr>
      <tr>
        <td height="25" align="left">Dear Sir,</td>
        <td align="center" valign="middle">&nbsp;</td>
        <td height="25" align="left">&nbsp;</td>
      </tr>
      <tr>
        <td height="25" colspan="3" align="left">Kindly allow me a loan of Rs.<span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
          <input name="T102" type="text" size="5" />
        :(Rupees
          <input type="text" name="T103" size="30" />
Only),</span></td>
      </tr>
      <tr>
        <td height="25" colspan="3" align="left">&nbsp;</td>
      </tr>
      <tr>
        <td height="25" colspan="3" align="left">Starting from:<span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
          <input type="text" name="T104"  size="40"/>
        </span></td>
      </tr>
      <tr>
        <td height="25" colspan="3" align="left">I will repay the loan amount in 
          <input name="T6" type="text" size="10" />
          installments@Rs. 
          <input type="text" name="T105"/></td>
      </tr>
      <tr>
        <td height="25" align="left">Reasons for Loan</td>
        <td align="center" valign="middle">&nbsp;</td>
        <td align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
          <input name="T8" size="45" maxlength="45" onkeyup='Fchang(this,&quot;T8&quot;)' type="text" />
        </span></td>
      </tr>
      <tr>
        <td height="25" align="left">&nbsp;</td>

        <td align="center" valign="middle">&nbsp;</td>
        <td align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
          <input name="T9" size="45" maxlength="45" onkeyup='clok(this,&quot;T9&quot;)' type="text" />
        </span></td>
      </tr>
      <tr>
        <td height="25" align="left">&nbsp;</td>
        <td align="center" valign="middle">&nbsp;</td>
        <td height="25" align="left">&nbsp;</td>
      </tr>
      <tr>
        <td height="25" align="left">&nbsp;</td>
        <td align="center" valign="middle">&nbsp;</td>
        <td height="25" align="left">&nbsp;</td>
      </tr>
      <tr>
        <td height="25" align="left">&nbsp;</td>
        <td align="center" valign="middle">&nbsp;</td>
        <td height="25" align="right">Signature Of The Employee.</td>
      </tr>
      <tr>
        <td height="25" colspan="3" align="center" valign="middle"><hr /></td>
      </tr>
      <tr>
        <td height="25" align="left">Guaranter</td>
        <td align="center" valign="middle">:</td>
        <td height="25" align="left"><span style="word-spacing: 0pt; text-indent: 0pt; line-height: 150%; margin: 0pt;">
          <input name="T10" size="45" maxlength="45" onkeyup='clok(this,&quot;T9&quot;)' type="text" />
        </span></td>
      </tr>
      <tr>
        <td height="25" align="left">&nbsp;</td>
        <td align="center" valign="middle">&nbsp;</td>
        <td height="25" align="left">&nbsp;</td>
      </tr>
      <tr>
        <td height="25" align="left">&nbsp;</td>
        <td align="center" valign="middle">&nbsp;</td>
        <td height="25" align="left"><input value="Print Prevew" name="PRNVEW" type="submit"  class="ubutton"/></td>
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