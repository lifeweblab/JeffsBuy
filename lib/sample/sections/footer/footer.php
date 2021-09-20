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
		'title'            => esc_html__( 'Footer Color Section', 'deeplive' ),
		'desc'             => esc_html__( 'This Section For Footer Color Section', 'deeplive' ),
		'id'               => 'footer-color-sub',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'       => 'footer-background-color',
				'type'     => 'color',
				'title'    => esc_html__( 'Footer Background Color', 'deeplive' ),
				'subtitle' => esc_html__( 'Background Color', 'deeplive' ),
				'desc'     => esc_html__( 'Add Your Footer Background Color', 'deeplive' ),
				'default'   => '#ffffff',
			),
			array(
				'id'       => 'footer-title-color',
				'type'     => 'color',
				'title'    => esc_html__( 'Footer Title Color', 'deeplive' ),
				'subtitle' => esc_html__( 'Title Color', 'deeplive' ),
				'desc'     => esc_html__( 'Add Your Footer Title Color', 'deeplive' ),
				'default'   => '#515151',
			),
			array(
				'id'       => 'footer-paragraph-color',
				'type'     => 'color',
				'title'    => esc_html__( 'Footer Paragraph Color', 'deeplive' ),
				'subtitle' => esc_html__( 'Paragraph Color', 'deeplive' ),
				'desc'     => esc_html__( 'Add Your Footer Paragraph Color', 'deeplive' ),
				'default'   => '#999',
			),
			array(
				'id'       => 'footer-hover-color',
				'type'     => 'color',
				'title'    => esc_html__( 'Footer Hover Color', 'deeplive' ),
				'subtitle' => esc_html__( 'Hover Color', 'deeplive' ),
				'desc'     => esc_html__( 'Add Your Footer Hover Color', 'deeplive' ),
				'default'   => '#666',
			),
		),
	)
);
