<table>
<tr>
<td>

<div style="position: relative; font-size: 18px; font-family: 'Open Sans'; letter-spacing: 0.2em; background-color: rgb(0, 153, 204); width: 595px; padding-left:20px; height: 40px; line-height: 2em; color: rgb(255, 255, 255); border-top-left-radius: 5px; border-top-right-radius: 5px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; background-position: initial initial; background-repeat: initial initial;">
<center />
STATISTIK LAPORAN
</div>            
<p>
            	<div style="width: 615px; margin-right: 15px; background-color: rgb(241, 241, 241); border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 5px; border-bottom-left-radius: 5px; font-family: 'Open Sans'; letter-spacing: 0.2px; background-position: initial initial; background-repeat: initial initial; float:left;"><?php echo $reports_chart; ?>
            	<div style="position:absolute; top:500px; margin-left:325px;">
            		<table>
            			<?php 
            			foreach($reports_per_cat as $category_id => $count){
	            			?>
	            			
								
	            			
	            			<tr>
	            				<td><div id="little-color-box" style="background-color:#<?php echo $category_data[$category_id]['category_color']; ?>">&nbsp;</div></td>
	            				<td><?php echo $category_data[$category_id]['category_title']; ?></td>
	            				<td style="padding-left:25px;"><?php echo $count; ?></td>
	            			</tr>
	            			<?php
            			}
            			?>
            		</table>
			</div>
            	</div>
            	<div style="clear:both;"></div>
            </p>
</td>
<td valign="top">

<div style="position: relative; font-size: 18px; font-family: 'Open Sans'; letter-spacing: 0.2em; background-color: rgb(0, 153, 204); width: 280px; padding-left:20px; height: 40px; line-height: 2em; color: rgb(255, 255, 255); border-top-left-radius: 5px; border-top-right-radius: 5px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; background-position: initial initial; background-repeat: initial initial;">
<center />
LAPORAN MASUK
</div>            
<p>

<table style="background:#F1F1F1; height:300px; width:300px; border-radius:0px 0px 5px 5px;">
	<tr>
	<td style="width:170px; font-size:24px; color:#0088CC; font-family:'Open Sans';">
	
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
	<td style="width:170px; font-family:Open Sans; color:#0088CC; font-size:14;">
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
</tr>
</table>