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
		'title'            => esc_html__( 'Home Page', 'deeplive' ),
		'desc'             => esc_html__( 'This area for Top Section with Navigation ', 'deeplive' ),
		'id'               => 'home-page-sub',
		'subsection'       => true,
		'customizer_width' => '700px',
		 'fields' => array(
			array(
				'id'      => 'homepage-blocks',
				'type'    => 'sorter',
				'title'   => 'Homepage Layout Manager',
				'desc'    => 'Organize how you want the layout to appear on the homepage',
				'compiler' => 'true',
				'options' => array(
						'enabled'  => array(
							'slider' => 'Slider',
							'mens'   => 'mens',
							'womens' => 'womens',
							'accessories' => 'accessories',
							'electronics' => 'electronics',
							'home' => 'home',
							'kids' => 'kids',
							'appliances' => 'appliances',
						),
						'disabled' => array(),

					),
			)
		 )
	)
);
