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
		'title'            => esc_html__( 'Products', 'deeplive' ),
		'desc'             => esc_html__( 'Change Product Color', 'deeplive' ),
		'id'               => 'product-sub',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'       => 'products-border-color',
				'type'     => 'color',
				'title'    => esc_html__( 'Border Hover Color', 'deeplive' ),
				'subtitle' => esc_html__( 'Products Border Color', 'deeplive' ),
				'desc'     => esc_html__( 'Jeffs This Field for Products Border Color', 'deeplive' ),
				'default' => '#626262',
			),
			array(
				'id'        => 'products-border-color-hover',
				'type'      => 'color',
				'title'     => esc_html__( 'Border Color', 'deeplive' ),
				'subtitle'  => esc_html__( 'Products Border Hover Color', 'deeplive' ),
				'desc'      => esc_html__( 'Jeffs This Field for Products Border Hover Color', 'deeplive' ),
				'default' => '#ebebeb',
			),
			array(
				'id'            => 'shop-content-title',
				'type'          => 'slider',
				'title'         => esc_html__( 'Slider Example 4 with float values', 'deeplive' ),
				'subtitle'      => esc_html__( 'This example displays float values', 'deeplive' ),
				'desc'          => esc_html__( 'Slider description. Min: 0, max: 1, step: .1, default value: .5', 'deeplive' ),
				'default'       => 11,
				'min'           => 1,
				'step'          => .1,
				'max'           => 50,
				'resolution'    => 0.1,
				'display_value' => 'text',
			),
			array(
				'id'            => 'shop-content-des',
				'type'          => 'slider',
				'title'         => esc_html__( 'Slider Example 4 with float values', 'deeplive' ),
				'subtitle'      => esc_html__( 'This example displays float values', 'deeplive' ),
				'desc'          => esc_html__( 'Slider description. Min: 0, max: 1, step: .1, default value: .5', 'deeplive' ),
				'default'       => 13,
				'min'           => 1,
				'step'          => .1,
				'max'           => 50,
				'resolution'    => 0.1,
				'display_value' => 'text',
			),
		),
	)
);
