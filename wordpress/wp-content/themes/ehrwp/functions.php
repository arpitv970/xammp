<?php
function your_theme_setup() {
    // Add support for title tag
    add_theme_support( 'title-tag' ); 
    // Register a navigation menu
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'your-theme' ),
    ));
}
add_action( 'after_setup_theme', 'your_theme_setup' );



    add_theme_support('post-thumbnails');

?>