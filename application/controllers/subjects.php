<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Subjects extends CI_Controller
{
	public function __construct()
    {
    	parent::__construct();
        if($this->session->userdata('logged_in') != TRUE)
			redirect(base_url("home")) ;
    }
	
	public function index($msg = 0)
	{
		$data["subject_recs"] = $this->model1->get_all("subjects") ;
		
		$data["view"] = "subjects/index" ;
		$data["session_data"] = $this->session_data("", $msg) ;
		$this->load->view("template/body", $data);
	}
	
	public function add_subject($msg = 0)
	{
		$data["view"] = "subjects/add_subject" ;
		$data["session_data"] = $this->session_data("add_subject", $msg) ;
		$this->load->view("template/body", $data);
	}
	
	public function insert_subject($msg = 0)
	{
		if($_POST)
		{
			$validation_parameter = array("subject_name" => "Subject Name&required",
										  "subject_status" => "Subject Status&required") ; 
			
			if(form_validation_function($validation_parameter) == FALSE)
			{
				$data["view"] = "subjects/add_subject" ;
				$data["session_data"] = $this->session_data("add_subject", "1") ;
				$this->load->view("template/body", $data);
			}
			else
			{
				$param1 = post_function(array("subject_name" => "subject_name",
											  "subject_status" => "subject_status")) ;
				
				$rec_id = $this->model1->insert_rec($param1, "subjects") ;
				
				if($rec_id) redirect(base_url("subjects/edit_subject/".encoded_string($rec_id, "&", 10)."/2")) ;
				else redirect(base_url("subjects/add_subject/2")) ;
			}
		}
		
		else
			redirect(base_url("subjects")) ;
	}
	
	public function edit_subject($encoded_state_id, $msg = 0)
	{
		if($encoded_state_id)
		{
			$cond1["subject_id"] = decoded_string($encoded_state_id, "&") ;
			$data["subject_rec"] = $this->model1->get_one($cond1, "subjects") ;
			
			$data["view"] = "subjects/edit_subject" ;
			$data["session_data"] = $this->session_data("", $msg) ;
			$this->load->view("template/body", $data);
		}
		else
			redirect(base_url("subjects")) ;
	}
	
	public function update_subject($msg = 0)
	{
		if($_POST)
		{
			$validation_parameter = array("subject_name" => "Subject Name&required",
										  "subject_status" => "Subject Status&required") ; 
			
			if(form_validation_function($validation_parameter) == FALSE)
			{
				$cond1["subject_id"] = decoded_string(post_function("subject_id"), "&") ;
				$data["subject_rec"] = $this->model1->get_one($cond1, "subjects") ;
				
				$data["view"] = "subjects/edit_subject" ;
				$data["session_data"] = $this->session_data("", "1") ;
				$this->load->view("template/body", $data) ;	
			}
			else
			{
				$cond1["subject_id"] = decoded_string(post_function("subject_id"), "&") ;
				
				$param1 = post_function(array("subject_name" => "subject_name",
											  "subject_status" => "subject_status")) ;
				
				$res1 = $this->model1->update_rec($param1, $cond1, "subjects") ;
				
				if($res1) redirect(base_url("subjects/index/1")) ;
				else redirect(base_url("subjects/index/2")) ;
			}
		}
		
		else
			redirect(base_url("subjects")) ;
	}
	
	public function remove_subject($encoded_subject_id)
	{
		if($encoded_subject_id)
		{
			$cond1["subject_id"] = decoded_string($encoded_subject_id, "&") ;
			$res1 = $this->model1->delete_rec($cond1, "subjects") ;
			
			if($res1) redirect(base_url("subjects/index/3")) ;
			else redirect(base_url("subjects/index/4")) ;
		
		} 
		else
			redirect(base_url("subjects")) ;
	}
	
	private function session_data($submenu, $error_msg)
	{
		$session_data["top_menu"] = "test_management" ;
		$session_data["menu"] = "subjects" ;
		$session_data["submenu"] = $submenu ;
		$session_data["msg"] = $error_msg ;
		$session_data["full_display"] = true ;
		return $session_data ; 
	}
}