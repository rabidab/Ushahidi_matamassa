	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<title>MataMassa</title>
	
	<meta name="distribution" content="global" />
	<meta name="geo.region" content="ID-JKT" />
	<meta name="geo.placename" content="Jakarta" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="author" content="iLab - tech4changes" />
	<meta name="robots" content="index,follow" />
	<meta name="googlebot" content="index,follow" />
	<meta name="revisit-after" content="1 week" />
	<meta name="expires" content="never" />
	
	
	<link href='http://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	
	
	<link rel="stylesheet" type="text/css" href="http://www.matamassa.org/media/uploads/0_base.css" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	
<!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="http://www.matamassa.org/themes/default/css/iehacks.css" />
<![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" href="http://www.matamassa.org/themes/default/css/ie7hacks.css" />
<![endif]-->
<!--[if IE 6]><link rel="stylesheet" type="text/css" href="http://www.matamassa.org/themes/default/css/ie6hacks.css" />
<![endif]-->
<script type="text/javascript" src="http://www.matamassa.org/media/uploads/0_base.js?m=1384336535&"></script>

	
</head>


<body id="page" class="page-main">

	

		<!-- header -->
		<div id="header">
			
			<div id="dalamheader">

			<div id="mainmenu" class="clearingfix">
					<ul>
						<li>
						<a class="item1" href="http://www.matamassa.org/">
							Beranda						</a>
					</li>

										<li>
						<a href="http://www.matamassa.org/reports">
							Daftar Laporan						</a>
					</li>
										
											<li>
							<a href="http://www.matamassa.org/alerts">
								Berlangganan</a>
						</li>
										
						<li>
							<a href="http://www.matamassa.org/page/index/1">
								Cara Melapor</a>
						</li>
						
						<li>
							<a href="http://www.matamassa.org/page/index/2">
								Daftar Istilah</a>
						</li>
						
						<li>
							<a href="http://www.matamassa.org/page/index/4">
								Tentang Kami</a>
						</li>

					
											
					</ul>				
				</div>

			<!-- logo -->
						<a href="http://www.matamassa.org/"><img style="margin-top:10px; margin-left:-10px;" src="http://www.matamassa.org/media/uploads/banner_1385164216.png" alt="MataMassa" /></a>
						<!-- / logo -->

			<!-- submit incident -->
			<div class="submit-incident clearingfix"><a href="http://www.matamassa.org/reports/submit">Laporkan!</a>
			</div>			
			
			<!-- / submit incident -->

		</div>
		
		</div>
		<!-- / header -->
        <!-- / header item for plugins -->
        		
		
		<!-- wrapper -->
	<div class="wrapper floatholder rapidxwpr" style="margin-top:-40px;">
		<!-- main body -->
		<div id="middle">
			<div class="background layoutleft">

				<!-- mainmenu -->
				
				<!-- / mainmenu -->
<!-- main body -->
<div id="main" class="clearingfix">
	<div id="mainmiddle" class="floatbox withright">
		
	
		<!-- content column -->
		<div id="content" class="clearingfix">
			<div class="floatbox">

			</div>
		</div>
		<!-- / content column -->

	</div>
</div>
<!-- / main body -->

<!-- content -->


	<!-- content blocks -->
	<div class="content-blocks clearingfix">
		<div class="content-column">
			<div class="content-container">

<table style="margin-top:15px;">
<tr>

<!-- Table 1 -->
<td valign="top">

<div style="width:600px;">


<div id="block-reports">

<div style="font-size:24px; font-family:Roboto; margin-bottom:10px; margin-left:5px;">
<?php echo single_cat_title(); ?>
</div>

<table class="table-list">
		<thead>
			<tr>
			<?php if (have_posts()) : while (have_posts()) :  the_post(); ?>
			
			
			</tr>
		</thead>
	
	
		<tbody>
			<tr>
					<td style="width:180px; height:150px; padding:10px;">
					<br />
					
					<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('p1'); ?> </a>
					
					
				</td>
					
				<td>
				<div style="margin-top:10px; font-size:16px; font-family:Raleway;">
				<a href="<?php the_permalink(); ?>"><?php echo substr(the_title($before = '', $after = '', FALSE), 0, 150); ?></a>	
				<br />
				<span style="font-size:11px; color:#888888;  margin-bottom:20px;"><?php the_time("j F Y H:i"); ?></span>
				</div>
				
				<br />
				<?php echo excerpt(50);?>
					
				</td>
					
			</tr>
					
		</tbody>
				
				<?php endwhile; ?>	
				<?php endif; wp_reset_query(); ?>
			
<?php posts_nav_link(); ?>
				
</table>


<div style="clear:both;"></div>
</div>

</td>


<!-- Table 2 -->
<td valign="top" style="margin-top:10px;"> 

<div class="content-block" style="width:290px;">
<div style="font-size:24px; font-family:Roboto; padding-bottom:5px;">Cara Melapor</div>


	<table>
	<tbody><tr>
	<td style="width:35px">
	
	<img src="http://www.matamassa.org/themes/default/images/sms.png" alt="SMS" height="35" width="34"> 
	</td>
	<td>
		<span style="font-size:16px;">SMS</span> <br>
		<span style="font-size:12px;">Kirim SMS ke <strong>0813 7020 2014</strong> dengan format : Lapor[spasi]Nama Pelapor#Tanggal Peristiwa#Lokasi Peristiwa#Isi Laporan.</span>
		<br>
	</td>
	</tr>
	</tbody></table>

	<table style="margin-top:5px;">
	<tbody><tr>
	<td style="width:35px" valign="top">
	<img src="http://www.matamassa.org/themes/default/images/android.png" alt="Android" height="35" width="34"> 
	</td>
	<td>
		<span style="font-size:16px;">ANDROID</span><br> 
		<span style="font-size:12px;">Unduh MataMassa di <a href="https://play.google.com/store/apps/details?id=com.matamassa.android.app" target="_blank">PlayStore</a></span>
		<br>
	</td>
	</tr>
	</tbody></table>
	
	<table style="margin-top:5px;">
	<tbody><tr>
	<td style="width:35px" valign="top">
	<img src="http://www.matamassa.org/themes/default/images/ios.png" alt="IOS" height="35" width="34"> 
	</td>
	<td>
		<span style="font-size:16px;">IOS</span> <br>
		<span style="font-size:12px;">Unduh MataMassa di <a href="https://itunes.apple.com/us/app/matamassa/id764787172?ls=1&amp;mt=8" target="_blank">AppStore</a></span>
		<br>
	</td>
	</tr>
	</tbody></table>
	
	<table style="margin-top:5px;">
	<tbody><tr>
	<td style="width:35px" valign="top">
	<img src="http://www.matamassa.org/themes/default/images/bb.png" alt="IOS" height="35" width="34"> 
	</td>
	<td>
		<span style="font-size:16px;">Blackberry</span> <br>
		<span style="font-size:12px;">Unduh MataMassa di <a href="http://appworld.blackberry.com/webstore/content/50571890/?lang=en&amp;countrycode=ID" target="_blank">AppWorld</a></span>
		<br>
	</td>
	</tr>
	</tbody></table>

	<table style="margin-top:5px;">
	<tbody><tr>
	<td style="width:35px" valign="top">
	<img src="http://www.matamassa.org/themes/default/images/mail.png" alt="SUREL" height="35" width="34"> 
	</td>
	<td>
		<span style="font-size:16px;">SUREL</span> <br>
		<span style="font-size:12px;">Kirim surel ke <a href="mailto:lapor@matamassa.org">lapor@matamassa.org</a></span>
		<br>
	</td>
	</tr>
	</tbody></table>
	
	<table style="margin-top:5px;">
	<tbody><tr>
	<td style="width:35px" valign="top">
	<img src="http://www.matamassa.org/themes/default/images/web.png" alt="WEBSITE" height="35" width="34"> 
	</td>
	<td>
		<span style="font-size:16px;">SITUS</span> <br>
		<span style="font-size:12px;">Dengan mengirim laporan melalui <a href="http://matamassa.org/reports/submit">website</a></span>
	</td>
	</tr>
	</table>
	


</td>
</tr>
</table>



<div class="clear:both;"></div>

</div>
		</div>
	</div>
	<!-- /content blocks -->


<br />
<table style="width:960px; background:#FFFFFF none repeat scroll 0 0; border: 1px solid #E5E5E5; border-radius:1px; box-shadow: 0 0 5px 1px #888888;">
<tr>
<td style="padding:10px;">

<a class="twitter-timeline" width="458" height="260" style="box-shadow: 0 0 5px 1px #888888;" href="https://twitter.com/search?q=MataMassa"  data-widget-id="398534241257938944">Tweets about "MataMassa"</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	
</td>
<td>

<div class="fb-like-box" style="border-radius:5px 5px 5px 5px;" data-href="https://www.facebook.com/matamassaIND" data-width="458" data-height="260" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="true"></div>


</td>
</tr>
</table>

<br />
<div style="margin-top:5px; margin-bottom:2px; font-family:Roboto; font-size:16px;">
			<table>
			<tbody><tr>
			<td style="width:395px;">
			&nbsp; Dikembangkan oleh:
			</td>
			<td>
			Didukung oleh:
			</td>
			</tr>
			</tbody></table>
			</div>
			
			<div class="footere" style="text-align:center;">
			
			<table stle="margin-left:5px;">
			<tbody><tr>
			<td style="height:245px; width:375px; border-radius: 1px; box-shadow: 0 0 5px 1px #888888;">
			<span style="padding:10px 10px 10px 10px;">
			<a href="http://ajijakarta.org" target="_blank"><img style="margin-left:2px; margin-right:5px;" src="http://www.matamassa.org/themes/default/images/ajijak_l.png" alt="AJI Jakarta"></a></span>
				
			<br>
			<span style="padding:10px 10px 10px 10px;">
			<a href="http://ilab.or.id" target="_blank"><img src="http://www.matamassa.org/themes/default/images/ilab_l.png" alt="iLab - ICT Laboratory for Social Change"></a><span>
				
			
			</span></span></td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;
			</td>
			<td style="height:270px; width:620px; border-radius: 1px; box-shadow: 0 0 5px 1px #888888;" valign="top">
			
			
			<img style="float:left; margin-top:10px; margin-left:10px; box-shadow: 0 0 5px 1px #888888;" src="http://www.matamassa.org/themes/default/sps/seatti.png" alt="iLab - ICT Laboratory for Social Change" width="400">
			
			
			
			<br><br><br><br><br><br><br>
			<img style="float:left; margin-top:px;  margin-left:10px;box-shadow: 0 0 5px 1px #888888;" src="http://www.matamassa.org/themes/default/sps/ti.png" alt="iLab - ICT Laboratory for Social Change" width="100">
			<img style="float:left; margin-top:px;  margin-left:10px;box-shadow: 0 0 5px 1px #888888;" src="http://www.matamassa.org/themes/default/sps/perludem.png" alt="iLab - ICT Laboratory for Social Change" width="100">
			<img style="float:left; margin-top:px;  margin-left:10px;box-shadow: 0 0 5px 1px #888888;" src="http://www.matamassa.org/themes/default/sps/rumahpemilu.png" alt="iLab - ICT Laboratory for Social Change" width="100">
			<img style="float:left; margin-top:px;  margin-left:10px;box-shadow: 0 0 5px 1px #888888;" src="http://www.matamassa.org/themes/default/sps/lbh.png" alt="iLab - ICT Laboratory for Social Change" width="100">
			<img style="float:left; margin-top:px;  margin-left:10px;box-shadow: 0 0 5px 1px #888888;" src="http://www.matamassa.org/themes/default/sps/jasnita.png" alt="iLab - ICT Laboratory for Social Change" width="100">
			
			
			<img style="float:left; margin-top:10px;  margin-left:10px;box-shadow: 0 0 5px 1px #888888;" src="http://www.matamassa.org/themes/default/sps/tempo.png" alt="iLab - ICT Laboratory for Social Change" width="100">
			<img style="float:left; margin-top:10px;  margin-left:10px;box-shadow: 0 0 5px 1px #888888;" src="http://www.matamassa.org/themes/default/sps/kbr.png" alt="iLab - ICT Laboratory for Social Change" width="100">
			<img style="float:left; margin-top:10px;  margin-left:10px;box-shadow: 0 0 5px 1px #888888;" src="http://www.matamassa.org/themes/default/sps/kontan.png" alt="iLab - ICT Laboratory for Social Change" width="100">
			<img style="float:left; margin-top:10px;  margin-left:10px;box-shadow: 0 0 5px 1px #888888;" src="http://www.matamassa.org/themes/default/sps/jp.png" alt="iLab - ICT Laboratory for Social Change" width="100">
			<img style="float:left; margin-top:10px;  margin-left:10px;box-shadow: 0 0 5px 1px #888888;" src="http://www.matamassa.org/themes/default/sps/green.png" alt="iLab - ICT Laboratory for Social Change" width="100">
			
			
			<img style="float:left; margin-top:10px;  margin-left:10px;box-shadow: 0 0 5px 1px #888888;" src="http://www.matamassa.org/themes/default/sps/change.png" alt="iLab - ICT Laboratory for Social Change" width="100">
			<img style="float:left; margin-top:10px;  margin-left:10px;box-shadow: 0 0 5px 1px #888888;" src="http://www.matamassa.org/themes/default/sps/pvi.png" alt="iLab - ICT Laboratory for Social Change" width="100">
			<img style="float:left; margin-top:10px;  margin-left:10px;box-shadow: 0 0 5px 1px #888888;" src="http://www.matamassa.org/themes/default/sps/rpk.png" alt="iLab - ICT Laboratory for Social Change" width="100">
			<img style="float:left; margin-top:10px;  margin-left:10px;box-shadow: 0 0 5px 1px #888888;" src="http://www.matamassa.org/themes/default/sps/ultimagz.png" alt="iLab - ICT Laboratory for Social Change" width="100">
			<img style="float:left; margin-top:10px;  margin-left:10px;box-shadow: 0 0 5px 1px #888888;" src="http://www.matamassa.org/themes/default/sps/wa_orange.png" alt="iLab - ICT Laboratory for Social Change" width="100">
			
			<br>
			
			</td>
			</tr>
			</tbody></table>
			
			<br>
			</div>

			
						
			</div>
			
		</div>
		<!-- / main body -->
&nbsp;
	</div>
	<!-- / wrapper -->




	<!-- footer -->
	<div id="footer" class="clearingfix">

		<div id="underfooter"></div>

		<!-- footer content -->
		<div class="wrapper floatholder rapidxwpr">

			<!-- footer credits -->
			<div class="footer-credits" style="margin-top:-10px;">
			
			<!--- no bro
			Developed by: <br />
				<a href="http://ajijakarta.org" target="_blank"><img style="margin-top:12px;" src="http://www.matamassa.org/themes/default/images/ajijak.png" alt="AJI Jakarta" /></a>
				&nbsp; 
				<a href="http://ilab.or.id" target="_blank"><img style="margin-top:1px;" src="http://www.matamassa.org/themes/default/images/ilab.png" alt="AJI Jakarta" /></a>
				--->
				
			</div>
			<!-- / footer credits -->

			<!-- footer menu -->
			<div class="footermenu" style="margin-top:-20px;">
				<ul class="clearingfix">
					<li>
						<a class="item1" href="http://www.matamassa.org/">
							Beranda						</a>
					</li>

										<li>
						<a href="http://www.matamassa.org/reports">
							Daftar Laporan						</a>
					</li>
										
											<li>
							<a href="http://www.matamassa.org/alerts">
								Berlangganan</a>
						</li>
										
					<li>
							<a href="http://www.matamassa.org/page/index/1">
								Cara Melapor</a>
						</li>
						
						<li>
							<a href="http://www.matamassa.org/page/index/2">
								Daftar Istilah</a>
						</li>
						
						
						<li>
							<a href="http://www.matamassa.org/page/index/3">
								Syarat dan Ketentuan</a>
						</li>
						
						<li>
							<a href="http://www.matamassa.org/page/index/4">
								Tentang Kami</a>
						</li>


					
									</ul>

						      	<p><br/>
		      	2013 | MataMassa<br />
Powered by: <a href="#" target="_blank">Ushahidi</a> | Licensed by: <a href="http://creativecommons.org/licenses/by/3.0/" target="_blank">Creative Commons 3.0</a>
			</div>
			<!-- / footer menu -->


		</div>
		<!-- / footer content -->

	</div>
	<!-- / footer -->

	<script type="text/javascript">

			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-44359829-2']);
			_gaq.push(['_trackPageview']);

			(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();

			</script>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=296566307123307";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
				
	
</body>
</html>
