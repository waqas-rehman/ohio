<script type="application/javascript">
$(function(){
	$("#cancel_button").click(function(){
		window.location.href = "<?php echo base_url("questions") ; ?>";
	}) ;
}) ;
</script>

<style type="text/css">
.width100 { width:100%; }
.width50 { width:50% ;}
.float_left { float:left ;}
</style>

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
            
            	<?php if($question_rec->question_type == "type2" || $question_rec->question_type == "type3" || $question_rec->question_type == "type4" || $question_rec->question_type == "type5" || $question_rec->question_type == "type6" || $question_rec->question_type == "type6") { ?>
                <blockquote>
                	<?php
						if($question_rec->question_type == "type2")
							echo $question_rec->question_scenario ;
						elseif($question_rec->question_type == "type3")
						{ 
					?>
                    	<div><img src="<?php echo base_url("question_images/".$question_rec->question_image) ; ?>" hspace="5px" align="left" /></div>
                    	<div><?php echo $question_rec->question_scenario ; ?></div>
					<?php } elseif($question_rec->question_type == "type4") { ?>
                    	<div><center><img src="<?php echo base_url("question_images/".$question_rec->question_image) ; ?>" hspace="5px"/></center></div><div style="clear:both;"></div>
                        <div><?php echo $question_rec->question_scenario ; ?></div>
                    <?php } elseif($question_rec->question_type == "type5") { ?>
                    	<div><img src="<?php echo base_url("question_images/".$question_rec->question_image) ; ?>" hspace="5px" align="right" /></div>
						<div><?php echo $question_rec->question_scenario ; ?></div>
					<?php } elseif($question_rec->question_type == "type6") { ?>
                    	<div><center><img src="<?php echo base_url("question_images/".$question_rec->question_image) ; ?>" hspace="5px"/></center></div>
					<?php } elseif($question_rec->question_type == "type7") { ?>
						<?php $question_scenario = string_to_array($question_rec->question_scenario, "%&@") ; ?>
                        <div class="type4"><div class="padding"><?php echo $question_scenario[0] ; ?></div></div>
                        <div class="type4"><div class="padding"><?php echo $question_scenario[1] ; ?></div></div>
                    <?php } ?>
                </blockquote>
                <?php } ?>
                
                <p><?php echo $question_rec->question_statement ; ?></p><br />
                
                <form method="post" action="<?php echo base_url("questions/validate_answer") ; ?>">
					
                    <input type="hidden" id="question_id" name="question_id" value="<?php echo encoded_string($question_rec->question_id, "&", 10) ; ?>" />
                    <input type="hidden" id="answer_type" name="answer_type" value="<?php echo $question_rec->answer_type ; ?>" />
                    <?php if($question_rec->answer_type == "single_answer" || $question_rec->answer_type == "multiple_answer") { ?>
                    <div class="row">
                    	<div class="width100">
                       	<?php
							$choices = string_to_array($question_rec->choices_text, "%&@") ;
							
							$i = 1 ;
							
							if($choices)
							{
								foreach($choices as $rec):
								if($question_rec->answer_type == "single_answer")
								{
						?>
                        	<div class="width50 float_left">
                                	<div class="right left"><div class="custom-radio"><input type="radio" id="radio-<?=$i?>" name="correct_answer" value="choice<?=$i?>" /><label for="radio-<?=$i?>"><?=$rec?></label></div></div>
                            	</div>
                            <?php if(($i % 2 == 0) && ($i != 1)) echo '</div><div style="clear:both;"></div><br /><div class="width100">' ; ?>
						<?php } else { ?>
                        	<div class="width50 float_left">
                        	<div class="right left"><div class="custom-checkbox"><input type="checkbox" id="check-<?=$i?>" name="correct_answer[]" value="choice<?=$i?>" /><label for="check-<?=$i?>"><?=$rec?></label></div></div>
                            
                                	</div>
                            <?php if(($i % 2 == 0) && ($i != 1)) echo '</div><div style="clear:both;"></div><br /><div class="width100">' ; ?>
						
                        <?php
							  }
								$i = $i + 1 ;
									endforeach ;
								}
							?>
                        <?php  echo '</div><div style="clear:both;"></div>' ; ?>
                        <br />
                    </div>
                   	<?php } ?>
                    
                    <?php if($question_rec->answer_type == "large_text_box") { ?>
                    	<div class="row">
							<div class="right left"><textarea id="correct_answer" name="correct_answer" rows="" cols="" style="height : 100px;"><?php echo set_value("correct_answer") ; ?></textarea></div>
						</div>
                    <?php } if($question_rec->answer_type == "small_text_box") { ?>
                    	<div class="row">
							<div class="right left"><input type="text"  id="correct_answer" name="correct_answer" value="<?php echo set_value("correct_answer") ; ?>" /></div>
						</div>
					<?php } ?>
                    
                    <div class="row">
							<div class="right"><button type="submit"><span>Submit</span></button>&nbsp;&nbsp;<button id="cancel_button" type="button"><span>Cancel</span></button></div>
					</div>
                    
                </form>
                
            </div>
		</div>