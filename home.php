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

    <div class="container">
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

                <p class="post-page-navigation">

                    <?php previous_posts_link( "Recent Posts" ); ?>

                    <?php next_posts_link( "Older Posts" ); ?>

                </p>

            </div><!-- .col -->
            <div class="col-sm-3">

            <!-- SIDEBAR - 'sidebar-blog-page'
            ======================================================================-->

                <?php dynamic_sidebar( 'sidebar-blog-page' ); ?>

            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->

<?php get_footer(); ?>