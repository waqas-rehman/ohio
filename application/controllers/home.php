<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed') ;

class Home extends CI_Controller
{	
	public function index()
	{
		$data["view"] = "dashboard/index" ;
		$data["session_data"] = $this->session_data("", 0) ;
		$this->load->view("template/body", $data) ;
	}
	
	private function session_data($submenu, $error_msg)
	{
		$session_data["menu"] = "dashboard" ;
		$session_data["submenu"] = $submenu ;
		$session_data["msg"] = $error_msg ;
		$session_data["full_display"] = false ;
		return $session_data ; 
	}
}