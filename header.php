<?php

/**
 * Header
 * 
 * @package Starter Pack
 */

?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php if(is_singular() && pings_open( get_queried_object() )): ?>
    <link rel="pingback" href="<?php bloginfo( "pingback_url" ); ?>">
    <?php endif; ?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php if( have_rows('header') ): ?>


        <?php while( have_rows('header') ): the_row(); ?>


                <?php if( get_row_layout() == 'baner' ): ?>

                    <header class="header js-parallax" style="background: url(<?php the_sub_field('baner_img'); ?>) no-repeat">
                        <div class="container-fluid">

                            <div class="header__navbar-container">
                                <nav class="navbar navbar-expand-lg navbar-dark header__navbar">
                                    <a class="navbar-brand header__logo" href="#"><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/logo.png" alt="logo"></a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header__nav" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse justify-content-end" id="header__nav">
                                        <!-- <ul class="navbar-nav header__navbar-list">

                                            <li class="nav-item header__navbar-item active">
                                                <a class="nav-link header__navbar-link" href="#">Home <span class="sr-only">(current)</span></a>
                                            </li>

                                            <li class="nav-item header__navbar-item">
                                                <a class="nav-link header__navbar-link" href="#">O nas</a>                                    
                                            </li>

                                            <li class="nav-item header__navbar-item">
                                                <a class="nav-link header__navbar-link" href="#">Trenerzy</a>                                    
                                            </li>

                                            <li class="nav-item header__navbar-item dropdown">
                                                <a class="nav-link header__navbar-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usługi</a>                                    

                                                <ul role="menu" class="dropdown-menu header__dropdown-menu">
                                                
                                                    <li class="nav-item header__navbar-item dropdown-submenu">
                                                        <a class="nav-link header__navbar-link dropdown-toggle dropdown-item header__dropdown-item" href="#" data-toggle="dropdown" aria-haspopup="true">Dieta</a>

                                                        <ul class="dropdown-menu header__dropdown-menu" >
                                                            <li class="nav-item header__navbar-item" >Redukcyjna</li>
                                                        </ul>

                                                    </li>
                                                    
                                                
                                                </ul>

                                            </li>

                                            <li class="nav-item header__navbar-item">
                                                <a class="nav-link header__navbar-link" href="#">FAQ</a>                                    
                                            </li>

                                            <li class="nav-item header__navbar-item">
                                                <a class="nav-link header__navbar-link" href="#">Kontakt</a>                                    
                                            </li>

                                        </ul> -->

                                        <?php 
                                            wp_nav_menu( array(
                                                'theme_location'  => 'primary',
                                                'container'       => false,
                                                'menu_class'      => 'navbar-nav header__navbar-list',
                                                // 'walker'          =>  new wp_bootstrap_navwalker()
                                                'walker'          =>  new Walker_Nav_Primary() 
                                            ) );
                                        ?>

                                    </div>
                                </nav>
                            </div>

                        </div>

                        <div class="header__text-box">
                            <h1 class="header__title"><?php the_sub_field('baner_title'); ?> <span class="text-decoration"></span> </h1>
                            <p class="header__subtitle"><?php the_sub_field('baner_subtitle'); ?> <span class="text-decoration"></span> </p>
                        </div>

                        <div class="header__fill"></div>

                    </header>

                <?php endif; ?>

        <?php endwhile; ?>


    <?php endif; ?>
    
