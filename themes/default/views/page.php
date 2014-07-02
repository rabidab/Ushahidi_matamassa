<div id="content">
	<div class="content-bg" style="background:#F1F1F1; border-radius:0px 0px 5px 5px; box-shadow:0px 0px 5px 1px;">
		<div class="big-block">
			<h1 style="margin-top:50px;"><?php echo html::escape($page_title) ?></h1>
			<div class="page_text"><?php 
			echo $page_description;
			Event::run('ushahidi_action.page_extra', $page_id);
			?></div>
		</div>
	</div>