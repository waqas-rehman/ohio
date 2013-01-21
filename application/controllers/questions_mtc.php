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
		$data["question_mtc_recs"] = $this->model1->get_all("questions_mtc") ;
		 
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
	
	public function insert_question($msg = 0)
	{
		if($_POST)
		{
			
			$param = post_function(array("question_mtc_title" => "question_title",
						   "question_mtc_scenario" => "question_scenario",
						   "question_mtc_statement" => "question_statement",
						   "question_mtc_col1_choices" => "column_1_options",
						   "question_mtc_col2_choices" => "column_2_options")) ;
			
			$temp1 = array() ;
			if($param["question_mtc_col1_choices"])
				for($i = 1 ; $i <= $param["question_mtc_col1_choices"] ; $i++)
					$temp1[] = post_function("col_1-option_".$i) ;
			$param["question_mtc_text1"] = implode("%&@", $temp1) ;
			
			$temp2 = array() ;
			if($param["question_mtc_col2_choices"])
				for($i = 1 ; $i <= $param["question_mtc_col2_choices"] ; $i++)
					$temp2[] = post_function("col_2-option_".$i) ;
			$param["question_mtc_text2"] = implode("%&@", $temp2) ;
			
			$rec_id = $this->model1->insert_rec($param, "questions_mtc") ;
			
			if($rec_id)
			{
				$data["question_rec"] = $this->model1->get_one(array("question_mtc_id" => $rec_id), "questions_mtc") ;
				redirect(base_url("questions_mtc/question_options/".encoded_string($rec_id, "&", 10))) ;
			}
			else
			{
				redirect(base_url("questions_mtc/index/6")) ;	
			}
		}
		else
			redirect(base_url("questions_mtc")) ;
	}
	
	public function question_options($encoded_question_id, $msg = 0)
	{
		if($encoded_question_id)
		{
			$data["question_rec"] = $this->model1->get_one(array("question_mtc_id" => decoded_string($encoded_question_id, "&")), "questions_mtc") ;
		
			$data["view"] = "question_mtc/question_options" ;
			$data["session_data"] = $this->session_data("", $msg) ;
			$this->load->view("template/body", $data) ;
		}
		else
			redirect(base_url("questions_mtc")) ;
	}
	
	public function question_options_update()
	{
		if($_POST)
		{
			$param = post_function(array("column1_answer_order" => "col1_answer_order",
										 "column2_answer_order" => "col2_answer_order",
										 "column1_display_order" => "col1_display_order",
										 "column2_display_order" => "col2_display_order")) ;
										 
			$cond1["question_mtc_id"] = decoded_string(post_function("question_id"), "&") ;
			
			$res = $this->model1->update_rec($param, $cond1, "questions_mtc") ;
			
			if($res) redirect(base_url("questions_mtc/index/5")) ;
			else redirect(base_url("questions_mtc/index/6")) ;
			
		} else
			redirect(base_url("questions_mtc")) ;
	}
	
	public function preview_question($encoded_question_id, $msg = 0)
	{
		if($encoded_question_id)
		{
			$data["question_rec"] = $this->model1->get_one(array("question_mtc_id" => decoded_string($encoded_question_id, "&")), "questions_mtc") ;
			
			$data["view"] = "question_mtc/match_the_column" ;
			$data["session_data"] = $this->session_data("", $msg) ;
			$this->load->view("template/body", $data) ;
		}
		else
			redirect(base_url("questions_mtc")) ;
	}
	
	public function submit_answer()
	{
		if($_POST)
		{
			$question_id = decoded_string(post_function("question_id") , "&") ;
			$question_rec = $this->model1->get_one(array("question_mtc_id" => $question_id) , "questions_mtc") ;
			
			$given_answer = $this->answer_array(post_function("col1_display_order"), post_function("col2_display_order")) ;
	 		$correct_answer = $this->answer_array($question_rec->column1_answer_order, $question_rec->column2_answer_order) ;
			
			$flag = true ;
			
			foreach($given_answer as $col1 => $col2):
				$temp = $correct_answer[$col1] ;
				if($temp != $col2) $flag = false ;
			endforeach ;
			
			$data["view"] = "question_mtc/question_response" ;
			
			if($flag) $data["session_data"] = $this->session_data("", "1") ;
			else $data["session_data"] = $this->session_data("", "2") ;
			
			$this->load->view("template/body", $data) ;
		}
		else
			redirect(base_url("questions_mtc"));
	}
	
	private function answer_array($col1, $col2)
	{
		$temp1 = explode(",", $col1) ;
		$temp2 = sizeof($temp1) ;
			
		$temp3 = explode(",", $col2) ;
		$temp4 = sizeof($temp3) ;
			
		$size = 0 ;
			
		$flag = -1 ;
		if($temp2 == $temp4) { $size = $temp2 ; $flag = 1 ; }
		elseif($temp2 > $temp4) { $size = $temp2 ; $flag = 1 ; }
		elseif($temp2 < $temp4) { $size = $temp4 ; $flag = 2 ; }
 			
		$selected_order = array() ;
			
		for($i = 0 ; $i < $size ; $i++)
		{
			if($flag == 1)
			{
				if(isset($temp3[$i])) $selected_order[$temp1[$i]] = $temp3[$i] ; 
				else $selected_order[$temp1[$i]] = "no_val" ;
			}
			elseif($flag == 2)
			{
				if(isset($temp1[$i])) $selected_order[$temp1[$i]] = $temp3[$i] ; 
				else $selected_order["no_val".$i] = $temp3[$i] ;
			}
		}
		
		return $selected_order ;
	}
	
	public function edit_question($encoded_question_id, $msg = 0)
	{
		if($encoded_question_id)
		{
			$data["question_rec"] = $this->model1->get_one(array("question_mtc_id" => decoded_string($encoded_question_id, "&")), "questions_mtc") ;
			
			if($msg == "3")
			{
				$data["question_type"] = $question_type ;
				$data["number_of_choices"] = $number_of_choices ;
				$data["answer_type"] = $answer_type ;
			}
			$data["view"] = "question_mtc/edit_question" ;
			$data["session_data"] = $this->session_data("", $msg) ;
			$this->load->view("template/body", $data) ;
		}
		else
			redirect(base_url("questions_mtc")) ;
	}
	
	public function update_question($msg = 0)
	{
		if($_POST)
		{
			
			$param = post_function(array("question_mtc_title" => "question_title",
						   "question_mtc_scenario" => "question_scenario",
						   "question_mtc_statement" => "question_statement",
						   "question_mtc_col1_choices" => "column_1_options",
						   "question_mtc_col2_choices" => "column_2_options")) ;
			
			$temp1 = array() ;
			if($param["question_mtc_col1_choices"])
				for($i = 1 ; $i <= $param["question_mtc_col1_choices"] ; $i++)
					$temp1[] = post_function("col_1-option_".$i) ;
			$param["question_mtc_text1"] = implode("%&@", $temp1) ;
			
			$temp2 = array() ;
			if($param["question_mtc_col2_choices"])
				for($i = 1 ; $i <= $param["question_mtc_col2_choices"] ; $i++)
					$temp2[] = post_function("col_2-option_".$i) ;
			$param["question_mtc_text2"] = implode("%&@", $temp2) ;
			
			$cond1["question_mtc_id"] = decoded_string(post_function("question_id"), "&") ;
			
			$res = $this->model1->update_rec($param, $cond1, "questions_mtc") ; //insert_rec($param, "questions_mtc") ;
			
			if($rec_id)
			{
				$data["question_rec"] = $this->model1->get_one(array("question_mtc_id" => $rec_id), "questions_mtc") ;
				redirect(base_url("questions_mtc/question_options/".encoded_string($rec_id, "&", 10))) ;
			}
			else
			{
				redirect(base_url("questions_mtc/index/6")) ;	
			}
		}
		else
			redirect(base_url("questions_mtc")) ;
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
	
	public function create_text_fields()
	{
		if($_POST)
		{
			$column_no = post_function("column_no") ;
			$no_of_fields = intval(post_function("no_of_fields")) ;
			
			$html = '' ;

			if($no_of_fields)
			{
				for($i = 1 ; $i <= $no_of_fields ; $i++)
				{
		   $html = $html.'<div class="row"><label for="col_'.$column_no.'-option_'.$i.'">Column '.$column_no.' Option '.$i.' Text</label><div class="right"><input type="text" id="col_'.$column_no.'-option_'.$i.'" name="col_'.$column_no.'-option_'.$i.'" value="" class="{validate:{required:true, messages:{required:\'Field is required\'}}}" /></div><br /></div>' ;
				}
			}
			
			echo $html ;
		}
		else
			echo "fail" ;
		
		exit ;
	}
	
	public function create_text_fields_with_text()
	{
		if($_POST)
		{
			$column_no = post_function("column_no") ;
			$no_of_fields = intval(post_function("no_of_fields")) ;
			$question_id = decoded_string(post_function("question_id"), "&") ;
			
			$question_rec = $this->model1->get_one(array("question_mtc_id" => $question_id), "questions_mtc") ;
			
			$html = '' ;
			if($column_no == "1") $choices = string_to_array($question_rec->question_mtc_text1, "%&@") ;
			if($column_no == "2") $choices = string_to_array($question_rec->question_mtc_text2, "%&@") ;
		
			if($no_of_fields)
			{
				for($i = 1 ; $i <= $no_of_fields ; $i++)
				{
					if($column_no == "1")
					{
						if($i <= $question_rec->question_mtc_col1_choices)
							$html = $html.'<div class="row"><label for="col_'.$column_no.'-option_'.$i.'">Column '.$column_no.' Option '.$i.' Text</label><div class="right"><input type="text" id="col_'.$column_no.'-option_'.$i.'" name="col_'.$column_no.'-option_'.$i.'" value="'.$choices[$i - 1].'" class="{validate:{required:true, messages:{required:\'Field is required\'}}}" /></div><br /></div>' ;
						else
							$html = $html.'<div class="row"><label for="col_'.$column_no.'-option_'.$i.'">Column '.$column_no.' Option '.$i.' Text</label><div class="right"><input type="text" id="col_'.$column_no.'-option_'.$i.'" name="col_'.$column_no.'-option_'.$i.'" value="" class="{validate:{required:true, messages:{required:\'Field is required\'}}}" /></div><br /></div>' ;
					}
					elseif($column_no == "2") 
					{
						if($i <= $question_rec->question_mtc_col2_choices)
							$html = $html.'<div class="row"><label for="col_'.$column_no.'-option_'.$i.'">Column '.$column_no.' Option '.$i.' Text</label><div class="right"><input type="text" id="col_'.$column_no.'-option_'.$i.'" name="col_'.$column_no.'-option_'.$i.'" value="'.$choices[$i - 1].'" class="{validate:{required:true, messages:{required:\'Field is required\'}}}" /></div><br /></div>' ;
						else
							$html = $html.'<div class="row"><label for="col_'.$column_no.'-option_'.$i.'">Column '.$column_no.' Option '.$i.' Text</label><div class="right"><input type="text" id="col_'.$column_no.'-option_'.$i.'" name="col_'.$column_no.'-option_'.$i.'" value="" class="{validate:{required:true, messages:{required:\'Field is required\'}}}" /></div><br /></div>' ;
					}
				}
			}
			
			echo $html ;
		}
		else
			echo "fail" ;
		
		exit ;
	}
	
}