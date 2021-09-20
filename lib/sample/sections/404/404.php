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
		'title'            => esc_html__( '404', 'deeplive' ),
		'desc'             => esc_html__( 'For full documentation on this field, visit: ', 'deeplive' ),
		'id'               => '404-sub',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'       => '404-main',
				'type'     => 'text',
				'title'    => esc_html__( '404 main', 'deeplive' ),
				'subtitle' => esc_html__( 'Add 404 Text', 'deeplive' ),
				'desc'     => esc_html__( 'This Field For 404 Text Section', 'deeplive' ),
				'default'  => '404',
			),
			array(
				'id'       => '404-title',
				'type'     => 'text',
				'title'    => esc_html__( '404 Text', 'deeplive' ),
				'subtitle' => esc_html__( 'Add 404 Text', 'deeplive' ),
				'desc'     => esc_html__( 'This Field For 404 Text Section', 'deeplive' ),
				'default'  => 'You Have Failed',
			),
			array(
				'id'        => '404-des',
				'type'      => 'text',
				'title'     => esc_html__( 'Button Text', 'deeplive' ),
				'subtitle'  => esc_html__( 'Add Button Text', 'deeplive' ),
				'desc'      => esc_html__( 'This Field For 404 Text Section', 'deeplive' ),
				'default'	=> 'Back to Home',
				
			),
		),
	),
	
);
