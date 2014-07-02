<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=320; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;"/>
<title><?php echo $site_name; ?></title>

	<link href='http://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'>

	<?php echo Requirements::render(); ?>
	<?php
	// Action::header_scripts - Additional Inline Scripts from Plugins
	Event::run('ushahidi_action.header_scripts');
	?>
<?php

if ($show_map === TRUE)
{
	echo "\n<script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script>\n";
}
?>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
$(function() {
	$("h2.expand").toggler({speed: "fast"});
});
//--><!]]>
</script>
<script type="text/javascript">
<?php echo $js; ?>
</script>
</head>

<body <?php
if ($show_map === TRUE) {
	echo " onload=\"initialize()\"";
}
?>>
	<div id="container">
		<div id="header">
			<h1><a href="<?php echo url::site()."mobile"; ?>">MataMassa</a><?php echo $breadcrumbs; ?></h1>
			<span><?php echo $site_tagline; ?></span>
			
		</div>
	
		
		<div id="page">
