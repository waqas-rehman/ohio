<?php $this->load->view("text_editor/tiny_mce") ; ?>
<script type="application/javascript">
$(function(){ $(".cancel_button").click(function(){ window.location.href = "<?php echo base_url("questions") ; ?>"; }) ; }) ;
</script>
<style type="text/css">
.question_type { width:145px !important; height:110px !important; }
.height { height:125px !important ;}
.hidden { display:none !important ; }
.visible { display:block !important ; }
</style>
<div id="right">
	
    <div class="section">
		<?php if($session_data["msg"]) { ?>
			<?php if($session_data["msg"] == "1") { ?> <div class="message red"><span><ul><?php echo validation_errors(); ?></ul></span></div><?php } ?>
    	<?php } ?>
    </div>
    
    <div class="section">
		<div class="box"><div class="title">Choose Question Type<span class="hide"></span></div>
		<div class="content">
			<form id="add_question_form" method="post" action="<?php echo base_url("questions/insert_question") ; ?>" class="valid">
				
                <div class="row height">
            		<label for="">Choose Question <br /> Type</label>
					<div class="right">
                        <div class="custom-radio">
                       		<input type="radio" id="radio-1" name="question_type" value="type1" <?php echo set_radio('question_type', 'type1', true) ; ?> />
                       		<label for="radio-1"><img src="<?php echo base_url("images/type1.png") ; ?>" class="question_type"  /></label>
                        </div>
                        <div class="custom-radio">
                			<input type="radio" id="radio-2" name="question_type" value="type2" <?php echo set_radio('question_type', 'type2') ;?> />
                      		<label for="radio-2"><img src="<?php echo base_url("images/type2.png") ; ?>" class="question_type" /></label>
               			</div>
                        <div class="custom-radio">
                			<input type="radio" id="radio-3" name="question_type" value="type3" <?php echo set_radio('question_type', 'type3') ; ?> />
                       		<label for="radio-3"><img src="<?php echo base_url("images/type3.png") ; ?>" class="question_type" /></label>
                		</div>
                        <div class="custom-radio">
                			<input type="radio" id="radio-4" name="question_type" value="type4" <?php echo set_radio('question_type', 'type4') ; ?> />
                      		<label for="radio-4"><img src="<?php echo base_url("images/type4.png") ; ?>" class="question_type" /></label>
                      	</div>
                   </div>    
                </div>
                
                <div class="row height">
            		<label for=""></label>
					<div class="right">
                    	<div class="custom-radio">
                			<input type="radio" id="radio-5" name="question_type" value="type5" <?php echo set_radio('question_type', 'type5') ; ?> />
                      		<label for="radio-5"><img src="<?php echo base_url("images/type5.png") ; ?>" class="question_type" /></label>
                        </div>
                        <div class="custom-radio">
                			<input type="radio" id="radio-6" name="question_type" value="type6" <?php echo set_radio('question_type', 'type6') ; ?> />
                     		<label for="radio-6"><img src="<?php echo base_url("images/type6.png") ; ?>" class="question_type" /></label>
                      	</div>
                        <div class="custom-radio">
                			<input type="radio" id="radio-7" name="question_type" value="type7" <?php echo set_radio('question_type', 'type7') ; ?> />
                      		<label for="radio-7"><img src="<?php echo base_url("images/type7.png") ; ?>" class="question_type" /></label>
                      	</div>
                	</div>
             	</div>
				
                <div class="row">
                	<label for="">Number of Choices</label>
                    <div class="right"><input type="text" id="number_of_choices" name="number_of_choices" value="<?php echo set_value('number_of_choices', "4") ; ?>" /></div>
                </div>
                
                <div class="row">
                	<label for="">MCQ Answer Type</label>
					<div class="right">
                    	<div class="custom-radio">
                        	<input type="radio" id="radio-11" name="answer_type" value="single_answer" <?php echo set_radio('answer_type', 'single_answer', true) ; ?> class="answer_type" />
                            <label for="radio-11">Single Answer Question (Radio Buttons)</label>
                        </div>
                    </div>
                    
                    <div class="right">
                    	<div class="custom-radio">
                        	<input type="radio" id="radio-12" name="answer_type" value="multiple_answer" <?php echo set_radio('answer_type', 'multiple_answer') ; ?> class="answer_type" />
                            <label for="radio-12">Multiple Answer Question (Checkboxes)</label>
                        </div>
                    </div>
                    
                    <div class="right">
                    	<div class="custom-radio">
                        	<input type="radio" id="radio-13" name="answer_type" value="large_text_box" <?php echo set_radio('answer_type', 'large_text_box') ; ?> class="answer_type" />
                            <label for="radio-13">Large Text Box</label>
                        </div>
                    </div>
                    
                    <div class="right">
                    	<div class="custom-radio">
                        	<input type="radio" id="radio-14" name="answer_type" value="small_text_box" <?php echo set_radio('answer_type', 'small_text_box') ; ?> class="answer_type" />
                            <label for="radio-14">Small Text Box</label>
                        </div>
                    </div>
                
                </div>
                
                <div class="row">
					<label for="question_title">Question Title</label>
					<div class="right"><input type="text" id="question_title" name="question_title" value="" class="{validate:{required:true, messages:{required:'Field is required'}}}" /></div>
				</div>
                
                <div class="row">
					<label for="question_statement">Question Statement</label>
					<div class="right"><textarea id="question_statement" name="question_statement" rows="" cols=""  class="tinymce" style="height : 100px;"></textarea></div>
				</div>
                
                <div id="question_scenario_div" class="row hidden">
					<label for="question_scenario">Question Scenario</label>
					<div class="right"><textarea id="question_scenario" name="question_scenario" rows="" cols=""  class="tinymce" style="height : 100px;"></textarea></div>
				</div>
                
                <div id="question_scenario1_div" class="row hidden">
					<label for="question_scenario">First Half Question Scenario</label>
					<div class="right"><textarea id="question_scenario1" name="question_scenario1" rows="" cols=""  class="tinymce" style="height : 100px;"></textarea></div>
				</div>
                
                <div id="question_scenario2_div" class="row hidden">
					<label for="question_scenario">Second Half Question Scenario</label>
					<div class="right"><textarea id="question_scenario2" name="question_scenario2" rows="" cols=""  class="tinymce" style="height : 100px;"></textarea></div>
				</div>
                
                <input type="hidden" id="hidden_total_text_fields" name="hidden_total_text_fields" value="4" />
                <div id="text_fields" class="visible">
                	<div class="row">
                    	<label for="choice1">Choice 1 Text</label>
                        <div class="right"><input type="text" id="choice1" name="choice1" value="" class="{validate:{required:true, messages:{required:'Field is required'}}}" /></div>
                	</div>
                    <div class="row">
                    	<label for="choice1">Choice 2 Text</label>
                        <div class="right"><input type="text" id="choice2" name="choice2" value="" class="{validate:{required:true, messages:{required:'Field is required'}}}" /></div>
                	</div>
                    <div class="row">
                    	<label for="choice3">Choice 3 Text</label>
                        <div class="right"><input type="text" id="choice3" name="choice3" value="" class="{validate:{required:true, messages:{required:'Field is required'}}}" /></div>
                	</div>
                    <div class="row">
                    	<label for="choice4">Choice 4 Text</label>
                        <div class="right"><input type="text" id="choice4" name="choice4" value="" class="{validate:{required:true, messages:{required:'Field is required'}}}" /></div>
                	</div>
                </div>
                
                <div id="radio_checkboxes" class="visible">
                	<div class="row">
                		<label>Correct Answer</label>
						<div class="right"> <input type="radio" id="radio-31" name="correct_answer" value="choice1" checked="checked" /> <label for="radio-31">Choice 1</label> </div>
                        <div class="right"> <input type="radio" id="radio-32" name="correct_answer" value="choice2" /> <label for="radio-32">Choice 2</label> </div>
                        <div class="right"> <input type="radio" id="radio-33" name="correct_answer" value="choice3" /> <label for="radio-33">Choice 3</label> </div>
                        <div class="right"> <input type="radio" id="radio-34" name="correct_answer" value="choice4" /> <label for="radio-34">Choice 4</label> </div>
                	</div>
                </div>
                
                <div id="image_upload_div" class="hidden">
                	<div class="row">
                    	<input type="hidden" id="question_image" name="question_image" value="" /> 
                		<label>Upload Image</label>
						<div class="right">
                        	<div id="image_name">
                            <a id="upload_question_image" class="item small" href="javascript:void(0);"><img alt="Photo" src="<?php echo base_url("gfx/icons/small/photo.png") ; ?>"></a>
                    		<a id="delete_question_image" class="item small" href="javascript:void(0);"><img alt="Trash" src="<?php echo base_url("gfx/icons/small/trash.png") ; ?>"></a>
                            <br /><br />
                            <a id="image_link" href="javascript:void(0);" target="_blank" class="hidden">Click here to see current image</a>
                            </div>
                            <div id="question_image_status" style="font-weight:bold;"></div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
					<div class="right"><button id="submit_form" type="submit"><span>Add Question&nbsp;&gt;&gt;</span></button>&nbsp;&nbsp;<button class="cancel_button" type="button"><span>Cancel</span></button></div>
				</div>							
			</form>
		</div>
	</div>
