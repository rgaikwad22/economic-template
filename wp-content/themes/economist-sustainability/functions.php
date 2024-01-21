<?php
function enque_scripts()
{
    wp_enqueue_style("main_style", get_stylesheet_uri());
    wp_enqueue_style("style_file", get_template_directory_uri() . "/assets/css/style.css");
    wp_enqueue_script("script.js", get_template_directory_uri() . "/assets/js/script.js");
}

add_action("wp_enqueue_scripts", "enque_scripts");
// add_theme_support('post-thumbnails');

function register_prixima()
{
    register_nav_menus(
        array(
            "primary-menu" => __("Primary Menu"),
            "header-menu" => __("Header Navigation Menu"),
            "footer-menu" => __("Footer Navigation Menu")
        )
    );
}
add_action("init", "register_prixima");

function remove_editor_from_pages() {
    remove_post_type_support('page', 'editor');
    remove_post_type_support('page', 'comments');
    remove_post_type_support('page', 'author');
    remove_post_type_support('page', 'revisions');
}

add_action('init', 'remove_editor_from_pages');

function remove_editor_from_posts() {
    remove_post_type_support('speaker', 'comments');
}

add_action('init', 'remove_editor_from_posts');

function register_my_post_type_project()
{
    register_post_type('speaker', array(
        'labels' => array(
            'name' => __('Speaker'),
            'singular_name' => __('speaker'),
        ),
        'public' => true,
        'show_ui' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'has_archive' => true,
        'show_in_menu' => true,
        'menu_position' => 4,
        'supports' => array('title', 'editor')
    )
    );
}

add_action('init', 'register_my_post_type_project');

function custom_taxonomy_sport()
{
    $labels = array(
        'name' => 'Sports',
        'singular_name' => 'Sports',
        'menu_name' => 'Sports'
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_admin_column' => true,
        'show_in_quick_edit' => true,
    );

    register_taxonomy('sports', array('product'), $args);
}

add_action('init', 'custom_taxonomy_sport');
?>