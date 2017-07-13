
	
<?php /* Template Name: Portfolio Page */ ?>

<?php //# Full Page no sidebar // ?>

<?php get_header(); ?>

    <div class="container">
        <main class="row">

            <!-- PORTFOLIO GALLERY
            =======================================================================-->
            <section class="col-sm-12">

                <h2><?php the_title(); ?></h2>

                <img src="<?php echo $test_category_image; ?>" class="img-responsive">

                    <div>
                        <?php

                            $parent_cat = get_category_by_slug( 'portfolio' );

                            $cats = get_categories();

                            //===========  LOOP TO GO THROUGH CHILD CATEGORIES =================//
                            foreach( $cats as $category){

                                if (cat_is_ancestor_of( $parent_cat, $category )) : ?>

                                    <div class="col-sm-4 port-gallery__item">

                                        <?php 

                                            $taxonomy = $category->taxonomy;
                                            $term_id = $category->cat_ID;

                                            $test_category_image = get_field( 'category_image', $taxonomy . '_' . $term_id);
                                        
                                        ?>

                                        <figure class="port-gallery__item__thumbnail">

                                            <img src="<?php echo $test_category_image; ?>" class="img-responsive">

                                        </figure><!-- .port-gallery__item__thumbnail -->

                                        <div class="port-gallery__item__text">

                                            <a href="<?php echo get_category_link($category->cat_ID); ?>"><h4><?php echo $category->name; ?></h4></a>

                                        <?php echo category_description($category); ?>

                                        </div><!-- .port-gallery__item__text -->
                                    </div><!-- .port-gallery__item -->

                                <?php endif; 
                            }
                        ?>
                    </div>

                        <!-- PAGINATION
                        ================================================================-->

                            <ul class="pagination hidden">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                            </ul><!-- .pagination -->

                    </div><!-- .row -->


            </section><!-- .col -->

        </main><!-- .row -->
    </div><!-- .container -->

<?php get_footer(); ?>