<?php
/**
 * This template is for Blog Page to display standard wordpress posts.
 *
 *===========  NOTES ===================
 * 
 *
 * @package EmeraldJA
 */

get_header(); ?>

    <div class="container container--padding">
        <div class="row">
            <div class="col-sm-9 page-content__wrapper">

            <!-- CONTENT
            =====================================================================-->

                <?php if( have_posts() ): ?>

                    <?php while( have_posts() ): the_post() ?>

                        <?php get_template_part( 'template-parts/post/content' , 'blog' ); ?>

                    <?php endwhile; ?>

                <?php else : ?>

                    <article>

                        <h2>Sorry there where no blog posts found.</h2>

                    </article>

                <?php endif; ?>

                    <?php the_posts_pagination( array(
                            'mid_size'  => 2,
                            'prev_text' => __( '&#x000AB; Previous', 'textdomain' ),
                            'next_text' => __( 'Next &#x000BB;', 'textdomain' ),
                        ) ); 
                    ?>


            </div><!-- .col -->
            <div class="col-sm-3">

            <!-- SIDEBAR - 'sidebar-blog-page'
            ======================================================================-->

                <?php get_sidebar(); ?>

            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->

<?php get_footer(); ?>