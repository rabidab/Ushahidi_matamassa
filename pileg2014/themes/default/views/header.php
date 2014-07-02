	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<title><?php echo html::specialchars($page_title.$site_name); ?></title>
	
	<meta name="alexaVerifyID" content="d8h6jCNhEA-EX8DnsKDLUh4KEBU" />
	<meta name="description" content="MataMassa, Pelanggaran Pemilu, Awasi Pemilu, Caleg, Capres, pemilu 2014, pemilu 2014, awasi pemilu" />
	<meta name="keywords" content="Pelanggaran Pemilu, Awasi Pemilu, Daftar Pelanggaran Pemilu, Election Monitoring, Indonesia, Pemilu 2014, Komisi Pemilihan Umum, Bawaslu, Caleg, Capres" />
	<meta name="rating" content="general" />
	<meta name="distribution" content="global" />
	<meta name="geo.region" content="ID-JKT" />
	<meta name="geo.placename" content="Jakarta" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="author" content="iLab - tech4changes" />
	<meta name="robots" content="index,follow" />
	<meta name="googlebot" content="index,follow" />
	<meta name="revisit-after" content="1 day" />
	<meta name="expires" content="never" />
	
	<!-- BEGIN Tynt Script -->
	<script type="text/javascript">
	if(document.location.protocol=='http:'){
	 var Tynt=Tynt||[];Tynt.push('bIbNwKMZKr477Tacwqm_6r');
	 (function(){var s=document.createElement('script');s.async="async";s.type="text/javascript";s.src='http://tcr.tynt.com/ti.js';var h=document.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);})();
	}
	
	</script>
	<!-- END Tynt Script -->

	
	<?php echo html::script('themes/default/js/_jquery.simplyscroll.js'); ?>
	<?php echo html::stylesheet('themes/default/css/_jquery.simplyscroll.css'); ?>
	
	<script type="text/javascript">
	(function($) {
		$(function() {
			$("#scroller").simplyScroll();
			
		});
	})(jQuery);
	</script>
	
	
	<meta name="google-site-verification" content="arhW5v9Xs7kMZwgvQjqGNluQ1hvVuTwXJ3THeIqJ_Ak" />
	<link href='http://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<?php echo $header_block; ?>
	<?php
	// Action::header_scripts - Additional Inline Scripts from Plugins
	Event::run('ushahidi_action.header_scripts');
	?>
	
	
</head>

<?php
  // Add a class to the body tag according to the page URI

  // we're on the home page
  if (count($uri_segments) == 0)
  {
  	$body_class = "page-main";
  }
  // 1st tier pages
  elseif (count($uri_segments) == 1)
  {
    $body_class = "page-".$uri_segments[0];
  }
  // 2nd tier pages... ie "/reports/submit"
  elseif (count($uri_segments) >= 2)
  {
    $body_class = "page-".$uri_segments[0]."-".$uri_segments[1];
  }
?>

<body id="page" class="page-main">

	

		<!-- header -->
		<div id="header">
			
			<div id="dalamheader">

			<div id="mainmenu" class="clearingfix">
					<ul>
						<li>
						<a class="item1" href="<?php echo url::site(); ?>">
							<?php echo Kohana::lang('ui_main.home'); ?>
						</a>
					</li>

					
					<li>
						<a href="<?php echo url::site()."reports"; ?>">
							Daftar Laporan
						</a>
					</li>
					
					
					<?php if (Kohana::config('settings.allow_alerts')): ?>
						<li>
							<a href="<?php echo url::site()."alerts"; ?>">
								<?php echo Kohana::lang('ui_main.alerts'); ?></a>
						</li>
					<?php endif; ?>
					
						<li>
							<a href="<?php echo url::site()."page/index/1"; ?>">
								Cara Melapor</a>
						</li>
						
						<li>
							<a href="<?php echo url::site()."page/index/2"; ?>">
								Daftar Istilah</a>
						</li>
						
						<li>
							<a href="<?php echo url::site()."page/index/4"; ?>">
								Tentang Kami</a>
						</li>

					<?php if (Kohana::config('settings.site_contact_page')): ?>
					<li>
						<a href="<?php echo url::site()."contact"; ?>">
							<?php echo Kohana::lang('ui_main.contact'); ?>
						</a>
					</li>
					<?php endif; ?>

					<?php
					// Action::nav_main_bottom - Add items to the bottom links
					Event::run('ushahidi_action.nav_main_bottom');
					?>
						
					</ul>				
				</div>

			<!-- logo -->
			<?php if ($banner == NULL): ?>
			<div id="logo">
				<h1><a href="<?php echo url::site();?>"><?php echo $site_name; ?></a></h1>
				<span><?php echo $site_tagline; ?></span>
			</div>
			<?php else: ?>
			<a href="<?php echo url::site();?>"><img style="margin-top:10px; margin-left:-10px;" src="<?php echo $banner; ?>" alt="<?php echo $site_name; ?>" /></a>
			<?php endif; ?>
			<!-- / logo -->

			<!-- submit incident -->
			<?php echo $submit_btn; ?>
			<!-- / submit incident -->

		</div>
		
		</div>
		<!-- / header -->
        <!-- / header item for plugins -->
        <?php
            // Action::header_item - Additional items to be added by plugins
	        Event::run('ushahidi_action.header_item');
        ?>
		
		
		<!-- wrapper -->
	<div class="wrapper floatholder rapidxwpr">
		<!-- main body -->
		<div id="middle">
			<div class="background layoutleft">

				<!-- mainmenu -->
				
				<!-- / mainmenu -->
