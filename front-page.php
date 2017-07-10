<?php
/**
 * This template is for the front page of the site the user sees.
 *
 *
 * @package EmeraldJA
 */

get_header(); ?>

<!-- HERO - Slider
=======================================================================-->

    <?php get_template_part( 'template-parts/page/content', 'hero-slider' ); ?>


<!-- BLURB 
=======================================================================-->

    <?php get_template_part( 'template-parts/page/content', 'blurb-section' ); ?>

<!-- PORTFOLIO - gallery
=======================================================================-->

    <?php get_template_part( 'template-parts/page/content', 'portfolio-section' ); ?>

<!-- BIO EXCERPT
=======================================================================-->

    <?php get_template_part( 'template-parts/page/content', 'bio-excerpt' ); ?>


<!-- CONTACT FORM
=======================================================================-->

    <?php get_template_part( 'template-parts/page/content' , 'contact-form' ); ?>


<!-- FRONT PAGE - PAGE CONTENT
=======================================================================-->

    <?php the_post(); ?>
        
        <article class="page-content">
            
            <?php //the_content(); ?>

        </article><!-- .page-content -->

<!-- (sidebar possibly)
=======================================================================-->


<!--======================= CONTENT END ===============================-->

<?php get_footer(); ?>