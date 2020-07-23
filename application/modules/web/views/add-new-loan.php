<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8" />
   <link rel="icon" type="image/png" href="http://digimonk.net/Ankit/assets/img/favicon.ico">
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
   <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
   <meta name="viewport" content="width=device-width" />
   <!-- Bootstrap core CSS     -->
   <link href="http://digimonk.net/Ankit/assets/css/bootstrap.min.css" rel="stylesheet" />
   <!-- Animation library for notifications   -->
   <link href="http://digimonk.net/Ankit/assets/css/animate.min.css" rel="stylesheet" />
   <!--  Light Bootstrap Table core CSS    -->
   <link href="http://digimonk.net/Ankit/assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="http://digimonk.net/Ankit/assets/css/step3.css">
   <!--  CSS for Demo Purpose, don't include it in your project     -->
   <link href="http://digimonk.net/Ankit/assets/css/demo.css" rel="stylesheet" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
   <!--     Fonts and icons     -->
   <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css' />
   
   <!-- <link rel="stylesheet" href="/resources/demos/style.css" /> -->
   <link href="http://digimonk.net/Ankit/assets/css/dashboard-mobile.css" rel="stylesheet" />
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   <style type="text/css">
      .applicant-form{
        display: block;
}
/*#otherinput{
  display: none;
}*/
#co-applicant,#co-applicant2{
  display: none;
}
      .connecting-line {
         width: 35%!important;
      }
      .wizard .nav-tabs {
    display: flex!important;
    justify-content: center!important;
    position: relative;
    margin: 40px auto;
    margin-bottom: 0;
    border-bottom-color: #e0e0e0;
}
      .staresd {
    display: flex;
    align-items: center;
    background: #e5efff;
    border: 2px dashed #0b65ed;
    border-radius: 10px;
    position: relative;
    /* padding: 25px; */
    margin-top: 29px;
}
.imgup {
    width: 100%;
    text-align: center;
    /* font-size: 48px; */
    color: #00b1ff;
}
.staresd h4 {
    margin: 0px 0px 0px 0px;
    padding: 3px;
    font-weight: 400;
}
.imgup input[type="file"] {
    position: absolute;
    width: 100%;
    text-indent: -5000px;
    top: 0;
    left: 0;
    height: 100%;
    opacity: 0;
    cursor: pointer;
}
      h3 {
          margin: 24px 56px!important;
      }
            #exTab1 .tab-content {
              #color : white;
              #background-color: #428bca;
              #padding : 5px 15px;
            }
                     .se-pre-con {
               position: fixed;
               left: 0px;
               top: 0px;
               width: 100%;
               height: 100%;
               z-index: 9999;
               background: url(http://digimonk.net/Ankit/assets/img/Preloader_2.gif) center no-repeat #fff;
            }
            .gst{    position: absolute;
                top: 30px;
                left: 15px;
                background: #c5c5c5;
                width: 210px;
                height: 37px;
                border-radius: 6px 0 0 6px;
                padding: 8px;}
               .sp-label{position: absolute;
                left: 10px;
                top: 10px;
                font-weight: normal;
                   display: contents;
               }
               .sp-padd{padding:8px 20px 8px 220px;}
            
              .card input[type=text] {
                border: 1px solid #ccc;  
              }
              .card-box {
                background-color: #fff;
                border: 1px solid #ededed;
                border-radius: 4px;
                box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.2);
                margin-bottom: 30px;
                padding: 20px;
            }
            .dash-widget-icon {
                background-color: #eee;
                border-radius: 100%;
                color: #777;
                display: inline-block;
                float: left;
                font-size: 30px;
                height: 60px;
                line-height: 60px;
                margin-right: 10px;
                text-align: center;
                width: 60px;
            }
            .dash-widget-info {
                text-align: right;
            }
            .dash-widget-info > h3 {
                font-size: 30px;
                font-weight: 600;
                    margin-top: 0;
            }
            .dash-widget-info > span {
                font-size: 16px;
            }
   </style>
   
  
</head>


