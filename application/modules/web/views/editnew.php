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
   <link href="http://digimonk.net/Ankit/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
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
               
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            
           
        <form action="#" method="POST" id="step_one_form_data" enctype="multipart/form-data">
   
   <input type="hidden" name="userid" value="">
   <input type="hidden" name="form_types" value="step1">
   <div class="row">
   <!--     <button id="btn1">Applicant</button>
         <button id="btn-2">CO-applicant</button> -->
      <h3>Step 1</h3>
      <section class="applicant-form">
	
	<?php foreach($applicant_id as $row) { ?>
		
		<input type="hidden" name="applicant_id" id="applicant_id" value="<?php echo $row['application_id']; ?>"/>
         <div class="row">
            <div class="col-md-6">
               <div class="form-group"> <span class="control-label col-sm-5" for="visit_date"> Date of Visit : <span class="danger">*</span>
                  </span> <span class="col-sm-7"> 
                              <input type="text" class="form-control required setdatePicarDsp" required id="date_of_visit" name="date_of_visit" style="height:37px;" value="<?php echo $row['date_of_visit']; ?>"> 
                           </span>
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group"> <span class="control-label col-sm-5" for="visit_time"> Time of Visit : <span class="danger">*</span>
                  </span> <span class="col-sm-7"> 
                              <input type="time" class="form-control required" required id="date_of_time" name="date_of_time" style="height:37px;" value="<?php echo $row['date_of_time']; ?>" > 
                           </span>
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group"> <span class="control-label col-sm-5" for="applicant_name">Product: <span class="danger">*</span> </span> <span class="col-sm-7">
                              <input type="text"  class="form-control required" required name="product" id="product" value="<?php echo $row['product']; ?>"> 
                           </span>
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group"> <span class="control-label col-sm-5" for="email">File No : <span class="danger">*</span> </span> <span class="col-sm-7">
                              <input type="text" class="form-control required" required id="file_no" name="file_no" value="<?php echo $row['file_no']; ?>" >
                           </span>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Address</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="address" id="address" value="<?php echo $row['address']; ?>" >
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Name of Person Met</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="person_met" id="person_met" value="<?php echo $row['person_met']; ?>" >
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Retionship with Applicant</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="rel_with_app" id="rel_with_app" value="<?php echo $row['rel_with_app']; ?>">
                  <br>
               </div>
            </div>
             <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Ease Of Locating</p>
               </div>
               <div class="col-md-2">
                  <input type="checkbox" class="form-control" name="locating" id="locating" value="Easy"  <?php echo ($row['locating'] == 'Easy' ? 'checked' : ''); ?> >
                  <label>Easy </label>
                  <br>
               </div>
               <div class="col-md-3">
                  <input type="checkbox" class="form-control" name="locating" id="locating" value="Difficult" <?php echo ($row['locating'] == 'Difficult' ? 'checked' : ''); ?> >
                  <label>Difficult</label>
                  <br>
               </div>
               <div class="col-md-4">
                  <input type="checkbox" class="form-control" name="locating" id="locating" value="Untraceable" <?php echo ($row['locating'] == 'Untraceable' ? 'checked' : ''); ?> >
                  <label>Untraceable</label>
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Landmark</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="landmark" id="landmark" value="<?php echo $row['landmark']; ?>">
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Ownership of Residence</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="residence" id="residence" value="<?php echo $row['residence']; ?>">
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Number of Years Staying</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="years_staying" id="years_staying" value="<?php echo $row['years_staying']; ?>">
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Stay Confirmed by</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="stay_con_by" id="stay_con_by" value="<?php echo $row['stay_con_by']; ?>">
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Type of Residence</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="type_of_resi" id="type_of_resi" value="<?php echo $row['type_of_resi']; ?>" >
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Residence is in COVID Zone</p>
               </div>
               <div class="col-md-2">
                  <input type="checkbox" class="form-control" name="resi_covid_z" id="resi_covid_z" value="Red" <?php echo ($row['resi_covid_z']=='Red' ? 'checked' : '');?> >
                  <label>Red</label>
                  <br>
               </div>
               <div class="col-md-3">
                  <input type="checkbox" class="form-control" name="resi_covid_z" id="resi_covid_z" value="Amber" <?php echo ($row['resi_covid_z']=='Amber' ? 'checked' : '');?> >
                  <label>Amber</label>
                  <br>
               </div>
               <div class="col-md-4">
                  <input type="checkbox" class="form-control" name="resi_covid_z" id="resi_covid_z" value="Green" <?php echo ($row['resi_covid_z']=='Green' ? 'checked' : '');?> >
                  <label>Green</label>
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Family Members infected with COVID 19 and treated</p>
               </div>
               <div class="col-md-2">
                  <input type="checkbox" class="form-control" name="family_mem_inf" id="family_mem_inf" value="No Infection" <?php echo ($row['family_mem_inf']=='No Infection' ? 'checked' : '');?>  >
                  <label>No Infection</label>
                  <br>
               </div>
               <div class="col-md-3">
                  <input type="checkbox" class="form-control" name="family_mem_inf" id="family_mem_inf" value="Infected And Treated" <?php echo ($row['family_mem_inf']=='Infected And Treated' ? 'checked' : '');?> >
                  <label>Infected And Treated</label>
                  <br>
               </div>
               <div class="col-md-4">
                  <input type="checkbox" class="form-control" name="family_mem_inf" id="family_mem_inf" value="Death Happened in the family due to COVID" <?php echo ($row['family_mem_inf']=='Death Happened in the family due to COVID' ? 'checked' : '');?> >
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
                <textarea rows="3" class="form-control" placeholder="" name="comments" id="comments" > <?php echo $row['comments']; ?> </textarea>
                  <br>
               </div>
            </div>
         </div>
        <!--  <p style="text-align:left;font-size:18px;font-weight:bold;">Comments: 
            <THEAD></THEAD></p> -->
         <div class="row">
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Verifier's Name & Sign</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="appli_no">
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Manager's Name & Sign</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="appli_no">
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Agency Name</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="appli_no">
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Agency Seal</p>
               </div>
               <div class="col-md-9">
                  <img src="http://digimonk.net/Ankit/images/agency-seal.png">
                  <br>
               </div>
            </div>
         </div>
	<?php } ?>
	<?php foreach($applicant_tele as $row) 	{ ?>
	
         <h4 class="text-center">Tele Verification Report</h4>
         <div class="row">
            <div class="col-md-6">
               <div class="form-group"> <span class="control-label col-sm-5" for="visit_date"> Date of Visit : <span class="danger">*</span></span> <span class="col-sm-7"> 
                                                                     <input type="text" class="form-control required setdatePicarDsp" required id="tele_dof_visit" name="tele_dof_visit" style="height:37px;" value="<?php echo $row['tele_dof_visit']; ?> " > 
                                                                     </span>
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group"> <span class="control-label col-sm-5" for="visit_time"> Time of Visit : <span class="danger">*</span></span> <span class="col-sm-7"> 
                                                                     <input type="time" class="form-control required" required id="tele_tof_visit" name="tele_tof_visit" style="height:37px;" value="<?php echo $row['tele_tof_visit']; ?>" > 
                                                                     </span>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Name Of Applicant</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="tele_nof_app" id="tele_nof_app" value="<?php echo $row['tele_nof_app']; ?>">
                  <br>
               </div>
            </div>
         </div>
         <h4 class="text-center">Resindence tele Verification</h4>
         <div class="row">
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Contact Number</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="tele_cont_no" id="tele_cont_no" value="<?php echo $row['tele_cont_no']; ?>">
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Contacted</p>
               </div>
               <div class="col-md-4">
                  <input type="checkbox" class="form-control" name="tele_contacted" id="tele_contacted" value="Yes" <?php echo ($row['tele_contacted'] =='Yes' ? 'checked' : ''); ?> >
                  <label>Yes</label>
                  <br>
               </div>
               <div class="col-md-5">
                  <input type="checkbox" class="form-control" name="tele_contacted" id="tele_contacted" value="No" <?php echo ($row['tele_contacted'] =='No' ? 'checked' : ''); ?> >
                  <label>No</label>
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Spoken to</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="tele_spoken" id="tele_spoken" value="<?php echo $row['tele_spoken']; ?> ">
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Relationship With Applicant</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="tele_rel_w_app" id="tele_rel_w_app" value="<?php echo $row['tele_rel_w_app']; ?> ">
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Number of Years Staying</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="tele_years_staying" id="tele_years_staying" value="<?php echo $row['tele_years_staying']; ?>">
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Ownership of Residence</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="tele_residence" id="tele_residence" value="<?php echo $row['tele_residence']; ?>">
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Alternate Contact No,</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="tele_alt_cont_no" id="tele_alt_cont_no" value="<?php echo $row['tele_alt_cont_no']; ?>">
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Verifier's Name & Sign</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="appli_no">
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Manager's Name & Sign</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="appli_no">
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Agency Name</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="appli_no">
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Agency Seal</p>
               </div>
               <div class="col-md-9">
                  <img src="http://digimonk.net/Ankit/images/agency-seal.png">
                  <br>
               </div>
            </div>
         </div>
    <?php } ?>     
         <button type="button" onclick="myFunction()" class="btn btn-lg btn-block" id="addrow" value="1" style=" width: auto; margin: 0 auto;margin-bottom: 20px;">Add New Co-Applicant</button>
      </section>

      <!-----------Co-Application-form--------->
       <section class="applicant-form" id="co-applicant">

         <div class="row">
            <div class="col-md-6">
               <div class="form-group"> <span class="control-label col-sm-5" for="visit_date"> Date of Visit : <span class="danger">*</span>
                  </span> <span class="col-sm-7"> 
                              <input type="text" class="form-control required setdatePicarDsp" id="coa_date_of_visit" name="coa_date_of_visit" style="height:37px;"> 
                           </span>
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group"> <span class="control-label col-sm-5" for="visit_time"> Time of Visit : <span class="danger">*</span>
                  </span> <span class="col-sm-7"> 
                              <input type="time" class="form-control required" name="coa_date_of_time" id="coa_date_of_time" style="height:37px;"> 
                           </span>
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group"> <span class="control-label col-sm-5" for="applicant_name">Product: <span class="danger">*</span> </span> <span class="col-sm-7">
                              <input type="text"  class="form-control required" name="coa_product" id="coa_product"> 
                           </span>
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group"> <span class="control-label col-sm-5" for="email">File No : <span class="danger">*</span> </span> <span class="col-sm-7">
                              <input type="text" class="form-control required" id="coa_file_no" name="coa_file_no">
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
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Retionship with Applicant</p>
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
                  <input type="checkbox" class="form-control" name="coa_locating" id="coa_locating">
                  <label>Easy </label>
                  <br>
               </div>
               <div class="col-md-3">
                  <input type="checkbox" class="form-control" name="coa_locating" id="coa_locating">
                  <label>Difficult</label>
                  <br>
               </div>
               <div class="col-md-4">
                  <input type="checkbox" class="form-control" name="coa_locating" id="coa_locating">
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
                  <input type="text" class="form-control" name="coa_residence" id="coa_residence">
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Number of Years Staying</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="coa_years_staying" id="coa_years_staying">
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
                  <input type="checkbox" class="form-control" name="coa_resi_covid_z" id="coa_resi_covid_z">
                  <label>Red</label>
                  <br>
               </div>
               <div class="col-md-3">
                  <input type="checkbox" class="form-control" name="coa_resi_covid_z" id="coa_resi_covid_z">
                  <label>Amber</label>
                  <br>
               </div>
               <div class="col-md-4">
                  <input type="checkbox" class="form-control" name="coa_resi_covid_z" id="coa_resi_covid_z">
                  <label>Green</label>
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Family Members infected with COVID 19 and treated</p>
               </div>
               <div class="col-md-2">
                  <input type="checkbox" class="form-control" name="coa_family_mem_inf" id="coa_family_mem_inf">
                  <label>No Infection</label>
                  <br>
               </div>
               <div class="col-md-3">
                  <input type="checkbox" class="form-control" name="coa_family_mem_inf" id="coa_family_mem_inf">
                  <label>Infected And Treated</label>
                  <br>
               </div>
               <div class="col-md-4">
                  <input type="checkbox" class="form-control" name="coa_family_mem_inf" id="coa_family_mem_inf">
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
         <div class="row">
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Verifier's Name & Sign</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="appli_no">
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Manager's Name & Sign</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="appli_no">
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Agency Name</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="appli_no">
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Agency Seal</p>
               </div>
               <div class="col-md-9">
                  <img src="http://digimonk.net/Ankit/images/agency-seal.png">
                  <br>
               </div>
            </div>
         </div>
         <h4 class="text-center">Tele Verification Report</h4>
         <div class="row">
            <div class="col-md-6">
               <div class="form-group"> <span class="control-label col-sm-5" for="visit_date"> Date of Visit : <span class="danger">*</span></span> <span class="col-sm-7"> 
                                                                     <input type="text" class="form-control required setdatePicarDsp"  id="coa_tele_dof_visit" name="coa_tele_dof_visit" style="height:37px;"> 
                                                                     </span>
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group"> <span class="control-label col-sm-5" for="visit_time"> Time of Visit : <span class="danger">*</span></span> <span class="col-sm-7"> 
                                                                     <input type="time" class="form-control required" id="coa_tele_tof_visit" name="coa_tele_tof_visit" style="height:37px;"> 
                                                                     </span>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Name Of Applicant</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="coa_tele_nof_app" id="coa_tele_nof_app">
                  <br>
               </div>
            </div>
         </div>
         <h4 class="text-center">Resindence tele Verification</h4>
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
                  <input type="checkbox" class="form-control" name="coa_tele_contacted" id="coa_tele_contacted">
                  <label>Yes</label>
                  <br>
               </div>
               <div class="col-md-5">
                  <input type="checkbox" class="form-control" name="coa_tele_contacted" id="coa_tele_contacted">
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
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Verifier's Name & Sign</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="appli_no">
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Manager's Name & Sign</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="appli_no">
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Agency Name</p>
               </div>
               <div class="col-md-9">
                  <input type="text" class="form-control" name="appli_no">
                  <br>
               </div>
            </div>
            <div class="col-md-12">
               <div class="col-md-3">
                  <p style="text-align:left;font-size:16px;font-weight:bold;">Agency Seal</p>
               </div>
               <div class="col-md-9">
                  <img src="http://digimonk.net/Ankit/images/agency-seal.png">
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
               <li><button type="submit" class="btn btn-primary next-step">update</button></li>
            </ul>
			
