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
			<div class="footer-credits" style="margin-top:30px;">
					<a href="https://www.facebook.com/matamassaIND">
						<img src="<?php echo url::file_loc('img'); ?>themes/default/images/fb.png" style="width:30px" class="footer-logo" target="_blank"/></a>
					<a href="http://www.twitter.com/MataMassa">
						<img src="<?php echo url::file_loc('img'); ?>themes/default/images/tw.png" style="width:30px" class="footer-logo" /></a>
					<a href="#">
						<img src="<?php echo url::file_loc('img'); ?>themes/default/images/vm.png" style="width:30px" class="footer-logo" /></a>
					<a href="#">
						<img src="<?php echo url::file_loc('img'); ?>themes/default/images/fl.png" style="width:30px" class="footer-logo" /></a>
					<a href="http://www.matamassa.org/feed">
						<img src="<?php echo url::file_loc('img'); ?>themes/default/images/feed.png" style="width:30px" class="footer-logo" /></a>
								
			</div>
			<!-- / footer credits -->

			<!-- footer menu -->
			<div class="footermenu">
				<ul class="clearingfix">
					<li>
						<a class="item1" href="<?php echo url::site(); ?>">
							<?php echo Kohana::lang('ui_main.home'); ?>
						</a>
					</li>

					<?php if (Kohana::config('settings.allow_reports')): ?>
					<li>
						<a href="<?php echo url::site()."reports"; ?>">
							Daftar Laporan
						</a>
					</li>
					<?php endif; ?>
					
					<?php if (Kohana::config('settings.allow_alerts')): ?>
						<li>
							<a href="<?php echo url::site()."alerts"; ?>">
								Berlangganan</a>
						</li>
					<?php endif; ?>

						<li><a href="<?php echo url::site();?>page/index/1">Cara Melapor</a></li>
						<li><a href="<?php echo url::site();?>page/index/2">Daftar Istilah</a></li>
						<li><a href="<?php echo url::site();?>page/index/3">Tentang Kami</a></li>
						<li><a href="<?php echo url::site();?>page/index/4">Syarat & Ketentuan</a></li>
						<li><a href="http://www.matamassa.org/pileg2014" target="_blank">Pileg 2014</a></li>
							
				</ul>

	      		<div style="background:url('http://www.matamassa.org/themes/default/images/mata.png') 0% no-repeat; filter:alpha(opacity=20); color:#000; font-family:Open Sans; margin-top:-40px;">
	      		<div style="margin-left:110px;">
	      		<strong>2014 | MataMassa</strong><br>
Powered by <a href="#" target="_blank">Ushahidi</a> | Licensed by <a href="http://creativecommons.org/licenses/by/3.0/" target="_blank">Creative Commons 3.0</a>
				</div>
	      		</div>
		      	
		      	
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
