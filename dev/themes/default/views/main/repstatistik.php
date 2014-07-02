
 <h4><?php echo Kohana::lang('stats.reports_categories');?></h4>
            <p>
            	<div style="float:left;"><?php echo $reports_chart; ?></div>
            	<div style="float:left;">
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
            	<div style="clear:both;"></div>
            </p>
