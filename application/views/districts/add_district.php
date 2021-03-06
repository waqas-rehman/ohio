<script type="application/javascript">
$(function(){
	$(".cancel_button").click(function(){
		window.location.href = "<?php echo base_url("districts") ; ?>";
	}) ;
}) ;
</script>
<div id="right">
	
    <div class="section">
    	<?php if($session_data["msg"]) { ?>
			<?php if($session_data["msg"] == "1") { ?> <div class="message red"><span><ul><?php echo validation_errors(); ?></ul></span></div><?php } ?>
            <?php if($session_data["msg"] == "2") { ?> <div class="message red"><span><b>Error</b>: Failed to insert district record.</span></div> <?php } ?>
    	<?php } ?>
    </div>
    
	<div class="section">
    	<div class="box">
        	<div class="title">Add District Record<span class="hide"></span></div>
			<div class="content">
            	<form id="district_form" action="<?php echo base_url("districts/insert_district") ; ?>" method="post" enctype="multipart/form-data">
                
                    <div class="row">
						<label for="state_name">District Name</label>
						<div class="right"><input type="text" name="district_name" value="<?php echo set_value('district_name'); ?>" /></div>
                    </div>
					
                    <div class="row">
						<label>District Code</label>
						<div class="right"><input type="text" name="district_code" value="<?php echo set_value('district_code'); ?>" /></div>
					</div>
					
                    <div class="row">
                    	<label>State</label>
						<div class="right">
							<select id="state_id" name="state_id" class="big">
                            	<option value="">Choose State</option>
                            	<?php if($state_recs){ foreach($state_recs as $rec): ?>
								<option value="<?php echo $rec->state_id ; ?>" <?php echo set_select('state_id', $rec->state_id) ; ?>><?php echo $rec->state_name." - ".$rec->state_code ; ?></option>
								<?php endforeach ; } ?>
							</select>
						</div>
					</div>
                    
                    <div class="row">
						<label for="state_name">District Contact First Name</label>
						<div class="right"><input type="text" name="district_contact_first_name" value="<?php echo set_value('district_contact_first_name'); ?>" /></div>
                    	<br />
                    </div>
					
                    <div class="row">
						<label>District Contact Last Name</label>
						<div class="right"><input type="text" name="district_contact_last_name" value="<?php echo set_value('district_contact_last_name'); ?>" /></div>
						<br />
                    </div>
                    
                    <div class="row">
						<label>District Contact Email</label>
						<div class="right"><input type="text" name="district_contact_email" value="<?php echo set_value('district_contact_email'); ?>" /></div>
                    </div>
                    
                    <div class="row">
                    	<label>District Status</label>
						<div class="right">
							<select id="district_status" name="district_status" class="medium">
								<option value="Active" <?php echo set_select('district_status', 'Active', TRUE); ?>>Active</option>
								<option value="Deactive" <?php echo set_select('district_status', 'Deactive'); ?>>Deactive</option>
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