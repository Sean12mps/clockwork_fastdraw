<?php 
// 	Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * 	Clockwork Admin Class
 */
class Clockwork_Fastdraw_Admin {


	/**
	 * 	__construct function.
	 *
	 * @access public
	 * @return void
	 */
	public function __construct() {

		// 	Includes
		$this->admin_enqueue_scripts();
		$this->includes();

		// 	Init Classes
		// $this->post_types = new Clockwork_Fastdraw_Post_Types();

		// 	Actions
		// add_action( 'init', array( $this->post_types, 'register_post_types' ), 10 );

		
	}


	/**
	 * 	Include any classes we need within admin.
	 */
	public function includes() {
		
		include_once( 'admin/class-clockwork_fastdraw-post-type.php' );
		include_once( 'admin/class-clockwork_fastdraw-meta-box.php' );
	}


	/**
	 * 	Admin only css
	 */
	public function admin_enqueue_scripts() {

		wp_enqueue_style( 'clockwork-fastdraw-admin', CLOCKWORK_FASTDRAW_CSS . '/admin-style.css' );
	}


	
}

new Clockwork_Fastdraw_Admin();