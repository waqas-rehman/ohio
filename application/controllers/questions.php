<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed') ;

class Questions extends CI_Controller
{
	public function __construct()
    {
    	parent::__construct();
        if($this->session->userdata('logged_in') != TRUE)
			redirect(base_url("home")) ;
		echo "<h1>".$_SERVER['DOCUMENT_ROOT']."/ohio/question_images/"."</h1>" ;
		exit ;
	}
	
	public function index($msg = 0)
	{
		$data["question_recs"] = $this->model1->get_all("questions") ;
		 
		$data["view"] = "questions/index" ;
		$data["session_data"] = $this->session_data("", $msg) ;
		$this->load->view("template/body", $data) ;
	}
	
	public function choose_question_type($question_type = "", $number_of_choices = 0, $answer_type = "", $msg = 0)
	{
		$data["number_of_choices"] = $number_of_choices ;
		$data["question_type"] = $question_type ; 
		$data["answer_type"] = $answer_type ;

		$data["view"] = "questions/choose_question_type" ;
		$data["session_data"] = $this->session_data("add_question", $msg) ;
		
		$this->load->view("template/body", $data);
	}
	
	public function add_question($msg = 0)
	{
		if($_POST)
		{
			$validation_parameters = array("question_type" => "Question Type&required",
										   "number_of_choices" => "Number of Choices&required|integer|greater_than[0]|less_than[7]",
										   "answer_type" => "Answer Type&required"/**/) ;
			
			if(form_validation_function($validation_parameters) == FALSE)
			{
				$data = array("number_of_choices" => "",  "question_type" => 0, "answer_type" => "") ;
				$data["view"] = "questions/choose_question_type" ;
				$data["session_data"] = $this->session_data("add_question", "1") ;
				$this->load->view("template/body", $data);
			}
			else
			{
				$data["number_of_choices"] = post_function("number_of_choices") ;
				$data["question_type"] = post_function("question_type") ;
				$data["answer_type"] = post_function("answer_type") ; 
				
				$data["view"] = "questions/add_question" ;
				$data["session_data"] = $this->session_data("add_question", $msg) ;
				$this->load->view("template/body", $data);
			}
		}
		else
			redirect(base_url("questions")) ;
	}
	
	public function insert_question()
	{
		if($_POST)
		{
			$temp = post_function(array("question_type" => "question_type", "number_of_choices" => "number_of_choices", "answer_type" => "answer_type")) ;
			
			$validation_parameters = array("question_title" => "Question Title&required") ;
			
			if($temp["question_type"] == "type2" || $temp["question_type"] == "type3" || $temp["question_type"] == "type4" || $temp["question_type"] == "type5")
				$validation_parameters["question_scenario"] = "Question Scenario&required" ;	 
			
			if($temp["question_type"] == "type7") {
				$validation_parameters["question_scenario1"] = "1st Half Question Scenario&required" ;
				$validation_parameters["question_scenario2"] = "2nd Half Question Scenario&required" ;
			}
			
			$validation_parameters["question_statement"] = "Question Statement&required" ;
			
			for($i = 1 ; $i <= $temp["number_of_choices"] ; $i++)
				$validation_parameters["choice".$i] = "Choice ".$i." Text&required" ;
			
			if($temp["answer_type"] == "single_answer") $validation_parameters["correct_answer"] = "Correct Answer&required" ;
			else $validation_parameters["correct_answer[]"] = "Correct Answer&required" ;
			
			if(form_validation_function($validation_parameters) == FALSE)
			{
				$data["number_of_choices"] = post_function("number_of_choices") ;
				$data["question_type"] = post_function("question_type") ;
				$data["answer_type"] = post_function("answer_type") ; 
				$data["view"] = "questions/add_question" ;
				$data["session_data"] = $this->session_data("add_question", 1) ;
				$this->load->view("template/body", $data);
			}
			else
			{
				$param = post_function(array("question_type" => "question_type",
											  "number_of_choices" => "number_of_choices",
											  "answer_type" => "answer_type",
											  "question_title" => "question_title",
											  "question_statement" => "question_statement")) ;
											  
				if($temp["question_type"] == "type2" || $temp["question_type"] == "type3" || $temp["question_type"] == "type4" || $temp["question_type"] == "type5")
					$param["question_scenario"] = post_function("question_scenario") ;	 
			
				if($temp["question_type"] == "type7")
					$param["question_scenario"] = post_function("question_scenario1")."%&@".post_function("question_scenario2") ;
				
				$temp_choice_texts = array() ;
				for($i = 1 ; $i <= $temp["number_of_choices"] ; $i++)
					$temp_choice_texts[] = post_function("choice".$i) ;
				
				$param["choices_text"] = array_to_string($temp_choice_texts, "%&@") ;
				
				if($temp["answer_type"] == "single_answer") $param["correct_answer"] = post_function("correct_answer") ;
				else $param["correct_answer"] = array_to_string($this->input->post("correct_answer"), "%&@") ;
				
				$rec_id = $this->model1->insert_rec($param, "questions") ;
				
				if($rec_id)
				{
					if($param["question_type"] == "type3" || $param["question_type"] == "type4" || $param["question_type"] == "type5" || $param["question_type"] == "type6")
						redirect(base_url("questions/add_image/".encoded_string($rec_id, "&", 10))) ;
					else
						redirect(base_url("questions/index/5")) ;
				
				}
				else redirect("questions/index/6") ;
			}
		}
		else
			redirect(base_url("questions")) ;
	}
	
