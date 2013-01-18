<script type="application/javascript">
$(function(){
	$(".cancel_button").click(function(){ window.location.href = "<?php echo base_url("questions") ; ?>"; }) ;
}) ;
</script>
<style type="text/css">
.question_type { width:145px !important; height:110px !important; }
</style>
<div id="right">
	<div class="section">
		<?php if($session_data["msg"]) { ?>
			<?php if($session_data["msg"] == "1") { ?> <div class="message red"><span><ul><?php echo $errors ; ?></ul></span></div><?php } ?>
            <?php if($session_data["msg"] == "2") { ?> <div class="message red"><span><b>Error</b>: Failed to upload question image.</span></div> <?php } ?>
    	<?php } ?>
    </div>
    
	<div class="section">
    	<div class="box">
        	<div class="title">Upload Question Image<span class="hide"></span></div>
			
            <div class="content">
                <?php if($session_data["msg"] == "5") { ?>
               		<form id="district_form" action="<?php echo base_url("questions/upload_image") ; ?>" method="post" enctype="multipart/form-data">
                		<?php if($question_rec->question_image != "") { ?>
                        	<a href="<?php echo base_url("question_images/".$question_rec->question_image) ; ?>" target="_blank">Click Here to View Current File</a>
							<input type="hidden" id="image_exits" name="image_exists" value="yes" />
						<?php } ?>
                        
				<?php } else { ?>
                	<form id="district_form" action="<?php echo base_url("questions/upload_image") ; ?>" method="post" enctype="multipart/form-data">
                    	<input type="hidden" id="image_exits" name="image_exists" value="no" />
                <?php } ?>
                <input type="hidden" id="question_id" name="question_id" value="<?php echo encoded_string($question_rec->question_id, "&", 10) ; ?>" />
                
                
                <div class="row">
					<label for="image_file">Image File</label>
					<div class="right"><input type="file" id="image_file" name="image_file" /></div>
				</div>
      			
                <div class="row"><div class="right"><button type="submit"><span>Upload</span></button></div></div>
				
                </form>
			</div>
		</div>
	</div>
</div>