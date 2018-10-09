<?php

/**
 * 
 * Enqueue Front-end assets
 * 
 * @package Starter Pack
 * 
 */

 function load_scripts() {

    // Remove font awesome style from plugins
    wp_deregister_style( 'font-awesome' );
    wp_deregister_style( 'fontawesome' );

    //css styles
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', false, '4.1.1', 'all' );
    wp_enqueue_style( 'main-styles', get_template_directory_uri() . '/css/main.css', 'all' );

    //icons
    wp_enqueue_style( 'dashicon' );
    wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css', false, '5.2.0', 'all' );
    wp_enqueue_style( 'line-icons', get_template_directory_uri() . '/css/simple-line-icons.css', false, '2.4.0', 'all' );


    //scripts
    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', false, '1.11.3', true );

    wp_enqueue_script( 'popper-js', get_template_directory_uri() . '/js/popper.min.js', array(), '', true );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '4.1.1', true );
    wp_enqueue_script( 'my-scripts', get_template_directory_uri() . '/js/app.js', array(), '1.0.0', true );

 }

 add_action( 'wp_enqueue_scripts', 'load_scripts');