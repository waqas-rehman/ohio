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
            <?php if($session_data["msg"] == "2") { ?> <div class="message green"><span><b>Succes</b>: State record inserted successfully.</span></div> <?php } ?>
    	<?php } ?>
    </div>
    
	<div class="section">
    	<div class="box">
        	<div class="title">Edit State Record<span class="hide"></span></div>
			<div class="content">
            	<form id="state_update_form" action="<?php echo base_url("states/update_state") ; ?>" method="post" enctype="multipart/form-data">
                	
                    <input type="hidden" name="state_id" value="<?php echo encoded_string($state_rec->state_id, "&", 10) ; ?>"  />
                    
                    <div class="row">
						<label for="state_name">State Name</label>
						<div class="right"><input type="text" name="state_name" value="<?php echo set_value("state_name", $state_rec->state_name) ; ?>" /></div>
                    </div>
					
                    <div class="row">
						<label>State Code</label>
						<div class="right"><input type="text" name="state_code" value="<?php echo set_value("state_code", $state_rec->state_code) ; ?>" /></div>
					</div>
					
                    <div class="row">
                    	<label>State Status</label>
							<div class="right">
								<select id="state_status" name="state_status" class="medium">
									<option value="Active" <?php if($state_rec->state_status == 'Active') echo set_select('state_status', "Active", TRUE) ; else echo set_select('state_status', "Active") ; ?>>Active</option>
									<option value="Deactive" <?php if($state_rec->state_status == 'Deactive') echo set_select('state_status', "Deactive", TRUE) ; else echo set_select('state_status', "Deactive") ; ?>>Deactive</option>
								</select>
								</div>
							</div>
					
                    <div class="row">
						<div class="right"><button type="submit"><span>Update</span></button>&nbsp;&nbsp;<button type="button" class="cancel_button"><span>Cancel</span></button></div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>