	public function add_image($encoded_question_id, $msg = 0)
	{
		if($encoded_question_id)
		{
			$cond1["question_id"] = decoded_string($encoded_question_id, "&") ;
			$data["question_rec"] = $this->model1->get_one($cond1, "questions") ;
			
			$data["view"] = "questions/add_image" ;
			$data["session_data"] = $this->session_data("add_question", $msg) ;
			$this->load->view("template/body", $data) ;
		}
	}
	
	public function upload_image($msg = 0)
	{
		$allowedExts = array("jpg", "jpeg", "gif", "png");
		$extension = end(explode(".", $_FILES["image_file"]["name"]));
		if ((($_FILES["image_file"]["type"] == "image/gif") || ($_FILES["image_file"]["type"] == "image/jpeg") || ($_FILES["image_file"]["type"] == "image/png") || ($_FILES["image_file"]["type"] == "image/pjpeg")) && ($_FILES["image_file"]["size"] < 20000) && in_array($extension, $allowedExts))
		{
  			if ($_FILES["image_file"]["error"] > 0)
    			echo "Return Code: " . $_FILES["image_file"]["error"] . "<br>";
  			else
    		{
				echo "Upload: " . $_FILES["image_file"]["name"] . "<br>";
				echo "Type: " . $_FILES["image_file"]["type"] . "<br>";
				echo "Size: " . ($_FILES["image_file"]["size"] / 1024) . " kB<br>";
				echo "Temp file: " . $_FILES["image_file"]["tmp_name"] . "<br>";
				
				if (file_exists("upload/" . $_FILES["image_file"]["name"]))
					echo $_FILES["image_file"]["name"] . " already exists. ";
				else
				{
      				move_uploaded_file($_FILES["image_file"]["tmp_name"], $_SERVER['DOCUMENT_ROOT']."/ohio/question_images/".$_FILES["image_file"]["name"]);
      				echo "Stored in: " . $_SERVER['DOCUMENT_ROOT']."/ohio/question_images/" . $_FILES["image_file"]["name"];
				}
			}
		}
		else
			echo "Invalid file";
		/**/
		
		/*
		$response = upload_file("image_file", "question_images") ;
		$cond1["question_id"] = decoded_string(post_function("question_id"), "&") ;
		
		if($response["result"])
		{
			$param["question_image"] = $response["encripted_file_name"] ;
			echo $cond1["question_id"]. "<br />" . $param["question_image"] . "<br />" ;
			$res = $this->model1->update_rec($param, $cond1, "questions") ;
			echo $res ;
			if($res) redirect(base_url("questions/index/5")) ;
			else redirect(base_url("questions/index/7")) ;
		}
		else
		{
			$data["question_rec"] = $this->model1->get_one($cond1, "questions") ;
			$p = array("<p>", "</p>") ;
			$li =  array("<li>", "</li>") ;
			$data["errors"] = $newphrase = str_replace($p, $li, $response["errors"]);  ;
			$data["view"] = "questions/add_image" ;
			$data["session_data"] = $this->session_data("add_question", "1") ;
			$this->load->view("template/body", $data) ;
		}
		/**/
	}
	
