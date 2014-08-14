<?php 

function PerfectPoingMarketing_widget_areas() {

  
	register_sidebar( array(
		'name' => __( 'Call to Action Widget', 'PerfectPoingMarketing' ),
		'id' => 'call_to_action',
		'before_widget' => '<div class="call_to_action fix">',
		'after_widget' => '</div>',
		'before_title' => '<h2 style="display:none">',
		'after_title' => '</h2>',
	) );


}
add_action('widgets_init', 'PerfectPoingMarketing_widget_areas');

?>