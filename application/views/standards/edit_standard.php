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
            <?php if($session_data["msg"] == "2") { ?> <div class="message green"><span><b>Succes</b>: Standard record inserted successfully.</span></div> <?php } ?>
    	<?php } ?>
    </div>
    
	<div class="section">
    	<div class="box">
        	<div class="title">Edit Standard Record<span class="hide"></span></div>
			<div class="content">
            	<form id="standard_update_form" action="<?php echo base_url("standards/update_standard") ; ?>" method="post" enctype="multipart/form-data">
                	
                    <input type="hidden" name="standard_id" value="<?php echo encoded_string($standard_rec->standard_id, "&", 10) ; ?>"  />
                    
                     <div class="row">
                    	<label for="standard_subject">Subject</label>
						<div class="right">
							<select id="standard_subject" name="standard_subject" class="big">
                            	<option value="">Choose Standard Subject</option>
                                <?php if($subject_recs){ foreach($subject_recs as $rec): ?>
									<?php if($rec->subject_id == $standard_rec->standard_subject) { ?>
                                		<option value="<?php echo $rec->subject_id ; ?>" <?php echo set_select('standard_subject', $rec->subject_id, TRUE) ; ?>><?php echo $rec->subject_name ; ?></option>
                                        <?php } else { ?>
                                     	<option value="<?php echo $rec->subject_id ; ?>" <?php echo set_select('standard_subject', $rec->subject_id) ; ?>><?php echo $rec->subject_name ; ?></option>   
                                        <?php } ?>
                                
								<?php endforeach ; } ?>
							</select>
						</div>
					</div>
					
                    <div class="row">
                    	<label for="standard_grade">Grade</label>
						<div class="right">
							<select id="standard_grade" name="standard_grade" class="big">
								<option value="">Choose Standard Grade</option>
                                <option value="01" <?php if($standard_rec->standard_grade == "01") echo set_select('standard_grade', '01', true) ; else  echo set_select('standard_grade', '01') ; ?>>01</option>
                                <option value="02" <?php if($standard_rec->standard_grade == "02") echo set_select('standard_grade', '02', true) ; else  echo set_select('standard_grade', '02') ; ?>>02</option>
                                <option value="03" <?php if($standard_rec->standard_grade == "03") echo set_select('standard_grade', '03', true) ; else  echo set_select('standard_grade', '03') ; ?>>03</option>
                                <option value="04" <?php if($standard_rec->standard_grade == "04") echo set_select('standard_grade', '04', true) ; else  echo set_select('standard_grade', '04') ; ?>>04</option>
                                <option value="05" <?php if($standard_rec->standard_grade == "05") echo set_select('standard_grade', '05', true) ; else  echo set_select('standard_grade', '05') ; ?>>05</option>
                                <option value="06" <?php if($standard_rec->standard_grade == "06") echo set_select('standard_grade', '06', true) ; else  echo set_select('standard_grade', '06') ; ?>>06</option>
                                <option value="07" <?php if($standard_rec->standard_grade == "07") echo set_select('standard_grade', '07', true) ; else  echo set_select('standard_grade', '07') ; ?>>07</option>
                                <option value="08" <?php if($standard_rec->standard_grade == "08") echo set_select('standard_grade', '08', true) ; else  echo set_select('standard_grade', '08') ; ?>>08</option>
                                <option value="09" <?php if($standard_rec->standard_grade == "09") echo set_select('standard_grade', '09', true) ; else  echo set_select('standard_grade', '09') ; ?>>09</option>
                                <option value="10" <?php if($standard_rec->standard_grade == "10") echo set_select('standard_grade', '10', true) ; else  echo set_select('standard_grade', '10') ; ?>>10</option>
                                <option value="11" <?php if($standard_rec->standard_grade == "11") echo set_select('standard_grade', '11', true) ; else  echo set_select('standard_grade', '11') ; ?>>11</option>
                                <option value="12" <?php if($standard_rec->standard_grade == "12") echo set_select('standard_grade', '12', true) ; else  echo set_select('standard_grade', '12') ; ?>>12</option>
                            </select>
						</div>
					</div>
                    
                    <div class="row">
						<label for="standard_pc_domain_code">Domain</label>
						<div class="right"><input type="text" name="standard_pc_domain_code" value="<?php echo set_value("standard_pc_domain_code", $standard_rec->standard_pc_domain_code) ; ?>" maxlength="15" /></div><br />
					</div>
                    
                    <div class="row">
						<label for="standard_domain_description">Domain Description</label>
						<div class="right"><input type="text" name="standard_domain_description" value="<?php echo set_value("standard_domain_description", $standard_rec->standard_domain_description) ; ?>" maxlength="40" /></div>
					</div>
                    
                    <div class="row">
						<label for="standard_pc_standard_number">Standard Number</label>
						<div class="right"><input type="text" name="standard_pc_standard_number" value="<?php echo set_value("standard_pc_standard_number", $standard_rec->standard_pc_standard_number) ; ?>" maxlength="15" /></div><br />
					</div>
                    
                    <div class="row">
						<label for="standard_learning_standard_description">Standard Description</label>
						<div class="right"><input type="text" name="standard_learning_standard_description" value="<?php echo set_value("standard_learning_standard_description", $standard_rec->standard_learning_standard_description) ; ?>" maxlength="105" /></div><br />
					</div>
					
                    <div class="row">
                    	<label for="standard_status">Standard Status</label>
						<div class="right">
							<select id="standard_status" name="standard_status" class="medium">
                    <option value="Active" <?php if($standard_rec->standard_status == 'Active') echo set_select('standard_status', "Active", TRUE) ; else echo set_select('standard_status', "Active") ; ?>>Active</option>
					<option value="Deactive" <?php if($standard_rec->standard_status == 'Deactive') echo set_select('standard_status', "Deactive", TRUE) ; else echo set_select('standard_status', "Deactive") ; ?>>Deactive</option>
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