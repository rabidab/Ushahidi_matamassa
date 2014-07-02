<br />
<table style="width:460px; margin-left:-2px;">
<tr>
<td style="width:573px; background: none repeat scroll 0 0 #F1F1F1; border: 1px solid #E5E5E5; border-radius: 5px 5px 5px 5px;">


	<table style=" height:240px;">
	<tr>
	<td style="width:250px; font-size:31px; color:#0088CC; font-family:'Roboto';">
	
	<center>
	
	<?php echo Incident_Model::get_total_reports(FALSE)." "; ?>
	<br />
	
	Laporan 
	<br />
	Masuk
	</center>
	</td>
	<td style="border-right:dotted 1px #888888;">

	</td>
	<td style="width:280px; font-family:lucida grande; color:#0088CC; font-size:14;">
	<center>
	
	<?php echo Incident_Model::get_total_reports_by_verified(TRUE)." "; ?>
	<br /> 
	Laporan 
	<br />
	Sudah Diverifikasi
	<br /><br /><br />
	<div style="border-bottom:dotted 1px #888888;">
	</div>
	<br /><br />
	
		<?php
			$total_reports = Incident_Model::get_total_reports(FALSE);
			$total_verified = Incident_Model::get_total_reports_by_verified(true);
			
			$penjumlahan = $total_reports - $total_verified;
			echo $penjumlahan;
		?>
	
	
	<br />
	Laporan 
	<br />
	Belum Diverifikasi
	
	
	</center>
	</td>
	</tr>
	</table>

</td>
<!--<td>

<div class="slider-holder">
	<?php //echo form::open(NULL, array('method' => 'get')); ?>
		<input type="hidden" value="0" name="currentCat" id="currentCat"/>
		<fieldset>
			<label for="startDate"><?php //echo Kohana::lang('ui_main.from'); ?>:</label>
			<select name="startDate" id="startDate"><?php //echo $startDate; ?></select>
			<label for="endDate"><?php //echo Kohana::lang('ui_main.to'); ?>:</label>
			<select name="endDate" id="endDate"><?php //echo $endDate; ?></select> 
		</fieldset>
	<?php //echo form::close(); ?>
</div>
<?php //if (Kohana::config('settings.enable_timeline')): ?>
<div id="graph" class="graph-holder"></div>
<?php //endif; ?>

</td>-->
</tr>
</table>
<br />