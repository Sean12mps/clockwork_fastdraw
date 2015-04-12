<?php 
// 	Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

class Metabox_Functions {

	public function output_metabox_clockwork_interface(){

		global $post;

		$post_id = $post->ID;

		$fastdraw_post_type = ( get_post_meta( $post_id, 'fastdraw_post_type', true ) ? get_post_meta( $post_id, 'fastdraw_post_type', true ) : 'post' );
		$fastdraw_post_to_show = ( get_post_meta( $post_id, 'fastdraw_post_to_show', true ) ? get_post_meta( $post_id, 'fastdraw_post_to_show', true ) : 0 );

		
		$temp = '
			<p>Post type</p>
			<p><input type="text" name="fastdraw_post_type" value="'. $fastdraw_post_type .'"></p>
			<br>

			<p>Post to show</p>
			<p><input type="number" name="fastdraw_post_to_show" value="'. $fastdraw_post_to_show .'"></p>
			<br>

			<p>Transition Module</p>
			<p>	<select name="fastdraw_transition" id="">
					<option value=""></option>
					<option value="">Transition type 1</option>
					<option value="">Transition type 2</option>
					<option value="">Transition type 3</option>
				</select>
			</p>
		';

		echo $temp;
	}

}