<body>
   
      
	  
            <div class="content san-full-index1">
               <div class="container-fluid">
                  <div class="row">
                     <section>
                        <div class="wizard">
                           <div class="wizard-inner">
                              <div class="connecting-line"></div>
                              <ul class="nav nav-tabs" role="tablist">
                                 <li role="presentation" id="set_spape_id_dsp_1" class="active">
                                    <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1"> <span class="round-tab">
                                 1
                                 </span>
                                    </a>
                                 </li>
                                 <li role="presentation" class="disabled" id="set_spape_id_dsp_2">
                                    <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2"> <span class="round-tab">
                                 2
                                 </span>
                                    </a>
                                 </li>
                                 <li role="presentation" class="disabled" id="set_spape_id_dsp_3" >
                                    <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3"> <span class="round-tab">
                                 3
                                 </span>
                                    </a>
                                 </li><!-- 
                                 <li role="presentation" class="disabled" id="set_spape_id_dsp_4">
                                    <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab" title="step 4"> <span class="round-tab">
                                 4
                                 </span>
                                    </a>
                                 </li>
                                 <li role="presentation" class="disabled" id="set_spape_id_dsp_5">
                                    <a href="#step5" data-toggle="tab" aria-controls="step5" role="tab" title="step 5"> <span class="round-tab">
                                 5
                                 </span>
                                    </a>
                                 </li>
                                 <li role="presentation" class="disabled" id="set_spape_id_dsp_6">
                                    <a href="#step6" data-toggle="tab" aria-controls="step6" role="tab" title="step 6"> <span class="round-tab">
                                 6
                                 </span>
                                    </a>
                                 </li> -->
                              </ul>
                           </div>
   <div class="tab-content">
   <div class="tab-pane active" role="tabpanel" id="step1">
      
	
	
	  <form action="#" method="POST" id="step_one_form_data" enctype="multipart/form-data">
   
   <input type="hidden" name="userid" value="">
   <input type="hidden" name="form_types" value="step1">
   <div class="row">
   <input type="hidden" name="co_applicant_val" id="co_applicant_val" value="none"/>
   <!--     <button id="btn1">Applicant</button>
         <button id="btn-2">CO-applicant</button> -->
      <h3>Step 1</h3>
      <section class="applicant-form">

         <div class="row">
            <div class="col-md-6">
			
               <div class="form-group"> <span class="control-label col-sm-5" for="visit_date"> Date of Visit : <span class="danger">*</span>
                  </span> <span class="col-sm-7"> 
                              
							  <input type="date" class="form-control required setdatePicarDsp" required id="date_of_visit" name="date_of_visit" style="height:37px;"> 
                           </span>
						   
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group"> <span class="control-label col-sm-5" for="visit_time"> Time of Visit : <span class="danger">*</span>
                  </span> <span class="col-sm-7"> 
                              <input type="time" class="form-control required" required id="date_of_time" name="date_of_time" style="height:37px;"> 
                           </span>
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group"> <span class="control-label col-sm-5" for="applicant_name">Product: <span class="danger">*</span> </span> <span class="col-sm-7">
                              <input type="text" class="form-control required" required name="product" value="Home Loan" id="product"> 
                           </span>
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group"> <span class="control-label col-sm-5" for="email">File No : <span class="danger">*</span> </span> <span class="col-sm-7">
                              <input type="text" class="form-control required" required id="file_no" name="file_no">
                           </span>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold; margin-top:20px;">Address</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="address" id="address">
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;margin-top:20px;">Name of Person Met</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="person_met" id="person_met">
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;margin-top:20px;">Relationship with Applicant</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="rel_with_app" id="rel_with_app">
                  <br>
               </div>
            </div>
             <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Ease Of Locating</p>
               </div>
               <div class="col-md-2">
                  <input type="radio" class="form-control" name="locating" id="locating" value="Easy" >
                  <label>Easy </label>
                  <br>
               </div>
               <div class="col-md-3">
                  <input type="radio" class="form-control" name="locating" id="locating" value="Difficult">
                  <label>Difficult</label>
                  <br>
               </div>
               <div class="col-md-4">
                  <input type="radio" class="form-control" name="locating" id="locating" value="Untraceable">
                  <label>Untraceable</label>
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Landmark</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="landmark" id="landmark">
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Ownership of Residence</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="residence" id="residence" onkeyup="populateSecondTextBox1();">
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Number of Years Staying</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="years_staying" id="years_staying" onkeyup="populateSecondTextBox();" >
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Stay Confirmed by</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="stay_con_by" id="stay_con_by">
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Type of Residence</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="type_of_resi" id="type_of_resi">
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Residence is in COVID Zone</p>
               </div>
               <div class="col-md-2">
                  <input type="radio" class="form-control" name="resi_covid_z" id="resi_covid_z" value="Red">
                  <label>Red</label>
                  <br>
               </div>
               <div class="col-md-3">
                  <input type="radio" class="form-control" name="resi_covid_z" id="resi_covid_z" value="Amber">
                  <label>Amber</label>
                  <br>
               </div>
               <div class="col-md-4">
                  <input type="radio" class="form-control" name="resi_covid_z" id="resi_covid_z" value="Green">
                  <label>Green</label>
                  <br>
               </div>
            </div>
            <div class="col-md-12" style="margin-top:20px;" >
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Family Members infected with COVID 19 and treated</p>
               </div>
               <div class="col-md-2">
                  <input type="radio" class="form-control" name="family_mem_inf" id="family_mem_inf" value="No Infection">
                  <label>No Infection</label>
                  <br>
               </div>
               <div class="col-md-3">
                  <input type="radio" class="form-control" name="family_mem_inf" id="family_mem_inf" value="Infected And Treated">
                  <label>Infected And Treated</label>
                  <br>
               </div>
               <div class="col-md-4">
                  <input type="radio" class="form-control" name="family_mem_inf" id="family_mem_inf" value="Death Happened in the family due to COVID">
                  <label>Death Happened in the family due to COVID</label>
                  <br>
               </div>
            </div>
         </div>
         <hr>
         <div class="row">
           <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Comments:</p>
               </div>
               <div class="col-md-9">
                <textarea rows="3" class="form-control" placeholder="" name="comments" id="comments">DURING THE VISIT, PERSON MET IS SELF,ADDRESS IS EASY TO LOCATE, THE PREMISE IS RENTED , APPLICATION IS RESIDING FROM 5 YRS, CONFIRMED BY NEIGHBOUR MR SHIV KULSHRETHA & SONU SHARMA</textarea>
                  <br>
               </div>
            </div>
         </div>
        <!--  <p style="text-align:left;font-size:18px;font-weight:bold;">Comments: 
            <THEAD></THEAD></p> -->
         
         <h4 class="text-center">Tele Verification Report</h4>
         <div class="row">
            <div class="col-md-6">
               <div class="form-group"> <span class="control-label col-sm-5" for="visit_date"> Date of calling : <span class="danger">*</span></span> <span class="col-sm-7"> 
                                                                     <input type="date" class="form-control required setdatePicarDsp" required id="tele_dof_visit" name="tele_dof_visit" style="height:37px;"> 
                                                                     </span>
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group"> <span class="control-label col-sm-5" for="visit_time"> Time Of calling : <span class="danger">*</span></span> <span class="col-sm-7"> 
                                                                     <input type="time" class="form-control required" required id="tele_tof_visit" name="tele_tof_visit" style="height:37px;"> 
                                                                     </span>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold; margin-top:20px; ">
				  Name Of Applicant: <span class="danger">*</span></p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" required name="tele_nof_app" id="tele_nof_app">
                  <br>
               </div>
            </div>
         </div>
         <h4 class="text-center">Residence tele Verification</h4>
         <div class="row">
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Contact Number</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="tele_cont_no" id="tele_cont_no">
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Contacted</p>
               </div>
               <div class="col-md-4">
                  <input type="radio" class="form-control" name="tele_contacted" id="tele_contacted" checked value="Yes">
                  <label>Yes</label>
                  <br>
               </div>
               <div class="col-md-5">
                  <input type="radio" class="form-control" name="tele_contacted" id="tele_contacted" value="No">
                  <label>No</label>
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Spoken to</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="tele_spoken" id="tele_spoken">
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Relationship With Applicant</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="tele_rel_w_app" id="tele_rel_w_app">
                  <br>
               </div>
            </div>
			
			<script>
			function populateSecondTextBox() {
				document.getElementById('tele_years_staying').value = document.getElementById('years_staying').value;
				}
				
				function populateSecondTextBox1() {
				document.getElementById('tele_residence').value = document.getElementById('residence').value;
				}
			</script>
			
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Number of Years Staying</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="tele_years_staying" id="tele_years_staying">
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Ownership of Residence</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="tele_residence" id="tele_residence">
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Alternate Contact No,</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="tele_alt_cont_no" id="tele_alt_cont_no">
                  <br>
               </div>
            </div>
            
            
            
           
         </div>
         
         <button type="button" onclick="myFunction()" class="btn btn-lg btn-block" id="addrow" value="1" style=" width: auto; margin: 0 auto;margin-bottom: 20px;">Add New Co-Applicant</button>
      </section>

      <!-----------Co-Application-form--------->
       <section class="applicant-form" id="co-applicant">

         <div class="row">
            <div class="col-md-6">
               <div class="form-group"> <span class="control-label col-sm-5" for="visit_date"> Date of Visit : <span class="danger">*</span>
                  </span> <span class="col-sm-7"> 
                              <input type="date" class="form-control required setdatePicarDsp" required  id="coa_date_of_visit" name="coa_date_of_visit" style="height:37px;"> 
                           </span>
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group"> <span class="control-label col-sm-5" for="visit_time"> Time of Visit : <span class="danger">*</span>
                  </span> <span class="col-sm-7"> 
                              <input type="time" class="form-control required" required  name="coa_date_of_time" id="coa_date_of_time" style="height:37px;"> 
                           </span>
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group"> <span class="control-label col-sm-5" for="applicant_name">Product: <span class="danger">*</span> </span> <span class="col-sm-7">
                              <input type="text"  class="form-control required"  required name="coa_product" id="coa_product" value="Home Loan" > 
                           </span>
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group"> <span class="control-label col-sm-5" for="email">File No : <span class="danger">*</span> </span> <span class="col-sm-7">
                              <input type="text" class="form-control required"  required id="coa_file_no" name="coa_file_no">
                           </span>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Address</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="coa_address" id="coa_address">
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Name of Person Met</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="coa_person_met" id="coa_person_met">
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Relationship with Applicant</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="coa_rel_with_app" id="coa_rel_with_app">
                  <br>
               </div>
            </div>
             <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Ease Of Locating</p>
               </div>
               <div class="col-md-2">
                  <input type="radio" class="form-control" name="coa_locating" id="coa_locating" value="Easy">
                  <label>Easy </label>
                  <br>
               </div>
               <div class="col-md-3">
                  <input type="radio" class="form-control" name="coa_locating" id="coa_locating" value="Difficult">
                  <label>Difficult</label>
                  <br>
               </div>
               <div class="col-md-4">
                  <input type="radio" class="form-control" name="coa_locating" id="coa_locating" value="Untraceable" >
                  <label>Untraceable</label>
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Landmark</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="coa_landmark" id="coa_landmark">
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Ownership of Residence</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="coa_residence" id="coa_residence" onkeyup="populateSecondTextBox3();">
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Number of Years Staying</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="coa_years_staying" id="coa_years_staying" onkeyup="populateSecondTextBox2();">
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Stay Confirmed by</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="coa_stay_con_by" id="coa_stay_con_by">
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Type of Residence</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="coa_type_of_resi" id="coa_type_of_resi">
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Residence is in COVID Zone</p>
               </div>
               <div class="col-md-2">
                  <input type="radio" class="form-control" name="coa_resi_covid_z" id="coa_resi_covid_z" value="Red" >
                  <label>Red</label>
                  <br>
               </div>
               <div class="col-md-3">
                  <input type="radio" class="form-control" name="coa_resi_covid_z" id="coa_resi_covid_z" value="Amber">
                  <label>Amber</label>
                  <br>
               </div>
               <div class="col-md-4">
                  <input type="radio" class="form-control" name="coa_resi_covid_z" id="coa_resi_covid_z" value="Green">
                  <label>Green</label>
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Family Members infected with COVID 19 and treated</p>
               </div>
               <div class="col-md-2">
                  <input type="radio" class="form-control" name="coa_family_mem_inf" id="coa_family_mem_inf" value="No Infection" >
                  <label>No Infection</label>
                  <br>
               </div>
               <div class="col-md-3">
                  <input type="radio" class="form-control" name="coa_family_mem_inf" id="coa_family_mem_inf" value="Infected And Treated">
                  <label>Infected And Treated</label>
                  <br>
               </div>
               <div class="col-md-4">
                  <input type="radio" class="form-control" name="coa_family_mem_inf" id="coa_family_mem_inf" value="Death Happened in the family due to COVID" >
                  <label>Death Happened in the family due to COVID</label>
                  <br>
               </div>
            </div>
         </div>
         <hr>
         <div class="row">
           <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Comments:</p>
               </div>
               <div class="col-md-9">
                <textarea rows="3" class="form-control" placeholder="" name="coa_comments" id="coa_comments"> DURING THE VISIT, PERSON MET IS SELF,ADDRESS IS EASY TO LOCATE, THE PREMISE IS RENTED , APPLICATION IS RESIDING FROM 5 YRS, CONFIRMED BY NEIGHBOUR MR SHIV KULSHRETHA & SONU SHARMA</textarea>
                  <br>
               </div>
            </div>
         </div>
        <!--  <p style="text-align:left;font-size:18px;font-weight:bold;">Comments: 
            <THEAD></THEAD></p> -->
        
         <h4 class="text-center">Tele Verification Report</h4>
         <div class="row">
            <div class="col-md-6">
               <div class="form-group"> <span class="control-label col-sm-5" for="visit_date"> Date of calling : <span class="danger">*</span></span> <span class="col-sm-7"> 
                                                                     <input type="date" class="form-control required setdatePicarDsp"  id="coa_tele_dof_visit" name="coa_tele_dof_visit" style="height:37px;"> 
                                                                     </span>
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group"> <span class="control-label col-sm-5" for="visit_time"> Time of calling : <span class="danger">*</span></span> <span class="col-sm-7"> 
                                                                     <input type="time" class="form-control required" id="coa_tele_tof_visit" name="coa_tele_tof_visit" style="height:37px;"> 
                                                                     </span>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold; margin-top:20px;">Name Of Applicant</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="coa_tele_nof_app" id="coa_tele_nof_app">
                  <br>
               </div>
            </div>
         </div>
         <h4 class="text-center">Residence tele Verification</h4>
         <div class="row">
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Contact Number</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="coa_tele_cont_no" id="coa_tele_cont_no">
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Contacted</p>
               </div>
               <div class="col-md-4">
                  <input type="radio" class="form-control" name="coa_tele_contacted" id="coa_tele_contacted" checked value="Yes" >
                  <label>Yes</label>
                  <br>
               </div>
               <div class="col-md-5">
                  <input type="radio" class="form-control" name="coa_tele_contacted" id="coa_tele_contacted" value="No" >
                  <label>No</label>
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Spoken to</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="coa_tele_spoken" id="coa_tele_spoken">
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Relationship With Applicant</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="coa_tele_rel_w_app" id="coa_tele_rel_w_app">
                  <br>
               </div>
            </div>
			
			<script>
			function populateSecondTextBox2() {
				document.getElementById('coa_tele_years_staying').value = document.getElementById('coa_years_staying').value;
				}
				
				function populateSecondTextBox3() {
				document.getElementById('coa_tele_residence').value = document.getElementById('coa_residence').value;
				}
			</script>
			
            <div class="col-md-12">
			
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Number of Years Staying</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="coa_tele_years_staying" id="coa_tele_years_staying">
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Ownership of Residence</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="coa_tele_residence" id="coa_tele_residence">
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Alternate Contact No,</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="coa_tele_alt_cont_no" id="coa_tele_alt_cont_no">
                  <br>
               </div>
            </div>
            
          
         </div>
         
      </section>
       
      <!-------------------Co-application form ends--------->
   </div>
   <input type="hidden" name="get_step_nomber_dsp" value="1">
   <input type="hidden" class="set_form_id_from_step1_dsp_page" name="form_id_set" value="">
   <input type="hidden" class="set_current_page" name="form_current_id_set" value="">
   <ul class="list-inline pull-right">
      <li>
         <button type="submit" class="btn btn-primary next-step">Save and continue</button>
      </li>
   </ul>
