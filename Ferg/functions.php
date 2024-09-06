<?php



function bamshrown_theme_support() {

    // Adding title dynamically
    add_theme_support('title-tag');
    // Adding Logo
    add_theme_support('custom-logo');
    // Adding Featured Image
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'bamshrown_theme_support');

// Adding menus

function bamshrown_menus() {

    $locations = array(
        'primary' => 'Desktop Primary Main Menu',
        'footer' => 'Footer Menu Items'
    );

    register_nav_menus($locations);
}

add_action('init', 'bamshrown_menus');

// Bringing in the header code - style, boostrap, fontawesome etc
function bamshrown_register_styles() {

    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('bamshrown-style', get_template_directory_uri(). '/assets/css/style.css', array('bamshrown-bootstrap'), $version, 'all');
    wp_enqueue_style('bamshrown-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1', 'all');
    wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.8.1/css/all.css');

}

add_action('wp_enqueue_scripts', 'bamshrown_register_styles');


// Bringing in footer code
function bamshrown_register_scripts() {

    $version = wp_get_theme()->get('Version');
    wp_enqueue_script('bamshrown-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    wp_enqueue_script('bamshrown-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
    wp_enqueue_script('bamshrown-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '3.4.1', true);
    wp_enqueue_script('bamshrown-main', get_template_directory_uri().'/assets/javascript/main.js', array(), $version, true);

}

add_action('wp_enqueue_scripts', 'bamshrown_register_scripts');

// Function for bringing in custom widgets

function bamshrown_widget_areas() {

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',

        ),
        array(
            'name' => 'Sidebar Area',
            'id' => 'sidebar-1',
            'description' => 'This is the sidebar area'
        )
    );


}   

add_action('widgets_init', 'bamshrown_widget_areas');



?>