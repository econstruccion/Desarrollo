				<?php if (is_home() && get_option('solostream_recent_posts_title')) { ?>
				<h2 class="feature-title"><span><?php echo stripslashes(get_option('solostream_recent_posts_title')); ?></span></h2>
				<?php } ?>

				<div class="posts-by-3">

<?php
$count = 1;
if (is_home()) { 
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	query_posts(array(
		'post__not_in' => $do_not_duplicate,
		'paged' => $paged
	)); }
if (have_posts()) : while (have_posts()) : the_post(); ?>

					<div <?php if ($count%3 == 0) { post_class(right); } else { post_class(); } ?> id="post-main-<?php the_ID(); ?>">

						<div class="post-image">
							<a href="<?php the_permalink() ?>" rel="<?php _e("bookmark", "solostream"); ?>" title="<?php _e("Permanent Link to", "solostream"); ?> <?php the_title(); ?>"><?php solostream_wide_thumbnail(); ?></a>
						</div>

						<?php include (TEMPLATEPATH . "/postinfo.php"); ?>

						<div class="entry">

							<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="<?php _e("bookmark", "solostream"); ?>" title="<?php _e("Permanent Link to", "solostream"); ?> <?php the_title(); ?>"><?php the_title(); ?></a></h2>

							<?php if ( get_option('solostream_post_content') == 'Excerpts' ) { ?>
							<?php the_excerpt(); ?>
							<?php } else { ?>
							<?php the_content(__("", "solostream")); ?>
							<?php } ?>

							<div style="clear:both;"></div>

						</div>

						<p class="readmore"><a class="more-link" href="<?php the_permalink() ?>" rel="nofollow" title="<?php _e("Permanent Link to", "solostream"); ?> <?php the_title(); ?>"><?php _e("Continuar", "solostream"); ?></a></p>

					</div>

<?php if ( $count%3 == 0 ) { ?>
					<div class="post-clear"></div>
<?php } ?>
<?php $count = $count + 1 ?>
<?php endwhile; endif; ?>

					<?php include (TEMPLATEPATH . "/bot-nav.php"); ?>

				</div>