</form>
                              
                                
                           </div>
                           
						   <!-- Step 2 start -->
          <div class="tab-pane" role="tabpanel" id="step2">
             <form action="#" id="step_2_form_data" enctype="multipart/form-data">
			 
			 <input type="hidden" id="application_id" name="application_id"/>
			 <input type="hidden" name="off_co_applicant_val" id="off_co_applicant_val" value="none"/>
							  
                                  <input type="hidden" name="userid" value="<?php echo @$_SESSION['login_user']['id']; ?>">
   <input type="hidden" name="form_types" value="step1">
   <div class="row">
      <h3>Step 2</h3>
      <section>
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group"> <span class="control-label col-sm-5" for="visit_date"> Date of Visit : <span class="danger">*</span>
                           </span> <span class="col-sm-7"> 
                                       <input type="date" class="form-control required setdatePicarDsp" required id="off_dof_visit" name="off_dof_visit" style="height:37px;"> 
                                    </span>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group"> <span class="control-label col-sm-5" for="visit_time"> Time of Visit : <span class="danger">*</span>
                           </span> <span class="col-sm-7"> 
                                       <input type="time" class="form-control required" id="off_tof_visit" name="off_tof_visit" style="height:37px;"> 
                                    </span>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Name Of Applicant</p>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="off_name_app" id="off_name_app">
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Business Address</p>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="off_address" id="off_address">
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Type of Employment</p>
                        </div>
                        <div class="col-md-4">
                           <input type="radio" class="form-control" name="type_of_employment" id="type_of_employment" value="Salaried">
                           <label>Salaried</label>
                           <br>
                        </div>
                        <div class="col-md-5">
                           <input type="radio" name="type_of_employment" id="type_of_employment" value="Self Employed">
                           <label>Self Employed</label>
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Name of Person Met</p>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="off_person_met" id="off_person_met">
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Applicant is Working as</p>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="applicant_post" id="applicant_post" value="Assistant">
                           <label>Assistant</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="applicant_post" id="applicant_post" value="Clerk">
                           <label>Clerk</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="applicant_post" id="applicant_post" value="Skilled Labour">
                           <label>Skilled Labour</label>
                           <br>
                        </div>
                        <div class="col-md-3 offset-md-3">
                           <input type="radio" class="form-control" name="applicant_post" id="applicant_post" value="Superviser">
                           <label>Superviser</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="applicant_post" id="applicant_post" value="Jr Management">
                           <label>Jr. Management</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="applicant_post" id="applicant_post" value="Sr Management">
                           <label>Sr. Management</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-3 offset-md-3">
                           <input type="radio" class="form-control" name="applicant_post" id="applicant_post" value="Not Working">
                           <label>Not Working</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="applicant_post" id="applicant_post" value="Self Employed">
                           <label>Self Employed</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="applicant_post" id="applicant_post" value="Other">
                           <label>Other</label>
                            <input type="text" name="other_post" id="other_post">
                           <br>
                        </div>

                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Working Since</p>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="working_since" id="working_since">
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Ownership of Office</p>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="ownership_of_office" id="ownership_of_office" value="Self-Owned">
                           <label>Self-Owned</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="ownership_of_office" id="ownership_of_office" value="Rented">
                           <label>Rented</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="ownership_of_office" id="ownership_of_office" value="Leased">
                           <label>Leased</label>
                           <br>
                        </div>
                        <div class="col-md-3 offset-md-3">
                           <input type="radio" class="form-control" name="ownership_of_office" id="ownership_of_office" value="Shared Premises">
                           <label>Shared Premises</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="ownership_of_office" id="ownership_of_office" value="Business Center">
                           <label>Business Center </label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="ownership_of_office" id="ownership_of_office" id="Company Owned">
                           <label>Company Owned</label>
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Number of Years in Business/Employment</p>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="off_num_years" id="off_num_years">
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Nature Of Business</p>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="nature_of_business" id="nature_of_business" value="Trading">
                           <label>Trading</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="nature_of_business" id="nature_of_business" value="Manufacturing">
                           <label>Manufacturing</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="nature_of_business" id="nature_of_business" value="Service">
                           <label>Service</label>
                           <br>
                        </div>
                        <div class="col-md-3 offset-md-3">
                           <input type="radio" class="form-control" name="nature_of_business" id="nature_of_business" value="Commission Agent">
                           <label>Commission Agent </label>
                           <br>
                        </div>
                        <div class="col-md-5">
                           <input type="radio" class="form-control" name="nature_of_business" id="nature_of_business" value="Other">
                           <label>Other</label>
                           
                            <input type="text" name="other_nature" id="other_nature">
                           
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Office Board Seen</p>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="office_board_seen" id="office_board_seen">
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Landmark</p>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="off_landmark" id="off_landmark">
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Ease Of Locating </p>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="off_locating" id="off_locating" value="Easy">
                           <label>Easy</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="off_locating" id="off_locating" value="Difficult">
                           <label>Difficult</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="off_locating" id="off_locating" value="Untraceable">
                           <label>Untraceable</label>
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Number of Employee Seen At the time of Visit</p>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="number_of_employee" id="number_of_employee">
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Stock Level</p>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="stock_level" id="stock_level" value="High">
                           <label>High</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="stock_level" id="stock_level" value="Medium">
                           <label>Medium</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="stock_level" id="stock_level" value="Low">
                           <label>Low</label>
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Business Was Sighted at the time of visit</p>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="business_sighted" id="business_sighted">
                           <br>
                        </div>
                     </div>
					 
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Business Activity Seen At the time of Visit</p>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="business_activity" id="business_activity" value="High">
                           <label>High</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="business_activity" id="business_activity" value="Medium">
                           <label>Medium</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="business_activity" id="business_activity" value="Low">
                           <label>Low</label>
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Whether applicant has availed moratorium in any of the exiting loans under COVID guidline from Bank/NBFC etc.</p>
                        </div>
                        
						<div class="col-md-4">
						<input type="radio" class="form-control" name="applicant_availed" id="applicant_availed" value="Yes" >
						<label>Yes</label>
						<br>
						</div>
						<div class="col-md-5">
						<input type="radio" class="form-control" name="applicant_availed" id="applicant_availed" value="No" >
						<label>No</label>
						<br>
						</div>
						
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Business Confirmed By</p>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="business_con_by" id="business_con_by" value="Name Board">
                           <label>Name Board </label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="business_con_by" id="business_con_by" value="Neighbour">
                           <label>Neighbour</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="business_con_by" id="business_con_by" value="Security">
                           <label>Security</label>
                           <br>
                        </div>
                        <div class="col-md-3 offset-md-3">
                           <input type="radio" class="form-control" name="business_con_by" id="business_con_by" value="Person Met">
                           <label>Person Met</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="business_con_by" id="business_con_by" value="Couldn't Confirm">
                           <label>Couldn't Confirm</label>
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Office Is In Which COVID Zone</p>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="off_covid_zone" id="off_covid_zone" value="Red">
                           <label>Red</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="off_covid_zone" id="off_covid_zone" value="Amber">
                           <label>Amber</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="off_covid_zone" id="off_covid_zone" value="Green">
                           <label>Green</label>
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Impact Of COVID on Business: As per third Party Confirmation</p>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="impact_of_covid" id="impact_of_covid" value="High">
                           <label>High</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="impact_of_covid" id="impact_of_covid" value="Medium">
                           <label>Medium</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="impact_of_covid" id="impact_of_covid" value="Low">
                           <label>Low</label>
                           <br>
                        </div>
                     </div>
                  </div>
                  <hr>
                  <div class="row">
                      <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Comments:</p>
                        </div>
                        <div class="col-md-9">
                           <textarea class="form-control" rows="3" id="off_comments" name="off_comments" > DURING VISIT PERSON MET SELF,APPLICANT IS SALARIED WORKING AS A BUSINESS EXECUTIVE, WORKING EXP,08 YRS, OFFICE ADDRESS CHANDRALOK COMPLEX B 448 SHOP NO 10 DOUBLE ROAD ANAND NAGAR GWALIOR</textarea>
                           <br>
                        </div>
                     </div>
                   </div>
                  
                  <button type="button" onclick="myFunction2()" class="btn btn-lg btn-block" id="addrow" value="1" style=" width: auto; margin: 0 auto;margin-bottom: 20px;">Add New Co-Applicant</button>
      </section>

      <!------------Co-applicant-form business----->
       <section class="co-applicant-form" id="co-applicant2">
         <h4 class="text-center"><b>Co-Applicant Form</b></h4>
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group"> <span class="control-label col-sm-5" for="visit_date"> Date of Visit : <span class="danger">*</span>
                           </span> <span class="col-sm-7"> 
                                       <input type="date" class="form-control required setdatePicarDsp" required  id="coa_off_dof_visit" name="coa_off_dof_visit" style="height:37px;"> 
                                    </span>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group"> <span class="control-label col-sm-5" for="visit_time"> Time of Visit : <span class="danger">*</span>
                           </span> <span class="col-sm-7"> 
                                       <input type="time" class="form-control required" required id="coa_off_tof_visit" name="coa_off_tof_visit" style="height:37px;"> 
                                    </span>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Name Of Applicant</p>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="coa_off_name_app" id="coa_off_name_app">
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Business Address</p>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="coa_off_address" id="coa_off_address">
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Type of Employment</p>
                        </div>
                        <div class="col-md-4">
                           <input type="radio" class="form-control" name="coa_type_of_employment" id="coa_type_of_employment" value="Salaried">
                           <label>Salaried</label>
                           <br>
                        </div>
                        <div class="col-md-5">
                           <input type="radio" name="coa_type_of_employment" id="coa_type_of_employment" value="Self Employed">
                           <label>Self Employed</label>
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Name of Person Met</p>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="coa_off_person_met" id="coa_off_person_met">
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Applicant is Working as</p>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_applicant_post" id="coa_applicant_post" value="Assistant">
                           <label>Assistant</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_applicant_post" id="coa_applicant_post" value="Clerk">
                           <label>Clerk</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_applicant_post" id="coa_applicant_post" value="Skilled Labour">
                           <label>Skilled Labour</label>
                           <br>
                        </div>
                        <div class="col-md-3 offset-md-3">
                           <input type="radio" class="form-control" name="coa_applicant_post" id="coa_applicant_post" value="Superviser">
                           <label>Superviser</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_applicant_post" id="coa_applicant_post" value="Jr Management">
                           <label>Jr. Management</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_applicant_post" id="coa_applicant_post" value="Sr Management">
                           <label>Sr. Management</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-3 offset-md-3">
                           <input type="radio" class="form-control" name="coa_applicant_post" id="coa_applicant_post" value="Not Working">
                           <label>Not Working</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_applicant_post" id="coa_applicant_post" value="Self Employed"/>
                           <label>Self Employed</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" id="coa_applicant_post" name="coa_applicant_post">
                           <label>Other</label>
                           <input type="text" name="other_coa_post" id="other_coa_post" value="Other">
                           <br>
                        </div>

                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Working Since</p>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="coa_working_since" id="coa_working_since">
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Ownership of Office</p>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_ownership_of_office" id="coa_ownership_of_office" value="Self-Owned">
                           <label>Self-Owned</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_ownership_of_office" id="coa_ownership_of_office" value="Rented">
                           <label>Rented</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_ownership_of_office" id="coa_ownership_of_office" value="Leased">
                           <label>Leased</label>
                           <br>
                        </div>
                        <div class="col-md-3 offset-md-3">
                           <input type="radio" class="form-control" name="coa_ownership_of_office" id="coa_ownership_of_office" value="Shared Premises">
                           <label>Shared Premises</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_ownership_of_office" id="coa_ownership_of_office" value="Business Center">
                           <label>Business Center </label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_ownership_of_office" id="coa_ownership_of_office" value="Company Owned">
                           <label>Company Owned</label>
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Number of Years in Business/Employment</p>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="coa_off_num_years" id="coa_off_num_years">
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Nature Of Business</p>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_nature_of_business" id="coa_nature_of_business" value="Trading">
                           <label>Trading</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_nature_of_business" id="coa_nature_of_business" value="Manufacturing">
                           <label>Manufacturing</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_nature_of_business" id="coa_nature_of_business" value="Service">
                           <label>Service</label>
                           <br>
                        </div>
                        <div class="col-md-3 offset-md-3">
                           <input type="radio" class="form-control" name="coa_nature_of_business" id="coa_nature_of_business" value="Commission Agent">
                           <label>Commission Agent </label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio"  class="form-control" id="coa_nature_of_business" name="coa_nature_of_business" value="Other">
                           <label>Other</label>
                           <input type="text" name="other_coa_nature" id="other_coa_nature">
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Office Board Seen</p>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="coa_office_board_seen" id="coa_office_board_seen">
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Landmark</p>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="coa_off_landmark" id="coa_off_landmark">
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Ease Of Locating</p>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_off_locating" id="coa_off_locating" value="Easy">
                           <label>Easy</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_off_locating" id="coa_off_locating" value="Difficult">
                           <label>Difficult</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_off_locating" id="coa_off_locating" value="Untraceable">
                           <label>Untraceable</label>
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Number of Employee Seen At the time of Visit</p>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="coa_number_of_employee" id="coa_number_of_employee">
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Stock Level</p>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_stock_level" id="coa_stock_level" value="High">
                           <label>High</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_stock_level" id="coa_stock_level" value="Medium">
                           <label>Medium</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_stock_level" id="coa_stock_level" value="Low">
                           <label>Low</label>
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Business Was Sighted at the time of visit</p>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="coa_business_sighted" id="coa_business_sighted">
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Business Activity Seen At the time of Visit</p>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_business_activity" id="coa_business_activity" value="High">
                           <label>High</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_business_activity" id="coa_business_activity" value="Medium">
                           <label>Medium</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_business_activity" id="coa_business_activity" value="Low">
                           <label>Low</label>
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Whether applicant has availed moratorium in any of the exiting loans under COVID guidline from Bank/NBFC etc.</p>
                        </div>
                       
						
						<div class="col-md-4">
						<input type="radio" class="form-control" name="coa_applicant_availed" id="coa_applicant_availed" value="Yes" >
						<label>Yes</label>
						<br>
						</div>
						<div class="col-md-5">
						<input type="radio" class="form-control" name="coa_applicant_availed" id="coa_applicant_availed" value="No" >
						<label>No</label>
						<br>
						</div>
						
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Business Confirmed By</p>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_business_con_by" id="coa_business_con_by" value="Name Board">
                           <label>Name Board </label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_business_con_by" id="coa_business_con_by" value="Neighbour">
                           <label>Neighbour</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_business_con_by" id="coa_business_con_by" value="Security">
                           <label>Security</label>
                           <br>
                        </div>
                        <div class="col-md-3 offset-md-3">
                           <input type="radio" class="form-control" name="coa_business_con_by" id="coa_business_con_by" value="Person Met">
                           <label>Person Met</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_business_con_by" id="coa_business_con_by" value="Could not Confirm">
                           <label>Couldn't Confirm</label>
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Office Is In Which COIVD Zone</p>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_off_covid_zone" id="coa_off_covid_zone" value="Red">
                           <label>Red</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_off_covid_zone" id="coa_off_covid_zone" value="Amber">
                           <label>Amber</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_off_covid_zone" id="coa_off_covid_zone" value="Green">
                           <label>Green</label>
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Impact Of COIVD on Business:As per third Party Confirmation</p>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_impact_of_covid" id="coa_impact_of_covid" value="High">
                           <label>High</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_impact_of_covid" id="coa_impact_of_covid" value="Medium">
                           <label>Medium</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_impact_of_covid" id="coa_impact_of_covid" value="Low">
                           <label>Low</label>
                           <br>
                        </div>
                     </div>
                  </div>
                  <hr>
                  <div class="row">
                      <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Comments:</p>
                        </div>
                        <div class="col-md-9">
                           <textarea class="form-control" rows="3" name="coa_off_comments" id="coa_off_comments"> DURING VISIT PERSON MET SELF,APPLICANT IS SALARIED WORKING AS A BUSINESS EXECUTIVE, WORKING EXP,08 YRS, OFFICE ADDRESS CHANDRALOK COMPLEX B 448 SHOP NO 10 DOUBLE ROAD ANAND NAGAR GWALIOR</textarea>
                           <br>
                        </div>
                     </div>
                   </div>
                  
      </section>
      <!-----------------------CO-applicant form ednds------------------>
   </div>
                                 <ul class="list-inline pull-right">
                                    <li>
                                       <button type="button" class="btn btn-default prev-step">Previous</button>
                                    </li>
                                    <li>
                                       <button type="submit" class="btn btn-primary next-step">Save and continue</button>
                                    </li>
                                 </ul>
                              </form>
                           </div>
                           <!-- Step 3 Start -->
                           <div class="tab-pane" role="tabpanel" id="step3">
               <form action="" method="post" id="step_3_form_data" enctype="multipart/form-data">
			   <input type="hidden" id="application1" name="application1"/>
                <input type="hidden" name="form_types" value="step3">
                                 <div class="row" style="padding-bottom:20px">
                                    <h3>Step 3</h3>
                                    <div class="col-md-6">
                  <div class="staresd">
                        <div class="imgup"><i class=" " style="font-size: 72px;"></i>
						<img id="img1" src=" " alt="" style="margin-top:5px; object-fit: cover;">
                          <h4>Upload Photo</h4>
                          <input type="file" name="doc1" id="doc1" onchange="readURL(this);" >
						  <script>
                      function readURL(input) {
                          if (input.files && input.files[0]) {
                              var reader = new FileReader();

                              reader.onload = function (e) {
                                  $('#img1')
                                      .attr('src', e.target.result)
                                      .width(420)
                                      .height(218);
                              };

                              reader.readAsDataURL(input.files[0]);
                          }
                      }
                  </script>
                        </div>
                      </div>
                </div>
                <div class="col-md-6">
                  <div class="staresd">
                        <div class="imgup"><i class="" style="font-size: 72px;"></i>
						<img id="img2" src=" " alt="" style="margin-top:5px; object-fit: cover;">
                          <h4>Upload Photo</h4>
                          <input  type="file" name="doc2" id="doc2" onchange="readURL2(this);">
						  <script>
                      function readURL2(input) {
                          if (input.files && input.files[0]) {
                              var reader = new FileReader();

                              reader.onload = function (e) {
                                  $('#img2')
                                      .attr('src', e.target.result)
                                      .width(420)
                                      .height(218);
                              };

                              reader.readAsDataURL(input.files[0]);
                          }
                      }
                  </script>
                        </div>
                      </div>
                </div>
				
                <div class="col-md-6">
                  <div class="staresd">
                        <div class="imgup"><i style="font-size: 72px;"></i>
                         <img id="img3" src=" " alt="" style="margin-top:5px; object-fit: cover;"> 
						  <h4>Upload Photo</h4>
                          <input  type="file" name="doc3" id="doc3" onchange="readURL3(this);">
						  <script>
                      function readURL3(input) {
                          if (input.files && input.files[0]) {
                              var reader = new FileReader();

                              reader.onload = function (e) {
                                  $('#img3')
                                      .attr('src', e.target.result)
                                      .width(420)
                                      .height(218);
                              };

                              reader.readAsDataURL(input.files[0]);
                          }
                      }
                  </script>
                        </div>
                      </div>
                </div>
                <div class="col-md-6">
                  <div class="staresd">
                        <div class="imgup"><i  style="font-size: 72px;"></i>
                         <img id="img4" src=" " alt="" style="margin-top:5px; object-fit: cover;"> 
						  <h4>Upload Photo</h4>
                          <input type="file" name="doc4" id="doc4" onchange="readURL4(this);">
						  <script>
                      function readURL4(input) {
                          if (input.files && input.files[0]) {
                              var reader = new FileReader();

                              reader.onload = function (e) {
                                  $('#img4')
                                      .attr('src', e.target.result)
                                      .width(420)
                                      .height(218);
                              };

                              reader.readAsDataURL(input.files[0]);
                          }
                      }
                  </script>
                        </div>
                      </div>
                </div>
                                 </div>
                                 <input type="hidden" name="get_step_nomber_dsp" value="3">
                                 <input type="hidden" class="set_form_id_from_step1_dsp_page" name="form_id_set" value="">
                                 <input type="hidden" class="set_current_page3" name="form_current_id_set" value="">
                                 <ul class="list-inline pull-right">
                  <!-- <li><button type="button" class="btn btn-default prev-step">Previous</button></li> -->
                  <!-- <li><button type="button" class="btn btn-default next-step">Skip</button></li> -->
                  <li><button type="submit"  class="btn btn-primary next-step">Submit</button></li>
               </ul>
                              </form>
                           </div>
                           
                           <!-- <div class="clearfix"></div> --></div>
                  </div>
                  </section>
               </div>
            </div>
         </div>
         <script>
            /* When the user clicks on the button, 
                           toggle between hiding and showing the dropdown content */
                           function myFunction() {
                             document.getElementById("myDropdown").classList.toggle("show");
                           }
                           
                           // Close the dropdown if the user clicks outside of it
                           window.onclick = function(event){
                             if (!event.target.matches('.dropbtn')) {
                               var dropdowns = document.getElementsByClassName("dropdown-menu");
                               var i;
                               for (i = 0; i < dropdowns.length; i++) {
                                 var openDropdown = dropdowns[i];
                                 if (openDropdown.classList.contains('show')) {
                                   openDropdown.classList.remove('show');
                                 }
                               }
                             }
                           }
                           /* $(document).ready(function() {
                           $(".tab").click(function () {
                               $(".tab").removeClass("active");
                               // $(".tab").addClass("active"); // instead of this do the below 
                               
							   $(this).addClass("active");   
                           });
                           }); */
         </script>
         <script>
