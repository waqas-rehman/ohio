<div id="right">
	
    <div class="section">
    	<?php if($session_data["msg"]) { ?>
			
			<?php if($session_data["msg"] == "1") { ?> <div class="message green"><span><b>Succes</b>: Standard record updated successfully.</span></div> <?php } ?>
			<?php if($session_data["msg"] == "2") { ?> <div class="message red"><span><b>Error</b>: Failed to update Standard record.</span></div> <?php } ?>
            
			<?php if($session_data["msg"] == "3") { ?> <div class="message green"><span><b>Succes</b>: Standard record removed successfully.</span></div> <?php } ?>
			<?php if($session_data["msg"] == "4") { ?> <div class="message red"><span><b>Error</b>: Failed to remove standard record.</span></div> <?php } ?>
            
		<?php } ?>
    </div>
    
    <div class="section">
		
        <div class="box">
					<div class="title">Standards<span class="hide"></span></div>
					<div class="content">
						<table cellspacing="0" cellpadding="0" border="0" class="all"> 
							<thead> 
								<tr>
									<th>Subject</th>
									<th>Grade</th>
                                    <th>Domain</th>
                                    <th>Standard Number</th>
                                    <th>Standard Description</th>
                                    <th>Standard Status</th>
                                    <th>Action</th>
								</tr>
							</thead>
                            <?php if($standard_recs) { ?>
							<tbody>
                            	<?php foreach($standard_recs as $recs): ?>
								<tr>
									<td align="center" valign="middle"><?php echo $recs->standard_subject ; ?></td>
									<td align="center" valign="middle"><?php echo $recs->standard_grade ; ?></td>
                              		<td align="center" valign="middle"><?php echo $recs->standard_pc_domain_code ; ?></td>
                                    <td align="center" valign="middle"><?php echo $recs->standard_pc_standard_number ; ?></td>
                                    <td align="center" valign="middle">
									<?php
									$length = strlen($recs->standard_learning_standard_description) > 50 ? 50 : strlen($recs->standard_learning_standard_description) ;
										
										if($length < 50)
											echo substr($recs->standard_learning_standard_description, 0, $length) ;
										else
											echo substr($recs->standard_learning_standard_description, 0, $length)." ... " ;
									?>
                                    </td>
                                    <td align="center" valign="middle"><?php echo $recs->standard_status ; ?></td>
									<td align="center" valign="middle">
                                        <a href="<?php echo base_url("standards/view_standard/".encoded_string($recs->standard_id, "&", 10)) ; ?>" class="item small">
                                        	<img title="View Record Details" src="<?php echo base_url("gfx/icons/small/preferences.png") ; ?>" alt="Details" />
                                        </a>&nbsp;&nbsp;
                                        <a href="<?php echo base_url("standards/edit_standard/".encoded_string($recs->standard_id, "&", 10)) ; ?>" class="item small">
                                        	<img title="Edit Record" src="<?php echo base_url("gfx/icons/small/edit.png") ; ?>" alt="Edit" />
                                        </a>&nbsp;&nbsp;
                                    	<a href="<?php echo base_url("standards/remove_standard/".encoded_string($recs->standard_id, "&", 10)) ; ?>" class="item small" onclick="return confirm('Are you sure to remove this record?')">
                                        	<img title="Remove Record" src="<?php echo base_url("gfx/icons/big/trash.png") ; ?>" alt="Cancel" />
                                        </a>
                                    </td>
								</tr>
                                <?php endforeach ; ?>
							</tbody>
                            <?php } ?>
						</table>
					</div>
				</div>
	</div>
</div>