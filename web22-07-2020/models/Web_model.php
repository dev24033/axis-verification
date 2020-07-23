<?php 
if( ! defined('BASEPATH')) exit('No direct script access allowed');


class web_model extends CI_Model 
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
        $this->primaryKey = 'id';
	}
	
		function getRows($params = array())
	{
        $this->db->select('*');
        $this->db->from('admin');
        
        //fetch data by conditions
        if(array_key_exists("conditions",$params)){
            foreach ($params['conditions'] as $key => $value) {
                $this->db->where($key,$value);
            }
        }
        
        if(array_key_exists("id",$params)){
            $this->db->where('id',$params['id']);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            //set start and limit
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            $query = $this->db->get();
            if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){
                $result = $query->num_rows();
            }elseif(array_key_exists("returnType",$params) && $params['returnType'] == 'single'){
                $result = ($query->num_rows() > 0)?$query->row_array():FALSE;
            }else{
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
            }
        }

        //return fetched data
        return $result;
    }
	
	function mem_insert($data = array()) 
	{
        
        $insert = $this->db->insert('loan_application', $data);
         
        if($insert){
            return $this->db->insert_id();;
        }else{
            return false;
        }
    }
	
	function tele_insert($data = array()) 
	{
        
        $insert = $this->db->insert('tele_verification', $data);
         
        if($insert){
            return $this->db->insert_id();;
        }else{
            return false;
        }
    }
	function coa_insert($data = array()) 
	{
        
        $insert = $this->db->insert('co_applicant', $data);
         
        if($insert){
            return $this->db->insert_id();;
        }else{
            return false;
        }
    }
	
	function coa_tele_insert($data = array())
	{
		$insert = $this->db->insert('coa_tele_verification', $data);
         
        if($insert){
            return $this->db->insert_id();;
        }else{
            return false;
        }
	}
	
	function office_insert($data = array())
	{
		$insert = $this->db->insert('office_verification', $data);
         
        if($insert){
            return $this->db->insert_id();;
        }else{
            return false;
        }
	}
	
	function office_coa_insert($data = array())
	{
		$insert = $this->db->insert('office_co_applicant', $data);
         
        if($insert){
            return $this->db->insert_id();;
        }else{
            return false;
        }
	}
	
	function doc_insert($data = array())
	{
		$insert = $this->db->insert('loan_document', $data);
         
        if($insert){
            return $this->db->insert_id();;
        }else{
            return false;
        }
	}
	function get_applicant()
	{
		$this->db->select('*');
		$this->db->from('tele_verification');
		$this->db->order_by('application_id','desc');
		$query = $this->db->get();
		return $result = $query->result_array(); 
		
	}
	
	function get_applicant_detail($aid)
	{
		$this->db->select('*');
		$this->db->where('application_id',$aid);
		$this->db->from('tele_verification');
		$this->db->order_by('application_id','desc');
		$query = $this->db->get();
		return $result = $query->result_array(); 
		
	}
	
	
	function get_applicant_sts0()
	{
		$this->db->select('*');
		$this->db->where('status','0');
		$this->db->from('loan_application');
		$this->db->order_by('application_id','desc');
		$query = $this->db->get();
		return $result = $query->result_array(); 
		
	}
	function get_applicant_sts1()
	{
		$this->db->select('*');
		$this->db->where('status','1');
		$this->db->from('loan_application');
		$this->db->order_by('application_id','desc');
		$query = $this->db->get();
		return $result = $query->result_array(); 
		
	}
	function get_applicant_sts2()
	{
		$this->db->select('*');
		$this->db->where('status','2');
		$this->db->from('loan_application');
		$this->db->order_by('application_id','desc');
		$query = $this->db->get();
		return $result = $query->result_array(); 
		
	}
	
	function get_applicant_id($id)
	{
		$this->db->select('*');
		$this->db->from('loan_application');
		$this->db->where('application_id',$id);
		$query = $this->db->get();
		return $result = $query->result_array(); 
		
	}
	
	function get_applicant_tele($id)
	{
		$this->db->select('*');
		$this->db->from('tele_verification');
		$this->db->where('application_id',$id);
		$query = $this->db->get();
		return $result = $query->result_array(); 
		
	}
	
	function get_co_applicant($id)
	{
		$this->db->select('*');
		$this->db->from('co_applicant');
		$this->db->where('application_id',$id);
		$query = $this->db->get();
		return $result = $query->result_array(); 
	}
	
	function get_co_applicant_tele($id)
	{
		$this->db->select('*');
		$this->db->from('coa_tele_verification');
		$this->db->where('application_id',$id);
		$query = $this->db->get();
		return $result = $query->result_array(); 
	}
	
	function get_applicant_office($id)
	{
		$this->db->select('*');
		$this->db->from('office_verification');
		$this->db->where('application_id',$id);
		$query = $this->db->get();
		return $result = $query->result_array(); 
		
	}
	
	function get_co_applicant_office($id)
	{
		$this->db->select('*');
		$this->db->from('office_co_applicant');
		$this->db->where('application_id',$id);
		$query = $this->db->get();
		return $result = $query->result_array();
	}
	
	function get_applicant_doc($id)
	{
		$this->db->select('*');
		$this->db->from('loan_document');
		$this->db->where('application_id',$id);
		$query = $this->db->get();
		return $result = $query->result_array(); 
		
	}
	
	function mem_update($userData,$id)
	{
			   $this->db->where('application_id',$id);
		       $this->db->update('loan_application',$userData);
	}
	
	function tele_update($teledata,$id)
	{
			   $this->db->where('application_id',$id);
		       $this->db->update('tele_verification',$teledata);
	}
	
	function coa_update($coa_update,$id)
	{
			   $this->db->where('application_id',$id);
		       $this->db->update('co_applicant',$coa_update);
	}
	
	function coa_tele_update($coa_teledata_upd,$id)
	{
			   $this->db->where('application_id',$id);
		       $this->db->update('coa_tele_verification',$coa_teledata_upd);
	}
	
	function office_update($office_update,$id)
	{
		$this->db->where('application_id',$id);
		$this->db->update('office_verification',$office_update);
	}
	
	function office_coa_update($office_coa_update,$id)
	{
		$this->db->where('application_id',$id);
		$this->db->update('office_co_applicant',$office_coa_update);
	}
	
	function doc_update($doc_update,$id)
	{
		$this->db->where('application_id',$id);
		$this->db->update('loan_document',$doc_update);
	}
			// Delete data
	function applicant_del($id)
	{
		$this->db->where('application_id', $id);
  		$this->db->delete('loan_application');
	}
	 function applicant_tele_del($id)
	{
		$this->db->where('application_id', $id);
  		$this->db->delete('tele_verification');
	}
	function co_applicant_del($id)
	{
		$this->db->where('application_id', $id);
  		$this->db->delete('co_applicant');
	}
	function co_applicant_tele_del($id)
	{
		$this->db->where('application_id', $id);
  		$this->db->delete('coa_tele_verification');
	}
	function applicant_office_del($id)
	{
		$this->db->where('application_id', $id);
  		$this->db->delete('office_verification');
	}
	function co_applicant_office_del($id)
	{
		$this->db->where('application_id', $id);
  		$this->db->delete('office_co_applicant');
	}
	function doc_update_del($id)
	{
		$this->db->where('application_id', $id);
  		$this->db->delete('loan_document');
	} 
	
	function check_userlogin($loginemail,$loginpassword)
	{   
		$this->db->where('user_name',$loginemail); 
		$this->db->where('password',$loginpassword);
		//$this->db->where('status', '1');
		$query = $this->db->get('admin');
		return $query->result_array();

	}
	
	function update_status($update_data,$appointment_id)
	{
		$this->db->where('application_id',$appointment_id);
		$this->db->update('loan_application',$update_data);
	}
	
	function check_appID($id)
	{
		$this->db->where('application_id',$id);
		$query = $this->db->get('co_applicant');
		return $query->result_array(); 	
	}
	
	function check_teleID($id)
	{
		$this->db->where('application_id',$id);
		$query = $this->db->get('coa_tele_verification');
		return $query->result_array(); 	
	}
	function check_officeID($id)
	{
		$this->db->where('application_id',$id);
		$query = $this->db->get('office_verification');
		return $query->result_array(); 	
	}
	function check_office_coaID($id)
	{
		$this->db->where('application_id',$id);
		$query = $this->db->get('office_co_applicant');
		return $query->result_array(); 	
	}
	function check_docID($id)
	{
		$this->db->where('application_id',$id);
		$query = $this->db->get('loan_document');
		return $query->result_array(); 	
	}
	
	function search_model($from,$to)
	{
		$this->db->where('tele_dof_visit >=', $from);
		$this->db->where('tele_dof_visit <=', $to);
		$query = $this->db->get('tele_verification');
		$this->db->order_by('application_id','desc');
		return $query->result_array(); 
	}
	
	function get_user($admin)
	{
			$this->db->select('*');
			$this->db->from('admin');
			$this->db->Where('id',$admin);
			$query = $this->db->get();
			return $query->result_array(); 
	}
	function check_user_profile($userpassword,$id)
	{
			    $this->db->select('*');
				$this->db->Where('id',$id);
				$this->db->Where('password',$userpassword);
				$query = $this->db->get('admin');

				return $query->result_array();
	}
	
	function update_user_profile($save,$id)
	{
			   $this->db->where('id',$id);
		       $this->db->update('admin',$save);
	}
	
}