
	
<?php /* Category Portolio - For Portfolio Page */ ?>

<?php //# Full Page no sidebar // ?>



<?php get_header(); ?>

    <div class="container">
        <main class="row">

            <section class="col-sm-12">

                <h2><?php single_cat_title(); ?></h2>
                
                <?php 
                    $queried_object = get_queried_object();

                    //echo var_dump($queried_object);

                    $taxonomy = $queried_object->taxonomy;
                    $term_id = $queried_object->term_id;  

                    // load thumbnail for this taxonomy term (term object)
                    //$thumbnail = get_field('thumbnail', $queried_object);

                    // load thumbnail for this taxonomy term (term string)
                    $thumbnail = get_field('category_image', $taxonomy . '_' . $term_id);

                    echo var_dump($thumbnail);

                    $test_text = get_field('random_text', $taxonomy . '_' . $term_id);

                    echo var_dump($test_text);
                
                ?>

                 <img src="<?php echo $thumbnail['url']; ?>" class="img-responsive">

                    <div>
                        <?php

                            $parent_cat = get_category_by_slug( 'portfolio' );

                            $cats = get_categories();

                            foreach( $cats as $category){

                                if (cat_is_ancestor_of( $parent_cat, $category )) : ?>

                                    <div class="col-sm-4 port-gallery__item">
                                        <figure class="port-gallery__item__thumbnail">

                                            <?php $image = get_field('category_image', $category); ?>

                                            <img src="<?php echo $image['url']; ?>" class="img-responsive">

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