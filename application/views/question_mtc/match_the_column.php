<!-- <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" /> -->
<link href="<?php echo base_url("css/smoothness/jquery-ui-1.10.0.custom.css") ; ?>" rel="stylesheet">


<style type="text/css">
	#sortable1, #sortable2 { list-style-type: none; margin: 0; padding: 0 0 2.5em; float: left; margin-right: 10px; }
	#sortable1 li, #sortable2 li { margin: 0 5px 5px 5px; padding: 5px; font-size: 1.2em; width: 100%; }
	.width100{ width:100%;}
	.width95{ width:95% ;}
	.width50{ width:40% ; }
	.float_left { float:left; /* border: 1px #000 solid ; margin-left:1%; /**/ }
	.clear { clear:both ;}
</style>

<script type="application/javascript">
	$(function() {
		$( "#sortable1, #sortable2, #sortable3, #sortable4" ).sortable({
			update: function( event, ui )
			{
				var col1 = $("#sortable1").sortable("toArray") ;
				var col2 = $("#sortable2").sortable("toArray") ;
				
				var num_col1 = parseInt(col1.length) ;
				var num_col2 = parseInt(col2.length) ;
				
				var i = 0 ;
				var temp1 = "" ;
				for(i = 1 ; i <= num_col1 ; i++)
					temp1 = temp1+(parseInt($.inArray("col1corr_"+i, col1)) + 1)+"," ;
				
				var temp2 = "" ;
				for(i = 1 ; i <= num_col2 ; i++)
					temp2 = temp2+($.inArray("col2corr_"+i, col2) + 1)+"," ;
				
				temp1 = temp1.substr(0,(temp1.length - 1)) ;
				temp2 = temp2.substr(0,(temp2.length - 1)) ;
				
				temp1 = order_columns(temp1) ;
				temp2 = order_columns(temp2) ;
				
				$("#col1_display_order").val(temp1) ;
				$("#col2_display_order").val(temp2) ;
				
			}
		}) ;
	});
	
	function order_columns(string)
	{
		array = new Array ;
		array = string.split(',') ;
		
		var len = array.length ;
		var temp1 = "" ;
		var i = 0 ;
 		
		for(i = 1 ; i <= len ; i++)
		{
			temp1 = temp1+(array.indexOf(i.toString()) + 1)+"," ;
		}
		
		temp1 = temp1.substr(0,(temp1.length - 1)) ;
		return temp1 ;
	}
</script>

<div id="right">
	<div class="section">
		<div class="box">
			<div class="title"><?php echo $question_rec->question_mtc_title ; ?><span class="hide"></span></div>
			<div class="content">
            	<?php if($question_rec->question_mtc_scenario) { ?><blockquote><div><?php echo $question_rec->question_mtc_scenario ; ?></div></blockquote><?php } ?>
                <?php if($question_rec->question_mtc_statement) { ?><p><?php echo $question_rec->question_mtc_statement ; ?></p><br /><?php } ?>
            <div class="section">
				<div class="box">
					<div class="title">Arrange the Columns in the right way(Correct Answer)<span class="hide"></span></div>
					<div class="content">
                    	<div class="width100">
                            <div class="width50 float_left">
                            	<ul id="sortable1" class="width95">
                                	<?php
										$col_texts = explode("%&@", $question_rec->question_mtc_text1) ;
										$i = 1 ;
										$col1 = array() ;
										if($col_texts)
										{
											foreach($col_texts as $rec):
												$col1[] = '<li id="col1corr_'.$i.'" class="ui-state-default">'.$rec.'</li>' ;
                                	 			$i = $i + 1 ;
											endforeach ;
										}
										
										$order1 = explode(",", $question_rec->column1_display_order) ;
										
										foreach($order1 as $num):
											echo $col1[$num - 1] ;
										endforeach ;
									?>
                                </ul>
                            </div>
                            
                            <div class="width50 float_left">
                                <ul id="sortable2" class="width95">
                                  <?php
										$col_texts = explode("%&@", $question_rec->question_mtc_text2) ;
										$i = 1 ;
										$col2 = array() ;
										if($col_texts)
										{
											foreach($col_texts as $rec):
												$col2[] = '<li id="col2corr_'.$i.'" class="ui-state-highlight">'.$rec.'</li>' ;
												$i = $i + 1 ;
											endforeach ;
										}
										
										$order2 = explode(",", $question_rec->column2_display_order) ;
										
										foreach($order2 as $num):
											echo $col2[$num - 1] ;
										endforeach ;
									?>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
					</div>
				</div>
			</div>
            <div class="clear"></div>
            
            <form id="" name="" method="post" action="<?php echo base_url("questions_mtc/submit_answer") ; ?>">
            	<input type="hidden" id="question_id" name="question_id" value="<?php echo encoded_string($question_rec->question_mtc_id, "&", 10) ; ?>" />
                
                <input type="hidden" id="col1_display_order" name="col1_display_order" value="<?php echo $question_rec->column1_display_order ; ?>" />
                <input type="hidden" id="col2_display_order" name="col2_display_order" value="<?php echo $question_rec->column2_display_order ; ?>" />
                
                <div class="row"></div>
                	<div class="row"><div class="right"><button type="submit"><span>Submit</span></button>&nbsp;&nbsp;<button id="cancel"><span>Close</span></button></div></div>
            </form>
            
            </div>
		</div>
    </div>
<script type="application/javascript">
	$(function(){
		$("#cancel").click(function(){ close() ; }) ;
	}) ;
</script>