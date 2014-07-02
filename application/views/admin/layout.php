<?php
/**
 * Layout for the admin interface.
 *
 * PHP version 5
 * LICENSE: This source file is subject to LGPL license
 * that is available through the world-wide-web at the following URI:
 * http://www.gnu.org/copyleft/lesser.html
 * @author     Ushahidi Team <team@ushahidi.com>
 * @package    Ushahidi - https://github.com/ushahidi/Ushahidi_Web
 * @copyright  Ushahidi - http://www.ushahidi.com
 * @license    http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License (LGPL)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=7" />
	<title><?php echo html::specialchars($site_name) ?></title>
	<?php
	// Action::header_scripts_admin - Additional Inline Scripts
	Event::run('ushahidi_action.header_scripts_admin');
	?>
	<script type="text/javascript" charset="utf-8">
		<?php if ($form_error): ?>
			$(document).ready(function() { $("#addedit").show(); });
		<?php endif; ?>
	</script>

	<?php echo $header_block; ?>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
	
</head>
<body>

	<div id="header_nav">
	<ul id="header_nav_left">
		<li></li>
			</ul>

	
	<ul id="header_nav_right">
		<li class="header_nav_user header_nav_has_dropdown">
		
			<a href="http://www.matamassa.org/admin">
				<span class="header_nav_label">admin</span>
				<img width="20" src="http://secure.gravatar.com/avatar/6afd3b5fa6d45756a02bfecab3708ac7?s=20&amp;d=mm&amp;r=g" alt="admin">
			</a>

			<ul style="display:none;" class="header_nav_dropdown">
							<li><a href="http://www.matamassa.org/admin/profile">Manage Your Account</a></li>

				<li><a href="http://www.matamassa.org/admin">Your Dashboard</a></li>
							

				<li><a href="http://www.matamassa.org/logout"><em>Logout</em></a></li>

			</ul>

				</li>
	</ul>
</div>

	<div class="holder">
		<!-- header -->
		<div id="header">

			<!-- info-nav -->
			<div class="info-nav">
				
				
				
				<div class="info-search">
					<?php echo form::open('admin/reports', array('method' => 'get', 'id' => 'info-search')); ?>
					<input type="text" name="k" class="info-keyword" value=""> 
					<a href="javascript:info_search();" class="btn">
						<?php echo Kohana::lang('ui_admin.search_reports');?>
					</a>
					<?php echo form::close(); ?>
				</div>
				<div style="clear:both;"></div>
				
			</div>
			<!-- title -->
			<div style="font-family:Open Sans; font-size:30px; letter-spacing:0.1em; padding:15px 0 0 2px; ">MATAMASSA</div>
			<!-- nav-holder -->
			<div class="nav-holder">
				<!-- main-nav -->
				<ul class="main-nav">
						
						<li>
							<a href="http://www.matamassa.org/admin/dashboard" class="active">
								Dashboard							</a>
						</li>
											<li>
							<a href="http://www.matamassa.org/admin/reports">
								Reports							</a>
						</li>
											<li>
							<a href="http://www.matamassa.org/admin/messages">
								Messages							</a>
						</li>
											<li>
							<a href="http://www.matamassa.org/admin/stats">
								Stats							</a>
						</li>
						
						<!--
											<li>
							<a href="http://www.matamassa.org/admin/addons">
								Addons							</a>
						</li>
						-->
						
						
				</ul>
				<!-- sub-nav -->
				<ul class="sub-nav">
					<?php foreach ($main_right_tabs as $page => $tab_name): ?>
						<li>
							<a href="<?php echo url::site(); ?>admin/<?php echo $page; ?>" <?php if($this_page==$page) echo 'class="active"' ;?>>
								<?php echo $tab_name; ?>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
		<!-- content -->
		<div id="content">
			<div class="bg">
				<?php print $content; ?>
			</div>
		</div>
	</div>
	<div id="footer">
		<div class="holder">
			<span style="font-family:Open Sans; font-size:16px; letter-spacing:0.1em;">
				<center />
				<br />
				&copy; <?php echo date("Y")?> MataMassa | Yuk Awasi Pemilu Kita!
				
   			</span>
		</div>
	</div>
<?php echo $footer_block; ?>
</body>
</html>
