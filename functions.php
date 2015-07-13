<?php 

 /* Adding Latest jQuery from Wordpress */
function quickstart_v2_jquery_and_menu() {
	wp_enqueue_script('jquery');
    register_nav_menu( 'main-menu', __( 'Main Menu', 'quickstart' ) );
}
add_action('init', 'quickstart_v2_jquery_and_menu');
 

add_theme_support( 'post-thumbnails' );
add_image_size( 'post-image', 600, 200, true );
	
	
 /* Register sidebars and widgetized areas ********************************************/
 
 
include_once('inc/widgets.php');
include_once('inc/shortcodes.php');
include_once('inc/custom-posts.php');
include_once('inc/cmb-options.php');

add_filter('widget_text', 'do_shortcode');

?>