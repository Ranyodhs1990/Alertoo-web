<?php

    /**
     * Register Custom Navigation Walker
     */
    function register_navwalker(){
        require_once get_template_directory() . '/nav-home.php';
    }
    add_action( 'after_setup_theme', 'register_navwalker' );
    
    /*Navigation Menus*/
	function register_my_menu() {
	  register_nav_menu('header-menu',__( 'Header Menu' ));
	}
	add_action( 'init', 'register_my_menu' );
	/*End*/
    
?>