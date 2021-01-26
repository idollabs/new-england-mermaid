<?php

function newEnglandMermaid_Theme_Support(){
    add_theme_support( 'title-tag' );
    add_theme_support('post-thumbnails');

}

add_action('after_setup_theme', 'newEnglandMermaid_Theme_Support');

function newEnglandMermaid_menus(){

    $locations = array(
        'primary' => 'Desktop Top Menu',
        'mobile' => 'Mobile Hamburger Menu',
        'primaryBlogs' => 'Desktop Blog DropDown',
        'mobileBlogs' => 'Mobile Blog DropDown'
    );

    register_nav_menus( $locations );
}

add_action('init', 'newEnglandMermaid_menus');

function newEnglandMermaid_register_styles(){

    $version = wp_get_theme()->get('Version');

    wp_enqueue_style('newEnglandMermaidStyle',get_template_directory_uri()."/style.css",array(),$version,'all');

    wp_enqueue_style('newEnglandMermaidFontAwesome',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css",array(),'4.7.0','all');
}



add_action('wp_enqueue_scripts','newEnglandMermaid_register_styles');

function newEnglandMermaid_register_scripts(){


    wp_enqueue_script('newEnglandMermaidJs', get_template_directory_uri(  ).'/assets/js/index.js', array(), true);

   
}



add_action('wp_enqueue_scripts','newEnglandMermaid_register_scripts');

function newEnglandMermaid_widget_areas(){
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_wdiget' => '<ul class="social-list list-inline py-3 mx-auto">',
            'after_widget' => '</ul>',
            'name' => 'Sidebar Area',
            'id' => 'sidebar-1',
            'description' => 'Sidebar Widget Area'
        )
    );

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_wdiget' => '<ul class="social-list list-inline py-3 mx-auto">',
            'after_widget' => '</ul>',
            'name' => 'Footer Area',
            'id' => 'footer-1',
            'description' => 'Footer Widget Area'
        )
    );
}

add_action('widgets_init', 'newEnglandMermaid_widget_areas');

function mytheme_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );


?>

