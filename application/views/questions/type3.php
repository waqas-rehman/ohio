<script type="application/javascript">
$(function(){
	$("#cancel_button").click(function(){ window.location.href = "<?php echo base_url("questions") ; ?>" ; }) ;
}) ;
</script>
<style type="text/css">
.width100 { width:100%; }
.width50 { width:50% ;}
.float_left { float:left ;}
</style>

<div id="right">
	<div class="section">
    	<div class="box">
			<div class="title"><?php echo $question_rec->question_title ; ?><span class="hide"></span></div>
			<div class="content">
				<blockquote>
                	
					<?php if($question_rec->question_type == "type3") { ?>
                    	<div><img src="<?php echo base_url("question_images/".$question_rec->question_image) ; ?>" hspace="5px" align="left" /></div>
                    	<div><?php echo $question_rec->question_scenario ; ?></div>
					<?php } if($question_rec->question_type == "type4") { ?>
                    	<div><center><img src="<?php echo base_url("question_images/".$question_rec->question_image) ; ?>" hspace="5px"/></center></div><div style="clear:both;"></div>
                        <div><?php echo $question_rec->question_scenario ; ?></div>
                    <?php } if($question_rec->question_type == "type5") { ?>
                    	<div><img src="<?php echo base_url("question_images/".$question_rec->question_image) ; ?>" hspace="5px" align="right" /></div>
						<div><?php echo $question_rec->question_scenario ; ?></div>
					<?php } if($question_rec->question_type == "type6") { ?>
                    	<div><center><img src="<?php echo base_url("question_images/".$question_rec->question_image) ; ?>" hspace="5px"/></center></div>
                    <?php } ?>
                    
                </blockquote>
                    
                <p><?php echo $question_rec->question_statement ; ?></p><br />
                
                <form method="post" action="<?php echo base_url("questions/validate_answer") ; ?>">
                
                    <input type="hidden" id="question_id" name="question_id" value="<?php echo encoded_string($question_rec->question_id, "&", 10) ; ?>" />
                    
                    
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
                    
                    
					<div class="row">
						<div class="right"><button type="submit"><span>Submit</span></button>&nbsp;&nbsp;<button id="cancel_button" type="button"><span>Cancel</span></button></div>
					</div>
                </form>
                
            </div>
		</div>