function myFunction() {
  var x = document.getElementById("co-applicant");
  if (x.style.display === "block") {
    x.style.display = "none";
	$('#co_applicant_val').val('none');
  } else {
    x.style.display = "block";
	$('#co_applicant_val').val('show');
	        
			// co-applicant block
      
				
				
  }
}
</script>
  <script>
function myFunction2() {
  var x = document.getElementById("co-applicant2");
  if (x.style.display === "block") {
    x.style.display = "none";
	$('#off_co_applicant_val').val('none');
  } else {
    x.style.display = "block";
	$('#off_co_applicant_val').val('show1');
  }
}
</script>

         <!--   Core JS Files   -->
         <script src="http://digimonk.net/Ankit/assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
         <script src="http://digimonk.net/Ankit/assets/js/bootstrap.min.js" type="text/javascript"></script>
         <!--  Charts Plugin -->
         <script src="http://digimonk.net/Ankit/assets/js/chartist.min.js"></script>
         <!--  Notifications Plugin    -->
         <script src="http://digimonk.net/Ankit/assets/js/bootstrap-notify.js"></script>
		 <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="http://digimonk.net/Ankit/assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="http://digimonk.net/Ankit/assets/js/demo.js"></script> 
         
	
	<!----------------- js ----------------------->
