<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>

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
	<meta name="google-site-verification" content="arhW5v9Xs7kMZwgvQjqGNluQ1hvVuTwXJ3THeIqJ_Ak" />
	
	<!-- BEGIN Tynt Script -->
	<script type="text/javascript">
	if(document.location.protocol=='http:'){
	 var Tynt=Tynt||[];Tynt.push('bIbNwKMZKr477Tacwqm_6r');
	 (function(){var s=document.createElement('script');s.async="async";s.type="text/javascript";s.src='http://tcr.tynt.com/ti.js';var h=document.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);})();
	}
	</script>
	<!-- END Tynt Script -->


<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
 <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style2.css">
</head>

<body <?php body_class(); ?>>
<div style="height:52px; margin-top:-50px; width:100%; background:#333; position:fixed; z-index: 99999;">
	<div class="menu" style="width:940px; margin:0 auto; padding:20px; color:#CCCCCC; font-size:12px;" class="clearingfix">
	
	<a href="http://www.matamassa.org">Home</a> &nbsp; &nbsp; &nbsp;
    <a href="http://www.matamassa.org/reports">Daftar Laporan</a> &nbsp; &nbsp; &nbsp;
    <a href="http://www.matamassa.org/alerts">Berlangganan</a> &nbsp; &nbsp; &nbsp;
    <a href="http://www.matamassa.org/page/index/1">Cara Melapor</a> &nbsp; &nbsp; &nbsp;
    <a href="http://www.matamassa.org/page/index/2">Daftar Istilah</a> &nbsp; &nbsp; &nbsp;
    <a href="http://www.matamassa.org/page/index/3">Tentang Kami</a> &nbsp; &nbsp; &nbsp;
    <a href="http://www.matamassa.org/pileg2014">Pileg 2014</a> &nbsp; &nbsp; &nbsp; &nbsp; 
    
    <a href="http://www.matamassa.org/reports/submit/">
	<img style="position:relative; float:right; margin-top:-5px;" src="<?php bloginfo('template_url'); ?>/lapor.png"></a>
	
	<!--
	<a  style="height:21px; width:120px; line-height:0.1em; border: 1px solid #CCC; border-radius: 5px; background:#0099cc; letter-spacing:0.1em; padding:3px;" href="http://matamassa.org/reports/submit">
						LAPORKAN!</a>
		ih --> 
		
	
	
	</div>

</div>

<div id="page" class="hfeed site">
	

	<div id="main" class="wrapper">