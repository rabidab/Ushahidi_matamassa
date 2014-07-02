<li id="block-reports1">

<div style="position:relative; font-size:18px; font-family:Open Sans; letter-spacing:0.2em; background:#0099cc; width:300px; height:40px; line-height:2em; color:#FFFFFF; border-radius:5px 5px 0px 0px; margin-bottom:px;">
<center /> 
KOLOM MASSA
</div>


<div style="position:relative; width:300px; height:133px; margin-right:15px; background:#F1F1F1; border-radius:0px 0px 5px 5px; font-family:Open Sans; font-size:12px; line-height:2em;">
<table class="table-list">
	<thead>
		<tr>
			
		</tr>
	</thead>
	<tbody>
		
			<tr>
				<td>
				 &raquo; April 2 2014 | Jangan Memaksaku Memilih! 
				<br />
				 &raquo; Jan 27 2014 | Mengatur Pelaporan Dana Kampanye 
				<br />
				 &raquo; Dec 26 2014 | Caleg-Konstituen Semakin Berjarak
				
				</td>
				
			</tr>
			
	</tbody>
</table>
<a class="more" href="<?php echo url::site() . 'feeds' ?>"><?php echo Kohana::lang('ui_main.view_more'); ?></a>
<div class="clear:both;"></div>

</li>




<li id="block-reports1">


<div style="position:relative; font-size:18px; font-family:Open Sans; letter-spacing:0.2em; background:#0099cc; width:300px; height:40px; line-height:2em; color:#FFFFFF; border-radius:5px 5px 0px 0px; margin-bottom:px;">
<center /> 
BERITA PEMILU
</div>

<div style="position:relative; width:300px; margin-right:15px; background:#F1F1F1; border-radius:0px 0px 5px 5px; font-family:Open Sans; font-size:12px; letter-spacing:0.5px;">
<table class="table-list">
	<thead>
		<tr>
			
		</tr>
	</thead>
	<tbody>
		<?php
		if ($feeds->count() != 0)
		{
			foreach ($feeds as $feed)
			{
					$feed_id = $feed->id;
					$feed_title = text::limit_chars($feed->item_title, 40, '...', True);
					$feed_link = $feed->item_link;
					$feed_date = date('M j Y', strtotime($feed->item_date));
					$feed_source = text::limit_chars($feed->feed->feed_name, 15, "...");
			?>
			<tr>
				<td>&raquo; <?php echo $feed_date; ?> | <a href="<?php echo $feed_link; ?>" target="_blank"><?php echo $feed_title ?></a></td>
				
			</tr>
			<?php
			}
		}
		else
		{
			?>
			<tr><td colspan="3"></td></tr>
			<?php
		}
		?>
	</tbody>
</table>
<a class="more" href="<?php echo url::site() . 'feeds' ?>"><?php echo Kohana::lang('ui_main.view_more'); ?></a>
<div class="clear:both;"></div>
</div>
</li>