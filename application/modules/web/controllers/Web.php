<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class web extends MX_Controller {
    
	public function __construct()
	{
		parent::__construct();
		error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		$this->load->library(array('session', 'form_validation','cart'));
		$this->load->helper('cookie');
		$this->load->library('session');
		$this->load->model('web_model');
		
		$this->load->helper(array('captcha', 'string'));
		$this->load->library('email');
		$this->load->helper('cookie');
		
		$config = array(
                'protocol'  => 'smtp',
                'smtp_host' => 'smtp.gmail.com',
                'smtp_crypto' => 'ssl', # Add this
                'smtp_port' => 465,
                'smtpdebug' => 4, 
                'smtp_user' => 'support@digimonk.in',
                'smtp_pass' => 'digimonk@123', 
                'mailtype'  => 'html',
                'charset'   => 'utf-8'
            );
        $this->email->initialize($config);
        $this->email->set_mailtype("html");
        $this->email->set_newline("\r\n");

	}
    
    
    function getRandomWord($len = 8) {
			$word = array_merge(range('0', '9'), range('A', 'Z'));
			shuffle($word);
			return substr(implode($word), 0, $len);
	}
	
	function custom_captcha(){
		
		 $ranStr = $this->getRandomWord();
        $this->session->set_userdata( array('valuecaptchaCode' => $ranStr));
		$height = 35; 
		$width = 150; 
		$font_size = 24; 
		$image_p = imagecreate($width, $height);
		$graybg = imagecolorallocate($image_p, 245, 245, 245);
		$textcolor = imagecolorallocate($image_p, 34, 34, 34);

		imagefttext($image_p, $font_size, -2, 15, 26, $textcolor, 'fonts/mono.ttf', $ranStr);
		imagepng($image_p);
		
	}


		
	function index() 
	{
		if($this->session->userdata('isUserLoggedIn'))
		{
			
			redirect('dashboard');
		}
		else
		{
		$data = array();
		
		//Fetch products from the data base.
		//$data['products']= $this->web_model->getRows();
	
		$data['page_title'] = 'Loan Verification';
	    $data['body_setting'] = '';
		//$data['body'] = 'index';
		$this->load->view('index');	
		}
	}
	
	function loginsubmit()
    {
        $data = array();
        $userData = array();
        
        
        $loginemail =  $this->input->post('uname');
        $loginpassword = $this->input->post('loginpassword');
         
                $checkLogin = $this->web_model->check_userlogin($loginemail,sha1($loginpassword),'user_name');
				
                if(count($checkLogin) > 0){
                    
                    $this->session->set_userdata('isUserLoggedIn',TRUE);
						$this->session->set_userdata('userId',$checkLogin[0]['id']);
				
						$validator['success'] = true;
						$validator['logintype'] = $checkLogin[0]['id'];
						$validator['messages'] = 'Successfully';
					
                     
                }
				else{
                    
                    $validator['success'] = false;
                    $validator['messages'] = 'Wrong details, please try again.';
                }
            echo json_encode($validator); 
                
    }
	
	
	
	function dashboard() 
	{
		if($this->session->userdata('isUserLoggedIn'))
		{
		
		$data = array();
		
		//Fetch applicant detail from the data base.
		$data['applicant']= $this->web_model->get_applicant();
		$data['applicant0']= $this->web_model->get_applicant_sts0();
		$data['applicant1']= $this->web_model->get_applicant_sts1();
		$data['applicant2']= $this->web_model->get_applicant_sts2();
		
		$data['page_title'] = 'Loan Verification';
	    $data['body_setting'] = '';
		$data['body'] = 'dashboard';
		$this->load->view('template/main', $data);
		}
		else
		{
		redirect('index');
		}
	}
	
	public function logout()
	{
        
        $this->session->unset_userdata('isUserLoggedIn');
        
        $this->session->sess_destroy();
        
        redirect('index');
        
        
    }
	
	function add_new_loan()
	{
		if($this->session->userdata('isUserLoggedIn'))
		{
		$data['page_title'] = 'Loan Verification';
	    $data['body_setting'] = '';
		$data['body'] = 'add-new-loan';
		$this->load->view('template/main', $data);
		}
		else
		{
		redirect('index');
		}
	}
	
	function step_one_form()
    {
        $data = array();

        $date_of_visit = $this->input->post('date_of_visit');
		$date_of_time = 	$this->input->post('date_of_time');
        $product =  $this->input->post('product');
        $file_no = $this->input->post('file_no');
        $address = $this->input->post('address');
		$person_met = $this->input->post('person_met');
		$rel_with_app = $this->input->post('rel_with_app');
		$locating = $this->input->post('locating');
		$landmark = $this->input->post('landmark');
		$residence = $this->input->post('residence');
		$years_staying = $this->input->post('years_staying');
		$stay_con_by = $this->input->post('stay_con_by');
		$type_of_resi = $this->input->post('type_of_resi');
		$resi_covid_z = $this->input->post('resi_covid_z');
		$family_mem_inf = $this->input->post('family_mem_inf');
		$comments = $this->input->post('comments');
		    					
        $userData = array(
			'date_of_visit'	=>$date_of_visit,
			'date_of_time'	=>$date_of_time,
			'product'		=>$product,
			'file_no'		=>$file_no,
			'address'		=>$address,
			'person_met'	=>$person_met,
			'rel_with_app'	=>$person_met,
			'locating'		=>$locating,
			'landmark'		=>$landmark,
			'residence'		=>$residence,
			'years_staying'	=>$years_staying,
			'stay_con_by'	=>$stay_con_by,
			'type_of_resi'	=>$type_of_resi,
			'resi_covid_z'	=>$resi_covid_z,
			'family_mem_inf'=>$family_mem_inf,
			'comments'		=>$comments,
			'status'		=>"0",
			);
					
             $insert = $this->web_model->mem_insert($userData);
			 //$this->placeOrder($insert);			 
				$validator['success'] = true;
                $validator['messages'] = 'Successfully';
                $validator['application_id'] = $insert;
         echo json_encode($validator); 
		 
		 // tele verification
		$tele_dof_visit = $this->input->post('tele_dof_visit');
		$tele_tof_visit = $this->input->post('tele_tof_visit');
		$tele_nof_app = $this->input->post('tele_nof_app');
		$tele_cont_no = $this->input->post('tele_cont_no');
		$tele_contacted = $this->input->post('tele_contacted');
		$tele_spoken = $this->input->post('tele_spoken');
		$tele_rel_w_app = $this->input->post('tele_rel_w_app');
		$tele_years_staying = $this->input->post('tele_years_staying');
		$tele_residence = $this->input->post('tele_residence');
		$tele_alt_cont_no = $this->input->post('tele_alt_cont_no');
		
		
		
		
		
		$teledata = array(
			'application_id'	=>$insert,
			'tele_dof_visit'	=>$tele_dof_visit,
			'tele_tof_visit'	=>$tele_tof_visit,
			'tele_nof_app'		=>$tele_nof_app,
			'tele_cont_no'		=>$tele_cont_no,
			'tele_contacted'	=>$tele_contacted,
			'tele_spoken'		=>$tele_spoken,
			'tele_rel_w_app'	=>$tele_rel_w_app,
			'tele_years_staying'=>$tele_years_staying,
			'tele_residence'	=>$tele_residence,
			'tele_alt_cont_no'	=>$tele_alt_cont_no,
			);
			$this->web_model->tele_insert($teledata);
		           
			//	co applicant data			   
		$co_applicant_val = $this->input->post('co_applicant_val');
		
		if($co_applicant_val == 'show')
		{
			$data = array();
		$coa_date_of_visit = $this->input->post('coa_date_of_visit');
		$coa_date_of_time = $this->input->post('coa_date_of_time');
		$coa_product = $this->input->post('coa_product');
		$coa_file_no = $this->input->post('coa_file_no');
		$coa_address = $this->input->post('coa_address');
		$coa_person_met = $this->input->post('coa_person_met');
		$coa_rel_with_app = $this->input->post('coa_rel_with_app');
		$coa_locating = $this->input->post('coa_locating');
		$coa_landmark = $this->input->post('coa_landmark');
		$coa_residence = $this->input->post('coa_residence');
		$coa_years_staying = $this->input->post('coa_years_staying');
		$coa_stay_con_by = $this->input->post('coa_stay_con_by');
		$coa_type_of_resi = $this->input->post('coa_type_of_resi');
		$coa_resi_covid_z = $this->input->post('coa_resi_covid_z');
		$coa_family_mem_inf = $this->input->post('coa_family_mem_inf');
		$coa_comments = $this->input->post('coa_comments');
		
		
		
		$coa_data = array(
			'application_id'	=>$insert,
			'coa_date_of_visit'	=>$coa_date_of_visit,
			'coa_date_of_time'	=>$coa_date_of_time,
			'coa_product'		=>$coa_product,
			'coa_file_no'		=>$coa_file_no,
			'coa_address'		=>$coa_address,
			'coa_person_met'	=>$coa_person_met,
			'coa_rel_with_app'	=>$coa_rel_with_app,
			'coa_locating'		=>$coa_locating,
			'coa_landmark'		=>$coa_landmark,
			'coa_residence'		=>$coa_residence,
			'coa_years_staying'	=>$coa_years_staying,
			'coa_stay_con_by'	=>$coa_stay_con_by,
			'coa_type_of_resi'	=>$coa_type_of_resi,
			'coa_resi_covid_z'	=>$coa_resi_covid_z,
			'coa_family_mem_inf' =>$coa_family_mem_inf,
			'coa_comments'		=>$coa_comments,
			
			);
			
			$this->web_model->coa_insert($coa_data);
			
			// coa_tele verification
			
		$coa_tele_dof_visit = $this->input->post('coa_tele_dof_visit');
		$coa_tele_tof_visit = $this->input->post('coa_tele_tof_visit');
		$coa_tele_nof_app = $this->input->post('coa_tele_nof_app');
		$coa_tele_cont_no = $this->input->post('coa_tele_cont_no');
		$coa_tele_contacted = $this->input->post('coa_tele_contacted');
		$coa_tele_spoken = $this->input->post('coa_tele_spoken');
		$coa_tele_rel_w_app = $this->input->post('coa_tele_rel_w_app');
		$coa_tele_years_staying = $this->input->post('coa_tele_years_staying');
		$coa_tele_residence = $this->input->post('coa_tele_residence');
		$coa_tele_alt_cont_no = $this->input->post('coa_tele_alt_cont_no');
		
			$coa_teledata = array(
			
			'application_id'		=>$insert,
			'coa_tele_dof_visit'	=>$coa_tele_dof_visit,
			'coa_tele_tof_visit'		=>$coa_tele_tof_visit,
			'coa_tele_nof_app'		=>$coa_tele_nof_app,
			'coa_tele_cont_no'		=>$coa_tele_cont_no,
			'coa_tele_contacted'	=>$coa_tele_contacted,
			'coa_tele_spoken'		=>$coa_tele_spoken,
			'coa_tele_rel_w_app'	=>$coa_tele_rel_w_app,
			'coa_tele_years_staying'	=>$coa_tele_years_staying,
			'coa_tele_residence'	=>$coa_tele_residence,
			'coa_tele_alt_cont_no'	=>$coa_tele_alt_cont_no,
			);
			
			$this->web_model->coa_tele_insert($coa_teledata);
		}
			
		
    }
	
	
	function step_two_form()
	{
		$data = array();
		$application_id = $this->input->post('application_id');
		
		$off_dof_visit = $this->input->post('off_dof_visit');
		$off_tof_visit = $this->input->post('off_tof_visit');
		$off_name_app = $this->input->post('off_name_app');
		$off_address = $this->input->post('off_address');
		$type_of_employment = $this->input->post('type_of_employment');
		$off_person_met = $this->input->post('off_person_met');
		$applicant_post = $this->input->post('applicant_post');
		$other_post = $this->input->post('other_post');
		$working_since = $this->input->post('working_since');
		$ownership_of_office = $this->input->post('ownership_of_office');
		$off_num_years = $this->input->post('off_num_years');
		$nature_of_business = $this->input->post('nature_of_business');
		$other_nature = $this->input->post('other_nature');
		$office_board_seen = $this->input->post('office_board_seen');
		$off_landmark = $this->input->post('off_landmark');
		$off_locating = $this->input->post('off_locating');
		$number_of_employee = $this->input->post('number_of_employee');
		$stock_level = $this->input->post('stock_level');
		$business_sighted = $this->input->post('business_sighted');
		$business_activity = $this->input->post('business_activity');
		$applicant_availed = $this->input->post('applicant_availed');
		$business_con_by = $this->input->post('business_con_by');
		$off_covid_zone = $this->input->post('off_covid_zone');
		$impact_of_covid = $this->input->post('impact_of_covid');
		$off_comments = $this->input->post('off_comments');
		
		
		$office_data = array(
			'application_id'	=>$application_id,
			'off_dof_visit'		=>$off_dof_visit,
			'off_tof_visit'		=>$off_tof_visit,
			'off_name_app'		=>$off_name_app,
			'off_address'		=>$off_address,
			'type_of_employment'=>$type_of_employment,
			'off_person_met'	=>$off_person_met,
			'applicant_post'	=>$applicant_post,
			'other_post'	=>$other_post,
			'working_since'		=>$working_since,
			'ownership_of_office'=>$ownership_of_office,
			'off_num_years'		=>$off_num_years,
			'nature_of_business'=>$nature_of_business,
			'other_nature'	=>$other_nature,
			'office_board_seen'	=>$office_board_seen,
			'off_landmark'		=>$off_landmark,
			'off_locating'		=>$off_locating,
			'number_of_employee'=>$number_of_employee,
			'stock_level'		=>$stock_level,
			'business_sighted'	=>$business_sighted,
			'business_activity'	=>$business_activity,
			'applicant_availed'	=>$applicant_availed,
			'business_con_by'	=>$business_con_by,
			'off_covid_zone'	=>$off_covid_zone,
			'impact_of_covid'	=>$impact_of_covid,
			'off_comments'		=>$off_comments,
			);
			$step2 = $this->web_model->office_insert($office_data);
			
			$validator['success'] = true;
                $validator['messages'] = 'Successfully';
                $validator['application1'] = $application_id;
				
				echo json_encode($validator);
		 
		 // office co-applicant
	$off_co_applicant_val = $this->input->post('off_co_applicant_val');
		if($off_co_applicant_val == 'show1')
		{
			$data = array();
			$application_id = $this->input->post('application_id');
			$coa_off_dof_visit = $this->input->post('coa_off_dof_visit');
			$coa_off_tof_visit = $this->input->post('coa_off_tof_visit');
			$coa_off_name_app = $this->input->post('coa_off_name_app');
			$coa_off_address = $this->input->post('coa_off_address');
			$coa_type_of_employment = $this->input->post('coa_type_of_employment');
			$coa_off_person_met = $this->input->post('coa_off_person_met');
			$coa_applicant_post = $this->input->post('coa_applicant_post');
			$other_coa_post = $this->input->post('other_coa_post');
			$coa_working_since = $this->input->post('coa_working_since');
			$coa_ownership_of_office = $this->input->post('coa_ownership_of_office');
			$coa_off_num_years = $this->input->post('coa_off_num_years');
			$coa_nature_of_business = $this->input->post('coa_nature_of_business');
			$other_coa_nature = $this->input->post('other_coa_nature');
			$coa_office_board_seen = $this->input->post('coa_office_board_seen');
			$coa_off_landmark = $this->input->post('coa_off_landmark');
			$coa_off_locating = $this->input->post('coa_off_locating');
			$coa_number_of_employee = $this->input->post('coa_number_of_employee');
			$coa_stock_level = $this->input->post('coa_stock_level');
			$coa_business_sighted = $this->input->post('coa_business_sighted');
			$coa_business_activity = $this->input->post('coa_business_activity');
			$coa_applicant_availed = $this->input->post('coa_applicant_availed');
			$coa_business_con_by = $this->input->post('coa_business_con_by');
			$coa_off_covid_zone = $this->input->post('coa_off_covid_zone');
			$coa_impact_of_covid = $this->input->post('coa_impact_of_covid');
			$coa_off_comments = $this->input->post('coa_off_comments');
			
			$office_coa_data = array(
				'application_id'	=>$application_id,	
				'coa_off_dof_visit'	=>$coa_off_dof_visit,	
				'coa_off_tof_visit'	=>$coa_off_tof_visit,	
				'coa_off_name_app'	=>$coa_off_name_app,	
				'coa_off_address'	=>$coa_off_address,	
				'coa_type_of_employment' =>$coa_type_of_employment,	
				'coa_off_person_met' =>$coa_off_person_met,	
				'coa_applicant_post' =>$coa_applicant_post,	
				'other_coa_post' =>$other_coa_post,	
				'coa_working_since' =>$coa_working_since,	
				'coa_ownership_of_office' =>$coa_ownership_of_office,	
				'coa_off_num_years' =>$coa_off_num_years,	
				'coa_nature_of_business' =>$coa_nature_of_business,	
				'other_coa_nature' =>$other_coa_nature,	
				'coa_office_board_seen'	=>$coa_office_board_seen,	
				'coa_off_landmark'	=>$coa_off_landmark,	
				'coa_off_locating' =>$coa_off_locating,	
				'coa_number_of_employee' =>$coa_number_of_employee,	
				'coa_stock_level' =>$coa_stock_level,	
				'coa_business_sighted'  =>$coa_business_sighted,	
				'coa_business_activity' =>$coa_business_activity,	
				'coa_applicant_availed' =>$coa_applicant_availed,	
				'coa_business_con_by' =>$coa_business_con_by,	
				'coa_off_covid_zone' =>$coa_off_covid_zone,	
				'coa_impact_of_covid' =>$coa_impact_of_covid,	
				'coa_off_comments' =>$coa_off_comments,	
				
				);
				$this->web_model->office_coa_insert($office_coa_data);
		}
	}
	
	function step_three_form()
	{
		$data = array();
			$application_id = $this->input->post('application1');
			$doc1 = $this->input->post('doc1');
			$doc2 = $this->input->post('doc2');
			$doc3 = $this->input->post('doc3');
			$doc4 = $this->input->post('doc4');
			
			$config['upload_path']   = FCPATH.'assets/site/images'; 
						$config['allowed_types'] = 'gif|jpg|png|jpeg';
						$this->load->library('upload', $config);
						$this->upload->initialize($config);

						if(!$this->upload->do_upload('doc1'))  
						{  

								$this->session->set_flashdata("alert", strip_tags($this->upload->display_errors()." ".$config['upload_path'])); 
									$this->load->library("user_agent");
						}  
						else  
						{  
						$data = $this->upload->data();  
						$image1 = $data["file_name"];  
						}
						
						if(!$this->upload->do_upload('doc2'))  
						{  

								$this->session->set_flashdata("alert", strip_tags($this->upload->display_errors()." ".$config['upload_path'])); 
									$this->load->library("user_agent");
						}  
						else  
						{  
						$data = $this->upload->data();  
						$image2 = $data["file_name"];  
						} 

							
						if(!$this->upload->do_upload('doc3'))  
						{  

								$this->session->set_flashdata("alert", strip_tags($this->upload->display_errors()." ".$config['upload_path'])); 
									$this->load->library("user_agent");
						}  
						else  
						{  
						$data = $this->upload->data();  
						$image3 = $data["file_name"];  
						} 	

						if(!$this->upload->do_upload('doc4'))  
						{  

								$this->session->set_flashdata("alert", strip_tags($this->upload->display_errors()." ".$config['upload_path'])); 
									$this->load->library("user_agent");
						}  
						else  
						{  
						$data = $this->upload->data();  
						$image4 = $data["file_name"];  
						} 		
			
			$doc_data = array(
				'application_id'	=>$application_id,	
				'doc1' => $image1, 
				'doc2' => $image2,
				'doc3' => $image3,
				'doc4' => $image4,
				);
				
				$step3 = $this->web_model->doc_insert($doc_data);
			
			$validator['success'] = true;
                $validator['messages'] = 'Successfully';
                $validator['application'] = $step3;
				echo json_encode($validator);
	}
	
	function view_loan()
	{
		if($this->session->userdata('isUserLoggedIn'))
		{
		$data = array();
		
		//Fetch products from the data base.
		$data['applicant']= $this->web_model->get_applicant();
		
		/* print_r($data['applicant']);
		exit; */
		
		$data['page_title'] = 'Loan Verification';
	    $data['body_setting'] = '';
		$data['body'] = 'view-loan';
		$this->load->view('template/main', $data);
		}
		else
		{
		redirect('index');
		}
	}
	
	function view_print($id)
	{
		if($this->session->userdata('isUserLoggedIn'))
		{
		$data = array();
		
		//Fetch applicant detail from the data base.
		$data['applicant_id']= $this->web_model->get_applicant_id($id);
		$data['applicant_tele']= $this->web_model->get_applicant_tele($id);
		$data['applicant_office']= $this->web_model->get_applicant_office($id);
		$data['co_applicant_office']= $this->web_model->get_co_applicant_office($id);
		$data['applicant_doc']= $this->web_model->get_applicant_doc($id);
		$data['co_applicant']= $this->web_model->get_co_applicant($id);
		$data['co_applicant_tele']= $this->web_model->get_co_applicant_tele($id);
		
		
		/* print_r($data['applicant']);
		exit; */
		$data['page_title'] = 'Loan Verification';
	    $data['body_setting'] = '';
		$data['body'] = 'view-print';
		$this->load->view('template/main',$data);
		}
		else
		{
		redirect('index');
		}
	} 
	
	function edit_form_one($id)
	{
		if($this->session->userdata('isUserLoggedIn'))
		{
		
		$data = array();
		
		//Fetch applicant detail from the data base.
		$data['applicant_id']= $this->web_model->get_applicant_id($id);
		$data['applicant_tele']= $this->web_model->get_applicant_tele($id);
		$data['co_applicant']= $this->web_model->get_co_applicant($id);
		/* print_r($data['co_applicant']);
		exit; */
		
		$data['co_applicant_tele']= $this->web_model->get_co_applicant_tele($id);
		$data['applicant_office']= $this->web_model->get_applicant_office($id);
		$data['co_applicant_office']= $this->web_model->get_co_applicant_office($id);
		$data['applicant_doc']= $this->web_model->get_applicant_doc($id);
		
		$data['page_title'] = 'Loan Verification';
	    $data['body_setting'] = '';
		$data['body'] = 'edit-form1';
		$this->load->view('template/main',$data);
		}
		else
		{
		redirect('index');
		}
	}
	
	function step_one_update()
	{
		$data = array();

        $id = $this->input->post('applicant_id');
        
		$date_of_visit = $this->input->post('date_of_visit');
		$date_of_time = 	$this->input->post('date_of_time');
        $product =  $this->input->post('product');
        $file_no = $this->input->post('file_no');
        $address = $this->input->post('address');
		$person_met = $this->input->post('person_met');
		$rel_with_app = $this->input->post('rel_with_app');
		$locating = $this->input->post('locating');
		$landmark = $this->input->post('landmark');
		$residence = $this->input->post('residence');
		$years_staying = $this->input->post('years_staying');
		$stay_con_by = $this->input->post('stay_con_by');
		$type_of_resi = $this->input->post('type_of_resi');
		 $resi_covid_z = $this->input->post('resi_covid_z');
		 $family_mem_inf = $this->input->post('family_mem_inf');
		$comments = $this->input->post('comments');
			
		
        $userData = array(
			'date_of_visit'	=>$date_of_visit,
			'date_of_time'	=>$date_of_time,
			'product'		=>$product,
			'file_no'		=>$file_no,
			'address'		=>$address,
			'person_met'	=>$person_met,
			'rel_with_app'	=>$person_met,
			'locating'		=>$locating,
			'landmark'		=>$landmark,
			'residence'		=>$residence,
			'years_staying'	=>$years_staying,
			'stay_con_by'	=>$stay_con_by,
			'type_of_resi'	=>$type_of_resi,
			'resi_covid_z'	=>$resi_covid_z,
			'family_mem_inf'=>$family_mem_inf,
			'comments'		=>$comments,
			'status'		=>"0",
			);
					
             $update = $this->web_model->mem_update($userData,$id);
			 //$this->placeOrder($insert);			 
			
		 
		 // tele verification
		$tele_dof_visit = $this->input->post('tele_dof_visit');
		$tele_tof_visit = $this->input->post('tele_tof_visit');
		$tele_nof_app = $this->input->post('tele_nof_app');
		$tele_cont_no = $this->input->post('tele_cont_no');
		$tele_contacted = $this->input->post('tele_contacted');
		$tele_spoken = $this->input->post('tele_spoken');
		$tele_rel_w_app = $this->input->post('tele_rel_w_app');
		$tele_years_staying = $this->input->post('tele_years_staying');
		$tele_residence = $this->input->post('tele_residence');
		$tele_alt_cont_no = $this->input->post('tele_alt_cont_no');
		
		
		//$co_applicant_val = $this->input->post('co_applicant_val');
		
		
		
		$teledata = array(
			'tele_dof_visit'	=>$tele_dof_visit,
			'tele_tof_visit'	=>$tele_tof_visit,
			'tele_nof_app'		=>$tele_nof_app,
			'tele_cont_no'		=>$tele_cont_no,
			'tele_contacted'	=>$tele_contacted,
			'tele_spoken'		=>$tele_spoken,
			'tele_rel_w_app'	=>$tele_rel_w_app,
			'tele_years_staying'=>$tele_years_staying,
			'tele_residence'	=>$tele_residence,
			'tele_alt_cont_no'	=>$tele_alt_cont_no,
			);
			$this->web_model->tele_update($teledata,$id);
		     
					$validator['success'] = true;
                $validator['messages'] = 'Successfully';
                $validator['application_id'] = $update;
				echo json_encode($validator); 
			
				//	co applicant update
				
		$co_applicant_val = $this->input->post('co_applicant_val');
		
		if($co_applicant_val == 'show')
		{
			$data = array();
		$id = $this->input->post('applicant_id');	
			
		$coa_date_of_visit = $this->input->post('coa_date_of_visit');
		$coa_date_of_time = $this->input->post('coa_date_of_time');
		$coa_product = $this->input->post('coa_product');
		$coa_file_no = $this->input->post('coa_file_no');
		$coa_address = $this->input->post('coa_address');
		$coa_person_met = $this->input->post('coa_person_met');
		$coa_rel_with_app = $this->input->post('coa_rel_with_app');
		$coa_locating = $this->input->post('coa_locating');
		$coa_landmark = $this->input->post('coa_landmark');
		$coa_residence = $this->input->post('coa_residence');
		$coa_years_staying = $this->input->post('coa_years_staying');
		$coa_stay_con_by = $this->input->post('coa_stay_con_by');
		$coa_type_of_resi = $this->input->post('coa_type_of_resi');
		$coa_resi_covid_z = $this->input->post('coa_resi_covid_z');
		$coa_family_mem_inf = $this->input->post('coa_family_mem_inf');
		$coa_comments = $this->input->post('coa_comments');
		
		
		
		$coa_update = array(
			
			'application_id'	=>$id,
			'coa_date_of_visit'	=>$coa_date_of_visit,
			'coa_date_of_time'	=>$coa_date_of_time,
			'coa_product'		=>$coa_product,
			'coa_file_no'		=>$coa_file_no,
			'coa_address'		=>$coa_address,
			'coa_person_met'	=>$coa_person_met,
			'coa_rel_with_app'	=>$coa_rel_with_app,
			'coa_locating'		=>$coa_locating,
			'coa_landmark'		=>$coa_landmark,
			'coa_residence'		=>$coa_residence,
			'coa_years_staying'	=>$coa_years_staying,
			'coa_stay_con_by'	=>$coa_stay_con_by,
			'coa_type_of_resi'	=>$coa_type_of_resi,
			'coa_resi_covid_z'	=>$coa_resi_covid_z,
			'coa_family_mem_inf' =>$coa_family_mem_inf,
			'coa_comments'		=>$coa_comments,
			
			);
			
			$checkId = $this->web_model->check_appID($id);
				
            if(count($checkId) > 0)
			{
			$this->web_model->coa_update($coa_update,$id);
			}
			else
			{
				$this->web_model->coa_insert($coa_update);
			}
			
			// coa_tele_update 
		$id = $this->input->post('applicant_id');	
		$coa_tele_dof_visit = $this->input->post('coa_tele_dof_visit');
		$coa_tele_tof_visit = $this->input->post('coa_tele_tof_visit');
		$coa_tele_nof_app = $this->input->post('coa_tele_nof_app');
		$coa_tele_cont_no = $this->input->post('coa_tele_cont_no');
		$coa_tele_contacted = $this->input->post('coa_tele_contacted');
		$coa_tele_spoken = $this->input->post('coa_tele_spoken');
		$coa_tele_rel_w_app = $this->input->post('coa_tele_rel_w_app');
		$coa_tele_years_staying = $this->input->post('coa_tele_years_staying');
		$coa_tele_residence = $this->input->post('coa_tele_residence');
		$coa_tele_alt_cont_no = $this->input->post('coa_tele_alt_cont_no');
		
			$coa_teledata_upd = array(
			
			'application_id'		=>$id,
			'coa_tele_dof_visit'	=>$coa_tele_dof_visit,
			'coa_tele_tof_visit'	=>$coa_tele_tof_visit,
			'coa_tele_nof_app'		=>$coa_tele_nof_app,
			'coa_tele_cont_no'		=>$coa_tele_cont_no,
			'coa_tele_contacted'	=>$coa_tele_contacted,
			'coa_tele_spoken'		=>$coa_tele_spoken,
			'coa_tele_rel_w_app'	=>$coa_tele_rel_w_app,
			'coa_tele_years_staying'=>$coa_tele_years_staying,
			'coa_tele_residence'	=>$coa_tele_residence,
			'coa_tele_alt_cont_no'	=>$coa_tele_alt_cont_no,
			);
			$checkId = $this->web_model->check_teleID($id);
				
            if(count($checkId) > 0)
			{
			$this->web_model->coa_tele_update($coa_teledata_upd,$id);
			}
			else
			{
				$this->web_model->coa_tele_insert($coa_teledata_upd);
			}
		}
				
	}
	
	function edit_form_two($id)
	{
		if($this->session->userdata('isUserLoggedIn'))
		{
		$data = array();
		
		//Fetch applicant detail from the data base.
		$data['applicant_id']= $this->web_model->get_applicant_id($id);
		$data['applicant_tele']= $this->web_model->get_applicant_tele($id);
		$data['co_applicant']= $this->web_model->get_co_applicant($id);
		/* print_r($data['co_applicant']);
		exit; */
		
		$data['co_applicant_tele']= $this->web_model->get_co_applicant_tele($id);
		$data['applicant_office']= $this->web_model->get_applicant_office($id);
		$data['co_applicant_office']= $this->web_model->get_co_applicant_office($id);
		$data['applicant_doc']= $this->web_model->get_applicant_doc($id);
		
		$data['page_title'] = 'Loan Verification';
	    $data['body_setting'] = '';
		$data['body'] = 'edit-form2';
		$this->load->view('template/main',$data);
		}
		else
		{
		redirect('index');
		}
	}
	
	function step_two_update()
	{
		$data = array();
		$id = $this->input->post('applicant_id');
		
		$off_dof_visit = $this->input->post('off_dof_visit');
		$off_tof_visit = $this->input->post('off_tof_visit');
		$off_name_app = $this->input->post('off_name_app');
		$off_address = $this->input->post('off_address');
		$type_of_employment = $this->input->post('type_of_employment');
		$off_person_met = $this->input->post('off_person_met');
		$applicant_post = $this->input->post('applicant_post');
		$other_post = $this->input->post('other_post');
		$working_since = $this->input->post('working_since');
		$ownership_of_office = $this->input->post('ownership_of_office');
		$off_num_years = $this->input->post('off_num_years');
		$nature_of_business = $this->input->post('nature_of_business');
		$other_nature = $this->input->post('other_nature');
		$office_board_seen = $this->input->post('office_board_seen');
		$off_landmark = $this->input->post('off_landmark');
		$off_locating = $this->input->post('off_locating');
		$number_of_employee = $this->input->post('number_of_employee');
		$stock_level = $this->input->post('stock_level');
		$business_sighted = $this->input->post('business_sighted');
		$business_activity = $this->input->post('business_activity');
		$applicant_availed = $this->input->post('applicant_availed');
		$business_con_by = $this->input->post('business_con_by');
		$off_covid_zone = $this->input->post('off_covid_zone');
		$impact_of_covid = $this->input->post('impact_of_covid');
		$off_comments = $this->input->post('off_comments');
		
		
		$office_update = array(
			'application_id'	=>$id,
			'off_dof_visit'		=>$off_dof_visit,
			'off_tof_visit'		=>$off_tof_visit,
			'off_name_app'		=>$off_name_app,
			'off_address'		=>$off_address,
			'type_of_employment'=>$type_of_employment,
			'off_person_met'	=>$off_person_met,
			'applicant_post'	=>$applicant_post,
			'other_post'	=>$other_post,
			'working_since'		=>$working_since,
			'ownership_of_office'=>$ownership_of_office,
			'off_num_years'		=>$off_num_years,
			'nature_of_business'=>$nature_of_business,
			'other_nature'		=>$other_nature,
			'office_board_seen'	=>$office_board_seen,
			'off_landmark'		=>$off_landmark,
			'off_locating'		=>$off_locating,
			'number_of_employee'=>$number_of_employee,
			'stock_level'		=>$stock_level,
			'business_sighted'	=>$business_sighted,
			'business_activity'	=>$business_activity,
			'applicant_availed'	=>$applicant_availed,
			'business_con_by'	=>$business_con_by,
			'off_covid_zone'	=>$off_covid_zone,
			'impact_of_covid'	=>$impact_of_covid,
			'off_comments'		=>$off_comments,
			);
			$checkId = $this->web_model->check_officeID($id);
				
            if(count($checkId) > 0)
			{
			$step2 = 	$this->web_model->office_update($office_update,$id);
			}
			else
			{
			$step2 =	$this->web_model->office_insert($office_update);
			}
			
			// office co-applicant update
		$off_co_applicant_val = $this->input->post('off_co_applicant_val');
		if($off_co_applicant_val == 'show1')
		{
			$data = array();
			$id = $this->input->post('applicant_id');
			
			$coa_off_dof_visit = $this->input->post('coa_off_dof_visit');
			$coa_off_tof_visit = $this->input->post('coa_off_tof_visit');
			$coa_off_name_app = $this->input->post('coa_off_name_app');
			$coa_off_address = $this->input->post('coa_off_address');
			$coa_type_of_employment = $this->input->post('coa_type_of_employment');
			$coa_off_person_met = $this->input->post('coa_off_person_met');
			$coa_applicant_post = $this->input->post('coa_applicant_post');
			$other_coa_post = $this->input->post('other_coa_post');
			$coa_working_since = $this->input->post('coa_working_since');
			$coa_ownership_of_office = $this->input->post('coa_ownership_of_office');
			$coa_off_num_years = $this->input->post('coa_off_num_years');
			$coa_nature_of_business = $this->input->post('coa_nature_of_business');
			$other_coa_nature = $this->input->post('other_coa_nature');
			$coa_office_board_seen = $this->input->post('coa_office_board_seen');
			$coa_off_landmark = $this->input->post('coa_off_landmark');
			$coa_off_locating = $this->input->post('coa_off_locating');
			$coa_number_of_employee = $this->input->post('coa_number_of_employee');
			$coa_stock_level = $this->input->post('coa_stock_level');
			$coa_business_sighted = $this->input->post('coa_business_sighted');
			$coa_business_activity = $this->input->post('coa_business_activity');
			$coa_applicant_availed = $this->input->post('coa_applicant_availed');
			$coa_business_con_by = $this->input->post('coa_business_con_by');
			$coa_off_covid_zone = $this->input->post('coa_off_covid_zone');
			$coa_impact_of_covid = $this->input->post('coa_impact_of_covid');
			$coa_off_comments = $this->input->post('coa_off_comments');
			
			$office_coa_update = array(
				'application_id'	=>$id,
				'coa_off_dof_visit'	=>$coa_off_dof_visit,	
				'coa_off_tof_visit'	=>$coa_off_tof_visit,	
				'coa_off_name_app'	=>$coa_off_name_app,	
				'coa_off_address'	=>$coa_off_address,	
				'coa_type_of_employment' =>$coa_type_of_employment,	
				'coa_off_person_met' =>$coa_off_person_met,	
				'coa_applicant_post' =>$coa_applicant_post,	
				'other_coa_post' =>$other_coa_post,	
				'coa_working_since' =>$coa_working_since,	
				'coa_ownership_of_office' =>$coa_ownership_of_office,	
				'coa_off_num_years' =>$coa_off_num_years,	
				'coa_nature_of_business' =>$coa_nature_of_business,	
				'other_coa_nature' =>$other_coa_nature,	
				'coa_office_board_seen'	=>$coa_office_board_seen,	
				'coa_off_landmark'	=>$coa_off_landmark,	
				'coa_off_locating' =>$coa_off_locating,	
				'coa_number_of_employee' =>$coa_number_of_employee,	
				'coa_stock_level' =>$coa_stock_level,	
				'coa_business_sighted'  =>$coa_business_sighted,	
				'coa_business_activity' =>$coa_business_activity,	
				'coa_applicant_availed' =>$coa_applicant_availed,	
				'coa_business_con_by' =>$coa_business_con_by,	
				'coa_off_covid_zone' =>$coa_off_covid_zone,	
				'coa_impact_of_covid' =>$coa_impact_of_covid,	
				'coa_off_comments' =>$coa_off_comments,	
				
				);
				$checkId = $this->web_model->check_office_coaID($id);
				
				if(count($checkId) > 0)
				{
					$this->web_model->office_coa_update($office_coa_update,$id);
				}
				else
				{
					$this->web_model->office_coa_insert($office_coa_update);
				}
		}
				$validator['success'] = true;
                $validator['messages'] = 'Successfully';
                $validator['application1'] = $id;
				
				echo json_encode($validator);
	}
	
	function edit_form_three($id)
	{
		if($this->session->userdata('isUserLoggedIn'))
		{
		$data = array();
		
		//Fetch applicant detail from the data base.
		$data['applicant_id']= $this->web_model->get_applicant_id($id);
		$data['applicant_doc']= $this->web_model->get_applicant_doc($id);
		
		$data['page_title'] = 'Loan Verification';
	    $data['body_setting'] = '';
		$data['body'] = 'edit-form3';
		$this->load->view('template/main',$data);
		}
		else
		{
		redirect('index');
		}
	}
	
	function step_three_update()
	{
			$data = array();
			$id = $this->input->post('applicant_id');
			
		$config['upload_path']   = FCPATH.'assets/site/images';
		$config['allowed_types'] = 'jpg|gif|png|jpeg|JPG|PNG'; /* jpg|gif|png|jpeg|JPG|PNG */
		$config['max_size'] = 1024 * 8;
		$config['encrypt_name'] = TRUE;		 
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		
		
		//echo $id;
		$page_d= $this->db->query("SELECT * FROM loan_document WHERE application_id = '$id'")->result_array();
		//print_r($page_d);
		//exit;
		
		if ( ! $this->upload->do_upload('doc1')) 
		{
			$emp_in_image=$this->upload->display_errors();
			$image1=$page_d[0]['doc1'];
			
		}
		else 
		{ 
			$data = array('upload_data' => $this->upload->data());
	        $image1 = $data['upload_data']['file_name']; 
			
		}
						
		if ( ! $this->upload->do_upload('doc2')) 
		{
			$emp_in_image=$this->upload->display_errors();
			$image2=$page_d[0]['doc2'];
		}
		else 
		{ 
			$data = array('upload_data' => $this->upload->data());
	        $image2 = $data['upload_data']['file_name']; 
	    }
		
		if ( ! $this->upload->do_upload('doc3')) 
		{
			$emp_in_image=$this->upload->display_errors();
			$image3=$page_d[0]['doc3'];
		}
		else 
		{ 
			$data = array('upload_data' => $this->upload->data());
	        $image3 = $data['upload_data']['file_name']; 
	    }
		
		if ( ! $this->upload->do_upload('doc4')) 
		{
			$emp_in_image=$this->upload->display_errors();
			$image4=$page_d[0]['doc4'];
		}
		else 
		{ 
			$data = array('upload_data' => $this->upload->data());
	        $image4 = $data['upload_data']['file_name']; 
	    }
			
			$doc_update = array(
				'application_id'	=>$id,
				'doc1' => $image1, 
				'doc2' => $image2,
				'doc3' => $image3,
				'doc4' => $image4,
				);
			
				$checkId = $this->web_model->check_docID($id);
				
				if(count($checkId) > 0)
				{
					$step3 = $this->web_model->doc_update($doc_update,$id);
				}
				else
				{
					$step3 = $this->web_model->doc_insert($doc_update);
				}
			
				$validator['success'] = true;
                $validator['messages'] = 'Successfully';
                $validator['application'] = $step3;
				echo json_encode($validator);
	}
	
	function remove_post_by_user()
	{
		$data = array();
		$id = $this->input->post('postid');
		
		$this->web_model->applicant_del($id);
		$this->web_model->applicant_tele_del($id);
		$this->web_model->co_applicant_del($id);
		
		$this->web_model->co_applicant_tele_del($id);
		$this->web_model->applicant_office_del($id);
		$this->web_model->co_applicant_office_del($id);
		
		$this->web_model->doc_update_del($id);
		echo '1';
	}
	
	function change_application_status()
	{
		$action_type = $this->input->post('action_type');
		$status_id = $this->input->post('status_id'); 
		
		$getdata = explode('-', $status_id);
		
		$status_id = $getdata[0];
		$appointment_id = $getdata[1];
		
		$reg_date = date('Y-m-d h:i:s');
		$user = $this->web_model->getRows(array('id'=>$this->session->userdata('userId')));
		
		if($action_type=='update'){
			 
			
			$update_data = array('status'=>$status_id, 
										);
			$query = $this->web_model->update_status($update_data,$appointment_id);
			
			 
			
			echo 'true';
            
		}else 
		{
			echo 'false';
		}
	}
	
	function search_by_date()
	{
		$datepickerfrom = $this->input->post('datepickerfrom');
		$datepickerto = $this->input->post('datepickerto');
		
		$search = $this->web_model->search_model($datepickerfrom,$datepickerto);
	?>
	
	 <table class="table table-striped table-bordered table-hover dataTables-example" id="search_data">
		
	



                <thead>
					<th>S.No.</th>
                    <th style="width: 110px;"><b>File.No.</b></th>
                    <th style="width: 110px;"><b>Application Id</b></th>
                    <th style="width: 200px;"><b>Customer Name</b></th>
                    <th style="width: 150px;"><b>Mobile No.</b></th>
                    <th style="width: 150px;"><b>Date</b></th>
                    <th><b>Status</b></th>
                    <th><b>Action</b></th>
                  </thead>

                <tbody>
				<?php 
				$i = 1;
				 foreach($search as $row) { 
				 
				 $row1 = $this->web_model->get_applicant_id($row['application_id']);
				 ?>
                        <tr>
							<td><?php echo $i; ?></td>
                            <td><?php echo $row1[0]['file_no'] ?></td>
                           <td> <?php echo $row['application_id'] ?> </td>
                            <td><a href="view-print/<?php echo $row['application_id'] ?>" target="_blank"><?php echo $row['tele_nof_app']; ?></a></td>
                            <td><?php echo $row['tele_cont_no'] ?></td>
                            <td><?php echo $row['tele_dof_visit'] ?></td>
                            <td>
	<select  name="change_status" id="change_status" class="form-control change_status changestatus<?php echo $row['application_id']; ?> view-driver" required="">
								
		
		<option value="0-<?php echo $row['application_id']; ?>" <?php if($row1[0]['status']=='0'){ echo 'selected';} ?>>Pending</option>
		
		<option value="1-<?php echo $row['application_id']; ?>" <?php if($row1[0]['status']=='1'){ echo 'selected';} ?>>Completed</option>
		
		<option value="2-<?php echo $row['application_id']; ?>" <?php if($row1[0]['status']=='2'){ echo 'selected';} ?>>Rejected</option>
								 				 
				</select>
						
							</td>
                        <td><a href="javascript:void(0)"><button     class="btn btn-block btn-danger" id="<?php echo $row['application_id'] ?>" onclick="remove_post_by_user(this.id)" >Delete</button></a></td>
                       
                        </tr>
				<?php $i++; } ?>
                        
                        

                    </tbody>
                </table>
	
		<script>
		$(document).ready(function() {
		$('#search_data').DataTable();
		} );
		</script>
		<?php
		
		
		
	}
	function change_profile()
	{
		if($this->session->userdata('isUserLoggedIn'))
		{
		$data = array();
		
		$admin = $this->session->userdata('userId');
		/* print_r($admin);
		exit; */
		
		//Fetch applicant detail from the data base.
		$data['change_user']= $this->web_model->get_user($admin);
		/* print_r($data['change_user']);
		exit; */
		
		
		$data['page_title'] = 'Loan Verification';
	    $data['body_setting'] = '';
		$data['body'] = 'change-profile';
		$this->load->view('template/main',$data);
		}
		else
		{
		redirect('index');
		}
	}
	
	public function update_user_profile()
	{
		

		$admin = $this->session->userdata('userId');
	
					$uname = $this->input->post("uname"); 
					
			       $pwd=$this->input->post("pwd"); 
			       $npwd=$this->input->post("newpwd"); 
				  //$adminuser=$this->input->post("adminuser"); 
			 
				  $checkpwd =sha1($pwd);
				  
					$results = $this->web_model->check_user_profile($checkpwd,$admin['id']);
					//echo count($results);
					
					 if(count($results) >0 ){
						
						$updatepwd=array(
								 
								 "user_name"	=>$uname, 
								 "password"		=>sha1($npwd), 
								 //"opwd"=>$npwd, 
								 );
								$user = $this->web_model->update_user_profile($updatepwd,$admin['id']);
								
						echo '1';
					}
					else {
						echo '0';
					} 
	}
}
