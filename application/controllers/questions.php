<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed') ;

class Questions extends CI_Controller
{
	public function __construct()
    {
    	parent::__construct();
        if($this->session->userdata('logged_in') != TRUE)
			redirect(base_url("home")) ;
	}
	
	public function index($msg = 0)
	{
		$data["question_recs"] = $this->model1->get_all("questions") ;
		 
		$data["view"] = "questions/index" ;
		$data["session_data"] = $this->session_data("", $msg) ;
		$this->load->view("template/body", $data) ;
	}
	
	public function add_question($msg = 0)
	{	
		$data["view"] = "questions/add_question" ;
		$data["session_data"] = $this->session_data("add_question", $msg) ;
		$this->load->view("template/body", $data);
	}
	
	public function insert_question()
	{
		if($_POST)
		{
			$param = post_function(array("question_type" => "question_type",
									     "number_of_choices" => "number_of_choices",
										 "answer_type" => "answer_type",
										 "question_title" => "question_title",
										 "question_statement" => "question_statement")) ;
											  
			if($param["question_type"] == "type2" || $param["question_type"] == "type3" || $param["question_type"] == "type4" || $param["question_type"] == "type5")
				$param["question_scenario"] = post_function("question_scenario") ;	 
			
			if($param["question_type"] == "type7")
				$param["question_scenario"] = post_function("question_scenario1")."%&@".post_function("question_scenario2") ;
				
			if($param["answer_type"] == "multiple_answer" || $param["answer_type"] == "single_answer" )
			{
				$temp_choice_texts = array() ;
				for($i = 1 ; $i <= $param["number_of_choices"] ; $i++)
					$temp_choice_texts[] = post_function("choice".$i) ;
				
				$param["choices_text"] = array_to_string($temp_choice_texts, "%&@") ;
				
				if($param["answer_type"] == "single_answer") $param["correct_answer"] = post_function("correct_answer") ;
				else $param["correct_answer"] = array_to_string($this->input->post("correct_answer"), "%&@") ;
			}
				
			if($param["question_type"] == "type6" || $param["question_type"] == "type3" || $param["question_type"] == "type4" || $param["question_type"] == "type5")
				$param["question_image"] = post_function("question_image") ;
				
			$rec_id = $this->model1->insert_rec($param, "questions") ;
		
			if($rec_id) redirect(base_url("questions/index/5")) ;
			else redirect("questions/index/6") ;
		}
		else redirect(base_url("questions")) ;
	}
	
	public function edit_question($encoded_question_id, $msg = 0)
	{
		if($encoded_question_id)
		{
			$data["question_rec"] = $this->model1->get_one(array("question_id" => decoded_string($encoded_question_id, "&")), "questions") ;
			$data["view"] = "questions/edit_question" ;
			$data["session_data"] = $this->session_data("", $msg) ;
			$this->load->view("template/body", $data) ;
		}
		else
			redirect(base_url("questions")) ;
	}
	
	public function update_question()
	{
		if($_POST)
		{
			$param = post_function(array("question_type" => "question_type",
									     "number_of_choices" => "number_of_choices",
										 "answer_type" => "answer_type",
										 "question_title" => "question_title",
										 "question_statement" => "question_statement")) ;
											  
			if($param["question_type"] == "type2" || $param["question_type"] == "type3" || $param["question_type"] == "type4" || $param["question_type"] == "type5")
				$param["question_scenario"] = post_function("question_scenario") ;	 
			
			if($param["question_type"] == "type7")
				$param["question_scenario"] = post_function("question_scenario1")."%&@".post_function("question_scenario2") ;
				
			$temp_choice_texts = array() ;
			
			for($i = 1 ; $i <= $param["number_of_choices"] ; $i++)
				$temp_choice_texts[] = post_function("choice".$i) ;
				
			$param["choices_text"] = array_to_string($temp_choice_texts, "%&@") ;
				
			if($param["answer_type"] == "single_answer") $param["correct_answer"] = post_function("correct_answer") ;
			else $param["correct_answer"] = array_to_string($this->input->post("correct_answer"), "%&@") ;
				
			$cond1["question_id"] = decoded_string(post_function("question_id"), "&", 10) ;
				
			$res = $this->model1->update_rec($param, $cond1, "questions") ;
				
			if($res) redirect(base_url("questions/index/1")) ;
			else redirect("questions/index/2") ;
		}
		else
			redirect(base_url("questions")) ;
	}
	
