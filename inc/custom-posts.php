<?php 
add_action( 'init', 'ppm_quickstart_theme_custom_post' );
function ppm_quickstart_theme_custom_post() {
	register_post_type( 'cpt',
		array(
			'labels' => array(
				'name' => __( 'CPTs' ),
				'singular_name' => __( 'CPT' ),
				'add_new_item' => __( 'Add New CPT' )
			),
			'public' => true,
			'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'excerpt', 'page-attributes'),
			'has_archive' => true,
		)
	);
	
}



function ppm_quickstart_custom_post_taxonomy() {
	register_taxonomy(
		'cpt_cat',  
		'cpt', 
		array(
			'hierarchical'          => true,
			'label'                 => 'CPT Category', 
			'query_var'             => true,
			'show_admin_column'     => true,
			'rewrite'               => array(
				'slug'              => 'event-category', 
				'with_front'        => true 
				)
			)
	);
}
add_action( 'init', 'ppm_quickstart_custom_post_taxonomy');   

?>