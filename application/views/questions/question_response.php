<script type="application/javascript">
$(function(){
	$("#cancel_button").click(function(){ close() ; }) ;
}) ;
</script>

<div id="right">
	
    <div class="section">
    	<?php if($answer_type == "single_answer" || $answer_type == "multiple_answer") { ?>
			<?php if($answer) { ?> <div class="message green"><span><b>Succes</b>: Your answer is correct.</span></div>
            <?php } else { ?> <div class="message red"><span><b>Error</b>: Your answer is not correct.</span></div><?php } ?>
    	<?php } else { ?>
        	<div class="message green"><span><b>Succes</b>: Your answer is <b><?php echo $text_answer ; ?></b>.</span></div>
		<?php } ?>
    </div>
    
    <div class="section">
    	<div class="box">
			<div class="content">
            	<div class="row">
                	<div class="right"><button id="cancel_button" type="button"><span>Close</span></button></div>
				</div>
                
            </div>
		</div>
    </div>