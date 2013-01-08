<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> 
	<title>Pro Ohio System</title>
	
<style type="text/css">
		@import url("<?php echo base_url("css/style.css") ; ?>");
		@import url("<?php echo base_url("css/forms.css") ; ?>");
		@import url("<?php echo base_url("css/forms-btn.css") ; ?>");
		@import url("<?php echo base_url("css/menu.css") ; ?>");
		@import url("<?php echo base_url("css/style_text.css") ; ?>");
		@import url("<?php echo base_url("css/datatables.css") ; ?>");
		@import url("<?php echo base_url("css/fullcalendar.css") ; ?>");
		@import url("<?php echo base_url("css/pirebox.css") ; ?>");
		@import url("<?php echo base_url("css/modalwindow.css") ; ?>");
		@import url("<?php echo base_url("css/statics.css") ; ?>");
		@import url("<?php echo base_url("css/tabs-toggle.css") ; ?>");
		@import url("<?php echo base_url("css/system-message.css") ; ?>");
		@import url("<?php echo base_url("css/tooltip.css") ; ?>");
		@import url("<?php echo base_url("css/wizard.css") ; ?>");
		@import url("<?php echo base_url("css/wysiwyg.css") ; ?>");
		@import url("<?php echo base_url("css/wysiwyg.modal.css") ; ?>");
		@import url("<?php echo base_url("css/wysiwyg-editor.css") ; ?>");
</style>
	
	<!--[if lte IE 8]>
		<script type="text/javascript" src="js/excanvas.min.js"></script>
	<![endif]-->
	
	<script type="text/javascript" src="<?php echo base_url("js/jquery-1.7.1.min.js") ; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("js/jquery.backgroundPosition.js") ; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("js/jquery.placeholder.min.js") ; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("js/jquery.ui.1.8.17.js") ; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("js/jquery.ui.select.js") ; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("js/jquery.ui.spinner.js") ; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("js/superfish.js") ; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("js/supersubs.js") ; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("js/jquery.datatables.js") ; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("js/fullcalendar.min.js") ; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("js/jquery.smartwizard-2.0.min.js") ; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("js/pirobox.extended.min.js") ; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("js/jquery.tipsy.js") ; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("js/jquery.elastic.source.js") ; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("js/jquery.customInput.js") ; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("js/jquery.validate.min.js") ; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("js/jquery.metadata.js") ; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("js/jquery.filestyle.mini.js") ; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("js/jquery.filter.input.js") ; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("js/jquery.flot.js") ; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("js/jquery.flot.pie.min.js") ; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("js/jquery.flot.resize.min.js") ; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("js/jquery.graphtable-0.2.js") ; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("js/jquery.wysiwyg.js") ; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("js/controls/wysiwyg.image.js") ; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("js/controls/wysiwyg.link.js") ; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("js/controls/wysiwyg.table.js") ; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("js/plugins/wysiwyg.rmFormat.js") ; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("js/costum.js") ; ?>"></script>
	
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
					<li <?php if($session_data["menu"] == "dashboard") echo 'class="current"' ; ?>><a href="<?php echo base_url("home") ; ?>">Dashboard</a></li> 
					<li <?php if($session_data["menu"] == "states") echo 'class="current"' ; ?>><a href="<?php echo base_url("states") ; ?>">States</a>
						<ul> 
							<li <?php if($session_data["submenu"] == "add_state") echo 'class="current"' ; ?>>
                            	<a href="<?php echo base_url("states/add_state") ; ?>">Add State</a>
                            </li>
						</ul> 
					</li>
					<li <?php if($session_data["menu"] == "districts") echo 'class="current"' ; ?>><a href="<?php echo base_url("districts") ; ?>">Districts</a>
						<ul> 
							<li <?php if($session_data["submenu"] == "add_district") echo 'class="current"' ; ?>>
                            	<a href="<?php echo base_url("districts/add_district") ; ?>">Add District</a>
                            </li>
						</ul> 
					</li>
                </ul>
			</div>
		</div>