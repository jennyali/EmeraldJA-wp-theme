
	
<?php /* Category Portolio - For Portfolio Page */ ?>

<?php //# Full Page no sidebar // ?>

<?php get_header(); ?>

    <div class="container">
        <main class="row">

            <section class="col-sm-12">

                <h2><?php single_cat_title(); ?></h2>
                


                <ul>
                <?php wp_list_categories( array(
                    'orderby'            => 'id',
                    'show_count'         => true,
                    'use_desc_for_title' => false,
                    'child_of'           => 7
                ) ); ?>
                </ul>

                01
    <?php
    if (is_category()) {
    $this_category = get_category($cat);
    }
    ?>
    <?php
    if($this_category->category_parent)
    $this_category = wp_list_categories('orderby=id&show_count=0
    &title_li=&use_desc_for_title=1&child_of='.$this_category->category_parent.
    "&echo=0"); else
    $this_category = wp_list_categories('orderby=id&depth=1&show_count=0
    &title_li=&use_desc_for_title=1&child_of='.$this_category->cat_ID.
    "&echo=0");

    if ($this_category) { ?>
<ul>

<?php echo $this_category; ?>
</ul>
<?php } ?>






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