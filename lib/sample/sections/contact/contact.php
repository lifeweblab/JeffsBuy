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
		'title'            => esc_html__( 'Contact', 'deeplive' ),
		'desc'             => esc_html__( 'For full documentation on this field, visit: ', 'deeplive' ),
		'id'               => 'contact-sub',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'       => 'contact-switch',
				'type'     => 'switch',
				'title'    => esc_html__( 'On and Off The Google Address', 'deeplive' ),
				'subtitle' => esc_html__( 'On or Off', 'deeplive' ),
				'default'  => true,
				'on'       => 'Enabled',
				'off'      => 'Disabled',
			),
			array(
				'id'       => 'contact-left-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Title', 'deeplive' ),
				'subtitle' => esc_html__( 'Left Title', 'deeplive' ),
				'desc'     => esc_html__( 'Contact Page Left Side Title', 'deeplive' ),
				'default'  => 'GET IN TOUCH',
				
			),
			array(
				'id'       => 'contact-left-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Title', 'deeplive' ),
				'subtitle' => esc_html__( 'Left Title', 'deeplive' ),
				'desc'     => esc_html__( 'Contact Page Left Side Title', 'deeplive' ),
				'default'  => 'GET IN TOUCH',
				
			),
			array(
				'id'        => 'contact-left-paragraph',
				'type'      => 'editor',
				'title'     => esc_html__( 'Information', 'deeplive' ),
				'subtitle'  => esc_html__( 'Left Information', 'deeplive' ),
				'desc'      => esc_html__( 'Contact Page Left Side Paragraph Information', 'deeplive' ),
			),
			
		),
	)
);
