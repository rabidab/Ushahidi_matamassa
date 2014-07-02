<!-- main body -->
<div id="main" class="clearingfix">
	<div id="mainmiddle" class="floatbox withright">

	

		
	
		<!-- content column -->
		<div id="content" class="clearingfix">
			<div class="floatbox">

				

				<?php								
				// Map and Timeline Blocks
				echo $div_map;
				?>
		
		
				
				
		<!-- right column Kategori -->
		<div id="menunem" class="clearingfix">
			
			<?php
			// Action::main_sidebar_pre_filters - Add Items to the Entry Page before filters
			Event::run('ushahidi_action.main_sidebar_pre_filters');
			?>

			

			<ul id="category_switch" class="category-filters">
				<?php
				$color_css = 'class="category-icon swatch" style="background-color:#'.$default_map_all.'"';
				$all_cat_image = '';
				if ($default_map_all_icon != NULL)
				{
					$all_cat_image = html::image(array(
						'src'=>$default_map_all_icon
					));
					$color_css = 'class="category-icon"';
				}
				?>
				<li>
					<a class="active" id="cat_0" href="#">
						<span <?php echo $color_css; ?>><?php echo $all_cat_image; ?></span>
						<span class="category-title"><?php echo Kohana::lang('ui_main.all_categories');?></span>
					</a>
				</li>
				<?php
					foreach ($categories as $category => $category_info)
					{
						$category_title = html::escape($category_info[0]);
						$category_color = $category_info[1];
						$category_image = ($category_info[2] != NULL)
						    ? url::convert_uploaded_to_abs($category_info[2])
						    : NULL;
						$category_description = html::escape(Category_Lang_Model::category_description($category));

						$color_css = 'class="category-icon swatch" style="background-color:#'.$category_color.'"';
						if ($category_info[2] != NULL)
						{
							$category_image = html::image(array(
								'src'=>$category_image,
								));
							$color_css = 'class="category-icon"';
						}

						echo '<li>'
						    . '<a href="#" id="cat_'. $category .'" title="'.$category_description.'">'
						    . '<span '.$color_css.'>'.$category_image.'</span>'
						    . '<span class="category-title">'.$category_title.'</span>'
						    . '</a>';

						// Get Children
					
					}
				?>
			</ul>
			<!-- / category filters -->

			<?php if ($layers): ?>
				<!-- Layers (KML/KMZ) -->
				<div class="layers-filters clearingfix">
					<strong><?php echo Kohana::lang('ui_main.layers_filter');?> 
						<span>
							[<a href="javascript:toggleLayer('kml_switch_link', 'kml_switch')" id="kml_switch_link">
								<?php echo Kohana::lang('ui_main.hide'); ?>
							</a>]
						</span>
					</strong>
				</div>
				<ul id="kml_switch" class="category-filters">
				<?php
					foreach ($layers as $layer => $layer_info)
					{
						$layer_name = $layer_info[0];
						$layer_color = $layer_info[1];
						$layer_url = $layer_info[2];
						$layer_file = $layer_info[3];

						$layer_link = ( ! $layer_url)
						    ? url::base().Kohana::config('upload.relative_directory').'/'.$layer_file
						    : $layer_url;
						
						echo '<li>'
						    . '<a href="#" id="layer_'. $layer .'">'
						    . '<span class="swatch" style="background-color:#'.$layer_color.'"></span>'
						    . '<span class="layer-name">'.$layer_name.'</span>'
						    . '</a>'
						    . '</li>';
					}
				?>
				</ul>
				<!-- /Layers -->
			<?php endif; ?>
			
			
	
		</div>
		
		
		
		<!-- / right column  Akhir Kategori-->
				
				
				
				<?php
				echo $div_timeline;
				?>
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
			<?php blocks::render(); ?>
		</div>
	</div>
	<!-- /content blocks -->


<!-- content -->
<br />

<table style="width:960px; background:#FFFFFF none repeat scroll 0 0; border: 1px solid #E5E5E5; border-radius: 5px 5px 5px 5px;">
<tr>
<td style="padding:10px;">

<a class="twitter-timeline" width="458" height="260" style="box-shadow: 0 0 5px 1px #888888;" href="https://twitter.com/search?q=MataMassa"  data-widget-id="398534241257938944">Tweets about "MataMassa"</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	
</td>
<td>

