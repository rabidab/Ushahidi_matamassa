			
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
				<a href="http://ajijakarta.org" target="_blank"><img style="margin-top:12px;" src="<?php echo url::site();?>themes/default/images/ajijak.png" alt="AJI Jakarta" /></a>
				&nbsp; 
				<a href="http://ilab.or.id" target="_blank"><img style="margin-top:1px;" src="<?php echo url::site();?>themes/default/images/ilab.png" alt="AJI Jakarta" /></a>
				--->
				
			</div>
			<!-- / footer credits -->

			<!-- footer menu -->
			<div class="footermenu" style="margin-top:-20px;">
				<ul class="clearingfix">
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
							<a href="<?php echo url::site()."page/index/3"; ?>">
								Syarat dan Ketentuan</a>
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

				<?php if ($site_copyright_statement != ''): ?>
	      		<p><?php echo $site_copyright_statement; ?></p>
		      	<?php endif; ?>
		      	<p>
		      	<?php echo date('Y'); ?> | MataMassa<br />
Powered by: <a href="#" target="_blank">Ushahidi</a> | Licensed by: <a href="http://creativecommons.org/licenses/by/3.0/" target="_blank">Creative Commons 3.0</a>
			</div>
			<!-- / footer menu -->


		</div>
		<!-- / footer content -->

	</div>
	<!-- / footer -->
		<?php
		echo $footer_block;
		// Action::main_footer - Add items before the </body> tag
		Event::run('ushahidi_action.main_footer');
		?>

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
