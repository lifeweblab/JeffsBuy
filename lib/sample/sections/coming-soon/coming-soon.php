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
		'title'            => esc_html__( 'Coming Soon', 'deeplive' ),
		'desc'             => esc_html__( 'For full documentation on this field, visit: ', 'deeplive' ),
		'id'               => 'coming-soon-sub',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'       => 'coming-soon-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Coming Soon Title Text', 'deeplive' ),
				'subtitle' => esc_html__( 'Subtitle', 'deeplive' ),
				'desc'     => esc_html__( 'Field Description', 'your-textdomain-here' ),
				'default'  => 'Coming Soon',
			),
			array(
				'id'        => 'coming-soon-des',
				'type'      => 'text',
				'title'     => esc_html__( 'Text Field w/ Hint', 'your-textdomain-here' ),
				'subtitle'  => esc_html__( 'Subtitle', 'your-textdomain-here' ),
				'desc'      => esc_html__( 'Field Description', 'your-textdomain-here' ),
				'default'   => 'Do not Make Unhappy.',
			),
		),
	)
);
