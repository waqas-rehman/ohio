<script type="application/javascript">
$(function(){ $(".cancel_button").click(function(){ window.location.href = "<?php echo base_url("questions") ; ?>"; }) ; }) ;
</script>
<style type="text/css">
.question_type { width:145px !important; height:110px !important; }
.height { height:125px !important ;}
</style>
<div id="right">
	
    <div class="section">
		<?php if($session_data["msg"]) { ?>
			<?php if($session_data["msg"] == "1") { ?> <div class="message red"><span><ul><?php echo validation_errors(); ?></ul></span></div><?php } ?>
    	<?php } ?>
    </div>
    
    <div class="section">
		<div class="box"><div class="title">Choose Question Type<span class="hide"></span></div>
		<div class="content">
        <?php
			if($session_data["msg"] == "3")
			{
				$page_question_type = $question_type ;
				$page_no_of_choices = $number_of_choices ;
				$page_answer_type = $answer_type ;
			}
			else
			{
				$page_question_type = $question_rec->question_type ;
				$page_no_of_choices = $question_rec->number_of_choices ;
				$page_answer_type = $question_rec->answer_type ;
			}
		?>
			<form method="post" action="<?php echo base_url("questions/update_question_type") ; ?>">
				<input type="hidden" id="question_id" name="question_id" value="<?php echo encoded_string($question_rec->question_id, "&", 10) ; ?>" />
                <div class="row height">
            		<label for="">Choose Question Type</label>
					<div class="right">
                    	<div class="custom-radio">
                       		<input type="radio" id="radio-1" name="question_type" value="type1" <?php if($page_question_type == "type1") echo set_radio("question_type", "type1", TRUE) ; else echo set_radio("question_type", "type1") ; ?>  />
                       		<label for="radio-1"><img src="<?php echo base_url("images/type1.png") ; ?>" class="question_type"  /></label>
                        </div>
                        <div class="custom-radio">
                			<input type="radio" id="radio-2" name="question_type" value="type2" <?php if($page_question_type == "type2") echo set_radio("question_type", "type2", TRUE) ; else echo set_radio("question_type", "type2") ; ?> />
                      		<label for="radio-2"><img src="<?php echo base_url("images/type2.png") ; ?>" class="question_type" /></label>
               			</div>
                        <div class="custom-radio">
                			<input type="radio" id="radio-3" name="question_type" value="type3" <?php if($page_question_type == "type3") echo set_radio("question_type", "type3", TRUE) ; else echo set_radio("question_type", "type3") ; ?> />
                       		<label for="radio-3"><img src="<?php echo base_url("images/type3.png") ; ?>" class="question_type" /></label>
                		</div>
                        <div class="custom-radio">
                			<input type="radio" id="radio-4" name="question_type" value="type4" <?php if($page_question_type == "type4") echo set_radio("question_type", "type4", TRUE) ; else echo set_radio("question_type", "type4") ; ?> />
                      		<label for="radio-4"><img src="<?php echo base_url("images/type4.png") ; ?>" class="question_type" /></label>
                      	</div>
                   </div>    
                </div>
                
                <div class="row height">
            		<label for=""></label>
					<div class="right">
                    	<div class="custom-radio">
                			<input type="radio" id="radio-5" name="question_type" value="type5" <?php if($page_question_type == "type5") echo set_radio("question_type", "type5", TRUE) ; else echo set_radio("question_type", "type5") ; ?> />
                      		<label for="radio-5"><img src="<?php echo base_url("images/type5.png") ; ?>" class="question_type" /></label>
                        </div>
                        <div class="custom-radio">
                			<input type="radio" id="radio-6" name="question_type" value="type6" <?php if($page_question_type == "type6") echo set_radio("question_type", "type6", TRUE) ; else echo set_radio("question_type", "type6") ; ?> />
                     		<label for="radio-6"><img src="<?php echo base_url("images/type6.png") ; ?>" class="question_type" /></label>
                      	</div>
                        <div class="custom-radio">
                			<input type="radio" id="radio-7" name="question_type" value="type7" <?php if($page_question_type == "type7") echo set_radio("question_type", "type7", TRUE) ; else echo set_radio("question_type", "type7") ; ?> />
                      		<label for="radio-7"><img src="<?php echo base_url("images/type7.png") ; ?>" class="question_type" /></label>
                      	</div>
                	</div>
             	</div>
				
                <div class="row">
                	<label for="">Number of Choices</label>
                    <div class="right"><input type="text" name="number_of_choices" value="<?php echo set_value('number_of_choices', $page_no_of_choices) ;?>" /></div>
                </div>
                
                <div class="row">
                	<label for="">Answer Type</label>
					
                    <div class="right">
                    	<div class="custom-radio">
                        	<input type="radio" id="radio-10" name="answer_type" value="single_answer" <?php if($page_answer_type == "single_answer") echo set_radio('answer_type', 'single_answer', true) ; else echo set_radio('answer_type', 'single_answer') ; ?> />
                            <label for="radio-10">Single Answer Question (Radio Buttons)</label>
                        </div>
                    </div>
                    
                    <div class="right">
                    	<div class="custom-radio">
                        	<input type="radio" id="radio-11" name="answer_type" value="multiple_answer" <?php if($page_answer_type == "multiple_answer") echo set_radio('answer_type', 'multiple_answer', true) ; else echo set_radio('answer_type', 'multiple_answer') ; ?> />
                            <label for="radio-11">Multiple Answer Question (Checkboxes)</label>
                        </div>
                    </div>
                    
                    <div class="right">
                    	<div class="custom-radio">
                        	<input type="radio" id="radio-12" name="answer_type" value="large_text_box" <?php if($page_answer_type == "large_text_box") echo set_radio('answer_type', 'large_text_box', true) ; else echo set_radio('answer_type', 'large_text_box') ; ?> />
                            <label for="radio-12">Large Text Box</label>
                        </div>
                    </div>
                    
                    <div class="right">
                    	<div class="custom-radio">
                        	<input type="radio" id="radio-13" name="answer_type" value="small_text_box" <?php if($page_answer_type == "small_text_box") echo set_radio('answer_type', 'small_text_box', true) ; else echo set_radio('answer_type', 'small_text_box') ; ?> />
                            <label for="radio-13">Small Text Box</label>
                        </div>
                    </div>
                    
                </div>
                
                <div class="row">
					<div class="right"><button type="submit"><span>Next&nbsp;&gt;&gt;</span></button>&nbsp;&nbsp;<button class="cancel_button" type="button"><span>Cancel</span></button></div>
				</div>							
			
            </form>
		</div>
	</div>
</div>
