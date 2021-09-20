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
		'title'            => esc_html__( 'Logo Font', 'deeplive' ),
		'desc'             => esc_html__( 'This Section For Logo Font ', 'deeplive' ),
		'id'               => 'logo-font-change-sub',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'                => 'logo-font',
				'type'              => 'typography',
				'title'             => esc_html__( 'Logo Font', 'deeplive' ),
				'subtitle'          => esc_html__( 'Header Logo Font', 'deeplive' ),
				'google'            => true,
				'font_family_clear' => false,
				'text-shadow'       => false,
				'color_alpha'       => false,
				'margin-top'        => false,
				'margin-bottom'     => false,
				'subsets'      		=> false,
				'color'        		=> false,
				'default'           => array(
					'color'         => '',
					'font-size'     => '30px',
					'font-family'   => 'Arial, Helvetica, sans-serif',
					'font-weight'   => 'Normal',
					'margin-top'    => '20px',
					'margin-bottom' => '20px',
				),
				'output'            => array( '.site-title' ),
			),
		),
	)
);
