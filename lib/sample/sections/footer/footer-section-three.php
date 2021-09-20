<?php
/**
 * Redux Framework text config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Footer Section Three', 'deeplive' ),
		'desc'             => esc_html__( 'For full documentation on this field, visit: ', 'deeplive' ),
		'id'               => 'footer-sub-three',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			
			array(
				'id'       => 'footer-right-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Text Field', 'deeplive' ),
				'subtitle' => esc_html__( 'Subtitle', 'deeplive' ),
				'desc'     => esc_html__( 'Field Description', 'deeplive' ),
				'default'  => 'Pages',
			),
		),
	)
);
