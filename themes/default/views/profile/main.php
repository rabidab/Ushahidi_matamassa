
<div id="content">
	<div class="content-bg" style="background:#F1F1F1; border-radius:0px 0px 5px 5px; box-shadow:0px 0px 5px 1px;">
<br /><br />
			<h1><?php echo Kohana::lang('ui_main.browse_profiles'); ?></h1>
			<ul>
			<?php foreach($users as $user){ ?>
				<li><a href="<?php echo url::site();?>profile/user/<?php echo html::specialchars($user->username); ?>"><?php echo html::specialchars($user->name); ?></a></li>
			<?php } ?>
			</ul>
	</div>
</div>
