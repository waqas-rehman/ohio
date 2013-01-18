<script type="application/javascript">
$(function(){
	$(".back_button").click(function(){
		var question_type = $("#question_type").val(), number_of_choices = $("#number_of_choices").val(), answer_type = $("#answer_type").val() ;
		var url = "<?php echo base_url("questions/choose_question_type") ; ?>"+"/"+question_type+"/"+number_of_choices+"/"+answer_type+"/0" ;
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
                <br />
                <center><img src="<?php echo base_url("images/".$question_type.".png") ; ?>" class="question_type" /></center>
                <br />
                
                <form id="district_form" action="<?php echo base_url("questions/insert_question") ; ?>" method="post" enctype="multipart/form-data">
                
                <input type="hidden" id="question_type" name="question_type" value="<?php echo $question_type ; ?>" />
                <input type="hidden" id="number_of_choices" name="number_of_choices" value="<?php echo $number_of_choices ; ?>" />
                <input type="hidden" id="answer_type" name="answer_type" value="<?php echo $answer_type ; ?>" />
                
                <div class="row">
					<label for="question_title">Question Title</label>
					<div class="right"><input type="text" name="question_title" value="<?php echo set_value('question_title') ; ?>" /></div>
				</div>
                
                <?php if($question_type == "type2" || $question_type == "type3" || $question_type == "type4" || $question_type == "type5") { ?>
                <div class="row">
					<label for="question_scenario">Question Scenario</label>
					<div class="right"><textarea id="question_scenario" name="question_scenario" rows="" cols="" class="wysiwyg" style="height : 100px;"><?php echo set_value('question_scenario') ; ?></textarea></div>
				</div>
                <?php } ?>
                
                <?php if($question_type == "type7") { ?>
                <div class="row">
					<label for="question_scenario">Question Scenario</label>
					<div class="right">
                        <textarea id="question_scenario1" name="question_scenario1" rows="" cols="" class="wysiwyg" style="height : 100px;"><?php echo set_value('question_scenario1') ; ?></textarea>
                        <textarea id="question_scenario2" name="question_scenario2" rows="" cols="" class="wysiwyg" style="height : 100px;"><?php echo set_value('question_scenario2') ; ?></textarea>
                    </div>           
				</div>
                <?php } ?>
                
                <div class="row">
					<label for="question_statement">Question Statement</label>
					<div class="right"><textarea id="question_statement" name="question_statement" rows="" cols="" class="wysiwyg" style="height : 100px;"><?php echo set_value('question_statement') ; ?></textarea></div>
				</div>
				
                <?php if($number_of_choices) {
						for($i = 1 ; $i <= $number_of_choices ; $i++) { ?>
                	<div class="row">
						<label for="choice<?=$i?>">Choice <?=$i?> Text</label>
						<div class="right"><input type="text" name="choice<?=$i?>" value="<?php echo set_value('choice'.$i) ; ?>" /></div>
					</div>
				<?php } } ?>
                
                <?php if($answer_type == "single_answer" || $answer_type == "multiple_answer") { ?>
                <div class="row">
                	<label>Correct Answer</label>
					<div class="right">
                    	<?php for($i = 1 ; $i <= $number_of_choices ; $i++) { ?>
                        	<?php if($answer_type == "single_answer") { ?> 
                            	<input type="radio" id="radio-<?=$i?>" name="correct_answer" value="choice<?=$i?>" <?php echo set_radio("correct_answer","choice".$i) ; ?> />
                            	<label for="radio-<?=$i?>">Choice <?=$i?></label>
                            <?php } elseif($answer_type == "multiple_answer") { ?>
								<input type="checkbox" id="check-<?=$i?>" name="correct_answer[]" value="choice<?=$i?>" <?php echo set_checkbox('correct_answer[]', "choice".$i); ?> />
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