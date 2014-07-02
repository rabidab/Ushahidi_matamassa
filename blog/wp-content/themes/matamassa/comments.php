<?php if ( !empty($post->post_password) && $_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) : ?>
<p><?php _e('Enter your password to view comments.'); ?></p>
<?php return; endif; ?>

<div id="comment_wrap">

<?php if ( $comments ) : ?>

<?php foreach ($comments as $comment) : ?>


 <div class="comment">
  <div class="avatar">
<?php  if(function_exists("MyAvatars")):
MyAvatars();
else: ?>
   <img src="<?php bloginfo("template_directory")?>/images/avatar.gif">
   <?php endif; ?>
  </div>
  <div class="content">
   <div class="meta">
    <div class="author"><span><?php comment_author_link() ?></span> says: </div>
	<div class="date"><?php comment_time("F j, Y"); ?> at <?php comment_time("g:i") ?>  <?php edit_comment_link(__("Edit this comment"), '', ''); ?></div>
   </div>
   <div class="text">
    <?php comment_text() ?> 
   </div>
  </div>   
  <div class="c"></div>
  </div>
<?php endforeach; ?>


<?php else : // If there are no comments yet ?>
<?php endif; ?>

</div>



<?php if ( comments_open() ) : ?>
<h4 style="margin-top:5px;">Tulis Komentar</h4>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p style="padding:1em; text-align:center;">You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>
<?php else : ?>
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" >
<?php if ( $user_ID ) : ?>
<div id="comment_login">
<p style="padding:1em; text-align:center;">Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('Log out of this account') ?>">Logout &raquo;</a></p>
</div>
<table width="575" border="0" id="commentform" class="logged">
  <tr>
    <td>Komentar</td>
  </tr>
  <tr>
    <td><textarea rows="20" style="width:570px;" cols="20" name="comment"></textarea></td>
  </tr>
  <tr>
    <td style="text-align:center;"><input class="submit" type="submit" value="Submit Comment" /><input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></td>
  </tr>
</table>
<?php else : ?>
<table width="575" border="0" id="commentform">
  <tr>
    <td width="155">Nama*</td>
    <td>Comment</td>
  </tr>
  <tr>
    <td width="155"><input type="text" name="author" value="<?php echo $comment_author; ?>" /></td>
    <td rowspan="5"><textarea rows="5" cols="20" name="comment"></textarea></td>
  </tr>
  <tr>
    <td width="155">E-mail*</td>
  </tr>
  <tr>
    <td width="155"><input type="text" name="email" value="<?php echo $comment_author_email; ?>" /></td>
  </tr>
  <tr>
    <td width="155">Website</td>
  </tr>
  <tr>
    <td width="155" height="32"><input type="text" name="url"  value="<?php echo $comment_author_url; ?>" /></td>
  </tr>
  <tr>
    <td width="155" height="26"></td>
    <td style="text-align:center;"><input class="submit" type="submit" value="Kirim Komentar" /><input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></td>
  </tr>
</table>
 <?php endif; ?>

	  

	  
	  
	  
<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>


<?php else : // Comments are closed ?>
<p><?php _e('Sorry, the comment form is closed at this time.'); ?></p>
<?php endif; ?>


