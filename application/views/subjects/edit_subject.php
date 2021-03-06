<script type="application/javascript">
$(function(){
	$(".cancel_button").click(function(){
		window.location.href = "<?php echo base_url("subjects") ; ?>";
	}) ;
}) ;
</script>
<div id="right">
	
    <div class="section">
    	<?php if($session_data["msg"]) { ?>
			<?php if($session_data["msg"] == "1") { ?> <div class="message red"><span><ul><?php echo validation_errors(); ?></ul></span></div><?php } ?>
            <?php if($session_data["msg"] == "2") { ?> <div class="message green"><span><b>Succes</b>: Subject record inserted successfully.</span></div> <?php } ?>
    	<?php } ?>
    </div>
    
	<div class="section">
    	<div class="box">
        	<div class="title">Edit Subject Record<span class="hide"></span></div>
			<div class="content">
            	<form id="state_update_form" action="<?php echo base_url("subjects/update_subject") ; ?>" method="post" enctype="multipart/form-data">
                	
                    <input type="hidden" name="subject_id" value="<?php echo encoded_string($subject_rec->subject_id, "&", 10) ; ?>"  />
                    
                    <div class="row">
						<label for="state_name">Subject Name</label>
						<div class="right"><input type="text" name="subject_name" value="<?php echo set_value("subject_name", $subject_rec->subject_name) ; ?>" maxlength="15" /></div>
                    </div>
					
					
                    <div class="row">
                    	<label>Subject Status</label>
							<div class="right">
								<select id="subject_status" name="subject_status" class="medium">
									<option value="Active" <?php if($subject_rec->subject_status == 'Active') echo set_select('subject_status', "Active", TRUE) ; else echo set_select('subject_status', "Active") ; ?>>Active</option>
									<option value="Deactive" <?php if($subject_rec->subject_status == 'Deactive') echo set_select('subject_status', "Deactive", TRUE) ; else echo set_select('subject_status', "Deactive") ; ?>>Deactive</option>
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