</div>

<?php $this->load->view("questions/jquery") ; ?>
		
        
<script type="text/javascript" >
$(function(){
	
	var btnUpload = $('#upload_question_image') ;	
	var status = $('#question_image_status') ;
	new AjaxUpload(btnUpload,
	{	
		action: '<?php echo base_url("questions/upload_file"); ?>', 
		name: 'question_image',
		onSubmit: function(file, ext)
		{
			if (!(ext && /^(jpg|png|jpeg|gif)$/.test(ext)))
			{
				status.text('Only JPG, PNG or GIF files are allowed') ;
				return false ;
			}
			
			var current_image = $("#question_image").val() ;
			
			if(current_image != "")
			{
				var club_id = -1 ;
				var html_data = "", data1 = "image="+current_image ;
				$.ajax
				({
					type:"POST",
				   async:false,
					 url:"<?php echo base_url('questions/remove_image') ; ?>",
					data:data1,
				 success:function(msg) { html_data = msg ; }
				});
				
				$("#question_image").val("") ;
			}
			status.text('Uploading...') ;
		},
				
		onComplete: function(file, response)
		{
			var response_data = response.split("^") ;
			if(response_data[0] == "success")
			{
				$("#question_image").val(response_data[1]) ;
				status.text('Uploaded Successfully').fadeOut(3000) ;
				var temp = "<?php echo base_url("question_images") ; ?>"+"/"+response_data[1] ;
				if($("a#image_link").hasClass("hidden")) $("a#image_link").toggleClass('hidden visible') ;
				$("a#image_link").attr("href", temp) ;
			}
			else
				status.text('Failed to Upload File') ;
		}
	});	
});
</script>
<script type="application/javascript">

$(function(){
	$("#delete_question_image").click(function(){
	
		var status = $('#question_image_status') ;
		
		var current_image = $("#question_image").val() ;
		
		if(current_image == "") return false ;
		
		var html_data = "", data1 = "image="+current_image ;
	
		$.ajax
		({
			type:"POST",
		   async:false,
			 url:"<?php echo base_url("questions/remove_image") ; ?>",
			data:data1,
		 success:function(msg) { html_data = msg ; }
		}) ;
		
		if(html_data == "success")
		{
			status.text('Removed Successfully').fadeOut(3000) ;
			var temp = "javascript:void(0);" ;
			$("a#image_link").attr("href", temp) ;
			if($("a#image_link").hasClass("visible")) $("a#image_link").toggleClass('visible hidden') ;
		}
		else
			alert("Fail to Remove Image") ;
		
	}) ;
}) ;
/**/
</script>