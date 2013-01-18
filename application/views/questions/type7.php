<script type="application/javascript">
$(function(){
	$("#cancel_button").click(function(){ window.location.href = "<?php echo base_url("questions") ; ?>" ; }) ;
}) ;
</script>
<style type="text/css">
.type4{width:50%; float:left; text-align:left; }
.type4 .padding { padding:10px ;}
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
				<blockquote>
                	<?php $question_scenario = string_to_array($question_rec->question_scenario, "%&@") ; ?>
                	<div class="type4"><div class="padding"><?php echo $question_scenario[0] ; ?></div></div>
                    <div class="type4"><div class="padding"><?php echo $question_scenario[1] ; ?></div></div>
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