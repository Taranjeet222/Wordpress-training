<?php
/**
 * Plugin Name: Display Github Contributors
 * Description: Plugin to display a repository's Github contributors.
 * Version: 1.0.0
 * Author: Taranjeet
 */
add_shortcode('dghc', 'dghc_display_shortcode');
function dghc_display_shortcode( $attributes){
    if( !isset($attributes['repository']) ){
        return 'Repository not specified';
    }
    $contributors = dghc_get_repository_contributors(
        $attributes['repository']   
    );
    ob_start();
    include plugin_dir_path(__FILE__).'templates/shortcode.php';
    return ob_get_clean();
}

function dghc_get_repository_contributors( $repo ){
    $cached = get_transient('dghc_contributors_'.$repo);
    if(false !== $cached){
        return json_decode($cached);
    }
    $response = wp_remote_get("https://api.github.com/repos/".$repo."/contributors");
    $cacheable = $response['body'];
    set_transient('dghc_contributors_'.$repo,$cacheable,60*60*6);
    return json_decode($cacheable);
}
add_action('wp_enqueue_scripts','dghc_enqueue_stylesheet');
function dghc_enqueue_stylesheet(){
    wp_enqueue_style(
        'dghc-style',
        plugins_url('dghc-style.css',__FILE__)
    );
}

include plugin_dir_path(__FILE__).'widget.php';