</form>
                            
         
        
        </div>
    </div>
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
                           window.onclick = function(event) {
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
                           $(document).ready(function() {
                           $(".tab").click(function () {
                               $(".tab").removeClass("active");
                               // $(".tab").addClass("active"); // instead of this do the below 
                               $(this).addClass("active");   
                           });
                           });
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
  } else {
    x.style.display = "block";
	$('#off_co_applicant_val').val('show1');
  }
}
</script>
<script type="text/javascript">
    jquery(function () {
        $("#othercheck").click(function () {
            if ($(this).is(":checked")) {
                $("#otherinput").show();
            } else {
                $("#otherinput").hide();
            }
        });
    });
</script>
        
	

   
   
   
	<!----------------- js ----------------------->
<script src="<?php echo base_url(); ?>assets/site/js/jquery.min.js"></script>

<link rel='stylesheet' href='<?php echo base_url();?>assets/site/sweetalert/sweetalert.css' />
<script src="<?php echo base_url();?>assets/site/sweetalert/sweetalert.min.js"></script>
<script src="<?php echo base_url()?>assets/site/js/jquery.validate.min.js"></script>

<script>

// signup form 

$('#step_one_form_data').submit(function(event){ 
       event.preventDefault();
       alert("hell");
      
       if ($("#step_one_form_data").valid()) {
           
         
                        
                        $.ajax({
                          type: "POST",
                          url: "<?php echo base_url() ?>step_one_update",
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
											  title: 'Data update!',
											  text: 'Successfully',
											  icon: 'success',
											  timer: 2000,
											   button: false
											}).then(function() {
									window.location.href = "<?php echo base_url(); ?>view_loan";			
                                      
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
