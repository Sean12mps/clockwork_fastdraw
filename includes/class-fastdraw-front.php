<?php 
// 	Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * 	Clockwork Front-end Class
 */
class Clockwork_Fastdraw_Front {


	/**
	 * 	__construct function.
	 *
	 * @access public
	 * @return void
	 */
	public function __construct() {
	}


	/**
	 * 	Include any classes we need within the front-end.
	 */
	public function includes() {
		
		// include_once( 'admin/class-clockwork_fastdraw-meta-box.php' );
	}


	/**
	 * 	Admin only css
	 */
	public function front_enqueue_scripts() {

		wp_enqueue_style( 'clockwork-fastdraw-front', CLOCKWORK_FASTDRAW_CSS . '/style.css' );
	}
}

new Clockwork_Fastdraw_Front();