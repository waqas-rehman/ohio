<script type="application/javascript">
$(function(){
	$(".cancel_button").click(function(){
		window.location.href = "<?php echo base_url("districts") ; ?>";
	}) ;
}) ;
</script>
<div id="right">
	<div class="section">
    	<div class="box">
        	<div class="title">View District Record<span class="hide"></span></div>
			<!--
            /* district_id 	district_name 	district_code 	state_id 	district_contact_first_name 	district_contact_last_name 	district_admin_password 	district_contact_email 	district_status /**/
            -->
            <div class="content">
            	<div class="row">
					<label for="district_name">District Name</label>
					<div class="right"><input type="text" name="district_name" value="<?php echo $district_rec->district_name ; ?>" disabled="disabled" /></div>
				</div>
				
                <div class="row">
					<label for="district_code">District Code</label>
					<div class="right"><input type="text" name="district_code" value="<?php echo $district_rec->district_code ; ?>" disabled="disabled" /></div>
				</div>
				
                <div class="row">
                	<label for="state_id">State Name</label>
					<div class="right"><input type="text" name="state_id" value="<?php echo $district_rec->state_name." - ".$district_rec->state_code ; ?>" disabled="disabled" /></div>
				</div>
                
                <div class="row">
                	<label for="district_contact_name">District Contact Name</label>
					<div class="right"><input type="text" name="district_contact_first_name" value="<?php echo $district_rec->district_contact_first_name." ".$district_rec->district_contact_last_name ; ?>" disabled="disabled" /></div>
				</div>
                
                <div class="row">
                	<label for="district_contact_email">District Conact Email</label>
					<div class="right"><input type="text" name="district_contact_email" value="<?php echo $district_rec->district_contact_email ; ?>" disabled="disabled" /></div>
				</div>
                
                <div class="row">
                	<label for="district_status">District Status</label>
					<div class="right"><input type="text" name="district_status" value="<?php echo $district_rec->district_status ; ?>" disabled="disabled" /></div>
				</div>
                
                <div class="row">
                	<label for="district_">Action</label>
					<div class="right">
                    	<a href="<?php echo base_url("districts/send_message/".encoded_string($district_rec->district_id, "&", 10)) ; ?>">Send Message</a> &nbsp;&nbsp; <a href="<?php echo base_url("districts/change_password/".encoded_string($district_rec->district_id, "&", 10)) ; ?>">Change Password</a>
                    </div>
				</div>
					
                <div class="row"><div class="right"><button type="button" class="cancel_button"><span>Back</span></button></div></div>
				
			</div>
		</div>
	</div>
</div>