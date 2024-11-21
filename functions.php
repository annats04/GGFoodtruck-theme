<?php 
function gg_load_resources(){
    wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css");
    wp_enqueue_style("stylesheet", get_template_directory_uri() . "/style.css");
    wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/56a699bfcb.js');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
    wp_enqueue_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), null, true);
    wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap');
}

add_action("wp_enqueue_scripts", "gg_load_resources");

add_theme_support( 'post-thumbnails' );

function gg_remove_gutenberg(){
    remove_post_type_support("page", "editor");
}
add_action("init", "gg_remove_gutenberg");

function gg_register_menus() {
    register_nav_menus( array(
        'primary-menu' => __( 'Primary Menu', 'gg' ),
    ));
}

add_action( 'after_setup_theme', 'gg_register_menus' );


