<html>

<head>
   <title>VBA | Axis Bank | Verification</title>
   <link rel="stylesheet" type="text/css" href="http://digimonk.net/Ankit/table.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="http://digimonk.net/Ankit/print.css">
</head>
<style type="text/css">
   body{font-size:13px;}
         @media print {
         body{font-size:16px; font-weight:normal; color:#d4d4d4;}
         #set_margin_for_print {
         margin-top: 30px;
         }
         p, font, .top {
         font-size: 16px;
         }
         }
         .span-new {
         float: right;
         margin-right: 95px;
         }
         .container {
         width: 980px;
         }
         .set_calss_from_dsp {
         font-weight: bold;
		 text-transform: capitalize;
         }
         button, input[type=button]{
         color: #000;
         text-transform: capitalize;
         }
		 td, th {
			padding: 0;
			text-transform: uppercase;
		}
		
		
}
</style>
<style>
   /* The container */
         .sp_container { position: relative;   margin-bottom: 12px;  cursor: pointer;  -webkit-user-select: none;  -moz-user-select: none;  -ms-user-select: none;  user-select: none;}
         /* Hide the browser's default checkbox */
         .sp_container input {  position: absolute;  opacity: 0;  cursor: pointer;  height: 0;  width: 0;}
         /* Create a custom checkbox */
         .sp_checkmark {  position: absolute;  top: 0;  left: 0;  height: 15px;    border-radius: 1px;  width: 15px;  background-color: #fff;    border: 2px solid;}
         /* On mouse-over, add a grey background color */
         .sp_container:hover input ~ .sp_checkmark {  background-color: #ccc;}
         /* When the checkbox is checked, add a blue background */
         .sp_container input:checked ~ .sp_checkmark {  background-color: #fff;}
         /* Create the checkmark/indicator (hidden when not checked) */
         .sp_checkmark:after {  content: "";  position: absolute;  display: none;}
         /* Show the checkmark when checked */
         .sp_container input:checked ~ .sp_checkmark:after {  display: block;}
         /* Style the checkmark/indicator */
         .sp_container .sp_checkmark:after {  left: 3px;  top: 1px;  width: 5px;  height: 8px;  border: solid #000;  border-width: 0 2px 2px 0;  -webkit-transform: rotate(45deg);  -ms-transform: rotate(45deg);  transform: rotate(45deg);}
		 
		 table.dd td {
    font-size: 14px;
}

label.sp_container {
    float: right;
    margin-right: 15px;
	
}
</style>

<body>
   <!-- <div class="divFooter">Created By Bansal Vinod & Associates, Gwalior</div> -->
   <div class="container" >
      <div class="divFooter">Prepared By Bansal Vinod & Associates, Gwalior</div>
      
	  <div class="print-head"> <span style="float:right;"><a href="">
           
            </a></span>  <span style="float:right;">
            <button onClick="myFunction()">Print</button>
            </span> 
      </div>
	  <?php foreach($applicant_id as $row) { ?>
      <h2 class="print-head">STEP 1 </h2>
      <a class="print-head" href="<?php echo base_url() ?>edit-form-one/<?php echo $row['application_id']; ?>">
         <button>Edit Form 1</button>
      </a>
      <div id="printableArea" style="text-transform: uppercase;" >
	  
         <h2 style="text-align:center;font-weight:bold;">Axis Bank- Residence Verification report </h2>
         <div class="table-responsive"  >
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="dd" >
               
			   <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp">Date of Visit</td>
                  <td align="left" valign="top"> <?php echo date("d-m-Y", strtotime($row['date_of_visit'])); ?> </td>
                  <td align="left" valign="top"><span class="set_calss_from_dsp">Time of visit</span>
                  </td>
                  <td align="left" valign="top"><?php echo $row['date_of_time']; ?> </td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp">Product</td>
                  <td align="left" valign="top"><?php echo $row['product']; ?></td>
                  
				  <td align="left" valign="top"><span class="set_calss_from_dsp">File No.</span>
                  </td>
                  <td align="left" valign="top"><?php echo $row['file_no']; ?></td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Address</td>
                  <td align="left" valign="top" colspan="3"><?php echo $row['address']; ?></td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Name of Person Met</td>
                  <td align="left" valign="top" colspan="3"><?php echo $row['person_met']; ?></td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Relationship With Applicant</td>
                  <td align="left" valign="top" colspan="3"><?php echo $row['rel_with_app']; ?></td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Ease Of Locating</td>
                  <td align="left" valign="top" colspan="3"><?php echo $row['locating']; ?></td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Landmark</td>
                  <td align="left" valign="top" colspan="3"><?php echo $row['landmark']; ?></td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>OwnerShip OF Resindece</td>
                  <td align="left" valign="top" colspan="3"><?php echo $row['residence']; ?></td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Number Of Years Staying</td>
                  <td align="left" valign="top" colspan="3"><?php echo $row['years_staying']; ?></td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Stay Confirmed By</td>
                  <td align="left" valign="top" colspan="3"><?php echo $row['stay_con_by']; ?></td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Type of Residence</td>
                  <td align="left" valign="top" colspan="3"><?php echo $row['type_of_resi']; ?></td>
               </tr>
			  
               <tr style="background-color:yellow;">
                  <td align="left" valign="top" class="set_calss_from_dsp"> <sup>*</sup>Residence is in COVID Zone</td>
				  
                  <td align="left" valign="top">Red
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['resi_covid_z']=='Red' ? 'checked' : '');?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
				  
                  <td align="left" valign="top">Amber
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['resi_covid_z']=='Amber' ? 'checked' : '');?>> <span class="sp_checkmark"></span>
                     </label>
                  </td>
				  
                  <td align="left" valign="top">Green
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['resi_covid_z']=='Green' ? 'checked' : '');?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
				  
               </tr>
               <tr style="background-color:yellow;" >
                  <td align="left" valign="top" class="set_calss_from_dsp"> <sup>*</sup>Family Member Infected with COVID 19 and treated</td>
                  <td align="left" valign="top">No Infection
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['family_mem_inf']=='No Infection' ? 'checked' : '');?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                  <td align="left" valign="top">Infected and treated
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['family_mem_inf']=='Infected And Treated' ? 'checked' : '');?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                  <td align="left" valign="top">Death Happened in family due to COVID
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['family_mem_inf']=='Death Happened in family due to COVID' ? 'checked' : '');?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
               </tr>
			 
			   <tr>
			<td colspan="4">
			<p style="font-weight:bold;text-align:left;margin-top:1%;">comments: <?php echo $row['comments']; ?></p></td>
		</tr>
            </table>
         </div>
		
         <div class="table-responsive">
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Verifier's Name & Sign</td>
                  <td align="left" valign="top" colspan="3">Shubham Rajput</td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Manager's Name & Sign</td>
                  <td align="left" valign="top" colspan="3">Vinod Bansal</td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Agency Name</td>
                  <td align="left" valign="top" colspan="3">Bansal Vinod And Associates</td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Agency Seal</td>
                  <td align="left" valign="top" colspan="3">
                     <img src="http://digimonk.net/Ankit/images/agency-seal.png">
                  </td>
               </tr>
			   <?php } ?>
            </table>
         </div>
         <div class="table-responsive" style="margin-top: 30px;">
            <h4 style="text-align: center;" class="set_calss_from_dsp">Tele Verification report</h4>
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="dd" >
            <?php foreach($applicant_tele as $row) 
			{ ?>   
			   <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Date of Calling</td>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup> <?php echo date("d-m-Y", strtotime($row['tele_dof_visit'])); ?> </td>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Time Of calling</td>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup><?php echo $row['tele_tof_visit']; ?></td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp">Name of Appplicant</td>
                  <td align="left" valign="top" colspan="3"><?php echo $row['tele_nof_app']; ?></td>
               </tr>
			   
            </table>
			
			
			<div class="table-responsive" >
            <h4 style="text-align: center;" class="set_calss_from_dsp">Residence Tele Verification report</h4>
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="dd">
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp">Contact Number</td>
                  <td align="left" valign="top" colspan="3"><?php echo $row['tele_cont_no']; ?></td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp">Contacted</td>
                  
				  
				  <td align="left" valign="top">Yes
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['tele_contacted'] == 'Yes' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label> 
                  </td>
				  <td align="left" valign="top">No
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['tele_contacted'] == 'No' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label> 
                  </td>
				  
				  
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp">Spoken To</td>
                  <td align="left" valign="top" colspan="3"><?php echo $row['tele_spoken']; ?></td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp">Relationship With Appplicant</td>
                  <td align="left" valign="top" colspan="3"><?php echo $row['tele_rel_w_app']; ?></td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp">Number Of Years Staying</td>
                  <td align="left" valign="top" colspan="3"><?php echo $row['tele_years_staying']; ?></td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp">Ownership Of Residence</td>
                  <td align="left" valign="top" colspan="3"><?php echo $row['tele_residence']; ?></td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp">Alternate Contact no,</td>
                  <td align="left" valign="top" colspan="3"><?php echo $row['tele_alt_cont_no']; ?></td>
               </tr>
			   <?php } ?>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp">Verfier's Name & Sign</td>
                  <td align="left" valign="top" colspan="3">Shubham Rajput</td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp">Manager's Name & Sign</td>
                  <td align="left" valign="top" colspan="3">Vinod Bansal</td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp">Agency Name</td>
                  <td align="left" valign="top" colspan="3">Bansal Vinod And Associates</td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp">Agency Seal</td>
                  <td align="left" valign="top" colspan="3">
                     <img src="http://digimonk.net/Ankit/images/agency-seal.png">
                  </td>
               </tr>
			
            </table>
			
         </div>
         </div>
         
		 <!-----------Co-Application-form--------->
		 <?php foreach($co_applicant as $row) { ?>
         <div class="page-break">
			<h2 style="text-align:center;font-weight:bold;"> Co-Applicant </h2>
		 
		 <div class="table-responsive"  >
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="dd" >
               
			   <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp">Date of Visit</td>
                  <td align="left" valign="top"> <?php echo date("d-m-Y", strtotime($row['coa_date_of_visit'])); ?> </td>
                  <td align="left" valign="top"><span class="set_calss_from_dsp">Time of visit</span>
                  </td>
                  <td align="left" valign="top"><?php echo $row['coa_date_of_time']; ?> </td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp">Product</td>
                  <td align="left" valign="top"><?php echo $row['coa_product']; ?></td>
                  
				  <td align="left" valign="top"><span class="set_calss_from_dsp">File No.</span>
                  </td>
                  <td align="left" valign="top"><?php echo $row['coa_file_no']; ?></td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Address</td>
                  <td align="left" valign="top" colspan="3"><?php echo $row['coa_address']; ?></td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Name of Person Met</td>
                  <td align="left" valign="top" colspan="3"><?php echo $row['coa_person_met']; ?></td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Relationship With Applicant</td>
                  <td align="left" valign="top" colspan="3"><?php echo $row['coa_rel_with_app']; ?></td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Ease Of Locating</td>
                  <td align="left" valign="top" colspan="3"><?php echo $row['coa_locating']; ?></td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Landmark</td>
                  <td align="left" valign="top" colspan="3"><?php echo $row['coa_landmark']; ?></td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>OwnerShip OF Resindece</td>
                  <td align="left" valign="top" colspan="3"><?php echo $row['coa_residence']; ?></td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Number Of Years Staying</td>
                  <td align="left" valign="top" colspan="3"><?php echo $row['coa_years_staying']; ?></td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Stay Confirmed By</td>
                  <td align="left" valign="top" colspan="3"><?php echo $row['coa_stay_con_by']; ?></td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Type of Residence</td>
                  <td align="left" valign="top" colspan="3"><?php echo $row['coa_type_of_resi']; ?></td>
               </tr>
			  
               <tr style="background-color:yellow;">
                  <td align="left" valign="top" class="set_calss_from_dsp"> <sup>*</sup>Residence is in COVID Zone</td>
				  
                  <td align="left" valign="top">Red
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_resi_covid_z']=='Red' ? 'checked' : '');?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
				  
                  <td align="left" valign="top">Amber
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_resi_covid_z']=='Amber' ? 'checked' : '');?>> <span class="sp_checkmark"></span>
                     </label>
                  </td>
				  
                  <td align="left" valign="top">Green
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_resi_covid_z']=='Green' ? 'checked' : '');?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
				  
               </tr>
               <tr style="background-color:yellow;" >
                  <td align="left" valign="top" class="set_calss_from_dsp"> <sup>*</sup>Family Member Infected with COVID 19 and treated</td>
                  <td align="left" valign="top">No Infection
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_family_mem_inf']=='No Infection' ? 'checked' : '');?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                  <td align="left" valign="top">Infected And Treated
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_family_mem_inf']=='Infected And Treated' ? 'checked' : '');?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                  <td align="left" valign="top">Death Happened in family due to COVID
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_family_mem_inf']=='Death Happened in family due to COVID' ? 'checked' : '');?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
               </tr>
			 
			   <tr>
			<td colspan="4">
			<p style="font-weight:bold;text-align:left;margin-top:1%;">comments: <?php echo $row['coa_comments']; ?></p></td>
		</tr>
            </table>
         </div>
		 
		 </div>
		 <?php } ?>
		 
		 <?php foreach($co_applicant_tele as $row) 
			{ ?> 
		 <div class="table-responsive" style="margin-top: 30px;">
            <h4 style="text-align: center;" class="set_calss_from_dsp">Tele Verification report</h4>
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="dd" >
              
			   <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Date of Calling</td>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup> <?php echo date("d-m-Y", strtotime($row['coa_tele_dof_visit'])); ?> </td>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Time Of calling</td>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup><?php echo $row['coa_tele_tof_visit']; ?></td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp">Name of Appplicant</td>
                  <td align="left" valign="top" colspan="3"><?php echo $row['coa_tele_nof_app']; ?></td>
               </tr>
			   
            </table>
			
			
			<div class="table-responsive" >
            <h4 style="text-align: center;" class="set_calss_from_dsp">Residence Tele Verification report</h4>
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="dd">
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp">Contact Number</td>
                  <td align="left" valign="top" colspan="3"><?php echo $row['coa_tele_cont_no']; ?></td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp">Contacted</td>
                  
				  
				  <td align="left" valign="top">Yes
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_tele_contacted'] == 'Yes' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label> 
                  </td>
				  <td align="left" valign="top">No
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_tele_contacted'] == 'No' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label> 
                  </td>
				  
				  
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp">Spoken To</td>
                  <td align="left" valign="top" colspan="3"><?php echo $row['coa_tele_spoken']; ?></td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp">Relationship With Appplicant</td>
                  <td align="left" valign="top" colspan="3"><?php echo $row['coa_tele_rel_w_app']; ?></td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp">Number Of Years Staying</td>
                  <td align="left" valign="top" colspan="3"><?php echo $row['coa_tele_years_staying']; ?></td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp">Ownership Of Residence</td>
                  <td align="left" valign="top" colspan="3"><?php echo $row['coa_tele_residence']; ?></td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp">Alternate Contact no,</td>
                  <td align="left" valign="top" colspan="3"><?php echo $row['coa_tele_alt_cont_no']; ?></td>
               </tr>
			   
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp">Verfier's Name & Sign</td>
                  <td align="left" valign="top" colspan="3">Shubham Rajput</td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp">Manager's Name & Sign</td>
                  <td align="left" valign="top" colspan="3">Vinod Bansal</td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp">Agency Name</td>
                  <td align="left" valign="top" colspan="3">Bansal Vinod And Associates</td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp">Agency Seal</td>
                  <td align="left" valign="top" colspan="3">
                     <img src="http://digimonk.net/Ankit/images/agency-seal.png">
                  </td>
               </tr>
			
            </table>
			
         </div>
         </div>
		 <?php } ?>
        </div>
		
		 <div class="page-break">
            <h2 class="print-head">STEP 2</h2>
            <a class="print-head" href="<?php echo base_url()?>/edit-form-two/<?php echo $applicant_id[0]['application_id']; ?>">
               <button> Edit Form 2 </button>
            </a>
           <div id="printableArea" style="text-transform: uppercase;">
         <h2 style="text-align:center;font-weight:bold;">Axis Bank- Business Verification report </h2>
         <div class="table-responsive">
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="dd" >
			
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp">Date of Visit</td>
                  <td align="left" valign="top"><?php echo date("d-m-Y", strtotime($applicant_office[0]['off_dof_visit'])); ?></td>
                  <td align="left" valign="top"><span class="set_calss_from_dsp">Time of visit</span>
                  </td>
                  <td align="left" valign="top"><?php echo $applicant_office[0]['off_tof_visit']; ?></td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Name Of Applicant</td>
                  <td align="left" valign="top" colspan="3"><?php echo $applicant_office[0]['off_name_app']; ?></td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Business Address</td>
                  <td align="left" valign="top" colspan="3"><?php echo $applicant_office[0]['off_address']; ?></td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Type of Employment</td>
                   <td align="left" valign="top">Salaried
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($applicant_office[0]['type_of_employment']=='Salaried' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                  <td align="left" valign="top">
                     &nbsp;
                     </label>
                  </td>
                  <td align="left" valign="top">Self Employed
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($applicant_office[0]['type_of_employment']=='Self Employed' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Name Of Person Met</td>
                  <td align="left" valign="top" colspan="3"><?php echo $applicant_office[0]['off_person_met']; ?></td>
               </tr>
               <tr >
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Applicant Is Working As</td>
                  <td align="left" valign="top" colspan="3">
                     <table class="dd">	
                        <tr >
                        <td  align="left" valign="top">Assistant
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($applicant_office[0]['applicant_post']=='Assistant' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
						</td>
                           <td align="left" valign="top">Clerk
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($applicant_office[0]['applicant_post']=='Clerk' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Skilled Labour
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($applicant_office[0]['applicant_post']=='Skilled' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                        </tr>
                         <tr>
                           <td align="left" valign="top">Supervisor
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($applicant_office[0]['applicant_post']=='Supervisor' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Jr.Management
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($applicant_office[0]['applicant_post']=='Jr Management' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Sr. Management
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($applicant_office[0]['applicant_post']=='Sr Management' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                        </tr>
                         <tr>
                           <td align="left" valign="top">Not Working
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($applicant_office[0]['applicant_post']=='Not Working' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Self Employed
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($applicant_office[0]['applicant_post']=='Self EMployed' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">
                     Other 
					 <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($applicant_office[0]['applicant_post']=='Other' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
					 </label>
					 <span style="margin-left:20px;"><b><?php echo $applicant_office[0]['other_post']; ?></b></span>
					 
                  </td> 
                        </tr>
                     </table>
                  </td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Working Since</td>
                  <td align="left" valign="top" colspan="3"><?php echo $applicant_office[0]['working_since']; ?></td>
               </tr>
                <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Ownership of Office</td>
                  <td align="left" valign="top" colspan="3">
                     <table class="dd" >
                        <tr>
                           <td align="left" valign="top">Self Owned
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($applicant_office[0]['ownership_of_office'] == 'Self-Owned' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Rented
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($applicant_office[0]['ownership_of_office'] == 'Rented' ? 'checked' : ''); ?>  > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Leased
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($applicant_office[0]['ownership_of_office'] == 'Leased' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                        </tr>
                         <tr>
                           <td align="left" valign="top">Shared Premises
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($applicant_office[0]['ownership_of_office'] == 'Shared Premises' ? 'checked' : ''); ?>  > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Business Center
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($applicant_office[0]['ownership_of_office'] == 'Business Center' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Company Owned
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($applicant_office[0]['ownership_of_office'] == 'Company Owned' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                        </tr>
                        
                     </table>
                  </td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Number Of Years in Business/Employment</td>
                  <td align="left" valign="top" colspan="3"><?php echo $applicant_office[0]['off_num_years']; ?></td>
               </tr>
                <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Nature Of Business</td>
                  <td align="left" valign="top" colspan="3">
                     <table class="dd">
                        <tr>
                           <td align="left" valign="top">Trading
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($applicant_office[0]['nature_of_business'] == 'Trading' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Manufacturing
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($applicant_office[0]['nature_of_business'] == 'Manufacturing' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Service
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($applicant_office[0]['nature_of_business'] == 'Service' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                        </tr>
                         <tr>
                           <td align="left" valign="top">Commision Agent   
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($applicant_office[0]['nature_of_business'] == 'Commision Agent' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Other
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($applicant_office[0]['nature_of_business'] == 'Other' ? 'checked' : ''); ?>  > <span class="sp_checkmark"></span>
                     </label>
					 <span style="margin-left:20px;"><b><?php echo $applicant_office[0]['other_nature']; ?></b></span>
                  </td>
                           <td align="left" valign="top">
                     &nbsp;
                  </td>
                        </tr>
                       
                     </table>
                  </td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Office Board Seen</td>
                  <td align="left" valign="top" colspan="3"><?php echo $applicant_office[0]['office_board_seen']; ?></td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Landmark</td>
                  <td align="left" valign="top" colspan="3"><?php echo $applicant_office[0]['off_landmark']; ?></td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"> <sup>*</sup>Ease Of Locating</td>
                  <td align="left" valign="top">Easy
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($applicant_office[0]['off_locating'] == 'Easy' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                  <td align="left" valign="top">Difficult
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($applicant_office[0]['off_locating'] == 'Difficult' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                  <td align="left" valign="top">Untraceable
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($applicant_office[0]['off_locating'] == 'Untraceable' ? 'checked' : '');?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Number of Employee Seen At the time of Visit</td>
                  <td align="left" valign="top" colspan="3"><?php echo $applicant_office[0]['number_of_employee']; ?> </td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"> <sup>*</sup>Stock Level</td>
                  <td align="left" valign="top">High
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($applicant_office[0]['stock_level'] == 'High' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                  <td align="left" valign="top">Medium
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($applicant_office[0]['stock_level'] == 'Medium' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                  <td align="left" valign="top">Low
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($applicant_office[0]['stock_level'] == 'Low' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Business Was Sightedd at the time of visit</td>
                  <td align="left" valign="top" colspan="3"><?php echo $applicant_office[0]['business_sighted']; ?></td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"> <sup>*</sup>Business Activity Seen At the time of Visit</td>
                  <td align="left" valign="top">High
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($applicant_office[0]['business_activity'] == 'High' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label> 
                  </td>
                  <td align="left" valign="top">Medium
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($applicant_office[0]['business_activity'] == 'Medium' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                  <td align="left" valign="top">Low
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($applicant_office[0]['business_activity'] == 'Low' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Whether applicant has availed moratorium in<br> any of the exiting loans under COVID guidline from Bank/NBFC etc.</td>
                  
				  
				  <td align="left" valign="top">Yes
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($applicant_office[0]['applicant_availed'] == 'Yes' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label> 
                  </td>
				  <td align="left" valign="top">No
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($applicant_office[0]['applicant_availed'] == 'No' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label> 
                  </td>
				  
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Business Confirmed By</td>
                  <td align="left" valign="top" colspan="3">
                     <table class="dd" >
                        <tr>
                           <td align="left" valign="top">Name Board
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($applicant_office[0]['business_con_by'] == 'Name Board' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Neighbour
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($applicant_office[0]['business_con_by'] == 'Neighbour' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Security
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($applicant_office[0]['business_con_by'] == 'Security' ? 'checked' : ''); ?>  > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                        </tr>
                         <tr>
                           <td align="left" valign="top">Person Met   
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($applicant_office[0]['business_con_by'] == 'Person Met' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Could Not Confirm
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($applicant_office[0]['business_con_by'] == 'Could Not Confirm' ? 'checked' : ''); ?>  > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">
                     &nbsp;
                  </td>
                        </tr>
                       
                     </table>
                  </td>
               </tr>
              <tr style="background-color:yellow;" >
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Office is in which COVID Zone</td>
                  
                    
                        
                           <td align="left" valign="top">Red
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($applicant_office[0]['off_covid_zone'] =='Red' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Amber
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($applicant_office[0]['off_covid_zone'] =='Amber' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Green
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($applicant_office[0]['off_covid_zone'] =='Green' ? 'checked' : ''); ?>  > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                       
                        
                       
                     
                  
               </tr>
               <tr style="background-color:yellow;">
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Impact Of Covid on Business:As Per third party Confirmation</td>
                  
                           <td align="left" valign="top">High
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($applicant_office[0]['impact_of_covid'] == 'High' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Medium
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($applicant_office[0]['impact_of_covid'] == 'Medium' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">low
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($applicant_office[0]['impact_of_covid'] == 'low' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                       
               </tr>
			   <tr>
					<td colspan="4"> <p style="font-weight:bold;text-align:left;margin-top:1%;">comments:<?php echo $applicant_office[0]['off_comments']; ?></p> </td>
						
				</tr>
              
              
            </table>
         </div>
         
         
		 <div class="table-responsive">
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
		
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Verifier's Name & Sign</td>
                  <td align="left" valign="top" colspan="3">Shubham Rajput</td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Manager's Name & Sign</td>
                  <td align="left" valign="top" colspan="3">Vinod Bansal</td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Agency Name</td>
                  <td align="left" valign="top" colspan="3">Bansal Vinod And Associates</td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Agency Seal</td>
                  <td align="left" valign="top" colspan="3">
                     <img src="http://digimonk.net/Ankit/images/agency-seal.png">
                  </td>
               </tr>
            </table>
         </div>
		 
        <!------------Co-applicant-form business----->
		<div class="page-break">
	<?php foreach($co_applicant_office as $row) { ?>
		<h2 class="text-center set_calss_from_dsp" style="text-transform: uppercase;">Co-applicant for Business </h2>
		
			<div class="table-responsive">
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="dd" >
			
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp">Date of Visit</td>
                  <td align="left" valign="top"><?php echo date("d-m-Y", strtotime($row['coa_off_dof_visit'])); ?></td>
                  <td align="left" valign="top"><span class="set_calss_from_dsp">Time of visit</span>
                  </td>
                  <td align="left" valign="top"><?php echo $row['coa_off_tof_visit']; ?></td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Name Of Applicant</td>
                  <td align="left" valign="top" colspan="3"><?php echo $row['coa_off_name_app']; ?></td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Business Address</td>
                  <td align="left" valign="top" colspan="3"><?php echo $row['coa_off_address']; ?></td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Type of Employment</td>
                   <td align="left" valign="top">Salaried
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_type_of_employment']=='Salaried' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                  <td align="left" valign="top">
                     &nbsp;
                     </label>
                  </td>
                  <td align="left" valign="top">Self Employed
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_type_of_employment']=='Self Employed' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Name Of Person Met</td>
                  <td align="left" valign="top" colspan="3"><?php echo $row['coa_off_person_met']; ?></td>
               </tr>
               <tr >
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Applicant Is Working As</td>
                  <td align="left" valign="top" colspan="3">
                     <table class="dd">	
                        <tr >
                        <td  align="left" valign="top">Assistant
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_applicant_post']=='Assistant' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
						</td>
                           <td align="left" valign="top">Clerk
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_applicant_post']=='Clerk' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Skilled Labour
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_applicant_post']=='Skilled' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                        </tr>
                         <tr>
                           <td align="left" valign="top">Supervisor
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_applicant_post']=='Supervisor' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Jr.Management
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_applicant_post']=='Jr Management' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Sr. Management
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_applicant_post']=='Sr Management' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                        </tr>
                         <tr>
                           <td align="left" valign="top">Not Working
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_applicant_post']=='Not Working' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Self Employed
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_applicant_post']=='Self EMployed' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">
                     Other 
					 <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_applicant_post']=='Other' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
					 </label>
					 <span style="margin-left:20px;"><b><?php echo $row['other_coa_post']; ?></b></span>
					 
                  </td> 
                        </tr>
                     </table>
                  </td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Working Since</td>
                  <td align="left" valign="top" colspan="3"><?php echo $row['coa_working_since']; ?></td>
               </tr>
                <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Ownership of Office</td>
                  <td align="left" valign="top" colspan="3">
                     <table class="dd" >
                        <tr>
                           <td align="left" valign="top">Self Owned
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_ownership_of_office'] == 'Self Owned' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Rented
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_ownership_of_office'] == 'Rented' ? 'checked' : ''); ?>  > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Leased
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_ownership_of_office'] == 'Leased' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                        </tr>
                         <tr>
                           <td align="left" valign="top">Shared Premises
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_ownership_of_office'] == 'Shared Premises' ? 'checked' : ''); ?>  > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Business Center
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_ownership_of_office'] == 'Business Center' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Company Owned
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_ownership_of_office'] == 'Company Owned' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                        </tr>
                        
                     </table>
                  </td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Number Of Years in Business/Employment</td>
                  <td align="left" valign="top" colspan="3"><?php echo $row['coa_off_num_years']; ?></td>
               </tr>
                <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Nature Of Business</td>
                  <td align="left" valign="top" colspan="3">
                     <table class="dd">
                        <tr>
                           <td align="left" valign="top">Trading
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_nature_of_business'] == 'Trading' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Manufacturing
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_nature_of_business'] == 'Manufacturing' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Service
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_nature_of_business'] == 'Service' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                        </tr>
                         <tr>
                           <td align="left" valign="top">Commision Agent   
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_nature_of_business'] == 'Commision Agent' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Other
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_nature_of_business'] == 'Other' ? 'checked' : ''); ?>  > <span class="sp_checkmark"></span>
                     </label>
					 <span style="margin-left:20px;"><b><?php echo $row['other_coa_nature']; ?></b></span>
                  </td>
                           <td align="left" valign="top">
                     &nbsp;
                  </td>
                        </tr>
                       
                     </table>
                  </td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Office Board Seen</td>
                  <td align="left" valign="top" colspan="3"><?php echo $row['coa_office_board_seen']; ?></td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Landmark</td>
                  <td align="left" valign="top" colspan="3"><?php echo $row['coa_off_landmark']; ?></td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"> <sup>*</sup>Ease Of Locating</td>
                  <td align="left" valign="top">Easy
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_off_locating'] == 'Easy' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                  <td align="left" valign="top">Difficult
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_off_locating'] == 'Difficult' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                  <td align="left" valign="top">Untraceable
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_off_locating'] == 'Untraceable' ? 'checked' : '');?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Number of Employee Seen At the time of Visit</td>
                  <td align="left" valign="top" colspan="3"><?php echo $row['coa_number_of_employee']; ?> </td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"> <sup>*</sup>Stock Level</td>
                  <td align="left" valign="top">High
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_stock_level'] == 'High' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                  <td align="left" valign="top">Medium
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_stock_level'] == 'Medium' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                  <td align="left" valign="top">Low
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_stock_level'] == 'Low' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Business Was Sightedd at the time of visit</td>
                  <td align="left" valign="top" colspan="3"><?php echo $row['coa_business_sighted']; ?></td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"> <sup>*</sup>Business Activity Seen At the time of Visit</td>
                  <td align="left" valign="top">High
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_business_activity'] == 'High' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label> 
                  </td>
                  <td align="left" valign="top">Medium
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_business_activity'] == 'Medium' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                  <td align="left" valign="top">Low
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_business_activity'] == 'Low' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Whether applicant has availed moratorium in<br> any of the exiting loans under COVID guidline from Bank/NBFC etc.</td>
                  
				  
				  <td align="left" valign="top">Yes
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_applicant_availed'] == 'Yes' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label> 
                  </td>
				  <td align="left" valign="top">No
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_applicant_availed'] == 'No' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label> 
                  </td>
				  
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Business Confirmed By</td>
                  <td align="left" valign="top" colspan="3">
                     <table class="dd" >
                        <tr>
                           <td align="left" valign="top">Name Board
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_business_con_by'] == 'Name Board' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Neighbour
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_business_con_by'] == 'Neighbour' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Security
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_business_con_by'] == 'Security' ? 'checked' : ''); ?>  > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                        </tr>
                         <tr>
                           <td align="left" valign="top">Person Met   
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_business_con_by'] == 'Person Met' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Could Not Confirm
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_business_con_by'] == 'Could Not Confirm' ? 'checked' : ''); ?>  > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">
                     &nbsp;
                  </td>
                        </tr>
                       
                     </table>
                  </td>
               </tr>
              <tr style="background-color:yellow;" >
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Office is in which COVID Zone</td>
                  
                           <td align="left" valign="top">Red
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_off_covid_zone'] =='Red' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Amber
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_off_covid_zone'] =='Amber' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Green
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_off_covid_zone'] =='Green' ? 'checked' : ''); ?>  > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                        
               </tr>
               <tr style="background-color:yellow;">
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Impact Of Covid on Business:As Per third party Confirmation</td>
                  
                           <td align="left" valign="top">High
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_impact_of_covid'] == 'High' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Medium
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_impact_of_covid'] == 'Medium' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">low
                     <label class="sp_container">
                        <input type="checkbox" value="yes" <?php echo ($row['coa_impact_of_covid'] == 'low' ? 'checked' : ''); ?> > <span class="sp_checkmark"></span>
                     </label>
                  </td>
                        
               </tr>
			   <tr>
					<td colspan="4"> <p style="font-weight:bold;text-align:left;margin-top:1%;">comments:<?php echo $row['coa_off_comments']; ?></p> </td>
						
				</tr>
              
              
            </table>
         </div>
		 
		 <div class="table-responsive">
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
		
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Verifier's Name & Sign</td>
                  <td align="left" valign="top" colspan="3">Shubham Rajput</td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Manager's Name & Sign</td>
                  <td align="left" valign="top" colspan="3">Vinod Bansal</td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Agency Name</td>
                  <td align="left" valign="top" colspan="3">Bansal Vinod And Associates</td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Agency Seal</td>
                  <td align="left" valign="top" colspan="3">
                     <img src="http://digimonk.net/Ankit/images/agency-seal.png">
                  </td>
               </tr>
            </table>
         </div>
		 
	<?php } ?>
		</div>
		
         <div class="page-break">
		 <?php //foreach($applicant_doc as $row) { ?>
		 
            <h2 class="print-head">STEP 3</h2>
		
            <a class="print-head" href="<?php echo base_url()?>edit-form-three/<?php echo $row['application_id'] ?>">
               <button>Edit Form 3</button>
            </a>
            
               <h2 class="text-center set_calss_from_dsp">Business residence  Photos</h2>
               <div class="table-responsive">
			   <table>
			   
                  <tr>
                     <td><img style="width:450px; height:300px; margin-top:0px;" src="<?php echo base_url(); ?>assets/site/images/<?php echo $applicant_doc[0]['doc1']; ?>"></td>
                     <td><img style="width:450px; height:300px; margin-top:0px;" src="<?php echo base_url(); ?>assets/site/images/<?php echo $applicant_doc[0]['doc2']; ?>"></td>
                  </tr>
                  <tr>
                     <td><img style="width:450px; height:300px; margin-top:0px;" src="<?php echo base_url(); ?>assets/site/images/<?php echo $applicant_doc[0]['doc3']; ?>"></td>
                     <td><img style="width:450px; height:300px; margin-top:0px;" src="<?php echo base_url(); ?>assets/site/images/<?php echo $applicant_doc[0]['doc4']; ?>"></td>
                  </tr>
			   
               </table>
            </div>
			
			<div class="table-responsive">
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
		
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Verifier's Name & Sign</td>
                  <td align="left" valign="top" colspan="3">Shubham Rajput</td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Manager's Name & Sign</td>
                  <td align="left" valign="top" colspan="3">Vinod Bansal</td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Agency Name</td>
                  <td align="left" valign="top" colspan="3">Bansal Vinod And Associates</td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Agency Seal</td>
                  <td align="left" valign="top" colspan="3">
                     <img src="http://digimonk.net/Ankit/images/agency-seal.png">
                  </td>
               </tr>
            </table>
         </div>
			
         </div>
       
      </div>
   </div>
   </div>
   <!-- <button onclick="myFunction()">print</button>>
         -->
		 
   <script src="http://digimonk.net/Ankit/assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
   <script type="text/javascript">
      $('input').attr("disabled", true);
               function myFunction() {
                 window.print();
               }
   </script>
   <br>
   <br>
   <br>
   <br>
   <br>
</body>

</html>
<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="http://digimonk.net/Ankit/assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="http://digimonk.net/Ankit/assets/js/demo.js"></script> 