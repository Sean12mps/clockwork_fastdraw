<?php 
// 	Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * 	Clockwork Admin Class
 */
class Clockwork_Fastdraw_MetaBox {


	/**
	 * 	__construct function.
	 *
	 * @access public
	 * @return void
	 */
	public function __construct() {

		// 	Includes
		$this->includes();

		// 	Inits
		$this->metabox_default = new Metabox_Functions;

		// 	Actions
		add_action( 'add_meta_boxes', array( $this, 'add_meta_boxes' ), 30 );
	}


	/**
	 * 	Metabox Includes
	 */
	public function includes() {

		include_once( 'clockwork_fastdraw-meta-box-functions.php' );
	}


	/**
	 * 	Add Meta boxes
	 */
	public function add_meta_boxes() {

		// 	Actions
		$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;

		$template_file = get_post_meta( $post_id, '_wp_page_template', TRUE );

		if ( $template_file == 'template-clockwork_fastdraw_archive.php' ) {

			add_meta_box( 'clockwork_fastdraw', __( 'Clockwork FastDraw', 'clockwork_fastdraw' ), 'Metabox_Functions::output_metabox_clockwork_interface', $screen );
		}
	}
}

new Clockwork_Fastdraw_MetaBox();