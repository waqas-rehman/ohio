<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed') ;

class Theme extends CI_Controller
{	
	public function dashboard()
	{
		$this->load->view('theme/dashboard') ;
	}
	
	public function index()
	{
		$this->load->view("theme/index") ;
	}
	
	public function boxgrid()
	{
		$this->load->view('theme/boxgrid') ;
	}
	
	public function charts()
	{
		$this->load->view('theme/charts') ;
	}
	
	public function forms()
	{
		$this->load->view('theme/forms') ;
	}
	
	public function gallery()
	{
		$this->load->view('theme/gallery') ;
	}
	
	public function icons()
	{
		$this->load->view('theme/icons') ;
	}
	
	public function tables()
	{
		$this->load->view('theme/tables') ;
	}
	
	public function typography()
	{
		$this->load->view('theme/typography') ;
	}
	
	public function uielements()
	{
		$this->load->view('theme/uielements') ;
	}	
}