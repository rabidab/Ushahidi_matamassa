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
<div style="width: 500px; float: right; margin: -260px -30px 10px 0;">
<?php echo $test_ing; ?>
</div>
<!-- foto kejadian 14 Feb 2014 .k. -->

<style type="text/css">

div.content-block img.tbhan{
    width: 99px;
    padding: 5px;
    display: initial;
}

</style>

<div class="content-container" style="height: 200px;">
    <div class="content-block" style="height: 150px; margin-top: 20px;">
        <a href="http://www.matamassa.org/pileg2014/reports"><div style="font-size:24px; font-family:Roboto;">Galeri Aduan</div></a> 
        <div id="placeholder"></div>
        
        <script type="application/x-javascript">
        var korupediaAPI = "http://www.matamassa.org/pileg2014/api?task=incidents&by=maxid&id="+ Math.floor((Math.random()*1000)+1) +"&resp=jsonp";
        // tambahkan ?callback=? di akhir uri sehingga dikenali sebagai jsonp (masalah cross browser Cors)
        jQuery.getJSON(korupediaAPI + "&callback=?", function(data) { 
            var isi=data.payload;
            var output="<ul>";
           
            //for (var i in isi.incidents){
              for (var i=0; i < 8; i++){  
                //output+=  "<li>"+ isi.incidents[i].incident.incidenttitle + "&nbsp "; 
                
                //jika isi media kosong maka abaikan
                if(isi.incidents[i].media[0] != undefined){
                    
                    //hitung jumlah media yang ada
                    //jika berisi lebih dari satu tampilkan semuanya
                    var thumbPjg= isi.incidents[i].media.length;
                    //output+=  + isi.incidents[i].media.length + "&nbsp";
                    //for (var j=0; j < thumbPjg; j++) {
                        output+= "<img class=\"tbhan\" src=" + isi.incidents[i].media[0].link_url + " width=\"100px\" height=\"100px\" /> </li>";
                    //}
                   
                }else{
                    //output+= isi.incidents[i].media.length + "</li>";
                    output+= "<img class=\"tbhan\" src=\"http://www.matamassa.org/pileg2014/media/uploads/blank.jpg\" width=\"100px\" height=\"100px\" />"
                }
                
            }   
            
            output+="</ul>";
            document.getElementById("placeholder").innerHTML=output;
            
        
    });
 </script>
        
    </div>
    
</div>

<!-- end foto Kejadian -->

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
			<td valign="top" style="height:270px; width:620px; border-radius: 1px; box-shadow: 0 0 5px 1px #888888;">
			
			
			<img style="float:left; margin-top:10px; margin-left:10px;" src="<?php echo url::site();?>themes/default/sps/seatti.png" width="400" alt="iLab - ICT Laboratory for Social Change" />
			
			<img style="float:left; margin-top:10px; margin-left:30px;" src="<?php echo url::site();?>themes/default/sps/bawaslu.png" height="90" alt="iLab - ICT Laboratory for Social Change" />
			
			
			<br /><br /><br /><br /><br /><br /><br />
			<img style="float:left; margin-top:px;  margin-left:10px;box-shadow: 0 0 5px 1px #888888;" src="<?php echo url::site();?>themes/default/sps/ti.png" width="100" alt="iLab - ICT Laboratory for Social Change" />
			<img style="float:left; margin-top:px;  margin-left:10px;box-shadow: 0 0 5px 1px #888888;" src="<?php echo url::site();?>themes/default/sps/perludem.png" width="100" alt="iLab - ICT Laboratory for Social Change" />
			<img style="float:left; margin-top:px;  margin-left:10px;box-shadow: 0 0 5px 1px #888888;" src="<?php echo url::site();?>themes/default/sps/rumahpemilu.png" width="100" alt="iLab - ICT Laboratory for Social Change" />
			<img style="float:left; margin-top:px;  margin-left:10px;box-shadow: 0 0 5px 1px #888888;" src="<?php echo url::site();?>themes/default/sps/lbh.png" width="100" alt="iLab - ICT Laboratory for Social Change" />
			<img style="float:left; margin-top:px;  margin-left:10px;box-shadow: 0 0 5px 1px #888888;" src="<?php echo url::site();?>themes/default/sps/jasnita.png" width="100" alt="iLab - ICT Laboratory for Social Change" />
			
			
			<img style="float:left; margin-top:10px;  margin-left:10px;box-shadow: 0 0 5px 1px #888888;" src="<?php echo url::site();?>themes/default/sps/tempo.png" width="100" alt="iLab - ICT Laboratory for Social Change" />
			<img style="float:left; margin-top:10px;  margin-left:10px;box-shadow: 0 0 5px 1px #888888;" src="<?php echo url::site();?>themes/default/sps/kbr.png" width="100" alt="iLab - ICT Laboratory for Social Change" />
			<img style="float:left; margin-top:10px;  margin-left:10px;box-shadow: 0 0 5px 1px #888888;" src="<?php echo url::site();?>themes/default/sps/kontan.png" width="100" alt="iLab - ICT Laboratory for Social Change" />
			<img style="float:left; margin-top:10px;  margin-left:10px;box-shadow: 0 0 5px 1px #888888;" src="<?php echo url::site();?>themes/default/sps/jp.png" width="100" alt="iLab - ICT Laboratory for Social Change" />
			<img style="float:left; margin-top:10px;  margin-left:10px;box-shadow: 0 0 5px 1px #888888;" src="<?php echo url::site();?>themes/default/sps/green.png" width="100" alt="iLab - ICT Laboratory for Social Change" />
			
			
			<img style="float:left; margin-top:10px;  margin-left:10px;box-shadow: 0 0 5px 1px #888888;" src="<?php echo url::site();?>themes/default/sps/change.png" width="100" alt="iLab - ICT Laboratory for Social Change" />
			<img style="float:left; margin-top:10px;  margin-left:10px;box-shadow: 0 0 5px 1px #888888;" src="<?php echo url::site();?>themes/default/sps/pvi.png" width="100" alt="iLab - ICT Laboratory for Social Change" />
			<img style="float:left; margin-top:10px;  margin-left:10px;box-shadow: 0 0 5px 1px #888888;" src="<?php echo url::site();?>themes/default/sps/rpk.png" width="100" alt="iLab - ICT Laboratory for Social Change" />
			<img style="float:left; margin-top:10px;  margin-left:10px;box-shadow: 0 0 5px 1px #888888;" src="<?php echo url::site();?>themes/default/sps/ultimagz.png" width="100" alt="iLab - ICT Laboratory for Social Change" />
			<img style="float:left; margin-top:10px;  margin-left:10px;box-shadow: 0 0 5px 1px #888888;" src="<?php echo url::site();?>themes/default/sps/wa_orange.png" width="100" alt="iLab - ICT Laboratory for Social Change" />
			
			<br />
			
			</td>
			</tr>
			</table>
			
			<br />
			</div>
			
			
