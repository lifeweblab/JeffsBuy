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
		'title'            => esc_html__( 'Body', 'deeplive' ),
		'desc'             => esc_html__( 'Hey Jeff This Field for Page Body', 'deeplive' ),
		'id'               => 'body-sub',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'       => 'body-color',
				'type'     => 'color_palette',
				'title'    => esc_html__( 'Color Palette Control', 'deeplive' ),
				'subtitle' => esc_html__( 'A100 Material Dedign Colors.', 'deeplive' ),
				'desc'     => esc_html__( 'Change The Page Color ', 'deeplive' ),
				'default'  => '#FFFFFF',
				'options'  => array(
					'colors' => array(
						'#666666',
						'#888888',
						'#aaaaaa',
						'#cccccc',
						'#eeeeee',
						'#ffffff',
					),
					'style'  => 'round',
				),
				'output'   => array(
					'color'     => '.widget-title',
					'important' => true,
				),
			),
		)
	)
);
