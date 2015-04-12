<?php
/*
 * Template Name: Clockwork_Fastdraw_Archive
 */

// 	Remove original loop
remove_action('calibrefx_loop', 'calibrefx_do_loop');


// 	Replace original loop
function childfx_do_loop(){

	$args = array(

		//Type & Status Parameters
		'post_type'		=>		'project',

		//Order & Orderby Parameters
		'order'			=>		'DESC',
		'orderby'		=>		'date',

		//Pagination Parameters
		'posts_per_page'=>		10,
	);

	$query = new WP_Query( $args );

	if ( $query->have_posts() ) {

		echo '	<div class="row clockwork-ajax">';

		while ( $query->have_posts() ) {

			$query->the_post();
			
			echo '	<div class="col-md-12">
						<p><a href="'. get_the_ID() .'" class="ajax-link">'. get_the_title() .'</a></p>
					</div>';
		} // end while

		echo '	</div>';
	} // end if
}
add_action('calibrefx_loop', 'childfx_do_loop');


calibrefx();