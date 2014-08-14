<?php
/**
 * Initialize the custom Meta Boxes. 
 */
add_action( 'admin_init', 'custom_meta_boxes' );

/**
 * Meta Boxes demo code.
 *
 * You can find all the available option types in demo-theme-options.php.
 *
 * @return    void
 * @since     2.0
 */
function custom_meta_boxes() {



  $event_meta_box = array(
    'id'          => 'event_meta_box',
    'title'       => 'Event Information',
    'desc'        => '',
    'pages'       => array( 'event-items' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => 'Event Show',
        'id'          => 'event_show',
        'type'        => 'text'
      )
    )
  );
  ot_register_meta_box( $event_meta_box );


}