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
		'title'            => esc_html__( 'Banner Image', 'deeplive' ),
		'desc'             => esc_html__( 'This Field For Banner ', 'deeplive' ),
		'id'               => 'banner-image',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'       => 'banner-image-real',
				'type'     => 'media',
				'title'    => esc_html__( 'Text Field', 'deeplive' ),
				'subtitle' => esc_html__( 'Subtitle', 'deeplive' ),
				'desc'     => esc_html__( 'Field Description', 'deeplive' ),
				'url'	   => false,
				'preview'  => true,
			),
			array(
				'id'        => 'banner-h1',
				'type'      => 'textarea',
				'title'     => esc_html__( 'Banner Head Quote', 'deeplive' ),
				'subtitle'  => esc_html__( 'Subtitle', 'deeplive' ),
				'desc'      => esc_html__( 'Field Description', 'deeplive' ),
				'default'   => 'Default Text',
			),
			array(
				'id'        => 'banner-para',
				'type'      => 'textarea',
				'title'     => esc_html__( 'Banner Paragraph', 'deeplive' ),
				'subtitle'  => esc_html__( 'Subtitle', 'deeplive' ),
				'desc'      => esc_html__( 'Field Description', 'deeplive' ),
				'default'   => 'Default Text',
			),
			
		),
	)
);
