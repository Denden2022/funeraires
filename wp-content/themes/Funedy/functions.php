<?php

/*****Lecture des fichiers et import des bibliothèques*****/
function funedy_enqueue() {
wp_enqueue_style( 'theme-funedy-style', get_template_directory_uri(). '/assets/styles/funedy.css' );
wp_enqueue_script( 'jquery' );
    // Enqueue custom script.js
wp_enqueue_script('modale-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), 1.1, true);
}
add_action( 'wp_enqueue_scripts', 'funedy_enqueue' );


/*****création du menu Header et Footer*****/
function register_my_menu(){
    register_nav_menus( array(
        'main' => 'Menu Principal',
        'footer' => 'Bas de page',
    ) );
    }
    add_action( 'after_setup_theme', 'register_my_menu' );


?>