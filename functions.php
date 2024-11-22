<?php 
// Enqueue Theme Resources
function food_truck_theme_load_resources() {
    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), null);
    
    // Enqueue Theme's Main Stylesheet
    wp_enqueue_style('stylesheet', get_template_directory_uri() . '/style.css', array(), null);

    // Enqueue Font Awesome
    wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/56a699bfcb.js', array(), null, false);

    // Enqueue Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap', array(), null);

    // Enqueue Additional Google Fonts
    wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap', array(), null);

    // Enqueue Bootstrap Bundle JS
    wp_enqueue_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'food_truck_theme_load_resources');

// Enable Post Thumbnails
add_theme_support('post-thumbnails');

// Register Menus
function food_truck_theme_register_menus() {
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'gg'),
    ));
}
add_action('after_setup_theme', 'food_truck_theme_register_menus');

function register_custom_menus() {
    register_nav_menu('primary-menu', 'Primary Navigation Menu');
}
add_action('after_setup_theme', 'register_custom_menus');

// Remove Gutenberg Editor for Pages
function food_truck_theme_remove_gutenberg() {
    remove_post_type_support('page', 'editor');
}
add_action('init', 'food_truck_theme_remove_gutenberg');

// Enqueue Theme's Stylesheet
function theme_enqueue_styles() {
    wp_enqueue_style('theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
