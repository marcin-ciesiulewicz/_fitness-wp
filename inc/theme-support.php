<?php
/**
 * 
 * Theme Support
 * 
 * @package Starter Pack
 * 
 */

 //featured images
 add_theme_support( 'post-thumbnails' );

 //menus
 function register_menus(){
     register_nav_menus( array(

        'primary'   => esc_html__( 'Primary', 'starter-pack' )

     ) );
 }
 add_action( 'after_setup_theme', 'register_menus' );

//html 5 support
add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));