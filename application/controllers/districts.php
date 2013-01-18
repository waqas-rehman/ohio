<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Districts extends CI_Controller
{
	public function __construct()
    {
    	parent::__construct();
        if($this->session->userdata('logged_in') != TRUE)
			redirect(base_url("home")) ;
    }
	
	public function index($msg = 0)
	{
		$data["district_recs"] = $this->model1->get_all("districts") ;
		$data["view"] = "districts/index" ;
		$data["session_data"] = $this->session_data("", $msg) ;
		$this->load->view("template/body", $data);
	}
	
	public function add_district($msg = 0)
	{
		$data["state_recs"] = $this->model1->get_all_cond(array("state_status" => "Active"),"states") ;
		
		$data["view"] = "districts/add_district" ;
		$data["session_data"] = $this->session_data("add_district", $msg) ;
		$this->load->view("template/body", $data);
	}
	
	public function insert_district($msg = 0)
	{
		if($_POST)
		{
			$validation_parameter = array("district_name" => "District Name&required",
										  "district_code" => "District Code&required",
										  "state_id" => "State&required",
										  "district_contact_first_name" => "District Contact First Name&required",
										  "district_contact_last_name" => "District Contact Last Name&required",
										  "district_contact_email" => "District Contact Email&required|valid_email",
										  "district_status" => "District Status&required") ;
			
			if (form_validation_function($validation_parameter) == FALSE)
			{
				$data["state_recs"] = $this->model1->get_all_cond(array("state_status" => "Active"),"states") ;
				$data["view"] = "districts/add_district" ;
				$data["session_data"] = $this->session_data("add_district", "1") ;
				$this->load->view("template/body", $data) ;
			}
			else
			{
				$param1 = post_function(array("district_name" => "district_name", "district_code" => "district_code", "state_id" => "state_id", "district_contact_first_name" => "district_contact_first_name", "district_contact_last_name" => "district_contact_last_name", "district_contact_email" => "district_contact_email", "district_status" => "district_status")) ;
				
				$rec_id = $this->model1->insert_rec($param1, "districts") ;
				
				if($rec_id) redirect(base_url("districts/edit_district/".encoded_string($rec_id, "&", 10)."/2")) ;
				else redirect(base_url("districts/add_district/2")) ;
			}
		}
		else
			redirect(base_url("districts")) ;
	}
	
	public function send_message($encoded_district_id, $msg = 0)
	{
		if($encoded_district_id)
		{
			$data["district_rec"] = $this->model1->inner_join(array("district_id", "district_name", "district_code", "district_contact_first_name", "district_contact_last_name", "district_admin_password", "district_contact_email", "district_status"), array("state_id","state_name","state_code"), array("district_id" => decoded_string($encoded_district_id, "&")), array("state_status" => "Active"), "state_id", "state_id", "districts", "states") ;
			
			$data["view"] = "districts/send_message" ;
			$data["session_data"] = $this->session_data("", $msg) ;
			$this->load->view("template/body", $data);
		
		} else
			redirect(base_url("districts")) ;
	}
	
	public function deliver_message($msg = 0)
	{
		if($_POST)
		{
			$validation_parameter = array("email_address" => "Email Address(es)&required|valid_emails",
										  "email_cc" => "CC Email Address(es)&valid_emails",
										  "email_bcc" => "BCC Email Address(es)&valid_emails",
										  "email_subject" => "Email Subject&required",
										  "email_message" => "Email Message&required") ;
			
			if (form_validation_function($validation_parameter) == FALSE)
			{
				$data["district_rec"] = $this->model1->inner_join(array("district_id", "district_name", "district_code", "district_contact_first_name", "district_contact_last_name", "district_admin_password", "district_contact_email", "district_status"), array("state_id","state_name","state_code"), array("district_id" => decoded_string(post_function("district_id"), "&")), array("state_status" => "Active"), "state_id", "state_id", "districts", "states") ;
				
				$data["view"] = "districts/send_message" ;
				$data["session_data"] = $this->session_data("", "1") ;
				$this->load->view("template/body", $data);
			}
			else
			{
				$param = post_function(array("email_address" => "email_address",
											 "email_cc" => "email_cc",
											 "email_bcc" => "email_bcc",
											 "email_subject" => "email_subject",
											 "email_message" => "email_message")) ;
				
				if($param["email_cc"] == "") $param["email_cc"] = 0 ;
				if($param["email_bcc"] == "") $param["email_bcc"] = 0 ;
				
				$response = upload_file("email_file", "email_attachments") ;
				
				if($response["result"])
				{
					rename(get_root_path("email_attachments").$response["encripted_file_name"], get_root_path("email_attachments").$response["original_file_name"]) ;
					
					$email_flag = send_message("ProCore", $param["email_address"], $param["email_cc"], $param["email_bcc"], $param["email_subject"], $param["email_message"], $response["encripted_file_name"], $response["original_file_name"], $response["file_extention"], "email_attachments") ;
					
					rename(get_root_path("email_attachments").$response["original_file_name"], get_root_path("email_attachments").$response["encripted_file_name"]) ;
					unlink(get_root_path("email_attachments").$response["encripted_file_name"]) ;
				}
				else
					$email_flag = send_email_message("ProCore", $param["email_address"], $param["email_cc"], $param["email_bcc"], $param["email_subject"], $param["email_message"], 0, "email_attachments") ;
					
					if($email_flag) redirect(base_url("districts/index/5")) ;
					else redirect(base_url("districts/index/6")) ;
			}
		}
		else
			redirect(base_url("districts")) ;
	}
	
	public function change_password($encoded_district_id, $msg = 0)
	{
		if($encoded_district_id)
		{
			$data["district_rec"] = $this->model1->inner_join(array("district_id", "district_name", "district_code", "district_contact_first_name", "district_contact_last_name", "district_admin_password", "district_contact_email", "district_status"), array("state_id","state_name","state_code"), array("district_id" => decoded_string($encoded_district_id, "&")), array("state_status" => "Active"), "state_id", "state_id", "districts", "states") ;
			
			$data["view"] = "districts/change_password" ;
			$data["session_data"] = $this->session_data("", $msg) ;
			$this->load->view("template/body", $data);
		
		} else
			redirect(base_url("districts")) ;
	}
	
	public function update_password($msg = 0)
	{
		if($_POST)
		{
			$validation_parameter = array("password" => "Password&required|matches[confirm_password]",
										  "confirm_password" => "Confirm Password&required|matches[password]") ;
			
			if (form_validation_function($validation_parameter) == FALSE)
			{
				$data["district_rec"] = $this->model1->inner_join(array("district_id", "district_name", "district_code", "district_contact_first_name", "district_contact_last_name", "district_admin_password", "district_contact_email", "district_status"), array("state_id","state_name","state_code"), array("district_id" => decoded_string(post_function("district_id"), "&")), array("state_status" => "Active"), "state_id", "state_id", "districts", "states") ;
			
				$data["view"] = "districts/change_password" ;
				$data["session_data"] = $this->session_data("", "1") ;
				$this->load->view("template/body", $data);				
			}
			
			else
			{
				$param1 = post_function(array("district_admin_password" => "password")) ;
				$cond1 = decoded_string(post_function("district_id"), "&") ;
				$res = $this->model1->update_rec($param1, $cond1, "districts") ;
				
				if($res) redirect( base_url("districts/change_password/".encoded_string($cond1["district_id"], "&", 10))."/2") ;
				else redirect(base_url("districts/change_password/".encoded_string($cond1["district_id"], "&", 10))."/3") ;
			}
		}
		
		else
			redirect(base_url("districts")) ;
	}
	
	public function view_district($encoded_district_id, $msg = 0)
	{
		if($encoded_district_id)
		{
			$data["district_rec"] = $this->model1->inner_join(array("district_id", "district_name", "district_code", "district_contact_first_name", "district_contact_last_name", "district_admin_password", "district_contact_email", "district_status"), array("state_id","state_name","state_code"), array("district_id" => decoded_string($encoded_district_id, "&")), array("state_status" => "Active"), "state_id", "state_id", "districts", "states") ;
			
			$data["state_recs"] = $this->model1->get_all_cond(array("state_status" => "Active"),"states") ;
			
			$data["view"] = "districts/view_district" ;
			$data["session_data"] = $this->session_data("", $msg) ;
			$this->load->view("template/body", $data);
		
		}
		else
			redirect(base_url("districts")) ;
	}
	
	public function edit_district($encoded_district_id, $msg = 0)
	{
		if($encoded_district_id)
		{
			$data["district_rec"] = $this->model1->inner_join(array("district_id", "district_name", "district_code", "district_contact_first_name", "district_contact_last_name", "district_admin_password", "district_contact_email", "district_status"), array("state_id","state_name","state_code"), array("district_id" => decoded_string($encoded_district_id, "&")), array("state_status" => "Active"), "state_id", "state_id", "districts", "states") ;
			
			$data["state_recs"] = $this->model1->get_all_cond(array("state_status" => "Active"),"states") ;
			
			$data["view"] = "districts/edit_district" ;
			$data["session_data"] = $this->session_data("", $msg) ;
			$this->load->view("template/body", $data);
		
		} else
			redirect(base_url("districts")) ;
	}
	
	public function update_district($msg = 0)
	{
		if($_POST)
		{
			$validation_parameter = array("district_name" => "District Name&required",
										  "district_code" => "District Code&required",
										  "state_id" => "State&required",
										  "district_contact_first_name" => "District Contact First Name&required",
										  "district_contact_last_name" => "District Contact Last Name&required",
										  "district_contact_email" => "District Contact Email&required|valid_email",
										  "district_status" => "District Status&required") ;
					
			if (form_validation_function($validation_parameter) == FALSE)
			{
				$data["district_rec"] = $this->model1->inner_join(array("district_id", "district_name", "district_code", "district_contact_first_name", "district_contact_last_name", "district_admin_password", "district_contact_email", "district_status"), array("state_id","state_name","state_code"), array("district_id" => decoded_string(post_function("district_id"), "&")), array("state_status" => "Active"), "state_id", "state_id", "districts", "states") ;
			
				$data["state_recs"] = $this->model1->get_all_cond(array("state_status" => "Active"),"states") ;
				
				$data["view"] = "districts/edit_district" ;
				$data["session_data"] = $this->session_data("", "1") ;
				$this->load->view("template/body", $data);				
			}
			
			else
			{
				$param1 = post_function(array("district_name" => "district_name", "district_code" => "district_code", "state_id" => "state_id", "district_contact_first_name" => "district_contact_first_name", "district_contact_last_name" => "district_contact_last_name", "district_contact_email" => "district_contact_email", "district_status" => "district_status")) ;
				
				$cond1["district_id"] = decoded_string(post_function("district_id"), "&") ;
				
				$res = $this->model1->update_rec($param1, $cond1, "districts") ;
				
				if($res) redirect(base_url("districts/index/1")) ;
				else redirect(base_url("districts/index/2")) ;
			}
		}
		
		else
			redirect(base_url("districts")) ;
	}
	
	public function remove_district($encoded_district_id)
	{
		if($encoded_district_id)
		{
			$cond1["district_id"] = decoded_string($encoded_district_id, "&") ;
			$res1 = $this->model1->delete_rec($cond1, "districts") ;
			
			if($res1) redirect(base_url("districts/index/3")) ;
			else redirect(base_url("districts/index/4")) ;
		
		} else
			redirect(base_url("districts")) ;
	}
	
	private function session_data($submenu, $error_msg)
	{
		$session_data["top_menu"] = "school_management" ;
		$session_data["menu"] = "districts" ;
		$session_data["submenu"] = $submenu ;
		$session_data["msg"] = $error_msg ;
		$session_data["full_display"] = true ;
		return $session_data ; 
	}
}