<script type="application/javascript">
$(function(){
	$(".cancel_button").click(function(){
		window.location.href = "<?php echo base_url("standards") ; ?>";
	}) ;
}) ;
</script>
<div id="right">
	
    <div class="section">
    	<?php if($session_data["msg"]) { ?>
			<?php if($session_data["msg"] == "1") { ?> <div class="message red"><span><ul><?php echo validation_errors(); ?></ul></span></div><?php } ?>
            <?php if($session_data["msg"] == "2") { ?> <div class="message red"><span><b>Error</b>: Failed to insert standard record.</span></div> <?php } ?>
    	<?php } ?>
    </div>
    
	<div class="section">
    	<div class="box">
        	<div class="title">Add Standard Record<span class="hide"></span></div>
			<div class="content">
            	<form id="standard_form" action="<?php echo base_url("standards/insert_standard") ; ?>" method="post" enctype="multipart/form-data">
                
                    <div class="row">
                    	<label>Standard Subject</label>
						<div class="right">
							<select id="standard_subject" name="standard_subject" class="big">
                            	<option value="">Choose Standard Subject</option>
                            	<?php if($subject_recs){ foreach($subject_recs as $rec): ?>
								<option value="<?php echo $rec->subject_id ; ?>" <?php echo set_select('standard_subject', $rec->subject_id) ; ?>><?php echo $rec->subject_name ; ?></option>
								<?php endforeach ; } ?>
							</select>
						</div>
					</div>
					
                    <div class="row">
                    	<label>Standard Grade</label>
						<div class="right">
							<select id="standard_grade" name="standard_grade" class="big">
								<option value="">Choose Standard Grade</option>
                                    <option value="01" <?php echo set_select('standard_grade', '01'); ?>>01</option>
                                    <option value="02" <?php echo set_select('standard_grade', '02'); ?>>02</option>
                                    <option value="03" <?php echo set_select('standard_grade', '03'); ?>>03</option>
                                    <option value="04" <?php echo set_select('standard_grade', '04'); ?>>04</option>
                                    <option value="05" <?php echo set_select('standard_grade', '05'); ?>>05</option>
                                    <option value="06" <?php echo set_select('standard_grade', '06'); ?>>06</option>
                                    <option value="07" <?php echo set_select('standard_grade', '07'); ?>>07</option>
                                    <option value="08" <?php echo set_select('standard_grade', '08'); ?>>08</option>
                                    <option value="09" <?php echo set_select('standard_grade', '09'); ?>>09</option>
                                    <option value="10" <?php echo set_select('standard_grade', '10'); ?>>10</option>
                                    <option value="11" <?php echo set_select('standard_grade', '11'); ?>>11</option>
                                    <option value="12" <?php echo set_select('standard_grade', '12'); ?>>12</option>
                            </select>
						</div>
					</div>
                    
                    <div class="row">
						<label>Pro-Core Domain Code</label>
						<div class="right"><input type="text" name="standard_pc_domain_code" value="<?php echo set_value('standard_pc_domain_code'); ?>" maxlength="15" /></div><br />
					</div>
                    
                    <div class="row">
						<label>Domain Description</label>
						<div class="right"><input type="text" name="standard_domain_description" value="<?php echo set_value('standard_domain_description'); ?>" maxlength="40" /></div>
					</div>
                    
                    <div class="row">
						<label>Pro-Core Standard Number</label>
						<div class="right"><input type="text" name="standard_pc_standard_number" value="<?php echo set_value('standard_pc_standard_number'); ?>" maxlength="15" /></div><br />
					</div>
                    
                    <div class="row">
						<label>Learning Standard Description</label>
						<div class="right"><input type="text" name="standard_learning_standard_description" value="<?php echo set_value('standard_learning_standard_description'); ?>" maxlength="105" /></div><br />
					</div>

                    <div class="row">
                    	<label>Standard Status</label>
						<div class="right">
							<select id="standard_status" name="standard_status" class="medium">
								<option value="Active" <?php echo set_select('standard_status', 'Active', TRUE); ?>>Active</option>
								<option value="Deactive" <?php echo set_select('standard_status', 'Deactive'); ?>>Deactive</option>
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