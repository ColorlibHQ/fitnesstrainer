<?php
function fitnstr_portfolio_metabox( $meta_boxes ) {

	$fitnstr_prefix = '_fitnstr_';
	$meta_boxes[] = array(
		'id'        => 'portfolio_single_metaboxs',
		'title'     => esc_html__( 'Portfolio Single Metabox', 'fitnstr' ),
		'post_types'=> array( 'portfolio' ),
		'context'   => 'side',
		'priority'  => 'high',
		'autosave'  => 'false',
		'fields'    => array(
			array(
				'id'         => $fitnstr_prefix . 'project_start_time',
				'name'       => esc_html__( 'Project Start Time', 'fitnstr' ),
				'type'       => 'time',
				'js_options' => array(
					'stepMinute'      => 10,
					'controlType'     => 'select'
				),
			),
			array(
				'id'    => $fitnstr_prefix . 'project_start_date',
				'type'  => 'date',
				'name'  => esc_html__( 'Project Start Date', 'fitnstr' ),
				'js_options' => array(
					'dateFormat'      => 'DD, M dd, yy   ',
					'showButtonPanel' => false,
				),
			),
			array(
				'id'         => $fitnstr_prefix . 'project_end_time',
				'name'       => esc_html__( 'Project End Time', 'fitnstr' ),
				'type'       => 'time',
				'js_options' => array(
					'stepMinute'      => 10,
					'controlType'     => 'select'
				),
			),
			array(
				'id'    => $fitnstr_prefix . 'project_end_date',
				'type'  => 'date',
				'name'  => esc_html__( 'Project End Date', 'fitnstr' ),
				'js_options' => array(
					'dateFormat'      => 'DD, M dd, yy   ',
					'showButtonPanel' => false,
				),
			),
			array(
				'id'    => $fitnstr_prefix . 'project_location',
				'type'  => 'text',
				'name'  => esc_html__( 'Project Location', 'fitnstr' ),
				'placeholder' => esc_html__( 'Project Location', 'fitnstr' ),
			),
		),
	);


	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'fitnstr_portfolio_metabox' );