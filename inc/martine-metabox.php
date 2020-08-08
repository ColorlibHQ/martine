<?php
function martine_event_metabox( $meta_boxes ) {

	$martine_prefix = '_martine_';
	$meta_boxes[] = array(
		'id'        => 'event_single_metaboxs',
		'title'     => esc_html__( 'Event Single Metabox', 'martine' ),
		'post_types'=> array( 'event' ),
		'context'   => 'side',
		'priority'  => 'high',
		'autosave'  => 'false',
		'fields'    => array(
			array(
				'id'    => $martine_prefix . 'short_brief',
				'type'  => 'textarea',
				'name'  => esc_html__( 'Event Short Brief', 'martine' ),
				'placeholder' => esc_html__( 'Event Short Brief', 'martine' ),
			),
			array(
				'id'    => $martine_prefix . 'event_date',
				'type'  => 'date',
				'name'  => esc_html__( 'Event Date', 'martine' ),
				'js_options' => array(
					'dateFormat'      => 'DD, M dd, yy   ',
					'showButtonPanel' => false,
				),
			),
			array(
				'id'    => $martine_prefix . 'event_cost',
				'type'  => 'text',
				'name'  => esc_html__( 'Event Cost', 'martine' ),
				'placeholder' => esc_html__( 'Event Cost', 'martine' ),
			),
			array(
				'id'    => $martine_prefix . 'event_organizer',
				'type'  => 'text',
				'name'  => esc_html__( 'Event Organizer', 'martine' ),
				'placeholder' => esc_html__( 'Event Organizer', 'martine' ),
			),
			array(
				'id'    => $martine_prefix . 'event_review',
				'type'  => 'button_group',
				'name'  => esc_html__( 'Place Review', 'martine' ),
				'options' => [
					'1' => '<i class="dashicons dashicons-star-filled"></i>',
					'2' => '<i class="dashicons dashicons-star-filled"></i>',
					'3' => '<i class="dashicons dashicons-star-filled"></i>',
					'4' => '<i class="dashicons dashicons-star-filled"></i>',
					'5' => '<i class="dashicons dashicons-star-filled"></i>',
				],
				'inline'	=> true,
				'multiple'	=> false,
			),
			array(
				'type' => 'divider',
			),
			array(
				'id'    => $martine_prefix . 'book_url',
				'type'  => 'text',
				'name'  => esc_html__( 'Book Ticket URL', 'martine' ),
				'placeholder' => esc_html__( 'Book Ticket URL', 'martine' ),
			),
		),
	);


	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'martine_event_metabox' );