
	
<?php /* Template Name: Portfolio Page */ ?>

<?php //# Full Page no sidebar // ?>

<?php
    if (function_exists('category_image_src')) {
        $category_image = category_image_src( array( 'size' => 'full' ) , false ); 
    } else {
        $category_image = '';
    }
?>

<?php get_header(); ?>

    <div class="container">
        <main class="row">

            <section class="col-sm-12">

                <h2><?php the_title(); ?></h2>
                
                    <div>
                        <?php

                            $parent_cat = get_category_by_slug( 'portfolio' );

                            $cats = get_categories();

                            foreach( $cats as $category){

                                if (cat_is_ancestor_of( $parent_cat, $category )) : ?>

                                    <p><?php echo $category->name; ?></p>
                                    <?php echo category_description($category); ?>

                                    <?php echo $category_image; ?>

                                    
                                    <?php if ($category_image) : ?>

                                    <!-- category featured image -->
                                    <img src="<?php echo $category_image; ?>" alt="<?php single_cat_title();?>" desc="<?php echo wp_strip_all_tags( category_description() );?>"/>

                                    <?php endif; ?>

                                <?php endif; 
                            }
                        ?>
                    </div>






            <!-- PORTFOLIO GALLERY
            =======================================================================-->

                <section id="portfolio-page__gallery" class="gallery-section">
                    <div class="container">

                            <div class="row port-gallery">

                                <div class="col-sm-4 port-gallery__item">
                                    <figure class="port-gallery__item__thumbnail">

                                        <img src="assets/green-image-1-crop.jpeg" class="img-responsive">

                                    </figure><!-- .port-gallery__item__thumbnail -->

                                    <div class="port-gallery__item__text">
                                        <a href="archive-page.html"><h4>Category</h4></a>

                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ligula erat, 
                                            lobortis et risus in, suscipit sagittis metus. lobortis et risus in, suscipit sagittis metus.
                                        </p>
                                    </div><!-- .port-gallery__item__text -->
                                </div><!-- .port-gallery__item -->



                                <!-- ****** REPEATED POSTS ******** -->



                                <div class="col-sm-4 port-gallery__item">
                                    <figure class="port-gallery__item__thumbnail">

                                        <img src="assets/green-image-2.jpeg" class="img-responsive">

                                    </figure><!-- .port-gallery__item__thumbnail -->

                                    <div class="port-gallery__item__text">
                                        <h4>Category</h4>

                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ligula erat, 
                                            lobortis et risus in, suscipit sagittis metus. lobortis et risus in, suscipit sagittis metus.
                                        </p>
                                    </div><!-- .port-gallery__item__text -->
                                </div><!-- .port-gallery__item -->


                                <div class="col-sm-4 port-gallery__item">
                                    <figure class="port-gallery__item__thumbnail">

                                        <img src="assets/green-image-1.jpeg" class="img-responsive">

                                    </figure><!-- .port-gallery__item__thumbnail -->

                                    <div class="port-gallery__item__text">
                                        <h4>Category</h4>

                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ligula erat, 
                                            lobortis et risus in, suscipit sagittis metus. lobortis et risus in, suscipit sagittis metus.
                                        </p>
                                    </div><!-- .port-gallery__item__text -->
                                </div><!-- .port-gallery__item -->

                                <div class="clearfix"></div>

                                <div class="col-sm-4 port-gallery__item">
                                    <figure class="port-gallery__item__thumbnail">

                                        <img src="assets/green-image-2.jpeg" class="img-responsive">

                                    </figure><!-- .port-gallery__item__thumbnail -->

                                    <div class="port-gallery__item__text">
                                        <h4>Category</h4>

                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ligula erat, 
                                            lobortis et risus in, suscipit sagittis metus. lobortis et risus in, suscipit sagittis metus.
                                        </p>
                                    </div><!-- .port-gallery__item__text -->
                                </div><!-- .port-gallery__item -->

                            </div><!-- .portfolio-container -->

                        </div><!-- .row -->

                    </div><!-- .container -->
                </section><!-- #home_portfolio -->


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