<?php

add_action( 'wp_enqueue_scripts', 'from_scratch_scripts' );
function from_scratch_scripts() 
{
	if(is_child_theme()){
		wp_enqueue_style('parent-style',trailingslashit(get_template_directory_uri()) . 'style.css' );
	}
	wp_enqueue_style( 'main_style', get_stylesheet_uri() );
}

add_action( 'widgets_init', 'from_scratch_widgets_init' );
function from_scratch_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Main Sidebar', 'from-scratch' ),
		'id'            => 'sidebar',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'from-scratch' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
	) );
}

add_action('after_setup_theme','from_scratch_register_my_menu');
function from_scratch_register_my_menu() {
    register_nav_menu('primary','Primary Menu');
	register_nav_menu('secondary','Secondary Menu');
}

add_action('after_setup_theme','from_scratch_theme_setup');
function from_scratch_theme_setup(){
    add_theme_support( 'title-tag' );
	add_theme_support('html5',array('comment-list','comment-form','search-form','gallery','caption'));
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 150,150 );
}

require get_template_directory() . '/inc/template-tags.php';