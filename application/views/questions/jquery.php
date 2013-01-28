<script type="text/javascript" src="<?php echo base_url() ; ?>js/ajaxupload.3.5.js" ></script>
<script type="application/javascript">
$(function(){
	$("input:radio[name=question_type]:checked").live("click", function(){ perform_actions() ; }) ;
	$("input:text[name=number_of_choices]").live("blur", function(){ perform_actions() ; }) ;
	$("input:radio[name=answer_type]:checked").live("click", function(){ perform_actions() ; }) ;
	$("#submit_form").live("click", function(){ if(!validate_form()) return false ; else $("#add_question_form").submit() ; }) ;
}) ;

function validate_form()
{
	 
	var question_type = $("input:radio[name=question_type]:checked").val() ;
	var no_of_choices = $("#number_of_choices").val() ;
	var answer_type = $("input:radio[name=answer_type]:checked").val() ;
		
	var question_statement = tinymce.get('question_statement').getContent() ; 
	if(question_statement == "") { alert("Question Statment is required") ; return false ; }
	
	if(question_type == "type2" || question_type == "type3" || question_type == "type4" || question_type == "type5")
	{
		var question_scenario = tinymce.get('question_scenario').getContent() ; 
		if(question_scenario == "") { alert("Question Scenario is required") ; return false ; }
	}
	else if(question_type == "type7")
	{
		var question_scenario1 = tinymce.get('question_scenario1').getContent() ; 
		if(question_scenario1 == "") { alert("First Half Question Scenario is required") ; return false ; }
		var question_scenario2 = tinymce.get('question_scenario2').getContent() ; 
		if(question_scenario2 == "") { alert("Second half Question Scenario is required") ; return false ; }
	}
	
	if(answer_type == "multiple_option") {if($('input:checkbox[name=correct_answer[]]:checked').length <= 0) { alert("Check at least one checkbox") ; return false ; } }
	
	if(question_type == "type3" || question_type == "type4" || question_type == "type5" || question_type == "type6")
	{
		var question_image = $('#question_image').val() ; 
		if(question_image == "") { alert("Question Image is required") ; return false ; }
	}
	
	return true ;
}

function perform_actions()
{
	var question_type = $("input:radio[name=question_type]:checked").val() ;
	var no_of_choices = $("#number_of_choices").val() ;
	var answer_type = $("input:radio[name=answer_type]:checked").val() ;
	
	if(question_type == "type1" || question_type == "type6")
	{
		if($("div#question_scenario_div").hasClass("visible")) $("div#question_scenario_div").toggleClass('visible hidden') ;
		if($("div#question_scenario1_div").hasClass("visible")) $("div#question_scenario1_div").toggleClass('visible hidden') ;
		if($("div#question_scenario2_div").hasClass("visible")) $("div#question_scenario2_div").toggleClass('visible hidden') ;
		if($("div#image_upload_div").hasClass("visible")) $("div#image_upload_div").toggleClass('visible hidden') ;
	}
	else if(question_type == "type2" || question_type == "type3" || question_type == "type4" || question_type == "type5")
	{
		if($("div#question_scenario_div").hasClass("hidden")) $("div#question_scenario_div").toggleClass('hidden visible') ;
		if($("div#question_scenario1_div").hasClass("visible")) $("div#question_scenario1_div").toggleClass('visible hidden') ;
		if($("div#question_scenario2_div").hasClass("visible")) $("div#question_scenario2_div").toggleClass('visible hidden') ;
	}
	else if(question_type == "type7")
	{
		if($("div#question_scenario_div").hasClass("visible")) $("div#question_scenario_div").toggleClass('visible hidden') ;
		if($("div#question_scenario1_div").hasClass("hidden")) $("div#question_scenario1_div").toggleClass('hidden visible') ;
		if($("div#question_scenario2_div").hasClass("hidden")) $("div#question_scenario2_div").toggleClass('hidden visible') ;
	}
	
	if(question_type == "type3" || question_type == "type4" || question_type == "type5" || question_type == "type6") {
	
		if($("div#image_upload_div").hasClass("hidden"))
			$("div#image_upload_div").toggleClass('hidden visible') ;
	} else { 
		if($("div#image_upload_div").hasClass("visible"))
			$("div#image_upload_div").toggleClass('visible hidden') ;
	}
	
	if(isNaN(no_of_choices)) alert("Number of Choices must be a number") ;
	else if(answer_type != "large_text_box" && answer_type != "small_text_box")
	{
		if((no_of_choices <= 0 && no_of_choices >= 7)) alert("Number of Choices should be between 1-6") ;	
		else
		{
			 
			if($("div#text_fields").hasClass("hidden")) $("div#text_fields").toggleClass('hidden visible') ;
			if($("div#radio_checkboxes").hasClass("hidden")) $("div#radio_checkboxes").toggleClass('hidden visible') ;
			$("#radio_checkboxes").html("") ;
			
			var input_field_texts = "", total_fields = $("#hidden_total_text_fields").val() ;
			
			if(total_fields > 0) {
				for(var i = 1 ; i <= total_fields ; i++) {
					if((i <= total_fields) && ($("#choice"+i).val() != "")) {
						input_field_texts = input_field_texts + ($("#choice"+i).val())+ "@%#" ;
					}
				}
			}
			
			input_field_texts = input_field_texts.substr(0, input_field_texts.lastIndexOf("@%#")) ;
			var data1 = "num_of_choices="+no_of_choices+"&input_field_texts="+input_field_texts ; 
			var html_data = "" ;
			
			$.ajax
			({
				type:"POST",
				async:false,
				url:"<?php echo base_url() ; ?>questions/get_textboxes",
				data:data1,
				success:function(msg) { html_data = msg ; }
			});
			
			if(html_data != "fail") $("#text_fields").html(html_data) ;
			else $("#text_fields").html("") ;
			
			var data2 = "answer_type="+answer_type+"&no_of_choices="+no_of_choices ;
			html_data = "" ;
			
			$.ajax
			({
				type:"POST",
				async:false,
				url:"<?php echo base_url("questions/get_radio_checkboxes") ; ?>",
				data:data2,
				success:function(msg) { html_data = msg ; }
			}) ;
			
			if(html_data != "fail") $("#radio_checkboxes").html(html_data) ;
			else $("#radio_checkboxes").html("") ;
			
		 	$(".checkboxes_radio").each(function(){
        		if($(this).parents("table").length === 0)
            		$(this).customInput();
    		});
		 
			$("#hidden_total_text_fields").val(no_of_choices) ;
			validator.refresh() ;
		}
	}
	else 
	{
		if($("div#text_fields").hasClass("visible")) $("div#text_fields").toggleClass('visible hidden') ;
		if($("div#radio_checkboxes").hasClass("visible")) $("div#radio_checkboxes").toggleClass('visible hidden') ;
	}
	
	
}
</script>