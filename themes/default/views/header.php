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
	
	
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<?php echo $header_block; ?>
	<?php
	// Action::header_scripts - Additional Inline Scripts from Plugins
	Event::run('ushahidi_action.header_scripts');
	?>
	
	<meta name="google-site-verification" content="arhW5v9Xs7kMZwgvQjqGNluQ1hvVuTwXJ3THeIqJ_Ak" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	
	
	
	
	
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

<body id="page" class="<?php echo $body_class; ?>">


<div style="height:50px; width:100%; background:#333; position:fixed; z-index: 99999;">	

	<!-- mainmenu -->
				<div id="mainmenu" style="width:980px; margin:0 auto;" class="clearingfix">
					<ul>
						<li><a href="<?php echo url::site();?>" class="active">Home</a></li>
						<li><a href="<?php echo url::site();?>reports">Daftar Laporan</a></li>
						<li><a href="<?php echo url::site();?>alerts">Berlangganan</a></li>
						<li><a href="<?php echo url::site();?>page/index/1">Cara Melapor</a></li>
						<li><a href="<?php echo url::site();?>page/index/2">Daftar Istilah</a></li>
						<li><a href="<?php echo url::site();?>page/index/3">Tentang Kami</a></li>
						<li><a href="http://www.matamassa.org/pileg2014" target="_blank">Pileg 2014</a></li>
					
						
					</ul>

			
			<div id="searchbox">

				<!-- languages -->
				<div class="language-box">
				<div style="height:21px; width:105px; line-height:0.1em; border: 1px solid #CCC; border-radius: 5px; background:#0099cc; letter-spacing:0.1em;">
					<center />
						<a href="http://matamassa.org/reports/submit">
						LAPORKAN!</a>
				</div>	
				</div>
				<!-- / languages -->
				
				<!-- searchform -->
				<?php echo $search; ?>
				<!-- / searchform -->

			</div>
			
			
					

				</div>
				<!-- / mainmenu -->
	
	<!-- searchbox -->
			
			<!-- / searchbox -->
</div>

	<!-- wrapper -->
	<div class="wrapper floatholder rapidxwpr">

		<!-- header -->
		<div id="header">

			

			<!-- logo -->
			

		<!-- main body -->
		<div id="middle">
			<div class="background layoutleft">

				