	public function preview_question($encoded_question_id, $msg = 0)
	{
		if($encoded_question_id)
		{
			$cond1["question_id"] = decoded_string($encoded_question_id, "&") ;
			$data["question_rec"] = $this->model1->get_one($cond1, "questions") ;
			
			if($data["question_rec"]->question_type == "type1" || $data["question_rec"]->question_type == "type2")
				$data["view"] = "questions/".$data["question_rec"]->question_type ;
			
			elseif($data["question_rec"]->question_type == "type3" || $data["question_rec"]->question_type == "type4" || $data["question_rec"]->question_type == "type5" || $data["question_rec"]->question_type == "type6")
				$data["view"] = "questions/type3" ;
			
			elseif($data["question_rec"]->question_type == "type7")
				$data["view"] = "questions/type7" ;
				
			$data["session_data"] = $this->session_data("add_question", $msg) ;
			$this->load->view("template/body", $data) ;
		} else
			redirect(base_url("questions")) ;
	}
	
	public function edit_question($encoded_question_id, $msg = 0)
	{
		if($encoded_question_id)
		{
			$data["question_rec"] = $this->model1->get_one(array("question_id" => decoded_string($encoded_question_id, "&")), "questions") ;
			
			$data["view"] = "questions/edit_question_type" ;
			$data["session_data"] = $this->session_data("", $msg) ;
			$this->load->view("template/body", $data) ;
		}
		else
			redirect(base_url("questions")) ;
	}
	
	public function update_question_type()
	{
		if($_POST)
		{
			$validation_parameters = array("question_type" => "Question Type&required",
										   "number_of_choices" => "Number of Choices&required|integer|greater_than[0]|less_than[7]",
										   "answer_type" => "Answer Type&required") ;
			
			if(form_validation_function($validation_parameters) == FALSE)
			{
				$data["question_rec"] = $this->model1->get_one(array("question_id" => decoded_string(post_function("question_id"), "&")), "questions") ;
				//print_r($data["question_rec"]) ; exit ;
				$data["view"] = "questions/edit_question_type" ;
				$data["session_data"] = $this->session_data("", "1") ;
				$this->load->view("template/body", $data);
			}
			else
			{
				$data["number_of_choices"] = post_function("number_of_choices") ;
				$data["question_type"] = post_function("question_type") ;
				$data["answer_type"] = post_function("answer_type") ; 
				
				$data["view"] = "questions/add_question" ;
				$data["session_data"] = $this->session_data("", $msg) ;
				$this->load->view("template/body", $data);
			}
		}
		else
			redirect(base_url("questions")) ;
	}
	
	public function validate_answer($msg = 0)
	{
		if($_POST)
		{
			$validation_parameter = array() ;
			$question_rec = $this->model1->get_one(array("question_id" => decoded_string(post_function("question_id"), "&")), "questions") ;
			
			if($question_rec->answer_type == "single_answer") $validation_parameter["correct_answer"] = "Answer&required" ;
			else $validation_parameter["correct_answer[]"] = "Answer&required" ;
			
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
				}
				else
				{
					$choosed_answer = array_to_string($this->input->post("correct_answer"), "%&@") ;
					if($choosed_answer == $question_rec->correct_answer) $flag = true ;
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
	
	public function type4()
	{
		$data["view"] = "questions/type7" ;
		$data["session_data"] = $this->session_data("", "1") ;
		$this->load->view("template/body", $data) ;
	}
	
}