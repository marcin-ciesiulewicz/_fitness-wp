<?php

/**
 *  Functions
 * 
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * 
 * @package Starter Pack
 * 
 */

//walker
require get_template_directory() . '/inc/walker.php';

//b.walker
require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';

//theme_support
require get_template_directory() . '/inc/theme-support.php';

//enqueue
require get_template_directory() . '/inc/eqnqueue.php';
