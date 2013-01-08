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
						Some sliders
						<span class="hide"></span>
					</div>
					<div class="content">
						<form action="">
							<div class="row">
								<label>Normal slider</label>
								<div class="right">
									<div class="slider single-slide">
										Price: <input type="text" class="amount" value="" />
										<div class="slide" value="75" max="600" min="0"></div>
									</div>
								</div>
							</div>
							<div class="row">
								<label>Range slider</label>
								<div class="right">
									<div class="slider range-slide">
										Price Range: <input type="text" class="amount-first" value="" /> -
										<input type="text" class="amount-second" value="" />
										<div class="slide" value="75,300" max="600" min="0"></div> 
									</div>
								</div>
							</div>
							<div class="row">
								<label>Snap slider</label>
								<div class="right">
									<div class="slider snap-slide">
										Price: <input type="text" class="amount" value="" />
										<div class="slide" value="75" max="600" min="0" step="50"></div> 
									</div>
								</div>
							</div>
							<div class="row">
								<label>Vertical slider</label>
								<div class="right">
									<div class="slider single-vert-slide">
										<div class="slide" value="20" max="100" min="0"></div> 
									</div>
									
									<div class="slider single-vert-slide">
										<div class="slide" value="40" max="100" min="0"></div> 
									</div>
									
									<div class="slider single-vert-slide">
										<div class="slide" value="60" max="100" min="0"></div> 
									</div>
									
									<div class="slider single-vert-slide">
										<div class="slide" value="80" max="100" min="0"></div> 
									</div>
									
									<div class="slider single-vert-slide">
										<div class="slide" value="100" max="100" min="0"></div> 
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			
			<div class="section">
				<div class="message red">
					<span><b>Error</b>: This is a error message</span>
				</div>
				
				<div class="message orange">
					<span><b>Warning</b>: This is a warning message</span>
				</div>
				
				<div class="message green">
					<span><b>Succes</b>: This is a succes message</span>
				</div>
				
				<div class="message blue">
					<span><b>Information</b>: This is a information message</span>
				</div>
			</div>
			
			<div class="section">
				<div class="box">
					<div class="title">
						Wizard
						<span class="hide"></span>
					</div>
					<div class="content nopadding">
						<div class="wizard">
							<ul>
								<li><a href="#step-1">Step 1</a></li>
								<li><a href="#step-2">Step 2</a></li>
								<li><a href="#step-3">Step 3</a></li>
							</ul>
							<div id="step-1">
								<div class="message inner red">
									<span><b>Error</b>: This is a error message</span>
								</div>
								<form action="">
									<div class="row">
										<label>Username</label>
										<div class="right"><input type="text" value="" /></div>
									</div>
									<div class="row">
										<label>Password</label>
										<div class="right"><input type="password" value="" /></div>
									</div>
									<div class="row">
										<label>Message</label>
										<div class="right"><textarea rows="8" cols=""></textarea></div>
									</div>
								</form>
							</div>
							<div id="step-2">
								<table cellspacing="0" cellpadding="0" border="0"> 
									<thead> 
										<tr>
											<th>Username</th>
											<th>Duration</th>
											<th>Date</th>
											<th>Last visit page</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Waqas</td>
											<td>10 min</td>
											<td>23 January 2012</td>
											<td><a href="#">Dashboard</a></td>
										</tr>
										<tr>
											<td>Hong Gildong</td>
											<td>3 min</td>
											<td>23 January 2012</td>
											<td><a href="#">Login</a></td>
										</tr>
										<tr>
											<td>Israel Israeli</td>
											<td>7 min</td>
											<td>23 January 2012</td>
											<td><a href="#">Our Company</a></td>
										</tr>
										<tr>
											<td>John Smith</td>
											<td>3 hours</td>
											<td>23 January 2012</td>
											<td><a href="#">Message inbox</a></td>
										</tr>
										<tr>
											<td>Luther Blissett</td>
											<td>41 min</td>
											<td>23 January 2012</td>
											<td><a href="#">My profile</a></td>
										</tr>
										<tr>
											<td>Tommy Atkins</td>
											<td>1 hour</td>
											<td>23 January 2012</td>
											<td><a href="#">Settings</a></td>
										</tr>
									</tbody>
								</table>
							</div>
							<div id="step-3">
								<h1>A nice title here</h1>
								<p>
									<b>Integer augue lacus, lobortis in luctus in, sodales non libero. Nulla facilisi. Morbi nec est ut eros
									sollicitudin rhoncus. Pellentesque consectetur massa vitae eros varius in ultricies elit laoreet.</b>
								</p>
								<p>
									Mauris aliquet orci mi, at gravida metus. Integer et ante eu augue faucibus dapibus. Pellentesque
									iaculis tempus lorem, id convallis massa ultricies eu. Praesent facilisis nisi est, mattis rutrum sapien.
									Etiam et justo libero, quis aliquam leo. Fusce eros velit, aliquam hendrerit tincidunt quis, laoreet id nisi.
									Sed mauris velit, rutrum eget eleifend at, feugiat sed sem.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="section">
				<div class="half">
					<div class="box">
						<div class="title">
							Dialogs
							<span class="hide"></span>
						</div>
						<div class="content">
							<button type="submit" class="medium grey modalopen"><span>Open the dialog</span></button>
							
							<div class="modal" title="Dialog window">
								<form action="">
									<div class="row">
										<label>Normal inputfield</label>
										<div class="right"><input type="text" value="" /></div>
									</div>
									<div class="row">
										<label>Password inputfield</label>
										<div class="right"><input type="password" value="" /></div>
									</div>
									<div class="row">
										<label>Selectbox medium</label>
										<div class="right">
											<select>
												<option selected="selected" value="">Option 01</option>
												<option value="">Option 02</option>
												<option value="">Option 03</option>
												<option value="">Option 04</option>
												<option value="">Option 05</option>
											</select>
										</div>
									</div>
									<div class="row">
										<label>Textarea</label>
										<div class="right"><textarea rows="5" cols=""></textarea></div>
									</div>
									<div class="row">
										<label></label>
										<button type="submit" class="medium grey"><span>Sumbit</span></button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				
				<div class="half">
					<div class="box">
						<div class="title">
							Tooltips
							<span class="hide"></span>
						</div>
						<div class="content">
							<button type="submit" class="tip-s medium grey" original-title="Top message"><span>Top</span></button>
							<button type="submit" class="tip-n medium grey" original-title="Bottom message"><span>Bottom</span></button>
							<button type="submit" class="tip-e medium grey" original-title="Left message"><span>Left</span></button>
							<button type="submit" class="tip-w medium grey" original-title="Right message"><span>Right</span></button>
						</div>
					</div>
				</div>
			</div>
			
			<div class="section">
				<div class="box">
					<div class="title">
						Calendar
						<span class="hide"></span>
					</div>
					<div class="content nopadding">
						<div id="calendar"></div>
					</div>
				</div>
			</div>
			
			<div class="section">
				<div class="half">
					<div class="box">
						<div class="title">
							Tabs
							<span class="hide"></span>
						</div>
						<div class="content nopadding">
							<div class="tabs">
								<div class="tabmenu">
									<ul> 
										<li><a href="#tabs-1">Tab 001</a></li> 
										<li><a href="#tabs-2">Tab 002</a></li> 
										<li><a href="#tabs-3">Tab 003</a></li> 
									</ul>
								</div>
								
								<div class="tab" id="tabs-1">
									<h2>The first tab</h2>
									<p>
										Suspendisse sed mi vel diam sodales lacinia. Integer
										molestie euismod suscipit. Nunc lectus sapien, dignis
										sim ut bibendum in, tincidunt quis lacus.
									</p>
									<p>
										Quisque convallis scelerisque est, ac vulputate turpis
										convallis sit amet. Etiam tempus viverra lacus quis
										faucibus. Cras varius volutpat mi sit amet egestas.
									</p>
									<p>
										Vivamus posuere elementum ligula et. Aliquam
										ligula sapien, gravida fermentum tempus. 
									</p> 
								</div>
								
								<div class="tab" id="tabs-2">
									<h2>The second tab</h2>
									<p>
										Suspendisse sed mi vel diam sodales lacinia. Integer
										molestie euismod suscipit. Nunc lectus sapien, dignis
										sim ut bibendum in, tincidunt quis lacus.
									</p>
									<p>
										Quisque convallis scelerisque est, ac vulputate turpis
										convallis sit amet. Etiam tempus viverra lacus quis
										faucibus. Cras varius volutpat mi sit amet egestas.
									</p>
									<p>
										Vivamus posuere elementum ligula et. Aliquam
										ligula sapien, gravida fermentum tempus. 
									</p>
								</div>
								
								<div class="tab" id="tabs-3">
									<h2>The third tab</h2>
									<p>
										Suspendisse sed mi vel diam sodales lacinia. Integer
										molestie euismod suscipit. Nunc lectus sapien, dignis
										sim ut bibendum in, tincidunt quis lacus.
									</p>
									<p>
										Quisque convallis scelerisque est, ac vulputate turpis
										convallis sit amet. Etiam tempus viverra lacus quis
										faucibus. Cras varius volutpat mi sit amet egestas.
									</p>
									<p>
										Vivamus posuere elementum ligula et. Aliquam
										ligula sapien, gravida fermentum tempus. 
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="half">
					<div class="box">
						<div class="title">
							Toggle
							<span class="hide"></span>
						</div>
						<div class="content nopadding">
							<div class="togglemenu">
								<ul>
									<li class="title">Toggle item 01</li>
									<li class="content">
										<h2>Hello</h2>
										<p>
											Quisque convallis scelerisque est, ac vulputate turpis
											convallis sit amet. Etiam tempus viverra lacus quis
											faucibus. Cras varius volutpat mi sit amet egestas.
										</p>
										<p>
											Quisque convallis scelerisque est, ac vulputate turpis
											convallis sit amet. Etiam tempus viverra lacus quis.
										</p>
									</li>
									<li class="title">Toggle item 02</li>
									<li class="content">
										<h2>Want a great admin template?</h2>
										<p>
											Quisque convallis scelerisque est, ac vulputate turpis
											convallis sit amet. Etiam tempus viverra lacus quis
											faucibus. Cras varius volutpat mi sit amet egestas.
										</p>
										<p>
											Quisque convallis scelerisque est, ac vulputate turpis
											convallis sit amet. Etiam tempus viverra lacus quis.
										</p>
									</li>
									<li class="title">Toggle item 03</li>
									<li class="content">
										<h2>Buy me then!</h2>
										<p>
											Quisque convallis scelerisque est, ac vulputate turpis
											convallis sit amet. Etiam tempus viverra lacus quis
											faucibus. Cras varius volutpat mi sit amet egestas.
										</p>
										<p>
											Quisque convallis scelerisque est, ac vulputate turpis
											convallis sit amet. Etiam tempus viverra lacus quis.
										</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		
	</div>
</div>
</body>

</html> 