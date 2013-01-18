<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> 
	<title>Waqas Tech: Theme for Pro Ohio</title>
	
<style type="text/css">
		@import url("<?php echo base_url() ; ?>css/style.css");
		@import url("<?php echo base_url() ; ?>css/forms.css");
		@import url("<?php echo base_url() ; ?>css/forms-btn.css");
		@import url("<?php echo base_url() ; ?>css/menu.css");
		@import url('<?php echo base_url() ; ?>css/style_text.css');
		@import url("<?php echo base_url() ; ?>css/datatables.css");
		@import url("<?php echo base_url() ; ?>css/fullcalendar.css");
		@import url("<?php echo base_url() ; ?>css/pirebox.css");
		@import url("<?php echo base_url() ; ?>css/modalwindow.css");
		@import url("<?php echo base_url() ; ?>css/statics.css");
		@import url("<?php echo base_url() ; ?>css/tabs-toggle.css");
		@import url("<?php echo base_url() ; ?>css/system-message.css");
		@import url("<?php echo base_url() ; ?>css/tooltip.css");
		@import url("<?php echo base_url() ; ?>css/wizard.css");
		@import url("<?php echo base_url() ; ?>css/wysiwyg.css");
		@import url("<?php echo base_url() ; ?>css/wysiwyg.modal.css");
		@import url("<?php echo base_url() ; ?>css/wysiwyg-editor.css");
</style>
	
	<!--[if lte IE 8]>
		<script type="text/javascript" src="js/excanvas.min.js"></script>
	<![endif]-->
	
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/jquery.backgroundPosition.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/jquery.placeholder.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/jquery.ui.1.8.17.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/jquery.ui.select.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/jquery.ui.spinner.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/superfish.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/supersubs.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/jquery.datatables.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/fullcalendar.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/jquery.smartwizard-2.0.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/pirobox.extended.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/jquery.tipsy.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/jquery.elastic.source.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/jquery.customInput.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/jquery.metadata.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/jquery.filestyle.mini.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/jquery.filter.input.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/jquery.flot.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/jquery.flot.pie.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/jquery.flot.resize.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/jquery.graphtable-0.2.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/jquery.wysiwyg.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/controls/wysiwyg.image.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/controls/wysiwyg.link.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/controls/wysiwyg.table.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/plugins/wysiwyg.rmFormat.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ; ?>js/costum.js"></script>
	
</head>

<body>

