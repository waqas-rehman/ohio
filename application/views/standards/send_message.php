<script type="application/javascript">
$(function(){
	$(".cancel_button").click(function(){
		window.location.href = "<?php echo base_url("districts") ; ?>";
	}) ;
}) ;
</script>
<div id="right">
	<div class="section">
    	<div class="message blue"><span><b>Information</b>: For multiple recipients use comma(,) separated email addresses (e.g. mail@domain.com, mail@domain.com, mail@domain.com)</span></div>
		<?php if($session_data["msg"]) { ?>
			<?php if($session_data["msg"] == "1") { ?> <div class="message red"><span><ul><?php echo validation_errors(); ?></ul></span></div><?php } ?>
            <?php if($session_data["msg"] == "2") { ?> <div class="message red"><span><b>Error</b>: Failed to insert district record.</span></div> <?php } ?>
    	<?php } ?>
    </div>
    
	<div class="section">
    	<div class="box">
        	<div class="title">Send Message<span class="hide"></span></div>
			
            <div class="content">
            	
                <form id="district_form" action="<?php echo base_url("districts/deliver_message") ; ?>" method="post" enctype="multipart/form-data">
                
                <input type="hidden" name="district_id" value="<?php echo encoded_string($district_rec->district_id, "&", 10) ; ?>" />
                
                <div class="row">
					<label for="email_address">Email Address</label>
					<div class="right"><input type="text" name="email_address" value="<?php echo set_value('email_address', $district_rec->district_contact_email) ; ?>" /></div>
				</div>
				
                <div class="row">
					<label for="cc">CC</label>
					<div class="right"><input type="text" name="email_cc" value="<?php echo set_value('email_cc') ; ?>" /></div>
				</div>
				
                <div class="row">
                	<label for="bcc">BCC</label>
					<div class="right"><input type="text" name="email_bcc" value="<?php echo set_value('email_bcc') ; ?>" /></div>
				</div>
                
                <div class="row">
                	<label for="subject">Subject</label>
					<div class="right"><input type="text" name="email_subject" value="<?php echo set_value('email_subject') ; ?>" /></div>
				</div>
                
                <div class="row">
                	<textarea name="email_message" rows="" cols="" class="wysiwyg" style="height : 100px;"><?php echo set_value('email_message') ; ?></textarea>
				</div>
                
                <div class="row">
					<label>File Attachment</label>
					<div class="right"><input type="file" name="email_file" id="email_file" /></div>
				</div>
					
                <div class="row"><div class="right"><button type="submit"><span>Send</span></button>&nbsp;&nbsp;<button type="button" class="cancel_button"><span>Back</span></button></div></div>
				
                </form>
			</div>
		</div>
	</div>
</div>