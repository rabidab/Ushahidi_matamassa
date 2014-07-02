<!-- main body -->
<div id="main"">
	<div id="mainmiddle" class="floatbox withright" style="margin-top:50px;">

	<?php if ($site_message != ''): ?>
		<div class="green-box">
			<h3><?php echo $site_message; ?></h3>
		</div>
	<?php endif; ?>

		<!-- right column -->
		<div id="right" class="clearingfix">
			
			<img style="margin-top:-19px; padding:5px; text-align:center;" src="http://www.matamassa.org/themes/default/images/logo.png" width="260px">
			
			
			<div style="background:#0099cc; height:290px; width:285px; border-radius:5px; font-size:14px; color:#FFF; font-family:Open Sans; letter-spacing:0.2em; padding-top:5px;">
			<center />
			LAPORKAN PELANGGARAN MELALUI
			</div>
			
			<div style="background:#F1F1F1; border-radius:0px 0px 5px 5px; margin-top:-245px; width:265px; height:245px; padding:10px; font-family:Open Sans; line-height:3.3em;">
			
			<div style="margin-left:20px; letter-spacing:0.2em; background:url('http://www.matamassa.org/themes/default/images/web.png') 92% no-repeat">
			<a href="http://matamassa.org/reports/submit" target="_blank">
			Website</a>
			</div>
			
			<div style="margin-left:20px; letter-spacing:0.2em; background:url('http://www.matamassa.org/themes/default/images/mail1.png') 92% no-repeat">
			<a href="mailto:lapor@matamassa.org?Subject=Lapor%20">
			Mail</a>
			</div>
			
			<div style="margin-left:20px; letter-spacing:0.2em; background:url('http://www.matamassa.org/themes/default/images/sms1.png') 90% no-repeat">
			<a href="http://www.matamassa.org/page/index/5">
			Sms
			</div>
			
			<div style="margin-left:20px; letter-spacing:0.2em; background:url('http://www.matamassa.org/themes/default/images/android1.png') 92% no-repeat">
			<a href="https://play.google.com/store/apps/details?id=com.matamassa.android.app" target="_blank">
			Android</a>
			</div>
			
			<div style="margin-left:20px; letter-spacing:0.2em; background:url('http://www.matamassa.org/themes/default/images/ios1.png') 92% no-repeat">
			<a href="https://itunes.apple.com/us/app/matamassa/id764787172?ls=1&mt=8" target="_blank">
			IOS</a>
			</div>
			
			<div style="margin-left:20px; letter-spacing:0.2em; background:url('http://www.matamassa.org/themes/default/images/bb1.png') 92% no-repeat">
			<a href="http://appworld.blackberry.com/webstore/content/50571890/?lang=en&countrycode=ID" target="_blank">
			Blackberry</a>
			</div>
			
			
			
			
			</div>
			
		</div>
		<!-- / right column -->
	
		<!-- content column -->
		<div id="content">
		
			<div style="background:#6bcbca; height:330px; width:631px; border-radius:6px; margin-bottom:-10px; font-size:18px; color:#FFF; padding-top:5px; font-family:helvetica;"> <center />
				<p style="letter-spacing:0.4em; font-family:Open Sans; font-weight:600;">PELANGGARAN PEMILU
				<br />
				DI INDONESIA</p>
				</div>
		
			<div style="background:#b3d1ff; border-radius:0px 0px 5px 5px; margin-top:-275px; padding:5px; width:101%; height:300px;">

				

				<?php								
				// Map and Timeline Blocks
				echo $div_map;
				?>
			</div>
		</div>
		<!-- / content column -->

	</div>
</div>
<!-- / main body -->

<!-- content -->
<div class="content-container">



<?php echo $statistik_laporan; ?>



	<!-- content blocks -->
	<div class="content-blocks clearingfix">
		<ul class="content-column1">
			<?php blocks::render(); ?>
		</ul>
	</div>
	<!-- /content blocks -->

<br />
<table>
<tr>
<td>

<a class="twitter-timeline" width="458" height="260" style="box-shadow: 0 0 5px 1px #888888;" href="https://twitter.com/search?q=MataMassa"  data-widget-id="398534241257938944">Tweets about "MataMassa"</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	
</td>
<td>

<div class="fb-like-box" style="background:#F1F1F1; margin-left:10px;box-shadow: 0 0 5px 1px #888888;" data-href="https://www.facebook.com/matamassaIND" data-width="458" data-height="260" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="true"></div>

</td>
</tr>
</table>


<!-- content -->