<div id="wrapper">
	<div id="container">
	
		<div class="hide-btn top"></div>
		<div class="hide-btn center"></div>
		<div class="hide-btn bottom"></div>
		
		<div id="top">
			<h1 id="logo"><a href="./"></a></h1>
			<div id="labels">
				<ul>
					<li><a href="#" class="user"><span class="bar">Welcome Waqas</span></a></li>
					<li><a href="#" class="settings"></a></li>
					<li class="subnav">
						<a href="#" class="messages"></a>
						<ul>
							<li><a href="#">New message</a></li>
							<li><a href="#">Inbox</a></li>
							<li><a href="#">Outbox</a></li>
							<li><a href="#">Trash</a></li>
						</ul>
					</li>
					<li><a href="#" class="logout"></a></li>
				</ul>
			</div>
			<div id="menu">
				<ul> 
					<li class="current"><a href="<?php echo base_url("theme/dashboard") ; ?>">Dashboard</a></li> 
					<li><a href="<?php echo base_url("theme/forms") ; ?>">Forms</a> </li> 
					<li><a href="<?php echo base_url("theme/tables") ; ?>">Tables</a><ul> 
							<li><a href="#">First item</a></li>
							<li class="current">
								<a href="#">Second item</a>
								<ul> 
									<li><a href="#">First item</a></li>
									<li class="current"><a href="#">Second item</a></li>
									<li><a href="#">Third item</a></li>
									<li><a href="#">Fourth item</a></li>
								</ul> 
							</li>
							<li><a href="#">Third item</a></li>
							<li><a href="#">Fourth item</a></li>
						</ul></li>
					<li><a href="<?php echo base_url("theme/charts") ; ?>">Charts</a></li>
					<li><a href="<?php echo base_url("theme/uielements") ; ?>">UI Elements</a></li>
					<li><a href="<?php echo base_url("theme/typography") ; ?>">Typography</a></li>
					<li><a href="<?php echo base_url("theme/gallery") ; ?>">Gallery</a></li>
					<li><a href="<?php echo base_url("theme/boxgrid") ; ?>">Boxgrid</a></li>
					<li><a href="<?php echo base_url("theme/icons") ; ?>">Icons</a></li>
				</ul>
			</div>
		</div>
		
		<div id="left">
			<div class="box search">
				<div class="content">
					<form action="">
						<input type="text" value="" placeholder="Search" />
						<button type="submit"></button>
					</form>
				</div>
			</div>
			
			<div class="box submenu">
				<div class="content">
					<ul>
						<li><a href="#">First item</a></li>
						<li class="current">
							<a href="#">Second item</a>
							<ul>
								<li><a href="#">First item</a></li>
								<li class="current"><a href="#">Second item</a></li>
								<li><a href="#">Third item</a></li>
								<li><a href="#">Fourth item</a></li>
							</ul>
						</li>
						<li><a href="#">Third item</a></li>
						<li><a href="#">Fourth item</a></li>
					</ul>
				</div>
			</div>
			
			<div class="box statics">
				<div class="content">
					<ul>
						<li><h2>Statistics</h2></li>
						<li>Total pages <div class="info red"><span>999</span></div></li>
						<li>Comments <div class="info blue"><span>654</span></div></li>
						<li>Users <div class="info green"><span>7</span></div></li>
						<li>Last update <div class="info black"><span>01.20.2012</span></div></li>
					</ul>
				</div>
			</div>
			
			<div class="box togglemenu">
				<div class="content">
					<ul>
						<li><h2>Toggle Menu</h2></li>
						<li class="title">Toggle item 01</li>
						<li class="content">
							Aenean vulputate condime pellent
							que. Sed ornare semper purus
							sollicitudin. Vivamus nisi dui,
							pharetra ac condimentum id.
						</li>
						<li class="title">Toggle item 02</li>
						<li class="content">
							Aenean vulputate condime pellent
							que. Sed ornare semper purus
							sollicitudin. Vivamus nisi dui,
							pharetra ac condimentum id.
						</li>
						<li class="title">Toggle item 03</li>
						<li class="content">
							Aenean vulputate condime pellent
							que. Sed ornare semper purus
							sollicitudin. Vivamus nisi dui,
							pharetra ac condimentum id.
						</li>
					</ul>
				</div>
			</div>
		</div>
		
		<div id="right">

			<div class="section">
				<div class="box">
					<div class="title">
						Inputs and textareas
						<span class="hide"></span>
					</div>
					<div class="content">
						<form action="">
							<div class="row">
								<label>Normal input</label>
								<div class="right"><input type="text" value="" /></div>
							</div>
							<div class="row">
								<label>Password input</label>
								<div class="right"><input type="password" value="" /></div>
							</div>
							<div class="row">
								<label>Placeholder input</label>
								<div class="right"><input type="text" value="" placeholder="Here some text" /></div>
							</div>
							<div class="row">
								<label>Readonly input</label>
								<div class="right"><input type="text" readonly="readonly" value="Here some text" /></div>
							</div>
							<div class="row">
								<label>Max lenght input</label>
								<div class="right"><input type="text" maxlength="25" value="" placeholder="Max. 25 characters..." /></div>
							</div>
							<div class="row">
								<label>Textarea</label>
								<div class="right"><textarea rows="" cols="" style="height : 100px;"></textarea></div>
							</div>
							<div class="row">
								<label>Textarea auto grow</label>
								<div class="right"><textarea rows="" cols="" class="grow" placeholder="This textarea is going to grow when you fill it with text." style="height : 100px;"></textarea></div>
							</div>
						</form>
					</div>
				</div>
			</div>
			
			<div class="section">
				<div class="box">
					<div class="title">
						Form validation
						<span class="hide"></span>
					</div>
					<div class="content">
						<form action="" class="valid">
							<div class="row">
								<label>Normal input</label>
								<div class="right"><input type="text" value="" name="name" class="{validate:{required:true, messages:{required:'Please enter your name'}}}" /></div>
							</div>
							<div class="row">
								<label>Email</label>
								<div class="right"><input type="text" value="" name="email" class="{validate:{required:true, email:true, messages:{required:'Please enter your email address'}}}" /></div>
							</div>
							<div class="row">
								<label>Textarea</label>
								<div class="right"><textarea rows="8" cols="" name="message" class="{validate:{required:true, messages:{required:'Please enter a message'}}}"></textarea></div>
							</div>
							<div class="row">
								<label>Buttons</label>
								<div class="right"><button type="submit"><span>Click me</span></button></div>
							</div>
						</form>
					</div>
				</div>
			</div>
			
			<div class="section">
				<div class="box">
					<div class="title">
						Inputs with filtering
						<span class="hide"></span>
					</div>
					<div class="content">
						<form action="">
							<div class="row">
								<label>Only text input</label>
								<div class="right"><input type="text" value="" placeholder="class='onlytext'" class="onlytext" /></div>
							</div>
							<div class="row">
								<label>Lowercase input</label>
								<div class="right"><input type="text" value="" placeholder="class='onlylow'" class="onlylow" /></div>
							</div>
							<div class="row">
								<label>Uppercase input</label>
								<div class="right"><input type="text" value="" placeholder="class='onlyup'" class="onlyup" /></div>
							</div>
							<div class="row">
								<label>Number input</label>
								<div class="right"><input type="text" value="" placeholder="class='onlynum'" class="onlynum" /></div>
							</div>
							<div class="row">
								<label>URL safe input</label>
								<div class="right"><input type="text" value="" placeholder="class='onlyurl'" class="onlyurl" /></div>
							</div>
						</form>
					</div>
				</div>
			</div>
			
			<div class="section">
				<div class="box">
					<div class="title">
						Selectmenus and spinners
						<span class="hide"></span>
					</div>
					<div class="content">
						<form action="">
							<div class="row">
								<label>Small selectmenu</label>
								<div class="right">
									<select class="small">
										<option selected="selected" value="">2012</option>
										<option value="">2011</option>
										<option value="">2010</option>
										<option value="">2009</option>
										<option value="">2008</option>
										<option value="">2007</option>
									</select>
								</div>
							</div>
							<div class="row">
								<label>Normal selectmenu</label>
								<div class="right">
									<select>
										<option selected="selected" value="">The selected one.</option>
										<option value="">Option number 1</option>
										<option value="">Option number 2</option>
										<option value="">Option number 3</option>
										<option value="">Option number 4</option>
										<option value="">Option number 5</option>
									</select>
								</div>
							</div>
							<div class="row">
								<label>Big selectmenu</label>
								<div class="right">
									<select class="big">
										<option selected="selected" value="">The selected one.</option>
										<option value="">Option number 1</option>
										<option value="">Option number 2</option>
										<option value="">Option number 3</option>
										<option value="">Option number 4</option>
										<option value="">Option number 5</option>
									</select>
								</div>
							</div>
							<div class="row">
								<label>Multi select</label>
								<div class="right">
									<select multiple="multiple" size="5" class="multiple">
										<option value="">Option number 1</option>
										<option value="">Option number 2</option>
										<option selected="selected" value="">Option number 3</option>
										<option value="">Option number 4</option>
										<option value="">Option number 5</option>
										<option selected="selected" value="">Option number 6</option>
										<option value="">Option number 7</option>
										<option value="">Option number 8</option>
										<option value="">Option number 9</option>
										<option value="">Option number 10</option>
									</select>
								</div>
							</div>
							<div class="row">
								<label>Normal spinner</label>
								<div class="right">
									<input type="text" class="spin" value="10" />
								</div>
							</div>
							
							<div class="row">
								<label>Decimal spinner</label>
								<div class="right">
									<input type="text" class="spin-dec" value="15.25" />
								</div>
							</div>
							
							<div class="row">
								<label>Currency spinner</label>
								<div class="right">
									<input type="text" class="spin-cur" value="1.00" />
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			
			<div class="section">
				<div class="box">
					<div class="title">
						Checkboxes, radiobuttons and file upload
						<span class="hide"></span>
					</div>
					<div class="content">
						<form action="">
							<div class="row">
								<label>Checkboxes</label>
								<div class="right">
									<input type="checkbox" name="" value="" id="first-check" checked="checked" />
									<label for="first-check">Check on</label>
									
									<input type="checkbox" name="" value="" id="second-check" />
									<label for="second-check">Check off</label>
								</div>
							</div>
							<div class="row">
								<label>Radiobuttons</label>
								<div class="right">
									<input type="radio" name="radiobutton" id="radio-1" checked="checked" /> 
									<label for="radio-1">Radio on</label>
									
									<input type="radio" name="radiobutton" id="radio-2" /> 
									<label for="radio-2">Radio off</label>
								</div>
							</div>
							<div class="row">
								<label>File upload</label>
								<div class="right"><input type="file" /></div>
							</div>
						</form>
					</div>
				</div>
			</div>
			
			<div class="section">
				<div class="box">
					<div class="title">
						Datepicker and buttons
						<span class="hide"></span>
					</div>
					<div class="content">
						<form action="">
							<div class="row">
								<label>Datepicker</label>
								<div class="right"><input type="text" class="datepicker" placeholder="mm.dd.yyyy" /></div>
							</div>
							<div class="row">
								<label>Datepicker inline</label>
								<div class="right"><div class="datepicker"></div></div>
							</div>
							<div class="row">
								<label>Buttons</label>
								<div class="right">
									<button type="submit"><span>Sumbit</span></button>
									<button type="submit" class="green"><span>Sumbit</span></button>
									<button type="submit" class="blue"><span>Sumbit</span></button>
									<button type="submit" class="red"><span>Sumbit</span></button>
									<button type="submit" class="orange"><span>Sumbit</span></button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			
			<div class="section">
				<div class="box">
					<div class="title">
						WYSIWYG
						<span class="hide"></span>
					</div>
					<div class="content nopadding">
						<form action="">
								<textarea rows="" cols="" class="wysiwyg" style="height : 100px;">working</textarea>
						</form>
					</div>
				</div>
			</div>
			
		</div>
		
	</div>
</div>
</body>

</html> 