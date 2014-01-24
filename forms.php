<?php
include("connect.php");
include("prp_info.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="gphyd/includes/styles1.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GreePark Hotels and Resorts Intranet</title>
<link href="js1/MetroJs.lt.css" rel="stylesheet" type="text/css">
<link href="gphyd/includes/styles1.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="includes/demo-styles.css">
<script src="js/modernizr-1.5.min.js"></script>
<style>
.color3 p{color:#FFFFFF}
</style>
</head>

<body>

  <div class="content1" style=" height:auto; width:1240px; ">
    <div style=" height:550px; width:auto; z-index:999">
    
    
    <div class="dashboard clearfix">
        <ul class="tiles">
          <div class="col1 clearfix">
        <li class="tile tile-big tile-26 slideTextUp" data-page-type="no" data-page-name="no" onclick="location.href='/';">
          <div><img src="images/logo123.png"  width="100" /></div>
          <div>
            <p class="prp_font">HOME</p>
          </div>
        </li>
        <li class="tile tile-big tile-24 rotate3d rotate3dX" data-page-type="no" data-page-name="no" onclick="location.href='forms.php';">
          <div class="faces">
            <div class="frontforms tiletextfont">
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Forms</p>
            </div>
            <div class="backforms"><img src="images/forms_icon.png" width="160" /></div>
          </div>
        </li>
           
            
            
            
          </div>
          <div class="col2 clearfix">
          		 <li class="tile tile-small tile-24 slideTextLeft" data-page-type="no" data-page-name="no"  onclick="location.href='forms/ADHOC_Rate_Authorisation.php';">
                    <div class="color3"><p>ADHOC RATE AUTHORISATION SLIP</p></div>
                      <div class="color2"><p style="font-size:26px;"><span class=""><img src="images/forms_icon.png"  width="80" /></span></p></div>
           		</li>
        
                <li class="tile tile-small last tile-19  slideTextLeft" data-page-type="r-page" data-page-name="random-r-page"  onclick="location.href='forms/AUTHORISTION_FOR_MOVEMENT_OF_COMPANYS_ASSETS.php';">
                    <div class="color3"><p style="color:#FFF;">AUTHORISTION FOR MOVEMENT OF COMPANYS ASSETS</p></div>
                     <div class="color2"><img src="images/forms_icon.png"  style="padding-top:25px;" width="120" /></div>
                </li>
                
                
                <li class="tile tile-small tile-19 slideTextLeft" data-page-type="no" data-page-name="no"  onclick="location.href='forms/Cash_Payment_or_IOU_voucher.php';">
                    <div class="color3"><p>Cash Payment or IOU voucher</p></div>
                      <div class="color2"><p style="font-size:30px;"><span class=""><img src="images/forms_icon.png"  width="80" /></span></p></div>
           		</li>
        
                <li class="tile tile-small last tile-19  slideTextLeft" data-page-type="r-page" data-page-name="random-r-page"  onclick="location.href='forms/C-Off-Declaration.php';">
                    <div class="color3"><p style="color:#FFF;">C Off Declaration</p></div>
                     <div class="color2"><img src="images/forms_icon.png"  style="padding-top:25px;" width="120" /></div>
                </li>
                
                
                
                
                <li class="tile tile-small tile-19 slideTextLeft" data-page-type="no" data-page-name="no"  onclick="location.href='forms/EDUCATION_SCHOLARSHIP_FORM.php';">
                    <div class="color3"><p>EDUCATION SCHOLARSHIP FORM</p></div>
                      <div class="color2"><p style="font-size:30px;"><span class=""><img src="images/forms_icon.png"  width="80" /></span></p></div>
           		</li>
        
                <li class="tile tile-small last tile-19  slideTextLeft" data-page-type="r-page" data-page-name="random-r-page"  onclick="location.href='forms/Entertainment_Authorization_Slip.php';">
                    <div class="color3"><p style="color:#FFF;">Entertainment Authorization Slip</p></div>
                     <div class="color2"><img src="images/forms_icon.png"  style="padding-top:25px;" width="120" /></div>
                </li>
                
                
                
                
                
                <li class="tile tile-small tile-19 slideTextLeft" data-page-type="no" data-page-name="no"  onclick="location.href='forms/House_Gst_Authorisation_Slip.php';">
                    <div class="color3"><p>House Gst Authorisation Slip</p></div>
                      <div class="color2"><p style="font-size:30px;"><span class=""><img src="images/forms_icon.png"  width="80" /></span></p></div>
           		</li>
        
                <li class="tile tile-small last tile-19  slideTextLeft" data-page-type="np" data-page-name="no"  onclick="location.href='forms/Impreset_Voucher.php';">
                    <div class="color3"><p style="color:#FFF;">Impreset Voucher</p></div>
                     <div class="color2"><img src="images/forms_icon.png"  style="padding-top:25px;" width="120" /></div>
                </li>
                
                
                
                
                
                <li class="tile tile-small tile-19 slideTextLeft" data-page-type="no" data-page-name="no"  onclick="location.href='forms/Leave_Application.php';">
                    <div class="color3"><p>Leave Application</p></div>
                      <div class="color2"><p style="font-size:30px;"><span class=""><img src="images/forms_icon.png"  width="80" /></span></p></div>
           		</li>
        
                <li class="tile tile-small last tile-19  slideTextLeft" data-page-type="r-page" data-page-name="random-r-page"  onclick="location.href='forms/LOAN_REQUISITION_SLIP.php';">
                    <div class="color3"><p style="color:#FFF;">LOAN REQUISITION SLIP</p></div>
                     <div class="color2"><img src="images/forms_icon.png"  style="padding-top:25px;" width="120" /></div>
                </li>
                
                
                
                
                <li class="tile tile-small tile-19 slideTextLeft" data-page-type="no" data-page-name="no"  onclick="location.href='forms/Proposal_for_New_or_Renewal_of_Annual_Maintenance_Contract.php';">
                    <div class="color3"><p>Proposal for New or Renewal of Annual Maintenance Contract</p></div>
                      <div class="color2"><p style="font-size:30px;"><span class=""><img src="images/forms_icon.png"  width="80" /></span></p></div>
           		</li>
        
                <li class="tile tile-small last tile-19  slideTextLeft" data-page-type="r-page" data-page-name="random-r-page"  onclick="location.href='forms/Reimbursement_Appl_Exec.php';">
                    <div class="color3"><p style="color:#FFF;">Reimbursement Appl Exec</p></div>
                     <div class="color2"><img src="images/forms_icon.png"  style="padding-top:25px;" width="120" /></div>
                </li>
                
                
                
                
                
                 <li class="tile tile-small tile-19 slideTextLeft" data-page-type="no" data-page-name="no"  onclick="location.href='forms/SHIFT_EXCHANGE_FORM.php';">
                    <div class="color3"><p>SHIFT EXCHANGE FORM</p></div>
                      <div class="color2"><p style="font-size:30px;"><span class=""><img src="images/forms_icon.png"  width="80" /></span></p></div>
           		</li>
        
                <li class="tile tile-small last tile-19  slideTextLeft" data-page-type="r-page" data-page-name="random-r-page"  onclick="location.href='forms/STAFF_FOOD_PARCEL_AUTHORISATION_SLIP.php';">
                    <div class="color3"><p style="color:#FFF;">STAFF FOOD PARCEL AUTHORISATION SLIP</p></div>
                     <div class="color2"><img src="images/forms_icon.png"  style="padding-top:25px;" width="120" /></div>
                </li>
                
                
               
          </div>
          
          
          <div class="col3 clearfix">
          		 <li class="tile tile-small tile-19 slideTextLeft" data-page-type="no" data-page-name="no"  onclick="location.href='forms/Bqt_Amendment_Form.php';">
                    <div class="color3"><p>Bqt Amendment Form</p></div>
                      <div class="color2"><p style="font-size:30px;"><span class=""><img src="images/forms_icon.png"  width="80" /></span></p></div>
           		</li>
        
                <li class="tile tile-small last tile-19  slideTextLeft" data-page-type="r-page" data-page-name="random-r-page"  onclick="location.href='forms/Car_Requisition.php';">
                    <div class="color3"><p style="color:#FFF;">Car Requisition</p></div>
                     <div class="color2"><img src="images/forms_icon.png"  style="padding-top:25px;" width="120" /></div>
                </li>
                
                
                
                
                
                <li class="tile tile-small tile-19 slideTextLeft" data-page-type="no" data-page-name="no"  onclick="location.href='forms/Department_Productivity_Award.php';">
                    <div class="color3"><p>Department Productivity Award</p></div>
                      <div class="color2"><p style="font-size:30px;"><span class=""><img src="images/forms_icon.png"  width="80" /></span></p></div>
           		</li>
        
                <li class="tile tile-small last tile-19  slideTextLeft" data-page-type="r-page" data-page-name="random-r-page"  onclick="location.href='forms/EDUCATION_FUND_LOAN_FORM.php';">
                    <div class="color3"><p style="color:#FFF;">EDUCATION FUND LOAN FORM</p></div>
                     <div class="color2"><img src="images/forms_icon.png"  style="padding-top:25px;" width="120" /></div>
                </li>
                
                
                
                
                
                
                
                 <li class="tile tile-small tile-19 slideTextLeft" data-page-type="no" data-page-name="no"  onclick="location.href='forms/FORM_OF_CAPITAL_EXPENDITURE.php';">
                    <div class="color3"><p>FORM OF CAPITAL EXPENDITURE</p></div>
                      <div class="color2"><p style="font-size:30px;"><span class=""><img src="images/forms_icon.png"  width="80" /></span></p></div>
           		</li>
        
                <li class="tile tile-small last tile-19  slideTextLeft" data-page-type="r-page" data-page-name="random-r-page"  onclick="location.href='forms/gate_pass.php';">
                    <div class="color3"><p style="color:#FFF;">Gate Pass</p></div>
                     <div class="color2"><img src="images/forms_icon.png"  style="padding-top:25px;" width="120" /></div>
                </li>
                
                
                
                
                
                
                 <li class="tile tile-small tile-19 slideTextLeft" data-page-type="no" data-page-name="no"  onclick="location.href='forms/Inter_Unit_Material_Transfer_or_Purchase_Requisition.php';">
                    <div class="color3"><p>Inter Unit Material Transfer or Purchase Requisition</p></div>
                      <div class="color2"><p style="font-size:30px;"><span class=""><img src="images/forms_icon.png"  width="80" /></span></p></div>
           		</li>
        
                <li class="tile tile-small last tile-19  slideTextLeft" data-page-type="r-page" data-page-name="random-r-page"  onclick="location.href='forms/Inter_Unit_Stock_Transfer_Advice.php';">
                    <div class="color3"><p style="color:#FFF;">Inter Unit Stock Transfer Advice</p></div>
                     <div class="color2"><img src="images/forms_icon.png"  style="padding-top:25px;" width="120" /></div>
                </li>
                
                
                
                
                
                
                <li class="tile tile-small tile-19 slideTextLeft" data-page-type="no" data-page-name="no"  onclick="location.href='forms/Maintenance_Job_Requisition.php';">
                    <div class="color3"><p>Maintenance Job Requisition</p></div>
                      <div class="color2"><p style="font-size:30px;"><span class=""><img src="images/forms_icon.png"  width="80" /></span></p></div>
           		</li>
        
                <li class="tile tile-small last tile-19  slideTextLeft" data-page-type="r-page" data-page-name="random-r-page"  onclick="location.href='forms/New_Asset_Handover_Form.php';">
                    <div class="color3"><p style="color:#FFF;">New Asset Handover Form</p></div>
                     <div class="color2"><img src="images/forms_icon.png"  style="padding-top:25px;" width="120" /></div>
                </li>
                
                
                
                
                
                <li class="tile tile-small tile-19 slideTextLeft" data-page-type="no" data-page-name="no"  onclick="location.href='forms/Salary_Advance_Requisition_Slip.php';">
                    <div class="color3"><p>Salary Advance Requisition Slip</p></div>
                      <div class="color2"><p style="font-size:30px;"><span class=""><img src="images/forms_icon.png"  width="80" /></span></p></div>
           		</li>
        
                <li class="tile tile-small last tile-19  slideTextLeft" data-page-type="r-page" data-page-name="random-r-page"  onclick="location.href='forms/Scrap_Approval_Form.php';">
                    <div class="color3"><p style="color:#FFF;">Scrap Approval Form</p></div>
                     <div class="color2"><img src="images/forms_icon.png"  style="padding-top:25px;" width="120" /></div>
                </li>
                
                
                
                
                <li class="tile tile-small tile-19 slideTextLeft" data-page-type="no" data-page-name="no"  onclick="location.href='forms/TOUR_PROGRAMME_APPROVAL_FORM.php';">
                    <div class="color3"><p>TOUR PROGRAMME APPROVAL FORM</p></div>
                      <div class="color2"><p style="font-size:30px;"><span class=""><img src="images/forms_icon.png"  width="80" /></span></p></div>
           		</li>
        
                <li class="tile tile-small last tile-19  slideTextLeft" data-page-type="r-page" data-page-name="random-r-page"  onclick="location.href='forms/TRAVEL_EXPENSES_REIMBURSEMENT.php';">
                    <div class="color3"><p style="color:#FFF;">TRAVEL EXPENSES REIMBURSEMENT</p></div>
                     <div class="color2"><img src="images/forms_icon.png"  style="padding-top:25px;" width="120" /></div>
                </li>
          </div>
          
          
          
          </ul>
      
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