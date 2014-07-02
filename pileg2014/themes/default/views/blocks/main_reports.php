<div class="content-container">

<table style="margin-top:15px;">
<tr>

<!-- Table 1 -->
<td valign="top">

<div style="width:600px;">

<?php blocks::open("reports");?>
<div style="font-size:24px; font-family:Roboto;">
Laporan Massa
</div>

<table class="table-list">
	<thead>
		<tr>
			<th scope="col" class="title"><?php echo Kohana::lang('ui_main.title'); ?></th>
			<th scope="col" class="date"><?php echo Kohana::lang('ui_main.date'); ?></th>
		</tr>
	</thead>
	<tbody>
		<?php
		if ($incidents->count() == 0)
		{
			?>
			<tr><td colspan="3"><?php echo Kohana::lang('ui_main.no_reports'); ?></td></tr>
			<?php
		}
		foreach ($incidents as $incident)
		{
			$incident_id = $incident->id;
			$incident_title = text::limit_chars(html::strip_tags($incident->incident_title), 70, '...', True);
			$incident_date = $incident->incident_date;
			$incident_date = date('M j Y', strtotime($incident->incident_date));
			$incident_location = text::limit_chars(html::strip_tags($incident->location->location_name), 20, '', TRUE);
		?>
		<tr>
			<td><a href="<?php echo url::site() . 'reports/view/' . $incident_id; ?>"> <?php echo $incident_title ?></a></td>
			<td><?php echo $incident_date; ?></td>
		</tr>
		<?php
		}
		?>
	</tbody>
</table>
<a class="more" href="<?php echo url::site() . 'reports/' ?>"><?php echo Kohana::lang('ui_main.view_more'); ?></a>
<div style="clear:both;"></div>
<?php blocks::close();?>

</div>
</td>


<!-- Table 2 -->
<td valign="top" style="margin-top:10px;"> 

<div class="content-block" style="width:290px;">
<div style="font-size:24px; font-family:Roboto; padding-bottom:5px;">Cara Melapor</div>


	<table>
	<tr>
	<td style="width:35px">
	
	<img width="34" height="35" src="<?php echo url::site();?>themes/default/images/sms.png" alt="SMS" /> 
	</td>
	<td>
		<span style="font-size:16px;">SMS</span> <br />
		<span style="font-size:12px;">Kirim SMS ke <strong>0813 7020 2014</strong> dengan format : Lapor[spasi]Nama Pelapor#Tanggal Peristiwa#Lokasi Peristiwa#Isi Laporan.</span>
		<br />
	</td>
	</tr>
	</table>

	<table style="margin-top:5px;">
	<tr>
	<td valign="top" style="width:35px">
	<img width="34" height="35" src="<?php echo url::site();?>themes/default/images/android.png" alt="Android" /> 
	</td>
	<td>
		<span style="font-size:16px;">ANDROID</span><br /> 
		<span style="font-size:12px;">Unduh MataMassa di <a href="https://play.google.com/store/apps/details?id=com.matamassa.android.app" target="_blank">PlayStore</a></span>
		<br />
	</td>
	</tr>
	</table>
	
	<table style="margin-top:5px;">
	<tr>
	<td valign="top" style="width:35px">
	<img width="34" height="35" src="<?php echo url::site();?>themes/default/images/ios.png" alt="IOS" /> 
	</td>
	<td>
		<span style="font-size:16px;">IOS</span> <br />
		<span style="font-size:12px;">Unduh MataMassa di <a href="https://itunes.apple.com/us/app/matamassa/id764787172?ls=1&mt=8" target="_blank">AppStore</a></span>
		<br />
	</td>
	</tr>
	</table>
	
	<table style="margin-top:5px;">
	<tr>
	<td valign="top" style="width:35px">
	<img width="34" height="35" src="<?php echo url::site();?>themes/default/images/bb.png" alt="IOS" /> 
	</td>
	<td>
		<span style="font-size:16px;">Blackberry</span> <br />
		<span style="font-size:12px;">Unduh MataMassa di <a href="http://appworld.blackberry.com/webstore/content/50571890/?lang=en&countrycode=ID" target="_blank">AppWorld</a></span>
		<br />
	</td>
	</tr>
	</table>

	<table style="margin-top:5px;">
	<tr>
	<td valign="top" style="width:35px">
	<img width="34" height="35" src="<?php echo url::site();?>themes/default/images/mail.png" alt="SUREL" /> 
	</td>
	<td>
		<span style="font-size:16px;">SUREL</span> <br />
		<span style="font-size:12px;">Kirim surel ke <a href="mailto:lapor@matamassa.org">lapor@matamassa.org</a></span>
		<br />
	</td>
	</tr>
	</table>
	
	<table style="margin-top:5px;">
	<tr>
	<td valign="top" style="width:35px">
	<img width="34" height="35" src="<?php echo url::site();?>themes/default/images/web.png" alt="WEBSITE" /> 
	</td>
	<td>
		<span style="font-size:16px;">SITUS</span> <br />
		<span style="font-size:12px;">Dengan mengirim laporan melalui <a href="http://matamassa.org/reports/submit">website</a></span>
	</td>
	</tr>
	</table>
	
	

</td>
</tr>
</table>

</div>