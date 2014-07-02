<div class="block">
	<h2 class="submit"><a href="<?php echo url::site()."mobile/reports/submit/" ?>">Laporkan!</a></h2>
</div>

<div style="background:#FFFFFF none repeat scroll 0 0; border: 1px solid #E5E5E5; border-radius: 5px 5px 5px 5px; padding:8px; font-family:roboto; margin-bottom:5px; text-align:center;">
	<h2 class="submit"><?php echo Incident_Model::get_total_reports(FALSE)." "; ?><br />
	Laporan Masuk</h2>
</div>

<div class="block">
	<h2 class="expand">Laporan Massa</h2>
	<div class="collapse">
		<ul>
			<?php
			foreach ($incidents as $incident)
			{
				$incident_date = $incident->incident_date;
				$incident_date = date('H:i M d', strtotime($incident->incident_date));
				echo "<li><strong><a href=\"".url::site()."mobile/reports/view/".$incident->id."\">".$incident->incident_title."</a></strong>";
				echo "&nbsp;&nbsp;<i>$incident_date</i></li>";
			}
			?>
		</ul>
	</div>
</div>


<div class="block">
	<h2 class="expand">Berita Pemilu</h2>
	<div class="collapse">
		<ul>
			<?php
			foreach ($feeds as $feed)
			{
				$feed_date = date('H:i M d', strtotime($feed->item_date));
				echo "<li><strong><a href=\"".$feed->item_link."\">".$feed->item_title."</a></strong>";
				//echo "&nbsp;&nbsp;<i>$incident_date</i></li>";
				echo "</li>";
			}
		?>
		</ul>
	</div>
</div>

<div class="block">
	<h2 class="other"><a href="http://www.matamassa.org/blog">Kolom Massa</a></h2>
</div>

<h2 class="block_title" style="font-family:Raleway;">Tentang Kami</h2>
<div class="block" style="padding-left:5px; font-family:Raleway;">
	"Yuk Awasi Pemilu Kita!", MataMassa mengajak seluruh elemen masyarakat untuk mengawasi jalannya pemilu 2014 - agar ajang demokrasi besar tersebut berjalan dengan bersih dan transparan.<br />
	MataMassa adalah proyek bersama <a href="http://ajijakarta.org">Aliansi Jurnalis Independen (AJI) Jakarta</a> dan <a href="http://ilab.or.id">iLab.</a><br />
	Situs MataMassa ini berlisensi di bawah Creative Commons Attribution 3.0 
</div>
