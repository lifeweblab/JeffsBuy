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
		'title'            => esc_html__( 'About Us', 'deeplive' ),
		'desc'             => esc_html__( 'Create Your Full Page in this Field', 'deeplive' ),
		'id'               => 'about-sub',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'       => 'about-full',
				'type'     => 'editor',
				'title'    => esc_html__( 'About Field', 'deeplive' ),
				'subtitle' => esc_html__( 'Add About Us', 'deeplive' ),
				'desc'     => esc_html__( 'Add About Us Full Description', 'deeplive' ),
				'full_width' => true,
				'args'   => array(
					'textarea_rows'    => 10
				)
			),
		),
	)
);

