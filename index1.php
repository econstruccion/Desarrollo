				<?php if (is_home() && get_option('solostream_recent_posts_title')) { ?>
				<h2 class="feature-title"><span><?php echo stripslashes(get_option('solostream_recent_posts_title')); ?></span></h2>
				<?php } ?>

<?php 
if (is_home()) { 
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	query_posts(array(
		'post__not_in' => $do_not_duplicate,
		'paged' => $paged
	)); }
if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div <?php post_class(); ?> id="post-main-<?php the_ID(); ?>">
					<div id="uni">
					<div class="entry">
					
						<div id="fotopp" class="izq">
					
							<a href="<?php the_permalink() ?>" rel="<?php _e("bookmark", "solostream"); ?>" title="<?php _e(" ", "solostream"); ?> <?php the_title(); ?>"><?php solostream_wide_thumbnail(); ?></a>
						
							</div>
					
							<div id="txtpp" class="izq">
							<div id="volantah">		
								<?php echo get_post_meta($post->ID, 'volanta', true); ?>
							</div>
						
							<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="<?php _e("bookmark", "solostream"); ?>" title="<?php _e(" ", "solostream"); ?> <?php the_title(); ?>"><?php the_title(); ?></a></h2>
							<?php include (TEMPLATEPATH . "/postinfo.php"); ?>
							<?php if ( get_option('solostream_post_content') == 'Excerpts' ) { ?>
							<div class="hometxt"><?php the_excerpt(); ?></div>
							
							</div>
						</div>
					</div>
						
							<div id="dboxbutton">
							<p class="readmore hometxt"><a class="more-link" href="<?php the_permalink() ?>" rel="nofollow" title="<?php _e(" ", "solostream"); ?> <?php the_title(); ?>"><?php _e("Continuar", "solostream"); ?></a></p>
							
							<?php } else { ?>
							<?php the_content(__("Continuar", "solostream")); ?>
							<?php } ?>
								<div id="dbbs"><?php  echo  tweetbutton(); ?></div>
						
							</div>
							<div style="clear:both;"></div>
						
						
				</div>
<?php endwhile; endif; ?>

				<?php include (TEMPLATEPATH . "/bot-nav.php"); ?>