<?php if ( get_option('solostream_show_auth_bio') == 'yes' && get_post_meta( $post->ID, 'hide_auth_bio', true ) != 'Yes' ) { ?>
<div class="auth-bio clearfix">
	<div class="bio">
		<?php // this is the author photo pulled from gravatar.com  
		if (function_exists('get_avatar')) {
		$gravsize = get_option('solostream_grav_size'); 
		$author_email = get_the_author_email();
		echo get_avatar($author_email,$size="$gravsize"); } ?>
		<h3><div id="nombre_autor"><?php echo $author = get_the_author();?> </div></h3>
		
		<?php 
			$the_author_description = get_the_author_meta('description');
			echo $the_author_description; 
			
		?>
		
		<div id="autor_enlace"><a rel="author" href="<?php bloginfo('url'); ?>/?author=<?php the_author_ID(); ?>"><?php _e("Ver m&aacute;s publicaciones de este autor &raquo", "solostream"); ?></a></div>
		
	</div>
</div>
<?php } ?>
