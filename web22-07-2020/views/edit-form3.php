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
                           
                           <!-- Step 3 Start -->
                           <div class="tab-pane" role="tabpanel" id="step3">
               <form action="" method="post" id="step_3_form_data" enctype="multipart/form-data">
		   
			   <input type="hidden" name="applicant_id" id="applicant_id" value="<?php echo $applicant_id[0]['application_id']; ?>"/>
			   
			   <input type="hidden" id="application1" name="application1"/>
                <input type="hidden" name="form_types" value="step3">
                                 <div class="row" style="padding-bottom:20px">
                                    <h3>Step 3</h3>
                                    <div class="col-md-6">
                  <div class="staresd">
                        <div class="imgup"><i  style="font-size: 72px;"></i>
                          <p><img style="width:450px; height:300px; margin-top:0px;" id="img1" src="<?php echo base_url(); ?>assets/site/images/<?php echo $applicant_doc[0]['doc1']; ?>"></p>
						  <h4>Update Photo</h4>
						  
                          <input type="file" name="doc1" id="doc1" onchange="readURL1(this);">
						  <script>
                      function readURL1(input) {
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
                        <div class="imgup"><i  style="font-size: 72px;"></i>
                          <p><img style="width:450px; height:300px; margin-top:0px;" id="img2" src="<?php echo base_url(); ?>assets/site/images/<?php echo $applicant_doc[0]['doc2']; ?>"></p>
						  <h4>Update Photo</h4>
                          <input type="file" name="doc2" id="doc2" onchange="readURL2(this);" >
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
                        <div class="imgup"><i  style="font-size: 72px;"></i>
                        <p><img style="width:450px; height:300px; margin-top:0px;" id="img3" src="<?php echo base_url(); ?>assets/site/images/<?php echo $applicant_doc[0]['doc3']; ?>"></p>  
						  <h4>Update Photo</h4>
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
                        <p><img style="width:450px; height:300px; margin-top:0px;" id="img4" src="<?php echo base_url(); ?>assets/site/images/<?php echo $applicant_doc[0]['doc4']; ?>"></p>  
						  <h4>Update Photo</h4>
                          <input  type="file" name="doc4" id="doc4" onchange="readURL4(this);">
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
                  <li><button type="submit"  class="btn btn-primary next-step">Update</button></li>
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


				// Step 3

$('#step_3_form_data').submit(function(event){ 
       event.preventDefault();
       
      
       if ($("#step_3_form_data").valid()) {
           
         
                        
                        $.ajax({
                          type: "POST",
                          url: "<?php echo base_url() ?>step_three_update",
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