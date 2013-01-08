<script type="application/javascript">
$(function(){
	$(".cancel_button").click(function(){
		window.location.href = "<?php echo base_url("standards") ; ?>";
	}) ;
}) ;
</script>
<div id="right">
	<div class="section">
    	<div class="box">
        	<div class="title">View Standard Record<span class="hide"></span></div>
            
            <div class="content">
            	<div class="row">
					<label for="standard_subject">Standard Subject</label>
					<div class="right"><input type="text" name="standard_subject" value="<?php echo $standard_rec->subject_name ; ?>" disabled="disabled" maxlength="" /></div>
				</div>
				
                <div class="row">
					<label for="standard_grade">Standard Grade</label>
					<div class="right"><input type="text" name="standard_grade" value="<?php echo $standard_rec->standard_grade ; ?>" disabled="disabled" maxlength="" /></div>
				</div>
				
                <div class="row">
                	<label for="standard_pc_domain_code">Pro-Core Domain Code</label>
					<div class="right"><input type="text" name="standard_pc_domain_code" value="<?php echo $standard_rec->standard_pc_domain_code ; ?>" disabled="disabled" maxlength="" /></div><br />
				</div>
                
                <div class="row">
                	<label for="">Domain Description</label>
					<div class="right"><input type="text" name="standard_domain_description" value="<?php echo $standard_rec->standard_domain_description ; ?>" disabled="disabled" maxlength="" /></div>
				</div>
                
                <div class="row">
                	<label for="standard_pc_standard_number">Pro-Core Standard Number</label>
					<div class="right"><input type="text" name="standard_pc_standard_number" value="<?php echo $standard_rec->standard_pc_standard_number ; ?>" disabled="disabled" maxlength="" /></div><br />
				</div>
                
                <div class="row">
                	<label for="standard_learning_standard_description">Learning Standard Description</label>
					<div class="right"><input type="text" name="standard_learning_standard_description" value="<?php echo $standard_rec->standard_learning_standard_description ; ?>" disabled="disabled"  maxlength="" /></div><br />
				</div>
                
                <div class="row">
                	<label for="standard_status">Standard Status</label>
					<div class="right"><input type="text" name="standard_status" value="<?php echo $standard_rec->standard_status ; ?>" disabled="disabled"  maxlength="" /></div>
				</div>
					
                <div class="row"><div class="right"><button type="button" class="cancel_button"><span>Back</span></button></div></div>
				
			</div>
		</div>
	</div>
</div>