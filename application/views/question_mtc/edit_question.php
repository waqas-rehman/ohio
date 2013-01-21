<?php $this->load->view("text_editor/tiny_mce") ; ?>
<script type="application/javascript">
$(function(){
	$(".cancel_button").click(function(){ window.location.href = "<?php echo base_url("questions_mtc") ; ?>"; }) ;
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
                <input type="hidden" id="question_id" name="question_id" value="<?php echo encoded_string($question_rec->question_mtc_id, "&", 10) ; ?>" />
                <div class="row">
					<label for="question_title">Question Title</label>
					<div class="right"><input type="text" id="question_title" name="question_title" value="<?php echo $question_rec->question_mtc_title ; ?>" class="{validate:{required:true, messages:{required:'Field is required'}}}" /></div>
                </div>
                
                <div class="row">
					<label for="question_scenario">Question Scenario</label>
					<div class="right"><textarea id="question_scenario" name="question_scenario" rows="" cols="" class="tinymce" style="height : 100px;"><?php echo $question_rec->question_mtc_scenario ; ?></textarea></div>
				</div>
                
                
                <div class="row">
					<label for="question_statement">Question Statement</label>
					<div class="right"><textarea id="question_statement" name="question_statement" rows="" cols="" class="tinymce" style="height : 100px;"><?php echo $question_rec->question_mtc_statement ; ?></textarea></div>
				</div>
                
                <div class="row">
					<label for="question_title">No. of Options in Column 1</label>
					<div class="right"><input type="text" id="column_1_options" name="column_1_options" value="<?php echo $question_rec->question_mtc_col1_choices ; ?>" class="{validate:{required:true, min: 1, number: true, messages:{required:'Field is required'}}} no_of_options" column="1" /></div>
					<br />
                </div>
                
                <div class="row">
					<label for="question_title">No. of Options in Column 2</label>
					<div class="right"><input type="text" id="column_2_options" name="column_2_options" value="<?php echo $question_rec->question_mtc_col2_choices ; ?>" class="{validate:{required:true, min: 1, number: true, messages:{required:'Field is required'}}} no_of_options" column="2" /></div>
					<br />
                </div>
                
                <div id="column1_text_fields">
                <?php
					if($question_rec->question_mtc_col1_choices) 
					{
                		$choices1 = string_to_array($question_rec->question_mtc_text1, "%&@") ;
					 	$i = 1 ;
						foreach($choices1 as $rec):
				?>
                    <div class="row">
                    	<label for="col_1-option_<?=$i?>">Column 1 Option <?=$i?> Text</label>
                        <div class="right"><input type="text" id="col_1-option_<?=$i?>" name="col_1-option_<?=$i?>" value="<?php echo $rec ; ?>" class="{validate:{required:true, messages:{required:'Field is required'}}}" /></div><br /></div>
				<?php
                	$i = $i + 1 ;
                    endforeach ;
				   }
				?>
                </div>
                
                <div id="column2_text_fields">
                <?php
					if($question_rec->question_mtc_col2_choices) 
					{
                		$choices2 = string_to_array($question_rec->question_mtc_text2, "%&@") ;
					 	$i = 1 ;
						foreach($choices2 as $rec):
				?>
                    <div class="row">
                    	<label for="col_2-option_<?=$i?>">Column 2 Option <?=$i?> Text</label>
                        <div class="right"><input type="text" id="col_2-option_<?=$i?>" name="col_2-option_<?=$i?>" value="<?php echo $rec ; ?>" class="{validate:{required:true, messages:{required:'Field is required'}}}" /></div><br /></div>
				<?php
                	$i = $i + 1 ;
                    endforeach ;
				   }
				?>
                </div>
                
                <div class="row"><div class="right"><button type="submit"><span>Add</span></button>&nbsp;&nbsp;<button type="button" class="cancel_button"><span>Cancel</span></button></div></div>
				
                </form>
			</div>
		</div>
	</div>
</div>

<script type="application/javascript">
$(function(){
	$(".no_of_options").blur(function(){
		
		if(parseInt($(this).val()))
		{
			var no_of_fields = parseInt($(this).val()), column_no = $(this).attr("column"), question_id = $("#question_id").val(), html_data = "" ;
			var data1 = "no_of_fields="+no_of_fields+"&column_no="+column_no+"&question_id="+question_id ;
			$.ajax
			({
				type:"POST",
				async:false,
				url:"<?php echo base_url() ; ?>questions_mtc/create_text_fields_with_text",
				data:data1,
				success:function(msg) { html_data = msg ; }
			});
			
			if(html_data != "fail")
			{
				var var1 = "#column"+column_no+"_text_fields" ;
				
				if(no_of_fields == 0) 
					$(var1).html("") ;
				
				$(var1).html(html_data) ;
				validator.refresh();
			}
			else
			{
				var var1 = "#column"+column_no+"_text_fields" ;
				$(var1).html("") ;
				return false ;
			}
		}
		else
		{
			var no_of_fields = parseInt($(this).val()), column_no = $(this).attr("column"), html_data = "" ;
			
			var var1 = "#column"+column_no+"_text_fields" ;
			$(var1).html("") ;
			return false ;
		}
		
	}) ;
}) ;
</script>