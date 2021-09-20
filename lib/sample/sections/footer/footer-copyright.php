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
		'title'            => esc_html__( 'Footer Copyright Section', 'deeplive' ),
		'desc'             => esc_html__( 'This Section For Footer Copyright Section ', 'deeplive' ),
		'id'               => 'footer-copyright-sub',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'       => 'footer-copyright-date',
				'type'     => 'text',
				'title'    => esc_html__( 'Site Year', 'deeplive' ),
				'subtitle' => esc_html__( 'Year', 'deeplive' ),
				'desc'     => esc_html__( 'Add Your Website Year', 'deeplive' ),
				'default'  => '2021',
			),
			array(
				'id'       => 'footer-copyright-name',
				'type'     => 'text',
				'title'    => esc_html__( 'Site Name', 'deeplive' ),
				'subtitle' => esc_html__( 'Add Site Name', 'deeplive' ),
				'desc'     => esc_html__( 'Add Your Website Name', 'deeplive' ),
				'default'  => 'jeffsbuy',
			),
			array(
				'id'       => 'footer-text-url',
				'type'     => 'text',
				'title'    => esc_html__( 'Add Link URL', 'deeplive' ),
				'subtitle' => esc_html__( 'Add Link ', 'deeplive' ),
				'desc'     => esc_html__( 'Add Your URL in this Place', 'deeplive' ),
				'validate' => 'url',
				'default'  => 'https://example.com',
			),
		),
	)
);
