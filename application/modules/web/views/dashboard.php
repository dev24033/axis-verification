
<div class="content san-full-dashboard">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
   <div class="row">
     <div class="col-md-6 col-sm-6">
        <div class="card">
            <div class="dash-widget clearfix card-box">
            <div class="row">
                <div class="col-sm-4 col-md-4">
                    <span class="dash-widget-icon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                </div>
				
                                    <div class="col-sm-8 col-md-8">
                                        <div class="dash-widget-info">
							<h3><?php echo count($applicant); ?></h3>
                                            <span>All Applications</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
				
                            <div class="row">
                                 <div class="content table-responsive" style="padding: 15px 0px 10px 0px;">
                                <table class="table table-hover table-striped sp-tablee">
                                    <thead>
                                        <th>Application Id</th>
                                        <th>Customer Name</th>
                                        <th>Address</th>
                                        <th>Date</th>
                                        <th>Status</th>

                                        
                                    </thead>
                                   <tbody>
		
		<?php 
				 foreach($applicant1 as $row1)  
				 {
				  
				 $row = $this->web_model->get_applicant_detail($row1['application_id']);
				 
				 
				 
				?>
                                                                         <tr>
                                       <td><?php echo $row1['application_id'] ?> </td>
                                        <td><a href="view-print/<?php echo $row1['application_id'] ?>" target="_blank"><?php echo $row[0]['tele_nof_app']; ?></a></td>
                                        <td><?php echo $row1['address']; ?></td>
                                        <td><?php echo $row1['date_of_visit']; ?></td>

                                    <td><span class="label label-success">							
										Completed				 </span></td>
                                    </tr>
				 <?php } ?>

                                                                     

                                                                     

                                                                     

                                                                   <!--  <tr>
                                       <td><a href="view_form.php?id=171" target="_blank">8450</a></td>
                                        <td>rtfgyjuk</td>
                                        <td>dfgjhkjk</td>
                                        <td>2019-03-30</td>
                                        <td><span class="label label-success">Completed</span></td>
                                    </tr>
                                    <tr>
                                       <td><a href="view_form.php?id=171" target="_blank">8450</a></td>
                                        <td>rtfgyjuk</td>
                                        <td>dfgjhkjk</td>
                                        <td>2019-03-30</td>
                                        <td><span class="label label-success">Completed</span></td>
                                    </tr>
                                    <tr>
                                       <td><a href="view_form.php?id=171" target="_blank">8450</a></td>
                                        <td>rtfgyjuk</td>
                                        <td>dfgjhkjk</td>
                                        <td>2019-03-30</td>
                                        <td><span class="label label-success">Completed</span></td>
                                    </tr> -->
                                   </tbody>
                               </table>
                           </div>
                            </div>
                            </div>
                         </div>
                         <div class="col-md-6 col-sm-6">
                            <div class="card">
                                <div class="dash-widget clearfix card-box">
                                <div class="row">
                                    <div class="col-sm-4 col-md-4">
                                        <span class="dash-widget-icon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                    </div>
                                    <div class="col-sm-8 col-md-8">
                                        <div class="dash-widget-info">
                                            <h3><?php echo count($applicant0); ?></h3>
                                            <span>Pending Applications</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="content table-responsive" style="padding: 15px 0px 10px 0px;">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>Application Id</th>
                                        <th>Customer Name</th>
                                        <th>Address</th>
                                        <th>Date</th>
                                        <th>Status</th>

                                        
                                    </thead>
		<?php 
				 foreach($applicant0 as $row1)  
				 {
				  
				 $row = $this->web_model->get_applicant_detail($row1['application_id']);
				 
				 /* print_r($row);
				 exit; */ 
				 
				 
				?>
	<tr>
                                       <td><?php echo $row[0]['application_id'] ?> </td>
                                        <td><a href="view-print/<?php echo $row[0]['application_id'] ?>" target="_blank"><?php echo $row[0]['tele_nof_app']; ?></a></td>
                                        <td><?php echo $row1['address']; ?></td>
                                        <td><?php echo $row1['date_of_visit']; ?></td>

                                    <td><span class="label label-info">							
										Pending				 </span></td>
                                    </tr>
				 <?php } ?>
                                   <!-- <tbody>
                                     <tr>
                                       <td><a href="view_form.php?id=171" target="_blank">8450</a></td>
                                        <td>rtfgyjuk</td>
                                        <td>dfgjhkjk</td>
                                        <td>2019-03-30</td>
                                        <td><span class="label label-warning">Pending</span></td>
                                    </tr>
                                    <tr>
                                       <td><a href="view_form.php?id=171" target="_blank">8450</a></td>
                                        <td>rtfgyjuk</td>
                                        <td>dfgjhkjk</td>
                                        <td>2019-03-30</td>
                                        <td><span class="label label-warning">Pending</span></td>
                                    </tr>
                                    <tr>
                                       <td><a href="view_form.php?id=171" target="_blank">8450</a></td>
                                        <td>rtfgyjuk</td>
                                        <td>dfgjhkjk</td>
                                        <td>2019-03-30</td>
                                        <td><span class="label label-warning">Pending</span></td>
                                    </tr>
                                    <tr>
                                       <td><a href="view_form.php?id=171" target="_blank">8450</a></td>
                                        <td>rtfgyjuk</td>
                                        <td>dfgjhkjk</td>
                                        <td>2019-03-30</td>
                                        <td><span class="label label-warning">Pending</span></td>
                                    </tr>
                                   </tbody> -->
                               </table>
                           </div>
                            </div>
                            </div>
                         </div>
                         <div class="col-md-6 col-sm-6">
                            <div class="card">
                                <div class="dash-widget clearfix card-box">
                                <div class="row">
                                    <div class="col-sm-4 col-md-4">
                                        <span class="dash-widget-icon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                    </div>
                                    <div class="col-sm-8 col-md-8">
                                        <div class="dash-widget-info">
                                            <h3><?php echo count($applicant2); ?></h3>
                                            <span>Rejected Applications</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content table-responsive" style="padding: 15px 0px 10px 0px;">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>Application Id</th>
                                        <th>Customer Name</th>
                                        <th>Address</th>
                                        <th>Date</th>
                                        <th>Status</th>

                                        
                                    </thead>
		<?php 
				 foreach($applicant2 as $row1)  
				 {
				  
				 $row = $this->web_model->get_applicant_detail($row1['application_id']);
				 
				
				
				 
				 
				?>	

<tr>
                                       <td><?php echo $row[0]['application_id'] ?> </td>
                                        <td><a href="view-print/<?php echo $row[0]['application_id'] ?>" target="_blank"><?php echo $row[0]['tele_nof_app']; ?></a></td>
                                        <td><?php echo $row1['address']; ?></td>
                                        <td><?php echo $row1['date_of_visit']; ?></td>

                                    <td><span class="label label-danger">							
										Rejected				 </span></td>
                                    </tr>
				 <?php } ?>				
                                   <!-- <tbody>
                                     <tr>
                                       <td><a href="view_form.php?id=171" target="_blank">8450</a></td>
                                        <td>rtfgyjuk</td>
                                        <td>dfgjhkjk</td>
                                        <td>2019-03-30</td>
                                        <td><span class="label label-danger">Rejected</span></td>
                                    </tr>
                                    <tr>
                                       <td><a href="view_form.php?id=171" target="_blank">8450</a></td>
                                        <td>rtfgyjuk</td>
                                        <td>dfgjhkjk</td>
                                        <td>2019-03-30</td>
                                        <td><span class="label label-danger">Rejected</span></td>
                                    </tr>
                                    <tr>
                                       <td><a href="view_form.php?id=171" target="_blank">8450</a></td>
                                        <td>rtfgyjuk</td>
                                        <td>dfgjhkjk</td>
                                        <td>2019-03-30</td>
                                        <td><span class="label label-danger">Rejected</span></td>
                                    </tr>
                                    <tr>
                                       <td><a href="view_form.php?id=171" target="_blank">8450</a></td>
                                        <td>rtfgyjuk</td>
                                        <td>dfgjhkjk</td>
                                        <td>2019-03-30</td>
                                        <td><span class="label label-danger">Rejected</span></td>
                                    </tr>
                                   </tbody> -->
                               </table>
                           </div>
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


</html>
