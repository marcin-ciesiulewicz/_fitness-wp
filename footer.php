<?php if( have_rows('footer') ): ?>


    <?php while( have_rows('footer') ): the_row(); ?>

        <?php if( get_row_layout() == 'footer_fields' ): ?>

            <footer class="footer">

                <div class="container">
                    <div class="row">

                        <div class="col-md-4"> 
                        <h2 class="footer__heading"><?php  the_sub_field( 'title_1' ); ?></h2>
                        <p class="footer__text"><?php  the_sub_field( 'content_1' ); ?></p>
                        </div>
                        <div class="col-md-4">
                        <h2 class="footer__heading"><?php  the_sub_field( 'title_2' ); ?></h2>
                        <p class="footer__text"> <?php  the_sub_field( 'content_2' ); ?> </p>
                        </div>
                        <div class="col-md-4"> 
                        <div class="footer__list">
                            <h2 class="footer__heading"><?php  the_sub_field( 'title_3' ); ?></h2>
                            <a href="<?php  the_sub_field( 'social_ulr_1' ); ?>" class="footer__link footer__link--fb"><i class="<?php  the_sub_field( 'icon_social_1' ); ?>"></i></a>
                            <a href="<?php  the_sub_field( 'social_ulr_2' ); ?>" class="footer__link footer__link--tt"><i class="<?php  the_sub_field( 'icon_social_2' ); ?>"></i></a>
                            <a href="<?php  the_sub_field( 'social_ulr_3' ); ?>" class="footer__link footer__link--yt"><i class="<?php  the_sub_field( 'icon_social_3' ); ?>"></i></a>
                            <a href="<?php  the_sub_field( 'social_ulr_4' ); ?>" class="footer__link footer__link--pin"><i class="<?php  the_sub_field( 'icon_social_4' ); ?>"></i></a>
                        </div>
                        </div>

                    </div>
                </div>

            </footer>

        <?php endif; ?>

    <?php endwhile; ?>

    <?php else : ?>

<?php endif; ?>


<?php wp_footer(); ?>
</body>
</html>