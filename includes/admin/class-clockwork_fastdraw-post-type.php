<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * WP_Dropship_Post_Types class.
 */
class Clockwork_Fastdraw_Post_Types {


	/**
	 * Constructor
	 */
	public function __construct() {
		
		add_action( 'init', array( $this, 'register_post_types' ) );
	}


	/**
	 * register_post_types function.
	 *
	 * @access public
	 * @return void
	 */
	public function register_post_types() {

		$admin_capability = 'edit_posts';

		if ( !post_type_exists( "project" ) ){

			$singular  		= __( 'project', 'clockwork_fastdraw' );
			$plural    		= __( 'projects', 'clockwork_fastdraw' );

			$has_archive 	= true;
			$rewrite 		= array("slug" => 'project');
			$public 		= true;

			register_post_type( "project",
				array(
					'labels' => array(
						'name' 					=> $plural,
						'singular_name' 		=> $singular,
						'menu_name'             => $plural,
						'all_items'             => sprintf( __( 'All %s', 'clockwork_fastdraw' ), $plural ),
						'add_new' 				=> __( 'Add New', 'clockwork_fastdraw' ),
						'add_new_item' 			=> sprintf( __( 'Add %s', 'clockwork_fastdraw' ), $singular ),
						'edit' 					=> __( 'Edit', 'clockwork_fastdraw' ),
						'edit_item' 			=> sprintf( __( 'Edit %s', 'clockwork_fastdraw' ), $singular ),
						'new_item' 				=> sprintf( __( 'New %s', 'clockwork_fastdraw' ), $singular ),
						'view' 					=> sprintf( __( 'View %s', 'clockwork_fastdraw' ), $singular ),
						'view_item' 			=> sprintf( __( 'View %s', 'clockwork_fastdraw' ), $singular ),
						'search_items' 			=> sprintf( __( 'Search %s', 'clockwork_fastdraw' ), $plural ),
						'not_found' 			=> sprintf( __( 'No %s found', 'clockwork_fastdraw' ), $plural ),
						'not_found_in_trash' 	=> sprintf( __( 'No %s found in trash', 'clockwork_fastdraw' ), $plural ),
						'parent' 				=> sprintf( __( 'Parent %s', 'clockwork_fastdraw' ), $singular )
					),
					'description' => __( 'This is where you can create and manage project.', 'clockwork_fastdraw' ),
					'public' 				=> $public,
					'show_ui' 				=> true,
					'menu_position' 		=> 5,
					'capability_type' 		=> 'post',
					'publicly_queryable' 	=> true,
					'exclude_from_search' 	=> false,
					'hierarchical' 			=> false,
					'rewrite' 				=> $rewrite,
					'query_var' 			=> false,
					'supports' 				=> array( 'title', 'editor', 'custom-fields', 'thumbnail' ),
					'has_archive' 			=> $has_archive,
					'show_in_nav_menus' 	=> true
			));
		}
	}
}


new Clockwork_Fastdraw_Post_Types();