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
			<div class="btn-box">
				<div class="content">
					<a href="#" class="item">
						<img src="<?php echo base_url() ; ?>gfx/icons/big/dashboard.png" alt="Dashboard" />
						<span>Dashboard</span>
						Back to the dashboard
					</a>
					
					<a href="#" class="item">
						<img src="<?php echo base_url() ; ?>gfx/icons/big/messages.png" alt="Messages" />
						<span>Messages</span>
						Go to your inbox
					</a>
					
					<a href="#" class="item">
						<img src="<?php echo base_url() ; ?>gfx/icons/big/settings.png" alt="Settings" />
						<span>Settings</span>
						Change your settings
					</a>
					
					<a href="#" class="item">
						<img src="<?php echo base_url() ; ?>gfx/icons/big/support.png" alt="Support" />
						<span>Support</span>
						Need some support?
					</a>
					
					<a href="#" class="item">
						<img src="<?php echo base_url() ; ?>gfx/icons/big/statics.png" alt="Statics" />
						<span>Statics</span>
						See your statistics
					</a>
				</div>
			</div>
		
			<div class="section">
				<div class="box">
					<div class="title">
						Chart
						<span class="hide"></span>
					</div>
					<div class="content">
						<div class="chart-caption">Statistics February</div> 
						<table class="chart" style="width : 100%;"> 
							<thead> 
								<tr> 
									<th></th> 
									<th style="color : #e10000;">unique visitors</th> 
									<th style="color : #000000;">pageviews</th> 
								</tr> 
							</thead> 
							<tbody> 
								<tr> 
									<th>1</th><td>10</td><td>60</td> 
								</tr> 
								<tr> 
									<th>2</th><td>40</td><td>90</td> 
								</tr> 
								<tr> 
									<th>3</th><td>70</td><td>120</td> 
								</tr> 
								<tr> 
									<th>4</th><td>100</td><td>150</td> 
								</tr> 
								<tr> 
									<th>5</th><td>130</td><td>180</td> 
								</tr> 
								<tr> 
									<th>6</th><td>160</td><td>210</td> 
								</tr> 
								<tr> 
									<th>7</th><td>190</td><td>240</td> 
								</tr> 
								<tr> 
									<th>8</th><td>160</td><td>210</td> 
								</tr> 
								<tr> 
									<th>9</th><td>130</td><td>180</td> 
								</tr> 
								<tr> 
									<th>10</th><td>100</td><td>150</td> 
								</tr> 
								<tr> 
									<th>11</th><td>70</td><td>120</td> 
								</tr> 
								<tr> 
									<th>12</th><td>40</td><td>90</td> 
								</tr> 
								<tr> 
									<th>13</th><td>70</td><td>120</td> 
								</tr> 
								<tr> 
									<th>14</th><td>100</td><td>150</td> 
								</tr> 
								<tr> 
									<th>15</th><td>130</td><td>180</td> 
								</tr> 
								<tr> 
									<th>16</th><td>160</td><td>210</td> 
								</tr> 
								<tr> 
									<th>17</th><td>190</td><td>240</td> 
								</tr> 
								<tr> 
									<th>18</th><td>220</td><td>270</td> 
								</tr> 
								<tr> 
									<th>19</th><td>250</td><td>240</td> 
								</tr> 
								<tr> 
									<th>20</th><td>280</td><td>210</td> 
								</tr> 
								<tr> 
									<th>21</th><td>310</td><td>180</td> 
								</tr> 
								<tr> 
									<th>22</th><td>280</td><td>150</td> 
								</tr> 
								<tr> 
									<th>23</th><td>250</td><td>120</td> 
								</tr> 
								<tr> 
									<th>24</th><td>220</td><td>90</td> 
								</tr> 
								<tr> 
									<th>25</th><td>190</td><td>60</td> 
								</tr> 
								<tr> 
									<th>26</th><td>160</td><td>90</td> 
								</tr> 
								<tr> 
									<th>27</th><td>130</td><td>120</td> 
								</tr> 
								<tr> 
									<th>28</th><td>100</td><td>150</td> 
								</tr> 
								<tr> 
									<th>29</th><td>70</td><td>120</td> 
								</tr> 
								<tr> 
									<th>30</th><td>40</td><td>90</td> 
								</tr>
								<tr> 
									<th>31</th><td>10</td><td>60</td> 
								</tr> 
							</tbody> 
						</table>
					</div>
				</div>
			</div>

			<div class="section">
				<div class="half">
					<div class="box">
						<div class="title">
							Recent comments
							<span class="hide"></span>
						</div>
						<div class="content">
							<ul class="comments">
								<li>
									<a href="#"><img src="<?php echo base_url() ; ?>gfx/user-photo.gif" alt="User" /></a>
									<a href="#"><b>Waqas</b></a> says:<br />
									Vestibulum at metus mauris, sed iaculis. 
									Vestibulum hendrerit mattis blandit. 
								</li>
								<li>
									<a href="#"><img src="<?php echo base_url() ; ?>gfx/user-photo.gif" alt="User" /></a>
									<a href="#"><b>Waqas</b></a> says:<br />
									Vestibulum at metus mauris, sed iaculis. 
									Vestibulum hendrerit mattis blandit. 
								</li>
								<li>
									<a href="#"><img src="<?php echo base_url() ; ?>gfx/user-photo.gif" alt="User" /></a>
									<a href="#"><b>Waqas</b></a> says:<br />
									Vestibulum at metus mauris, sed iaculis. 
									Vestibulum hendrerit mattis blandit. 
								</li>
								<li>
									<a href="#"><img src="<?php echo base_url() ; ?>gfx/user-photo.gif" alt="User" /></a>
									<a href="#"><b>Waqas</b></a> says:<br />
									Vestibulum at metus mauris, sed iaculis. 
									Vestibulum hendrerit mattis blandit. 
								</li>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="half">
					<div class="box">
						<div class="title">
							Quick page insert
							<span class="hide"></span>
						</div>
						<div class="content">
							<form action="">
								<div class="row">
									<label>Title</label>
									<div class="right"><input type="text" value="" /></div>
								</div>
								<div class="row">
									<label>Your tags</label>
									<div class="right"><input type="text" value="" /></div>
								</div>
								<div class="row">
									<label>Page content</label>
									<div class="right"><textarea rows="" cols="" style="height : 144px;"></textarea></div>
								</div>
								<div class="row">
									<label></label>
									<div class="right"><button type="submit"><span>Sumbit</span></button></div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			
			<div class="section">
				<div class="box">
					<div class="title">
						When was somewone online
						<span class="hide"></span>
					</div>
					<div class="content">
						<table cellspacing="0" cellpadding="0" border="0" class="all"> 
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
								<tr>
									<td>Average Joe</td>
									<td>39 min</td>
									<td>23 January 2012</td>
									<td><a href="#">Contact form</a></td>
								</tr>
								<tr>
									<td>Nomen nescio</td>
									<td>56 sec</td>
									<td>23 January 2012</td>
									<td><a href="#">Build a page</a></td>
								</tr>
								<tr>
									<td>Joe Shmoe</td>
									<td>45 min</td>
									<td>23 January 2012</td>
									<td><a href="#">My statics</a></td>
								</tr>
								<tr>
									<td>Jane Doe</td>
									<td>23 min</td>
									<td>23 January 2012</td>
									<td><a href="#">Dashboard</a></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<div class="section">
				<div class="half">
					<div class="box">
						<div class="title">
							Some tabs
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
							Recent photos
							<span class="hide"></span>
						</div>
						<div class="content nopadding">
							<div class="gallery">
								<div class="thumb">
									<div class="hover"><a href="#"></a></div>
									<a href="#" class="pirobox" rel="single" title=""><img src="<?php echo base_url() ; ?>gfx/photo.jpg" alt="Photo" /></a>
								</div>
								
								<div class="thumb">
									<div class="hover"><a href="#"></a></div>
									<a href="#" class="pirobox" rel="single" title=""><img src="<?php echo base_url() ; ?>gfx/photo.jpg" alt="Photo" /></a>
								</div>
								
								<div class="thumb">
									<div class="hover"><a href="#"></a></div>
									<a href="#" class="pirobox" rel="single" title=""><img src="<?php echo base_url() ; ?>gfx/photo.jpg" alt="Photo" /></a>
								</div>
								
								<div class="thumb">
									<div class="hover"><a href="#"></a></div>
									<a href="#" class="pirobox" rel="single" title=""><img src="<?php echo base_url() ; ?>gfx/photo.jpg" alt="Photo" /></a>
								</div>
								
								<div class="thumb">
									<div class="hover"><a href="#"></a></div>
									<a href="#" class="pirobox" rel="single" title=""><img src="<?php echo base_url() ; ?>gfx/photo.jpg" alt="Photo" /></a>
								</div>
								
								<div class="thumb">
									<div class="hover"><a href="#"></a></div>
									<a href="#" class="pirobox" rel="single" title=""><img src="<?php echo base_url() ; ?>gfx/photo.jpg" alt="Photo" /></a>
								</div>
								
								<div class="thumb">
									<div class="hover"><a href="#"></a></div>
									<a href="#" class="pirobox" rel="single" title=""><img src="<?php echo base_url() ; ?>gfx/photo.jpg" alt="Photo" /></a>
								</div>
								
								<div class="thumb">
									<div class="hover"><a href="#"></a></div>
									<a href="#" class="pirobox" rel="single" title=""><img src="<?php echo base_url() ; ?>gfx/photo.jpg" alt="Photo" /></a>
								</div>
								
								<div class="thumb">
									<div class="hover"><a href="#"></a></div>
									<a href="#" class="pirobox" rel="single" title=""><img src="<?php echo base_url() ; ?>gfx/photo.jpg" alt="Photo" /></a>
								</div>
								
								<div class="thumb">
									<div class="hover"><a href="#"></a></div>
									<a href="#" class="pirobox" rel="single" title=""><img src="<?php echo base_url() ; ?>gfx/photo.jpg" alt="Photo" /></a>
								</div>
								
								<div class="thumb">
									<div class="hover"><a href="#"></a></div>
									<a href="#" class="pirobox" rel="single" title=""><img src="<?php echo base_url() ; ?>gfx/photo.jpg" alt="Photo" /></a>
								</div>
								
								<div class="thumb">
									<div class="hover"><a href="#"></a></div>
									<a href="#" class="pirobox" rel="single" title=""><img src="<?php echo base_url() ; ?>gfx/photo.jpg" alt="Photo" /></a>
								</div>
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