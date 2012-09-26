<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title(' '); ?> <?php if(wp_title(' ', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!-- Place this tag in the <head> of your document -->
<link href="https://plus.google.com/115288728314980996419" rel="publisher" />
<meta name="google-translate-customization" content="9d7176a51a0e99ae-aa020e92d723c669-gf14f9f78a7b86f8b-15" />

<link rel="apple-touch-icon" href="http://www.e-construccion.cl/econstruccion-57.png" />
<link rel="apple-touch-icon" sizes="72x72" href="http://www.e-construccion.cl/econstruccion-72.png" />
<link rel="apple-touch-icon" sizes="114x114" href="http://www.e-construccion.cl/econstruccion-114.png"/>

<link rel="stylesheet" href="http://www.e-construccion.cl/ios/add2home.css">
<script type="application/javascript" src="http://www.e-construccion.cl/ios/add2home.js"></script>

<meta name="bitly-verification" content="874a79818624"/>

<script src="http://cufon.shoqolate.com/js/cufon-yui.js" type="text/javascript"></script>
<script src="bebas-neue.cufonfonts.js" type="text/javascript"></script>
<script type="text/javascript">
Cufon.replace('.bebas_neue', { fontFamily: 'Bebas Neue', hover: true }); 
</script>
<!--[if lt IE 9]>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>

<script type="text/javascript">
	jQuery(function () {
		jQuery('#topnav .nav').mobileMenu();
		//jQuery('#catnav .nav').mobileMenu();
	});
</script>




</head>

<body <?php body_class(); ?>>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=459270560760583";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div id="bline"> </div>
<p>Consumo de PHP: <?php echo round(memory_get_usage()/1048576,2) ?>MB.</p>
<p>Base de datos: <?php echo get_num_queries(); ?> consultas.</p>
<p>Tiempo de carga: <?php timer_stop(1); ?> segundos.</p>
<div id="top">

<div id="header">
		<div id="head-content" class="clearfix">
			<?php if ( get_option('solostream_site_title_option') == 'Image/Logo-Type Title' && get_option('solostream_site_logo_url') ) { ?>
				<div id="logo">
					<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php echo get_option('solostream_site_logo_url'); ?>" alt="<?php bloginfo('name'); ?>" /></a>
				</div>
			<?php } else { ?>
				<div id="sitetitle">
					<div class="title"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></div> 
					<div class="description"><?php bloginfo('description'); ?></div>
				</div>
			<?php } ?>
			
			<div id="wrap-social">
			<div id="socialb"> 
			
			<a href="https://plus.google.com/115288728314980996419/posts" target="_blank"><img src="/www/social/googleplus.png"></a>
			<a href="http://www.facebook.com/econstruccion" target="_blank"><img src="/www/social/facebook.png"></a>
			<a href="http://www.twitter.com/econstruccion" target="_blank"><img src="/www/social/twitter.png"></a>
			<a href="http://www.youtube.com/user/econstruccion/featured" target="_blank"><img src="/www/social/youtube.png"></a>
			</div>
			</div>
			<?php include (TEMPLATEPATH . '/banner468head.php'); ?>
		</div>
	</div>

</div>
	

<div id="outer-wrap">

 <?php if ( get_option('solostream_show_catnav') == 'yes'  ) { ?>
	

	

	<div id="topnav">
		<div class="limit clearfix">
			<?php if (has_nav_menu('topnav')) { ?>
				<ul class="nav clearfix">
				
				
				<?php wp_nav_menu(array('menu' => 'Principal', 'container_id' => 'cssmenu', 'walker' => new CSS_Menu_Maker_Walker(), 'fallback_cb'=>'nav_fallback')); ?>
				<div class="searchform"><?php get_search_form(); ?></div>
				
					
					
				</ul>
			<?php } else { ?>
				<ul class="nav clearfix">
					<li id="home"<?php if (is_front_page()) { echo " class=\"current_page_item\""; } ?>><a href="<?php bloginfo('url'); ?>"><?php _e("Home", "solostream"); ?></a></li>
					<?php wp_list_pages('title_li='); ?>
					<li class="searchform"><?php get_search_form(); ?></li>
				</ul>
			<?php } ?>
		</div>
	</div>

	
	<?php } ?>

	<div id="wrap">

		<?php include (TEMPLATEPATH . '/banner728.php'); ?>