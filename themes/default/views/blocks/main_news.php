<li id="block-reports1">

<div style="position:relative; font-size:18px; font-family:Open Sans; letter-spacing:0.2em; background:#0099cc; width:300px; height:40px; line-height:2em; color:#FFFFFF; border-radius:5px 5px 0px 0px; margin-bottom:px;">
<center /> 
KOLOM MASSA
</div>


<div style="position:relative; width:300px; height:318px; margin-right:15px; background:#F1F1F1; border-radius:0px 0px 5px 5px; font-family:Open Sans;">

<table class="table-list">
	<thead>
		<tr>
			
		</tr>
	</thead>
	<tbody>
		
			
			<tr>
			<?php require('blog/wp-load.php'); query_posts('cat=1&showposts=4');  if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			</tr>
			
			<tr>
		
			<td>&raquo; <?php the_time("j M"); ?> - <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">				
				<?php
					$tit = the_title('','',FALSE);
					echo substr($tit, 0, 33);
					if (strlen($tit) > 55) echo " ...";
					?></a>
				</td>
			
			</tr>
		
				<?php endwhile; else: echo "no posts"; endif; ?>
		
	</tbody>
</table>
<a style="margin-top:3px;" class="more" href="http://www.matamassa.org/blog/category/kolom/">SELENGKAPNYA</a>





<table class="table-list">
	<thead>
		<tr>
			
		</tr>
	</thead>
	<tbody>
		
			<tr><td style="font-size:18px; letter-spacing:0.2em; background:#CCC;"><center />RILIS & PUBLIKASI</td></tr>
			<tr>
			<?php require('blog/wp-load.php'); query_posts('cat=16&showposts=4');  if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			</tr>
			
			
			
			<tr>
		
		
			<td>&raquo; <?php the_time("j M"); ?> - <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">				
				<?php
					$tit = the_title('','',FALSE);
					echo substr($tit, 0, 33);
					if (strlen($tit) > 55) echo "";
					?></a>
				</td>
			
			</tr>
		
				<?php endwhile; else: echo "no posts"; endif; ?>
		
	</tbody>
</table>
<a style="margin-top:8px;" class="more" href="http://www.matamassa.org/blog/category/rilis-publikasi">SELENGKAPNYA</a>



<div class="clear:both;"></div>

</li>




<li id="block-reports1">

<div style="position:relative; font-size:18px; font-family:Open Sans; letter-spacing:0.2em; background:#0099cc; width:300px; height:40px; line-height:2em; color:#FFFFFF; border-radius:5px 5px 0px 0px; margin-bottom:px;">
<center /> 
BERITA PEMILU
</div>


<div style="position:relative; width:300px; height:318px; margin-right:15px; background:#F1F1F1; border-radius:0px 0px 5px 5px; font-family:Open Sans;">
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
					$feed_title = text::limit_chars($feed->item_title, 29, '', True);
					$feed_link = $feed->item_link;
					$feed_date = date('j M', strtotime($feed->item_date));
					$feed_source = text::limit_chars($feed->feed->feed_name, 15, "...");
			?>
			<tr>
				<td><?php echo $feed_date; ?> - <a href="<?php echo $feed_link; ?>" target="_blank"><?php echo $feed_title ?></a></td>
				
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
<a class="more" href="<?php echo url::site() . 'feeds' ?>">SELENGKAPNYA</a>
<div class="clear:both;"></div>

</li>