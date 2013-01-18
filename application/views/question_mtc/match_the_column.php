<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />


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
		$( "#sortable1, #sortable2" ).sortable({
			update: function( event, ui )
			{
				var col1 = $("#sortable1").sortable("toArray") ;
				var col2 = $("#sortable2").sortable("toArray") ;
				
				var num_col1 = parseInt(col1.length) ;
				var num_col2 = parseInt(col2.length) ;
				
				var temp1 = "" ;
				for(var i = 1 ; i <= num_col1 ; i++)
				{
					temp1 = temp1+(parseInt($.inArray("col1_"+i, col1)) + 1)+"," ;
				}
				
				var temp2 = "" ;
				for(var i = 1 ; i <= num_col2 ; i++)
				{
					temp2 = temp2+(parseInt($.inArray("col2_"+i, col2)) + 1)+"," ;
				}
				
				alert("Temp1: "+temp1+" Temp2: "+temp2) ;
				//alert(num_col1+" "+num_col2) ;
				//temp1 = [] ;
				//$.inArray("idToLookFor", col1);
				
			}
		}) ;
	});
</script>

<div id="right">
	<div class="section">
		<div class="box">
			<div class="title">Fullsize box<span class="hide"></span></div>
			<div class="content">    
          	
            <div class="section">
				<div class="box">
					<div class="title">Fullsize box<span class="hide"></span></div>
					<div class="content">
                    	<div class="width100">
                            <div class="width50 float_left">
                                <ul id="sortable1" class="width95">
                                  <li id="col1_1" class="ui-state-default">Can be dropped..</li>
                                  <li id="col1_2" class="ui-state-default">..on an empty list</li>
                                  <li id="col1_3" class="ui-state-default">Item 3</li>
                                  <li id="col1_4" class="ui-state-default">Item 4</li>
                                  <li id="col1_5" class="ui-state-default">Item 5</li>
                                </ul>
                            </div>
                            
                            <div class="width50 float_left">
                                <ul id="sortable2" class="width95">
                                  <li id="col2_1" class="ui-state-highlight">Cannot be dropped..</li>
                                  <li id="col2_2" class="ui-state-highlight">..on an empty list</li>
                                  <li id="col2_3" class="ui-state-highlight">Item 3</li>
                                  <li id="col2_4" class="ui-state-highlight">Item 4</li>
                                  <li id="col2_5" class="ui-state-highlight">Item 5</li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
					</div>
				</div>
			</div>
            <div class="clear"></div>
            
            <form id="" name="" method="post" action="<?php echo base_url("") ; ?>">
            	<input type="hidden" id="" name="" value="<?php echo "" ; ?>" />
                <input type="hidden" id="" name="" value="<?php echo "" ; ?>" />
            	
                <div class="row"></div>
                <div class="row"><div class="right"><button type="submit"><span>Submit</span></button>&nbsp;&nbsp;<button type="submit"><span>Cancel</span></button></div></div>
                <div class="row"></div>        
            </form>
            
            </div>
		</div>
    </div>