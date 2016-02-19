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

add_action( 'init', 'register_theme_menus' );

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));

function create_widget($name, $id, $description)
{
	register_sidebar(array(
		'name' => __( $name ),
		'id' => $id,
		'description' => __( $description ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
}

create_widget("First Section", "first-section", "Displays on the first section of the website.");
create_widget("Second Section", "second-section", "Displays on the second section of the website.");
create_widget("Third Section", "third-section", "Displays on the third section of the website.");
create_widget("Fourth Section", "fourth-section", "Displays on the fourth section of the website.");
create_widget("Fifth Section", "fifth-section", "Displays on the fifth section of the website.");

?>