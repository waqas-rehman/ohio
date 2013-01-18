<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed') ;

class Questions_mtc extends CI_Controller
{
	public function __construct()
    {
    	parent::__construct();
        if($this->session->userdata('logged_in') != TRUE)
			redirect(base_url("home")) ;
	}
	
	public function index($msg = 0)
	{
		$data["question_recs"] = $this->model1->get_all("questions_mtc") ;
		 
		$data["view"] = "question_mtc/index" ;
		$data["session_data"] = $this->session_data("", $msg) ;
		$this->load->view("template/body", $data) ;
	}
	
	public function add_question($msg = 0)
	{
		$data["question_recs"] = $this->model1->get_all("questions_mtc") ;
		 
		$data["view"] = "question_mtc/add_question" ;
		$data["session_data"] = $this->session_data("add_mtc_question", $msg) ;
		$this->load->view("template/body", $data) ;
	}
	
	public function insert_question()
	{
		if($_POST)
		{
			
		}
		else
			base_url("questions_mtc") ;
	}
	
	private function session_data($submenu, $error_msg)
	{
		$session_data["top_menu"] = "test_management" ;
		$session_data["menu"] = "questions_mtc" ;
		$session_data["submenu"] = $submenu ;
		$session_data["msg"] = $error_msg ;
		$session_data["full_display"] = true ;
		return $session_data ; 
	}
	
	public function match_the_column($msg = 0)
	{
		$data["view"] = "question_mtc/match_the_column" ;
		$data["session_data"] = $this->session_data("", $msg) ;
		$this->load->view("template/body", $data) ;
	}
	
}