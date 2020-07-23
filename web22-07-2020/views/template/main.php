<?php

	$this->load->view('template/header');
	$this->load->view('template/sidebar');
	 if($this->session->userdata('isUserLoggedIn')){
            $user = $this->web_model->getRows(array('id'=>$this->session->userdata('userId')));
	} 
	
	
	$this->load->view($body);
	$this->load->view('template/footer');
		
?>