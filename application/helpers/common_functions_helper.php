<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('date_difference'))
{
	function date_difference($date1, $date2)
	{
		$diff = strtotime($date2) - strtotime($date1) ;
		return floor($diff / (60*60*24)) ;
	}
}

if ( ! function_exists('get_states'))
{
	function get_states()
	{
		$CI =& get_instance() ;
		$CI->load->model('model1') ;
		$states = $CI->model1->get_all("states") ;
		return $states ;
    }
}

if ( ! function_exists('get_random_string'))
{
	function get_random_string($length = 10)
	{
		$CI =& get_instance() ;
		$CI->load->helper('string') ;
		
		//$this->load->helper('string') ;
		return random_string('alnum', $length) ;
	}
}

if ( ! function_exists('get_root_path'))
{
	function get_root_path($directory)
	{
		$CI =& get_instance() ;
		$CI->load->model('model1') ;
		
		$cond1["id"] = 1 ;
		$rec = $CI->model1->get_one($cond1, "root_path") ;
		$root_path = $rec->path ;
		
		if($_SERVER['HTTP_HOST'] == 'localhost')
		{
			$uploaddir = $_SERVER["DOCUMENT_ROOT"].$root_path."/".$directory."/" ;
		}
		else
		{
			$uploaddir = $_SERVER["DOCUMENT_ROOT"].$root_path."/".$directory."/" ;
		}
		
		return $uploaddir ;
    }
}

if ( ! function_exists('get_image_path'))
{
	function get_image_path($directory)
	{
		$CI =& get_instance() ;
		$CI->load->model('model1') ;
		
		$cond1["id"] = 1 ;
		$rec = $CI->model1->get_one($cond1, "root_path") ;
		$root_path = $rec->path ;
		
		$uploaddir = base_url().$root_path.$directory."/" ;
		return $uploaddir ;
    }
}

if ( ! function_exists('send_email_message'))
{
	function send_email_message($title, $to, $cc, $bcc, $subject, $message, $attachment, $attachment_path)
	{
		$CI_1 =& get_instance() ;
		$CI_1->load->model('model1') ;
		
		$email_cond["id"] = 1 ;
		$email_rec = $CI_1->model1->get_one($email_cond, "email_config") ;
		
		$config = array() ;
		
		if($email_rec->protocol != "") $config['protocol'] = $email_rec->protocol ;
		if($email_rec->smtp_host != "") $config['smtp_host'] = $email_rec->smtp_host ;
		if($email_rec->smtp_port != "") $config['smtp_port'] = intval($email_rec->smtp_port) ;
		if($email_rec->smtp_user != "") $config['smtp_user'] = $email_rec->smtp_user ;
		
		if($email_rec->smtp_pass != "") $config['smtp_pass'] = $email_rec->smtp_pass ;
		if($email_rec->mailtype != "") $config['mailtype'] = $email_rec->mailtype ;
		if($email_rec->smtp_user != "") $config['smtp_user'] = $email_rec->smtp_user ;
		
		$CI_2 =& get_instance() ;

		$CI_2->load->library('email', $config);
		$CI_2->email->set_newline("\r\n") ;
		
		$CI_2->email->from($config['smtp_user'], $title) ;
		$CI_2->email->to($to) ;
		
		if($cc) $CI_2->email->cc($cc) ;
		if($bcc) $CI_2->email->bcc($bcc) ;
		if($attachment) $CI_2->email->attach("./".$attachment_path."/".$attachment) ;
		
		$CI_2->email->subject($subject) ;
		$CI_2->email->message($message) ;
		
		if($CI_2->email->send()) return true ;
		else return false ;
	}
}

if ( ! function_exists('get_date_diff'))
{
	function get_date_diff($date1, $date2)
	{
		$CI =& get_instance() ;
		$CI->load->model('model1') ;
		
		$date_diff = $CI->model2->get_date_diff($date1, $date2) ;
	if($date_diff){
	
	return intval($date_diff->DiffDate) ;
	} else return 0 ;
   }
}

if ( ! function_exists('get_decimal_number_format'))
{
	function get_decimal_number_format($number)
	{
		return number_format($number, 2, '.', '');
    }
}

if( ! function_exists('upload_file'))
{
	function upload_file($file_name, $file_destination)
	{
		$config['upload_path'] = "./".$file_destination."/" ;
		$config['allowed_types'] = "gif|jpg|png|pdf|doc|docx|xls|xlsx|ppt|pptx|txt" ;
		$config['max_size']	= '10240' ;
		$config['encrypt_name']	= TRUE ;
		$config['remove_spaces']	= TRUE ;
		
		$CI1 =& get_instance() ;
		$CI1->load->library('upload', $config) ;
		
		$response = array() ;
			
		if (!($CI1->upload->do_upload($file_name)))
		{
			$response["result"] = false ;
			$response["errors"] = $CI1->upload->display_errors() ;
		}
		else
		{
			$file_data = $CI1->upload->data() ;
			$response["result"] = true ;
			$response["encripted_file_name"] = $file_data["file_name"] ; 
			$response["original_file_name"] = $file_data["orig_name"] ;
			$response["file_extention"] = $file_data["file_ext"] ;
		}
		
		return $response ;
	}
}

if ( ! function_exists('send_message'))
{
	function send_message($title, $to, $cc, $bcc, $subject, $message, $encripted_file_name, $original_file_name, $file_extention, $attachment_path)
	{
		
		$CI_1 =& get_instance() ;
		$CI_1->load->model('model1') ;
		
		$email_cond["id"] = 1 ;
		$email_rec = $CI_1->model1->get_one($email_cond, "email_config") ;
		
		$config = array() ;
		
		if($email_rec->protocol != "") $config['protocol'] = $email_rec->protocol ;
		if($email_rec->smtp_host != "") $config['smtp_host'] = $email_rec->smtp_host ;
		if($email_rec->smtp_port != "") $config['smtp_port'] = intval($email_rec->smtp_port) ;
		if($email_rec->smtp_user != "") $config['smtp_user'] = $email_rec->smtp_user ;
		
		if($email_rec->smtp_pass != "") $config['smtp_pass'] = $email_rec->smtp_pass ;
		if($email_rec->mailtype != "") $config['mailtype'] = $email_rec->mailtype ;
		if($email_rec->smtp_user != "") $config['smtp_user'] = $email_rec->smtp_user ;
		
		$CI_2 =& get_instance() ;

		$CI_2->load->library('email', $config);
		$CI_2->email->set_newline("\r\n") ;
		
		$CI_2->email->from($config['smtp_user'], $title) ;
		$CI_2->email->to($to) ;
		
		if($cc) $CI_2->email->cc($cc) ;
		if($bcc) $CI_2->email->bcc($bcc) ;
		
		if($encripted_file_name) $CI_2->email->attach("./".$attachment_path."/".$original_file_name) ;
		
		$CI_2->email->subject($subject) ;
		$CI_2->email->message($message) ;
		
		if($CI_2->email->send()) return true ;
		else return false ;
	}
}

if ( ! function_exists('test_function'))
{
	function test_function()
	{
		echo get_root_path("dir") ;
		echo "<br />" ;
		echo get_image_path("dir") ;
	}
}