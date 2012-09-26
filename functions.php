<?php

// Theme Settings Page
require_once(TEMPLATEPATH . "/theme-settings.php");

// Theme Styles
require_once(TEMPLATEPATH . "/theme-styles.php");

// Theme Widgets
require_once(TEMPLATEPATH . "/theme-widgets.php");

// Load Custom Post Options for Write Post and Write Page
require_once(TEMPLATEPATH . "/theme-metaboxes.php");

// Load Theme Javascript
require_once(TEMPLATEPATH . "/theme-js.php");

// Theme Image Functions
require_once(TEMPLATEPATH . "/theme-images.php");

// Register widgetized areas
function theme_widgets_init() {
	register_sidebar(array (
		'name'=>'Sidebar-Wide - Top',
		'id'=>'widget-1',
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widget-wrap">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="widgettitle"><span>',
		'after_title' => '</span></h3>',
		));
	register_sidebar(array (
		'name'=>'Sidebar-Wide - Bottom Left',
		'id'=>'widget-2',
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widget-wrap">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="widgettitle"><span>',
		'after_title' => '</span></h3>',
		));
	register_sidebar(array (
		'name'=>'Sidebar-Wide - Bottom Right',
		'id'=>'widget-3',
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widget-wrap">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="widgettitle"><span>',
		'after_title' => '</span></h3>',
		));
	register_sidebar(array (
		'name'=>'Sidebar-Narrow',
		'id'=>'widget-4',
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widget-wrap">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="widgettitle"><span>',
		'after_title' => '</span></h3>',
		));
	register_sidebar(array (
		'name'=>'Footer Widget 1',
		'id'=>'widget-5',
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widget-wrap">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="widgettitle"><span>',
		'after_title' => '</span></h3>',
		));
	register_sidebar(array (
		'name'=>'Footer Widget 2',
		'id'=>'widget-6',
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widget-wrap">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="widgettitle"><span>',
		'after_title' => '</span></h3>',
		));
	register_sidebar(array (
		'name'=>'Footer Widget 3',
		'id'=>'widget-7',
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widget-wrap">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="widgettitle"><span>',
		'after_title' => '</span></h3>',
		));
	register_sidebar(array (
		'name'=>'Footer Widget 4',
		'id'=>'widget-8',
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widget-wrap">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="widgettitle"><span>',
		'after_title' => '</span></h3>',
		));
	register_sidebar(array (
		'name'=>'Alt Home Page Widget 1',
		'id'=>'widget-9',
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widget-wrap">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="widgettitle"><span>',
		'after_title' => '</span></h3>',
		));
	register_sidebar(array (
		'name'=>'Alt Home Page Widget 2',
		'id'=>'widget-10',
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widget-wrap">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="widgettitle"><span>',
		'after_title' => '</span></h3>',
		));
	register_sidebar(array (
		'name'=>'Alt Home Page Widget 3',
		'id'=>'widget-11',
		'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widget-wrap">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="widgettitle"><span>',
		'after_title' => '</span></h3>',
		));
}

add_action( 'init', 'theme_widgets_init' );

// Get image path for WP Network sites
function get_network_image_path ($img_src) {
	global $blog_id;
	if ( isset($blog_id) && $blog_id > 0 ) {
		$imageParts = explode('/files/', $img_src);
		if (isset($imageParts[1])) {
			$img_src = '/blogs.dir/' . $blog_id . '/files/' . $imageParts[1];
		}
	}
	return $img_src;
}

// Add thickbox to single post pages that use thickbox class
function solo_add_thickbox() {
	global $post;
	if ( is_singular() && strpos($post->post_content,'class="thickbox"') !== false ) {
		add_thickbox();
	}
}

add_action('wp_print_styles','solo_add_thickbox');

// Add Excerpt field to Pages
add_post_type_support( 'page', 'excerpt' );

// Add RSS Feed Links
add_theme_support( 'automatic-feed-links' );

// Add support for WP 3.0 Menu Management
if (function_exists('add_theme_support')) {
	add_theme_support('menus');
}

if (function_exists('register_nav_menus')) {
	function register_my_menus() {
		register_nav_menus(array(
			'topnav' => __( 'Top Navigation' ),
			'catnav' => __( 'Category Navigation' )
			)
		);
	}
add_action( 'init', 'register_my_menus' );
}

function nav_fallback() { ?>
	<?php wp_page_menu( array( 'show_home' => 'Home', 'sort_column' => 'menu_order' ) ); ?>
<?php }

function catnav_fallback() { ?>
	<ul class="clearfix"><?php wp_list_categories('title_li='); ?></ul>
<?php }

// Checks for active Page Template File
function is_pagetemplate_active($pagetemplate = '') {
	global $wpdb;
	$sql = "select meta_key from $wpdb->postmeta where meta_key like '_wp_page_template' and meta_value like '" . $pagetemplate . "'";
	$result = $wpdb->query($sql);
	if ($result) {
		return TRUE;
	} else {
		return FALSE;
	}
}

