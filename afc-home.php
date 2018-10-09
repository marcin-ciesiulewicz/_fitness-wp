<?php
/*
Template Name: AFC Home
*/
?>

<?php get_header(); ?>

<main>

    <?php if( have_rows('home') ): ?>


        <?php while( have_rows('home') ): the_row(); ?>


            <?php if( get_row_layout() == 'services' ): ?>

                <section class="section-services">

                    <div class="container">
                        <div class="row">
                        
                        <div class="col-md-3">
                            <div class="section-services__container">

                            <i class="<?php the_sub_field('icon_1'); ?> section-services__icon"></i>
                            <h2 class="section-services__heading"><?php the_sub_field( 'title_1' ); ?></h2>
                            <p class="section-services__text"><?php the_sub_field( 'snippet' ); ?></p>
                            <a href="<?php the_sub_field( 'btn1_url' ); ?>" class="section-services__link"><?php the_sub_field( 'btn1_text' ); ?> &rarr;</a>
                            
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="section-services__container">

                            <i class="<?php the_sub_field('icon_2'); ?> section-services__icon"></i>
                            <h2 class="section-services__heading"><?php the_sub_field( 'title_2' ); ?></h2>
                            <p class="section-services__text"><?php the_sub_field( 'snippet_2' ); ?></p>
                            <a href="<?php the_sub_field( 'btn2_url' ); ?>" class="section-services__link"><?php the_sub_field( 'btn2_text' ); ?> &rarr;</a>
                            
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="section-services__container">

                            <i class="<?php the_sub_field('icon_3'); ?> section-services__icon"></i>
                            <h2 class="section-services__heading"><?php the_sub_field( 'title_3' ); ?></h2>
                            <p class="section-services__text"><?php the_sub_field( 'snippet_3' ); ?></p>
                            <a href="<?php the_sub_field( 'btn3_url' ); ?>" class="section-services__link"><?php the_sub_field( 'btn3_text' ); ?> &rarr;</a>
                            
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="section-services__container">

                            <i class="<?php the_sub_field('icon_4'); ?> section-services__icon"></i>
                            <h2 class="section-services__heading"><?php the_sub_field( 'title_4' ); ?></h2>
                            <p class="section-services__text"><?php the_sub_field( 'snippet_4' ); ?></p>
                            <a href="<?php the_sub_field( 'btn4_url' ); ?>" class="section-services__link"><?php the_sub_field( 'btn4_text' ); ?> &rarr;</a>
                            
                            </div>
                        </div>
                        
                        </div>
                    </div>

                </section>

            <?php endif; ?>

            <?php if( get_row_layout() == 'info_1' ): ?>
                <section class="section-info-1">

                    <div class="container">
                        <div class="row">

                        <div class="col-md-4">
                            <div class="section-info-1__container">
                            <h2 class="section__heading">
                                <span class="small"><?php  the_sub_field( 'title_small_1' ); ?></span>
                                <span class="big"><?php  the_sub_field( 'title_big_1' ); ?></span>
                            </h2>
                            <img src="<?php  the_sub_field( 'icon_small_1' ); ?>" alt="" class="section-info-1__logo-mini">
                            <p class="section-info-1__text"><?php  the_sub_field( 'content_text_1' ); ?></p>
                            <a href="<?php  the_sub_field( 'btn1_url' ); ?>" class="section-info-1__link"><?php  the_sub_field( 'btn1_text' ); ?></a>
                            </div>
                        </div>
                        
                        <div class="col-md-8">
                            <img src="<?php the_sub_field( 'img_right' ); ?>" alt="" class="section-info-1__img">
                        </div>
                        
                        
                        </div>
                        
                        <div class="row">
                        
                        <div class="col-md-8">
                            <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/img/pick_2.png" alt="" class="section-info-1__img">
                        </div>

                        <div class="col-md-4">
                            <div class="section-info-1__container">
                            <h2 class="section__heading">
                                <span class="small"><?php  the_sub_field( 'title_small_2' ); ?></span>
                                <span class="big"><?php  the_sub_field( 'title_big_2' ); ?></span>
                            </h2>
                            <img src="<?php  the_sub_field( 'icon_small_2' ); ?>" alt="" class="section-info-1__logo-mini">
                            <p class="section-info-1__text"><?php  the_sub_field( 'content_text_2' ); ?></p>
                            <a href="<?php  the_sub_field( 'btn2_url' ); ?>" class="section-info-1__link"><?php  the_sub_field( 'btn2_text' ); ?></a>
                            </div>
                        </div>


                        </div>
                    </div>

                </section>
            <?php endif; ?>

            <?php if( get_row_layout() == 'info_2' ): ?>
                <section class="section-info-2">

                    <div class="container">
                        <div class="row">

                        <div class="col-md-4">
                            <div class="section-info-2__container">

                            <div class="ro-top">
                                <img src="<?php  the_sub_field( 'img_top_left' ); ?>" alt="" class="section-info-2__img">
                            </div>

                            <div class="ro-bottom ro-bottom--white">
                                <div class="section__heading">
                                <span class="small"><?php  the_sub_field( 'title_top_small_left' ); ?></span>
                                <span class="big"><?php  the_sub_field( 'title_top_big_left' ); ?></span>
                                </div>
                                <p class="ro-bottom--white-text"><?php  the_sub_field( 'content_top_left_text' ); ?></p>
                                <i class="<?php the_sub_field( 'icon_top' ); ?>"></i>
                            </div>

                            </div>

                        </div>
                        
                        <div class="col-md-8">
                            <div class="section-info-2__container">

                            <div class="ro-top">
                                <img src="<?php the_sub_field( 'img_top_right' ); ?>" alt="" class="section-info-2__img">
                            </div>

                            <div class="ro-bottom ro-bottom--green u-left-shadow">
                                <div class="section__heading">
                                <span class="small"><?php the_sub_field( 'title_top_small_right' ); ?></span>
                                <span class="big"><?php the_sub_field( 'title_top_big_right' ); ?></span>
                                </div>

                                <p class="ro-bottom--green-text"><?php the_sub_field( 'content_top_right_text' ); ?></p>

                            </div>

                            </div>
                        </div>


                        </div>
                        <div class="row">
                        
                        <div class="col-md-8">
                            <div class="section-info-2__container">

                            <div class="ro-top">
                                <img src="<?php the_sub_field( 'img_bottom_left' ); ?>" alt="" class="section-info-2__img">
                            </div>

                            <div class="ro-bottom ro-bottom--green">
                                <div class="section__heading">
                                <span class="small"><?php the_sub_field( 'title_bottom_small_left' ); ?></span>
                                <span class="big"><?php the_sub_field( 'title_bottom_big_left' ); ?></span>
                                </div>
                                <p class="ro-bottom--green-text"><?php the_sub_field( 'content_bottom_left_text' ); ?></p>
                                <i class="<?php the_sub_field( 'icon_bottol_left' ); ?>"></i>
                            </div>

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="section-info-2__container">

                                <div class="ro-top">
                                <img src="<?php the_sub_field( 'img_bottom_right' ); ?>" alt="" class="section-info-2__img">
                                </div>

                                <div class="ro-bottom ro-bottom--white">
                                <div class="section__heading">
                                    <span class="small"><?php the_sub_field( 'title_bottom_small_right' ); ?></span>
                                    <span class="big"><?php the_sub_field( 'title_bottom_big_right' ); ?></span>
                                </div>
                                <p class="ro-bottom--white-text"><?php the_sub_field( 'content_bottom_right' ); ?></p>
                                <i class="<?php the_sub_field( 'icon_bottol_right' ); ?>"></i>
                                </div>

                            </div>

                            </div>

                        </div>
                    </div>

                </section>
            <?php endif; ?>

            <?php if( get_row_layout() == 'parallax' ): ?>
                <section class="section-banner">

                    <div class="container">
                        <div class="row">

                        <div class="section-banner__text-box">
                            <h2 class="section-banner__heading"><?php  the_sub_field( 'parallax_title' ); ?></h2>
                            <p class="section-banner__subheading"><?php  the_sub_field( 'parallax_text' ); ?></p>
                        </div>

                        </div>
                    </div>

                    <div class="section-banner__fill"></div>

                </section>
            <?php endif; ?>


        <?php endwhile; ?>

        <?php    else : ?>

    <?php endif; ?>


</main>

<?php get_footer(); ?>