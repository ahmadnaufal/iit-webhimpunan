<?php 

function theme_scripts_with_jquery()
{
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'camera_js', get_template_directory_uri() . '/js/camera.js', array( ), '', true );
	wp_enqueue_script( 'superfish_js', get_template_directory_uri() . '/js/superfish.js', array( ), '', true );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts_with_jquery' );
add_theme_support( 'menus' );


function register_theme_menus() {
	register_nav_menus(
		array(
			'header-menu' => __( 'Header Menu' )
		)
	);
}

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
?>