// Get custom field value.
function get_custom_field($key, $echo = FALSE) {
	global $post;
	$custom_field = get_post_meta($post->ID, $key, true);
	if ($echo == FALSE) return $custom_field;
	echo $custom_field;
}

// Ready the theme for translation
load_theme_textdomain("solostream");

// Add Twitter and other social media links to user profile
add_filter('user_contactmethods','add_twitter_contactmethod',10,1);
function add_twitter_contactmethod( $contactmethods ) {
	$contactmethods['twitter'] = 'Twitter Username';
	$contactmethods['facebook'] = 'Facebook Username';
	$contactmethods['googbuzz'] = 'Google Plus Username';
	$contactmethods['linkedin'] = 'LinkedIn Username';
	$contactmethods['flickr'] = 'Flickr Username';
	$contactmethods['youtube'] = 'Youtube Username';

	return $contactmethods;
}

// This function limits the number of words in the magazine home page excerpt.
function string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

// This function lists pings/trackbacks.
function list_pings($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
        <li id="comment-<?php comment_ID(); ?>"><?php comment_author_link(); ?> | <?php comment_date(); ?>
<?php }

// Add rel="nofollow" to the read more link.
function add_nofollow_to_more_links($content) {
	return preg_replace("@class=\"more-link\"@", "class=\"more-link\" rel=\"nofollow\"", $content);
}

add_filter('the_content', 'add_nofollow_to_more_links');

// Remove the default border from gallery thumbnails. 
add_filter( 'gallery_style', 'remove_gallery_border' );

function remove_gallery_border( $galleryStyles ) {

	// Set the string we want to remove from the default style declaration. 
	$remove = "border: 2px solid #cfcfcf;";

	// Remove it.
	$galleryStyles = str_replace( $remove, '', $galleryStyles );

	return $galleryStyles ;
}



class CSS_Menu_Maker_Walker extends Walker {

  var $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );
  
  function start_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul>\n";
  }
  
  function end_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "$indent</ul>\n";
  }
  
  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
  
    global $wp_query;
    $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
    $class_names = $value = ''; 
    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    
    /* Add active class */
    if(in_array('current-menu-item', $classes)) {
      $classes[] = 'active';
      unset($classes['current-menu-item']);
    }
    
    /* Check for children */
    $children = get_posts(array('post_type' => 'nav_menu_item', 'nopaging' => true, 'numberposts' => 1, 'meta_key' => '_menu_item_menu_item_parent', 'meta_value' => $item->ID));
    if (!empty($children)) {
      $classes[] = 'has-sub';
    }
    
    $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
    $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
    
    $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
    $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
    
    $output .= $indent . '<li' . $id . $value . $class_names .'>';
    
    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
    
    $item_output = $args->before;
    $item_output .= '<a'. $attributes .'>';
    $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
    $item_output .= '</a>';
    $item_output .= $args->after;
    
    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }
  
  function end_el( &$output, $item, $depth = 0, $args = array() ) {
    $output .= "</li>\n";
  }
}

/**
 * Add "first" and "last" CSS classes to dynamic sidebar widgets. Also adds numeric index class for each widget (widget-1, widget-2, etc.)
 */
function widget_first_last_classes($params) {

	global $my_widget_num; // Global a counter array
	$this_id = $params[0]['id']; // Get the id for the current sidebar we're processing
	$arr_registered_widgets = wp_get_sidebars_widgets(); // Get an array of ALL registered widgets	

	if(!$my_widget_num) {// If the counter array doesn't exist, create it
		$my_widget_num = array();
	}

	if(!isset($arr_registered_widgets[$this_id]) || !is_array($arr_registered_widgets[$this_id])) { // Check if the current sidebar has no widgets
		return $params; // No widgets in this sidebar... bail early.
	}

	if(isset($my_widget_num[$this_id])) { // See if the counter array has an entry for this sidebar
		$my_widget_num[$this_id] ++;
	} else { // If not, create it starting with 1
		$my_widget_num[$this_id] = 1;
	}

	$class = 'class="widget-' . $my_widget_num[$this_id] . ' '; // Add a widget number class for additional styling options

	if($my_widget_num[$this_id] == 1) { // If this is the first widget
		$class .= 'widget-first ';
	} elseif($my_widget_num[$this_id] == count($arr_registered_widgets[$this_id])) { // If this is the last widget
		$class .= 'widget-last ';
	}

	//$params[0]['before_widget'] = str_replace('class="', $class, $params[0]['before_widget']); // Insert our new classes into "before widget"
    
    $params[0]['before_widget'] = preg_replace('/class=\"/', "$class", $params[0]['before_widget'], 1);
	
	
	return $params;

}
add_filter('dynamic_sidebar_params','widget_first_last_classes');

?>

