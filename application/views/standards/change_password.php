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
            <?php if($session_data["msg"] == "2") { ?> <div class="message green"><span><b>Succes</b>: Password updated successfully.</span></div> <?php } ?>
            <?php if($session_data["msg"] == "3") { ?> <div class="message red"><span><b>Error</b>: Failed to update password.</span></div><?php } ?>
    	<?php } ?>
    </div>
    
	<div class="section">
    	<div class="box">
        	<div class="title">Change Password<span class="hide"></span></div>
			<div class="content">
            	<form id="state_update_form" action="<?php echo base_url("districts/update_password") ; ?>" method="post" enctype="multipart/form-data">
                	
                    <input type="hidden" name="district_id" value="<?php echo encoded_string($district_rec->district_id, "&", 10) ; ?>"  />
                    
                     <div class="row">
						<label for="password">New Password</label>
						<div class="right"><input type="password" name="password" value="<?php echo set_value("password") ; ?>" /></div>
                    </div>
					
                    <div class="row">
						<label for="confirm_password">Confirm New Password</label>
						<div class="right"><input type="password" name="confirm_password" value="<?php echo set_value("confirm_password") ; ?>" /></div>
                        <br />
					</div>
					
                    <div class="row">
						<div class="right"><button type="submit"><span>Change</span></button>&nbsp;&nbsp;<button type="button" class="cancel_button"><span>Cancel</span></button></div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>