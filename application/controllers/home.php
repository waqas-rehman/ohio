<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed') ;

class Home extends CI_Controller
{	
	public function index($error = 0)
	{
		if($this->session->userdata('logged_in') == TRUE)
			redirect(base_url("dashboard")) ;
		else
		{
			$data["error"] = $error ;
			$this->load->view("login/index", $data) ;
		}
	}
	
	public function login()
	{
		if($_POST)
		{
			$validation_parameter = array("username" => "Username&required", "password" => "Password&required") ;
			
			if(form_validation_function($validation_parameter) == FALSE)
			{
				$data["error"] = 1 ;
				$this->load->view("login/index", $data) ;	
			}
			else
			{
				$cond = post_function(array("user_login_username" => "username", "user_login_password" => "password")) ;
				$cond["user_login_status"] = "Active" ;
				$res = $this->model1->get_one($cond, "user_logins") ;
				if($res)
				{
					$this->initialize_session($res) ;
					redirect(base_url("dashboard")) ;
				}
				else
					redirect(base_url("home/index/2")) ;
			}
		}
		else
			redirect("home/index") ;
	}
	
	public function logout()
	{
		$this->destroy_session() ;
		redirect(base_url("home")) ;
	}
	
	private function initialize_session($param)
	{
		$session_data = array('user_id' => $param->user_login_id,
							  'username' => $param->user_login_username,
							  'password' => $param->user_login_password,
							  'logged_in' => TRUE) ;

		$this->session->set_userdata($session_data);
	}
	
	private function destroy_session()
	{
		$this->session->unset_userdata('user_id') ;
		$this->session->unset_userdata('username') ;
		$this->session->unset_userdata('password') ;
		$this->session->unset_userdata('logged_in') ;
	}
}