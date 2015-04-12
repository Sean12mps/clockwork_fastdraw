<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * Dashboard. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              cl0ckw0rks.com
 * @since             1.0.0
 * @package           clockwork_fastdraw
 *
 * @wordpress-plugin
 * Plugin Name:       Clockwork Fastdraw
 * Plugin URI:        http://cl0ckw0rks.com/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress dashboard.
 * Version:           1.0.0
 * Author:            Sean Michael - Blitzkrieg
 * Author URI:        http://cl0ckw0rks.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       clockwork_fastdraw-name
 */


// 	Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/*	Class Clockwork
 */
class Clockwork_Fastdraw {


	/**
	 * 	@var string
	 */
	public $version = '1.0.0';


	/**
	 * 	Single Instance
	 */
	protected static $_instance = null;


	/**
	 * 	Constructor
	 */
	public function __construct() {

		// 	Define Constants
		$this->define_constants();
		$this->includes();

		// 	Inits

		// 	Actions

	}


	/**
	 * 	Instance
	 */
	public static function instance() {

		if ( is_null( self::$_instance ) ) {

			self::$_instance = new self();
		}

		return self::$_instance;
	}


	/**
	 * 	Define Constants
	 */
	private function define_constants() {

		// 	Define root directory constant
		! defined( 'CLOCKWORK_FASTDRAW' ) && define( 'CLOCKWORK_FASTDRAW', plugin_dir_path( dirname( __FILE__ ) ) );

		// 	Define assets directory constant
		! defined( 'CLOCKWORK_FASTDRAW' ) && define( 'CLOCKWORK_FASTDRAW', plugin_dir_path( dirname( __FILE__ ) . 'assets/' ) );
		! defined( 'CLOCKWORK_FASTDRAW_JS' ) && define( 'CLOCKWORK_FASTDRAW_JS', plugin_dir_path( dirname( __FILE__ ) . 'assets/js/' ) );
		! defined( 'CLOCKWORK_FASTDRAW_CSS' ) && define( 'CLOCKWORK_FASTDRAW_CSS', plugin_dir_path( dirname( __FILE__ ) . 'assets/css/' ) );

		// Define includes directory constant
		! defined( 'CLOCKWORK_FASTDRAW_INC' ) && define( 'CLOCKWORK_FASTDRAW_INC', plugin_dir_path( dirname( __FILE__ ) . 'includes/' ) );

		// Define templates category
		! defined( 'CLOCKWORK_FASTDRAW_TEMP' ) && define( 'CLOCKWORK_FASTDRAW_TEMP', plugin_dir_path( dirname( __FILE__ ) . 'templates/' ) );
	}


	/**
	 * Include classes.
	 */
	public function includes() {

		// 	Functions
		include_once( 'includes/fastdraw-functions.php' );

		// 	Classes
		include_once( 'includes/fastdraw-core.php' );

		// 	Classes for admin
		if( is_admin() ){
			include_once( 'includes/class-fastdraw-admin.php' );
		}

		// 	Classes for front
		include_once( 'includes/class-fastdraw-front.php' );
		
		// 	Classes we need during ajax requests
		// if ( defined( 'DOING_AJAX' ) ) {
		// 	include_once( 'includes/class-fastdraw-ajax.php' );
		// }
	}
}


function CRK_Fastdraw() {

	return Clockwork_Fastdraw::instance();
}

$GLOBALS['clockwork_fastdraw'] = new Clockwork_Fastdraw();