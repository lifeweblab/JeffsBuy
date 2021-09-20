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
		'title'            => esc_html__( 'Logo', 'deeplive' ),
		'desc'             => esc_html__( 'This area for Top Section with Logo', 'deeplive' ),
		'id'               => 'header-sub',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'       => 'logo',
				'type'     => 'media',
				'title'    => esc_html__( 'Logo', 'deeplive' ),
				'subtitle' => esc_html__( 'Header Logo', 'deeplive' ),
				'desc'     => esc_html__( 'Upload Your Logo Only use png format mot Use Other Type ', 'deeplive' ),
				'url'	   => false,
				'preview'  => true,
			),
			array(
				'id'        => 'logo-text-one',
				'type'      => 'text',
				'title'     => esc_html__( 'Logo Text', 'deeplive' ),
				'subtitle'  => esc_html__( 'Logo Text One', 'deeplive' ),
				'desc'      => esc_html__( 'Enter Your First Text Logo', 'deeplive' ),
				'placeholder' => 'Logo Text One',
				
				
			),
			array(
				'id'        => 'logo-text-one-color',
				'type'      => 'color',
				'title'     => esc_html__( 'Text Color', 'deeplive' ),
				'subtitle'  => esc_html__( 'Text Color One', 'deeplive' ),
				'desc'      => esc_html__( 'Enter Your First Text Logo', 'deeplive' ),
				'placeholder' => 'Logo Text One',
				'default'     => '#FF912E',
				
			),
			array(
				'id'          => 'logo-text-two',
				'type'        => 'text',
				'title'       => esc_html__( 'Logo Text', 'deeplive' ),
				'subtitle'    => esc_html__( 'Logo Text Two', 'deeplive' ),
				'desc'        => esc_html__( 'Enter Your Secend Text Logo', 'deeplive' ),
				'placeholder' => 'Logo Text Two',
			),
			
			array(
				'id'          => 'logo-text-two-color',
				'type'        => 'color',
				'title'       => esc_html__( 'Logo Color', 'deeplive' ),
				'subtitle'    => esc_html__( 'Logo Color Two', 'deeplive' ),
				'desc'        => esc_html__( 'Enter Your Secend Logo Text Color', 'deeplive' ),
				'placeholder' => 'Logo Text Two',
				'default'     => '#F46D34',
			),
		),
	)
);
