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
		'title'            => esc_html__( 'FAQ', 'deeplive' ),
		'desc'             => esc_html__( 'Create Your Full Page in this Field ', 'deeplive' ),
		'id'               => 'faq-sub',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'       => 'faq-full',
				'type'     => 'editor',
				'title'    => esc_html__( 'FAQ Field', 'deeplive' ),
				'subtitle' => esc_html__( 'Add FAQ', 'deeplive' ),
				'desc'     => esc_html__( 'Add FAQ Full Description', 'deeplive' ),
				'full_width' => true,
			),
		),
	)
);
