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
				redirect(base_url("questions_mtc/index/6")) ;
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
			
			$this->answer_array(post_function("col1_display_order"), post_function("col2_display_order")) ;
			
			list($possible_col1, $possible_col2) = $this->answer_array(post_function("col1_display_order"),post_function("col2_display_order")) ;
			list($answer_col1, $answer_col2) = $this->answer_array($question_rec->column1_answer_order, $question_rec->column2_answer_order) ;
			
			$flag = "1" ;
			
			$flag = $this->validate_answer($possible_col1, $possible_col2, $answer_col1, $answer_col2) ;
			
			$data["view"] = "question_mtc/question_response" ;
			
			if($flag == "1") $data["session_data"] = $this->session_data("", "1") ;
			elseif($flag == "0") $data["session_data"] = $this->session_data("", "2") ;
			
			$this->load->view("template/body", $data) ;
		}
		else
			redirect(base_url("questions_mtc"));
	}
	
	private function validate_answer($possible_col1, $possible_col2, $answer_col1, $answer_col2)
	{
		$max_size = max(sizeof($possible_col1), sizeof($possible_col2)) ;
		//echo $max_size."<br/>" ;
		
		$flag1 = "1" ;
		
		for($i = 0 ; $i < $max_size ; $i++)
		{
			$val1 = $possible_col1[$i] ;
			$val2 = $possible_col2[$i] ;
			//echo "val1 ".$i.": ".$val1." val2 ".$i.": ".$val2."<br />" ;
			
			$key1 = array_search($val1, $answer_col1) ;
			$key2 = array_search($val2, $answer_col2) ;
			//echo "key1: ".$key1." key2: ".$key2."<br />" ;
			
			if($key1 != $key2) {$flag1 = "0" ; break ;}
		}
		if($flag1 == "1") return "1" ;
		elseif($flag1 == "0") return "0" ;
	}
	
	private function answer_array($col1, $col2)
	{
		$temp1 = explode(",", $col1) ;
		$size1 = sizeof($temp1) ;
			
		$temp2 = explode(",", $col2) ;
		$size2 = sizeof($temp2) ;
			
		$size = 0 ;
		$flag = 1 ;
		
		if(($size1 == $size2) || ($size1 > $size2)) $size = $size1 ;
		elseif($size1 < $size2) { $size = $size2 ; $flag = 2 ; }
		
		$array1 = array() ;
		$array2 = array() ;
		
		for($i = 0 ; $i < $size ; $i++)
		{
			if($flag == 1)
			{
				$array1[] = $temp1[$i] ;
				if($i >= $size2 ) $array2[] = "no_val" ;
				else $array2[] = $temp2[$i] ;
			}
			elseif($flag == 2)
			{
				$array2[] = $temp2[$i] ;
				if($i >= $size1 ) $array1[] = "no_val" ;
				else $array1[] = $temp1[$i] ;
			}
		}
		
		return array($array1, $array2) ;
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
			
			if($res) redirect(base_url("questions_mtc/question_options/".encoded_string($cond1["question_mtc_id"], "&", 10))) ;
			else redirect(base_url("questions_mtc/index/6")) ;
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
	
	public function remove_question($encoded_question_id)
	{
		if($encoded_question_id)
		{
			$cond1["question_mtc_id"] = decoded_string($encoded_question_id, "&") ;
			
			$res1 = $this->model1->delete_rec($cond1, "questions_mtc") ;
			
			if($res1) redirect(base_url("questions_mtc/index/3")) ;
			else redirect(base_url("questions_mtc/index/4")) ;
		
		} else
			redirect(base_url("questions_mtc")) ;
	}
}