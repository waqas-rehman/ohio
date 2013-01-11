<script type="application/javascript">
$(function(){
	$("#cancel_button").click(function(){
		window.location.href = "<?php echo base_url("questions") ; ?>";
	}) ;
}) ;
</script>

<div id="right">
	
    <div class="section">
		<?php if($session_data["msg"]) { ?>
			<?php if($session_data["msg"] == "1") { ?> <div class="message red"><span><ul><?php echo validation_errors(); ?></ul></span></div><?php } ?>
    	<?php } ?>
    </div>
    

	<div class="section">
    	<div class="box">
			<div class="title"><?php echo $question_rec->question_title ; ?><span class="hide"></span></div>
			<div class="content">
            	
                <p><?php echo $question_rec->question_statement ; ?></p><br />
                
                <form method="post" action="<?php echo base_url("questions/validate_answer") ; ?>">
					
                    <input type="hidden" id="question_id" name="question_id" value="<?php echo encoded_string($question_rec->question_id, "&", 10) ; ?>" />
                    
                    <div class="row">
                    	<?php
							$choices = string_to_array($question_rec->choices_text, "%&@") ;
							if($choices)
							{
								$i = 1 ;
								foreach($choices as $rec):
						
								if($question_rec->answer_type == "single_answer") { ?>
                                    <div class="right left"><div class="custom-radio"><input type="radio" id="radio-<?=$i?>" name="correct_answer" value="choice<?=$i?>" /><label for="radio-<?=$i?>"><?=$rec?></label></div></div><br />
                        	<?php } else { ?>
                        			<div class="right left"><div class="custom-checkbox"><input type="checkbox" id="check-<?=$i?>" name="correct_answer[]" value="choice<?=$i?>" /><label for="check-<?=$i?>"><?=$rec?></label></div></div><br />
                        	<?php
								  }
									$i = $i + 1 ;
									endforeach ;
								}
							?>
                    </div>
                    
                    
					<div class="row">
						<div class="right"><button type="submit"><span>Submit</span></button>&nbsp;&nbsp;<button id="cancel_button" type="button"><span>Cancel</span></button></div>
					</div>
                </form>
                
            </div>
		</div>