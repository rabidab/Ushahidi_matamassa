<div class="content-container" style="margin-top:15px;">

<table valign="top" style="margin-top:15px;">
<tr>
<td valign="top">
<li id="block-news">
<div class="content-block" style="width:424px;">
<div style="font-size:24px; font-family:Roboto;">Kolom Massa </div>

<table class="table-list">
	<thead>
		<tr>
			<th scope="col" class="title"><?php echo Kohana::lang('ui_main.title'); ?></th>
			<th scope="col" class="date"><?php echo Kohana::lang('ui_main.date'); ?></th>
		</tr>
	</thead>
	<tbody>
	
		
		<tr>
		
		<?php require('../blog/wp-load.php'); query_posts('showposts=5');  if (have_posts()) : while (have_posts()) : the_post(); ?>
		
				<td><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				
				<?php
$tit = the_title('','',FALSE);
echo substr($tit, 0, 55);
if (strlen($tit) > 55) echo " ...";
?>
				
				</a></td>
				<td><?php the_time("M j Y"); ?></td>
				

			</tr>
			
			<?php endwhile; else: echo "no posts"; endif; ?>
		
	
	</tbody>
	
</table>
<div class="morre">
<a href="http://matamassa.org/blog"><?php echo Kohana::lang('ui_main.view_more'); ?></a>
</div>
<div style="padding-bottom:40px;">
&nbsp;
</div>
</div>

</li>


</td>

<td valign="top">
<?php blocks::open("news");?>
<div style="font-size:24px; font-family:Roboto;">
Berita Pemilu
</div>

<table class="table-list" style="width:424px;">
	<thead>
		<tr>
			<th scope="col" class="title"><?php echo Kohana::lang('ui_main.title'); ?></th>
			<th scope="col" class="date"><?php echo Kohana::lang('ui_main.date'); ?></th>
		</tr>
	</thead>
	<tbody>
		<?php
		if ($feeds->count() != 0)
		{
			foreach ($feeds as $feed)
			{
					$feed_id = $feed->id;
					$feed_title = text::limit_chars($feed->item_title, 43, '...', True);
					$feed_link = $feed->item_link;
					$feed_date = date('M j Y', strtotime($feed->item_date));
					$feed_source = text::limit_chars($feed->feed->feed_name, 15, "...");
			?>
			<tr>
				<td><a href="<?php echo $feed_link; ?>" target="_blank"><?php echo $feed_title ?></a></td>
				<td><?php echo $feed_date; ?></td>
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
<div style="clear:both;"></div>
<?php blocks::close();?>
</td>
</tr>
</table>
<div class="clear:both;"></div>

</div>
