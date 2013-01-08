<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class States extends CI_Controller
{
	public function __construct()
    {
    	parent::__construct();
        if($this->session->userdata('logged_in') != TRUE)
			redirect(base_url("home")) ;
    }
	
	public function index($msg = 0)
	{
		$data["state_recs"] = $this->model1->get_all("states") ;
		
		$data["view"] = "states/index" ;
		$data["session_data"] = $this->session_data("", $msg) ;
		$this->load->view("template/body", $data);
	}
	
	public function add_state($msg = 0)
	{
		$data["view"] = "states/add_state" ;
		$data["session_data"] = $this->session_data("add_state", $msg) ;
		$this->load->view("template/body", $data);
	}
	
	public function insert_state($msg = 0)
	{
		if($_POST)
		{
			$validation_parameter = array("state_name" => "State Name&required",
										  "state_code" => "State Code&required",
										  "state_status" => "State Status&required") ;
			
			if (form_validation_function($validation_parameter) == FALSE)
			{
				$data["view"] = "states/add_state" ;
				$data["session_data"] = $this->session_data("add_state", "1") ;
				$this->load->view("template/body", $data);
			}
			else
			{
				$param1["state_name"] = post_function(array("state_name" => "state_name",
															"state_code" => "state_code",
															"state_status" => "state_status")) ;
				
				$rec_id = $this->model1->insert_rec($param1, "states") ;
				
				if($rec_id) redirect(base_url("states/edit_state/".encoded_string($rec_id, "&", 10)."/2")) ;
				else redirect(base_url("states/add_state/2")) ;
			}
		}
		else
			redirect(base_url("states")) ;
	}
	
	public function edit_state($encoded_state_id, $msg = 0)
	{
		if($encoded_state_id)
		{
			$cond1["state_id"] = decoded_string($encoded_state_id, "&") ;
			$data["state_rec"] = $this->model1->get_one($cond1, "states") ;
			
			$data["view"] = "states/edit_state" ;
			$data["session_data"] = $this->session_data("", $msg) ;
			$this->load->view("template/body", $data) ;
		}
		else
			redirect(base_url("states")) ;
	}
	
	public function update_state($msg = 0)
	{
		if($_POST)
		{
			$validation_parameter = array("state_name" => "State Name&required",
										  "state_code" => "State Code&required",
										  "state_status" => "State Status&required") ;
			
			if (form_validation_function($validation_parameter) == FALSE)
			{
				$cond1["state_id"] = decoded_string(mysql_real_escape_string($this->input->post("state_id")), "&") ;
				$data["state_rec"] = $this->model1->get_one($cond1, "states") ;
				
				$data["view"] = "states/edit_state" ;
				$data["session_data"] = $this->session_data("", "1") ;
				$this->load->view("template/body", $data) ;
			}
			else
			{
				$cond1["state_id"] = decoded_string(post_function("state_id"), "&") ;
				$param1 = post_function(array("state_name" => "state_name",
											  "state_code" => "state_code",
											  "state_status" => "state_status")) ;
				
				$res1 = $this->model1->update_rec($param1, $cond1, "states") ;
				
				if($res1) redirect(base_url("states/index/1")) ;
				else redirect(base_url("states/index/2")) ;
			}
		}
		else
			redirect(base_url("states")) ;
	}
	
	public function remove_state($encoded_state_id)
	{
		if($encoded_state_id)
		{
			$cond1["state_id"] = decoded_string($encoded_state_id, "&") ;
			$res1 = $this->model1->delete_rec($cond1, "states") ;
			
			if($res1) redirect(base_url("states/index/3")) ;
			else redirect(base_url("states/index/4")) ;
		}
		else
			redirect(base_url("states")) ;
	}
	
	private function session_data($submenu, $error_msg)
	{
		$session_data["top_menu"] = "school_management" ;
		$session_data["menu"] = "states" ;
		$session_data["submenu"] = $submenu ;
		$session_data["msg"] = $error_msg ;
		$session_data["full_display"] = true ;
		return $session_data ; 
	}
}