	public function preview_question($encoded_question_id, $msg = 0)
	{
		if($encoded_question_id)
		{
			$cond1["question_id"] = decoded_string($encoded_question_id, "&") ;
			$data["question_rec"] = $this->model1->get_one($cond1, "questions") ;
			/*
			if($data["question_rec"]->question_type == "type1" || $data["question_rec"]->question_type == "type2")
				$data["view"] = "questions/".$data["question_rec"]->question_type ;
			
			elseif($data["question_rec"]->question_type == "type3" || $data["question_rec"]->question_type == "type4" || $data["question_rec"]->question_type == "type5" || $data["question_rec"]->question_type == "type6")
				$data["view"] = "questions/type3" ;
			
			elseif($data["question_rec"]->question_type == "type7")
				$data["view"] = "questions/type7" ;
			/**/
			$data["view"] = "questions/type1" ;
							
			$data["session_data"] = $this->session_data("add_question", $msg) ;
			$this->load->view("template/body", $data) ;
		} else
			redirect(base_url("questions")) ;
	}
	
	public function validate_answer($msg = 0)
	{
		if($_POST)
		{
			$validation_parameter = array() ;
			$answer_type = post_function("answer_type") ;
			$question_rec = $this->model1->get_one(array("question_id" => decoded_string(post_function("question_id"), "&")), "questions") ;
			$data["answer_type"] = "" ;
				
			if($question_rec->answer_type == "single_answer") $validation_parameter["correct_answer"] = "Answer&required" ;
			elseif($question_rec->answer_type == "multiple_answer") $validation_parameter["correct_answer[]"] = "Answer&required" ;
			elseif($question_rec->answer_type == "large_text_box" || $question_rec->answer_type == "small_text_box")  $validation_parameter["correct_answer"] = "Answer&required" ;
			
			if(form_validation_function($validation_parameter) == FALSE)
			{
				$data["question_rec"] = $question_rec ;
				
				$data["view"] = "questions/".$data["question_rec"]->question_type ;
				$data["session_data"] = $this->session_data("", $msg) ;
				$this->load->view("template/body", $data) ;
			}
			else
			{
				$flag = false ;
				if($question_rec->answer_type == "single_answer")
				{
					$choosed_answer = post_function("correct_answer") ;
					if($choosed_answer == $question_rec->correct_answer) $flag = true ;
					$data["question_type"] = $question_rec->question_type ;
					$data["answer_type"] = "single_answer" ;
				}
				elseif($question_rec->answer_type == "multiple_answer")
				{
					$choosed_answer = array_to_string($this->input->post("correct_answer"), "%&@") ;
					if($choosed_answer == $question_rec->correct_answer) $flag = true ;
					$data["answer_type"] = "multiple_answer" ;
				}
				elseif($question_rec->answer_type == "small_text_box" || $question_rec->answer_type == "large_text_box")
				{
					$data["answer_type"] = "text" ;
					$data["text_answer"] = post_function("correct_answer") ;
				}
				
				if($flag == true) $data["answer"] = true ;
				else $data["answer"] = false ;
				
				$data["view"] = "questions/question_response" ;
				
				$data["session_data"] = $this->session_data("", $msg) ;
				$this->load->view("template/body", $data) ;
			}
		} else
			redirect(base_url("questions")) ;
	}
	
	public function remove_question($encoded_question_id)
	{
		if($encoded_question_id)
		{
			$cond1["question_id"] = decoded_string($encoded_question_id, "&") ;
			$question_rec = $this->model1->get_one($cond1, "questions") ;
			
			if($question_rec->question_image != "")
			{
				$uploaddir = get_root_path("question_images") ;
				$file = $uploaddir . $image_name ;
				unlink($file) ;
			}
			
			$res1 = $this->model1->delete_rec($cond1, "questions") ;
			
			if($res1) redirect(base_url("questions/index/3")) ;
			else redirect(base_url("questions/index/4")) ;
		
		} else
			redirect(base_url("questions")) ;
	}
	
