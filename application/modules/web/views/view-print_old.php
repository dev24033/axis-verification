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
         }
         button, input[type=button]{
         color: #000;
         text-transform: capitalize;
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
</style>

<body>
   <!-- <div class="divFooter">Created By Bansal Vinod & Associates, Gwalior</div> -->
   <div class="container">
      <div class="divFooter">Created By Bansal Vinod & Associates, Gwalior</div>
      <div class="print-head"> <span style="float:right;"><a href="uploadform.php?id=<?php echo $_GET['id'];?>">
            <button>Upload</button>
            </a></span>  <span style="float:right;">
            <button onClick="myFunction()">Print</button>
            </span> 
      </div>
      <h2 class="print-head">STEP 1 </h2>
      <a class="print-head" href="edit-form1.php">
         <button>Edit Form 1</button>
      </a>
      <div id="printableArea">
         <h2 style="text-align:center;font-weight:bold;">Axis Bank- Residence Verification report </h2>
         <div class="table-responsive">
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp">Date of Visit</td>
                  <td align="left" valign="top">7/7/2020</td>
                  <td align="left" valign="top"><span class="set_calss_from_dsp">Time of visit</span>
                  </td>
                  <td align="left" valign="top">15:30</td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp">Product</td>
                  <td align="left" valign="top">HomeLoan</td>
                  <td align="left" valign="top"><span class="set_calss_from_dsp">File No.</span>
                  </td>
                  <td align="left" valign="top">121</td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Address</td>
                  <td align="left" valign="top" colspan="3">Station Road Near Bustand Gwalior.</td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Name of Person Met</td>
                  <td align="left" valign="top" colspan="3">Gaurav Jain</td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Relationship With Applicant</td>
                  <td align="left" valign="top" colspan="3">Self</td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Ease Of Locating</td>
                  <td align="left" valign="top" colspan="3">Easy</td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Landmark</td>
                  <td align="left" valign="top" colspan="3">Mastan Baba Ki Dargah</td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>OwnerShip OF Resindece</td>
                  <td align="left" valign="top" colspan="3">Rented</td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Number Of Years Staying</td>
                  <td align="left" valign="top" colspan="3">5 YRS</td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Stay Confirmed By</td>
                  <td align="left" valign="top" colspan="3">Neighbour</td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Type of Residence</td>
                  <td align="left" valign="top" colspan="3">Rented</td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"> <sup>*</sup>Residence is in COVID Zone</td>
                  <td align="left" valign="top">Red
                     <label class="sp_container">
                        <input type="checkbox" value="yes"> <span class="sp_checkmark"></span>
                     </label>
                  </td>
                  <td align="left" valign="top">Amber
                     <label class="sp_container">
                        <input type="checkbox" value="yes"> <span class="sp_checkmark"></span>
                     </label>
                  </td>
                  <td align="left" valign="top">Green
                     <label class="sp_container">
                        <input type="checkbox" value="yes" checked> <span class="sp_checkmark"></span>
                     </label>
                  </td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"> <sup>*</sup>Family Member Infected with COVID 19 and treated</td>
                  <td align="left" valign="top">No Infection
                     <label class="sp_container">
                        <input type="checkbox" value="yes" checked> <span class="sp_checkmark"></span>
                     </label>
                  </td>
                  <td align="left" valign="top">Infected and treated
                     <label class="sp_container">
                        <input type="checkbox" value="yes"> <span class="sp_checkmark"></span>
                     </label>
                  </td>
                  <td align="left" valign="top">Death Happened in family due to COVID
                     <label class="sp_container">
                        <input type="checkbox" value="yes"> <span class="sp_checkmark"></span>
                     </label>
                  </td>
               </tr>
            </table>
         </div>
         <p style="font-weight:bold;text-align:left;margin-top:1%;">Comments: DURING THE VISIT, PERSON MET IS SELF,ADDRESS IS EASY TO LOCATE, THE PREMISE IS RENTED , APPLICATION IS RESIDING FROM 5 YRS, CONFIRMED BY NEIGHBOUR MR SHIV KULSHRETHA & SONU SHARMA</p>
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
         <div class="table-responsive" style="margin-top: 30px;">
            <h4 style="text-align: center;" class="set_calss_from_dsp">Tele Verfication report</h4>
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Date of Calling</td>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>7/7/2020</td>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Time Of calling</td>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>16:20</td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp">Name of Appplicant</td>
                  <td align="left" valign="top" colspan="3">Gaurav Jain</td>
               </tr>
            </table>
         </div>
         <br>
         <div class="table-responsive" style="margin-top: 30px;">
            <h4 style="text-align: center;" class="set_calss_from_dsp">Residence Tele Verfication report</h4>
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp">Contact Number</td>
                  <td align="left" valign="top" colspan="3">9876546598</td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp">Contacted</td>
                  <td align="left" valign="top" colspan="3">yes</td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp">Spoken To</td>
                  <td align="left" valign="top" colspan="3">Gaurav Jain</td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp">Relationship With Appplicant</td>
                  <td align="left" valign="top" colspan="3">Self</td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp">Number Of Years Staying</td>
                  <td align="left" valign="top" colspan="3">5 Yrs</td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp">Ownership Of Residence</td>
                  <td align="left" valign="top" colspan="3">Rented</td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp">Alternate Contact no,</td>
                  <td align="left" valign="top" colspan="3">NA</td>
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
         <div class="page-break">
            <h2 class="print-head">STEP 2</h2>
            <a class="print-head" href="edit-form2.php">
               <button>Edit Form 2</button>
            </a>
           <div id="printableArea">
         <h2 style="text-align:center;font-weight:bold;">Axis Bank- Business Verification report </h2>
         <div class="table-responsive">
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp">Date of Visit</td>
                  <td align="left" valign="top">7/7/2020</td>
                  <td align="left" valign="top"><span class="set_calss_from_dsp">Time of visit</span>
                  </td>
                  <td align="left" valign="top">15:30</td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Name Of Applicant</td>
                  <td align="left" valign="top" colspan="3">Gaurav jain</td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Business Address</td>
                  <td align="left" valign="top" colspan="3">Gaurav Jain</td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Type of Employment</td>
                   <td align="left" valign="top">Salaried
                     <label class="sp_container">
                        <input type="checkbox" value="yes"> <span class="sp_checkmark"></span>
                     </label>
                  </td>
                  <td align="left" valign="top">
                     &nbsp;
                     </label>
                  </td>
                  <td align="left" valign="top">Self Employed
                     <label class="sp_container">
                        <input type="checkbox" value="yes" checked> <span class="sp_checkmark"></span>
                     </label>
                  </td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Name Of Person Met</td>
                  <td align="left" valign="top" colspan="3">Gaurav Jain</td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Applicant Is Working As</td>
                  <td align="left" valign="top" colspan="3">
                     <table>
                        <tr>
                           <td align="left" valign="top">Assistant
                     <label class="sp_container">
                        <input type="checkbox" value="yes"> <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Clerk
                     <label class="sp_container">
                        <input type="checkbox" value="yes"> <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Skilled Labour
                     <label class="sp_container">
                        <input type="checkbox" value="yes"> <span class="sp_checkmark"></span>
                     </label>
                  </td>
                        </tr>
                         <tr>
                           <td align="left" valign="top">Supervisor
                     <label class="sp_container">
                        <input type="checkbox" value="yes"> <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Jr.Management
                     <label class="sp_container">
                        <input type="checkbox" value="yes"> <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Sr. Management
                     <label class="sp_container">
                        <input type="checkbox" value="yes"> <span class="sp_checkmark"></span>
                     </label>
                  </td>
                        </tr>
                         <tr>
                           <td align="left" valign="top">Not Working
                     <label class="sp_container">
                        <input type="checkbox" value="yes"> <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Self EMployed
                     <label class="sp_container">
                        <input type="checkbox" value="yes" checked> <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">
                     Other
                  </td>
                        </tr>
                     </table>
                  </td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Working Since</td>
                  <td align="left" valign="top" colspan="3">2012</td>
               </tr>
                <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Ownership of Office</td>
                  <td align="left" valign="top" colspan="3">
                     <table>
                        <tr>
                           <td align="left" valign="top">Self Owned
                     <label class="sp_container">
                        <input type="checkbox" value="yes"> <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Rented
                     <label class="sp_container">
                        <input type="checkbox" value="yes"> <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Leased
                     <label class="sp_container">
                        <input type="checkbox" value="yes" checked> <span class="sp_checkmark"></span>
                     </label>
                  </td>
                        </tr>
                         <tr>
                           <td align="left" valign="top">Shared Premises
                     <label class="sp_container">
                        <input type="checkbox" value="yes"> <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Business Center
                     <label class="sp_container">
                        <input type="checkbox" value="yes"> <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Company Owned
                     <label class="sp_container">
                        <input type="checkbox" value="yes"> <span class="sp_checkmark"></span>
                     </label>
                  </td>
                        </tr>
                        
                     </table>
                  </td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Number Of Years in Business/Employment</td>
                  <td align="left" valign="top" colspan="3">5 YRS</td>
               </tr>
                <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Nature Of Business</td>
                  <td align="left" valign="top" colspan="3">
                     <table>
                        <tr>
                           <td align="left" valign="top">Trading
                     <label class="sp_container">
                        <input type="checkbox" value="yes" checked> <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Manufacturing
                     <label class="sp_container">
                        <input type="checkbox" value="yes"> <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Service
                     <label class="sp_container">
                        <input type="checkbox" value="yes"> <span class="sp_checkmark"></span>
                     </label>
                  </td>
                        </tr>
                         <tr>
                           <td align="left" valign="top">Commision Agent   
                     <label class="sp_container">
                        <input type="checkbox" value="yes"> <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Other
                     <label class="sp_container">
                        <input type="checkbox" value="yes"> <span class="sp_checkmark"></span>
                     </label>
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
                  <td align="left" valign="top" colspan="3">Yes</td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Landmark</td>
                  <td align="left" valign="top" colspan="3">Girraj Park</td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"> <sup>*</sup>Ease Of Locating</td>
                  <td align="left" valign="top">Easy
                     <label class="sp_container">
                        <input type="checkbox" value="yes"> <span class="sp_checkmark"></span>
                     </label>
                  </td>
                  <td align="left" valign="top">Difficult
                     <label class="sp_container">
                        <input type="checkbox" value="yes"> <span class="sp_checkmark"></span>
                     </label>
                  </td>
                  <td align="left" valign="top">Untraceble
                     <label class="sp_container">
                        <input type="checkbox" value="yes" checked> <span class="sp_checkmark"></span>
                     </label>
                  </td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Number of Employee Seen At the time of Visit</td>
                  <td align="left" valign="top" colspan="3">0</td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"> <sup>*</sup>Stock Level</td>
                  <td align="left" valign="top">High
                     <label class="sp_container">
                        <input type="checkbox" value="yes" checked> <span class="sp_checkmark"></span>
                     </label>
                  </td>
                  <td align="left" valign="top">Medium
                     <label class="sp_container">
                        <input type="checkbox" value="yes"> <span class="sp_checkmark"></span>
                     </label>
                  </td>
                  <td align="left" valign="top">Low
                     <label class="sp_container">
                        <input type="checkbox" value="yes"> <span class="sp_checkmark"></span>
                     </label>
                  </td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Business Was Sightedd at the time of visit</td>
                  <td align="left" valign="top" colspan="3">No</td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"> <sup>*</sup>Business Activity Seen At the time of Visit</td>
                  <td align="left" valign="top">High
                     <label class="sp_container">
                        <input type="checkbox" value="yes" checked> <span class="sp_checkmark"></span>
                     </label>
                  </td>
                  <td align="left" valign="top">Medium
                     <label class="sp_container">
                        <input type="checkbox" value="yes"> <span class="sp_checkmark"></span>
                     </label>
                  </td>
                  <td align="left" valign="top">Low
                     <label class="sp_container">
                        <input type="checkbox" value="yes"> <span class="sp_checkmark"></span>
                     </label>
                  </td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Whether applicant has availed moratorium in<br> any of the exiting loans under COVID guidline from Bank/NBFC etc.</td>
                  <td align="left" valign="top" colspan="3">No</td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Business Confirmed By</td>
                  <td align="left" valign="top" colspan="3">
                     <table>
                        <tr>
                           <td align="left" valign="top">Name Board
                     <label class="sp_container">
                        <input type="checkbox" value="yes" checked> <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Neighbour
                     <label class="sp_container">
                        <input type="checkbox" value="yes"> <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Security
                     <label class="sp_container">
                        <input type="checkbox" value="yes"> <span class="sp_checkmark"></span>
                     </label>
                  </td>
                        </tr>
                         <tr>
                           <td align="left" valign="top">Person Met   
                     <label class="sp_container">
                        <input type="checkbox" value="yes"> <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Could Not Confirm
                     <label class="sp_container">
                        <input type="checkbox" value="yes"> <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">
                     &nbsp;
                  </td>
                        </tr>
                       
                     </table>
                  </td>
               </tr>
              <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Office is in which COVID Zone</td>
                  <td align="left" valign="top" colspan="3">
                     <table>
                        <tr>
                           <td align="left" valign="top">Red
                     <label class="sp_container">
                        <input type="checkbox" value="yes" checked> <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Amber
                     <label class="sp_container">
                        <input type="checkbox" value="yes"> <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Green
                     <label class="sp_container">
                        <input type="checkbox" value="yes"> <span class="sp_checkmark"></span>
                     </label>
                  </td>
                        </tr>
                        
                       
                     </table>
                  </td>
               </tr>
               <tr>
                  <td align="left" valign="top" class="set_calss_from_dsp"><sup>*</sup>Impact Of Covid on Business:As Per third party Confirmation</td>
                  <td align="left" valign="top" colspan="3">
                     <table>
                        <tr>
                           <td align="left" valign="top">High
                     <label class="sp_container">
                        <input type="checkbox" value="yes" checked> <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">Medium
                     <label class="sp_container">
                        <input type="checkbox" value="yes"> <span class="sp_checkmark"></span>
                     </label>
                  </td>
                           <td align="left" valign="top">low
                     <label class="sp_container">
                        <input type="checkbox" value="yes"> <span class="sp_checkmark"></span>
                     </label>
                  </td>
                        </tr>
                       
                     </table>
                  </td>
               </tr>
              
              
            </table>
         </div>
         <p style="font-weight:bold;text-align:left;margin-top:1%;">Comments: DURING VISIT PERSON MET SELF,APPLICANT IS SALARIED WORKING AS A BUSINESS EXECUTIVE, WORKING EXP,08 YRS, OFFICE ADDRESS CHANDRALOK COMPLEX B 448 SHOP NO 10 DOUBLE ROAD ANAND NAGAR GWALIOR</p>
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
        
         <div class="page-break">
            <h2 class="print-head">STEP 3</h2>
            <a class="print-head" href="edit-form3.php">
               <button>Edit Form 3</button>
            </a>
            <div class="table-responsive">
               <h4 class="text-center set_calss_from_dsp">Photos</h4>
               <table>
                  <tr>
                     <td><img src="http://digimonk.net/Ankit/images/agency-seal.png"></td>
                     <td><img src="http://digimonk.net/Ankit/images/agency-seal.png"></td>
                  </tr>
                  <tr>
                     <td><img src="http://digimonk.net/Ankit/images/agency-seal.png"></td>
                     <td><img src="http://digimonk.net/Ankit/images/agency-seal.png"></td>
                  </tr>
               </table>
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