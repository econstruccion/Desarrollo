<?php get_header(); ?>

	<div id="page" class="clearfix">

		<div id="contentleft" class="maincontent">

			<div id="content" class="clearfix">

				<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>'); } ?>

				<h1 class="archive-title izq"><?php _e("Resultados de b&uacute;squeda para:", "solostream"); ?> <span class="active"><?php echo wp_specialchars($s, 1); ?></span></h1>

				<?php include (TEMPLATEPATH . '/banner468.php'); ?>

				<?php if ( get_option('solostream_archive_layout') == 'Option 1 - Standard Blog Layout') { ?>
				<?php include (TEMPLATEPATH . '/index1.php'); ?>
				<?php } elseif ( get_option('solostream_archive_layout') == 'Option 2 - 2 Posts Aligned Side-by-Side') { ?>
				<?php include (TEMPLATEPATH . '/index2.php'); ?>
				<?php } elseif ( get_option('solostream_archive_layout') == 'Option 3 - 3 Posts Aligned Side-by-Side') { ?>
				<?php include (TEMPLATEPATH . '/index3.php'); ?>
				<?php } ?>

			</div>

			<?php include (TEMPLATEPATH . '/sidebar-narrow.php'); ?>

		</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>