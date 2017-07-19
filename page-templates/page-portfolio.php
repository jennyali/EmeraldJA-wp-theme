<?php /* Template Name: Portfolio Page */ ?>

<?php //# Full Page no sidebar // ?>

<?php get_header(); ?>

    <div class="container container--padding">
        <main class="row">

            <!-- PORTFOLIO GALLERY
            =======================================================================-->
            <section class="col-sm-12">

                <?php $args = array(
                    'taxonomy' => 'topics',
                ); 

                $mytax = get_categories($args); ?>

                <div>

                    
                    <?php //=============== LOOP FOR GETTING TAXONOMY 'TERMS' ================//
                    
                        foreach( $mytax as $tax ) { ?>

                        <article class="col-sm-6 col-md-4 port-gallery__item">

                            <?php 
                                $taxonomy = $tax->taxonomy;
                                $term_id = $tax->term_id;

                                $test_category_image = get_field( 'topic_image', $taxonomy . '_' . $term_id);
                                        
                            ?>

                                <figure class="port-gallery__item__thumbnail">
                                    
                                    <a href="<?php echo get_category_link($tax->term_id); ?>">
                                        <img src="<?php echo $test_category_image; ?>" class="img-responsive">
                                    </a>

                                </figure><!-- .port-gallery__item__thumbnail -->

                                <div class="port-gallery__item__text">

                                    <a href="<?php echo get_category_link($tax->term_id); ?>"><h4><?php echo $tax->name; ?></h4></a>

                                    <?php echo category_description($tax); ?>

                                </div><!-- .port-gallery__item__text -->

                            </article><!-- .port-gallery__item -->

                    <?php } ?>

                </div>

            </section><!-- .col -->

        </main><!-- .row -->
    </div><!-- .container -->

<?php get_footer(); ?>