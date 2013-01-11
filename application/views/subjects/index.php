<div id="right">
	
    <div class="section">
    	<?php if($session_data["msg"]) { ?>
			
			<?php if($session_data["msg"] == "1") { ?> <div class="message green"><span><b>Succes</b>: Subject record updated successfully.</span></div> <?php } ?>
			<?php if($session_data["msg"] == "2") { ?> <div class="message red"><span><b>Error</b>: Failed to update subject record.</span></div> <?php } ?>
            
			<?php if($session_data["msg"] == "3") { ?> <div class="message green"><span><b>Succes</b>: Subject record removed successfully.</span></div> <?php } ?>
			<?php if($session_data["msg"] == "4") { ?> <div class="message red"><span><b>Error</b>: Failed to remove subject record.</span></div> <?php } ?>
            
		<?php } ?>
    </div>
    
    <div class="section">
		
        <div class="box">
					<div class="title">Subjects<span class="hide"></span></div>
					<div class="content">
						<table cellspacing="0" cellpadding="0" border="0" class="all"> 
							<thead> 
								<tr>
									<th>Subject Id</th>
									<th>Subject Name</th>
									<th>Subject Status</th>
									<th>Action</th>
								</tr>
							</thead>
                            <?php if($subject_recs) { ?>
							<tbody>
                            	<?php foreach($subject_recs as $recs): ?>
								<tr>
									<td align="center" valign="middle"><?php echo $recs->subject_id ; ?></td>
									<td align="center" valign="middle"><?php echo $recs->subject_name ; ?></td>
									<td align="center" valign="middle"><?php echo $recs->subject_status ; ?></td>
									<td align="center" valign="middle">
                                    	<a href="<?php echo base_url("subjects/edit_subject/".encoded_string($recs->subject_id, "&", 10)) ; ?>" class="item small">
                                        	<img title="Edit Record" src="<?php echo base_url("gfx/icons/small/edit.png") ; ?>" alt="Edit" />
                                        </a>
                                        &nbsp;&nbsp;
                                    	<a href="<?php echo base_url("subjects/remove_subject/".encoded_string($recs->subject_id, "&", 10)) ; ?>" class="item small" onclick="return confirm('Are you sure to remove this record?')">
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