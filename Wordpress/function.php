<?php

/**
 * All Styles / Scripts enqueue
 *
 * @return void
 */
function my_theme_enqueue_ressources() { 
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); // If in child theme
    wp_enqueue_style('bootstrap-style', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'); // Bootstrap
    wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'); // Bootstrap
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery')); // Bootstrap
    wp_enqueue_style('slick-slide', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css'); // Slick
    wp_enqueue_script('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery')); // Slick
    wp_enqueue_script('utilities', '/wp-content/themes/Divi-Child/js/utilities.js', array('jquery')); // Utilitie
    wp_localize_script( 'utilities', 'adminAjax', admin_url( 'admin-ajax.php' ) ); // Allow use of "url : adminAjax" for ajax calls in Utilities
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_ressources' );

/**
 * Call usefull php files
 * 
 * @return void
 */
function call_my_theme_functions() {
    include get_theme_file_path('/functions/custom_posts.php');
    include get_theme_file_path('/functions/shortcodes.php');
}

function testAction() {
    
    $param = $_POST['param'] != '' ? sanitize_text_field($_POST['param']) : '';

    $data = $param;
    
    wp_reset_postdata(); // Si des query ont étées faites
    wp_send_json_success( $data );
    wp_send_json_error( '' );
    
}
add_action( 'wp_ajax_testAction', 'testAction' );
add_action( 'wp_ajax_nopriv_testAction', 'testAction' );