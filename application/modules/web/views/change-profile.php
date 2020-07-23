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
                           		
                          
               <form action="#" id="change_password_form" method="post" enctype='multipart/form-data'>
			   
			   <h2 style="text-align:center">Change Profile
			   <a class="nav-item nav-link  mr-md-2" href="#" style="float: right;padding: 0;"><i class="icon-user-circle" style="font-size: 36px; color: #fff !important;"></i></a>
			   </h2>
								
					<div class="form-group">
					<label class="control-label col-md-2" for="email">User Name:</label>
										<div class="col-md-10">
					<input type="text" style="margin-top:1px;margin-left:-75px;" id="user_name" name="user_name" required class="form-control passwordbox" value="<?php echo $change_user[0]['user_name']; ?>"  >
										</div>
									 </div>
									
									<div class="form-group">
										<label class="control-label col-md-2" for="email" style="margin-top:10px;" >Current Password:</label>
										<div class="col-md-10">
										   <input type="password" style="margin-top:1px;margin-left:-75px;" id="userpassword" name="userpassword" required class="form-control passwordbox"  >
										</div>
									 </div>
									 
									 <div class="form-group">
										<label class="control-label col-md-2" style="margin-top:25px;" for="pwd">New Password:</label>
										<div class="col-md-10">
										   <input type="password" style="margin-top:15px;margin-left:-75px;" id="newpassword" name="newpassword" required class="form-control"  >
										</div>
									 </div>
									 <div class="form-group">
										<label class="control-label col-md-2" style="margin-top:25px;" for="pwd">Confirm:</label>
										<div class="col-md-10">
										   <input type="password" style="margin-top:15px;margin-left:-75px;" id="cpassword" name="cpassword" required class="form-control"  >
										</div>
									 </div>
									  
									 <div class="buttonf" style="margin-top:20px;margin-left:15px;">
										<button type="submit" style="margin-top:20px;margin-left:150px;" name="changepassword" id="changepassword" class="buttonfo">Change</button>
									 </div>					
									</form>
                           
                           
                           <!-- <div class="clearfix"></div> --></div>
                  </div>
                  </section>
               </div>
            </div>
         </div>

 
 

         <!--   Core JS Files   -->
         <script src="http://digimonk.net/Ankit/assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
         <script src="http://digimonk.net/Ankit/assets/js/bootstrap.min.js" type="text/javascript"></script>
         <!--  Charts Plugin -->
         <script src="http://digimonk.net/Ankit/assets/js/chartist.min.js"></script>
         <!--  Notifications Plugin    -->
         <script src="http://digimonk.net/Ankit/assets/js/bootstrap-notify.js"></script>
         
	
	<!----------------- js ----------------------->
<script src="<?php echo base_url(); ?>assets/site/js/jquery.min.js"></script>

<link rel='stylesheet' href='<?php echo base_url();?>assets/site/sweetalert/sweetalert.css' />
<script src="<?php echo base_url();?>assets/site/sweetalert/sweetalert.min.js"></script>
<script src="<?php echo base_url()?>assets/site/js/jquery.validate.min.js"></script>

<script> 
$(document).ready(function(){  
      $('#change_password_form').on('submit', function(e)
	  {  
				   e.preventDefault();  
				   var adminuser = $("#adminuser").val();
				   var uname = $("#user_name").val();
				   var pwd = $("#userpassword").val();
				   var npwd = $("#newpassword").val();
				   var cpwd = $("#cpassword").val(); 
				   
					 
				   if($('#newpassword').val() != $('#cpassword').val())  
				   {  
						swal({
										  title: "Sorry!",
										  text: "New Password and Confirm Password does not match!",
										  icon: "error",
										  button: "Ok!",
										}); 
					$('#changepassword').prop('disabled', false);
				   }  
				   else  
				   {  
						$.ajax({  
							 method:"POST",
							   url:"<?php echo base_url()?>update_user_profile",
							   data:{"newpwd":npwd,"pwd":pwd,"uname":uname},
							   dataType:"html",
							   success:function(data){
							   if(data == 1){
								   swal({
										  title: "Successfully!",
										  text: "New Password Updated!",
										  icon: "success",
										  button: "Ok!",
										}); 
								$('#changepassword').prop('disabled', false);
								location.reload();
							   }
							   else {
								   swal({
										  title: "Sorry!",
										  text: "Old Password does not match!",
										  icon: "error",
										  button: "Ok!",
										}); 
							   }
							   //location.reload();
							   //$('#changepassword').prop('disabled', true);
							   }  
						});  
				   }
			  });  
			   
 });  
 
</script>

</html>