<script type="application/javascript">
$(function(){
	$(".cancel_button").click(function(){
		window.location.href = "<?php echo base_url("states") ; ?>";
	}) ;
}) ;
</script>
<div id="right">
	
    <div class="section">
    	<?php if($session_data["msg"]) { ?>
			<?php if($session_data["msg"] == "1") { ?> <div class="message red"><ul><?php echo validation_errors(); ?></ul></div><?php } ?>
            <?php if($session_data["msg"] == "2") { ?> <div class="message red"><span><b>Error</b>: Failed to insert state record.</span></div> <?php } ?>
    	<?php } ?>
    </div>
    
	<div class="section">
    	<div class="box">
        	<div class="title">Add State Record<span class="hide"></span></div>
			<div class="content">
            	<form id="state_update_form" action="<?php echo base_url("states/insert_state") ; ?>" method="post" enctype="multipart/form-data">
                
                    <div class="row">
						<label for="state_name">State Name</label>
						<div class="right"><input type="text" name="state_name" value="<?php echo set_value('state_name'); ?>" /></div>
                    </div>
					
                    <div class="row">
						<label>State Code</label>
						<div class="right"><input type="text" name="state_code" value="<?php echo set_value('state_code'); ?>" /></div>
					</div>
					
                    <div class="row">
                    	<label>State Status</label>
							<div class="right">
								<select id="state_status" name="state_status" class="medium">
									<option value="Active" <?php echo set_select('state_status', 'Active', TRUE); ?>>Active</option>
									<option value="Deactive" <?php echo set_select('state_status', 'Deactive'); ?>>Deactive</option>
								</select>
								</div>
							</div>
					
                    <div class="row">
						<div class="right"><button type="submit"><span>Add</span></button>&nbsp;&nbsp;<button type="button" class="cancel_button"><span>Cancel</span></button></div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>