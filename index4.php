			<?php /*-- [ CATEGORY BOX 1 ] -- */ ?>
			<?php if ( get_option('solostream_cat_box_1') !== 'Select a Category Slug' ) { ?>

			<div class="cat-posts">

				<h2 class="feat-title"><span><a href="<?php echo esc_url(get_category_link(get_term_by('slug',get_option('solostream_cat_box_1'),'category')->term_id) ); ?>"><?php echo stripslashes(get_option('solostream_cat_box_1_title')); ?></a></span></h2>

<?php 
$count = 1;
$my_query = new WP_Query(array(
	'category_name' => get_option('solostream_cat_box_1'),
	'showposts' => get_option('solostream_num_home_posts_by_cat')
));
while ($my_query->have_posts()) : $my_query->the_post();
$do_not_duplicate[] = $post->ID; ?>

				<div class="post clearfix<?php if ($count%3 == 0) { ?> right<?php } ?>" id="post-1-<?php the_ID(); ?>">

					<div class="post-image">
						<a href="<?php the_permalink() ?>" rel="<?php _e("bookmark", "solostream"); ?>" title="<?php _e("  ", "solostream"); ?> <?php the_title(); ?>"><?php solostream_wide_thumbnail(); ?></a>
					</div>

					<?php include (TEMPLATEPATH . "/postinfo.php"); ?>

					<div class="entry">
						<div id="volantah">		
								<?php echo get_post_meta($post->ID, 'volanta', true); ?>
						</div>
						<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="<?php _e("bookmark", "solostream"); ?>" title="<?php _e("  ", "solostream"); ?> <?php the_title(); ?>"><?php the_title(); ?></a></h2>
						<div class="hometxt">
						<?php if ( get_option('solostream_post_content') == 'Excerpts' ) { ?>
						<?php the_excerpt(); ?>
						<?php } else { ?>
						<?php the_content(__("", "solostream")); ?>
						<?php } ?>
						</div>
						<div style="clear:both;"></div>

					</div>
<div id="dboxbutton">
					<p class="readmore"><a class="more-link" href="<?php the_permalink() ?>" rel="nofollow" title="<?php _e(" ", "solostream"); ?> <?php the_title(); ?>"><?php _e("Continuar &raquo", "solostream"); ?></a></p>
<div id="dbbs"><?php  echo  tweetbutton(); ?></div>
				</div>
</div>

<?php $count = $count + 1 ?>
<?php endwhile; ?>
				<div style="clear:both;"></div>
			</div>
			<?php } ?>



			<?php /*-- [ CATEGORY BOX 2 ] -- */ ?>
			<?php if ( get_option('solostream_cat_box_2') !== 'Select a Category Slug' ) { ?>
		
			<div class="cat-posts">

				<h2 class="feat-title"><span><a href="<?php echo esc_url(get_category_link(get_term_by('slug',get_option('solostream_cat_box_2'),'category')->term_id) ); ?>"><?php echo stripslashes(get_option('solostream_cat_box_2_title')); ?></a></span></h2>

<?php 
$count = 1;
$my_query = new WP_Query(array(
	'category_name' => get_option('solostream_cat_box_2'),
	'showposts' => get_option('solostream_num_home_posts_by_cat')
));
while ($my_query->have_posts()) : $my_query->the_post(); 
$do_not_duplicate[] = $post->ID; ?>

				<div class="post clearfix<?php if ($count%3 == 0) { ?> right<?php } ?>" id="post-2-<?php the_ID(); ?>">

					<div class="post-image">
						<a href="<?php the_permalink() ?>" rel="<?php _e("bookmark", "solostream"); ?>" title="<?php _e(" ", "solostream"); ?> <?php the_title(); ?>"><?php solostream_wide_thumbnail(); ?></a>
					</div>

					<?php include (TEMPLATEPATH . "/postinfo.php"); ?>

					<div class="entry">
						<div id="volantah">		
								<?php echo get_post_meta($post->ID, 'volanta', true); ?>
						</div>
						<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="<?php _e("bookmark", "solostream"); ?>" title="<?php _e(" ", "solostream"); ?> <?php the_title(); ?>"><?php the_title(); ?></a></h2>
						<div class="hometxt">
						<?php if ( get_option('solostream_post_content') == 'Excerpts' ) { ?>
						<?php the_excerpt(); ?>
						<?php } else { ?>
						<?php the_content(__("", "solostream")); ?>
						<?php } ?>
						</div>
						<div style="clear:both;"></div>

					</div>
<div id="dboxbutton">
					<p class="readmore"><a class="more-link" href="<?php the_permalink() ?>" rel="nofollow" title="<?php _e(" ", "solostream"); ?> <?php the_title(); ?>"><?php _e("Continuar &raquo", "solostream"); ?></a></p>
<div id="dbbs"><?php  echo  tweetbutton(); ?></div>
				</div>
</div>

<?php $count = $count + 1 ?>
<?php endwhile; ?>
				<div style="clear:both;"></div>
			</div>
			<?php } ?>




			<?php /*-- [ CATEGORY BOX 3 ] -- */ ?>
			<?php if ( get_option('solostream_cat_box_3') !== 'Select a Category Slug' ) { ?>

			<div class="cat-posts">

				<h2 class="feat-title"><span><a href="<?php echo esc_url(get_category_link(get_term_by('slug',get_option('solostream_cat_box_3'),'category')->term_id) ); ?>"><?php echo stripslashes(get_option('solostream_cat_box_3_title')); ?></a></span></h2>

<?php 
$count = 1;
$my_query = new WP_Query(array(
	'category_name' => get_option('solostream_cat_box_3'),
	'showposts' => get_option('solostream_num_home_posts_by_cat')
));
while ($my_query->have_posts()) : $my_query->the_post();
$do_not_duplicate[] = $post->ID; ?>

				<div class="post clearfix<?php if ($count%3 == 0) { ?> right<?php } ?>" id="post-3-<?php the_ID(); ?>">

					<div class="post-image">
						<a href="<?php the_permalink() ?>" rel="<?php _e("bookmark", "solostream"); ?>" title="<?php _e(" ", "solostream"); ?> <?php the_title(); ?>"><?php solostream_wide_thumbnail(); ?></a>
					</div>

					<?php include (TEMPLATEPATH . "/postinfo.php"); ?>

					<div class="entry">

					<div id="volantah">		
								<?php echo get_post_meta($post->ID, 'volanta', true); ?>
						</div>
						
						<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="<?php _e("bookmark", "solostream"); ?>" title="<?php _e(" ", "solostream"); ?> <?php the_title(); ?>"><?php the_title(); ?></a></h2>
						<div class="hometxt">
						<?php if ( get_option('solostream_post_content') == 'Excerpts' ) { ?>
						<?php the_excerpt(); ?>
						<?php } else { ?>
						<?php the_content(__("", "solostream")); ?>
						<?php } ?>
						</div>
						<div style="clear:both;"></div>

					</div>
<div id="dboxbutton">
					<p class="readmore"><a class="more-link" href="<?php the_permalink() ?>" rel="nofollow" title="<?php _e(" ", "solostream"); ?> <?php the_title(); ?>"><?php _e("Continuar &raquo", "solostream"); ?></a></p>
<div id="dbbs"><?php  echo  tweetbutton(); ?></div>
				</div>
</div>
<?php $count = $count + 1 ?>
<?php endwhile; ?>
				<div style="clear:both;"></div>
			</div>
			<?php } ?>




			<?php /*-- [ CATEGORY BOX 4 ] -- */ ?>
			<?php if ( get_option('solostream_cat_box_4') !== 'Select a Category Slug' ) { ?>

			<div class="cat-posts">

				<h2 class="feat-title"><span><a href="<?php echo esc_url(get_category_link(get_term_by('slug',get_option('solostream_cat_box_4'),'category')->term_id) ); ?>"><?php echo stripslashes(get_option('solostream_cat_box_4_title')); ?></a></span></h2>

<?php 
$count = 1;
$my_query = new WP_Query(array(
	'category_name' => get_option('solostream_cat_box_4'),
	'showposts' => get_option('solostream_num_home_posts_by_cat')
));
while ($my_query->have_posts()) : $my_query->the_post();
$do_not_duplicate[] = $post->ID; ?>

				<div class="post clearfix<?php if ($count%3 == 0) { ?> right<?php } ?>" id="post-4-<?php the_ID(); ?>">

					<div class="post-image">
						<a href="<?php the_permalink() ?>" rel="<?php _e("bookmark", "solostream"); ?>" title="<?php _e(" ", "solostream"); ?> <?php the_title(); ?>"><?php solostream_wide_thumbnail(); ?></a>
					</div>

					<?php include (TEMPLATEPATH . "/postinfo.php"); ?>

					<div class="entry">

					<div id="volantah">		
								<?php echo get_post_meta($post->ID, 'volanta', true); ?>
						</div>
						
						<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="<?php _e("bookmark", "solostream"); ?>" title="<?php _e(" ", "solostream"); ?> <?php the_title(); ?>"><?php the_title(); ?></a></h2>
						<div class="hometxt">
						<?php if ( get_option('solostream_post_content') == 'Excerpts' ) { ?>
						<?php the_excerpt(); ?>
						<?php } else { ?>
						<?php the_content(__("", "solostream")); ?>
						<?php } ?>
						</div>
						<div style="clear:both;"></div>

					</div>
<div id="dboxbutton">
					<p class="readmore"><a class="more-link" href="<?php the_permalink() ?>" rel="nofollow" title="<?php _e(" ", "solostream"); ?> <?php the_title(); ?>"><?php _e("Continuar &raquo", "solostream"); ?></a></p>
<div id="dbbs"><?php  echo  tweetbutton(); ?></div>
				</div>
</div>
<?php $count = $count + 1 ?>
<?php endwhile; ?>
				<div style="clear:both;"></div>
			</div>
			<?php } ?>






			<?php /*-- [ CATEGORY BOX 5 ] -- */ ?>
			<?php if ( get_option('solostream_cat_box_5') !== 'Select a Category Slug' ) { ?>

			<div class="cat-posts">

				<h2 class="feat-title"><span><a href="<?php echo esc_url(get_category_link(get_term_by('slug',get_option('solostream_cat_box_5'),'category')->term_id) ); ?>"><?php echo stripslashes(get_option('solostream_cat_box_5_title')); ?></a></span></h2>

<?php 
$count = 1;
$my_query = new WP_Query(array(
	'category_name' => get_option('solostream_cat_box_5'),
	'showposts' => get_option('solostream_num_home_posts_by_cat')
));
while ($my_query->have_posts()) : $my_query->the_post();
$do_not_duplicate[] = $post->ID; ?>

				<div class="post clearfix<?php if ($count%3 == 0) { ?> right<?php } ?>" id="post-5-<?php the_ID(); ?>">

					<div class="post-image">
						<a href="<?php the_permalink() ?>" rel="<?php _e("bookmark", "solostream"); ?>" title="<?php _e(" ", "solostream"); ?> <?php the_title(); ?>"><?php solostream_wide_thumbnail(); ?></a>
					</div>

					<?php include (TEMPLATEPATH . "/postinfo.php"); ?>

					<div class="entry">
						<div id="volantah">		
								<?php echo get_post_meta($post->ID, 'volanta', true); ?>
						</div>
						<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="<?php _e("bookmark", "solostream"); ?>" title="<?php _e(" ", "solostream"); ?> <?php the_title(); ?>"><?php the_title(); ?></a></h2>
						<div class="hometxt">
						<?php if ( get_option('solostream_post_content') == 'Excerpts' ) { ?>
						<?php the_excerpt(); ?>
						<?php } else { ?>
						<?php the_content(__("", "solostream")); ?>
						<?php } ?>
						</div>
						<div style="clear:both;"></div>

					</div>
<div id="dboxbutton">
					<p class="readmore"><a class="more-link" href="<?php the_permalink() ?>" rel="nofollow" title="<?php _e(" ", "solostream"); ?> <?php the_title(); ?>"><?php _e("Continuar &raquo", "solostream"); ?></a></p>
<div id="dbbs"><?php  echo  tweetbutton(); ?></div>
				</div>
</div>
<?php $count = $count + 1 ?>
<?php endwhile; ?>
				<div style="clear:both;"></div>
			</div>
			<?php } ?>




			<?php /*-- [ CATEGORY BOX 6 ] -- */ ?>
			<?php if ( get_option('solostream_cat_box_6') !== 'Select a Category Slug' ) { ?>

			<div class="cat-posts">

				<h2 class="feat-title"><span><a href="<?php echo esc_url(get_category_link(get_term_by('slug',get_option('solostream_cat_box_6'),'category')->term_id) ); ?>"><?php echo stripslashes(get_option('solostream_cat_box_6_title')); ?></a></span></h2>

<?php 
$count = 1;
$my_query = new WP_Query(array(
	'category_name' => get_option('solostream_cat_box_6'),
	'showposts' => get_option('solostream_num_home_posts_by_cat')
));
while ($my_query->have_posts()) : $my_query->the_post(); 
$do_not_duplicate[] = $post->ID; ?>

				<div class="post clearfix<?php if ($count%3 == 0) { ?> right<?php } ?>" id="post-6-<?php the_ID(); ?>">

					<div class="post-image">
						<a href="<?php the_permalink() ?>" rel="<?php _e("bookmark", "solostream"); ?>" title="<?php _e(" ", "solostream"); ?> <?php the_title(); ?>"><?php solostream_wide_thumbnail(); ?></a>
					</div>

					<?php include (TEMPLATEPATH . "/postinfo.php"); ?>

					<div class="entry">
					<div id="volantah">		
								<?php echo get_post_meta($post->ID, 'volanta', true); ?>
						</div>
						<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="<?php _e("bookmark", "solostream"); ?>" title="<?php _e(" ", "solostream"); ?> <?php the_title(); ?>"><?php the_title(); ?></a></h2>
						<div class="hometxt">
						<?php if ( get_option('solostream_post_content') == 'Excerpts' ) { ?>
						<?php the_excerpt(); ?>
						<?php } else { ?>
						<?php the_content(__("", "solostream")); ?>
						<?php } ?>
						</div>
						<div style="clear:both;"></div>

					</div>
<div id="dboxbutton">
					<p class="readmore"><a class="more-link" href="<?php the_permalink() ?>" rel="nofollow" title="<?php _e(" ", "solostream"); ?> <?php the_title(); ?>"><?php _e("Continuar &raquo", "solostream"); ?></a></p>
<div id="dbbs"><?php  echo  tweetbutton(); ?></div>
				</div>
</div>
<?php $count = $count + 1 ?>
<?php endwhile; ?>
				<div style="clear:both;"></div>
			</div>
			<?php } ?>

			
			
			<?php /*-- [ OTHER RECENT ARTICLES ] -- */ ?>
			<?php if ( get_option('solostream_other_articles') == yes ) { ?>

			<div class="cat-posts-stacked">

				<h3 class="feat-title"><span><?php echo stripslashes(get_option('solostream_other_title')); ?></span></h3>

<?php 
$count = 1;
$my_query = new WP_Query(array(
	'post__not_in' => $do_not_duplicate,
	'posts_per_page' => get_option('solostream_other_number')
));
while ($my_query->have_posts()) : $my_query->the_post(); ?> 

				<div class="post clearfix" id="post-main-<?php the_ID(); ?>">

					<div class="entry clearfix">

						<div id="dboxl">
						
						<div id="volantah">		
								<?php echo get_post_meta($post->ID, 'volanta', true); ?>
						</div>

						<h3 class="post-title"><a href="<?php the_permalink() ?>" rel="<?php _e("bookmark", "solostream"); ?>" title="<?php _e(" ", "solostream"); ?> <?php the_title(); ?>"><?php the_title(); ?></a></h3>

						<?php include (TEMPLATEPATH . "/postinfo.php"); ?>
						<div class="hometxt">
						<?php if ( get_option('solostream_post_content') == 'Excerpts' ) { ?>
							<?php the_excerpt(); ?>
						<?php } else { ?>
							<?php the_content(__("", "solostream")); ?>
						<?php } ?>
						</div>
						</div>
						<div id="dboxr">
							<div id="dboximage"><a href="<?php the_permalink() ?>" rel="<?php _e("bookmark", "solostream"); ?>" title="<?php _e(" ", "solostream"); ?> <?php the_title(); ?>"><?php solostream_wide_thumbnail(); ?></a>
							</div>
							<div id="dboxsocial"><ul>Hola Social 1</ul>
												  
											
							</div>
						</div>
						

						<div id="dboxbutton">
						<p class="readmore"><a class="more-link" href="<?php the_permalink() ?>" rel="nofollow" title="<?php _e(" ", "solostream"); ?> <?php the_title(); ?>"><?php _e("Continuar &raquo", "solostream"); ?></a></p>
						<div id="dbbs"><?php  echo  tweetbutton(); ?></div>
						</div>

						<div style="clear:both;"></div>						

					</div>

				</div>

<?php $count = $count + 1 ?>
<?php endwhile; ?>
				<div style="clear:both;"></div>
			</div>
			<?php } ?>