<script type="application/javascript">
$(function(){
	$("#cancel_button").click(function(){ close() ; }) ;
}) ;
</script>

<div id="right">
	
    <div class="section">
    	<?php if($session_data["msg"] == "1") { ?>
			<div class="message green"><span><b>Succes</b>: Your answer is correct.</span></div>
        <?php } else { ?>
        	<div class="message red"><span><b>Error</b>: Your answer is not correct.</span></div>
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