<script src="<?php echo base_url(); ?>assets/site/js/jquery.min.js"></script>

<link rel='stylesheet' href='<?php echo base_url();?>assets/site/sweetalert/sweetalert.css' />
<script src="<?php echo base_url();?>assets/site/sweetalert/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>



<script>

		// signup form 
		
var loginfrmvalidator = $("#step_one_form_data").validate({
    rules: {
          
			coa_date_of_visit: {
                required: true,
            },
          
			coa_date_of_time: {
                required: true,
            },
			coa_product: {
                required: true,
            },
			coa_file_no: {
                required: true,
            },
			coa_tele_dof_visit: {
                required: true,
            },
			coa_tele_tof_visit: {
                required: true,
            }
	},
    messages: {
       
        coa_date_of_visit: {
          required: "Please select the date of visit.", 
         },
       
         coa_date_of_time: {
          required: "Please enter the time of visit.", 
         },
		 coa_product: {
          required: "Please enter the product.", 
         },
		 coa_file_no: {
          required: "Please enter the file no.", 
         },
		coa_tele_dof_visit: {
          required: "Please select the date of calling.", 
         },
		 coa_tele_tof_visit: {
          required: "Please enter the time of calling", 
         },
       
    },
     
});


$('#step_one_form_data').submit(function(event){ 
       event.preventDefault();
       
      
       if ($("#step_one_form_data").valid()) {
           
         
                        
                        $.ajax({
                          type: "POST",
                          url: "<?php echo base_url() ?>step_one_form",
                          data:new FormData(this),
                                   processData:false,
                                   contentType:false,
                                   cache:false,
                                   async:false,
                                  dataType: 'json',
                              
                          success: function(response)
                          {
            
                           $('#checkemail').hide();
                      
                               if(response.success == true) {
								   $('#application_id').val(response.application_id);
                                        $('#step_one_form_data')[0].reset();
                        				swal({
											  title: 'Data save!',
											  text: 'Successfully',
											  icon: 'success',
											  timer: 2000,
											   button: false
											}).then(function() {
												
											$("#set_spape_id_dsp_1").removeClass("active");	
											$("#set_spape_id_dsp_2").addClass("active");
											
											$("#step1").hide();
											$("#step2").show();
                                      
                                   });
                                        
                                       
                                    }
                            else{
                        				
                        		swal({
											  title: 'Sorry!',
											  text: response.messages,
											  icon: 'error',
											  timer: 2000,
											   button: false
											});
											
                            $('#checkemail').html(response.messages);
                             $('#checkemail').show();
                                        
                                    }
                              
                           
            
                          },
                            
            
                        });
                    /* } */
    }
});

			// step_2_form
			
	var loginfrmvalidator = $("#step_2_form_data").validate({
    rules: {
          
			coa_off_dof_visit: {
                required: true,
            },
          
			coa_off_tof_visit: {
                required: true,
            },
			
	},
    messages: {
       
        coa_off_dof_visit: {
          required: "Please select the date of visit.", 
         },
       
         coa_off_tof_visit: {
          required: "Please enter the time of visit.", 
         },
		 
       
    },
     
});

