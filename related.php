<div id="related" class="clearfix">

	<?php if ( function_exists('related_posts') ) { ?>
	<div class="related-posts">
		<?php related_posts(); ?>
	</div>
	<?php } ?>

	<div class="subscribe">

		<h3><?php _e("Suscripci&oacute;n", "solostream"); ?></h3>

		<p><div class="sub_info"><?php _e("Recibe en tu correo nuevos contenidos publicados.", "solostream"); ?></div></p>

		<?php if ( get_option('solostream_subscribe_settings') == 'Use Google/FeedBurner Email' && get_option('solostream_fb_feed_id') ) { ?>

		<form action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=<?php echo get_option('solostream_fb_feed_id'); ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
			<input type="hidden" value="<?php echo get_option('solostream_fb_feed_id'); ?>" name="uri"/>
			<input type="hidden" name="loc" value="en_US"/>
			<p class="email-form">
				<input type="text" class="sub" name="email" value="<?php _e("Tu correo", "solostream"); ?>" onfocus="if (this.value == '<?php _e("suscribe via email", "solostream"); ?>') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php _e("suscribe via email", "solostream"); ?>';}" /><input type="submit" value="<?php _e("Solicitar", "solostream"); ?>" class="subbutton" />
			</p>
			
		</form>

		<?php } elseif ( get_option('solostream_subscribe_settings') == 'Use Alternate Email List Form' && get_option('solostream_alt_email_code') ) { ?>

		<?php echo stripslashes(get_option('solostream_alt_email_code')); ?>

		<?php } ?>

		<?php include (TEMPLATEPATH . '/sub-icons.php'); ?>

	</div>

</div>