<?php
/*
Plugin Name: Wordpress Admin Controller
Plugin URI: http://rachelmccollin.co.uk
Description: This plugin supports the tutorial in wptutsplus. It customizes the WordPress login screen.
Version: 1.0
Author: Rachel McCollin
Author URI: http://rachelmccollin.com
License: GPLv2
*/

// Rename Posts to News in Menu
/*function rename_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'News';
    $submenu['edit.php'][5][0] = 'News Items';
    $submenu['edit.php'][10][0] = 'Add News Item';
}
add_action( 'admin_menu', 'rename_label' );

// Edit submenus
function rename_object_label() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'News';
    $labels->singular_name = 'News Item';
    $labels->add_new = 'Add News Item';
    $labels->add_new_item = 'Add News Item';
    $labels->edit_item = 'Edit News Item';
    $labels->new_item = 'News Item';
    $labels->view_item = 'View News Item';
    $labels->search_items = 'Search News Items';
    $labels->not_found = 'No News Items found';
    $labels->not_found_in_trash = 'No News Items found in Trash';
}
add_action( 'admin_menu', 'rename_object_label' );

function remove_menus(){
  
  //remove_menu_page( 'index.php' );                  //Dashboard
  //remove_menu_page( 'edit.php' );                   //Posts
  //remove_menu_page( 'upload.php' );                 //Media
  //remove_menu_page( 'edit.php?post_type=page' );    //Pages
  //remove_menu_page( 'edit-comments.php' );          //Comments
  remove_menu_page( 'themes.php' );                 //Appearance
  remove_menu_page( 'plugins.php' );                //Plugins
  //remove_menu_page( 'users.php' );                  //Users
  remove_menu_page( 'tools.php' );                  //Tools
  //remove_menu_page( 'options-general.php' );        //Settings
  
  remove_menu_page( 'edit.php?post_type=imagemap' );   //imagemap
  remove_menu_page( 'edit.php?post_type=imagemap_area' );   //imagemap area
}
add_action( 'admin_menu', 'remove_menus' );*/

?>