<div id="right">
	
    <div class="section">
    	<?php if($session_data["msg"]) { ?>
			
			<?php if($session_data["msg"] == "1") { ?> <div class="message green"><span><b>Succes</b>: District record updated successfully.</span></div> <?php } ?>
			<?php if($session_data["msg"] == "2") { ?> <div class="message red"><span><b>Error</b>: Failed to update District record.</span></div> <?php } ?>
            
			<?php if($session_data["msg"] == "3") { ?> <div class="message green"><span><b>Succes</b>: District record removed successfully.</span></div> <?php } ?>
			<?php if($session_data["msg"] == "4") { ?> <div class="message red"><span><b>Error</b>: Failed to remove district record.</span></div> <?php } ?>
            
            <?php if($session_data["msg"] == "5") { ?> <div class="message green"><span><b>Succes</b>: Email sent successfully.</span></div> <?php } ?>
			<?php if($session_data["msg"] == "6") { ?> <div class="message red"><span><b>Error</b>: Failed to send email.</span></div> <?php } ?>
            
		<?php } ?>
    </div>
    
    <div class="section">
		
        <div class="box">
					<div class="title">Districts<span class="hide"></span></div>
					<div class="content">
						<table cellspacing="0" cellpadding="0" border="0" class="all"> 
							<thead> 
								<tr>
									<th>District Id</th>
									<th>District Name</th>
									<th>District Code</th>
                                    <th>District Contact Person</th>
                                    <th>Distrcit Status</th>
									<th>Action</th>
								</tr>
							</thead>
                            <?php if($district_recs) { ?>
							<tbody>
                            	<?php foreach($district_recs as $recs): ?>
								<tr>
									<td align="center" valign="middle"><?php echo $recs->district_id ; ?></td>
									<td align="center" valign="middle"><?php echo $recs->district_name ; ?></td>
									<td align="center" valign="middle"><?php echo $recs->district_code ; ?></td>
                              		<td align="center" valign="middle"><?php echo $recs->district_contact_first_name." ".$recs->district_contact_last_name ; ?></td>
                                    <td align="center" valign="middle"><?php echo $recs->district_status ; ?></td>
									<td align="center" valign="middle">
                                    	<a href="<?php echo base_url("districts/send_message/".encoded_string($recs->district_id, "&", 10)) ; ?>" class="item small">
                                        	<img title="Send Message" src="<?php echo base_url("gfx/icons/small/file-edit.png") ; ?>" alt="Message" />
                                        </a>&nbsp;&nbsp;
                                        <a href="<?php echo base_url("districts/view_district/".encoded_string($recs->district_id, "&", 10)) ; ?>" class="item small">
                                        	<img title="View Record Details" src="<?php echo base_url("gfx/icons/small/preferences.png") ; ?>" alt="Details" />
                                        </a>&nbsp;&nbsp;
                                        <a href="<?php echo base_url("districts/edit_district/".encoded_string($recs->district_id, "&", 10)) ; ?>" class="item small">
                                        	<img title="Edit Record" src="<?php echo base_url("gfx/icons/small/edit.png") ; ?>" alt="Edit" />
                                        </a>&nbsp;&nbsp;
                                    	<a href="<?php echo base_url("districts/remove_district/".encoded_string($recs->district_id, "&", 10)) ; ?>" class="item small" onclick="return confirm('Are you sure to remove this record?')">
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