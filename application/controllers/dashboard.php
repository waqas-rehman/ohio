<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed') ;

class Dashboard extends CI_Controller
{
	public function __construct()
    {
    	parent::__construct();
        if($this->session->userdata('logged_in') != TRUE)
			redirect(base_url("home")) ;
	}
		
	public function index()
	{
		$data["view"] = "dashboard/index" ;
		$data["session_data"] = $this->session_data("", 0) ;
		$this->load->view("template/body", $data) ;
	}
	
	private function session_data($submenu, $error_msg)
	{
		$session_data["top_menu"] = "dashboard" ;
		$session_data["menu"] = "dashboard" ;
		$session_data["submenu"] = $submenu ;
		$session_data["msg"] = $error_msg ;
		$session_data["full_display"] = false ;
		return $session_data ; 
	}
}