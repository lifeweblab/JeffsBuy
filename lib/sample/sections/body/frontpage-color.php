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
		'title'            => esc_html__( 'Front Page Body Color', 'deeplive' ),
		'desc'             => esc_html__( 'Hey Jeff This Field for Page Body', 'deeplive' ),
		'id'               => 'frontpage-color-sub',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'       => 'frontpage-body-color',
				'type'     => 'color',
				'title'    => esc_html__( 'Body Color', 'deeplive' ),
				'subtitle' => esc_html__( 'Front Page Body Color', 'deeplive' ),
				'desc'     => esc_html__( 'Add Your Front Page Color ', 'deeplive' ),
				'default'  => '#FFFFFF',
			),
			array(
				'id'            => 'opt-slider-float',
				'type'          => 'slider',
				'title'         => esc_html__( 'Slider Example 4 with float values', 'deeplive' ),
				'subtitle'      => esc_html__( 'This example displays float values', 'deeplive' ),
				'desc'          => esc_html__( 'Slider description. Min: 0, max: 1, step: .1, default value: .5', 'deeplive' ),
				'default'       => 5,
				'min'           => 1,
				'step'          => .1,
				'max'           => 20,
				'resolution'    => 0.1,
				'display_value' => 'text',
			),
		)
	)
);
