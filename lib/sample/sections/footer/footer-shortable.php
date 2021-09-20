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
		'title'            => esc_html__( 'Footer Sorter', 'deeplive' ),
		'desc'             => esc_html__( 'This area for Top Section with Navigation ', 'deeplive' ),
		'id'               => 'footer-shortable-sub',
		'subsection'       => true,
		'customizer_width' => '700px',
		 'fields' => array(
			array(
				'id'      => 'footer-shortable',
				'type'    => 'sorter',
				'title'   => 'Footer Layout Manager',
				'desc'    => 'Organize how you want the layout to appear on the Footer',
				'compiler' => 'true',
				'options' => array(
						'enabled'  => array(
							'footer-1' => 'Footer 1',
							'footer-2' => 'Footer 2',
							'footer-3' => 'Footer 3',
						),

					),
			)
		 )
	)
);
