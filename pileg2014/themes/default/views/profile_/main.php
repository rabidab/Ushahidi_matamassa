
<div id="content">
	<div class="content-bg" style="background: none repeat scroll 0 0 #FFFFFF; padding: 16px 25px 10px; border: 1px solid #E5E5E5; border-radius: 2px; overflow: hidden; position: relative;">

			<h1><?php echo Kohana::lang('ui_main.browse_profiles'); ?></h1>
			<ul>
			<?php foreach($users as $user){ ?>
				<li><a href="<?php echo url::site();?>profile/user/<?php echo html::specialchars($user->username); ?>"><?php echo html::specialchars($user->name); ?></a></li>
			<?php } ?>
			</ul>
	</div>
</div>