<div class="fb-like-box" style="box-shadow: 0 0 5px 1px #888888;" data-href="https://www.facebook.com/matamassaIND" data-width="458" data-height="260" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="true"></div>

</td>
</tr>
</table>

<br />
<div style="margin-top:5px; margin-bottom:2px; font-family:Roboto; font-size:16px;">
			<table>
			<tr>
			<td style="width:395px;">
			&nbsp; Dikembangkan oleh:
			</td>
			<td >
			Didukung oleh:
			</td>
			</tr>
			</table>
			</div>
			
			<div class="footere" style="text-align:center;">
			
			<table stle="margin-left:5px;">
			<tr>
			<td style="height:245px; width:375px; border-radius: 1px; box-shadow: 0 0 5px 1px #888888;">
			<span style="padding:10px 10px 10px 10px;">
			<a href="http://ajijakarta.org" target="_blank"><img style="margin-left:2px; margin-right:5px;" src="<?php echo url::site();?>themes/default/images/ajijak_l.png" alt="AJI Jakarta" /></a></span>
				
			<br />
			<span style="padding:10px 10px 10px 10px;">
			<a href="http://ilab.or.id" target="_blank"><img src="<?php echo url::site();?>themes/default/images/ilab_l.png" alt="iLab - ICT Laboratory for Social Change" /></a><span>
				
			
			</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;
			</td>
			<td  style="height:250px; width:620px; border-radius: 1px; box-shadow: 0 0 5px 1px #888888;">
			
			<a href="http://sea.hivos.org" target="_blank"><img width="350" style="float:left; padding-left:20px;" src="<?php echo url::site();?>themes/default/images/seatti_p.png" alt="SEATTI" /></a>
			
			<a href="http://change.org/id/" target="_blank"><img width="150" style="float:left; padding-left:20px; padding-top:30px;" src="<?php echo url::site();?>themes/default/img/change.png" alt="Change.org" /></a>
			
			
			
			<a href="http://ti.or.id" target="_blank"><img style="float:left; padding-left:20px;" src="<?php echo url::site();?>themes/default/img/ti.png" alt="Transparency International" /></a>
				 
			<a href="http://jasnita.co.id/" target="_blank"><img style="float:left; padding-left:23px;" src="<?php echo url::site();?>themes/default/img/jasnita.png" alt="JASNITA" /></a>
			
			<a href="#" target="_blank"><img style="float:left; padding-left:15px;" src="<?php echo url::site();?>themes/default/img/wa.png" alt="Wretta Aksa" /></a>
			
			<a href="http://lbhpers.org" target="_blank"><img style="float:left; padding-left:20px;" src="<?php echo url::site();?>themes/default/img/lbh.png" alt="LBH Pers" /></a>
			
			<a href="#" target="_blank"><img style="float:left; padding-left:22px;" src="<?php echo url::site();?>themes/default/img/didakta.png" alt="Didakta" /></a>
			
			<a href="#" target="_blank"><img style="float:left; padding-left:17px;" src="<?php echo url::site();?>themes/default/img/orange.png" alt="Orange" /></a>
			
			<a href="#" target="_blank"><img style="float:left; padding-left:8px;" src="<?php echo url::site();?>themes/default/img/greenradio.png" alt="Green Radio" /></a>
			
			<a href="http://tempo.co/" target="_blank"><img width="120" style="float:left; padding-left:23px; padding-top:15px;" src="<?php echo url::site();?>themes/default/img/tempo.png" alt="TEMPO" /></a>
			
			<a href="http://kontan.co.id/" target="_blank"><img height="40" style="float:left; padding-left:10px;" src="<?php echo url::site();?>themes/default/img/kontan.png" alt="KONTAN" /></a>
			
			<a href="http://jurnalparlemen.com/" target="_blank"><img width="150" style="float:left; padding-left:10px; padding-top:10px;" src="<?php echo url::site();?>themes/default/img/jupe.png" alt="Jurnal Parlemen" /></a>
			
			<a href="http://portalkbr.com/" target="_blank"><img height="40" style="float:left; padding-left:10px;" src="<?php echo url::site();?>themes/default/img/portalkbr.png" alt="Portal KBR" /></a>
			<br />
			
			</td>
			</tr>
			</table>
			<br />
			</div>
			
			