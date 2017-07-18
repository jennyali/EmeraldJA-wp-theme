<?php /* Template Name: About Page */ ?>

<?php
/**
 * The template for the ABOUT PAGE
 *
 * 
 * @package EmeraldJA
 */

 // CUSTOM FIELDS
 $display_about_hero_section    = get_field('display_about_hero_section');
 $about_hero_background_image   = get_field('about_hero_background_image');
 $about_hero_title_text         = get_field('about_hero_title_text');
 $display_about_hero_button     = get_field('display_about_hero_button');
 $about_hero_button_text        = get_field('about_hero_button_text');
 $about_hero_button_link        = get_field('about_hero_button_link');

get_header(); ?>

    <main>
        
        <?php if( $display_about_hero_section == true ) : ?>

        <!-- HERO IMAGE - (optional / adjustible via the PAGE named 'about')
        =======================================================================-->
        <section id="about-page__hero-img" class="hero-img" style="background-image: url('<?php echo $about_hero_background_image[ 'url' ]; ?>');">
            <div class="container">
                <div class="row">

                    <div class="col-sm-6 hero-img__caption">

                        <p class="hero-img__title">
                            <?php echo $about_hero_title_text; ?>
                        </p>

                        <?php if( $display_about_hero_button == true ) : ?>

                            <a href="<?php echo $about_hero_button_link; ?>" class="btn btn-default btn-custom-4"><?php echo $about_hero_button_text; ?></a>

                        <?php endif; ?>
                    
                    </div><!-- column -->

                </div><!-- .row -->
            </div><!-- .container-fluid -->
        </section><!-- #about-page__hero-img -->

        <?php endif; ?>
        
        <!-- CONTENT
        =======================================================================-->
        <section class="container about-page__content about-content-section">

            <?php while ( have_posts() ) : the_post(); ?>

            <div class="row">
                    <div class="col-sm-12 headline about-page__content__title">

                        <h2><?php the_title(); ?></h2>

                        <div class="headline__divider">
                            <hr>
                        </div>

                    </div><!-- .headline -->
            </div><!-- .row -->

            <div class="row">
                <div class="col-sm-12 about-page__content__text">

                    <p>
                       <?php the_content(); ?>
                    </p>

                </div>
            </div><!-- .row -->

            <? endwhile; ?>

        </section><!-- .container -->

        <!-- EXTRA CONTENT
        =======================================================================-->

    </main>

<?php

get_footer(); ?>