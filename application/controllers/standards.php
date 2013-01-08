<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Standards extends CI_Controller
{
	public function __construct()
    {
    	parent::__construct();
        if($this->session->userdata('logged_in') != TRUE)
			redirect(base_url("home")) ;
    }
	
	public function index($msg = 0)
	{
		$data["standard_recs"] = $this->model1->get_all("standards") ;
		
		$data["view"] = "standards/index" ;
		$data["session_data"] = $this->session_data("", $msg) ;
		$this->load->view("template/body", $data);
	}
	
	public function view_standard($encoded_standard_id, $msg = 0)
	{
		if($encoded_standard_id)
		{
			$data["standard_rec"] = $this->model1->inner_join(array("standard_id", "standard_subject", "standard_grade", "standard_pc_domain_code", "standard_domain_description", "standard_pc_standard_number", "standard_learning_standard_description", "standard_status"), array("subject_id","subject_name"), array("standard_id" => decoded_string($encoded_standard_id, "&")), array("subject_status" => "Active"), "standard_subject", "subject_id", "standards", "subjects") ;
				
			$data["subject_recs"] = $this->model1->get_all_cond(array("subject_status" => "Active"), "subjects") ;
			
			$data["view"] = "standards/view_standard" ;
			$data["session_data"] = $this->session_data("", $msg) ;
			$this->load->view("template/body", $data) ;
		}
		else
			redirect(base_url("districts")) ;
	}
	
	public function add_standard($msg = 0)
	{
		$data["subject_recs"] = $this->model1->get_all_cond(array("subject_status" => "Active"), "subjects") ;
		
		$data["view"] = "standards/add_standard" ;
		$data["session_data"] = $this->session_data("add_standard", $msg) ;
		$this->load->view("template/body", $data);
	}
	
	public function insert_standard($msg = 0)
	{
		if($_POST)
		{
			$validation_parameter = array("standard_subject" => "Standard Subject&required",
										  "standard_grade" => "Standard Grade&required",
										  "standard_pc_domain_code" => "Pro-Core Domain Code&required",
										  "standard_domain_description" => "Domain Description&required",
										  "standard_pc_standard_number" => "Pro-Core Standard Number&required",
										  "standard_learning_standard_description" => "Learning Standard Description&required") ; 
			
			if(form_validation_function($validation_parameter) == FALSE)
			{
				$data["subject_recs"] = $this->model1->get_all_cond(array("subject_status" => "Active"), "subjects") ;
		
				$data["view"] = "standards/add_standard" ;
				$data["session_data"] = $this->session_data("add_standard", "1") ;
				$this->load->view("template/body", $data);
			}
			
			else
			{
				$param1 = post_function(array("standard_subject" => "standard_subject",
													 "standard_grade" => "standard_grade",
													 "standard_pc_domain_code" => "standard_pc_domain_code",
													 "standard_domain_description" => "standard_domain_description",
													 "standard_pc_standard_number" => "standard_pc_standard_number",
													 "standard_learning_standard_description" => "standard_learning_standard_description",
													 "standard_status" => "standard_status")) ;
				
				$rec_id = $this->model1->insert_rec($param1, "standards") ;
				
				if($rec_id) redirect(base_url("standards/edit_standard/".encoded_string($rec_id, "&", 10)."/2")) ;
				else redirect(base_url("standards/add_standard/2")) ;
			}
		}
		else
			redirect(base_url("standards")) ;
	}
	
	public function edit_standard($encoded_standard_id, $msg = 0)
	{
		if($encoded_standard_id)
		{
			$data["standard_rec"] = $this->model1->inner_join(array("standard_id", "standard_subject", "standard_grade", "standard_pc_domain_code", "standard_domain_description", "standard_pc_standard_number", "standard_learning_standard_description", "standard_status"), array("subject_id","subject_name"), array("standard_id" => decoded_string($encoded_standard_id, "&")), array("subject_status" => "Active"), "standard_subject", "subject_id", "standards", "subjects") ;
			
			$data["subject_recs"] = $this->model1->get_all_cond(array("subject_status" => "Active"), "subjects") ;
			
			 $data["view"] = "standards/edit_standard" ;
			$data["session_data"] = $this->session_data("", $msg) ;
			$this->load->view("template/body", $data) ;
		}
		else
			redirect(base_url("standards")) ;
	}
	
	public function update_standard($msg = 0)
	{
		if($_POST)
		{
			$validation_parameter = array("standard_subject" => "Standard Subject&required",
										  "standard_grade" => "Standard Grade&required",
										  "standard_pc_domain_code" => "Pro-Core Domain Code&required",
										  "standard_domain_description" => "Domain Description&required",
										  "standard_pc_standard_number" => "Pro-Core Standard Number&required",
										  "standard_learning_standard_description" => "Learning Standard Description&required") ; 
			
			if(form_validation_function($validation_parameter) == FALSE)
			{
				$data["standard_rec"] = $this->model1->inner_join(array("standard_id", "standard_subject", "standard_grade", "standard_pc_domain_code", "standard_domain_description", "standard_pc_standard_number", "standard_learning_standard_description", "standard_status"), array("subject_id","subject_name"), array("standard_id" => decoded_string(post_function("standard_id"), "&")), array("subject_status" => "Active"), "standard_subject", "subject_id", "standards", "subjects") ;
				
				$data["subject_recs"] = $this->model1->get_all_cond(array("subject_status" => "Active"), "subjects") ;
				
				$data["view"] = "standards/edit_standard" ;
				$data["session_data"] = $this->session_data("", "1") ;
				$this->load->view("template/body", $data) ;
			}
			
			else
			{
				$param1 = post_function(array("standard_subject" => "standard_subject",
													 "standard_grade" => "standard_grade",
													 "standard_pc_domain_code" => "standard_pc_domain_code",
													 "standard_domain_description" => "standard_domain_description",
													 "standard_pc_standard_number" => "standard_pc_standard_number",
													 "standard_learning_standard_description" => "standard_learning_standard_description",
													 "standard_status" => "standard_status")) ;
				
				$cond1["standard_id"] = decoded_string($this->single_post_function("standard_id"), "&") ;
				
				$res = $this->model1->update_rec($param1, $cond1, "standards") ;
				
				if($res) redirect(base_url("standards/index/1")) ;
				else redirect(base_url("standards/index/2")) ;
			}
		}
		else
			redirect(base_url("standards")) ;
	}
	
	public function remove_standard($encoded_standard_id)
	{
		if($encoded_standard_id)
		{
			$cond1["standard_id"] = decoded_string($encoded_standard_id, "&") ;
			$res1 = $this->model1->delete_rec($cond1, "standards") ;
			
			if($res1) redirect(base_url("standards/index/3")) ;
			else redirect(base_url("standards/index/4")) ;
		
		}
		else
			redirect(base_url("standards")) ;
	}
	
	private function session_data($submenu, $error_msg)
	{
		$session_data["top_menu"] = "test_management" ;
		$session_data["menu"] = "standards" ;
		$session_data["submenu"] = $submenu ;
		$session_data["msg"] = $error_msg ;
		$session_data["full_display"] = true ;
		return $session_data ; 
	}
}