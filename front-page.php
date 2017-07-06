<?php
/**
 * This is template is for the front page of the site the user sees.
 *
 *
 * @package EmeraldJA
 */

get_header(); ?>

<!-- HERO - Slider
=======================================================================-->

    <?php get_template_part( 'template-parts/page/content', 'hero-slider' ); ?>


<!-- FEATURES
=======================================================================-->
    <section id="home_features" class="features-section">
        <div class="container">

            <div class="row">
                <div class="col-sm-12 headline">

                    <h2>Driving emerald greatness</h2>

                    <p>The foremost source for everything emerald</p>

                    <div class="headline__divider">
                        <hr>
                    </div>

                </div><!-- .headline -->
            </div><!-- .row -->

            <div class="row features-container">

                <div class="col-sm-4 feature">
                    <div class="feature__content">

                        <img src="assets/frog-1.png">
                        <h4>The emerald maniacs</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ligula erat, 
                            lobortis et risus in, suscipit sagittis metus.
                        </p>

                    </div><!-- .feature__content -->
                </div><!-- .col .feature -->

                <div class="col-sm-4 feature">
                    <div class="feature__content">

                        <img src="assets/frog-1.png">
                        <h4>The emerald maniacs</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ligula erat, 
                            lobortis et risus in, suscipit sagittis metus.
                        </p>

                    </div><!-- .feature__content -->
                </div><!-- .col .feature -->

                <div class="col-sm-4 feature">
                    <div class="feature__content">

                        <img src="assets/frog-1.png">
                        <h4>The emerald maniacs</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ligula erat, 
                            lobortis et risus in, suscipit sagittis metus.
                        </p>

                    </div><!-- .feature__content -->
                </div><!-- .col .feature -->

            </div><!-- .row -->

        </div><!-- .container -->
    </section><!-- #home_features .features-section -->

<!-- PORTFOLIO
=======================================================================-->
    <section id="home_portfolio" class="portfolio-section">
        <div class="container">

            <div class="row">
                <div class="col-sm-12 headline">

                    <h2>My Portfolio</h2>

                    <div class="headline__divider">
                        <hr>
                    </div>

                </div><!-- .headline -->
            </div><!-- .row -->

            <div class="row">

                <div class="col-sm-12 navbar-custom-1">
                    <nav class="navbar navbar-default navbar-links--highlight">
                    
                        <ul class="nav navbar-nav">
                            <li><a href="#"><span class=""></span>Untitled</a></li>
                            <li><a href="#"><span class=""></span>Untitled</a></li>
                            <li><a href="#"><span class=""></span>Untitled</a></li>
                            <li><a href="#"><span class=""></span>Untitled</a></li>
                        </ul>

                    </nav><!-- .navbar -->
                </div><!-- .navbar-custom-1 -->

                <div class="col-sm-12 portfolio-container masonry-layout">
                    <div class="masonry-layout__panel">
                        <div class="portfolio-item masonry-layout__panel-content">

                            <img src="assets/green-image-1-crop.jpeg" class="img-responsive">

                            <div class="portfolio-item__overlay">
                                <a href="single-portfolio-post.html">
                                    <h4>Untitled<span class="icon-arrow-68 btn-custom-3" ></span></h4>
                                </a>
                            </div><!-- .portfolio-item__overlay -->

                        </div><!-- .masonry-layout__panel-content -->
                    </div><!-- .masonry-layout__panel -->

                    <div class="masonry-layout__panel">
                        <div class="portfolio-item masonry-layout__panel-content">
                            <img src="assets/green-image-2.jpeg" class="img-responsive">
                        </div><!-- .masonry-layout__panel-content -->
                    </div><!-- .masonry-layout__panel -->

                    <div class="masonry-layout__panel">
                        <div class="portfolio-item masonry-layout__panel-content">
                            <img src="assets/green-image-3.jpeg" class="img-responsive">
                        </div><!-- .masonry-layout__panel-content -->
                    </div><!-- .masonry-layout__panel -->

                    <div class="masonry-layout__panel">
                        <div class="portfolio-item masonry-layout__panel-content">
                            <img src="assets/green-image-2.jpeg" class="img-responsive">
                        </div><!-- .masonry-layout__panel-content -->
                    </div><!-- .masonry-layout__panel -->

                    <div class="masonry-layout__panel">
                        <div class="portfolio-item masonry-layout__panel-content">
                            <img src="assets/green-image-3-crop.jpeg" class="img-responsive">
                        </div><!-- .masonry-layout__panel-content -->
                    </div><!-- .masonry-layout__panel -->

                    <div class="masonry-layout__panel">
                        <div class="portfolio-item masonry-layout__panel-content">
                            <img src="assets/green-image-1-crop.jpeg" class="img-responsive">
                        </div><!-- .masonry-layout__panel-content -->
                    </div><!-- .masonry-layout__panel -->

                    <div class="masonry-layout__panel">
                        <div class="portfolio-item masonry-layout__panel-content">
                            <img src="assets/green-image-3-crop.jpeg" class="img-responsive">
                        </div><!-- .masonry-layout__panel-content -->
                    </div><!-- .masonry-layout__panel -->

                    <div class="masonry-layout__panel">
                        <div class="portfolio-item masonry-layout__panel-content">
                            <img src="assets/green-image-2.jpeg" class="img-responsive">
                        </div><!-- .masonry-layout__panel-content -->
                    </div><!-- .masonry-layout__panel -->

                    <div class="masonry-layout__panel">
                        <div class="portfolio-item masonry-layout__panel-content">
                            <img src="assets/green-image-1.jpeg" class="img-responsive">
                        </div><!-- .masonry-layout__panel-content -->
                    </div><!-- .masonry-layout__panel -->
                
                </div><!-- .portfolio-container -->

            </div><!-- .row -->

        </div><!-- .container -->
    </section><!-- #home_portfolio -->

<!-- BIO EXCERPT
=======================================================================-->
    <section id="home-bio-excerpt" class="bio-excerpt-section" data-scroll="in-view-animation" >
        <div class="container">
            <div class="row">

                <div class="col-sm-6 column">
                    <img src="assets/green-image-1.jpeg" class="img-responsive">
                </div><!-- .col -->

                <div class="col-sm-6 column">
                    <div class="headline">

                        <h2>My Bio</h2>

                        <div class="headline__divider">
                            <hr>
                        </div>

                    </div><!-- .headline -->

                    <div class="bio-excerpt-section__text">

                        <h6>
                            Ut imperdiet mauris nec ligula bibendum venenatis. Etiam at metus egestas, iaculis nibh non, iaculis 
                            elit. Cras fermentum blandit blandit. Curabitur interdum est a volutpat lobortis.
                        </h6>
                        <p>
                            Integer congue diam ligula, vitae varius ante euismod a. Vivamus imperdiet commodo vestibulum. 
                            Nullam porta urna eu fermentum ullamcorper.
                        </p>

                        <button class="btn btn-default btn-clear">Read More >></button>

                    </div><!-- .bio-excerpt-section__text -->
                </div><!-- .col -->

            </div><!-- .row -->
        </div><!-- .container -->
    </section><!-- .bio-excerpt-section -->


    <!-- FRONT PAGE - PAGE CONTENT
    =======================================================================-->

    <?php the_post(); ?>
        
        <article class="page-content">
            
            <?php the_content(); ?>

        </article><!-- .page-content -->

    <!-- (sidebar possibly)
    =======================================================================-->


<!-- CONTENT END -->

<?php get_footer(); ?>