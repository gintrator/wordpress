<?php
 
	//Add support for WordPress 3.0's custom menus
	add_action( 'init', 'register_my_menu' );
 
	//Register area for custom menu
	function register_my_menu() {
		register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
	}

	// split content at the SplitContentIntoTwoColumns string and return an array
	function split_content() {
		global $more;
		$more = true;
		$content = preg_split('/SplitContentIntoTwoColumns/i', get_the_content('more'));
		for($c = 0, $csize = count($content); $c < $csize; $c++) {
			$content[$c] = apply_filters('the_content', $content[$c]);
		}
		return $content;
	}
 
?>