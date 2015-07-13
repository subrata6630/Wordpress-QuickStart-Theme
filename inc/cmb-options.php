<?php

/**
 * Get the bootstrap!
 */
if ( file_exists(  __DIR__ . '/cmb2/init.php' ) ) {
  require_once  __DIR__ . '/cmb2/init.php';
} elseif ( file_exists(  __DIR__ . '/CMB2/init.php' ) ) {
  require_once  __DIR__ . '/CMB2/init.php';
}



add_filter( 'cmb2_meta_boxes', 'ppm_quickstart_metabox' );
function ppm_quickstart_metabox( array $meta_boxes ) {
   $meta_boxes['ppm_quickstart_post_metabox'] = array(
       'id'           => 'ppm_quickstart_post_metabox',
       'title'        => __( 'Post Info', 'quickstart' ),
       'object_types' => array( 'page','post' ), // Post type
       'context'      => 'normal',
       'priority'     => 'default',
       'show_names'   => true,
       'fields'       => array(
			array(
					"name"    => __( 'Post alternative title', 'quickstart' ),
					"id"      =>  "post_alternative_title",
					"type"    => "text",
					"default"    => "",
         
               ),
         
		)
	);
	return $meta_boxes;
}