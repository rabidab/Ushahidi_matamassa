<li id="block-reports1">

<div style="position:relative; font-size:18px; font-family:Open Sans; letter-spacing:0.2em; background:#0099cc; width:300px; height:40px; line-height:2em; color:#FFFFFF; border-radius:5px 5px 0px 0px; margin-bottom:px;">
<center /> 
LAPORAN MASSA
</div>


<div style="width:300px; height:318px; margin-right:15px; background:#F1F1F1; border-radius:0px 0px 5px 5px; font-family:Open Sans; letter-spacing:0.2px;">
<table class="table-list">
	<thead>
		<tr>
		</tr>
	</thead>
	<tbody>
		<?php
		if ($incidents->count() == 0)
		{
			?>
			<tr><td colspan="3"><?php echo Kohana::lang('ui_main.no_reports'); ?>
			</td>
			
			</tr>
			<?php
		}
		foreach ($incidents as $incident)
		{
			$incident_id = $incident->id;
			$incident_title = text::limit_chars(html::strip_tags($incident->incident_title), 25, '', True);
			$incident_date = $incident->incident_date;
			$incident_date = date('j M', strtotime($incident->incident_date));
			$incident_location = $incident->location->location_name;
		?>
		<tr>
			<td>&raquo; <?php echo $incident_date; ?> - <a href="<?php echo url::site() . 'reports/view/' . $incident_id; ?>"> <?php echo $incident_title ?></a></td>
			
		</tr>
		<?php
		}
		?>
	</tbody>
</table>
<a class="more" href="<?php echo url::site() . 'reports/' ?>">SELENGKAPNYA</a>
<div style="clear:both;"></div>
</div>
</li>