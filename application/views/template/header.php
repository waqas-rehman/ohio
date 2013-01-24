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
		@import url("<?php echo base_url("css/custom-css.css") ; ?>");
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
					<li><a href="<?php echo base_url("home") ; ?>" class="user"><span class="bar">Welcome Waqas</span></a></li>
					<li><a href="<?php echo base_url("home") ; ?>" class="settings"></a></li>
					<li class="subnav"><a href="<?php echo base_url("home") ; ?>" class="messages"></a>
						<ul>
							<li><a href="<?php echo base_url("home") ; ?>">New message</a></li>
							<li><a href="<?php echo base_url("home") ; ?>">Inbox</a></li>
							<li><a href="<?php echo base_url("home") ; ?>">Outbox</a></li>
							<li><a href="<?php echo base_url("home") ; ?>">Trash</a></li>
						</ul>
					</li>
					<li><a href="<?php echo base_url("home/logout") ; ?>" class="logout"></a></li>
				</ul>
			</div>
			<div id="menu">
				<ul> 
					<li <?php if($session_data["menu"] == "dashboard") echo 'class="current"' ; ?>><a href="<?php echo base_url("dashboard") ; ?>">Dashboard</a></li>
                    
                    <li <?php if($session_data["top_menu"] == "test_management") echo 'class="current"' ; ?>><a href="javascript:void(0);">Test Management</a>
                    	<ul>
                        	<li <?php if($session_data["menu"] == "subjects") echo 'class="current"' ; ?>><a href="<?php echo base_url("subjects") ; ?>">Subjects</a>
								<ul>
                            		<li <?php if($session_data["submenu"] == "add_subject") echo 'class="current"' ; ?>><a href="<?php echo base_url("subjects/add_subject") ; ?>">Add Subject</a></li>
								</ul>
							</li>
                            <li <?php if($session_data["menu"] == "standards") echo 'class="current"' ; ?>><a href="<?php echo base_url("standards") ; ?>">Standards</a>
								<ul>
									<li <?php if($session_data["submenu"] == "add_standard") echo 'class="current"' ; ?>><a href="<?php echo base_url("standards/add_standard") ; ?>">Add Standard</a></li>
								</ul>
							</li>
                            <li <?php if($session_data["menu"] == "questions") echo 'class="current"' ; ?>><a href="<?php echo base_url("questions") ; ?>">MCQs/Text Questions</a>
								<ul>
									<li <?php if($session_data["submenu"] == "add_question") echo 'class="current"' ; ?>><a href="<?php echo base_url("questions/add_question") ; ?>">Add MCQ/Text Question</a></li>
								</ul>
							</li>
                            
                            <li <?php if($session_data["menu"] == "questions_mtc") echo 'class="current"' ; ?>><a href="<?php echo base_url("questions_mtc") ; ?>">Match the Col. Questions</a>
								<ul>
									<li <?php if($session_data["submenu"] == "add_mtc_question") echo 'class="current"' ; ?>><a href="<?php echo base_url("questions_mtc/add_question") ; ?>">Add Match the Col. Question</a></li>
								</ul>
							</li>
                            
                    	</ul>
                	</li>
                    
                    <li <?php if($session_data["top_menu"] == "school_management") echo 'class="current"' ; ?>><a href="javascript:void(0);">School Management</a>
						<ul>
                        	<li <?php if($session_data["menu"] == "states") echo 'class="current"' ; ?>><a href="<?php echo base_url("states") ; ?>">States</a>
                                <ul>
                                    <li <?php if($session_data["submenu"] == "add_state") echo 'class="current"' ; ?>><a href="<?php echo base_url("states/add_state") ; ?>">Add State</a></li>
                                </ul>
							</li>
                            <li <?php if($session_data["menu"] == "districts") echo 'class="current"' ; ?>><a href="<?php echo base_url("districts") ; ?>">Districts</a>
								<ul>
                                	<li <?php if($session_data["submenu"] == "add_district") echo 'class="current"' ; ?>><a href="<?php echo base_url("districts/add_district") ; ?>">Add District</a></li>
								</ul>
							</li>
						</ul>
					</li>
                    
                </ul>
			</div>
		</div>