$('#step_2_form_data').submit(function(event){ 
       event.preventDefault();
       
      
       if ($("#step_2_form_data").valid()) {
           
         
                        
                        $.ajax({
                          type: "POST",
                          url: "<?php echo base_url() ?>step_two_form",
                          data:new FormData(this),
                                   processData:false,
                                   contentType:false,
                                   cache:false,
                                   async:false,
                                  dataType: 'json',
                              
                          success: function(response)
                          {
            
                           $('#checkemail').hide();
                      
                               if(response.success == true) {
								   $('#application1').val(response.application1);
                                        $('#step_2_form_data')[0].reset();
                        				swal({
											  title: 'Data save!',
											  text: 'Successfully',
											  icon: 'success',
											  timer: 2000,
											   button: false
											}).then(function() {
												
                                      $("#set_spape_id_dsp_2").removeClass("active");	
											$("#set_spape_id_dsp_3").addClass("active");
											
											$("#step2").hide();
											$("#step3").show();
                                      
                                   });
                                        
                                       
                                    }
                            else{
                        				
                        		swal({
											  title: 'Sorry!',
											  text: response.messages,
											  icon: 'error',
											  timer: 2000,
											   button: false
											});
											
                            $('#checkemail').html(response.messages);
                             $('#checkemail').show();
                                        
                                    }
                              
                           
            
                          },
                            
            
                        });
                    /* } */
    }
});

				// Step 3

$('#step_3_form_data').submit(function(event){ 
       event.preventDefault();
       
      
       if ($("#step_3_form_data").valid()) {
           
         
                        
                        $.ajax({
                          type: "POST",
                          url: "<?php echo base_url() ?>step_three_form",
                          data:new FormData(this),
                                   processData:false,
                                   contentType:false,
                                   cache:false,
                                   async:false,
                                  dataType: 'json',
                              
                          success: function(response)
                          {
            
                           $('#checkemail').hide();
                      
                               if(response.success == true) {
                                        $('#step_3_form_data')[0].reset();
                        				swal({
											  title: 'All Data submit!',
											  text: 'Successfully',
											  icon: 'success',
											  timer: 2000,
											   button: false
											}).then(function() {
										window.location.href = "<?php echo base_url(); ?>add_new_loan";		
                                      
                                   });
                                        
                                       
                                    }
                            else{
                        				
                        		swal({
											  title: 'Sorry!',
											  text: response.messages,
											  icon: 'error',
											  timer: 2000,
											   button: false
											});
											
                            $('#checkemail').html(response.messages);
                             $('#checkemail').show();
                                        
                                    }
                              
                           
            
                          },
                            
            
                        });
                    /* } */
    }
});


</script>

</html>