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
						Fullsize box
						<span class="hide"></span>
					</div>
					<div class="content">
						Quisque nulla massa, blandit quis lobortis vel, consequat sit amet metus. Nunc imperdiet, velit eu auctor
						fermentum, nisl urna consectetur metus, sit amet ullamcorper justo nisl dignissim nisi. Suspendisse at
						nulla lectus. Nullam lorem eros, condimentum nec blandit ut, volutpat ut leo. Cras mollis libero
						vitae orci blandit dignissim. Vivamus pulvinar condimentum ligula et imperdiet.
					</div>
				</div>
			</div>
			
			<div class="section">
				<div class="half">
					<div class="box">
						<div class="title">
							Half size box
							<span class="hide"></span>
						</div>
						<div class="content">
							Quisque nulla massa, blandit quis lobortis vel, consequat sit amet metus. Nunc imperdiet, velit eu auctor
							fermentum, nisl urna consectetur metus, sit amet ullamcorper justo nisl dignissim nisi. Suspendisse at
							nulla lectus. Nullam lorem eros.
						</div>
					</div>
				</div>
				
				<div class="half">
					<div class="box">
						<div class="title">
							Half size box
							<span class="hide"></span>
						</div>
						<div class="content">
							Quisque nulla massa, blandit quis lobortis vel, consequat sit amet metus. Nunc imperdiet, velit eu auctor
							fermentum, nisl urna consectetur metus, sit amet ullamcorper justo nisl dignissim nisi. Suspendisse at
							nulla lectus. Nullam lorem eros.
						</div>
					</div>
				</div>
			</div>
			
			<div class="section">
				<div class="third">
					<div class="box">
						<div class="title">
							Third size box
							<span class="hide"></span>
						</div>
						<div class="content">
							Quisque nulla massa, blandit quis lobortis vel, consequat sit amet metus. Nunc imperdiet, velit eu auctor
							fermentum, nisl.
						</div>
					</div>
				</div>
				
				<div class="third">
					<div class="box">
						<div class="title">
							Third size box
							<span class="hide"></span>
						</div>
						<div class="content">
							Quisque nulla massa, blandit quis lobortis vel, consequat sit amet metus. Nunc imperdiet, velit eu auctor
							fermentum, nisl.
						</div>
					</div>
				</div>
				
				<div class="third">
					<div class="box">
						<div class="title">
							Third size box
							<span class="hide"></span>
						</div>
						<div class="content">
							Quisque nulla massa, blandit quis lobortis vel, consequat sit amet metus. Nunc imperdiet, velit eu auctor
							fermentum, nisl.
						</div>
					</div>
				</div>
			</div>
			
			<div class="section">
				<div class="three-quarter">
					<div class="box">
						<div class="title">
							Three-quarter size box
							<span class="hide"></span>
						</div>
						<div class="content">
							Quisque nulla massa, blandit quis lobortis vel, consequat sit amet metus. Nunc imperdiet, velit eu auctor
							fermentum, nisl urna consectetur metus, sit amet ullamcorper justo nisl dignissim nisi. Suspendisse at
							nulla lectus. Nullam lorem eros, condimentum nec blandit ut, volutpat ut leo. Cras mollis libero
							vitae orci blandit dignissim. Vivamus pulvinar condimentum ligula et imperdiet.
						</div>
					</div>
				</div>
				
				<div class="quarter">
					<div class="box">
						<div class="title">
							Quarter size box
							<span class="hide"></span>
						</div>
						<div class="content">
							Quisque nulla massa, blandit quis lobortis vel, conseqt sit amet metus. Nunc imperdiet, velit.
						</div>
					</div>
				</div>
			</div>
			
			<div class="section">
				<div class="quarter">
					<div class="box">
						<div class="title">
							Quarter size box
							<span class="hide"></span>
						</div>
						<div class="content">
							Quisque nulla ma, blandit quis lobort vel, consequat sit amet metus nunc.
						</div>
					</div>
				</div>
				
				<div class="quarter">
					<div class="box">
						<div class="title">
							Quarter size box
							<span class="hide"></span>
						</div>
						<div class="content">
							Quisque nulla ma, blandit quis lobort vel, consequat sit amet metus nunc.
						</div>
					</div>
				</div>
				
				<div class="quarter">
					<div class="box">
						<div class="title">
							Quarter size box
							<span class="hide"></span>
						</div>
						<div class="content">
							Quisque nulla ma, blandit quis lobort vel, consequat sit amet metus nunc.
						</div>
					</div>
				</div>
				
				<div class="quarter">
					<div class="box">
						<div class="title">
							Quarter size box
							<span class="hide"></span>
						</div>
						<div class="content">
							Quisque nulla ma, blandit quis lobort vel, consequat sit amet metus nunc.
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>
</body>

</html> 