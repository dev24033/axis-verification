

        <div class="content san-full-formlist1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">


                        <?php if(@$_GET["delete"]== 'true') { ?>
                        <div class="row">
                         <div class="col-md-12">
                         <div class="alert alert-success alert-dismissible">
                        <a href="formlist1.php" class="close"  aria-label="close" style="right: 1px;">&times;</a>
                        <center><strong>Delete Success!!</strong></center>
                          </div>
                         </div>
                         </div>
                 <?php 
                 
                 } ?>



                        <div class="card">
                            
            <!-- <input type="text" placeholder="Search.."  style="margin:20px;"> -->
            <!-- <input type="hidden" name="search" value="Search"> -->
        
                            
         
        <div class="table-responsive">

<!-- <form method="POST" action="formlist1.php">
<input type="date" name="txtStartDate">
<input type="date" name="txtEndDate">
<input type="submit" name="search" value="Search">
</form> -->

	<div class="col-md-12">		
		<form class="form-rg" id="search-form" action="exportlistbydate.php" method="post">
		    <div class="col-md-3">
		       <input type="date" id="datepickerfrom" class="form-control" name="datepickerfrom" required>
		    </div>
		    <div class="col-md-3">
		       <input type="date" id="datepickerto" class="form-control" name="datepickerto" required>
		    </div>
		    <div class="col-md-6">
		        <input name="showresult" type="submit" class="trd-btn" 
				style="font-size: 14px;background: #342c78; color: #fff;    padding: 5px; width: 100px;border-radius:5px; margin-top:17px;">
		    </div>
		</form>
	</div>

		<div id="table11">

        <table class="table table-striped table-bordered table-hover dataTables-example" id="example">
		
	



                <thead>
					<th>S.No.</th>
                    <th style="width: 110px;"><b>File.No.</b></th>
                    <th style="width: 110px;"><b>Application Id</b></th>
                    <th style="width: 200px;"><b>Customer Name</b></th>
                    <th style="width: 150px;"><b>Mobile No.</b></th>
                    <th style="width: 120px;"><b>Application Date</b></th>
                    <th><b>Status</b></th>
                    <th><b>Action</b></th>
                  </thead>

                <tbody>
				<?php 
				$i=1;
				 foreach($applicant as $row) { 
				 
				 $row1 = $this->web_model->get_applicant_id($row['application_id']);
				 ?>
                        <tr>
							<td><?php echo $i; ?></td>
                            <td><?php echo $row1[0]['file_no'] ?></td>
                           <td> <?php echo $row['application_id'] ?> </td>
                            <td><a href="view-print/<?php echo $row['application_id'] ?>" target="_blank"><?php echo $row['tele_nof_app']; ?></a></td>
                            <td><?php echo $row['tele_cont_no'] ?></td>
                            <td><?php echo date("d-m-Y", strtotime($row1[0]['date_of_visit'])) ?></td>
                            <td>
	<select  name="change_status" id="change_status" class="form-control change_status changestatus<?php echo $row['application_id']; ?> view-driver" required="">
								
		
		<option value="0-<?php echo $row['application_id']; ?>" <?php if($row1[0]['status']=='0'){ echo 'selected';} ?>>Pending</option>
		
		<option value="1-<?php echo $row['application_id']; ?>" <?php if($row1[0]['status']=='1'){ echo 'selected';} ?>>Completed</option>
		
		<option value="2-<?php echo $row['application_id']; ?>" <?php if($row1[0]['status']=='2'){ echo 'selected';} ?>>Rejected</option>
								 				 
				</select>
						
							</td>
                        <td><a href="javascript:void(0)"><button     class="btn btn-block btn-danger" id="<?php echo $row['application_id'] ?>" onclick="remove_post_by_user(this.id)" >Delete</button></a></td>
                       
                        </tr>
				<?php 
				$i++; 
				} ?>
                        
                        

                    </tbody>
                </table>
			</div>
				
				
				<div id="table22">
				</div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>


</body>
 

  
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
         
        
<script src="<?php echo base_url(); ?>assets/site/js/jquery.min.js"></script>

<link rel='stylesheet' href='<?php echo base_url();?>assets/site/sweetalert/sweetalert.css' />
<script src="<?php echo base_url();?>assets/site/sweetalert/sweetalert.min.js"></script>
<script src="<?php echo base_url()?>assets/site/js/jquery.validate.min.js"></script>

				<!-- Search by date -->
<link rel='stylesheet' href='https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css' />
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
	<script>
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

<script>  
function remove_post_by_user(postid)
            		{
            			var pid = postid;
            			var dataString =  'postid='+ postid;
 
 swal({

          title: 'Are you sure?',
          text: 'you want to delete this record',
          icon: 'warning',
          
          buttons: {
            cancel: {
              text: "Cancel",
              value: null,
              visible: true,
              
              closeModal: true,
            },
            confirm: {
              text: "OK",
              value: true,
              visible: true,
             
              closeModal: true
            },
          }
        }).then(function (willDelete){
        if (willDelete) {
          //var dataString = 'action_type=update&vendorstatusid='+vendorstatusid+'&vendorstatus='+vendorstatus;

              
                    	$.ajax({
                    			type: "POST",
                    			url: "<?php echo base_url() ?>remove_post_by_user",
                    			data: dataString,
                    			success: function(html) {
                    				
                                	$("#feed_id_"+pid).hide();
									window.location.href = "<?php echo base_url(); ?>view_loan";
                    			}
                    	 });
      } else {
        
        }
     });
     
                    	 
}

   $("select.change_status").change(function(){
        var status_id = $(this).children("option:selected").val();
		 
  
			   swal({

				  title: 'Are you sure?',
				  text: 'you want to change appointment status',
				  icon: 'warning',
				  
				  buttons: {
					cancel: {
					  text: "Cancel",
					  value: null,
					  visible: true,
					  
					  closeModal: true,
					},
					confirm: {
					  text: "OK",
					  value: true,
					  visible: true,
					 
					  closeModal: true
					},
				  }
				}).then(function (willDelete){
				if (willDelete) {
				  var dataString = 'action_type=update&status_id='+status_id;

					  $.ajax({
					  type: "POST",
					  url: "<?php echo base_url()?>change_application_status",
					  data: dataString,
					  cache: false,
					  success: function(userresponse)
					  {
						if (userresponse) {
							swal({
								  title: 'successfully!',
								  text: 'Update',
								  icon: 'success',
								   button: "Ok"
								}).then(function() {
								 location.reload();
							   });
						}else{
						  swal({
									text: 'Update failed',
									 icon:'error',
									button: {
									  text: "OK",
									  value: true,
									  visible: true,
									  className: "btn"
									}
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
							  icon:'error',
							  button: {
								text: "OK",
								value: true,
								visible: true,
								className: "btn"
							  }
							});
						},
					});
			  } else {
				
				}
			 });
	 
			 
    });

				// search by date
				
	$('#search-form').submit(function(event){ 
       event.preventDefault();
       
       if ($("#search-form").valid()) {
           
         
                        
                        $.ajax({
                          type: "POST",
                          url: "<?php echo base_url() ?>search_by_date",
                          data:new FormData(this),
                                   processData:false,
                                   contentType:false,
                                   cache:false,
                                   async:false,
                                  dataType: 'html',
                              
                          success: function(response)
                          {
							 
							
								   $('#search_data').val(response.search);
								   
                                        $('#table22').html(response);
										$('#table11').hide();
										$('#table22').show();

                        				
                                        
                                     
                              
                           
            
                          },
                            
            
                        });
                    /* } */
    }
});

</script>
