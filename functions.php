<?php
	
add_filter( 'show_admin_bar', '__return_false' );

register_nav_menu( 'primary', __( 'Default', 'ltg' ) );
?>