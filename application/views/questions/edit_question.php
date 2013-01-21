<?php $this->load->view("text_editor/tiny_mce") ; ?>
<script type="application/javascript">
$(function(){
	$(".back_button").click(function(){
		var question_id = $("#question_id").val(), question_type = $("#question_type").val(), number_of_choices = $("#number_of_choices").val(), answer_type = $("#answer_type").val() ;
		var url = "<?php echo base_url("questions/edit_question") ; ?>"+"/"+question_id+"/"+question_type+"/"+number_of_choices+"/"+answer_type+"/3" ;
		window.location.href =  url ;
	}) ;
	$(".cancel_button").click(function(){ window.location.href = "<?php echo base_url("questions") ; ?>"; }) ;
}) ;
</script>
<style type="text/css">
.question_type { width:145px !important; height:110px !important; }
</style>
<div id="right">
	<div class="section">
		<?php if($session_data["msg"]) { ?>
			<?php if($session_data["msg"] == "1") { ?> <div class="message red"><span><ul><?php echo validation_errors(); ?></ul></span></div><?php } ?>
            <?php if($session_data["msg"] == "2") { ?> <div class="message red"><span><b>Error</b>: Failed to insert question record.</span></div> <?php } ?>
    	<?php } ?>
    </div>
    
	<div class="section">
    	<div class="box">
        	<div class="title">Add Question<span class="hide"></span></div>
			
            <div class="content">
            	
                <h1>You have chosen</h1>
                <br /><center><img src="<?php echo base_url("images/".$question_type.".png") ; ?>" class="question_type" /></center><br />
                
                <form id="district_form" action="<?php echo base_url("questions/update_question") ; ?>" method="post" enctype="multipart/form-data">
                
                <input type="hidden" id="question_id" name="question_id" value="<?php echo encoded_string($question_rec->question_id, "&", 10) ; ?>" />
                <input type="hidden" id="question_type" name="question_type" value="<?php echo $question_type ; ?>" />
                <input type="hidden" id="number_of_choices" name="number_of_choices" value="<?php echo $number_of_choices ; ?>" />
                <input type="hidden" id="answer_type" name="answer_type" value="<?php echo $answer_type ; ?>" />
                
                <div class="row">
					<label for="question_title">Question Title</label>
					<div class="right"><input type="text" name="question_title" value="<?php echo set_value('question_title', $question_rec->question_title) ; ?>" /></div>
				</div>
                
                <?php if($question_type == "type2" || $question_type == "type3" || $question_type == "type4" || $question_type == "type5") { ?>
                <div class="row">
					<label for="question_scenario">Question Scenario</label>
					<div class="right"><textarea id="question_scenario" name="question_scenario" rows="" cols=""  class="tinymce" style="height : 100px;"><?php echo set_value('question_scenario', $question_rec->question_scenario) ; ?></textarea></div>
				</div>
                <?php } ?>
                
                <?php if($question_type == "type7") { ?>
                <div class="row">
					<label for="question_scenario">Question Scenario</label>
					<div class="right">
                    	<?php $question_scenario = string_to_array($question_rec->question_scenario, "%&@") ; ?>
                        <textarea id="question_scenario1" name="question_scenario1" rows="" cols=""  class="tinymce" style="height : 100px;"><?php echo set_value('question_scenario1', $question_scenario[0]) ; ?></textarea>
                        <textarea id="question_scenario2" name="question_scenario2" rows="" cols=""  class="tinymce" style="height : 100px;"><?php echo set_value('question_scenario2', $question_scenario[1]) ; ?></textarea>
                    </div>           
				</div>
                <?php } ?>
                
                <div class="row">
					<label for="question_statement">Question Statement</label>
					<div class="right"><textarea id="question_statement" name="question_statement" rows="" cols=""  class="tinymce" style="height : 100px;"><?php echo set_value('question_statement', $question_rec->question_statement) ; ?></textarea></div>
				</div>
				
                <?php
					if($number_of_choices) {
					$choice_text = string_to_array($question_rec->choices_text, "%&@") ;
					for($i = 1 ; $i <= $number_of_choices ; $i++) {
				?>
                	<div class="row">
						<label for="choice<?=$i?>">Choice <?=$i?> Text</label>
						<div class="right"><input type="text" id="choice<?=$i?>" name="choice<?=$i?>" value="<?php if($question_rec->number_of_choices >= $i) echo set_value('choice'.$i, $choice_text[$i - 1]) ; else echo set_value('choice'.$i) ; ?>" /></div> <!-- if($question_rec->number_of_choices < $i)  else echo set_value('choice'.$i, $i) ; --> 
					</div>
				<?php } } ?>
                
                <?php if($answer_type == "single_answer" || $answer_type == "multiple_answer") { ?>
					<?php $choice_option = string_to_array($question_rec->correct_answer, "%&@") ; ?>
                    <div class="row">
                        <label>Correct Answer</label>
                        <div class="right">
                            <?php for($i = 1 ; $i <= $number_of_choices ; $i++) { $choice_num = "choice".$i ; ?>
                                <?php if($answer_type == "single_answer") { ?> 
                                    <input type="radio" id="radio-<?=$i?>" name="correct_answer" value="<?=$choice_num?>" <?php if(in_array($choice_num, $choice_option)) echo 'checked="checked"' ; echo set_radio("correct_answer", $choice_num) ; ?>   />
                                    <label for="radio-<?=$i?>">Choice <?=$i?></label>
                                
                                <?php } elseif($answer_type == "multiple_answer") { ?>
                                    <input type="checkbox" id="check-<?=$i?>" name="correct_answer[]" value="<?=$choice_num?>" <?php if(in_array($choice_num, $choice_option)) echo 'checked="checked"' ; echo set_checkbox("correct_answer[]", $choice_num) ; ?> />
                                    <label for="check-<?=$i?>">Choice <?=$i?></label>
                                <?php } ?>
                            <?php } ?>            
                        </div>
                    </div>
                <?php } ?>
                
							
                <div class="row"><div class="right"><button type="submit"><span>Add</span></button>&nbsp;&nbsp;<button type="button" class="back_button"><span>Back</span></button>&nbsp;&nbsp;<button type="button" class="cancel_button"><span>Cancel</span></button></div></div>
				
                </form>
			</div>
		</div>
	</div>
</div>