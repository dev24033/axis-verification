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
	 
		<input type="hidden" name="applicant_id" id="applicant_id" value="<?php echo $applicant_id[0]['application_id']; ?>"/>
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group"> <span class="control-label col-sm-5" for="visit_date"> Date of Visit : <span class="danger">*</span>
                           </span> <span class="col-sm-7"> 
                        <input type="date" class="form-control required setdatePicarDsp" id="off_dof_visit" name="off_dof_visit" required style="height:37px;" value=" <?php echo $applicant_office[0]['off_dof_visit']; ?>" > 
                                    </span>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group"> <span class="control-label col-sm-5" for="visit_time"> Time of Visit : <span class="danger">*</span>
                           </span> <span class="col-sm-7"> 
                            <input type="time" class="form-control" required id="off_tof_visit" name="off_tof_visit" style="height:37px;" value="<?php echo $applicant_office[0]['off_tof_visit']; ?>" > 
                                    </span>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Name Of Applicant</p>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="off_name_app" id="off_name_app" value=" <?php echo $applicant_office[0]['off_name_app']; ?>">
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Business Address</p>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="off_address" id="off_address" value=" <?php echo $applicant_office[0]['off_address']; ?>" >
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Type of Employment</p>
                        </div>
                        <div class="col-md-4">
                           <input type="radio" class="form-control" name="type_of_employment" id="type_of_employment" value="Salaried" <?php echo ($applicant_office[0]['type_of_employment']=='Salaried' ? 'checked' : ''); ?> >
                           <label>Salaried</label>
                           <br>
                        </div>
                        <div class="col-md-5">
                           <input type="radio" class="form-control" name="type_of_employment" id="type_of_employment" value="Self Employed" <?php echo ($applicant_office[0]['type_of_employment']=='Self Employed' ? 'checked' : ''); ?> >
                           <label>Self Employed</label>
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Name of Person Met</p>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="off_person_met" id="off_person_met" value=" <?php echo $applicant_office[0]['off_person_met']; ?>" >
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Applicant is Working as</p>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="applicant_post" id="applicant_post" value="Assistant" <?php echo ($applicant_office[0]['applicant_post']=='Assistant' ? 'checked' : ''); ?>>
                           <label>Assistant</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="applicant_post" id="applicant_post" value="Clerk" <?php echo ($applicant_office[0]['applicant_post']=='Clerk' ? 'checked' : ''); ?>>
                           <label>Clerk</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="applicant_post" id="applicant_post" value="Skilled Labour" <?php echo ($applicant_office[0]['applicant_post']=='Skilled Labour' ? 'checked' : ''); ?>>
                           <label>Skilled Labour</label>
                           <br>
                        </div>
                        <div class="col-md-3 offset-md-3">
                           <input type="radio" class="form-control" name="applicant_post" id="applicant_post" value="Superviser" <?php echo ($applicant_office[0]['applicant_post']=='Superviser' ? 'checked' : ''); ?>>
                           <label>Superviser</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="applicant_post" id="applicant_post" value="Jr Management" <?php echo ($applicant_office[0]['applicant_post']=='Jr Management' ? 'checked' : ''); ?>>
                           <label>Jr. Management</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="applicant_post" id="applicant_post" value="Sr Management" <?php echo ($applicant_office[0]['applicant_post']=='Sr Management' ? 'checked' : ''); ?>>
                           <label>Sr. Management</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-3 offset-md-3">
                           <input type="radio" class="form-control" name="applicant_post" id="applicant_post" value="Not Working" <?php echo ($applicant_office[0]['applicant_post']=='Not Working' ? 'checked' : ''); ?>>
                           <label>Not Working</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="applicant_post" id="applicant_post" value="Self Employed" <?php echo ($applicant_office[0]['applicant_post']=='Self Employed' ? 'checked' : ''); ?>>
                           <label>Self Employed</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="applicant_post" id="applicant_post" value="Other" <?php echo ($applicant_office[0]['applicant_post']=='Other' ? 'checked' : ''); ?>>
                           <label>Other</label>
                            <input type="text" name="other_post" id="other_post" value="<?php echo $applicant_office[0]['other_post']; ?>">
                           <br>
                        </div>

                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Working Since</p>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="working_since" id="working_since" value="<?php echo $applicant_office[0]['working_since']; ?>">
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Ownership of Office</p>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="ownership_of_office" id="ownership_of_office" value="Self-Owned" <?php echo ($applicant_office[0]['ownership_of_office'] == 'Self Owned' ? 'checked' : ''); ?> >
                           <label>Self-Owned</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="ownership_of_office" id="ownership_of_office" value="Rented" <?php echo ($applicant_office[0]['ownership_of_office'] == 'Rented' ? 'checked' : ''); ?>  >
                           <label>Rented</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="ownership_of_office" id="ownership_of_office" value="Leased" <?php echo ($applicant_office[0]['ownership_of_office'] == 'Leased' ? 'checked' : ''); ?> >
                           <label>Leased</label>
                           <br>
                        </div>
                        <div class="col-md-3 offset-md-3">
                           <input type="radio" class="form-control" name="ownership_of_office" id="ownership_of_office" value="Shared Premises" <?php echo ($applicant_office[0]['ownership_of_office'] == 'Shared Premises' ? 'checked' : ''); ?> >
                           <label>Shared Premises</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="ownership_of_office" id="ownership_of_office" value="Business Center" <?php echo ($applicant_office[0]['ownership_of_office'] == 'Business Center' ? 'checked' : ''); ?> >
                           <label>Business Center </label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="ownership_of_office" id="ownership_of_office" id="Company Owned" <?php echo ($applicant_office[0]['ownership_of_office'] == 'Company Owned' ? 'checked' : ''); ?> >
                           <label>Company Owned</label>
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Number of Years in Business/Employment</p>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="off_num_years" id="off_num_years" value="<?php echo $applicant_office[0]['off_num_years']; ?>">
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Nature Of Business</p>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="nature_of_business" id="nature_of_business" value="Trading" <?php echo ($applicant_office[0]['nature_of_business'] == 'Trading' ? 'checked' : ''); ?> >
                           <label>Trading</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="nature_of_business" id="nature_of_business" value="Manufacturing" <?php echo ($applicant_office[0]['nature_of_business'] == 'Manufacturing' ? 'checked' : ''); ?> >
                           <label>Manufacturing</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="nature_of_business" id="nature_of_business" value="Service" <?php echo ($applicant_office[0]['nature_of_business'] == 'Service' ? 'checked' : ''); ?> >
                           <label>Service</label>
                           <br>
                        </div>
                        <div class="col-md-3 offset-md-3">
                           <input type="radio" class="form-control" name="nature_of_business" id="nature_of_business" value="Commission Agent" <?php echo ($applicant_office[0]['nature_of_business'] == 'Commission Agent' ? 'checked' : ''); ?> >
                           <label>Commission Agent </label>
                           <br>
                        </div>
                        <div class="col-md-5">
                           <input type="radio" class="form-control" name="nature_of_business" id="nature_of_business" value="Other" <?php echo ($applicant_office[0]['nature_of_business'] == 'Other' ? 'checked' : ''); ?> >
                           <label>Other</label>
                           
                            <input type="text" name="other_nature" id="other_nature" value="<?php echo $applicant_office[0]['other_nature']; ?>">
                           
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Office Board Seen</p>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="office_board_seen" id="office_board_seen" value="<?php echo $applicant_office[0]['office_board_seen']; ?>">
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Landmark</p>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="off_landmark" id="off_landmark" value="<?php echo $applicant_office[0]['off_landmark']; ?>">
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Ease Of Locating </p>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="off_locating" id="off_locating" value="Easy" <?php echo ($applicant_office[0]['off_locating'] == 'Easy' ? 'checked' : ''); ?>>
                           <label>Easy</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="off_locating" id="off_locating" value="Difficult" <?php echo ($applicant_office[0]['off_locating'] == 'Difficult' ? 'checked' : ''); ?>>
                           <label>Difficult</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="off_locating" id="off_locating" value="Untraceable" <?php echo ($applicant_office[0]['off_locating'] == 'Untraceable' ? 'checked' : ''); ?>>
                           <label>Untraceable</label>
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Number of Employee Seen At the time of Visit</p>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="number_of_employee" id="number_of_employee" value="<?php echo $applicant_office[0]['number_of_employee']; ?>">
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Stock Level</p>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="stock_level" id="stock_level" value="High" <?php echo ($applicant_office[0]['stock_level'] == 'High' ? 'checked' : ''); ?>>
                           <label>High</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="stock_level" id="stock_level" value="Medium" <?php echo ($applicant_office[0]['stock_level'] == 'Medium' ? 'checked' : ''); ?>>
                           <label>Medium</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="stock_level" id="stock_level" value="Low" <?php echo ($applicant_office[0]['stock_level'] == 'Low' ? 'checked' : ''); ?>>
                           <label>Low</label>
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Business Was Sighted at the time of visit</p>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="business_sighted" id="business_sighted" value="<?php echo $applicant_office[0]['business_sighted']; ?>">
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Business Activity Seen At the time of Visit</p>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="business_activity" id="business_activity" value="Easy" <?php echo ($applicant_office[0]['business_activity'] == 'Easy' ? 'checked' : ''); ?>>
                           <label>Easy</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="business_activity" id="business_activity" value="Difficult" <?php echo ($applicant_office[0]['business_activity'] == 'Difficult' ? 'checked' : ''); ?>>
                           <label>Difficult</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="business_activity" id="business_activity" value="Untraceable" <?php echo ($applicant_office[0]['business_activity'] == 'Untraceable' ? 'checked' : ''); ?>>
                           <label>Untraceable</label>
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Whether applicant has availed moratorium in any of the exiting loans under COVID guidline from Bank/NBFC etc.</p>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="applicant_availed" id="applicant_availed" value="<?php echo $applicant_office[0]['applicant_availed']; ?>">
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Business Confirmed By</p>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="business_con_by" id="business_con_by" value="Name Board" <?php echo ($applicant_office[0]['business_con_by'] == 'Name Board' ? 'checked' : ''); ?>>
                           <label>Name Board </label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="business_con_by" id="business_con_by" value="Neighbour" <?php echo ($applicant_office[0]['business_con_by'] == 'Neighbour' ? 'checked' : ''); ?>>
                           <label>Neighbour</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="business_con_by" id="business_con_by" value="Security" <?php echo ($applicant_office[0]['business_con_by'] == 'Security' ? 'checked' : ''); ?>>
                           <label>Security</label>
                           <br>
                        </div>
                        <div class="col-md-3 offset-md-3">
                           <input type="radio" class="form-control" name="business_con_by" id="business_con_by" value="Person Met" <?php echo ($applicant_office[0]['business_con_by'] == 'Person Met' ? 'checked' : ''); ?>>
                           <label>Person Met</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="business_con_by" id="business_con_by" value="Couldn't Confirm" <?php echo ($applicant_office[0]['business_con_by'] == 'Could Not Confirm' ? 'checked' : ''); ?>>
                           <label>Could Not Confirm</label>
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Office Is In Which COVID Zone</p>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="off_covid_zone" id="off_covid_zone" value="Red" <?php echo ($applicant_office[0]['off_covid_zone'] =='Red' ? 'checked' : ''); ?>>
                           <label>Red</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="off_covid_zone" id="off_covid_zone" value="Amber" <?php echo ($applicant_office[0]['off_covid_zone'] =='Amber' ? 'checked' : ''); ?>>
                           <label>Amber</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="off_covid_zone" id="off_covid_zone" value="Green" <?php echo ($applicant_office[0]['off_covid_zone'] =='Green' ? 'checked' : ''); ?>>
                           <label>Green</label>
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Impact Of COIVD on Business:As per third Party Confirmation</p>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="impact_of_covid" id="impact_of_covid" value="High" <?php echo ($applicant_office[0]['impact_of_covid'] == 'High' ? 'checked' : ''); ?>>
                           <label>High</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="impact_of_covid" id="impact_of_covid" value="Medium" <?php echo ($applicant_office[0]['impact_of_covid'] == 'Medium' ? 'checked' : ''); ?>>
                           <label>Medium</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="impact_of_covid" id="impact_of_covid" value="Low" <?php echo ($applicant_office[0]['impact_of_covid'] == 'Low' ? 'checked' : ''); ?>>
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
                           <textarea class="form-control" rows="3" id="off_comments" name="off_comments" > <?php echo $applicant_office[0]['off_comments']; ?></textarea>
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
                                       <input type="date" class="form-control required setdatePicarDsp"  id="coa_off_dof_visit" name="coa_off_dof_visit" style="height:37px;" value="<?php echo $co_applicant_office[0]['coa_off_dof_visit'] ?>" > 
                                    </span>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group"> <span class="control-label col-sm-5" for="visit_time"> Time of Visit : <span class="danger">*</span>
                           </span> <span class="col-sm-7"> 
                                       <input type="time" class="form-control required" id="coa_off_tof_visit" name="coa_off_tof_visit" style="height:37px;" value="<?php echo $co_applicant_office[0]['coa_off_tof_visit'] ?>" > 
                                    </span>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Name Of Applicant</p>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="coa_off_name_app" id="coa_off_name_app" value="<?php echo $co_applicant_office[0]['coa_off_name_app'] ?>" >
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Business Address</p>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="coa_off_address" id="coa_off_address" value="<?php echo $co_applicant_office[0]['coa_off_address'] ?>">
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Type of Employment</p>
                        </div>
                        <div class="col-md-4">
                           <input type="radio" class="form-control" name="coa_type_of_employment" id="coa_type_of_employment" value="Salaried" <?php echo ($co_applicant_office[0]['coa_type_of_employment']=='Salaried' ? 'checked' : ''); ?>>
                           <label>Salaried</label>
                           <br>
                        </div>
                        <div class="col-md-5">
                           <input type="radio" name="coa_type_of_employment" id="coa_type_of_employment" value="Self Employed" <?php echo ($co_applicant_office[0]['coa_type_of_employment']=='Self Employed' ? 'checked' : ''); ?>>
                           <label>Self Employed</label>
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Name of Person Met</p>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="coa_off_person_met" id="coa_off_person_met" value="<?php echo $co_applicant_office[0]['coa_off_person_met'] ?>">
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Applicant is Working as</p>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_applicant_post" id="coa_applicant_post" value="Assistant" <?php echo ($co_applicant_office[0]['coa_applicant_post']=='Assistant' ? 'checked' : ''); ?>>
                           <label>Assistant</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_applicant_post" id="coa_applicant_post" value="Clerk" <?php echo ($co_applicant_office[0]['coa_applicant_post']=='Clerk' ? 'checked' : ''); ?>>
                           <label>Clerk</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_applicant_post" id="coa_applicant_post" value="Skilled Labour" value="Clerk" <?php echo ($co_applicant_office[0]['coa_applicant_post']=='Skilled Labour' ? 'checked' : ''); ?>>
                           <label>Skilled Labour</label>
                           <br>
                        </div>
                        <div class="col-md-3 offset-md-3">
                           <input type="radio" class="form-control" name="coa_applicant_post" id="coa_applicant_post" value="Superviser" <?php echo ($co_applicant_office[0]['coa_applicant_post']=='Superviser' ? 'checked' : ''); ?>>
                           <label>Superviser</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_applicant_post" id="coa_applicant_post" value="Jr Management" <?php echo ($co_applicant_office[0]['coa_applicant_post']=='Jr Management' ? 'checked' : ''); ?>>
                           <label>Jr. Management</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_applicant_post" id="coa_applicant_post" value="Sr Management" <?php echo ($co_applicant_office[0]['coa_applicant_post']=='Sr Management' ? 'checked' : ''); ?>>
                           <label>Sr. Management</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-3 offset-md-3">
                           <input type="radio" class="form-control" name="coa_applicant_post" id="coa_applicant_post" value="Not Working" <?php echo ($co_applicant_office[0]['coa_applicant_post']=='Not Working' ? 'checked' : ''); ?>>
                           <label>Not Working</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_applicant_post" id="coa_applicant_post" value="Self Employed" <?php echo ($co_applicant_office[0]['coa_applicant_post']=='Self Employed' ? 'checked' : ''); ?>/>
                           <label>Self Employed</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" id="coa_applicant_post" name="coa_applicant_post" value="Other" <?php echo ($co_applicant_office[0]['coa_applicant_post']=='Other' ? 'checked' : ''); ?> >
                           <label>Other</label>
                           <input type="text" name="other_coa_post" id="other_coa_post" value="<?php echo $applicant_office[0]['other_coa_post']; ?>" >
                           <br>
                        </div>

                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Working Since</p>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="coa_working_since" id="coa_working_since" value="<?php echo $co_applicant_office[0]['coa_working_since'] ?>">
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Ownership of Office</p>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_ownership_of_office" id="coa_ownership_of_office" value="Self-Owned" <?php echo ($co_applicant_office[0]['coa_ownership_of_office']=='Self-Owned' ? 'checked' : ''); ?>>
                           <label>Self-Owned</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_ownership_of_office" id="coa_ownership_of_office" value="Rented" <?php echo ($co_applicant_office[0]['coa_ownership_of_office']=='Rented' ? 'checked' : ''); ?>>
                           <label>Rented</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_ownership_of_office" id="coa_ownership_of_office" value="Leased" <?php echo ($co_applicant_office[0]['coa_ownership_of_office']=='Leased' ? 'checked' : ''); ?>>
                           <label>Leased</label>
                           <br>
                        </div>
                        <div class="col-md-3 offset-md-3">
                           <input type="radio" class="form-control" name="coa_ownership_of_office" id="coa_ownership_of_office" value="Shared Premises" <?php echo ($co_applicant_office[0]['coa_ownership_of_office']=='Shared Premises' ? 'checked' : ''); ?>>
                           <label>Shared Premises</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_ownership_of_office" id="coa_ownership_of_office" value="Business Center" <?php echo ($co_applicant_office[0]['coa_ownership_of_office']=='Business Center' ? 'checked' : ''); ?>>
                           <label>Business Center </label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_ownership_of_office" id="coa_ownership_of_office" value="Company Owned" <?php echo ($co_applicant_office[0]['coa_ownership_of_office']=='Company Owned' ? 'checked' : ''); ?>>
                           <label>Company Owned</label>
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Number of Years in Business/Employment</p>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="coa_off_num_years" id="coa_off_num_years" value="<?php echo $co_applicant_office[0]['coa_off_num_years'] ?>">
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Nature Of Business</p>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_nature_of_business" id="coa_nature_of_business" value="Trading" <?php echo ($co_applicant_office[0]['coa_nature_of_business']=='Trading' ? 'checked' : ''); ?>>
                           <label>Trading</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_nature_of_business" id="coa_nature_of_business" value="Manufacturing" <?php echo ($co_applicant_office[0]['coa_nature_of_business']=='Manufacturing' ? 'checked' : ''); ?>>
                           <label>Manufacturing</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_nature_of_business" id="coa_nature_of_business" value="Service" <?php echo ($co_applicant_office[0]['coa_nature_of_business']=='Service' ? 'checked' : ''); ?>>
                           <label>Service</label>
                           <br>
                        </div>
                        <div class="col-md-3 offset-md-3">
                           <input type="radio" class="form-control" name="coa_nature_of_business" id="coa_nature_of_business" value="Commission Agent" <?php echo ($co_applicant_office[0]['coa_nature_of_business']=='Commission Agent' ? 'checked' : ''); ?> >
                           <label>Commission Agent </label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio"  class="form-control" id="coa_nature_of_business" name="coa_nature_of_business" value="Other"<?php echo ($co_applicant_office[0]['coa_nature_of_business']=='Other' ? 'checked' : ''); ?> >
                           <label>Other</label>
                           <input type="text" name="other_coa_nature" id="other_coa_nature" value="<?php echo $applicant_office[0]['other_coa_nature']; ?>">
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Office Board Seen</p>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="coa_office_board_seen" id="coa_office_board_seen" value="<?php echo $co_applicant_office[0]['coa_office_board_seen'] ?>">
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Landmark</p>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="coa_off_landmark" id="coa_off_landmark" value="<?php echo $co_applicant_office[0]['coa_off_landmark'] ?>" >
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Ease Of Locating</p>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_off_locating" id="coa_off_locating" value="Easy" <?php echo ($co_applicant_office[0]['coa_off_locating']=='Easy' ? 'checked' : ''); ?> >
                           <label>Easy</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_off_locating" id="coa_off_locating" value="Difficult" <?php echo ($co_applicant_office[0]['coa_off_locating']=='Difficult' ? 'checked' : ''); ?>>
                           <label>Difficult</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_off_locating" id="coa_off_locating" value="Untraceable" <?php echo ($co_applicant_office[0]['coa_off_locating']=='Untraceable' ? 'checked' : ''); ?>>
                           <label>Untraceable</label>
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Number of Employee Seen At the time of Visit</p>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="coa_number_of_employee" id="coa_number_of_employee" value="<?php echo $co_applicant_office[0]['coa_number_of_employee'] ?>">
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Stock Level</p>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_stock_level" id="coa_stock_level" value="High" <?php echo ($co_applicant_office[0]['coa_stock_level']=='High' ? 'checked' : ''); ?>>
                           <label>High</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_stock_level" id="coa_stock_level" value="Medium" <?php echo ($co_applicant_office[0]['coa_stock_level']=='Medium' ? 'checked' : ''); ?>>
                           <label>Medium</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_stock_level" id="coa_stock_level" value="Low" <?php echo ($co_applicant_office[0]['coa_stock_level']=='Low' ? 'checked' : ''); ?>>
                           <label>Low</label>
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Business Was Sighted at the time of visit</p>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="coa_business_sighted" id="coa_business_sighted" value="<?php echo $co_applicant_office[0]['coa_business_sighted'] ?>">
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Business Activity Seen At the time of Visit</p>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_business_activity" id="coa_business_activity" value="Ease" <?php echo ($co_applicant_office[0]['coa_business_activity']=='Ease' ? 'checked' : ''); ?>>
                           <label>Easy</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_business_activity" id="coa_business_activity" value="Difficult" <?php echo ($co_applicant_office[0]['coa_business_activity']=='Difficult' ? 'checked' : ''); ?>>
                           <label>Difficult</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_business_activity" id="coa_business_activity" value="Untraceable" <?php echo ($co_applicant_office[0]['coa_business_activity']=='Untraceable' ? 'checked' : ''); ?>>
                           <label>Untraceable</label>
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Whether applicant has availed moratorium in any of the exiting loans under COVID guidline from Bank/NBFC etc.</p>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="coa_applicant_availed" id="coa_applicant_availed" value="<?php echo $co_applicant_office[0]['coa_applicant_availed'] ?>">
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Business Confirmed By</p>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_business_con_by" id="coa_business_con_by" value="Name Board" <?php echo ($co_applicant_office[0]['coa_business_con_by']=='Name Board' ? 'checked' : ''); ?>>
                           <label>Name Board </label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_business_con_by" id="coa_business_con_by" value="Neighbour" <?php echo ($co_applicant_office[0]['coa_business_con_by']=='Neighbour' ? 'checked' : ''); ?>>
                           <label>Neighbour</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_business_con_by" id="coa_business_con_by" value="Security" <?php echo ($co_applicant_office[0]['coa_business_con_by']=='Security' ? 'checked' : ''); ?>>
                           <label>Security</label>
                           <br>
                        </div>
                        <div class="col-md-3 offset-md-3">
                           <input type="radio" class="form-control" name="coa_business_con_by" id="coa_business_con_by" value="Person Met" <?php echo ($co_applicant_office[0]['coa_business_con_by']=='Person Met' ? 'checked' : ''); ?>>
                           <label>Person Met</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_business_con_by" id="coa_business_con_by" value="Could not Confirm" <?php echo ($co_applicant_office[0]['coa_business_con_by']=='Could not Confirm' ? 'checked' : ''); ?> >
                           <label>Couldn't Confirm</label>
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Office Is In Which COIVD Zone</p>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_off_covid_zone" id="coa_off_covid_zone" value="Red" <?php echo ($co_applicant_office[0]['coa_off_covid_zone']=='Red' ? 'checked' : ''); ?>>
                           <label>Red</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_off_covid_zone" id="coa_off_covid_zone" value="Amber" <?php echo ($co_applicant_office[0]['coa_off_covid_zone']=='Amber' ? 'checked' : ''); ?>>
                           <label>Amber</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_off_covid_zone" id="coa_off_covid_zone" value="Green" <?php echo ($co_applicant_office[0]['coa_off_covid_zone']=='Green' ? 'checked' : ''); ?>>
                           <label>Green</label>
                           <br>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="col-md-3">
                           <p style="text-align:left;font-size:16px;font-weight:bold;">Impact Of COIVD on Business:As per third Party Confirmation</p>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_impact_of_covid" id="coa_impact_of_covid" value="High" <?php echo ($co_applicant_office[0]['coa_impact_of_covid']=='High' ? 'checked' : ''); ?>>
                           <label>High</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_impact_of_covid" id="coa_impact_of_covid" value="Medium" <?php echo ($co_applicant_office[0]['coa_impact_of_covid']=='Medium' ? 'checked' : ''); ?>>
                           <label>Medium</label>
                           <br>
                        </div>
                        <div class="col-md-3">
                           <input type="radio" class="form-control" name="coa_impact_of_covid" id="coa_impact_of_covid" value="Low" <?php echo ($co_applicant_office[0]['coa_impact_of_covid']=='Low' ? 'checked' : ''); ?>>
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
                           <textarea class="form-control" rows="3" name="coa_off_comments" id="coa_off_comments"> <?php echo $co_applicant_office[0]['coa_off_comments'] ?> </textarea>
                           <br>
                        </div>
                     </div>
                   </div>
                  
      </section>
      <!-----------------------CO-applicant form ednds------------------>
   </div>
                                 <ul class="list-inline pull-right">
                                    
                                    <li>
                                       <button type="submit" class="btn btn-primary next-step">Update</button>
                                    </li>
                                 </ul>
                              </form>
                           </div>
                           
                  </div>
                  </section>
               </div>
            </div>
         </div>
        
            
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
<script src="<?php echo base_url()?>assets/site/js/jquery.validate.min.js"></script>

<script>

// signup form 


			// step_2_form
$('#step_2_form_data').submit(function(event){ 
       event.preventDefault();
       
      
       if ($("#step_2_form_data").valid()) {
           
         
                        
                        $.ajax({
                          type: "POST",
                          url: "<?php echo base_url() ?>step_two_update",
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

</script>

</html>