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
		'title'            => esc_html__( 'Address Section', 'deeplive' ),
		'desc'             => esc_html__( 'Address ', 'deeplive' ),
		'id'               => 'address-sub',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'          => 'address-title',
				'type'        => 'text',
				'title'       => esc_html__( 'Address Title', 'deeplive' ),
				'subtitle'    => esc_html__( 'Add Your Title', 'deeplive' ),
				'desc'        => esc_html__( 'Add your Address Title in this Field', 'deeplive' ),
				'default'  => 'Address Section',
			),
			array(
				'id'          => 'address-one',
				'type'        => 'editor',
				'title'       => esc_html__( 'Address One', 'deeplive' ),
				'subtitle'    => esc_html__( 'Add Address', 'deeplive' ),
				'desc'        => esc_html__( 'Add Your First Address in this Field', 'deeplive' ),
			),
			array(
				'id'          => 'address-two',
				'type'        => 'editor',
				'title'       => esc_html__( 'Address Two', 'deeplive' ),
				'subtitle'    => esc_html__( 'Add Address', 'deeplive' ),
				'desc'        => esc_html__( 'Add Your Second Address in this Field', 'deeplive' ),
			),
			array(
				'id'          => 'address-three',
				'type'        => 'editor',
				'title'       => esc_html__( 'Address Three', 'deeplive' ),
				'subtitle'    => esc_html__( 'Add Address', 'deeplive' ),
				'desc'        => esc_html__( 'Add Your Second Address in this Field', 'deeplive' ),
			),
		),
	)
);
