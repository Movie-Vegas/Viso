


<?php

/**
* Created by IntelliJ IDEA.
* User: Ayettey
* Date: 5/27/2019
* Time: 2:51 PM
 *
 * The functions file behaves like a WordPress Plugin, adding features and functionality to Theme
*/


function invise_scripts() {



	// Theme stylesheet.
	wp_enqueue_style( 'invise', get_stylesheet_uri() );

	// Theme stylesheet.
	wp_enqueue_style( 'invise', get_template_directory_uri() . '/style.css', array( 'invise' ), 'all' );

	wp_enqueue_script( 'inviseEventListener', get_template_directory_uri() . '/js/inviseEventListener.js', array(), 'all', true );



}
add_action( 'wp_enqueue_scripts', 'invise_scripts' );


