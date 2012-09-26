<div class="meta<?php if ( is_single() ) { ?> single<?php } ?>">



  
	<?php if ('open' == $post->comment_status) { ?>
	<span class="meta-comments">
		<a href="<?php comments_link(); ?>" rel="<?php _e("bookmark", "solostream"); ?>" title="<?php _e("Comments for", "solostream"); ?> <?php the_title(); ?>"><?php comments_number(__("[ 0 ]", "solostream"), __("[ 1 ]", "solostream"), __("[ % ]", "solostream")); ?></a>
	</span>
	<?php } ?>

	<span class="meta-date">
		<?php the_time( get_option( 'date_format' ) ); ?>
	</span>

	<span class="meta-author">
		 | <?php the_author_posts_link(); ?>
		 
		 
		 
		 
		
		 
		 
		 
		 
		 
	</span>
	
	
	
	<div id="g-plusec">
		 <div class="g-plusone" data-size="small" data-annotation="none"></div></div>
		<!-- Place this tag where you want the +1 button to render. -->


<!-- Place this tag after the last +1 button tag. -->
<script type="text/javascript">
  window.___gcfg = {lang: 'es-419'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>

	
	
	<span class="meta-social">
	
			
		
		</span>

</div>