<?php

add_action( 'after_setup_theme', 'wppn_setup' );
    if ( ! function_exists( 'wppn_setup' ) ):
        function wppn_setup() {  
					register_nav_menus( array(
					'primary' => __( 'Primary Menu', 'theme' ),
					'secondary' => __( 'Secondary Menu', 'theme'),
					) );
        } endif;

require_once get_template_directory() . '/inc/wp_bootstrap_navwalker.php';

?>