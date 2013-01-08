<div id="right">
	
    <div class="section">
    	<?php if($session_data["msg"]) { ?>
			
			<?php if($session_data["msg"] == "1") { ?> <div class="message green"><span><b>Succes</b>: State record updated successfully.</span></div> <?php } ?>
			<?php if($session_data["msg"] == "2") { ?> <div class="message red"><span><b>Error</b>: Failed to update state record.</span></div> <?php } ?>
            
			<?php if($session_data["msg"] == "3") { ?> <div class="message green"><span><b>Succes</b>: State record removed successfully.</span></div> <?php } ?>
			<?php if($session_data["msg"] == "4") { ?> <div class="message red"><span><b>Error</b>: Failed to remove state record.</span></div> <?php } ?>
            
		<?php } ?>
    </div>
    
    <div class="section">
		
        <div class="box">
					<div class="title">States<span class="hide"></span></div>
					<div class="content">
						<table cellspacing="0" cellpadding="0" border="0" class="all"> 
							<thead> 
								<tr>
									<th>State Id</th>
									<th>State Name</th>
									<th>State Code</th>
                                    <th>State Status</th>
									<th>Action</th>
								</tr>
							</thead>
                            <?php if($state_recs) { ?>
							<tbody>
                            	<?php foreach($state_recs as $recs): ?>
								<tr>
									<td align="center" valign="middle"><?php echo $recs->state_id ; ?></td>
									<td align="center" valign="middle"><?php echo $recs->state_name ; ?></td>
									<td align="center" valign="middle"><?php echo $recs->state_code ; ?></td>
                                    <td align="center" valign="middle"><?php echo $recs->state_status ; ?></td>
									<td align="center" valign="middle">
                                    	<a href="<?php echo base_url("states/edit_state/".encoded_string($recs->state_id, "&", 10)) ; ?>" class="item small">
                                        	<img title="Edit Record" src="<?php echo base_url("gfx/icons/small/edit.png") ; ?>" alt="Edit" />
                                        </a>
                                        &nbsp;&nbsp;
                                    	<a href="<?php echo base_url("states/remove_state/".encoded_string($recs->state_id, "&", 10)) ; ?>" class="item small" onclick="javascript:confirm('Are you sure to remove this record?')">
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