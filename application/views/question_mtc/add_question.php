<script type="application/javascript">
$(function(){
	$(".back_button").click(function(){
		var question_type = $("#question_type").val(), number_of_choices = $("#number_of_choices").val(), answer_type = $("#answer_type").val() ;
		var url = "<?php echo base_url("questions/choose_question_type") ; ?>"+"/"+question_type+"/"+number_of_choices+"/"+answer_type+"/0" ;
		window.location.href =  url ;
	}) ;
	$(".cancel_button").click(function(){ window.location.href = "<?php echo base_url("questions") ; ?>"; }) ;
}) ;
</script>
<style type="text/css">
.question_type { width:145px !important; height:110px !important; }
</style>
<div id="right">
	<div class="section">
		<?php if($session_data["msg"]) { ?>
			<?php if($session_data["msg"] == "1") { ?> <div class="message red"><span><ul><?php echo validation_errors(); ?></ul></span></div><?php } ?>
            <?php if($session_data["msg"] == "2") { ?> <div class="message red"><span><b>Error</b>: Failed to insert question record.</span></div> <?php } ?>
    	<?php } ?>
    </div>
    
	<div class="section">
    	<div class="box">
        	<div class="title">Add Question<span class="hide"></span></div>
			
            <div class="content">
            	
                
                <form id="district_form" action="<?php echo base_url("questions_mtc/insert_question") ; ?>" method="post" enctype="multipart/form-data"  class="valid">
                
                <div class="row">
					<label for="question_title">Question Title</label>
					<div class="right"><input type="text" id="question_title" name="question_title" value="" class="{validate:{required:true, messages:{required:'Field is required'}}}" /></div>
                </div>
                
                <div class="row">
					<label for="question_scenario">Question Scenario</label>
					<div class="right"><textarea id="question_scenario" name="question_scenario" rows="" cols="" class="wysiwyg" style="height : 100px;"></textarea></div>
				</div>
                
                
                <div class="row">
					<label for="question_statement">Question Statement</label>
					<div class="right"><textarea id="question_statement" name="question_statement" rows="" cols="" class="wysiwyg" style="height : 100px;"></textarea></div>
				</div>
                
                <div class="row">
					<label for="question_title">No. of Options in Column 1</label>
					<div class="right"><input type="text" id="column_1_options" name="col1_options" value="<?php echo set_value('column_1_options') ; ?>" class="{validate:{required:true, min: 1, number: true, messages:{required:'Field is required'}}}" /></div>
					<br />
                </div>
                
                <div class="row">
					<label for="question_title">No. of Options in Column 2</label>
					<div class="right"><input type="text" id="column_2_options" name="col2_options" value="<?php echo set_value('column_2_options') ; ?>" class="{validate:{required:true, min: 1, number: true, messages:{required:'Field is required'}}}" /></div>
					<br />
                </div>
                
                <div id="column1_text_fields"></div>
                <div id="column2_text_fields"></div>
                
                <div class="row"><div class="right"><button type="submit"><span>Add</span></button>&nbsp;&nbsp;<button type="button" class="back_button"><span>Back</span></button>&nbsp;&nbsp;<button type="button" class="cancel_button"><span>Cancel</span></button></div></div>
				
                </form>
			</div>
		</div>
	</div>
</div>

<script type="application/javascript">
$(function(){
	$("#column_1_options").blur(function(){
		
		if(parseInt($(this).val()))
		{
			$("#column1_text_fields").html('<div class="row"><label for="col1_option_1">Column 1 option 1</label><div class="right"><input type="text" id="col1_option_1" name="col1_option_1" value="" class="{validate:{required:true, messages:{required:\'Field is required\'}}}" /></div><br /></div>') ;
		
			validator.refresh();
		}
		else
		{
			return false ;
		}
	}) ;
	
	$("#column_2_options").blur(function(){
		
		if(parseInt($(this).val()))
		{
			$("#column2_text_fields").html('<div class="row"><label for="col2_option_1">Column 2 Option 1</label><div class="right"><input type="text" id="col2_option_1" name="col2_option_1" value="" class="{validate:{required:true, messages:{required:\'Field is required\'}}}" /></div><br /></div>') ;
		
			validator.refresh();	
		}
		else
		{
			return false ;
		}
	}) ;
}) ;
</script>