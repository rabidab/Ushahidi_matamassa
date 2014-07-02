<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<meta name="distribution" content="global" />
<meta name="geo.region" content="ID-JKT" />
<meta name="geo.placename" content="Jakarta" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="author" content="Nanang Syaifudin" />
<meta name="robots" content="index,follow" />
<meta name="googlebot" content="index,follow" />
<meta name="revisit-after" content="1 week" />
<meta name="expires" content="never" />

<title>
<?php bloginfo('name'); ?>
<?php wp_title(); ?>
</title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />

<link rel="Shortcut Icon" href="<?php echo get_settings('home'); ?>/wp-content/themes/mediacenter/images/favicon.ico" type="image/x-icon" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_get_archives('type=monthly&format=link'); ?>
<?php //comments_popup_script(); // off by default ?>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

</head>
<body>

<div id="wrap">
 
 <!-- Top Menu -->
 <div id="top-menu">
  <ul>
   <li style="border:none;"><a href="<?php bloginfo("url"); ?>">Home</a></li>
   <li class="border:none;"><a href="<?php bloginfo("url"); ?>/?page_id=145">Kontak Penting</a></li>
   <li class="border:none;"><a href="/?page_id=2">Download</a></li>
   <li class="border:none;"><a href="/?page_id=9">Tentang Media Center</a></li>
   <li class="border:none;"><a href="/peraturan">Peraturan</a></li>
   
   
  </ul>
  <div class="subscribe">
   <a href="<?php bloginfo("rss2_url"); ?>">Subscribe</a>
  </div>
  <div class="c"></div>
 </div>
 <!-- Header -->
 <div id="header">
  <h1><a href="<?php bloginfo("url"); ?>">Media Center</a></h1>
  <h2></h2>
 </div>
 <!-- Main Menu -->
 <div id="menu">
  <ul>
    <?php wp_list_categories("title_li=&depth=1&include=3,60,61,55,128,&hide_empty=0"); ?>
<li><a href="http://disaster.mediacenter.or.id">Laporan Peristiwa</a></li>
<div id="search"><?php get_search_form(); ?></div>
   </ul>
 </div>
