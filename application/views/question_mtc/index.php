<div id="right">
	
    <div class="section">
    	<?php if($session_data["msg"]) { ?>
			
			<?php if($session_data["msg"] == "1") { ?> <div class="message green"><span><b>Succes</b>: Question record updated successfully.</span></div> <?php } ?>
			<?php if($session_data["msg"] == "2") { ?> <div class="message red"><span><b>Error</b>: Failed to update question record.</span></div> <?php } ?>
            
			<?php if($session_data["msg"] == "3") { ?> <div class="message green"><span><b>Succes</b>: Question record removed successfully.</span></div> <?php } ?>
			<?php if($session_data["msg"] == "4") { ?> <div class="message red"><span><b>Error</b>: Failed to remove question record.</span></div> <?php } ?>
            
            <?php if($session_data["msg"] == "5") { ?> <div class="message green"><span><b>Succes</b>: Question record added successfully.</span></div> <?php } ?>
			<?php if($session_data["msg"] == "6") { ?> <div class="message red"><span><b>Error</b>: Failed to add question record.</span></div> <?php } ?>
            
            <?php if($session_data["msg"] == "7") { ?> <div class="message red"><span><b>Error</b>: Failed to upload question image.</span></div> <?php } ?>
            
		<?php } ?>
    </div>
    
    <div class="section">
		
        <div class="box">
					<div class="title">Questions<span class="hide"></span></div>
					<div class="content">
						<table cellspacing="0" cellpadding="0" border="0" class="all"> 
							<thead> 
								<tr>
									<th>Question Id</th>
									<th>Title</th>
									<th>Statement</th>
                                    <th>Col. 1 Options</th>
                                    <th>Col. 2 Options</th>
									<th>Action</th>
								</tr>
							</thead>
                            <?php if($question_mtc_recs) { ?>
							<tbody>
                            	<?php foreach($question_mtc_recs as $recs): ?>
								<tr>
									<td align="center" valign="middle"><?php echo $recs->question_mtc_id ; ?></td>
									<td align="center" valign="middle"><?php echo $recs->question_mtc_title ; ?></td>
									<td align="center" valign="middle">
									<?php
										$length = strlen($recs->question_mtc_statement) > 50 ? 50 : strlen($recs->question_mtc_statement) ;
										if($length < 50) echo substr($recs->question_mtc_statement, 0, $length) ;
										else echo substr($recs->question_mtc_statement, 0, $length)." ... " ;
									?>
                                    </td>
                              		<td align="center" valign="middle"><?php echo $recs->question_mtc_col1_choices ; ?></td>
                                    <td align="center" valign="middle"><?php echo $recs->question_mtc_col2_choices ; ?></td>
									<td align="center" valign="middle">
                                    	<a href="<?php echo base_url("questions_mtc/preview_question/".encoded_string($recs->question_mtc_id, "&", 10)) ; ?>" class="item small" target="_blank"><img title="Preview Question" src="<?php echo base_url("gfx/icons/small/file.png") ; ?>" alt="Question" /></a>&nbsp;&nbsp;
                                        <a href="<?php echo base_url("questions_mtc/edit_question/".encoded_string($recs->question_mtc_id, "&", 10)) ; /**/ ?>" class="item small"><img title="Edit Record" src="<?php echo base_url("gfx/icons/small/edit.png") ; /**/ ?>" alt="Edit" /></a>&nbsp;&nbsp;
                                    	<a href="<?php echo base_url("questions/remove_question/".encoded_string($recs->question_mtc_id, "&", 10)) ; ?>" class="item small" onclick="return confirm('Are you sure to remove this record?')"><img title="Remove Record" src="<?php echo base_url("gfx/icons/big/trash.png") ; ?>" alt="Cancel" /></a>
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