	private function session_data($submenu, $error_msg)
	{
		$session_data["top_menu"] = "test_management" ;
		$session_data["menu"] = "questions" ;
		$session_data["submenu"] = $submenu ;
		$session_data["msg"] = $error_msg ;
		$session_data["full_display"] = true ;
		return $session_data ; 
	}
	
	public function get_textboxes()
	{
		if($_POST)
		{
			$no_of_text_fileds = post_function("num_of_choices") ;
			$field_texts = explode("@%#", post_function("input_field_texts")) ;
			
			$total_fields = sizeof($field_texts) ;
			
			$text_field = "" ;
			
			if($no_of_text_fileds)
			{
				for($i = 1 ; $i <= $no_of_text_fileds ; $i++)
				{
					if($i <= $total_fields)
						$text_field = $text_field.'<div class="row"><label for="choice'.$i.'">Choice '.$i.' Text</label><div class="right"><input type="text" id="choice'.$i.'" name="choice'.$i.'" value="'.$field_texts[$i - 1].'" class="{validate:{required:true, messages:{required:\'Field is required\'}}}" /></div></div>' ;
					else
						$text_field = $text_field.'<div class="row"><label for="choice'.$i.'">Choice '.$i.' Text</label><div class="right"><input type="text" id="choice'.$i.'" name="choice'.$i.'" value="" class="{validate:{required:true, messages:{required:\'Field is required\'}}}" /></div></div>' ;
				}
			}
			
			echo $text_field ;
		}
		else
			echo "fail" ;
		exit ;
	}
	
	public function get_radio_checkboxes()
	{
		if($_POST)
		{
			$answer_type = post_function("answer_type") ;
			$num_of_choices = post_function("no_of_choices") ;
			
			$checkbox = "" ;
			$checkbox = '<div class="row"><label>Correct Answer</label>' ;
			
			if($answer_type == "single_answer")
			{
				for($i = 1 ; $i <= $num_of_choices ; $i++)
				{
					if($i == 1) $checkbox = $checkbox.'<div class="right"> <input type="radio" id="radio-3'.$i.'" name="correct_answer" value="choice'.$i.'" checked="checked"  class="checkboxes_radio" /> <label for="radio-3'.$i.'">Choice '.$i.'</label></div>' ;
					else $checkbox = $checkbox.'<div class="right"><input type="radio" id="radio-3'.$i.'" name="correct_answer" value="choice'.$i.'"  class="checkboxes_radio" /> <label for="radio-3'.$i.'">Choice '.$i.'</label></div>' ;
				}
			}
			elseif($answer_type == "multiple_answer")
			{
				for($i = 1 ; $i <= $num_of_choices ; $i++)
				{
					if($i == 1) $checkbox = $checkbox.'<div class="right"><input type="checkbox" id="check-'.$i.'" name="correct_answer[]" value="choice'.$i.'" checked="checked" class="checkboxes_radio" /> <label for="check-'.$i.'">Choice '.$i.'</label></div>' ;
					else  $checkbox = $checkbox.'<div class="right"> <input type="checkbox" id="check-'.$i.'" name="correct_answer[]" value="choice'.$i.'" class="checkboxes_radio" /> <label for="check-'.$i.'">Choice '.$i.'</label></div>' ;
				}
			}
			
			$checkbox = $checkbox.'</div></div>' ;
			
			echo $checkbox ;
		}
		else
			echo "fail" ;
		exit ;
	}
	
	public function upload_file()
	{
		$uploaddir = get_root_path("question_images") ;
		$ext = pathinfo($_FILES['question_image']['name'], PATHINFO_EXTENSION) ;
		$file_name = get_random_string(20) . "." . $ext ;

		$file = $uploaddir . $file_name ;

		if (move_uploaded_file($_FILES['question_image']['tmp_name'], $file)) echo "success^".$file_name ;
		else echo "error";
		exit ;
	}
	
	public function remove_image()
	{
		if($_POST)
		{
			$image_name = $this->input->post("image") ;
				
			$uploaddir = get_root_path("question_images") ;
			$file = $uploaddir . $image_name ;
				
			if(unlink($file)) echo "success" ;
			else echo "fail" ;
		}
		else echo "fail" ;
		exit ;
	}
	
}