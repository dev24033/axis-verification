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
   <link href="http://digimonk.net/Ankit/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
   <!-- <link rel="stylesheet" href="/resources/demos/style.css" /> -->
   <link href="http://digimonk.net/Ankit/assets/css/dashboard-mobile.css" rel="stylesheet" />
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  
</head>
<style >
      .login-form-div {
    margin-top: 10%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.login-form-div form {
    border-radius: 10px;
    padding: 20px;
    border: 1px solid #02469d;
    box-shadow: 0 -5px 16px 0 rgba(0,0,0,0.3), 0 5px 16px 0 rgba(0,0,0,0.3);
}
.login-form-div h2 {
    text-align: center;
    color: #02469d;
}
</style>
<body>
      <section>
  <div class="container">
    <div class="login-form-div">
      <div class="col-md-5">
       <form action="#" method="post" id="loginsubmit_from">
        <h2>Login</h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="name">Username</label>
                        <input type="text" name="uname" id="uname" class="form-control">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="name">Password</label>
                        <input type="password" name="loginpassword"  id="loginpassword" class="form-control">
                    </div>
                </div>
               
                
                         </div>
            
            <div class="row" style="margin-top: 20px;">
                <div class="col-md-12 text-center">
                    <a href="#"><button type="button" class="btn btn-primary btn-block" value="Login">Login</button></a>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</section>
</body>

 <!--   Core JS Files   -->
         <script src="http://digimonk.net/Ankit/assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
         <script src="http://digimonk.net/Ankit/assets/js/bootstrap.min.js" type="text/javascript"></script>
         <!--  Charts Plugin -->
         <script src="http://digimonk.net/Ankit/assets/js/chartist.min.js"></script>
         <!--  Notifications Plugin    -->
         <script src="http://digimonk.net/Ankit/assets/js/bootstrap-notify.js"></script>
         <!--  Google Maps Plugin    -->
         <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
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

var loginfrmvalidator = $("#loginsubmit_from").validate({
	rules: {
          uname: {
                required: true,
            },
          
          loginpassword: "required", 
          
    },
    messages: {
       
        uname: {
          required: "Please enter a valid user name", 
         },
       
         loginpassword: {
          required: "Please enter password", 
         },
       
       
    },
    
   
}); 

$('#loginsubmit_from').submit(function(event){ 
       event.preventDefault();
    alert("Hello! I am an alert box!!");   
       if ($("#loginsubmit_from").valid()) {
            
            $.ajax({
              type: "POST",
              url: "<?php echo base_url() ?>loginsubmit",
              data:new FormData(this),
                       processData:false,
                       contentType:false,
                       cache:false,
                       async:false,
                      dataType: 'json',
                  
              success: function(response)
              {

               
          
                   if(response.success == true) {
                           
						   if(response.logintype == 'Voluntaria') {
                            window.location.href = "<?php echo base_url() ?>dashboard";
						   }
						   else{
							    window.location.href = "<?php echo base_url() ?>ong/tablero";
						   }
                        }
                else{
            				
            			swal({
                              text: response.messages,
                              icon: 'error',
                              button: "OK",
                              
                            });
                            
                        }
                
                  
               

              },
                error: function (jqXHR, exception) {
                    var msg = '';
                    if (jqXHR.status === 0) {
                        msg = 'Not connect.\n Verify Network.';
                    } else if (jqXHR.status == 404) {
                        msg = 'Requested page not found. [404]';
                    } else if (jqXHR.status == 500) {
                        msg = 'Internal Server Error [500].';
                    } else if (exception === 'parsererror') {
                        msg = 'Requested JSON parse failed.';
                    } else if (exception === 'timeout') {
                        msg = 'Time out error.';
                    } else if (exception === 'abort') {
                        msg = 'Ajax request aborted.';
                    } else {
                        msg = 'Uncaught Error.\n' + jqXHR.responseText;
                    }
                    swal({
                      text: msg,
                      icon: 'error',
                      button: {
                        text: "OK",
                        value: true,
                        visible: true,
                        className: "btn btn-primary"
                      }
                    });
                },

            });
        }
});



</script>

</html>
