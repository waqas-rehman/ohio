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
					Small Icons
					<span class="hide"></span>
				</div>
				<div class="content iconbox">
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/alert.png" alt="Alert" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/archive.png" alt="Archive" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/basket.png" alt="Basket" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/calculator.png" alt="Calculator" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/calendar.png" alt="Calendar" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/cancel.png" alt="Cancel" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/cart.png" alt="Cart" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/chat.png" alt="Chat" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/check.png" alt="Check" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/color-picker.png" alt="Color Picker" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/comment.png" alt="Comment" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/connect.png" alt="Connect" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/construction.png" alt="Construction" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/controls.png" alt="Controls" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/copy.png" alt="Copy" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/cut.png" alt="Cut" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/dashboard.png" alt="Dashboard" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/database.png" alt="Database" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/display.png" alt="Display" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/document.png" alt="Document" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/door.png" alt="Door" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/edit.png" alt="Edit" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/equalizer.png" alt="Equalizer" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/export.png" alt="Export" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/favourite.png" alt="Favourite" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/file.png" alt="File" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/file-edit.png" alt="File Edit" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/file-remove.png" alt="File Remove" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/fire.png" alt="Fire" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/folder.png" alt="Folder" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/folder-open.png" alt="Folder open" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/help.png" alt="Help" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/idea.png" alt="Idea" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/login.png" alt="Login" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/logout.png" alt="Logout" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/messages.png" alt="Messages" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/movie.png" alt="Movie" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/photo.png" alt="Photo" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/pollution.png" alt="Pollution" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/preferences.png" alt="Preferences" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/print.png" alt="Print" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/register.png" alt="Register" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/settings.png" alt="Settings" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/search.png" alt="Search" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/sitemap.png" alt="Sitemap" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/standby.png" alt="Standby" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/star.png" alt="Star" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/statics.png" alt="Statics" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/support.png" alt="Support" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/trash.png" alt="Trash" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/user.png" alt="User" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/users.png" alt="Users" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/volume.png" alt="Volume" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/web.png" alt="Web" /></a>
					
					<a href="#" class="item small"><img src="<?php echo base_url() ; ?>gfx/icons/small/wizard.png" alt="Web" /></a>
				</div>
			</div>
		</div>
		
		<div class="nobox">
		
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/alert.png" alt="Alert" />
				<span>Alert</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/archive.png" alt="Archive" />
				<span>Archive</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/basket.png" alt="Basket" />
				<span>Basket</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/calculator.png" alt="Calculator" />
				<span>Calculator</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/calendar.png" alt="Calendar" />
				<span>Calendar</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/cancel.png" alt="Cancel" />
				<span>Cancel</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/cart.png" alt="Cart" />
				<span>Cart</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/chat.png" alt="Chat" />
				<span>Chat</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/check.png" alt="Check" />
				<span>Check</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/color-picker.png" alt="Color Picker" />
				<span>Color Picker</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/comment.png" alt="Comment" />
				<span>Comment</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/connect.png" alt="Connect" />
				<span>Connect</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/construction.png" alt="Construction" />
				<span>Construction</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/controls.png" alt="Controls" />
				<span>Controls</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/copy.png" alt="Copy" />
				<span>Copy</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/cut.png" alt="Cut" />
				<span>Cut</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/dashboard.png" alt="Dashboard" />
				<span>Dashboard</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/database.png" alt="Database" />
				<span>Database</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/display.png" alt="Display" />
				<span>Display</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/document.png" alt="Document" />
				<span>Document</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/door.png" alt="Door" />
				<span>Door</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/edit.png" alt="Edit" />
				<span>Edit</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/equalizer.png" alt="Equalizer" />
				<span>Equalizer</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/export.png" alt="Export" />
				<span>Export</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/favourite.png" alt="Favourite" />
				<span>Favourite</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/file.png" alt="File" />
				<span>File</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/file-edit.png" alt="File Edit" />
				<span>File Edit</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/file-remove.png" alt="File Remove" />
				<span>File Remove</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/fire.png" alt="Fire" />
				<span>Fire</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/folder.png" alt="Folder" />
				<span>Folder</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/folder-open.png" alt="Folder open" />
				<span>Folder open</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/help.png" alt="Help" />
				<span>Help</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/idea.png" alt="Idea" />
				<span>Idea</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/login.png" alt="Login" />
				<span>Login</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/logout.png" alt="Logout" />
				<span>Logout</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/messages.png" alt="Messages" />
				<span>Messages</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/movie.png" alt="Movie" />
				<span>Movie</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/photo.png" alt="Photo" />
				<span>Photo</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/pollution.png" alt="Pollution" />
				<span>Pollution</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/preferences.png" alt="Preferences" />
				<span>Preferences</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/print.png" alt="Print" />
				<span>Print</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/register.png" alt="Register" />
				<span>Register</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/settings.png" alt="Settings" />
				<span>Settings</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/search.png" alt="Search" />
				<span>Search</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/sitemap.png" alt="Sitemap" />
				<span>Sitemap</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/standby.png" alt="Standby" />
				<span>Standby</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/star.png" alt="Star" />
				<span>Star</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/statics.png" alt="Statics" />
				<span>Statics</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/support.png" alt="Support" />
				<span>Support</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/trash.png" alt="Trash" />
				<span>Trash</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/user.png" alt="User" />
				<span>User</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/users.png" alt="Users" />
				<span>Users</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/volume.png" alt="Volume" />
				<span>Volume</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/web.png" alt="Web" />
				<span>Web</span>
				Here some text
			</a>
			
			<a href="#" class="item">
				<img src="<?php echo base_url() ; ?>gfx/icons/big/wizard.png" alt="Wizard" />
				<span>Wizard</span>
				Here some text
			</a>
			
		</div>
			
		</div>
		
	</div>
</div>
</body>

</html> 