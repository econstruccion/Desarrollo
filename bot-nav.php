<?php if (is_single()) { ?>

  <div id="nav_titulo">Contin&uacute;a leyendo</div>

<?php } ?>
<div class="navigation clearfix">

<?php if ( is_single() ) { ?>
	 <?php next_post_link('%link','<div id="flecha_izq">&laquo</div>'); ?> 
	<div class="alignleft single">
		<?php next_post_link('%link'); ?>
	</div>
	 <?php previous_post_link('%link','<div id="flecha_der">&raquo</div>'); ?>
	<div class="alignright single">
		<?php previous_post_link('%link'); ?>
	</div>
	
<?php } else { ?>
	<?php if ( function_exists('wp_pagenavi') ) { ?>
		<?php wp_pagenavi(); ?>
	<?php } else { ?>
		<?php posts_nav_link(); ?>
	<?php } ?>
<?php } ?>
</div>